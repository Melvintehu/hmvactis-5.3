<?php 

namespace App\PdfGenerator;

use App\User;

class GeneratesUserPdf extends Generator
{

	public function boot($data)
	{
		$users = User::all();


		$this->title = "Overzicht van alle verwerkte leden";

		$this->body .= "<div class='image text-center space-outside-down-md'>
	    					<img class='img-responsive' style='height:50%; width:50%;' src='http://hmvactis.nl/images/logo.png' />
	    				</div>
	    				";

	    $this->body .= "<table class='table table-striped'>";

	    $this->body .= "<thead style='font-size:8px;'>
                            <tr>
                                <th>Naam</th>
                                <th>Emailadres</th>
                                <th>Gemaakt op</th>
                            </tr>
                        </thead>";

        $this->body .= "<tbody style='font-size:8px;'>";

		foreach($users as $user){

			if($user->profile == null){

				$this->body .= "<tr><td>" . $user->name . "</td>";
				$this->body .= "<td>" . $user->email . "</td>";
				$this->body .= "<td>" . $user->created_at . "</td></tr>";

			}

		}

		$this->body .= "</tbody>";

		$this->body .= "</table>";

	}
	
}