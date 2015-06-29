@extends('default')

@section('title','Notes')
@section('titre-entete','Notes')

@include('default.top-nav')
@include('default.left-nav')

@section('menu')

	<div id="navbar-action" class="navbar-collapse collapse navbar-righ" style="padding-left:0px;">
		<div class="navbar-form navbar-left" style="padding-left:0px;" >
			<a class="btn btn-default btn-smenu-position" href="{{ route('notes.index')}}" role="button">
				<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Retour
			</a>
		</div>
		  	
		  	<div class="navbar-form navbar-left" style="padding-left:0px;" >
			<a class="btn btn-warning btn-smenu-position" href="{{ route('notes.edit',[$note->id])}}" role="button">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Modifier | Mise à jour
			</a
		</div>
	</div>
@stop

@section('content')



<table class=" table-noborder-top  table-contact table">
			<th><td><span class="head-title">Détail de la note</span></td></th>
			
			<tr> 
	  			<td><span class="title-note">Titre de la note</span></td>
	  			<td><span class="info">{{ $note->nom }}</span></td>
	  		</tr>
	  		
	  		<tr> 
	  			<td><span class="title-note">Catégorie</span></td>
	  			<td><span class="info">{{ $note->categorie }}</span></td>
	  		</tr>

	  		<tr> 
	  			<td><span class="title-note">Type</span></td>
	  			<td><span class="info">{{ $note->type }}</span></td>
	  		</tr>

	  		<tr> 
	  			<td><span class="title-note">Attribué à</span></td>
	  			<td><span class="info">{{ $note->id_user_destination }}</span></td>
	  		</tr>

	  		<tr> 
	  			<td><span class="title-note">Echéance</span></td>
	  			<td><span class="info">{{ $note->echeance }}</span></td>
	  		</tr>
	  	
	  			<td><span class="title-note">Description</span></td>
	  			<td><span class="info">{{ $note->designation }}</span></td>
	  		</tr>
	</table>
					

@stop
