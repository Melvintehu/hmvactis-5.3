@section('title')
Wachtwoord vergeten
@stop

@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 space-outside-md">
                <h1 class='text-center space-outside-down-md'>Reset wachtwoord</h1>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mailadres</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input border border-accent" name="email" value="{{ $email or old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Wachtwoord</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input border border-accent" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Wachtwoord herhalen</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input border border-accent" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn-standard bg-main xs-space-outside-down-xs text-color-light">
                                    <i class="fa fa-btn fa-refresh"></i> Reset wachtwoord
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
