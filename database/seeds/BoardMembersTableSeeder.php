<?php

use Illuminate\Database\Seeder;
use App\BoardMember;


class BoardMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boardMembers = BoardMember::all();

    	foreach($boardMembers as $boardMember){
    		$boardMember->delete();
    	}


    	$boardMembers = [
    		[
    			'board_id' => '1',
    			'name' => 'Marjan Bierema',
    			'description' => '',
    			'role' => 'Voorzitter',
    			'email' => '',
    			'study' => 'Derdejaars studente IBL',
    			
			],
            [
                'board_id' => '1',
    			'name' => 'Julius Jelsma',
    			'description' => '',
    			'role' => 'Penningmeester',
    			'email' => '',
    			'study' => 'Vierdejaars student SB&RM',
               
            ],
            [
                'board_id' => '1',
    			'name' => 'Maartje Sebek',
    			'description' => '',
    			'role' => 'Intern Coördinator',
    			'email' => '',
    			'study' => 'Derdejaars studente SB&RM',
               
            ],
            [
                'board_id' => '1',
    			'name' => 'Beau Gielesen',
    			'description' => '',
    			'role' => 'Extern Coördinator',
    			'email' => '',
    			'study' => 'Derdejaars student IBL',
                
            ],
            [
                'board_id' => '1',
    			'name' => 'Anne-Mirthe Lindeboom',
    			'description' => '',
    			'role' => 'Secretaris',
    			'email' => '',
    			'study' => 'Tweedejaars studente CE',
               
            ],

            
          
    	];


    	foreach($boardMembers as $boardMember){
    		$newBoardMember = new BoardMember;

    		$newBoardMember->board_id = $boardMember['board_id'];	
    		$newBoardMember->name = $boardMember['name'];
    		$newBoardMember->description = $boardMember['description'];	
    		$newBoardMember->role = $boardMember['role'];	
    		$newBoardMember->email = $boardMember['email'];	
    		$newBoardMember->study = $boardMember['study'];	



    		$newBoardMember->save();

    	}
    }
}
