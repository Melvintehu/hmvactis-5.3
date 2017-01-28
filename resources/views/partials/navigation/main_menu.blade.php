
{{--  Maak gebruik van active class helper , checked of er een route is of niet of dat een url geselecteerd is.
Wanneer dit waar is komt ereen active class. Ook URL:: is een goede helper ivm het vinden van de correcte folder--}}

<li class="{{ active_class(if_route(['home']) || if_uri(['/'])) }}"><a href="{{ URL::to('/') }}">HOME</a></li>
 <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OVER ONS <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li ><a href="/over-ons">De vereniging en besturen</a></li>

		            <li><a href="/commissies">Commissies</a></li>

		          </ul>
		        </li>
<li class="{{ active_class(if_route(['nieuws']) || if_uri(['nieuws'])) }}"><a href="{{ URL::to('nieuws') }}">NIEUWS</a></li>

<li class="{{ active_class(if_route(['activiteiten']) || if_uri(['activiteiten'])) }}"><a href="{{ URL::to('activiteiten') }}">ACTIVITEITEN</a></li>

<li class=" dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PARTNERS <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="../partners">Partners van hmvactis</a></li>
		          	<li><a href="../kortingen">Kortingen van onze partners</a></li>

		          </ul>
		        </li>



<li class="{{ active_class(if_route(['vacatures']) || if_uri(['vacatures'])) }}"><a href="{{ URL::to('vacatures') }}">VACATURES</a></li>
<li class="{{ active_class(if_route(['contact']) || if_uri(['contact'])) }}"><a href="{{ URL::to('contact') }}">CONTACT</a></li>


@if (Auth::check())

	@if($profiel->isEmpty())

		<li class="{{ active_class(if_route(['registreren']) || if_uri(['registreren'])) }}"><a href="{{ URL::to('registreren') }}">LID WORDEN</a></li>
	@else

		<li class="{{ active_class(if_route(['profiel']) || if_uri(['profiel'])) }}"><a href="{{ URL::to('profiel') }}">PROFIEL</a></li>


	@endif






	<li class="{{ active_class(if_route(['logout']) || if_uri(['logout'])) }}"><a href="{{ URL::to('logout') }}">UITLOGGEN</a></li>
@else

	<li class="{{ active_class(if_route(['login']) || if_uri(['login'])) }}"><a href="{{ URL::to('login') }}">INLOGGEN</a></li>

	<li class="{{ active_class(if_route(['registreren']) || if_uri(['registreren'])) }}"><a href="{{ URL::to('registreren') }}">LID WORDEN</a></li>

@endif






