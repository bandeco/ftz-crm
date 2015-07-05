@extends('default')



@if($type==2)
	@section('title','Groupe CRM')
	@section('titre-entete','Groupe(s) CRM')
@else
	@section('title','Contact')
	@section('titre-entete','Contact')
@endif

@include('default.top-nav')
@include('default.left-nav')

@include('contact.bar-menu')

@section('content')
<div class="col-md-9  affichage-border">
	<table class="table table-noborder-top  table-contact" id="contact-letter">
		<tr>
			<td>{!! Form::checkbox('ckall', 'all' , null, ['class' => 'listcheckbox','id'=>'selectall']) !!}</td>
			<td>
				{{--*/ $x = 'A' /*--}}
				@for($i = 1; $i<= 26; $i++)
					<a href="">{{ $x }}</a>
					{{--*/ $x++; /*--}}
				@endfor
			</td>
		</tr>
	</table>
		
	@if($type==0 && !isset($results))
		@include('contact.liste-societe')
	@elseif($type==1 && !isset($results))
		@include('contact.liste-contact')
	@elseif($type==2 && !isset($results))
		@include('contact.group-crm')
	@else(isset($results))
		@include('contact.contact-research')
	@endif
</div>
	<div class="col-md-3 content-sidebar" >
			<!-- GROUPE CRM  -->
			<div class="col-md-12">
				<p>Groupe CRM</p>
			</div>
			<div class="col-md-12">
				<a href="{{ route('groupe.create')}}">
					<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> Nouveau Groupe CRM
				</a>
			</div>	
			<div class="col-md-12">
				<a href="{{ route('groupe.index')}}">
					<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Liste Groupe CRM
				</a>
			</div>		
			<!-- IMPORTATION / EXPORTATION -->
			<div class="col-md-12">
				<br/>
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


@section('script')

jQuery(function($){

		<!--  SELECT AND DESELECT ALL CHECKBOX -->

        $('#selectall').click(function(event) {  //on click 
            if(this.checked) { // check select status
                $('.checkbox').each(function() { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"               
                });
            }else{
                $('.checkbox').each(function() { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                       
                });         
            }
        });

   	<!-- Function pour affichage des actions sur les selects -->
	$('input[type="checkbox"]').click(function(){
		 if(this.checked == true){
            $(".checkaction").show();
        }
        else{
        	$(".checkaction").hide();
        }
    }); 
   
   
});

@stop




