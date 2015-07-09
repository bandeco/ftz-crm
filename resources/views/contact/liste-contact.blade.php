<!-- Affichage Liste des contacts -->
<!-- Checkbox Name Counter -->
{{--*/ $c = 1 /*--}}
	<table class="table table-noborder-top table-bordere table-contact">
			@foreach($contact as $contact)
			<tr style="border-bottom: 1px solid #ddd"> 
				<td vertical-align="middle">{!! Form::checkbox('c'.$c, $contact->id, null, ['class' => 'listcheckbox checkbox']) !!}</td>
			  	<td>
			  		<div class=" info-preview pull-left">
			  		    <a href="{{route('contact.show',[$contact->id])}}"><p class="media-heading">{{ $contact->nom_contact.' '.$contact->prenoms_contact }}</p></a>
			  		   @if($contact->societe)<p>{{ $contact->societe->nom_clt }} </p>@endif
			  		   @if($contact->fonction_contact)<p>{{ $contact->fonction_contact }} </p> @endif
			  		   
			  		</div>
			  		<div class="action-place">
			  		<ul>
				  	    <li><a href="{{ route('contact.edit',[$contact->id])}}" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></li>
				  		<li><a href="#" data-toggle="modal" data-target="#myModalListe"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></li>
			 		</ul> 
			 		</div>
			  	</td>
			</tr>
			<!-- Attribution des valeurs de données Nom et Id pour le modal -->
			
			{{--*/
				 $id = $contact->id; 
				 $nom = $contact->nom_clt; 
			/*--}}
			
			{{--*/ $c++ /*--}}
			@endforeach
			</table>
		{!! Form::close() !!}
	</table>
