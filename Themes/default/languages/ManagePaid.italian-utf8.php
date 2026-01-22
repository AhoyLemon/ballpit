<?php
// Version: 2.0; ManagePaid

global $boardurl;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EURO (€)';
$txt['gbp'] = 'GBP (£)';
$txt['other'] = 'Altro';

$txt['paid_username'] = 'Username';

$txt['paid_subscriptions_desc'] = 'Da questa sezione puoi aggiungere, rimuovere e modificare i metodi di pagamento per le sottoscrizioni del tuo forum.';
$txt['paid_subs_settings'] = 'Impostazioni';
$txt['paid_subs_settings_desc'] = 'Da qui puoi modificare i metodi di pagamento disponibili per gli utenti.';
$txt['paid_subs_view'] = 'Visualizza le sottoscrizioni a pagamento';
$txt['paid_subs_view_desc'] = 'Da questa sezione puoi visualizzare tutte le sottoscrizioni a pagamento disponibili.';

// Setting type strings.
$txt['paid_enabled'] = 'Abilita le sottoscrizioni a pagamento';
$txt['paid_enabled_desc'] = 'Prima di poter abilitare le sottoscrizioni a pagamento, questa opzione deve essere attivata.';
$txt['paid_email'] = 'Invia e-mail di notifica';
$txt['paid_email_desc'] = 'Informa l\'ammnistratore quando una sottoscrizione a pagamento viene automaticamente modificata.';
$txt['paid_email_to'] = 'E-mail per corrispondenza';
$txt['paid_email_to_desc'] = 'Lista di indirizzi (separati da virgola) per l\'invio delle notifiche, in aggiunta agli amministratori del forum.';
$txt['paidsubs_test'] = 'Abilita modalità test';
$txt['paidsubs_test_desc'] = 'Questo imposta le sottoscrizioni a pagamento in modalità di test, dove possibile, verranno dunque utilizzati metodi di pagamento di prova su PayPal ed gli altri servizi. Non abilitarla, a meno che tu non sappia cosa stai facendo!';
$txt['paidsubs_test_confirm'] = 'Sei sicuro di voler abilitare il test mode?';
$txt['paid_email_no'] = 'Non inviare alcuna notifica';
$txt['paid_email_error'] = 'Informa quando una sottoscrizione a pagamento non viene completata con successo';
$txt['paid_email_all'] = 'Informa su tutte le modifiche automatiche apportate alla sottoscrizione a pagamento';
$txt['paid_currency'] = 'Seleziona valuta';
$txt['paid_currency_code'] = 'Codice valuta';
$txt['paid_currency_code_desc'] = 'Codice utilizzato a seconda del venditore';
$txt['paid_currency_symbol'] = 'Simbolo utilizzato secondo il metodo di pagamento';
$txt['paid_currency_symbol_desc'] = 'Utilizza \'%1.2f\' per indicare dove va inserito il numero, ad esempio $%1.2f, %1.2fDM, ect';
$txt['paypal_email'] = 'Indirizzo e-mail PayPal';
$txt['paypal_email_desc'] = 'Lascia in bianco se non desideri utilizzare PayPal.';
$txt['worldpay_id'] = 'ID installazione WorldPay';
$txt['worldpay_id_desc'] = 'L\'ID installazione viene generato da WorldPay. Lascia in bianco se non desideri utilizzare WorldPay';
$txt['worldpay_password'] = 'WorldPay Callback Password';
$txt['worldpay_password_desc'] = 'Quando imposti questa password su WorldPay, assicurati che sia unica e non la stessa utilizzata per il tuo account admin WorldPay!';
$txt['authorize_id'] = 'ID installazione Authorize.net';
$txt['authorize_id_desc'] = 'L\'ID installazione generato da Authorize.net. Lascia in bianco se non stai utilizzando Authorize.net';
$txt['authorize_transid'] = 'ID della transazione Authorize.Net';
$txt['2co_id'] = 'ID installazione 2co.com';
$txt['2co_id_desc'] = 'L\'ID installazione generato da 2co.com. Lascia in bianco se non stai utilizzando 2co.com';
$txt['2co_password'] = 'Password 2co.com';
$txt['2co_password_desc'] = 'La tua password per 2checkout.';
$txt['nochex_email'] = 'Indirizzo e-mail Nochex';
$txt['nochex_email_desc'] = 'E-mail di un account commerciante su Nochex. Lascia in bianco se non utilizzi Nochex';
$txt['paid_settings_save'] = 'Salva';

$txt['paid_note'] = '<strong class="alert">Nota:</strong>
Per le sottoscrizioni automaticamente aggiornate per i tuoi utenti,
	dovrai impostare un URL di ritorno per ognuno dei tuoi metodi di pagamento. Per tutti i tipi di pagamento, questo URL di ritorno deve essere impostato come:


	 &bull; <strong>' . $boardurl . '/subscriptions.php</strong>


	Puoi modificare direttamente il link per PayPal, cliccando <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">qui</a>.

	Per gli altri gateway (se installati), puoi trovare nel tuo pannello cliente, di solito sotto la dicitura "Return URL" o "Callback URL".';

// View subscription strings.
$txt['paid_name'] = 'Nome';
$txt['paid_status'] = 'Stato';
$txt['paid_cost'] = 'Costo';
$txt['paid_duration'] = 'Durata';
$txt['paid_active'] = 'Attivo';
$txt['paid_pending'] = 'Pagamento in sospeso';
$txt['paid_finished'] = 'Finito';
$txt['paid_total'] = 'Totale';
$txt['paid_is_active'] = 'Attivato';
$txt['paid_none_yet'] = 'Non hai ancora impostato alcuna sottoscrizione';
$txt['paid_payments_pending'] = 'Pagamenti in sospeso';
$txt['paid_order'] = 'Ordine';

$txt['yes'] = 'Sì';
$txt['no'] = 'No';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Aggiungi una nuova sottoscrizione';
$txt['paid_edit_subscription'] = 'Modifica sottoscrizione';
$txt['paid_delete_subscription'] = 'Cancella sottoscrizione';

$txt['paid_mod_name'] = 'Nome della sottoscrizione';
$txt['paid_mod_desc'] = 'Descrizione';
$txt['paid_mod_reminder'] = 'Invia una e-mail di promemoria';
$txt['paid_mod_reminder_desc'] = 'Numero di giorni prima 	entro i quali va inviato il promemoria per la scadenza della sottoscrizione. (In giorni, 0 per disabilitare la notifica)';
$txt['paid_mod_email'] = 'E-mail da mandare al completamento';
$txt['paid_mod_email_desc'] = 'Dove {NAME} è il nome utente; {FORUM} è il nome della community. L\'oggetto della e-mail deve essere specificato nella prima riga. Lascia in bianco per evitare le notifiche e-mail.';
$txt['paid_mod_cost_usd'] = 'Costo (USD)';
$txt['paid_mod_cost_eur'] = 'Costo (EUR)';
$txt['paid_mod_cost_gbp'] = 'Costo (GBP)';
$txt['paid_mod_cost_blank'] = 'Lascia in bianco per non offrire questa valuta.';
$txt['paid_mod_span'] = 'Durata della sottoscrizione';
$txt['paid_mod_span_days'] = 'Giorni';
$txt['paid_mod_span_weeks'] = 'Settimane';
$txt['paid_mod_span_months'] = 'Mesi';
$txt['paid_mod_span_years'] = 'Anni';
$txt['paid_mod_active'] = 'Attivo';
$txt['paid_mod_active_desc'] = 'Per unirsi, i nuovi utenti dovranno avere una sottoscrizione attiva.';
$txt['paid_mod_prim_group'] = 'Gruppo primario successivo alla sottoscrizione';
$txt['paid_mod_prim_group_desc'] = 'Gruppo principale dove inserire l\'utente all\'atto della sottoscrizione.';
$txt['paid_mod_add_groups'] = 'Gruppi aggiuntivi dopo la sottoscrizione';
$txt['paid_mod_add_groups_desc'] = 'Gruppi addizionali nei quali aggiungere l\'utente dopo la sottoscrizione.';
$txt['paid_mod_no_group'] = 'Non modificare	';
$txt['paid_mod_edit_note'] = 'Fai attenzione, le impostazioni del gruppo non possono essere cambiate perchè sono presenti degli utenti sottoscriventi!';
$txt['paid_mod_delete_warning'] = '<strong>ATTENZIONE</strong><br /><br />Se cancelli questa sottoscrizione, tutti gli utenti attualmente legati ad essa perderanno ogni diritto di accesso relativo. A meno che tu non voglia continuare, ti raccomandiamo di disattivare una sottoscrizione e non di cancellarla.<br />';
$txt['paid_mod_repeatable'] = 'Permetti agli utenti di rinnovare automantica la sottoscrizione.';
$txt['paid_mod_allow_partial'] = 'Permetti una sottoscrizione parziale';
$txt['paid_mod_allow_partial_desc'] = 'Se questa opzione è abilitata e nel caso in cui l\'utente paghi meno di quanto richiesto, verrà fornita una sottoscrizione in percentuale al periodo per il quale si è pagato.';
$txt['paid_mod_fixed_price'] = 'Sottoscrizione basata su prezzo fisso e sul periodo';
$txt['paid_mod_flexible_price'] = 'Il prezzo della sottoscrizione varia a seconda della durata dell\'ordinazione';
$txt['paid_mod_price_breakdown'] = 'Suddivisione flessibile del prezzo';
$txt['paid_mod_price_breakdown_desc'] = 'Definisci qui il costo in base al periodo scelto per la sottoscrizione. Ad esempio, costerà 12€ per un mese, ma solo 74€ per un anno. Se non vuoi definire un prezzo per un determinato lasso di tempo, lascia questo campo in bianco.';
$txt['flexible'] = 'Flessibile';

$txt['paid_per_day'] = 'Prezzo al giorno';
$txt['paid_per_week'] = 'Prezzo alla settimana';
$txt['paid_per_month'] = 'Prezzo al mese';
$txt['paid_per_year'] = 'Prezzo all\'anno';
$txt['day'] = 'Giorno';
$txt['week'] = 'Settimana';
$txt['month'] = 'Mese';
$txt['year'] = 'Anno';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Visualizzazione utenti';
$txt['view_users_subscribed'] = 'Visualizzazione degli utenti iscritti a: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'Non sono attualmente presenti utenti attivi per questa sottoscrizione!';
$txt['add_subscriber'] = 'Aggiungi un nuovo utente';
$txt['edit_subscriber'] = 'Modifica utente iscritto';
$txt['delete_selected'] = 'Rimuovi selezionato/i';
$txt['complete_selected'] = 'Completa selezionato/i';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Sei sicuro di voler eliminare tutti i dati relativi alle sottoscrizioni selezionate?';
$txt['complete_are_sure'] = 'Sei sicuro di voler completare le sottoscrizioni selezionate?';

$txt['start_date'] = 'Data di inizio';
$txt['end_date'] = 'Scadenza';
$txt['start_date_and_time'] = 'Data di inizio ed ora';
$txt['end_date_and_time'] = 'Data di scadenza ed ora';
$txt['edit'] = 'MODIFICA';
$txt['one_username'] = 'Per favore, inserisci una sola username.';
$txt['hour'] = 'Ora';
$txt['minute'] = 'Minuto';
$txt['error_member_not_found'] = 'L\'utente inserito non è stato trovato';
$txt['member_already_subscribed'] = 'Questo utente è segnato per questa sottoscrizione. Per favore, modifica la loro sottoscrizione esistente.';
$txt['search_sub'] = 'Trova utente';

// Make payment.
$txt['paid_confirm_payment'] = 'Conferma pagamento';
$txt['paid_confirm_desc'] = 'Per continuare con il pagamento, ricontrolla i dettagli e clicca su &quot;Ordina&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Per pagare con <a href="http://www.paypal.com">PayPal</a>, clicca sul bottone sottostante. Verrà effettuato il reindirizzamento al sito di PayPal per il pagamento.';
$txt['paid_paypal_order'] = 'Ordina con PayPal';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'Per pagare con <a href="http://www.worldpay.com">WorldPay</a>, clicca sul bottone sottostante. Verrà effettuato il reindirizzamento al sito di WorldPal per il pagamento.';
$txt['paid_worldpay_order'] = 'Ordina con WorldPay';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = 'Per pagare con <a href="http://www.nochex.com">Nochex</a>, clicca sul bottone sottostante. Verrà effettuato il reindirizzamento al sito di Nochex per il pagamento.';
$txt['paid_nochex_order'] = 'Ordina con Nochex';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Per pagare con <a href="http://www.authorize.net">Authorize.Net</a>, clicca sul bottone sottostante. Verrà effettuato il reindirizzamento al sito di Authorize.Net per il pagamento.';
$txt['paid_authorize_order'] = 'Ordina con Authorize.Net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Per pagare con <a href="http://www.2co.com">2co.com</a>, clicca sul bottone sottostante. Verrà effettuato il reindirizzamento al sito di 2co.com per il pagamento.';
$txt['paid_2co_order'] = 'Ordina con 2co.com';
$txt['paid_done'] = 'Pagamento completato';
$txt['paid_done_desc'] = 'Grazie per il pagamento. Una volta verificata la transazione, la tua sottoscrizione sarà attivata.';
$txt['paid_sub_return'] = 'Ritorna alle sottoscrizioni';
$txt['paid_current_desc'] = 'In basso è presente una lista delle tue sottoscrizioni attuali e passate. Per estendere una sottoscrizione esistente, selezionala semplicemente dalla lista in alto.';
$txt['paid_admin_add'] = 'Aggiungi questa sottoscrizione';

$txt['paid_not_set_currency'] = 'Non hai ancora impostato una valuta. Effettua la modifica dal menu impostazioni prima di continuare.';
$txt['paid_no_cost_value'] = 'Devi inserire un costo ed una durata della sottoscrizione';
$txt['paid_all_freq_blank'] = 'Devi inserire un costo per almeno una delle quattro durate.';

// Some error strings.
$txt['paid_no_data'] = 'Nessun dato valido è stato inviato allo script.';

$txt['paypal_could_not_connect'] = 'Non è possibile collegarsi al server PayPal';
$txt['paid_sub_not_active'] = 'Questa sottoscrizione non viene attivata da nessun nuovo utente!';
$txt['paid_disabled'] = 'Le sottoscrizioni a pagamento sono al momento disabilitate!';
$txt['paid_unknown_transaction_type'] = 'Tipo di transazione sconosciuto.';
$txt['paid_empty_member'] = 'Il gestore delle sottoscrizioni non ha potuto ritrovare l\'ID utente.';
$txt['paid_could_not_find_member'] = 'Il gestore delle sottoscrizioni non ha potuto ritrovare l\'utente con ID: %1$d';
$txt['paid_count_not_find_subscription'] = 'Il gestore delle sottoscrizioni non ha potuto ritrovare la sottoscrizione per l\'ID utente: %1$s, ID sottoscrizione: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'Il gestore delle sottoscrizioni non ha potuto ritrovare i dati del registro per l\'utente: %1$s, ID sottoscrizione: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'Non sono stati rilevati pagamenti in sospeso per l\'ID utente: %1$s, ID sottoscrizione: %2$s - per questo, verrà ignorato.';
$txt['paid_admin_not_setup_gateway'] = 'Spiacente, l\'amministratore non ha ancora terminato di impostare le sottoscrizioni a pagamento. Riprova più tardi.';
$txt['paid_make_recurring'] = 'Abilita il tacito rinnovo';

$txt['subscriptions'] = 'Sottoscrizioni';
$txt['subscription'] = 'Sottoscrizione';
$txt['paid_subs_desc'] = 'In basso è presente una lista delle sottoscrizioni a pagamento disponibili in questo forum.';
$txt['paid_subs_none'] = 'Non sono attualmente disponibili sottoscrizioni a pagamento!';

$txt['paid_current'] = 'Sottoscrizioni a pagamento esistenti';
$txt['pending_payments'] = 'Pagamenti in sospeso';
$txt['pending_payments_desc'] = 'L\'utente ha tentato il pagamento di questa sottoscrizione, tuttavia non è stata ricevuta alcuna conferma dal forum. Se sei certo che il pagamento sia stato ricevuto, clicca su &quot;accetta&quot; per attivare la sottoscrizione, oppure puoi cliccare su &quot;Rimuovi&quot; per rimuovere tutti i riferimenti a questo pagamento.';
$txt['pending_payments_value'] = 'Valore';
$txt['pending_payments_accept'] = 'Accetta';
$txt['pending_payments_remove'] = 'Rimuovi';

?>