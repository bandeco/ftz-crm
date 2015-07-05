
@section('menu')

	     <div class="row">
	     {!! Form::open(['route'=>'societe.search', 'method'=>'GET']) !!}
		  <div class="col-lg-4 left-btn-search">
		      <div class="input-group">
		        <input type="text" name="q" class="form-control" placeholder="Search for...">
		        <span class="input-group-btn">
		          <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> </button>
		        </span>
		      </div><!-- /input-group -->
		    </div><!-- /.col-lg-6 -->
		 {!! Form::close(); !!}
		
	<div class="col-md-7 col-md-offset-1 right-btn-filter" >
	<div id="navbar-action" class="navbar-collapse collapse navbar-right" >

	{!! Form::open(['route'=>'societe.action', 'method'=>'POST']) !!}
	<!-- Boutton d'action sur contact choisi  -->
		{!! Form::hidden('type',$type) !!}
		{!! Form::submit('Ajouter note',['class' =>'btn btn-default ', 'name'=>'add_note']) !!}
		<!-- <a class="btn btn-default btn-smenu-position checkaction" href="#" id="addnote" title="Liste" role="button">
			<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Ajouter note
		</a> -->
			{!! Form::submit('Exporter',['class' =>'btn btn-default ', 'name'=>'export']) !!}
		<!-- <a class="btn btn-default btn-smenu-position checkaction" href="#" id="export" title="Liste" role="button">
			<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span> Exporter
		</a> -->
			{!! Form::submit('Supprimer',['class' =>'btn btn-danger ', 'name'=>'supp']) !!}
		<!-- <a class="btn btn-danger btn-smenu-position checkaction" id="supp" href="#" title="Grille" role="button">
			<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer
		</a> -->
		<!--  Fin boutton d'action -->
		  <div class="btn-group ">
			  <button type="button" class="btn btn-default btn-smenu-position dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Filtre <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu " role="menu">
			  	<li><a href="#">Par groupe CRM</a></li>
				<li><a href="#">Par ordre Alphabétique</a></li>
				<li><a href="#">Par date d'ajout</a></li>
				<li><a href="#">Par contact sans notes</a></li>
			  </ul>
		</div>
		<div class="btn-group ">
			  <button type="button" class="btn btn-primary btn-smenu-position dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Afficher <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu " role="menu">
			  	<li><a href="{{ route ('societe.index') }}">Société(s)</a></li>
				<li><a href="{{ route('contact.index') }}">Contact(s)</a></li>
			  </ul>
		</div>
		<div class="btn-group ">
			  <button type="button" class="btn btn-primary btn-smenu-position dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Créer <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu " role="menu">
			  	<li><a href="{{ route('societe.create')}}">Société</a></li>
				<li><a href="{{ route('contact.create')}}">Contact</a></li>
			
			  </ul>
		</div>
	    <!-- <a class="btn btn-primary btn-smenu-position" href="{{ route('societe.create')}}" role="button">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nouveau contact
		</a> -->
		
	</div>
	</div>
	</div><!-- /.row -->

@stop