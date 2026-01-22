<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Registratieovereenkomst';
$txt['agreement_agree'] = 'Ik accepteer de bepalingen van de overeenkomst.';
$txt['agreement_agree_coppa_above'] = 'Ik accepteer de bepalingen van de overeenkomst en ben ten minste %1$d jaar oud.';
$txt['agreement_agree_coppa_below'] = 'Ik accepteer de bepalingen van de overeenkomst en ben jonger dan %1$d jaar oud.';

// Registration form.
$txt['registration_form'] = 'Registratieformulier';
$txt['need_username'] = 'Je moet een gebruikersnaam invullen.';
$txt['no_password'] = 'Je hebt geen wachtwoord ingevuld.';
$txt['incorrect_password'] = 'Wachtwoord niet correct';
$txt['choose_username'] = 'Kies gebruikersnaam';
$txt['maintain_mode'] = 'Onderhoudsstand';
$txt['registration_successful'] = 'Registratie succesvol';
$txt['now_a_member'] = 'Gefeliciteerd, de registratie gelukt! Je bent nu een lid van dit forum.';
// Use numeric entities in the below string.
$txt['your_password'] = 'en je wachtwoord is';
$txt['valid_email_needed'] = 'Vul een geldig e-mailadres in, (%1$s)';
$txt['required_info'] = 'Verplichte velden';
$txt['identification_by_smf'] = 'Wordt gebruikt om je te identificeren op het forum.';
$txt['additional_information'] = 'Additionele informatie';
$txt['warning'] = 'Waarschuwing!';
$txt['only_members_can_access'] = 'Alleen geregistreerde leden hebben toegang tot dit gedeelte.';
$txt['login_below'] = 'Log hieronder in of klik op';
$txt['register_an_account'] = 'deze link';
$txt['login_with_forum'] = 'om jezelf te registreren op %1$s.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Je kunt het veranderen nadat je bent ingelogd door naar je profiel te gaan, of door deze pagina te bezoeken na het inloggen:';
$txt['your_username_is'] = 'Je gebruikersnaam is: ';

$txt['login_hash_error'] = 'De wachtwoordbeveiliging is recentelijk bijgewerkt. Vul je wachtwoord opnieuw in.';

$txt['ban_register_prohibited'] = 'Sorry, je mag je niet registreren op dit forum';
$txt['under_age_registration_prohibited'] = 'Sorry, maar gebruikers onder de leeftijd van %1$d mogen zich niet registreren op dit forum';

$txt['activate_account'] = 'Accountactivering';
$txt['activate_success'] = 'Je accountactivering verliep succesvol. Je kunt nu inloggen.';
$txt['activate_not_completed1'] = 'Je e-mailadres moet eerst gevalideerd worden voor je kunt inloggen.';
$txt['activate_not_completed2'] = 'Nieuwe activeringsemail nodig?';
$txt['activate_after_registration'] = 'Bedankt voor het registreren. Je ontvangt een e-mail met een link om je account te activeren.  Als je na verloop van tijd geen e-mail hebt ontvangen, check dan je spamfolder.';
$txt['invalid_userid'] = 'Gebruiker bestaat niet';
$txt['invalid_activation_code'] = 'Ongeldige activeringscode';
$txt['invalid_activation_username'] = 'Gebruikersnaam of e-mailadres';
$txt['invalid_activation_new'] = 'Type als je met een foutief e-mailadres bent geregistreerd het juiste e-mailadres en je wachtwoord hier in.';
$txt['invalid_activation_new_email'] = 'Nieuw e-mailadres';
$txt['invalid_activation_password'] = 'Oude wachtwoord';
$txt['invalid_activation_resend'] = 'Activeringscode opnieuw versturen';
$txt['invalid_activation_known'] = 'Als je de activeringscode al kent, kun je die hier intypen.';
$txt['invalid_activation_retry'] = 'Activeringscode';
$txt['invalid_activation_submit'] = 'Activeren';

$txt['coppa_no_concent'] = 'De forumbeheerder heeft nog geen toestemming van je ouders/voogden ontvangen voor je account.';
$txt['coppa_need_more_details'] = 'Meer details nodig?';

$txt['awaiting_delete_account'] = 'Je hebt je account gemarkeerd voor verwijdering!<br />Als je je account wilt herstellen, vink dan &quot;Herstel mijn account&quot; aan en log dan opnieuw in.';
$txt['undelete_account'] = 'Herstel mijn account';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Nieuwe wachtwoordgegevens';
$txt['change_password_login'] = 'Je inloggegevens voor';
$txt['change_password_new'] = 'zijn veranderd en je wachtwoord is opnieuw ingesteld. Hieronder zijn je nieuwe inlogdetails.';

$txt['in_maintain_mode'] = 'Het forum bevindt zich in de onderhoudsmodus.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Lees en accepteer de overeenkomst voor je jezelf registreert.';
$txt['register_passwords_differ_js'] = 'De twee wachtwoorden komen niet overeen!';

$txt['approval_after_registration'] = 'Bedankt voor je registratie. De beheerder moet je registratie goedkeuren alvorens je kunt inloggen. Je ontvangt hierover zeer binnenkort een e-mail.';

$txt['admin_settings_desc'] = 'Hier kun je diverse instellingen veranderen met betrekking tot de registratie van nieuwe leden.';

$txt['setting_enableOpenID'] = 'Sta gebruikers toe te registreren middels OpenID';

$txt['setting_registration_method'] = 'Registratiemethode voor nieuwe leden';
$txt['setting_registration_disabled'] = 'Registratie uitgeschakeld';
$txt['setting_registration_standard'] = 'Directe registratie';
$txt['setting_registration_activate'] = 'Activatie via e-mail';
$txt['setting_registration_approval'] = 'Goedkeuring door beheerder';
$txt['setting_notify_new_registration'] = 'Breng beheerders op de hoogte als een nieuw lid zich geregistreerd heeft';
$txt['setting_send_welcomeEmail'] = 'Stuur een welkomst-e-mail naar het nieuwe lid als je geen wachtwoord via e-mail verstuurt?';

$txt['setting_coppaAge'] = 'Leeftijd waar beneden de restricties gelden';
$txt['setting_coppaAge_desc'] = '(Stel op  0 in om uit te schakelen)';
$txt['setting_coppaType'] = 'Te nemen actie als een gebruiker onder de minimumleeftijd zich registreert';
$txt['setting_coppaType_reject'] = 'Verwerp de registratie';
$txt['setting_coppaType_approval'] = 'Vereis ouderlijke goedkeuring';
$txt['setting_coppaPost'] = 'Postadres waar het goedkeuringsformulier naar toe gestuurd moet worden';
$txt['setting_coppaPost_desc'] = 'Alleen van toepassing als de leeftijdsrestrictie ingesteld staat';
$txt['setting_coppaFax'] = 'Faxnummer waar de goedkeuring naar gefaxt kan worden';
$txt['setting_coppaPhone'] = 'Telefoonnummer voor ouders om contact op te nemen voor leeftijdsrestrictievragen';

$txt['admin_register'] = 'Registratie van een nieuw lid';
$txt['admin_register_desc'] = 'Vanaf hier kun je nieuwe leden registreren en hen, indien gewenst, de details mailen.';
$txt['admin_register_username'] = 'Nieuwe gebruikersnaam';
$txt['admin_register_email'] = 'E-mailadres';
$txt['admin_register_password'] = 'Wachtwoord';
$txt['admin_register_username_desc'] = 'Gebruikersnaam van het nieuwe lid';
$txt['admin_register_email_desc'] = 'E-mailadres van het lid';
$txt['admin_register_password_desc'] = 'Nieuw wachtwoord voor gebruiker';
$txt['admin_register_email_detail'] = 'E-mail nieuw wachtwoord naar gebruiker';
$txt['admin_register_email_detail_desc'] = 'E-mailadres vereist zelfs indien niet aangevinkt';
$txt['admin_register_email_activate'] = 'Gebruiker dient zijn account te activeren';
$txt['admin_register_group'] = 'Primaire ledengroep';
$txt['admin_register_group_desc'] = 'Primaire ledengroep waar het nieuwe lid toe zal behoren';
$txt['admin_register_group_none'] = '(geen primaire ledengroep)';
$txt['admin_register_done'] = 'Het lid %1$s is met succes geregistreerd!';

$txt['coppa_title'] = 'Leeftijdsbeperkt forum';
$txt['coppa_after_registration'] = 'Bedankt voor je regstratie op ' . $context['forum_name_html_safe'] . '.<br /><br />Als lid onder de leeftijd van {MINIMUM_AGE} jaar is er een wettelijke verplichting
	om de goedkeuring van ouders of voogd te krijgen voordat je gebruik mag maken van je account. Print onderstaand formulier uit om activering van je account te regelen:';
$txt['coppa_form_link_popup'] = 'Laad het formulier in een nieuw venster';
$txt['coppa_form_link_download'] = 'Download formulier als een tekstbestand';
$txt['coppa_send_to_one_option'] = 'Zorg er daarna voor dat je ouders of voogd het ingevulde formulier opsturen naar:';
$txt['coppa_send_to_two_options'] = 'Zorg er daarna voor dat je ouders of voogd het ingevulde formulier opsturen naar:';
$txt['coppa_send_by_post'] = 'Post, naar het volgende adres:';
$txt['coppa_send_by_fax'] = 'Fax, naar het volgende nummer:';
$txt['coppa_send_by_phone'] = 'Eventueel kun je hen ook laten bellen naar de forumbeheerder op {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Toestemmingsformulier voor registratie op ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Adres';
$txt['coppa_form_date'] = 'Datum';
$txt['coppa_form_body'] = 'Ik {PARENT_NAME},<br /><br />geef toestemming aan {CHILD_NAME} (naam kind) om volwaardig geregistreerd lid te worden op het forum: ' . $context['forum_name_html_safe'] . ', met de gebruikersnaam: {USER_NAME}.<br /><br />Ik begrijp dat bepaalde persoonlijke informatie door {USER_NAME} ingevuld getoond kan worden aan andere gebruikers van het forum.<br /><br />Getekend:<br />{PARENT_NAME} (Ouder/Voogd).';

$txt['visual_verification_sound_again'] = 'Speel opnieuw';
$txt['visual_verification_sound_close'] = 'Sluit venster';
$txt['visual_verification_sound_direct'] = 'Heb je problemen met het beluisteren? Probeer een directe link naar het geluid.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Gebruikersnaam is beschikbaar';
$txt['registration_username_unavailable'] = 'Gebruikersnaam is niet beschikbaar';
$txt['registration_username_check'] = 'Controleer beschikbaarheid gebruikersnaam';
$txt['registration_password_short'] = 'Wachtwoord is te kort';
$txt['registration_password_reserved'] = 'Wachtwoord bevat gebruikersnaam of e-mail';
$txt['registration_password_numbercase'] = 'Wachtwoord moet groot en klein kapitaal en nummers bevatten';
$txt['registration_password_no_match'] = 'Wachtwoorden komen niet overeen';
$txt['registration_password_valid'] = 'Wachtwoord is geldig';

$txt['registration_errors_occurred'] = 'De onderstaande fouten ontstonden bij je registratie. Verbeter ze voor je doorgaat.';

$txt['authenticate_label'] = 'Authenticatiemethode';
$txt['authenticate_password'] = 'Wachtwoord';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'OpenID authenticatie-URL';

?>