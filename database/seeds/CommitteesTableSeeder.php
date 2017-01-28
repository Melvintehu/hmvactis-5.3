<?php

use Illuminate\Database\Seeder;
use App\Committee;

class CommitteesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$committees = Committee::all();

    	foreach($committees as $committee){
    		$committee->delete();
    	}


    	$committees = [
    		[
    			'name' => 'Feestcommissie',
    			'description' => 'Van leuke themafeesten tot aan een groot eindfeest in combinatie met andere studievereniging, de feestcommissie organiseert de vetste feesten! Elke eerste donderdag na studiefinanciering organiseert de feestcommissie een maandelijkse borrel in Partycafé de Doos met geregeld een gratis fust!',
    			'email' => '',
			],
            [
                'name' => 'Acquisitiecommissie',
                'description' => 'Deze commissie houdt zich het gehele jaar bezig met het benaderen van bedrijven om sponsoring binnen te halen in de vorm van geld of merchandising. Ben jij communicatief vaardig en heb je een vlotte babbel? Dan is de acquisitie commissie misschien iets voor jou!',
                'email' => '',
            ],
            [
                'name' => 'Buitenlandsereiscommissie',
                'description' => 'De buitenlandse reiscommissie houdt zich bezig met het organiseren van een studiereis naar het buitenland. De commissie regelt alles voor de reis, vanaf het uitkiezen van een bestemming tot de organisatie ter plekke. Behalve dat de reis vol zit met gezelligheid, cultuur snuiven en het uitgaansleven ontdekken, heeft de reis ook een serieus aspect, zoals een bedrijfsbezoek en universiteitsbezoek.',
                'email' => '',
            ],
            [
                'name' => 'Marketingcommissie',
                'description' => 'Deze commissie helpt bedrijven met uiteenlopende marketing issues of onderzoeken. De commissie gaat deze issues of onderzoeken oplossen door de opgedane kennis in de opleiding toe te passen in hun plan.',
                'email' => '',
            ],
            [
                'name' => 'Lustrumcommissie',
                'description' => 'Op 20 december 2016 bestaat HMV Actis 25 jaar! Dat betekent dat het dit jaar het 5e lustrum is en dat moet natuurlijk groots gevierd worden. De gehele lustrum week staat in teken van HMV Actis en haar leden. Een week vol met verschillende activiteiten, zoals lezingen/workshops, feesten, borrels. Al met al heel veel gezelligheid!',
                'email' => '',
            ],
            [
                'name' => 'Lezexcommissie',
                'description' => 'De Lezex commissie is voornamelijk in contact met het bedrijvensleven. Door actief bellen en verschillende contacten te leggen met het bedrijfsleven, organiseert deze commissie de meest interessante lezingen, bedrijfsbezoeken en workshops.',
                'email' => '',
            ],
            [
                'name' => 'Onderzoekscommissie',
                'description' => 'De onderzoekscommissie doet onderzoek naar verschillende onderwerpen waar vanuit de vereniging behoefte naar is. Tevens zal deze commissie contact hebben met de student assistenten voor het uitvoeren van de onderzoeken',
                'email' => '',
            ],
            [
                'name' => 'Businesscommissie',
                'description' => 'De business commissie organiseert het career event en een congres. Het career event is bedoelt om te netwerken en praktische zaken met betrekking tot mogelijke stage- en afstudeerplaatsen en potentiële werkplekken. Het congres wordt georganiseerd in samenwerking met bedrijven uit Groningen en omgeving. Dit congres is bedoelt voor IMM-studenten en docenten van de Hanzehogeschool. Het congres zal zorgen voor diversiteit door de verschillende sprekers.',
                'email' => '',
            ],
    	];


    	foreach($committees as $committee){
    		$newCommittee = new Committee;

    		$newCommittee->name = $committee['name'];
    		$newCommittee->description = $committee['description'];
    		$newCommittee->email = $committee['email'];

    		$newCommittee->save();

    	}


    }
}
