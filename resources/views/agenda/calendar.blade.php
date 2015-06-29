@extends('default')

@section('head')
	
    <link rel="stylesheet" href="css/calendar.css">

    <style type="text/css">
		.btn-twitter {
			padding-left: 30px;
			background: rgba(0, 0, 0, 0) url(https://platform.twitter.com/widgets/images/btn.27237bab4db188ca749164efd38861b0.png) -20px 6px no-repeat;
			background-position: -20px 11px !important;
		}
		.btn-twitter:hover {
			background-position:  -20px -18px !important;
		}
	</style>

@stop

@section('title','Agenda')
@section('titre-entete','Agenda')

@include('default.top-nav')
@include('default.left-nav')

@include('contact.bar-menu')

@section('content')

<!-- Affichage calendrier -->
<div class="col-md-9  affichage-border">
	
		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Year</button>
				<button class="btn btn-warning active" data-calendar-view="month">Month</button>
				<button class="btn btn-warning" data-calendar-view="week">Week</button>
				<button class="btn btn-warning" data-calendar-view="day">Day</button>
			</div>
		</div>

	<div class="row">
		<div class="col-md-9 affichage-border">
			<div id="calendar"></div>
		</div>
		
	</div>
</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	
    <script type="text/javascript" src="underscore/underscore-min.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript" src="js/language/fr-FR.js"></script>
    <script type="text/javascript">
        var calendar = $("#calendar").calendar(
            {
                tmpl_path: "/tmpls/",
                events_source: function () { return []; }
            });         
    </script>
   
    <script type="text/javascript" src="underscore/underscore-min.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
   

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







