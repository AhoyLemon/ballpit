<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Deze pagina stelt je in staat om de instellingen te veranderen van alle features, mods en basisopties van je forum. Bekijk de <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">thema-instellingen</a> voor meer opties. Klik op de helpicoontjes voor meer informatie over een instelling.';
$txt['security_settings_desc'] = 'Deze pagina stelt je in staat om de instellingen in te stellen die gerelateerd zijn aan beveiliging en moderatie, inclusief anti-spam-opties.';
$txt['modification_settings_desc'] = 'Deze pagina bevat instellingen die door modificaties aan je forum zijn toegevoegd.';

$txt['modification_no_misc_settings'] = 'Er zijn nog geen modificaties ge&iuml;nstalleerd die instellingen aan deze pagina hebben toegevoegd.';

$txt['pollMode'] = 'Pollmodus';
$txt['disable_polls'] = 'Polls deactiveren';
$txt['enable_polls'] = 'Polls activeren';
$txt['polls_as_topics'] = 'Toon bestaande polls als topics';
$txt['allow_guestAccess'] = 'Sta gasten toe het forum te bekijken';
$txt['userLanguage'] = 'Activeer voorkeur taalpakket';
$txt['allow_editDisplayName'] = 'Sta gebruikers toe om hun getoonde naam te wijzigen';
$txt['allow_hideOnline'] = 'Sta niet-beheerders toe om hun status te verbergen';
$txt['guest_hideContacts'] = 'Verberg contactgegevens van de leden voor gasten';
$txt['titlesEnable'] = 'Extra titels activeren';
$txt['enable_buddylist'] = 'Vrienden- en negeerlijsten activeren';
$txt['default_personal_text'] = 'Standaard persoonlijke tekst<div class="smalltext">Persoonlijke tekst die nieuwe leden toegekend krijgen.</div>';
$txt['number_format'] = 'Standaard nummerformaat';
$txt['time_format'] = 'Standaard tijdsinstelling';
$txt['setting_time_offset'] = 'Algemene tijdsafwijking <div class="smalltext">(toegevoegd aan lidspecifieke tijdsafwijking)</div>';
$txt['setting_default_timezone'] = 'Servertijdzone';
$txt['failed_login_threshold'] = 'Drempel voor mislukte inlogpogingen';
$txt['lastActive'] = 'Drempelwaarde voor activiteit gebruiker';
$txt['trackStats'] = 'Statistieken activeren';
$txt['hitStats'] = 'Houdt het aantal pageviews bij (statistieken moet actief staan)';
$txt['enableCompressedOutput'] = 'Gecomprimeerde output activeren';
$txt['disableTemplateEval'] = 'Schakel evaluatie van templates uit';
$txt['databaseSession_enable'] = 'Gebruik database-gebaseerde sessies';
$txt['databaseSession_loose'] = 'Browsers mogen terug naar pagina\'s uit de cache';
$txt['databaseSession_lifetime'] = 'Seconden voordat een ongebruikte sessie ongeldig wordt';
$txt['enableErrorLogging'] = 'Activeer het loggen van fouten';
$txt['enableErrorQueryLogging'] = 'Volledige query\'s in het foutenlog plaatsen';
$txt['pruningOptions'] = 'Schakel het opschonen van logingangen in';
$txt['pruneErrorLog'] = 'Verwijder ingangen uit het foutenlog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneModLog'] = 'Verwijder ingangen uit het moderatielog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneBanLog'] = 'Verwijder ingangen uit het banlog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneReportLog'] = 'Verwijder ingangen uit het moderatierapportagelog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneScheduledTaskLog'] = 'Verwijder ingangen uit het geplande taken-log ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['pruneSpiderHitLog'] = 'Verwijder ingangen uit het spiderlog ouder dan<div class="smalltext">(0 om uit te schakelen)</div>';
$txt['cookieTime'] = 'Standaardduur van het logincookie (in minuten, groter dan 5)';
$txt['localCookies'] = 'Sla cookies lokaal op<div class="smalltext">(SSI zal niet werken met deze optie aan)</div>';
$txt['globalCookies'] = 'Cookies onafhankelijk van het subdomein gebruiken<div class="smalltext">(schakel lokaal opslaan van cookies eerst uit!)</div>';
$txt['secureCookies'] = 'Forceer veilige cookies<div class="smalltext">(Alleen voor gebruik in combinatie met HTTPS - anders niet gebruiken!)</div>';
$txt['securityDisable'] = 'Administratiebeveiliging uitschakelen';
$txt['send_validation_onChange'] = 'E-mail een nieuw wachtwoord als een lid zijn / haar e-mailadres wijzigt';
$txt['approveAccountDeletion'] = 'Vereis goedkeuring van een forumbeheerder wanneer een lid zijn account verwijdert';
$txt['autoOptMaxOnline'] = 'Maximaal aantal gebruikers online tijdens optimalisatie<div class="smalltext">(0 voor geen limiet)</div>';
$txt['autoFixDatabase'] = 'Automatisch defecte tabellen repareren';
$txt['allow_disableAnnounce'] = 'Gebruikers toestaan om notificatie van aankondigingen uit te schakelen';
$txt['disallow_sendBody'] = 'Sta geen berichttekst in notificaties toe';
$txt['queryless_urls'] = 'Zoekmachine-vriendelijke URLs<div class="smalltext"><strong>Alleen Apache/Lighttpd!</strong></div>';
$txt['max_image_width'] = 'Maximumbreedte van afbeeldingen (0 voor geen limiet)';
$txt['max_image_height'] = 'Maximumhoogte van afbeeldingen (0 voor geen limiet)';
$txt['enableReportPM'] = 'Schakel het rapporteren van persoonlijke berichten in';
$txt['max_pm_recipients'] = 'Maximum toegestane aantal ontvangers per persoonlijk bericht<div class="smalltext">(0 voor geen limiet, admins uitgezonderd)</div>';
$txt['pm_posts_verification'] = 'Postaantal waaronder gebruikers verificatie moeten passeren alvorens ze persoonlijke berichten kunnen verzenden<div class="smalltext">(0 voor geen limiet, admins uitgezonderd)</div>';
$txt['pm_posts_per_hour'] = 'Aantal persoonlijke berichten dat een gebruiker mag verzenden in een uur tijd<div class="smalltext">(0 voor geen limiet, admins uitgezonderd)</div>';
$txt['compactTopicPagesEnable'] = 'Limiteer het aantal weergegeven paginalinks';
$txt['contiguous_page_display'] = 'Aantal weer te geven aangrenzende pagina\'s';
$txt['to_display'] = 'weergeven';
$txt['todayMod'] = 'Schakel korte datumnotaties in';
$txt['today_disabled'] = 'Uitgeschakeld';
$txt['today_only'] = 'Alleen \'Vandaag\'';
$txt['yesterday_today'] = '\'Vandaag\' en \'Gisteren\'';
$txt['topbottomEnable'] = 'De omlaag/omhoog-knoppen activeren';
$txt['onlineEnable'] = 'Toon online/offline in berichten en PM';
$txt['enableVBStyleLogin'] = 'Toon een inlogbalk bovenaan elke pagina';
$txt['defaultMaxMembers'] = 'Leden per pagina in de ledenlijst';
$txt['timeLoadPageEnable'] = 'Toon de tijd benodigd om de pagina op te bouwen';
$txt['disableHostnameLookup'] = 'Schakel het opzoeken van hostnamen uit';
$txt['who_enabled'] = 'Wie is online activeren';
$txt['make_email_viewable'] = 'Sta zichtbare e-mailadressen toe';
$txt['meta_keywords'] = 'Meta-sleutelwoorden met betrekking op dit forum<div class="smalltext">Voor zoekmachines, laat leeg voor standaardwoorden.</div>';

$txt['karmaMode'] = 'Karma-modus';
$txt['karma_options'] = 'Deactiveer karma|Activeer totaal karmapunten|Activeer postief en negatief karma';
$txt['karmaMinPosts'] = 'Minimum aantal posts benodigd om karma te kunnen bewerken';
$txt['karmaWaitTime'] = 'Wachttijd in uren';
$txt['karmaTimeRestrictAdmins'] = 'Beperk beheerder tot de wachttijd';
$txt['karmaLabel'] = 'Karma-label';
$txt['karmaApplaudLabel'] = 'Positief karmalabel';
$txt['karmaSmiteLabel'] = 'Negatief karmalabel';

$txt['caching_information'] = '<div class="aligncenter underline"><strong>Belangrijk! Lees dit eerst alvorens je de optie inschakeld.</strong></div><br />
	SMF ondersteunt caching door middel van acceleratorsoftware. De accelerators die op dit moment ondersteund worden zijn:<br />
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (niet Zend Optimizer)</li>
		<li>XCache</li>
	</ul>
	Caching zal alleen werken op je server als je PHP met &eacute;&eacute;n van bovenstaande optimalisatiesoftware hebt ge&iuml;nstalleerd, of memcache
	beschikbaar hebt. <br /><br />
	SMF werkt met caching op verschillende niveaus. Hoe hoger het niveau dat ingeschakeld is, hoe meer CPU-tijd gebruikt zal worden om
	gecachete informatie te verkrijgen. Als caching op jouw server beschikbaar is, wordt het aangeraden om niveau 1 eerst te proberen.
	<br /><br />
	NB: om Memcached te kunnen gebruiken, dien je de serverdetails als kommagescheiden lijst in te vullen in het onderstaande veld.
	Een mogelijke configuratie zou bijvoorbeeld zijn:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Merk op dat wanneer er geen poort gespecificeerd is, SMF poort 11211 zal gebruiken. SMF zal proberen de laadtijden over de servers te verdelen.
	<br /><br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF heeft geen compatibele accelerator op jouw server kunnen vinden.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF heeft gedetecteerd dat APC op je server is ge&iuml;nstalleerd.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF heeft gedetecteerd dat eAccelerator op je server is ge&iuml;nstalleerd.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF heeft gedetecteerd dat MMCache op je server is ge&iuml;nstalleerd.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF heeft gedetecteerd dat Zend op je server is ge&iuml;nstalleerd.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">SMF heeft gedetecteerd dat Memcached op je server is ge&iuml;nstalleerd.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF heeft gedetecteerd dat XCache op je server is ge&iuml;nstalleerd.</strong>';

$txt['cache_enable'] = 'Cachingniveau';
$txt['cache_off'] = 'Geen caching';
$txt['cache_level1'] = 'Niveau 1 caching (aanbevolen)';
$txt['cache_level2'] = 'Niveau 2 caching';
$txt['cache_level3'] = 'Niveau 3 caching (niet aanbevolen)';
$txt['cache_memcached'] = 'Memcache-instellingen';

$txt['loadavg_warning'] = '<span class="error">Attentie: de instellingen hieronder dienen met zorg bewerkt te worden. Als deze te laag ingesteld worden, kan dat je forum <strong>onbruikbaar</strong> maken! Het loadaverage is momenteel <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Schakel load-balancering middels load-gemiddelden in';
$txt['loadavg_auto_opt'] = 'Drempel voor het uitschakelen van automatische database-optimalisatie';
$txt['loadavg_search'] = 'Drempel voor het uitschakelen van de zoekfunctie';
$txt['loadavg_allunread'] = 'Drempel voor het uitschakelen van alle ongelezen topics';
$txt['loadavg_unreadreplies'] = 'Drempel voor het uitschakelen van alle ongelezen reacties';
$txt['loadavg_show_posts'] = 'Drempel voor het uitschakelen van weergave van berichten van &eacute;&eacute;n gebruiker';
$txt['loadavg_forum'] = 'Drempel voor het <strong>volledig</strong> afsluiten van het forum';
$txt['loadavg_disabled_windows'] = '<span class="error">Ondersteuning voor load-balancing is niet beschikbaar onder Windows.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Ondersteuning voor load-balancing is uitgeschakeld door de configuratie van je host.</span>';

$txt['setting_password_strength'] = 'Vereiste kwaliteit van gebruikerswachtwoorden';
$txt['setting_password_strength_low'] = 'Laag - minimaal 4 karakters';
$txt['setting_password_strength_medium'] = 'Gemiddeld - mag niet de gebruiksnaam bevatten';
$txt['setting_password_strength_high'] = 'Hoog - mix van verschillende karakters';

$txt['antispam_Settings'] = 'Anti-spam-verificatie';
$txt['antispam_Settings_desc'] = 'Deze sectie stelt je in staat om verificatie in te stellen om er zeker van te zijn dat de gebruiker menselijk is en niet een bot, alsook het aanpassen hoe en waar deze worden toegepast.';
$txt['setting_reg_verification'] = 'Vereis verificatie op de registratiepagina';
$txt['posts_require_captcha'] = 'Aantal berichten waaronder gebruikers verificatie moeten passeren om een bericht te kunnen plaatsen';
$txt['posts_require_captcha_desc'] = '(0 voor geen limiet, moderators uitgezonderd)';
$txt['search_enable_captcha'] = 'Vereis verificatie bij alle zoekopdrachten van gasten';
$txt['setting_guests_require_captcha'] = 'Gasten moeten verificatie passeren voor ze een bericht kunnen plaatsen';
$txt['setting_guests_require_captcha_desc'] = '(Automatisch van toepassing wanneer een minimum aantal berichten voor gebruikers is ingesteld)';
$txt['guests_report_require_captcha'] = 'Gasten moeten een verificatiecode invullen wanneer ze een bericht rapporteren';

$txt['configure_verification_means'] = 'Configureer verificatiemethodes';
$txt['setting_qa_verification_number'] = 'Aantal verificatievragen die een gebruiker moet beantwoorden';
$txt['setting_qa_verification_number_desc'] = '(0 om uit te schakelen; vragen kunnen hieronder ingesteld worden)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Hieronder kun je instellen welke anti-spam-features je wilt gebruiken wanneer geverifieerd moet worden of een gebruiker menselijk is. Merk op dat de gebruiker <em>alle</em> verificaties moet passeren, dus als je zowel een verificatie-afbeelding als een vraag/antwoord-methode gebruikt, moet de gebruiker ze beide doorstaan om door te kunnen gaan.</span>';
$txt['setting_visual_verification_type'] = 'Complexiteit van de visuele verificatieafbeelding';
$txt['setting_visual_verification_type_desc'] = 'Hoe complexer de afbeelding, hoe moeilijker het is voor bots om te omzeilen';
$txt['setting_image_verification_off'] = 'Uitgeschakeld';
$txt['setting_image_verification_vsimple'] = 'Erg simpel - platte tekst als afbeelding';
$txt['setting_image_verification_simple'] = 'Simpel - overlappende gekleurde letters, geen ruis';
$txt['setting_image_verification_medium'] = 'Gemiddeld - overlappende gekleurde letters, met ruis/lijnen';
$txt['setting_image_verification_high'] = 'Hoog - gedraaide letters, veel ruis/lijnen';
$txt['setting_image_verification_extreme'] = 'Extreem - gedraaide letters, veel ruis, lijnen en figuren';
$txt['setting_image_verification_sample'] = 'Voorbeeld';
$txt['setting_image_verification_nogd'] = '<strong>NB:</strong> omdat op deze server de GD-bibliotheek niet is ge&iuml;nstalleerd, zal de complexiteitinstelling geen effect hebben.';
$txt['setup_verification_questions'] = 'Verificatievragen';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Als je gebruikers een vraag wilt laten beantwoorden om spambots tegen te houden, kun je hieronder een aantal vragen instellen. De vragen mogen relatief eenvoudig zijn en antwoorden zijn niet hoofdlettergevoelig. Je kunt BBC-codes in de vragen gebruiken voor opmaakdoeleinden. Om een vraag te verwijderen, verwijder je simpelweg de inhoud van die regel.</span>';
$txt['setup_verification_question'] = 'Vraag';
$txt['setup_verification_answer'] = 'Antwoord';
$txt['setup_verification_add_more'] = 'Voeg een nieuwe vraag toe';

$txt['moderation_settings'] = 'Moderatie-instellingen';
$txt['setting_warning_enable'] = 'Schakel gebruikerswaarschuwingen in';
$txt['setting_warning_watch'] = 'Waarschuwingsniveau voor gebruikerstoezicht<div class="smalltext">Het waarschuwingsniveau waarna gebruikers onder toezicht gezet worden (0 om uit te schakelen).</div>';
$txt['setting_warning_moderate'] = 'Waarschuwingniveau voor berichtgoedkeuring<div class="smalltext">Het waarschuwingsniveau waarna berichten van een gebruiker goedgekeurd moeten worden (0 om uit te schakelen).</div>';
$txt['setting_warning_mute'] = 'Waarschuwingsniveau voor gebruikerstillegging<div class="smalltext">Het waarschuwingsniveau waarna een gebruiker geen berichten meer kan plaatsen (0 om uit te schakelen).</div>';
$txt['setting_user_limit'] = 'Maximaal aantal waarschuwingspunten per dag<div class="smalltext">Deze waarde is het maximale aantal waarschuwingspunten dat &eacute;&eacute;n moderator een lid kan geven in 24 uur tijd (0 voor geen limiet).</div>';
$txt['setting_warning_decrement'] = 'Maximum aantal punten die elke 24 uur afgetrokken mogen worden<div class="smalltext">Alleen van toepassing op gebruikers die niet binnen de afgelopen 24 uur zijn gewaarschuwd (0 om uit te schakelen)</div>';
$txt['setting_warning_show'] = 'Gebruikers die waarschuwingsniveau kunnen zien<div class="smalltext">Bepaalt wie het waaschuwingsniveau van leden van het forum kunnen zien.</div>';
$txt['setting_warning_show_mods'] = 'Alleen moderators';
$txt['setting_warning_show_user'] = 'Moderators en gewaarschuwde leden';
$txt['setting_warning_show_all'] = 'Alle leden';

$txt['signature_settings'] = 'Handtekeningen';
$txt['signature_settings_desc'] = 'Met de instellingen op deze pagina kun je bepalen hoe profielhandtekeningen in SMF geregeld moeten worden.';
$txt['signature_settings_warning'] = 'NB: als je instellingen aanpast, worden die niet direct op alle handtekeningen toegepast. <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">Klik hier</a> om de huidige instellingen toe te passen op alle handtekeningen.';
$txt['signature_enable'] = 'Handtekeningen inschakelen';
$txt['signature_max_length'] = 'Maximaal aantal karakters<div class="smalltext">(0 voor geen maximum)</div>';
$txt['signature_max_lines'] = 'Maximaal aantal regels<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_images'] = 'Maximaal aantal afbeeldingen<div class="smalltext">(0 voor geen limiet - exclusief smileys)</div>';
$txt['signature_allow_smileys'] = 'Sta gebruik van smileys in handtekeningen toe';
$txt['signature_max_smileys'] = 'Maximaal aantal smileys<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_image_width'] = 'Maximaal breedte van afbeeldingen (pixels)<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_image_height'] = 'Maximaal hoogte van afbeeldingen (pixels)<div class="smalltext">(0 voor geen limiet)</div>';
$txt['signature_max_font_size'] = 'Maximaal lettertypegrootte toegestaan<div class="smalltext">(in pixels, 0 voor geen limiet)</div>';
$txt['signature_bbc'] = 'Toegestane BBC-tags';

$txt['custom_profile_title'] = 'Aangepaste profielvelden';
$txt['custom_profile_desc'] = 'Vanaf deze pagina kun je zelf extra profielvelden aanmaken die aan de behoeften van je forum voldoen.';
$txt['custom_profile_active'] = 'Actief';
$txt['custom_profile_fieldname'] = 'Veldnaam';
$txt['custom_profile_fieldtype'] = 'Veldtype';
$txt['custom_profile_make_new'] = 'Nieuw veld';
$txt['custom_profile_none'] = 'Je hebt nog geen aangepaste profielvelden aangemaakt.';
$txt['custom_profile_icon'] = 'Icoon';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'Lange tekst';
$txt['custom_profile_type_select'] = 'Keuzelijst';
$txt['custom_profile_type_radio'] = 'Keuzebolletjes';
$txt['custom_profile_type_check'] = 'Aanvinkvakje';

$txt['custom_add_title'] = 'Voeg profielveld toe';
$txt['custom_edit_title'] = 'Bewerk profielveld';
$txt['custom_edit_general'] = 'Weergave-instellingen';
$txt['custom_edit_input'] = 'Invoerinstellingen';
$txt['custom_edit_advanced'] = 'Geavanceerde instellingen';
$txt['custom_edit_name'] = 'Naam';
$txt['custom_edit_desc'] = 'Omschrijving';
$txt['custom_edit_profile'] = 'Profielsectie';
$txt['custom_edit_profile_desc'] = 'Sectie van het profiel waarin dit veld bewerkt kan worden.';
$txt['custom_edit_profile_none'] = 'Geen';
$txt['custom_edit_registration'] = 'Toon bij registratie';
$txt['custom_edit_registration_disable'] = 'Nee';
$txt['custom_edit_registration_allow'] = 'Ja';
$txt['custom_edit_registration_require'] = 'Ja, en vereis invoer';
$txt['custom_edit_display'] = 'Toon bij topicweergave';
$txt['custom_edit_picktype'] = 'Veldtype';

$txt['custom_edit_max_length'] = 'Maximumlengte';
$txt['custom_edit_max_length_desc'] = '(0 voor geen limiet)';
$txt['custom_edit_dimension'] = 'Formaat';
$txt['custom_edit_dimension_row'] = 'Rijen';
$txt['custom_edit_dimension_col'] = 'Kolommen';
$txt['custom_edit_bbc'] = 'Sta BBC-tags toe';
$txt['custom_edit_options'] = 'Opties';
$txt['custom_edit_options_desc'] = 'Laat opties leeg om ze te verwijderen. Keuzebolletjes bepalen de standaardwaarde.';
$txt['custom_edit_options_more'] = 'Meer';
$txt['custom_edit_default'] = 'Standaardwaarde';
$txt['custom_edit_active'] = 'Actief';
$txt['custom_edit_active_desc'] = 'Als dit niet geselecteerd is, zal dit veld niet worden vertoond.';
$txt['custom_edit_privacy'] = 'Privacy';
$txt['custom_edit_privacy_desc'] = 'Wie mogen dit veld zien en/of bewerken?';
$txt['custom_edit_privacy_all'] = 'Leden kunnen dit veld zien; de eigenaar kan het bewerken';
$txt['custom_edit_privacy_see'] = 'Leden kunnen dit veld zien; alleen de beheerder kan het bewerken';
$txt['custom_edit_privacy_owner'] = 'Leden kunnen dit veld niet zien; de eigenaar en beheerders kunnen het bewerken.';
$txt['custom_edit_privacy_none'] = 'Dit veld is alleen zichtbaar voor beheerders';
$txt['custom_edit_can_search'] = 'Doorzoekbaar';
$txt['custom_edit_can_search_desc'] = 'Kan dit veld doorzocht worden in de ledenlijst?';
$txt['custom_edit_mask'] = 'Invoermasker';
$txt['custom_edit_mask_desc'] = 'Voor tekstvelden kan een invoermasker ingegeven worden om invoer te valideren.';
$txt['custom_edit_mask_email'] = 'Geldig e-mailadres';
$txt['custom_edit_mask_number'] = 'Numeriek';
$txt['custom_edit_mask_nohtml'] = 'Geen HTML';
$txt['custom_edit_mask_regex'] = 'Regex (geavanceerd)';
$txt['custom_edit_enclose'] = 'Toon ingesloten tussen tekst (optioneel)';
$txt['custom_edit_enclose_desc'] = 'We raden <strong>ten zeerste</strong> aan om een invoermasker te gebruiken om de invoer van de gebruiker te valideren.';

$txt['custom_edit_placement'] = 'Bepaal plaatsing';
$txt['custom_edit_placement_standard'] = 'Standaard (met titel)';
$txt['custom_edit_placement_withicons'] = 'Met iconen';
$txt['custom_edit_placement_abovesignature'] = 'Boven handtekening';
$txt['custom_profile_placement'] = 'Plaatsing';
$txt['custom_profile_placement_standard'] = 'Standaard';
$txt['custom_profile_placement_withicons'] = 'Met iconen';
$txt['custom_profile_placement_abovesignature'] = 'Boven handtekening';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Weet je zeker dat je dit veld wilt verwijderen? Alle gebruikerdata hiervan zal verloren gaan!';

$txt['standard_profile_title'] = 'Standaard profielvelden';
$txt['standard_profile_field'] = 'Veld';

$txt['core_settings_welcome_msg'] = 'Welkom in je nieuwe forum';
$txt['core_settings_welcome_msg_desc'] = 'Om je op weg te helpen, kun je hieronder selecteren welke de kernfuncties van SMF je wilt inschakelen. We raden aan alleen die functies in te schakelen die je nodig hebt!';
$txt['core_settings_item_cd'] = 'Kalender';
$txt['core_settings_item_cd_desc'] = 'Het inschakelen van deze feature zal een aantal opties tonen die je in staat stellen je leden toegang te geven tot de kalender, gebeurtenissen te bekijken en toe te voegen, verjaardagen van leden op de kalender te zien en nog veel meer.';
$txt['core_settings_item_cp'] = 'Aangepaste profielvelden';
$txt['core_settings_item_cp_desc'] = 'Deze feature stelt je in staat om standaard profielvelden te verbergen, profielvelden aan het registratieproces toe te voegen en nieuwe profielvelden voor je forum te maken.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Karma is een feature die de populariteit van leden toont. Leden kunnen, indien ze daar toestemming voor hebben, andere leden \'toejuichen\' of \'meppen\', wat hun populariteit dan bepaalt.';
$txt['core_settings_item_ml'] = 'Moderatie-, beheer- en gebruikerlogs';
$txt['core_settings_item_ml_desc'] = 'Schakelt de moderatie- en beheerlogs in om een oogje in het zeil te houden wat betreft alle sleutelacties die op je forum zijn ondernomen. Stelt forummoderators ook in staat om belangrijke veranderingen in het profiel van gebruikers bij te houden.';
$txt['core_settings_item_pm'] = 'Berichtmoderatie';
$txt['core_settings_item_pm_desc'] = 'Berichtmoderatie stelt je in staat om groepen en boards te selecteren waarin berichten goedgekeurd moeten worden voor ze voor het publiek zichtbaar worden. Als je deze feature inschakelt, neem dan zeker een kijkje in het permissiesscherm om de juiste permissies in te stellen.';
$txt['core_settings_item_ps'] = 'Betaalde abonnementen';
$txt['core_settings_item_ps_desc'] = 'Betaalde abonnementen stellen gebruikers in staat om een betaald abonnement te nemen op een bepaalde ledengroep, wat ze in staat stelt andere toegangsrechten te krijgen.';
$txt['core_settings_item_rg'] = 'Rapporten genereren';
$txt['core_settings_item_rg_desc'] = 'Deze beheerfunctie stelt je in staat (printbare) rapporten te genereren om je forumindeling op een leesbare manier zichtbaar te maken. Vooral nuttig bij grote fora.';
$txt['core_settings_item_sp'] = 'Zoekmachines traceren';
$txt['core_settings_item_sp_desc'] = 'Het inschakelen van deze feature stelt administrators in staat om zoekmachines te volgen terwijl ze het forum indexeren.';
$txt['core_settings_item_w'] = 'Waarschuwingssysteem';
$txt['core_settings_item_w_desc'] = 'Deze functionaliteit stelt beheerders en moderators in staat om waarschuwingen te geven aan gebruikers. Ook bevat het functionaliteit om automatisch rechten van een gebruiker te verwijderen zodra hun waarschuwingsniveau stijgt. NB: voor optimale werking van deze feature dient &quot;Berichtmoderatie&quot; ingeschakeld te zijn.';
$txt['core_settings_switch_on'] = 'Klik om in te schakelen';
$txt['core_settings_switch_off'] = 'Klik om uit te schakelen';
$txt['core_settings_enabled'] = 'Ingeschakeld';
$txt['core_settings_disabled'] = 'Uitgeschakeld';

$txt['languages_lang_name'] = 'Naam van de taal';
$txt['languages_locale'] = 'Landinstelling';
$txt['languages_default'] = 'Standaard';
$txt['languages_character_set'] = 'Karakterset';
$txt['languages_users'] = 'Gebruikers';
$txt['language_settings_writable'] = 'Waarschuwing: Settings.php is niet beschrijfbaar, dus de standaardtaal kan niet ingesteld worden!';
$txt['edit_languages'] = 'Talen bewerken';
$txt['lang_file_not_writable'] = '<strong>Waarschuwing:</strong> het primaire taalbestand (%1$s) is niet beschrijfbaar. Dit moet beschrijfbaar zijn wil je wijzigingen kunnen maken.';
$txt['lang_entries_not_writable'] = '<strong>Waarschuwing:</strong> het taalbestand dat je wilt bewerken (%1$s) is niet beschrijfbaar. Dit moet beschrijfbaar zijn wil je wijzigingen kunnen maken.';
$txt['languages_ltr'] = 'Rechts naar links';

$txt['add_language'] = 'Taal toevoegen';
$txt['add_language_smf'] = 'Download vanaf Simple Machines';
$txt['add_language_smf_browse'] = 'Voer de naam van de te zoeken taal in, of laat het veld leeg om alle beschikbare talen te tonen.';
$txt['add_language_smf_install'] = 'Installeer';
$txt['add_language_smf_found'] = 'De onderstaande talen zijn beschikbaar. Klik op de installatielink naast een taal om deze te installeren via de pakketbeheerfunctie.';
$txt['add_language_error_no_response'] = 'De Simple Machines-website reageert niet. Probeer het later nog eens.';
$txt['add_language_error_no_files'] = 'Er konden geen bestanden gevonden worden.';
$txt['add_language_smf_desc'] = 'Omschrijving';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Versie';

$txt['edit_language_entries_primary'] = 'Hieronder staan de primaire instellingen van deze taal.';
$txt['edit_language_entries'] = 'Bewerk taalingangen';
$txt['edit_language_entries_file'] = 'Kies de te bewerken ingangen';
$txt['languages_dictionary'] = 'Woordenboek';
$txt['languages_spelling'] = 'Spelling';
$txt['languages_for_pspell'] = 'Dit is bedoeld voor <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> indien ge&iuml;nstalleerd';
$txt['languages_rtl'] = 'Schakel &quot;rechts naar links&quot; modus in';

$txt['lang_file_desc_index'] = 'Algemene strings';
$txt['lang_file_desc_EmailTemplates'] = 'E-mailsjablonen';

$txt['languages_download'] = 'Taalpakket downloaden';
$txt['languages_download_note'] = 'Deze pagina geeft een overzicht van alle bestanden die in het taalpakket zitten en wat nuttige informatie over elk bestand. Alle aangevinkte bestanden zullen gekopieerd worden.';
$txt['languages_download_info'] = '<strong>Opmerkingen:</strong>
	<ul class="normallist">
		<li>Bestanden met de status &quot;niet beschrijfbaar&quot; kunnen op dit moment niet gekopieerd worden door SMF. Dit kan opgelost worden door de bestemmingsmap beschrijfbaar te maken via een FTP-programma danwel door FTP-gegevens in te vullen onderaan deze pagina.</li>
		<li>De versieinformatie van een bestand geeft weer voor welke versie van SMF het bijgewerkt is. Als het groengekleurd is, gaat het om een nieuwere versie dan je momenteel ge&ium;nstalleerd hebt. Bij amberkleurige tekst gaat het om dezelfde versie als die je nu hebt, en bij een rode kleur heb je een nieuwere versie ge&iuml;nstalleerd dan het bestand in het pakket.</li>
		<li>Als een bestand reeds bestaat op je forum, zal de &quot;Bestaat reeds&quot;-kolom &eacute;&eacute;n of meer waarden bevatten. &quot;Identiek&quot; geeft aan dat het bestand reeds in identieke status bestaat en daarom niet overschreven hoeft te worden. &quot;Verschillend&quot; betekent dat de inhoud verschilt en dat overschrijven in de meeste gevallen de beste oplossing is.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Primaire bestanden';
$txt['languages_download_theme_files'] = 'Thema-gerelateerde bestanden';
$txt['languages_download_filename'] = 'Bestandsnaam';
$txt['languages_download_dest'] = 'Bestemming';
$txt['languages_download_writable'] = 'Beschrijfbaar';
$txt['languages_download_version'] = 'Versie';
$txt['languages_download_older'] = 'Je hebt een nieuwere versie van dit bestand ge&iuml;nstalleerd. Overschrijven wordt niet aangeraden.';
$txt['languages_download_exists'] = 'Bestaat reeds';
$txt['languages_download_exists_same'] = 'Identiek';
$txt['languages_download_exists_different'] = 'Verschillend';
$txt['languages_download_copy'] = 'Kopieer';
$txt['languages_download_not_chmod'] = 'Je kunt niet doorgaan met de installatie totdat alle geselecteerde bestanden beschrijfbaar zijn.';
$txt['languages_download_illegal_paths'] = 'Het pakket bevat ongeldige paden - neem contact op met Simple Machines';
$txt['languages_download_complete'] = 'Installatie voltooid';
$txt['languages_download_complete_desc'] = 'Het taalpakket is succesvol ge&iuml;nstalleerd. Klik <a href="%1$s">hier</a> om terug te gaan naar het talenoverzicht.';
$txt['languages_delete_confirm'] = 'Weet je zeker dat je deze taal wilt verwijderen?';

?>