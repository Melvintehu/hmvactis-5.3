@foreach($formData as $object)
   <tr>

       <?php 
           $id = 0;
           $object = json_decode($object);
            if ( is_object( $object ) ) $d = get_object_vars( $object );
            
            $counter = 0;
            foreach($d as $k => $n){
                if($k == "id"){
                  $id = $n;
                }
                if($counter != $numberOfFormElements){
                    echo " <td> $n </td>";
                    $counter++;   
                }
            }
       ?>
        
        <td>
        {!! Form::open(['method' => 'delete', 'action' => [ $controllerAction,  $id ]  ]) !!}
              @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ]) 
        {!! Form::close() !!}
        </td>
    </tr>
@endforeach
