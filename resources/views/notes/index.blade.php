@extends('default')

@section('title','Notes')
@section('titre-entete','Notes')

@include('default.top-nav')
@include('default.left-nav')
@include('notes.bar-menu')
@section('content')
  
    @include('notes.list-notes')
    

@stop