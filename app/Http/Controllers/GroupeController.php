<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateGroupeRequest;
use App\Http\Controllers\Controller;

use App\Groupe;
use App\Societe;

use Illuminate\Http\Request;

class GroupeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$actif = 'contact';
		$groupe = Groupe::where('etat',1)->get();
		$type = 2;
		return view('contact.contact',compact('actif','type','groupe'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$actif = 'contact'; 

		return view('contact.create-group-crm',compact('actif'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateGroupeRequest $request)
	{
		//
		Groupe::create($request->all());
		return redirect('groupe');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$societe = Groupe::findOrFail($id)->societe()->select('nom_clt','pays_clt','ville_siege_clt')->where('etat',1)->get();
		$actif = 'contact';
		$type = 0;
		return view('contact.contact', compact('actif','societe','type'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
