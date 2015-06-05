<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model {

	//
	protected $guarded = ['timestamps'];

	public function contact(){

		return $this->HasMany('App\Contact');
	}

}
