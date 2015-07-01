@extends('default')

@section('title','Test')
@section('titre-entete','Test')
{{--*/ $actif = 'contact' /*--}}
@include('default.top-nav')
@include('default.left-nav')


@section('content')
	
<a href="#" id="test">Test Link</a>

@stop

@section('script')
  
jQuery(function($){
		$('#test').click(function(){
			alert('TEST');
		});		
		
	 });
	
@stop