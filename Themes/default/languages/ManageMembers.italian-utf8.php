<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'Gruppi';
$txt['viewing_groups'] = 'Visualizzazione gruppi utente';

$txt['membergroups_title'] = 'Gestione gruppi utente';
$txt['membergroups_description'] = 'I gruppi utente riuniscono tutti coloro che hanno autorizzazioni di accesso, permessi o impostazioni di visualizzazione simili. Alcuni gruppi si basano sulla quantità di messaggi inviati da un utente. È possibile assegnare un gruppo ad un utente semplicemente selezionando la relativa impostazione nel suo profilo.';
$txt['membergroups_modify'] = 'Modifica';

$txt['membergroups_add_group'] = 'Aggiungi gruppo';
$txt['membergroups_regular'] = 'Gruppi normali';
$txt['membergroups_post'] = 'Gruppi basati sul numero di messaggi';

$txt['membergroups_group_name'] = 'Nome del gruppo';
$txt['membergroups_new_board'] = 'Sezioni visibili';
$txt['membergroups_new_board_desc'] = 'Sezioni che il gruppo può vedere';
$txt['membergroups_new_board_post_groups'] = '<em>Nota: solitamente i gruppi basati sui messaggi non necessitano di accesso poich&#233; il gruppo di cui l\'utente fa parte gli garantisce l\'accesso.</em>';
$txt['membergroups_new_as_inherit'] = 'eredita da';
$txt['membergroups_new_as_type'] = 'per tipo';
$txt['membergroups_new_as_copy'] = 'sulla base di';
$txt['membergroups_new_copy_none'] = '(nessuno)';
$txt['membergroups_can_edit_later'] = 'Puoi modificarli successivamente.';

$txt['membergroups_edit_group'] = 'Modifica gruppo di utenti';
$txt['membergroups_edit_name'] = 'Nome del gruppo';
$txt['membergroups_edit_inherit_permissions'] = 'Copia permessi';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Seleziona "No" per abilitare i gruppi che hanno il proprio set di permessi.';
$txt['membergroups_edit_inherit_permissions_no'] = 'No - Utilizza permessi unici';
$txt['membergroups_edit_inherit_permissions_from'] = 'Importa da';
$txt['membergroups_edit_hidden'] = 'Visibilità';
$txt['membergroups_edit_hidden_no'] = 'Visibile';
$txt['membergroups_edit_hidden_boardindex'] = 'Visibile - Eccetto nella legenda dei gruppi';
$txt['membergroups_edit_hidden_all'] = 'Invisibile';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Vuoi veramente disattivare l\'assegnazione di questo gruppo come primario per gli utenti?\\n\\Cos&#236; facendo verrà ristretta l\'assegnazione ai soli gruppi aggiuntivi e tutti gli utenti verranno aggiornati in maniera tale da poterlo scegliere solo come gruppo addizionale.';
$txt['membergroups_edit_desc'] = 'Descrizione del gruppo';
$txt['membergroups_edit_group_type'] = 'Tipo di gruppo';
$txt['membergroups_edit_select_group_type'] = 'Seleziona tipo di gruppo';
$txt['membergroups_group_type_private'] = 'Privato <span class="smalltext">(L\'appartenenza al gruppo deve essere assegnata)</span>';
$txt['membergroups_group_type_protected'] = 'Protetto <span class="smalltext">(Solo gli amministratori possono gestirlo ed assegnarlo)</span>';
$txt['membergroups_group_type_request'] = 'A richiesta <span class="smalltext">(Gli utenti possono richiederne l\'appartenenza)</span>';
$txt['membergroups_group_type_free'] = 'Libero <span class="smalltext">(Gli utenti sono abilitati ad unirsi ed abbandonare il gruppo)</span>';
$txt['membergroups_group_type_post'] = 'Numero di post <span class="smalltext">(Appartenenza al gruppo assegnata dopo il raggiungimento di un certo numero di post)</span>';
$txt['membergroups_min_posts'] = 'Messaggi richiesti';
$txt['membergroups_online_color'] = 'Colore nella lista degli utenti connessi';
$txt['membergroups_star_count'] = 'Numero di stelle';
$txt['membergroups_star_image'] = 'Nome del file stella';
$txt['membergroups_star_image_note'] = 'puoi utilizzare $language per la lingua dell\'utente';
$txt['membergroups_max_messages'] = 'Numero massimo messaggi privati';
$txt['membergroups_max_messages_note'] = '0 = illimitato';
$txt['membergroups_edit_save'] = 'Registra';
$txt['membergroups_delete'] = 'Elimina';
$txt['membergroups_confirm_delete'] = 'Sei sicuro di voler eliminare questo gruppo?';

$txt['membergroups_members_title'] = 'Visualizzazione di tutti gli utenti di un gruppo';
$txt['membergroups_members_group_members'] = 'Utenti del gruppo';
$txt['membergroups_members_no_members'] = 'Questo gruppo è attualmente vuoto';
$txt['membergroups_members_add_title'] = 'Aggiungi un utente a questo gruppo';
$txt['membergroups_members_add_desc'] = 'Elenco degli utenti da aggiungere';
$txt['membergroups_members_add'] = 'Aggiungi utenti';
$txt['membergroups_members_remove'] = 'Rimuovi dal gruppo';
$txt['membergroups_members_last_active'] = 'Attivo l\'ultima volta';
$txt['membergroups_members_additional_only'] = 'Aggiungi solo come gruppo aggiuntivo.';
$txt['membergroups_members_group_moderators'] = 'Moderatori del gruppo';
$txt['membergroups_members_description'] = 'Descrizione';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Vuoi veramente rimuovere te stesso dal gruppo Amministrazione?';

$txt['membergroups_postgroups'] = 'Gruppi basati sui messaggi';
$txt['membergroups_settings'] = 'Impostazioni gruppi';
$txt['groups_manage_membergroups'] = 'Gruppi che possono cambiare i gruppi di utenti';
$txt['membergroups_select_permission_type'] = 'Seleziona profilo di permessi';
$txt['membergroups_images_url'] = '{URL tema}/images/';
$txt['membergroups_select_visible_boards'] = 'Mostra sezioni';
$txt['membergroups_members_top'] = 'Utenti';
$txt['membergroups_name'] = 'Nome';
$txt['membergroups_stars'] = 'Stelle';

$txt['admin_browse_approve'] = 'Utenti i cui account attendono approvazione';
$txt['admin_browse_approve_desc'] = 'Da qui è possibile gestire tutti gli utenti che attendono l\'approvazione del proprio account.';
$txt['admin_browse_activate'] = 'Utenti i cui account attendono attivazione';
$txt['admin_browse_activate_desc'] = 'Questa pagina elenca tutti gli utenti che non hanno ancora attivato il proprio account sul forum.';
$txt['admin_browse_awaiting_approval'] = 'In attesa di approvazione (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'In attesa di attivazione (%1$d)';

$txt['admin_browse_username'] = 'Nome utente';
$txt['admin_browse_email'] = 'Indirizzo e-mail';
$txt['admin_browse_ip'] = 'Indirizzo IP';
$txt['admin_browse_registered'] = 'Registrato';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Con elementi selezionati';
$txt['admin_browse_no_members_approval'] = 'Nessun utente attende approvazione al momento.';
$txt['admin_browse_no_members_activate'] = 'Nessun utente deve attivare il proprio account al momento.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'tutti gli utenti selezionati?';
$txt['admin_browse_outstanding_warn'] = 'tutti gli utenti interessati?';
$txt['admin_browse_w_approve'] = 'Approva';
$txt['admin_browse_w_activate'] = 'Attiva';
$txt['admin_browse_w_delete'] = 'Elimina';
$txt['admin_browse_w_reject'] = 'Rifiuta';
$txt['admin_browse_w_remind'] = 'Ricorda';
$txt['admin_browse_w_approve_deletion'] = 'Approva (elimina account)';
$txt['admin_browse_w_email'] = 'e invia e-mail';
$txt['admin_browse_w_approve_require_activate'] = 'Approva e richiedi attivazione';

$txt['admin_browse_filter_by'] = 'Filtra per';
$txt['admin_browse_filter_show'] = 'In visualizzazione';
$txt['admin_browse_filter_type_0'] = 'Nuovi account non attivati';
$txt['admin_browse_filter_type_2'] = 'Cambiamenti di e-mail non attivati';
$txt['admin_browse_filter_type_3'] = 'Nuovi account non approvati';
$txt['admin_browse_filter_type_4'] = 'Eliminazioni account non approvate';
$txt['admin_browse_filter_type_5'] = 'Account "minorenni" non approvati';

$txt['admin_browse_outstanding'] = 'Utenti rimanenti';
$txt['admin_browse_outstanding_days_1'] = 'Con tutti gli utenti che si sono registrati più di';
$txt['admin_browse_outstanding_days_2'] = 'giorni fa';
$txt['admin_browse_outstanding_perform'] = 'Esegui la seguente azione';
$txt['admin_browse_outstanding_go'] = 'Esegui azione';

$txt['check_for_duplicate'] = 'Controlla i duplicati';
$txt['dont_check_for_duplicate'] = 'Non controllare i duplicati';
$txt['duplicates'] = 'Duplicati';

$txt['not_activated'] = 'Non attivato';

?>