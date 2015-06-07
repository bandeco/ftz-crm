@extends('default')


@section('title','Contact')
@section('titre-entete','Contact')

@include('default.top-nav')
@include('default.left-nav')

@include('contact.bar-menu')

@section('content')
	
{{--*/ $grille = 0 /*--}}
	
	@if($grille==1)
		@include('contact.affichage-grille-contact')
	@else
		@include('contact.affichage-liste-contact')
	@endif

	@if(isset($results))
		@include('contact-research')
	@endif

	<div class="col-md-3 content-sidebar" >
			<div class="col-md-12">
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

@stop




