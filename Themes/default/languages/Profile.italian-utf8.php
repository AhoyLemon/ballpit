<?php
// Version: 2.0; Profile

global $scripturl, $context;

$txt['no_profile_edit'] = 'Non si ha il permesso di modificare il profilo di questo utente.';
$txt['website_title'] = 'Titolo sito web';
$txt['website_url'] = 'URL sito web';
$txt['signature'] = 'Firma';
$txt['profile_posts'] = 'Post';
$txt['change_profile'] = 'Aggiorna profilo';
$txt['delete_user'] = 'Elimina utente';
$txt['current_status'] = 'Stato corrente:';
$txt['personal_text'] = 'Testo personale';
$txt['personal_picture'] = 'Immagine personalizzata';
$txt['no_avatar'] = 'Nessun avatar';
$txt['choose_avatar_gallery'] = 'Scegli avatar dalla galleria';
$txt['picture_text'] = 'Immagine/Testo';
$txt['reset_form'] = 'Svuota il modulo';
$txt['preferred_language'] = 'Lingua preferita';
$txt['age'] = 'Età';
$txt['no_pic'] = '(nessuna immagine)';
$txt['latest_posts'] = 'Ultimi messaggi di: ';
$txt['additional_info'] = 'Informazioni aggiuntive';
$txt['avatar_by_url'] = 'Inserire l\'indirizzo del proprio avatar (es.: <em>http://www.mypage.com/mypic.gif</em>)';
$txt['my_own_pic'] = 'Ho la mia immagine';
$txt['date_format'] = 'Il formato verrà utilizzato per visualizzare le date all\'interno di tutto il forum.';
$txt['time_format'] = 'Formato per le ore';
$txt['display_name_desc'] = 'Questo è il nome mostrato agli altri utenti.';
$txt['personal_time_offset'] = 'Numero di ore +/- per adeguare l\'orario visualizzato al proprio fuso orario.';
$txt['dob'] = 'Data di nascita';
$txt['dob_month'] = 'Mese (MM)';
$txt['dob_day'] = 'Giorno (GG)';
$txt['dob_year'] = 'Anno (AAAA)';
$txt['password_strength'] = 'Per maggiore sicurezza, si consiglia di utilizzare almeno sei caratteri con una combinazione di lettere, numeri e simboli.';
$txt['include_website_url'] = 'Deve essere specificato se viene inserito un URL.';
$txt['complete_url'] = 'Deve essere un indirizzo valido.';
$txt['your_icq'] = 'Numero ICQ.';
$txt['your_aim'] = 'Nickname di AOL Instant Messenger.';
$txt['your_yim'] = 'Nickname di Yahoo! Instant Messenger.';
$txt['sig_info'] = 'La firma è visualizzata alla fine di ogni post e di ogni messaggio privato. È possibile utilizzare il codice BBC e gli smiley.';
$txt['max_sig_characters'] = 'Limite caratteri: %1$d; rimanenti:';
$txt['send_member_pm'] = 'Invia a questo utente un messaggio privato';
$txt['hidden'] = 'nascosto';
$txt['current_time'] = 'Ora corrente del forum';
$txt['digits_only'] = 'Il campo \'numero dei messaggi\' può contenere solo cifre.';

$txt['language'] = 'Lingua';
$txt['avatar_too_big'] = 'L\'immagine dell\'avatar è troppo grande, è necessario ridimensionarla e riprovare (max';
$txt['invalid_registration'] = 'Data di registrazione non corretta, esempio valido:';
$txt['msn_email_address'] = 'Il tuo indirizzo MSN Messenger.';
$txt['current_password'] = 'Password corrente';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'Per ragioni di sicurezza, è necessario inserire la password corrente per poter modificare il proprio account.';

$txt['timeoffset_autodetect'] = '(determina in automatico)';

$txt['secret_question'] = 'Domanda segreta';
$txt['secret_desc'] = 'Per ottenere un aiuto nel recuperare la password, inserire una domanda alla quale <strong>solo</strong> tu possa rispondere.';
$txt['secret_desc2'] = 'Scegliere la domanda con attenzione, in modo che nessun altro possa indovinare la risposta.';
$txt['secret_answer'] = 'Risposta';
$txt['secret_ask'] = 'Chiedimi la domanda segreta';
$txt['cant_retrieve'] = 'Non è possibile recuperare la password, ma è possibile impostarne una nuova seguendo il link inviato tramite e-mail. è inoltre possibile impostare una nuova password rispondendo correttamente alla domanda segreta.';
$txt['incorrect_answer'] = 'Spiacente, ma non è stata indicata una combinazione valida domanda segreta e risposta nel proprio profilo. Fare clic sul pulsante indietro e usare il metodo predefinito per recuperare la password.';
$txt['enter_new_password'] = 'Inserire la risposta alla domanda segreta e la nuova password che si desidera utilizzare. La password verrà sostituita da quella indicata in caso di risposta corretta.';
$txt['password_success'] = 'La password è stata modificata correttamente.<br />Fare clic <a href="' . $scripturl . '?action=login">qui</a> per effettuare l\'accesso.';
$txt['secret_why_blank'] = 'perché questo campo è vuoto?';

$txt['authentication_reminder'] = 'Promemoria autenticazione';
$txt['password_reminder_desc'] = 'Non c\'è problema se hai dimenticato i tuoi dettagli di accesso, possono essere recuperati! Per iniziare il recupero, inserisci in basso o il tuo nome utente o il tuo indirizzo e-mail.';
$txt['authentication_options'] = 'Seleziona una delle due opzioni sottostanti';
$txt['authentication_openid_email'] = 'Inviami per e-mail un promemoria della mia identità OpenID';
$txt['authentication_openid_secret'] = 'Voglio rispondere alla mia &quot;domanda segreta&quot; per visualizzare l\'identità OpenID';
$txt['authentication_password_email'] = 'Inviami una nuova password';
$txt['authentication_password_secret'] = 'Voglio rispondere alla mia &quot;domanda segreta&quot; per impostare una nuova password';
$txt['openid_secret_reminder'] = 'Please enter your answer to the question below. If you get it correct your OpenID identity will be shown.';
$txt['reminder_openid_is'] = 'L\'identità OpenID associata al tuo account è:<br />&nbsp;&nbsp;&nbsp;&nbsp;<strong>%1$s</strong><br /><br />Prendine nota per un futuro riferimento.';
$txt['reminder_continue'] = 'Continua';

$txt['current_theme'] = 'Tema corrente';
$txt['change'] = '(cambia)';
$txt['theme_preferences'] = 'Preferenze del tema';
$txt['theme_forum_default'] = 'Predefinito del forum o della sezione';
$txt['theme_forum_default_desc'] = 'Questo è il tema predefinito: significa che cambierà in base alle scelte dell\'amministratore e al forum che si sta visualizzando.';

$txt['profileConfirm'] = 'Vuoi rimuovere definitivamente questo utente?';

$txt['custom_title'] = 'Titolo personalizzato';

$txt['lastLoggedIn'] = 'Ultima attività';

$txt['notify_settings'] = 'Impostazioni per le notifiche:';
$txt['notify_save'] = 'Salva impostazioni';
$txt['notify_important_email'] = 'Ricevi per e-mail la newsletter del forum e le comunicazioni importanti.';
$txt['notify_regularity'] = 'Per i topic e le sezioni per le quali ho richiesto la notifica, invia la notifica.';
$txt['notify_regularity_instant'] = 'Istantaneamente';
$txt['notify_regularity_first_only'] = 'Istantaneamente - Solo per la prima risposta non letta';
$txt['notify_regularity_daily'] = 'Giornaliero';
$txt['notify_regularity_weekly'] = 'Settimanale';
$txt['auto_notify'] = 'Attiva le notifiche ogni volta che si scrive un messaggio o si risponde ad una discussione';
$txt['notify_send_types'] = 'Per le discussioni e le sezioni per le quali ho richiesto la notifica, inviami la notifica';
$txt['notify_send_type_everything'] = 'Risposte e moderazione';
$txt['notify_send_type_everything_own'] = 'Moderazione solo se ho iniziato la discussione';
$txt['notify_send_type_only_replies'] = 'Solo le risposte';
$txt['notify_send_type_nothing'] = 'Nulla';
$txt['notify_send_body'] = 'Quando si invia la notifica di risposta a una discussione, invia il messaggio nell\'e-mail (ma non si deve rispondere a queste e-mail)';

$txt['notifications_topics'] = 'Notifiche attive per le discussioni';
$txt['notifications_topics_list'] = 'Si stanno ricevendo le notifiche di risposta per le seguenti discussioni';
$txt['notifications_topics_none'] = 'Al momento non si riceve nessuna notifica di risposta per le discussioni.';
$txt['notifications_topics_howto'] = 'Per ricevere le notifiche di una discussione, fare clic sul pulsante &quot;notifica&quot; durante la visualizzazione della discussione.';
$txt['notifications_boards'] = 'Notifiche attive per le sezioni';
$txt['notifications_boards_list'] = 'Si stanno ricevendo le notifiche di risposta per le seguenti sezioni';
$txt['notifications_boards_none'] = 'Al momento non si riceve alcuna notifica di risposta per le sezioni.';
$txt['notifications_boards_howto'] = 'Per ricevere le notifiche di una sezione, fare clic sul pulsante &quot;notifica&quot; nell\'indice della sezione.';
$txt['notifications_update'] = 'Disattiva notifiche';

$txt['statPanel_showStats'] = 'Statistiche utente per: ';
$txt['statPanel_users_votes'] = 'Numero di voti nei sondaggi';
$txt['statPanel_users_polls'] = 'Numero di sondaggi creati';
$txt['statPanel_total_time_online'] = 'Tempo complessivo trascorso online';
$txt['statPanel_noPosts'] = 'Nessun post di cui parlare!';
$txt['statPanel_generalStats'] = 'Statistiche generali';
$txt['statPanel_posts'] = 'post';
$txt['statPanel_topics'] = 'topic';
$txt['statPanel_total_posts'] = 'Post totali';
$txt['statPanel_total_topics'] = 'Totale discussioni iniziate';
$txt['statPanel_votes'] = 'voti';
$txt['statPanel_polls'] = 'sondaggi';
$txt['statPanel_topBoards'] = 'Sezioni più attive per numero di messaggi';
$txt['statPanel_topBoards_posts'] = '%1$d post dei %2$d post della sezione (%3$01.2f%%)';
$txt['statPanel_topBoards_memberposts'] = '%1$d post dei %2$d post dell\'utente (%3$01.2f%%)';
$txt['statPanel_topBoardsActivity'] = 'Sezioni più attive per visite';
$txt['statPanel_activityTime'] = 'Scrittura messaggi durante il giorno';
$txt['statPanel_activityTime_posts'] = '%1$d post (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'Ora del giorno';

$txt['deleteAccount_warning'] = 'Attenzione: queste operazioni non sono annullabili!';
$txt['deleteAccount_desc'] = 'Da questa pagina è possibile eliminare l\'account e i messaggi di questo utente.';
$txt['deleteAccount_member'] = 'Elimina l\'account di questo utente';
$txt['deleteAccount_posts'] = 'Elimina i post di questo utente';
$txt['deleteAccount_none'] = 'Nessuno';
$txt['deleteAccount_all_posts'] = 'Tutti i messaggi';
$txt['deleteAccount_topics'] = 'Discussioni e messaggi';
$txt['deleteAccount_confirm'] = 'Eliminare definitivamente questo account?';
$txt['deleteAccount_approval'] = 'Si noti che i moderatori del forum dovranno approvare l\'eliminazione di questo account prima della sua effettiva rimozione.';

$txt['profile_of_username'] = 'Profilo di %1$s';
$txt['profileInfo'] = 'Informazioni sul profilo';
$txt['showPosts'] = 'Visualizza post';
$txt['showPosts_help'] = 'Questa sezione ti permette di visualizzare tutti i post inviati da questo utente. N.B: puoi vedere solo i post relativi alle aree dove hai l\'accesso.';
$txt['showMessages'] = 'Post';
$txt['showTopics'] = 'Topics';
$txt['showAttachments'] = 'Attachments';
$txt['statPanel'] = 'Visualizza statistiche';
$txt['editBuddyIgnoreLists'] = 'Lista Amici/Utenti Ignorati';
$txt['editBuddies'] = 'Modifica amici';
$txt['editIgnoreList'] = 'Modifica la lista degli utenti ignorati';
$txt['trackUser'] = 'Traccia utente';
$txt['trackActivity'] = 'Attività';
$txt['trackIP'] = 'Indirizzo IP';

$txt['authentication'] = 'Autenticazione';
$txt['change_authentication'] = 'Da questa sezione puoi cambiare come si effettua il login al forum . Puoi scegliere di utilizzare un account OpenID per l\'identificazione, come di passare ad una username e una password.';

$txt['profileEdit'] = 'Modifica profilo';
$txt['account_info'] = 'Queste sono le impostazioni del proprio account. Questa pagina contiene tutte le informazioni importanti che identificano l\'utente sul forum. Per ragioni di sicurezza, è necessario inserire la password corrente per modificarle.';
$txt['forumProfile_info'] = 'In questa pagina è possibile modificare le informazioni personali. Questi dati verranno utilizzati nel forum. ' . $context['forum_name_html_safe'] . '. Se non si desidera condividere alcune informazioni, sarà sufficiente non inserirle - nessuna informazione è obbligatoria.';
$txt['theme'] = 'Aspetto e visualizzazione';
$txt['theme_info'] = 'Questa sezione permette di personalizzare la visualizzazione e l\'aspetto del forum.';
$txt['notification'] = 'Notifiche ed e-mail';
$txt['notification_info'] = 'SMF permette di ricevere notifiche di risposta alle discussioni, della creazione di nuove discussioni e di annunci sul forum. In questa sezione è possibile modificare queste impostazioni oppure visualizzare le discussioni e le sezioni per cui si stanno ricevendo notifiche.';
$txt['groupmembership'] = 'Appartenenza gruppo';
$txt['groupMembership_info'] = 'In questa sezione del profilo puoi decidere a quali gruppi appartenere.';
$txt['ignoreboards'] = 'Ignora le opzioni della sezione';
$txt['ignoreboards_info'] = 'Questa pagina ti permette di ignorare determinate sezioni. Quando una sezione viene ignorata, non viene mostrato l\'indicatore dei nuovi post nell\'indice del forum. I nuovi post non verranno visualizzati utilizzando il link "post non letti" (non verrà effettuata la ricerca in quelle sezioni). Tuttavia, le sezioni ignorate compariranno ugualmente nell\'indice del forum e verranno indicati i nuovi post. Quando si utilizzerà "risposte non lette", i nuovi post di una sezione ignorata verranno ugualmente indicati.';
$txt['pmprefs'] = 'Messaggi personali';

$txt['profileAction'] = 'Azioni';
$txt['deleteAccount'] = 'Elimina questo account';
$txt['profileSendIm'] = 'Invia messaggio privato';
$txt['profile_sendpm_short'] = 'Invia MP';

$txt['profileBanUser'] = 'Escludi questo utente dal forum';

$txt['display_name'] = 'Nome visualizzato';
$txt['enter_ip'] = 'Inserire IP (intervallo)';
$txt['errors_by'] = 'Messaggi di errore di';
$txt['errors_desc'] = 'Elenco degli errori che l\'utente ha generato o incontrato recentemente.';
$txt['errors_from_ip'] = 'Messaggi di errore dall\'IP (intervallo)';
$txt['errors_from_ip_desc'] = 'Elenco degli errori generati da questo intervallo IP recentemente.';
$txt['ip_address'] = 'Indirizzo IP';
$txt['ips_in_errors'] = 'IP usati nei messaggi di errore';
$txt['ips_in_messages'] = 'IP usati nei post recenti';
$txt['members_from_ip'] = 'utenti con IP (intervallo)';
$txt['members_in_range'] = 'Utenti appartenenti allo stesso intervallo IP';
$txt['messages_from_ip'] = 'Messaggi inseriti da questo IP (intervallo)';
$txt['messages_from_ip_desc'] = 'Elenco di tutti i messaggi inseriti da questo IP (intervallo).';
$txt['most_recent_ip'] = 'Indirizzi IP più recenti';
$txt['why_two_ip_address'] = 'Perché sono elencati due indirizzi IP?';
$txt['no_errors_from_ip'] = 'Nessun messaggio d\'errore proveniente da questo IP (intervallo)';
$txt['no_errors_from_user'] = 'Nessun messaggio d\'errore proveniente da questo utente';
$txt['no_members_from_ip'] = 'Nessun utente disponibile per l\'intervallo IP specificato';
$txt['no_messages_from_ip'] = 'Nessun messaggio disponibile per l\'intervallo IP specificato';
$txt['none'] = 'Nessuno';
$txt['own_profile_confirm'] = 'Si desidera eliminare il proprio account?';
$txt['view_ips_by'] = 'Visualizza gli IP usati da';

$txt['avatar_will_upload'] = 'Carica un avatar';

$txt['activate_changed_email_title'] = 'Indirizzo e-mail modificato';
$txt['activate_changed_email_desc'] = 'Hai modificato il tuo indirizzo e-mail. Per verificare questo indirizzo riceverai una e-mail. Clicca sul link contenuto in essa per riattivare il tuo account.';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'Impossibile spedire l\'e-mail di promemoria.';
$txt['send_email'] = 'Inviare una e-mail a';
$txt['to_ask_password'] = 'per richiedere la password';

$txt['user_email'] = 'Nome utente/e-mail';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'Nuova password per ' . $context['forum_name'];
$txt['reminder_mail'] = 'Questa e-mail è stata inviata a seguito dell\'utilizzo della funzione \'password dimenticata\' su questo account. Per impostare una nuova password seguire questo link';
$txt['reminder_sent'] = 'Una e-mail è stata inviata all\'indirizzo e-mail specificato. Fare clic sul link contenuto nella e-mail per impostare una nuova password.';
$txt['reminder_openid_sent'] = 'La tua attuale identità OpenID è stata inviata al tuo indirizzo e-mail.';
$txt['reminder_set_password'] = 'Imposta password';
$txt['reminder_password_set'] = 'Password impostata con successo';
$txt['reminder_error'] = '%1$s non ha risposto correttamente alla domanda segreta nel tentativo di reimpostare la password dimenticata.';

$txt['registration_not_approved'] = 'Spiacente, questo account non è ancora stato approvato. è possibile modificare l\'indirizzo e-mail seguendo questo link';
$txt['registration_not_activated'] = 'Spiacente, questo account non è ancora stato attivato. è possibile chiedere un reinvio della mail di attivazione seguendo questo link:';

$txt['primary_membergroup'] = 'Gruppo principale';
$txt['additional_membergroups'] = 'Gruppi secondari';
$txt['additional_membergroups_show'] = '[visualizza gruppi secondari]';
$txt['no_primary_membergroup'] = '(nessun gruppo principale)';
$txt['deadmin_confirm'] = 'Procedere con la rimozione dello status di amministratore?';

$txt['account_activate_method_2'] = 'L\'account richiede la riattivazione dopo un cambio di e-mail';
$txt['account_activate_method_3'] = 'L\'account non è approvato';
$txt['account_activate_method_4'] = 'L\'account è in attesa di approvazione per l\'eliminazione';
$txt['account_activate_method_5'] = 'L\'account è un account di un &quot;minorenne&quot; in attesa di approvazione';
$txt['account_not_activated'] = 'L\'account è al momento disattivo';
$txt['account_activate'] = 'attiva';
$txt['account_approve'] = 'approva';
$txt['user_is_banned'] = 'L\'utente è escluso al momento';
$txt['view_ban'] = 'Visualizza';
$txt['user_banned_by_following'] = 'Questo utente è al momento affetto dalle seguenti interdizioni';
$txt['user_cannot_due_to'] = 'L\'utente non può %1$s in base all\'esclusione: &quot;%2$s&quot; ';
$txt['ban_type_post'] = 'scrivere messaggi';
$txt['ban_type_register'] = 'registrarsi';
$txt['ban_type_login'] = 'effettuare l\'accesso';
$txt['ban_type_access'] = 'accedere al forum';

$txt['show_online'] = 'Consenti agli altri utenti di visualizzare il mio stato';

$txt['return_to_post'] = 'Ritorna alla discussione dopo aver inserito un nuovo messaggio';
$txt['no_new_reply_warning'] = 'Non avvisare circa le nuove risposte arrivate durante l\'invio del messaggio.';
$txt['posts_apply_ignore_list'] = 'Nascondi messaggi inviati da utenti contenuti nella mia lista di utenti da ignorare.';
$txt['recent_posts_at_top'] = 'Visualizza prima i post più recenti in ogni discussione';
$txt['recent_pms_at_top'] = 'Visualizza i messaggi privati più recenti nella parte superiore della pagina';
$txt['wysiwyg_default'] = 'Attiva in modo predefinito l\'editor WYSIWYG nella pagina di inserimento dei post.';

$txt['timeformat_default'] = '(predefinito del forum)';
$txt['timeformat_easy1'] = 'Giorno del mese, Anno, HH:MM:SS am/pm';
$txt['timeformat_easy2'] = 'Giorno del Mese, Anno, HH:MM:SS (24 Ore)';
$txt['timeformat_easy3'] = 'AAAA-MM-GG, HH:MM:SS';
$txt['timeformat_easy4'] = 'GG Mese AAAA, HH:MM:SS';
$txt['timeformat_easy5'] = 'GG-MM-AAAA, HH:MM:SS';

$txt['poster'] = 'Autore';

$txt['board_desc_inside'] = 'Visualizza la descrizione della sezione all\'interno delle sezioni.';
$txt['show_children'] = 'Mostra le sottosezioni in ogni pagina della sezione, non solo nella prima';
$txt['use_sidebar_menu'] = 'Quando possibile, utilizza i menu laterali invece dei menu a discesa.';
$txt['show_no_avatars'] = 'Non visualizzare gli avatar degli altri utenti';
$txt['show_no_signatures'] = 'Non visualizzare le firme degli altri utenti';
$txt['show_no_censored'] = 'Disattiva la censura';
$txt['topics_per_page'] = 'Topic da visualizzare per pagina:';
$txt['messages_per_page'] = 'Post da visualizzare per pagina:';
$txt['per_page_default'] = 'forum default';
$txt['calendar_start_day'] = 'Primo giorno della settimana nel calendario';
$txt['display_quick_reply'] = 'Utilizza la risposta rapida: ';
$txt['display_quick_reply1'] = 'non visualizzare';
$txt['display_quick_reply2'] = 'visualizza, nascondi come impostazione predefinita';
$txt['display_quick_reply3'] = 'visualizza, mostra come impostazione predefinita';
$txt['display_quick_mod'] = 'Mostra moderazione veloce come';
$txt['display_quick_mod_none'] = 'non visualizzare';
$txt['display_quick_mod_check'] = 'caselle da spuntare';
$txt['display_quick_mod_image'] = 'icone';

$txt['whois_title'] = 'Individua IP su di un server whois per regione';
$txt['whois_afrinic'] = 'AfriNIC (Africa)';
$txt['whois_apnic'] = 'APNIC (regione del Pacifico asiatico)';
$txt['whois_arin'] = 'ARIN (Nord America, parte degli stati caraibici e dell\'Africa sub sahariana)';
$txt['whois_lacnic'] = 'LACNIC (America Latina e regioni caraibiche)';
$txt['whois_ripe'] = 'RIPE (Europa, Medio Oriente e parte di Africa e Asia)';

$txt['moderator_why_missing'] = 'perché non è moderatore?';
$txt['username_change'] = 'cambia';
$txt['username_warning'] = 'Per cambiare il nome utente di questo utente è necessario reimpostare anche la password che verrà inviata via e-mail all\'utente insieme al nuovo nome.';

$txt['show_member_posts'] = 'Visualizza post dell\'utente';
$txt['show_member_topics'] = 'Visualizza topic dell\'utente';
$txt['show_member_attachments'] = 'Visualizza allegati dell\'utente';
$txt['show_posts_none'] = 'Nessun post è stato ancora aggiunto.';
$txt['show_topics_none'] = 'Nessun topic è stato ancora inviato.';
$txt['show_attachments_none'] = 'Nessun allegato è stato ancora inserito.';
$txt['show_attach_filename'] = 'Filename';
$txt['show_attach_downloads'] = 'Download';
$txt['show_attach_posted'] = 'Inviato';

$txt['showPermissions'] = 'Visualizza permessi';
$txt['showPermissions_status'] = 'Stato dei permessi';
$txt['showPermissions_help'] = 'Questa sezione consente di visualizzare tutti i permessi relativi a questo utente (i permessi negati sono <del>depennati</del>).';
$txt['showPermissions_given'] = 'Fornito da';
$txt['showPermissions_denied'] = 'Negato da';
$txt['showPermissions_permission'] = 'Permessi (i permessi negati sono <del>barrati</del>)';
$txt['showPermissions_none_general'] = 'Questo utente non ha permessi generali impostati.';
$txt['showPermissions_none_board'] = 'Questo utente non ha permessi specifici per sezione.';
$txt['showPermissions_all'] = 'Come amministratore, questo utente ha tutti i permessi disponibili.';
$txt['showPermissions_select'] = 'Permessi specifici per la sezione';
$txt['showPermissions_general'] = 'Permessi generali';
$txt['showPermissions_global'] = 'Tutte le sezioni';
$txt['showPermissions_restricted_boards'] = 'Sezioni con restrizioni';
$txt['showPermissions_restricted_boards_desc'] = 'Le sezioni seguenti non sono accessibili per questo utente';

$txt['local_time'] = 'Ora locale';
$txt['posts_per_day'] = 'per giorno';

$txt['buddy_ignore_desc'] = 'Quest\'area ti permette di gestire la lista degli amici e degli utenti da ignorare. Aggiungere utenti a questa lista ti aiuterà a controllare il traffico di e-mail o di messaggi privati, a seconda delle tue preferenze.';

$txt['buddy_add'] = 'Aggiungi a lista degli amici';
$txt['buddy_remove'] = 'Elimina dalla lista degli amici';
$txt['buddy_add_button'] = 'Aggiungi';
$txt['no_buddies'] = 'La tua lista degli amici è vuota al momento';

$txt['ignore_add'] = 'Aggiungi alla lista di utenti da ignorare';
$txt['ignore_remove'] = 'Rimuovi dalla lista di utenti da ignorare';
$txt['ignore_add_button'] = 'Aggiungi';
$txt['no_ignore'] = 'La tua lista di utenti da ignorare è vuota al momento';

$txt['regular_members'] = 'Utenti registrati';
$txt['regular_members_desc'] = 'Ogni utente del forum è appartenente a questo gruppo.';
$txt['group_membership_msg_free'] = 'La tua appartenenza al gruppo è stata aggiornata con successo.';
$txt['group_membership_msg_request'] = 'La tua richiesta è stata inviata, attendi che questa venga presa in considerazione.';
$txt['group_membership_msg_primary'] = 'Il tuo gruppo primario è stato aggiornato.';
$txt['current_membergroups'] = 'Gruppi utente attuali';
$txt['available_groups'] = 'Gruppi disponibili';
$txt['join_group'] = 'Unisciti al gruppo';
$txt['leave_group'] = 'Lascia il gruppo';
$txt['request_group'] = 'Richiesta di appartenenza';
$txt['approval_pending'] = 'In attesa di approvazione';
$txt['make_primary'] = 'Rendi il gruppo primario';

$txt['request_group_membership'] = 'Richiedi appartenenza al gruppo';
$txt['request_group_membership_desc'] = 'Prima di poterti unire a questo gruppo, la tua richiesta deve essere approvata da un moderatore. Per favore, specifica una motivazione per la quale vuoi unirti a questo gruppo';
$txt['submit_request'] = 'Invia richiesta';

$txt['profile_updated_own'] = 'Il tuo profilo è stato aggiornato con successo.';
$txt['profile_updated_else'] = 'Il profilo di %1$s è stato aggiornato con successo.';

$txt['profile_error_signature_max_length'] = 'La tua firma non può essere più grande di %1$d caratteri';
$txt['profile_error_signature_max_lines'] = 'La tua firma non può superare le %1$d righe';
$txt['profile_error_signature_max_image_size'] = 'Le immagini nella tua firma non possono essere più grandi di %1$dx%2$d pixel';
$txt['profile_error_signature_max_image_width'] = 'Le immagini nella tua firma non possono essere più larghe di %1$d pixel';
$txt['profile_error_signature_max_image_height'] = 'Le immagini nella tua firma non possono essere più alte di %1$d pixel';
$txt['profile_error_signature_max_image_count'] = 'Non puoi avere più di %1$d immagini nella tua firma';
$txt['profile_error_signature_max_font_size'] = 'Il testo nella tua firma non può superare i %1$s di dimensione';
$txt['profile_error_signature_allow_smileys'] = 'Non è consentito utilizzare smiley nelle firme';
$txt['profile_error_signature_max_smileys'] = 'Non puoi utilizzare più di %1$d smiley nella tua firma';
$txt['profile_error_signature_disabled_bbc'] = 'Il seguente codice BBC non è ammesso nella tua firma: %1$s';

$txt['profile_view_warnings'] = 'Visualizzza i richiami';
$txt['profile_issue_warning'] = 'Invia un richiamo';
$txt['profile_warning_level'] = 'Livello di richiamo';
$txt['profile_warning_desc'] = 'Da questa sezione puoi aggiustare il livello di richiamo di un utente e inviargli, se necessario, un richiamo scritto. Puoi anche tracciare la loro cronologia richiami e visualizzare gli effetti dell\'attuale livello di richiamo, come determinato dall\'amministratore.';
$txt['profile_warning_name'] = 'Nome utente';
$txt['profile_warning_impact'] = 'Risultato';
$txt['profile_warning_reason'] = 'Motivo del richiamo';
$txt['profile_warning_reason_desc'] = 'È richiesto e sarà memorizzato.';
$txt['profile_warning_effect_none'] = 'Nessuno.';
$txt['profile_warning_effect_watch'] = 'L\'utente sarà aggiunto alla lista degli utenti monitorati.';
$txt['profile_warning_effect_own_watched'] = 'Sei stato aggiunto alla lista di moderazione.';
$txt['profile_warning_is_watch'] = 'L\'utente è monitorato';
$txt['profile_warning_effect_moderation'] = 'Tutti i post utente saranno moderati.';
$txt['profile_warning_effect_own_moderated'] = 'Tutti i tuoi post saranno da questo momento moderati.';
$txt['profile_warning_is_moderation'] = 'I post dell\'utente sono moderati';
$txt['profile_warning_effect_mute'] = 'L\'utente non potrè inviare post.';
$txt['profile_warning_effect_own_muted'] = 'Non sarai più in grado di inserire post.';
$txt['profile_warning_is_muted'] = 'L\'utente non può inviare post';
$txt['profile_warning_effect_text'] = 'Livello >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Invia una notifica';
$txt['profile_warning_notify_template'] = 'Seleziona template:';
$txt['profile_warning_notify_subject'] = 'Oggetto notifica';
$txt['profile_warning_notify_body'] = 'Messaggio notifica';
$txt['profile_warning_notify_template_subject'] = 'Hai ricevuto un richiamo';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '%1$s,' . "\n\n" . 'Hai ricevuto un richiamo per %2$s. Per favore, evita in futuro questo comportamento e attieniti alle regole del forum, altrimenti verranno presi dei provvedimenti.' . "\n\n" . $txt['regards_team'];
$txt['profile_warning_notify_template_outline_post'] = '%1$s,' . "\n\n" . 'Hai ricevuto un richiamo per %2$s, in merito al tuo post inviato [url=' . $scripturl . '?msg=%3$s]qui[/url]. Per favore, evita in futuro questo comportamento e attieniti alle regole del forum, altrimenti verranno presi dei provvedimenti.' . "\n\n" . $txt['regards_team'];
$txt['profile_warning_notify_for_spamming'] = 'spamming';
$txt['profile_warning_notify_title_spamming'] = 'Spamming';
$txt['profile_warning_notify_for_offence'] = 'post contenenti materiale offensivo';
$txt['profile_warning_notify_title_offence'] = 'Invio post contenenti materiale offensivo';
$txt['profile_warning_notify_for_insulting'] = 'insulto altri utenti e/o membri dello staff';
$txt['profile_warning_notify_title_insulting'] = 'Insulto utenti/stafff';
$txt['profile_warning_issue'] = 'Invia richiamo';
$txt['profile_warning_max'] = '(Max 100)';
$txt['profile_warning_limit_attribute'] = 'N.B: non puoi aggiustare il livello di un utente più di %1$d%% nell\'arco di 24 ore.';
$txt['profile_warning_errors_occured'] = 'Il richiamo non è stato inviato a causa dei seguenti errori';
$txt['profile_warning_success'] = 'Richiamo notificato con successo';
$txt['profile_warning_new_template'] = 'Nuovo template';

$txt['profile_warning_previous'] = 'Richiami precedenti';
$txt['profile_warning_previous_none'] = 'Questo utente non ha ricevuto precedentemente richiami.';
$txt['profile_warning_previous_issued'] = 'Inviato da';
$txt['profile_warning_previous_time'] = 'Ora';
$txt['profile_warning_previous_level'] = 'Punti';
$txt['profile_warning_previous_reason'] = 'Motivo';
$txt['profile_warning_previous_notice'] = 'Visualizza la notifica inviata all\'utente';

$txt['viewwarning'] = 'Visualizza richiami';
$txt['profile_viewwarning_for_user'] = 'Richiami per %1$s';
$txt['profile_viewwarning_no_warnings'] = 'Non sono stati ancora notificati richiami.';
$txt['profile_viewwarning_desc'] = 'In basso è presente un sommario di tutti i richiami notificati dal gruppo moderazione di questo forum.';
$txt['profile_viewwarning_previous_warnings'] = 'Richiami precedenti';
$txt['profile_viewwarning_impact'] = 'Impatto del richiamo';

$txt['subscriptions'] = 'Sottoscrizioni a pagamento';

$txt['pm_settings_desc'] = 'Da questa pagina puoi modificare molte opzioni riguardanti i messaggi privati, tra cui le impostazioni di visualizzazione dei messaggi e chi è abilitato a contattarti tramite essi.';
$txt['email_notify'] = 'Notifica con una e-mail ogni volta che si riceve un messaggio privato:';
$txt['email_notify_never'] = 'Mai';
$txt['email_notify_buddies'] = 'Solo dagli amici';
$txt['email_notify_always'] = 'Sempre';

$txt['pm_receive_from'] = 'Ricevi messaggi privati da:';
$txt['pm_receive_from_everyone'] = 'Tutti gli utenti';
$txt['pm_receive_from_ignore'] = 'Tutti, eccetto quelli nella lista di utenti da ignorare';
$txt['pm_receive_from_admins'] = 'Solamente amministratori';
$txt['pm_receive_from_buddies'] = 'Solamente utenti nella mia lista amici ed amministratori';

$txt['copy_to_outbox'] = 'Salva in modo predefinito una copia di ogni messaggio privato nella mia cartella dei messaggi inviati.';
$txt['popup_messages'] = 'Mostra un popup quando ricevi nuovi messaggi privati.';
$txt['pm_remove_inbox_label'] = 'Rimuovi l\'etichetta della casella ricevuti quando ne viene applicata un\'altra';
$txt['pm_display_mode'] = 'Mostra i messaggi personali';
$txt['pm_display_mode_all'] = 'Tutti';
$txt['pm_display_mode_one'] = 'Uno alla volta';
$txt['pm_display_mode_linked'] = 'Come conversazione';
// Use entities in the below string.
$txt['pm_recommend_enable_outbox'] = 'Per rendere al meglio, ti consigliamo di abilitare &quot;Salva di default una copia di ogni messaggio personale nella casella Inviati&quot;\\n\\nQuesto permetterà alla conversazione di essere più chiara, in quanto potrai vedere i messaggi di entrambe le parti.';

$txt['tracking'] = 'Tracciamento';
$txt['tracking_description'] = 'Questa sezione permette di controllare alcune modifiche effettuate a questo profilo utente e di tracciare i relativi indirizzi IP.';

$txt['trackEdits'] = 'Modifiche profilo';
$txt['trackEdit_deleted_member'] = 'Utente cancellato';
$txt['trackEdit_no_edits'] = 'Fino ad ora non sono state registrate modifiche per questo utente.';
$txt['trackEdit_action'] = 'Campo';
$txt['trackEdit_before'] = 'Valore precedente';
$txt['trackEdit_after'] = 'Valore successivo';
$txt['trackEdit_applicator'] = 'Cambiato da';

$txt['trackEdit_action_real_name'] = 'Nome utente';
$txt['trackEdit_action_usertitle'] = 'Titolo personalizzato';
$txt['trackEdit_action_member_name'] = 'Username';
$txt['trackEdit_action_email_address'] = 'Indirizzo e-mail';
$txt['trackEdit_action_id_group'] = 'Gruppo principale';
$txt['trackEdit_action_additional_groups'] = 'Gruppi addizionali';

?>