<?php
// Version: 2.0; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'it_IT.utf8';
$txt['lang_dictionary'] = 'it';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato');
$txt['days_short'] = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
$txt['months_titles'] = array(1 => 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
$txt['months_short'] = array(1 => 'Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = 'è nuovo';
$txt['newmessages1'] = 'sono nuovi';
$txt['newmessages3'] = 'Nuovi';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Amministra';
$txt['moderate'] = 'Modera';

$txt['save'] = 'Salva';

$txt['modify'] = 'Modifica';
$txt['forum_index'] = '%1$s - Indice';
$txt['members'] = 'Utenti';
$txt['board_name'] = 'Nome sezione';
$txt['posts'] = 'Post';

$txt['member_postcount'] = 'Post';
$txt['no_subject'] = '(Nessun oggetto)';
$txt['view_profile'] = 'Mostra profilo';
$txt['guest_title'] = 'Visitatore';
$txt['author'] = 'Autore';
$txt['on'] = 'il';
$txt['remove'] = 'Rimuovi';
$txt['start_new_topic'] = 'Apri nuovo topic';

$txt['login'] = 'Accedi';
// Use numeric entities in the below string.
$txt['username'] = 'Nome utente';
$txt['password'] = 'Password';

$txt['username_no_exist'] = 'Questo nome utente non esiste.';
$txt['no_user_with_email'] = 'Non sono presenti nome utenti associati a questo indirizzo e-mail.';

$txt['board_moderator'] = 'Moderatore della sezione';
$txt['remove_topic'] = 'Rimuovi topic';
$txt['topics'] = 'Topic';
$txt['modify_msg'] = 'Modifica post';
$txt['name'] = 'Nome';
$txt['email'] = 'E-mail';
$txt['subject'] = 'Oggetto';
$txt['message'] = 'Messaggio';
$txt['redirects'] = 'Reindirizzamenti';
$txt['quick_modify'] = 'Modifica istantanea';

$txt['choose_pass'] = 'Scegli password';
$txt['verify_pass'] = 'Verifica password';
$txt['position'] = 'Posizione';

$txt['profile_of'] = 'Mostra il profilo di';
$txt['total'] = 'Totale';
$txt['posts_made'] = 'Post';
$txt['website'] = 'Sito web';
$txt['register'] = 'Registrati';
$txt['warning_status'] = 'Stato richiami';
$txt['user_warn_watch'] = 'L\'utente è presente nella lista controllata dai moderatori';
$txt['user_warn_moderate'] = 'I post dell\'utente si aggiungono alla coda di post da approvare';
$txt['user_warn_mute'] = 'L\'utente non può inviare post';
$txt['warn_watch'] = 'Controllato';
$txt['warn_moderate'] = 'Moderato';
$txt['warn_mute'] = 'Muto (no invio post)';

$txt['message_index'] = 'Indice dei topic';
$txt['news'] = 'News';
$txt['home'] = 'Indice';

$txt['lock_unlock'] = 'Chiudi/Riapri topic';
$txt['post'] = 'Invia post';
$txt['error_occured'] = 'Si è verificato un errore!';
$txt['at'] = 'su';
$txt['logout'] = 'Esci';
$txt['started_by'] = 'Aperto da';
$txt['replies'] = 'Risposte';
$txt['last_post'] = 'Ultimo post';
$txt['admin_login'] = 'Accesso amministrazione';
// Use numeric entities in the below string.
$txt['topic'] = 'Topic';
$txt['help'] = 'Aiuto';
$txt['notify'] = 'Attiva notifiche';
$txt['unnotify'] = 'Rimuovi notifiche';
$txt['notify_request'] = 'Desideri ricevere una notifica e-mail se questo topic riceve una risposta?';
// Use numeric entities in the below string.
$txt['regards_team'] = "Saluti,\n" . $context['forum_name'];
$txt['notify_replies'] = 'Notifica delle risposte';
$txt['move_topic'] = 'Sposta topic';
$txt['move_to'] = 'Sposta in';
$txt['pages'] = 'Pagine';
$txt['users_active'] = 'Utenti attivi negli ultimi %1$d minuti';
$txt['personal_messages'] = 'Messaggi privati';
$txt['reply_quote'] = 'Rispondi citando';
$txt['reply'] = 'Rispondi';
$txt['reply_noun'] = 'Risposta';
$txt['approve'] = 'Approva';
$txt['approve_all'] = 'approva tutti';
$txt['awaiting_approval'] = 'In attesa di approvazione';
$txt['attach_awaiting_approve'] = 'Allegati in attesa di approvazione';
$txt['post_awaiting_approval'] = 'Nota: Questo post è in attesa di approvazione da parte di un moderatore.';
$txt['there_are_unapproved_topics'] = 'Ci sono %1$s topic e %2$s post in attesa di approvazione per questa area. Vai <a href="%3$s">qui</a> per visualizzarli tutti.';

$txt['msg_alert_none'] = 'Nessun messaggio...';
$txt['msg_alert_you_have'] = 'hai';
$txt['msg_alert_messages'] = 'messaggi';
$txt['remove_message'] = 'Rimuovi messaggio';

$txt['online_users'] = 'Utenti Online';
$txt['personal_message'] = 'Messaggi privati';
$txt['jump_to'] = 'Vai a';
$txt['go'] = 'vai';
$txt['are_sure_remove_topic'] = 'Sei sicuro di voler eliminare questo topic?';
$txt['yes'] = 'Sì';
$txt['no'] = 'No';

$txt['search_end_results'] = 'Fine dei risultati';
$txt['search_on'] = '-';

$txt['search'] = 'Ricerca';
$txt['all'] = 'Tutto';

$txt['back'] = 'Indietro';
$txt['password_reminder'] = 'Promemoria password';
$txt['topic_started'] = 'Topic aperto da';
$txt['title'] = 'Titolo';
$txt['post_by'] = 'Inserito da';
$txt['memberlist_searchable'] = 'Elenco di tutti gli utenti registrati.';
$txt['welcome_member'] = 'Benvenuto';
$txt['admin_center'] = 'Pannello di amministrazione';
$txt['last_edit'] = 'Ultima modifica';
$txt['notify_deactivate'] = 'Desideri disattivare le notifiche per questo topic?';

$txt['recent_posts'] = 'Post recenti';

$txt['location'] = 'Località';
$txt['gender'] = 'Sesso';
$txt['date_registered'] = 'Data di registrazione';

$txt['recent_view'] = 'Mostra gli ultimi post del forum.';
$txt['recent_updated'] = 'è il topic aggiornato più di recente';

$txt['male'] = 'Maschio';
$txt['female'] = 'Femmina';

$txt['error_invalid_characters_username'] = 'È stato usato un carattere non valido nel nome utente.';

$txt['welcome_guest'] = 'Benvenuto! <a href="' . $scripturl . '?action=login">Effettua l\'accesso</a> oppure <a href="' . $scripturl . '?action=register">registrati</a>.';
$txt['login_or_register'] = 'Effettua l\'<a href="' . $scripturl . '?action=login">accesso</a> o una nuova <a href="' . $scripturl . '?action=register">registrazione</a>.';
$txt['welcome_guest_activate'] = '<br />Hai perso <a href="' . $scripturl . '?action=activate">l\'e-mail di attivazione</a>?';
$txt['hello_member'] = 'Ciao';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Benvenuto,';
$txt['welmsg_hey'] = 'Ciao,';
$txt['welmsg_welcome'] = 'Benvenuto,';
$txt['welmsg_please'] = 'Si prega di';
$txt['select_destination'] = 'Scegliere una destinazione';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Inserito da';

$txt['icon_smiley'] = 'Sorriso';
$txt['icon_angry'] = 'Broncio';
$txt['icon_cheesy'] = 'Felice';
$txt['icon_laugh'] = 'Risata';
$txt['icon_sad'] = 'Triste';
$txt['icon_wink'] = 'Occhiolino';
$txt['icon_grin'] = 'Ghigno';
$txt['icon_shocked'] = 'Scioccato';
$txt['icon_cool'] = 'Fico';
$txt['icon_huh'] = 'Attonito';
$txt['icon_rolleyes'] = 'Occhi al cielo';
$txt['icon_tongue'] = 'Linguaccia';
$txt['icon_embarrassed'] = 'Imbarazzato';
$txt['icon_lips'] = 'Bocca cucita';
$txt['icon_undecided'] = 'Indeciso';
$txt['icon_kiss'] = 'Bacio';
$txt['icon_cry'] = 'Pianto';

$txt['moderator'] = 'Moderatore';
$txt['moderators'] = 'Moderatori';

$txt['mark_board_read'] = 'Marca i topic come letti per questa sezione';
$txt['views'] = 'Visite';
$txt['new'] = 'Nuovo';

$txt['view_all_members'] = 'Visualizza tutti gli utenti';
$txt['view'] = 'Visualizza';

$txt['viewing_members'] = 'Visualizzazione degli utenti da %1$s a %2$s';
$txt['of_total_members'] = 'di %1$s utenti totali';

$txt['forgot_your_password'] = 'Smarrito la password?';

$txt['date'] = 'Data';
// Use numeric entities in the below string.
$txt['from'] = 'Da';
$txt['check_new_messages'] = 'Controlla nuovi messaggi';
$txt['to'] = 'A';

$txt['board_topics'] = 'Topic';
$txt['members_title'] = 'Utenti';
$txt['members_list'] = 'Elenco utenti';
$txt['new_posts'] = 'Nuovi post';
$txt['old_posts'] = 'Nessun nuovo post';
$txt['redirect_board'] = 'Redirezionamento';

$txt['sendtopic_send'] = 'Invia';
$txt['report_sent'] = 'Il tuo report è stato inviato con successo';

$txt['time_offset'] = 'Ore di differenza';
$txt['or'] = 'o';

$txt['no_matches'] = 'Spiacente, nessuna corrispondenza trovata';

$txt['notification'] = 'Notifica';

$txt['your_ban'] = '%1$s, sei stato escluso da questo forum!';
$txt['your_ban_expires'] = 'Questa esclusione dal forum terminerà il %1$s.';
$txt['your_ban_expires_never'] = 'Questa esclusione dal forum non ha scadenza.';
$txt['ban_continue_browse'] = 'Puoi continuare a visualizzare il forum come visitatore.';

$txt['mark_as_read'] = 'Marca tutti i post come letti';

$txt['hot_topics'] = 'Topic caldo (più di %1$d risposte)';
$txt['very_hot_topics'] = 'Topic rovente (più di %1$d risposte)';
$txt['locked_topic'] = 'Topic chiuso';
$txt['normal_topic'] = 'Topic normale';
$txt['participation_caption'] = 'Topic a cui hai partecipato';

$txt['go_caps'] = 'Vai';

$txt['print'] = 'Stampa';
$txt['profile'] = 'Profilo';
$txt['topic_summary'] = 'Sommario del topic';
$txt['not_applicable'] = 'N/D';
$txt['message_lowercase'] = 'post';
$txt['name_in_use'] = 'Questo nome è già utilizzato da un altro utente.';

$txt['total_members'] = 'Utenti in totale';
$txt['total_posts'] = 'Post in totale';
$txt['total_topics'] = 'Topic in totale';

$txt['mins_logged_in'] = 'Validità dell\'accesso (in minuti)';

$txt['preview'] = 'Anteprima';
$txt['always_logged_in'] = 'Rimani sempre connesso';

$txt['logged'] = 'Connesso';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'da';

$txt['hours'] = 'ore';
$txt['days_word'] = 'giorni';

$txt['newest_member'] = ', il nostro ultimo iscritto.';

$txt['search_for'] = 'Cerca';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Ciao.+Ci+sei?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'Ricorda, questo forum è in manutenzione.';

$txt['read'] = 'Letto';
$txt['times'] = 'volte';

$txt['forum_stats'] = 'Statistiche forum';
$txt['latest_member'] = 'Ultimo utente';
$txt['total_cats'] = 'Categorie in totale';
$txt['latest_post'] = 'Ultimo post';

$txt['you_have'] = 'Hai';
$txt['click'] = 'Fare click';
$txt['here'] = 'per visualizzarlo';
$txt['to_view'] = '.';

$txt['total_boards'] = 'Sezioni totali';

$txt['print_page'] = 'Pagina di stampa';

$txt['valid_email'] = 'È necessario inserire un indirizzo e-mail valido.';

$txt['geek'] = 'Sono un geek!!';
$txt['info_center_title'] = '%1$s - Centro Informazioni';

$txt['send_topic'] = 'Invia questo topic';

$txt['sendtopic_title'] = 'Invia il topic &quot;%1$s&quot; ad un amico.';
$txt['sendtopic_sender_name'] = 'Il tuo nome';
$txt['sendtopic_sender_email'] = 'Il tuo indirizzo e-mail';
$txt['sendtopic_receiver_name'] = 'Nome destinatario';
$txt['sendtopic_receiver_email'] = 'Indirizzo e-mail destinatario';
$txt['sendtopic_comment'] = 'Aggiungi un commento';

$txt['allow_user_email'] = 'Consenti agli utenti di inviarti e-mail';

$txt['check_all'] = 'Spunta tutto';

// Use numeric entities in the below string.
$txt['database_error'] = 'Errore del Database';
$txt['try_again'] = 'Ritenta! Se riappare questa schermata, segnala il problema ad un amministratore.';
$txt['file'] = 'File';
$txt['line'] = 'Riga';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF ha rilevato un errore nel database ed ha provato a correggerlo automaticamente.  Se il problema persiste o si riceve in continuazione questa e-mail contattare il proprio provider.';
$txt['database_error_versions'] = '<strong>Nota:</strong> Sembra che il tuo database <em>debba</em> essere aggiornato. I file del forum risultano attualmente alla versione %1$s, mentre il database corrisponde alla versione %2$s. Il problema potrebbe essere risolto eseguendo l\'ultima versione del file upgrade.php.';
$txt['template_parse_error'] = 'Errore nella scansione del template!';
$txt['template_parse_error_message'] = 'Sembra che qualcosa si sia bloccato nel sistema di gestione dei modelli del forum.  Il problema dovrebbe essere temporaneo: riprovare in un secondo momento. Se questo messaggio non scompare contattare un amministratore.<br /><br />è anche possibile provare a <a href="javascript:location.reload();">ricaricare la pagina</a>.';
$txt['template_parse_error_details'] = 'Si è verificato un problema caricando il file del modello o della traduzione <tt><strong>%1$s</strong></tt>.  Controlla la sintassi del file e prova di nuovo - fai attenzione agli apostrofi (<tt>\'</tt>): spesso devono essere preceduti dal carattere di escape (<tt>\\</tt>).  Per visualizzare informazioni più dettagliate sull\'errore, prova ad <a href="' . $boardurl . '%1$s">accedere direttamente al file</a>.

Puoi anche provare a <a href="javascript:location.reload();">ricaricare la pagina</a> o <a href="' . $scripturl . '?theme=1">utilizzare il tema predefinito</a>.';

$txt['today'] = '<strong>Oggi</strong> alle ';
$txt['yesterday'] = '<strong>Ieri</strong> alle ';
$txt['new_poll'] = 'Nuovo sondaggio';
$txt['poll_question'] = 'Domanda';
$txt['poll_vote'] = 'Invia voto';
$txt['poll_total_voters'] = 'Totale votanti';
$txt['shortcuts'] = 'scorciatoie: premere alt+s per inviare o alt+p per l\'anteprima';
$txt['shortcuts_firefox'] = 'scorciatoie: clicca shift+alt+s per postare o shift+alt+p per l\'anteprima';
$txt['poll_results'] = 'Visualizza risultati';
$txt['poll_lock'] = 'Chiudi votazioni';
$txt['poll_unlock'] = 'Riapri votazioni';
$txt['poll_edit'] = 'Modifica sondaggio';
$txt['poll'] = 'Sondaggio';
$txt['one_day'] = '1 giorno';
$txt['one_week'] = '1 settimana';
$txt['one_month'] = '1 mese';
$txt['forever'] = 'Sempre';
$txt['quick_login_dec'] = 'Inserisci il nome utente, la password e la durata della sessione.';
$txt['one_hour'] = '1 ora';
$txt['moved'] = 'SPOSTATO';
$txt['moved_why'] = 'Inserire una breve spiegazione sul perché<br />questo topic è stato spostato.';
$txt['board'] = 'Sezione';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Evidenzia topic';

$txt['delete'] = 'Elimina';

$txt['your_pms'] = 'Messaggi privati';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Altre statistiche]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Codice';
$txt['code_select'] = '[Seleziona]';
$txt['quote_from'] = 'Citazione da';
$txt['quote'] = 'Citazione';

$txt['merge_to_topic_id'] = 'ID del topic di destinazione';
$txt['split'] = 'Dividi topic';
$txt['merge'] = 'Unisci topic';
$txt['subject_new_topic'] = 'Titolo del nuovo topic';
$txt['split_this_post'] = 'Dividi solamente questo post.';
$txt['split_after_and_this_post'] = 'Dividi il topic da questo post.';
$txt['select_split_posts'] = 'Scegliere i post da dividere.';
$txt['new_topic'] = 'Nuovo topic';
$txt['split_successful'] = 'Il topic è stato correttamente diviso in due topic distinti.';
$txt['origin_topic'] = 'Topic di origine';
$txt['please_select_split'] = 'Seleziona i post da dividere.';
$txt['merge_successful'] = 'I topic sono stati uniti correttamente.';
$txt['new_merged_topic'] = 'Nuovo topic unito';
$txt['topic_to_merge'] = 'Topic da unire';
$txt['target_board'] = 'Sezione di destinazione';
$txt['target_topic'] = 'Topic di destinazione';
$txt['merge_confirm'] = 'Sei sicuro di voler unire';
$txt['with'] = 'con';
$txt['merge_desc'] = 'Questa funzionalità unirà i post di due topic diversi in uno solo. I post verranno ordinati secondo la data di inserimento, quindi il post più vecchio diventerà il primo del topic unito.';

$txt['set_sticky'] = 'Marca topic come importante';
$txt['set_nonsticky'] = 'Marca topic come non importante';
$txt['set_lock'] = 'Chiudi topic';
$txt['set_unlock'] = 'Riapri topic';

$txt['search_advanced'] = 'Ricerca avanzata';

$txt['security_risk'] = 'GRAVE RISCHIO DI SICUREZZA:';
$txt['not_removed'] = 'Non hai rimosso ';
$txt['not_removed_extra'] = '%1$s è un backup di %2$s non generato da SMF. Può essere usato da malintenzionati per accedere al forum o guadagnare privilegi da amministratore. Dovresti eliminarlo immediatamente.';

$txt['cache_writable_head'] = 'Avviso (prestazioni)';
$txt['cache_writable'] = 'La cartella dedicata alla cache non dispone di adeguati permessi di scrittura, questo inciderà pesantemente sulle prestazioni del tuo forum.';

$txt['page_created'] = 'Pagina creata in ';
$txt['seconds_with'] = ' secondi con ';
$txt['queries'] = ' interrogazioni al database.';

$txt['report_to_mod_func'] = 'Utilizza questa funzione per segnalare ad un amministratore un post offensivo o inserito nella sezione sbagliata.<br /><em>Attenzione: il tuo indirizzo e-mail verrà rivelato ai moderatori all\'invio della segnalazione.</em>';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Messaggio privato (Online)';
$txt['pm_offline'] = 'Messaggio privato (Offline)';
$txt['status'] = 'Stato';

$txt['go_up'] = 'Vai su';
$txt['go_down'] = 'Vai giù';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2011</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Compleanni:';
$txt['events'] = 'Eventi:';
$txt['birthdays_upcoming'] = 'Prossimi compleanni:';
$txt['events_upcoming'] = 'Prossimi eventi:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Mese:';
$txt['calendar_year'] = 'Anno:';
$txt['calendar_day'] = 'Giorno:';
$txt['calendar_event_title'] = 'Titolo evento';
$txt['calendar_event_options'] = 'Opzioni evento';
$txt['calendar_post_in'] = 'Inserito in:';
$txt['calendar_edit'] = 'Modifica evento';
$txt['event_delete_confirm'] = 'Eliminare questo evento?';
$txt['event_delete'] = 'Elimina evento';
$txt['calendar_post_event'] = 'Inserisci evento';
$txt['calendar'] = 'Calendario';
$txt['calendar_link'] = 'Link al calendario';
$txt['calendar_upcoming'] = 'Prossimi eventi';
$txt['calendar_today'] = 'Calendario di oggi';
$txt['calendar_week'] = 'Settimana';
$txt['calendar_week_title'] = 'Settimana %1$d di %2$d ';
$txt['calendar_numb_days'] = 'Numero di giorni:';
$txt['calendar_how_edit'] = 'come modificare questi eventi?';
$txt['calendar_link_event'] = 'Collegamento all\'evento da inserire:';
$txt['calendar_confirm_delete'] = 'Sei sicuro di voler eliminare questo evento?';
$txt['calendar_linked_events'] = 'Eventi collegati';
$txt['calendar_click_all'] = 'Vai qui per vedere tutti %1$s';

$txt['moveTopic1'] = 'Inserisci un topic di reindirizzamento';
$txt['moveTopic2'] = 'Modifica l\'oggetto del topic';
$txt['moveTopic3'] = 'Nuovo oggetto';
$txt['moveTopic4'] = 'Modifica l\'oggetto di ciascun post';
$txt['move_topic_unapproved_js'] = 'Attenzione! Questo topic ancora non è stato approvato.\\n\\nNon è consigliato creare un topic di reindirizzamento, a meno che tu non voglia approvare il post immediatamente dopo.';

$txt['theme_template_error'] = 'Impossibile caricare il template \'%1$s\'.';
$txt['theme_language_error'] = 'Impossibile caricare il file di traduzione \'%1$s\'.';

$txt['parent_boards'] = 'Sotto-sezioni';

$txt['smtp_no_connect'] = 'Impossibile collegarsi al server SMTP';
$txt['smtp_port_ssl'] = 'Impostazione porta SMTP errata; dovrebbe essere 465 per i server SSL.';
$txt['smtp_bad_response'] = 'Impossibile ottenere una risposta dal server di posta elettronica';
$txt['smtp_error'] = 'Si sono verificati dei problemi nell\'invio dell\'e-mail. Errore: ';
$txt['mail_send_unable'] = 'Impossibile inviare una mail all\'indirizzo \'%1$s\'';

$txt['mlist_search'] = 'Cerca utente';
$txt['mlist_search_again'] = 'Cerca ancora';
$txt['mlist_search_email'] = 'Cerca per indirizzo e-mail';
$txt['mlist_search_messenger'] = 'Cerca per nickname di MSN Messenger';
$txt['mlist_search_group'] = 'Cerca per posizione';
$txt['mlist_search_name'] = 'Cerca per nome';
$txt['mlist_search_website'] = 'Cerca per sito';
$txt['mlist_search_results'] = 'Cerca nei risultati per';
$txt['mlist_search_by'] = 'Cerca per %1$s';
$txt['mlist_menu_view'] = 'Visualizza la lista degli utenti';

$txt['attach_downloaded'] = 'scaricato';
$txt['attach_viewed'] = 'visualizzato';
$txt['attach_times'] = 'volte';

$txt['settings'] = 'Impostazioni';
$txt['never'] = 'Mai';
$txt['more'] = 'ancora';

$txt['hostname'] = 'Nome host';
$txt['you_are_post_banned'] = 'Spiacente %1$s, sei stato escluso da questo forum, non puoi più aggiungere post o inviare messaggi privati.';
$txt['ban_reason'] = 'Motivazione';

$txt['tables_optimized'] = 'Tabelle del database ottimizzate';

$txt['add_poll'] = 'Aggiungi sondaggio';
$txt['poll_options6'] = 'Puoi selezionare un massimo di %1$s opzioni.';
$txt['poll_remove'] = 'Rimuovi sondaggio';
$txt['poll_remove_warn'] = 'Sei sicuro di voler rimuovere questo sondaggio dal topic?';
$txt['poll_results_expire'] = 'I risultati verranno mostrati a votazione conclusa';
$txt['poll_expires_on'] = 'Le votazioni chiudono';
$txt['poll_expired_on'] = 'Le votazioni sono chiuse';
$txt['poll_change_vote'] = 'Rimuovi voto';
$txt['poll_return_vote'] = 'Opzioni di voto';
$txt['poll_cannot_see'] = 'Al momento, non è possibile vedere i risultati di questo sondaggio.';

$txt['quick_mod_approve'] = 'Approva i selezionati';
$txt['quick_mod_remove'] = 'Rimuovi selezionate';
$txt['quick_mod_lock'] = 'Chiudi/Apri selezionate';
$txt['quick_mod_sticky'] = 'Imposta/Togli i selezionati in evidenza';
$txt['quick_mod_move'] = 'Sposta selezionati in';
$txt['quick_mod_merge'] = 'Unisci selezionati';
$txt['quick_mod_markread'] = 'Marca selezionati come letti';
$txt['quick_mod_go'] = 'Vai!';
$txt['quickmod_confirm'] = 'Sei sicuro di volerlo fare?';

$txt['spell_check'] = 'Controllo ortografico';

$txt['quick_reply'] = 'Risposta rapida';
$txt['quick_reply_desc'] = 'Con la <em>Risposta Rapida</em> puoi inserire un messaggio senza caricare una nuova pagina. Puoi continuare ad usare il BB Code e gli smiley come in un normale post.';
$txt['quick_reply_warning'] = 'Attenzione: questo topic è - almeno per il momento - chiuso! Possono aggiungere risposte solamente amministratori e moderatori.';
$txt['quick_reply_verification'] = 'Dopo l\'invio sarai reindirizzato alla pagina del post per verificarlo %1$s.';
$txt['quick_reply_verification_guests'] = '(richiesta per tutti i visitatori)';
$txt['quick_reply_verification_posts'] = '(richiesta per tutti gli utenti con meno di %1$d post)';
$txt['wait_for_approval'] = 'Nota: questo post verrà visualizzato solamente dopo essere stato approvato da un moderatore.';

$txt['notification_enable_board'] = 'Sei sicuro di voler attivare le notifiche per i nuovi topic aperti in questa sezione?';
$txt['notification_disable_board'] = 'Sei sicuro di voler disattivare le notifiche per i nuovi topic aperti in questa sezione?';
$txt['notification_enable_topic'] = 'Sei sicuro di voler attivare le notifiche per i nuovi post aggiunti a questo topic?';
$txt['notification_disable_topic'] = 'Sei sicuro di voler disattivare le notifiche per i nuovi post aggiunti a questo topic?';

$txt['report_to_mod'] = 'Segnala al moderatore';
$txt['issue_warning_post'] = 'Notifica un richiamo per questo post';

$txt['unread_topics_visit'] = 'Topic recenti non letti';
$txt['unread_topics_visit_none'] = 'Nessun topic non letto dall\'ultima visita.  <a href="' . $scripturl . '?action=unread;all">Mostra tutti i topic non letti</a>.';
$txt['unread_topics_all'] = 'Tutti i topic non letti';
$txt['unread_replies'] = 'Topic aggiornati';

$txt['who_title'] = 'Chi è collegato';
$txt['who_and'] = ' e ';
$txt['who_viewing_topic'] = ' stanno visualizzando questo topic.';
$txt['who_viewing_board'] = ' stanno visualizzando questa sezione.';
$txt['who_member'] = 'Utente';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'CSS valido!';

// Current footer strings
$txt['valid_html'] = 'HTML 4.01 valido!';
$txt['valid_xhtml'] = 'XHTML 1.0 valido!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Visitatore';
$txt['guests'] = 'Visitatori';
$txt['user'] = 'Utente';
$txt['users'] = 'Utenti';
$txt['hidden'] = 'Nascosti';
$txt['buddy'] = 'Amico';
$txt['buddies'] = 'Amici';
$txt['most_online_ever'] = 'Record assoluto di presenze';
$txt['most_online_today'] = 'Record odierno di presenze';

$txt['merge_select_target_board'] = 'Scegliere la sezione di destinazione per il topic unito';
$txt['merge_select_poll'] = 'Scegliere quale sondaggio dovrà avere il topic unito';
$txt['merge_topic_list'] = 'Scegliere i topic da unire';
$txt['merge_select_subject'] = 'Scegliere l\'oggetto per il topic unito';
$txt['merge_custom_subject'] = 'Oggetto personalizzato';
$txt['merge_enforce_subject'] = 'Modifica l\'oggetto di tutti i post';
$txt['merge_include_notifications'] = 'Includi le notifiche?';
$txt['merge_check'] = 'Unisci?';
$txt['merge_no_poll'] = 'Nessun sondaggio';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Icona corrente';
$txt['message_icon'] = 'Icona del post';

$txt['smileys_current'] = 'Pacchetto di emoticon corrente';
$txt['smileys_none'] = 'Nessuna emoticon';
$txt['smileys_forum_board_default'] = 'Predefinito del forum/sezione';

$txt['search_results'] = 'Risultati ricerca';
$txt['search_no_results'] = 'Non è stata trovata alcuna corrispondenza';

$txt['totalTimeLogged1'] = 'Tempo di connessione totale: ';
$txt['totalTimeLogged2'] = ' giorni, ';
$txt['totalTimeLogged3'] = ' ore e ';
$txt['totalTimeLogged4'] = ' minuti.';
$txt['totalTimeLogged5'] = 'g ';
$txt['totalTimeLogged6'] = 'ore';
$txt['totalTimeLogged7'] = 'minuti';

$txt['approve_thereis'] = 'C\'è';
$txt['approve_thereare'] = 'Ci sono';
$txt['approve_member'] = 'un utente';
$txt['approve_members'] = 'utenti';
$txt['approve_members_waiting'] = 'in attesa di approvazione.';

$txt['notifyboard_turnon'] = 'Sei sicuro di voler ricevere una notifica quando viene aperto un nuovo topic in questa sezione?';
$txt['notifyboard_turnoff'] = 'Sei sicuro di non voler ricevere le notifiche per i nuovi topic aperti in questa sezione?';

$txt['activate_code'] = 'Il codice di attivazione è';

$txt['find_members'] = 'Cerca un utente';
$txt['find_username'] = 'Nome, nome utente o indirizzo e-mail';
$txt['find_buddies'] = 'Mostrare solo gli amici?';
$txt['find_wildcards'] = 'Caratteri jolly consentiti: *, ?';
$txt['find_no_results'] = 'Nessuna corrispondenza trovata';
$txt['find_results'] = 'Risultati';
$txt['find_close'] = 'Chiudi';

$txt['unread_since_visit'] = 'Mostra i topic non letti dall\'ultima visita';
$txt['show_unread_replies'] = 'Mostra le nuove risposte ai topic a cui hai partecipato';

$txt['change_color'] = 'Modifica colore';

$txt['quickmod_delete_selected'] = 'Elimina selezionati';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Hai ricevuto uno o più messaggi privati.\\nVisualizzarli adesso (in una nuova finestra)?';

$txt['previous_next_back'] = '&laquo; precedente';
$txt['previous_next_forward'] = 'successivo &raquo;';

$txt['movetopic_auto_board'] = '[SEZIONE]';
$txt['movetopic_auto_topic'] = '[LINK TOPIC]';
$txt['movetopic_default'] = 'Questo topic è stato spostato in ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Riduce o espande la testata.';

$txt['mark_unread'] = 'Marca come non letto';

$txt['ssi_not_direct'] = 'Non accedere al file SSI.php tramite URL diretto; utilizzare il percorso(%1$s) o aggiungere ?ssi_function=qualcosa.';
$txt['ssi_session_broken'] = 'SSI.php non è riuscito a caricare la sessione! Questo potrebbe provocare lcuni problemi nella disconnessione e in altre funzioni - assicurarsi che SSI.php sia incluso prima di *qualsiasi* altra cosa negli script!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Anteprima post';
$txt['preview_fetch'] = 'Recupero anteprima in corso...';
$txt['preview_new'] = 'Nuovo post';
$txt['error_while_submitting'] = 'Il seguente errore o i seguenti errori si sono verificati durante l\'invio del post:';
$txt['error_old_topic'] = 'Attenzione: non sono stati aggiunti messaggi in questo topic negli ultimi %1$d giorni.<br />A meno che tu non voglia realmente rispondere, prendi in considerazione l\'idea di iniziare un nuovo topic.';

$txt['split_selected_posts'] = 'Post selezionati';
$txt['split_selected_posts_desc'] = 'I post qui sotto formeranno un nuovo topic dopo la divisione.';
$txt['split_reset_selection'] = 'azzera selezione';

$txt['modify_cancel'] = 'Annulla';
$txt['mark_read_short'] = 'Marca come letti';

$txt['pm_short'] = 'Messaggi privati';
$txt['pm_menu_read'] = 'Leggi i tuoi messaggi';
$txt['pm_menu_send'] = 'Invia un messaggio privato';

$txt['hello_member_ndt'] = 'Salve';

$txt['unapproved_posts'] = 'Post non approvati (Topic: %1$d, Post: %2$d) ';

$txt['ajax_in_progress'] = 'Caricamento in corso...';

$txt['mod_reports_waiting'] = 'Sono presenti attualmente %1$d segnalazioni aperte.';

$txt['view_unread_category'] = 'Post non letti';
$txt['verification'] = 'Verifica';
$txt['visual_verification_description'] = 'Digita le lettere visualizzate nell\'immagine';
$txt['visual_verification_sound'] = 'Ascolta le lettere visualizzate';
$txt['visual_verification_request_new'] = 'Carica una nuova immagine';

// Sub menu labels
$txt['summary'] = 'Sommario';
$txt['account'] = 'Impostazioni account';
$txt['forumprofile'] = 'Profilo forum';

$txt['modSettings_title'] = 'Funzioni ed opzioni';
$txt['package'] = 'Gestore Pacchetti';
$txt['errlog'] = 'Registro errori';
$txt['edit_permissions'] = 'Permessi';
$txt['mc_unapproved_attachments'] = 'Allegati non approvati';
$txt['mc_unapproved_poststopics'] = 'Post e topic non approvati';
$txt['mc_reported_posts'] = 'Post segnalati';
$txt['modlog_view'] = 'Registro moderazione';
$txt['calendar_menu'] = 'Visualizza calendario';

//!!! Send email strings - should move?
$txt['send_email'] = 'Invia e-mail';
$txt['send_email_disclosed'] = 'Nota: sarà visibile al destinatario.';
$txt['send_email_subject'] = 'Oggetto e-mail';

$txt['ignoring_user'] = 'Stai ignorando questo utente.';
$txt['show_ignore_user_post'] = 'Mostrami il post.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spider';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Download';
$txt['filesize'] = 'Dimensione file';
$txt['subscribe_webslice'] = 'Iscriviti a Webslice';

// Restore topic
$txt['restore_topic'] = 'Ripristina topic';
$txt['restore_message'] = 'Ripristina';
$txt['quick_mod_restore'] = 'Ripristina selezionati';

// Editor prompt.
$txt['prompt_text_email'] = 'Inserisci l\'indirizzo e-mail.';
$txt['prompt_text_ftp'] = 'Inserisci l\'indirizzo FTP.';
$txt['prompt_text_url'] = 'Inserisci il collegamento da aggiungere.';
$txt['prompt_text_img'] = 'Inserisci il percorso dell\'immagine';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Rimuovi elemento';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Template:';
$txt['debug_subtemplates'] = 'Sotto-template:';
$txt['debug_language_files'] = 'File di traduzione:';
$txt['debug_stylesheets'] = 'Fogli di stile:';
$txt['debug_files_included'] = 'File inclusi:';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'mostra';
$txt['debug_cache_hits'] = 'Accessi alla cache:';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s byte';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss per %2$s byte';
$txt['debug_queries_used'] = 'Interrogazioni utilizzate: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Interrogazioni utilizzate: %1$d, %2$d avvisi.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> riga <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'in %1$s secondi.';
$txt['debug_query_which_took_at'] = 'in %1$s secondi a %2$s su richiesta';
$txt['debug_show_queries'] = '[Visualizza Interrogazioni] ';
$txt['debug_hide_queries'] = '[Nascondi Interrogazioni] ';

?>