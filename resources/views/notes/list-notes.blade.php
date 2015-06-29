<div class="table-responsive col-md-10">
        <table  class="table table-condensed table-contact" >
            <th >#</th>
            <th >Note<span class="label label-default">  Catégorie</span></th>
            
            


{{--*/ $i=1; /*--}}
{{--*/ $cat=''; /*--}}
    @foreach ($notes as $note)

            @if ($note->categorie=='A faire')
                {{--*/ $cat='info'; /*--}}
            @elseif ($note->categorie=='Appel téléphonique') 
                {{--*/ $cat='primary'; /*--}}
            @elseif ($note->categorie=='E-mail') 
                {{--*/ $cat='warning'; /*--}} 
            @elseif ($note->categorie=='Réunion') 
                {{--*/ $cat='success'; /*--}} 
            @else
                {{--*/ $cat='default'; /*--}}      
            @endif
   	    


        @if ($note->etat=='1')
   	    	
   	   
    	@if ($note->type=='Prospection')
    		{{-- expr --}}
    	
    		<tr class="success">
    			<td >{!! $i!!}</td>
                <td ><span class="info">{!! $note->nom!!}    </span>   
                   {!!'<span class="label label-'.$cat.'">' !!}{!!$note->categorie!!}</span>
                                          
                    <div class="action" style=" margin-bottom:0px">
                        <ul >
                             <li><a href="{!! route('notes.edit',$note) !!}" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                             </a></li>
                            <li><a href="{!! route('notes.show',$note) !!}" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a></li>
                       </ul> 
                    </div>

                </td>
    		</tr>

    	@elseif($note->type=='Refus')
			<tr class="active">
				<td >{!! $i!!}</td>
                <td ><span class="info">{!! $note->nom!!}</span>   
                   {!!'<span class="label label-'.$cat.'">' !!}{!! $note->categorie!!}</span>
                                          
                    <div class="action" style=" margin-bottom:0px">
                        <ul >
                             <li><a href="{!! route('notes.edit',$note) !!}" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                             </a></li>
                            <li><a href="{!! route('notes.show',$note) !!}" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a></li>
                       </ul> 
                    </div>

                </td>
    		</tr>

    	@else
			<tr class="bg-info">
    			<td >{!! $i!!}</td>
                <td ><span class="info">{!! $note->nom!!}</span>   
                   {!!'<span class="label label-'.$cat.'">' !!}{!! $note->categorie!!}</span>
                   			              
                    <div class="action" style=" margin-bottom:0px">
                        <ul >
                             <li><a href="{!! route('notes.edit',$note) !!}" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                             </a></li>
                            <li><a href="{!! route('notes.show',$note) !!}" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a></li>
                       </ul> 
                    </div>

				</td>

    		</tr>

    	@endif
    	{{--*/ $i++; /*--}}
    	 @endif
       @endforeach

    </table>

</div>