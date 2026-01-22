<?php
// Version: 2.0; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'nl_NL.utf8';
$txt['lang_dictionary'] = 'nl';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = false;

$txt['days'] = array('zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag');
$txt['days_short'] = array('zo', 'ma', 'di', 'wo', 'do', 'vr', 'za');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december');
$txt['months_titles'] = array(1 => 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december');
$txt['months_short'] = array(1 => 'jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = 'is nieuw';
$txt['newmessages1'] = 'zijn nieuw';
$txt['newmessages3'] = 'Nieuw';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Beheer';
$txt['moderate'] = 'Moderatie';

$txt['save'] = 'Opslaan';

$txt['modify'] = 'Verander';
$txt['forum_index'] = '%1$s - Forumindex';
$txt['members'] = 'leden';
$txt['board_name'] = 'Forumnaam';
$txt['posts'] = 'Berichten';

$txt['member_postcount'] = 'Berichten';
$txt['no_subject'] = '(Geen onderwerp)';
$txt['view_profile'] = 'Bekijk profiel';
$txt['guest_title'] = 'Gast';
$txt['author'] = 'Auteur';
$txt['on'] = 'Gepost op';
$txt['remove'] = 'Verwijder';
$txt['start_new_topic'] = 'Begin een nieuw topic';

$txt['login'] = 'Inloggen';
// Use numeric entities in the below string.
$txt['username'] = 'Gebruikersnaam';
$txt['password'] = 'Wachtwoord';

$txt['username_no_exist'] = 'Deze gebruikersnaam bestaat niet.';
$txt['no_user_with_email'] = 'Er zijn geen gebruikersnamen verbonden aan dat e-mailadres.';

$txt['board_moderator'] = 'Board-moderator';
$txt['remove_topic'] = 'Verwijder topic';
$txt['topics'] = 'Topics';
$txt['modify_msg'] = 'Bewerk bericht';
$txt['name'] = 'Naam';
$txt['email'] = 'E-mail';
$txt['subject'] = 'Onderwerp';
$txt['message'] = 'Bericht';
$txt['redirects'] = 'keer aangeklikt';
$txt['quick_modify'] = 'Inline bewerken';

$txt['choose_pass'] = 'Kies wachtwoord';
$txt['verify_pass'] = 'Herhaal wachtwoord';
$txt['position'] = 'Positie';

$txt['profile_of'] = 'Bekijk profiel van';
$txt['total'] = 'Totaal';
$txt['posts_made'] = 'berichten';
$txt['website'] = 'Website';
$txt['register'] = 'Registreren';
$txt['warning_status'] = 'Waarschuwingsstatus';
$txt['user_warn_watch'] = 'Gebruiker staat op moderatietoezichtlijst';
$txt['user_warn_moderate'] = 'Gebruikersposts komen op goedkeuringslijst';
$txt['user_warn_mute'] = 'Gebruiker is verbannen van posten';
$txt['warn_watch'] = 'Toezicht';
$txt['warn_moderate'] = 'Gemodereerd';
$txt['warn_mute'] = 'Stilgelegd';

$txt['message_index'] = 'Berichtenindex';
$txt['news'] = 'Nieuws';
$txt['home'] = 'Index';

$txt['lock_unlock'] = 'Sluiten/Openen topic';
$txt['post'] = 'Verzenden';
$txt['error_occured'] = 'Er is een fout opgetreden!';
$txt['at'] = 'om';
$txt['logout'] = 'Uitloggen';
$txt['started_by'] = 'Gestart door';
$txt['replies'] = 'Reacties';
$txt['last_post'] = 'Laatste bericht';
$txt['admin_login'] = 'Inloggen (voor beheerders)';
// Use numeric entities in the below string.
$txt['topic'] = 'Topic';
$txt['help'] = 'Help';
$txt['notify'] = 'Notificatie';
$txt['unnotify'] = 'Notificatie opzeggen';
$txt['notify_request'] = 'Wil je een e-mail ontvangen als iemand antwoord geeft op dit topic?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Met vriendelijke groet,' . "\n\n" . 'Het ' . $context['forum_name'] . ' team.';
$txt['notify_replies'] = 'Notificatie bij reacties';
$txt['move_topic'] = 'Verplaats topic';
$txt['move_to'] = 'Verplaats naar';
$txt['pages'] = 'Pagina\'s';
$txt['users_active'] = 'Gebruikers actief in de afgelopen %1$d minuten';
$txt['personal_messages'] = 'Persoonlijke berichten';
$txt['reply_quote'] = 'Reageer met citaat';
$txt['reply'] = 'Reageer';
$txt['reply_noun'] = 'Reactie';
$txt['approve'] = 'Goedkeuren';
$txt['approve_all'] = 'alles goedkeuren';
$txt['awaiting_approval'] = 'Wachtend op goedkeuring';
$txt['attach_awaiting_approve'] = 'Bijlagen wachtend op goedkeuring';
$txt['post_awaiting_approval'] = 'NB: dit bericht wacht op goedkeuring van een moderator.';
$txt['there_are_unapproved_topics'] = 'In dit board wachten %1$s topics en %2$s posts op goedkeuring. Klik <a href="%3$s">hier</a> om ze te bekijken.';

$txt['msg_alert_none'] = 'Geen berichten...';
$txt['msg_alert_you_have'] = 'je hebt';
$txt['msg_alert_messages'] = 'persoonlijke berichten';
$txt['remove_message'] = 'Verwijder dit bericht';

$txt['online_users'] = 'Gebruikers Online';
$txt['personal_message'] = 'Persoonlijke berichten';
$txt['jump_to'] = 'Ga naar';
$txt['go'] = 'ga';
$txt['are_sure_remove_topic'] = 'Weet je zeker dat je dit topic wilt verwijderen?';
$txt['yes'] = 'Ja';
$txt['no'] = 'Nee';

$txt['search_end_results'] = 'Einde van de resultaten';
$txt['search_on'] = 'op';

$txt['search'] = 'Zoek';
$txt['all'] = 'Allemaal';

$txt['back'] = 'Terug';
$txt['password_reminder'] = 'Wachtwoord vergeten?';
$txt['topic_started'] = 'Topic gestart door';
$txt['title'] = 'Titel';
$txt['post_by'] = 'Bericht door';
$txt['memberlist_searchable'] = 'Doorzoekbare lijst van alle geregistreerde leden.';
$txt['welcome_member'] = 'Een warm welkom voor';
$txt['admin_center'] = 'Beheerscherm';
$txt['last_edit'] = 'Laatst bewerkt op';
$txt['notify_deactivate'] = 'Weet je zeker dat je geen notificatie-e-mails meer wilt ontvangen bij nieuwe reacties in dit topic?';

$txt['recent_posts'] = 'Recente berichten';

$txt['location'] = 'Locatie';
$txt['gender'] = 'Geslacht';
$txt['date_registered'] = 'Datum van registratie';

$txt['recent_view'] = 'Bekijk de meest recente berichten op het forum.';
$txt['recent_updated'] = 'is een van de meest recente topics';

$txt['male'] = 'Man';
$txt['female'] = 'Vrouw';

$txt['error_invalid_characters_username'] = 'Onjuiste letters/cijfers gebruikt in je gebruikersnaam.';

$txt['welcome_guest'] = 'Welkom, <strong>%1$s</strong>. Alsjeblieft <a href="' . $scripturl . '?action=login">inloggen</a> of <a href="' . $scripturl . '?action=register">registreren</a>.';
$txt['login_or_register'] = '<a href="' . $scripturl . '?action=login">Log in</a> of <a href="' . $scripturl . '?action=register">registreer jezelf</a>.';
$txt['welcome_guest_activate'] = '<br />Heb je de <a href="' . $scripturl . '?action=activate">activerings-mail</a> niet ontvangen?';
$txt['hello_member'] = 'Hoi,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Welkom,';
$txt['welmsg_hey'] = 'Hoi,';
$txt['welmsg_welcome'] = 'Welkom,';
$txt['welmsg_please'] = 'Alsjeblieft';
$txt['select_destination'] = 'Selecteer een bestemming';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Geplaatst door';

$txt['icon_smiley'] = 'Glimlach';
$txt['icon_angry'] = 'Boos';
$txt['icon_cheesy'] = 'Lachen';
$txt['icon_laugh'] = 'Lach';
$txt['icon_sad'] = 'Droevig';
$txt['icon_wink'] = 'Knipoog';
$txt['icon_grin'] = 'Grijns';
$txt['icon_shocked'] = 'Geschrokken';
$txt['icon_cool'] = 'Cool';
$txt['icon_huh'] = 'Verbaasd';
$txt['icon_rolleyes'] = 'Rollende ogen';
$txt['icon_tongue'] = 'Tong';
$txt['icon_embarrassed'] = 'Beschaamd';
$txt['icon_lips'] = 'Lippen verzegeld';
$txt['icon_undecided'] = 'Ik weet het niet';
$txt['icon_kiss'] = 'Kus';
$txt['icon_cry'] = 'Huilen';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderators';

$txt['mark_board_read'] = 'Markeer alle berichten als gelezen';
$txt['views'] = 'Gelezen';
$txt['new'] = 'Nieuw';

$txt['view_all_members'] = 'Bekijk alle leden';
$txt['view'] = 'Bekijk';

$txt['viewing_members'] = 'Bekijk de leden %1$s tot %2$s';
$txt['of_total_members'] = 'van het totale aantal %1$s';

$txt['forgot_your_password'] = 'Wachtwoord vergeten?';

$txt['date'] = 'Datum';
// Use numeric entities in the below string.
$txt['from'] = 'Van';
$txt['check_new_messages'] = 'Controleer op nieuwe berichten';
$txt['to'] = 'Naar';

$txt['board_topics'] = 'Topics';
$txt['members_title'] = 'Leden';
$txt['members_list'] = 'Ledenlijst';
$txt['new_posts'] = 'Nieuw bericht';
$txt['old_posts'] = 'Geen nieuw bericht';
$txt['redirect_board'] = 'Doorlinkboard';

$txt['sendtopic_send'] = 'Zenden';
$txt['report_sent'] = 'Je rapport is met succes verstuurd.';

$txt['time_offset'] = 'Tijdafwijking';
$txt['or'] = 'of';

$txt['no_matches'] = 'Sorry, niets relevants is gevonden';

$txt['notification'] = 'Notificatie';

$txt['your_ban'] = 'Sorry %1$s, je bent verbannen van gebruik van dit forum!';
$txt['your_ban_expires'] = 'Deze verbanning loopt af op %1$s.';
$txt['your_ban_expires_never'] = 'Deze verbanning is permanent.';
$txt['ban_continue_browse'] = 'Je kunt het forum blijven doorbladeren als gast.';

$txt['mark_as_read'] = 'Markeer alle berichten als gelezen';

$txt['hot_topics'] = 'Populair topic (meer dan %1$d reacties)';
$txt['very_hot_topics'] = 'Zeer populair topic (meer dan %1$d reacties)';
$txt['locked_topic'] = 'Gesloten topic';
$txt['normal_topic'] = 'Normaal topic';
$txt['participation_caption'] = 'Topic waaraan je hebt deelgenomen';

$txt['go_caps'] = 'GA';

$txt['print'] = 'Print';
$txt['profile'] = 'Profiel';
$txt['topic_summary'] = 'Samenvatting van topic';
$txt['not_applicable'] = 'Niet aanwezig';
$txt['message_lowercase'] = 'persoonlijk bericht';
$txt['name_in_use'] = 'Deze naam is al in gebruik bij een ander lid.';

$txt['total_members'] = 'Totaal aantal leden';
$txt['total_posts'] = 'Totaal aantal berichten';
$txt['total_topics'] = 'Totaal aantal topics';

$txt['mins_logged_in'] = 'Aantal minuten dat je blijft<br />ingelogd';

$txt['preview'] = 'Bekijken';
$txt['always_logged_in'] = 'Altijd ingelogd blijven';

$txt['logged'] = 'Gelogd';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'door';

$txt['hours'] = 'uren';
$txt['days_word'] = 'dagen';

$txt['newest_member'] = ', ons nieuwste lid.';

$txt['search_for'] = 'Zoek naar';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hoi.+Ben+je+daar?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'Onthoud dat dit forum in de onderhoudsmodus staat!';

$txt['read'] = 'gelezen';
$txt['times'] = 'keer';

$txt['forum_stats'] = 'Statistieken';
$txt['latest_member'] = 'Nieuwste lid';
$txt['total_cats'] = 'Totaal categorie&euml;n';
$txt['latest_post'] = 'Laatste bericht';

$txt['you_have'] = 'Je hebt';
$txt['click'] = 'klik';
$txt['here'] = 'hier';
$txt['to_view'] = 'om ze te bekijken.';

$txt['total_boards'] = 'Totaal aantal boards';

$txt['print_page'] = 'Print pagina';

$txt['valid_email'] = 'Dit moet een geldig e-mailadres zijn.';

$txt['geek'] = 'een heleboel';
$txt['info_center_title'] = '%1$s - Infocentrum';

$txt['send_topic'] = 'E-mail dit topic';

$txt['sendtopic_title'] = 'Stuur dit onderwerp &quot;%1%s&quot; naar een vriend.';
$txt['sendtopic_sender_name'] = 'Je naam';
$txt['sendtopic_sender_email'] = 'Je e-mailadres';
$txt['sendtopic_receiver_name'] = 'Naam van je vriend';
$txt['sendtopic_receiver_email'] = 'E-mailadres van je vriend';
$txt['sendtopic_comment'] = 'Voeg een opmerking toe';

$txt['allow_user_email'] = 'Sta gebruikers toe mij een e-mail te sturen';

$txt['check_all'] = 'Vink alles aan';

// Use numeric entities in the below string.
$txt['database_error'] = 'Databasefout';
$txt['try_again'] = 'Probeer het opnieuw. Gaat het weer fout, meld het dan aan de beheerder.';
$txt['file'] = 'Bestand';
$txt['line'] = 'Regel';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF heeft een fout in je database gedetecteerd en automatisch geprobeerd deze te repareren. Als de problemen blijven bestaan of als je voortdurend deze e-mail krijgt, neem dan contact op met je host.';
$txt['database_error_versions'] = '<strong>Opmerking:</strong> het ziet er naar uit dat je database wellicht een upgrade nodig heeft. De versie van je forumbestanden is momenteel %1$s, terwijl je database op dit moment op versie %2$s staat. Het probleem kan mogelijk verholpen worden door de nieuwste versie van upgrade.php uit te voeren.';
$txt['template_parse_error'] = 'Template-verwerkingsfout!';
$txt['template_parse_error_message'] = 'Het lijkt erop dat er iets verkeerd gegaan is met het templatesysteem van het forum. Dit probleeem zou slechts tijdelijk moeten zijn, dus probeer het later opnieuw. Als je dit bericht blijft krijgen, neem dan contact op met de beheerer.<br /><br />Je kunt ook proberen om <a href="javascript:location.reload();">deze pagina te verversen</a>.';
$txt['template_parse_error_details'] = 'Er is een probleem ontstaan bij het laden van het template- of taalbestand <tt><strong>%1$s</strong></tt>. Controleer de syntaxis hiervan en probeer het opnieuw. Vergeet niet dat apostrofs (<tt>\'</tt>) vaak nog eens afgebroken moeten worden (<tt>\\\'</tt>). Om meer specifieke foutinformatie van PHP te verkrijgen, kun je <a href="' . $boardurl . '%1$s">het bestand direct benaderen</a>.<br /><br />Je wilt wellicht <a href="javascript:location.reload();">deze pagina vernieuwen</a> of <a href="' . $scripturl . '?theme=1">het standaardthema gebruiken</a>.';

$txt['today'] = '<strong>Vandaag</strong> om ';
$txt['yesterday'] = '<strong>Gisteren</strong> om ';
$txt['new_poll'] = 'Nieuwe poll';
$txt['poll_question'] = 'Vraag';
$txt['poll_vote'] = 'Stem';
$txt['poll_total_voters'] = 'Totaal aantal stemmen';
$txt['shortcuts'] = 'sneltoetsen: gebruik alt+s om te verzenden/posten, of alt+p om te bekijken';
$txt['shortcuts_firefox'] = 'sneltoetsen: gebruik shift+alt+s om te verzenden/posten of shift+alt+p om een voorbeeld te bekijken';
$txt['poll_results'] = 'Bekijk de resultaten';
$txt['poll_lock'] = 'Vergrendel de poll';
$txt['poll_unlock'] = 'Ontgrendel de poll';
$txt['poll_edit'] = 'Bewerk de poll';
$txt['poll'] = 'Poll';
$txt['one_day'] = '1 dag';
$txt['one_week'] = '1 week';
$txt['one_month'] = '1 maand';
$txt['forever'] = 'blijvend';
$txt['quick_login_dec'] = 'Login met gebruikersnaam, wachtwoord en sessielengte';
$txt['one_hour'] = '1 uur';
$txt['moved'] = 'VERPLAATST';
$txt['moved_why'] = 'Geef even een korte beschrijving waarom<br />dit topic wordt verplaatst.';
$txt['board'] = 'Board';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Sticky Topic';

$txt['delete'] = 'Verwijder';

$txt['your_pms'] = 'Je persoonlijke berichten';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Meer statistieken]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Code';
$txt['code_select'] = '[Selecteer]';
$txt['quote_from'] = 'Citaat van';
$txt['quote'] = 'Citaat';

$txt['merge_to_topic_id'] = 'ID van doeltopic';
$txt['split'] = 'Splits topic';
$txt['merge'] = 'Voeg topic samen';
$txt['subject_new_topic'] = 'Titel van het nieuwe topic';
$txt['split_this_post'] = 'Splits alleen dit bericht';
$txt['split_after_and_this_post'] = 'Splits topic vanaf dit bericht.';
$txt['select_split_posts'] = 'Selecteer berichten om te splitsen.';
$txt['new_topic'] = 'Nieuw topic';
$txt['split_successful'] = 'Onderwerp succesvol gesplitst in twee topics.';
$txt['origin_topic'] = 'Oorspronkelijke topic';
$txt['please_select_split'] = 'Selecteer welke berichten je wilt afsplitsen.';
$txt['merge_successful'] = 'Topics succesvol samengevoegd.';
$txt['new_merged_topic'] = 'Nieuw samengevoegd topic';
$txt['topic_to_merge'] = 'Topic dat moet worden samengevoegd';
$txt['target_board'] = 'Doelboard';
$txt['target_topic'] = 'Doeltopic ';
$txt['merge_confirm'] = 'Weet je zeker dat je';
$txt['with'] = 'wilt samenvoegen met';
$txt['merge_desc'] = 'Deze optie zal de twee topics samenvoegen. De berichten zullen worden gesorteerd op datum, dus het eerst geplaatste bericht zal bovenaan komen te staan.';

$txt['set_sticky'] = 'Maak topic sticky';
$txt['set_nonsticky'] = 'Maak topic niet-sticky';
$txt['set_lock'] = 'Sluit topic';
$txt['set_unlock'] = 'Slot verwijderen';

$txt['search_advanced'] = 'Geavanceerd zoeken';

$txt['security_risk'] = 'GROOT BEVEILIGINGSRISICO:';
$txt['not_removed'] = 'Je hebt het volgende bestand niet verwijderd: ';
$txt['not_removed_extra'] = '%1$s is een niet door SMF gegenereerde backup van %2$s. Dit bestand kan worden gebruikt om ongeautoriseerd toegang te krijgen tot je forum - verwijder het zo snel mogelijk.';

$txt['cache_writable_head'] = 'Prestatiewaarschuwing';
$txt['cache_writable'] = 'De cachemap is niet beschrijfbaar! Dit zal je forumprestaties ongunstig be&iuml;nvloeden.';

$txt['page_created'] = 'Pagina opgebouwd in ';
$txt['seconds_with'] = ' seconden met ';
$txt['queries'] = ' queries.';

$txt['report_to_mod_func'] = 'Gebruik deze functie om de moderators en administrators op de hoogte te stellen van berichten die verkeerd geplaatst zijn of in overtreding zijn met de regels van het forum.<br /><em>Houd er rekening mee dat je e-mailadres zal worden getoond aan de moderators bij het gebruik van deze functie.</em>';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Persoonlijk bericht (Online)';
$txt['pm_offline'] = 'Persoonlijk bericht (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Omhoog';
$txt['go_down'] = 'Omlaag';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2011</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Verjaardagen:';
$txt['events'] = 'Gebeurtenissen:';
$txt['birthdays_upcoming'] = 'Aanstaande verjaardagen:';
$txt['events_upcoming'] = 'Aanstaande evenementen:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Maand:';
$txt['calendar_year'] = 'Jaar:';
$txt['calendar_day'] = 'Dag:';
$txt['calendar_event_title'] = 'Titel van gebeurtenis';
$txt['calendar_event_options'] = 'Opties voor gebeurtenis';
$txt['calendar_post_in'] = 'Plaatsen in:';
$txt['calendar_edit'] = 'Bewerk deze gebeurtenis';
$txt['event_delete_confirm'] = 'Deze gebeurtenis verwijderen?';
$txt['event_delete'] = 'Verwijder deze gebeurtenis';
$txt['calendar_post_event'] = 'Nieuwe gebeurtenis';
$txt['calendar'] = 'Kalender';
$txt['calendar_link'] = 'Link aan de kalender';
$txt['calendar_upcoming'] = 'Aanstaande kalender';
$txt['calendar_today'] = 'Kalender van vandaag';
$txt['calendar_week'] = 'Week';
$txt['calendar_week_title'] = 'Week %1$d van %2$d';
$txt['calendar_numb_days'] = 'Aantal dagen:';
$txt['calendar_how_edit'] = 'Hoe bewerk je deze gebeurtenissen?';
$txt['calendar_link_event'] = 'Koppel gebeurtenis aan bericht:';
$txt['calendar_confirm_delete'] = 'Weet je zeker dat je deze gebeurtenis wilt verwijderen?';
$txt['calendar_linked_events'] = 'Gekoppelde gebeurtenissen';
$txt['calendar_click_all'] = 'klik hier om alle %1$s te zien';

$txt['moveTopic1'] = 'Plaats een verwijstopic';
$txt['moveTopic2'] = 'Wijzig het onderwerp van dit bericht';
$txt['moveTopic3'] = 'Nieuwe onderwerp';
$txt['moveTopic4'] = 'Verander het onderwerp van elk bericht';
$txt['move_topic_unapproved_js'] = 'Waarschuwing! Dit topic is nog niet goedgekeurd.\\n\\nHet wordt afgeraden een verplaatst-topic te maken, tenzij je van plan bent het topic direct na het verplaatsen goed te keuren.';

$txt['theme_template_error'] = 'Kan template \'%1$s\' niet laden.';
$txt['theme_language_error'] = 'Kan taalbestand \'%1$s\' niet laden.';

$txt['parent_boards'] = 'Sub-boards';

$txt['smtp_no_connect'] = 'Kan geen verbinding krijgen met de SMTP host';
$txt['smtp_port_ssl'] = 'SMTP-poortinstelling onjuist; het zou 465 moeten zijn voor SSL-servers.';
$txt['smtp_bad_response'] = 'Kan geen antwoordcodes van de mail server krijgen';
$txt['smtp_error'] = 'Problemen opgetreden gedurende het verzenden van mail. Foutmelding: ';
$txt['mail_send_unable'] = 'Kon mail niet verzenden naar e-mailadres \'%1$s\'';

$txt['mlist_search'] = 'Zoek naar leden';
$txt['mlist_search_again'] = 'Herhaal zoekopdracht';
$txt['mlist_search_email'] = 'Zoek op e-mailadres';
$txt['mlist_search_messenger'] = 'Zoek op messengeradres';
$txt['mlist_search_group'] = 'Zoek op ledengroep';
$txt['mlist_search_name'] = 'Zoek op naam';
$txt['mlist_search_website'] = 'Zoek op website';
$txt['mlist_search_results'] = 'Zoekresultaten voor';
$txt['mlist_search_by'] = 'Zoek op %1$s';
$txt['mlist_menu_view'] = 'Bekijk de ledenlijst';

$txt['attach_downloaded'] = 'gedownload';
$txt['attach_viewed'] = 'bekeken';
$txt['attach_times'] = 'keer';

$txt['settings'] = 'Instellingen';
$txt['never'] = 'Nooit';
$txt['more'] = 'meer';

$txt['hostname'] = 'Hostnaam';
$txt['you_are_post_banned'] = 'Sorry %1$s, je bent verbannen van het plaatsen van berichten en het versturen van persoonlijke berichten op dit forum.';
$txt['ban_reason'] = 'Reden';

$txt['tables_optimized'] = 'Databasetabellen geoptimaliseerd';

$txt['add_poll'] = 'Voeg poll toe';
$txt['poll_options6'] = 'Je kunt tot %1$s opties selecteren.';
$txt['poll_remove'] = 'Verwijder poll';
$txt['poll_remove_warn'] = 'Weet je zeker dat je deze poll van dit topic wilt verwijderen?';
$txt['poll_results_expire'] = 'Resultaten zullen worden getoond als de poll is gesloten';
$txt['poll_expires_on'] = 'Poll sluit';
$txt['poll_expired_on'] = 'Poll gesloten';
$txt['poll_change_vote'] = 'Verwijder stem';
$txt['poll_return_vote'] = 'Stemopties';
$txt['poll_cannot_see'] = 'Je kunt op dit moment de uitslag van deze poll niet bekijken.';

$txt['quick_mod_approve'] = 'Keur selectie goed';
$txt['quick_mod_remove'] = 'Verwijder selectie';
$txt['quick_mod_lock'] = 'Sluit/heropen selectie';
$txt['quick_mod_sticky'] = 'Maak selectie (niet-)sticky';
$txt['quick_mod_move'] = 'Verplaats selectie naar';
$txt['quick_mod_merge'] = 'Voeg selectie samen';
$txt['quick_mod_markread'] = 'Markeer selectie als gelezen';
$txt['quick_mod_go'] = 'Voer uit!';
$txt['quickmod_confirm'] = 'Weet je zeker dat je dit wilt doen?';

$txt['spell_check'] = 'Spellingscontrole';

$txt['quick_reply'] = 'Snel beantwoorden';
$txt['quick_reply_desc'] = 'Met de functie <em>Snel beantwoorden</em> kun snel een bericht plaatsen terwijl je een topic bekijkt, zonder een nieuwe pagina te hoeven laden. Je kunt gewoon bulletin board code en smileys gebruiken, zoals je zou doen in een normaal bericht.';
$txt['quick_reply_warning'] = '<strong>Waarschuwing</strong>: dit topic is op dit moment gesloten! Alleen moderators en administrators kunnen reageren.';
$txt['quick_reply_verification'] = 'Na het verzenden van je post word je doorgewezen naar de reguliere postpagina om je bericht te verifi&euml;ren %1$s.';
$txt['quick_reply_verification_guests'] = '(vereist voor alle gasten)';
$txt['quick_reply_verification_posts'] = '(vereist voor alle leden met minder dan %1$d berichten)';
$txt['wait_for_approval'] = 'Merk op: het bericht zal niet verschijnen tot het is goedgekeurd door een moderator.';

$txt['notification_enable_board'] = 'Weet je zeker dat je notificatie van nieuwe topics voor dit board wilt activeren?';
$txt['notification_disable_board'] = 'Weet je zeker dat je notificatie van nieuwe topics voor dit board wilt deactiveren?';
$txt['notification_enable_topic'] = 'Weet je zeker dat je notificatie van nieuwe berichten voor dit topic wilt activeren?';
$txt['notification_disable_topic'] = 'Weet je zeker dat je notificatie van nieuwe berichten voor dit topic wilt deactiveren?';

$txt['report_to_mod'] = 'Meld dit bericht aan de moderator';
$txt['issue_warning_post'] = 'Geef een waarschuwing vanwege dit bericht';

$txt['unread_topics_visit'] = 'Recente ongelezen topics';
$txt['unread_topics_visit_none'] = 'Geen ongelezen topics gevonden sinds je laatste bezoek. <a href="' . $scripturl . '?action=unread;all">Klik hier om alle ongelezen berichten te tonen</a>.';
$txt['unread_topics_all'] = 'Alle ongelezen berichten';
$txt['unread_replies'] = 'Ongelezen berichten';

$txt['who_title'] = 'Wie is online?';
$txt['who_and'] = ' en ';
$txt['who_viewing_topic'] = ' bekijken dit topic.';
$txt['who_viewing_board'] = ' bekijken dit board.';
$txt['who_member'] = 'lid';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'Valid CSS!';

// Current footer strings
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'gast';
$txt['guests'] = 'gasten';
$txt['user'] = 'lid';
$txt['users'] = 'leden';
$txt['hidden'] = 'verborgen';
$txt['buddy'] = 'vriend';
$txt['buddies'] = 'vrienden';
$txt['most_online_ever'] = 'Meeste online ooit';
$txt['most_online_today'] = 'Meeste online vandaag';

$txt['merge_select_target_board'] = 'Selecteer het doel-board waar het samen te voegen topic terecht komt';
$txt['merge_select_poll'] = 'Selecteer welke poll het samengevoegde topic moet krijgen';
$txt['merge_topic_list'] = 'Selecteer de samen te voegen topics';
$txt['merge_select_subject'] = 'Selecteer het onderwerp van het samengevoegde topic';
$txt['merge_custom_subject'] = 'Aangepast onderwerp';
$txt['merge_enforce_subject'] = 'Verander het onderwerp van alle berichten';
$txt['merge_include_notifications'] = 'neem notificatie mee?';
$txt['merge_check'] = 'Samenvoegen?';
$txt['merge_no_poll'] = 'Geen poll';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Huidige icoon';
$txt['message_icon'] = 'Berichticoon';

$txt['smileys_current'] = 'Huidige smileyset';
$txt['smileys_none'] = 'Geen smileys';
$txt['smileys_forum_board_default'] = 'Forum- of boardstandaard';

$txt['search_results'] = 'Zoekresultaten';
$txt['search_no_results'] = 'Geen resultaten gevonden.';

$txt['totalTimeLogged1'] = 'Totale tijd ingelogd: ';
$txt['totalTimeLogged2'] = ' dagen, ';
$txt['totalTimeLogged3'] = ' uren en ';
$txt['totalTimeLogged4'] = ' minuten.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'u ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Er wacht';
$txt['approve_thereare'] = 'Er wachten';
$txt['approve_member'] = '&eacute;&eacute;n lid';
$txt['approve_members'] = 'leden';
$txt['approve_members_waiting'] = 'op goedkeuring.';

$txt['notifyboard_turnon'] = 'Wil je een notificatie per e-mail ontvangen wanneer iemand een nieuw topic wordt gestart in dit board?';
$txt['notifyboard_turnoff'] = 'Weet je zeker dat je geen notificatie-e-mails meer wilt ontvangen bij het starten van nieuwe topics in dit board?';

$txt['activate_code'] = 'Je activeringscode is';

$txt['find_members'] = 'Zoek leden';
$txt['find_username'] = 'Naam, gebruikersnaam, of e-mailadres';
$txt['find_buddies'] = 'Toon alleen vrienden?';
$txt['find_wildcards'] = 'Toegestane jokertekens: *, ?';
$txt['find_no_results'] = 'Geen resultaten gevonden';
$txt['find_results'] = 'Resultaten';
$txt['find_close'] = 'Sluiten';

$txt['unread_since_visit'] = 'Toon ongelezen berichten sinds je laatste bezoek.';
$txt['show_unread_replies'] = 'Toon nieuwe reacties op jouw berichten.';

$txt['change_color'] = 'Verander kleur';

$txt['quickmod_delete_selected'] = 'Verwijder selectie';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Je hebt één of meer nieuwe persoonlijke berichten.\\nWil je een nieuw venster openen om ze te lezen?';

$txt['previous_next_back'] = '&laquo; vorige';
$txt['previous_next_forward'] = 'volgende &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'Dit topic is verplaatst naar ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Klap de kop in of uit.';

$txt['mark_unread'] = 'Markeer als ongelezen';

$txt['ssi_not_direct'] = 'Het is niet mogelijk om SSI.php direct per URL te benaderen; gebruik het pad (%1$s) of voeg ?ssi_function=something toe.';
$txt['ssi_session_broken'] = 'SSI.php kon geen sessie laden! Dit zou tot problemen kunnen leiden bij het uitloggen en andere functies - zorg ervoor dat SSI.php ingevoegd staat voor ook maar *iets* anders in je scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Bekijk bericht';
$txt['preview_fetch'] = 'Haalt concept op...';
$txt['preview_new'] = 'Nieuw bericht';
$txt['error_while_submitting'] = 'Er is een fout opgetreden bij het versturen van dit bericht.';
$txt['error_old_topic'] = 'Waarschuwing: er is al ten minste %1$d dagen geen nieuw bericht geplaatst in dit topic.<br />Tenzij je zeker weet dat je hier wilt reageren, overweeg je beter om een nieuw topic aan te maken.';

$txt['split_selected_posts'] = 'Geselecteerde berichten';
$txt['split_selected_posts_desc'] = 'De berichten hieronder worden na het splitsen een nieuw topic.';
$txt['split_reset_selection'] = 'deselecteer alles';

$txt['modify_cancel'] = 'Annuleren';
$txt['mark_read_short'] = 'Markeer gelezen';

$txt['pm_short'] = 'Mijn berichten';
$txt['pm_menu_read'] = 'Lees je berichten';
$txt['pm_menu_send'] = 'Stuur een bericht';

$txt['hello_member_ndt'] = 'Hallo';

$txt['unapproved_posts'] = 'Niet-goedgekeurde berichten (topics: %1$d, berichten: %2$d)';

$txt['ajax_in_progress'] = 'Laden...';

$txt['mod_reports_waiting'] = 'Er staan momenteel %1$d moderatorrapporten open.';

$txt['view_unread_category'] = 'Toon ongelezen';
$txt['verification'] = 'Verificatie';
$txt['visual_verification_description'] = 'Typ de afgebeelde letters over';
$txt['visual_verification_sound'] = 'Luister naar de letters';
$txt['visual_verification_request_new'] = 'Vraag een andere afbeelding aan';

// Sub menu labels
$txt['summary'] = 'Overzicht';
$txt['account'] = 'Accountinstellingen';
$txt['forumprofile'] = 'Forumprofiel';

$txt['modSettings_title'] = 'Foruminstellingen';
$txt['package'] = 'Pakketbeheerder';
$txt['errlog'] = 'Foutenlog';
$txt['edit_permissions'] = 'Permissies';
$txt['mc_unapproved_attachments'] = 'Niet-goedgekeurde bijlagen';
$txt['mc_unapproved_poststopics'] = 'Niet-goedgekeurde posts en topics';
$txt['mc_reported_posts'] = 'Gerapporteerde posts';
$txt['modlog_view'] = 'Moderatielog';
$txt['calendar_menu'] = 'Bekijk kalender';

//!!! Send email strings - should move?
$txt['send_email'] = 'Verstuur e-mail';
$txt['send_email_disclosed'] = 'NB: dit zal zichtbaar zijn voor de ontvanger.';
$txt['send_email_subject'] = 'Onderwerp';

$txt['ignoring_user'] = 'Je negeert deze gebruiker.';
$txt['show_ignore_user_post'] = 'Toon mij deze post.';

$txt['spider'] = 'spider';
$txt['spiders'] = 'spiders';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Bestandsgrootte';
$txt['subscribe_webslice'] = 'Abonneer op Webslice';

// Restore topic
$txt['restore_topic'] = 'Herstel topic';
$txt['restore_message'] = 'Herstel bericht';
$txt['quick_mod_restore'] = 'Herstel selectie';

// Editor prompt.
$txt['prompt_text_email'] = 'Welk e-mailadres wil je invoegen?';
$txt['prompt_text_ftp'] = 'Welk FTP-adres wil je invoegen?';
$txt['prompt_text_url'] = 'Naar welke URL wil je linken?';
$txt['prompt_text_img'] = 'Wat is de URL van de afbeelding die je wilt invoegen?';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Verwijder item';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Templates: ';
$txt['debug_subtemplates'] = 'Subtemplates: ';
$txt['debug_language_files'] = 'Taalbestanden: ';
$txt['debug_stylesheets'] = 'Stylesheets: ';
$txt['debug_files_included'] = 'Geopende bestanden: ';
$txt['debug_kb'] = 'kB.';
$txt['debug_show'] = 'toon';
$txt['debug_cache_hits'] = 'Cachehits: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss voor %2$s bytes';
$txt['debug_queries_used'] = 'Gebruikte query\'s: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Gebruikte query\'s: %1$d, %2$d waarschuwingen.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> regel <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'die %1$s duurde.';
$txt['debug_query_which_took_at'] = 'die %1$s seconden duurde na %2$s in het verzoek.';
$txt['debug_show_queries'] = '[Toon query\'s]';
$txt['debug_hide_queries'] = '[Verberg query\'s]';

?>