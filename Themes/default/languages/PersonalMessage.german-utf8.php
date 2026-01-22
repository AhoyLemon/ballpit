<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Private Mitteilungen';
$txt['send_message'] = 'Senden';
$txt['pm_add'] = 'Hinzufügen';
$txt['make_bcc'] = 'BCC hinzufügen';
$txt['pm_to'] = 'An';
$txt['pm_bcc'] = 'Bcc';
$txt['inbox'] = 'Posteingang';
$txt['conversation'] = 'Konversation';
$txt['messages'] = 'Nachrichten';
$txt['sent_items'] = 'Postausgang';
$txt['new_message'] = 'Neue Mitteilung';
$txt['delete_message'] = 'Lösche Mitteilung';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Alle Mitteilungen in Ihrem PMBOX löschen';
$txt['delete_all_confirm'] = 'Sind Sie sicher, dass Sie alle Mitteilungen löschen möchten?';
$txt['recipient'] = 'Empfänger';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Neue Private Mitteilung: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'Sie haben eine Private Mitteilung von SENDER im Forum ' . $context['forum_name'] . ' erhalten.' . "\n\n" . 'WICHTIG: Das ist nur eine Benachrichtigung - bitte antworten Sie nicht auf diese E-Mail!' . "\n\n" . 'Die Nachricht, die an Sie gesendet wurde:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(mehrere Empfänger als \'username1, username2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Auf diese Mitteilung antworten:';

$txt['delete_selected_confirm'] = 'Sind Sie sicher, dass Sie die ausgewählten Privaten Mitteilungen löschen möchten?';

$txt['sent_to'] = 'Senden an';
$txt['reply_to_all'] = 'Allen antworten';
$txt['delete_conversation'] = 'Konversation löschen';

$txt['pm_capacity'] = 'Kapazität';
$txt['pm_currently_using'] = '%1$s Mitteilungen, %2$s%% voll.';
$txt['pm_sent'] = 'Ihre Nachricht wurde erfolgreich versandt.';

$txt['pm_error_user_not_found'] = 'Kann Mitglied \'%1$s\' nicht finden.';
$txt['pm_error_ignored_by_user'] = 'Mitglied \'%1$s\' hat Ihre Mitteilungen geblockt.';
$txt['pm_error_data_limit_reached'] = 'Die Mitteilung konnte wegen des max. Limit nicht an \'%1$s\' gesendet werden.';
$txt['pm_error_user_cannot_read'] = 'Der Benutzer \'%1$s\' kann keine Privaten Mitteilungen empfangen.';
$txt['pm_successfully_sent'] = 'Mitteilung erfolgreich an \'%1$s\' gesendet.';
$txt['pm_send_report'] = 'Meldung senden';
$txt['pm_save_outbox'] = 'Kopie im Ausgang speichern';
$txt['pm_undisclosed_recipients'] = 'Verdeckter Empfänger';
$txt['pm_too_many_recipients'] = 'Sie können persönliche Nachrichten nicht an mehr als %1$d Empfänger auf einmal schicken.';

$txt['pm_read'] = 'Lesen';
$txt['pm_replied'] = 'Antwort an';

// Message Pruning.
$txt['pm_prune'] = 'Mitteilungen bereinigen';
$txt['pm_prune_desc1'] = 'Alle Privaten Mitteilungen älter als';
$txt['pm_prune_desc2'] = 'Tage löschen.';
$txt['pm_prune_warning'] = 'Sind Sie sicher, dass Sie Ihre Mitteilungen bereinigen möchten?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Weitere Funktionen';
$txt['pm_actions_delete_selected'] = 'Ausgewählte löschen';
$txt['pm_actions_filter_by_label'] = 'Nach Label filtern';
$txt['pm_actions_go'] = 'Los';

// Manage Labels Screen.
$txt['pm_apply'] = 'Übernehmen';
$txt['pm_manage_labels'] = 'Labels verwalten';
$txt['pm_labels_delete'] = 'Sind Sie sicher, dass Sie die ausgewählten Labels löschen möchten?';
$txt['pm_labels_desc'] = 'Hier können Sie Labels zu Ihren Privaten Mitteilungen hinzufügen, editieren und löschen.';
$txt['pm_label_add_new'] = 'Neues Label hinzufügen';
$txt['pm_label_name'] = 'Name des Labels';
$txt['pm_labels_no_exist'] = 'Sie haben noch keine Labels erstellt!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Label';
$txt['pm_msg_label_title'] = 'Mitteilung kennzeichnen';
$txt['pm_msg_label_apply'] = 'Label hinzufügen';
$txt['pm_msg_label_remove'] = 'Label entfernen';
$txt['pm_msg_label_inbox'] = 'Posteingang';
$txt['pm_sel_label_title'] = 'Ausgewählte kennzeichnen';

// Sidebar Headings.
$txt['pm_labels'] = 'Labels';
$txt['pm_messages'] = 'Mitteilungen';
$txt['pm_actions'] = 'Aktionen';
$txt['pm_preferences'] = 'Einstellungen';

$txt['pm_is_replied_to'] = 'Sie haben diese Mitteilung weitergeleitet oder schon darauf geantwortet.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Administrator informieren';
$txt['pm_report_title'] = 'Private Mitteilung melden';
$txt['pm_report_desc'] = 'Hier können Sie Private Mitteilungen den Administratoren des Forums melden. Bitte fügen Sie eine kurze Beschreibung an, warum Sie diese Mitteilung melden möchten. Die Beschreibung wird mit der Originalnachricht versendet.';
$txt['pm_report_admins'] = 'An folgenden Administrator melden';
$txt['pm_report_all_admins'] = 'An alle Administratoren melden';
$txt['pm_report_reason'] = 'Grund für die Meldung der Mitteilung';
$txt['pm_report_message'] = 'Mitteilung melden';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[MELDUNG] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} hat die untenstehende Mitteilung, die von {SENDER} gesendet wurde, mit folgendem Grund gemeldet:';
$txt['pm_report_pm_other_recipients'] = 'Andere Empfänger der Meldung:';
$txt['pm_report_pm_hidden'] = '%1$d versteckte Empfänger';
$txt['pm_report_pm_unedited_below'] = 'Der Originaltext der gemeldeten Mitteilung lautet wie folgt:';
$txt['pm_report_pm_sent'] = 'Gesendet:';

$txt['pm_report_done'] = 'Vielen Dank für das Melden der Mitteilung. Sie sollten in Kürze von den Administratoren eine Antwort erhalten.';
$txt['pm_report_return'] = 'Zurück zum Posteingang';

$txt['pm_search_title'] = 'Private Mitteilungen durchsuchen';
$txt['pm_search_bar_title'] = 'Private Mitteilungen durchsuchen';
$txt['pm_search_text'] = 'Suche nach';
$txt['pm_search_go'] = 'Suchen';
$txt['pm_search_advanced'] = 'Erweiterte Suche';
$txt['pm_search_user'] = 'nach Mitglied';
$txt['pm_search_match_all'] = 'Übereinstimmung aller Wörter';
$txt['pm_search_match_any'] = 'Übereinstimmung eines Wortes';
$txt['pm_search_options'] = 'Optionen';
$txt['pm_search_post_age'] = 'Alter';
$txt['pm_search_show_complete'] = 'Vollständige Mitteilung in den Suchergebnissen anzeigen.';
$txt['pm_search_subject_only'] = 'Suche nur nach Betreff und Autor.';
$txt['pm_search_between'] = 'Zwischen';
$txt['pm_search_between_and'] = 'und';
$txt['pm_search_between_days'] = 'Tagen';
$txt['pm_search_order'] = 'Ergebnisse sortieren nach';
$txt['pm_search_choose_label'] = 'Labels zum Suchen auswählen oder alle durchsuchen';

$txt['pm_search_results'] = 'Suchresultate';
$txt['pm_search_none_found'] = 'Keine Mitteilungen gefunden';

$txt['pm_search_orderby_relevant_first'] = 'Größte Relevanz zuerst';
$txt['pm_search_orderby_recent_first'] = 'Neueste Mitteilungen zuerst';
$txt['pm_search_orderby_old_first'] = 'Älteste Mitteilungen zuerst';

$txt['pm_visual_verification_label'] = 'Verifizierung';
$txt['pm_visual_verification_desc'] = 'Bitte geben sie den Code aus dem Bild ein, um die Mitteilung zu versenden.';

$txt['pm_settings'] = 'Einstellungen ändern';
$txt['pm_change_view'] = 'Ansicht wechseln';

$txt['pm_manage_rules'] = 'Regeln verwalten';
$txt['pm_manage_rules_desc'] = 'Hier können sie ihre eingehenden Privaten Mitteilungen automatisch nach bestimmten Kriterien sortieren. Um eine Regel zu bearbeiten, klicken sie den Namen der Regel an.';
$txt['pm_rules_none'] = 'Sie haben keine Regeln definiert.';
$txt['pm_rule_title'] = 'Regel';
$txt['pm_add_rule'] = 'Neue Regel';
$txt['pm_apply_rules'] = 'Regeln jetzt anwenden';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Sind sie sicher, dass sie die Regeln auf alle Privaten Mitteilungen anwenden möchten?';
$txt['pm_edit_rule'] = 'Regel ändern';
$txt['pm_rule_save'] = 'Regel speichern';
$txt['pm_delete_selected_rule'] = 'Ausgewählte Regeln löschen';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Sind sie sicher, dass sie die ausgewählten Regeln löschen möchten?';
$txt['pm_rule_name'] = 'Name';
$txt['pm_rule_name_desc'] = 'Name für diese Regel';
$txt['pm_rule_name_default'] = '[NAME]';
$txt['pm_rule_description'] = 'Beschreibung';
$txt['pm_rule_not_defined'] = 'Fügen sie Kriterien hinzu, um die Beschreibung zu erstellen.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><b>Hinweis:</b> Sie scheinen Javascript deaktiviert zu haben. Wir empfehlen dringend Javascript zu Aktivieren um diese Funktion zu nutzen.</span> ';
$txt['pm_rule_criteria'] = 'Kriterien';
$txt['pm_rule_criteria_add'] = 'Kriterium hinzufügen';
$txt['pm_rule_criteria_pick'] = 'Kriterium wählen';
$txt['pm_rule_mid'] = 'Name des Absenders';
$txt['pm_rule_gid'] = 'Gruppe des Absenders';
$txt['pm_rule_sub'] = 'Betreff enthält';
$txt['pm_rule_msg'] = 'Mitteilungstext enthält';
$txt['pm_rule_bud'] = 'Absender ist ein Buddy';
$txt['pm_rule_sel_group'] = 'Gruppe wählen';
$txt['pm_rule_logic'] = 'Zu erfüllende Kriterien';
$txt['pm_rule_logic_and'] = 'Alle Kriterien müssen erfüllt werden';
$txt['pm_rule_logic_or'] = 'Ein Kriterium muss erfüllt sein';
$txt['pm_rule_actions'] = 'Aktionen';
$txt['pm_rule_sel_action'] = 'Aktion wählen';
$txt['pm_rule_add_action'] = 'Aktion hinzufügen';
$txt['pm_rule_label'] = 'Mitteilung kennzeichnen mit';
$txt['pm_rule_sel_label'] = 'Label wählen';
$txt['pm_rule_delete'] = 'Mitteilung löschen';
$txt['pm_rule_no_name'] = 'Sie haben vergessen, einen Namen für diese Regel einzugeben.';
$txt['pm_rule_no_criteria'] = 'Eine Regel muss mindestens ein Kriterium und eine Aktion enthalten.';
$txt['pm_rule_too_complex'] = 'Die erstellte Regel ist zu lang, um von SMF gespeichert zu werden. Versuchen sie die Regel in mehrere kurze Regeln aufzuteilen.';

$txt['pm_readable_and'] = '<em>und</em>';
$txt['pm_readable_or'] = '<em>oder</em>';
$txt['pm_readable_start'] = 'Wenn ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'die Mitteilung von "{MEMBER}" ist';
$txt['pm_readable_group'] = 'der Absender in der Gruppe "{GROUP}" ist';
$txt['pm_readable_subject'] = 'der Betreff "{SUBJECT}" enthält';
$txt['pm_readable_body'] = 'der Mitteilungstext "{BODY}" enthält';
$txt['pm_readable_buddy'] = 'der Absender ein Buddy ist';
$txt['pm_readable_label'] = 'wird das Label "{LABEL}" hinzugefügt';
$txt['pm_readable_delete'] = 'wird die Mitteilung gelöscht';
$txt['pm_readable_then'] = '<strong>dann</strong>';

?>