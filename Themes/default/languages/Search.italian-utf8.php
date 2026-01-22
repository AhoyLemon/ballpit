<?php
// Version: 2.0; Search

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['set_parameters'] = 'Imposta i parametri della ricerca';
$txt['choose_board'] = 'Sezioni comprese nella ricerca';
$txt['all_words'] = 'Tutti i termini';
$txt['any_words'] = 'Un termine qualsiasi';
$txt['by_user'] = 'dall\'utente';

$txt['search_post_age'] = 'Età del messaggio';
$txt['search_between'] = 'tra';
$txt['search_and'] = 'e';
$txt['search_options'] = 'Opzioni';
$txt['search_show_complete_messages'] = 'Mostra i risultati come messaggi';
$txt['search_subject_only'] = 'Cerca solo nell\'oggetto delle discussioni';
$txt['search_relevance'] = 'Rilevanza';
$txt['search_date_posted'] = 'Data di inserimento';
$txt['search_order'] = 'Ordine';
$txt['search_orderby_relevant_first'] = 'Prima i risultati più rilevanti';
$txt['search_orderby_large_first'] = 'Prima le discussioni più lunghe';
$txt['search_orderby_small_first'] = 'Prima le discussioni più brevi';
$txt['search_orderby_recent_first'] = 'Prima le discussioni più recenti';
$txt['search_orderby_old_first'] = 'Prima le discussioni più vecchie';
$txt['search_visual_verification_label'] = 'Verifica';
$txt['search_visual_verification_desc'] = 'Inserisci il codice in alto per iniziare la ricerca.';

$txt['search_specific_topic'] = 'Cerca solo nei messaggi della discussione';

$txt['mods_cat_search'] = 'Cerca';
$txt['groups_search_posts'] = 'Gruppi abilitati alla funzione di ricerca';
$txt['simpleSearch'] = 'Abilita ricerca semplice';
$txt['search_results_per_page'] = 'Numero di risultati della ricerca per pagina';
$txt['search_weight_frequency'] = 'Peso specifico della ricerca per numero di messaggi corrispondenti in una discussione';
$txt['search_weight_age'] = 'Peso specifico della ricerca per età dell\'ultimo messaggio corrispondente';
$txt['search_weight_length'] = 'Peso specifico della ricerca per lunghezza della discussione';
$txt['search_weight_subject'] = 'Peso specifico della ricerca per corrispondenza nell\'oggetto';
$txt['search_weight_first_message'] = 'Peso specifico della ricerca per corrispondenza nel primo messaggio';
$txt['search_weight_sticky'] = 'Peso specifico della ricerca per discussione importante';

$txt['search_settings_desc'] = 'Opzioni per modificare le impostazioni fondamentali della funzione di ricerca.';
$txt['search_settings_title'] = 'Impostazioni della funzione di ricerca';

$txt['search_weights_desc'] = 'Opzioni per modificare i singoli componenti dell\'indice di rilevanza.';
$txt['search_weights_title'] = 'Pesi della ricerca';
$txt['search_weights_total'] = 'Totale';
$txt['search_weights_save'] = 'Salva';

$txt['search_method_desc'] = 'Opzioni per impostare il modo in cui viene effettuata una ricerca.';
$txt['search_method_title'] = 'Metodo di ricerca';
$txt['search_method_save'] = 'Salva';
$txt['search_method_messages_table_space'] = 'Spazio utilizzato dai messaggi del forum nel database';
$txt['search_method_messages_index_space'] = 'Spazio utilizzato per indicizzare i messaggi nel database';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Indice di tutto il testo';
$txt['search_method_no_index_exists'] = 'non esiste attualmente';
$txt['search_method_fulltext_create'] = 'crea un indice di tutto il testo';
$txt['search_method_fulltext_cannot_create'] = 'non può essere creato perché il messaggio più lungo supera i 65.535 caratteri o la tabella non è di tipo MyISAM';
$txt['search_method_index_already_exists'] = 'l\'indice è già esistente';
$txt['search_method_fulltext_remove'] = 'elimina indice di tutto il testo';
$txt['search_method_index_partial'] = 'creato parzialmente';
$txt['search_index_custom_resume'] = 'riprendi';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Per utilizzare la ricerca di tutto il testo, è necessario creare prima un indice completo!';

$txt['search_index'] = 'Ricerca nell\'indice';
$txt['search_index_none'] = 'Nessun indice';
$txt['search_index_custom'] = 'Indice personalizzato';
$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'Il pannello di amministrazione permette solo di spostarsi fra gli indici di ricerca. Per configurare ulteriormente le impostazioni di Sphinx, utilizza il file sphinx_config.php.';
$txt['search_index_label'] = 'Indice';
$txt['search_index_size'] = 'Dimensione';
$txt['search_index_create_custom'] = 'crea indice personalizzato';
$txt['search_index_custom_remove'] = 'elimina indice personalizzato';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Per poter utilizzare una ricerca secondo un indice personalizzato, è necessario per prima cosa creare l\'indice stesso!';

$txt['search_force_index'] = 'Obbliga ad utilizzare un indice di ricerca';
$txt['search_match_words'] = 'Solo corrispondenza di parole intere';
$txt['search_max_results'] = 'Numero massimo di risultati da visualizzare';
$txt['search_max_results_disable'] = '(0 = nessun limite)';
$txt['search_floodcontrol_time'] = 'Tempo richiesto tra una ricerca e l\'altra da parte dello stesso utente';
$txt['search_floodcontrol_time_desc'] = '(0 per nessun limite, in secondi)';

$txt['search_create_index'] = 'Crea un indice';
$txt['search_create_index_why'] = 'Perché	 creare un indice di ricerca?';
$txt['search_create_index_start'] = 'Crea';
$txt['search_predefined'] = 'Profilo definito precedentemente';
$txt['search_predefined_small'] = 'Indice di piccole dimensioni';
$txt['search_predefined_moderate'] = 'Indice di medie dimensioni';
$txt['search_predefined_large'] = 'Indice di grandi dimensioni';
$txt['search_create_index_continue'] = 'Continua';
$txt['search_create_index_not_ready'] = 'Creazione di un indice di ricerca per i messaggi in corso. Per evitare il sovraccarico del server, il processo è stato temporaneamente sospeso. Dovrebbe riprendere entro pochi secondi. In caso contrario, fare clic sul pulsante "Continua".';
$txt['search_create_index_progress'] = 'Avanzamento';
$txt['search_create_index_done'] = 'L\'indice di ricerca personalizzato è stato creato correttamente!';
$txt['search_create_index_done_link'] = 'Continua';
$txt['search_double_index'] = 'Al momento esistono due indici della tabella dei messaggi. Per ottimizzare le prestazioni è preferibile cancellarne uno.';

$txt['search_error_indexed_chars'] = 'Numero di caratteri indicizzati non valido. Affinché un indice sia utilizzabile, sono necessari almeno tre caratteri.';
$txt['search_error_max_percentage'] = 'Percentuale di parole da evitare non valida. Utilizzare un valore pari almeno al 5%.';
$txt['error_string_too_long'] = 'La stringa di ricerca deve inferiore ai %1$d caratteri.';

$txt['search_adjust_query'] = 'Correggi i parametri di ricerca';
$txt['search_adjust_submit'] = 'Rivedi la ricerca';
$txt['search_did_you_mean'] = 'Forse volevi cercare';

$txt['search_example'] = '<em>es.:</em> Orwell "La Fattoria degli Animali" -film';

$txt['search_engines_description'] = 'Da questa area puoi decidere con quale dettaglio tracciare il modo in cui i motori di ricerca indicizzano il tuo forum, come controllare i registri relativi alla loro attività.';
$txt['spider_mode'] = 'Livello di tracciamento per il motore di ricerca<div class="smalltext">Nota: un livello maggiore di tracciamento incrementa la richiesta di risorse al server.</div>';
$txt['spider_mode_off'] = 'Disabilitato';
$txt['spider_mode_standard'] = 'Standard - Registra il minimo indispensabile dell\'attività dei crawler.';
$txt['spider_mode_high'] = 'Alta - Fornisce statistiche maggiormente accurate.';
$txt['spider_mode_vhigh'] = 'Molto Alta - Come per l\'impostazione &quot;Alta&quot;, solo che registra i dati relativi ad ogni pagina visitata.';
$txt['spider_settings_desc'] = 'In questa pagina puoi cambiare le impostazioni per il tracciamento dei crawler. N.B: se desideri attivare la pulizia automatica dei registri, puoi farlo andando <a href="%1$s">qui</a>';

$txt['spider_group'] = 'Applica i permessi restrittivi dal gruppo<div class="smalltext">Per permetterti di bloccare l\'indicizzazione di alcune pagine da parte dei crawler.</div>';
$txt['spider_group_none'] = 'Disabilitato';

$txt['show_spider_online'] = 'Mostra i crawler nella lista di chi è online';
$txt['show_spider_online_no'] = 'Non a tutti';
$txt['show_spider_online_summary'] = 'Mostra la quantità di crawler';
$txt['show_spider_online_detail'] = 'Mostra i dettagli del crawler';
$txt['show_spider_online_detail_admin'] = 'Mostra i dettagli del crawler - Solo amministratori';

$txt['spider_name'] = 'Nome crawler';
$txt['spider_last_seen'] = 'Visto l\'ultima volta';
$txt['spider_last_never'] = 'Mai';
$txt['spider_agent'] = 'User Agent';
$txt['spider_ip_info'] = 'Indirizzo IP';
$txt['spiders_add'] = 'Aggiungi un nuovo crawler';
$txt['spiders_edit'] = 'Modifica crawler';
$txt['spiders_remove_selected'] = 'Rimuovi i crawler selezionati';
$txt['spider_remove_selected_confirm'] = 'Sei sicuro di voler rimuovere questi crawler?\\n\\nTutte le statistiche associate verranno cancellate!';
$txt['spiders_no_entries'] = 'Al momento non ci sono spider di motori di ricerca configurati.';

$txt['add_spider_desc'] = 'In questa pagina potrai modificare i parametri secondo cui un crawler viene catalogato. Se lo user agent/indirizzo IP di un visitatore corrispondono a quelli inseriti in basso, quest\'ultimo verrà identificato come crawler di un motore di ricerca e tracciato come tale nelle preferenze del forum.';
$txt['spider_name_desc'] = 'Nome secondo il quale verrà identificato il crawler';
$txt['spider_agent_desc'] = 'User agent associato a questo crawler';
$txt['spider_ip_info_desc'] = 'Lista di indirizzi IP associati a questo crawler.';

$txt['spider'] = 'Crawler';
$txt['spider_time'] = 'Periodo';
$txt['spider_viewing'] = 'Visualizzando';
$txt['spider_logs_empty'] = 'Al momento non sono presenti elementi nel registro delle attività degli spider.';
$txt['spider_logs_info'] = 'N.B: la registrazione di ogni azione del crawler avviene solo se il livello di tracciamento è impostato su &quot;alto&quot; o &quot;molto alto&quot;. I dettagli di ogni azione del crawler vengono registrati se il tracciamento è impostato su &quot;molto alto&quot;.';
$txt['spider_disabled'] = 'Disabilitato';

$txt['spider_logs_delete'] = 'Cancella dati';
$txt['spider_logs_delete_older'] = 'Cancella ogni dato più vecchio di';
$txt['spider_logs_delete_day'] = 'giorni.';
$txt['spider_logs_delete_submit'] = 'Cancella';
// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Desideri realmente cancellare tutte le voci appartenenti al log?';

$txt['spider_stats_select_month'] = 'Salta al mese';
$txt['spider_stats_page_hits'] = 'Visualizzazioni della pagina';
$txt['spider_stats_no_entries'] = 'Al momento non sono disponibili statistiche per gli spider dei motori di ricerca.';

?>