<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
header('Access-Control-Allow-Origin:*');

header('Access-Control-Allow-Methods:GET, POST, PUT, DELETE, OPTIONS');

header('Access-Control-Allow-Headers:Origin, Content-Type, Accept, Authorization, X-Requested-With');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/animals/','AnimalController@index');
Route::get('/animals/{id}','AnimalController@show');
Route::post('/animals','AnimalController@store');
Route::put('/animals/{id}','AnimalController@update');
Route::post('/animals/{id}','AnimalController@destroy');

Route::get('/species/','SpeciesController@index');
Route::get('/species/{id}','SpeciesController@show');
Route::post('/species','SpeciesController@store');
Route::put('/species/{id}','SpeciesController@update');
Route::post('/species/{id}','SpeciesController@destroy');

Route::get('/uncatalogued/','UncataloguedAnimalController@index');

Route::get('/animalstatus/','StatusAnimalController@index');
Route::post('/animalstatus','StatusAnimalController@store');

Route::get('/lostanimal/','LostAnimalController@index');
Route::get('/adoptions/','AdoptionsAnimalController@index');
Route::get('/adopted/','AdoptedAnimalController@index');
Route::get('/valoration/','ValorationAnimalController@index');

Route::get('/profileimage/{pname}','ProfileImageController@downloadImage');

Route::get('/vets/','VetController@index');
Route::post('/vets','VetController@store');

Route::get('/medicalobs/','MedicalObservationController@index');
Route::post('/medicalobs','MedicalObservationController@store');

Route::get('/volunteers/','VolunteerController@index');
Route::post('/volunteers','VolunteerController@store');

Route::get('/behaviorobs/','BehaviorObservationController@index');
Route::post('/behaviorobs','BehaviorObservationController@store');