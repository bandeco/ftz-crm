<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSocieteRequest;
use App\Http\Controllers\Controller;

use App\Societe;
use App\Contact;

use Illuminate\Http\Request;

class SocieteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$societe = Societe::where('etat',1)->get();
		$actif = 'contact';
		return view('contact.contact', compact('actif','societe'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$actif='contact';
		return view('contact.create-societe',compact('actif'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateSocieteRequest $request)
	{
		//

		$actif ='contact';
		Societe::create($request->all());
		return redirect('societe');

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
		$actif ='contact';
		$profil = Societe::findOrFail($id);
		$ListContact = Societe::findOrFail($id)->contact()->where('etat',1)->get();
		return view('contact.profil-societe',compact('actif','profil','ListContact'));
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
		$actif ='contact';
		$profil = Societe::findOrFail($id);
		return view('contact.edit-societe',compact('actif','profil'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateSocieteRequest $request)
	{
		//
		$profil = Societe::findOrFail($id);
		$profil->update($request->all());
		return  redirect(route('societe.show', $id));
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
		$profil = Societe::findOrFail($id);
		$profil->update(['etat'=>0]);
		return  redirect(route('societe.index'));
	}

}
