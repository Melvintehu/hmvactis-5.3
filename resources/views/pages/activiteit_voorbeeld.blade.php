	@extends('master')

@section('title')
	{{ $data['activiteit']->title }}
@stop



<?php 

	$ingeschreven = false;

?>

@if(Auth::user() != null)

	@foreach(Auth::user()->events()->get() as $event)

		@if($event->id == $data['activiteit']->id)

			<?php $ingeschreven = true; ?>

		@endif

	@endforeach

@endif




@section('content')
	
	<div class="bg-secondary no-overflow"> 

		<div class="container">
			
			<div class="row space-outside-lg fadeInDown wow">
				

				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">


					<div class="row">
						

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

							<h1 class="text-color-light"> {{ $data['activiteit']->title }} </h1>

						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

							<div class="text xs-space-outside-down-lg sm-space-outside-down-lg">

								<p class="block space-outside-down-xs text-color-light"><span class="circle circle-sm bg-main inline-block align-to-text space-outside-right-sm"> </span>  {{ $data['activiteit']->location }} </p>

								<p class="block space-outside-down-xs text-color-light"><span class="circle circle-sm bg-main inline-block align-to-text space-outside-right-sm"> </span>   {{ $data['activiteit']->date->format('l j F Y') }} </p>

								<p class="block space-outside-down-xs text-color-light"><span class="circle circle-sm bg-main inline-block align-to-text space-outside-right-sm"> </span> {{ substr($data['activiteit']->time, 0, 5) }}</p>

							</div>

						</div>

					</div>

				</div>

				<div style="padding:0;" class="col-lg-5 col-md-4 col-sm-12 col-xs-12 ">

					<div class="image lg-rect-lg xs-space-inside-sides-lg"> 

						@if($data['activiteit']->photos->first()['path'] != null)	
									<img class="responsive-image height-auto" src="../{{$data['activiteit']->photos->first()['path']}}">
								@else
									<img class="responsive-image height-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
								@endif


					</div>

				</div>
				
				@if($ingeschreven == true )

					<div class="col-lg-12 xs-text-center sm-text-center">
						
						<p class="padding-sm bg-main text-color-light bold sm-space-outside-up-lg xs-space-outside-up-lg"> Je bent ingeschreven voor deze activiteit </p>

					</div>

				@endif

			</div>



		</div>
	</div>


	<div class="container fadeInDown wow">
		
		<div class="row">
			
			<div class="col-lg-12 space-outside-md xs-text-center sm-text-center">
					
				{!! Form::open(['method' => 'POST', 'action' => ['EventsController@signUpUser', $data['activiteit']->id] ]) !!}
				@if (Auth::check())

					
					@if($ingeschreven == false && $data['activiteit']->subscription == 'yes' && Carbon::now() <= $data['activiteit']->date)

							<button class="btn-standard bg-main text-color-light " href="/activiteiten" > Inschrijven </button>
						
					@endif

				@endif	

				<a class="btn-standard bg-accent text-color-dark inline-block space-outside-left-lg " href="/activiteiten"> Ga terug </a>
				{!! Form::close() !!}

			</div>

		</div>

	</div>



	@if (!Auth::check() && $data['activiteit']->subscription == 'yes' && Carbon::now() <= $data['activiteit']->date)

	<!-- Section inschrijven voor activiteit -->
	<section class="container space-outside-down-lg fadeInDown wow">
		
		<div class="row">
			
			<div class="col-lg-7 col-xs-12 space-outside-down-lg xs-text-center">
				
				<p class="xs-space-inside-right-md-none xs-padding-sm space-inside-right-md"> {!! nl2br($data['activiteit']->description) !!} </p>

			</div>

			<div class="col-lg-5 col-xs-12 bg-accent padding-md">
				
				<div class="row">
						


					<h2 class="text-color-dark space-outside-down-sm space-outside-left-sm space-outside-up-sm"> Schrijf je snel in voor deze activiteit! </h2>

					<p class="text-color-light bold space-outside-down-md space-outside-sides-sm">
						 		
						Vergemakkelijk het inschrijven door een account te maken. Dit account is herbruikbaar.	 		

					</p>


					<form  role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}


                    <div >

                        <input placeholder="Volledige naam" id="event_id" type="hidden" class="input border border-accent" name="event_id" value="{{ $data['activiteit']->id }}">

                        <span class="help-block">

                            <strong>{{ $errors->first('event_id') }}</strong>

                        </span>

                      

                    </div>

                

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        

                        <div class="col-md-12 space-outside-down-xs">
                            <input placeholder="Volledige naam" id="name" type="text" class="input border border-accent" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                       

                        <div class="col-md-12 space-outside-down-xs">
                            <input placeholder="emailadres" id="email" type="email" class="input border border-accent" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                       

                        <div class="col-md-12 space-outside-down-xs">
                            <input placeholder="wachtwoord" id="password" type="password" class="input border border-accent" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        

                        <div class="col-md-12 space-outside-down-xs">
                            <input placeholder="wachtwoord herhalen" id="password-confirm" type="password" class="input border border-accent" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn-standard bg-secondary text-color-light">
                                <i class="fa fa-btn fa-user"></i> Register
                            </button>
                        </div>
                    </div>
                </form>

				</div>

			</div>

		</div>

	</section>

	@else

	<!-- Section inschrijven voor activiteit -->
	<section class="container space-outside-down-lg fadeInDown wow">
		
		<div class="row">
			
			<div class="col-lg-12 col-xs-12 space-outside-down-lg xs-text-center">
				
				<p class="xs-space-inside-right-md-none xs-padding-sm space-inside-right-md"> <?php echo nl2br($data['activiteit']->description) ?> </p>

			</div>
			
		</div>

	</section>

	@endif

	




@stop
