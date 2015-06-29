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
		
		  <div class="btn-group ">
			  <button type="button" class="btn btn-default btn-smenu-position dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Categorie <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu " role="menu">
			  	<li><a href="#">Tout</a></li>
			  	<li><a href="#">A faire</a></li>
			  	<li><a href="#">Appel téléphonique</a></li>
				<li><a href="#">E-mail</a></li>
				<li><a href="#">Réunion</a></li>
			  </ul>
			
		</div>

		 <div class="btn-group ">
		<button type="button" class="btn btn-default btn-smenu-position dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Type <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu " role="menu">
			  	<li><a href="#">Tout</a></li>
			  	<li><a href="#">Notes attribuées</a></li>
			  	<li><a href="#">Notes Rédigées</a></li>
			  </ul>
		</div>
			<!-- a modifier et mettre la route de l'ajout d note -->

	    <a class="btn btn-primary btn-smenu-position" href="{{ route('notes.create')}}" role="button">
			<span class="glyphicon glyphicon-copy" aria-hidden="true"></span> Creer une Note
		</a>
	</div>
	</div>
	</div><!-- /.row -->

@stop