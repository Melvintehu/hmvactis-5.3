<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\PageSection;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    	$pages = Page::all();
    	$sections = PageSection::all();

    	foreach ($pages as $page) {
    		$page->delete();
    	}

    	foreach($sections as $section){
    		$section->delete();
    	}

    	$pages = [



    		'Over ons' => [
    			['introductie tekst', 'over ons', 'HMV Actis, ook wel Hanze Marketing Vereniging Actis, is ontstaan op 20 december 1991. HMV Actis is de studievereniging voor het Instituut voor Marketing Management (IMM) aan de Hanzehogeschool te Groningen.'],
    			['de vereniging', 'De vereniging', 'HMV Actis organiseert elk jaar verschillende activiteiten om de afstand tussen haar leden en het bedrijfsleven te verkleinen. Het bestuur van HMV Actis kan niet zelf alle actviteiten organiseren, daarom zijn commissies onmisbaar. Er worden door het jaar door verschillende lezingen georganiseerd, workshops en bedrijfsbezoeken. Daarnaast wordt er een congres en career event georganiseerd en nog vele andere activiteiten, dit is allemaal voor en door de leden van HMV Actis. Het bestuur van HMV Actis is een eenjarig bestuur, dat wil zeggen dat elk studiejaar HMV Actis een nieuw bestuur heeft. Dit jaar heeft HMV Actis alweer het 5e Lustrum bestuur. Het beleidsplan van het 5e Lustrum bestuur vind je onder aan de website, net als het Huishoudelijk Reglement.'],
    			['Hoofddoelstelling', 'Hoofddoelstelling', 'De vereniging heeft ten doel de afstand tussen opleiding en praktijk te verkleinen door leden de mogelijkheid te bieden contact te leggen met het bedrijfsleven. HMV Actis biedt steun bij de persoonlijke ontwikkeling en toekomstige arbeidskansen voor de studenten.'],
    		],

    		'Nieuws' => [],
    		'Activiteiten' => [
    			['Activiteiten', 'Activiteiten', 'HMV Actis organiseert het hele jaar door verschillende, zowel formele en informele activiteiten. Een groot gedeelte van deze activiteiten worden georganiseerd door de verschillende commissies. Hieronder vind je alle geplande activiteiten van de komende maanden.'],

    		],


    		'Commissies' => [
    			['Commissies', 'Commissies', 'HMV Actis is jaarlijks op zoek naar nieuwe commissie leden die zich naast hun studie willen ontwikkelen en ontplooien op verschillende gebieden. Commissies zijn naast een onderscheiding op je cv ook een leuke manier op je netwerk te vergroten en nieuwe mensen te leren kennen. Hieronder ziet je momenteel alle commissies die HMV Actis heeft en waar ze het gehele jaar mee bezig zijn. Heb je interesse om in een commissie deel te nemen? Neem dan contact op met intern@hmvactis.nl'],
    		],

    		'Partners' => [
    			['Partners', 'Partners', 'Bent u na het bekijken van onze website als bedrijf geïnteresseerd geraakt in HMV Actis en wilt u kijken wat de mogelijkheden zijn? Dan kunt u hier uw (bedrijfs)gegevens achter laten. Wij zullen zo snel mogelijk contact met u opnemen.'],
    		],

    		'Kortingen' => [
    			['Kortingen', 'Kortingen', 'Lid zijn van HMV Actis heeft vele voordelen. Één van de voordelen is het gebruik van kortingen bij verschillende restaurants, bedrijven of winkels. Op de onderstaande pagina vind je verschillende kortingen, aangeboden door bedrijven in samenwerking met HMV Actis. Als bewijs van lidmaatschap bij HMV Actis kan je een Actis sticker ophalen bij kantoor T.215 die je op je studentenpas kunt plakken.'],
    		],


    		'Vacatures' => [
    			['Vacatures', 'Vacatures', 'Ben je op zoek naar een studie gerelateerde bijbaan? In de onderstaande vacaturebank vind je verschillende vacatures speciaal gericht op studenten. Ook voor hulp bij het zoeken van een stage of afstudeeropdracht kunnen wij je op weg helpen. Voor advies kan je langs komen op ons kantoor T2.15.']
    		],


    		'Contact' => [
    			['Contact', 'Contact', 'Heeft u een vraag of wilt u meer weten over HMV Actis? Wij horen het graag! Maak gebruik van het onderstaande contact formulier en we nemen zo snel mogelijk contact met u op.']
    		],

            'Homepage' => [
                ['Netwerken', 'Netwerken', 'HEen goed netwerk biedt kansen. Je kunt hierbij denken aan opdrachten, banen, projecten, kennis, toekomstige nieuwe klanten of goederen. De beste kansen worden altijd gedeeld binnen het eigen netwerk van personen, vaak al voordat ze überhaupt naar buiten komen.'],
                ['Zelfontplooiing', 'Zelfontplooiing', 'Weet jij nog niet goed wat je na je studie wilt doen? Door lid te zijn bij HMV Actis heb je de mogelijkheid om met verschillende bedrijven en mensen in contact te komen of commissiewerk te gaan doen. Daarnaast kan je met veel activiteiten die HMV Actis organiseert praktijkpunten verdienen.'],
                ['Cv building', 'Cv building', 'Bedrijven hechten veel waarde aan nevenactiviteiten die een student heeft ondernomen naast zijn studie. HMV Actis geeft de kans jezelf te onderscheiden en een kickstart te geven aan je carrière. Wil jij je inzetten voor de vereniging in de vorm van commissiewerk of bestuur? Neem dan contact met ons op.'],
                ['Gezelligheid', 'Gezelligheid', 'Wat is een vereniging zonder informele activiteiten! Elk jaar vindt er een gala, year beginning- en ending party plaats met daarbij elke maand een gezellige borrel in Partycafé de Doos met geregeld een gratis bier! Daarnaast organiseert HMV Actis ook activiteiten zoals paintballen, karten en andere leuke activiteiten met leuke kortingen!'],
            ],

    	];

    	foreach($pages as $key => $webPage){
			
	    	$page = new Page;
	    	$page->title = $key;
	    	$page->save();

	    	foreach($webPage as $section){
	    		$pageSection = new PageSection;

	    		$pageSection->page_id = $page->id;
	    		$pageSection->name = $section[0];
	    		$pageSection->title = $section[1];
	    		$pageSection->description = $section[2];
	    		$pageSection->save();

	    	}

    	}

    }
}
