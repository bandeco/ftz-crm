@extends('default')


@section('title','Modification')
@section('titre-entete','Modification du profil de la société '.$profil->nom_clt)

@include('default.top-nav')
@include('default.left-nav')

@section('menu')
	{!! Form::open(['method' =>'PUT','route' =>['societe.update',$profil->id]]) !!}

	<div id="navbar-action" class="navbar-collapse collapse navbar-righ" style="padding-left:0px;">
		<div class="navbar-form navbar-left" style="padding-left:0px;" >
			<a class="btn btn-default btn-smenu-position" href="{{ route('societe.show',[$profil->id])}}" role="button">
				<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Annuler
			</a>
		  	<div class="form-group ">
				{!! Form::submit('Enregistrer les modifications',['class' =>'btn btn-danger btn-smenu-position dropdown-toggle']) !!}
			</div>
		</div>	
	</div>
@stop

@section('content')
	<!-- Compteur pour l'afficahge en grille -->
	{{--*/ $i = 0 /*--}}
	
	<table class=" table-noborder-top  table-contact table">
			<tr><td><span class="head-title">Données sociétés</td></tr>
			<tr> 	
	  			<td><span class="title-profil">{!! Form::label('societe','Nom de la société')!!}</td>
	  			<td><span >{!! Form::text('nom_clt',$profil->nom_clt,['class'=>'form-control input-sm']) !!}</td>
	  		</tr>
	  		<tr> 
	  			@if(isset($profil->groupe->nom_groupe))
	  				{{--*/ $groupecrm_nom = $profil->groupe->nom_groupe.' '.$profil->groupe->date_groupe;  $groupecrm = null;/*--}}
	  				@foreach($groupe as $key => $value)	
	  					@if($value == $groupecrm_nom)
	  						{{--*/ $groupecrm = $key /*--}}
	  					@endif
	  				@endforeach	
	  			@else
	  				{{--*/ $groupecrm = 'null';/*--}}
	  			@endif
	  			 
	   			<td><span class="title-profil">{!! Form::label('groupecrm','Groupe CRM') !!}</td>
	  			<td><span >{!! Form::select('groupe_id',$groupe,$groupecrm,['class' =>'form-control input-sm']) !!}</td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('effectif_clt','Effectif') !!}</td>
	  			<td>{!! Form::input('number','effectif_clt',$profil->effectif_clt,['class'=>'form-control input-sm']) !!}</td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('ca_clt','Chiffre d\'affaire') !!}</td>
	  			<td>{!! Form::input('number','ca_clt',$profil->ca_clt,['class'=>'form-control input-sm']) !!}</td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('comment','Commentaire') !!}</td>
	  			<td>{!! Form::text('comment_clt',$profil->comment_clt,['class'=>'form-control input-sm']) !!}</td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('num_tva','N° TVA') !!}</td>
	  			<td>{!! Form::text('num_tva_clt',$profil->num_tva_clt,['class'=>'form-control input-sm']) !!}</td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('telephone','Téléphone') !!}</td>
	  			<td>{!! Form::input('tel','tel_siege_clt',$profil->tel_siege_clt,['class'=>'form-control input-sm']) !!}</td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('email','E-mail') !!}</td>
	  			<td>{!! Form::input('email','email_siege_clt',$profil->email_siege_clt,['class'=>'form-control input-sm']) !!} </td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('url','URL') !!}</td>
	  			<td>{!! Form::input('url','url_clt',$profil->url_clt,['class'=>'form-control input-sm']) !!} </td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('fax','Fax') !!}</td>
	  			<td>{!! Form::text('fax_siege_clt', $profil->fax_siege_clt,['class'=>'form-control input-sm']) !!} </td>
	  		</tr>
	  		
	  		<tr> 
	  			<!-- Récupération du nom de tous les pays -->
	  		    	{{--*/ $listpays = Countries::getList('fr','php','cldr') /*--}} 
	  				@foreach($listpays as $cle=>$values)
	  					{{--*/ $pays[$values]= $values /*--}}
	  				@endforeach
	  			<td><span class="title-profil">{!! Form::label('pays','Pays') !!}</td>
	  			<td>{!! Form::select('pays_clt',$pays,[$profil->pays_clt],['class'=>'form-control input-sm']) !!}</td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('ville','Ville') !!}</td>
	  			<td>{!! Form::text('ville_siege_clt',$profil->ville_siege_clt,['class'=>'form-control input-sm']) !!} </td>
	  		</tr>
	  		<tr> 
	  			<td><span class="title-profil">{!! Form::label('adresse','Adresse') !!}</td>
	  			<td>{!! Form::input('textarea','adresse_siege_clt',$profil->adresse_siege_clt,['class'=>'form-control input-sm']) !!}</td>
	  		</tr>
	</table>
	{!! Form::close() !!}
	<!-- Affichage Contact(s) lié(s) à la société -->
	<table class=" table table-noborder-top  table-contact">
	  		<tr><td><span class="head-title">Contact(s)</span></td></tr>
	  		@if($i==0)<tr> {{--*/ $i = 3/*--}}@endif
	  		  {{--*/ $i-=1 /*--}}
	  		  	<td style="padding-left:35px;">
	  		  		    <a href="{{action('ContactController@show',[$profil->id])}}"><p class="media-heading">{{ $profil->nom_clt}}</p></a>
	  		  		    <p>{{ $profil->pays_clt.' ('.$profil->ville_siege_clt.')' }}</p>
	  		  		    <p>{{ 'Tél : '.$profil->tel_siege_clt }} </p>
	  		  		    <p>{{ 'E-mail : '.$profil->email_siege_clt }} </p>
	  		  	</td>
	  		  	<td>
	  		  		    <a href="{{action('ContactController@show',[$profil->id])}}"><p class="media-heading">{{ $profil->nom_clt}}</p></a>
	  		  		    <p>{{ $profil->pays_clt.' ('.$profil->ville_siege_clt.')' }}</p>
	  		  		    <p>{{ 'Tél : '.$profil->tel_siege_clt }} </p>
	  		  		    <p>{{ 'E-mail : '.$profil->email_siege_clt }} </p>
	  		  	</td>
	  		  	<td>
	  		  		    <a href="{{action('ContactController@show',[$profil->id])}}"><p class="media-heading">{{ $profil->nom_clt}}</p></a>
	  		  		    <p>{{ $profil->pays_siege_clt.' ('.$profil->ville_siege_clt.')' }}</p>
	  		  		    <p>{{ 'Tél : '.$profil->tel_siege_clt }} </p>
	  		  		    <p>{{ 'E-mail : '.$profil->email_siege_clt }} </p>
	  		  	</td>
	  		@if($i==0)</tr> @endif

	</table>

	@include('errors.list')
@stop

	