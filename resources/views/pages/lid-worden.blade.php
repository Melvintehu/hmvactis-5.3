@extends('master')

@section('title')
	
	Lid worden

@stop



@section('content')
	
	<div class="container"> 

		<div class="row">
				
			<div class="col-lg-12 text-center space-outside-lg">
				
			<p class="bold">Heb je eerder al een account aangemaakt maar je bent nog geen lid? Log dan eerst in om lid te worden. <br> <a class="text-color-main" href="/login">Inloggen</a></p>

			</div>

		</div>

	</div>

	<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
		
		{{ csrf_field() }}

	<section class="container fadeInDown wow">
		
		<div class="row">
			
			<div class="col-lg-12 space-inside-md text-center">
				
			<a class="to-step-1" href="javascript:void(0)">

				<div id="circle-1" class="space-outside-sides-xs circle circle-md bg-accent inline-block text-color-light"> 1 </div>
				
			</a>

			<a class="to-step-2" href="javascript:void(0)">

				<div id="circle-2" class="space-outside-sides-xs circle circle-md bg-accent inline-block text-color-light"> 2 </div>

			</a>

			<a class="to-step-3" href="javascript:void(0)">

				<div id="circle-3" class="space-outside-sides-xs circle circle-md bg-accent inline-block 	text-color-light"> 3 </div>

			</a>

			</div>

		</div>

	</section>


	<!-- Stap 1 -->
	<section id="step-1"  class="container space-outside-down-lg">
		
		<div class="row">
	
			<div class="col-lg-12">
				
				<div class="row">

					<!-- titel -->

					<div class="col-lg-12 text-center space-outside-down-sm space-outside-up-lg fadeInDown wow">

						<h2>PERSOONSGEGEVENS</h2>

					</div>	

					<!-- Inputs -->

					@if(!Auth::check())

					<!-- VOLLEDIGE NAAM -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs fadeInDown wow"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">

							VOLLEDIGE NAAM

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 fadeInDown wow"> 

	                    {!! Form::text('name', null, ['class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs
									  ', 'id' => 'name' ]); !!} 

					</div>

					@endif


					<!-- STRAATNAAM EN HUISNUMMER -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs fadeInDown wow"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">

							STRAATNAAM & HUISNUMMER

						</p>

					</div>

					<div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 fadeInDown wow"> 

						{!! Form::text('street', null, ['id' => 'street', 'class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('street'))

	                        <span class="help-block">

	                            <strong>Vul de straat in.</strong>

	                        </span>

	                    @endif

					</div>

					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 fadeInDown wow"> 

						{!! Form::text('house_number', null, ['id' => 'house_number', 'class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('house_number'))

	                        <span class="help-block">

	                            <strong>Vul het huisnummer in.</strong>

	                        </span>

	                    @endif

					</div>

					

					<!-- PLAATS -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs fadeInDown wow"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">

							PLAATS

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 fadeInDown wow"> 

						{!! Form::text('place', null, ['id' => 'place','class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('place'))

	                        <span class="help-block">

	                            <strong>Vul je woonplaats in.</strong>

	                        </span>

	                    @endif

					</div>



					<!-- Telefoonnummer -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs fadeInDown wow"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">

							TELEFOONNUMMER

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 fadeInDown wow"> 

						{!! Form::text('phone_number', null, ['id' => 'phone_number','class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('phone_number'))

	                        <span class="help-block">

	                            <strong>Vul je telefoonnummer in.</strong>

	                        </span>

	                    @endif

					</div>


					@if(!Auth::check())


					<!-- EMAILADRES -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs fadeInDown wow"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">

							PRIVE E-MAILADRES

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 fadeInDown wow"> 

						{!! Form::text('email', null, ['id' => 'email','class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('email'))

                            <span class="help-block">

                                <strong>{{ $errors->first('email') }}</strong>

                            </span>

                        @endif

					</div>

					@endif

					<!-- Geboortedatum -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs fadeInDown wow"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">

							GEBOORTEDATUM

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 fadeInDown wow"> 

						{!! Form::date('birthdate', null, ['id' => 'birthdate','class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('birthdate'))

	                        <span class="help-block">

	                            <strong>Vul je geboortedatum in.</strong>

	                        </span>

	                    @endif			  

					</div>

					@if(!Auth::check())

					<!-- Wachtwoord -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs fadeInDown wow"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">

							WACHTWOORD

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 fadeInDown wow"> 

						{!! Form::password('password', ['id' => 'password','class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>


					<!-- Wachtwoord herhalen -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs fadeInDown wow"> 

						<p class="text-color-light input-label bg-secondary space-inside-left-sm">
							
							WACHTWOORD HERHALEN

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 fadeInDown wow"> 

						{!! Form::password('password_confirmation', ['id' => 'password_confirmation','class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

					</div>

					@endif

				</div>

			</div>

			<div class="col-lg-12 space-outside-up-md text-center fadeInDown wow">
				
				<a id="next-1" class="to-step-2 btn-standard bg-main text-color-light" href="#"> Ga naar stap 2</a>

			</div>

		</div>

	</section>




	<!-- Stap 2 -->
	<section id="step-2" class="container space-outside-down-lg fadeInDown wow">

		<div class="row">
			
			<div class="col-lg-12">
				
				<div class="row">

					<!-- Titel -->

					<div class="col-lg-12 text-center space-outside-down-sm space-outside-up-lg">

						<h2>STUDIEGEGEVENS</h2>

					</div>
					

					<!-- HUIDIGE STUDIE -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 

						<p class="text-color-light bg-secondary input-label space-inside-left-sm">

							HUIDIGE STUDIE

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('current_study', null, ['id' => 'current_study','class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('current_study'))

	                        <span class="help-block">

	                            <strong>Vul je huidige studie in.</strong>

	                        </span>

	                    @endif

					</div>


					<!-- STARTJAAR STUDIE -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 

						<p class="text-color-light bg-secondary input-label space-inside-left-sm">

							STARTJAAR STUDIE

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('study_year', null, ['id' => 'study_year','class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('study_year'))

		                    <span class="help-block">

		                        <strong>Vul het jaar waarin je bent gaan studeren in.</strong>

		                    </span>

		                @endif

					</div>

					<!-- STUDENTNUMMER -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 

						<p class="text-color-light bg-secondary input-label space-inside-left-sm">

							STUDENTNUMMER

						</p>

					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

						{!! Form::text('student_number', null, ['id' => 'student_number','class' => 'input border 
									  border-accent
									  bg-accent 
									  space-outside-xs']); !!} 

						@if ($errors->has('student_number'))

		                    <span class="help-block">

		                        <strong>Vul je student_number in.</strong>

		                    </span>

		                @endif

					</div>		

					

					

				</div>

			</div>	

			<div class="col-lg-12 space-inside-up-md text-center">
						
				<a class="to-step-1 btn-standard xs-space-outside-down-md bg-secondary text-color-light" href="#"> Terug naar stap 1</a>

				<a  class="to-step-3 btn-standard bg-main text-color-light" href="#"> Ga naar stap 3</a>

			</div>

		</div>

	</section>
		
	
	<!-- Stap 3 -->		
	<section id="step-3" class="container fadeInDown wow">	

		<div class="row">

			<div class="col-lg-12 text-center space-outside-down-sm space-outside-up-lg">

				<!-- Titel -->

				<h2>BETALINGSGEGEVENS</h2>
				
				<!-- Voorwaarden betalingsgegevens -->

				<p class="text-left space-outside-md font-sm">
					
					Hierbij geef ik HMV Actis toestemming om contributie van mijn giro-/bankrekening af te schrijven. Dit betreft een gratis lidmaatschap voor het schooljaar 2016 – 2017 (alleen geldig bij inschrijvingen vóór 19/09/2016). Vervolgens wordt het lidmaatschap automatisch verlengd en zal er jaarlijks contributie van €12,- worden afgeschreven. Wederopzegging dient binnen twee maanden voor de start van het nieuwe collegejaar, 31 augustus 2017, ingediend te worden. 
					<br><br>
					<span class="bold">Let op: </span> je wordt niet automatisch uitgeschreven als je klaar/gestopt bent met je studie. Je dient hier zelf melding van te maken door een mail te sturen naar bestuur@hmvactis.nl.

				</p>

			</div>

			<!-- IBAN -->

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 

				<p class="text-color-light bg-secondary input-label space-inside-left-sm">

					IBAN

				</p>

			</div>

			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 

				{!! Form::text('iban', null, ['id' => 'iban','class' => 'input border 
							  border-accent
							  bg-accent 
							  space-outside-xs']); !!} 

				@if ($errors->has('iban'))

                    <span class="help-block">

                        <strong>Vul je IBAN in.</strong>

                    </span>

                @endif

			</div>


			<!-- TEN NAME VAN -->

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 space-outside-xs"> 

				<p class="text-color-light bg-secondary input-label space-inside-left-sm">

					T.N.V

				</p>

			</div>

			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 


				{!! Form::text('tnv', null, ['id' => 'tnv','class' => 'input border 
							  border-accent
							  bg-accent 
							  space-outside-xs']); !!} 

				@if ($errors->has('tnv'))

                    <span class="help-block">

                        <strong>Vul de naam van de rekeninghouder in.</strong>

                    </span>

                @endif

			</div>


			<!--  OVERIGE INFORMATIE -->

			<p class="space-inside-left-sm">* Wij gaan vertrouwelijk om met je gegevens. We zullen je gegevens nooit aan derden verstrekken.</p>


			<!-- WERVEN -->

			<div class="col-lg-12 space-outside-up-md"> 

				<h3>Lijkt het je leuk om meer te doen naast je studie?</h3>

			</div>

			<div class="col-lg-12 space-outside-up-md">

				<div class="col-lg-1 space-outside-xs">

					{!! Form::checkbox('subscribed', 1, ['class' => 'input border 
							  border-accent
							  bg-accent 
							  space-outside-xs']); !!} 

				</div>

				<div class="col-lg-11 space-outside-xs">

					<p>Ja, ik heb interesse om een commissie/bestuursfunctie binnen HMV Actis te bekleden.</p>

				</div>

			</div>

			<div class="col-lg-12 space-outside-md"> 
				<a  class="to-step-2 btn-standard bg-secondary text-color-light" href="#"> Terug naar stap 2</a>

				<input class="btn-standard bg-main text-color-light space-outside-xs" type="submit" value="Inschrijven" name="inschrijven">

				<p class="space-outside-left-sm">Door je in te schrijven ga je akkoord met onze <u><a target="_blank" href="Algemene voorwaarden website.pdf">algemene voorwaarden</a></u>.</p>

			</div>




		</div>

	</section>

</form>
		
	
@stop