<?php
// Version: 2.0; ManageMaintenance

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['repair_zero_ids'] = 'Themen und/oder Beiträge mit einer ID von 0 gefunden.';
$txt['repair_missing_topics'] = 'Beitag #%1$d befindet sich im nicht existierenden Thema #%2$d.';
$txt['repair_missing_messages'] = 'Thema #%1$d enthält keine (aktuellen) Beiträge.';
$txt['repair_stats_topics_1'] = 'Thema #%1$d hat im ersten Beitrag die ID %2$d, welche nicht korrekt ist.';
$txt['repair_stats_topics_2'] = 'Thema #%1$d hat im letzten Beitrag die ID %2$d, welche nicht korrekt ist.';
$txt['repair_stats_topics_3'] = 'Thema #%1$d hat die falsche Anzahl an Antworten, %2$d.';
$txt['repair_stats_topics_4'] = 'Thema #%1$d hat die falsche Anzahl an nicht genehmigten Beiträgen, %2$d.';
$txt['repair_stats_topics_5'] = 'Thema #%1$d hat die falsche Genehmigungs-Kennzeichnung.';
$txt['repair_missing_boards'] = 'Thema #%1$d befindet sich im fehlenden Board #%2$d.';
$txt['repair_missing_categories'] = 'Board #%1$d befindet sich in der fehlenden Kategorie #%2$d.';
$txt['repair_missing_posters'] = 'Beitrag #%1$d wurde vom Benutzer #%2$d geschrieben, welcher nicht mehr existiert.';
$txt['repair_missing_parents'] = 'Board #%1$d hat kein existierendes übergeordnetes Board (übergeordnetes Board: #%2$d).';
$txt['repair_missing_polls'] = 'Das Thema #%1$d hat eine ungültige Umfragen ID (#%2$d).';
$txt['repair_polls_missing_topics'] = 'Umfrage #%1$d ist zu verbunden zum nicht existierenden Thema #%2$d.';
$txt['repair_missing_calendar_topics'] = 'Das Ereignis #%1$d hat eine fehlende Themen ID (#%2$d).';
$txt['repair_missing_log_topics'] = 'Thema #%1$d ist für einen oder mehreren Benutzer als gelesen markiert, existiert jedoch nicht mehr.';
$txt['repair_missing_log_topics_members'] = 'Benutzer #%1$d hat ein oder mehrere Themen als gelesen markiert, existiert aber nicht mehr.';
$txt['repair_missing_log_boards'] = 'Board #%1$d ist für einen oder mehreren Benutzer als gelesen markiert, existiert jedoch nicht mehr.';
$txt['repair_missing_log_boards_members'] = 'Benutzer #%1$d hat ein oder mehrere Boards als gelesen markiert, existiert aber nicht mehr.';
$txt['repair_missing_log_mark_read'] = 'Board #%1$d ist für einen oder mehreren Benutzer als gelesen markiert, existiert jedoch nicht mehr.';
$txt['repair_missing_log_mark_read_members'] = 'Benutzer #%1$d hat ein oder mehrere Boards als gelesen markiert, existiert aber nicht mehr.';
$txt['repair_missing_pms'] = 'Private Mitteilung #%1$d wurde an einen oder mehrere Empfänger geschickt, existiert aber nicht mehr.';
$txt['repair_missing_recipients'] = 'Benutzer #%1$d hat eine oder mehrere Private Mitteilungen erhalten, existiert aber nicht mehr.';
$txt['repair_missing_senders'] = 'Private Mitteilung #%1$d wurde vom Benutzer #%2$d gesendet, welcher jedoch nicht existiert.';
$txt['repair_missing_notify_members'] = 'Es wurden von #%1$d Benachrichtigungen angefordert, obwohl der Benutzer nicht existiert.';
$txt['repair_missing_cached_subject'] = 'Der Titel des Themas #%1$d ist momentan nicht im Zwischenspeicher.';
$txt['repair_missing_topic_for_cache'] = 'Das zwischengespeicherte Wort \'%1$s\' ist mit einem nicht existierenden Thema verknüpft.';
$txt['repair_missing_log_poll_member'] = 'In der Umfrage #%1$d wurde vom Benutzer #%2$d abgestimmt, welcher nicht mehr existiert.';
$txt['repair_missing_log_poll_vote'] = 'Der Benutzer #%1$d hat in der nicht existierenden Umfrage #%2$d abgestimmt.';
$txt['repair_missing_thumbnail_parent'] = 'Es existiert ein Vorschaubild mit dem Namen %1$s, welches aber keine Verknüpfung hat.';
$txt['repair_report_missing_comments'] = 'Meldung #%1$d des Themas: "%2$s" hat keine Kommentare.';
$txt['repair_comments_missing_report'] = 'Kommentar #%1$d von %2$s hat keine zugewiesene Meldung.';
$txt['repair_group_request_missing_member'] = 'Die Anfrage für eine Gruppenmitgliedschaft existiert für den gelöschten Benutzer #%1$d.';
$txt['repair_group_request_missing_group'] = 'Die Anfrage für eine Gruppenmitgliedschaft existiert für die gelöschte Gruppe #%1$d.';

$txt['repair_currently_checking'] = 'Prüfe: "%1$s"';
$txt['repair_currently_fixing'] = 'Repariere: "%1$s"';
$txt['repair_operation_zero_topics'] = 'Themen mit inkorrektem Wert 0 für id_topic';
$txt['repair_operation_zero_messages'] = 'Beiträge mit inkorrektem Wert 0 für id_topic';
$txt['repair_operation_missing_topics'] = 'Beiträge ohne Thema-Einträge';
$txt['repair_operation_missing_messages'] = 'Themen ohne Beiträge';
$txt['repair_operation_stats_topics'] = 'Themen mit inkorrekten erst- oder zuletzt- Beitragseinträgen';
$txt['repair_operation_stats_topics2'] = 'Themen mit der falschen Anzahl an Antworten';
$txt['repair_operation_stats_topics3'] = 'Themen mit der falschen, nicht überprüften Beitragsanzahl';
$txt['repair_operation_missing_boards'] = 'Themen in einer nicht-existenten Kategorie';
$txt['repair_operation_missing_categories'] = 'Bereiche in nicht existierenden Kategorien';
$txt['repair_operation_missing_posters'] = 'Beiträge die zu nicht-existierenden Mitgliedern zugewiesen sind';
$txt['repair_operation_missing_parents'] = 'Unterbereiche mit nicht existierenden Eltern';
$txt['repair_operation_missing_polls'] = 'Themen, die zu nicht existierenden Umfragen verweisen';
$txt['repair_operation_missing_calendar_topics'] = 'Ereignisse, die auf nicht existierende Themen verweisen';
$txt['repair_operation_missing_log_topics'] = 'Themen-Protokolle, die auf nicht existierende Themen verweisen';
$txt['repair_operation_missing_log_topics_members'] = 'Themen Protokolle, die auf nicht existierende Benutzer verweisen';
$txt['repair_operation_missing_log_boards'] = 'Bereichs Protokolle, die auf nicht existierende Bereiche verweisen';
$txt['repair_operation_missing_log_boards_members'] = 'Bereichs-Protokolle, die auf nicht existierende Benutzer verweisen';
$txt['repair_operation_missing_log_mark_read'] = '"Als gelesen markieren" Daten, die auf nicht existierende Bereiche verweisen';
$txt['repair_operation_missing_log_mark_read_members'] = '"Als gelesen markieren" Daten, die auf nicht existierende Benutzer verweisen';
$txt['repair_operation_missing_pms'] = 'PN Empfänger ohne die eigentliche Nachricht';
$txt['repair_operation_missing_recipients'] = 'PN Empfänger, die auf nicht existierende Benutzer verweisen';
$txt['repair_operation_missing_senders'] = 'Persönliche Nachrichten, die auf nicht existierende Benutzer verweisen';
$txt['repair_operation_missing_notify_members'] = 'Benachrichtigungs-Protokolle, die auf nicht existierende Benutzer verweisen';
$txt['repair_operation_missing_cached_subject'] = 'Themen, denen ihre Such-Cache-Einträge fehlen';
$txt['repair_operation_missing_topic_for_cache'] = 'Such-Cache-Einträge, die auf nicht existierende Themen verweisen';
$txt['repair_operation_missing_member_vote'] = 'Umfrage-Abstimmungen, die auf nicht existierende Benutzer verweisen';
$txt['repair_operation_missing_log_poll_vote'] = 'Umfrage-Abstimmungen, die auf nicht existierende Umfragen verweisen';
$txt['repair_operation_report_missing_comments'] = 'Themen-Berichte ohne Kommentar';
$txt['repair_operation_comments_missing_report'] = 'Berichts-Kommentare ohne Themen-Bericht';
$txt['repair_operation_group_request_missing_member'] = 'Gruppen-Anfragen, deren ausgehender Benutzer nicht existiert';
$txt['repair_operation_group_request_missing_group'] = 'Gruppen-Anfragen für nicht existierende Gruppen';

$txt['salvaged_category_name'] = 'Gerettete Daten';
$txt['salvaged_category_error'] = 'Die Kategorie "Gerettete Daten" konnte nicht erstellt werden!';
$txt['salvaged_board_name'] = 'Gerettete Themen';
$txt['salvaged_board_description'] = 'Diese Themen wurden für Beiträge erstellt, die kein zugewiesenes oder existierendes Thema haben.';
$txt['salvaged_board_error'] = 'Das Board "Gerettete Themen" konnte nicht erstellt werden!';
$txt['salvaged_poll_topic_name'] = 'Isolierte Umfragen';
$txt['salvaged_poll_message_body'] = 'Diese Umfrage wurde ohne zugewiesenes Thema gefunden.';

$txt['database_optimize'] = 'Datenbank optimieren';
$txt['database_numb_tables'] = 'Ihre Datenbank enthält %1$d Tabellen.';
$txt['database_optimize_attempt'] = 'Versuche die Datenbank zu optimieren ...';
$txt['database_optimizing'] = 'Optimiere %1$s... %2$f KB optimiert.';
$txt['database_already_optimized'] = 'Alle Tabellen sind optimiert!';
$txt['database_opimize_unneeded'] = 'Eine Optimierung der Datenbank war nicht notwendig!';
$txt['database_optimized'] = ' Tabelle(n) optimiert';
$txt['database_no_id'] = 'hat eine ungültige Benutzer ID';

$txt['apply_filter'] = 'Filter hinzufügen';
$txt['applying_filter'] = 'Hinzufügen des Filter';
$txt['filter_only_member'] = 'Nur Fehlermeldungen dieses Benutzers anzeigen';
$txt['filter_only_ip'] = 'Nur Fehlermeldungen dieser IP-Adresse anzeigen';
$txt['filter_only_session'] = 'Nur Fehlermeldungen dieser Sitzung anzeigen';
$txt['filter_only_url'] = 'Nur Fehlermeldungen dieser URL anzeigen';
$txt['filter_only_message'] = 'Nur Fehlermeldungen mit der gleichen Nachricht anzeigen';
$txt['session'] = 'Sitzung';
$txt['error_url'] = 'URL der Seite die den Fehler erzeugte';
$txt['error_message'] = 'Fehlermeldung';
$txt['clear_filter'] = 'Filter löschen';
$txt['remove_selection'] = 'Auswahl entfernen';
$txt['remove_filtered_results'] = 'Alle gefilterten Resultate entfernen';
$txt['sure_about_errorlog_remove'] = 'Sind Sie sicher, dass Sie alle Fehlermeldungen löschen möchten?';
$txt['reverse_direction'] = 'Chronologische Reihenfolge der Liste ändern';
$txt['error_type'] = 'Art des Fehlers';
$txt['filter_only_type'] = 'Nur Fehler von diesem Typ zeigen';
$txt['filter_only_file'] = 'Nur Fehler von dieser Datei zeigen';
$txt['apply_filter_of_type'] = 'Filter hinzufügen';

$txt['errortype_all'] = 'Alle Fehler';
$txt['errortype_general'] = 'Generell';
$txt['errortype_general_desc'] = 'Generelle Fehler, die keinem anderen Fehler-Typ zugeordnet werden konnten.';
$txt['errortype_critical'] = '<span style="color:red;">Kritisch</span>';
$txt['errortype_critical_desc'] = 'Kritische Fehler. Diese sollten unverzüglich behoben werden, da sie sonst negative Auswirkungen auf das Forum haben sowie potentielle Sicherheitsrisiken darstellen.';
$txt['errortype_database'] = 'Datenbank';
$txt['errortype_database_desc'] = 'Fehler aufgrund falscher Abfragen. Diese sollten untersucht und dem SMF-Team mitgeteilt werden.';
$txt['errortype_undefined_vars'] = 'Undefiniert';
$txt['errortype_undefined_vars_desc'] = 'Fehler aufgrund undefinierter Variablen, Indizies oder Offsets.';
$txt['errortype_template'] = 'Theme';
$txt['errortype_template_desc'] = 'Fehler aufgrund des Ladens von Themes.';
$txt['errortype_user'] = 'Benutzer';
$txt['errortype_user_desc'] = 'Fehler aufgrund eines Benutzerfehler: Eingabe eines falschen Passwortes, Einloggen während eines Banns oder ausführen einer Aktion ohne Berechtigung.';

$txt['maintain_recount'] = 'Alle totalen Forumswerte und Statistiken neu auszählen';
$txt['maintain_recount_info'] = 'Sollte die Gesamtzahl an Antworten eines Themas oder die Anzahl der PNs in Ihrem Nachrichten-Eingang inkorrekt sein: diese Funktion zählt alle gespeicherten Zähler und Statistiken neu.';
$txt['maintain_errors'] = 'Fehler finden und reparieren';
$txt['maintain_errors_info'] = 'Wenn, zum Beispiel nach einem Server Absturz, Beiträge und Themen fehlen könnte diese Funktion dabei helfen sie wieder aufzufinden.';
$txt['maintain_logs'] = 'Unwichtige Protokolle leeren';
$txt['maintain_logs_info'] = 'Diese Funktion leert alle unwichtigen Protokolle. Dies sollte vermieden werden, außer etwas stimmt nicht. Es macht jedoch auch nichts kaputt.';
$txt['maintain_cache'] = 'Dateicache leeren';
$txt['maintain_cache_info'] = 'Diese Funktion entfernt alle Dateien aus dem Zwischenspeicher (Cache).';
$txt['maintain_optimize'] = 'Optimiere alle Tabellen';
$txt['maintain_optimize_info'] = 'Diese Aufgabe erlaubt es ihnen, alle Tabellen zu optimieren. Dies wird Overhead entfernen, was die Tabellen kleiner und Ihr Forum schneller machen wird.';
$txt['maintain_version'] = 'Alle Dateien auf neue Versionen überprüfen';
$txt['maintain_version_info'] = 'Diese Wartungsaufgabe erlaubt es ihnen eine ausführliche Versionsprüfung der einzelnen Forums Dateien gegenüber den aktuellen Versionen durchzuführen.';
$txt['maintain_run_now'] = 'Aufgabe jetzt ausführen';
$txt['maintain_return'] = 'Zurück zu \'Wartung des Forums\'';

$txt['maintain_backup'] = 'Datenbank sichern';
$txt['maintain_backup_info'] = 'Lade eine Sicherungskopie der Forums-Datenbank für den Fall eines Notfalls herunter.';
$txt['maintain_backup_struct'] = 'Tabellenstruktur sichern';
$txt['maintain_backup_data'] = 'Tabellendaten speichern (das wichtige Zeug).';
$txt['maintain_backup_gz'] = 'Datei mit gzip komprimieren';
$txt['maintain_backup_save'] = 'Herunterladen';

$txt['maintain_old'] = 'Alte Beiträge löschen';
$txt['maintain_old_since_days1'] = 'Alle Themen löschen, auf die seit ';
$txt['maintain_old_since_days2'] = ' Tagen nicht mehr geantwortet wurde und welche:';
$txt['maintain_old_nothing_else'] = 'jeglicher Art von Themen sind.';
$txt['maintain_old_are_moved'] = 'Umleitungshinweise sind.';
$txt['maintain_old_are_locked'] = 'geschlossen sind.';
$txt['maintain_old_are_not_stickied'] = 'fixierte Themen ausschließen';
$txt['maintain_old_all'] = 'Alle Boards (klicke um spezifische Boards zu wählen)';
$txt['maintain_old_choose'] = 'Spezifische Boards (klicken um alle zu wählen)';
$txt['maintain_old_remove'] = 'Entfernen';
$txt['maintain_old_confirm'] = 'Sind Sie sicher, dass Sie alle alten Beiträge löschen möchten?\\n\\nDies kann nicht rückgängig gemacht werden!';

$txt['maintain_members'] = 'Inaktive Mitglieder entfernen';
$txt['maintain_members_ungrouped'] = 'Ungruppierte Mitglieder <span class="smalltext">(ohne zugewiesene Gruppe)</span>';
$txt['maintain_members_since1'] = 'Alle Mitglieder löschen, welche nicht';
$txt['maintain_members_since2'] = 'seit';
$txt['maintain_members_since3'] = 'Tag(en).';
$txt['maintain_members_activated'] = 'ihre Zugänge aktiviert haben';
$txt['maintain_members_logged_in'] = 'eingeloggt waren';
$txt['maintain_members_all'] = 'Alle Mitgliedergruppen';
$txt['maintain_members_choose'] = 'Ausgewählte Mitgliedergruppen';
$txt['maintain_members_confirm'] = 'Sind sie sicher, dass sie diese Mitgliederzugänge löschen möchten?\\n\\nDies kann nicht rückgängig gemacht werden!';

$txt['utf8_title'] = 'Konvertiert die Datenbank und die Daten zu UTF-8';
$txt['utf8_introduction'] = 'UTF-8 ist ein internationaler Zeichensatz, welcher fast alle Sprachen umfasst. Die Konvertierung der Datenbank und der Daten zu UTF-8 macht die Unterstützung verschiedener Sprachen in einem Board einfacher und verbessert die Möglichkeiten der Suche bzw. der Sortierfunktion für Sprachen mit nicht-lateinischen Zeichen.';
$txt['utf8_warning'] = 'Sollten Sie die Datenbank und die Daten zu UTF-8 konvertieren möchten, beachten Sie bitte folgendes:
<ul class="normallist">
	<li>Das Konvertieren von Zeichensätzen kann Ihre Daten <em>beschädigen</em>! Stellen sie sicher, dass eine Datensicherung <em>vor</em> der Konvertierung gemacht wurde.</li>
	<li>Aufgrund des größeren Umfangs des UTF-8 Zeichensatzes gibt es keine Möglichkeit die Konvertierung rückgängig zu machen - außer das Zurückspielen einer Datensicherung, welche vor der Konvertierung erstellt wurde.</li>
	<li>Nach der Konvertierung von Datenbank und Daten benötigen Sie UTF-8 kompatible Sprachdateien.</li>
</ul>';
$txt['utf8_charset_not_supported'] = 'Konvertierung von %1$s zu UTF-8 wird nicht unterstützt.';
$txt['utf8_detected_charset'] = 'Basierend auf Ihren Standard-Sprachdateien (\'%1$s\') würde der Zeichensatz Ihrer Daten \'%2$s\' sein.';
$txt['utf8_already_utf8'] = 'Ihre Datenbank und Ihre Daten sind schon als UTF-8 konfiguriert. Eine Konvertierung ist nicht nötig.';
$txt['utf8_source_charset'] = 'Zeichensatz der Daten';
$txt['utf8_proceed'] = 'Weiter';
$txt['utf8_database_charset'] = 'Zeichensatz der Datenbank';
$txt['utf8_target_charset'] = 'Konvertiere Datenbank und Daten zu';
$txt['utf8_utf8'] = 'UTF-8';
$txt['utf8_db_version_too_low'] = 'Die MySQL-Version Ihres Datenbankservers ist nicht aktuell genug um UTF-8 problemlos zu unterstützen. Sie benötigen mind. Version 4.1.2.';
$txt['utf8_cannot_convert_fulltext'] = 'Ihre Nachrichten-Tabelle verwendet Volltext-Indexierung zur Verwendung bei einer Suche. Sie können mit der Konvertierung zu UTF-8 nicht fortfahren, bevor diese nicht entfernt wurde. Sie können Ihn anschließend wieder Erstellen, sobald die Konvertierung abgeschlossen ist.';

$txt['entity_convert_title'] = 'Konvertiere HTML-Entities zu UTF-8 Zeichen';
$txt['entity_convert_only_utf8'] = 'Die Datenbank sollte im UTF-8 Format vorhanden sein, bevor die HTML-Entities zu UTF-8 konvertiert werden können.';
$txt['entity_convert_introduction'] = 'Diese Funktion konvertiert alle Zeichen, die als HTML-Entities in der Datenbank gespeichert sind, zu UTF-8. Das ist sinnvoll, wenn Sie Ihr Forum erst kürzlich von einem Zeichensatz wie ISO-8859-1 konvertiert haben und nicht-lateinische Zeichen im Forum benutzt wurden. Der Browser sendet danach alle Zeichen als HTML-Entities, zum Beispiel das HTML-Entity &amp#945;, welches im griechischen den Buchstaben &#945; (Alpha) representiert. Die Konvertierung von Entities zu UTF-8 verbessert die Suche und Sortierung von Text erheblich und reduziert den benötigten Speicher.';
$txt['entity_convert_proceed'] = 'Weiter';

// Move topics out.
$txt['move_topics_maintenance'] = 'Themen verschieben';
$txt['move_topics_select_board'] = 'Board auswählen';
$txt['move_topics_from'] = 'Verschiebe Themen von';
$txt['move_topics_to'] = 'zu';
$txt['move_topics_now'] = 'Jetzt verschieben';
$txt['move_topics_confirm'] = 'Sind Sie sicher, dass Sie ALLE Themen von "%board_from%" zu "%board_to%" verschieben möchten?';

$txt['maintain_reattribute_posts'] = 'Beiträge zuordnen';
$txt['reattribute_guest_posts'] = 'Gästebeiträge mit folgenden Daten zuordnen';
$txt['reattribute_email'] = 'E-Mail-Adresse';
$txt['reattribute_username'] = 'Benutzername';
$txt['reattribute_current_member'] = 'Beiträge folgendem Mitglied zuordnen';
$txt['reattribute_increase_posts'] = 'Beiträge der Anzahl des Benutzers hinzufügen';
$txt['reattribute'] = 'Zuordnen';
// Don't use entities in the below string.
$txt['reattribute_confirm'] = 'Sind Sie sicher, dass Sie alle Gästebeiträge mit %type% "%find%" dem Mitglied "%member_to%" zuordnen möchten?';
$txt['reattribute_confirm_username'] = 'dem Benutzernamen';
$txt['reattribute_confirm_email'] = 'der E-Mail-Adresse';
$txt['reattribute_cannot_find_member'] = 'Das ausgesuchte Mitglied konnte nicht gefunden werden!';

?>