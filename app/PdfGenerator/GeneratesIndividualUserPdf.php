<?php 

namespace App\PdfGenerator;

use App\User;

class GeneratesIndividualUserPdf extends Generator
{

	public function boot($data)
	{
		$user = User::find($data);


		$this->title = "Overzicht van: " . $user->name;


	    $this->body .= "<div class='image text-center space-outside-down-md'>
	    					<img class='img-responsive' style='height:50%; width:50%;' src='http://hmvactis.nl/images/logo.png' />
	    				</div>
	    				";
	    $this->body .= "<h1 class='text-center space-outside-down-md'>Overzicht van: " . $user->name . "</h1>";
	    $this->body .= "<table class='table table-striped'>";
        $this->body .= "<tr><th>Naam</th><td>" . $user->name . "</td></tr>";
        $this->body .= "<tr><th>Adres</th><td>" . $user->profile['street'] . " " . $user->profile['house_number'] . " " . $user->profile['place'] . "</td></tr>";
        $this->body .= "<tr><th>Telefoonnummer</th><td>" . $user->profile['phone_number'] . "</td></tr>";
        $this->body .= "<tr><th>Email</th><td>" . $user->email . "</td></tr>";
        $this->body .= "<tr><th>Gbd. datum</th><td>" . $user->profile['birthdate'] . "</td></tr>";
        $this->body .= "<tr><th>Studie</th><td>" . $user->profile['current_study'] . "</td></tr>";
        $this->body .= "<tr><th>Startjaar</th><td>" . $user->profile['study_year'] . "</td></tr>";
        $this->body .= "<tr><th>Std. nummer</th><td>" . $user->profile['student_number'] . "</td></tr>";
        $this->body .= "<tr><th>IBAN</th><td>" . $user->profile['iban'] . "</td></tr>";
        $this->body .= "<tr><th>Account gemaakt op: </th><td>" . $user->created_at . "</td></tr>";
	    $this->body .= "</table>";
	}
}