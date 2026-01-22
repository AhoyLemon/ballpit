<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Sluit dit scherm';

$helptxt['manage_boards'] = '
	<strong>Boards bewerken</strong><br />
	In dit menu kun je boards aanmaken, rangschikken en verwijderen, en de categorie&euml;n
	erboven aanpassen. Als je bijvoorbeeld een brede site hebt
	die informatie biedt op het gebied van &quot;Sport&quot;, &quot;Auto\'s&quot; en &quot;Muziek&quot;, zouden
	deze je categorie&euml;n worden. In elk van deze
	categorie&euml;n zou je waarschijnlijk een hi&euml;rarchie van &quot;sub-categorie&euml;n willen maken,
	oftewel de &quot;boards&quot; voor de onderwerpen binnen die categorie. Het is een simpele hi&euml;rarchie, met deze structuur:<br />
	<ul class="normallist">
		<li>
			<strong>Sport</strong>
			&nbsp;- Een &quot;categorie&quot;
		</li>
		<ul class="normallist">
			<li>
				<strong>Basketbal</strong>
				&nbsp;- Een board in de categorie &quot;Sport&quot;
			</li>
			<ul class="normallist">
				<li>
					<strong>Uitslagen</strong>
					&nbsp;- Een sub-board in het board &quot;Basketbal&quot;
				</li>
			</ul>
			<li><strong>Voetbal</strong>
			&nbsp;- Een board onder de categorie &quot;Sport&quot;</li>
		</ul>
	</ul>
	Met categorie&euml;n kun je een forum in globale onderwerpen verdelen (&quot;Auto\'s,
	Sport&quot;), en de &quot;boards&quot; daarin zijn de eigenlijke onderwerpen waarin
	leden hun berichten kunnen plaatsen. Een gebruiker die ge&iuml;nteresseerd is in Pintos
	zou een bericht kunnen plaatsen in &quot;Autos -> Pinto&quot;. Categorie&euml;n zorgen ervoor dat mensen
	snel kunnen vinden waarin ze ge&iuml;nteresseerd zijn: in plaats van een &quot;Winkel&quot; heb je
	heb je een &quot;Doe-het-zelf-winkel&quot; en een &quot;Kledingswinkel&quot; waar je naar toe kunt gaan. Dit vereenvoudigt je
	zoektocht naar &quot;regenpijplijm&quot; omdat je dan direct naar de Doe-het-zelf gaat
	in plaats van de Kledingwinkel (waar het onwaarschijnlijk is
	om regenpijplijm te vinden).<br />
	Zoals hierboven al is opgemerkt, is een board een hoofdonderwerp in een bredere categorie.
	Als je wilt discussi&euml;ren over &quot;Pinto\'s&quot;, dan zou je naar de &quot;Auto\'s&quot; categorie gaan en
	dan naar het &quot;Pinto&quot; board gaan om daar je mening te plaatsen.<br />
	De beheerfuncties voor dit menu item zijn het aanmaken van nieuwe boards
	in elke categorie, het rangschikken van boards (plaats &quot;Pinto&quot; achter &quot;Chevy&quot;), of
	het verwijderen van een volledig board.';

$helptxt['edit_news'] = '
	<ul class="normallist">
		<li>
			<strong>Nieuws</strong><br />
			Deze sectie stelt je in staat om de tekst van de nieuwsitems op de forumindexpagina te wijzigen.
			Je kunt al het nieuws wat je wil toevoegen (bijv. &quot;Vergeet de bijeenkomst komende dinsdag niet&quot;). Elk nieuwsitem moet in een apart invoervak ingevuld worden. De items worden in willekeurige volgorde getoond.
		</li>
		<li>
			<strong>Nieuwsbrieven</strong><br />
			Deze sectie stelt je in staat om nieuwsbrieven naar de leden van je forum te versturen. Allereerst selecteer je de groepen die je de nieuwsbrief wilt sturen en eventueel ook de groepen die je beslist geen nieuwsbrief wilt sturen. Eventueel kun je ook extra leden en e-mailadressen opgeven waar ook een kopie van de nieuwsbrief naar toegestuurd moet worden. Ten slotte typ je de nieuwsbrief in en kies je of je de nieuwsbrief via PM of via e-mail wilt versturen.
		</li>
		<li>
			<strong>Instellingen</strong><br />
			Deze sectie bevat een aantal instellingen met betrekking tot nieuws en nieuwsbrieven, waaronder een optie waarmee je kunt instellen welke groepen het nieuws kunnen aanpassen. Ook is er een instelling waarmee je nieuwsfeeds op je forum kunt inschakelen, alsook een instelling waarmee je de lengte (in weergeven karakters) voor elk bericht in een nieuwsfeed kunt instellen.
		</li>
	</ul>';

$helptxt['view_members'] = '
	<ul class="normallist">
		<li>
			<strong>Bekijk alle leden</strong><br />
			Je kunt alle leden van het forum bekijken. Je ziet een lijst van ledennamen. Je kunt op elk van die namen klikken
			om details over dat lid op te vragen (website, leeftijd, etc.), en als beheerder
			kun je deze parameters wijzigen. Je hebt volledige controle over leden, inclusief de mogelijkheid
			om ze te verwijderen van het forum.<br /><br />
		</li>
		<li>
			<strong>Wachtend op goedkeuring</strong><br />
			Dit gedeelte zie je alleen als je hebt ingesteld dat de beheerder nieuwe leden dient goed te keuren. Iedereen die zich aanmeld
			op het forum wordt alleen lid als deze aanmelding wordt goedgekeurd door de beheerder. Dit gedeelte geeft alle leden weer die
			nog wachten op goedkeuring, onder vermelding van hun e-mail- en IP-adres. Je kunt ze hier goedkeuren of afkeuren (verwijderen)
			door het vakje naast de aanmelding aan te vinken en de actie die je uitgevoerd wilt zien te kiezen uit de drop-down box onderaan.
			Bij het afkeuren van een aanmelding kun je kiezen om deze te verwijderen met of zonder deze persoon op de hoogte te stellen van je keuze.<br /><br />
		</li>
		<li>
			<strong>Wachtend op activering</strong><br />
			Dit gedeelte zie je alleen als je hebt ingesteld dat de aanmeldingen goedgekeurd moeten worden. Dit gedeelte toont alle
			leden die hun account nog niet hebben geactiveerd. Hier kun je de aanmeldingen accepteren, afwijzen of de leden een herinnering
			sturen die hun account nog niet hebben geactiveerd. Zoals hierboven kun je de persoon ook een e-mail sturen met de keuze die je
			hebt gemaakt.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Leden verbannen</strong><br />
	SMF biedt de mogelijkheid om gebruikers te &quot;verbannen&quot;, zodat mensen die vertrouwen op het forum hebben geschonden
	door te spammen, mensen lastig te vallen, etc. worden geweerd. Als beheerder kun je,
	wanneer je berichten bekijkt, het IP-adres zien dat een lid gebruikte op het moment dat dat bericht geplaatst werd. In de banlijst
	typ je simpelweg dat IP-adres in, sla je de trigger op, en kunnen ze niet langer vanaf dat IP-adres berichten plaatsen.<br />Ook kun je
	mensen op gebruikersnaam, hostname en e-mailadres verbannen.';

$helptxt['featuresettings'] = '<strong>Features en opties bewerken</strong><br />
	Er zijn een aantal features in deze sectie die naar jouw inzicht gewijzigd kunnen worden.';

$helptxt['securitysettings'] = '<strong>Beveiliging en moderatie</strong><br />
	Deze sectie bevat de instellingen gerelateerd aan de beveiliging op en moderatie van je forum.';

$helptxt['modsettings'] = '<strong>Modificatie-instellingen</strong><br />
	Deze sectie zou alle instellingen moeten bevatten die de op jouw forum ge&iuml;nstalleerde modificaties hebben toegevoegd.';

$helptxt['number_format'] = '<strong>Nummerformaat</strong><br />
	Je kunt deze instelling gebruiken om de manier waarop nummers op je forum getoond worden te veranderen. Het formaat van deze instelling is:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Waarin \',\' het karakter is om duizendtallen op te splitsen, \'.\' het karakter is waarmee decimalen gescheiden worden en het aantal nullen de nauwkeurigheid van de afrondingen bepaalt.';

$helptxt['time_format'] = '<strong>Tijdsweergave</strong><br />
	Je kunt zelf de tijd- en datumweergave aanpassen. Er zijn een hoop mogelijkheden, maar het is vrij simpel.
	Gebruik de volgende codes (voor meer informatie kun je kijken op <a href="http://www.php.net/manual/function.strftime.php">php.net</a>).<br />
	<br />
	De volgende conversie specifiers worden herkend in de format string: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - afgekorte weekdag naam<br />
	&nbsp;&nbsp;%A - volledige weekdag naam<br />
	&nbsp;&nbsp;%b - afgekorte maand naam<br />
	&nbsp;&nbsp;%B - volledige maand naam<br />
	&nbsp;&nbsp;%d - dag van de maand (01 tot 31) <br />
	&nbsp;&nbsp;%D<strong>*</strong> - hetzelfde als %m/%d/%y <br />
	&nbsp;&nbsp;%e<strong>*</strong> - dag van de maand (1 tot 31) <br />
	&nbsp;&nbsp;%H - uur gebruik makend van een 24 uurs klok (van 00 tot 23) <br />
	&nbsp;&nbsp;%I - uur gebruik makend van een 12 uurs klok (van 01 tot 12) <br />
	&nbsp;&nbsp;%m - maand als decimaal nummer (01 to 12) <br />
	&nbsp;&nbsp;%M - minuut als decimaal nummer <br />
	&nbsp;&nbsp;%p - &quot;am&quot; of &quot;pm&quot; afhankelijk van de huidige tijd<br />
	&nbsp;&nbsp;%R<strong>*</strong> - tijd gebruik makend van een 24 uurs klok <br />
	&nbsp;&nbsp;%S - seconde als decimaal nummer <br />
	&nbsp;&nbsp;%T<strong>*</strong> - huidige tijd, hetzelfde als %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2-cijferige jaaraanduiding (00 to 99) <br />
	&nbsp;&nbsp;%Y - 4-cijferige jaaraanduiding<br />
	&nbsp;&nbsp;%% - een letterlijk \'%\' karakter <br />
	<br />
	<em>* Werkt niet op Windows gebaseerde servers.</em></span>';

$helptxt['live_news'] = '<strong>Live aankondigingen</strong><br />
	Deze box toont recente aankondigingen van <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.
	Je zou hier af en toe eens moeten langskomen voor updates, nieuwe releases en andere belangrijke informatie van het Simple Machines-Team.';

$helptxt['registrations'] = '<strong>Registratiebeheer</strong><br />
	Deze sectie bevat alle functies die nodig zouden kunnen zijn voor het beheer van nieuwe registraties op het forum. Het bevat tot vier secties
	die zichtbaar zijn, afhankelijk van je instellingen. Te weten:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registreren nieuw lid</strong><br />
			Je kunt hier zelf leden registreren. Dit kan handig zijn bij forums waar het registreren van nieuwe leden dicht gezet is,
			of in gevallen waar de admin een test account wil aanmaken. Als de optie is geactiveerd dat het nieuwe lid een e-mail krijgt
			waarin een link is bijgesloten, dient men die te volgen om de account te activeren. Je kunt op deze manier ook leden een nieuw
			wachtwoord mailen indien daarom wordt verzocht.<br /><br />
		</li>
		<li>
			<strong>Registratie-overeenkomst bewerken</strong><br />
			Hiermee kun je de tekst instellen die wordt getoond wanneer leden zich registreren op je forum.
			Je kunt de standaard registratie-overeenkomst, die wordt gelever met SMF, naar believen aanpassen.
		</li>
		<li>
			<strong>Gereserverde namen bewerken</strong><br />
			Middels deze interface kun je woorden of namen specificeren die niet gebruikt mogen worden in namen van leden.<br /><br />
		</li>
		<li>
			<strong>Instellingen</strong><br />
			Deze sectie is alleen zichtbaar als je de \'Beheer forum en database\' permissie hebt. Vanaf dit scherm kun je instellen welke registratiemethode
			op je forum wordt gebruikt alsmede andere registratie-gerelateerde instellingen.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Moderatielog</strong><br />
	Deze sectie stelt leden van het moderatieteam in staat om alle moderatieacties te bekijken die de moderators van het forum hebben uitgevoerd. Om er zeker van te zijn dat
	deze verwijzingen naar activiteiten niet door de moderators kunnen worden gewist, kunnen de ingangen niet worden gewist tot 24 uur na de betreffende activiteit.';
$helptxt['adminlog'] = '<strong>Beheerlog</strong><br />
	Deze sectie stelt leden van het beheerteam in staat tot het bijhouden van een aantal administratieve acties. Om er zeker van te zijn dat
	beheerders deze verwijzingen naar activiteiten niet door beheerders kunnen worden gewist, kunnen de ingangen niet worden gewist tot 24 uur na de betreffende activiteit.';
$helptxt['warning_enable'] = '<strong>Gebruiker-waarschuwingssysteem</strong><br />
	Deze feature stelt leden van het beheer- en moderatieteam in staat om waarschuwingen te geven aan gebruikers, en om aan de hand van de waarschuwingsstatus bepaalde
	functies op het forum voor hen uit te schakelen. Wanneer deze functie wordt ingeschakeld, zal er een extra permissie beschikbaar komen in het permissiesscherm om aan te geven
	welke groepen waarschuwingen mogen geven aan gebruikers. Waarschuwingsniveaus kunnen gewijzigd worden vanuit het profiel van een gebruiker. De volgende mogelijkheden zijn beschikbaar:
	<ul class="normallist">
		<li>
			<strong>Waarschuwingsniveau voor gebruikerstoezicht</strong><br />
			Deze instelling definieert het percentage waarschuwing dat de gebruiker dient te bereiken om automatisch onder toezicht gezet te worden.
			Elke gebruiker met deze status zal in het moderatiecentrum in de gaten worden gehouden.
		</li>
		<li>
			<strong>Waarschuwingniveau voor berichtgoedkeuring</strong><br />
			Alle berichten geplaatst door gebruikers die dit percentage voorbij komen, zullen eerst goedgekeurd moeten worden door een beheerder of moderator van dit forum.
			Dit zal onafhankelijk werken van eventuele permissies die op een specifiek board van toepassing zijn.
		</li>
		<li>
			<strong>Waarschuwingsniveau voor gebruikerstillegging</strong><br />
			Als dit waarschuwingsniveau is bereikt, zal de gebruiker in kwestie geen berichten meer kunnen plaatsen voor een bepaalde tijd.
		</li>
		<li>
			<strong>Maximaal aantal waarschuwingspunten per dag</strong><br />
			Deze instelling limiteert het aantal punten dat een moderator dagelijks kan toevoegen of aftrekken van de waaarschuwingsstatus van een willekeurige gebruiker. Dit
			kan gebruikt worden om een moderator te limiteren tot een bepaalde hoeveelheid acties gedurende een bepaalde tijd. Deze instelling kan ook uitgeschakeld worden door een waarde van nul op te geven. Merk op dat
			gebruikers met beheerderrechten geen hinder ondervinden van deze instelling.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>Foutenlog</strong><br />
	Het foutenlog toont alle fouten die het forum genereert. Het laat alle fouten zien, gesorteerd op datum. De volgorde kun je aanpassen door
	op het zwarte pijltje naast iedere datum. Je kunt ook nog de fouten filteren door op de afbeelding naast iedere foutmelding te klikken.
	Zo kun je bijvoorbeeld per lid filteren. Als een filter actief is, zie je alleen de resultaten die bij dat filter behoren.';
$helptxt['theme_settings'] = '<strong>Thema-instellingen</strong><br />
	Het instellingen scherm laat je alle instellingen van een bepaald thema aanpassen. Je kunt hier bijvoorbeeld de thema directory en URL informatie
	wijzigen maar ook opties aanpassen die betrekking hebben op de lay-out van het forum. De meeste thema\'s hebben een aantal opties die kunnen worden
	geconfigureerd door leden om zo aan hun persoonlijke wensen tegemoet te komen.';
$helptxt['smileys'] = '<strong>Smileys en berichticonen</strong><br />
	Hier kun je smileys en smileysets toevoegen en verwijderen. Denk er aan dat je een smiley in alle sets laat voorkomen als je een smiley in een set toevoegt, anders zou dit
	verwarrend kunnen worden voor leden die verschillende sets gebruiken.<br /><br />

	Je kunt vanuit dit scherm ook de aangepaste berichticonen bewerken, indien je die hebt ingeschakeld op de instellingen-pagina.';
$helptxt['calendar'] = '<strong>Beheer kalender</strong><br />
	Hier kun je de huidige kalenderinstellingen bewerken en feestdagen die op de kalender zichtbaar zijn.';

$helptxt['serversettings'] = '<strong>Serverinstellingen</strong><br />
	Hier kun je de kernconfiguratie van je forum instellen. Deze sectie bevat de database- en URL-instellingen, alsook andere
	belangrijke configuratieitems zoals mailinstellingen en caching. Denk goed na wanneer je een instelling wil veranderen, want een fout
	zou het forum ontoegankelijk kunnen maken.';
$helptxt['manage_files'] = '
	<ul class="normallist">
		<li>
			<strong>Bekijk bestanden</strong><br />
			Blader door alle bijlagen, avatars en miniatuurweergaven die opgeslagen zijn door SMF.<br /><br />
		</li><li>
			<strong>Bijlage-instellingen</strong><br />
			Configureer waar bijlagen opgeslagen moeten worden en stel restricties voor de bijlagetypen in.<br /><br />
		</li><li>
			<strong>Avatarinstellingen</strong><br />
			Configureer waar avatars opgeslagen worden en stel het aanpassen van avatars in.<br /><br />
		</li><li>
			<strong>Bestandsonderhoud</strong><br />
			Controleer en repareer fouten in de bijlagenmap en verwijder defecte bijlagen.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'Hier geef je aan hoeveel berichten je totaal op &eacute;&eacute;n pagina wilt zien in een bepaalde topic.';
$helptxt['enableAllMessages'] = 'Stel dit in op het <em>maximaal</em> aantal berichten dat een topic mag hebben voor het tonen van de \'allemaal\'-link. Als dit lager wordt ingesteld dan de &quot;Maximum aantal berichten vertonen op &eacute;&eacute;n pagina&quot;-instelling, zal de link simpelweg nooit getoond worden, terwijl een te hoge instelling het forum zou kunnen vertragen.';
$helptxt['enableStickyTopics'] = 'Sticky topics zijn topics die bovenaan de topiclijst blijven staan. Meestal worden deze gebruikt voor belangrijke
		berichten. Standaard kunnen alleen moderators en beheerders een topic sticky maken.';
$helptxt['allow_guestAccess'] = 'Als dit vak niet is aangevinkt, zullen gasten niets anders kunnen doen dan de primaire acties - inloggen, registreren, wachtwoordherinnering opvragen, etc. - op je forum. Dit is niet hetzelfde als gasten de toegang verhinderen tot de boards.';
$helptxt['userLanguage'] = 'Wanneer deze optie is ingeschakeld, krijgt de gebruiker de om zelf de taal te kiezen waarin het forum wordt weergegeven. De standaardtaal zal
		hetzelfde blijven.';
$helptxt['trackStats'] = 'Statistieken:<br />Dit zal leden in staat stellen om de meest recentste en meest populaire topics van je forum te kunnen zien.
		Ook zullen diverse andere statistieken worden getoond, zoals het hoogst aantal bezoekers, nieuwe leden en nieuwe topics.<hr />
		Pageviews:<br />Voegt een extra kolom toe aan de statistieken pagina met daarin het aantal pageviews van je forum.';
$helptxt['titlesEnable'] = 'Het activeren van extra titels geeft leden de mogelijkheid om zelf een extra titel onder hun gebruikersnaam te laten zien.
		<br /><em>Bijvoorbeeld:</em><br />Jeff<br />Toffe gast';
$helptxt['topbottomEnable'] = 'Deze optie voegt \'omhoog\' en \'omlaag\' knoppen toe, zodat leden door middel daarvan direct naar de boven- of onderkant van een pagina
		kan gaan, zonder te hoeven scrollen.';
$helptxt['onlineEnable'] = 'Deze optie toont een afbeelding waaraan je kunt zien of een lid online of offline is.';
$helptxt['todayMod'] = 'Met deze functie aangevinkt wordt er, indien van toepassing, in de datum &quot;Vandaag&quot; of &quot;Gisteren&quot; weergegeven.
		<strong>Voorbeelden:</strong><br /><br />
		<dt>
			<dt>Uitgeschakeld</dt>
			<dd>3 oktober 2009 om 12:59:18</dd>
			<dt>Alleen vandaag</dt>
			<dd>Vandaag om 12:59:18</dd>
			<dt>Vandaag en gisteren</dt>
			<dd>Gisteren om 21:36:55</dd>
		</dt>';
$helptxt['disableCustomPerPage'] = 'Vink deze optie aan om ervoor te zorgen dat gebruikers niet zelf in kunnen stellen hoeveel topics ze per pagina op de topicindex en hoeveel berichten ze per pagina in een topicweergave zien.';
$helptxt['enablePreviousNext'] = 'Hiermee worden links gegeven naar het volgende en vorige topic.';
$helptxt['pollMode'] = 'Deze functie is om leden toe te staan om polls te starten. Wanneer polls zijn uitgeschakeld, zullen bestaande polls worden verborgen
		in de topiclijsten. Je kunt er ook voor kiezen om de topics zonder hun polls te laten zien, door
		&quot;Toon polls als topics&quot; te kiezen.<br /><br />Om te kunnen bepalen wie polls kan plaatsen, bekijken enz., kun je
		de betreffende permissies toestaan of ontzeggen. Onthoud dit voor als polls niet werken.';
$helptxt['enableVBStyleLogin'] = 'Dit laat voor gasten een compact inlogveld zien onderaan je forum.';
$helptxt['enableCompressedOutput'] = 'Deze optie zal de uitvoer van het forum comprimeren om dataverkeerverbruik te besparen, maar het vereist wel dat
		zlib is ge&iuml;nstalleerd.';
$helptxt['disableTemplateEval'] = 'Standaard worden templates ge&euml;valueerd in plaats van simpelweg ingevoegd. Dit helpt bij het tonen van nuttige debug-informatie in het geval een template een fout bevat.<br /><br />
		Bij grote fora kan dit aangepaste proces echter significant trager zijn. Om die reden kunnen gevorderde gebruikers het, indien gewenst, uitschakelen.';
$helptxt['databaseSession_enable'] = 'Deze optie maakt gebruik van de database voor het opslaan van sessies - het werkt het best op load balanced servers, maar helpt tegen allerlei sessie-timeoutproblemen en kan het forum sneller maken.';
$helptxt['databaseSession_loose'] = 'Het aanzetten van deze optie bespaart dataverkeer van je forum, en zorgt ervoor dat het klikken op \'terug\' niet de pagina zal herladen - het nadeel is echter dat de (nieuw) iconen niet worden geactualiseerd, net als enkele andere dingen (tenzij je de pagina aanklikt in plaats van terug te gaan naar die pagina).';
$helptxt['databaseSession_lifetime'] = 'Dit is het aantal seconden dat een sessie blijft bestaan nadat deze voor het laatst is gebruikt. Als de sessie niet gebruikt wordt voor een te lange tijd, dan treedt er een \'timeout\' op. Een waarde hoger dan 2400 wordt aanbevolen.';
$helptxt['enableErrorLogging'] = 'Dit zal alle fouten, zoals een mislukte inlogpoging, loggen, zodat je later kunt bekijken wat er fout is gegaan.';
$helptxt['enableErrorQueryLogging'] = 'Dit zal de volledige naar de server verzonden query opslaan wanneer er een databasefout ontstaat. Daarvoor dient fouten loggen wel aan te staan.<br /><br /><strong>NB: dit zal ook de mogelijkheid om fouten te filteren aantasten.</strong>';
$helptxt['allow_disableAnnounce'] = 'Hiermee kunnen gebruikers ervoor kiezen om aankondigingen van topics niet meer te ontvangen.';
$helptxt['disallow_sendBody'] = 'Deze optie schakelt de optie uit om de teksten van reacties en bericht in de notificatie-mailtjes te ontvangen<br /><br />Vaak reageren leden op de notifactie-e-mail wat in de meeste gevallen betekent dat de forumbeheerder de reactie ontvangt.';
$helptxt['compactTopicPagesEnable'] = 'Deze optie zorgt voor een selectieve weergave van het aantal pagina\'s.<br /><em>Voorbeeld:</em><br />
	&quot;3&quot; resultaat: 1 ... 4 [5] 6 ... 9 <br />
	&quot;5&quot; resultaat: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Deze optie geeft onderaan de pagina in seconden weer hoelang SMF nodig had om de pagina op te bouwen.';
$helptxt['removeNestedQuotes'] = 'Deze optie zal citaten die al in een post aanwezig zijn verwijderen wanneer een bericht wordt geciteerd via een citaatknop.';
$helptxt['simpleSearch'] = 'Deze optie zorgt voor een simpele weergave van de zoekpagina, met daaronder een link naar de geavanceerde zoekpagina.';
$helptxt['max_image_width'] = 'Deze optie stelt je in staat om een maximum formaat in te stellen voor geplaatste afbeeldingen. Afbeeldingen kleiner dan het maximum zullen niet worden uitgerekt.';
$helptxt['mail_type'] = 'Met deze instelling kun je kiezen of je de standaard PHP-instellingen wilt gebruiken of dat je deze wilt vervangen door SMTP-instellingen. PHP ondersteunt geen authenticatie voor SMTP (wat door veel servers wel vereist wordt), dus als je dat wel wilt, moet je SMTP selecteren. Denk erom dat SMTP langzamer kan werken en bovendien zullen sommige servers geen gebruikersnaam en wachtwoord accepteren.<br /><br />Je hoeft geen SMTP-instellingen in te vullen als je de standaard PHP-instellingen gebruikt.';
$helptxt['attachment_manager_settings'] = 'Bijlagen zijn bestanden die leden kunnen uploaden, en kunnen bijvoegen aan een post.<br /><br />
		<strong>Controleer de extensie van de bijlage</strong>:<br /> Wil je de extensie van een bestand laten controleren?<br />
		<strong>Alleen deze bijlage-extensies toestaan</strong>:<br /> Je kunt de toegestane bestandsextensies hier instellen.<br />
		<strong>Bijlagenmap</strong>:<br /> Het pad naar je bijlagenmap<br />(voorbeeld: /home/sites/jouwsite/www/forum/attachments)<br />
		<strong>Maxiumumgrootte bijlagenmap</strong> (in kB):<br /> Selecteer hoe groot de bijlagenmap mag zijn, inclusief alle bestanden die erin zitten.<br />
		<strong>Maximumgrootte bijlagen per bericht</strong> (in KB):<br /> Selecteer de maximum bestandsgrootte van alle bijlagen in een bericht. Wanneer dit kleiner is dan de limiet per bijlage, zal dit het limiet zijn.<br />
		<strong>Maximumgrootte van &eacute;&eacute;n bijlage</strong> (in kB):<br /> Selecteer de maximum bestandsgrootte voor elke afzonderlijke bijlage.<br />
		<strong>Maximum aantal bijlagen per post</strong>:<br /> Selecteer het aantal bijlagen dat een lid per bericht kan opslaan.<br />
		<strong>Toon de bijlage als afbeelding in het bericht</strong>:<br /> Als het ge&uuml;ploade bestand een afbeelding is, zal dit de afbeelding onder een bericht posten.<br />
		<strong>Pas de groote aan van plaatjes die onder de berichten staan</strong>:<br />Als deze optie is ingeschakeld, zal er een afzonderlijke (kleinere) afbeelding voor de miniatuur opgeslagen worden om dataverkeer te besparen.<br />
		<strong> Maximumbreedte en -hoogte van miniaturen</strong>:<br /> Wordt alleen gebruikt wanneer de &quot;Pas de groote aan van plaatjes die onder de berichten staan&quot; optie is ingeschakeld: de maximumbreedte en -hoogte die de miniaturen van bijlagen mogen hebben. De afbeeldingen zullen proportioneel worden verkleind.';
$helptxt['attachment_image_paranoid'] = 'Het inschakelen van deze optie zal zeer stricte bveiligingscontroles op afbeeldingsbijlagen inschakelen. Waarschuwing! Deze uitgebreide controles kunnen ook falen op onschadelijke afbeeldingen. Het wordt sterk aanbevolen om deze optie alleen te gebruiken in combinatie met het herencoderen van afbeeldingen, zodat SMF afbeeldingen die niet door de controle komen herencodeert en daarmee opschoont. In het andere geval, als herencoderen van afbeeldingen niet ingeschakeld is, zullen alle bijlagen die de controles niet passeren worden verworpen.';
$helptxt['attachment_image_reencode'] = 'Het inschakelen van deze optie zal herencoderen van ge&uuml;ploade afbeeldingsbijlagen inschakelen. Herencoderen van afbeeldingen verhoogt de beveiliging, zal tevens het verdwijnen van eventuele animaties in afbeeldingen tot gevolg hebben. <br /> Deze feature is enkel te gebruiken als de GD-module is ge&iuml;nstalleerd op je server.';
$helptxt['avatar_paranoid'] = 'Inschakelen van deze optie zal zeer stricte bveiligingscontroles op avatars inschakelen. Waarschuwing! Deze uitgebreide controles kunnen ook falen op onschadelijke avatars. Het wordt sterk aanbevolen om deze optie alleen te gebruiken in combinatie met het herencoderen van avatars, zodat SMF avatars die niet door de controle komen herencodeert en daarmee opschoont. In het andere geval, als herencoderen van avatars niet ingeschakeld is, zullen alle avatars die de controles niet passeren worden verworpen';
$helptxt['avatar_reencode'] = 'Het inschakelen van deze optie zal herencoderen van ge&uuml;ploade avatars inschakelen. Herencoderen van avatars verhoogt de beveiliging, zal tevens het verdwijnen van eventuele animaties in avatars tot gevolg hebben. <br /> Deze feature is enkel te gebruiken als de GD-module is ge&iuml;nstalleerd op je server.';
$helptxt['karmaMode'] = 'Karma is een feature die de populariteit van een lid laat zien. Leden kunnen, indien toegestaan,
		andere leden meer of minder karma geven, waarmee dan het karma van de leden in kwestie wordt berekend. Je kunt het
		aantal berichten opgeven dat een lid nodig heeft om &quot;karma&quot; te kunnen hebben, de wachttijd aangeven tussen het stemmen en aangeven of de beheerders
		ook aan die wachttijd moeten voldoen.<br /><br />Of groepen al dan niet het karma van leden kunnen aanpassen, wordt geregeld
		door een permissie. Wanneer je dus problemen hebt met het laten werken van de karma: controleer de permissies.';
$helptxt['cal_enabled'] = 'De kalender kan worden gebruikt om verjaardagen te tonen of om belangrijke gebeurtenissen op het forum aan te geven.<br /><br />  <strong>Toon de dagen als link naar \'Post gebeurtenis\'</strong>:<br />Indien geactiveerd kunnen leden een gebeurtenis invoeren door op de datum te klikken waarop de gebeurtenis plaats vindt.<br />  <strong>Toon weeknummers</strong>:<br />Indien geactiveerd worden de weeknummers in de kalender getoond.<br />  <strong>Maximum aantal dagen vooruit op de forumindexpagina</strong>:<br />Dit getal geeft aan vanaf hoeveel dagen voor de gebeurtenis/verjaardag plaats vindt, dit op het forum getoond zal worden.<br />  <strong>Toon feestdagen op de forumindexpagina</strong>:<br />Indien geactiveerd worden de aankomende feestdagen in de kalenderbalk op de forumindexpagina getoond.<br />  <strong>Toon verjaardagen op de forumindexpagina</strong>:<br />Indien geactiveerd worden de aankomende verjaardagen in de kalenderbalk op de forumindexpagina getoond.<br />  <strong>Toon gebeurtenissen op de forumindexpagina</strong>:<br />Indien geactiveerd worden de aankomende gebeurtenissen in de kalenderbalk op de forumindexpagina.<br />  <strong>Standaard board om in te posten</strong>:<br />Hier geef je aan in welk board de gebeurtenissen standaard geplaatst worden.<br />  <strong>Sta niet aan een topic gekoppelde gebeurtenissen toe</strong>:<br />Indien geactiveerd kunnen leden gebeurtenissen op de kalender plaatsen zonder dat de gebeurtenis gekoppeld is aan een bericht in het forum.<br />  <strong>Minimumjaar</strong>:<br />Geef hier aan wat het &quot;eerste&quot; (oudste) jaar is dat op de kalender getoond wordt.<br />  <strong>Maximumjaar</strong>:<br />Geef hier aan wat het &quot;laatste&quot; (nieuwste) jaar is dat op de kalender getoond wordt.<br />  <strong>Gebeurtenissen over meerdere dagen toestaan?</strong>:<br />Indien geactiveerd kunnen er gebeurtenissen op de kalender geplaatst worden welke langer duren dan een dag.<br />  <strong>Maximaal aantal dagen voor een gebeurtenis</strong>:<br />Geef aan wat het maximum aantal dagen is dat een gebeurtenis mag duren op de kalender.<br /><br />  Onthoud dat het gebruik van de kalender (plaatsen van gebeurtenissen, bekijken van gebeurtenissen, etc.) afhankelijk is van permissies die ingesteld worden bij het permissiebeheer.';
$helptxt['localCookies'] = 'SMF gebruikt cookies om inlog informatie op te slaan op de computer van de gebruiker.
	Cookies kunnen globaal worden opgeslagen (mijndomein.nl) of lokaal (mijndomein.nl/pad/naar/forum).<br />
	Vink deze optie aan als je problemen ondervind met gebruikers die automatisch uitgelogd worden.<hr />
	Globaal opgeslagen cookies zijn een stuk minder veilig indien er sprake is van een gedeelde webserver (zoals Tripod).<hr />
	lokaal opgeslagen cookies werken niet buiten de forummap, dus wanneer je is opgeslagen op www.mijnsite.nl/forum, hebben pagina\'s als www.mijnsite.nl/index.php geen toegang tot de accountinformatie.
	Zeker wanneer je gebruik maakt van SSI.php, worden globaal opgeslagen cookies aanbevolen.';
$helptxt['enableBBC'] = 'Deze optie biedt de leden de mogelijkheid om Bulletin Board Code (BBC) te gebruiken op het forum, waardoor ze afbeeldingen kunnen tonen en andere opmaak mogelijkheden krijgen.';
$helptxt['time_offset'] = 'Niet alle forumbeheerders willen dat het forum dezelfde tijd gebruiken als de server waarop het forum wordt gehost. Gebruik deze optie om het tijdsverschil (in uren) aan te geven tussen de huidige tijd en de server tijd. Negatieve en decimale waardes zijn toegestaan.';
$helptxt['default_timezone'] = 'De servertijdzone vertelt PHP waar de server zich bevindt. Zorg ervoor dat deze correct is ingesteld, bij voorkeur op de stad/het land waar de server zich bevindt. Meer informatie hierover vind je op de <a href="http://nl.php.net/manual/nl/timezones.php" target="_blank">PHP-website</a>.';
$helptxt['spamWaitTime'] = 'Hier kun je aangeven hoeveel tijd er dient te zitten tussen het plaatsen van berichten. Dit kan voorkomen dat mensen gaan &quot;spammen&quot; op het forum.';

$helptxt['enablePostHTML'] = 'Dit zal leden toestaan enkele basis HTML-tags te gebruiken:
	<ul class="normallist" style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Hier kun je aangeven of het standaardthema gekozen kan, welk thema gasten zullen zien,
	alsmede enkele andere opties. Klik op een thema om de instellingen ervan te wijzigen.';
$helptxt['theme_install'] = 'Je kunt hier nieuwe thema\'s installeren.  Je kunt dit doen vanuit een reeds bestaande directory, door een archief voor het thema te uploaden, of door het standaard thema te kopie&euml;ren.<br /><br />Let op dat het archief of de directory een <tt>theme_info.xml</tt> definitiebestand moet bevatten.';
$helptxt['enableEmbeddedFlash'] = 'Deze optie zorgt ervoor dat je gebruikers Flash direct in hun berichten kunnen gebruiken,
	net zoals afbeeldingen. Dit zou een mogelijk een beveiligingsrisico kunnen zijn, hoewel slechts weinig mensen het hebben weten te misbruiken.
	GEBRUIK OP EIGEN RISICO!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Stelt mensen in staat om te verwijzen naar <a href="%1$s?action=.xml;sa=news" target="_blank" class="new_win">Actuele berichten</a>
	en soortgelijke gegevens.  Het is ook aan te bevelen dat je de grootte van de (nieuws)berichten beperkt, omdat RSS-data
	in sommige clients (zoals Trillian), wordt afgekapt na een aantal woorden.';
$helptxt['hotTopicPosts'] = 'Verander het aantal berichten dat nodig is om een topic de status &quot;Populair topic&quot; of
	&quot;Zeer populair&quot; topic te geven.';
$helptxt['globalCookies'] = 'Maakt de forumcookies beschikbaar op subdomeinen. Bijvoorbeeld als....<br />
	Je website op http://www.simplemachines.org/ staat,<br />
	en je forum op http://forum.simplemachines.org/ staat,<br />
	Deze optie zal je dan in staat stellen om de forumcookie op je site te gebruiken. Schakel deze optie niet in als er andere subdomeinen zijn (zoals hacker.simplemachines.org) die niet door jou beheerd worden.';
$helptxt['secureCookies'] = 'Het inschakelen van deze optie zal ervoor zorgen dat nieuwe cookies altijd gemarkeerd zullen worden als veilig. Schakel deze optie alleen in als je het HTTPS-protocol gebruikt op je site, anders zullen cookies niet juist afgehandeld worden!';
$helptxt['securityDisable'] = 'Dit <em>deactiveert</em> de extra wachtwoordcontrole voor het beheergedeelte. Het wordt aangeraden dit NIET te doen!';
$helptxt['securityDisable_why'] = 'Dit is je huidige wachtwoord.<br /><br />Dit is een extra controle om te bepalen dat <strong>jij</strong> toegang hebt tot dit gedeelte.';
$helptxt['emailmembers'] = 'In dit bericht kun je een aantal &quot;variabelen&quot; gebruiken.  Te weten:<br />
	{$board_url} - De URL naar je forum.<br />
	{$current_time} - De huidige tijd.<br />
	{$member.email} - Het e-mailadres van het huidige lid.<br />
	{$member.link} - De link van de huidige lid.<br />
	{$member.id} - Het ID van het huidige lid.<br />
	{$member.name} - De naam van het huidige lid.<br />
	{$latest_member.link} - De link naar het meest recent aangemelde lid.<br />
	{$latest_member.id} - Het ID van het meest recent aangemelde lid.<br />
	{$latest_member.name} - De naam van het meest recent aangemelde lid.';
$helptxt['attachmentEncryptFilenames'] = 'Versleutelen van bestandsnamen van bijlagen zorgt ervoor dat je meerdere bestanden met
	dezelfde naam kunt gebruiken, veilig .php-bestanden als bijlage kunt gebruiken, en verhoogt de veiligheid.  Het kan echter er ook voor zorgen dat
	het herstellen van de database een stuk lastiger wordt indien er iets drastisch fout gaat.';

$helptxt['failed_login_threshold'] = 'Stel het aantal pogingen in die een gebruiker kan wagen alvorens naar het scherm te worden gestuurd waar hij zijn wachtwoord kan laten opsturen.';
$helptxt['oldTopicDays'] = 'Als deze optie is ingesteld, wordt er een waarschuwing getoond wanneer een lid probeert te reageren op een topic waarop al een (gespecificeerd) aantal dagen niet gereageerd is. Zet deze instelling op 0 om deze feature uit te schakelen.';
$helptxt['edit_wait_time'] = 'Aantal seconden na plaatsing waarin een bericht bewerkt kan worden zonder als bewerkt te worden gemarkeerd.';
$helptxt['edit_disable_time'] = 'Aantal minuten die mogen verstrijken, voordat een lid zijn bericht niet langer meer kan wijzigen. Stel op 0 in om deze feature uit te schakelen.<br /><br /><em>Let op: dit be&iuml;nvloedt niet gebruikers met de permissie om andermans bericht aan te passen.</em>';
$helptxt['posts_require_captcha'] = 'Deze instelling zal van gebruikers eisen om eerst een anti-spambot verificatiecode over te typen, voor ze een bericht kunnen plaatsen. Alleen gebruikers met een beperkt aantal berichten zullen deze code in moeten voeren. Dit zou moeten helpen tegen spambots.';
$helptxt['enableSpellChecking'] = 'Spellingscontrole activeren. De pspell library dient ge&iuml;nstalleerd te zijn op de server en de PHP configuratie moet ingesteld zijn om de pspell library te gebruiken. Jouw server heeft deze mogelijkheid ' . (function_exists('pspell_new') ? 'WEL' : 'NIET') . ' actief.';
$helptxt['disable_wysiwyg'] = 'Deze instelling zorgt ervoor dat geen enkele gebruiker de WYSIWYG-editor (&quot;What You See Is What You Get&quot;) kan gebruiken bij het plaatsen van berichten.';
$helptxt['lastActive'] = 'Stel hier het aantal minuten in dat leden nog actief worden weergegeven op het forum na hun laatste activiteit. Standaard is dit 15 minuten.';

$helptxt['customoptions'] = 'Deze sectie definieert de keuzes die een gebruiker kan kiezen uit een keuzelijst. Er zijn een aantal belangrijke dingen instelbaar:
	<ul class="normallist">
		<li><strong>Standaardkeuze:</strong> de keuze die met het keuzebolletje ernaast (&quot;radio button&quot;) geselecteert is, zal standaard ingesteld zijn bij de profielen van gebruikers.</li>
		<li><strong>Verwijder keuzes:</strong> om een keuze te verwijderen, wis je simpelweg de tekst van die keuze. Alle leden die voor die keuze gekozen hadden, zullen teruggezet worden naar de standaardkeuze.</li>
		<li><strong>Keuzes herordenen:</strong> je kunt de keuzes herordenen door de tekst in de tekstvakken te verwisselen. LET OP! Ben er zeker van dat je de exacte tekst uitwisselt, anders zullen de gebruikerkeuzes verloren gaan.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Deze optie optimaliseert de database om de zoveel dagen. Stel het in op 1 als je dit elke dag wilt doen. Je kunt ook het maximum aantal gebruikers opgeven dat online mag zijn op dat moment zodat de server niet te zwaar belast zal worden.';
$helptxt['autoFixDatabase'] = 'Dit zal automatisch beschadigde tabellen repareren.  Je zal een email krijgen zodra dit gebeurt.';

$helptxt['enableParticipation'] = 'Dit laat een icoon zien bij de topics waar een gebruiker een bericht in geplaatst heeft.';

$helptxt['db_persist'] = 'Houdt de verbinding actief om de performance op te schroeven.  Als je niet op een dedicated server wordt gehost, kan dit problemen met je host opleveren.';
$helptxt['ssi_db_user'] = 'Optionele instelling die je in staat stelt om een andere database-gebruiker en wachtwoord te gebruiken bij het gebruik van SSI.php.';

$helptxt['queryless_urls'] = 'Deze optie verandert de opmaak van de URLs een beetje, zodat zoekmachines er beter mee overweg kunnen. Ze zullen er uit zien als index.php/topic,1.0.html.<br /><br />Deze feature zal ' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'niet') . ' werken op jouw server.';
$helptxt['countChildPosts'] = 'Het selecteren van deze optie zorgt ervoor dat berichten en topics in de sub-boards meegeteld worden op de indexpagina.<br /><br />Dit maakt de zaak merkbaar langzamer, maar het betekent wel dat een hoofdboard zonder berichten erin niet op \'0\' komt te staan.';
$helptxt['fixLongWords'] = 'Deze optie zorgt ervoor dat woorden langer dan een bepaalde lengte zullen worden opgesplitst zodat de lay-out van het forum niet wordt verstoord. Deze optie zal niet werken op fora die UTF-8 gebruiken in combinatie met een PHP-versie ouder dan 4.4.0. Dit zal ' . (empty($GLOBALS['context']['utf8']) || version_compare(PHP_VERSION, '4.4.0') != -1 ? 'WEL' : 'NIET') . ' werken op jouw server.';
$helptxt['allow_ignore_boards'] = 'Het inschakelen van deze optie heeft als gevolg dat gebruikers in kunnen stellen welke boards ze willen negeren.';

$helptxt['who_enabled'] = 'Deze optie laat je kiezen of je wilt dat leden van elkaar kunnen zien waar ze zijn en wat ze aan het doen zijn.';

$helptxt['recycle_enable'] = 'Het &quot;Recyclen&quot; van verwijderde topics en berichten naar het aangegeven board.';

$helptxt['enableReportPM'] = 'Deze optie zorgt ervoor dat je gebruikers persoonlijke berichten kunnen melden aan het beheerteam. Dit kan handig zijn om misbruik van persoonlijke berichten in de gaten te houden.';
$helptxt['max_pm_recipients'] = 'Deze optie stelt je in staat een maximum aantal ontvangers per persoonlijk bericht dat een forumlid stuurt in te stellen. Dit kan helpen om misbruik van het PM-systeem te voorkomen. Merk op dat leden die nieuwsbrieven kunnen versturen uitgezonderd zijn. Stel in op nul voor geen limiet.';
$helptxt['pm_posts_verification'] = 'Deze instelling zal gebruikers forceren een verificatiecode in te voeren wanneer ze een persoonlijk bericht willen versturen. Alleen gebruikers met een postteller onder het ingestelde aantal zullen de code moeten invoeren - dit zou automatische spammers tegen moeten werken.';
$helptxt['pm_posts_per_hour'] = 'Dit zal het aantal persoonlijke berichten dat een gebruiker per uur kan versturen limiteren. Dit heeft geen effect op beheerders of moderators.';

$helptxt['default_personal_text'] = 'Bepaalt de standaardtekst die een nieuwe gebruiker als &quot;persoonlijke tekst&quot; heeft.';

$helptxt['modlog_enabled'] = 'Logt alle moderatie acties.';

$helptxt['guest_hideContacts'] = 'Indien geselecteerd, verbergt deze optie alle e-mailadressen en messenger contactgegevens
	van alle leden voor gasten op je forum';

$helptxt['registration_method'] = 'Deze optie bepaalt welke registratie methode wordt gebruikt op het forum. Je kunt kiezen uit:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registratie uitgeschakeld</strong><br />
				Blokkeert het registreren, wat inhoudt dat niemand zich kan registreren op het forum.<br />
		</li><li>
			<strong>Directe registratie</strong><br />
				Nieuwe leden kunnen direct inloggen en posten na registratie op het forum.<br />
		</li><li>
			<strong>Activatie via e-mail</strong><br />
				Leden die zich hebben geregistreerd krijgen een e-mail met een activatielink die ze dienen te volgen alvorens hun account wordt geactiveerd.<br />
		</li><li>
			<strong>Goedkeuring door beheerder</strong><br />
				Nieuwe leden dienen te worden goedgekeurd door een beheerder alvorens hun account wordt geactiveerd.
		</li>
	</ul>';
$helptxt['register_openid'] = '<strong>Authenticatie met OpenID</strong><br />
	OpenID is een middel om via &eacute;&eacute;n gebruikersnaam op verschillende websites in te loggen, om zo de online-ervaring te bevorderen. Om OpenID te kunnen gebruiken, moet je eerst een OpenID-account aanmaken - een lijst met providers kan op de<a href="http://openid.net/" target="_blank">offici&euml;le OpenID-site</a> gevonden worden.<br /><br />
	Zodra je een OpenID-account hebt, vul je simpelweg jouw unieke identificatie-URL in het OpenID-invoerveld en verstuur je het formulier. Je zult dan doorgeleid worden naar de site van je provider om je identiteit te verifi&euml;ren vooraleer je weer hier terugkomt.<br /><br />
	Bij je eerst bezoek aan deze site, zul je gevraagd worden om een aantal gegevens te bevestigen voor je herkend zult worden, waarna je gewoon kunt inloggen op deze site om je profielinstellingen te wijzigen via louter je OpenID.<br /><br />
	Voor meer informatie kun je terecht bij de <a href="http://openid.net/" target="_blank">offici&euml;le OpenID-site</a>.';

$helptxt['send_validation_onChange'] = 'Als deze optie is geactiveerd moeten de leden hun account opnieuw activeren aan de hand van een e-mailbericht dat ze krijgen op het nieuwe e-mailadres';
$helptxt['send_welcomeEmail'] = 'Als deze optie is geactiveerd krijgen nieuwe leden een welkomst-e-mail bericht gestuurd';
$helptxt['password_strength'] = 'Deze instelling bepaalt de vereiste sterkte van wachtwoorden die gebruikt worden door je forumleden. Hoe &quot;sterker&quot; het wachtwoord, hoe moeilijker het is om iemands account te kraken.
	De mogelijke instellingen zijn:
	<ul class="normallist">
		<li><strong>Laag:</strong> Het wachtwoord moet minimaal vier karakters lang zijn.</li>
		<li><strong>Middel:</strong> Het wachtwoord moet minstens acht karakters lang zijn and mag niet bestaan uit een gebruikersnaam of een e-mailadres.</li>
		<li><strong>Hoog:</strong> Net zoals bij middel, behalve dat het wachtwoord ook een mix van hoofd- en kleine letters moet bevatten en tenminste &eacute;&eacute;n nummer.</li>
	</ul>';

$helptxt['coppaAge'] = 'De waarde in dit vak bepaalt de minimumleeftijd die nieuwe leden moeten hebben om directe toegang tot het forum te krijgen.
	Bij registratie wordt hen gevraagd om te bevestigen of ze ouder dan deze leeftijd zijn en zo niet wordt hun aanvraag afgewezen of opgeschort totdat de ouder toestemming gegeven hebben - afhankelijk van het gekozen type restrictie.
	Als een waarde van 0 is ingevuld, dan zullen alle andere leeftijdsinstellingen worden genegeerd.';
$helptxt['coppaType'] = 'Indien leeftijdsrestricties zijn ingesteld, bepaalt deze instelling wat er gebeurt als een lid onder de minimale leeftijd zich probeert te registreren op je forum. Er zijn twee mogelijke keuzes:
	<ul class="normallist">
		<li>
			<strong>Verwerp de registratie:</strong><br />
				De registratie van elk nieuw lid dat onder de minimum leeftijd is zal per direct worden verworpen.<br />
		</li><li>
			<strong>Vereis ouderlijke goedkeuring</strong><br />
				Elk nieuw lid dat zich probeert te registreren en onder de minimaal toegestane leeftijd is, krijgt een markering in zijn account in afwachting op goedkeuring en krijgt een formulier te zien waarin zijn ouders toestemming kunnen geven om lid te worden van het forum.
				Ze krijgen ook de contactgegevens van het forum zoals ingesteld op de instellingen-pagina zien, zodat ze het formulier naar de forumbeheerder per e-mail of fax kunnen sturen.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'De contactgegevens zijn verplicht, zodat formulieren die toestemming geven voor minderjarige registratie gestuurd kunnen worden naar de forumbeheerder. Deze gegevens zullen getoond worden aan alle nieuwe minderjarigen en zijn vereist voor goedkeuring van ouders of voogden. In ieder geval moet het postadres of het faxnummer ingevuld zijn.';

$helptxt['allow_hideOnline'] = 'Met deze optie geselecteerd kunnen leden hun online status voor andere gebruikers (behalve beheerders) verbergen. Indien uitgeschakeld, kunnen alleen gebruikers die het forum kunnen beheren, hun online status verbergen. Het uitschakelen van deze optie zal niemand zijn status veranderen - het voorkomt alleen dat ze zichzelf kunnen verbergen in de toekomst.';
$helptxt['make_email_viewable'] = 'Indien deze optie is ingeschakeld, kunnen leden e-mailadressen zien, in plaats van dat ze verborgen worden. Het inschakelen van deze optie zal je leden een groter doelwit maken voor spambots, mochten die je forum bezoeken. Overigens zal deze optie niet de profielkeuze van het al dan niet verbergen van e-mailadressen overreden. Het inschakelen van deze instelling wordt <strong>niet aanbevolen</strong>.';
$helptxt['meta_keywords'] = 'Deze sleutelwoorden worden toegevoegd aan de weergave van elke pagina, om zoekmachines (etc) de inhoud van je site te laten zien. Scheid meerdere woorden door middel van een komma. HTML is niet toegestaan.';

$helptxt['latest_support'] = 'Je ziet hier de meest voorkomende problemen en vragen m.b.t. de server configuratie. Deze informatie wordt niet geregistreerd.<br /><br />Indien je blijft zien &quot;Retrieving support information...&quot;, kan je pc waarschijnlijk geen verbinding maken met <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Hier kun je enkele populaire of willekeurige packages of mods vinden, met snelle en simpele installaties.<br /><br />Als dit niet verschijnt kan de pc waarschijnlijk geen verbinding maken met <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Hier zie je de laatste en meest populaire thema\'s van <a href="http://www.simplemachines.org/" rel="new_win">www.simplemachines.org</a>.  Het kan zijn dat het niet verschijnt als je pc geen verbinding kan maken met <a href="http://www.simplemachines.org/" rel="new_win">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Voor de veiligheid is het antwoord op je vraag (en ook je wachtwoord) ge-encrypt zodat alleen SMF kan bepalen of het antwoord juist is, het kan je dus niet aangeven (en ook niet iemand anders!) wat het antwoord of je wachtwoord is.';
$helptxt['moderator_why_missing'] = 'Daar modereren gedaan wordt op basis van boards, dien je leden moderator te maken via de <a href="javascript:window.open(\'%1$s?action=admin;area=manageboards\'); self.close();">board management interface</a>.';

$helptxt['permissions'] = 'Permissies geven aan welke groepen wel of niet bepaalde rechten in bepaalde boards hebben.<br /><br />Je kunt meerdere boards tegelijk bewerken of bij een specifieke groep kijken door te klikken op &quot;Bewerken&quot;.';
$helptxt['permissions_board'] = 'Als een board is ingesteld op \'Globaal,\' houdt dit in dat het board geen speciale permissies heeft.  \'Lokaal\' houdt in dat het board specifieke permissies heeft - apart van de Globale permissies.  Op deze manier kun je boards hebben die meer of minder permissies hebben dan een ander board, zonder dit voor ieder board apart in te moeten stellen.';
$helptxt['permissions_quickgroups'] = 'Deze stellen je in staat om &quot;standaard&quot; permissies te gebruiken - standaard betekent \'niets speciaals\', beperkt betekent \'als een gast\', moderator betekent \'wat een moderator heeft\', en \'onderhoud\' betekent permissies die erg dicht in de buurt liggen van een admin.';
$helptxt['permissions_deny'] = 'Het ontzeggen van permissies kan handig zijn wanneer je voor een zeker lid een permissie wilt wegnemen. Je kunt leden toevoegen aan een ledengroep met een \'ontzeg\'-permissie om hen die permissies te ontzeggen.<br /><br />Gebruik het voorzichtig, een ontzegde permissie blijft ontzegd, ongeacht welke andere ledengroep het lid in zit.';
$helptxt['permissions_postgroups'] = 'Met permissies voor bericht-gerelateerde groepen, kun je permissies aan leden toekennen die een bepaald aantal berichten heeft geplaatst. De bericht-gerelateerde permissies worden <em>toegevoegd</em> aan de permissies van de reguliere ledengroepen.';
$helptxt['membergroup_guests'] = 'De gasten-ledengroep bestaat uit alle gebruikers die niet zijn ingelogd.';
$helptxt['membergroup_regular_members'] = 'De \'reguliere leden\' groep bestaat uit alle leden die ingelogd zijn, maar niet een primaire ledengroep zijn toegewezen.';
$helptxt['membergroup_administrator'] = 'De beheerder kan, per definitie, alles doen en alle boards zien. Er zijn geen permissie-instellingen voor de beheerder.';
$helptxt['membergroup_moderator'] = 'De moderator-ledengroep is een speciale ledengroep. Permissies en instellingen ingesteld voor deze groep, zijn van toepassing op board-moderators maar alleen <em>op de boards die zij modereren</em>. Buiten die boards zijn ze net als elk ander lid.';
$helptxt['membergroups'] = 'In SMF zijn er twee types ledengroepen waar je leden lid van kunnen zijn. Dit zijn:
	<ul class="normallist">
		<li><strong>Reguliere groepen:</strong> Een reguliere groep is een groep waar een lid niet automatisch in terecht komt. Om een lid toe te wijzen aan een groep, ga naar zijn profiel en klik &quot;Account Instellingen&quot;. Van hier kun je een willekeurig aantal reguliere groepen toewijzen waarvan een lid deel zal zijn.</li>
		<li><strong>Bericht-gerelateerde groepen:</strong> In tegenstelling tot de reguliere groepen, kunnen bericht-gerelateerde groepen niet worden toegewezen. In plaats daarvan worden leden automatisch toegewezen aan een bericht-gerelateerde groep bij het bereiken van een minimaal aantal berichten, die benodigd is voor die groep.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Je kunt deze events bewerken door op het rode sterretje naast de naam te klikken.';

$helptxt['maintenance_backup'] = 'Hier kun je een kopie maken van alle berichten, instellingen, leden en alle andere informatie uit de database in &eacute;&eacute;n groot bestand.<br /><br />Doe dit wekelijks, om altijd een goede backup te hebben.';
$helptxt['maintenance_rot'] = 'Hier kun je <strong>volledig</strong> en <strong>onomkeerbaar</strong> oude topics verwijderen.  Het wordt aangeraden eerst een backup te maken.<br /><br />Wees voorzichtig met het gebruik van deze optie.';
$helptxt['maintenance_members'] = 'Deze optie stelt je in staat om leden <strong>volledig</strong> en <strong>permanent</strong> te verwijderen van je forum. Het wordt <strong>sterk aangeraden</strong> van tevoren een backup te maken, voor het geval je iets doet dat je eigenlijk niet wilde doen.<br /><br />Gebruik deze optie voorzichtig.';

$helptxt['avatar_server_stored'] = 'Hier kunnen leden een avatar kiezen die is opgeslagen op je server. Normaal gesproken zijn ze te vinden onder de dezelfde plek als SMF in de avatar directory te vinden.<br />Tip : Als je directories aanmaakt in de map waar de avatars staan, kun je &quot;categorie&euml;n&quot; maken van de avatars.';
$helptxt['avatar_external'] = 'Met deze optie actief kunnen leden een URL opgeven naar hun avatar.  Het nadeel hiervan is dat in sommige gevallen er avatars zullen worden gebruikt die erg groot zijn of niet op je forum kunnen in verband met wat de afbeelding voorstelt.';
$helptxt['avatar_download_external'] = 'Met deze optie wordt de URL die door de gebruiker is opgegeven, benaderd om de avatar te downloaden. Als dat gelukt is, zal de avatar als uploadbare avatar behandeld worden.';
$helptxt['avatar_upload'] = 'Deze optie is vrijwel gelijk aan &quot;Sta leden toe een externe avatar te gebruiken&quot;, alleen heb je nu een betere controle over de avatars, gaat het resizen sneller en hoeven de leden hun avatar niet elders onder te brengen.<br /><br />Het nadeel kan echter zijn dat het een hoop ruimte kan gaan kosten op je server.';
$helptxt['avatar_download_png'] = 'PNG bestanden zijn groter, maar hebben een betere kwaliteit.  Als dit is uitgevinkt, zal er gebruik worden gemaakt van JPEG - vaak kleiner, maar ook een slechtere kwaliteit.';

$helptxt['disableHostnameLookup'] = 'Dit deactiveert de mogelijkheid om hostnamen te zoeken, wat op sommige servers erg traag kan zijn.  Let op dat het verbannen van leden ook minder effectief zal worden.';

$helptxt['search_weight_frequency'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor telt het aantal met de zoektermen overeenkomende berichten en deelt ze door het totaal aantal berichten in het topic.';
$helptxt['search_weight_age'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor bepaalt de ouderdom van het laatste overeenkomende bericht binnen een topic. Hoe recenter het bericht, hoe hoger de score.';
$helptxt['search_weight_length'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor is gebaseerd op de topicgrootte. Hoe meer berichten in het topic, hoe hoger de score.';
$helptxt['search_weight_subject'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor kijkt naar of een zoekterm in het onderwerp van het topic voorkomt.';
$helptxt['search_weight_first_message'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor kijkt naar of een zoekterm in het eerste bericht van het topic voorkomt.';
$helptxt['search_weight_sticky'] = 'Gewichtsfactoren worden gebruikt om de relevantie van zoekresultaten te bepalen. Verander de gewichten zo dat ze overeenkomen met wat belangrijk is voor jouw forum. Bijvoorbeeld, een nieuws site zal een relatief hoge waarde hebben voor \'ouderdom van laatste overeenkomende bericht\'. Alle waardes zijn relatief ten opzichte van elkaar en zouden positieve gehele getallen moeten zijn.<br /><br />Deze factor kijkt naar of een topic sticky is en maakt de relevantheidsscore hoger als dat het geval is.';
$helptxt['search'] = 'Pas hier alle instellingen voor de zoekfunctie aan.';
$helptxt['search_why_use_index'] = 'Een zoekindex kan de zoekprestaties van je forum zeer goed ten gunste komen. Met name wanneer het aantal berichten op je forum groeit, kan zoeken zonder indices lang duren en druk op je database veroorzaken. Als je forum groter dan 50.000 berichten is, is het zeker te overwegen om een zoekindex aan te laten maken.<br /><br />Merk op dat zoekindices vrij veel ruimte innemen. Een fulltext-index is een standaardindex van MySQL. Het is relatief compact (ongeveer dezelfde grootte als de berichtentabel), maar veel woorden worden niet ge&iuml;ndexeerd en het kan sommige zoekopdrachten erg vertragen. De aangepaste indices zijn over het algemeen groter (afhankelijk van je configuratie kan het tot drie maal groter zijn dan de berichtentabel), maar zijn prestaties zijn zeker beter en komen de stabiliteit ook zeker ten goede.';

$helptxt['see_admin_ip'] = 'IP-adressen worden getoond aan beheerders en moderators om het modereren te vergemakkelijken en het eenvoudiger te maken om mensen met slechte bedoelingen te traceren. Bedenk wel dat IP-adressen niet altijd identificerend zijn en dat IP-adressen van mensen van tijd tot tijd kan veranderen. <br /><br />Leden mogen ook hun eigen IP-adres zien.';
$helptxt['see_member_ip'] = 'Je IP-adres is zichtbaar voor jou en de moderators. Bedenk dat deze informatie je niet identificeert en dat de meeste IP-adressen af en toe veranderen.<br /><br />Je kunt het IP-adres van andere leden niet zien en zij kunnen het jouwe niet zien.';
$helptxt['whytwoip'] = 'SMF gebruikt een aantal methodes om het IP-adres van gebruikers vast te stellen. In de meeste gevallen resulteren deze twee methodes in hetzelfde IP-adres, maar in sommige gevallen kunnen er twee adressen gevonden worden. In zo\'n geval zal SMF beide adressen opslaan, en ze ook allebei gebruiken bij bijvoorbeeld bancontroles. Je kunt beide adressen aanklikken en - indien gewenst - verbannen.';

$helptxt['ban_cannot_post'] = 'De \'kan niet posten\' restrictie zet het forum in een alleen-lezen-stand voor de gebande gebruiker. De gebruiker kan niet nieuwe topics maken, reageren op bestaande topics, persoonlijke berichten versturen of stemmen in polls. Wel kan de gebande gebruiker nog steeds persoonlijke berichten en topics lezen.<br /><br />Een waarschuwingsbericht wordt aan de gebruikers getoond die op deze manier zijn geband.';

$helptxt['posts_and_topics'] = '
	<ul class="normallist">
		<li>
			<strong>Berichteninstellingen</strong><br />
			Wijzig de instellingen die betrekking hebben op het plaatsen van berichten en de manier waarop de berichten worden weergegeven. Ook kun je hier de spellingscontrole aan zetten.
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			Stel hier de code in waarmee forumberichten de juiste vormgeving kunnen krijgen. Stel in welke codes wel en welke codes niet gebruikt mogen worden.
		</li><li>
			<strong>Gecensureerde woorden</strong>
			Om het taalgebruik op het forum in toom te houden, kun je bepaalde woorden censureren. Deze functie stelt je in staat om verboden woorden om te zetten in onschuldige varianten.
		</li><li>
			<strong>Topicinstellingen</strong>
			Stel alles in met betrekking tot topics. Hoeveel er op een pagina gaan, of sticky topics ingeschakeld zijn, bij welk aantal berichten een topic \'hot\' is, etc.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Door een spider aan een groep te koppelen, krijgt een gast, wanneer deze als een zoekmachine-indexeerder wordt gedetecteerd, automatisch die groep toegewezen in plaats van die van een gast. Je kunt dit zodanig toepassen dat een zoekmachine meer of juist minder toegang heeft tot zaken dan een normale gast. Je zou bijvoorbeeld een nieuwe groep &quot;Spiders&quot; aan kunnen maken en die hier kunnen selecteren. Voor die groep zou je dan de permissie kunnen ontzeggen voor het bekijken van profielen van je leden, zodat spiders deze niet langer indexeren.<br />Merk op: spiderdetectie is niet perfect en kan door gebruikers misleid worden. Er kan daarom niet worden gegarandeerd dat deze feature de (extra) inhoud alleen voor zoekmachines beschikbaar maakt.';
$helptxt['show_spider_online'] = 'Deze instelling stelt je in staat om in te stellen of spiders moeten verschijnen in de \'Wie is online\'-lijst op de boardindex en \'Wie is online\'-pagina. Mogelijke waarden:
	<ul class="normallist">
		<li>
			<strong>Helemaal niet</strong><br />
			Spiders zullen als gasten worden getoond voor alle gebruikers.
		</li><li>
			<strong>Toon spiderhoeveelheid</strong><br />
			Op de boardindex zal het aantal spiders dat momenteel het forum bezoekt worden weergegeven.
		</li><li>
			<strong>Toon spidernamen</strong><br />
			De naam van elke spider zal worden getoond, zodat leden kunnen zien welke spiders momenteel het forum bezoeken. Dit heeft effect op zowel de boardindex als de \'Wie is online\'-pagina.
		</li><li>
			<strong>Toon spidernamen - alleen voor beheerders</strong><br />
			Hetzelfde als hierboven, maar dan zien enkel beheerders de spiderstatussen - alle andere gebruikers zien ze als gasten.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Kies hier de verjaardags e-mail die je wilt verzenden. <br /> Er zal een voorbeeld verschijnen in de velden e-mailonderwerp en e-mailinhoud.<br /><strong>NB:</strong> het instellen van de gewenste verjaardags e-mail activeert niet automatisch het verzenden van deze e-mails. Om het verzenden van de verjaardags e-mails in te schakelen ga je naar <a href="%1$s?action=admin;area=maintain;sa=tasks;%3$s=%2$s" target="_blank" class="new_win">Geplande taken</a>. Daar vind je de optie om het verzenden van de verjaardagmails te activeren.';
$helptxt['pm_bcc'] = 'Als je een persoonlijk bericht verstuurt, kun je ervoor kiezen om een ontvanger als BCC (&quot;Blind Carbon Copy&quot;) in te stellen. BCC-ontvangers zijn niet zichtbaar voor andere ontvangers van het bericht.';

$helptxt['move_topics_maintenance'] = 'Dit stelt je in staat om alle topics van een board naar een ander board te verplaatsen.';
$helptxt['maintain_reattribute_posts'] = 'Je kunt deze functie gebruiken om posts die door gasten zijn geplaatst, aan een lid toe te kennen. Dit is bijvoorbeeld handig als een lid zijn account heeft verwijderd, maar toch van gedachten veranderd is en daarom zijn oude posts aan een nieuw account gekoppeld zou willen hebben.';
$helptxt['chmod_flags'] = 'Je kunt zelf instellen welke permissies je voor de geselecteerde bestanden wilt toekennen. Om dit te bereiken, kun je zelf de chmod-waarde in de vorm van een numerieke (octet) waarde invullen. Opmerking: deze functie heeft geen effect op het besturingssysteem Microsoft Windows.';

$helptxt['postmod'] = 'Deze sectie staat leden van het moderatorteam (met de juiste permissies) toe om berichten en topics goed te keuren alvorens ze getoond worden.';

$helptxt['field_show_enclosed'] = 'Sluit de invoer van de gebruiker in tussen tekst en/of HTML. Dit stelt je in staat tot het toevoegen van meer instant messenger services, afbeeldingen, objecten, etcetera. Bijvoorbeeld:<br /><br />
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		De volgende variabelen kunnen worden gebruikt:<br />
		<ul class="normallist">
			<li>{INPUT} - De door de gebruiker ingevulde tekst.</li>
			<li>{SCRIPTURL} - Adres van het forum.</li>
			<li>{IMAGES_URL} - URL van de afbeeldingenmap in het thema dat de gebruiker gebruikt.</li>
			<li>{DEFAULT_IMAGES_URL} - URL naar de afbeeldingenmap in het standaardthema.</li>
		</ul>';

$helptxt['custom_mask'] = 'Invoermaskers zijn belangrijk voor de veiligheid van je forum. Het controleren van invoer van een gebruiker helpt voorkomen dat gegevens gebruikt worden op een ongewenste manier. Hieronder staan enkele <em>regular expressions</em> als tips.<br /><br />
	<div class="smalltext" style="margin: 0 2em">
		&quot;[A-Za-z]+&quot; - Match all upper and lower case alphabet characters.<br />
		&quot;[0-9]+&quot; - Match all numeric characters.<br />
		&quot;[A-Za-z0-9]{7}&quot; - Match all upper and lower case alphabet and numeric characters seven times.<br />
		&quot;[^0-9]?&quot; - Forbid any number from being matched.<br />
		&quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Only allow 3 or 6 character hexcodes.<br />
	</div><br /><br />
	Verder kunnen ook speciale metakarakters als ?+*^$ en {xx} gebruikt worden.
	<div class="smalltext" style="margin: 0 2em">
		? - None or one match of previous expression.<br />
		+ - One or more of previous expression.<br />
		* - None or more of previous expression.<br />
		{xx} - An exact number from previous expression.<br />
		{xx,} - An exact number or more from previous expression.<br />
		{,xx} - An exact number or less from previous expression.<br />
		{xx,yy} - An exact match between the two numbers from previous expression.<br />
		^ - Start of string.<br />
		$ - End of string.<br />
		\\ - Escapes the next character.<br />
	</div><br /><br />
	Meer informatie en geavanceerde technieken kunnen op het internet gevonden worden.';

?>