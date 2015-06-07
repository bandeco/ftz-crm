<?php namespace App; 

use Illuminate\Database\Eloquent\Model;

use  SearchIndex;

class Societe extends Model {

	//
	protected $guarded = ['timestamps'];

	public function contact(){

		return $this->HasMany('App\Contact');
	}

	/**
     * Returns an array with properties which must be indexed
     *
     * @return array
     */
    public function getSearchableBody()
    {
        $searchableProperties = [
            'name' => $this->name,
            'brand' => $this->brand->name,
            'category' => $this->category->name
        ];

        return $searchableProperties;

    }

}
