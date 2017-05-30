<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientLineupPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'client_lineup', function ( Blueprint $table ) {
			$table->integer( 'client_id' )->unsigned()->index();
			$table->foreign( 'client_id' )->references( 'id' )->on( 'clients' )->onDelete( 'cascade' );
			$table->integer( 'lineup_id' )->unsigned()->index();
			$table->foreign( 'lineup_id' )->references( 'id' )->on( 'lineups' )->onDelete( 'cascade' );
			$table->primary( [ 'client_id', 'lineup_id' ] );
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop( 'client_lineup' );
	}
}
