<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'De volgende topics wachten op goedkeuring:';
$txt['scheduled_approval_email_msg'] = 'De volgende berichten wachten op goedkeuring:';
$txt['scheduled_approval_email_attach'] = 'De volgende bijlagen wachten op goedkeuring:';
$txt['scheduled_approval_email_event'] = 'De volgende evenementen wachten op goedkeuring:';

$txt['emails'] = array(

	'resend_activate_message' => array(
		/*
			@additional_params: resend_activate_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONCODE:  The code needed to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Bedankt voor je registratie op {FORUMNAME}. Je gebruikersnaam is {USERNAME}. Mocht je je wachtwoord vergeten zijn, dan kun je het opnieuw instellen via {FORGOTPASSWORDLINK}.
		
Voordat je in kunt loggen, dien je eerst je account te activeren. Om dit te doen, klik je op deze link:
{ACTIVATIONLINK}

Mocht je problemen ondervinden met de activatie, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en vul daar de code "{ACTIVATIONCODE}" in.

{REGARDS}',
	),
	'resend_pending_message' => array(
		/*
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Je registratieverzoek op {FORUMNAME} is ontvangen, {REALNAME}.
		
De gebruikersnaam waarmee je jezelf registreerde is {USERNAME}.
Voordat je in kunt loggen, moet je registratie goedgekeurd worden. Zodra dit gebeurd is, zul je nog een e-mail van ons ontvangen op dit e-mailadres.

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => 'Goedkeuring groeplidmaatschap',
		'body' => 'Hallo {USERNAME},

Met genoegen kunnen we je mededelen dat je verzoek om toe te treden tot de groep "{GROUPNAME}" op {FORUMNAME} is geaccepteerd, en je account is bijgewerkt met het lidmaatschap.

{REGARDS}',
	),

	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => 'Afwijzing groeplidmaatschap',
		'body' => 'Hallo {USERNAME},

Het spijt ons te moeten mededelen dat je verzoek om toe te treden tot de groep "{GROUPNAME}" op {FORUMNAME} is afgewezen.

{REGARDS}',
	),
	'mc_group_reject_reason' => array(
		/*
			@additional_params: mc_group_reject_reason
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
				REASON: Reason for the rejection.
			@description: The request to join a particular membergroup has been rejected with a reason given.
		*/
		'subject' => 'Afwijzing groeplidmaatschap',
		'body' => 'Hallo {USERNAME},

Het spijt ons te moeten mededelen dat je verzoek om toe te treden tot de groep "{GROUPNAME}" op {FORUMNAME} is afgewezen.
De reden hiertoe is als volgt: {REASON}

{REGARDS}',
	),
	'admin_approve_accept' => array(
		/*
			@additional_params: admin_approve_accept
				NAME: The display name of the member.
				USERNAME: The user name for the member receiving the email.
				PROFILELINK: The URL of the profile page.
				FORGOTPASSWORDLINK: The URL of the "forgot password" page.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Welkom, {NAME}!

Je account is handmatig geactiveerd door een forumbeheerder, wat betekent dat je nu kunt inloggen en berichten plaatsen. Je gebruikersnaam is: {USERNAME}. Mocht je je wachtwoord vergeten zijn, dan kun je het opnieuw instellen via {FORGOTPASSWORDLINK}.

{REGARDS}',
	),
	'admin_approve_activation' => array(
		/*
			@additional_params: admin_approve_activation
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Welkom, {USERNAME}!

Je account op {FORUMNAME} is goedgekeurd door een forumbeheerder. Voor je in kunt loggen, dien je je account te activeren door op de volgende link te klikken:
{ACTIVATIONLINK}
Mocht je problemen ondervinden met de activatie, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en vul daar de code "{ACTIVATIONCODE}" in.

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Registratie afgewezen',
		'body' => 'Hallo {USERNAME},

Het spijt ons je te moeten meedelen dat je registratieverzoek op {FORUMNAME} is afgewezen.

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Account verwijderd',
		'body' => '{USERNAME},

Je account op {FORUMNAME} is verwijderd. Dit kan zijn omdat je je account nooit hebt geactiveerd. Indien dat het geval is, kun je jezelf nu opnieuw registreren, mocht je dat willen.

{REGARDS}',
	),
	'admin_approve_remind' => array(
		/*
			@additional_params: admin_approve_remind
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Registratieherinnering',
		'body' => 'Hallo {USERNAME},

Je hebt nog steeds je account op {FORUMNAME} niet geactiveerd.
Gebruik de link hieronder om je account nu te activeren:
{ACTIVATIONLINK}

Mocht je problemen ondervinden met de activatie, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en vul daar de code "{ACTIVATIONCODE}" in.

{REGARDS}',
	),
	'admin_register_activate' => array(
		/*
			@additional_params:
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Bedankt voor je registratie op {FORUMNAME}. Je gebruikersnaam is {USERNAME} en je wachtwoord is {PASSWORD}.

Voordat je in kunt loggen, dien je eerst je account te activeren. Om dit te doen, klik je op deze link:
{ACTIVATIONLINK}

Mocht je problemen ondervinden met de activatie, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en vul daar de code "{ACTIVATIONCODE}" in.

{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Bedankt voor je registratie op {FORUMNAME}. Je gebruikersnaam is {USERNAME} en je wachtwoord is {PASSWORD}.

{REGARDS}',
	),
	'new_announcement' => array(
		/*
			@additional_params: new_announcement
				TOPICSUBJECT: The subject of the topic being announced.
				MESSAGE: The message body of the first post of the announced topic.
				TOPICLINK: A link to the topic being announced.
			@description:
		*/
		'subject' => 'Nieuwe aankondiging: {TOPICSUBJECT}',
		'body' => '{MESSAGE}

Om in het vervolg deze aankondigingen niet meer te krijgen, log je in op het forum en haal je het vinkje voor "Ontvang e-mailnotificatie bij nieuwe aankondigingen" bij de e-mailvoorkeuren van je profiel.

Je kunt de volledige aankondiging via de volgende link bekijken:
{TOPICLINK}

{REGARDS}',
	),
	'notify_boards_once_body' => array(
		/*
			@additional_params: notify_boards_once_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nieuw topic: {TOPICSUBJECT}',
		'body' => 'Een nieuw topic, \'{TOPICSUBJECT}\', is gestart op een board dat jij in de gaten houdt.

Je kunt het topic bekijken via deze link:
{TOPICLINK}

Er kunnen meerdere topics gestart zijn, maar je zult hiervan geen notificatie meer ontvangen tot je er ten minste één van hebt gelezen.
Het bericht van het topic is als volgt:
{MESSAGE}

Mocht je niet langer op de hoogte willen worden gehouden middels deze notificaties, gebruik dan deze link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_once' => array(
		/*
			@additional_params: notify_boards_once
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nieuw topic: {TOPICSUBJECT}',
		'body' => 'Een nieuw topic, \'{TOPICSUBJECT}\', is gestart op een board dat jij in de gaten houdt.
Je kunt het topic bekijken via deze link:
{TOPICLINK}

Er kunnen meerdere topics gestart zijn, maar je zult hiervan geen notificatie meer ontvangen tot je er ten minste één van hebt gelezen.

Mocht je niet langer op de hoogte willen worden gehouden middels deze notificaties, gebruik dan deze link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_body' => array(
		/*
			@additional_params: notify_boards_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nieuw topic: {TOPICSUBJECT}',
		'body' => 'Een nieuw topic, \'{TOPICSUBJECT}\', is gestart op een board dat jij in de gaten houdt.
Je kunt het topic bekijken via deze link:
{TOPICLINK}

Het bericht van het topic is als volgt:
{MESSAGE}

Mocht je niet langer op de hoogte willen worden gehouden middels deze notificaties, gebruik dan deze link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards' => array(
		/*
			@additional_params: notify_boards
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nieuw topic: {TOPICSUBJECT}',
		'body' => 'Een nieuw topic, \'{TOPICSUBJECT}\', is gestart op een board dat jij in de gaten houdt.

Je kunt het topic bekijken via deze link:
{TOPICLINK}

Mocht je niet langer op de hoogte willen worden gehouden middels deze notificaties, gebruik dan deze link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'request_membership' => array(
		/*
			@additional_params: request_membership
				RECPNAME: The name of the person recieving the email
				APPYNAME: The name of the person applying for group membership
				GROUPNAME: The name of the group being applied to.
				REASON: The reason given by the applicant for wanting to join the group.
				MODLINK: Link to the group moderation page.
			@description:
		*/
		'subject' => 'Nieuw groepsverzoek',
		'body' => '{RECPNAME},		

{APPYNAME} heeft zich aangemeld voor de groep "{GROUPNAME}". De gebruiker heeft de volgende motivatie gegeven:

{REASON}

Je kunt dit verzoek goedkeuren of afwijzen door de volgende link aan te klikken:
{MODLINK}

{REGARDS}',
	),
	'paid_subscription_reminder' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				PROFILE_LINK: Link to profile of member receiving email where can renew.
				SUBSCRIPTION: Name of the subscription.
				END_DATE: Date it expires.

			@description:
		*/
		'subject' => 'Abonnement op {FORUMNAME} verloopt bijna',
		'body' => '{REALNAME},

Je abonnement op {FORUMNAME} staat op het punt te verlopen. Als je bij het afsluiten van dit abonnement de optie \'automatisch vernieuwen\' aan hebt gevinkt, hoef je geen actie te ondernemen. In alle andere gevallen kun je overwegen opnieuw een abonnement af te sluiten. De details zijn als volgt:

Naam abonnement: {SUBSCRIPTION}
Verloopt op: {END_DATE}

Via de volgende URL kun je jouw abonnementen wijzigen:
{PROFILE_LINK}

{REGARDS}',
	),
	'activate_reactivate' => array(
		/*
			@additional_params: activate_reactivate
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
			@description:
		*/
		'subject' => 'Welkom terug op {FORUMNAME}',
		'body' => 'Omdat je e-mailadres opnieuw gecontroleerd moet worden, is je account gedeactiveerd. Klik op de onderstaande link om je account opnieuw te activeren:
{ACTIVATIONLINK}

Mocht je problemen ondervinden met de activatie, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en vul daar de code "{ACTIVATIONCODE}" in.

{REGARDS}',
	),
	'forgot_password' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				REMINDLINK: The link to reset the password.
				IP: The IP address of the requester.
				MEMBERNAME:
			@description:
		*/
		'subject' => 'Nieuw wachtwoord voor {FORUMNAME}',
		'body' => 'Hallo {REALNAME},

Deze e-mail is naar je verzonden omdat de \'Wachtwoord vergeten?\'-functie is gebruikt op jouw account. Om een nieuw wachtwoord in te stellen, klik je op de volgende link:
{REMINDLINK}

IP: {IP}
Gebruikersnaam: {MEMBERNAME}

{REGARDS}',
	),
	'forgot_openid' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				IP: The IP address of the requester.
				OPENID: The members OpenID identity.
			@description:
		*/
		'subject' => 'OpenID-herinnering voor {FORUMNAME}',
		'body' => 'Dear {REALNAME},

Deze e-mail is naar je verzonden omdat de \'OpenID vergeten\'-functie is toegepast op je account. Hieronder staat de OpenID waarmee jouw account geassocieerd wordt:
{OPENID}

IP: {IP}
Gebruikersnaam: {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => 'Overzicht van berichten die wachten op goedkeuring op {FORUMNAME}',
		'body' => 'Hallo {REALNAME},

Deze e-mail bevat een overzicht van alle onderdelen die wachten op goedkeuring op {FORUMNAME}.

{BODY}

Log in op het forum om deze onderdelen te bekijken.
{SCRIPTURL}

{REGARDS}',
	),
	'send_topic' => array(
		/*
			@additional_params: send_topic
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
			@description:
		*/
		'subject' => 'Topic: {TOPICSUBJECT} (van: {SENDERNAME})',
		'body' => 'Hallo {RECPNAME},

Ik denk dat je wel geïnteresseerd bent in "{TOPICSUBJECT}" op {FORUMNAME}. Om het te bekijken, klik je op deze link:
{TOPICLINK}

Bedankt,

{SENDERNAME}',
	),
	'send_topic_comment' => array(
		/*
			@additional_params: send_topic_comment
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
				COMMENT: A comment left by the sender.
			@description:
		*/
		'subject' => 'Topic: {TOPICSUBJECT} (van: {SENDERNAME})',
		'body' => 'Hallo {RECPNAME},

Ik denk dat je geïnteresseerd bent in "{TOPICSUBJECT}" op {FORUMNAME}. Om het te bekijken, klik je op deze link:
{TOPICLINK}

Er is ook een bericht meegegeven met betrekking tot dit onderwerp:
{COMMENT}

Bedankt,
{SENDERNAME}',
	),
	'send_email' => array(
		/*
			@additional_params: send_email
				EMAILSUBJECT: The subject the user wants to email.
				EMAILBODY: The body the user wants to email.
				SENDERNAME: The name of the member sending the email.
				RECPNAME: The name of the person receiving the email.
			@description:
		*/
		'subject' => '{EMAILSUBJECT}',
		'body' => '{EMAILBODY}',
	),
	'report_to_moderator' => array(
		/*
			@additional_params: report_to_moderator
				TOPICSUBJECT: The subject of the reported post.
				POSTERNAME: The report post's author's name.
				REPORTERNAME: The name of the person reporting the post.
				TOPICLINK: The url of the post that is being reported.
				REPORTLINK: The url of the moderation center report.
				COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
			@description: When a user reports a post this email is sent out to moderators and admins of that board.
		*/
		'subject' => 'Gerapporteerd bericht: {TOPICSUBJECT} door {POSTERNAME}',
		'body' => 'Het bericht "{TOPICSUBJECT}" van {POSTERNAME} is gerapporteerd door {REPORTERNAME} op een board dat jij modereert:

Het topic: {TOPICLINK}
Moderatielink: {REPORTLINK}

Het lid dat het bericht rapporteerde heeft het volgende commentaar toegevoegd:
{COMMENT}

{REGARDS}',
	),
	'change_password' => array(
		/*
			@additional_params: change_password
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
			@description:
		*/
		'subject' => 'Nieuwe accountgegevens',
		'body' => 'Hallo {USERNAME},

Je accountgegevens op {FORUMNAME} zijn gewijzigd, en je wachtwoord is daarbij veranderd. Hieronder staan de nieuwe gegevens.
Je gebruikersnaam is "{USERNAME}" en je wachtwoord is "{PASSWORD}".

Je kunt je voorkeuren veranderen door naar je profielpagina te gaan zodra je bent ingelogd, of door deze pagina te bezoeken nadat je bent ingelogd:
{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Bedankt voor je registratie op {FORUMNAME}. Je gebruikersnaam is {USERNAME}. Mocht je je wachtwoord vergeten zijn, dan kun je het opnieuw instellen via {FORGOTPASSWORDLINK}.

Voordat je in kunt loggen, dien je eerst je account te activeren. Om dit te doen, klik je op deze link:
{ACTIVATIONLINK}

Mocht je problemen ondervinden met de activatie, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en vul daar de code "{ACTIVATIONCODE}" in.

{REGARDS}',
	),
	'register_openid_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Bedankt voor je registratie op {FORUMNAME}. Je gebruikersnaam is {USERNAME}. Je hebt ervoor gekozen om te authentificeren middels de volgende OpenID-identiteit:
{OPENID}

Voordat je in kunt loggen, dien je eerst je account te activeren. Om dit te doen, klik je op deze link:
{ACTIVATIONLINK}

Mocht je problemen ondervinden met de activatie, bezoek dan {ACTIVATIONLINKWITHOUTCODE} en vul daar de code "{ACTIVATIONCODE}" in.

{REGARDS}',
	),
	'register_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				COPPALINK:  The url link to the coppa form.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Bedankt voor je registratie op {FORUMNAME}. Je gebruikersnaam is {USERNAME}. Mocht je je wachtwoord vergeten zijn, dan kun je het opnieuw instellen via {FORGOTPASSWORDLINK}.

Voordat je in kunt loggen, heeft de beheerder toestemming van een ouder of voogd nodig om je toegang te kunnen verlenen. Voor meer informatie kun je op de link hieronder klikken:
{COPPALINK}

{REGARDS}',
	),
	'register_openid_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				COPPALINK:  The url link to the coppa form.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Bedankt voor je registratie op {FORUMNAME}. Je gebruikersnaam is {USERNAME}.

Je hebt ervoor gekozen om middels de volgende OpenID-identiteit te authentificeren:
{OPENID}

Voordat je in kunt loggen, heeft de beheerder toestemming van een ouder of voogd nodig om je toegang te kunnen verlenen. Voor meer informatie kun je op de link hieronder klikken:
{COPPALINK}

{REGARDS}',
	),
	'register_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Bedankt voor je registratie op {FORUMNAME}. Je gebruikersnaam is {USERNAME}. Mocht je je wachtwoord vergeten zijn, dan kun je het opnieuw instellen via {FORGOTPASSWORDLINK}.

{REGARDS}',
	),
	'register_openid_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Bedankt voor je registratie op {FORUMNAME}. Je gebruikersnaam is {USERNAME}.

Je hebt ervoor gekozen om middels de volgende OpenID-identiteit te authentificeren:
{OPENID}

Je kunt je profiel wijzigen door na het inloggen naar de volgende pagina te gaan:
{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Je registratieverzoek op {FORUMNAME} is ontvangen, {REALNAME}.

De aangevraagde gebruikersnaam is {USERNAME}. Mocht je je wachtwoord vergeten zijn, dan kun je het opnieuw instellen via {FORGOTPASSWORDLINK}.
Voordat je in kunt loggen en het forum kunt gebruiken, moet je verzoek goedgekeurd worden. Zodra dit is gebeurd, zul je een e-mail van ons ontvangen op dit e-mailadres.

{REGARDS}',
	),
	'register_openid_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Welkom op {FORUMNAME}',
		'body' => 'Je registratieverzoek op {FORUMNAME} is ontvangen, {REALNAME}.

De gebruikersnaam waarmee je bent geregistreerd is {USERNAME}.
Je hebt er voor gekozen om met de volgende OpenID-identiteit te authentificeren:
{OPENID}

Voordat je in kunt loggen en het forum kunt gebruiken, moet je verzoek goedgekeurd worden. Zodra dit is gebeurd, zul je een e-mail van ons ontvangen op dit e-mailadres.

{REGARDS}',
	),
	'notification_reply' => array(
		/*
			@additional_params: notification_reply
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Nieuwe reactie: {TOPICSUBJECT}',
		'body' => '{POSTERNAME} heeft zojuist gereageerd op een topic dat jij in de gaten houdt.
		
Je kunt de reactie hier bekijken: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van reacties op dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_reply_body' => array(
		/*
			@additional_params: notification_reply_body
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Nieuwe reactie: {TOPICSUBJECT}',
		'body' => '{POSTERNAME} heeft zojuist gereageerd op een topic dat jij in de gaten houdt.

Je kunt de reactie hier bekijken: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van reacties op dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}
De tekst van de geplaatste reactie staat hieronder:

{MESSAGE}

{REGARDS}',
	),
	'notification_reply_once' => array(
		/*
			@additional_params: notification_reply_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Nieuwe reactie: {TOPICSUBJECT}',
		'body' => '{POSTERNAME} heeft zojuist gereageerd op een topic dat jij in de gaten houdt.

Je kunt de reactie hier bekijken: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van reacties op dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}
Er kunnen meer reacties zijn geplaatst, maar je zult niet meer notificaties ontvangen tot je het topic hebt bekeken.

{REGARDS}',
	),
	'notification_reply_body_once' => array(
		/*
			@additional_params: notification_reply_body_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Nieuwe reactie: {TOPICSUBJECT}',
		'body' => '{POSTERNAME} heeft zojuist gereageerd op een topic dat jij in de gaten houdt.

Je kunt de reactie hier bekijken: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van reacties op dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}
De tekst van de geplaatste reactie staat hieronder:

{MESSAGE}

Er kunnen meer reacties zijn geplaatst, maar je zult niet meer notificaties ontvangen tot je het topic hebt bekeken.

{REGARDS}',
	),
	'notification_sticky' => array(
		/*
			@additional_params: notification_sticky
			@description:
		*/
		'subject' => 'Topic sticky gemaakt: {TOPICSUBJECT}',
		'body' => 'Een topic dat jij in de gaten houdt, is als sticky gemarkeerd door {POSTERNAME}.

Bekijk het topic hier: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van updates van dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => 'Topic gesloten: {TOPICSUBJECT}',
		'body' => 'Een topic dat jij in de gaten houdt, is gesloten door {POSTERNAME}.

Bekijk het topic hier: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van updates van dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => 'Topic heropend: {TOPICSUBJECT}',
		'body' => 'Een topic dat jij in de gaten houdt, is heropend door {POSTERNAME}.

Bekijk het topic hier: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van updates van dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => 'Topic verwijderd: {TOPICSUBJECT}',
		'body' => 'Een topic dat jij in de gaten hield, is verwijderd door {POSTERNAME}.
{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => 'Topic verplaatst: {TOPICSUBJECT}',
		'body' => 'Een topic dat jij in de gaten houdt, is verplaatst naar een ander board door {POSTERNAME}.

Bekijk het topic hier: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van updates van dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => 'Topic samengevoegd: {TOPICSUBJECT}',
		'body' => 'Een topic dat jij in de gaten houdt, is samengevoegd met een ander topic door {POSTERNAME}.

Je kunt het nieuwe topic hier bekijken: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van updates van dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => 'Topic afgesplitst: {TOPICSUBJECT}',
		'body' => 'Een topic dat jij in de gaten houdt, is in twee of meer topics gesplitst door {POSTERNAME}.
Bekijk hier wat nog over is van het oorspronkelijke topic: {TOPICLINK}
Als je niet meer op de hoogte wilt worden gehouden van updates van dit topic, gebruik dan deze link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME:
				PROFILELINK:
			@description:
		*/
		'subject' => 'Een nieuw lid heeft zich geregistreerd',
		'body' => '{USERNAME} heeft zich zojuist geregistreerd als lid van je forum. Klik op de link hieronder om zijn of haar profiel te bekijken.
{PROFILELINK}

{REGARDS}',
	),
	'admin_notify_approval' => array(
		/*
			@additional_params: admin_notify_approval
				USERNAME:
				PROFILELINK:
				APPROVALLINK:
			@description:
		*/
		'subject' => 'Een nieuw lid heeft zich geregistreerd',
		'body' => '{USERNAME} heeft zich zojuist geregistreerd als lid van je forum. Klik op de link hieronder om zijn of haar profiel te bekijken.
{PROFILELINK}

Voordat dit lid kan beginnen met posten, moet zijn of haar account eerst goedgekeurd worden. Klik op de link hieronder om naar het goedkeurscherm te gaan.
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => 'Attentie! Bijlagenmap bijna vol',
		'body' => '{REALNAME},

De bijlagenmap van {FORUMNAME} zit bijna vol. Bezoek het forum om dit probleem te verhelpen.
Zodra de bijlagenmap zijn maximaal toegestane grootte bereikt, zullen leden geen bijlagen of avatars meer kunnen uploaden.

{REGARDS}',
	),
	'paid_subscription_refund' => array(
		/*
			@additional_params: paid_subscription_refund
				NAME: Subscription title.
				REALNAME: Recipients name
				REFUNDUSER: Username who took out the subscription.
				REFUNDNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Abonnementsrestitutie',
		'body' => '{REALNAME},

Een lid heeft restitutie gekregen op een abonnement. Hieronder staan de details van dit abonnement:

	Abonnement: {NAME}
	Naam lid: {REFUNDNAME} ({REFUNDUSER})
	Datum: {DATE}

Je kunt het profiel van dit lid bekijken via de link hieronder:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_new' => array(
		/*
			@additional_params: paid_subscription_new
				NAME: Subscription title.
				REALNAME: Recipients name
				SUBEMAIL: Email address of the user who took out the subscription
				SUBUSER: Username who took out the subscription.
				SUBNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Nieuw betaald abonnement',
		'body' => '{REALNAME},

Een lid heeft een nieuw betaald abonnement afgesloten. Hieronder staan de details hiervan:

	Abonnement: {NAME}
	Naam lid: {SUBNAME} ({SUBUSER})
	E-mailadres lid: {SUBEMAIL}
	Prijs: {PRICE}
	Datum: {DATE}

Je kunt het profiel van dit lid bekijken via de link hieronder:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_error' => array(
		/*
			@additional_params: paid_subscription_error
				ERROR: Error message.
				REALNAME: Recipients name
			@description:
		*/
		'subject' => 'Fout opgetreden bij betaald abonnement',
		'body' => '{REALNAME},

De onderstaande fout is opgetreden bij het afsluiten van een betaald abonnement. De fout is hieronder weergeven:
---------------------------------------------------------------
{ERROR}

{REGARDS}',
	),
);

/*
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$birthdayEmails = array(
	'happy_birthday' => array(
		'subject' => 'Fijne verjaardag namens {FORUMNAME}',
		'body' => 'Hallo {REALNAME},

Wij van {FORUMNAME} willen je bij dezen een hele fijne verjaardag toewensen. Hopelijk heb je een hele fijne dag en een geweldig jaar!

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
	),
	'karlbenson1' => array(
		'subject' => 'Op jouw verjaardag...',
		'body' => 'We hadden je een verjaardagskaart kunnen sturen. We hadden je bloemen of taart kunnen sturen.

Maar dat deden we niet.
We hadden je zelfs zo\'n automatisch gegenereerd bericht dat je \'n fijne verjaardag toewenst kunnen sturen, waar we je naam niet eens in hoeven te vullen.
Maar dat deden we niet.
We schreven deze verjaardagsgroet speciaal voor jou.
We willen je graag een heel speciale verjaardag toewensen.

{REGARDS}

//:: Dit bericht is automatisch gegenereerd :://',

		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
	'nite0859' => array(
		'subject' => 'Fijne verjaardag!',
		'body' => 'Je vrienden van {FORUMNAME} willen graag een momentje de tijd nemen om je een fijne verjaardag toe te wensen, {REALNAME}. Mocht je al een tijdje niet zijn geweest, kom dan zeker even langs zodat ook anderen de gelegenheid krijgen hun wens over te brengen.

Ook al is het vandaag je verjaardag, {REALNAME}, we willen je er graag aan herinneren dat we het meest blij zijn met jouw lidmaatschap van onze gemeenschap tot dusver.

Het beste,
Het team van {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
	),
	'zwaldowski' => array(
		'subject' => 'Verjaardagswensen aan {REALNAME}',
		'body' => 'Beste {REALNAME},

Alweer een jaar van je leven is voorbij. Wij van {FORUMNAME} hopen dat het gevuld is met vrolijkheid en wensen je veel geluk in het komende jaar.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
	'geezmo' => array(
		'subject' => 'Fijne verjaardag, {REALNAME}!',
		'body' => 'Weet je wie er vandaag jarig is, {REALNAME}?

Wij wel... JIJ!

Fijne verjaardag!

Je bent nu een jaar ouder, maar we hopen dat je nu een stuk vrolijker bent dan afgelopen jaar.
Geniet van vandaag, {REALNAME}!

- Van je {FORUMNAME}-familie',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
	),
	'karlbenson2' => array(
		'subject' => 'Je verjaardagsgroet',
		'body' => 'We hopen dat deze verjaardag de beste tot nu toe is. Bewolkt, zonnig, of welk weer dan ook.

Eet lekker veel verjaardagstaart, heb veel plezier en vertel ons wat je gedaan hebt!
We hopen dat dit bericht je opgevrolijkt heeft en dat die blijdschap zo blijft, tot ditzelfde tijdstip op dezelfde plaats, volgend jaar.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
);

?>