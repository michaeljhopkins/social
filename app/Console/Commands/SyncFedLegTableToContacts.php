<?php

namespace Social\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Social\Contact;
use Social\TempFed;
use DB;

/**
 * Class SyncFedLegTableToContacts.
 */
class SyncFedLegTableToContacts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Syncs the federal_legislature table into the contacts table';
    protected $createdContacts;

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->createdContacts = new Collection();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $results = $this->getDiffOfFedLegAndTempLeg();
        if ($results->count()) {
            $this->createNecessaryContactsAndUsernames($results);
            $this->recreateTempFeds();
        }
    }

    public function getDiffOfFedLegAndTempLeg()
    {
        $result = DB::select(DB::raw('SELECT first_name,last_name,facebook_id,twitter_username FROM federal_legislators EXCEPT SELECT first_name,last_name,facebook_id,twitter_username FROM temp_feds'));

        return collect($result);
    }

    /**
     * @param $results
     */
    public function createNecessaryContactsAndUsernames(Collection $results)
    {
        $results->each(function ($r) {
            /** @var Contact $c */
            $c = Contact::create([
                'first_name' => $r->first_name,
                'last_name' => $r->last_name,
            ]);
            $c->usernames()->create([
                'identifyer' => $r->facebook_id,
                'network_id' => 1,
            ]);
            $c->usernames()->create([
                'identifyer' => $r->twitter_username,
                'network_id' => 2,
            ]);
            $this->createdContacts->push(Contact::orderBy('id', 'desc')->with('usernames')->first());
        });
    }

    public function recreateTempFeds()
    {
        $this->createdContacts->each(function ($c) {
            /* @var Contact $c */
            TempFed::create([
                'first_name'       => $c->first_name,
                'last_name'        => $c->last_name,
                'facebook_id'      => ($c->usernames->where('network_id', 1)->first()) ? $c->usernames->where('network_id', 1)->first()->identifyer : '',
                'twitter_username' => ($c->usernames->where('network_id', 2)->first()) ? $c->usernames->where('network_id', 2)->first()->identifyer : '',
            ]);
        });
    }
}
