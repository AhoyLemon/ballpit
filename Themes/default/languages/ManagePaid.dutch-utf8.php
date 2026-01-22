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
$txt['other'] = 'Overig';

$txt['paid_username'] = 'Gebruikersnaam';

$txt['paid_subscriptions_desc'] = 'Vanuit deze sectie kun je betaalde abonnementen toevoegen, verwijderen en bewerken, alsook betaalmethodes voor je forum beheren.';
$txt['paid_subs_settings'] = 'Instellingen';
$txt['paid_subs_settings_desc'] = 'Vanuit deze sectie kun je de betaalmethodes die beschikbaar zijn voor je gebruikers bewerken.';
$txt['paid_subs_view'] = 'Bekijk abonnementen';
$txt['paid_subs_view_desc'] = 'Vanuit deze sectie kun je de betaalde abonnenten die beschikbaar zijn op jouw forum bewerken.';

// Setting type strings.
$txt['paid_enabled'] = 'Schakel betaalde abonnementen in';
$txt['paid_enabled_desc'] = 'Dit moet ingeschakeld zijn om betaalde abonnementen op je forum te kunnen gebruiken.';
$txt['paid_email'] = 'Notificatie-e-mails versturen';
$txt['paid_email_desc'] = 'Informeer de beheerders wanneer een abonnement automatisch wijzigt.';
$txt['paid_email_to'] = 'E-mailadres voor correspontentie';
$txt['paid_email_to_desc'] = 'Kommagescheiden lijst van e-mailadressen waar notificaties naar verstuurd moeten worden, los van de forumbeheerders.';
$txt['paidsubs_test'] = 'Schakel testmodus in';
$txt['paidsubs_test_desc'] = 'Dit plaatst de betaalde abonnementen in &quot;testmodus&quot;, dat, waar mogelijk, <i>sandbox payment</i>-methodes gebruikt in PayPal, Authorize.net etc. Schakel dit niet in, tenzij je weet wat je doet!';
$txt['paidsubs_test_confirm'] = 'Weet je zeker dat je de testmodus wilt inschakelen?';
$txt['paid_email_no'] = 'Verzend geen notificaties';
$txt['paid_email_error'] = 'Informeer wanneer een abonnement mislukt';
$txt['paid_email_all'] = 'Informeer bij alle automatische wijzigingen in abonnementen';
$txt['paid_currency'] = 'Selecteer valuta';
$txt['paid_currency_code'] = 'Valutacode';
$txt['paid_currency_code_desc'] = 'Code die gebruikt wordt door valutahandelaren';
$txt['paid_currency_symbol'] = 'Symbool dat gebruikt wordt bij de betalingsmethode';
$txt['paid_currency_symbol_desc'] = 'Gebruik \'%1.2f\' om te specificeren waar het nummer komt, bijvoorbeeld $%1.2f, %1.2fDM enz.';
$txt['paypal_email'] = 'PayPal e-mailadres';
$txt['paypal_email_desc'] = 'Laat dit leeg als je PayPal niet wilt gebruiken.';
$txt['worldpay_id'] = 'WorldPay installatie-ID';
$txt['worldpay_id_desc'] = 'De installatie-ID gegenereerd door WorldPay. Laat dit leeg als je WorldPay niet wilt gebruiken.';
$txt['worldpay_password'] = 'WorldPay Callback Password';
$txt['worldpay_password_desc'] = 'Ben bij het instellen hiervan zeker dat dit wachtwoord in WorldPay unieke is, en bovendien niet hetzelfde is als het wachtwoord van je WorldPay- of forumbeheeraccount!';
$txt['authorize_id'] = 'Authorize.net installatie-ID';
$txt['authorize_id_desc'] = 'De installatie-ID gegenereerd door Authorize.net. Laat dit leeg als je geen Authorize.net wilt gebruiken.';
$txt['authorize_transid'] = 'Authorize.Net transactie-ID';
$txt['2co_id'] = '2co.com installatie-ID';
$txt['2co_id_desc'] = 'De installatie-ID gegenereerd door 2co.com. Laat dit leeg als je 2co.com niet wilt gebruiken.';
$txt['2co_password'] = '2co.com geheim woord';
$txt['2co_password_desc'] = 'Het geheime woord van 2checkout.';
$txt['nochex_email'] = 'Nochex e-mailadres';
$txt['nochex_email_desc'] = 'E-mailadres van een Nochex-handelaarsaccount. Laat dit leeg als je Nochex niet wilt gebruiken.';
$txt['paid_settings_save'] = 'Opslaan';

$txt['paid_note'] = '<strong class="alert">Opmerking:</strong><br />Om abonnementen automatisch te kunnen bijwerken, moet je een zogenaamde
	retournatie-URL instellen voor al je betalingsmethodes. Voor alle betalingsmethodes moet deze retournatie-URL als volgt ingesteld zijn:<br /><br />
	&nbsp;&nbsp;&bull;&nbsp;&nbsp;<strong>' . $boardurl . '/subscriptions.php</strong><br /><br />
	Je kunt deze link in PayPal <a href="https://www.paypal.com/nl/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">hier</a> direct instellen.<br />
	Voor alle andere methodes kun je deze URL meestal aanpassen bij een term als &quot;Retourneer-URL&quot; of &quot;Terugkoppelings-URL&quot;.';

// View subscription strings.
$txt['paid_name'] = 'Naam';
$txt['paid_status'] = 'Status';
$txt['paid_cost'] = 'Kosten';
$txt['paid_duration'] = 'Duur';
$txt['paid_active'] = 'Actief';
$txt['paid_pending'] = 'Wachtend op betaling';
$txt['paid_finished'] = 'Voltooid';
$txt['paid_total'] = 'Totaal';
$txt['paid_is_active'] = 'Geactiveerd';
$txt['paid_none_yet'] = 'Je hebt nog geen abonnementen geconfigureerd.';
$txt['paid_payments_pending'] = 'Wachtend op betaling';
$txt['paid_order'] = 'Bestel';

$txt['yes'] = 'ja';
$txt['no'] = 'nee';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Voeg abonnement toe';
$txt['paid_edit_subscription'] = 'Bewerk abonnement';
$txt['paid_delete_subscription'] = 'Verwijder abonnement';

$txt['paid_mod_name'] = 'Naam abonnement';
$txt['paid_mod_desc'] = 'Omschrijving';
$txt['paid_mod_reminder'] = 'Verstuur herinneringen';
$txt['paid_mod_reminder_desc'] = 'Herinnering sturen binnen een aantal dagen voordat het abonnement vervalt (in dagen, 0 om uit te schakelen)';
$txt['paid_mod_email'] = 'Te versturen e-mail bij voltooiing';
$txt['paid_mod_email_desc'] = 'Waarin {NAME} de naam van het lid voorstelt en {FORUM} de naam van de gemeenschap is. Het onderwerp van de e-mail zou op de eerste regel moeten staan. Laat dit leeg voor geen e-mailnotificatie.';
$txt['paid_mod_cost_usd'] = 'Kosten (USD)';
$txt['paid_mod_cost_eur'] = 'Kosten (EUR)';
$txt['paid_mod_cost_gbp'] = 'Kosten (GBP)';
$txt['paid_mod_cost_blank'] = 'Laat dit leeg om deze valuta niet toe te staan.';
$txt['paid_mod_span'] = 'Duur van het abonnement';
$txt['paid_mod_span_days'] = 'dagen';
$txt['paid_mod_span_weeks'] = 'weken';
$txt['paid_mod_span_months'] = 'maanden';
$txt['paid_mod_span_years'] = 'jaren';
$txt['paid_mod_active'] = 'Geactiveerd';
$txt['paid_mod_active_desc'] = 'Een abonnement moet actief zijn om nieuwe abonnementen af te kunnen sluiten.';
$txt['paid_mod_prim_group'] = 'Primaire ledengroep na abonnering';
$txt['paid_mod_prim_group_desc'] = 'Primaire ledengroep die leden toegekend krijgen zodra ze een abonnement afsluiten.';
$txt['paid_mod_add_groups'] = 'Additionele ledengroep(en) na abonnering';
$txt['paid_mod_add_groups_desc'] = 'Extra ledengroep(en) die leden toegekend krijgen zodra ze een abonnement afsluiten.';
$txt['paid_mod_no_group'] = 'Niet aanpassen';
$txt['paid_mod_edit_note'] = 'Opmerking: omdat deze groep abonnees heeft, kunnen de groepinstellingen niet aangepast worden!';
$txt['paid_mod_delete_warning'] = '<strong>WAARSCHUWING!</strong><br /><br />Als je dit abonnement verwijdert, verliezen alle gebruikers die momenteel een abonnement hierop hebben de toegangsrechten die ze via dit abonnement hebben verkregen! Tenzij je zeker weet dat je dit wilt doen, wordt het aanbevolen dat je eerst een abonnement deactiveert voor je het verwijdert.<br />';
$txt['paid_mod_repeatable'] = 'Gebruikers mogen dit abonnement automatisch verlengen';
$txt['paid_mod_allow_partial'] = 'Sta gedeeltelijk abonnement toe';
$txt['paid_mod_allow_partial_desc'] = 'Als deze optie is ingeschakeld, in welk geval de gebruiker minder betaalt dan nodig, krijgt de gebruiker een abonnement voor het tijdsdeel waarvoor, procentueel gezien, is betaald.';
$txt['paid_mod_fixed_price'] = 'Abonnement met vastgestelde prijs en periode';
$txt['paid_mod_flexible_price'] = 'Abonnement met wisselende prijs afhankelijk van periode';
$txt['paid_mod_price_breakdown'] = 'Uitsplitsing wisselende prijs';
$txt['paid_mod_price_breakdown_desc'] = 'Defieer hier hoeveel het abonnement moet kosten afhankelijk van de periode waarvoor het abonnement afgesloten wordt. Een abonnement zou bijvoorbeeld 12USD voor een maand kunnen kosten, maar slechts 100USD voor een heel jaar. Als je voor een bepaalde periode geen prijs wilt instellen, laat je het veld leeg.';
$txt['flexible'] = 'wisselend';

$txt['paid_per_day'] = 'Prijs per dag';
$txt['paid_per_week'] = 'Prijs per week';
$txt['paid_per_month'] = 'Prijs per maand';
$txt['paid_per_year'] = 'Prijs per jaar';
$txt['day'] = 'dag';
$txt['week'] = 'week';
$txt['month'] = 'maand';
$txt['year'] = 'jaar';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Bekijk leden';
$txt['view_users_subscribed'] = 'Bekijk leden geabonneerd op: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'Er zijn momenteel geen leden geabonneerd op dit abonnement!';
$txt['add_subscriber'] = 'Voeg abonnee toe';
$txt['edit_subscriber'] = 'Bewerk abonnee';
$txt['delete_selected'] = 'Verwijder selectie';
$txt['complete_selected'] = 'Voltooi selectie';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Weet je zeker dat je al het vastgelegde van de geselecteerde abonnementen wilt verwijderen?';
$txt['complete_are_sure'] = 'Weet je zeker dat je de geselecteerde abonnementen wilt voltooien?';

$txt['start_date'] = 'Startdatum';
$txt['end_date'] = 'Einddatum';
$txt['start_date_and_time'] = 'Startdatum en -tijd';
$txt['end_date_and_time'] = 'Einddatum en -tijd';
$txt['edit'] = 'Bewerk';
$txt['one_username'] = 'Vul slechts &eacute;&eacute;n gebruikersnaam in.';
$txt['hour'] = 'Uur';
$txt['minute'] = 'Minuut';
$txt['error_member_not_found'] = 'Het opgegeven lid kon niet gevonden worden.';
$txt['member_already_subscribed'] = 'Dit lid is reeds geabonneerd op dit abonnement. Pas het bestaande abonnement, indien gewenst, aan.';
$txt['search_sub'] = 'Zoek lid';

// Make payment.
$txt['paid_confirm_payment'] = 'Betaling voldoen';
$txt['paid_confirm_desc'] = 'Om door te gaan met de betaling controleer je hieronder de gegevens en klik je op &quot;Bestel&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Om te betalen via <a href="http://www.paypal.com">PayPal</a>, klik je op de knop hieronder. Je wordt doorgeschakeld naar de PayPal-site voor de betaling.';
$txt['paid_paypal_order'] = 'Bestel via PayPal';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'Om te betalen via <a href="http://www.worldpay.com">WorldPay</a>, klik je op de knop hieronder. Je wordt doorgeschakeld naar de WorldPay-site voor de betaling.';
$txt['paid_worldpay_order'] = 'Bestel via WorldPay';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = 'Om te betalen via <a href="http://www.nochex.com">Nochex</a>, klik je op de knop hieronder. Je wordt doorgeschakeld naar de Nochex-site voor de betaling.';
$txt['paid_nochex_order'] = 'Bestel via Nochex';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Om te betalen via <a href="http://www.authorize.net">Authorize.Net</a>, klik je op de knop hieronder. Je wordt doorgeschakeld naar Authorize.Net-site voor de betaling.';
$txt['paid_authorize_order'] = 'Bestel via Authorize.Net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Om te betalen via <a href="http://www.2co.com">2co.com</a>, klik je op de knop hieronder. Je wordt doorgeschakeld naar 2co.com-site voor de betaling.';
$txt['paid_2co_order'] = 'Bestel via 2co.com';
$txt['paid_done'] = 'Betaling voltooid';
$txt['paid_done_desc'] = 'Bedankt voor de betaling. Zodra de transactie geverfieerd is, zal de betaling geactiveerd worden.';
$txt['paid_sub_return'] = 'Terug naar abonnementen';
$txt['paid_current_desc'] = 'Hieronder staat een lijst van al je huidige en vorige abonnementen. Om een huidig abonnement te verlengen, kies je dit simpelweg uit de lijst hierboven.';
$txt['paid_admin_add'] = 'Voeg dit abonnement toe';

$txt['paid_not_set_currency'] = 'Je hebt nog geen valuta ingesteld. Stel dit in vanuit <a href="%1$s">de instellingensectie</a> voor je verder gaat.';
$txt['paid_no_cost_value'] = 'Je hebt geen bedrag en/of abonnementslengte ingevoerd.';
$txt['paid_all_freq_blank'] = 'Je moet voor ten minste &eacute;&eacute;n van de periodes een bedrag instellen.';

// Some error strings.
$txt['paid_no_data'] = 'Er is geen geldige data naar het script verstuurd.';

$txt['paypal_could_not_connect'] = 'Kon geen verbinding maken met de PayPal-server';
$txt['paid_sub_not_active'] = 'Dit abonnement is momenteel niet afsluitbaar!';
$txt['paid_disabled'] = 'Betaalde abonnementen zijn momenteel uitgeschakeld!';
$txt['paid_unknown_transaction_type'] = 'Onbekend tranactietype.';
$txt['paid_empty_member'] = 'Het afhandelingsscript voor betaalde abonnementen kon geen lid-ID vinden.';
$txt['paid_could_not_find_member'] = 'Het afhandelingsscript voor betaalde abonnementen kon geen lid met het ID %1$d vinden.';
$txt['paid_count_not_find_subscription'] = 'Het afhandelingsscript voor betaalde abonnementen kon het abonnement niet vinden van het lid met lid-ID %1$s en abonnement-ID %2$s.';
$txt['paid_count_not_find_subscription_log'] = 'Het afhandelingsscript voor betaalde abonnementen kon geen abonnementslogingang vinden voor het lid met lid-ID %1$s en abonnement-ID: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'Kon geen niet-afgehandelde betaling vinden voor lid met lid-ID %1$s en abonnement-ID %2$s. Dit wordt daarom genegeerd.';
$txt['paid_admin_not_setup_gateway'] = 'De beheerder is nog niet klaar met het opstellen van betaalde abonnementen. Probeer het later nog eens.';
$txt['paid_make_recurring'] = 'Maak hiervan een herhalend abonnement';

$txt['subscriptions'] = 'Abonnementen';
$txt['subscription'] = 'Abonnement';
$txt['paid_subs_desc'] = 'Hieronder staat een lijst van alle betaalde abonnementen die op dit forum beschikbaar zijn.';
$txt['paid_subs_none'] = 'Er zijn momenteel geen betaalde abonnementen beschikbaar!';

$txt['paid_current'] = 'Huidige abonnementen';
$txt['pending_payments'] = 'Afwachtende betalingen';
$txt['pending_payments_desc'] = 'Dit lid heeft geprobeerd te volgende betalingen te maken voor dit abonnement, maar er is nog geen bevestiging ontvangen door het forum. Als je zeker weet dat de betaling is ontvangen, klik je op de &quot;accepteer&quot;-knop om het abonnement te activeren. Het is tevens mogelijk om via de &quot;verwijder&quot;-knop al het vastgelegde te verwijderen.';
$txt['pending_payments_value'] = 'Waarde';
$txt['pending_payments_accept'] = 'Accepteer';
$txt['pending_payments_remove'] = 'Verwijder';

?>