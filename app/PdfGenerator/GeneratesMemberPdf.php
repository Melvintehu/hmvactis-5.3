<?php 

namespace App\PdfGenerator;

use App\User;
use App\Tablefy\Tablefy;
use DB;

class GeneratesMemberPdf extends Generator
{	
	public function users()
	{
		$query = "
			SELECT 	p.name, 
					CONCAT(p.street , ' ', p.house_number, ' ', p.place ) as adres, 
					p.phone_number, 
					p.email_address, 
					p.birthdate, 
					p.current_study, 
					p.study_year ,
					p.student_number,
					p.iban,
					p.tnv,
					p.created_at
			FROM Users as u, Profiles as p 
			WHERE u.id = p.user_id
				AND p.processed = 1
				AND p.deleted_at IS NULL
		";

		return collect(DB::SELECT(DB::raw($query)));
	}

	public function boot($data)
	{	
		$users = $this->users();
		$this->title = "Overzicht van alle verwerkte leden";
		$this->body .= "<div class='image text-center space-outside-down-md'>
	    					<img class='img-responsive' style='height:50%; width:50%;' src='http://hmvactis.nl/images/logo.png' />
	    				</div>
	    				";

	    $this->body .= "<table class='table table-striped'>";
	    $this->body .= "<thead style='font-size:8px;'>
                            <tr>
                                <th>Naam</th>
                                <th> Adres </th>
                                <th>Telefoonnummer</th>
                                <th>Emailadres</th>
                                <th>Geboortedatum</th>
                                <th>Studie</th>
                                <th>Studiejaar</th>
                                <th>Studentnumber</th>
                                <th>IBAN</th>
                                <th> TNV </th>
                                <th>Gemaakt op</th>
                            </tr>
                        </thead>";

        $this->body .= "<tbody style='font-size:8px;'>";
        $this->body .= (new Tablefy($users))->format('horizontal');
		$this->body .= "</tbody>";
		$this->body .= "</table>";


	}
}