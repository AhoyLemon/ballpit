<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Persoonlijke berichten index';
$txt['send_message'] = 'Verzend bericht';
$txt['pm_add'] = 'Toevoegen';
$txt['make_bcc'] = 'BCC toevoegen';
$txt['pm_to'] = 'Aan';
$txt['pm_bcc'] = 'Bcc';
$txt['inbox'] = 'Postvak in';
$txt['conversation'] = 'Conversatie';
$txt['messages'] = 'Berichten';
$txt['sent_items'] = 'Verzonden items';
$txt['new_message'] = 'Nieuw bericht';
$txt['delete_message'] = 'Verwijder berichten';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Verwijder alle berichten in je PMBOX';
$txt['delete_all_confirm'] = 'Weet je zeker dat je alle berichten wil verwijderen?';
$txt['recipient'] = 'Ontvanger';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Nieuw persoonlijk bericht: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'Je hebt zojuist een persoonlijk bericht ontvangen van SENDER op ' . $context['forum_name'] . '.' . "\n\n" . 'BELANGRIJK: Onthoud dat dit alleen maar een notificatie is. Reageer niet op deze e-mail!' . "\n\n" . 'Het bericht wat je werd gestuurd was:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(meerdere geadresseerden als \'naam1, naam2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Beantwoord dit persoonlijk bericht hier:';

$txt['delete_selected_confirm'] = 'Weet je zeker dat je alle geselecteerde berichten wilt verwijderen?';

$txt['sent_to'] = 'Verzonden aan';
$txt['reply_to_all'] = 'Allen beantwoorden';
$txt['delete_conversation'] = 'Verwijder conversatie';

$txt['pm_capacity'] = 'Capaciteit';
$txt['pm_currently_using'] = '%1$s berichten, %2$s%% vol.';
$txt['pm_sent'] = 'Het bericht is succesvol verstuurd.';

$txt['pm_error_user_not_found'] = 'Kan gebruiker \'%1$s\' niet vinden.';
$txt['pm_error_ignored_by_user'] = 'Gebruiker \'%1$s\' heeft je PM geblokkeerd.';
$txt['pm_error_data_limit_reached'] = 'De PM kon niet verstuurd worden aan \'%1$s\' omdat zijn of haar inbox vol zit.';
$txt['pm_error_user_cannot_read'] = 'Het lid \'%1$s\' kan geen persoonlijke berichten ontvangen.';
$txt['pm_successfully_sent'] = 'PM succesvol verstuurd aan \'%1$s\'.';
$txt['pm_send_report'] = 'Verzendrapport';
$txt['pm_save_outbox'] = 'Bewaar een kopie in mijn postvak uit';
$txt['pm_undisclosed_recipients'] = 'Niet-getoonde ontvangers';
$txt['pm_too_many_recipients'] = 'Het is niet toegestaan persoonlijke berichten te versturen naar %1$d ontvangers tegelijk.';

$txt['pm_read'] = 'Gelezen';
$txt['pm_replied'] = 'Geantwoord aan';

// Message Pruning.
$txt['pm_prune'] = 'Berichten opruimen';
$txt['pm_prune_desc1'] = 'Verwijder alle persoonlijke berichten ouder dan';
$txt['pm_prune_desc2'] = 'dagen.';
$txt['pm_prune_warning'] = 'Weet je zeker dat je je persoonlijke berichten wilt opschonen?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Extra acties';
$txt['pm_actions_delete_selected'] = 'Verwijder selectie';
$txt['pm_actions_filter_by_label'] = 'Filter op basis van labels';
$txt['pm_actions_go'] = 'Voer uit';

// Manage Labels Screen.
$txt['pm_apply'] = 'Pas toe';
$txt['pm_manage_labels'] = 'Beheer labels';
$txt['pm_labels_delete'] = 'Weet je zeker dat je de geselecteerde labels wilt verwijderen?';
$txt['pm_labels_desc'] = 'Hier kun je labels toevoegen, bewerken of verwijderen die gebruikt worden in je persoonlijke berichten centrum.';
$txt['pm_label_add_new'] = 'Voeg nieuw label toe';
$txt['pm_label_name'] = 'Labelnaam';
$txt['pm_labels_no_exist'] = 'Je hebt op dit moment geen labels ingesteld!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Label';
$txt['pm_msg_label_title'] = 'Labels';
$txt['pm_msg_label_apply'] = 'Voeg label toe';
$txt['pm_msg_label_remove'] = 'Verwijder label';
$txt['pm_msg_label_inbox'] = 'Postvak in';
$txt['pm_sel_label_title'] = 'Geselecteerde label';

// Sidebar Headings.
$txt['pm_labels'] = 'Labels';
$txt['pm_messages'] = 'Berichten';
$txt['pm_actions'] = 'Acties';
$txt['pm_preferences'] = 'Voorkeuren';

$txt['pm_is_replied_to'] = 'Je hebt dit bericht doorgestuurd of beantwoord.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Rapporteer aan de beheerder';
$txt['pm_report_title'] = 'Rapporteer dit bericht';
$txt['pm_report_desc'] = 'Vanuit deze pagina kun je het persoonlijke bericht dat je hebt gekregen rapporteren aan het beheerteam. Ben er zeker van een beschrijving bij te voegen waarin je uitlegt waarom je het bericht rapporteerd, omdat dit meeverzonden wordt bij het originele bericht.';
$txt['pm_report_admins'] = 'Verstuur naar de beheerder';
$txt['pm_report_all_admins'] = 'Verstuur naar alle beheerders';
$txt['pm_report_reason'] = 'Reden waarom je dit bericht rapporteert';
$txt['pm_report_message'] = 'Rapporteer bericht';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[MELDING]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} heeft onderstaand bericht, verzonden door {SENDER} gerapporteerd, met de volgende reden:';
$txt['pm_report_pm_other_recipients'] = 'Andere ontvangers van dit bericht waren:';
$txt['pm_report_pm_hidden'] = '%1$d verborgen ontvanger(s)';
$txt['pm_report_pm_unedited_below'] = 'Hieronder staat de originele inhoud van het bericht dat gerapporteerd werd:';
$txt['pm_report_pm_sent'] = 'Verzonden op:';

$txt['pm_report_done'] = 'Bedankt voor het rapporteren van dit bericht. Je zou spoedig een reactie van het beheerteam moeten krijgen.';
$txt['pm_report_return'] = 'Terug naar je postvak in';

$txt['pm_search_title'] = 'Zoeken naar Persoonlijke Berichten';
$txt['pm_search_bar_title'] = 'Zoek berichten';
$txt['pm_search_text'] = 'Zoek naar';
$txt['pm_search_go'] = 'Zoeken';
$txt['pm_search_advanced'] = 'Geavanceerd zoeken';
$txt['pm_search_user'] = 'Door gebruiker';
$txt['pm_search_match_all'] = 'Zoek naar alle woorden';
$txt['pm_search_match_any'] = 'Zoek naar enkele woorden';
$txt['pm_search_options'] = 'Opties';
$txt['pm_search_post_age'] = 'Berichtouderdom';
$txt['pm_search_show_complete'] = 'Toon het volledige bericht in de resultaten.';
$txt['pm_search_subject_only'] = 'Zoek alleen naar onderwerp en auteur.';
$txt['pm_search_between'] = 'tussen';
$txt['pm_search_between_and'] = 'en';
$txt['pm_search_between_days'] = 'dagen';
$txt['pm_search_order'] = 'Resultaatvolgorde';
$txt['pm_search_choose_label'] = 'Kies de labels waarbinnen gezocht moet worden, of selecteer alles';

$txt['pm_search_results'] = 'Zoekresultaten';
$txt['pm_search_none_found'] = 'Geen berichten gevonden';

$txt['pm_search_orderby_relevant_first'] = 'Meest relevante eerst';
$txt['pm_search_orderby_recent_first'] = 'Meest recente eerst';
$txt['pm_search_orderby_old_first'] = 'Oudste eerst';

$txt['pm_visual_verification_label'] = 'Verificatie';
$txt['pm_visual_verification_desc'] = 'Typ de code van het plaatje over om deze PB te kunnen versturen.';

$txt['pm_settings'] = 'Verander instellingen';
$txt['pm_change_view'] = 'Weergave wijzigen';

$txt['pm_manage_rules'] = 'Regels bewerken';
$txt['pm_manage_rules_desc'] = 'Berichtregels stellen je in staat om automatisch inkomende berichten te sorteren, afhankelijk van een aantal criteria die je zelf definieert. Hieronder staat een overzicht van de regels die je op dit moment hebt ingesteld. Om een regel te bewerken, klik je erop.';
$txt['pm_rules_none'] = 'Je hebt nog geen berichtregels ingesteld.';
$txt['pm_rule_title'] = 'Regel';
$txt['pm_add_rule'] = 'Nieuwe regel toevoegen';
$txt['pm_apply_rules'] = 'Regels nu toepassen';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Weet je zeker dat je deze regels op alle persoonlijke berichten wilt toepassen?';
$txt['pm_edit_rule'] = 'Regel bewerken';
$txt['pm_rule_save'] = 'Regel opslaan';
$txt['pm_delete_selected_rule'] = 'Verwijder geselecteerde regels';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Weet je zeker dat je de geselecteerde regels wilt verwijderen?';
$txt['pm_rule_name'] = 'Naam';
$txt['pm_rule_name_desc'] = 'Naam van de regel';
$txt['pm_rule_name_default'] = '[NAAM]';
$txt['pm_rule_description'] = 'Omschrijving';
$txt['pm_rule_not_defined'] = 'Voeg criteria toe om de omschrijving van de regel op te bouwen.';
$txt['pm_rule_js_disabled'] = '<span style="color: red;"><b>Opmerking:</b> het lijkt erop dat je JavaScript uit hebt staan. We raden je ten zeerste aan om JavaScript in te schakelen voor je van deze feature gebruik maakt.</span>';
$txt['pm_rule_criteria'] = 'Criteria';
$txt['pm_rule_criteria_add'] = 'Criteria toevoegen';
$txt['pm_rule_criteria_pick'] = 'Kies criteria';
$txt['pm_rule_mid'] = 'Naam afzender';
$txt['pm_rule_gid'] = 'Groep van afzender';
$txt['pm_rule_sub'] = 'Onderwerp van bericht bevat';
$txt['pm_rule_msg'] = 'Bericht bevat';
$txt['pm_rule_bud'] = 'Afzender is een vriend';
$txt['pm_rule_sel_group'] = 'Selecteer groep';
$txt['pm_rule_logic'] = 'Wanneer criteria gecontroleerd wordt';
$txt['pm_rule_logic_and'] = 'moet aan alle criteria voldaan worden';
$txt['pm_rule_logic_or'] = 'moet aan enige criteria voldaan worden';
$txt['pm_rule_actions'] = 'Acties';
$txt['pm_rule_sel_action'] = 'Selecteer een actie';
$txt['pm_rule_add_action'] = 'Actie toevoegen';
$txt['pm_rule_label'] = 'Voeg label toe aan bericht';
$txt['pm_rule_sel_label'] = 'Selecteer label';
$txt['pm_rule_delete'] = 'Verwijder bericht';
$txt['pm_rule_no_name'] = 'Je bent vergeten een naam in te vullen voor deze regel.';
$txt['pm_rule_no_criteria'] = 'Een regel moet ten minste &eacute;&eacute;n criterium en actie hebben.';
$txt['pm_rule_too_complex'] = 'De regel die je probeert aan te maken is te lang om op te slaan. Probeer hem te splitsen in meerdere regels.';

$txt['pm_readable_and'] = '<em>en</em>';
$txt['pm_readable_or'] = '<em>of</em>';
$txt['pm_readable_start'] = 'Als ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'bericht is van &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'afzender deel uit maakt van de groep &quot;{GROUP}&quot;';
$txt['pm_readable_subject'] = 'onderwerp het woord &quot;{SUBJECT}&quot; bevat';
$txt['pm_readable_body'] = 'bericht &quot;{BODY}&quot; bevat';
$txt['pm_readable_buddy'] = 'afzender een vriend is';
$txt['pm_readable_label'] = 'label &quot;{LABEL}&quot; toevoegen';
$txt['pm_readable_delete'] = 'bericht verwijderen';
$txt['pm_readable_then'] = '<strong>dan</strong>';

?>