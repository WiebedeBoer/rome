<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//home
Route::get('/home', 'HomeController@index')->name('home');

//news
Route::get('news', 'NewsController@index');
Route::get('rules', 'NewsController@rules');
Route::get('terms', 'NewsController@terms');
Route::get('privacy', 'NewsController@privacy');
//users account
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::patch('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');

//manual
Route::get('manual', 'ManualController@index');

//forum
//forum main
Route::get('forum', 'ForumController@index');
//forum thread
Route::get('forum/create','ForumController@create');
Route::post('forum','ForumController@store');
Route::get('forum/thread/{thread}', 'ForumController@thread');
Route::delete('forum/{thread}', 'ForumController@destroy');
//forum post
Route::get('forum/{forum}/edit', 'ForumController@edit');
Route::patch('forum/{forum}', 'ForumController@update');
//subforum
Route::get('forum/open','ForumController@open');
Route::get('forum/tavern','ForumController@tavern');
Route::get('forum/intro','ForumController@intro');
Route::get('forum/faction','ForumController@faction');
Route::get('forum/region','ForumController@region');
Route::get('forum/war','ForumController@war');

//gameplay
//chronicles
Route::get('chronicles', 'ChronicleController@index');
//towns
Route::get('towns', 'TownController@index');
Route::get('towns/{towns}', 'TownController@show');
Route::get('towns/{towns}/edit', 'TownController@edit');
Route::patch('towns/{towns}', 'TownController@update');
//town maps
Route::get('mappopulation','TownController@mappopulation');
Route::get('mapculture','TownController@mapculture');
Route::get('mapclimate','TownController@mapclimate');
Route::get('maparchitecture','TownController@maparchitecture');
//buildings maps
Route::get('maptemple','TownController@maptemple');
Route::get('mapbath','TownController@mapbath');
Route::get('maplibrary','TownController@maplibrary');
Route::get('maptheatre','TownController@maptheatre');
Route::get('mapamphitheatre','TownController@mapamphitheatre');
Route::get('maprace','TownController@maprace');
//maps food
Route::get('mapstaples','TownController@mapstaples');
Route::get('mapfruit','TownController@mapfruit');
Route::get('mapgrapes','TownController@mapgrapes');
Route::get('mapolives','TownController@mapolives');
Route::get('maphoney','TownController@maphoney');
//maps animals
Route::get('mappack','TownController@mappack');
Route::get('mapcattle','TownController@mapcattle');
Route::get('mapwool','TownController@mapwool');
Route::get('mappig','TownController@mappig');
Route::get('mappoultry','TownController@mappoultry');
Route::get('maprabbit','TownController@maprabbit');
Route::get('mapfish','TownController@mapfish');
Route::get('mapgame','TownController@mapgame');
//maps raw
Route::get('mappottery','TownController@mappottery');
Route::get('maptimber','TownController@maptimber');
Route::get('mapmarble','TownController@mapmarble');
//maps metals
Route::get('maptin','TownController@maptin');
Route::get('mapcopper','TownController@mapcopper');
Route::get('mapiron','TownController@mapiron');
Route::get('mapgold','TownController@mapgold');
Route::get('mapsilver','TownController@mapsilver');
//maps products
Route::get('mapdye','TownController@mapdye');
Route::get('mappapyrus','TownController@mappapyrus');
Route::get('mapglass','TownController@mapglass');
//maps caravans
Route::get('mapsilk','TownController@mapsilk');
Route::get('mapspice','TownController@mapspice');
Route::get('mapincense','TownController@mapincense');
Route::get('mapivory','TownController@mapivory');
//persons
Route::get('persons', 'PersonController@index');
Route::get('persons/create','PersonController@create');
Route::post('persons','PersonController@store');
Route::get('persons/{person}', 'PersonController@show');
Route::get('persons/{person}/edit', 'PersonController@edit');
Route::delete('persons/{person}', 'PersonController@destroy');
Route::patch('persons/{person}', 'PersonController@update');
//realms
Route::get('realms', 'RealmController@index');
Route::get('realms/create','RealmController@create');
Route::post('realms','RealmController@store');
Route::get('realms/{realms}', 'RealmController@show');
Route::get('realms/{realms}/edit', 'RealmController@edit');
Route::delete('realms/{realms}', 'RealmController@destroy');
Route::patch('realms/{realms}', 'RealmController@update');
