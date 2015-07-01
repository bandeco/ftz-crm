@extends('default')


@if($grille==2)
	@section('title','Groupe CRM')
	@section('titre-entete','Groupe(s) CRM')
@else
	@section('title','Contact')
	@section('titre-entete','Contact')
@endif

@include('default.top-nav')
@include('default.left-nav')

@include('contact.bar-menu')

@section('content')
		
	@if($grille==0 && !isset($results))
		@include('contact.affichage-liste-contact')
	@elseif(isset($grille) &&$grille==1 && !isset($results))
		@include('contact.affichage-grille-contact')
	@elseif($grille==2 && !isset($results))
		@include('contact.group-crm')
	@elseif(isset($results))
		@include('contact.contact-research')
	@endif

	<div class="col-md-3 content-sidebar" >
			<!-- GROUPE CRM  -->
			<div class="col-md-12">
				<p>Groupe CRM</p>
			</div>
			<div class="col-md-12">
				<a href="{{ route('groupe.create')}}">
					<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> Nouveau Groupe CRM
				</a>
			</div>	
			<div class="col-md-12">
				<a href="{{ route('groupe.index')}}">
					<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Liste Groupe CRM
				</a>
			</div>		
			<!-- IMPORTATION / EXPORTATION -->
			<div class="col-md-12">
				<br/>
				<p>Importer / Exporter</p>
			</div>
			<div class="col-md-12">
				<a href="{{ route('import.index')}}">
					<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> Importer des contacts
				</a>
			</div>	
			<div class="col-md-12">
				<a href="{{ route('export.index')}}">
					<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Exporter des contacts
				</a>
			</div>											
	</div>
	<a href="#" id="test">Test Link</a>

@stop


@section('script')

jQuery(function($){
	$('#test').click(function(){
			alert('TEST');
		});
});

@stop




