<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'المواضيع التالية تنتظر الموافقة:';
$txt['scheduled_approval_email_msg'] = 'المشاركات التالية تنتظر الموافقة:';
$txt['scheduled_approval_email_attach'] = 'المرفقات التالية تنتظر الموافقة:';
$txt['scheduled_approval_email_event'] = 'الأحداث التالية تنتظر الموافقة:';

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'شكرا لتسجيلك فى {FORUMNAME}, اسم المستخدم الخاص بك هو {USERNAME}, إذا نسيت كلمة المرور يمكنك تغيرها من هنا {FORGOTPASSWORDLINK}.

قبل أن يمكنك تسجيل الدخول, يجب عليم تفعيل حسابك. لكي تفعل ذلك, أرجو استخدام الرابط التالي:

{ACTIVATIONLINK}

إذا كانت لديك أى مشكلة فى تفعيل العضوية, فقم بزيارة {ACTIVATIONLINKWITHOUTCODE} و كتابت كود التنشيط "{ACTIVATIONCODE}".

{REGARDS}',
	),

	'resend_pending_message' => array(
		/* 
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
			@description: 
		*/
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'طلب التسجيل الخاص بك فى {FORUMNAME} قد تم استقباله, {REALNAME}.

اسم المستخدم الذي أنت مسجل به هو {USERNAME}.

قبل أن تتمكن من تسجيل الدخول و استخدام المنتدى, يجب أن يتم الموافقة على طلبك من أجل الانتساب. عند حدوث ذلك، سوف يصلك بريد الكتروني آخر من نفس هذا البريد الإلكترونى .

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => 'الموافقة على الانتساب للمجموعة',
		'body' => '{USERNAME},

نحن سعيدون لإعلامك أن طلبك للانضمام إلى المجموعة "{GROUPNAME}" ضمن {FORUMNAME} تم الموافقة عليه, و تم تحديث حسابك بحيث يتضمن هذه المجموعة.

{REGARDS}',
	),
	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => 'رفض الانتساب للمجموعة',
		'body' => '{USERNAME},

نعتذر لإعلامك بأن طلبك للإنتساب إلى المجموعة "{GROUPNAME}" ضمن {FORUMNAME} تم رفضه.

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
		'subject' => 'رفض الانتساب للمجموعة',
		'body' => '{USERNAME},

نعتذر لإعلامك بأن طلبك للإنتساب إلى المجموعة "{GROUPNAME}" ضمن {FORUMNAME} تم رفضه.

و ذلك للسبب التالي: {REASON}

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'أهلا, {NAME}!

لقد تم تفعيل حسابك من قبل الإدارة و تستطيع الآن تسجيل الدخول و المشاركة. اسم المستخدم الخاص بك: {USERNAME},إذا نسيت كلمة المرور يمكنك تغيرها من هنا {FORGOTPASSWORDLINK}.

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'أهلا, {USERNAME}!

حسابك فى {FORUMNAME} تم الموافقة عليه من قبل الإدارة, و يجب أن يتم تفعيله قبل أن تتمكن من المشاركة. استخدم الرابط الذي في الأسفل من أجل تفعيل حسابك:

{ACTIVATIONLINK}

إذا كانت لديك أى مشكلة فى تفعيل العضوية, فقم بزيارة {ACTIVATIONLINKWITHOUTCODE} و كتابت كود التنشيط "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'رفض التسجيل',
		'body' => '{USERNAME},

للآسف, لكن طلبك للانتساب إلى {FORUMNAME} قد تم رفضه.

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'تم حذف الحساب',
		'body' => '{USERNAME},

حسابك فى {FORUMNAME} تم حذفه. يمكن أن يكون ذلك بسبب أنك لم تقم بتفعيل حسابك, يعلى أى حال مكنك المحاولة و التسجيل مرة أخرى.

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
		'subject' => 'منبه التسجيل',
		'body' => '{USERNAME},
لم تقم بتفعيل حسابك فى {FORUMNAME}.

أرجو اتباع الرابط الذي في الأسفل من أجل التفعيل:
{ACTIVATIONLINK}

إذا كانت لديك أى مشكلة فى تفعيل العضوية, فقم بزيارة {ACTIVATIONLINKWITHOUTCODE} و كتابت كود التنشيط "{ACTIVATIONCODE}".

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'شكرا لتسجيلك فى {FORUMNAME}, اسم المستخدم الخاص بك هو {USERNAME}, و كلمة المرور هى {PASSWORD}.

قبل ان تستطيع تسجيل الدخول بالموقع, يجب عليك أولا تنشيط حسابك عن طريق الرابط التالى:

{ACTIVATIONLINK}

إذا كانت لديك أى مشكلة فى تفعيل العضوية, فقم بزيارة {ACTIVATIONLINKWITHOUTCODE} و كتابت كود التنشيط "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'شكرا لتسجيلك فى موقع {FORUMNAME}. إسم المستخدم الخاص بك هو {USERNAME} و كلمة المرور هى {PASSWORD}.

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
		'subject' => 'إعلان جديد: {TOPICSUBJECT}',
		'body' => '{MESSAGE}

لكي تلغي خاصية التنبيه على الإعلانات الجديدة, قم بتسجيل الدخول و ألغي خيار "الحصول على بريد تنبيهي في حال وجود إعلان جدي." من خلال صحفة حسابي.

يمكنك مشاهد الإعلان الكامل على الرابط التالي:
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
		'subject' => 'موضوع جديد: {TOPICSUBJECT}',
		'body' => 'موضوع جديد, \'{TOPICSUBJECT}\', قد تم إنشاءه على القسم الذي تراقبة.

يمكنك مشاهدته على الرابط التالي:
{TOPICLINK}

مواضيع أكثر ممكن أن تكون أنشئت, لكن لن تستقبل تنبيهات جديدة عن طريق البريد حتى تقوم بزيارة القسم و تقرأ بعضا منها.

نص الموضوع:
{MESSAGE}

لكي تلغي خاصة التنبيه على المواضيع الجديدة من هذا القسم قم باستخدام الرابط التالي:
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
		'subject' => 'موضوع جديد {TOPICSUBJECT}',
		'body' => 'موضوع جديد, \'{TOPICSUBJECT}\', قد تم إنشاءه على القسم الذي تراقبه.

يمكنك مشاهدته على الرابط التالي:
{TOPICLINK}

مواضيع أكثر ممكن أن تكون أنشئت, لكن لن تستقبل تنبيهات جديدة عن طريق البريد حتى تقوم بزيارة القسم و تقرأ بعضا منها.

لكي تلغي خاصة التنبيه على المواضيع الجديدة من هذا القسم قم باستخدام الرابط التالي:
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
		'subject' => 'موضوع جديد: {TOPICSUBJECT}',
		'body' => 'موضوع جديد, \'{TOPICSUBJECT}\', قد تم إنشاءه على القسم الذي تراقبه.

يمكنك مشاهدته على الرابط التالي:
{TOPICLINK}

نص الموضوع:
{MESSAGE}

لكي تلغي خاصة التنبيه على المواضيع الجديدة من هذا القسم قم باستخدام الرابط التالي:
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
		'subject' => 'موضوع جديد: {TOPICSUBJECT}',
		'body' => 'موضوع جديد, \'{TOPICSUBJECT}\', قد تم إنشاءه على القسم الذي تراقبه.

يمكنك مشاهدته على الرابط التالي:
{TOPICLINK}

لكي تلغي خاصة التنبيه على المواضيع الجديدة من هذا القسم قم باستخدام الرابط التالي:
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
		'subject' => 'طلب جديد للانتساب لمجموعة',
		'body' => '{RECPNAME},
		
{APPYNAME} قد طلب الانتساب للمجموعة "{GROUPNAME}". لقد أعطى العضو الأسباب التالية:

{REASON}

يمكنك الموافقة أو رفض هذا الطلب من خلال الضغط على الرابط التالي:

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
		'subject' => 'إشتراكك المدفوع أوشك على الأنتهاء فى {FORUMNAME}',
		'body' => '{REALNAME},

إن إشتراكك المدفوع فى {FORUMNAME} قد أوشك على الانتهاء. إذا كنت قد إخترت أن يتم تجديد الإشتراك تلقائى فلا تفعل شيء - و إلا فأنه يجب عليك النظر فى المعلومات الموجودة أدناه. باقى التفاصيل بالأسفل:

إسم الإشتراك: {SUBSCRIPTION}
تاريخ الإنتهاء: {END_DATE}

لتعديل إشتراكك إضغط على الرابط الموجود أدناه:
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
		'subject' => 'أهلا بعودتك إلى {FORUMNAME}',
		'body' => 'من أجل إعادة تفعيل بريد الاكتروني, فإن حسابك قد تم إلغاء تفعيله. اضغط على الرابط التالي من أجل تفعيله مرة أخرى:
{ACTIVATIONLINK}

إذا كانت لديك أى مشكلة فى تفعيل العضوية, فقم بزيارة {ACTIVATIONLINKWITHOUTCODE} و كتابت كود التنشيط "{ACTIVATIONCODE}".

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
		'subject' => 'كلمة مرور جديدة لـ {FORUMNAME}',
		'body' => 'عزيزي {REALNAME},
هذا البريد قد تم إرساله بسبب ميزة \'نسيت كلمة المرور\' قد تم تطبيقها على حسابك. لتحديد كلمة سر جديدة اضغط على الرابط التالي:
{REMINDLINK}

عنوان الاي بي: {IP}
اسم المستخدم: {MEMBERNAME}

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
		'subject' => 'التذكير بالـ OpenID الخاص بـ {FORUMNAME}',
		'body' => 'مرحبا {REALNAME},
لقد تم إرسال هذه الرسالة بسبب ميزة \'تذكير بالـ OpenID\' د تم تطبيقها على حسابك. و هذا هو الـ OpenID الذى تستخدمه لحسابك:
{OPENID}

عنوان الاى بى: {IP}
إسم المستخدم: {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => 'ملخص المشاركات التي تنتظر الموافقة فى {FORUMNAME}',
		'body' => '{REALNAME},
		
هذا البريد يتضمن ملخص كل العناصر التي تنتظر الموافقة فى {FORUMNAME}.

{BODY}

أرجو تسجيل الدخول ضمن المنتدى لمشاهدة هذه العناصر.
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
		'subject' => 'الموضوع: {TOPICSUBJECT} (من قبل: {SENDERNAME})',
		'body' => 'عزيزي {RECPNAME},
أريدك أن تتفقد هذا الموضوع "{TOPICSUBJECT}" فى {FORUMNAME}.  لكي تشاهده, أرجو الضعط على هذا الرابط:

{TOPICLINK}

شكرا,

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
		'subject' => 'الموضوع: {TOPICSUBJECT} (من قبل: {SENDERNAME})',
		'body' => 'عزيزي {RECPNAME},
أريدك أن تشاهد هذا الموضوع "{TOPICSUBJECT}" فى {FORUMNAME}.  لعرض هذا الموضوع, أرجو استخدام هذا الرابط:

{TOPICLINK}

و هناك تعليق قد تم إضافته بخصوص هذا الموضوع:
{COMMENT}

شكرا,

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
		'subject' => 'المشاركة المقرر عنها: {TOPICSUBJECT} بواسطة {POSTERNAME}',
		'body' => 'المشاركة التالية, "{TOPICSUBJECT}" بواسطة {POSTERNAME} قد تم التقرير عنها بواسطة {REPORTERNAME} فى المنتدى الذي تشرف عليه:

الموضوع: {TOPICLINK}
قسم الإشراف: {REPORTLINK}

المقرر قد وضع التعليق التالي:
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
		'subject' => 'تفاصيل كلمة المرور الجديدة',
		'body' => 'مرحبا, {USERNAME}!
		
تفاصيل دخول حسابك فى {FORUMNAME} قد تم تغيرها و كلمة المرور قد تم تهيئتها. في الأسفل تفاصيل تسجيل الدخول الخاصة بك.

اسم المستخدم "{USERNAME}" و كلمة المرور هي "{PASSWORD}".

يمكنك تغيرها بعد تسجيل الدخول عن طريق الذهاب إلى صفحة حسابي, أو من خلال زيارة الرابط التالي بعد تسجيل الدخول:
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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'شكرا لتسجيلك فى {FORUMNAME}, اسم المستخدم الخاص بك هو {USERNAME}, إذا نسيت كلمة المرور يمكنك تغيرها من هنا {FORGOTPASSWORDLINK}.

قبل أن تتمكن من تسجيل الدخول, يجب عليك أن تفعل حسابك. لتقوم بذلك استخدم الرابط التالي:

{ACTIVATIONLINK}

إذا كانت لديك أى مشكلة فى تفعيل العضوية, فقم بزيارة {ACTIVATIONLINKWITHOUTCODE} و كتابت كود التنشيط "{ACTIVATIONCODE}".

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'شكرا لتسجيلك فى {FORUMNAME}. إسم المستخدم الخاص بك هو {USERNAME}. و قد إخترت أن تستخدم الـ OpenID التالى:
{OPENID}

قبل أن تتمكن من تسجيل الدخول, يجب عليك أن تفعل حسابك. لتقوم بذلك استخدم الرابط التالي:

{ACTIVATIONLINK}

إذا كانت لديك أى مشكلة فى تفعيل العضوية, فقم بزيارة {ACTIVATIONLINKWITHOUTCODE} و كتابت كود التنشيط "{ACTIVATIONCODE}".

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'شكرا لتسجيلك فى {FORUMNAME}. إسم المستخدم الخاص بك هو {USERNAME}. إذا نسيت كلمة المرور, يمكنك تغيرها من هنا {FORGOTPASSWORDLINK}

قبل أن تتمكن من تسجيل الدخول, فإنه يجب على المدير الحصول على موافقه من والديك/الواصى عليك بالإنضمام للموقع. ستجد مزيد من المعلومات فى الرابط التالى:

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
		'subject' => 'اهلا بك فى {FORUMNAME}',
		'body' => 'شكرا لتسجيلك فى {FORUMNAME}. إسم المستخدم الخاص بك هو {USERNAME}.

لقد إخترت أن تستخدم هذا الـ OpenID :
{OPENID}

قبل أن تتمكن من تسجيل الدخول, فإنه يجب على المدير الحصول على موافقه من والديك/الواصى عليك بالإنضمام للموقع. ستجد مزيد من المعلومات فى الرابط التالى:

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'شكرا لتسجيلك فى {FORUMNAME}, اسم المستخدم الخاص بك هو {USERNAME}, إذا نسيت كلمة المرور يمكنك تغيرها من هنا {FORGOTPASSWORDLINK}.

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'شكرا لتسجيلك فى {FORUMNAME}. إسم المستخدم الخاص بك هو {USERNAME}.

لقد إخترت أن تستخدم هذا الـ OpenID :
{OPENID}

يمكنك تحديث بيانات ملفك الشخصى بعد تسجيل دخولك , عن طريق الرابط التالى:

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'إن طلب تسجيلك فى {FORUMNAME} قد تم استلامه, {REALNAME}.

اسم المستخدم الذي سجلت به هو {USERNAME}. إذا نسيت كلمة المرور, يمكنك تغييرها من هنا {FORGOTPASSWORDLINK}.

قبل أن تستطيع أن تسجل دخول و تبدأ باستخدام المنتدى, فإن طلبك سوف يتم مراجعته و الموافقة عليه. عندما يحدث ذلك, سوف يصلك بريد آخر من نفس العنوان المرسل الحالي.

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
		'subject' => 'أهلا بك فى {FORUMNAME}',
		'body' => 'إن طلب تسجيلك فى {FORUMNAME} قد تم استلامه, {REALNAME}.

اسم المستخدم الذي سجلت به هو {USERNAME}.

لقد إخترت أن تستخدم هذا الـ OpenID :
{OPENID}

قبل أن تستطيع أن تسجل دخول و تبدأ باستخدام المنتدى, فإن طلبك سوف يتم مراجعته و الموافقة عليه. عندما يحدث ذلك, سوف يصلك بريد آخر من نفس العنوان المرسل الحالي.

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
		'subject' => 'رد على الموضوع: {TOPICSUBJECT}',
		'body' => 'لقد تم الرد على الموضوع الذي تراقبه بواسطة {POSTERNAME}.

شاهد الرد على الرابط التالى: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

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
		'subject' => 'رد على الموضوع: {TOPICSUBJECT}',
		'body' => 'لقد تم الرد على الموضوع الذي تراقبه بواسطة {POSTERNAME}.

شاهد الرد على الرابط التالى: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

و هذا هو نص الرد:
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
		'subject' => 'رد على الموضوع: {TOPICSUBJECT}',
		'body' => 'لقد تم الرد على الموضوع الذي تراقبه بواسطة {POSTERNAME}.

شاهد الرد على الرابط التالى: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

أكثر من مشاركة قد تم الرد بها, لكنك لن تستلم أية بريد آخر حتى تقوم بقراءة الموضوع.

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
		'subject' => 'رد على الموضوع: {TOPICSUBJECT}',
		'body' => 'لقد تم الرد على الموضوع الذي تراقبه بواسطة {POSTERNAME}.

شاهد الرد على الرابط التالى: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

نص الرد:
{MESSAGE}

أكثر من مشاركة قد تم الرد بها, لكنك لن تستلم أية بريد آخر حتى تقوم بقراءة الموضوع.

{REGARDS}',
	),
	'notification_sticky' => array(
		/*
			@additional_params: notification_sticky
			@description:
		*/
		'subject' => 'تثبيت الموضوع: {TOPICSUBJECT}',
		'body' => 'الموضوع الذي تراقبه قد تم تثبيته بواسطة {POSTERNAME}.

شاهد الموضوع: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => 'قفل الموضوع: {TOPICSUBJECT}',
		'body' => 'الموضوع الذي تراقبه قد تم قفله بواسطة {POSTERNAME}.

شاهد الموضوع: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => 'إلغاء قفل الموضوع: {TOPICSUBJECT}',
		'body' => 'الموضوع الذي تراقبه قد تم إلغاء قفله بواسطة {POSTERNAME}.

شاهد الموضوع: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => 'حذف الموضوع: {TOPICSUBJECT}',
		'body' => 'الموضوع الذي تراقبه قد تم حذفه بواسطة {POSTERNAME}.

{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => 'نقل الموضوع: {TOPICSUBJECT}',
		'body' => 'الموضوع الذي تراقبه قد تم نقله إلى قسم آخر بواسطة {POSTERNAME}.

شاهد الموضوع: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => 'دمج الموضوع: {TOPICSUBJECT}',
		'body' => 'الموضوع الذي تراقبه قد تم دمجه مع موضوع آخر بواسطة {POSTERNAME}.

لمشاهدة الموضوع الجديد: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => 'فصل الموضوع: {TOPICSUBJECT}',
		'body' => 'الموضوع الذي تراقبه قد تم تجزئته إلى موضوعين أو أكثر بواسطة {POSTERNAME}.

لمشاهدة ما تبقى من هذا الموضوع: {TOPICLINK}

لكي تلغي ميزة التبيه على الردود على هذا الموضوع اتبع الرابط التالي: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME: 
				PROFILELINK: 
			@description:
		*/
		'subject' => 'عضو جديد قد انضم',
		'body' => 'لقد انضم العضو{USERNAME} إلى منتداك. اضغط هنا لكي تشاهد معلوماته الشخصية.
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
		'subject' => 'عضو جديد قد انضم',
		'body' => 'لقد انضم العضو {USERNAME} إلى منتداك. اضغط هنا لكي تشاهد معلوماته الشخصية.
{PROFILELINK}

قبل أن يتمكن هذا العضو من المشاركة يجب أن يتم الموافقة على حسابهم أولا. اضغط هنا لكي تذهب إلى صفحة الموافقة.
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => 'عاجل! مجلد المرفقات يكاد يكون ممتليئ',
		'body' => '{REALNAME},

إن مجلد المرفقات فى {FORUMNAME} يكاد يكون ممتليئ. رجاء قم بزيارة المنتدى لحل هذه المشكلة.

بمجرد أن يصل هذا المجلد الى حجمه الاقصى فإنه لن يستطيع الاعضاء وضع صورهم الشخصية على الموقع ,او يمكنهم إستخدام خاصية عن طريق رابط (إذا كانت تعمل).

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
		'subject' => 'رد الإشتراك المدفوع',
		'body' => '{REALNAME},

لقد تلقى عضو رد على الإشتراك المدفوع. بالاسفل تفاصيل هذا الاشتراك:

	إسم الإشتراك: {NAME}
	إسم العضو: {REFUNDNAME} ({REFUNDUSER})
	التاريخ: {DATE}

يمكنك مشاهدة الملف الشخصى الخاص بهذا العضو عن طريق الرابط التالى:
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
		'subject' => 'إشتراك مدفوع جديد',
		'body' => '{REALNAME},

لقد قام عضو للتو بالتسجيل فى إشتراك مدفوع. بالأسفل تفاصيل هذا الإشتراك:

	إسم الإشتراك: {NAME}
	إسم العضو: {SUBNAME} ({SUBUSER})
	البريد الإلكترونى: {SUBEMAIL}
	السعر: {PRICE}
	التاريخ: {DATE}

يمكنك مشاهدة الملف الشخصى الخاص بهذا العضو عن طريق الرابط التالى:
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
		'subject' => 'خطأ خلال عملة الإشتراك المدفوع',
		'body' => '{REALNAME},

لقد حدث الخطأ التالى أثناء القيام بالإشتراك المدفوع
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
        'subject' => 'عيد ميلاد سعيد من منتدى {FORUMNAME}.',
        'body' => 'مرحبا {REALNAME},

من منتدى {FORUMNAME} نتمنى لك عيد ميلاد سعيد.فى هذا اليوم و نتمنى لك عاما سعيدا.

{REGARDS}',
        'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
    ),
    'karlbenson1' => array(
        'subject' => 'فى يوم عيد ميلادك ...',
        'body' => 'كان بإمكاننا أن نرسل لك بطاقة معايدة. و كان بإمكاننا أن نرسل لك بعض الورد  أو الكعك .

لكننا لم نفعل .

كان بإمكاننا أن نرسل لك رسالة تلقائيه مسجله لتهنئتك,و يكتب فيها إسمك تلقائى.

لكننا لم نفعل

لقد كتبنا رسالت التهنئه هذه خصيصا لك.

نود أن نتمنى لك عيد ميلاد خاص جدا .

{REGARDS}

//:: هذه رسالة تلقائيه مسجله  :://',
        'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
    'nite0859' => array(
        'subject' => 'عيد ميلاد سعيد!',
        'body' => 'أصدقائك من منتدى {FORUMNAME} يودون أن يأخذو دقيقه من وقتك ليتمنو لك عيد ميلاد سعيد, {REALNAME}. إذا لم تكن قد فعلت ذلك فى الآونه الأخيره, رجاء تعال و قم بزيارة المنتدى لكى يهنيئك الجميع و يتمنو لك عاما سعيدا.

بالرغم أن اليوم هو عيد ميلادك, {REALNAME}, فنود أن نذكرك أن عضويتك فى منتدانا هى أفضل هديا لنا حتى الأن .
	
خالص تمنياتنا ,
فريق {FORUMNAME}',
        'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
    ),
    'zwaldowski' => array(
        'subject' => 'نتمنى لك عيد ميلاد سعيد {REALNAME}',
        'body' => 'مرحبا {REALNAME},

عام أخر من حياتك قد مضى. و نحن من منتدى {FORUMNAME} نتمنى لك الأمل و السعاده, و نتمنى لك حظا سعيدا فى الفترة القادمه.

{REGARDS}',
        'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
    'geezmo' => array(
        'subject' => 'عيد ميلاد سعيد, {REALNAME}!',
        'body' => 'هل تعلم من عيد ميلاده اليوم , {REALNAME}؟

نحن نعرف ... إنه أنت!

عيد ميلاد سعيد!

أنت الأن قد كبرت عام و لكننا نتمنى لك عاما سعيدا أسعد من العام السابق.

نتمنى لك يوما سعيدا, {REALNAME}!

- من منتدى {FORUMNAME} عائلتك',
        'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
    ),
    'karlbenson2' => array(
        'subject' => 'تهنئة بعيد ميلادك',
        'body' => 'نتمنى لك عيد ميلاد أسعد من أى وقت مضى شتائا,صيفا أو حتى مهما كان الطقس .
إستمتع بعيد ميلادك إستمتع بالكعك و اللعب, و أخبيرنا ماذا فعلت .

نتمنى أن تكون هذه الرساله قد أدخلت عليك البهجه, نلقاك على خير, فى نفس المكان و الزمان, فى العام المقبل.

{REGARDS}',
        'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
    ),
);

?>