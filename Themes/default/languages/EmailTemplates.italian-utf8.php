<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'I seguenti topic sono in attesa di approvazione:';
$txt['scheduled_approval_email_msg'] = 'I seguenti post sono in attesa di approvazione:';
$txt['scheduled_approval_email_attach'] = 'I seguenti allegati sono in attesa di approvazione:';
$txt['scheduled_approval_email_event'] = 'I seguenti eventi sono in attesa di approvazione:';

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Grazie per esserti registrato su {FORUMNAME}. Il tuo username è {USERNAME}. Se dimentichi la tua password, puoi resettarla visitando {FORGOTPASSWORDLINK}.

Prima di poter effettuare il login, devi attivare il tuo account. Per farlo, segui questo link:

{ACTIVATIONLINK}

Se riscontri problemi nell\'attivazione, visita {ACTIVATIONLINKWITHOUTCODE} ed immetti il codice "{ACTIVATIONCODE}".

{REGARDS}',
	),

	'resend_pending_message' => array(
		/*
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'La tua richiesta di registrazione in {FORUMNAME} è stata ricevuta, {REALNAME}.

Il nome utente da te registrato è {USERNAME}.

Prima di poter effettuare il login ed iniziare ad utilizzare il forum, la tua richiesta dovrà essere esamitata ed approvata. Al termine della procedura riceverai una nuova e-mail da questo indirizzo.

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => 'Approvazione accesso al gruppo {GROUPNAME}',
		'body' => '{USERNAME},

Siamo lieti di comunicarti che la tua richiesta di entrare a far parte del gruppo "{GROUPNAME}" in {FORUMNAME}, ed il tuo account è stato aggiornato per includere tutte le nuove funzioni del gruppo.

{REGARDS}',
	),
	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => 'Rifiuto accesso al gruppo {GROUPNAME}',
		'body' => '{USERNAME},

Ci dispiace comunicarti che la tua richiesta di entrare a far parte del gruppo  "{GROUPNAME}" in {FORUMNAME} è stata rifiutata.

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
		'subject' => 'Group Membership Rejection',
		'body' => '{USERNAME},

Ci dispiace comunicarti che la tua richiesta di entrare a far parte del gruppo  "{GROUPNAME}" in {FORUMNAME} è stata rifiutata.

Questo per via della seguente ragione: {REASON}

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Benvenuto, {USERNAME}!

Il tuo account è stato attivato manualmente dall\'amministratore ed ora puoi effettuare l\'accesso ed utilizzare il forum. Il tuo nome utente è: {USERNAME}. Se dimentichi la tua password, puoi cambiarla su {FORGOTPASSWORDLINK}.

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Benvenuto, {USERNAME}!

Il tuo account su {FORUMNAME} è stato approvato dall\'amministratore. Ora devi solamente verificarlo cliccando sul collegamento qui sotto:

{ACTIVATIONLINK}

Se riscontri problemi nell\'attivazione, visita {ACTIVATIONLINKWITHOUTCODE} ed immetti il codice "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Registrazione Rifiutata',
		'body' => '{USERNAME},

La tua registrazione su {FORUMNAME} è stata rifiutata.

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Account Rimosso',
		'body' => '{USERNAME},

Il tuo account su {FORUMNAME} è stato rimosso. La causa potrebbe essere che non l\'hai mai attivato, in questo caso puoi effettuare nuovamente la registrazione.

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
		'subject' => 'Promemoria Registrazione',
		'body' => '{USERNAME},
Non hai ancora attivato il tuo account su {FORUMNAME}.

Usa il collegamento qui sotto per farlo:
{ACTIVATIONLINK}

Se riscontri problemi nell\'attivazione, visita {ACTIVATIONLINKWITHOUTCODE} ed immetti il codice "{ACTIVATIONCODE}".

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Grazie per esserti registrato su {FORUMNAME}. Il tuo username è {USERNAME} e la tua password è {PASSWORD}.

Prima di poter effettuare il login, devi attivare il tuo account. Per farlo, segui questo link:
{ACTIVATIONLINK}

Se riscontri problemi nell\'attivazione, visita {ACTIVATIONLINKWITHOUTCODE} ed immetti il codice "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Grazie per esserti registrato su {FORUMNAME}. Il tuo username è {USERNAME} e la tua password è {PASSWORD}.

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
		'subject' => 'Nuovo annuncio: {TOPICSUBJECT}',
		'body' => '{MESSAGE}

Per annullare la sottoscrizione a questi annunci, effettua l\'accesso al forum e deseleziona l\'opzione "Ricevi annunci ed importanti notifiche tramite e-mail" nel tuo profilo.

Puoi visualizzare l\'annuncio completo cliccando sul collegamento qui sotto:
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
		'subject' => 'Nuovo topic: {TOPICSUBJECT}',
		'body' => 'Un nuovo topic, \'{TOPICSUBJECT}\', è stato creato nella sezione che stai seguendo.

Puoi visualizzarlo cliccando su:
{TOPICLINK}

Altri topic potrebbero essere postati, ma non riceverai altre notifiche fino a quando non tornerai in quella sezione per leggerne alcuni.

Il testo del topic è il seguente:
{MESSAGE}

Per annullare la sottoscrizione alle notifiche di nuovi topic in questa sezione fai click su questo collegamento:
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
		'subject' => 'Nuovo topic: {TOPICSUBJECT}',
		'body' => 'Un nuovo topic, \'{TOPICSUBJECT}\', è stato creato nella sezione che stai seguendo.

Puoi visualizzarlo cliccando su:
{TOPICLINK}

Altri topic potrebbero essere postati, ma non riceverai altre notifiche fino a quando non tornerai in quella sezione per leggerne alcuni.

Per annullare la sottoscrizione alle notifiche di nuovi topic in questa sezione fai click su questo collegamento:
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
		'subject' => 'Nuovo topic: {TOPICSUBJECT}',
		'body' => 'Un nuovo topic, \'{TOPICSUBJECT}\', è stato creato nella sezione che stai seguendo.

Puoi visualizzarlo cliccando su:
{TOPICLINK}

Il testo del topic è il seguente:
{MESSAGE}

Per annullare la sottoscrizione alle notifiche di nuovi topic in questa sezione fai click su questo collegamento:
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
		'subject' => 'Nuovo topic: {TOPICSUBJECT}',
		'body' => 'Un nuovo topic, \'{TOPICSUBJECT}\', è stato creato nella sezione che stai seguendo.

Puoi visualizzarlo cliccando su:
{TOPICLINK}

Per annullare la sottoscrizione alle notifiche di nuovi topic in questa sezione fai click su questo collegamento:
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
		'subject' => 'Applicazione Nuovo Gruppo',
		'body' => '{RECPNAME},
		
{APPYNAME} ha richiesto di diventare membro del gruppo "{GROUPNAME}". L\'utente ha dato la seguente motivazione:

{REASON}

Puoi approvare o rifiutare questa applicazione clickando su questo link:

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
		'subject' => 'Sottoscrizione in scadenza su {FORUMNAME}',
		'body' => '{REALNAME},

Una sottoscrizione a cui sei iscritto su {FORUMNAME} sta per scadere. Se ti sei abbonato e hai selezionato il rinnovo automatico non devi fare nulla - in caso contrario potresti volerti iscrivere nuovamente. Di seguito i dettagli:

Nome Sottoscrizione: {SUBSCRIPTION}
Scadenza: {END_DATE}

Per modificare la sottoscrizione visita il seguente URL:
{PROFILE_LINK}

{REGARDS}',
	),
	'activate_reactivate' => array(
		/*
			@additional_params: activate_reactivate
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
			@description: 
		*/
		'subject' => 'Bentornato in {FORUMNAME}',
		'body' => 'Per rivalidare il tuo indirizzo e-mail, il tuo account è stato momentaneamente disattivato. Clicca sul link seguente per riattivarlo:
{ACTIVATIONLINK}

Sei riscontri qualche problema nell\'attivazione, usa il codice "{ACTIVATIONCODE}".

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
		'subject' => 'Nuova password per {FORUMNAME}',
		'body' => '{REALNAME},
La funzione di recupero della password è stata attivata per il tuo account. Per impostare una nuova password clicca sul link seguente:
{REMINDLINK}

IP: {IP}
Username: {MEMBERNAME}

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
		'subject' => 'Promemoria OpenID per {FORUMNAME}',
		'body' => 'Caro {REALNAME},
Questa mail ti è stata inviata poichè la funzione \'forgot OpenID\' è stata applicata al tuo account. Qui di seguito trovi l\'OpenID a cui è associato il tuo account:
{OPENID}

IP: {IP}
Username: {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => 'Riepilogo dei post che richiedono l\'approvazione in {FORUMNAME}',
		'body' => '{REALNAME},
		
Questa e-mail contiene un elenco di tutti gli elementi che attendono l\'approvazione in {FORUMNAME}.

{BODY}

Accedi al forum per controllare questi elementi.
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
		'subject' => 'Topic: {TOPICSUBJECT} (Da: {SENDERNAME})',
		'body' => '{RECPNAME},
Vorrei segnalarti il topic "{TOPICSUBJECT}" su {FORUMNAME}. Per visualizzarlo clicca sul seguente link:

{TOPICLINK}

Grazie,

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
		'subject' => 'Topic: {TOPICSUBJECT} (Da: {SENDERNAME})',
		'body' => '{RECPNAME},
Vorrei segnalarti il topic "{TOPICSUBJECT}" su {FORUMNAME}. Per visualizzarlo clicca sul seguente link:

{TOPICLINK}

È stato aggiunto anche un commento riguardo il topic:
{COMMENT}

Grazie,

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
		'subject' => 'Segnalazione post: {TOPICSUBJECT} di {POSTERNAME}',
		'body' => 'Il seguente post, "{TOPICSUBJECT}" di {POSTERNAME} è stato segnalato da {REPORTERNAME} nella sezione sotto tua moderazione:

Il topic: {TOPICLINK}
Centro Moderazione: {REPORTLINK}

L\'utente che ha effettuato la segnalazione ha inserito il seguente commento:
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
		'subject' => 'Nuova password',
		'body' => '{USERNAME}!

I tuoi dati di accesso su {FORUMNAME} sono stati modificati e la tua password azzerata. Di seguito i tuoi nuovi dati.

Il tuo nome utente è "{USERNAME}" e la tua password "{PASSWORD}".

Puoi modificarli dopo aver effettuato l\'accesso, semplicemente recandoti nella tua pagina del profilo, o visitando questa pagina dopo l\'accesso:
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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Grazie per esserti registrato su {FORUMNAME}. Il tuo username è {USERNAME}. Se dimentichi la tua password, puoi resettarla visitando {FORGOTPASSWORDLINK}.

Prima di poter effettuare il login, devi attivare il tuo account. Per farlo, segui questo link:

{ACTIVATIONLINK}

Se riscontri problemi nell\'attivazione, visita {ACTIVATIONLINKWITHOUTCODE} ed immetti il codice "{ACTIVATIONCODE}".

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Grazie per esserti registrato su {FORUMNAME}. Il tuo username è {USERNAME}. Hai scelto di autenticarti usando il seguente OpenID:
{OPENID}

Prima di poter effettuare il login, devi attivare il tuo account. Per farlo, segui questo link:

{ACTIVATIONLINK}

Se riscontri problemi nell\'attivazione, visita {ACTIVATIONLINKWITHOUTCODE} ed immetti il codice "{ACTIVATIONCODE}".

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Grazie per esserti registrato su {FORUMNAME}. Il tuo username è {USERNAME}. Se dimentichi la tua password, puoi resettarla visitando {FORGOTPASSWORDLINK}.

Prima di poter effettuare il login, l\'amministratore richiede il consenso dai tuoi genitori/tutori per entrare nella community. Puoi avere maggiori informazioni seguendo questo link:

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Grazie per esserti registrato su {FORUMNAME}. Il tuo username è {USERNAME}.

Hai scelto di autenticarti usando il seguente OpenID:
{OPENID}

Prima di poter effettuare il login, l\'amministratore richiede il consenso dai tuoi genitori/tutori per entrare nella community. Puoi avere maggiori informazioni seguendo questo link:

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Grazie per esserti registrato su {FORUMNAME}. Il tuo username è {USERNAME}. Se dimentichi la tua password, puoi resettarla visitando {FORGOTPASSWORDLINK}.

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'Grazie per esserti registrato su {FORUMNAME}. Il tuo username è {USERNAME}.

Hai scelto di autenticarti usando il seguente OpenID:
{OPENID}

Potrai aggiornare il tuo profilo visitandoquesta pagina dopo aver effettuato il login:

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'La tua richiesta di registrazione in {FORUMNAME} è stata ricevuta, {REALNAME}.

Il nome utente inserito è {USERNAME} e la password {PASSWORD}.

Prima di poter effettuare l\'accesso ed utilizzare il forum, la tua richiesta dovrà essere visionata ed approvata da un membro dello staff. Successivamente riceverai un\'altra email da questo indirizzo.

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
		'subject' => 'Benvenuto in {FORUMNAME}',
		'body' => 'La tua richiesta di registrazione a {FORUMNAME} è stata ricevuta, {REALNAME}.

Lo username con cui ti sei registrato è {USERNAME}.

Hai scelto di autenticarti usando il seguente OpenID:
{OPENID}

Prima di poter effettuare il login ed iniziare ad usare il forum, la tua richiesta deve essere revisionata e. Quando questo avverrà, riceverai un\'altra email da questo indirizzo.

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
		'subject' => 'Risposta al topic: {TOPICSUBJECT}',
		'body' => 'Una risposta è stata inserita da {POSTERNAME} nel topic che stai seguendo.

Visualizza la risposta: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

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
		'subject' => 'Risposta al topic: {TOPICSUBJECT}',
		'body' => 'Una risposta è stata inserita da {POSTERNAME} nel topic che stai seguendo.

Visualizza la risposta: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

Il testo del messaggio è riportato qui sotto:
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
		'subject' => 'Risposta al topic: {TOPICSUBJECT}',
		'body' => 'Una risposta è stata inserita da {POSTERNAME} nel topic che stai seguendo.

Visualizza la risposta: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

Altri messaggi potrebbero essere inseriti, ma non riceverai ulteriori notifiche finché non leggerai il topic.

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
		'subject' => 'Risposta al topic: {TOPICSUBJECT}',
		'body' => 'Una risposta è stata inserita da {POSTERNAME} nel topic che stai seguendo.

Visualizza la risposta: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

Il testo del messaggio è riportato qui sotto:
{MESSAGE}

Altri messaggi potrebbero essere inseriti, ma non riceverai ulteriori notifiche finché non leggerai il topic.

{REGARDS}',
	),
	'notification_sticky' => array(
		/*
			@additional_params: notification_sticky
			@description:
		*/
		'subject' => 'Topic in evidenza: {TOPICSUBJECT}',
		'body' => 'Un topic che stai seguendo è stato impostato come in evidenza da {POSTERNAME}.

Visualizza il topic: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => 'Topic chiuso: {TOPICSUBJECT}',
		'body' => 'Un topic che stai seguendo è stato chiuso da {POSTERNAME}.

Visualizza il topic: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => 'Topic riaperto: {TOPICSUBJECT}',
		'body' => 'Un topic che stai seguendo è stato riaperto da {POSTERNAME}.

Visualizza il topic: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => 'Topic eliminato: {TOPICSUBJECT}',
		'body' => 'Un topic che stavi seguendo è stato eliminato da {POSTERNAME}.

{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => 'Topic spostato: {TOPICSUBJECT}',
		'body' => 'Un topic che stai seguendo è stato spostato in un\'altra sezione da {POSTERNAME}.

Visualizza il topic: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => 'Topic unito: {TOPICSUBJECT}',
		'body' => 'Un topic che stai seguendo è stato unito ad un altro da {POSTERNAME}.

Visualizza il nuovo topic: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => 'Topic diviso: {TOPICSUBJECT}',
		'body' => 'Un topic che stai seguendo è stato diviso in due o più topic da {POSTERNAME}.

Visualizza il topic: {TOPICLINK}

Puoi disattivare le notifiche per questo topic cliccando sul seguente collegamento: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME: 
				PROFILELINK: 
			@description:
		*/
		'subject' => 'Un nuovo utente si è iscritto',
		'body' => '{USERNAME} ha appena effettuato la registrazione nel tuo forum. Clicca sul collegamento seguente per visualizzare il suo profilo.
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
		'subject' => 'Un nuovo utente si è iscritto',
		'body' => '{USERNAME} ha appena effettuato la registrazione nel tuo forum. Clicca sul collegamento seguente per visualizzare il suo profilo.
{PROFILELINK}

Prima che l\'utente possa inserire post deve avere l\'account approvato. Clicca sul collegamento seguente per visualizzare la pagina di approvazione.
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => 'Urgente! La cartella degli allegati è quasi piena',
		'body' => '{REALNAME},

La cartella degli allegati su {FORUMNAME} è quasi piena. Per piacere vista il forum per risolvere il problema.

Quando la cartella degli allegati raggiunge la dimensione massima consentita gli utenti non potranno continuare a postare allegati o caricare avatars personali (se abilitati).

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
		'subject' => 'Rimborso Sottoscrizione Pagata',
		'body' => '{REALNAME},

Un membro ha ricevuto il rimborso per una sottoscrizione pagata. Di seguito i dettagli della sottoscrizione:

	Sottoscrizione: {NAME}
	Nome Utente: {REFUNDNAME} ({REFUNDUSER})
	Data: {DATE}

Puoi vedere il profilo di questo membro clickando sul link seguente:
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
		'subject' => 'Nuova Sottoscrizione Pagata',
		'body' => '{REALNAME},

Un membro si è abbonato ad una nuova sottoscrizione pagata. Di seguito i dettagli della sottoscrizione:

	Sottoscrizione: {NAME}
	Nome Utente: {SUBNAME} ({SUBUSER})
	Email Utente: {SUBEMAIL}
	Prezzo: {PRICE}
	Data: {DATE}

Puoi vedere il profilo di questo membro clickando sul link seguente:
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
		'subject' => 'È accaduto un Errore su una Sottoscrizione Pagata',
		'body' => '{REALNAME},

È accaduto il seguente errore elaborando una sottoscrizione pagata
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
		'subject' => 'Buon compleanno da {FORUMNAME}.',
		'body' => '{REALNAME},

Noi di {FORUMNAME} vorremmo augurarti un buon compleanno. Possano essere questo giorno e l\'anno a venire colmi di gioia.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
	),
	'karlbenson1' => array(
		'subject' => 'Per il tuo compleanno...',
		'body' => 'Avremmo potuto mandarti una cartolina. Avremmo potuto mandarti alcuni fiori o una torta.

Ma non lo abbiamo fatto.

Avremmo potuto mandarti uno di quei messaggi generati automaticamente per augurarti un buon compleanno senza dover nemmeno modificre la stringa INSERT_NAME.

Ma non lo abbiamo fatto.

Abbiamo scritto questo messaggio di auguri proprio per te.

Ti auguriamo un compleanno veramente speciale.

{REGARDS}

//:: Questo messaggio è stato generato automaticamente :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
	'nite0859' => array(
		'subject' => 'Buon Compleanno!',
		'body' => 'I tuoi amici di {FORUMNAME} vorrebbero augurarti un buon compleanno, {REALNAME}. Se non lo hai fatto di recente, visita la nostra community per dare agli utenti la possibilità di offrirti i loro sinceri auguri.

Anche se oggi è il tuo compleanno, {REALNAME}, vorremmo ricordarti che la tua iscrizione alla nostra community è stato il tuo più grande regalo per noi.

I migliori saluti,
Lo Staff di {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
	),
	'zwaldowski' => array(
		'subject' => 'Sinceri auguri, {REALNAME}',
		'body' => 'Caro {REALNAME},

Un altro anno della tua vita è passato. Noi di {FORUMNAME} speriamo sia stato pieno di gioia, e ti auguriamo lo stesso per quello a venire.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
	'geezmo' => array(
		'subject' => 'Buon compleanno, {REALNAME}!',
		'body' => 'Sai chi compie gli anni oggi, {REALNAME}?

Noi sì... TU!

Buon compleanno!

Ora sei più vecchio di un anno ma speriamo che tu sia molto più felice dell\'anno scorso.

Divertiti oggi, {REALNAME}!

- Dalla tua famiglia di {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
	),
	'karlbenson2' => array(
		'subject' => 'Auguri di Buon Compleanno',
		'body' => 'Ci auguriamo che questo compleanno sia migliore.
Speriamo tu riceva una buona torta ma soprattutto tanto divertimento, ricordati di raccontarci cosa hai fatto.

Nella speranza che questo messaggio ti abbia fatto sorridere, ci rivediamo il prossimo anno.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
);

?>