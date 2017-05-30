<?php

use Illuminate\Database\Seeder;
use Social\Contact;

class ContactsAndUsernamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Brown',
            'first_name' => 'Sherrod',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenSherrodBrown',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Cantwell',
            'first_name' => 'Maria',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatorcantwell',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorCantwell',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Cardin',
            'first_name' => 'Benjamin',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatorbencardin',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorCardin',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Carper',
            'first_name' => 'Thomas',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'tomcarper',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorCarper',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Casey',
            'first_name' => 'Robert',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'SenatorBobCasey',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenBobCasey',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Corker',
            'first_name' => 'Bob',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'bobcorker',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenBobCorker',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Feinstein',
            'first_name' => 'Dianne',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatorfeinstein',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenFeinstein',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Hatch',
            'first_name' => 'Orrin',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatororrinhatch',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenOrrinHatch',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Klobuchar',
            'first_name' => 'Amy',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'McCaskill',
            'first_name' => 'Claire',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatormccaskill',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'McCaskillOffice',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Menéndez',
            'first_name' => 'Robert',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatormenendez',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorMenendez',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Nelson',
            'first_name' => 'Bill',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenBillNelson',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Sanders',
            'first_name' => 'Bernard',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatorsanders',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenSanders',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Stabenow',
            'first_name' => 'Debbie',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenStabenow',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Tester',
            'first_name' => 'Jon',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatortester',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorTester',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Whitehouse',
            'first_name' => 'Sheldon',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'SenatorWhitehouse',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenWhitehouse',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Barrasso',
            'first_name' => 'John',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'johnbarrasso',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenJohnBarrasso',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Wicker',
            'first_name' => 'Roger',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'SenatorWicker',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorWicker',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Alexander',
            'first_name' => 'Lamar',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatorlamaralexander',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenAlexander',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Cochran',
            'first_name' => 'Thad',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenThadCochran',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Collins',
            'first_name' => 'Susan',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'susancollins',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorCollins',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Cornyn',
            'first_name' => 'John',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'sen.johncornyn',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'JohnCornyn',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Durbin',
            'first_name' => 'Richard',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'SenatorDurbin',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorDurbin',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Enzi',
            'first_name' => 'Michael',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'mikeenzi',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorEnzi',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Graham',
            'first_name' => 'Lindsey',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'USSenatorLindseyGraham',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'GrahamBlog',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Inhofe',
            'first_name' => 'James',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'jiminhofe',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'InhofePress',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'McConnell',
            'first_name' => 'Mitch',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'mitchmcconnell',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'McConnellPress',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Merkley',
            'first_name' => 'Jeff',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'jeffmerkley',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenJeffMerkley',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Reed',
            'first_name' => 'John',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'SenJackReed',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenJackReed',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Risch',
            'first_name' => 'James',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorRisch',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Roberts',
            'first_name' => 'Pat',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'SenPatRoberts',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenPatRoberts',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Shaheen',
            'first_name' => 'Jeanne',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'SenatorShaheen',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorShaheen',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Udall',
            'first_name' => 'Tom',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatortomudall',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorTomUdall',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Warner',
            'first_name' => 'Mark',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'MarkRWarner',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'MarkWarner',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Gillibrand',
            'first_name' => 'Kirsten',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'KirstenGillibrand',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenGillibrand',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Franken',
            'first_name' => 'Alan',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatoralfranken',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenFranken',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Coons',
            'first_name' => 'Chris',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatorchriscoons',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenCoonsOffice',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Manchin',
            'first_name' => 'Joe',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'JoeManchinIII',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'Sen_JoeManchin',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Aderholt',
            'first_name' => 'Robert',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'RobertAderholt',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'Robert_Aderholt',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Amash',
            'first_name' => 'Justin',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'repjustinamash',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Baldwin',
            'first_name' => 'Tammy',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senatortammybaldwin',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenatorBaldwin',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Barletta',
            'first_name' => 'Lou',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'CongressmanLouBarletta',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'RepLouBarletta',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Barton',
            'first_name' => 'Joe',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'RepJoeBarton',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'RepJoeBarton',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Bass',
            'first_name' => 'Karen',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'RepKarenBass',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'RepKarenBass',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Bennet',
            'first_name' => 'Michael',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'senbennetco',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SenBennetCo',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Bilirakis',
            'first_name' => 'Gus',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'GusBilirakis',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'RepGusBilirakis',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Bishop',
            'first_name' => 'Rob',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'RepRobBishop',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'RepRobBishop',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Bishop',
            'first_name' => 'Sanford',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'sanfordbishop',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'SanfordBishop',
        ]);

        /** @var \Social\Contact $c * */
        $c = Contact::create([
            'last_name'  => 'Black',
            'first_name' => 'Diane',
        ]);
        $c->usernames()->create([
            'network_id' => 2,
            'identifyer' => 'DianeBlackTN06',
        ]);
        $c->usernames()->create([
            'network_id' => 1,
            'identifyer' => 'RepDianeBlack',
        ]);

        Contact::all()->each(function ($contact) {
            $contact->usernames()->create(['identifyer' => 'insta-'.$contact->first_name.'-'.$contact->last_name, 'network_id' => 3]);
        });
    }
}
