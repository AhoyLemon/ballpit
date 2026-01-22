<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Indice dei messaggi privati';
$txt['send_message'] = 'Invia messaggio';
$txt['pm_add'] = 'Aggiungi';
$txt['make_bcc'] = 'Aggiungi BBC';
$txt['pm_to'] = 'A';
$txt['pm_bcc'] = 'CCn';
$txt['inbox'] = 'Ricevuti';
$txt['conversation'] = 'Conversazione';
$txt['messages'] = 'Messaggi';
$txt['sent_items'] = 'Messaggi inviati';
$txt['new_message'] = 'Nuovo messaggio';
$txt['delete_message'] = 'Elimina messaggi';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Elimina tutti i messaggi nella PMBOX';
$txt['delete_all_confirm'] = 'Vuoi eliminare tutti i messaggi?';
$txt['recipient'] = 'Destinatario';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Nuovo messaggio privato: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'Hai appena ricevuto un messaggio privato da SENDER su ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANTE: ricorda, questa è solo una notifica. Non rispondere a questa e-mail.' . "\n\n" . 'Il messaggio inviato è:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(destinatari multipli: \'name1, name2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Rispondi a questo messaggio privato qui:';

$txt['delete_selected_confirm'] = 'Vuoi eliminare tutti i messaggi privati selezionati?';

$txt['sent_to'] = 'Inviato a';
$txt['reply_to_all'] = 'Rispondi a tutti';
$txt['delete_conversation'] = 'Elimina conversazione';

$txt['pm_capacity'] = 'Capacità';
$txt['pm_currently_using'] = '%1$s messaggi, piena al %2$s%%.';
$txt['pm_sent'] = 'Il tuo messaggio è stato inviato correttamente.';

$txt['pm_error_user_not_found'] = 'Utente \'%1$s\' non trovato.';
$txt['pm_error_ignored_by_user'] = 'L\'utente \'%1$s\' ha bloccato il tuo messaggio privato.';
$txt['pm_error_data_limit_reached'] = 'MP non inviato a \'%1$s\' poiché la cartella messaggi ricevuti è piena.';
$txt['pm_error_user_cannot_read'] = 'L\'utente \'%1$s\' non può ricevere messaggi privati.';
$txt['pm_successfully_sent'] = 'MP inviato con successo a \'%1$s\'.';
$txt['pm_send_report'] = 'Invia rapporto';
$txt['pm_save_outbox'] = 'Salva una copia in Messaggi inviati';
$txt['pm_undisclosed_recipients'] = 'Destinatari nascosti';
$txt['pm_too_many_recipients'] = 'Non puoi inviare messaggi privati a più di %1$d destinatari per volta.';

$txt['pm_read'] = 'Letto';
$txt['pm_replied'] = 'Risposto a';

// Message Pruning.
$txt['pm_prune'] = 'Pulizia messaggi';
$txt['pm_prune_desc1'] = 'Elimina tutti i messaggi privati più vecchi di';
$txt['pm_prune_desc2'] = 'giorni.';
$txt['pm_prune_warning'] = 'Vuoi procedere con la pulizia dei propri messaggi privati?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Ulteriori azioni';
$txt['pm_actions_delete_selected'] = 'Elimina selezionati';
$txt['pm_actions_filter_by_label'] = 'Filtra per etichetta';
$txt['pm_actions_go'] = 'Vai';

// Manage Labels Screen.
$txt['pm_apply'] = 'Applica';
$txt['pm_manage_labels'] = 'Gestione etichette';
$txt['pm_labels_delete'] = 'Vuoi eliminare le etichette selezionate?';
$txt['pm_labels_desc'] = 'Da qui è possibile aggiungere, modificare e eliminare le etichette utilizzate nella propria cartella dei messaggi privati.';
$txt['pm_label_add_new'] = 'Aggiungi nuova etichetta';
$txt['pm_label_name'] = 'Nome etichetta';
$txt['pm_labels_no_exist'] = 'Nessuna etichetta impostata al momento!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etichetta';
$txt['pm_msg_label_title'] = 'Etichetta messaggio';
$txt['pm_msg_label_apply'] = 'Aggiungi etichetta';
$txt['pm_msg_label_remove'] = 'Elimina etichetta';
$txt['pm_msg_label_inbox'] = 'Messaggi ricevuti';
$txt['pm_sel_label_title'] = 'Etichetta selezionata';

// Sidebar Headings.
$txt['pm_labels'] = 'Etichette';
$txt['pm_messages'] = 'Messaggi';
$txt['pm_actions'] = 'Azioni';
$txt['pm_preferences'] = 'Preferenze';

$txt['pm_is_replied_to'] = 'Hai già inoltrato o risposto a questo messaggio.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Segnala all\'amministratore';
$txt['pm_report_title'] = 'Segnala messaggio privato';
$txt['pm_report_desc'] = 'Da questa pagina è possibile segnalare il messaggio privato ricevuto al team degli amministratori del forum. Assicurarsi di spiegare la causa della segnalazione del messaggio, poiché verrà inviata insieme al contenuto del messaggio originale.';
$txt['pm_report_admins'] = 'Amministratore a cui segnalare';
$txt['pm_report_all_admins'] = 'Inviare a tutti gli amministratori del forum';
$txt['pm_report_reason'] = 'Motivo per cui segnalando questo messaggio';
$txt['pm_report_message'] = 'Segnala messaggio';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} ha segnalato il seguente messaggio privato, inviato da {SENDER}, per il motivo seguente:';
$txt['pm_report_pm_other_recipients'] = 'Gli altri destinatari del messaggio sono:';
$txt['pm_report_pm_hidden'] = '%1$d destinatari nascosti';
$txt['pm_report_pm_unedited_below'] = 'Seguono i contenuti originali del messaggio privato segnalato:';
$txt['pm_report_pm_sent'] = 'Inviato:';

$txt['pm_report_done'] = 'Grazie per aver inviato questa segnalazione. Riceverete una risposta dal team di amministrazione a breve.';
$txt['pm_report_return'] = 'Torna ai messaggi ricevuti';

$txt['pm_search_title'] = 'Ricerca tra i messaggi privati';
$txt['pm_search_bar_title'] = 'Ricerca messaggi';
$txt['pm_search_text'] = 'Cerca per';
$txt['pm_search_go'] = 'Cerca';
$txt['pm_search_advanced'] = 'Ricerca avanzata';
$txt['pm_search_user'] = 'Dall\'utente';
$txt['pm_search_match_all'] = 'Confronta tutte le parole';
$txt['pm_search_match_any'] = 'Confronta qualsiasi parola';
$txt['pm_search_options'] = 'Opzioni';
$txt['pm_search_post_age'] = 'Data';
$txt['pm_search_show_complete'] = 'Mostra messaggio completo nei risultati.';
$txt['pm_search_subject_only'] = 'Cerca solo per oggetto e autore.';
$txt['pm_search_between'] = 'tra';
$txt['pm_search_between_and'] = 'e';
$txt['pm_search_between_days'] = 'giorni';
$txt['pm_search_order'] = 'Ordina i risultati per';
$txt['pm_search_choose_label'] = 'Scegli quali etichette cercare, o cercale tutte';

$txt['pm_search_results'] = 'Risultati ricerca';
$txt['pm_search_none_found'] = 'Nessun messaggio trovato';

$txt['pm_search_orderby_relevant_first'] = 'Prima i più significativi';
$txt['pm_search_orderby_recent_first'] = 'Prima i più recenti';
$txt['pm_search_orderby_old_first'] = 'Prima i più vecchi';

$txt['pm_visual_verification_label'] = 'Verifica';
$txt['pm_visual_verification_desc'] = 'Inserire il codice nell\'immagine qui sopra per inviare questo MP.';

$txt['pm_settings'] = 'Impostazioni';
$txt['pm_change_view'] = 'Cambia visualizzazione';

$txt['pm_manage_rules'] = 'Gestisci regole';
$txt['pm_manage_rules_desc'] = 'Le regole messaggi permettono di ordinare automaticamente i messaggi privati in arrivo, in base al set di criteri da te definiti. In basso sono presenti tutte le regole che hai attualmente creato. Per modificare una di queste, clicca semplicemente sul nome della regola.';
$txt['pm_rules_none'] = 'Non hai ancora impostato delle regole per i messaggi.';
$txt['pm_rule_title'] = 'Regola';
$txt['pm_add_rule'] = 'Aggiungi nuova regola';
$txt['pm_apply_rules'] = 'Applica adesso le regole';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Vuoi applicare le regole attuali a tutti i messaggi personali?';
$txt['pm_edit_rule'] = 'Modifica regola';
$txt['pm_rule_save'] = 'Salva regola';
$txt['pm_delete_selected_rule'] = 'Cancella regole selezionate';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Vuoi cancellare le regole selezionate?';
$txt['pm_rule_name'] = 'Nome';
$txt['pm_rule_name_desc'] = 'Nome per ricordare questa regola';
$txt['pm_rule_name_default'] = '[NAME]';
$txt['pm_rule_description'] = 'Descrizione';
$txt['pm_rule_not_defined'] = 'Aggiungi qualche criterio per costruire la descrizione della regola.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>N.B:</strong>Sembri avere JavaScript disabilitato. Ti raccomandiamo di abilitare JavaScript per questa funzione.</span>';
$txt['pm_rule_criteria'] = 'Criterio';
$txt['pm_rule_criteria_add'] = 'Aggiungi criterio';
$txt['pm_rule_criteria_pick'] = 'Scegli criterio';
$txt['pm_rule_mid'] = 'Nome mittente';
$txt['pm_rule_gid'] = 'Gruppo del mittente';
$txt['pm_rule_sub'] = 'L\'oggetto del messaggio contiene';
$txt['pm_rule_msg'] = 'Il corpo messaggio contiene';
$txt['pm_rule_bud'] = 'Il mittente è nella lista amici';
$txt['pm_rule_sel_group'] = 'Seleziona gruppo';
$txt['pm_rule_logic'] = 'Quando si controllano i criteri';
$txt['pm_rule_logic_and'] = 'Tutti i criteri devono corrispondere';
$txt['pm_rule_logic_or'] = 'Qualsiasi criterio può corrispondere';
$txt['pm_rule_actions'] = 'Azioni';
$txt['pm_rule_sel_action'] = 'Seleziona un\'azione';
$txt['pm_rule_add_action'] = 'Aggiungi azione';
$txt['pm_rule_label'] = 'Etichetta messaggio con';
$txt['pm_rule_sel_label'] = 'Seleziona etichetta';
$txt['pm_rule_delete'] = 'Cancella messaggio';
$txt['pm_rule_no_name'] = 'Hai dimenticato di inserire un nome per questa regola.';
$txt['pm_rule_no_criteria'] = 'Una regola deve avere almeno un criterio e un set di azioni.';
$txt['pm_rule_too_complex'] = 'La regola creata è troppo lunga per essere salvata da SMF. Prova a suddividerla in regole più piccole.';

$txt['pm_readable_and'] = '<em>e</em>';
$txt['pm_readable_or'] = '<em>o</em>';
$txt['pm_readable_start'] = 'Se';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'Il messaggio è da parte di &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'il mittente è del gruppo &quot;{GROUP}&quot;';
$txt['pm_readable_subject'] = 'l\'oggetto del messaggio contiene &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'il corpo messaggio contiene &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'il mittente è nella lista amici';
$txt['pm_readable_label'] = 'applica etichetta &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'cancella il messaggio';
$txt['pm_readable_then'] = '<strong>quindi</strong>';

?>