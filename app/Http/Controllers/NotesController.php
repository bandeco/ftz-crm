<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Note; 
use DB;

class NotesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$notes= Note::orderBy('updated_at', 'desc')->get();
		$actif ='notes';
		return view('notes.index',compact('notes','actif'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$actif ='notes';
		return view('notes.create',compact('actif'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$actif ='notes';
		$note = Note::create($request->all()); 
		return view('notes.create',compact('actif','note'));

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
		$actif ='notes';
		$note= Note::FindOrFail($id);
		return view('notes.aff_note',compact('note','actif'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$actif ='notes';
		$note= Note::FindOrFail($id);
		return view('notes.edit',compact('note','actif'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$actif ='notes';

		$note= Note::FindOrFail($id);
		$note->update($request->all());
		/* a changer mettre la vue show normalement*/
		return redirect(route('notes.index'));

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
