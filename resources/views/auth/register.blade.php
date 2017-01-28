@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 space-outside-up-lg">
        
            <h1> Account aanmaken</h1>    

        </div>

        <div class="col-md-8 space-outside-lg">
             
           
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        

                        <div class="col-md-6">
                            <input placeholder="Volledige naam" id="name" type="text" class="input border border-accent" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                       

                        <div class="col-md-6">
                            <input placeholder="emailadres" id="email" type="email" class="input border border-accent" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                       

                        <div class="col-md-6">
                            <input placeholder="wachtwoord" id="password" type="password" class="input border border-accent" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        

                        <div class="col-md-6">
                            <input placeholder="wachtwoord herhalen" id="password-confirm" type="password" class="input border border-accent" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 ">
                            <button type="submit" class="btn-standard bg-secondary text-color-light">
                                <i class="fa fa-btn fa-user"></i> Register
                            </button>
                        </div>
                    </div>
                </form>
         
          
        </div>
    </div>
</div>
@endsection
