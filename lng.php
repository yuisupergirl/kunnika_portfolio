<?php
// holds lng texts
$lngString = array();

// default language
if(empty($_SESSION["lng"])) {
	 $_SESSION["lng"] = "da";
}

// set language if it changes
if(!empty($_GET["lang"]) && ($_GET["lang"] == "da" || $_GET["lang"] == "en")) {
	$_SESSION["lng"] = $_GET["lang"];
}

// return the language text
function t($key) {
	global $lngString;
	return $lngString[$key][$_SESSION["lng"]];
}

$lngString = array(
	"Danish" => array(
		"en" => "Danish", 
		"da" => "Dansk"
	),
	"English" => array(
		"en" => "English", 
		"da" => "Englisk"
	),
	"About me" => array(
		"en" => "About me", 
		"da" => "Om mig"
	),
	"Projects" => array(
		"en" => "Project", 
		"da" => "Projekt"
	),
	"Contact" => array(
		"en" => "Contact", 
		"da" => "Kontakt"
	),
	"A bit about me" => array(
		"en" => "A bit about me", 
		"da" => "Lidt om mig"
	),
	"Hi My name is Kunnika Bryrup description" => array(
		"en" => "  Hi My name is Kunnika Bryrup.<br>\n".
				"I study the Digital Digital Concept Development at Campus Slagelse, where I learn to develop strategic concepts, development of onIline shop, digital - concept and marketing and the management. <br><br> I am a graduate of a multimedia designer in 2015. I have graphic capabilities and have programming experience.<br><br>\n".
				"", 
		"da" => "Hej Jeg er Kunnika Bryrup.\n". 
				"Jeg er færdig uddannet som Digital konceptudvikler og det handler om at udvikle digitale koncepter på de forskellige medier og platforme med fokusere på brugeroplevelse. Det er digital markedsføringsstrategi (planlægning og ideudvikling), digitalt design (app og hjemmeside-design), digital kommunikation, målgruppeanalyse og brugertest som jeg har arbejdet med.   <br><br> \n".

				""
	),
	"Education" => array(
		"en" => "Education", 
		"da" => "Uddannelse"
	),
	"My projects" => array(
		"en" => "My projects", 
		"da" => "Min projekt"
	),
	"Here are some examples of projects" => array(
		"en" => "My projects that I had worked with my team at campus Slagelse.", 
		"da" => "Mine projekter"
	),

	"Conso_ivs" => array(
		
		"en" => "A digital marketing campaign, vegetable's campaign", 
		"da" => "Conso Ivs er et iværksætterselskab virksomhed som ejer af Jonas Ghiyati.  I den virksomhed produceres argan oile produkter som hedder Argador. Argador er et naturlige produkt som indhold argan oile. Det er Dansk produkter uden parfume parabener og farvestoffer. Conso Ivs vil gerne tilbyde nye høj kvalitet produkter til kunder med levere pris. Produkterne har større indhold af argan oile  end de andre produkter på markedet. De står selv for produktion og derfor vælge selv de gode ingrediensen for at være sikker produkter med en god kvalitet. Conso Ivs fastsætter en pris som passer til alle som vil gerne have en god pleje og tage hensyn til miljø.<br> \n".

			"Jeg har lært utrolig meget og fik lov til at udføre relevante opgaver. f.eks. viden om fagmiljøet, jobfunktioner og interessenter. Evne til selvstændigt at deltage i professionelt og tværfagligt samarbejde og tage ansvar for at færdiggøre egne opgaver. Deltage i planlægning og gennemførelse af virksomhedens."
	),

	"Pura_estetica" => array(
		
		"en" => "A digital marketing campaign, vegetable's campaign", 
		"da" => "Vi har arbejdet med digital markedsføring for Pura Estetica under vores PBV projekt. Vi har undersøgt hvordan Pure Estetica kan anvende digital markedsføring til at nå deres fremtidsvision. Det er en digital markedsføring-plan som vi har udarbejdet for Pura Estetica, så virksomheden kan markedsføre sig, og gøre sig bemærket hos den relevante målgruppe."
	),

	"Musicon wayfinding" => array(
		"en" => "A digital marketing campaign, vegetable's campaign", 
		"da" => "Vores ide er at skab en vejvisningsløsning, som kan understøtte fortællingen om områdets historie, samt formidle Musicons nuværende identitet og byliv. Musicon er stadig under udvikling og vi vil derfor også tage højde for dette, så vores løsning også kan tilpasses efterhånden, som bydelen udvikler sig. I vores løsning skal vi også tænke på interkulturel kommunikation, da vi skal tage hensyn til, at hvis brugeren er en turist, at ommunikaitonen også skal fremgå på engelsk. Grundet at byen er så meget i udvikling som den er, vil vores løsning være en midlertidig løsning, som kan udvikles hen af vejen, som byen udviker sig."
	),


	"Coop campaign" => array(
		"en" => "A digital marketing campaign, vegetable's campaign", 
		"da" => "En digital marketing kampagne, Grønsagers kampagne"
	),
	"Coop discription" => array(
		"en" => "Develop a digital marketing campaign that will make Coop customers as well as potential Coop customers (members and non members of Coop) buy more vegetables and more different kinds of vegetables than they do today.", 
		"da" => "Under den her projekt har vi arbejdet med udvikle en digital marketing kampagne, der skal gøre Coop kunder som er potentielle Coop kunder (medlemmer og ikke medlemmer af Coop) køber flere grøntsager og flere forskellige former for grøntsager, end de gør i dag. <br> \n".

		"Vores koncept skal motivere de unge mellem 18 og 30 år til at købe flere grøntsager og samtidig give de unge inspiration til nye retter og/eller inspiration til at afprøve nogle nye grøntsager. Derudover har vi udviklet en app til de unge, med opskrifter, så når de står i supermarkedet, har de mulighed for at søge på en specifik grøntsag og derefter dukker der forskellige opskrifter op med den pågældende grøntsag. App’en skal hjælpe de unge med at få mere inspiration i hverdagen til noget andet end hvad de plejer."
	),
	"Coop link" => array(
		"en" => "See Coop Campagne's page here (Phototype for mobile)", 
		"da" => "Se Coop Kampagnes side her (Phototype for mobile)"
	),
	
	"NNU campaign" => array(
		"en" => "Smart Conferences", 
		"da" => "Smart Konferencer"
	),
	"NNU discription" => array(
		"en" => "To develop a digital communication design solution that makes conferences smarter, more efficient and easier for participants and organizers.", 
		"da" => "NNU har givet os en mulighed for at udvikle en digital kommunikation design løsning, der gør konferencer smartere, mere effektiv og lettere for deltagere og arrangører. 
		Vi har valgt en løsning at lave en kombination af både en app og en website, som fungere konfigureret, dvs. ændres noget på den ene platform ændres det også på den anden. Vi har valgt også at have en tilhørende website i det, at det vil være lettere at bruge før og efter konferencen, mens appens brug er tiltænkt til primært at være under selve konferencen. App og website vil have de samme funktioner tilgængelige, mens appen vil have specielle funktioner specielt envendt til brug under konferencen."
	),
	"NNU link" => array(
		"en" => "See MyCon's concept here...", 
		"da" => "Se MyCons koncept here..."
	),
	"Wuxus campaign" => array(
		"en" => "Data Driven", 
		"da" => "Data "
	),
	"Wuxus discription" => array(
		"en" => "To get insights in how data can create value in relation to the business model.", 
		"da" => "Vi har fået en opagve for at få indsigt om hvordan data kan skabe en værdi til virksomhed i forhold til forretningsmodellen. Vores koncept er en Big Savnings som det vil hjælpe folk til at spare brændstof, fordi der vil være en sensor som sidder i brændstofs tanken og som også er tilsluttet kilometer måleren, på denne måde kan fragt firmaerne have mulighed for kunne måle brændstof forbruget og se kilometer antallet, og alt dataen skal indsamles for at se hvordan at fragt bilerne kan blive mere grønne og spare brændstof."
	),
	"Wuxus link" => array(
		"en" => "", 
		"da" => ""
	),
	"Post city discription" => array(
		"en" => "To create a design solution for everyday life in the Post City using digital technology, and make a prototype of solution.", 
		"da" => "Projekt hanlder om at lave en designløsning til hverdagens liv i Post City ved hjælp af digital teknologi. Vi hat lavet en prototype af løsningen med digital teknologi for familie som kombinere motion og give dem en flugt fra virkeligheden."
	),


	"Evision" => array(
		"en" => "Internship", 
		"da" => "Praktik"
	),
	"Evision discription" => array(
		"en" => "", 
		"da" => "Evision Innovation er et it-udviklingshus med fokus på e-handel forankret i back-end produkterne Microsoft Dynamics AX, NAV og C5 og CMS produkterne Sitecore og Umbraco.<br>\n".
		"Det er i design og marketing afdelingerne som jeg arbejder med i perioden fra den 2. februar til den 10. april 2015 hos Evision Innovation i Herlev. I løbet af min praktik hos Evision Innovation, har jeg fået lov til at arbejde meget selvstændigt, med fuld mulighed for at bede om vejledning. Jeg har gennem hele forløbet deltaget og udført forskellige opagver. f.eks. redesigne deres hjemmeside, responsive webdesign og testing"
	),

	"Eksemskole campaign" => array(
		"en" => "Eksemskole's website", 
		"da" => "Eksemskoles hjemmeside"
	),
	"Eksemskole discription" => array(
		"en" => "To develop a website with a booking system where you can see where and when Eczema School will be present. There will be easier for people to sign up for eczema school and to see information about the participants (name and how many participants will join)<br>\n".

          "There will be possible for people to ask questions and seek advice about eczema. People can discuss and help each other on the forum.", 
		"da" => " Eksemskolens primære formål er at give den nødvendige viden om børneeksem, så man bliver god til, at håndtere sygdommen i dagligdagen og så man ved, hvad man kan gøre, hvis sygdommen forværres.<br>\n".
		"Vi har arbejdet med at udvikle en hjemmeside med et booking system, hvor du kan se, hvor og hvornår Eksem Skole vil holde deres undervisning. Der vil være lettere for folk at melde sig til eksem skole og at se oplysninger om deltagerne (navn og hvor mange deltagere vil deltage). Der vil være muligt for folk at stille spørgsmål og søge en god råd om eksem. Folk kan diskutere og hjælpe hinanden på forum."
	),
	"Eksemskole link" => array(
		"en" => "See Eksemskole's website here...", 
		"da" => "Se Eksemskoles hjemmeside her..."
	),
	"Trelleborg campaign" => array(
		"en" => "Cultural life in Slaglse", 
		"da" => "Kulturs liv i Slaglse "
	),
	"Trelleborg discription" => array(
		"en" => "To create a microsite of one specific cultural that can make people in and outside Slagelse be able to share their experiences with each other.", 
		"da" => "Vores formål er at lave et microsite af en bestemt kulturel samt en strategi, hvor vi gerne vil fokusere på Trelleborg og fællesskaberne omkring Trelleborg. Trelleborgs microsite vil give en mulighed for folk i og uden for Slagelse kunne dele deres oplevelse med hinanden."

	),
	"Trelleborg link" => array(
		"en" => "Take a look at Trelleborg's website...", 
		"da" => "Kigger på Trelleborg hjemmeside her..."
	),
	"Love Molle discription" => array(
		"en" => "Redesign Løve mølle's website, update brochure and a new logo.", 
		"da" => "Vi har arbejdet med at redesign Løve Mølle hjemmeside, opdater brochure og et nyt logo. Vi har også fået en opgave at hjælpe møllerne på Løve Mølle, med at få skabt en positioneringsstrategi, der drager fordel af de gode historier og oplevelser, man kan få ved møllen."
	),
    "Ines_Bukic_discription" => array(
		"en" => "Redesign Ines Bukic's website, brochure and a new logo.", 
		"da" => "Formålet med dette projekt er redesign en hjemmeside og andet relevant markedsføringsmateriale, at brande Ines Bukic og hendes datter Ilma.<br>\n".
		"Vi har lavet en Hjemmeside for Ines og vores formål er at motivere og inspirere kvinder til at dyrke zumba. Den glæde Ines selv føler ved zumba, skal gives videre til disse kvinder, så de opdager at zumba med densglæde og sociale aspekter, er med til at give dem mere overskud og energi i  hverdagen. Motivationen skal især findes i de videoer som Ines løbende vil lægge op på siden, hvor man kan få gode råd til at få mere overskud i hverdagen. Der skal ligeledes være tre online træningsprogrammer, som Ines laver i samarbejde med Herbalife, og som hun som den eneste i Danmark vil tilbyde."
	),
);
?>


