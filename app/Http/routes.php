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

/* Test Page */

Route::get('test',function(){
		return view('test');
	});


/* Home View Route */

Route::get('/','WelcomeController@index');

/* Societe & Contact Views Routes */

Route::get('contact/search',['as'=>'societe.search','uses'=>'SocieteController@search']);

Route::get('societe/grille', function() {
	$actif ='contact';
	$grille = 1;
  return view('contact.contact',compact('actif','grille'));
});

Route::resource('groupe', 'GroupeController');

Route::resource('societe', 'SocieteController');

Route::resource('contact', 'ContactController');

Route::get('{id}/creer-contact',['as'=> 'creer.contact', 'uses'=> 'ContactController@creercontact']);



/* Import & Export Views Routes */

Route::get('import/google',['as'=>'import.google','uses'=>'ImportController@ImportGoogleContact']);

Route::resource('import','ImportController');

Route::resource('export','ExportController');




/* Note Views Routes */

Route::resource('notes','NotesController');

/* Agenda Views Routes */

Route::resource('agenda','AgendaController');

/* Gescom Views Routes */

Route::resource('gescom','GescomController');

/* Rapport Views Routes */

Route::resource('rapport','RapportController');

/* Login View Route */

Route::get('home', 'HomeController@index');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
