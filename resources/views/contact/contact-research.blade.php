<!-- Affichage en Liste -->
<div class="col-md-9  affichage-border">
<!-- Checkbox Name Counter -->
{{--*/ $c = 1 /*--}}

{!! Form::open() !!}
	<table class="table table-noborder-top table-bordere table-contact">
	@foreach($results as $r)
	<tr style="border-bottom: 1px solid #ddd"> 
		<td vertical-align="middle">{!! Form::checkbox('c'.$c, $r['_id'], null, ['class' => 'listcheckbox']) !!}</td>
	  	<td>
	  		<div class=" info-preview pull-left">
	  		    <a href="{{route('societe.show',[$r['_id']])}}"><p class="media-heading">{{ $r['_source']['societe']}}</p></a>
	  		    <p>{{ $r['_source']['pays']}} @if($r['_source']['pays']){{'('.$r['_source']['pays'].')' }} @endif</p>
	  		   @if($r['_source']['pays'])<p>{{ 'Tél : '.$r['_source']['pays'] }} </p>@endif
	  		</div>
	  		<div class="action-place">
	  		<ul>
		  	    <li><a href="{{ route('societe.edit',[$r['_id']])}}" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></li>
		  		<li><a href="#" data-toggle="modal" data-target="#myModalListe"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></li>
	 		</ul> 
	 		</div>
	  	</td>
	</tr>
	<!-- Attribution des valeurs de données Nom et Id pour le modal -->
	
	{{--*/
		 $id = $r['_id']; 
		 $nom = $r['_source']['societe'];
	/*--}}
	<!-- Modal de confirmation de suppression -->
	<div class="modal fade" id="myModalListe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Suppression de société</h4>
	      </div>
	      <div class="modal-body">
	        Voulez-vous vraimment supprimer la société <strong>{{ $nom }}</strong> ?
	      </div> 
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
	        <div class="pull-right" style="margin-left:5px;">
		        {!! Form::open(['url'=> route('societe.destroy',$id), 'method'=>'delete']) !!}
		      		{!! Form::submit('Supprimer',['class'=>'btn btn-warning btn-smenu-position'])!!}
		      	{!! Form::close() !!}
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>
	{{--*/ $c++ /*--}}
	@endforeach
	</table>
{!! Form::close() !!}
</div>
