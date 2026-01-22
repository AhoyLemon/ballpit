<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Non sei autorizzato ad accedere a questa sezione';
$txt['wireless_error_notyet'] = 'Al momento questa sezione non è disponibile per gli utenti connessi alla versione mobile.';

$txt['mods_only'] = 'Solo i moderatori possono usare la funzione di cancellazione diretta: rimuovi questo post utilizzando la funzionalità di modifica.';
$txt['no_name'] = 'Non è stato compilato il campo del nome (obbligatorio).';
$txt['no_email'] = 'Non è stato compilato il campo e-mail (obbligatorio).';
$txt['topic_locked'] = 'Questo topic è chiuso, non hai permessi adeguati per aggiungere o modificare alcun post...';
$txt['no_password'] = 'Non è stato compilato il campo password (obbligatorio)';
$txt['already_a_user'] = 'Il nome utente indicato è già esistente.';
$txt['cant_move'] = 'Non sei autorizzato a spostare i topic...';
$txt['login_to_post'] = 'Per inserire un post è necessario effettuare l\'accesso. Se non possiedi ancora un account puoi <a href="' . $scripturl . '?action=register">registrarti</a>.';
$txt['passwords_dont_match'] = 'Le password inserite non coincidono.';
$txt['register_to_use'] = 'Spiacente, è necessario essere registrati per utilizzare questa funzione.';
$txt['password_invalid_character'] = 'Hai stato utilizzato un carattere non valido nella password.';
$txt['name_invalid_character'] = 'Hai stato utilizzato un carattere non valido nel nome.';
$txt['email_invalid_character'] = 'Hai stato utilizzato un carattere non valido nell\'e-mail.';
$txt['username_reserved'] = 'Il nome utente inserito contiene il nome riservato \'%1$s\'. Prova con un altro nome.';
$txt['numbers_one_to_nine'] = 'Questo campo accetta solo numeri da 0 a 9';
$txt['not_a_user'] = 'L\'utente di cui stai cercando di visualizzare il profilo, non è più registrato.';
$txt['not_a_topic'] = 'Questo topic non esiste in questa sezione.';
$txt['not_approved_topic'] = 'Questo topic non è stato ancora approvato.';
$txt['email_in_use'] = 'L\'indirizzo e-mail (%1$s) è già utilizzato da un altro utente. Se ritieni sia un errore, vai alla pagina di login e utilizza il promemoria della password per questo indirizzo.';

$txt['didnt_select_vote'] = 'Non hai scelto alcuna opzione di voto.';
$txt['poll_error'] = 'Il sondaggio è inesistente, è stato chiuso o stai tentando di votare una seconda volta.';
$txt['members_only'] = 'Questa opzione è disponibile solamente per gli utenti registrati.';
$txt['locked_by_admin'] = 'Chiuso da un amministratore. Non è possibile riaprirlo.';
$txt['not_enough_posts_karma'] = 'Non hai abbastanza post per poter modificare il karma. Sono necessari almeno %1$d post.';
$txt['cant_change_own_karma'] = 'Non puoi modificare il tuo karma.';
$txt['karma_wait_time'] = 'Non puoi modificare il karma di questo utente senza prima aver atteso %1$s %2$s.';
$txt['feature_disabled'] = 'Spiacente, questa funzione non è attiva.';
$txt['cant_access_upload_path'] = 'Impossibile accedere al percorso di caricamento degli allegati!';
$txt['file_too_big'] = 'Il file è troppo grande. La dimensione massima concessa per un allegato è di %1$d KB.';
$txt['attach_timeout'] = 'L\'allegato non può essere salvato. La causa è da ricercare nel tempo di caricamento troppo lungo o nella dimensione del file, superiore a quella ammessa dal server.<br /><br />Consultare l\'amministratore del server per ulteriori informazioni.';
$txt['filename_exists'] = 'È già presente un allegato con lo stesso nome di quello che stai provando a caricare. Rinomina il file e prova a caricarlo nuovamente.';
$txt['bad_attachment'] = 'Il tuo allegato non ha superato i controlli di sicurezza e non può essere caricato. Consulta l\'amministratore del forum.';
$txt['ran_out_of_space'] = 'La cartella dedicata ai file caricati è piena. Prova con un file di dimensioni inferiori e/o contatta un amministratore.';
$txt['couldnt_connect'] = 'Impossibile collegarsi al server o trovare il file';
$txt['no_board'] = 'La sezione specificata non esiste';
$txt['cant_split'] = 'Non hai il permesso di dividere i topic';
$txt['cant_merge'] = 'Non hai il permesso di unire i topic';
$txt['no_topic_id'] = 'Hai specificato un ID di topic non valido.';
$txt['split_first_post'] = 'Non è possibile dividere un topic al primo post.';
$txt['topic_one_post'] = 'Questo topic contiene solamente un post e non può essere diviso.';
$txt['no_posts_selected'] = 'nessun post selezionato';
$txt['selected_all_posts'] = 'Impossibile dividere. Hai selezionato tutti i post presenti.';
$txt['cant_find_messages'] = 'Impossibile trovare dei post';
$txt['cant_find_user_email'] = 'Impossibile trovare l\'indirizzo e-mail dell\'utente';
$txt['cant_insert_topic'] = 'Impossibile inserire un topic';
$txt['already_a_mod'] = 'Hai scelto il nome utente di un moderatore già esistente. Prova con un altro nome.';
$txt['session_timeout'] = 'Durante l\'inserimento la sessione è scaduta. Torna indietro e riprova.';
$txt['session_verify_fail'] = 'Sessione di verifica fallita. Prova a scollegarti, tornare indietro e tentare di nuovo.';
$txt['verify_url_fail'] = 'Impossibile verificare l\'indirizzo referrer. Torna indietro e riprova.';
$txt['guest_vote_disabled'] = 'Gli ospiti non possono votare in questo sondaggio.';

$txt['cannot_access_mod_center'] = 'Non sei autorizzato ad accedere al centro di moderazione.';
$txt['cannot_admin_forum'] = 'Non sei autorizzato ad amministrare questo forum.';
$txt['cannot_announce_topic'] = 'Non hai permessi adeguati per annunciare topic in questa sezione.';
$txt['cannot_approve_posts'] = 'Non hai permessi adeguati per approvare questi elementi.';
$txt['cannot_post_unapproved_attachments'] = 'Non hai permessi adeguati per inviare post con allegati non approvati.';
$txt['cannot_post_unapproved_topics'] = 'Non hai permessi adeguati per inserire topic non approvati.';
$txt['cannot_post_unapproved_replies_own'] = 'Non hai permessi adeguati per inviare post non approvati nei tuoi topic.';
$txt['cannot_post_unapproved_replies_any'] = 'Non hai permessi adeguati per inviare post non approvati nei topic altrui.';
$txt['cannot_calendar_edit_any'] = 'Non hai permessi adeguati per modificare gli eventi nel calendario.';
$txt['cannot_calendar_edit_own'] = 'Non hai permessi adeguati per modificare i propri eventi.';
$txt['cannot_calendar_post'] = 'Non hai permessi adeguati per inserire eventi nel calendario.';
$txt['cannot_calendar_view'] = 'Non hai permessi adeguati per visualizzare il calendario.';
$txt['cannot_remove_any'] = 'Non hai permessi adeguati per rimuovere alcun topic.';
$txt['cannot_remove_own'] = 'Non hai permessi adeguati per eliminare i propri topic da questa sezione.';
$txt['cannot_edit_news'] = 'Non hai permessi adeguati per modificare le news in questo forum.';
$txt['cannot_pm_read'] = 'Non hai permessi adeguati per leggere i propri messaggi privati.';
$txt['cannot_pm_send'] = 'Non hai permessi adeguati per inviare messaggi privati.';
$txt['cannot_karma_edit'] = 'Non hai permessi adeguati per modificare il karma degli altri utenti.';
$txt['cannot_lock_any'] = 'Non hai permessi adeguati per chiudere alcun topic qui.';
$txt['cannot_lock_own'] = 'Non hai permessi adeguati per chiudere i propri topic.';
$txt['cannot_make_sticky'] = 'Non hai permessi adeguati per marcare quest topic come importante.';
$txt['cannot_manage_attachments'] = 'Non hai permessi adeguati per gestire gli allegati o gli avatar.';
$txt['cannot_manage_bans'] = 'Non hai permessi adeguati per modificare l\'elenco delle esclusioni.';
$txt['cannot_manage_boards'] = 'Non hai permessi adeguati per gestire sezioni e categorie.';
$txt['cannot_manage_membergroups'] = 'Non hai permessi adeguati per modificare o assegnare i gruppi.';
$txt['cannot_manage_permissions'] = 'Non hai permessi adeguati per gestire i permessi.';
$txt['cannot_manage_smileys'] = 'Non hai permessi adeguati per gestire le smiley e le icone messaggio.';
$txt['cannot_mark_any_notify'] = 'Non hai permessi adeguati per ricevere le notifiche da questo topic.';
$txt['cannot_mark_notify'] = 'Non hai permessi adeguati per ricevere le notifiche da questa sezione.';
$txt['cannot_merge_any'] = 'Non hai permessi adeguati per unire i topic in una delle sezioni selezionate.';
$txt['cannot_moderate_forum'] = 'Non hai permessi adeguati per moderare questo forum.';
$txt['cannot_moderate_board'] = 'Non sei abilitato a moderare questa board.';
$txt['cannot_modify_any'] = 'Non hai permessi adeguati per modificare alcun post.';
$txt['cannot_modify_own'] = 'Non hai permessi adeguati per modificare i propri post.';
$txt['cannot_modify_replies'] = 'Nonostante questo post sia in risposta ad un topic aperto da te, non hai permessi adeguati per modificarlo.';
$txt['cannot_move_own'] = 'Non hai permessi adeguati per spostare i propri topic in questa sezione.';
$txt['cannot_move_any'] = 'Non hai permessi adeguati per spostare i topic in questa sezione.';
$txt['cannot_poll_add_own'] = 'Non hai permessi adeguati per aggiungere sondaggi ai propri topic in questa sezione.';
$txt['cannot_poll_add_any'] = 'Non hai permessi adeguati per aggiungere sondaggi a questo topic.';
$txt['cannot_poll_edit_own'] = 'Non hai permessi adeguati per modificare questo sondaggio, nonostante sia il tuo.';
$txt['cannot_poll_edit_any'] = 'Si è stati esclusi dal modificare i sondaggi in questa sezione.';
$txt['cannot_poll_lock_own'] = 'Non hai permessi adeguati per chiudere i tuoi sondaggi in questa sezione.';
$txt['cannot_poll_lock_any'] = 'Non hai permessi adeguati per chiudere alcun sondaggio.';
$txt['cannot_poll_post'] = 'Non hai permessi adeguati per inserire sondaggi nella sezione corrente.';
$txt['cannot_poll_remove_own'] = 'Non hai permessi adeguati per eliminare questo sondaggio dal topic aperto da te.';
$txt['cannot_poll_remove_any'] = 'Non hai permessi adeguati per rimuovere alcun sondaggio in questa sezione.';
$txt['cannot_poll_view'] = 'Non hai permessi adeguati per visualizzare i sondaggi in questa sezione.';
$txt['cannot_poll_vote'] = 'Non hai permessi adeguati per partecipare alle votazione dei sondaggi in questa sezione.';
$txt['cannot_post_attachment'] = 'Non hai permessi adeguati per inserire allegati in questa sezione.';
$txt['cannot_post_new'] = 'Non hai permessi adeguati per inserire nuovi topic in questa sezione.';
$txt['cannot_post_reply_any'] = 'Non hai permessi adeguati per rispondere ai topic in questa sezione.';
$txt['cannot_post_reply_own'] = 'Non hai permessi adeguati per rispondere ai topic, nemmeno ai propri, in questa sezione.';
$txt['cannot_profile_remove_own'] = 'Non hai permessi adeguati per eliminare il tuo account.';
$txt['cannot_profile_remove_any'] = 'Non hai permessi adeguati per rimuovere gli account degli utenti!';
$txt['cannot_profile_extra_any'] = 'Non hai permessi adeguati per modificare le impostazioni del profilo.';
$txt['cannot_profile_identity_any'] = 'Non hai permessi adeguati per modificare le impostazioni dell\'account.';
$txt['cannot_profile_title_any'] = 'Non hai permessi adeguati per modificare i titoli personalizzati degli utenti.';
$txt['cannot_profile_extra_own'] = 'Non hai permessi adeguati per modificare i dati del tuo profilo.';
$txt['cannot_profile_identity_own'] = 'Non hai permessi adeguati per modificare la tua identità.';
$txt['cannot_profile_title_own'] = 'Non hai permessi adeguati per modificare il tuo titolo personalizzato.';
$txt['cannot_profile_server_avatar'] = 'Non hai permessi adeguati per utilizzare un avatar memorizzato sul server.';
$txt['cannot_profile_upload_avatar'] = 'Non hai permessi adeguati per caricare un avatar.';
$txt['cannot_profile_remote_avatar'] = 'Non hai permessi adeguati per utilizzare un avatar remoto.';
$txt['cannot_profile_view_own'] = 'Non hai permessi adeguati per visualizzare il tuo profilo.';
$txt['cannot_profile_view_any'] = 'Non hai permessi adeguati per visualizzare alcun profilo.';
$txt['cannot_delete_own'] = 'Non hai permessi adeguati per eliminare i propri post in questa sezione.';
$txt['cannot_delete_replies'] = 'Non hai permessi adeguati per rimuovere questi post, anche se sono in risposta ad un topic aperto da te.';
$txt['cannot_delete_any'] = 'Non hai permessi adeguati per eliminare alcun post in questa sezione.';
$txt['cannot_report_any'] = 'Non hai permessi adeguati per segnalare post in questa sezione.';
$txt['cannot_search_posts'] = 'Non hai permessi adeguati per cercare nei post di questo forum.';
$txt['cannot_send_mail'] = 'Non hai permessi adeguati per inviare e-mail agli utenti.';
$txt['cannot_issue_warning'] = 'Non hai permessi adeguati per inviare richiami agli utenti.';
$txt['cannot_send_topic'] = 'Non hai permessi adeguati per inserire topic in questa sezione.';
$txt['cannot_split_any'] = 'Non hai permessi adeguati per dividere alcun topic in questa sezione.';
$txt['cannot_view_attachments'] = 'Non hai permessi adeguati per scaricare o visualizzare gli allegati in questa sezione.';
$txt['cannot_view_mlist'] = 'Non hai permessi adeguati per visualizzare l\'elenco degli utenti.';
$txt['cannot_view_stats'] = 'Non hai permessi adeguati per visualizzare le statistiche del forum.';
$txt['cannot_who_view'] = 'Non hai permessi adeguati per visualizzare l\'elenco di chi è online.';

$txt['no_theme'] = 'Questo tema non esiste.';
$txt['theme_dir_wrong'] = 'La cartella predefinita per i temi non è corretta, fare clic su questo testo per sistemarla.';
$txt['registration_disabled'] = 'Spiacente, ma la registrazione è attualmente disattivata.';
$txt['registration_no_secret_question'] = 'Spiacente, ma non ci sono domande segrete impostate per questo utente.';
$txt['poll_range_error'] = 'Spiacente, ma il sondaggio deve durare più di 0 giorni.';
$txt['delFirstPost'] = 'Non si ha il permesso di eliminare il primo post di un topic<p>Se si desidera eliminare questo topic, fare clic sul link Rimuovi topic o chiedere assistenza ad un moderatore o ad un amministratore.</p>';
$txt['parent_error'] = 'Impossibile creare la sezione!';
$txt['login_cookie_error'] = 'Non è possibile effettuare l\'accesso.  Controllare le impostazioni dei cookie.';
$txt['incorrect_answer'] = 'Spiacente, ma non si è data la risposta corretta alla domanda. Fare clic su Indietro per riprovare, o tornare indietro due volte per utilizzare il metodo standard per riavere la password.';
$txt['no_mods'] = 'Nessun moderatore trovato!';
$txt['parent_not_found'] = 'Struttura della sezione corrotta: impossibile trovare la sezione di appartenenza';
$txt['modify_post_time_passed'] = 'Non si può modificare questo topic poiché il limite di tempo per le modifiche è scaduto.';

$txt['calendar_off'] = 'Non è possibile accedere al calendario in quanto al momento non attivo.';
$txt['invalid_month'] = 'Valore del mese non valido.';
$txt['invalid_year'] = 'Valore dell\'anno non valido.';
$txt['invalid_day'] = 'Giorno non valido.';
$txt['event_month_missing'] = 'Manca il mese dell\'evento.';
$txt['event_year_missing'] = 'Manca l\'anno dell\'evento.';
$txt['event_day_missing'] = 'Manca il giorno dell\'evento.';
$txt['event_title_missing'] = 'Manca un titolo dell\'evento.';
$txt['invalid_date'] = 'Data non valida.';
$txt['no_event_title'] = 'Non è stato inserito il titolo dell\'evento.';
$txt['missing_event_id'] = 'Manca l\'ID dell\'evento.';
$txt['cant_edit_event'] = 'Non si ha il permesso di modificare questo evento.';
$txt['missing_board_id'] = 'Manca l\'ID della sezione.';
$txt['missing_topic_id'] = 'Manca l\'ID del topic.';
$txt['topic_doesnt_exist'] = 'Il topic non esiste.';
$txt['not_your_topic'] = 'Non hai la "paternità" di questo topic.';
$txt['board_doesnt_exist'] = 'La sezione non esiste.';
$txt['no_span'] = 'La funzionalità intervallo è al momento disattivata.';
$txt['invalid_days_numb'] = 'Numero di giorni non valido per un intervallo.';

$txt['moveto_noboards'] = 'Non esistono sezioni dove spostare questo topic!';

$txt['already_activated'] = 'L\'account è già stato attivato.';
$txt['still_awaiting_approval'] = 'L\'account è ancora in attesa di approvazione da parte di un amministratore.';

$txt['invalid_email'] = 'Indirizzo e-mail o insieme di indirizzi e-mail non validi.<br />Esempio di indirizzo e-mail valido: evil.user@badsite.com.<br />Esempio di insieme di indirizzi e-mail: *@*.badsite.com';
$txt['invalid_expiration_date'] = 'La data di scadenza non è valida';
$txt['invalid_hostname'] = 'Nome host non valido.<br />Esempio di nome host valido: proxy4.badhost.com<br />Esempio di insieme di host: *.badhost.com';
$txt['invalid_ip'] = 'Indirizzo IP o insieme di indirizzi IP non validi.<br />Esempio di indirizzo IP valido: 127.0.0.1<br />Esempio di insieme di indirizzi IP: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'IP non valido / Gamma di IP.<br />Esempio di indirizzo IP valido: 127.0.0.1<br />
Esempio di gamma di indirizzi IP valida: 127.0.0.*';
$txt['invalid_username'] = 'Nome utente non trovato';
$txt['no_ban_admin'] = 'Non è possibile bloccare un amministratore. Bisogna prima degradarlo!';
$txt['no_bantype_selected'] = 'Non è stato selezionato alcun tipo di blocco';
$txt['ban_not_found'] = 'Blocco non trovato';
$txt['ban_unknown_restriction_type'] = 'Tipo di restrizione sconosciuto';
$txt['ban_name_empty'] = 'Non è stato inserito un nome per questa esclusione';
$txt['ban_name_exists'] = 'Il nome di questo ban (%1$s) è già esistente. Per favore, inserisci un altro nome.';
$txt['ban_trigger_already_exists'] = 'Il filtro di questo ban (%1$s) è già esistente in %2$s.';

$txt['recycle_no_valid_board'] = 'Non è stata selezionata una sezione valida per i topic cestinati';

$txt['login_threshold_fail'] = 'Spiacente, sono stati esauriti i tentativi di accesso a disposizione. Riprovare in un secondo momento.';
$txt['login_threshold_brute_fail'] = 'Spiacente, hai superato il numero massimo di tentativi per il login. Attendi per 30 secondi e riprova.';

$txt['who_off'] = 'Non è possibile accedere all\'elenco degli utenti online poiché non è attivo.';

$txt['merge_create_topic_failed'] = 'Errore nella creazione di un nuovo topic.';
$txt['merge_need_more_topics'] = 'Per unire dei topic è necessario indicarne almeno due.';

$txt['postWaitTime_broken'] = 'L\'ultimo post dal tuo indirizzo IP risale a meno di %1$d secondi fa. Riprova più tardi.';
$txt['registerWaitTime_broken'] = 'Hai già effettuato una registrazione appena %1$d secondi fa!';
$txt['loginWaitTime_broken'] = 'Devi attendere almeno %1$d secondi per rieffettuare l\'accesso.';
$txt['pmWaitTime_broken'] = 'L\'ultimo messaggio privato inviato da questo indirizzo IP risale a meno di %1$d secondi fa. Riprova più tardi.';
$txt['reporttmWaitTime_broken'] = 'L\'ultimo topic segnalato da questo indirizzo IP risale a meno di %1$d secondi fa. Riprova più tardi.';
$txt['sendtopcWaitTime_broken'] = 'L\'ultimo topic creato da questo indirizzo IP risale a meno di %1$d secondi fa. Riprova più tardi.';
$txt['sendmailWaitTime_broken'] = 'L\'ultima e-mail inviata da questo indirizzo IP risale a meno di %1$d secondi fa. Riprova più tardi.';
$txt['searchWaitTime_broken'] = 'La tua ultima ricerca è stata effettuata meno di %1$d secondi fa. Riprova più tardi.';

$txt['email_missing_data'] = 'Devi inserire qualcosa e nel campo Oggetto, e nelle caselle del massaggio.';

$txt['topic_gone'] = 'Il topic o la sezione che stai cercando non esiste più o non possiedi adeguati permessi per visualizzarla.';
$txt['theme_edit_missing'] = 'Non è possibile trovare il file che si sta cercando di modificare!';

$txt['attachments_no_write'] = 'La cartella di caricamento degli allegati non ha i permessi di scrittura. Non è quindi possibile salvare allegati o avatar.';
$txt['attachments_limit_per_post'] = 'Non è possibile caricare più di %1$d allegati per post';

$txt['no_dump_database'] = 'Solo gli amministratori possono eseguire il backup del database!';
$txt['pm_not_yours'] = 'Il messaggio privato che si vorrebbe citare non esiste o non è tra i propri. Tornare alla pagina precedente e riprovare.';
$txt['mangled_post'] = 'I dati inviati dal modulo sono incompleti. Tornare alla pagina precedente e riprovare.';
$txt['quoted_post_deleted'] = 'Il post che si sta cercando di citare non esiste, è stato cancellato o non è più visualizzabile.';
$txt['pm_too_many_per_hour'] = 'Hai superato il limite massimo di %1$d messaggi personali inviati in un\'ora.';
$txt['labels_too_many'] = 'Spiacente, %1$s messaggi hanno già superato il limite massimo di etichette disponibili!';

$txt['register_only_once'] = 'Spiacente, ma non si ha il permesso di registrare più account allo stesso tempo dallo stesso computer.';
$txt['admin_setting_coppa_require_contact'] = 'Devi inserire o un indirizzo postale o un numero di fax se è richiesta l\'approvazione di un genitore/tutore.';

$txt['error_long_name'] = 'Il nome desiderato è troppo lungo.';
$txt['error_no_name'] = 'Non è stato inserito un nome.';
$txt['error_bad_name'] = 'Il nome inserito non può essere usato poiché contiene un nome riservato.';
$txt['error_no_email'] = 'Non è stato inserito un indirizzo e-mail.';
$txt['error_bad_email'] = 'L\'indirizzo e-mail inserito non è valido.';
$txt['error_no_event'] = 'Non è stato inserito il nome dell\'evento.';
$txt['error_no_subject'] = 'Non è stato inserito l\'oggetto.';
$txt['error_no_question'] = 'Non è stata inserita nessuna domanda in questo sondaggio.';
$txt['error_no_message'] = 'Non è stato inserito il corpo del post.';
$txt['error_long_message'] = 'Il post supera la lunghezza massima consentita di %s caratteri.';
$txt['error_no_comment'] = 'Il campo dei commenti è stato lasciato vuoto.';
$txt['error_session_timeout'] = 'La sessione è scaduta durante l\'inserimento. Provare a reinserire il post.';
$txt['error_no_to'] = 'Non è stato indicato nessun destinatario.';
$txt['error_bad_to'] = 'Uno o più destinatari del campo \'A:\' non esistono.';
$txt['error_bad_bcc'] = 'Uno o più destinatari del campo \'CCN:\' non esistono.';
$txt['error_form_already_submitted'] = 'Questo post è già stato inviato! Forse hai accidentalmente fatto doppio clic sul pulsante di invio post o è stata aggiornata la pagina.';
$txt['error_poll_few'] = 'Devono esserci almeno due scelte!';
$txt['error_need_qr_verification'] = 'Completa la verifica sottostante per inviare il tuo post.';
$txt['error_wrong_verification_code'] = 'Le lettere che hai digitato non corrispondono alle lettere mostrate nell\'immagine.';
$txt['error_wrong_verification_answer'] = 'Non hai risposto correttamente alle domande di verifica.';
$txt['error_need_verification_code'] = 'Per favore, inserisci il codice di verifica sottostante per visualizzare i risultati.';
$txt['error_bad_file'] = 'Spiacente, il file specificato non può essere aperto: %1$s';
$txt['error_bad_line'] = 'La riga specificata non è valida.';

$txt['smiley_not_found'] = 'Emoticon non trovata.';
$txt['smiley_has_no_code'] = 'Non è stato fornito un codice per questa emoticon.';
$txt['smiley_has_no_filename'] = 'Non è stato fornito un nome file per questa emoticon.';
$txt['smiley_not_unique'] = 'Esiste già un\'emoticon con questo nome.';
$txt['smiley_set_already_exists'] = 'Esiste già un pacchetto di emoticon con questo indirizzo';
$txt['smiley_set_not_found'] = 'Pacchetto di emoticon non trovato';
$txt['smiley_set_path_already_used'] = 'L\'indirizzo di questo pacchetto di emoticon è già usato da un altro pacchetto.';
$txt['smiley_set_unable_to_import'] = 'Impossibile importare il pacchetto di emoticon. La cartella non è valida o non è accessibile.';

$txt['smileys_upload_error'] = 'Caricamento del file fallito.';
$txt['smileys_upload_error_blank'] = 'Tutti i pacchetti di emoticon devono avere un\'immagine!';
$txt['smileys_upload_error_name'] = 'Tutte le emoticon devono avere lo stesso nome file!';
$txt['smileys_upload_error_illegal'] = 'Tipo non permesso.';

$txt['search_invalid_weights'] = 'La ricerca pesata non è configurata correttamente. Almeno un peso non deve essere nullo. Segnalare il problema ad un amministratore.';
$txt['unable_to_create_temporary'] = 'La funzione di ricerca non è in grado di creare delle tabelle temporanee. Riprovare.';

$txt['package_no_file'] = 'Impossibile trovare il file del pacchetto!';
$txt['packageget_unable'] = 'Impossibile collegarsi al server. Riprova utilizzando <a href="%1$s" target="_blank" class="new_win">questo indirizzo</a>.';
$txt['not_on_simplemachines'] = 'Spiacente, ma i pacchetti posso essere scaricati esclusivamente dal server di simplemachines.org.';
$txt['package_cant_uninstall'] = 'Questo pacchetto non è mai stato installato o è già stato disinstallato. Non è possibile disinstallarlo adesso.';
$txt['package_cant_download'] = 'Non è possibile scaricare o installare nuovi pacchetti poiché la cartella dei pacchetti o un file in essa non ha i permessi di scrittura!';
$txt['package_upload_error_nofile'] = 'Non hai selezionato alcun pacchetto da caricare.';
$txt['package_upload_error_failed'] = 'Impossibile caricare alcun pacchetto, assicurati che la cartella abbia adeguati permessi di scrittura!';
$txt['package_upload_error_exists'] = 'Il file che si sta caricando è già esistente sul server. Eliminarlo e poi riprovare.';
$txt['package_upload_error_supports'] = 'Il gestore pacchetti attualmente permette solo questi tipi di file: %1$s.';
$txt['package_upload_error_broken'] = 'Il caricamento del pacchetto è fallito per il seguente motivo:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'Il pacchetto che stai cercando di installare non può essere localizzato. Potresti provare a caricare manualmente il pacchetto nella tua cartella Packages.';
$txt['package_get_error_missing_xml'] = 'Il pacchetto che stai cercando di installare è mancante del file package-info.xml, di solito presente nella root della directory del pacchetto.';
$txt['package_get_error_is_zero'] = 'Il pacchetto sembra essere vuoto, nonostante sia stato scaricato dal server. Controlla per favore che la cartella Packages e la sotto-cartella &quot;temp&quot; siano entrambe scrivibili. Se continui a riscontrare questo problema, prova ad estrarre il pacchetto sul tuo PC, a caricare i file estratti in una sotto-cartella di Packages e a provare nuovamente. Per esempio, se il pacchetto è chiamato shout.tar.gz, dovrai:<br />1) Scaricarlo sul tuo PC ed estrarre i file <br />2) Utilizzare un client FTP per creare una nuova cartella in &quot;Packages&quot, che in questo caso potrai chiamerai "shout".<br />3) Caricare tutti i file estratti dal pacchetto in questa cartella.<br />4) Tornare al gestore pacchetti, dove il pacchetto verrà automaticamente trovato da SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF non ha potuto trovare alcuna informazione valida nel file package-info.xml incluso nel pacchetto. Potrebbe esserci un errore nella modifica, o il pacchetto potrebbe corrotto.';

$txt['no_membergroup_selected'] = 'Nessun gruppo selezionato';
$txt['membergroup_does_not_exist'] = 'Il gruppo non esiste o non è valido.';

$txt['at_least_one_admin'] = 'Ci deve essere almeno un amministratore del forum!';

$txt['error_functionality_not_windows'] = 'Al momento questa funzione non è disponibile per installazioni su server Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Allegato non trovato';

$txt['error_no_boards_selected'] = 'Nessuna sezione valida selezionata!';
$txt['error_invalid_search_string'] = 'Hai dimenticato di inserire qualcosa da cercare?';
$txt['error_invalid_search_string_blacklist'] = 'Le parole inserite non permettono una ricerca adeguata. Riprova con parole differenti.';
$txt['error_search_string_small_words'] = 'Ogni parola deve essere lunga almeno due caratteri.';
$txt['error_query_not_specific_enough'] = 'La ricerca non ha prodotto alcun risultato valido.';
$txt['error_no_messages_in_time_frame'] = 'Nessun post trovato nel lasso di tempo selezionato.';
$txt['error_no_labels_selected'] = 'Nessuna etichetta selezionata!';
$txt['error_no_search_daemon'] = 'Impossibile accedere alla funzione di ricerca';

$txt['profile_errors_occurred'] = 'Si sono verificati i seguenti errori durante il salvataggio del profilo';
$txt['profile_error_bad_offset'] = 'La differenza di tempo è fuori intervallo';
$txt['profile_error_no_name'] = 'Il campo nome è stato lasciato vuoto';
$txt['profile_error_name_taken'] = 'Il nome utente/nome visualizzato selezionato è già in uso';
$txt['profile_error_name_too_long'] = 'Il nome selezionato è troppo lungo. Non dovrebbe essere più lungo di 60 caratteri';
$txt['profile_error_no_email'] = 'Il campo e-mail è stato lasciato vuoto';
$txt['profile_error_bad_email'] = 'Non è stato inserito un indirizzo e-mail valido';
$txt['profile_error_email_taken'] = 'Un altro utente è già registrato con questo indirizzo e-mail';
$txt['profile_error_no_password'] = 'Non è stata inserita una password';
$txt['profile_error_bad_new_password'] = 'Le nuove password inserite non corrispondono';
$txt['profile_error_bad_password'] = 'La password inserita non è corretta';
$txt['profile_error_bad_avatar'] = 'L\'avatar selezionato è troppo grande, oppure non è un avatar';
$txt['profile_error_password_short'] = 'La password deve essere lunga almeno ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' caratteri.';
$txt['profile_error_password_restricted_words'] = 'La password non deve contenere il nome utente, l\'indirizzo e-mail o altre parole comunemente usate.';
$txt['profile_error_password_chars'] = 'La password deve contenere una mescolanza di lettere maiuscole e minuscole e di numeri.';
$txt['profile_error_already_requested_group'] = 'Hai già una richiesta in corso per questo gruppo!';
$txt['profile_error_openid_in_use'] = 'Un altro utente sta già utilizzando quell\'indirizzo di autenticazione OpenID';

$txt['mysql_error_space'] = ' - verifica lo spazio disponibile per il database o contatta l\'amministratore del server.';

$txt['icon_not_found'] = 'L\'immagine dell\'icona non è stata trovata nel tema predefinito - assicurarsi che l\'immagine sia stata caricata e riprovare.';
$txt['icon_after_itself'] = 'L\'icona non può essere posizionata dopo se stessa!';
$txt['icon_name_too_long'] = 'I nomi dei file delle icone non possono essere più lunghi di 16 caratteri';

$txt['name_censored'] = 'Il nome che hai inserito, %1$s, contiene parole vietate. Riprova con un altro nome.';

$txt['poll_already_exists'] = 'Un topic può avere un solo sondaggio associato!';
$txt['poll_not_found'] = 'Non c\'è un sondaggio associato a questo topic!';

$txt['error_while_adding_poll'] = 'Si sono verificati i seguenti errori durante l\'inserimento di questo sondaggio';
$txt['error_while_editing_poll'] = 'Si sono verificati i seguenti errori durante la modifica di questo sondaggio';

$txt['loadavg_search_disabled'] = 'A causa del carico eccessivo sul server, la funzione di ricerca è stata automaticamente e temporaneamente disabilitata. Riprovare più tardi.';
$txt['loadavg_generic_disabled'] = 'Spiacente, ma a causa del carico eccessivo sul server, la funzione non è al momento disponibile.';
$txt['loadavg_allunread_disabled'] = 'Le risorse del server sono sovraccariche, e non è possibile trovare tutte i topic non lette.';
$txt['loadavg_unreadreplies_disabled'] = 'Il server è al momento sovraccarico. Riprovare più tardi.';
$txt['loadavg_show_posts_disabled'] = 'Riprovare più tardi. I post di questo utente non sono al momento disponibili a causa del carico eccessivo sul server.';
$txt['loadavg_unread_disabled'] = 'Le risorse del server sono temporaneamente troppo sotto pressione per poter elencare i topic non letti.';

$txt['cannot_edit_permissions_inherited'] = 'Non puoi modificare direttamente i permessi ereditati, devi prima You can not edit inherited permissions directly, you must either edit the parent group or edit the membergroup inheritance.';

$txt['mc_no_modreport_specified'] = 'Specifica quale segnalazione desideri visualizzare.';
$txt['mc_no_modreport_found'] = 'La segnalazione specificata non esiste o è off-limits per te.';

$txt['st_cannot_retrieve_file'] = 'Non è possibile trovare il file %1$s.';
$txt['admin_file_not_found'] = 'Non è possibile caricare il file richiesto: %1$s.';

$txt['themes_none_selectable'] = 'Almeno un tema deve essere selezionabile.';
$txt['themes_default_selectable'] = 'Il tema standard generale del forum deve essere selezionabile.';
$txt['ignoreboards_disallowed'] = 'L\'opzione per ignorare le sezioni non è stata abilitata.';

$txt['mboards_delete_error'] = 'Nessuna categoria selezionata!';
$txt['mboards_delete_board_error'] = 'Nessuna sezione selezionata!';

$txt['mboards_parent_own_child_error'] = 'Impossibile rendere sottosezione una sezione!';
$txt['mboards_board_own_child_error'] = 'Impossibile rendere sottosezione una sezione!';

$txt['smileys_upload_error_notwritable'] = 'Le seguenti cartelle degli smiley non sono scrivibili: %1$s';
$txt['smileys_upload_error_types'] = 'Image can only have the following extensions: %1$s.';

$txt['change_email_success'] = 'Dato che il tuo indirizzo e-mail è stato cambiato, ti è stata inviata una nuova e-mail di attivazione.';
$txt['resend_email_success'] = 'Una nuova e-mail di attivazione è stata inviata con successo.';

$txt['custom_option_need_name'] = 'Questa opzione del profilo deve avere un nome!';
$txt['custom_option_not_unique'] = 'Il nome campo non è unico!';

$txt['warning_no_reason'] = 'Devi inserire un motivo per la modifica dello stato richiami dell\'utente.';
$txt['warning_notify_blank'] = 'Hai selezionato di notificare l\'utente ma non hai completato i campi oggetto/messaggio.';

$txt['cannot_connect_doc_site'] = 'Non è possibile collegarsi al manuale online di Simple Machines. Accertati che la configurazione del tuo server consenta le connessione esterne ad Internet e riprova.';

$txt['movetopic_no_reason'] = 'Devi inserire un motivo per lo spostamento del topic, oppure togliere il segno di spunta dall\'opzione per aggiungere un topic di reindirizzamento.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'L\'identificatore richiesto non ha restituito le informazioni necessarie.';
$txt['openid_return_no_mode'] = 'Il provider dell\'identità non ha risposto con la modalità OpenID.';
$txt['openid_not_resolved'] = 'Il provider dell\'identità non ha approvato la tua richiesta.';
$txt['openid_no_assoc'] = 'Non è possibile trovare l\'associazione richiesta con il provider dell\'identità.';
$txt['openid_sig_invalid'] = 'La firma del provider dell\'identità non è valida.';
$txt['openid_load_data'] = 'Non è stato possibile recuperare i dati dalla tua richiesta di login. Riprova.';
$txt['openid_not_verified'] = 'L\'indirizzo OpenID fornito non è stato ancora verificato. Fai login per accedere alla verifica.';

$txt['error_custom_field_too_long'] = 'Il campo &quot;%1$s&quot; non può superare i %2$d caratteri di lunghezza.';
$txt['error_custom_field_invalid_email'] = 'Il campo &quot;%1$s&quot; deve essere un indirizzo e-mail valido.';
$txt['error_custom_field_not_number'] = 'Il campo &quot;%1$s&quot; deve essere numerico.';
$txt['error_custom_field_inproper_format'] = 'Il campo &quot;%1$s&quot; è in un formato non valido.';
$txt['error_custom_field_empty'] = 'Il campo &quot;%1$s&quot; non può essere lasciato in bianco.';

$txt['email_no_template'] = 'Il template e-mail &quot;%1$s&quot; non può essere trovato.';

$txt['search_api_missing'] = 'Non è possibile trovare l\'API di ricerca! Contatta l\'amministratore per verificare che siano stati caricati correttamente i file relativi.';
$txt['search_api_not_compatible'] = 'L\'API di ricerca selezionata per il forum, è obsoleta - Ritorno alla ricerca standard in corso. Per ulteriori informazioni, controlla il file %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Non puoi ripristinare il primo post in un topic.';
$txt['parent_topic_missing'] = 'Il topic di origine di questo post in ripristino è stato cancellato.';
$txt['restored_disabled'] = 'Il ripristino dei topic è stato disabilitato.';
$txt['restore_not_found'] = 'I seguenti post non possono essere ripristinati; il topic originale potrebbe essere stato rimosso:<ul style="margin-top: 0px;">%1$s</ul>Sarà necessario spostarli manualmente.';

$txt['error_invalid_dir'] = 'La directory inserita non è valida.';

$txt['error_sqlite_optimizing'] = 'Sqlite sta ottimizzando il database, il forum rimarrà inaccessibile fino a quando il sistema non avrà terminato. Prova a ricaricare la pagina fra qualche istante.';

?>