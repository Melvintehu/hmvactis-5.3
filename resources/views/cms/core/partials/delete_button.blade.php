<form method="POST" action="/cms/{{$type}}/{{$id}}" >
  {{csrf_field()}}
  {{ method_field('DELETE') }}
  <button  style="display:inline-block;float:left;margin:3px;" class="btn btn-danger" > <i class="fa fa-times"></i> </button>
</form>