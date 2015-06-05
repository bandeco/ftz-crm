<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	//
	protected $guarded = ['timestamps'];
	
	public function societe(){

		return $this->belongsTo('App\Societe');
	}
}
