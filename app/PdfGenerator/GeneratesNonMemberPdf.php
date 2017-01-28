<?php 

namespace App\PdfGenerator;

use App\User;

class GeneratesNonMemberPdf extends Generator
{
	public function boot($data)
	{
				$users = User::all();


		$this->title = "Overzicht van alle aanmeldingen";

		$this->body .= "<div class='image text-center space-outside-down-md'>
	    					<img class='img-responsive' style='height:50%; width:50%;' src='http://hmvactis.nl/images/logo.png' />
	    				</div>
	    				";

	    $this->body .= "<table class='table table-striped'>";

	    $this->body .= "<thead style='font-size:8px;'>
                            <tr>
                                <th>Naam</th>
                                <th>Adres</th>
                                <th>Telefoonnummer</th>
                                <th>Emailadres</th>
                                <th>Geboortedatum</th>
                                <th>Studie</th>
                                <th>Studiejaar</th>
                                <th>Studentnumber</th>
                                <th>IBAN</th>
                                <th>Gemaakt op</th>
                            </tr>
                        </thead>";

        $this->body .= "<tbody style='font-size:8px;'>";

		foreach($users as $user){

			if($user->profile != null && $user->profile->processed == 0){

				$this->body .= "<tr><td>" . $user->name . "</td>";
				$this->body .= "<td>" . $user->profile['street'] . " " . $user->profile['house_number'] . " " . $user->profile['place'] . "</td>";
				$this->body .= "<td>" . $user->profile['phone_number'] . " </td>";
				$this->body .= "<td>" . $user->profile['email_address'] . " </td>";
				$this->body .= "<td>" . $user->profile['birthdate'] . " </td>";
				$this->body .= "<td>" . $user->profile['current_study'] . " </td>";
				$this->body .= "<td>" . $user->profile['study_year'] . " </td>";
				$this->body .= "<td>" . $user->profile['student_number'] . " </td>";
				$this->body .= "<td>" . $user->profile['iban'] . " </td>";
				$this->body .= "<td>" . $user->profile['created_at'] . " </td></tr>";

			}

		}

		$this->body .= "</tbody>";

		$this->body .= "</table>";

	}
}