<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Boards';
$txt['admin_users'] = 'Leden';
$txt['admin_newsletters'] = 'Nieuwsbrieven';
$txt['admin_edit_news'] = 'Nieuws';
$txt['admin_groups'] = 'Ledengroepen';
$txt['admin_members'] = 'Beheer leden';
$txt['admin_members_list'] = 'Hieronder staat een lijst van alle leden die momenteel geregistreerd zijn op je forum.';
$txt['admin_next'] = 'Volgende';
$txt['admin_censored_words'] = 'Gecensureerde woorden';
$txt['admin_censored_where'] = 'Plaats het te censureren woord links, en het vervangingswoord rechts.';
$txt['admin_censored_desc'] = 'Vanwege het openbare karakter van forums kan het zijn dat je wilt voorkomen dat bepaalde woorden op het forum worden gebruikt. Je kunt hieronder opgeven welke woorden je wilt censureren.<br />Maak een veld leeg om het woord te verwijderen.';
$txt['admin_reserved_names'] = 'Gereserveerde namen';
$txt['admin_template_edit'] = 'Verander je template';
$txt['admin_modifications'] = 'Modificatie-instellingen';
$txt['admin_security_moderation'] = 'Beveiliging en moderatie';
$txt['admin_server_settings'] = 'Serverinstellingen';
$txt['admin_reserved_set'] = 'Gereserveerde namen plaatsen';
$txt['admin_reserved_line'] = 'E&eacute;n gereserveerd woord per regel.';
$txt['admin_basic_settings'] = 'Op deze pagina kun je de basisinstellingen van het forum veranderen. Wees erg voorzichtig hiermee, want een kleine fout kan ervoor zorgen dat het forum stopt met functioneren.';
$txt['admin_maintain'] = 'Onderhoudsmodus ingeschakeld';
$txt['admin_title'] = 'Forumnaam';
$txt['admin_url'] = 'URL naar het forum';
$txt['cookie_name'] = 'Cookiegebruikersnaam';
$txt['admin_webmaster_email'] = 'E-mailadres webmaster';
$txt['boarddir'] = 'SMF-directory';
$txt['sourcesdir'] = 'Sources-directory';
$txt['cachedir'] = 'Cachemap';
$txt['admin_news'] = 'Gebruik nieuws';
$txt['admin_guest_post'] = 'Gasten mogen posten';
$txt['admin_manage_members'] = 'Leden';
$txt['admin_main'] = 'SMF';
$txt['admin_config'] = 'Configuratie';
$txt['admin_version_check'] = 'Gedetailleerde versiecontrole';
$txt['admin_smffile'] = 'SMF-bestand';
$txt['admin_smfpackage'] = 'SMF-pakket';
$txt['admin_maintenance'] = 'Onderhoud';
$txt['admin_image_text'] = 'Toon knoppen als plaatjes in plaats van tekst';
$txt['admin_credits'] = 'Credits';
$txt['admin_agreement'] = 'Laat de forumregels zien wanneer iemand zich registreert';
$txt['admin_agreement_default'] = 'Standaard';
$txt['admin_agreement_select_language'] = 'Te bewerken taal';
$txt['admin_agreement_select_language_change'] = 'Verander';
$txt['admin_delete_members'] = 'Verwijder de geselecteerde leden';
$txt['admin_repair'] = 'Repareer het forum en al zijn berichten';
$txt['admin_main_welcome'] = 'Dit is je &quot;%1$s&quot;. Vanuit dit scherm kun je de instellingen bewerken, je forum onderhouden, logs bekijken, pakketten installeren, thema\'s beheren, en nog veel meer. Als je vragen of problemen hebt, kijk dan op de &quot;Ondersteuning en credits&quot; pagina. Als de informatie daar onvoldoende hulp biedt, neem dan gerust een kijkje op <a href="http://www.simplemachines.org/community/index.php" target="_blank" class="new_win">ons ondersteuningsforum</a> voor hulp. Ook zul je de antwoorden op je probleem kunnen vinden door op de <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" /> icoontjes te klikken, die in heel het beheersysteem te vinden zijn.';
$txt['admin_news_desc'] = 'Plaats &eacute;&eacute;n nieuwsitem per veld. Enkele BBC tags, zoals <span title="Ben je bold?">[b]</a>, <span title="I tall icks!!">[i]</span> en <span title="Haakjes zijn geweldig, niet?">[u]</span> zijn toegestaan in het nieuws, evenals smileys en HTML. Maak een veld leeg om het te verwijderen.';
$txt['administrators'] = 'Forumbeheerders';
$txt['admin_reserved_desc'] = 'Gereserveerde namen zorgen ervoor dat leden deze namen niet kunnen gebruiken als gebruikersnaam of als getoonde naam. Kies de opties beneden voordat je wijzigingen doorvoert.';
$txt['admin_activation_email'] = 'Stuur een activeringsmail naar nieuwe leden bij registratie';
$txt['admin_match_whole'] = 'Dit geldt alleen voor hele namen. Indien niet aangevinkt zal er naar overeenkomst worden gezocht binnen de naam.';
$txt['admin_match_case'] = 'Hoofdlettergevoelig. Indien niet aangevinkt zijn de resultaten ongevoelig voor hoofdletters.';
$txt['admin_check_user'] = 'Controleer gebruikersnaam.';
$txt['admin_check_display'] = 'Controleer getoonde naam.';
$txt['admin_newsletter_send'] = 'Je kunt iedereen e-mailen vanaf deze pagina. De e-mailadressen van de door jou geselecteerde ledengroepen zouden hieronder moeten verschijnen, maar je kunt ook e-mailadressen verwijderen en/of toevoegen. Vul adressen als volgt in: \'adres1; adres2\'.';
$txt['admin_fader_delay'] = 'Overgangsduur tussen items voor de nieuwsfader';
$txt['admin_bbc'] = 'Toon BBC-knoppen bij versturen berichten en PM\'s';

$txt['admin_backup_fail'] = 'Het maken van een backup van Settings.php is mislukt - controleer of Settings_bak.php bestaat en schrijfbaar is.';
$txt['modSettings_info'] = 'Verander instellingen die bepalen hoe dit forum functioneert.';
$txt['database_server'] = 'Databaseserver';
$txt['database_user'] = 'Databasegebruikersnaam';
$txt['database_password'] = 'Databasewachtwoord';
$txt['database_name'] = 'Databasenaam';
$txt['registration_agreement'] = 'Registratieovereenkomst';
$txt['registration_agreement_desc'] = 'Deze overeenkomst wordt getoond wanneer een gebruiker zich registreert op het forum en moet geaccepteerd worden voordat de gebruiker verder kan met de registratie.';
$txt['database_prefix'] = 'Databasetabelvoorvoegsel';
$txt['errors_list'] = 'Lijst van foutmeldingen';
$txt['errors_found'] = 'De volgende foutmeldingen zijn ontstaan (leeg bij geen fouten)';
$txt['errors_fix'] = 'Wil je proberen deze fouten te herstellen?';
$txt['errors_do_recount'] = 'Alle fouten zijn verbeterd! Er is een categorie aangemaakt voor de teruggewonnen data. Klik op de knop hieronder om belangrijke statistieken opnieuw te berekenen.';
$txt['errors_recount_now'] = 'Statistieken hertellen';
$txt['errors_fixing'] = 'Bezig fouten te herstellen';
$txt['errors_fixed'] = 'Alle fouten zijn verbeterd! Controleer eventuele aangemaakte categorie&euml;n, boards en topics om te beslissen wat je ermee wilt doen.';
$txt['attachments_avatars'] = 'Bijlagen en avatars';
$txt['attachments_desc'] = 'Van hieruit kun je alle bijgevoegde bestanden beheren. Je kunt bestanden verwijderen op formaat of datum. Gegevens over de bijgevoegde bestanden worden hieronder ook weergegeven.';
$txt['attachment_stats'] = 'Bijlagestatistieken';
$txt['attachment_integrity_check'] = 'Integriteitscontrole bijlagen';
$txt['attachment_integrity_check_desc'] = 'Deze functie zal de integriteit en groottes van de bestanden die in de database staan controleren en, indien nodig, de fouten corrigeren.';
$txt['attachment_check_now'] = 'Voer controle nu uit';
$txt['attachment_pruning'] = 'Bijlagen opruimen';
$txt['attachment_pruning_message'] = 'Aan bericht toe te voegen bericht';
$txt['attachment_pruning_warning'] = 'Weet je zeker dat je deze bijlagen wilt verwijderen?\\nDit kan niet ongedaan gemaakt worden!';
$txt['attachment_total'] = 'Totaal aantal bijgevoegde bestanden';
$txt['attachmentdir_size'] = 'Totale grootte van de map van deze bestanden';
$txt['attachmentdir_size_current'] = 'Totale grootte van huidige bijlagenmap';
$txt['attachment_space'] = 'Totaal vrije ruimte in deze map';
$txt['attachment_space_current'] = 'Totale hoeveelheid ruimte beschikbaar in huidige bijlagenmap';
$txt['attachment_options'] = 'Opties';
$txt['attachment_log'] = 'Logbestand';
$txt['attachment_remove_old'] = 'Verwijder bestanden ouder dan';
$txt['attachment_remove_size'] = 'Verwijder bestanden groter dan';
$txt['attachment_name'] = 'Bestandsnaam';
$txt['attachment_file_size'] = 'Grootte';
$txt['attachmentdir_size_not_set'] = 'Er is momenteel geen maximumgrootte opgegeven voor de map';
$txt['attachment_delete_admin'] = '[verwijderd door de beheerder]';
$txt['live'] = 'Live vanaf Simple Machines...';
$txt['remove_all'] = 'Verwijder alles';
$txt['approve_new_members'] = 'Beheerder moet alle nieuwe leden goedkeuren';
$txt['agreement_not_writable'] = 'Waarschuwing - agreement.txt is niet schrijfbaar, de veranderingen die je maakt kunnen <strong>niet</strong> worden opgeslagen.';

$txt['version_check_desc'] = 'Dit toont je de versies van je installatiebestanden ten opzichte van de laatste versie. Als een van de bestanden niet meer actueel is, is het verstandig om deze te downloaden en te upgraden naar de nieuwe versies op <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(meer details)';

$txt['lfyi'] = 'Het is momenteel niet mogelijk een verbinding te maken met de meest recente nieuwsfile op simplemachines.org';

$txt['manage_calendar'] = 'Kalender';
$txt['manage_search'] = 'Zoekfunctie';

$txt['smileys_manage'] = 'Smileys en berichticonen';
$txt['smileys_manage_info'] = 'Installeer nieuwe smileysets of voeg smileys aan de bestaande sets toe. Je kan hier ook je berichticonen beheren.';
$txt['package_info'] = 'Installeer nieuwe features of bewerk bestaande features op dit scherm.';
$txt['theme_admin'] = 'Thema\'s en lay-out';
$txt['theme_admin_info'] = 'Stel je thema\'s in en wijzig de thema opties.';
$txt['registration_center'] = 'Registratie';
$txt['member_center_info'] = 'Bekijk de ledenlijst, zoek naar leden, beheer nog niet goedgekeurde leden en leden die hun account nog niet geactiveerd hebben.';

$txt['viewmembers_name'] = 'Gebruikersnaam (getoonde naam)';
$txt['viewmembers_online'] = 'Laatst online';
$txt['viewmembers_today'] = 'Vandaag';
$txt['viewmembers_day_ago'] = 'dag geleden';
$txt['viewmembers_days_ago'] = 'dagen geleden';

$txt['display_name'] = 'Getoonde naam';
$txt['email_address'] = 'E-mailadres';
$txt['ip_address'] = 'IP-adres';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'onbekend';
$txt['security_wrong'] = 'Beheer-inlogpoging!' . "\n" . 'Referentie: %1$s' . "\n" . 'Browser: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Stuur in HTML-formaat (hiermee kun je HTML in de e-mail gebruiken).';
$txt['email_parsed_html'] = 'Voeg &lt;br /&gt;s en &amp;nbsp;s toe aan dit bericht.';
$txt['email_variables'] = 'In dit bericht kun je een aantal &quot;variabelen&quot; gebruiken. Klik <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">hier</a> voor meer informatie.';
$txt['email_force'] = 'Stuur dit ook aan leden die ervoor gekozen hebben geen aankondigingen te ontvangen.';
$txt['email_as_pms'] = 'Stuur dit aan deze groepen door middel van persoonlijke berichten.';
$txt['email_continue'] = 'Ga verder';
$txt['email_done'] = 'Klaar.';

$txt['ban_title'] = 'Banlijst';
$txt['ban_ip'] = 'IP-ban: (bijv. 192.168.12.213 of 128.0.*.*) - &eacute;&eacute;n per regel';
$txt['ban_email'] = 'E-mailban: (bijv. ikwileenban@example.com) - &eacute;&eacute;n e-mailadres per regel';
$txt['ban_username'] = 'Gebruikersnaamban: (bijv. super_gebruiker123) - &eacute;&eacute;n naam per regel';

$txt['ban_description'] = 'Hier kun je bezoekers verbannen op basis van IP, hostnaam, gebruikersnaam, of e-mail.';
$txt['ban_add_new'] = 'Nieuwe ban';
$txt['ban_banned_entity'] = 'Te verbannen entiteit';
$txt['ban_on_ip'] = 'Ban op basis van IP (bijv. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Ban op basis van hostnaam (e.g. *.mil)';
$txt['ban_on_email'] = 'Ban op basis van e-mail (e.g. *@badsite.com)';
$txt['ban_on_username'] = 'Ban op basis van gebruikersnaam';
$txt['ban_notes'] = 'Opmerkingen';
$txt['ban_restriction'] = 'Beperking';
$txt['ban_full_ban'] = 'Volledige ban';
$txt['ban_partial_ban'] = 'Gedeeltelijke ban';
$txt['ban_cannot_post'] = 'Kan&nbsp;niet&nbsp;posten';
$txt['ban_cannot_register'] = 'Kan&nbsp;niet&nbsp;registreren';
$txt['ban_cannot_login'] = 'Kan niet inloggen';
$txt['ban_add'] = 'Voeg toe';
$txt['ban_edit_list'] = 'Banlijst';
$txt['ban_type'] = 'Bantype';
$txt['ban_days'] = 'dag(en)';
$txt['ban_will_expire_within'] = 'Ban loopt af na';
$txt['ban_added'] = 'Toegevoegd';
$txt['ban_expires'] = 'Aflooptijd';
$txt['ban_hits'] = 'Hits';
$txt['ban_actions'] = 'Acties';
$txt['ban_expiration'] = 'Aflooptijd';
$txt['ban_reason_desc'] = 'De reden voor de ban, zoals getoond wordt aan het verbannen lid.';
$txt['ban_notes_desc'] = 'Opmerkingen bedoeld voor andere teamleden.';
$txt['ban_remove_selected'] = 'Verwijder selectie';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Weet je zeker dat je de geselecteerde bans wilt verwijderen?';
$txt['ban_modify'] = 'Bewerk';
$txt['ban_name'] = 'Ban-naam';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Bewerk ban';
$txt['ban_add_notes'] = '<strong>Let op</strong>: na het aanmaken van bovenstaande ban kun je meer items toevoegen die de ban in werking stellen, zoals IP-adressen, hostnamen en e-mailadressen.';
$txt['ban_expired'] = 'Verlopen / uitgeschakeld';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Geen beperking geselecteerd.';

$txt['ban_triggers'] = 'Triggers';
$txt['ban_add_trigger'] = 'Voeg bantrigger toe';
$txt['ban_add_trigger_submit'] = 'Voeg toe';
$txt['ban_edit_trigger'] = 'Bewerk';
$txt['ban_edit_trigger_title'] = 'Bewerk bantrigger';
$txt['ban_edit_trigger_submit'] = 'Bewerk';
$txt['ban_remove_selected_triggers'] = 'Verwijder geselecteerde bantriggers';
$txt['ban_no_entries'] = 'Er zijn momenteel geen bannen van kracht.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Weet je zeker dat je de geselecteerde triggers wilt verwijderen?';
$txt['ban_trigger_browse'] = 'Bekijk bantriggers';
$txt['ban_trigger_browse_description'] = 'Dit scherm toont alle ban-items, gegroepeerd op IP adres, hostnaam, e-mailadres en gebruikersnaam.';

$txt['ban_log'] = 'Banlog';
$txt['ban_log_description'] = 'Het banlog geeft alle pogingen weer van gebande gebruikers om in te loggen (alleen \'volledige ban\' en \'kan niet registreren\'-ban).';
$txt['ban_log_no_entries'] = 'Er zijn momenteel geen ingangen in het banlog.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'E-mailadres';
$txt['ban_log_member'] = 'Lid';
$txt['ban_log_date'] = 'Datum';
$txt['ban_log_remove_all'] = 'Verwijder alles';
$txt['ban_log_remove_all_confirm'] = 'Weet je zeker dat je alle banlogregels wilt verwijderen?';
$txt['ban_log_remove_selected'] = 'Verwijder selectie';
$txt['ban_log_remove_selected_confirm'] = 'Weet je zeker dat je alle geselecteerde banlogregels wilt verwijderen?';
$txt['ban_no_triggers'] = 'Er zijn momenteel geen bantriggers geconfigureerd.';

$txt['settings_not_writable'] = 'Deze instellingen kunnen niet worden aangepast omdat Settings.php niet schrijfbaar is.';

$txt['maintain_title'] = 'Forumonderhoud';
$txt['maintain_info'] = 'Optimaliseer tabellen, maak backups, onderzoek fouten, en verwijder oude berichten met deze gereedschappen.';
$txt['maintain_sub_database'] = 'Database';
$txt['maintain_sub_routine'] = 'Routine';
$txt['maintain_sub_members'] = 'Leden';
$txt['maintain_sub_topics'] = 'Topics';
$txt['maintain_done'] = 'De onderhoudstaak \'%1$s\' is met succes uitgevoerd.';
$txt['maintain_no_errors'] = 'Gefeliciteerd, geen fouten gevonden! Bedankt voor het controleren.';

$txt['maintain_tasks'] = 'Geplande taken';
$txt['maintain_tasks_desc'] = 'Beheer taken die periodiek uitgevoerd worden door SMF.';

$txt['scheduled_log'] = 'Takenlog';
$txt['scheduled_log_desc'] = 'Overzicht van de taken die zijn uitgevoerd.';
$txt['admin_log'] = 'Beheerlog';
$txt['admin_log_desc'] = 'Overzicht van de door beheerders van je forum uitgevoerde administratieve taken.';
$txt['moderation_log'] = 'Moderatielog';
$txt['moderation_log_desc'] = 'Overzicht van moderatieactiviteiten die zijn uitgevoerd door de moderators van je forum.';
$txt['spider_log_desc'] = 'Overzicht van de recente activiteit van de spiders van zoekmachines op je forum.';
$txt['pruning_log_desc'] = 'Hiermee kunnen oude ingangen in de logboeken automatisch verwijderd worden.';

$txt['mailqueue_title'] = 'E-mail';

$txt['db_error_send'] = 'E-mail versturen bij een database-verbindingsfout';
$txt['db_persist'] = 'Gebruik een vaste verbinding (persistent connection)';
$txt['ssi_db_user'] = 'Databasegebruikersnaam voor SSI-modus';
$txt['ssi_db_passwd'] = 'Databasewachtwoord voor SSI-modus';

$txt['default_language'] = 'Standaard forumtaal';

$txt['maintenance_subject'] = 'Weer te geven onderwerp';
$txt['maintenance_message'] = 'Weer te geven bericht';

$txt['errlog_desc'] = 'Het foutenlogbestand slaat alle fouten in chronologische volgorde op. Om de fouten te verwijderen, moet je deze aanvinken en op de %1$s knop onderaan de pagina drukken.';
$txt['errlog_no_entries'] = 'Er zijn momenteel geen ingangen in het foutenlog.';

$txt['theme_settings'] = 'Thema-instellingen';
$txt['theme_current_settings'] = 'Huidige thema';

$txt['dvc_your'] = 'Jouw versie';
$txt['dvc_current'] = 'Huidige versie';
$txt['dvc_sources'] = 'Sources';
$txt['dvc_default'] = 'Standaardtemplates';
$txt['dvc_templates'] = 'Huidige templates';
$txt['dvc_languages'] = 'Taalbestanden';

$txt['smileys_default_set_for_theme'] = 'Selecteer de standaard smileyset voor dit thema';
$txt['smileys_no_default'] = '(gebruik globale standaard smileyset)';

$txt['censor_test'] = 'Test de gecensureerde woorden';
$txt['censor_test_save'] = 'Test';
$txt['censor_case'] = 'Negeer hoofd- of kleine letters bij censureren';
$txt['censor_whole_words'] = 'Alleen gehele woorden censureren';

$txt['admin_confirm_password'] = '(bevestig)';
$txt['admin_incorrect_password'] = 'Ongeldig wachtwoord';

$txt['date_format'] = '(YYYY-MM-DD)';
$txt['undefined_gender'] = 'Niet gespecificeerd';
$txt['age'] = 'Leeftijd';
$txt['activation_status'] = 'Activeringsstatus';
$txt['activated'] = 'Geactiveerd';
$txt['not_activated'] = 'Niet geactiveerd';
$txt['primary'] = 'Primair';
$txt['additional'] = 'Extra';
$txt['messenger_address'] = 'Windows Live Messengeradres';
$txt['wild_cards_allowed'] = 'jokertekens * en ? zijn toegestaan';
$txt['search_for'] = 'Zoeken op';
$txt['member_part_of_these_membergroups'] = 'Lid maakt deel uit van de volgende ledengroepen';
$txt['membergroups'] = 'Ledengroepen';
$txt['confirm_delete_members'] = 'Weet je zeker dat je de geselecteerde leden wilt verwijderen?';

$txt['support_credits_title'] = 'Ondersteuning en credits';
$txt['support_credits_info'] = 'Ondersteuning voor veel voorkomende zaken en versie informatie om te geven wanneer je ergens problemen mee hebt.';
$txt['support_title'] = 'Ondersteuningsinformatie';
$txt['support_versions_current'] = 'Huidige SMF-versie';
$txt['support_versions_forum'] = 'Forumversie';
$txt['support_versions_php'] = 'PHP-versie';
$txt['support_versions_db'] = '%1$s-versie';
$txt['support_versions_server'] = 'Serverversie';
$txt['support_versions_gd'] = 'GD-versie';
$txt['support_versions'] = 'Versie-informatie';
$txt['support_resources'] = 'Hulpbronnen voor ondersteuning';
$txt['support_resources_p1'] = 'Onze <a href="%1$s">online handleiding</a> levert de hoofddocumentatie voor SMF. De SMF Online Manual bevat vele documenten die een groot scala aan vragen beantwoorden en uitleggen op het gebied van <a href="%2$s">features</a>, <a href="%3$s">instellingen</a>, <a href="%4$s">thema\'s</a>, <a href="%5$s">pakketten</a>, etc. De online handleiding bevat diepgaande documentatie voor elk onderdeel van SMF en zou de meeste vragen snel moeten kunnen beantwoorden.';
$txt['support_resources_p2'] = 'Mocht je geen antwoord op je vragen kunnen vinden in de online handleiding, dan kun je zoeken in ons <a href="%1$s">ondersteuningsforum</a> of om hulp vragen in ofwel de <a href="%2$s">Engelstalige</a> of &eacute;&eacute;n van onze vele <a href="%3$s">internationale ondersteuningsboards</a>. Het SMF ondersteuningsforum kan gebruikt worden voor <a href="%4$s">ondersteuning</a>, <a href="%5$s">vinden van extensies</a> en vele andere zaken, zoals discussie over SMF, het vinden van een host, en het bespreken van beheerproblemen met andere forumbeheerders.';

$txt['support_latest'] = 'Ondersteuning en veelvoorkomende zaken';
$txt['support_latest_fetch'] = 'Ondersteuningsinformatie ophalen...';

$txt['edit_permissions_info'] = 'Verander restricties en beschikbare features globaal of voor een specifiek board.';
$txt['membergroups_members'] = 'Niet-gegroepeerde leden';
$txt['membergroups_guests'] = 'Ongeregistreerde gasten';
$txt['membergroups_guests_na'] = 'n.v.t.';
$txt['membergroups_add_group'] = 'Voeg ledengroep toe';
$txt['membergroups_permissions'] = 'Permissies';

$txt['permitgroups_restrict'] = 'Beperkt';
$txt['permitgroups_standard'] = 'Standaard';
$txt['permitgroups_moderator'] = 'Moderator';
$txt['permitgroups_maintenance'] = 'Onderhoud';
$txt['permitgroups_inherit'] = 'Overerven';

$txt['confirm_delete_attachments_all'] = 'Weet je zeker dat je alle bijlagen wilt verwijderen?';
$txt['confirm_delete_attachments'] = 'Weet je zeker dat je de geselecteerde bijlagen wilt verwijderen?';
$txt['attachment_manager_browse_files'] = 'Bekijk bestanden';
$txt['attachment_manager_repair'] = 'Controleer';
$txt['attachment_manager_avatars'] = 'Avatars';
$txt['attachment_manager_attachments'] = 'Bijlagen';
$txt['attachment_manager_thumbs'] = 'Miniaturen';
$txt['attachment_manager_last_active'] = 'Laatst actief';
$txt['attachment_manager_member'] = 'Lid';
$txt['attachment_manager_avatars_older'] = 'Verwijder avatars van leden die niet meer actief zijn voor meer dan';
$txt['attachment_manager_total_avatars'] = 'Total aantal avatars';

$txt['attachment_manager_avatars_no_entries'] = 'Er zijn op dit moment geen avatars.';
$txt['attachment_manager_attachments_no_entries'] = 'Er zijn op dit moment geen bijlagen.';
$txt['attachment_manager_thumbs_no_entries'] = 'Er zijn op dit moment geen minituren.';

$txt['attachment_manager_settings'] = 'Bijlage-instellingen';
$txt['attachment_manager_avatar_settings'] = 'Avatarinstellingen';
$txt['attachment_manager_browse'] = 'Bekijk bestanden';
$txt['attachment_manager_maintenance'] = 'Bestandsonderhoud';
$txt['attachment_manager_save'] = 'Opslaan';

$txt['attachmentEnable'] = 'Bijlagemodus';
$txt['attachmentEnable_deactivate'] = 'Deactiveer bijlagen';
$txt['attachmentEnable_enable_all'] = 'Activeer alle bijlagen';
$txt['attachmentEnable_disable_new'] = 'Deactiveer nieuwe bijlagen';
$txt['attachmentCheckExtensions'] = 'Controleer de extensie van de bijlage';
$txt['attachmentExtensions'] = 'Alleen deze bijlage-extensies toestaan';
$txt['attachmentRecodeLineEndings'] = 'Regeleinden voor tekstuele bijlagen herschrijven';
$txt['attachmentShowImages'] = 'Toon de bijlage als afbeelding in het bericht';
$txt['attachmentEncryptFilenames'] = 'Versleutel opgeslagen bestandsnamen';
$txt['attachmentUploadDir'] = 'Bijlagenmap<div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Configureer meerdere bijlagenmappen</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Bijlagenmap';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Configureer meerdere bijlagenmappen]</a>';
$txt['attachmentDirSizeLimit'] = 'Maximumgrootte bijlagenmap<div class="smalltext">(0 voor geen limiet)</div>';
$txt['attachmentPostLimit'] = 'Maximumgrootte bijlagen per bericht<div class="smalltext">(0 voor geen limiet)</div>';
$txt['attachmentSizeLimit'] = 'Maximumgrootte van &eacute;&eacute;n bijlage<div class="smalltext">(0 voor geen limiet)</div>';
$txt['attachmentNumPerPostLimit'] = 'Maximum aantal bijlagen per post<div class="smalltext">(0 voor geen limiet)</div>';
$txt['attachment_gd_warning'] = 'De GD-module is momenteel niet ge&iuml;nstalleerd. Herencoderen van afbeeldingen is daarom niet mogelijk.';
$txt['attachment_image_reencode'] = 'Herencodeer potentieel gevaarlijke afbeeldingsbijlagen ';
$txt['attachment_image_reencode_note'] = '(vereist GD-module)';
$txt['attachment_image_paranoid_warning'] = 'De uitgebreide beveiligingschecks kunnen leiden tot een groter aantal verworpen bijlagen.';
$txt['attachment_image_paranoid'] = 'Voer uitgebreide beveiligingscontroles uit op ge&uuml;ploade afbeeldingsbijlagen';
$txt['attachmentThumbnails'] = 'Herschaal bijlagen die als afbeelding onder berichten worden getoond';
$txt['attachment_thumb_png'] = 'Sla miniaturen op in PNG-formaat';
$txt['attachmentThumbWidth'] = 'Maximumbreedte van miniaturen';
$txt['attachmentThumbHeight'] = 'Maximumhoogte van miniaturen';

$txt['attach_dir_does_not_exist'] = 'Bestaat niet';
$txt['attach_dir_not_writable'] = 'Niet beschrijfbaar';
$txt['attach_dir_files_missing'] = 'Ontbrekende bestanden (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Repareer</a>)';
$txt['attach_dir_unused'] = 'Ongebruikt';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Beheer bijlagenpaden';
$txt['attach_paths'] = 'Bijlagenpaden';
$txt['attach_current_dir'] = 'Huidige map';
$txt['attach_path'] = 'Pad';
$txt['attach_current_size'] = 'Huidige grootte (kB)';
$txt['attach_num_files'] = 'Bestanden';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Voeg pad toe';
$txt['attach_path_current_bad'] = 'Ongeldig huidig bijlagenpad.';

$txt['mods_cat_avatars'] = 'Avatars';
$txt['avatar_directory'] = 'Avatardirectory';
$txt['avatar_url'] = 'Avatar-URL';
$txt['avatar_dimension_note'] = '(0 = geen maximum)';
$txt['avatar_max_width_external'] = 'Maximale breedte externe avatar<div class="smalltext">(0 voor geen limiet)</div>';
$txt['avatar_max_height_external'] = 'Maximale hoogte externe avatar<div class="smalltext">(0 voor geen limiet)</div>';
$txt['avatar_action_too_large'] = 'Als de avatar te groot is...';
$txt['option_refuse'] = 'Weiger hem';
$txt['option_html_resize'] = 'Laat de HTML de grootte aanpassen';
$txt['option_js_resize'] = 'Verklein hem met behulp van Javascript';
$txt['option_download_and_resize'] = 'Download hem en pas de grootte aan (GD-module vereist)';
$txt['avatar_max_width_upload'] = 'Maximale breedte van ge&uuml;ploade avatar<div class="smalltext">(0 voor geen limiet)</div>';
$txt['avatar_max_height_upload'] = 'Maximale hoogte van ge&uuml;ploade avatar<div class="smalltext">(0 voor geen limiet)</div>';
$txt['avatar_resize_upload'] = 'Pas de grootte aan van avatars die te groot zijn';
$txt['avatar_resize_upload_note'] = '(GD-module vereist)';
$txt['avatar_download_png'] = 'Gebruik PNG voor verkleinde avatars';
$txt['avatar_gd_warning'] = 'De GD-module is momenteel niet ge&iuml;nstalleerd. Sommige avatarfuncties zijn daarom uitgeschakeld.';
$txt['avatar_external'] = 'Externe avatars';
$txt['avatar_upload'] = 'Uploadbare avatars';
$txt['avatar_server_stored'] = 'Op de server opgeslagen avatars';
$txt['avatar_server_stored_groups'] = 'Ledengroepen die een op de server opgeslagen avatar mogen selecteren';
$txt['avatar_upload_groups'] = 'Ledengroepen die een avatar naar de server mogen uploaden';
$txt['avatar_external_url_groups'] = 'Ledengroepen die een externe URL mogen selecteren';
$txt['avatar_select_permission'] = 'Selecteer permissies per groep';
$txt['avatar_download_external'] = 'Download avatar vanaf ingevoerde URL';
$txt['custom_avatar_enabled'] = 'Upload avatars naar...';
$txt['option_attachment_dir'] = 'Bijlagenmap';
$txt['option_specified_dir'] = 'Specifieke map...';
$txt['custom_avatar_dir'] = 'Uploadmap';
$txt['custom_avatar_dir_desc'] = 'Deze zou niet hetzelfde mogen zijn als de map van de op de server opgeslagen avatars.';
$txt['custom_avatar_url'] = 'Upload-URL';
$txt['custom_avatar_check_empty'] = 'De opgegeven map voor ge&uuml;ploade avatars lijkt ongeldig te zijn. Controleer of de instellingen juist zijn.';
$txt['avatar_reencode'] = 'Herencodeer potentieel gevaarlijke avatars';
$txt['avatar_reencode_note'] = '(vereist GD-module)';
$txt['avatar_paranoid_warning'] = 'De uitgebreide beveiligingschecks kunnen leiden tot een groter aantal verworpen avatars.';
$txt['avatar_paranoid'] = 'Voer uitgebreide beveiligingscontroles uit op ge&uuml;ploade avatars';

$txt['repair_attachments'] = 'Bijlagen beheren';
$txt['repair_attachments_complete'] = 'Onderhoud voltooid';
$txt['repair_attachments_complete_desc'] = 'Alle geselecteerde fouten zijn nu gecorrigeerd.';
$txt['repair_attachments_no_errors'] = 'Er zijn geen fouten gevonden!';
$txt['repair_attachments_error_desc'] = 'De volgende fouten zijn gevonden tijdens het onderhoud. Vink de vakjes naast de items die je wilt repareren aan, en klik op Doorgaan.';
$txt['repair_attachments_continue'] = 'Doorgaan';
$txt['repair_attachments_cancel'] = 'Annuleren';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d miniaturen horen niet bij een grote afbeelding';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d grote afbeeldingen hebben geen miniatuur';
$txt['attach_repair_file_missing_on_disk'] = '%1$d bijlagen/avatars staan in de database, maar bestaan niet langer op schijf';
$txt['attach_repair_file_wrong_size'] = '%1$d bijlagen/avatars hebben een verkeerde grootte in de database';
$txt['attach_repair_file_size_of_zero'] = '%1$d  bijlagen/avatars hebben een leeg bestand op schijf (deze zullen worden verwijderd)';
$txt['attach_repair_attachment_no_msg'] = '%1$d bijlagen horen niet langer bij een bericht';
$txt['attach_repair_avatar_no_member'] = '%1$d avatars horen niet langer bij een lid';
$txt['attach_repair_wrong_folder'] = '%1$d bijlagen staan in de verkeerde map';

$txt['news_title'] = 'Nieuws en nieuwsbrieven';
$txt['news_settings_desc'] = 'Hier kun je instellingen en permissies veranderen op het gebied van nieuws en nieuwsbrieven.';
$txt['news_settings_submit'] = 'Opslaan';
$txt['news_mailing_desc'] = 'Vanuit dit scherm kun je berichten sturen aan alle leden die zich geregistreerd hebben en hun e-mailadres hebben opgegeven. Je kunt de distributielijst bewerken of berichten zenden aan iedereen. Handig voor belangrijke nieuwsmededelingen.';
$txt['groups_edit_news'] = 'Ledengroepen die nieuwsberichten kunnen aanpassen';
$txt['groups_send_mail'] = 'Ledengroepen die forumnieuwsbrieven kunnen versturen';
$txt['xmlnews_enable'] = 'XML/RSS nieuws aanzetten?';
$txt['xmlnews_maxlen'] = 'Maximale berichtlengte:<div class="smalltext">(nul om uit te zetten, slecht idee.)</div>';
$txt['editnews_clickadd'] = 'Klik hier om een nieuwsregel toe te voegen.';
$txt['editnews_remove_selected'] = 'Verwijder selectie';
$txt['editnews_remove_confirm'] = 'Weet je zeker dat je de geselecteerde nieuwsitems wilt verwijderen?';
$txt['censor_clickadd'] = 'Klik hier om nog een censuurregel toe te voegen.';

$txt['layout_controls'] = 'Forum';
$txt['logs'] = 'Logboeken';
$txt['generate_reports'] = 'Genereer rapporten';

$txt['update_available'] = 'Update beschikbaar!';
$txt['update_message'] = 'Je gebruikt nog een oude versie van SMF, die nog fouten bevat die inmiddels zijn verbeterd.
	Het wordt je aangeraden om zo spoedig mogelijk <a href="#" id="update-link">je forum bij te werken</a> naar de recentste versie. Het duurt slechts enkele minuten!';

$txt['manageposts'] = 'Berichten en topics';
$txt['manageposts_title'] = 'Beheer berichten en topics';
$txt['manageposts_description'] = 'Hier kun je alles instellen met betrekking tot berichten en topics.';

$txt['manageposts_seconds'] = 'seconden';
$txt['manageposts_minutes'] = 'minuten';
$txt['manageposts_characters'] = 'karakters';
$txt['manageposts_days'] = 'dagen';
$txt['manageposts_posts'] = 'berichten';
$txt['manageposts_topics'] = 'topics';

$txt['manageposts_settings'] = 'Berichtinstellingen';
$txt['manageposts_settings_description'] = 'Hier kun je alles instellen met betrekking tot berichten en het plaatsen ervan.';
$txt['manageposts_settings_submit'] = 'Opslaan';

$txt['manageposts_bbc_settings'] = 'Bulletin Board Code';
$txt['manageposts_bbc_settings_description'] = 'Bulletin Board Code kan gebruikt worden om forumberichten op te maken. Bijvoorbeeld, om het woord \'huis\' vet weer te geven kun je [b]huis[/b] typen. Alle Bulletin Board Code-tags zijn omgeven door vierkante haken (\'[\' en \']\').';
$txt['manageposts_bbc_settings_title'] = 'Bulletin Board Code-instellingen';
$txt['manageposts_bbc_settings_submit'] = 'Opslaan';

$txt['manageposts_topic_settings'] = 'Topicinstellingen';
$txt['manageposts_topic_settings_description'] = 'Hier kun je alles instellen wat te maken heeft met topics';
$txt['manageposts_topic_settings_submit'] = 'Opslaan';

$txt['removeNestedQuotes'] = 'Verwijder geneste citaten bij citeren berichten';
$txt['enableEmbeddedFlash'] = 'Laat Flash zien (anders wordt dit getoond als link)';
$txt['enableEmbeddedFlash_warning'] = 'dit zou een beveiligingsrisico kunnen zijn.';
$txt['enableSpellChecking'] = 'Schakel spellingscontrole in';
$txt['enableSpellChecking_warning'] = 'dit werkt niet op alle servers!';
$txt['disable_wysiwyg'] = 'Schakel WYSIWYG-editor uit';
$txt['max_messageLength'] = 'Maximale grootte van een bericht';
$txt['max_messageLength_zero'] = '0 voor geen maximum';
$txt['fixLongWords'] = 'Woorden afbreken met meer letters dan';
$txt['fixLongWords_zero'] = '0 om uit te zetten.';
$txt['fixLongWords_warning'] = 'dit werkt niet op alle servers!';
$txt['topicSummaryPosts'] = 'Aantal berichten te tonen bij topic samenvatting';
$txt['spamWaitTime'] = 'Minimale tijd tussen het plaatsen van berichten';
$txt['edit_wait_time'] = 'Vrije bewerktijd na plaatsing';
$txt['edit_disable_time'] = 'Maximale tijd dat een bericht nog bewerkt mag worden';
$txt['edit_disable_time_zero'] = '0 om uit te schakelen';

$txt['enableBBC'] = 'Gebruik bulletin board code';
$txt['enablePostHTML'] = 'Gebruik van basis-HTML toestaan';
$txt['autoLinkUrls'] = 'URLs automatisch linken';
$txt['disabledBBC'] = 'Ingeschakelde BBC-tags';
$txt['bbcTagsToUse'] = 'Ingeschakelde BBC-tags';
$txt['bbcTagsToUse_select'] = 'Selecteer de tags die gebruikt mogen worden';
$txt['bbcTagsToUse_select_all'] = 'Selecteer alle tags';

$txt['enableStickyTopics'] = 'Sticky Topics activeren';
$txt['enableParticipation'] = 'Deelname-iconen aanzetten?';
$txt['oldTopicDays'] = 'Dagen alvorens een topic als oud wordt beschouwd, en er gewaarschuwd wordt bij reactie';
$txt['oldTopicDays_zero'] = '0 om uit te schakelen';
$txt['defaultMaxTopics'] = 'Aantal topics per pagina op de topicsindex';
$txt['defaultMaxMessages'] = 'Aantal berichten per pagina in een topicpagina';
$txt['hotTopicPosts'] = 'Aantal berichten voor een \'populair topic\'?';
$txt['hotTopicVeryPosts'] = 'Aantal berichten voor een \'zeer populair topic\'?';
$txt['enableAllMessages'] = 'Maximale topicgrootte om de &quot;Alle&quot; berichten-knop weer te geven';
$txt['enableAllMessages_zero'] = '0 om nooit &quot;Alle&quot; berichten te tonen';
$txt['disableCustomPerPage'] = 'Schakel het aanpassen van hoeveelheid topics/berichten per pagina uit';
$txt['enablePreviousNext'] = 'Vorige/volgende topic-mod activeren';

$txt['not_done_title'] = 'Nog niet klaar!';
$txt['not_done_reason'] = 'Om overbelasting van je server te voorkomen, is het proces tijdelijk gestopt. Het zou automatisch binnen enkele seconden verder moeten gaan. Als dit niet het geval is, klik dan hieronder op \'Doorgaan\'.';
$txt['not_done_continue'] = 'Doorgaan';

$txt['general_settings'] = 'Algemeen';
$txt['database_paths_settings'] = 'Database en paden';
$txt['cookies_sessions_settings'] = 'Cookies en sessies';
$txt['caching_settings'] = 'Caching';
$txt['load_balancing_settings'] = 'Load balancing';

$txt['language_configuration'] = 'Talen';
$txt['language_description'] = 'Deze sectie stelt je in staat om ge&iuml;nstalleerde talen te bewerken en nieuwe talen te downloaden van de Simple Machines website. Ook kun je hier instellingen bewerken die betrekking hebben op de talen.';
$txt['language_edit'] = 'Bewerk talen';
$txt['language_add'] = 'Taal toevoegen';
$txt['language_settings'] = 'Instellingen';

$txt['advanced'] = 'Geavanceerd';
$txt['simple'] = 'Eenvoudig';

$txt['admin_news_select_recipients'] = 'Selecteer wie er een exemplaar van deze nieuwsbrief moeten krijgen.';
$txt['admin_news_select_group'] = 'Ledengroepen';
$txt['admin_news_select_group_desc'] = 'Selecteer welke groepen deze nieuwsbrief moeten krijgen.';
$txt['admin_news_select_members'] = 'Leden';
$txt['admin_news_select_members_desc'] = 'Extra leden die deze nieuwsbrief moeten ontvangen.';
$txt['admin_news_select_excluded_members'] = 'Uitgesloten leden';
$txt['admin_news_select_excluded_members_desc'] = 'Selecteer welke leden deze nieuwsbrief niet moeten ontvangen.';
$txt['admin_news_select_excluded_groups'] = 'Uitgesloten groepen';
$txt['admin_news_select_excluded_groups_desc'] = 'Selecteer welke groepen deze nieuwsbrief zeker niet moeten krijgen.';
$txt['admin_news_select_email'] = 'E-mailadressen';
$txt['admin_news_select_email_desc'] = 'Een puntkomma-gescheiden lijst van de e-mailadressen die deze nieuwsbrief moeten krijgen (bijv. adres1; adres2).';
$txt['admin_news_select_override_notify'] = 'Negeer notificatievoorkeuren?';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Je kunt geen persoonlijk bericht aan een e-mailadres versturen. Als je doorgaat, worden alle ingevoerde e-mailadressen genegeerd.\\n\\nWeet je zeker dat je door wilt gaan?';

$txt['mailqueue_browse'] = 'Wachtrij doorbladeren';
$txt['mailqueue_settings'] = 'Instellingen';

$txt['admin_search'] = 'Snel zoeken';
$txt['admin_search_type_internal'] = 'Taak/instelling';
$txt['admin_search_type_member'] = 'Lid';
$txt['admin_search_type_online'] = 'Online Documentatie';
$txt['admin_search_go'] = 'zoek';
$txt['admin_search_results'] = 'Zoekresultaten';
$txt['admin_search_results_desc'] = 'Resultaten voor zoekopdracht: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Zoek nogmaals';
$txt['admin_search_results_none'] = 'Geen resultaten gevonden!';

$txt['admin_search_section_sections'] = 'Sectie';
$txt['admin_search_section_settings'] = 'Instellingen';

$txt['core_settings_title'] = 'Basisfeatures';
$txt['mods_cat_features'] = 'Algemeen';
$txt['mods_cat_security_general'] = 'Algemeen';
$txt['antispam_title'] = 'Verificatie';
$txt['mods_cat_modifications_misc'] = 'Diversen';
$txt['mods_cat_layout'] = 'Lay-out';
$txt['karma'] = 'Karma';
$txt['moderation_settings_short'] = 'Moderatie';
$txt['signature_settings_short'] = 'Handtekeningen';
$txt['custom_profile_shorttitle'] = 'Profielvelden';
$txt['pruning_title'] = 'Logopschoning';

$txt['boardsEdit'] = 'Boards bewerken';
$txt['mboards_new_cat'] = 'Nieuwe categorie maken';
$txt['manage_holidays'] = 'Feestdagen beheren';
$txt['calendar_settings'] = 'Kalenderinstellingen';
$txt['search_weights'] = 'Gewichten';
$txt['search_method'] = 'Zoekmethode';

$txt['smiley_sets'] = 'Smileysets';
$txt['smileys_add'] = 'Smiley toevoegen';
$txt['smileys_edit'] = 'Smileys bewerken';
$txt['smileys_set_order'] = 'Verander smileyvolgorde';
$txt['icons_edit_message_icons'] = 'Berichticonen bewerken';

$txt['membergroups_new_group'] = 'Nieuwe ledengroep';
$txt['membergroups_edit_groups'] = 'Ledengroepen bewerken';
$txt['permissions_groups'] = 'Permissies per ledengroep';
$txt['permissions_boards'] = 'Permissies per board';
$txt['permissions_profiles'] = 'Permissieprofielen';
$txt['permissions_post_moderation'] = 'Berichtmoderatie';

$txt['browse_packages'] = 'Pakketten bekijken';
$txt['download_packages'] = 'Download pakketten';
$txt['installed_packages'] = 'Ge&iuml;nstalleerde pakketten';
$txt['package_file_perms'] = 'Bestandpermissies';
$txt['package_settings'] = 'Opties';
$txt['themeadmin_admin_title'] = 'Beheer en installeer';
$txt['themeadmin_list_title'] = 'Thema-instellingen';
$txt['themeadmin_reset_title'] = 'Herstel lidopties';
$txt['themeadmin_edit_title'] = 'Bewerk thema\'s';
$txt['admin_browse_register_new'] = 'Registreer nieuw lid';

$txt['search_engines'] = 'Zoekmachines';
$txt['spiders'] = 'Spiders';
$txt['spider_logs'] = 'Spiderlog';
$txt['spider_stats'] = 'Statistieken';

$txt['paid_subscriptions'] = 'Betaalde abonnementen';
$txt['paid_subs_view'] = 'Bekijk abonnementen';

?>