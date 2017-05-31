# CarHopper Interview, Social Media Lists

## Contents
- [Installation](#Installation)
    - [Laravel Valet](#valet)
- [Overview](#Overview)
   - [Reliance On 'federal_legislators'](#Reliance)
   - [Schema](#Schema)
- [Documentation](#Documentation)
   - [DB Sync Task](#DBSyncTask)
   - [Routing](#Routing)
   - [Necessary Data for Layout views](#viewshare)
   - [Filtering Posts](#FilteringPosts)
- [Considerations](#Considerations)
   - [Metrics](#Metrics)
   - [N+1 Queries](#N1Queries)
   - [Tightly Coupled To Postgres](#Coupling)

<a name="Installation"></a>
## Installation
<a name="Valet"></a>
### Laravel Valet

This project makes the assumption that you are using [Laravel Valet](https://laravel.com/docs/5.4/valet) for your development environment. If you do not have Valet installed, please see any of these fine videos from Laracasts.

- [Laravel Valet is the Bomb](https://laracasts.com/lessons/laravel-valet-is-the-bomb)
- [Setup a Mac Dev Machine From Scratch: Setup Laravel Valet](https://laracasts.com/series/setup-a-mac-dev-machine-from-scratch/episodes/10)
- [Laravel 5.4 From Scratch: Laravel Valet is Your Best Friend](https://laracasts.com/series/laravel-from-scratch-2017/episodes/3)


I use the path `~/Projects/Web` for my laravel sites, so that is the path that will be used for the rest of these instructions

1. cd into your projects directory `CD ~/Projects/Web`
2. Clone this repository `git clone git@github.com:michaeljhopkins/social.git`
3. cd into the project `cd social`
4. create a `.env` file `cp .env.example .env`
5. Edit the new `.env` file and adjust these values specifically
   - DB_DATABASE=social
   - DB_USERNAME=michaelhopkins
6. Install composer dependancies `composer install`
7. Seed the database `php artisan migrate --seed`
8. Visit the site (http://social.dev) in your browser!


<a name="Overview"></a>
## Overview
<a name="Reliance"></a>
### Reliance On 'federal_legislators'

The crux of this application is it's dependancy, on the `federal_legislators` table. The requirements document states that all posts/tweets should be stored forever. However, given that the scrapers are regularly deleting data from the `federal_legislators` table and given the requirements of creating a Robust, Extendable, system that never loses data, a workaround has to exist

The command `php artisan db:sync` will performs several tasks to allow this to happen. Details of this command can be found in the [DB Sync Task](#DBSyncTask) section below.

<a name="Schema"></a>
### Schema

This is the schema diagram for the more robost solution
![](http://i.imgur.com/ybtnHSm.png
)

The definitions are as follows
- **Network** is a specific social media outlet (Facebook, Twitter etc.)
- **Lineup** is a named list of contacts
- **Contact** is an individual person that likely has accounts on social media. Each of these accounts is stored as a row in...
- **Username** which has a foreign keys for `contact_id` and `network_id`
- **Post** is some sort of status update, or tweet, or picture posted by a **Username**, for convenience it also contains the foreign key of `contact_id`

With the current table schema of `federal_legislators` every new social network that is added will require a schema change in production. This is the impotus of breaking apart a person, from their usernames, and which social networks exist. The entire application becomes much more data driven.

<a name="Documentation"></a>
## Documentation

<a name="DBSyncTask"></a>
### Sync DB Task

If the server has been properly configured to run [Laravel's Scheduler](https://laravel.com/docs/5.4/scheduling) (this can be done by adding `* * * * * php /path-to-your-project/artisan schedule:run >> /dev/null 2>&1` to `crontab -e`), then the command `php artisan db:sync` is executed every minute. Here are the details as to what this task does.

1. First it looks in the `federal_legislators` table for any rows that don't exist in the `Contacts` table.
   - Since the `federal_legislators` table doesn't appear to have any timestamps, finding the "new data since last run" required a temparary use table, which found the form of `temp_feds`
2. Any rows that exist in `federal_legislators` but not in `temp_feds` get a new `\Social\Contact()` created for them. as well as the necessary `\Social\Contact()->usernames`
3. Next it runs `TempFed::create()` statements for each new row in the `federal_legislatures` table
4. Finally, it deletes the `Lineup` for Federal Legislators, and recreates the Lineup using the content of the `federal_legislators` table

<a name="Routing"></a>
### Routing

You'll notice routing follows standard conventions for Laravel. Routing for specific Lineups use a slug instead of an id. This is to make sure the user is uneffected by the recration of the **Federal Legislators** lineup.

<a name="viewshare"></a>
### View Share
Given that the nav bar has a drop down of all *Lineups*, and that the filter partial (used in multiple locations) needs a list of all *Networks*, `View::share()` methods have been added to the `\Social\Http\Controllers\Controller::__construct()`

<a name="FilteringPosts"></a>
### Filtering Posts

The process for filtering posts was inspired by Jeffery Ways method of filtering threads in his latest series. But this way of filtering needed to be slightly more robust given the scope of the available values. This is achevied with a form that exists in a partial by appending query parameters to the url. If those parameters exist in the `\Request()` object, then the necessary filters get applied by the `\Social\Filters\PostFilter` class.

<a name="Considerations"></a>
## Considerations

<a name="Metrics"></a>
### Metrics

This code has had a number of different metrics executed against it
- [Blackfire](https://blackfire.io/profiles/5d2d48af-f4ad-4f44-bb37-fbce0d0db360/graph)
- [SensioLabs Insight](https://insight.sensiolabs.com/projects/e64ccbab-447a-4ed0-8506-9eae666ce0bf) : [![SensioLabsInsight](https://insight.sensiolabs.com/projects/e64ccbab-447a-4ed0-8506-9eae666ce0bf/small.png)](https://insight.sensiolabs.com/projects/e64ccbab-447a-4ed0-8506-9eae666ce0bf)
- [PhpMetrics](http://www.phpmetrics.org/) : The results of this can be viewed in at `/PhpMetrics/index.html`. A preview below
![](http://i.imgur.com/RIj2Wc9.png)
- [Sonarqube](https://sonarqube.org)
![](http://i.imgur.com/tfr9UND.png)
![](http://i.imgur.com/RaokMGt.png)


<a name="N1Queries"></a>
### N+1 Queries
All views have been refactored so that no n+1 queries exist, ensuring that increasing scale wont exponentially hurt the application

<a name="Coupling"></a>
### Tightly Coupled To Postgres
This is the `\Social\Console\Commands\SyncFedLegTableToContacts::getDiffOfFedLegAndTempLeg()` method.
```php
public function getDiffOfFedLegAndTempLeg(){
        $result = DB::select(DB::raw('
        SELECT first_name,last_name,facebook_id,twitter_username 
        FROM federal_legislators 
        EXCEPT 
        SELECT first_name,last_name,facebook_id,twitter_username FROM temp_feds'));
        return collect($result);
    }
```
Given more time I would have figured out how to write this with Eloquent. However, in it's current state, this raw query means that the software can only be used with a postgres datastore.

