@extends('master')

@section('title')
	
	Inloggen

@stop



@section('content')

	<div class="container">
		
		<h1 class="page-title"> INLOGGEN </h1>

	</div>
    <div class="container ">

    <div class="row fadeInDown wow">

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

                        <div class="form-group">
                            <div class="col-md-6 ">
                                 <input type="submit" class="btn-standard bg-secondary text-color-light xs-space-outside-down-md" value="Inloggen">
                                 <a href="/register" class="btn-standard bg-secondary  text-color-light" >Registreren </a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

      

		</div>
	</div>
	

@stop