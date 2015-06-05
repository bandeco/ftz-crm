<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="Plateforme de gestion de la relation clientèle FTZ" content="">
    <meta name="ousmane-hassane" content="">
    <link rel="icon" href="img/favicon/favicon.ico">

    <title> @yield('title') </title>

    <!-- Bootstrap core CSS -->
      {!! HTML::style('css/bootstrap.min.css') !!}
	
	<!-- Bootstrap Vertical Tabs CSS -->
	{!! HTML::style('css/css/bootstrap.vertical-tabs.css') !!}
	
	<!-- Google font link -->
	{!! HTML::style('css/css/bootstrap.vertical-tabs.css') !!}


    <!-- Custom styles for this template -->
    {!! HTML::style('css/sticky-footer-navbar.css') !!}
	{!! HTML::style('css/starter-template.css') !!}
    {!! HTML::style('css/style.css') !!}
	{!! HTML::style('css/cover.css') !!}

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
  	<!-------------------------------------- Menu Haut ---------------------------------------------->
    	@yield('top-nav')
	<br/>
	<!-- Fin Menu Haut -->

    <div class="container-fluid" id="main-frame">
		<br/>
      <!-- Menu Gauche -->
	  
		<div class="row">
			<div  class="col-xs-12" >
				<div class="col-sm-3 col-md-2 sidebar hidden-xs" id="contour_tabs"> <!-- required for floating -->
				  <!-- Navigation gauche -->
				  
				  @yield('left-nav')
				  
				</div>

				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="container_tab_pane" >
				  <!-- Conteneur Menu  -->
				  <div class="tab-content" >
					<div class="tab-pane active" id="{{{ isset($idmenu) ? $idmenu : 'home' }}}">
						<div class="row head-list">
							<div class="row">
								<div class="col-md-12 container-title" >
									<div>
										<h4 class="titre_cadre">@yield('titre-entete')</h4> 
									</div>
								</div>
							</div>
							<div class="row">
									<div class="col-md-12 container-menu">
										@yield('menu')
									</div>
							</div>	
						</div>
							<div class="row">
								<div class="main-content-tab" >
								<div class="starter-template " >
									<h1>Bootstrap starter template</h1>
											@yield('content')
								 </div>
								 </div>
							</div>
						</div>
					
					<!------------------------------------------- Tab Contact ---------------------------------------------->
					
						<?php // include 'contact.php'; ?>
						
					<!------------------------------------------- Tab Notes ---------------------------------------------->
					
						<?php // include 'note.php'; ?>
			
					<!------------------------------------------- Tab Agenda ---------------------------------------------->
					
						<?php // include 'agenda.php'; ?>
					
					<!------------------------------------------- Tab Gestion commerciale ---------------------------------------------->
					
						<?php // include 'gescom.php'; ?>
					
					<!------------------------------------------- Tab Rapport ---------------------------------------------->
					
						<?php // include 'rapport.php'; ?>
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

	<!-- Footer-->
	<footer class="footer">
      <div class="container">
        <ul>
			<li><a href="#">Conditions générales</a></li>
			<li><a href="#">Politique et confidentialité</a></li>
			<li><a href="http://www.ftz.fr"><img src="img/favicon/favicon-16x16.png"/> Informatique Industrielle</a></li>
			<li><a href="#">Aide</a></li>	
		</ul>
		<!-- <h6>&copy; Copyrith 2015 FTZ</h6> -->
      </div>
    </footer>
	<!-- Fin Footer  -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') !!}
    {!! HTML::script('js/customjs.js') !!}
	{!! HTML::script('js/bootstrap.min.js') !!}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! HTML::script('js/ie10-viewport-bug-workaround.js') !!}
  </body>
</html>
