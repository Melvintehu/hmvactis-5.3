<?php

use Illuminate\Database\Seeder;
use App\Sponsor;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$sponsors = Sponsor::all();

    	foreach($sponsors as $sponsor){
    		$sponsor->delete();
    	}


    	$sponsors = [
    		[
    			'naam' => 'MEN Technology & Media',
    			'website' => 'www.mentechmedia.nl',
    			'description' => 'MEN Technology & Media Maatwerk op het gebied van websites, apps of logo’s. Het is een algemeen gegeven dat maatwerk gelijk staat aan hoge kosten. MEN Technology & Media bewijst dat dit absoluut niet hoeft. Maatwerk is de volledig naar wens vertaalde bouw van uw concept. In samenwerking met de klant garandeert MEN Technology & Media een resultaat die de verwachtingen van beide partijen overstijgt. Voor ons staat precisiewerk hoog in het vaandel. Volledige transparantie is daarnaast één van onze pijlers. MEN Technology & Media maakt geen gebruik van sjieke termen. Recht door zee en efficiënt. Dit alles voor een vooraf vastgestelde prijs zodat er achteraf geen verrassingen zijn. Geen website te groot en geen idee te complex. Naast HMV Actis hebben wij nog meer websites gemaakt voor de overige Groningse studieverenigingen. Neem eens een kijkje bij Gente(nog in ontwikkeling) of Maslow',
    			'main_partner' => 'nee',
			],

    		[
    			'naam' => 'Compenda',
    			'website' => '	www.compenda.nl',
    			'description' => 'Compenda is een organisatie gespecialiseerd op gebied van business solutions zoals CRM, CMS en ERP. Al sinds 1995 optimaliseren we het proces voor bedrijven uit verschillende branches met Compenda als ondersteuning. Omdat elke brache een eigen behoefte heeft hebben we standaartoplossingen per brache, effiecient, betaalbaar en vooral betrouwbaar. Voor ons staat de klant altijd op één, het proces is leidend en Compenda ondersteund. We zijn meer dan alleen een software oplossing. We ondersteunen bij het behalen van doelstellingen en denken vanuit oplossingen. Door onze brede kennis en verschillende interne expertises is Compenda in staat om direct in te spelen op behoeftes. Hierdoor zijn we uitgegroeid tot een branche specifieke Business Solution oplossing en ondersteunen we 500+ tevreden klanten.',
    			'main_partner' => 'ja',
			],


    		[
    			'naam' => 'Partycafe de Doos',
    			'website' => 'www.cafededoos.com',
    			'description' => 'In Partycafé de Doos organiseert HMV Actis elke maand haar borrel. De borrels worden vrijwel altijd gehouden op de laatste donderdag van de maand. De leden van HMV Actis krijgen bij de borrel korting op bier, wijn, frisdrank en op het Actisshotje. In plaats van de normale prijs is het tot 00:00 uur maar €1,- Partycafé is gevestigd aan de Gelkingestraat 11, te Groningen.',
    			'main_partner' => 'nee',
			],

			[
    			'naam' => 'Instituut Marketing Management',
    			'website' => 'www.hanze.nl/IMM',
    			'description' => 'Het Instituut voor Marketing Management van de Hanzehogeschool Groningen kent een onophoudelijke dynamiek. Studenten, docenten en management zijn voortdurend samen enthousiast bezig met hun vakgebied: internationale marketing, verkoop en ondernemerschap. Om in het echt aan de slag te kunnen, krijg je een solide theoretische basis en zorgen we voor de ontwikkeling van jouw kennis en competenties. Met actuele voorbeelden, de beste docenten en uitdagende projecten als miniondernemingen en interactieve managementgames, vergroot en verdiep je je kennis. We leren je om door te zetten en anderen te overtuigen. Een belangrijk kenmerk daarbij is dat mensen uit de praktijk samenwerken met jou als student.',
    			'main_partner' => 'nee',
			],

			[
    			'naam' => 'De Drie Gezusters',
    			'website' => 'www.driegezustersgroningen.nl/',
    			'description' => 'Hotel de Doelen (onderdeel van de Drie Gezusters) is de locatie waar de Algemene Ledenvergaderingen van HMV Actis worden gehouden. Al vijf jaar lang wordt de Algemene Ledenvergadering van HMV Actis gehouden bij Hotel de Doelen. Hierdoor ontvangen leden korting op de drankje bij de Drie Gezusters.',
    			'main_partner' => 'nee',
			],

			[
    			'naam' => 'Athena College',
    			'website' => 'www.athenacollege.nl',
    			'description' => 'AthenaCollege is een organisatie voor studenten door studenten met een sterke focus op kwaliteit. Wij hebben topstudenten uit iedere richting aangetrokken om de lessen zo optimaal mogelijk in te richten. Bij de bijlessen zal er altijd gewerkt worden met ons eigen geschreven lesmateriaal. Dit materiaal is zorgvuldig samengesteld door ons team en bestaat uit oefenstof die op tentamenniveau zal zijn. Op deze manier raak je gewend aan de stof zoals deze ook getentamineerd zal worden, en zal je dus beter voorbereid zijn op de uiteindelijke toets. De beste studenten uit hogere jaren worden gescout voor de functie van bijlesdocent, waarbij alleen diegene overblijven die het meest sociaal vaardig zijn en goed zijn in het overbrengen van informatie op een zo duidelijk mogelijke manier.',
    			'main_partner' => 'nee',
			],

			[
    			'naam' => 'Wasautomatenverhuur.nl',
    			'website' => 'www.wasautomatenverhuur.nl',
    			'description' => 'Woon jij op jezelf maar heeft jouw kamer of appartement nog geen wasmachine? kijk dan snel op www.wasautomatenverhuur.nl en vind een wasmachine voor maar 9 euro per maand. Op deze site kun je ook nog kijken naar drogers,koelkasten en vaatwassers. En ga je uit huis dan kun je gratis een huur overdrachtscontract aanvragen!',
    			'main_partner' => 'nee',
			],

			[
    			'naam' => 'Traffic4u',
    			'website' => 'www.traffic4u.nl',
    			'description' => 'Traffic4u is een online marketingbureau, gespecialiseerd in Result Driven Online Marketing. Traffic4u is onderdeel van IPG Mediabrands. Wij helpen bedrijven het maximale uit online te halen. Dat is onze missie, dat drijft ons. Wij zijn betrokken bij onze klanten, wij worden enthousiast van samenwerkingen met ambitieuze bedrijven die (online) willen groeien. Door onze innovatieve specialisten, gecombineerd met een gezonde dosis nuchterheid, zijn wij uitgegroeid tot marktleider in Result Driven Online Marketing. Traffic4u is onderdeel van Yamondo, een netwerk van internationale result driven online marketing bureaus. Door deze lokale aanpak zijn wij in staat om het maximale resultaat te behalen met internationale campagnes.',
    			'main_partner' => 'nee',
			],


		

			[
    			'naam' => 'Enie.nl',
    			'website' => 'www.enie.nl',
    			'description' => 'WIJ GELOVEN IN TRANSITIE Enie.nl maakt deel uit van de transitie waarbij de keuzes en verantwoordelijkheden worden neergelegd bij het individu. Wij streven naar een wereld waarin duurzame energie de nummer één bron van energie is. Deze energiebron wordt door mensen zelf gecreëerd en gecontroleerd en geen enkele energieleverancier of producent kan hier invloed op uitoefenen. In de optiek van enie.nl is zonne-energie dé manier om dit mogelijk te maken. Zonne-energie is een middel om terug te gaan naar de essentie van energie en de uitputting van de aarde te laten stagneren. Het geeft een uitzonderlijke voldoening om met elkaar te werken aan een duurzame toekomst en dit elke dag weer meetbaar te maken. ONZE BETEKENIS In een wereld waarbij de fossiele brandstoffen uitgeput raken en waarbij slechts een selecte groep mensen gebruik kan maken van duurzame alternatieven, is er behoefte aan een partij die duurzame energie toegankelijk maakt voor een grote groep mensen. Het is het doel van enie.nl om de organisatie te zijn die bewustwording creëert en duurzame energie mogelijk maakt voor iedereen.',
    			'main_partner' => 'nee',
			],

			

			[
    			'naam' => 'Reclameland',
    			'website' => 'www.reclameland.nl',
    			'description' => '	Reclameland B.V. is een Nederlandse online drukkerij. Professionaliteit staat bij ons voorop. Zo werken we met de beste offset en digitale drukpersen en buigen onze medewerkers veelal op jarenlange ervaring. Drukwerk leveren we dan ook altijd in hoogwaardige kwaliteit. Reclameland is met een uitstekend logistiek netwerk dé nummer 1 online drukwerk leverancier. Bij Reclameland drukken we meer dan 50.000.000 flyers per jaar! Maar ook visitekaartjes, folders, briefpapier en enveloppen vliegen de deur uit. We zijn dé drukkerij met de snelste levering en de scherpste prijzen. Daarnaast zijn we al drie jaar op rij de nummer 1 drukkerij van Nederland. Een resultaat waar we trots op zijn!',
    			'main_partner' => 'nee',
			],

			[
    			'naam' => 'Softwarevergelijken.nu',
    			'website' => 'www.softwarevergelijken.nu',
    			'description' => "Wij zijn een onafhankelijke vergelijker van bedrijfssoftware. We geven je een objectieve vergelijking van o.a. boekhoudprogramma's, facturatiesoftware, urenregistratiesoftware, webshopsoftware en relatiebeheersoftware. Het is onze missie om alle ondernemers en bedrijven in Nederland te helpen de juiste software te vinden. Software die jou het leven makkelijker maakt en de mogelijkheid geeft om te doen waar je goed in bent.",
    			'main_partner' => 'nee',
			],

			[
    			'naam' => "Hemingway's Cuba",
    			'website' => 'http://hemingwaygroningen.bennergroep.nl/',
    			'description' => 'Het pure en ambachtelijke van Hemingway’s schrijfkunst vind je terug in de samenstelling van de gerechten, de cocktails en de inrichting van de zaak. Met een knipoog naar zijn decadente levensstijl. De menukaart weerspiegelt de rijke diversiteit aan tradities en culturen die Hemingway op zijn reizen en verblijfplaatsen tegenkwam.',
    			'main_partner' => 'nee',
			],

			[
    			'naam' => 'Maallust',
    			'website' => 'www.maallust.nl',
    			'description' => 'MAALLUST, EEN BIJZONDERE BROUWERIJ Op het industriecomplex Maallust vond de verwerking van landbouwproducten plaats. De brouwerij bevindt zich in het gebouw van de vroegere graanmaalderij van het Gevangenisdorp. Dus waan uzelf in een andere wereld, op een plek die zoveel geschiedenis uitademt die nog steeds voelbaar is. DE KOPEREN KETELS VAN MAALLUST De ketels vormen het hart van elke bierbrouwerij. Onze ketels zijn geleverd door Kaspar Schulz uit Bamberg, de Rolls-Royce onder de brouwketels. Een topkwaliteit brouwinstallatie om onze speciaalbieren mee te brouwen. DE MOOISTE GRONDSTOFFEN De grondstoffen voor onze speciaal- bieren worden met zorg geselecteerd. Alleen de aller beste kwaliteit is goed genoeg voor ons heerlijke Maallustbier. BROUWEN MET TOEWIJDING EN PASSIE Onze bierbrouwers Gert en Carina Kelder brouwen met toewijding en passie onze smaakvolle, authentieke bieren. Bieren met de smaak van vroeger. Geïnspireerd door oude biertypen worden in de koperen ketels bieren van zowel hoge als lage gisting gebrouwen. De bieren kenmerken zich door de mooie hoparoma’s en een uitgebalanceerd evenwicht tussen bitter en zoet. GESCHIEDENIS VEENHUIZEN, HOLLANDS SIBERIË Hollands Siberië, zo werd Veenhuizen in vroegere tijden ook wel genoemd. Rond 1825 werden duizenden bedelaars, landlopers, weduwen en wezen uit het hele land naar dit verre oord verbannen. Ze woonden in drie grote dwang- gestichten, die waren gebouwd door de Maatschappij van Weldadigheid, opgericht door generaal Johannes van den Bosch. Het was bedoeld als sociaal experiment om paupers woeste gronden te laten ontginnen. Veenhuizen maakt nu als gevangeniskolonie aanspraak op het predicaat Werelderfgoed-monument. BIER VERZOET DE ARBEID Veenhuizen was een zo goed als autarkisch geheel: met eigen scholen, landerijen, een bakker, slachterij, weverij en spinnerij, kerken, een begraafplaats en brandweerkazerne. Meubels en kleding werden zoveel mogelijk gemaakt in eigen werkplaatsen. Zo bestond Veenhuizen uit vier clusters: Landbouw, Zorg, Onderwijs en Arbeid. DE 25 ZWARE JONGENS Bierbrouwerij Maallust is een bijzonder initiatief van een select gezelschap: 25 liefhebbers die zichzelf de Zware Jongens noemen sloegen de handen ineen en stichtten deze mooie brouwerij in Veenhuizen.',
    			'main_partner' => 'nee',
			],
	


    	];


    	foreach($sponsors as $sponsor){
    		$newSponsor = new Sponsor;

    		$newSponsor->name = $sponsor['naam'];
    		$newSponsor->website = $sponsor['website'];
    		$newSponsor->description = $sponsor['description'];
    		$newSponsor->main_partner = $sponsor['main_partner'];

    		$newSponsor->save();

    	}


    }
}
