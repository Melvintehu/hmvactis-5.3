<?php

use Illuminate\Database\Seeder;
use App\News;


class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$news = News::all();
    	foreach ($news as $newsMessage) {
    		$newsMessage->delete();
    	}
        
    	$newsMessages = [
    		['Buitenlandse reis bestemming', '2016-01-28', 'De buitenlandse reis bestemming is bekend! De buitenlandse reis commissie organiseert dit jaar een reis naar het prachtige Boedapest.'],
    		['Lezing YellowBird', '2016-05-19', 'YellowBird is wereldleider in full end-to-end Virtual Reality concepts. Gestart in 2009 en constant op zoek naar de grenzen van video technology! YellowBird is het meest ervaren 360º video and VR bedrijf in de wereld en hebben meer dan 100+ projecten wereldwijd voor o.a. Heineken, Red Bull, Mini, Landrover, Porsche, EA, Nike.. ga zo maar door. Ben jij benieuwd hoe een marketingvideo bedrijf als YellowBird zich staande houdt in een grote markt met grote bedrijven? Kom dan naar de lezing van YellowBird! Er wordt o.a. gesproken over hun marketingstrategie en wat ze doen om hun concurrentie een stapje voor te blijven. Verder zal er worden vertelt over hun pr en hoe ze dit onderhouden. Meer informatie over dit gave bedrijf?
				www.yellowbirdsdonthavewingsbuttheyflytomakeyouexperiencea3dreality.com'],

    		['Dennis Storm op HMV Actis Lustrum', '2016-05-26', 'Dennis Storm zal naast de kick-off van het lustrum dagvoorzitter zijn van het HMV Actis Student Conference! Voor meer informatie over de lustrum week en het Student Conference zie het lustrum programma Tijdens de Student Conference komen de ondernemingen Hamilton Bright, Peperzaken en de Merkfabriek een lezing verzorgen, daarnaast zal Dennis Storm een lezing geven over een “schitterend doemscenario”. Na afloop staan er hapjes, drankjes en pizza klaar! Tickets zijn GRATIS af te halen in het Atrium van de van Olsttoren of meld je aan via bestuur@hmvactis.nl! VOL=VOL'],
    		
    		['Road to the future coming soon!', '2016-05-12', 'Tijdens het congres ‘the road to your future’ zullen grote en jonge ondernemingen komen spreken over ondernemerschap en studenten informeren en inspireren over het bedrijfsleven. Met trots kondigen wij de volgende bedrijven aan: Randstad, Payt, Watermelon, Experty en een jonge student ondernemer die zijn eigen online webshop begonnen is. Randstad: iedereen kent Randstad wel, één van de grootste uitzendbureaus. Van Randstad zullen Jolanda van der Graaf en Ruben de Graaf komen spreken. Payt: Payt helpt organisaties bij online facturatie, debiteurenbeheer en incasso. Payt regelt voor meer dan 6000 klanten betalingen. Merijn Stapert is de CEO en oprichter van het bedrijf en zal een interessante lezing geven over zijn bedrijf. Watermelon: Alexander Wijninga zal namens Watermelon komen spreken, deze jonge ondernemer is gestopt met school en runt nu een succesvolle jonge onderneming. Watermelon regelt o.a. de belastingdienst en NU.nl hun klantenservice tool. Met Watermelon ben je altijd én overal bereikbaar. Experty: Experty is het bedrijf achter 344 niche webwinkels in 7 landen. Experty runt honderden web shops, verdeeld 4 hoofdmarkten: home, outdoor, sport en healthcare. Emmie Carabain zal een inspirerende lezing komen geven waarbij je als student veel van op kan steken. Online webshop: Onlangs heeft Jean-Pierre, student van de Hanzehogeschool, een online webshop geopend. Hij verkoopt zijn producten, de hoverboard, via deze online webshop. Deze getalenteerde student legt uit hoe hij zijn studie combineert met het ondernemen en ook deelt hij graag zijn ervaringen aan jullie. Kortom, het wordt een middag vol inspirerende sprekers! Na afloop worden er hapjes en de drankjes verzorgd hierdoor is er alle tijd om te netwerken. Nog een zeer leuk pluspunt is een speciale gast; Michiel Brouwer, deze student is zijn eigen bier aan het brouwen! Dus pak je kans en vraag Michiel alles wat je weten wilt. De dag zal verzorgd worden door onze enthousiaste dagvoorzitter Jelmer van der Wijk. Jelmer is altijd al actief geweest binnen HMV Actis en ondernemingsplatform Business Match Groningen. Jermer kan door zijn eigen ervaringen en eerdere evenementen het publiek een prettige, interactieve middag bezorgen! Geef je snel op via businesscommissie@hmvactis.nl' ],

    		['Bestuursinformatie dagen', '2016-04-20', 'Word jij het nieuwe gezicht van het 26e bestuur der Hanze Marketing Vereniging Actis? Op 30 maart en 20 april zullen wij je alles vertellen over de verschillende functies binnen het bestuur en wat welke functie nou precies in houdt. De hele dag staat het kantoor open voor een gezellige babbel of drankje! Solliciteren kan voor de volgende functies: Voorzitter Secretaris Penningmeester Intern Extern'],

    		['Aankondiging 5e Lustrum HMV Actis', '2016-02-24', 'Het aftellen is begonnen! Van 30 mei tot 3 juni organiseert HMV Actis haar 25-jarig bestaan met een spectaculaire Lustrum week . In deze Lustrum week zullen verschillende formele en informele activiteiten elkaar afwisselen met o.a. een student conference, bedrijfsbezoek, workshops, feesten en veel meer activiteiten wordt het een inspirerend en feestelijk 5e Lustrum. Voor het volledige programma, houdt de website en social media in de gaten!'],

    		['HMV Actis heeft een nieuwe Website!', '2016-02-08', 'HMV Actis heeft in samenwerking met MEN Technology & Media de laatste maanden hard gewerkt om een nieuwe website op te zetten. De vernieuwde website zal je nog beter op de hoogte houden van de komende activiteiten en nieuws. De komende maanden zal de site uitgebreid en verder uitgerold worden, dus stay in touch!'],

    		['Oud besturen diner', '2016-01-14', 'Ter gelegenheid van ons 5e lustrum nodigt HMV Actis alle besturen van de afgelopen 4 jaar uit voor een Lustrum diner. Het diner zal plaats vinden bij Benz in Groningen.'],
            ['Start introductie week 2016-2017', '2016-09-05', 'Ter gelegenheid van ons 5e lustrum nodigt HMV Actis alle besturen van de afgelopen 4 jaar uit voor een Lustrum diner. Het diner zal plaats vinden bij Benz in Groningen.'],
    		
    	];


    	foreach($newsMessages as $newsMessage){

    		$news = new News;
    		$news->title = $newsMessage[0];
    		$news->publish_date = $newsMessage[1];
    		$news->date_added = Carbon::now();
    		$news->description = $newsMessage[2];

    		$news->save();
    
    	}


    }
}
