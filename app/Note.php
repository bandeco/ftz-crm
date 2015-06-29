<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

	protected $fillable = array('nom','id_user_destination','id_user_redacteur','categorie','echeance','idcontact','type','designation','etat');

}
