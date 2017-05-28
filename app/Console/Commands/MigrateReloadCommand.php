<?php

namespace Social\Console\Commands;

use DB;
use Illuminate\Console\Command;
use Schema;

class MigrateReloadCommand extends Command {

	protected $name = 'migrate:reload';
	protected $description = 'Drop All Tables Systematically.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle() {
		if ( ! \App::environment( 'local' ) && ! $this->option( 'force' ) ) {
			$this->error( 'If you are not in a local environment, you must use the --force option.' );

			return;
		}
		$tables             = DB::select( 'SHOW TABLES' );
		$tables_in_database = 'Tables_in_' . \Config::get( 'database.connections.mysql.database' );
		DB::statement( 'SET FOREIGN_KEY_CHECKS=0;' );
		foreach ( $tables as $table ) {
			Schema::drop( $table->$tables_in_database );
			$this->info( '<info>Dropped: </info>' . $table->$tables_in_database );
		}
		exec( 'composer dump' );
		exec( 'php artisan clear-compiled' );
		exec( 'php artisan migrate --force -vvv', $migrateOutput );
		$this->info( implode( "\n", $migrateOutput ) );
		$this->info( 'Migrated' );
		exec( 'php artisan db:seed --force -vvv', $seedOutput );
		$this->info( implode( "\n", $seedOutput ) );
		$this->info( 'Seeded' );
		DB::statement( 'SET FOREIGN_KEY_CHECKS=1;' );
	}
}
