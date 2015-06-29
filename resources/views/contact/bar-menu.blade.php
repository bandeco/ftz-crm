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
		
	<div class="col-md-6 col-md-offset-2 right-btn-filter">
	<div id="navbar-action" class="navbar-collapse collapse navbar-right" >
		<a class="btn btn-default btn-smenu-position ajout" id="grille" href="" title="Grille" role="button">
			<span class="glyphicon glyphicon-th" aria-hidden="true"></span> 
		</a>
		<a class="btn btn-default btn-smenu-position" href="#" title="Liste" role="button">
			<span class="glyphicon glyphicon-list" aria-hidden="true"></span> 
		</a>

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
			  <button type="button" class="btn btn-danger btn-smenu-position dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Afficher <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu " role="menu">
			  	<li><a href="#">Société(s)</a></li>
				<li><a href="#">Contact(s)</a></li>
			  </ul>
		</div>
		<div class="btn-group ">
			  <button type="button" class="btn btn-primary btn-smenu-position dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Créer <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu " role="menu">
			  	<li><a href="{{ route('societe.create')}}">Société</a></li>
				<li><a href="{{ route('contact.create')}}">Contact</a></li>
				<li><a href="{{ route('groupe.create')}}">Groupe CRM</a></li>
			  </ul>
		</div>
	    <a class="btn btn-primary btn-smenu-position" href="{{ route('societe.create')}}" role="button">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nouveau contact
		</a>
		
	</div>
	</div>
	</div><!-- /.row -->

@stop