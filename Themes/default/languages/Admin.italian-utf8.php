<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Sezioni';
$txt['admin_users'] = 'Utenti';
$txt['admin_newsletters'] = 'Newsletter';
$txt['admin_edit_news'] = 'News';
$txt['admin_groups'] = 'Gruppi';
$txt['admin_members'] = 'Gestione utenti';
$txt['admin_members_list'] = 'Di seguito l\'elenco di tutti gli utenti registrati al forum.';
$txt['admin_next'] = 'Avanti';
$txt['admin_censored_words'] = 'Termini censurati';
$txt['admin_censored_where'] = 'Inserire le parole da censurare a sinistra e la correzione sulla destra.';
$txt['admin_censored_desc'] = 'A causa della natura pubblica dei forum gli utenti potrebbero inserire parole indesiderate nei post. È possibile censurare qualsiasi parola inserendola nel campo seguente.<br />Azzerare il campo per rimuovere la parola.';
$txt['admin_reserved_names'] = 'Nomi riservati';
$txt['admin_template_edit'] = 'Modifica il template del forum';
$txt['admin_modifications'] = 'Impostazioni MOD';
$txt['admin_security_moderation'] = 'Sicurezza e Moderazione';
$txt['admin_server_settings'] = 'Impostazioni server';
$txt['admin_reserved_set'] = 'Imposta nomi utente riservati';
$txt['admin_reserved_line'] = 'Un nome utente riservato per ogni riga.';
$txt['admin_basic_settings'] = 'Questa pagina permette di modificare le impostazioni di base per il forum. Presta attenzione a queste modifiche, impostazioni non corrette potrebbero provocare dei malfunzionamenti.';
$txt['admin_maintain'] = 'Attiva la modalità di manutenzione';
$txt['admin_title'] = 'Nome del Forum';
$txt['admin_url'] = 'Indirizzo del Forum';
$txt['cookie_name'] = 'Nome del cookie';
$txt['admin_webmaster_email'] = 'Indirizzo e-mail del webmaster';
$txt['boarddir'] = 'Percorso cartella SMF';
$txt['sourcesdir'] = 'Cartella Sources';
$txt['cachedir'] = 'Cartella Cache';
$txt['admin_news'] = 'Abilita il riquadro delle news';
$txt['admin_guest_post'] = 'Abilita l\'invio di post da parte degli utenti non registrati';
$txt['admin_manage_members'] = 'Utenti';
$txt['admin_main'] = 'Principale';
$txt['admin_config'] = 'Configurazione';
$txt['admin_version_check'] = 'Controllo dettagliato della versione';
$txt['admin_smffile'] = 'File SMF';
$txt['admin_smfpackage'] = 'Pacchetto SMF';
$txt['admin_maintenance'] = 'Manutenzione';
$txt['admin_image_text'] = 'Mostra i pulsanti come immagini invece che come testo';
$txt['admin_credits'] = 'Ringraziamenti';
$txt['admin_agreement'] = 'Mostra e richiedi l\'accettazione dei termini di utilizzo durante la registrazione';
$txt['admin_agreement_default'] = 'Predefinito';
$txt['admin_agreement_select_language'] = 'Traduzione da modificare';
$txt['admin_agreement_select_language_change'] = 'Modifica';
$txt['admin_delete_members'] = 'Elimina gli utenti selezionati';
$txt['admin_repair'] = 'Ripara tutte le sezioni e i topic';
$txt['admin_main_welcome'] = 'Questo è il tuo "%1$s". Qui puoi modificare le impostazioni del forum, effettuarne la manutenzione, visualizzare i registri, installare pacchetti, gestire temi e traduzioni, e molte altre cose.<div style="margin-top: 1ex;">Se hai qualche dubbio, dai un\'occhiata alla pagina "Supporto e Crediti", se tuttavia le informazioni contenute al suo interno non ti soddisfano, non esitare a <a href="http://www.simplemachines.org/community/index.php" target="_blank" class="new_win">chiederci aiuto</a>!</div>Puoi inoltre cliccare sui simboli <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" border="0" /> per ottenere ulteriori informazioni sulle relative funzioni.';
$txt['admin_news_desc'] = 'Inserisci una notizia per riquadro. Tag BBC, come <span title="Sei grassetto?">[b]</span>, <span title="Cor-si-vo!!">[i]</span> e <span title="Le parentesi sono fenomenali, no?">[u]</span> sono permessi nelle news, come anche gli smiley ed il codice HTML. Azzera la casella di testo di una notizia per rimuoverla.';
$txt['administrators'] = 'Amministratori del forum';
$txt['admin_reserved_desc'] = 'I nomi riservati impediranno agli utenti di registrarsi utilizzando determinati nomi utente o nomi visualizzati. Scegli di seguito le impostazioni desiderate prima di procedere con l\'invio.';
$txt['admin_activation_email'] = 'Invia una email di attivazione ai nuovi utenti durante la registrazione';
$txt['admin_match_whole'] = 'Cerca la corrispondenza dell\'intero nome. Se non selezionato, cerca all\'interno dei nomi.';
$txt['admin_match_case'] = 'Maiuscole/minuscole. Se non selezionato, la ricerca non farà distinzione fra lettere maiuscole e minuscole.';
$txt['admin_check_user'] = 'Controlla il nome utente.';
$txt['admin_check_display'] = 'Controlla il nome visualizzato.';
$txt['admin_newsletter_send'] = 'Da questa pagina puoi inviare una e-mail a chiunque. Gli indirizzi e-mail dei gruppi selezionati sono mostrati di seguito, ma è possibile rimuovere o aggiungere liberamente gli indirizzi desiderati. Assicurati che ciascun indirizzo sia separato utilizzando la forma: \'indirizzo1; indirizzo2\'.';
$txt['admin_fader_delay'] = 'Tempo di visualizzazione in millisecondi di ciascuna notizia nel riquadro notizie';
$txt['admin_bbc'] = 'Visualizza i bottoni BBC nelle pagine di inserimento dei post e dei messaggi privati?';

$txt['admin_backup_fail'] = 'Impossibile effettuare la copia di sicurezza del file Settings.php - assicurati che il file Settings_bak.php esista ed abbia i permessi di scrittura.';
$txt['modSettings_info'] = 'Modifica o imposta le opzioni per il funzionamento di questo forum.';
$txt['database_server'] = 'Server in cui si trova il database';
$txt['database_user'] = 'Nome utente per il database';
$txt['database_password'] = 'Password del database';
$txt['database_name'] = 'Nome del database';
$txt['registration_agreement'] = 'Termini di registrazione';
$txt['registration_agreement_desc'] = 'Questo regolamento viene visualizzato quando un utente crea un account sul forum e dovrà essere accettato affinché l\'utente possa continuare la registrazione.';
$txt['database_prefix'] = 'Prefisso delle tabelle del database';
$txt['errors_list'] = 'Elenco degli errori del forum';
$txt['errors_found'] = 'I seguenti errori stanno creando problemi al forum';
$txt['errors_fix'] = 'Vuoi provare a correggere questi errori?';
$txt['errors_do_recount'] = 'Tutti gli errori sono stati corretti - è stato creato un file di ripristino! Clicca sul bottone qui sotto per effettuare nuovamente il conteggio delle statistiche.';
$txt['errors_recount_now'] = 'Ricalcola le statistiche';
$txt['errors_fixing'] = 'Correzione degli errori del forum in corso';
$txt['errors_fixed'] = 'Tutti gli errori sono stati corretti! Verifica ogni categoria, sezione o topic creati per decidere cosa farne.';
$txt['attachments_avatars'] = 'Allegati ed avatar';
$txt['attachments_desc'] = 'Da questa pagina è possibile amministrare gli allegati caricati sul sistema. è possibile eliminare gli allegati per dimensione o per data. Di seguito sono visualizzate anche le statistiche sugli allegati.';
$txt['attachment_stats'] = 'Statistiche per i file allegati';
$txt['attachment_integrity_check'] = 'Controllo integrità degli allegati';
$txt['attachment_integrity_check_desc'] = 'Questa funzione controllerà l\'integrità e le dimensioni degli allegati e dei nomi dei file contenuti nel database e, se necessario, riparerà eventuali errori.';
$txt['attachment_check_now'] = 'Esegui il controllo';
$txt['attachment_pruning'] = 'Rimozione Allegati';
$txt['attachment_pruning_message'] = 'Messaggio da aggiungere al post';
$txt['attachment_pruning_warning'] = 'Sei sicuro di voler eliminare questi allegati?\\nL\'operazione non potrà essere annullata!';
$txt['attachment_total'] = 'Allegati totali';
$txt['attachmentdir_size'] = 'Dimensione totale della cartella degli allegati';
$txt['attachmentdir_size_current'] = 'Dimensione totale della cartella attuale degli allegati';
$txt['attachment_space'] = 'Spazio totale disponibile nella cartella degli allegati';
$txt['attachment_space_current'] = 'Spazio totale disponibile nella attuale cartella allegati';
$txt['attachment_options'] = 'Opzioni per il file allegato';
$txt['attachment_log'] = 'Registro allegati';
$txt['attachment_remove_old'] = 'Elimina gli allegati più vecchi di ';
$txt['attachment_remove_size'] = 'Elimina gli allegati di dimensioni superiori a';
$txt['attachment_name'] = 'Nome dell\'allegato';
$txt['attachment_file_size'] = 'Dimensione del file';
$txt['attachmentdir_size_not_set'] = 'Attualmente non è definita alcuna dimensione massima per la cartella';
$txt['attachment_delete_admin'] = '[allegato eliminato da un amministratore]';
$txt['live'] = 'Direttamente da Simple Machines...';
$txt['remove_all'] = 'Rimuovi tutti';
$txt['approve_new_members'] = 'L\'amministratore deve approvare tutti i nuovi utenti';
$txt['agreement_not_writable'] = 'Attenzione - il file agreement.txt non ha i permessi di scrittura necessari. Qualunque modifica effettuata NON verrà salvata.';

$txt['version_check_desc'] = 'Verranno mostrate le versioni dei file di installazione rapportati a quelli della versione più recente. Se uno o più di questi file necessita di aggiornamento, scarica l\'ultima versione da <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(maggiori dettagli)';

$txt['lfyi'] = 'Impossibile collegarsi al file delle ultime notizie di simplemachines.org.';

$txt['manage_calendar'] = 'Calendario';
$txt['manage_search'] = 'Ricerca';

$txt['smileys_manage'] = 'Smiley ed icone dei post';
$txt['smileys_manage_info'] = 'Per installare nuovi pacchetti di smiley, aggiungerne di nuovi e gestire le icone dei post.';
$txt['package_info'] = 'Da qui sarà possibile installare pacchetti che aggiungeranno funzioni o modificheranno quelle esistenti.';
$txt['theme_admin'] = 'Temi e layout';
$txt['theme_admin_info'] = 'Per impostare e gestire i temi e configurare o ripristinare le relative opzioni.';
$txt['registration_center'] = 'Registrazione';
$txt['member_center_info'] = 'Per visualizzare l\'elenco degli utenti registrati, cercarli o gestirne le fasi di registrazione.';

$txt['viewmembers_name'] = 'Nome utente (nome visualizzato)';
$txt['viewmembers_online'] = 'Ultima attività';
$txt['viewmembers_today'] = 'Oggi';
$txt['viewmembers_day_ago'] = 'Ieri';
$txt['viewmembers_days_ago'] = 'giorni fa';

$txt['display_name'] = 'Nome visualizzato';
$txt['email_address'] = 'Indirizzo e-mail';
$txt['ip_address'] = 'Indirizzo IP';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'sconosciuto';
$txt['security_wrong'] = 'Tentativo di accesso come amministratore!' . "\n" . 'Referer: %1$s' . "\n" . 'User agent: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Invia in formato HTML (con questa opzione sarà possibile inserire codice HTML nei messaggi e-mail.)';
$txt['email_parsed_html'] = 'Aggiungi &lt;br /&gt; e &amp;nbsp; a questo messaggio.';
$txt['email_variables'] = 'In questo messaggio sarà possibile utilizzare un insieme limitato di &quot;variabili&quot;. Fare clic <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">qui</a> per maggiori informazioni.';
$txt['email_force'] = 'Invia questo messaggio agli utenti anche se hanno scelto di non ricevere notifiche.';
$txt['email_as_pms'] = 'Invia questo messaggio ai seguenti gruppi utilizzando i messaggi privati.';
$txt['email_continue'] = 'Continua';
$txt['email_done'] = 'eseguito.';

$txt['ban_title'] = 'Elenco esclusioni';
$txt['ban_ip'] = 'Blocco IP: (es.: 192.168.12.213 or 128.0.*.*) - un elemento per riga';
$txt['ban_email'] = 'Blocco indirizzo e-mail: (es.: badguy@somewhere.com) - un elemento per riga';
$txt['ban_username'] = 'Blocco nome utente: (es.: l33tuser) - un elemento per riga';

$txt['ban_description'] = 'Con queste opzioni sarà possibile escludere gli utenti che causano disturbo con filtri come IP, nome host, nome utente o indirizzo e-mail.';
$txt['ban_add_new'] = 'Nuova esclusione';
$txt['ban_banned_entity'] = 'Esclusione';
$txt['ban_on_ip'] = 'Esclusione per IP (es.: 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Esclusione per hostname (es.: *.mil)';
$txt['ban_on_email'] = 'Esclusione per indirizzo e-mail (es.: *@badsite.com)';
$txt['ban_on_username'] = 'Esclusione per nome utente';
$txt['ban_notes'] = 'Note';
$txt['ban_restriction'] = 'Restrizione';
$txt['ban_full_ban'] = 'Esclusione totale';
$txt['ban_partial_ban'] = 'Esclusione parziale';
$txt['ban_cannot_post'] = 'Impedisci l\'inserimento post';
$txt['ban_cannot_register'] = 'Impedisci registrazione';
$txt['ban_cannot_login'] = 'Impedisci l\'accesso';
$txt['ban_add'] = 'Aggiungi';
$txt['ban_edit_list'] = 'Elenco utenti esclusi';
$txt['ban_type'] = 'Tipo di esclusione';
$txt['ban_days'] = 'giorno/i';
$txt['ban_will_expire_within'] = 'Esclusione con scadenza il';
$txt['ban_added'] = 'Aggiunta';
$txt['ban_expires'] = 'Scadenza';
$txt['ban_hits'] = 'Accessi';
$txt['ban_actions'] = 'Azioni';
$txt['ban_expiration'] = 'Scadenza';
$txt['ban_reason_desc'] = 'Motivi dell\'esclusione, da mostrare all\'accesso degli utenti.';
$txt['ban_notes_desc'] = 'Note informative per gli altri componenti dello staff.';
$txt['ban_remove_selected'] = 'Rimuovi selezionati';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Sei sicuro di voler rimuovere le esclusioni selezionate?';
$txt['ban_modify'] = 'Modifica';
$txt['ban_name'] = 'Nome dell\'esclusione';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Modifica esclusione';
$txt['ban_add_notes'] = '<strong>Nota</strong>: dopo aver creato l\'esclusione, puoi aggiungere ulteriori elementi di filtraggio come indirizzi IP, nomi host e indirizzi email.';
$txt['ban_expired'] = 'Scaduto / non attivo';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Nessuna restrizione selezionata.';

$txt['ban_triggers'] = 'Filtri';
$txt['ban_add_trigger'] = 'Aggiungi filtro di esclusione';
$txt['ban_add_trigger_submit'] = 'Aggiungi';
$txt['ban_edit_trigger'] = 'Modifica';
$txt['ban_edit_trigger_title'] = 'Modifica filtro di esclusione';
$txt['ban_edit_trigger_submit'] = 'Modifica';
$txt['ban_remove_selected_triggers'] = 'Rimuovi filtri di esclusione selezionati';
$txt['ban_no_entries'] = 'Al momento non ci sono esclusioni attive.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Sicuro di voler rimuovere i filtri di esclusione selezionati?';
$txt['ban_trigger_browse'] = 'Controlla i filtri di esclusione';
$txt['ban_trigger_browse_description'] = 'Questa pagina mostra tutti gli elementi raggruppati per indirizzo IP, nome host, indirizzo e-mail e nome utente.';

$txt['ban_log'] = 'Registro delle esclusioni';
$txt['ban_log_description'] = 'Il registro delle esclusioni mostra tutti i tentativi di accesso al forum da parte di utenti bloccati (mostra solo i filtri \'Esclusione totale\' e \'Impedisci registrazione\' ).';
$txt['ban_log_no_entries'] = 'Nessun elemento nel registro delle esclusioni.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Indirizzo e-mail';
$txt['ban_log_member'] = 'Utente';
$txt['ban_log_date'] = 'Data';
$txt['ban_log_remove_all'] = 'Rimuovi tutti';
$txt['ban_log_remove_all_confirm'] = 'Rimuovere tutti gli elementi del registro delle esclusioni?';
$txt['ban_log_remove_selected'] = 'Rimuovi selezionati';
$txt['ban_log_remove_selected_confirm'] = 'Rimuovere tutti gli elementi selezionati dal registro delle esclusioni?';
$txt['ban_no_triggers'] = 'Nessun elemento nel filtro esclusioni.';

$txt['settings_not_writable'] = 'Impossibile modificare le impostazioni poiché il file Settings.php è in sola lettura.';

$txt['maintain_title'] = 'Manutenzione del forum';
$txt['maintain_info'] = 'Strumenti per l\'ottimizzazione delle tabelle, procedure di backup, controllo errori e pulizia delle sezioni.';
$txt['maintain_sub_database'] = 'Database';
$txt['maintain_sub_routine'] = 'Routine';
$txt['maintain_sub_members'] = 'Utenti';
$txt['maintain_sub_topics'] = 'Topic';
$txt['maintain_done'] = 'L\'azione di manutenzione \'%1$s\' è stata eseguita con successo.';
$txt['maintain_no_errors'] = 'Congratulazioni, non è stato trovato alcun errore! Grazie per aver controllato.';

$txt['maintain_tasks'] = 'Manutenzioni programmate';
$txt['maintain_tasks_desc'] = 'Gestisci tutte le azioni programmate da SMF.';

$txt['scheduled_log'] = 'Registro azioni eseguite';
$txt['scheduled_log_desc'] = 'Elenca i registri di tutte le manutenzioni programmate eseguite.';
$txt['admin_log'] = 'Registro Amministrazione';
$txt['admin_log_desc'] = 'Lista delle azioni amministrative eseguite dagli amministratori nel forum.';
$txt['moderation_log'] = 'Registro Moderazione';
$txt['moderation_log_desc'] = 'Lista delle azioni di moderazione che sono state eseguite dai moderatori nel forum.';
$txt['spider_log_desc'] = 'Esamina il registro attività degli spider dei motori di ricerca sul tuo forum.';
$txt['pruning_log_desc'] = 'Usa questi strumenti per eliminare elementi obsoleti nei vari registri.';

$txt['mailqueue_title'] = 'Mail';

$txt['db_error_send'] = 'Invia e-mail al verificarsi di errori di connessione MySQL ';
$txt['db_persist'] = 'Utilizza connessione permanente';
$txt['ssi_db_user'] = 'Nome utente da utilizzare per il Database in modalità SSI';
$txt['ssi_db_passwd'] = 'Password da utilizzare per il Database in modalità SSI';

$txt['default_language'] = 'Traduzione predefinita nel forum';

$txt['maintenance_subject'] = 'Oggetto da visualizzare';
$txt['maintenance_message'] = 'Messaggio da visualizzare';

$txt['errlog_desc'] = 'Il registro degli errori tiene traccia di ogni errore riscontrato dal forum. Per rimuovere tutti gli errori dal database, selezionare la casella di spunta e fare clic sul pulsante %1$s in fondo alla pagina.';
$txt['errlog_no_entries'] = 'Al momento non ci sono elementi nel registro.';

$txt['theme_settings'] = 'Impostazioni del tema';
$txt['theme_current_settings'] = 'Tema corrente';

$txt['dvc_your'] = 'Versione installata';
$txt['dvc_current'] = 'Ultima versione';
$txt['dvc_sources'] = 'Sorgenti';
$txt['dvc_default'] = 'Template predefiniti';
$txt['dvc_templates'] = 'Template in uso';
$txt['dvc_languages'] = 'File di traduzione';

$txt['smileys_default_set_for_theme'] = 'Selezionare il pacchetto predefinito di smiley per questo tema';
$txt['smileys_no_default'] = '(utilizza il pacchetto predefinito globale)';

$txt['censor_test'] = 'Test per le parole censurate';
$txt['censor_test_save'] = 'Test';
$txt['censor_case'] = 'Ignora maiuscole/minuscole nell\'operazione di censura';
$txt['censor_whole_words'] = 'Controlla solamente parole intere';

$txt['admin_confirm_password'] = '(conferma)';
$txt['admin_incorrect_password'] = 'Password errata';

$txt['date_format'] = '(DD-MM-YYYY)';
$txt['undefined_gender'] = 'Non specificato';
$txt['age'] = 'Età';
$txt['activation_status'] = 'Stato di attivazione';
$txt['activated'] = 'Attivato';
$txt['not_activated'] = 'Non attivato';
$txt['primary'] = 'Principale';
$txt['additional'] = 'Aggiuntiva';
$txt['messenger_address'] = 'Indirizzo messaggistica istantanea';
$txt['wild_cards_allowed'] = 'Sono consentiti i caratteri jolly * e ?';
$txt['search_for'] = 'Cerca';
$txt['member_part_of_these_membergroups'] = 'L\'utente è membro di questi gruppi';
$txt['membergroups'] = 'Gruppi';
$txt['confirm_delete_members'] = 'Cancellare gli utenti selezionati?';

$txt['support_credits_title'] = 'Supporto e Crediti';
$txt['support_credits_info'] = 'Per ottenere aiuto sui problemi comuni e raccogliere informazioni da fornire in caso di problemi.';
$txt['support_title'] = 'Informazioni sul supporto';
$txt['support_versions_current'] = 'Ultima versione disponibile';
$txt['support_versions_forum'] = 'Versione installata';
$txt['support_versions_php'] = 'Versione PHP';
$txt['support_versions_db'] = 'Versione %1$s';
$txt['support_versions_server'] = 'Versione server';
$txt['support_versions_gd'] = 'Versione GD';
$txt['support_versions'] = 'Informazioni sulla versione';
$txt['support_resources'] = 'Risorse di Supporto';
$txt['support_resources_p1'] = 'Il nostro <a href="%1$s">Manuale Online</a> rappresenta la principale documentazione di SMF. Usufruisci del Manuale per chiarire dubbi su <a href="%2$s">Funzioni</a>, <a href="%3$s">Impostazioni</a>, <a href="%4$s">Temi</a>, <a href="%5$s">Pacchetti</a>, ecc. Il Manuale Online contiene la spiegazione di ogni area di SMF e dovrebbe velocemente fugare la maggior parte dei dubbi più frequenti.';
$txt['support_resources_p2'] = 'Se non riesci a trovare le risposte alle tue domande nel Manuale Online, potresti provare a visitare la nostra <a href="%1$s">Community Support</a> o chiedere aiuto in <a href="%2$s">Inglese</a> o in molte altre <a href="%3$s">lingue supportate</a>. La Community di Supporto può essere usata per <a href="%2$s">supporto</a>, <a href="%4$s">personalizzazione</a> e molto altro riguardante SMF, come trovare un host e discutere di qualsiasi problema riguardante l\'amministrazione di un forum.';

$txt['support_latest'] = 'Risoluzione dei problemi comuni';
$txt['support_latest_fetch'] = 'Recupero informazioni sul supporto...';

$txt['edit_permissions_info'] = 'Opzioni riguardanti le restrizioni ed i permessi, globali o di specifiche sezioni.';
$txt['membergroups_members'] = 'Utenti Normali';
$txt['membergroups_guests'] = 'Visitatori';
$txt['membergroups_guests_na'] = 'n/a';
$txt['membergroups_add_group'] = 'Aggiungi gruppo';
$txt['membergroups_permissions'] = 'Permessi';

$txt['permitgroups_restrict'] = 'Restrittiva';
$txt['permitgroups_standard'] = 'Standard';
$txt['permitgroups_moderator'] = 'Moderatore';
$txt['permitgroups_maintenance'] = 'Manutenzione';
$txt['permitgroups_inherit'] = 'Importa';

$txt['confirm_delete_attachments_all'] = 'Sicuro di voler eliminare tutti gli allegati?';
$txt['confirm_delete_attachments'] = 'Sicuro di voler eliminare gli allegati selezionati?';
$txt['attachment_manager_browse_files'] = 'Sfoglia file';
$txt['attachment_manager_repair'] = 'Manutenzione';
$txt['attachment_manager_avatars'] = 'Avatar';
$txt['attachment_manager_attachments'] = 'Allegati';
$txt['attachment_manager_thumbs'] = 'Anteprime';
$txt['attachment_manager_last_active'] = 'Ultima attività';
$txt['attachment_manager_member'] = 'Utente';
$txt['attachment_manager_avatars_older'] = 'Rimuovi avatar degli utenti non attivi da più di';
$txt['attachment_manager_total_avatars'] = 'Avatar totali';

$txt['attachment_manager_avatars_no_entries'] = 'Al momento non è presente alcun avatar.';
$txt['attachment_manager_attachments_no_entries'] = 'Al momento non è presente alcun allegato.';
$txt['attachment_manager_thumbs_no_entries'] = 'Al momento non è presente alcuna anteprima.';

$txt['attachment_manager_settings'] = 'Impostazioni per gli allegati';
$txt['attachment_manager_avatar_settings'] = 'Impostazioni per gli avatar';
$txt['attachment_manager_browse'] = 'Sfoglia file';
$txt['attachment_manager_maintenance'] = 'Manutenzione file';
$txt['attachment_manager_save'] = 'Salva';

$txt['attachmentEnable'] = 'Modalità allegati';
$txt['attachmentEnable_deactivate'] = 'Non consentire allegati';
$txt['attachmentEnable_enable_all'] = 'Consenti tutti gli allegati';
$txt['attachmentEnable_disable_new'] = 'Non consentire nuovi allegati';
$txt['attachmentCheckExtensions'] = 'Consenti allegati per estensione';
$txt['attachmentExtensions'] = 'Estensioni consentite per gli allegati';
$txt['attachmentRecodeLineEndings'] = 'Codifica i ritorni a capo negli allegati testuali';
$txt['attachmentShowImages'] = 'Visualizza anteprima delle immagini allegate alla fine dei post';
$txt['attachmentEncryptFilenames'] = 'Cifratura degli allegati immagazzinati';
$txt['attachmentUploadDir'] = 'Cartella Allegati<div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Imposta cartelle multiple per gli allegati</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Cartella Allegati';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Imposta cartelle multiple per gli allegati]</a>';
$txt['attachmentDirSizeLimit'] = 'Dimensione massima dello spazio occupato dalla cartella degli allegati';
$txt['attachmentPostLimit'] = 'Dimensione massima degli allegati per post';
$txt['attachmentSizeLimit'] = 'Dimensione massima per allegato';
$txt['attachmentNumPerPostLimit'] = 'Numero massimo di allegati per post';
$txt['attachment_gd_warning'] = 'Il modulo GD non è installato. Non è possibile ricodificare le immagini.';
$txt['attachment_image_reencode'] = 'Ricodifica allegati potenzialmente pericolosi.';
$txt['attachment_image_reencode_note'] = '(richiede il modulo GD)';
$txt['attachment_image_paranoid_warning'] = 'I check di sicurezza estensivi possono produrre un numero elevato di allegati rifiutati.';
$txt['attachment_image_paranoid'] = 'Esegui check di sicurezza estensivi su immagini caricate negli allegati.';
$txt['attachmentThumbnails'] = 'Ridimensiona immagini quando vengono mostrate alla fine del post';
$txt['attachment_thumb_png'] = 'Salva le anteprime come PNG';
$txt['attachmentThumbWidth'] = 'Larghezza massima delle anteprime';
$txt['attachmentThumbHeight'] = 'Altezza massima delle anteprime';

$txt['attach_dir_does_not_exist'] = 'Non esistente';
$txt['attach_dir_not_writable'] = 'Non modificabile';
$txt['attach_dir_files_missing'] = 'File Mancanti (<a href=" . $scripturl . ?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Correggi</a>)';
$txt['attach_dir_unused'] = 'Inutilizzata';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Gestisci percorsi allegati';
$txt['attach_paths'] = 'Percorsi degli allegati';
$txt['attach_current_dir'] = 'Cartella in uso';
$txt['attach_path'] = 'Percorso';
$txt['attach_current_size'] = 'Dimensione attuale (in KB)';
$txt['attach_num_files'] = 'File';
$txt['attach_dir_status'] = 'Stato';
$txt['attach_add_path'] = 'Aggiungi Percorso';
$txt['attach_path_current_bad'] = 'Directory attuale degli allegati non valida.';

$txt['mods_cat_avatars'] = 'Avatar';
$txt['avatar_directory'] = 'Cartella degli avatar';
$txt['avatar_url'] = 'URL degli avatar';
$txt['avatar_dimension_note'] = '(0 = nessun limite)';
$txt['avatar_max_width_external'] = 'Larghezza massima per gli avatar esterni<div class="smalltext">(0 per nessun limite)</div>';
$txt['avatar_max_height_external'] = 'Altezza massima per gli avatar esterni<div class="smalltext">(0 per nessun limite)</div>';
$txt['avatar_action_too_large'] = 'Se l\'avatar supera le dimensioni consentite...';
$txt['option_refuse'] = 'Rifiutalo';
$txt['option_html_resize'] = 'Permetti che venga ridimensionato dall\'HTML';
$txt['option_js_resize'] = 'Ridimensionalo mediante JavaScript';
$txt['option_download_and_resize'] = 'Scaricalo e ridimensionalo (richiede il modulo GD)';
$txt['avatar_max_width_upload'] = 'Larghezza massima per gli avatar caricati<div class="smalltext">(0 per nessun limite)</div>';
$txt['avatar_max_height_upload'] = 'Altezza massima per gli avatar caricati<div class="smalltext">(0 per nessun limite)</div>  ';
$txt['avatar_resize_upload'] = 'Ridimensiona avatar troppo grandi';
$txt['avatar_resize_upload_note'] = '(richiede il modulo GD)';
$txt['avatar_download_png'] = 'Utilizza il formato PNG per gli avatar ridimensionati';
$txt['avatar_gd_warning'] = 'Il modulo GD non risulta correntemente installato. Alcune funzioni per la gestione degli avatar saranno disattivate.';
$txt['avatar_external'] = 'Avatar esterni';
$txt['avatar_upload'] = 'Avatar caricabili';
$txt['avatar_server_stored'] = 'Avatar presenti nel server';
$txt['avatar_server_stored_groups'] = 'Gruppi autorizzati a selezionare avatar presenti nel server';
$txt['avatar_upload_groups'] = 'Gruppi autorizzati a caricare avatar sul server';
$txt['avatar_external_url_groups'] = 'Gruppi autorizzati a selezionare un indirizzo esterno';
$txt['avatar_select_permission'] = 'Imposta permessi per ogni gruppo';
$txt['avatar_download_external'] = 'Scarica avatar dal seguente indirizzo';
$txt['custom_avatar_enabled'] = 'Carica avatar in...';
$txt['option_attachment_dir'] = 'Nella cartella degli avatar';
$txt['option_specified_dir'] = 'Nella cartella specifica...';
$txt['custom_avatar_dir'] = 'Cartella di upload';
$txt['custom_avatar_dir_desc'] = 'Deve essere diversa dalla cartella di storage del server.';
$txt['custom_avatar_url'] = 'URL per il caricamento';
$txt['custom_avatar_check_empty'] = 'Il percorso indicato per gli avatar potrebbe essere vuoto o non valido. Assicurati che queste impostazioni siano corrette.';
$txt['avatar_reencode'] = 'Ricodifica avatar potenzialmente pericolosi';
$txt['avatar_reencode_note'] = '(richiede il modulo GD)';
$txt['avatar_paranoid_warning'] = 'Il check di sicurezza estensivo può produrre un numero elevato di avatar rifiutati.';
$txt['avatar_paranoid'] = 'Esegui check di sicurezza estensivi sugli avatar caricati';

$txt['repair_attachments'] = 'Manutenzione allegati';
$txt['repair_attachments_complete'] = 'Manutenzione completata';
$txt['repair_attachments_complete_desc'] = 'Tutti gli errori selezionati sono stati corretti';
$txt['repair_attachments_no_errors'] = 'Non è stato trovato alcun errore!';
$txt['repair_attachments_error_desc'] = 'I seguenti errori sono stati trovati nel corso dell\'operazione di manutenzione. Selezionare la casella di spunta accanto all\'errore da correggere e fare clic su \'Continua\'.';
$txt['repair_attachments_continue'] = 'Continua';
$txt['repair_attachments_cancel'] = 'Annulla';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d anteprime mancano del relativo allegato';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d allegati sono marcati come aventi anteprime ma non ne hanno';
$txt['attach_repair_file_missing_on_disk'] = '%1$d allegati/avatar hanno un riferimento ma non esistono più sul disco';
$txt['attach_repair_file_wrong_size'] = '%1$d allegati/avatar sembrano avere una dimensione del file errata';
$txt['attach_repair_file_size_of_zero'] = '%1$d allegati/avatar hanno dimensione zero su disco. (Verranno eliminati)';
$txt['attach_repair_attachment_no_msg'] = '%1$d allegati non sono più associati ad alcun post';
$txt['attach_repair_avatar_no_member'] = '%1$d avatar non hanno più un utente associato';
$txt['attach_repair_wrong_folder'] = '%1$d allegati sono posizionati nella cartella errata';

$txt['news_title'] = 'News e newsletter';
$txt['news_settings_desc'] = 'Da qui è possibile cambiare le impostazioni ed i permessi relativi alle notizie ed alle newsletter.';
$txt['news_settings_submit'] = 'Salva';
$txt['news_mailing_desc'] = 'Da questo menu è possibile inviare messaggi a tutti gli utenti che si sono registrati ed hanno inserito il proprio indirizzo e-mail. è possibile modificare la lista di distribuzione, o inviare messaggi a tutti. Utile per importanti informazioni di aggiornamento o notizie.';
$txt['groups_edit_news'] = 'Gruppi che possono modificare le notizie';
$txt['groups_send_mail'] = 'Gruppi che possono inviare newsletter al forum';
$txt['xmlnews_enable'] = 'Abilita notizie XML/RSS';
$txt['xmlnews_maxlen'] = 'Lunghezza massima post:<div class="smalltext">(0 per disabilitare - non consigliato.)</div>';
$txt['editnews_clickadd'] = 'Fare clic qui per aggiungere un altro elemento.';
$txt['editnews_remove_selected'] = 'Rimuovi selezionate';
$txt['editnews_remove_confirm'] = 'Rimuovere le notizie selezionate?';
$txt['censor_clickadd'] = 'Fare clic qui per aggiungere un\'altra parola.';

$txt['layout_controls'] = 'Forum';
$txt['logs'] = 'Registri';
$txt['generate_reports'] = 'Genera rapporti';

$txt['update_available'] = 'Aggiornamento disponibile!';
$txt['update_message'] = 'Stai utilizzando una versione non aggiornata di SMF, contenente alcuni bug che potrebbero essere stati sistemati nel frattempo. Ti consigliamo di <a href="" id="update-link">aggiornare il forum</a> all\'ultima versione appena possibile. Ci vuole solo un minuto!';

$txt['manageposts'] = 'Post e topic';
$txt['manageposts_title'] = 'Gestione post e topic';
$txt['manageposts_description'] = 'Da qui è possibile gestire tutte le impostazioni relative ai topic e ai post.';

$txt['manageposts_seconds'] = 'secondi';
$txt['manageposts_minutes'] = 'minuti';
$txt['manageposts_characters'] = 'caratteri';
$txt['manageposts_days'] = 'giorni';
$txt['manageposts_posts'] = 'post';
$txt['manageposts_topics'] = 'topic';

$txt['manageposts_settings'] = 'Impostazioni post';
$txt['manageposts_settings_description'] = 'Qui puoi impostare tutte le opzioni relative ai post e al loro invio.';
$txt['manageposts_settings_submit'] = 'Salva';

$txt['manageposts_bbc_settings'] = 'Codice bulletin board (BBC)';
$txt['manageposts_bbc_settings_description'] = 'Il BBC può essere usato per aggiungere stile ai post del forum. Ad esempio, per evidenziare la parola \'casa\' si può inserire [b]casa[/b]. Tutti i tag del BBC sono inseriti tra parentesi quadre (\'[\' e \']\').';
$txt['manageposts_bbc_settings_title'] = 'Impostazioni BBC';
$txt['manageposts_bbc_settings_submit'] = 'Salva';

$txt['manageposts_topic_settings'] = 'Impostazioni topic';
$txt['manageposts_topic_settings_description'] = 'Da qui è possibile modificare tutte le impostazioni relative ai topic.';
$txt['manageposts_topic_settings_submit'] = 'Salva';

$txt['removeNestedQuotes'] = 'Rimuovi citazioni annidate durante l\'invio';
$txt['enableEmbeddedFlash'] = 'Abilita flash nei post';
$txt['enableEmbeddedFlash_warning'] = 'potrebbe essere un rischio per la sicurezza!';
$txt['enableSpellChecking'] = 'Abilita controllo ortografico';
$txt['enableSpellChecking_warning'] = 'non funziona su tutti i server!';
$txt['disable_wysiwyg'] = 'Disabilita editor WYSIWYG';
$txt['max_messageLength'] = 'Dimensione massima consentita per un post';
$txt['max_messageLength_zero'] = '0 per nessun limite.';
$txt['fixLongWords'] = 'Spezza le parole con più lettere di';
$txt['fixLongWords_zero'] = '0 per disabilitare.';
$txt['fixLongWords_warning'] = 'non funziona su tutti i server!';
$txt['topicSummaryPosts'] = 'Post da visualizzare nel sommario del topic';
$txt['spamWaitTime'] = 'Intervallo richiesto tra un post e l\'altro da parte dello stesso IP';
$txt['edit_wait_time'] = 'Tempo di attesa di cortesia prima di modifiche';
$txt['edit_disable_time'] = 'Tempo massimo dopo l\'invio in cui sono permesse modifiche';
$txt['edit_disable_time_zero'] = '0 per disabilitare';

$txt['enableBBC'] = 'Abilita il codice bulletin board (BBC)';
$txt['enablePostHTML'] = 'Abilita HTML <em>di base</em> nei post';
$txt['autoLinkUrls'] = 'Inserisci automaticamente il link agli URL inviati';
$txt['disabledBBC'] = 'BBC disabilitati';
$txt['bbcTagsToUse'] = 'BBC abilitati';
$txt['bbcTagsToUse_select'] = 'Seleziona i codici che possono essere utilizzati';
$txt['bbcTagsToUse_select_all'] = 'Seleziona tutti i codici';

$txt['enableStickyTopics'] = 'Abilita i topic importanti';
$txt['enableParticipation'] = 'Abilita icone partecipative';
$txt['oldTopicDays'] = 'Tempo prima che un topic venga indicato come vecchio durante l\'inserimento di una risposta';
$txt['oldTopicDays_zero'] = '0 per disabilitare';
$txt['defaultMaxTopics'] = 'Numero di topic per pagina nell\'indice dei post';
$txt['defaultMaxMessages'] = 'Numero di post per pagina in una pagina di topic.';
$txt['hotTopicPosts'] = 'Numero di post per un topic caldo';
$txt['hotTopicVeryPosts'] = 'Numero di post per un topic rovente';
$txt['enableAllMessages'] = 'Dimensione massima topic per mostrare &quot;Tutti&quot; i post';
$txt['enableAllMessages_zero'] = '0 per non mostrare mai &quot;Tutti&quot;';
$txt['disableCustomPerPage'] = 'Disabilita la personalizzazione del conteggio topic/post per pagina.';
$txt['enablePreviousNext'] = 'Abilita link al topic precedente/seguente';

$txt['not_done_title'] = 'Ancora in completamento!';
$txt['not_done_reason'] = 'Per evitare di sovraccaricare il server, il processo è stato temporaneamente fermato. Dovrebbe proseguire automaticamente tra pochi secondi.  Se così non dovesse essere, fai clic su Continua.';
$txt['not_done_continue'] = 'Continua';

$txt['general_settings'] = 'Generale';
$txt['database_paths_settings'] = 'Database e percorsi';
$txt['cookies_sessions_settings'] = 'Cookie e sessioni';
$txt['caching_settings'] = 'Impostazioni Caching';
$txt['load_balancing_settings'] = 'Ottimizzazione del Caricamento';

$txt['language_configuration'] = 'Traduzioni';
$txt['language_description'] = 'Questa sezione ti permette di gestire le traduzioni installate sul tuo forum e scaricarle dal sito di Simple Machines. Da qui puoi anche modificare le impostazioni legate alle lingua in generale.';
$txt['language_edit'] = 'Modifica traduzioni';
$txt['language_add'] = 'Aggiungi traduzione';
$txt['language_settings'] = 'Impostazioni';

$txt['advanced'] = 'Avanzato';
$txt['simple'] = 'Semplice';

$txt['admin_news_select_recipients'] = 'Seleziona chi dovrà ricevere una copia della newsletter';
$txt['admin_news_select_group'] = 'Gruppi utente';
$txt['admin_news_select_group_desc'] = 'Seleziona i gruppi che riceveranno questa newsletter.';
$txt['admin_news_select_members'] = 'Utenti';
$txt['admin_news_select_members_desc'] = 'Utenti aggiuntivi che riceveranno la newsletter.';
$txt['admin_news_select_excluded_members'] = 'Utenti esclusi';
$txt['admin_news_select_excluded_members_desc'] = 'Utenti che non riceveranno più la newsletter.';
$txt['admin_news_select_excluded_groups'] = 'Gruppi esclusi';
$txt['admin_news_select_excluded_groups_desc'] = 'Seleziona i gruppi che non riceveranno più la newsletter.';
$txt['admin_news_select_email'] = 'Indirizzi e-mail';
$txt['admin_news_select_email_desc'] = 'Una lista degli indirizzi e-mail, separati da punto e virgola, ai quali va inviata la newsletter. (es. indirizzo1; indirizzo2)';
$txt['admin_news_select_override_notify'] = 'Ignora impostazioni per la notifica';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Non puoi inviare un messaggio personale ad un indirizzo e-mail. Se continuerai, tutti gli indirizzi e-mail inseriti verranno aggiunti.\\n\\nSei sicuro di voler procedere?';

$txt['mailqueue_browse'] = 'Sfoglia coda';
$txt['mailqueue_settings'] = 'Impostazioni';

$txt['admin_search'] = 'Ricerca veloce';
$txt['admin_search_type_internal'] = 'Azione/Impostazione';
$txt['admin_search_type_member'] = 'Utente';
$txt['admin_search_type_online'] = 'Manuale online';
$txt['admin_search_go'] = 'Cerca';
$txt['admin_search_results'] = 'Risultati ricerca';
$txt['admin_search_results_desc'] = 'Risultati per la ricerca: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Nuova ricerca';
$txt['admin_search_results_none'] = 'Nessuna corrispondenza trovata!';

$txt['admin_search_section_sections'] = 'Sezione';
$txt['admin_search_section_settings'] = 'Impostazione';

$txt['core_settings_title'] = 'Funzioni di base';
$txt['mods_cat_features'] = 'Generale';
$txt['mods_cat_security_general'] = 'Generale';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'Varie';
$txt['mods_cat_layout'] = 'Layout';
$txt['karma'] = 'Karma';
$txt['moderation_settings_short'] = 'Moderazione';
$txt['signature_settings_short'] = 'Firme';
$txt['custom_profile_shorttitle'] = 'Campi Profilo';
$txt['pruning_title'] = 'Pulizia del registro azioni';

$txt['boardsEdit'] = 'Modificare sezione';
$txt['mboards_new_cat'] = 'Crea nuova categoria';
$txt['manage_holidays'] = 'Gestisci festività';
$txt['calendar_settings'] = 'Impostazioni calendario';
$txt['search_weights'] = 'Pesi';
$txt['search_method'] = 'Metodo di ricerca';

$txt['smiley_sets'] = 'Set di smiley';
$txt['smileys_add'] = 'Aggiungi smiley';
$txt['smileys_edit'] = 'Modifica smiley';
$txt['smileys_set_order'] = 'Imposta ordine smiley';
$txt['icons_edit_message_icons'] = 'Modifica icone post';

$txt['membergroups_new_group'] = 'Aggiungi gruppo';
$txt['membergroups_edit_groups'] = 'Modifica gruppi utente';
$txt['permissions_groups'] = 'Permessi generali';
$txt['permissions_boards'] = 'Permessi per sezioni';
$txt['permissions_profiles'] = 'Modifica profili';
$txt['permissions_post_moderation'] = 'Moderazione post';

$txt['browse_packages'] = 'Sfoglia i pacchetti';
$txt['download_packages'] = 'Scarica pacchetti';
$txt['installed_packages'] = 'Pacchetti installati';
$txt['package_file_perms'] = 'Permessi file';
$txt['package_settings'] = 'Opzioni';
$txt['themeadmin_admin_title'] = 'Gestisci ed installa';
$txt['themeadmin_list_title'] = 'Impostazioni Temi';
$txt['themeadmin_reset_title'] = 'Opzioni utente';
$txt['themeadmin_edit_title'] = 'Modifica temi';
$txt['admin_browse_register_new'] = 'Registra un nuovo utente';

$txt['search_engines'] = 'Motori di ricerca';
$txt['spiders'] = 'Crawler';
$txt['spider_logs'] = 'Registro spider';
$txt['spider_stats'] = 'Statistiche';

$txt['paid_subscriptions'] = 'Sottoscrizioni a pagamento';
$txt['paid_subs_view'] = 'Visualizza sottoscrizioni';

?>