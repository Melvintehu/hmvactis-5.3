@section('title')
Inloggen
@stop

@extends('master')
@section('content')
<div class="container fadeInDown wow">
        
        <h1 class="space-outside-lg xs-text-center"> INLOGGEN </h1>
    
<div class="container">
    <div class="row ">

        <div class="col-md-12 space-outside-down-lg">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email" class="input border border-accent" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Wachtwoord" class="input border border-accent" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group space-outside-up-md">
                            <div class="col-md-6 col-xs-12 xs-text-center">
                                 <input type="submit" class="btn-standard bg-main xs-space-outside-down-xs  text-color-light " value="Inloggen">
                                 <a href="/register" class="btn-standard bg-secondary  text-color-light" >Registreren </a>
                            </div>

                        </div>
                    </form>
        </div>
    </div>
</div>

        </div>
    </div>
@endsection
