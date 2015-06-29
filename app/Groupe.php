<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model {

	//
	protected $guarded = ['timestamps'];

	public function societe(){
		return $this->hasMany('App\Societe');
	}
	
}
