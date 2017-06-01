<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Social\Client;
use Social\Contact;
use Social\FederalLegislator;
use Social\Lineup;
use Social\Network;
use Social\Post;
use Social\TempFed;
use Social\Username;

$factory->define( Client::class, function ( Faker\Generator $faker ) {
	return [
		'name' => $faker->company
	];
} );

$factory->define(Social\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
	    'client_id' => function(){
		    return factory(Client::class)->create()->id;
	    },
    ];
});

$factory->define( Network::class, function ( Faker\Generator $faker ) {
	return [
		'name' => $faker->company
	];
} );

$factory->define( Contact::class, function ( Faker\Generator $faker ) {
	return [
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName
	];
} );

$factory->define( Username::class, function ( Faker\Generator $faker ) {
	return [
		'identifyer' => $faker->userName,
		'contact_id' => function(){
			return factory(Contact::class)->create()->id;
		},
		'network_id' => function() {
			return factory(Network::class)->create()->id;
		}
	];
} );

$factory->define( Post::class, function ( Faker\Generator $faker ) {
	return [
		'username_id' => function() {
			return factory(Username::class)->create()->id;
		},
		'network_id' => function(){
			return factory(Network::class)->create()->id;
		},
		'contact_id' => function() {
			return factory(Contact::class)->create()->id;
		},
		'content' => $faker->paragraph,
		'permalink' => $faker->url
	];
} );

$factory->define( Lineup::class, function ( Faker\Generator $faker ) {
	return [
		'name' => $faker->words(2,true)
	];
} );

$factory->define( FederalLegislator::class, function ( Faker\Generator $faker ) {
	return [
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'facebook_id' => $faker->userName,
		'twitter_username' => $faker->userName
	];
} );

$factory->define( TempFed::class, function ( Faker\Generator $faker ) {
	return [
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'facebook_id' => $faker->userName,
		'twitter_username' => $faker->userName
	];
} );