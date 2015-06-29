<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="Plateforme de gestion de la relation clientèle FTZ" content="">
    <meta name="ousmane-hassane" content="">
     <!-- AJAX metadata -->
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <link rel="icon" href="{{ WEBROOT}}/img/favicon/favicon.ico">
	    
	
	@yield('head')

    <title> @yield('title') </title>

    <!-- Bootstrap core CSS -->
    {!! HTML::style('css/bootstrap.min.css') !!}
	
	<!-- Bootstrap Vertical Tabs CSS -->
	{!! HTML::style('css/bootstrap.vertical-tabs.css') !!}
	
	<!-- Google font link -->
	{!! HTML::style('http://fonts.googleapis.com/css?family=Oswald') !!}

    <!-- Custom styles for this template -->
    {!! HTML::style('css/sticky-footer-navbar.css') !!}
	{!! HTML::style('css/starter-template.css') !!}
    {!! HTML::style('css/style.css') !!}
	{!! HTML::style('css/cover.css') !!}
	<!-- Bootstrap File Input Style -->
	{!! HTML::style('css/fileinput.css') !!}
	

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    {!! HTML::script('js/ie-emulation-modes-warning.js') !!}
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<!-- Menu Haut -->
    @yield('top-nav')
	<br/>
	
    <div class="container-fluid" id="main-frame">
		<br/>
      <!-- tabs left -->
	  
		<div class="row">
			<!-- Conteneur Premier -->
			<div  class="col-xs-12" >
				<!-- Menu Gauche -->
				<div class="col-sm-3 col-md-2 sidebar hidden-xs" id="contour_tabs"> <!-- required for floating -->
				  @yield('left-nav')
				</div>
				<!-- Conteneur Second -->
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="container_tab_pane" >
				  <!-- Affichage des contenus du menu -->
				  <div class="tab-content" >
					<div class="tab-pane active" id="{{{ isset($idmenu) ? $idmenu : 'home' }}}">
						<!-- En-tête de la page active -->
						<div class="row head-list">
							<!-- Titre d'entête de la page active-->
							<div class="row">
								<div class="col-md-12 container-title" >
									<div>
										<h4 class="titre_cadre">@yield('titre-entete')</h4> 
									</div>
								</div>
							</div>
							<!-- Menu de la page active -->
							<div class="row">
									<div class="col-md-12 container-menu">
										@yield('menu')
									</div>
							</div>	
						</div>
							<!-- Contenu de la page active -->
							<div class="row">
								<div class="main-content-tab" >
								<div class="col-md-12 content-main" >
										@yield('content')
								 </div>
								 
								 </div>
							</div>
						</div>
				  </div>
				</div>

				<div class="clearfix"></div>

			</div>

			<div class="clearfix"></div>
		</div>
		<div class="row">
		</div>
      <!-- /tabs -->     
    
     </div><!-- /.container -->
	<div class="clearfix"></div>

	<!-- Pied de page -->
	<footer class="footer">
      <div class="container">
        <ul>
			<li><a href="#">Conditions générales</a></li>
			<li><a href="#">Politique et confidentialité</a></li>
			<li><a href="http://www.ftz.fr"><img src="{{WEBROOT}}/img/favicon/favicon-16x16.png"/> Informatique Industrielle</a></li>
			<li><a href="#">Aide</a></li>	
		</ul>
		<!-- <h6>&copy; Copyrith 2015 FTZ</h6> -->
      </div>
    </footer>
    <script>
		// $.ajaxSetup({
		//    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		// });
    	@yield('script')
    </script>

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{WEBROOT}}/js/bootstrap.min.js"></script>
	<script src="{{WEBROOT}}/js/customjs.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{WEBROOT}}/js/ie10-viewport-bug-workaround.js"></script>
    
  </body>
</html>
