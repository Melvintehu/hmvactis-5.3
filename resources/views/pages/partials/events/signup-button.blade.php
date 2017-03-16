@if(!App\User::isSignedUpForEvent($data['activiteit']->id) && ($data['activiteit']->subscription == 'yes') && Auth::check())
  <button class="btn-standard bg-main text-color-light " href="/activiteiten" > Inschrijven </button>
@endif