@extends('default')

@section('title','Test')
@section('titre-entete','Test')
{{--*/ $actif = 'contact' /*--}}
@include('default.top-nav')
@include('default.left-nav')


@section('content')
	
<a href="#" id="grille">Test Link</a><br/>
<a href="{{ url('/grille') }}" id="grille">Link</a>
<div class="row">
	<div class="col-md-8 result">
		
	</div>
</div>
@stop

@section('script')

jQuery(function($){
	$('#grille').click(function(e){
		e.preventDefault();
			$.get( 'grille',function( data ) {
			  $( ".result" ).html( 'TEST' );
			  console.log(data);
			  alert("Data Loaded: " +   data);
			});
		});
	
});

@stop