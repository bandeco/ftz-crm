<?php
use App\Societe;
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

Route::post('societe/action',['as'=>'societe.action',function(){
	$data = Request::all();
	
	if(Request::input('supp')){
		if($data['type']== 0){
			foreach ($data as $key => $value) {
				if(substr($key,0,1) == 'c'){
					$profil = Societe::findOrFail($value);
					var_dump($profil);
					dd();
					$profil->update(['etat'=>0]);
				}
				return  redirect(route('societe.index'));
			}
			
		// return  redirect(route('societe.index'));	
		}else{
			return('suppression contact');
		}
	}
	if(Request::input('export')){
		if($data['type']== 0){
			return('export  societe');
		}else{
			return('export contact');
		}
	}
	if(Request::input('add_note')){
		if($data['type']== 0){
			return('note  societe');
		}else{
			return('note contact');
		}
	}

}]);

Route::get('societe/Tri/{tripar}',['as'=>'societe.TriSociete', 'uses'=>'SocieteController@TriSociete']);

Route::get('contact/Tri/{tripar}',['as'=>'contact.TriContact', 'uses'=>'ContactController@TriContact']);

Route::get('societe/suppression/{data}',['as'=>'societe.destroyselect','uses'=>'SocieteController@destroyselect']);

Route::get('contact/search',['as'=>'societe.search','uses'=>'SocieteController@search']);

Route::get('grille','SocieteController@grille');

Route::get('liste','SocieteController@liste');

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
