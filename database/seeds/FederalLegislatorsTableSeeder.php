<?php

use Illuminate\Database\Seeder;

class FederalLegislatorsTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{


		\DB::table('federal_legislators')->delete();

		\DB::table('federal_legislators')->insert(array (
			0 =>
				array (
					'first_name' => 'Sherrod',
					'last_name' => 'Brown',
					'facebook_id' => 'fb-Sherrod-Brown',
					'twitter_username' => 'tw-Sherrod-Brown',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			1 =>
				array (
					'first_name' => 'Maria',
					'last_name' => 'Cantwell',
					'facebook_id' => 'fb-Maria-Cantwell',
					'twitter_username' => 'tw-Maria-Cantwell',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			2 =>
				array (
					'first_name' => 'Benjamin',
					'last_name' => 'Cardin',
					'facebook_id' => 'fb-Benjamin-Cardin',
					'twitter_username' => 'tw-Benjamin-Cardin',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			3 =>
				array (
					'first_name' => 'Thomas',
					'last_name' => 'Carper',
					'facebook_id' => 'fb-Thomas-Carper',
					'twitter_username' => 'tw-Thomas-Carper',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			4 =>
				array (
					'first_name' => 'Robert',
					'last_name' => 'Casey',
					'facebook_id' => 'fb-Robert-Casey',
					'twitter_username' => 'tw-Robert-Casey',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			5 =>
				array (
					'first_name' => 'Bob',
					'last_name' => 'Corker',
					'facebook_id' => 'fb-Bob-Corker',
					'twitter_username' => 'tw-Bob-Corker',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			6 =>
				array (
					'first_name' => 'Dianne',
					'last_name' => 'Feinstein',
					'facebook_id' => 'fb-Dianne-Feinstein',
					'twitter_username' => 'tw-Dianne-Feinstein',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			7 =>
				array (
					'first_name' => 'Orrin',
					'last_name' => 'Hatch',
					'facebook_id' => 'fb-Orrin-Hatch',
					'twitter_username' => 'tw-Orrin-Hatch',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			8 =>
				array (
					'first_name' => 'Amy',
					'last_name' => 'Klobuchar',
					'facebook_id' => 'fb-Amy-Klobuchar',
					'twitter_username' => 'tw-Amy-Klobuchar',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			9 =>
				array (
					'first_name' => 'Claire',
					'last_name' => 'McCaskill',
					'facebook_id' => 'fb-Claire-McCaskill',
					'twitter_username' => 'tw-Claire-McCaskill',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			10 =>
				array (
					'first_name' => 'Robert',
					'last_name' => 'Menéndez',
					'facebook_id' => 'fb-Robert-Menéndez',
					'twitter_username' => 'tw-Robert-Menéndez',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			11 =>
				array (
					'first_name' => 'Bill',
					'last_name' => 'Nelson',
					'facebook_id' => 'fb-Bill-Nelson',
					'twitter_username' => 'tw-Bill-Nelson',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			12 =>
				array (
					'first_name' => 'Bernard',
					'last_name' => 'Sanders',
					'facebook_id' => 'fb-Bernard-Sanders',
					'twitter_username' => 'tw-Bernard-Sanders',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			13 =>
				array (
					'first_name' => 'Debbie',
					'last_name' => 'Stabenow',
					'facebook_id' => 'fb-Debbie-Stabenow',
					'twitter_username' => 'tw-Debbie-Stabenow',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			14 =>
				array (
					'first_name' => 'Jon',
					'last_name' => 'Tester',
					'facebook_id' => 'fb-Jon-Tester',
					'twitter_username' => 'tw-Jon-Tester',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			15 =>
				array (
					'first_name' => 'Sheldon',
					'last_name' => 'Whitehouse',
					'facebook_id' => 'fb-Sheldon-Whitehouse',
					'twitter_username' => 'tw-Sheldon-Whitehouse',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			16 =>
				array (
					'first_name' => 'John',
					'last_name' => 'Barrasso',
					'facebook_id' => 'fb-John-Barrasso',
					'twitter_username' => 'tw-John-Barrasso',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			17 =>
				array (
					'first_name' => 'Roger',
					'last_name' => 'Wicker',
					'facebook_id' => 'fb-Roger-Wicker',
					'twitter_username' => 'tw-Roger-Wicker',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			18 =>
				array (
					'first_name' => 'Lamar',
					'last_name' => 'Alexander',
					'facebook_id' => 'fb-Lamar-Alexander',
					'twitter_username' => 'tw-Lamar-Alexander',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			19 =>
				array (
					'first_name' => 'Thad',
					'last_name' => 'Cochran',
					'facebook_id' => 'fb-Thad-Cochran',
					'twitter_username' => 'tw-Thad-Cochran',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			20 =>
				array (
					'first_name' => 'Susan',
					'last_name' => 'Collins',
					'facebook_id' => 'fb-Susan-Collins',
					'twitter_username' => 'tw-Susan-Collins',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			21 =>
				array (
					'first_name' => 'John',
					'last_name' => 'Cornyn',
					'facebook_id' => 'fb-John-Cornyn',
					'twitter_username' => 'tw-John-Cornyn',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			22 =>
				array (
					'first_name' => 'Richard',
					'last_name' => 'Durbin',
					'facebook_id' => 'fb-Richard-Durbin',
					'twitter_username' => 'tw-Richard-Durbin',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			23 =>
				array (
					'first_name' => 'Michael',
					'last_name' => 'Enzi',
					'facebook_id' => 'fb-Michael-Enzi',
					'twitter_username' => 'tw-Michael-Enzi',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			24 =>
				array (
					'first_name' => 'Lindsey',
					'last_name' => 'Graham',
					'facebook_id' => 'fb-Lindsey-Graham',
					'twitter_username' => 'tw-Lindsey-Graham',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			25 =>
				array (
					'first_name' => 'James',
					'last_name' => 'Inhofe',
					'facebook_id' => 'fb-James-Inhofe',
					'twitter_username' => 'tw-James-Inhofe',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			26 =>
				array (
					'first_name' => 'Mitch',
					'last_name' => 'McConnell',
					'facebook_id' => 'fb-Mitch-McConnell',
					'twitter_username' => 'tw-Mitch-McConnell',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			27 =>
				array (
					'first_name' => 'Jeff',
					'last_name' => 'Merkley',
					'facebook_id' => 'fb-Jeff-Merkley',
					'twitter_username' => 'tw-Jeff-Merkley',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			28 =>
				array (
					'first_name' => 'John',
					'last_name' => 'Reed',
					'facebook_id' => 'fb-John-Reed',
					'twitter_username' => 'tw-John-Reed',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			29 =>
				array (
					'first_name' => 'James',
					'last_name' => 'Risch',
					'facebook_id' => 'fb-James-Risch',
					'twitter_username' => 'tw-James-Risch',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			30 =>
				array (
					'first_name' => 'Pat',
					'last_name' => 'Roberts',
					'facebook_id' => 'fb-Pat-Roberts',
					'twitter_username' => 'tw-Pat-Roberts',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			31 =>
				array (
					'first_name' => 'Jeanne',
					'last_name' => 'Shaheen',
					'facebook_id' => 'fb-Jeanne-Shaheen',
					'twitter_username' => 'tw-Jeanne-Shaheen',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			32 =>
				array (
					'first_name' => 'Tom',
					'last_name' => 'Udall',
					'facebook_id' => 'fb-Tom-Udall',
					'twitter_username' => 'tw-Tom-Udall',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			33 =>
				array (
					'first_name' => 'Mark',
					'last_name' => 'Warner',
					'facebook_id' => 'fb-Mark-Warner',
					'twitter_username' => 'tw-Mark-Warner',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			34 =>
				array (
					'first_name' => 'Kirsten',
					'last_name' => 'Gillibrand',
					'facebook_id' => 'fb-Kirsten-Gillibrand',
					'twitter_username' => 'tw-Kirsten-Gillibrand',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			35 =>
				array (
					'first_name' => 'Alan',
					'last_name' => 'Franken',
					'facebook_id' => 'fb-Alan-Franken',
					'twitter_username' => 'tw-Alan-Franken',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			36 =>
				array (
					'first_name' => 'Chris',
					'last_name' => 'Coons',
					'facebook_id' => 'fb-Chris-Coons',
					'twitter_username' => 'tw-Chris-Coons',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			37 =>
				array (
					'first_name' => 'Joe',
					'last_name' => 'Manchin',
					'facebook_id' => 'fb-Joe-Manchin',
					'twitter_username' => 'tw-Joe-Manchin',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			38 =>
				array (
					'first_name' => 'Robert',
					'last_name' => 'Aderholt',
					'facebook_id' => 'fb-Robert-Aderholt',
					'twitter_username' => 'tw-Robert-Aderholt',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			39 =>
				array (
					'first_name' => 'Justin',
					'last_name' => 'Amash',
					'facebook_id' => 'fb-Justin-Amash',
					'twitter_username' => 'tw-Justin-Amash',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			40 =>
				array (
					'first_name' => 'Tammy',
					'last_name' => 'Baldwin',
					'facebook_id' => 'fb-Tammy-Baldwin',
					'twitter_username' => 'tw-Tammy-Baldwin',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			41 =>
				array (
					'first_name' => 'Lou',
					'last_name' => 'Barletta',
					'facebook_id' => 'fb-Lou-Barletta',
					'twitter_username' => 'tw-Lou-Barletta',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			42 =>
				array (
					'first_name' => 'Joe',
					'last_name' => 'Barton',
					'facebook_id' => 'fb-Joe-Barton',
					'twitter_username' => 'tw-Joe-Barton',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			43 =>
				array (
					'first_name' => 'Karen',
					'last_name' => 'Bass',
					'facebook_id' => 'fb-Karen-Bass',
					'twitter_username' => 'tw-Karen-Bass',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			44 =>
				array (
					'first_name' => 'Michael',
					'last_name' => 'Bennet',
					'facebook_id' => 'fb-Michael-Bennet',
					'twitter_username' => 'tw-Michael-Bennet',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			45 =>
				array (
					'first_name' => 'Gus',
					'last_name' => 'Bilirakis',
					'facebook_id' => 'fb-Gus-Bilirakis',
					'twitter_username' => 'tw-Gus-Bilirakis',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			46 =>
				array (
					'first_name' => 'Rob',
					'last_name' => 'Bishop',
					'facebook_id' => 'fb-Rob-Bishop',
					'twitter_username' => 'tw-Rob-Bishop',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			47 =>
				array (
					'first_name' => 'Sanford',
					'last_name' => 'Bishop',
					'facebook_id' => 'fb-Sanford-Bishop',
					'twitter_username' => 'tw-Sanford-Bishop',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
			48 =>
				array (
					'first_name' => 'Diane',
					'last_name' => 'Black',
					'facebook_id' => 'fb-Diane-Black',
					'twitter_username' => 'tw-Diane-Black',
					'created_at' => '2017-05-30 18:33:06',
					'updated_at' => '2017-05-30 18:33:06',
				),
		));


	}
}