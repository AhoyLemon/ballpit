<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = 'Datum';
$txt['modlog_member'] = 'Mitglied';
$txt['modlog_position'] = 'Position';
$txt['modlog_action'] = 'Aktion';
$txt['modlog_ip'] = 'IP-Adresse';
$txt['modlog_search_result'] = 'Suchergebnisse';
$txt['modlog_total_entries'] = 'Gesamtanzahl';
$txt['modlog_ac_approve_topic'] = 'Genehmigtes Thema "{topic}" von "{member}"';
$txt['modlog_ac_approve'] = 'Genehmigter Beitrag "{subject}" in "{topic}" von "{member}"';
$txt['modlog_ac_lock'] = 'Thema Geschlossen: "{topic}"';
$txt['modlog_ac_warning'] = '{member} für "{message}" gewarnt';
$txt['modlog_ac_unlock'] = '"{topic}" entsperrt';
$txt['modlog_ac_sticky'] = 'Fixiert "{topic}"';
$txt['modlog_ac_unsticky'] = 'Fixierung von "{topic}" aufgehoben';
$txt['modlog_ac_delete'] = 'Gelöscht: "{subject}" von "{member}" in "{topic}"';
$txt['modlog_ac_delete_member'] = 'Mitglied Gelöscht: "{name}"';
$txt['modlog_ac_remove'] = 'Gelöschtes Thema "{topic}" von "{board}"';
$txt['modlog_ac_modify'] = 'Geändert "{message}" von "{member}"';
$txt['modlog_ac_merge'] = 'Zusammengeführt zu "{topic}"';
$txt['modlog_ac_split'] = 'Geteilt "{topic}" um "{new_topic}" zu erstellen';
$txt['modlog_ac_move'] = 'Verschoben "{topic}" von "{board_from}" zu "{board_to}"';
$txt['modlog_ac_profile'] = 'Profil geändert von "{member}"';
$txt['modlog_ac_pruned'] = 'Beiträge bereinigt, welche älter waren als {days} Tage';
$txt['modlog_ac_news'] = 'News editiert';
$txt['modlog_enter_comment'] = 'Kommentar eingeben';
$txt['modlog_moderation_log'] = 'Moderator-Protokoll';
$txt['modlog_moderation_log_desc'] = 'Hier können Sie eine Liste mit protokollierten Aktionen der Moderatoren anschauen, welche im Forum durchgeführt worden sind.<br /><strong>Bitte beachten Sie:</strong> Diese Einträge können frühestens nach 24 Stunden gelöscht werden.';
$txt['modlog_no_entries_found'] = 'Keine Einträge im Moderatoren-Protokoll gefunden';
$txt['modlog_remove'] = 'Entfernen';
$txt['modlog_removeall'] = 'Alle entfernen';
$txt['modlog_go'] = 'Los';
$txt['modlog_add'] = 'Hinzufügen';
$txt['modlog_search'] = 'Schnellsuche';
$txt['modlog_by'] = 'Von';
$txt['modlog_id'] = '<em>(ID:%1$d)</em>';

$txt['modlog_ac_add_warn_template'] = 'Warnungs-Template hinzugefügt: "{template}"';
$txt['modlog_ac_modify_warn_template'] = 'Warnungs-Template wurde editiert: "{template}"';
$txt['modlog_ac_delete_warn_template'] = 'Warnungs-Template entfernt: "{template}"';

$txt['modlog_ac_ban'] = 'Hinzugefügte Bann-Merkmale:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Mitglied:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = ' <em>E-Mail:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = ' <em>IP-Adresse:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = '<em>Hostname:</em> {hostname}';

$txt['modlog_admin_log'] = 'Administrator-Protokoll';
$txt['modlog_admin_log_desc'] = 'Hier können Sie eine Liste mit protokollierten Aktionen der Administratoren anschauen, welche im Forum durchgeführt wurden.<br /><strong>Bitte beachten Sie:</strong> Diese Einträge können frühestens nach 24 Stunden gelöscht werden.';
$txt['modlog_admin_log_no_entries_found'] = 'Es sind momentan keine Administrations-Log-Einträge vorhanden.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Forum auf Version {version} aktualisiert';
$txt['modlog_ac_install'] = 'Version {version} installiert';
$txt['modlog_ac_add_board'] = 'Board "{board}" hinzugefügt';
$txt['modlog_ac_edit_board'] = 'Board "{board}" editiert';
$txt['modlog_ac_delete_board'] = 'Board "{boardname}" gelöscht';
$txt['modlog_ac_add_cat'] = 'Kategorie "{catname}" hinzugefügt';
$txt['modlog_ac_edit_cat'] = 'Kategorie "{catname}" editiert';
$txt['modlog_ac_delete_cat'] = 'Kategorie "{catname}" gelöscht';

$txt['modlog_ac_delete_group'] = 'Gruppe "{group}" gelöscht';
$txt['modlog_ac_add_group'] = 'Gruppe "{group}" hinzugefügt';
$txt['modlog_ac_edited_group'] = 'Gruppe "{group}" editiert';
$txt['modlog_ac_added_to_group'] = '"{member}" zu der Gruppe "{group}" hinzugefügt';
$txt['modlog_ac_removed_from_group'] = '"{member}" aus der Gruppe "{group}" entfernt';
$txt['modlog_ac_removed_all_groups'] = '"{member}" aus allen Gruppen entfernt';

$txt['modlog_ac_remind_member'] = 'Erinnerungs E-Mail zur Aktivierung des Benutzerkontos an "{member}" gesendet';
$txt['modlog_ac_approve_member'] = 'Benutzerkonto von "{member}" genehmigt/aktiviert';
$txt['modlog_ac_newsletter'] = 'Newsletter versendet';

$txt['modlog_ac_install_package'] = 'Neues Paket installieren: &quot;{package}&quot;, Version {version} ';
$txt['modlog_ac_upgrade_package'] = 'Paket aufrüsten: &quot;{package}&quot; auf Version {version} ';
$txt['modlog_ac_uninstall_package'] = 'Paket deinstallieren: &quot;{package}&quot;, Version {version} ';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Wiederhergestelltes Thema "{topic}" von "{board}" zu "{board_to}"';
$txt['modlog_ac_restore_posts'] = 'Wiederhergestellte Beiträge von"{subject}" ins Thema "{topic}" im Board  "{board}".';

$txt['modlog_parameter_guest'] = '<em>Gast</em>';

?>