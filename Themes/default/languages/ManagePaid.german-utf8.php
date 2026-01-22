<?php
// Version: 2.0; ManagePaid

global $boardurl;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EURO (&euro;)';
$txt['gbp'] = 'GBP (&pound;)';
$txt['other'] = 'Andere';

$txt['paid_username'] = 'Benutzername';

$txt['paid_subscriptions_desc'] = 'Hier können Sie zu bezahlende Abonnements hinzufügen, löschen und ändern.';
$txt['paid_subs_settings'] = 'Einstellungen';
$txt['paid_subs_settings_desc'] = 'Hier können Sie die für Benutzer verfügbaren Bezahlungsmöglichkeiten ändern.';
$txt['paid_subs_view'] = 'Abonnements anschauen';
$txt['paid_subs_view_desc'] = 'Hier können Sie alle für sich verfügbaren Abonnements anschauen.';

// Setting type strings.
$txt['paid_enabled'] = 'Bezahlte Abonnements aktivieren';
$txt['paid_enabled_desc'] = 'Diese Option muss aktiviert sein, wenn bezahlte Abonnements genutzt werden sollen.';
$txt['paid_email'] = 'Benachrichtigungs E-Mail versenden';
$txt['paid_email_desc'] = 'Den Administrator informieren, wenn sich ein Abonnement automatisch ändert.';
$txt['paid_email_to'] = 'E-Mail Adresse zur Kontaktaufnahme';
$txt['paid_email_to_desc'] = 'Eine durch Kommas getrennte Liste mit E-Mail-Adressen, an die, zusätzlich zu Forum Administratoren, Benachrichtigungen versandt werden.';
$txt['paidsubs_test'] = 'Testmodus aktivieren';
$txt['paidsubs_test_desc'] = 'Dies versetzt die Bezahl-Abo Mod in den "Test"-Modus, welcher, wann immer dies möglich ist, Sandbox-Methoden (etwa wie bei PayPal) verwendet. Aktivieren Sie dies nur wenn Sie wissen was Sie tun!';
$txt['paidsubs_test_confirm'] = 'Sind Sie sicher, dass Sie den Testmodus aktivieren möchten?';
$txt['paid_email_no'] = 'Keine Benachrichtigungen versenden';
$txt['paid_email_error'] = 'Informieren, wenn Abonnement scheitert';
$txt['paid_email_all'] = 'Über alle Abonnementänderungen informieren';
$txt['paid_currency'] = 'Währung auswählen';
$txt['paid_currency_code'] = 'Währungskennung';
$txt['paid_currency_code_desc'] = 'Code, welcher von Kaufleuten verwendet wird.';
$txt['paid_currency_symbol'] = 'Symbol, welches bei der Bezahlmethode verwendet wird.';
$txt['paid_currency_symbol_desc'] = 'Verwende \'%1.2f\' um festzulegen wie Zahlen angezeigt werden, z.B.: $%1.2f, %1.2fDM, etc.';
$txt['paypal_email'] = 'PayPal E-Mail-Adresse';
$txt['paypal_email_desc'] = 'Leer lassen, wenn PayPal nicht genutzt werden soll.';
$txt['worldpay_id'] = 'WorldPay Installations-ID';
$txt['worldpay_id_desc'] = 'Die Installations-ID, welche von WorldPay generiert wurde. Lassen Sie diese frei, falls sie WorldPay nicht verwenden.';
$txt['worldpay_password'] = 'WorldPay Rückruf-/Rückfragen-Password';
$txt['worldpay_password_desc'] = 'Wenn Sie dieses Passwort in WorldPay setzen stellen Sie sicher, dass es nicht das selbe Passwort wie Ihr WorldPay Administrations Account Passwort ist.';
$txt['authorize_id'] = 'Authorize.net Installations ID';
$txt['authorize_id_desc'] = 'Die Installations-ID, welche von Authorize.net generiert wurde. Lassen Sie diese leer, wenn sie Authorize.net nicht verwenden.';
$txt['authorize_transid'] = 'Authorize.Net Transaktions-ID';
$txt['2co_id'] = '2co.com Installations-ID';
$txt['2co_id_desc'] = 'Die Installations-ID welche von 2co.com generiert wurde. Lassen Sie dieses Feld frei, wenn Sie 2co.com nicht verwenden.';
$txt['2co_password'] = '2co.com Geheimwort';
$txt['2co_password_desc'] = 'Ihr geheimes 2checkout Wort.';
$txt['nochex_email'] = 'Nochex E-Mail-Adresse';
$txt['nochex_email_desc'] = 'E-Mail Adresse eines Merchant Accounts bei Nochex. Lassen Sie diese leer, wenn Sie Nochex nicht verwenden.';
$txt['paid_settings_save'] = 'Speichern';

$txt['paid_note'] = '<strong class="alert">Hinweis:</strong>
Damit Abos für Ihre Benutzer automatisch  aktualisiert werden müssen Sie eine Rückkehr-Adresse für jede Ihrer Bezahlmethoden angeben.
Für all Ihre Bezahlarten sollte diese gesetzt werden auf:

	• <strong>' . $boardurl . '/subscriptions.php</strong><br /><br />


	Sie können den Link für PayPal direkt ändern indem Sie <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">hier</a> klicken.<br/>
	Für die anderen Gateways (sofern installiert) können Sie sie normalerweise in Ihrem Kunden-Bereich, üblicherweise unter dem Begriff "Rückkehr URL", "Return URL" oder "Callback URL".';

// View subscription strings.
$txt['paid_name'] = 'Name';
$txt['paid_status'] = 'Status';
$txt['paid_cost'] = 'Betrag';
$txt['paid_duration'] = 'Dauer';
$txt['paid_active'] = 'Aktiv';
$txt['paid_pending'] = 'anstehende Zahlungen';
$txt['paid_finished'] = 'Beendet';
$txt['paid_total'] = 'Gesamt';
$txt['paid_is_active'] = 'Aktiviert';
$txt['paid_none_yet'] = 'Sie haben noch keine Abonnements bestellt.';
$txt['paid_payments_pending'] = 'Ausstehende Zahlung';
$txt['paid_order'] = 'Bestellen';

$txt['yes'] = 'Ja';
$txt['no'] = 'Nein';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Neues Abonnement hinzufügen';
$txt['paid_edit_subscription'] = 'Abonnement ändern';
$txt['paid_delete_subscription'] = 'Abonnement löschen';

$txt['paid_mod_name'] = 'Name des Abonnements';
$txt['paid_mod_desc'] = 'Beschreibung';
$txt['paid_mod_reminder'] = 'Erinnerungs E-Mail senden';
$txt['paid_mod_reminder_desc'] = 'Anzahl wie viele Tage vor Ablauf des Abonnements eine Erinnerungs-E-Mail versendet werden soll (in Tagen, 0 zum deaktivieren).';
$txt['paid_mod_email'] = 'E-Mail bei erfolgreicher Bestellung senden';
$txt['paid_mod_email_desc'] = '{NAME} ist der Mitgliedsname; {FORUM} ist der Name des Forums. Der Betreff der E-Mail sollte in der ersten Zeile stehen. Leer lassen, um keine E-Mail zu senden.';
$txt['paid_mod_cost_usd'] = 'Summe (USD)';
$txt['paid_mod_cost_eur'] = 'Summe (EUR)';
$txt['paid_mod_cost_gbp'] = 'Summe (GBP)';
$txt['paid_mod_cost_blank'] = 'Leer lassen, um diese Währung nicht anzubieten.';
$txt['paid_mod_span'] = 'Dauer des Abonnements';
$txt['paid_mod_span_days'] = 'Tage';
$txt['paid_mod_span_weeks'] = 'Wochen';
$txt['paid_mod_span_months'] = 'Monate';
$txt['paid_mod_span_years'] = 'Jahre';
$txt['paid_mod_active'] = 'Aktiv';
$txt['paid_mod_active_desc'] = 'Das Abonnement muss aktiv sein, um neue Mitglieder zu erhalten.';
$txt['paid_mod_prim_group'] = 'Primäre Gruppe nach Bestellung';
$txt['paid_mod_prim_group_desc'] = 'Primäre Gruppe, welche dem Benutzer nach der Bestellung zugewiesen wird.';
$txt['paid_mod_add_groups'] = 'Weitere Gruppen nach Bestellung';
$txt['paid_mod_add_groups_desc'] = 'Weitere Gruppe, welche dem Benutzer nach Bestellung zugewiesen wird.';
$txt['paid_mod_no_group'] = 'Nicht ändern';
$txt['paid_mod_edit_note'] = 'Diese Gruppe hat existierende Abonnenten, daher können die Einstellungen nicht geändert werden!';
$txt['paid_mod_delete_warning'] = '<strong>WARNUNG</strong><br /><br />Sollten Sie dieses Abonnement löschen, verlieren alle Abonnenten ihre durch dieses Abonnement zugewiesenen Berechtigungen! Sollten Sie nicht sicher sein, empfehlen wir die Deaktivierung des betreffenden Abonnements, statt es zu löschen.<br />';
$txt['paid_mod_repeatable'] = 'Automatische Erneuerung durch den Benutzer erlauben';
$txt['paid_mod_allow_partial'] = 'Teil-Abonnement erlauben';
$txt['paid_mod_allow_partial_desc'] = 'Ist diese Option aktiviert, erhalten die Benutzer, die weniger zahlen, nur einen Teil der Leistungen, die das Abonnement verspricht.';
$txt['paid_mod_fixed_price'] = 'Abonnement mit Festpreis und festgelegter Dauer';
$txt['paid_mod_flexible_price'] = 'Abonnementpreis variiert nach bestellter Dauer';
$txt['paid_mod_price_breakdown'] = 'Flexibler Preisnachlass';
$txt['paid_mod_price_breakdown_desc'] = 'Hier können Sie festlegen wie viel das Abonnement abhängig von der Dauer des Abonnements kosten soll. Beispiel: Kostet ein Monat 12€, so können Sie für ein Jahr einen Preis von 100€ angeben. Möchten Sie für eine bestimmte Dauer keinen Preis definieren, so lassen sie dieses Feld frei.';
$txt['flexible'] = 'Flexibel';

$txt['paid_per_day'] = 'Preis pro Tag';
$txt['paid_per_week'] = 'Preis pro Woche';
$txt['paid_per_month'] = 'Preis pro Monat';
$txt['paid_per_year'] = 'Preis pro Jahr';
$txt['day'] = 'Tag';
$txt['week'] = 'Woche';
$txt['month'] = 'Monat';
$txt['year'] = 'Jahr';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Benutzer anschauen';
$txt['view_users_subscribed'] = 'Benutzer mit dem Abonnement: "%1$s"';
$txt['no_subscribers'] = 'Es gibt momentan keine Benutzer mit diesem Abonnement!';
$txt['add_subscriber'] = 'Neuen Abonnent hinzufügen';
$txt['edit_subscriber'] = 'Abonnent editieren';
$txt['delete_selected'] = 'Ausgewählte löschen';
$txt['complete_selected'] = 'Ausgewählte abschließen';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Are you sure you want to delete all record of the selected subscriptions?';
$txt['complete_are_sure'] = 'Sind Sie sicher, dass Sie die ausgewählten Abonnements vervollständigen möchten?';

$txt['start_date'] = 'Startdatum';
$txt['end_date'] = 'Enddatum';
$txt['start_date_and_time'] = 'Startzeit und -datum';
$txt['end_date_and_time'] = 'Endzeit und -datum';
$txt['edit'] = 'ÄNDERN';
$txt['one_username'] = 'Bitte nur einen Benutzername eingeben.';
$txt['hour'] = 'Stunde';
$txt['minute'] = 'Minute';
$txt['error_member_not_found'] = 'Der eingegebene Benutzer konnte nicht gefunden werden';
$txt['member_already_subscribed'] = 'Dieser Benutzer ist schon Abonnent dieses Abonnements. Bitte ändern Sie sein existierendes Abonnement.';
$txt['search_sub'] = 'Benutzer finden';

// Make payment.
$txt['paid_confirm_payment'] = 'Zahlung bestätigen';
$txt['paid_confirm_desc'] = 'Um mit der Zahlung fortzufahren, prüfen Sie die Details und klicken Sie auf "Bezahlen"';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Um mit <a href="http://www.paypal.de/">PayPal</a> zu bezahlen, klicken Sie bitte den folgenden Button. Sie werden auf die Seite von PayPal weitergeleitet, um die Zahlung abzuschließen.';
$txt['paid_paypal_order'] = 'Mit PayPal bezahlen';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'Um mit <a href="http://www.worldpay.com">WorldPay</a> zu bezahlen, klicken Sie bitte den folgenden Button. Sie werden auf die Seite von WorldPay weitergeleitet, um die Zahlung abzuschließen.';
$txt['paid_worldpay_order'] = 'Mit WorldPay bezahlen';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = 'Um mit <a href="http://www.nochex.com">Nochex</a> zu bezahlen, klicken Sie bitte den folgenden Button. Sie werden auf die Seite von Nochex weitergeleitet, um die Zahlung abzuschließen.';
$txt['paid_nochex_order'] = 'Mit Nochex bezahlen';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Um mit <a href="http://www.authorize.net">Authorize.Net</a> zu bezahlen, klicken Sie bitte den folgenden Button. Sie werden auf die Seite von Authorize.Net weitergeleitet, um die Zahlung abzuschließen.';
$txt['paid_authorize_order'] = 'Mit Authorize.Net bezahlen';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Um mit <a href="http://www.2com.com">2co.com</a> zu bezahlen, klicken Sie bitte den unten folgenden Button. Sie werden auf die Seite von 2co.com weitergeleitet, um die Zahlung zu tätigen.';
$txt['paid_2co_order'] = 'Mit 2co.com bezahlen';
$txt['paid_done'] = 'Zahlung beendet';
$txt['paid_done_desc'] = 'Danke für Ihre Zahlung. Wenn die Transaktion bestätigt ist, wird das Abonnement aktiviert.';
$txt['paid_sub_return'] = 'Zu Abonnements zurückkehren';
$txt['paid_current_desc'] = 'Hier ist eine Liste Ihrer vergangenen und aktuellen Abonnements. Um ein laufendes Abonnements zu verlängern, wählen Sie es aus der obenstehenden Liste aus.';
$txt['paid_admin_add'] = 'Abonnement hinzufügen';

$txt['paid_not_set_currency'] = 'Sie haben Ihre Währung noch nicht eingestellt. Bitte holen Sie das nach, bevor Sie fortfahren.';
$txt['paid_no_cost_value'] = 'Sie müssen einen Preis und die Dauer des Abonnements eingeben.';
$txt['paid_all_freq_blank'] = 'Sie müssen einen Preis für mindestens eine der vier Zeitspannen eingeben.';

// Some error strings.
$txt['paid_no_data'] = 'Es wurden keine gültigen Daten an das Script gesendet.';

$txt['paypal_could_not_connect'] = 'Konnte nicht mit dem PayPal Server verbinden';
$txt['paid_sub_not_active'] = 'Dieses Abonnements erlaubt keine neuen Benutzer!';
$txt['paid_disabled'] = 'Die bezahlten Abonnements sind momentan deaktiviert!';
$txt['paid_unknown_transaction_type'] = 'Unbekannter Transaktionstyp.';
$txt['paid_empty_member'] = 'Der Bezahlte-Abo-Verwalter konnte Mitglieds-ID nicht wieder herstellen';
$txt['paid_could_not_find_member'] = 'Der bezahlte-Abo-Verwalter konnte das Mitglied mit der ID %1$d nicht finden.';
$txt['paid_count_not_find_subscription'] = 'Der bezahlte-Abo-Verwalter konnte das Abo für das Mitglied mit der ID %1$s und Abo-ID %2$s nicht finden.';
$txt['paid_count_not_find_subscription_log'] = 'Der bezahlte-Abo-Verwalter konnte den Abo Log-Eintrag für das Mitglied mit der ID %1$s und der Abo ID %2$s nicht finden.';
$txt['paid_count_not_find_outstanding_payment'] = 'Coud not find outstanding payment entry for member ID: %1$s, subscription ID: %2$s so ignoring';
$txt['paid_admin_not_setup_gateway'] = 'Der Administrator hat die Einstellungen für bezahlte Abonnements noch nicht festgelegt - bitte versuchen Sie es später nochmal.';
$txt['paid_make_recurring'] = 'Automatisch wiederholende Zahlung erlauben';

$txt['subscriptions'] = 'Abonnements';
$txt['subscription'] = 'Abonnement';
$txt['paid_subs_desc'] = 'Folgend eine Liste aller in diesem Forum zur Verfügung stehenden Abonnents.';
$txt['paid_subs_none'] = 'Es sind momentan keine bezahlbaren Abonnements verfügbar!';

$txt['paid_current'] = 'Vorhandene Abonnements';
$txt['pending_payments'] = 'Ausstehende Zahlungen';
$txt['pending_payments_desc'] = 'Dieses Mitglied hat die Zahlung für dieses Abonnement getätigt, die Bestätigung liegt jedoch noch nicht vor. Sollten Sie sicher sein, dass die Zahlung empfangen wurde, klicken Sie auf "Akzeptieren". Alternativ wählen Sie "Entfernen", um alle Daten zu dieser Zahlung zu löschen.';
$txt['pending_payments_value'] = 'Wert';
$txt['pending_payments_accept'] = 'Akzeptieren';
$txt['pending_payments_remove'] = 'Entfernen';

?>