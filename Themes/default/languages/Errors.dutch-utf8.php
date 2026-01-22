<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Je hebt geen toegang tot dit gedeelte van het forum';
$txt['wireless_error_notyet'] = 'Sorry, deze sectie is op dit moment niet beschikbaar voor mobiele gebruikers.';

$txt['mods_only'] = 'Alleen moderators en beheerders mogen rechtstreeks berichten verwijderen. Je kunt het bericht verwijderen via de bewerkoptie.';
$txt['no_name'] = 'Je hebt je naam niet ingevuld. Dit is echter een vereiste.';
$txt['no_email'] = 'Je hebt je e-mailadres niet ingevuld, dit is echter een vereiste';
$txt['topic_locked'] = 'Dit topic is gesloten, je mag geen berichten meer plaatsen of wijzigen...';
$txt['no_password'] = 'Wachtwoordveld is leeggelaten';
$txt['already_a_user'] = 'De opgegeven gebruikersnaam bestaat al, probeer het nog eens.';
$txt['cant_move'] = 'Je mag geen topics verplaatsen...';
$txt['login_to_post'] = 'Om een bericht te kunnen plaatsen moet je <a href="' . $scripturl . '?action=login">ingelogd zijn</a>. Heb je nog geen account, <a href="' . $scripturl . '?action=register">registreer</a> je dan even.';
$txt['passwords_dont_match'] = 'Wachtwoord is niet hetzelfde!';
$txt['register_to_use'] = 'Sorry, je moet <a href="' . $scripturl . '?action=login">inloggen</a> of jezelf <a href="' . $scripturl . '?action=register">registreren</a> voordat je dit kunt doen!';
$txt['password_invalid_character'] = 'Onjuiste letters/cijfers gebruikt in je wachtwoord.';
$txt['name_invalid_character'] = 'Onjuiste letters/cijfers gebruikt in je naam.';
$txt['email_invalid_character'] = 'Onjuiste letters/cijfers gebruikt in je e-mail.';
$txt['username_reserved'] = 'De gebruikersnaam die je probeert te registreren bevat de gereserveerde naam \'%1$s\'. Kies een andere gebruikersnaam.';
$txt['numbers_one_to_nine'] = 'Dit gedeelte accepteert alleen nummers tussen de 0-9';
$txt['not_a_user'] = 'Het lid waar je het profiel van wilt bekijken bestaat niet!';
$txt['not_a_topic'] = 'Dit bericht bestaat niet op dit board.';
$txt['not_approved_topic'] = 'Dit topic is nog niet goedgekeurd.';
$txt['email_in_use'] = 'Dit e-mailadres (%1$s) is al in gebruik door een geregistreerd lid. Als je denkt dat dit een vergissing is, ga dan naar de inlogpagina en gebruik de \'wachtwoord vergeten\'-optie voor dit e-mailadres.';

$txt['didnt_select_vote'] = 'Je hebt geen stemoptie gekozen.';
$txt['poll_error'] = 'Of deze poll bestaat niet, of de poll is vergrendeld, of je probeert een tweede keer te stemmen.';
$txt['members_only'] = 'Deze optie is alleen beschikbaar voor geregistreerde leden.';
$txt['locked_by_admin'] = 'Dit is vergrendeld door een beheerder.  Je kunt het niet ontgrendelen.';
$txt['not_enough_posts_karma'] = 'Sorry, je hebt nog niet voldoende berichten gepost om karma te kunnen bewerken - je hebt tenminste %1$d nodig.';
$txt['cant_change_own_karma'] = 'Sorry, je kunt niet je eigen karma bewerken.';
$txt['karma_wait_time'] = 'Sorry, je kunt deze actie niet zo snel achter elkaar uitvoeren. Je zult nog %1$s %2$s moeten wachten.';
$txt['feature_disabled'] = 'Sorry, deze feature is niet geactiveerd.';
$txt['cant_access_upload_path'] = 'Geen toegang tot de uploadmap van de bijlagen!';
$txt['file_too_big'] = 'Het bestand is te groot. Het maximumformaat is %1$d kB.';
$txt['attach_timeout'] = 'Er is iets fout gegaan bij het wegschrijven van je bijlage, probeer het alsjeblieft nog eens.';
$txt['filename_exists'] = 'Sorry! Er bestaat al een bijlage met dezelfde bestandsnaam als het bestand dat je probeert te uploaden. Hernoem het bestand en probeer het nog eens.';
$txt['bad_attachment'] = 'Je bijlage passeerde de beveiliginscontroles niet en wordt daarom niet opgeslagen. Neem contact op met de forumbeheerder.';
$txt['ran_out_of_space'] = 'De uploadmap zit vol. Probeer een kleiner bestand te uploaden en/of stel de beheerder op de hoogte.';
$txt['couldnt_connect'] = 'De server of het bestand dat je opgaf kon niet gevonden worden.';
$txt['no_board'] = 'Het board dat je opgaf bestaat niet';
$txt['cant_split'] = 'Het is je niet toegestaan om topics te splitsen';
$txt['cant_merge'] = 'Het is je niet toegestaan om topics samen te voegen';
$txt['no_topic_id'] = 'Ongeldig topic-ID gespecificeerd.';
$txt['split_first_post'] = 'Je kunt een topic niet bij het eerste bericht afsplitsen.';
$txt['topic_one_post'] = 'Het topic bestaat uit slechts &eacute;&eacute;n bericht en kan daarom niet worden gesplitst.';
$txt['no_posts_selected'] = 'Geen berichten geselecteerd ';
$txt['selected_all_posts'] = 'Splitsen is onmogelijk. Je hebt alle berichten geselecteerd.';
$txt['cant_find_messages'] = 'Geen berichten gevonden.';
$txt['cant_find_user_email'] = 'Kan het e-mailadres van de gebruiker niet vinden.';
$txt['cant_insert_topic'] = 'Het is niet mogelijk om een topic in te voegen';
$txt['already_a_mod'] = 'Je hebt een gebruikersnaam gekozen van een bestaande moderator. Kies een andere gebruikersnaam';
$txt['session_timeout'] = 'Fout bij het versturen van het formulier. Sessie timeout.';
$txt['session_verify_fail'] = 'Sessie-check fout. Probeer het nog een keer.';
$txt['verify_url_fail'] = 'Kon de verwijzende URL niet verifi&euml;ren. Ga terug en probeer het opnieuw.';
$txt['guest_vote_disabled'] = 'Gasten mogen niet stemmen in deze poll.';

$txt['cannot_access_mod_center'] = 'Je hebt geen toegang tot het moderatiecentrum.';
$txt['cannot_admin_forum'] = 'Je hebt geen rechten om dit forum te beheren.';
$txt['cannot_announce_topic'] = 'Je mag geen topics aankondigen op dit board.';
$txt['cannot_approve_posts'] = 'Je hebt geen permissie om berichten goed te keuren.';
$txt['cannot_post_unapproved_attachments'] = 'Je hebt geen permissie om niet-goedgekeurde bijlagen te plaatsen.';
$txt['cannot_post_unapproved_topics'] = 'Je hebt geen permissie om niet-goedgekeurde topics te plaatsen.';
$txt['cannot_post_unapproved_replies_own'] = 'Je hebt geen permissie om niet-goedgekeurde berichten in eigen topics te plaatsen.';
$txt['cannot_post_unapproved_replies_any'] = 'Je hebt geen permissie om niet-goedgekeurde berichten in andermans topics te plaatsen.';
$txt['cannot_calendar_edit_any'] = 'Je mag geen kalendergebeurtenissen wijzigen.';
$txt['cannot_calendar_edit_own'] = 'Je hebt onvoldoende rechten om je gebeurtenissen aan te passen in de kalender.';
$txt['cannot_calendar_post'] = 'Sorry, gebeurtenissen plaatsen is niet toegestaan.';
$txt['cannot_calendar_view'] = 'Sorry, je hebt geen toestemming om de kalender te bekijken.';
$txt['cannot_remove_any'] = 'Sorry, je hebt hier geen permissie om topics te verwijderen. Controleer eventueel of het topic naar een ander board is verplaatst.';
$txt['cannot_remove_own'] = 'Je mag je eigen topics in dit board niet verwijderen. Controleer eventueel of het topic naar een ander board is verplaatst.';
$txt['cannot_edit_news'] = 'Je hebt geen rechten om nieuwsberichten op dit forum te bewerken.';
$txt['cannot_pm_read'] = 'Sorry, je kan je eigen persoonlijke berichten niet lezen.';
$txt['cannot_pm_send'] = 'Je hebt geen toestemming om persoonlijke berichten te versturen.';
$txt['cannot_karma_edit'] = 'Het is je niet toegestaan om het karma van andere personen aan te passen.';
$txt['cannot_lock_any'] = 'Je hebt onvoldoende rechten om elk willekeurig topic op slot zetten.';
$txt['cannot_lock_own'] = 'Sorry, maar je mag hier je eigen topics niet sluiten.';
$txt['cannot_make_sticky'] = 'Je hebt geen rechten om dit topic sticky te maken.';
$txt['cannot_manage_attachments'] = 'Je mag geen bijlagen of avatars beheren';
$txt['cannot_manage_bans'] = 'Je mag de banlijst niet aanpassen.';
$txt['cannot_manage_boards'] = 'Je mag geen boards en categorie&euml;n bewerken.';
$txt['cannot_manage_membergroups'] = 'Je hebt geen rechten om ledengroepen te beheren of toe te wijzen.';
$txt['cannot_manage_permissions'] = 'Je hebt niet de nodige rechten om permissies te beheren.';
$txt['cannot_manage_smileys'] = 'Je hebt geen toegang tot het beheer van smileys en berichticonen.';
$txt['cannot_mark_any_notify'] = 'Je hebt niet de nodige rechten om notificaties te vragen voor dit bericht.';
$txt['cannot_mark_notify'] = 'Sorry, je hebt geen rechten om notificaties te vragen voor dit board.';
$txt['cannot_merge_any'] = 'Je hebt geen rechten om topics samen te voegen op dit board.';
$txt['cannot_moderate_forum'] = 'Het is je niet toegestaan dit forum te beheren.';
$txt['cannot_moderate_board'] = 'Je mag dit forum niet modereren!';
$txt['cannot_modify_any'] = 'Het is je niet toegestaan om willekeurige berichten aan te passen.';
$txt['cannot_modify_own'] = 'Sorry, maar je hebt geen toestemming om je eigen berichten aan te passen.';
$txt['cannot_modify_replies'] = 'Ook al is dit een antwoord in jouw topic, je hebt geen rechten om deze aan te passen.';
$txt['cannot_move_own'] = 'Je mag niet je eigen topics op dit board verplaatsen.';
$txt['cannot_move_any'] = 'Je hebt geen rechten om topics te verplaatsen op dit board.';
$txt['cannot_poll_add_own'] = 'Sorry, je hebt geen recht om polls toe te voegen in je eigen topic in dit board.';
$txt['cannot_poll_add_any'] = 'Je hebt geen rechten polls toe te voegen in dit topic.';
$txt['cannot_poll_edit_own'] = 'Je kan deze poll niet aanpassen, ook al is het jouw poll.';
$txt['cannot_poll_edit_any'] = 'De toestemming om polls te wijzigen op dit board is je geweigerd.';
$txt['cannot_poll_lock_own'] = 'Je hebt geen rechten om op dit board je eigen polls te sluiten.';
$txt['cannot_poll_lock_any'] = 'Sorry, maar je mag niet een willekeurige poll sluiten.';
$txt['cannot_poll_post'] = 'Je mag geen polls plaatsen in dit board.';
$txt['cannot_poll_remove_own'] = 'Het is je niet toegelaten deze poll te verwijderen uit je topic.';
$txt['cannot_poll_remove_any'] = 'Het is je niet toegelaten een willekeurige poll te verwijderen op dit forum.';
$txt['cannot_poll_view'] = 'Je hebt geen rechten om polls te zien op dit board.';
$txt['cannot_poll_vote'] = 'Sorry, maar je kunt niet stemmen in polls op dit board.';
$txt['cannot_post_attachment'] = 'Je hebt geen rechten om hier in dit board bijlagen te plaatsen.';
$txt['cannot_post_new'] = 'Sorry, je mag geen nieuwe topics plaatsen op dit board.';
$txt['cannot_post_reply_any'] = 'Je hebt geen toestemming reacties te plaatsen op topics in dit board.';
$txt['cannot_post_reply_own'] = 'Je hebt geen toestemming reacties te plaatsen op topics in dit board, ook niet in je eigen onderwerpen.';
$txt['cannot_profile_remove_own'] = 'Sorry, maar je kunt je eigen account niet verwijderen.';
$txt['cannot_profile_remove_any'] = 'Je hebt niet de rechten om andere leden te verwijderen!';
$txt['cannot_profile_extra_any'] = 'Je hebt geen rechten om profielen aan te passen.';
$txt['cannot_profile_identity_any'] = 'Je mag geen account-instellingen van gebruikers aanpassen.';
$txt['cannot_profile_title_any'] = 'Je mag niet iemands extra titel aanpassen.';
$txt['cannot_profile_extra_own'] = 'Sorry, je hebt niet de juiste rechten om de data in je eigen profiel aan te passen.';
$txt['cannot_profile_identity_own'] = 'Je kan je eigen identiteit op dit moment niet aanpassen.';
$txt['cannot_profile_title_own'] = 'Je mag je eigen titel niet aanpassen.';
$txt['cannot_profile_server_avatar'] = 'Je hebt geen toestemming om een avatar op de server te kiezen.';
$txt['cannot_profile_upload_avatar'] = 'Je hebt geen toestemming om een avatar naar de server te uploaden.';
$txt['cannot_profile_remote_avatar'] = 'Je hebt geen rechten om externe avatars te gebruiken.';
$txt['cannot_profile_view_own'] = 'Sorry, maar je mag je eigen profiel niet bekijken.';
$txt['cannot_profile_view_any'] = 'Sorry, maar je mag niet iemands profiel bekijken.';
$txt['cannot_delete_own'] = 'Je mag in dit board niet je eigen berichten verwijderen.';
$txt['cannot_delete_replies'] = 'Sorry, je mag deze berichten niet verwijderen, ook al zijn het reacties in jouw topic.';
$txt['cannot_delete_any'] = 'Berichten verwijderen in dit board is niet toegestaan.';
$txt['cannot_report_any'] = 'Je mag geen berichten melden in dit board.';
$txt['cannot_search_posts'] = 'Je mag geen berichten opzoeken op dit forum.';
$txt['cannot_send_mail'] = 'Je hebt geen rechten om naar iedereen e-mails te sturen.';
$txt['cannot_issue_warning'] = 'Sorry, je hebt geen permissie om waarschuwingen te geven aan leden.';
$txt['cannot_send_topic'] = 'Sorry, maar de administrator heeft doorsturen van posts uitgeschakeld op dit board.';
$txt['cannot_split_any'] = 'Topics splitten op dit board is niet toegestaan.';
$txt['cannot_view_attachments'] = 'Het lijkt erop dat je geen toestemming hebt om bijlagen te bekijken of te downloaden in dit board.';
$txt['cannot_view_mlist'] = 'Je hebt geen toestemming om de ledenlijst te bekijken.';
$txt['cannot_view_stats'] = 'Het is je niet toegestaan forumstatistieken te bekijken.';
$txt['cannot_who_view'] = 'Sorry - je hebt niet de juiste rechten om te bekijken wie er online is op dit forum.';

$txt['no_theme'] = 'Dit thema bestaat niet.';
$txt['theme_dir_wrong'] = 'De directory van het standaard thema is niet correct. Corrigeer het door op deze tekst te klikken.';
$txt['registration_disabled'] = 'Sorry, registratie is momenteel uitgeschakeld.';
$txt['registration_no_secret_question'] = 'Sorry, er is geen geheime vraag voor dit lid ingesteld.';
$txt['poll_range_error'] = 'Sorry, de poll moet meer dan 0 dagen geldig zijn.';
$txt['delFirstPost'] = 'Je kunt het eerste bericht van een topic niet verwijderen.<p>Als je het hele topic wilt verwijderen, klik dan onderaan op de \'Verwijder topic\'-link, of vraag een beheerder om dit voor je te doen.</p>';
$txt['parent_error'] = 'Kan board niet aanmaken!';
$txt['login_cookie_error'] = 'Het is niet gelukt om in te loggen. Controleer je cookie instellingen.';
$txt['incorrect_answer'] = 'Sorry, maar je hebt een verkeerd antwoord gegeven.  Klik op de terug knop om het nog eens te proberen, of klik 2 keer op de terug knop om de standaard methode toe te passen.';
$txt['no_mods'] = 'Geen moderators gevonden!';
$txt['parent_not_found'] = 'Fout in de structuur van de boards: kan het bovenliggende forum niet vinden';
$txt['modify_post_time_passed'] = 'Je mag dit bericht niet meer aanpassen aangezien de tijdslimiet voor bewerkingen verstreken is.';

$txt['calendar_off'] = 'De kalender is momenteel niet toegankelijk omdat deze uitgeschakeld staat';
$txt['invalid_month'] = 'Foutieve maand-waarde.';
$txt['invalid_year'] = 'Foutieve jaar-waarde.';
$txt['invalid_day'] = 'Foutieve dag-waarde.';
$txt['event_month_missing'] = 'De maand voor de gebeurtenis ontbreekt.';
$txt['event_year_missing'] = 'Het jaar voor de gebeurtenis ontbreekt.';
$txt['event_day_missing'] = 'De dag voor de gebeurtenis ontbreekt.';
$txt['event_title_missing'] = 'De titel voor de gebeurtenis ontbreekt.';
$txt['invalid_date'] = 'Foutieve datum.';
$txt['no_event_title'] = 'Er is geen titel opgegeven.';
$txt['missing_event_id'] = 'Het ID ontbreekt.';
$txt['cant_edit_event'] = 'Het is jou niet toegestaan deze gebeurtenis te bewerken.';
$txt['missing_board_id'] = 'Board ID ontbreekt.';
$txt['missing_topic_id'] = 'Topic ID ontbreekt.';
$txt['topic_doesnt_exist'] = 'Topic bestaat niet.';
$txt['not_your_topic'] = 'Je bent niet de eigenaar van deze topic.';
$txt['board_doesnt_exist'] = 'Dit board bestaat niet.';
$txt['no_span'] = 'Er is momenteel geen maximum ingesteld.';
$txt['invalid_days_numb'] = 'Ongeldig aantal dagen ingegeven.';

$txt['moveto_noboards'] = 'Er zijn geen boards om dit topic naar te verplaatsen!';

$txt['already_activated'] = 'Je account is reeds geactiveerd.';
$txt['still_awaiting_approval'] = 'Je account wacht nog steeds op goedkeuring van de beheerder.';

$txt['invalid_email'] = 'Ongeldig e-mailadres.<br />Voorbeeld van een geldig e-mailadres: evil.user@badsite.com.<br />Voorbeeld van een geldig e-mailadres binnen een bepaald bereik: *@*.badsite.com';
$txt['invalid_expiration_date'] = 'Verloopdatum is ongeldig';
$txt['invalid_hostname'] = 'Ongeldige hostnaam.<br />Voorbeeld van een geldige hostnaam: proxy4.badhost.com<br />Voorbeeld van een geldige hostnaam binnen een bepaald bereik: *.badhost.com';
$txt['invalid_ip'] = 'Ongeldig IP-adres.<br />Voorbeeld van een geldig IP-adres: 127.0.0.1<br />Voorbeeld van een geldig IP bereik: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Ongeldig IP of IP-bereik.<br />Voorbeeld van een geldig IP-adres: 127.0.0.1<br />Voorbeeld van een geldig IP-bereik: 127.0.0.*';
$txt['invalid_username'] = 'Gebruikersnaam niet gevonden';
$txt['no_ban_admin'] = 'Je mag geen beheerder verbannen - je dient deze eerst een lagere rang te geven!';
$txt['no_bantype_selected'] = 'Geen bantype geselecteerd';
$txt['ban_not_found'] = 'Ban niet gevonden';
$txt['ban_unknown_restriction_type'] = 'Restrictietype is niet bekend';
$txt['ban_name_empty'] = 'De naam van de ban is leeggelaten.';
$txt['ban_name_exists'] = 'De naam van deze ban (\'%1$s\') bestaat reeds. Kies een andere naam.';
$txt['ban_trigger_already_exists'] = 'Deze bantrigger (%1$s) bestaat reeds in %2$s.';

$txt['recycle_no_valid_board'] = 'Geen geldig board geselecteerd voor berichten recycling';

$txt['login_threshold_fail'] = 'Sorry, je hebt geen inlogkansen meer.  Kom later terug en probeer dan opnieuw.';
$txt['login_threshold_brute_fail'] = 'Sorry, je hebt het maximale aantal inlogpogingen gebruikt. Probeer het over 30 seconden nog eens.';

$txt['who_off'] = 'Je kunt niet bij <b>Wie is er online</b> omdat deze is uitgeschakeld.';

$txt['merge_create_topic_failed'] = 'Er is een fout opgetreden bij het cre&euml;ren van een nieuw topic.';
$txt['merge_need_more_topics'] = 'Voor het samenvoegen van berichten zijn tenminste twee topics nodig.';

$txt['postWaitTime_broken'] = 'Het laatste bericht van je was minder dan %1$d seconden geleden! Probeer het later nogmaals!';
$txt['registerWaitTime_broken'] = 'Je hebt jezelf %1$d seconden geleden al geregistreerd!';
$txt['loginWaitTime_broken'] = 'Je zult nog %1$d seconden moeten wachten voor je weer in mag loggen, sorry.';
$txt['pmWaitTime_broken'] = 'Het laatste persoonlijk bericht van jouw IP is minder dan %1$d seconden geleden verstuurd. Probeer het later nog eens.';
$txt['reporttmWaitTime_broken'] = 'Het laatste gerapporteerde topic van jouw IP is minder dan %1$d seconden geleden verstuurd. Probeer het later nog eens.';
$txt['sendtopcWaitTime_broken'] = 'Het laatste topic dat vanaf jouw IP is gepost is minder dan %1$d seconden geleden geplaatst. Probeer het later nog eens.';
$txt['sendmailWaitTime_broken'] = 'De laatste e-mail die vanaf jouw IP is verstuurd, is %1$d seconden geleden verstuurd. Probeer het later nog eens.';
$txt['searchWaitTime_broken'] = 'Je vorige zoekopdracht vond slechts %1$d seconden geleden plaats. Probeer het straks nog eens.';

$txt['email_missing_data'] = 'Je moet iets invoeren in zowel het onderwerpveld als het berichtveld.';

$txt['topic_gone'] = 'Het topic of board dat je zoekt bestaat niet of je beschikt over onvoldoende rechten om het te bekijken.';
$txt['theme_edit_missing'] = 'Het bestand dat je probeert aan te passen... kan niet worden gevonden!';

$txt['attachments_no_write'] = 'De bijlage-upload-directory is niet schrijfbaar. De bijlage of avatar kan niet worden opgeslagen.';
$txt['attachments_limit_per_post'] = 'Je mag niet meer dan %1$d bijlagen per bericht uploaden';

$txt['no_dump_database'] = 'Alleen admins kunnen een backup van de database maken!';
$txt['pm_not_yours'] = 'Het persoonlijk bericht dat je probeert te citeren is niet van jou of bestaat helemaal niet. Ga terug en probeer het eventueel opnieuw.';
$txt['mangled_post'] = 'Malafide formdata. Ga terug en probeer het opnieuw.';
$txt['quoted_post_deleted'] = 'De post die je probeert te citeren bestaat niet, is verwijderd of niet meer zichtbaar voor jou.';
$txt['pm_too_many_per_hour'] = 'Je mag niet meer dan %1$d persoonlijke berichten per uur versturen.';
$txt['labels_too_many'] = 'Sorry, %1$s berichten hadden reeds het maximaal aantal toegestane labels!';

$txt['register_only_once'] = 'Sorry, maar je mag niet meerdere accounts registreren op dezelfde tijd vanaf dezelfde computer.';
$txt['admin_setting_coppa_require_contact'] = 'Je moet of een postadres of een faxnummer invoeren als ouderlijke goedkeuring vereist is.';

$txt['error_long_name'] = 'De naam die je gebruikt hebt was te lang.';
$txt['error_no_name'] = 'Je hebt geen naam ingevuld.';
$txt['error_bad_name'] = 'De naam die je hebt ingevoerd kan niet gebruikt worden omdat het een gereserveerde naam is.';
$txt['error_no_email'] = 'E-mailadres is niet ingevuld.';
$txt['error_bad_email'] = 'Een ongeldig e-mailadres was ingevuld.';
$txt['error_no_event'] = 'Geen gebeurtenisnaam was ingevuld.';
$txt['error_no_subject'] = 'Geen onderwerp ingevuld.';
$txt['error_no_question'] = 'De poll dient een vraag te bevatten!';
$txt['error_no_message'] = 'Het bericht is leeggelaten.';
$txt['error_long_message'] = 'Het bericht overschrijdt de maximum toegestane lengte (%1$d karakters).';
$txt['error_no_comment'] = 'Het commentaarveld is leeggelaten.';
$txt['error_session_timeout'] = 'Je sessie is verlopen. Verstuur je bericht nog een keer.';
$txt['error_no_to'] = 'Geen ontvangers gespecificeerd.';
$txt['error_bad_to'] = 'E&eacute;n of meer \'aan\'-geadresseerden konden niet worden gevonden.';
$txt['error_bad_bcc'] = 'E&eacute;n of meer \'bcc\'-geadresseerden konden niet worden gevonden.';
$txt['error_form_already_submitted'] = 'Je hebt dit formulier al eens verstuurd! Het zou kunnen dat je per ongeluk dubbel geklikt hebt of geprobeerd hebt om te verversen.';
$txt['error_poll_few'] = 'Je moet tenminste twee keuzes invullen!';
$txt['error_need_qr_verification'] = 'Vul de verificatiesectie hieronder in om het plaatsen van je bericht te voltooien.';
$txt['error_wrong_verification_code'] = 'De letters die je hebt ingevoerd komen niet overeen met de letters van het getoonde plaatje.';
$txt['error_wrong_verification_answer'] = 'Je hebt de verificatievragen niet juist beantwoord.';
$txt['error_need_verification_code'] = 'Voer de verificatiecode hieronder in om de resultaten te bekijken.';
$txt['error_bad_file'] = 'Sorry, het gespecificeerde bestand kon niet worden geopend: %s';
$txt['error_bad_line'] = 'De gespecificeerde regel is ongeldig.';

$txt['smiley_not_found'] = 'Smiley niet gevonden.';
$txt['smiley_has_no_code'] = 'Er is geen code voor deze smiley ingevuld.';
$txt['smiley_has_no_filename'] = 'Geen bestandsnaam voor deze smiley ingevuld.';
$txt['smiley_not_unique'] = 'Er bestaat al een smiley met deze code.';
$txt['smiley_set_already_exists'] = 'Er bestaat al een smiley met die URL';
$txt['smiley_set_not_found'] = 'Smiley set niet gevonden';
$txt['smiley_set_path_already_used'] = 'De URL van de smiley set wordt al gebruikt door een andere smiley set.';
$txt['smiley_set_unable_to_import'] = 'Kan de smiley set niet importeren. De directory is niet geldig of kan niet benaderd worden.';

$txt['smileys_upload_error'] = 'Uploaden van het bestand mislukt.';
$txt['smileys_upload_error_blank'] = 'Alle smiley sets moeten een plaatje hebben!';
$txt['smileys_upload_error_name'] = 'Alle smileys moeten dezelfde bestandsnaam hebben!';
$txt['smileys_upload_error_illegal'] = 'Ongeldig type.';

$txt['search_invalid_weights'] = 'De zoekgewichten zijn niet juist geconfigureerd. Ten minste &eacute;&eacute;n gewicht zou ingesteld moeten zijn op niet-nul. Meld deze fout aan een beheerder.';
$txt['unable_to_create_temporary'] = 'De zoekfunctie kon geen tijdelijke tabellen cre&euml;ren. Probeer het opnieuw.';

$txt['package_no_file'] = 'Kan bestand niet vinden!';
$txt['packageget_unable'] = 'Kan geen verbinding krijgen met de server.  Probeer in plaats daarvoor <a href="%1$s" target="_blank" class="new_win">deze URL</a> te gebruiken.';
$txt['not_on_simplemachines'] = 'Sorry, pakketten kunnen op deze manier alleen worden gedownload vanaf de simplemachines.org server.';
$txt['package_cant_uninstall'] = 'Dit pakket is of nooit ge&iuml;nstalleerd geweest of was inmiddels al verwijderd - je kunt het nu niet verwijderen.';
$txt['package_cant_download'] = 'Je kunt geen nieuwe pakketten downloaden of installeren omdat de pakkettenmap niet beschrijfbaar is!';
$txt['package_upload_error_nofile'] = 'Je hebt geen pakket gekozen om te uploaden.';
$txt['package_upload_error_failed'] = 'Kan het pakket niet uploaden, controleer de permissies van de map!';
$txt['package_upload_error_exists'] = 'Het bestand dat je aan het uploaden bent, bestaat reeds op de server. Verwijder het eerst en probeer het daarna opnieuw.';
$txt['package_upload_error_supports'] = 'Het pakketbeheerscherm laat momenteel de volgende bestandstypes toe: %1$s.';
$txt['package_upload_error_broken'] = 'Het uploaden van het pakket is mislukt door de volgende fout:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'Het pakket dat je probeert te installeren kan niet gevonden worden. Probeer het pakket eventueel handmatig naar de map \'Packages\' te uploaden.';
$txt['package_get_error_missing_xml'] = 'Het pakket dat je probeert te installeren, bevat geen package-info.xml. Dit bestand moet in de hoofdmap van het pakket staan.';
$txt['package_get_error_is_zero'] = 'Het gedownloade pakket lijkt leeg te zijn. Controleer of zowel de map \'Packages\' als haar submap \'temp\' beschrijfbaar zijn. Als dit probleem zich voor blijft doen, kun je proberen het pakket lokaal (op je eigen pc) uit te pakken en de uitgepakte bestanden te uploaden naar een submap van de map \'Packages\'. Als het pakket bijvoorbeeld shout.tar.gz heet, zou je het volgende kunnen doen:<br />1) Download het pakket naar je lokale pc en pak het uit naar een map.<br />2) Maak met behulp van een FTP-client een nieuwe map in de map \'Packages\', in dit geval bijvoorbeeld \'shout\'.<br />3) Upload alle bestanden van het uitgepakte pakket naar de zojuist gemaakte map.<br />4) Ga terug naar de pakketbeheerpagina en het pakket zal automatisch gevonden worden door SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF kon geen geldige informatie in het package-info.xml bestand van het pakket vinden. Het pakket zou een fout kunnen bevatten, of corrupt kunnen zijn.';

$txt['no_membergroup_selected'] = 'Geen ledengroep geselecteerd';
$txt['membergroup_does_not_exist'] = 'De ledengroep bestaat niet of is ongeldig.';

$txt['at_least_one_admin'] = 'Er moet tenminste &eactue;&eacute;n administrator op het forum zijn!';

$txt['error_functionality_not_windows'] = 'Sorry, deze functionaliteit is op dit moment niet beschikbaar voor servers die op Windows draaien.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Bijlage niet gevonden';

$txt['error_no_boards_selected'] = 'Geen geldige boards geselecteerd!';
$txt['error_invalid_search_string'] = 'Geen geldige zoekterm opgegeven';
$txt['error_invalid_search_string_blacklist'] = 'De zoektermen bestonden uit te triviale woorden. Probeer het opnieuw met andere zoektermen.';
$txt['error_search_string_small_words'] = 'Elk woord moet ten minste twee tekens lang zijn.';
$txt['error_query_not_specific_enough'] = 'De zoekopdracht leverde geen resultaten op.';
$txt['error_no_messages_in_time_frame'] = 'Geen berichten gevonden in geselecteerde periode';
$txt['error_no_labels_selected'] = 'Er zijn geen labels geselecteerd!';
$txt['error_no_search_daemon'] = 'Kon geen toegang verkrijgen tot de zoekdaemon';

$txt['profile_errors_occurred'] = 'De volgende fouten zijn opgetreden bij het opslaan van je profiel';
$txt['profile_error_bad_offset'] = 'De tijdafwijking is buiten bereik';
$txt['profile_error_no_name'] = 'Het naamveld was leeggelaten';
$txt['profile_error_name_taken'] = 'De gekozen gebruikersnaam of weergegeven naam is al in gebruik.';
$txt['profile_error_name_too_long'] = 'De gekozen naam is te lang. Deze mag niet langer zijn dan 60 tekens.';
$txt['profile_error_no_email'] = 'Het e-mailveld is leeggelaten';
$txt['profile_error_bad_email'] = 'Je hebt geen geldig e-mailadres ingevuld';
$txt['profile_error_email_taken'] = 'Een andere gebruiker heeft reeds dat e-mailadres geregistreerd';
$txt['profile_error_no_password'] = 'Je hebt geen wachtwoord ingegeven';
$txt['profile_error_bad_new_password'] = 'De nieuwe wachtwoorden die je hebt ingegeven komen niet overeen';
$txt['profile_error_bad_password'] = 'Het wachtwoord dat je hebt ingegeven was niet correct';
$txt['profile_error_bad_avatar'] = 'De geselecteerde avatar is ofwel te groot of helemaal geen avatar';
$txt['profile_error_password_short'] = 'Je wachtwoord moet ten minste ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' tekens bevatten.';
$txt['profile_error_password_restricted_words'] = 'Je wachtwoord mag niet je gebruikersnaam, e-mailadres of andere veelgebruikte woorden bevatten.';
$txt['profile_error_password_chars'] = 'Je wachtwoord moet samengesteld worden uit kleine- en hoofdletters, alsook cijfers.';
$txt['profile_error_already_requested_group'] = 'Je hebt reeds toegang tot deze groep aangevraagd!';
$txt['profile_error_openid_in_use'] = 'Een andere lid gebruikt deze OpenID authentificatie-URL al.';

$txt['mysql_error_space'] = ' - controleer database-opslagruimte.';

$txt['icon_not_found'] = 'Het icoon is niet aangetroffen in het standaardthema - zorg ervoor dat het plaatje geupload is en probeer het opnieuw.';
$txt['icon_after_itself'] = 'Het icoon kan niet na zichzelf worden gepositioneerd!';
$txt['icon_name_too_long'] = 'Bestandsnamen van iconen mogen niet langer dan 16 tekens zijn!';

$txt['name_censored'] = 'De naam die je probeert te gebruiken, %1$s, bevat helaas woorden die gecensureerd zijn. Probeer een andere naam.';

$txt['poll_already_exists'] = 'Een topic kan maar aan &eacute;&eacute;n poll gekoppeld worden!';
$txt['poll_not_found'] = 'Er is geen poll gekoppeld aan dit topic!';

$txt['error_while_adding_poll'] = 'De volgende fouten traden op tijdens het toevoegen van deze poll';
$txt['error_while_editing_poll'] = 'De volgende fouten traden op tijdens het bewerken van deze poll';

$txt['loadavg_search_disabled'] = 'Vanwege hoge drukte op de server is de zoekfunctie tijdelijk uitgeschakeld.';
$txt['loadavg_generic_disabled'] = 'Sorry, vanwege hoge drukte op de server is deze functie op dit moment niet beschikbaar.';
$txt['loadavg_allunread_disabled'] = 'Vanwege veel verzoeken aan de server is het op dit moment te veeleisend om alle topics te zoeken die je niet gelezen hebt.';
$txt['loadavg_unreadreplies_disabled'] = 'De server staat momenteel onder hoge druk. Probeer het zometeen nog eens.';
$txt['loadavg_show_posts_disabled'] = 'Probeer het later nog eens. De posts van dit lid zijn op dit moment niet beschikbaar vanwege hoge laadtijden op de server.';
$txt['loadavg_unread_disabled'] = 'De server heeft het momenteel te druk om een lijst van ongelezen topics voor je op te stellen. Excuses voor het ongemak.';

$txt['cannot_edit_permissions_inherited'] = 'Je kunt de ge&euml;rfde permissies niet direct instellen; je dient de ouderlijke groep of de erfelijkheidinstellingen van deze groep te bewerken.';

$txt['mc_no_modreport_specified'] = 'Je dient te specificeren welk rapport je in wenst te zien.';
$txt['mc_no_modreport_found'] = 'Het gespecificeerde rapport bestaat niet of is niet toegankelijk voor jou.';

$txt['st_cannot_retrieve_file'] = 'Kan geen toegang krijgen tot het bestand: %1$s.';
$txt['admin_file_not_found'] = 'Kan het aangevraagde bestand niet laden: %1$s.';

$txt['themes_none_selectable'] = 'Ten minste &eacute;&eacute;n thema dient selecteerbaar te zijn.';
$txt['themes_default_selectable'] = 'Het standaardforumthema dient geselecteerd te zijn.';
$txt['ignoreboards_disallowed'] = 'De functie om boards te kunnen negeren is niet ingeschakeld.';

$txt['mboards_delete_error'] = 'Geen categorie geselecteerd!';
$txt['mboards_delete_board_error'] = 'Geen board geselecteerd!';

$txt['mboards_parent_own_child_error'] = 'Je kunt een ouder geen kind van zichzelf maken!';
$txt['mboards_board_own_child_error'] = 'Je kunt dit board geen kind van zichzelf maken!';

$txt['smileys_upload_error_notwritable'] = 'De volgende smileymappen zijn niet schrijfbaar: %1$s';
$txt['smileys_upload_error_types'] = 'Een smiley kan alleen een van de volgende extensies hebben: %1$s.';

$txt['change_email_success'] = 'Je e-mailadres is veranderd - er is daarom een activeringsmail verstuurd naar het nieuwe adres.';
$txt['resend_email_success'] = 'Een nieuwe activeringsmail is succesvol verstuurd.';

$txt['custom_option_need_name'] = 'De profieloptie moet een naam hebben!';
$txt['custom_option_not_unique'] = 'Deze veldnaam bestaat al!';

$txt['warning_no_reason'] = 'Je moet een reden ingeven om de waarschuwingsstatus te veranderen';
$txt['warning_notify_blank'] = 'Je hebt geselecteerd om de gebruiker op de hoogte te stellen, maar je hebt het onderwerp- en/of berichtveld niet ingevuld';

$txt['cannot_connect_doc_site'] = 'Kon geen verbinding maken met de Simple Machines Online Manual. Controleer of je serverconfiguratie internetverbindingen toestaat en probeer het later nog eens.';

$txt['movetopic_no_reason'] = 'Je moet een reden opgeven voor het verplaatsen van het topic, of de optie \'plaats een verwijstopic\' uitschakelen.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'De server retourneerde niet de juiste informatie.';
$txt['openid_return_no_mode'] = 'De identiteitsprovider antwoordde niet in OpenID modus.';
$txt['openid_not_resolved'] = 'De identiteitsprovider keurde je aanvraag niet goed.';
$txt['openid_no_assoc'] = 'Kan de aangevraagde associatie met de identiteitsprovider niet vinden.';
$txt['openid_sig_invalid'] = 'De handtekening van de identiteitsprovider is ongeldig.';
$txt['openid_load_data'] = 'Kan de data van je loginverzoek niet laden. Probeer het nog eens.';
$txt['openid_not_verified'] = 'Het opgegeven OpenID-adres is nog niet geverifieerd. Log in om te verifi&euml;ren.';

$txt['error_custom_field_too_long'] = 'Het veld &quot;%1$s&quot; mag niet meer dan %2$d karakters bevatten.';
$txt['error_custom_field_invalid_email'] = 'Het veld &quot;%1$s&quot; moet een geldig e-mailadres zijn.';
$txt['error_custom_field_not_number'] = 'Het veld &quot;%1$s&quot; moet numeriek zijn.';
$txt['error_custom_field_inproper_format'] = 'Het veld &quot;%1$s&quot; is in een onjuist formaat ingevuld.';
$txt['error_custom_field_empty'] = 'Het veld &quot;%1$s&quot; mag niet leeg gelaten worden.';

$txt['email_no_template'] = 'De e-mailtemplate &quot;%1$s&quot; kon niet gevonden worden.';

$txt['search_api_missing'] = 'De zoek-API kon niet gevonden worden! Neem contact op met de beheerder om er zeker van te zijn dat alles juist is ge&uuml;pload.';
$txt['search_api_not_compatible'] = 'De zoek-API die het forum op dit moment gebruikt is verouderd. SMF valt terug naar op standaard zoek-API. Controleer bestand %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Je kunt het eerste bericht van een topic niet los herstellen.';
$txt['parent_topic_missing'] = 'Het topic waar het bericht dat je probeert te herstellen bij hoorde is verwijderd.';
$txt['restored_disabled'] = 'Het herstellen van topics is uitgeschakeld.';
$txt['restore_not_found'] = 'De volgende berichten konden niet hersteld worden; het originele topic is misschien verwijderd:<ul style="margin-top: 0px;">%1$s</ul>Je zult deze handmatig moeten verplaatsen.';

$txt['error_invalid_dir'] = 'De opgevraagde map is ongeldig.';

$txt['error_sqlite_optimizing'] = 'Sqlite is bezig met het optimaliseren van de database. Het forum is niet toegankelijk totdat dit proces is voltooid. Probeer de pagina in een ogenblik te verversen.';

?>