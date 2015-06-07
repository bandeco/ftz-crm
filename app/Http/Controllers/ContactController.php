<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Requests\CreateSocieteRequest;
use App\Http\Requests\CreateContactRequest;
use App\Http\Controllers\Controller;

use App\Societe;
use App\Contact;
use App\Http\Controllers\Pays;

use Illuminate\Http\Request;
use Illuminate\Html\FormFacade;


class ContactController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return ('');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$actif = 'contact';
		return view('contact.create-contact',compact('actif'));
		
	}

		public function creercontact($id)
	{
		$actif = 'contact';
		return view('contact.creer-contact',compact('actif','id'));
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateContactRequest $request)
	{
		$actif ='contact';
		Contact::create($request->all());
		$id = $request->societe_id;
		return  redirect(route('societe.show', $id));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$actif = 'actif';
		$contact = Contact::findOrFail($id);
		
		return view('contact.profil-contact',compact('actif','contact'));
	}

	/**
	 * Display the research results.
	 *
	 * @return Response
	 */
	public function search(Request $request)
	{
		$actif = 'actif';
		$q = $request->input('q');
		
		return ('Hello World '.$q);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$actif ='contact';
		$contact = Contact::findOrFail($id);
		return view('contact.edit-contact',compact('actif','contact'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateContactRequest $request)
	{
		//
		$contact = Contact::findOrFail($id);
		$contact->update($request->all());
		return  redirect(route('contact.show', $id));
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
		$contact = Contact::findOrFail($id);
		$contact->update(['etat'=>0]);
		$id = $contact->societe_id;
		return  redirect(route('societe.show',$id));
	}

}
