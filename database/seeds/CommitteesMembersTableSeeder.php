<?php

use Illuminate\Database\Seeder;
use App\CommitteeMember;
use App\Committee;

class CommitteesMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $committeemembers = CommitteeMember::all();

    	foreach($committeemembers as $committeemember){
    		$committeemember->delete();
    	}

    	$feestcommissie = 1;
    	$acquisitiecommissie = 2;
    	$buitenlandsereiscommissie = 3;
    	$marketingcommissie = 4;
    	$lustrumcommissie = 5;
    	$lezexcommissie = 6;
    	$onderzoekscommissie = 7;
    	$businessscommissie = 8;


    	$committeemembers = [
    		[
    			'committee_id' => $feestcommissie,
    			'name' => 'Emmeliek Birza',
    			'role' => 'Voorzitter',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $feestcommissie,
    			'name' => 'Karlo Blaauw',
    			'role' => 'Penningmeester',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $feestcommissie,
    			'name' => 'Boukje Mis',
    			'role' => 'Secretaris',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $feestcommissie,
    			'name' => 'Joes van Stralen',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $feestcommissie,
    			'name' => 'Roos Andreae',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $acquisitiecommissie,
    			'name' => 'Avelon Hoving',
    			'role' => 'Voorzitter',
    			'email' => 'onbekend',
    			'study' => 'International Business & Languages',
			],
			[
    			'committee_id' => $acquisitiecommissie,
    			'name' => 'Anna-Brecht Bruinsma',
    			'role' => 'Penningmeester',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $acquisitiecommissie,
    			'name' => 'Demi Groen',
    			'role' => 'Secretaris',
    			'email' => 'onbekend',
    			'study' => 'International Business & Languages',
			],
			[
    			'committee_id' => $buitenlandsereiscommissie,
    			'name' => 'Melle Boerkamp',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $buitenlandsereiscommissie,
    			'name' => 'Elleke Gorter',
    			'role' => 'Penningmeester',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $buitenlandsereiscommissie,
    			'name' => 'Roos Andreae',
    			'role' => 'Secretaris',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $buitenlandsereiscommissie,
    			'name' => 'Jia Jun Lee',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'International Business & Languages',
			],
			[
    			'committee_id' => $buitenlandsereiscommissie,
    			'name' => 'Mariah Kok',
    			'role' => 'Voorzitter',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $marketingcommissie,
    			'name' => 'Joeri Top',
    			'role' => 'Voorzitter',
    			'email' => 'onbekend',
    			'study' => 'International Business & Languages',
			],
			[
    			'committee_id' => $marketingcommissie,
    			'name' => 'Emily Legtenberg',
    			'role' => 'Secretaris',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $marketingcommissie,
    			'name' => 'Bram Groenveld',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $marketingcommissie,
    			'name' => 'Juan Camilo Arboleda',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'Small Business & Retail Management',
			],
			[
    			'committee_id' => $lustrumcommissie,
    			'name' => 'Michiel Adding',
    			'role' => 'Voorzitter',
    			'email' => 'onbekend',
    			'study' => 'International Business School',
			],
			[
    			'committee_id' => $lustrumcommissie,
    			'name' => 'Zoë van Embden',
    			'role' => 'Penningmeester',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $lustrumcommissie,
    			'name' => 'Juliët Oostra',
    			'role' => 'Secretaris',
    			'email' => 'onbekend',
    			'study' => 'International Business & Languages',
			],
			[
    			'committee_id' => $lustrumcommissie,
    			'name' => 'Freek van Leijden',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'Small Business & Retail Management',
			],
			[
    			'committee_id' => $lezexcommissie,
    			'name' => 'Sarah Wessels',
    			'role' => 'Voorzitter',
    			'email' => 'onbekend',
    			'study' => 'Small Business & Retail Management',
			],
			[
    			'committee_id' => $lezexcommissie,
    			'name' => 'Paul Eilander',
    			'role' => 'Penningmeester',
    			'email' => 'onbekend',
    			'study' => 'Small Business & Retail Management',
			],
			[
    			'committee_id' => $lezexcommissie,
    			'name' => 'Jeroen van der Valk',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $lezexcommissie,
    			'name' => 'Tessa Venema',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $onderzoekscommissie,
    			'name' => 'Joris van Meer',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'Commerciële Economie',
			],
			[
    			'committee_id' => $onderzoekscommissie,
    			'name' => 'Risko van Dasler',
    			'role' => 'Commissielid',
    			'email' => 'onbekend',
    			'study' => 'International Business & Languages',
			],
    	];


    	foreach($committeemembers as $committeemember){
    		$newCommitteeMember = new CommitteeMember;

    		$newCommitteeMember->committee_id = $committeemember['committee_id'];
    		$newCommitteeMember->name = $committeemember['name'];
    		$newCommitteeMember->role = $committeemember['role'];
    		$newCommitteeMember->email = $committeemember['email'];
    		$newCommitteeMember->study = $committeemember['study'];

    		$newCommitteeMember->save();

    	}
    }
}
