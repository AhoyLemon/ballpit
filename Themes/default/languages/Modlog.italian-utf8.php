<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = 'Data';
$txt['modlog_member'] = 'Utente';
$txt['modlog_position'] = 'Posizione';
$txt['modlog_action'] = 'Azione';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Risultati della ricerca';
$txt['modlog_total_entries'] = 'Voci totali';
$txt['modlog_ac_approve_topic'] = 'È stato approvato il topic &quot;{topic}&quot; da parte di &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'È stato approvato il post &quot;{subject}&quot; in &quot;{topic}&quot; da &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Chiuso il topic &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = '{member} richiamato per &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Riaperto il topic &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Impostato come importante il topic &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Il topic &quot;{topic}&quot; non &egrave; pi&ugrave; importante';
$txt['modlog_ac_delete'] = 'Eliminato &quot;{subject}&quot; di &quot;{member}&quot; da &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Eliminato l\'utente &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'Eliminato il topic &quot;{topic}&quot; in &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Modificato il post &quot;{message}&quot; da &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Uniti i topic in &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'È stato diviso il topic &quot;{topic}&quot;, dando così origine a &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'È stato spostato il topic &quot;{topic}&quot; da &quot;{board_from}&quot; a &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Modificato il profilo di &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Sono stati rimossi alcuni post più vecchi di {days} giorno/i';
$txt['modlog_ac_news'] = 'Sono state modificate le news';
$txt['modlog_enter_comment'] = 'Inserisci un commento di moderazione';
$txt['modlog_moderation_log'] = 'Registro moderazione';
$txt['modlog_moderation_log_desc'] = 'Di seguito la lista di tutte le azioni effettuate dai moderatori del forum.<br /><strong>Attenzione:</strong> le voci presenti non possono essere rimosse dal registro se sono state create da meno di 24 ore.';
$txt['modlog_no_entries_found'] = 'Al momento non è presente alcun elemento nel registro delle azioni dei moderatori.';
$txt['modlog_remove'] = 'Cancella';
$txt['modlog_removeall'] = 'Cancella tutto';
$txt['modlog_go'] = 'Vai';
$txt['modlog_add'] = 'Vai';
$txt['modlog_search'] = 'Ricerca rapida';
$txt['modlog_by'] = 'Da';
$txt['modlog_id'] = '<em>Cancellato - ID:%1$d</em>';

$txt['modlog_ac_add_warn_template'] = 'Da';
$txt['modlog_ac_modify_warn_template'] = 'È stato modificato il modello di richiamo: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'È stato eliminato il modello di richiamo: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Sono stati aggiunti i seguenti filtri di esclusioni';
$txt['modlog_ac_ban_trigger_member'] = '<em>Utente:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>E-mail:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = '<em>Hostname:</em> {hostname}';

$txt['modlog_admin_log'] = 'Registro di Amministrazione';
$txt['modlog_admin_log_desc'] = 'Di seguito la lista di tutte le azioni effettuate dagli amministratori del forum.<br /><strong>Attenzione:</strong> le voci presenti non possono essere rimosse dal registro se create da meno di 24 ore.';
$txt['modlog_admin_log_no_entries_found'] = 'Al momento non sono presenti elementi nel registro delle azioni degli amministratori.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'È stato aggiornato il forum alla versione {version}';
$txt['modlog_ac_install'] = 'È stata installata la versione {version}';
$txt['modlog_ac_add_board'] = 'È stata aggiunta una nuova sezione: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'È stata modificata la sezione &quot;{board}&quot;';
$txt['modlog_ac_delete_board'] = 'È stata eliminata la sezione &quot;{boardname}&quot;';
$txt['modlog_ac_add_cat'] = 'È stata aggiunta una nuova categoria, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'È stata modificata la categoria &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = 'È stata eliminata la categoria &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = 'È stato eliminato il gruppo &quot;{group}&quot;';
$txt['modlog_ac_add_group'] = 'È stato aggiunto il gruppo &quot;{group}&quot;';
$txt['modlog_ac_edited_group'] = 'È stato modificato il gruppo &quot;{group}&quot;';
$txt['modlog_ac_added_to_group'] = 'È stato aggiunto l\'utente &quot;{member}&quot; al gruppo &quot;{group}&quot;';
$txt['modlog_ac_removed_from_group'] = 'È stato eliminato l\'utente &quot;{member}&quot; dal gruppo &quot;{group}&quot;';
$txt['modlog_ac_removed_all_groups'] = 'È stato eliminato l\'utente &quot;{member}&quot; da tutti i gruppi';

$txt['modlog_ac_remind_member'] = 'È stato inviato un promemoria all\'utente &quot;{member}&quot; per l\'attivazione del proprio account';
$txt['modlog_ac_approve_member'] = 'È stato approvato/attivato l\'account di &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Newsletter inviata';

$txt['modlog_ac_install_package'] = 'Installato il pacchetto: &quot;{package}&quot;, versione {version}';
$txt['modlog_ac_upgrade_package'] = 'Aggiornato il pacchetto: &quot;{package}&quot; alla versione {version}';
$txt['modlog_ac_uninstall_package'] = 'Disinstallato il pacchetto: &quot;{package}&quot;, versione {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'È stato ripristinato il topic &quot;{topic}&quot; da &quot;{board}&quot; a &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Ripristinati dei post da &quot;{subject}&quot; nel topic &quot;{topic}&quot; nella sezione &quot;{board}&quot;';

$txt['modlog_parameter_guest'] = '<em>Visitatore</em>';

?>