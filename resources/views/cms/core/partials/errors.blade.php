<div class="row">
  <div class="col-xs-12">
    @if(count($errors))
      <div class="form-group">
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li style="color: white">{{ $error }}</;i>
            @endforeach
          </ul>
        </div>
      </div>
    @endif
  </div>
</div>