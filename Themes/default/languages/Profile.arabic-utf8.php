<?php
// Version: 2.0; Profile

global $scripturl, $context;

$txt['no_profile_edit'] = 'لا يمكنك التغير في المعلومات الشخصية لهذا المستخدم.';
$txt['website_title'] = 'عنوان موقع ويب';
$txt['website_url'] = 'موقع ويب URL';
$txt['signature'] = 'التوقيع';
$txt['profile_posts'] = 'المشاركات';
$txt['change_profile'] = 'تغير المعلومات الشخصية';
$txt['delete_user'] = 'حذف المستخدم';
$txt['current_status'] = 'الحالة الحالية:';
$txt['personal_text'] = 'النص الشخصي';
$txt['personal_picture'] = 'الصورة الشخصية';
$txt['no_avatar'] = 'بدون صورة شخصية';
$txt['choose_avatar_gallery'] = 'إختر صورة شخصية من المعرض';
$txt['picture_text'] = 'نص/صورة';
$txt['reset_form'] = 'مسح';
$txt['preferred_language'] = 'اللغة المفضلة';
$txt['age'] = 'العمر';
$txt['no_pic'] = '(لا صورة)';
$txt['latest_posts'] = 'آخر المشاركات لـ: ';
$txt['additional_info'] = 'معلومات إضافية';
$txt['avatar_by_url'] = 'حدد صورتك الخاصة بواسطة URL. (مثال: <em>http://www.mypage.com/mypic.gif</em>)';
$txt['my_own_pic'] = 'تحديد الصورة الشخصية من خلال عنوان رابط الكتروني';
$txt['date_format'] = 'هذا التحديد سيجعل التاريخ يظهر في كافة المنتدى حسب الشكل الحالي.';
$txt['time_format'] = 'شكل الوقت';
$txt['display_name_desc'] = 'هذا هو اسم العرض الذي سيشاهده الكل.';
$txt['personal_time_offset'] = 'عدد الساعات بـ +/- لجعل الوقت المعروض يتوافق مع توقيتك.';
$txt['dob'] = 'تاريخ الميلاد';
$txt['dob_month'] = 'شهر (MM)';
$txt['dob_day'] = 'يوم (DD)';
$txt['dob_year'] = 'سنة (YYYY)';
$txt['password_strength'] = 'لأفضل حماية , يُنصح بإستخدام ثمانية أحرف أو أكثر تتكون من أحرف و أرقام و رموز.';
$txt['include_website_url'] = 'تعبئ في حالة استخدام خانة URL في الأسفل.';
$txt['complete_url'] = 'عنوان كامل لـ URL.';
$txt['your_icq'] = 'هذا هو رقمك لخدمة ICQ.';
$txt['your_aim'] = 'هذا هو لقبك في خدمة مرسال AOL.';
$txt['your_yim'] = 'هذا هو لقبك في خدمة مرسال Yahoo.';
$txt['sig_info'] = 'التوقيع يظهر في أسفل المشاركات و رسائلك الشخصية. يمكنك استخدام رموز BBC و الابتسامات.';
$txt['max_sig_characters'] = 'الحد الأقصى 1: $d; حرفا باقي: ';
$txt['send_member_pm'] = 'إرسال رسالة شخصية لهذا العضو';
$txt['hidden'] = 'مخفي';
$txt['current_time'] = 'التوقيت الحالي للمنتدى';
$txt['digits_only'] = 'هذه الخانة تقبل الأرقام فقط.';

$txt['language'] = 'اللغة';
$txt['avatar_too_big'] = 'الصورة الشخصية كبيرة جدا، الرجاء إعادة تحجيمها و المحاولة مرة أخرى (الحد';
$txt['invalid_registration'] = 'قيمة التاريخ المسجلة غير مقبولة، مثال على  القيمة الصحيحة:';
$txt['msn_email_address'] = 'عنوان بريد الـ MSN الإلكترونى الخاص بك ';
$txt['current_password'] = 'كلمة المرور الحالية';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'تحتاج إلى كتابة كلمة المرور للتغير في هويتك.';

$txt['timeoffset_autodetect'] = '(تحديده تلقائيا)';

$txt['secret_question'] = 'السؤال السري';
$txt['secret_desc'] = 'لتسهيل عملية استرجاع كلمة المرور , يمكنك إدخال سؤال و جواب لا احد يعرفه <strong>غيرك</strong> .';
$txt['secret_desc2'] = 'اختر بحذر, فأنت لا ترغب في تخمين سؤالك من قبل احد غيرك!';
$txt['secret_answer'] = 'الجواب';
$txt['secret_ask'] = 'إسألني سؤالي';
$txt['cant_retrieve'] = 'لا يمكنك الحصول على كلمة المرور، ولكن يمكن أن تقوم بتحديد كلمة مرور جديدة بواسطة الرابط الذي بعث إلي بريدك. كما يتوفر لك خيار الاجابة على سؤالك السري لكتابة كلمة مرور جديدة.';
$txt['incorrect_answer'] = 'آسف، لكنّك لم تحدّد مجموعة صحيحة من السؤال السرّي و الجواب في هويتك. رجاء أنقر على زرّ الرجوع، وأستعمل الطريقة الإفتراضيه للحصول على كلمة المرور.';
$txt['enter_new_password'] = 'رجاء أدخل الجواب على سؤالك، وكلمة السر التي تودّ أن تستعملها. كلمة سرك ستتغيّر إلى ما حددته ، إذا قمت بالجواب بشكل صحيح على السؤال.';
$txt['password_success'] = 'تم تغير كلمة المرور بنجاح.<br />انقر <a href="' . $scripturl . '?action=login">هنا</a> للدخول.';
$txt['secret_why_blank'] = 'لماذا ترك خاليا؟';

$txt['authentication_reminder'] = 'مذكر التوثيق';
$txt['password_reminder_desc'] = 'إذا كنت قد نسيت بيانات تسجيل دخولك , فلا تقلق , يمكنك استرجاعها . للبدء فى عملية الإسترجاع فبرجاء كتابت اسم المستخدم او البريد الإلكترونى فى الخانة الموجودة أدناه .';
$txt['authentication_options'] = 'رجاء إختر إحدى الخيارين التاليين ';
$txt['authentication_openid_email'] = 'إرسل لى رسالة تذكيرية بالـ OpenID الخاص بحسابى ';
$txt['authentication_openid_secret'] = 'أجب على  &quot;سؤالى السرى&quot; لكى يظهر لى الـ OpenID الخاص بحسابى ';
$txt['authentication_password_email'] = 'أرسل لي بريدا الكترونيا يتضمن كلمة مرور جديدة';
$txt['authentication_password_secret'] = 'دعنى أحدد كلمة مرور جديدة عن طريق الإجابة عن &quot;سؤالى السرى&quot; ';
$txt['openid_secret_reminder'] = 'رجاء أجب على الأسئلة التاليه . إذا أجبت إجابات صحيحه فإن الـ  OpenID الخاص بحسابك سوف يظهر لك. ';
$txt['reminder_openid_is'] = 'الـ OpenID المرتبط بالحساب الخاص بك هو : <br />&nbsp;&nbsp;&nbsp;&nbsp;<strong>%1$s</strong><br /><br /> يرجى حفظه فى مكان أمن فقد تحتاج اليه فى المستقبل .';
$txt['reminder_continue'] = 'استمرار';

$txt['current_theme'] = 'القالب الحالي';
$txt['change'] = '(تغير)';
$txt['theme_preferences'] = 'إعدادات القالب';
$txt['theme_forum_default'] = 'الافتراضي للمنتدى';
$txt['theme_forum_default_desc'] = 'هذا هو القالب الافتراضي، والذي يعني أنه سيتغير بحسب إعدادات المشرف و المنتدى الذي تشاهد.';

$txt['profileConfirm'] = 'هل ترغب حقا في حذف هذا المستخدم؟';

$txt['custom_title'] = 'عنوان خاص';

$txt['lastLoggedIn'] = 'آخر زيارة';

$txt['notify_settings'] = 'إعدادات التنبيهات:';
$txt['notify_save'] = 'حفظ الإعدادات';
$txt['notify_important_email'] = 'إستلام نشرة إخبارية, على بريدى للتنبيهي في حال وجود إعلان جديد.';
$txt['notify_regularity'] = 'للمواضيع و المنتديات التي طلبت تنبيها عليها, نبهني';
$txt['notify_regularity_instant'] = 'فوراً';
$txt['notify_regularity_first_only'] = 'فوراً - لكن فقط لأول رد غير مقروء';
$txt['notify_regularity_daily'] = 'يوميا';
$txt['notify_regularity_weekly'] = 'أسبوعيا';
$txt['auto_notify'] = 'نشط ميزة التنبيه عند الكتابة أو الرد.';
$txt['notify_send_types'] = 'للمواضيع و الأقسام التي طلبت تنبيها عليها, نبهني من';
$txt['notify_send_type_everything'] = 'الردود و الإشراف';
$txt['notify_send_type_everything_own'] = 'إشراف فقط في حال بدأت الموضوع أنا';
$txt['notify_send_type_only_replies'] = 'فقط ردود';
$txt['notify_send_type_nothing'] = 'لا شيء';
$txt['notify_send_body'] = 'عند إرسال تنبيه لمشاركة ضمن موضوع, أرسل المشاركة ضمن الرسالة (لكن برجاء عدم الرد على هذا البريد الإلكترونى.)';

$txt['notifications_topics'] = 'تنبيهات المواضيع الحالية';
$txt['notifications_topics_list'] = 'تم تنبيهك على الردود في المواضيع التالية';
$txt['notifications_topics_none'] = 'حاليا لم تستلم أية تنبيهات على المواضيع.';
$txt['notifications_topics_howto'] = 'للحصول على تنبيهات للمواضيع اضغط على زر &quot;تنبيه&quot; خلال مشاهدتك للموضوع.';
$txt['notifications_boards'] = 'تنبيهات الأقسام الحالية';
$txt['notifications_boards_list'] = 'تم تنبيهك على المواضيع في الأقسام التالية';
$txt['notifications_boards_none'] = 'حاليا لم تستلم أية تنبيهات على الأقسام.';
$txt['notifications_boards_howto'] = 'للحصول على تنبيهات للأقسام اضغط على زر &quot;تنبيه&quot; خلال مشاهدتك لفهرس القسم';
$txt['notifications_update'] = 'إيقاف ميزة التنبيه';

$txt['statPanel_showStats'] = 'إحصاءات المستخدم لـ: ';
$txt['statPanel_users_votes'] = 'عدد الأصوات';
$txt['statPanel_users_polls'] = 'عدد الإستفتاءات المُنشئة';
$txt['statPanel_total_time_online'] = 'إجمالي الوقت متصلا';
$txt['statPanel_noPosts'] = 'لم تقم بإنشاء أي مشاركة!';
$txt['statPanel_generalStats'] = 'إحصاءات عامة';
$txt['statPanel_posts'] = 'مشاركات';
$txt['statPanel_topics'] = 'مواضيع';
$txt['statPanel_total_posts'] = 'إجمالى المشاركات';
$txt['statPanel_total_topics'] = 'إجمالى المواضيع';
$txt['statPanel_votes'] = 'أصوات';
$txt['statPanel_polls'] = 'إستفتاءات';
$txt['statPanel_topBoards'] = 'المنتدى الأكثر شعبية بواسطة المشاركات';
$txt['statPanel_topBoards_posts'] = '%1$d رسائل الأقسام %2$d رسائل (%3$01.2f%%) ';
$txt['statPanel_topBoards_memberposts'] = '%1$d رسائل من الأعضاء %2$d رسائل (%3$01.2f%%) ';
$txt['statPanel_topBoardsActivity'] = 'الأقسام الأكثر شعبية بواسطة النشاطات';
$txt['statPanel_activityTime'] = 'نشاطات الكتابة حسب الوقت';
$txt['statPanel_activityTime_posts'] = '%1$d رسائل (%2$d%%) ';
$txt['statPanel_timeOfDay'] = 'وقت اليوم';

$txt['deleteAccount_warning'] = 'تحذير - هذه الإحراءات لا يمكن التراجع بعدها';
$txt['deleteAccount_desc'] = 'من خلال هذه الصفحة يمكنك حذف حساب العضو و مشاركاته.';
$txt['deleteAccount_member'] = 'حذف حساب هذا العضو';
$txt['deleteAccount_posts'] = 'حذف المشاركات الخاصة بهذا العضو';
$txt['deleteAccount_none'] = 'لا يوجد';
$txt['deleteAccount_all_posts'] = 'كافة المشاركات';
$txt['deleteAccount_topics'] = 'المواضيع و المشاركات';
$txt['deleteAccount_confirm'] = 'هل ترغب حقا في حذف هذا الحساب كاملا؟';
$txt['deleteAccount_approval'] = 'أرجو الانتباه إلى أن مشرفي المنتدى يجب أن يوافقوا على عملية حذف هذا الحساب قبل إزالته.';

$txt['profile_of_username'] = 'الملف الشخصى لـ %1$s';
$txt['profileInfo'] = 'تفاصيل الملف الشخصية';
$txt['showPosts'] = 'عرض المشاركات';
$txt['showPosts_help'] = 'هنا يمكنك مشاهدة جميع المشاركات التى كتبها هذا العضو . لاحظ انه يمكنك فقط مشاهدة المشاركات التى كتبها فى الاقسام التى يسمح لك بدخولها فقط .';
$txt['showMessages'] = 'الرسائل';
$txt['showTopics'] = 'مواضيع';
$txt['showAttachments'] = 'مرفقات';
$txt['statPanel'] = 'عرض الإحصائيات';
$txt['editBuddyIgnoreLists'] = 'الأصدقاء/قائمة التجاهل';
$txt['editBuddies'] = 'تعديل قائمة الأصدقاء';
$txt['editIgnoreList'] = 'تعديل قائمة التجاهل';
$txt['trackUser'] = 'تعقب المستخدم';
$txt['trackActivity'] = 'النشاط';
$txt['trackIP'] = 'عنوان IP';

$txt['authentication'] = 'التوثيق';
$txt['change_authentication'] = 'من هنا يمكنك التحكم فى الطريقه التى تريد الدخول بها الى المنتدى . يمكنك إستخادم حساب الـ OpenID , او يمكنك الدخول عن طريق حساب مكون من إسم مستخدم و كلمة مرور.';

$txt['profileEdit'] = 'تحرير المعلومات الشخصية';
$txt['account_info'] = 'هذه هي إعدادات حسابك. تحتوي هذه الصفحة على كافة المعلومات التعريفية لك في هذا المنتدى. لأسباب أمنية سيتوجب عليك إدخال كلمة المرور الخاصة بك لكي تعدل بياناتك.';
$txt['forumProfile_info'] = 'يمكنك أن تغير معلومات هويتك في هذه الصفحة. سيتم عرض تلك المعلومات خلال ' . $context['forum_name_html_safe'] . '. إذا لم ترغب في مشاركة الغير لمعلوماتك, تخطى تعبئة تلك المعلومات فهي ليست ضرورية.';
$txt['theme'] = 'تفضيلات الشكل و المظهر';
$txt['theme_info'] = 'هذا القسم يسمح لك  بتغير مظهر و شكل المنتدى.';
$txt['notification'] = 'التنبيهات و البريد';
$txt['notification_info'] = 'تسمح لك SMF بأن يتم تنبيهك على الردود، المواضيع الجديدة و إعلانات المنتدى. يمكنك تغير تلك الإعدادات هنا أو مشاهدة المواضيع و الأقسام التي قمت بتفعيل التنبيه عليها.';
$txt['groupmembership'] = 'مجموعات الأعضاء';
$txt['groupMembership_info'] = 'في هذا القسم من حسابك يمكنك تغير المجموعة التي تنتمي إليها.';
$txt['ignoreboards'] = 'خيارات تجاهل الأقسام';
$txt['ignoreboards_info'] = ' هذه الصفحة تسمح لك لتجاهل بعض الأقسام. عندما يتم تجاهل قسم معين , فإن إشارة مشاركة جديدة لن تظهر في فهرس المنتدى. و المشاركات الجديدة لن تظهر أيضا عند اختيار "المشاركات الغير المقروءة" عند البحث (فإنه سوف يتجاهل هذه الأقسام أيضا أي أنه لن يبحث ضمنها) لكن, الأقسام التي تم تجاهلها سوف تظل ظاهرة على فهرس المنتدى و عند الدخول إليها فإن المواضيع ذات الردود الجديدة سوف تظهر لديك. عند استخدام رابط " الردود غير المقروءة" , الردود الجديدة ضمن المنتدى أو القسم الذي تم تجاهلة سوف يتم عرضها.';
$txt['pmprefs'] = 'الرسائل الشخصية';

$txt['profileAction'] = 'إجراءات';
$txt['deleteAccount'] = 'حذف هذا الحساب';
$txt['profileSendIm'] = 'بعث رسالة شخصية';
$txt['profile_sendpm_short'] = 'إرسال رسالة شخصية';

$txt['profileBanUser'] = 'حظر المستخدم';

$txt['display_name'] = 'اسم العرض';
$txt['enter_ip'] = 'ادخل IP (نطاق)';
$txt['errors_by'] = 'رسائل الخطأ بواسطة';
$txt['errors_desc'] = 'في الأسفل قائمة بكافة الأخطاء الحديثة التي قام المستخدم بتوليدها أو مرت عليه.';
$txt['errors_from_ip'] = 'رسائل الخطأ من IP (نطاق)';
$txt['errors_from_ip_desc'] = 'في الأسفل توجد أخر أخطاء تمت من قبل عنوان IP (نطاق) هذا.';
$txt['ip_address'] = 'IP عنوان';
$txt['ips_in_errors'] = 'IP المستخدم في رسائل الخطأ';
$txt['ips_in_messages'] = 'IP المستخدم في المشاركات الحديثة';
$txt['members_from_ip'] = 'الأعضاء من IP (نطاق)';
$txt['members_in_range'] = 'الأعضاء المحتمل تواجدهم في نفس النطاق';
$txt['messages_from_ip'] = 'المشاركات المرسلة من IP (نطاق)';
$txt['messages_from_ip_desc'] = 'في الأسفل قائمة بكافة المشاركات من عنوان IP (نطاق)هذا.';
$txt['most_recent_ip'] = 'آخر عناوين IP';
$txt['why_two_ip_address'] = 'لماذا يوجد 2 IP هنا ؟ ';
$txt['no_errors_from_ip'] = 'لم يتم العثور على أي أخطاء من الـ IP (نطاق)';
$txt['no_errors_from_user'] = 'لا يوجد أية أخطاء من المستخدم المحدد';
$txt['no_members_from_ip'] = 'لا يوجد أعضاء من الـ IP (نطاق) المحدد';
$txt['no_messages_from_ip'] = 'لا يوجد رسائل من الـ IP (نطاق) المحدد';
$txt['none'] = 'لا يوجد';
$txt['own_profile_confirm'] = 'هل ترغب حقا في حذف هويتك؟';
$txt['view_ips_by'] = 'مشاهدة الـ IP المستخدم بواسطة';

$txt['avatar_will_upload'] = 'ارفع صورة شخصية';

$txt['activate_changed_email_title'] = 'تم تغيّر البريد الإلكترونى';
$txt['activate_changed_email_desc'] = ' لقد قمت بتغيّر بريدك الإلكترونى . لكى يتم تأكيده سوف يصلك رسالة على هذا البريد الجديد . و يجب عليك الضغط على الرابط الخاص بالتأكيد الموجود بهذه الرسالة لإعادة تنشيط حسابك .';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'غير قادر على إرسال بريد التذكير.';
$txt['send_email'] = 'إرسال بريد إلى';
$txt['to_ask_password'] = 'للسؤال عن كلمة المرور';

$txt['user_email'] = 'اسم المستخدم/البريد';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'كلمة مرور جديدة لـ ' . $context['forum_name'];
$txt['reminder_mail'] = 'هذا البريد أرسل لأنه تم تفعيل خاصية التذكير بكلمة المرور لحسابك. لتحديد كلمة مرور جديدة الرجاء النقر على الوصلة التالية';
$txt['reminder_sent'] = 'تم إرسال بريد إلى عنوانك البريدي. انقر على الوصلة في تلك الرسالة لتحديد كلمة مرور جديدة.';
$txt['reminder_openid_sent'] = 'لقد تم إرسال الـ OpenID  الحالى الخاص بحسابك الى بريدك الالكترونى . ';
$txt['reminder_set_password'] = 'ضبط كلمة المرور';
$txt['reminder_password_set'] = 'تم ضبط كلمة المرور بنجاح';
$txt['reminder_error'] = '%1$s فشل في الإجابة الصحيحة على السؤال السري خلال محاولة تغير كلمة المرور المفقودة.';

$txt['registration_not_approved'] = 'نأسف ، لم يتم الموافقة على هذا الحساب. إذا رغبت في تغير عنوانك البريدي الرجاء النقر على';
$txt['registration_not_activated'] = 'نأسف، لم يتم تنشيط هذا الحساب. إذا رغبت في إعادة إرسال بريد التفعيل الرجاء النقر على';

$txt['primary_membergroup'] = 'مجموعة الأعضاء الرئيسة';
$txt['additional_membergroups'] = 'مجموعات الأعضاء الإضافية';
$txt['additional_membergroups_show'] = '[ عرض المجموعات الأخرى ]';
$txt['no_primary_membergroup'] = '(بدون مجموعة أعضاء أساسية)';
$txt['deadmin_confirm'] = 'هل ترغب حقا في إزالة (بشكل غير قابل للاسترجاع) وضعية الإشراف خاصتك؟';

$txt['account_activate_method_2'] = 'الحساب يتطلب إعداة تفعيله بعد تغيير البريد الالكتروني';
$txt['account_activate_method_3'] = 'الحساب غير موافق عليه';
$txt['account_activate_method_4'] = 'الحساب ينتظر الموافقة على الطلب';
$txt['account_activate_method_5'] = ' الحساب من نمط&quot;تحت العمر المسموح&quot; الحساب ينتظر الموافقة';
$txt['account_not_activated'] = 'الحساب لم يتم تنشيطه بعد';
$txt['account_activate'] = 'تنشيط';
$txt['account_approve'] = 'الموافقة';
$txt['user_is_banned'] = 'المستخدم حاليا محروم(معاقب)';
$txt['view_ban'] = 'عرض';
$txt['user_banned_by_following'] = 'هذا المستخدم معاقب من استخدام الميزات التالية ';
$txt['user_cannot_due_to'] = 'المستخدم  لا يستطيع %1$s نتيجة لمعاقبة: &quot;%2$s&quot;';
$txt['ban_type_post'] = 'إرسال المشاركات';
$txt['ban_type_register'] = 'التسجيل';
$txt['ban_type_login'] = 'تسجيل الدخول';
$txt['ban_type_access'] = 'الوصول للمنتدى';

$txt['show_online'] = 'عرض حالة الاتصال الخاصة بك للمستخدمين؟';

$txt['return_to_post'] = 'العودة للموضوع بعد الكتابة بشكل افتراضي.';
$txt['no_new_reply_warning'] = 'لا تنبه على الردود التي تم إضافتها عند كتابة رد جديد من قبلي.';
$txt['posts_apply_ignore_list'] = 'إخفاء إسم كاتب المشاركة إذا كان فى قائمة التجاهل الخاصة بى .';
$txt['recent_posts_at_top'] = 'عرض أخر المشاركات في الأعلى.';
$txt['recent_pms_at_top'] = 'عرض الرسائل الشخصية الحديثة في الأعلى.';
$txt['wysiwyg_default'] = 'أظهر محرر WYSIWYG فى صفحة المشاركة بشكل افتراضي ؟';

$txt['timeformat_default'] = '(افتراضي المنتدى)';
$txt['timeformat_easy1'] = 'شهر يوم, سنة, HH:MM:SS am/pm';
$txt['timeformat_easy2'] = 'شهر يوم, سنة, HH:MM:SS (24 ساعة.)';
$txt['timeformat_easy3'] = 'YYYY-MM-DD, HH:MM:SS';
$txt['timeformat_easy4'] = 'DD Month YYYY, HH:MM:SS';
$txt['timeformat_easy5'] = 'DD-MM-YYYY, HH:MM:SS';

$txt['poster'] = 'المرسل';

$txt['board_desc_inside'] = 'عرض وصف القسم داخل الأقسام.';
$txt['show_children'] = 'عرض الأقسام الفرعية في كل صفحة داخل الأقسام وليس الأولى فقط.';
$txt['use_sidebar_menu'] = 'إستخدم الشريط الجانبى للقوائم بدلا من القوائم المنسدله عندما يكون هذا ممكنا .';
$txt['show_no_avatars'] = 'لا تعرض الصور الشخصية لبقية الأعضاء.';
$txt['show_no_signatures'] = 'لا تعرض التواقيع لبقية الأعضاء.';
$txt['show_no_censored'] = 'ترك الكلمات من دون مراقبة.';
$txt['topics_per_page'] = 'عدد المواضيع التي سيتم عرضها لكل صفحة:';
$txt['messages_per_page'] = 'عدد المشاركات التي سيتم عرضها لكل صفحة:';
$txt['per_page_default'] = 'افتراضي المنتدى';
$txt['calendar_start_day'] = 'أول يوم في الأسبوع في التقويم';
$txt['display_quick_reply'] = 'عرض صندوق الرد السريع في المواضيع: ';
$txt['display_quick_reply1'] = 'لا تعرضه مطلقا';
$txt['display_quick_reply2'] = 'عرضه في حالة التعطيل';
$txt['display_quick_reply3'] = 'عرضه في حالة التفعيل';
$txt['display_quick_mod'] = 'عرض المراقبة السريعة كـ ';
$txt['display_quick_mod_none'] = 'لا تعرض.';
$txt['display_quick_mod_check'] = 'مربعات اختيار.';
$txt['display_quick_mod_image'] = 'أيقونات.';

$txt['whois_title'] = 'تعقب الـ IP في الملقم المحلي whois-server';
$txt['whois_afrinic'] = 'AfriNIC (افريقيا)';
$txt['whois_apnic'] = 'APNIC (منطقة آسيا والمحيط الهادي)';
$txt['whois_arin'] = 'ARIN (أمريكا الشمالية, جزء من أفريقيا الكاريبية وجنوب الصحراء الكبرى)';
$txt['whois_lacnic'] = 'LACNIC (المنطقة الأمريكية اللاتينية والكاريبية)';
$txt['whois_ripe'] = 'RIPE (أوروبا، الشرق الأوسط وأجزاء من أفريقيا وآسيا)';

$txt['moderator_why_missing'] = 'لماذا لا يوجد مشرف هنا؟';
$txt['username_change'] = 'تغير';
$txt['username_warning'] = 'لتغير اسم المستخدم لهذا العضو, فسيقوم المنتدى بإعادة ضبط كلمة المرور الخاصة به, و التي سيتم إرسالها للعضو مع اسمه الجديد.';

$txt['show_member_posts'] = 'مشاهدة مشاركات العضو';
$txt['show_member_topics'] = 'مشاهدة مواضيع العضو';
$txt['show_member_attachments'] = 'مشاهدة مرفقات العضو';
$txt['show_posts_none'] = 'لم يتم إرسال أية مشاركة بعد.';
$txt['show_topics_none'] = 'لم يتم كتابة أى موضوع بعد .';
$txt['show_attachments_none'] = 'لم يقم العضو بإرسال أية مرفقات بعد.';
$txt['show_attach_filename'] = 'اسم الملف';
$txt['show_attach_downloads'] = 'التحميل';
$txt['show_attach_posted'] = 'المرسلة';

$txt['showPermissions'] = 'عرض التصاريح';
$txt['showPermissions_status'] = 'حالة التصريح';
$txt['showPermissions_help'] = 'هنا يمكنك مشاهدة كل التصاريح الخاصة بهذا العضو (التصريحات المرفوضة <del>يتوسطها خط</del>). ';
$txt['showPermissions_given'] = 'أعطيت بواسطة';
$txt['showPermissions_denied'] = 'تم رفضها بواسطة';
$txt['showPermissions_permission'] = 'التصريح (التصاريح المرفوضة <del>سيتوسطها خط</del>)';
$txt['showPermissions_none_general'] = 'هذا العضو لا يملك أية تصاريح.';
$txt['showPermissions_none_board'] = 'لم يتم ضبط تصريحات لقسم معين لهذا العضو.';
$txt['showPermissions_all'] = 'كإدارة، هذا العضو يملك كافة التصاريح الممكنة.';
$txt['showPermissions_select'] = 'عرض التصريحات المخصصة للاقسام لـ';
$txt['showPermissions_general'] = 'التصريحات العامة';
$txt['showPermissions_global'] = 'كافة الأقسام';
$txt['showPermissions_restricted_boards'] = 'الأقسام المحظورة';
$txt['showPermissions_restricted_boards_desc'] = 'الأقسام التالية لا يمكن الوصول اليها من قبل هذا العضو';

$txt['local_time'] = 'التوقيت المحلي';
$txt['posts_per_day'] = 'لكل يوم';

$txt['buddy_ignore_desc'] = 'هنا يمكنك التحكم فى قائمة الصداقة و التجاهل لهذا المنتدى . و يمكنك أيضا التحكم فى إعدادات البريد تبعا لما تفضله .';

$txt['buddy_add'] = 'إضافة إلى قائمة الأصدقاء';
$txt['buddy_remove'] = 'الإزالة من قائمة الأصدقاء';
$txt['buddy_add_button'] = 'إضافة';
$txt['no_buddies'] = 'قائمة الأصدقاء الخاصة بك فارغة';

$txt['ignore_add'] = 'أضف إلى قائمة التجاهل';
$txt['ignore_remove'] = 'حذف من قائمة التجاهل';
$txt['ignore_add_button'] = 'أضف';
$txt['no_ignore'] = 'قائمة التجاهل الخاصة بك فارغة';

$txt['regular_members'] = 'الأعضاء المسجلين';
$txt['regular_members_desc'] = 'كل عضو في المنتدى هو عضو ضمن هذه المجموعة.';
$txt['group_membership_msg_free'] = 'عضويتك ضمن المجموعة قد تم تحديثها بشكل ناجح.';
$txt['group_membership_msg_request'] = 'لقد تم إرسال طلبك بشكل ناجح, أرجو أن تنتظر ريثما يتم مراجعة طلبك .';
$txt['group_membership_msg_primary'] = 'مجموعتك الأساسية قد تم تحديثها';
$txt['current_membergroups'] = 'المجموعات الحالية';
$txt['available_groups'] = 'المجموعات المتوفرة';
$txt['join_group'] = 'الانضمام لمجموعة';
$txt['leave_group'] = 'مغادرة مجموعة';
$txt['request_group'] = 'طلب العضوية ضمن مجموعة';
$txt['approval_pending'] = 'ينتظار الموافقة';
$txt['make_primary'] = 'إنشاء مجموعة رئيسة';

$txt['request_group_membership'] = 'طلب عضوية ضمن مجموعة';
$txt['request_group_membership_desc'] = 'قبل ان يمكنك الإنضمام إلى هذه المجموعة فإن عضويتك يجب أن يتم الموافقه عليها من قبل المشرف.برجاء إعطاء سبب لرغبتك بالانضمام لهذه المجموعة';
$txt['submit_request'] = 'إرسال طلب';

$txt['profile_updated_own'] = 'لقد تم تحديث حسابك بنجاح';
$txt['profile_updated_else'] = 'الحساب لـ %1$s قد تم تحديثه';

$txt['profile_error_signature_max_length'] = 'توقيعك لا يمكن أن يكون أكبر من  %1$d حرف';
$txt['profile_error_signature_max_lines'] = 'توقعيك لا يمكن أن يكون عدد أسطره أكثر من %1$d';
$txt['profile_error_signature_max_image_size'] = 'الصور ضمن توقعيك يجب ألا يكون أكبر من %1$dx%2$d بيكسل';
$txt['profile_error_signature_max_image_width'] = 'الصور ضمن توقعيك يجب ألا يكون أعرض من %1$d بيكسل';
$txt['profile_error_signature_max_image_height'] = 'الصور في توقعيك ألا تكون أعلى ارتفاعا من %1$d بيكسل';
$txt['profile_error_signature_max_image_count'] = 'لا يمكن أن يكون عدد الصور أكثر من %1$d صورة في توقعيك';
$txt['profile_error_signature_max_font_size'] = 'النص في توقيعك يجب ألا يكون أكبر من  %1$s حجما';
$txt['profile_error_signature_allow_smileys'] = 'لا يُسمح لك بإستخدام الإبتسامات فى التوقيع';
$txt['profile_error_signature_max_smileys'] = 'غير مسموح لك أن تستخدم أكثر من %1$d ابتسامة في توقعيك';
$txt['profile_error_signature_disabled_bbc'] = 'كود BBC غير مسموح أن يتم استخدامه ضمن توقعيك: %1$s';

$txt['profile_view_warnings'] = 'عرض التحذيرات';
$txt['profile_issue_warning'] = 'تحرير تحذير';
$txt['profile_warning_level'] = 'مستوى التحذير';
$txt['profile_warning_desc'] = 'من هذا القسم سوف تستطيع أن تعدل مستويات التحذير للعضو و تحريرها بشكل تحذير كتابي عند الضرورة.كما يمكنك مشاهدة تاريخ التحذيرات الخاص بهم و مشاهدة مستوى التحذير الحالي كما هو محدد من قبل المدير .';
$txt['profile_warning_name'] = 'اسم العضو';
$txt['profile_warning_impact'] = 'النتيجة';
$txt['profile_warning_reason'] = 'سبب التحذير';
$txt['profile_warning_reason_desc'] = 'هذا مطلوب و سوف يتم تسجيله.';
$txt['profile_warning_effect_none'] = 'ولا شيء.';
$txt['profile_warning_effect_watch'] = 'العضو سوف يتم إضافته إلى قائمة المشرفين للمراقبة.';
$txt['profile_warning_effect_own_watched'] = 'أنت فى قائمة الأعضاء المراقبون من قبل المشرفين .';
$txt['profile_warning_is_watch'] = 'يتم مراقبته الآن';
$txt['profile_warning_effect_moderation'] = 'كل مشاركات العضو سوف يتم مراقبتها من قبل المشرفين.';
$txt['profile_warning_effect_own_moderated'] = 'جميع مشاركاتك مراقبة من قبل المشرفين .';
$txt['profile_warning_is_moderation'] = 'المشاركات يتم مراقبتها';
$txt['profile_warning_effect_mute'] = 'العضو لن يستطيع أن يشارك.';
$txt['profile_warning_effect_own_muted'] = 'لن يسمح لك بإضافة أى مشاركة .';
$txt['profile_warning_is_muted'] = 'لا يستطيع المشاركة';
$txt['profile_warning_effect_text'] = 'المستوى >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'إرسال تنبيه';
$txt['profile_warning_notify_template'] = 'اختر قالبا:';
$txt['profile_warning_notify_subject'] = 'عنوان التنبيه';
$txt['profile_warning_notify_body'] = 'رسالة التنبيه';
$txt['profile_warning_notify_template_subject'] = 'لقد استلمت تحذيرا';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '{MEMBER},' . "\n\n" . 'لقد استلمت تحذير لسبب  %1$s. برجاء الامتناع عن هذه النشاطات و الالتزام بقوانين المنتدى و إلا فإننا سوف نتخذ إجار أخر . ' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_template_outline_post'] = '{MEMBER},' . "\n\n" . 'لقد استلمت تحذير لسبب %1$s فيما يتعلق بهذه الرسالة:' . "\n" . '{MESSAGE}.' . "\n\n" . ' برجاء الامتناع عن هذه النشاطات و الالتزام بقوانين المنتدى وإلا فإننا سوف نتخذ إجار أخر.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_for_spamming'] = 'ممارسة إرسال مشاركات مزعجة';
$txt['profile_warning_notify_title_spamming'] = 'ممارسة إرسال مشاركات مزعجة';
$txt['profile_warning_notify_for_offence'] = 'إرسال مواد مُسيئة';
$txt['profile_warning_notify_title_offence'] = 'إرسال مواد مُسيئة';
$txt['profile_warning_notify_for_insulting'] = 'إهانة الأعضاء الآخرين و/أو أعضاء فريق العمل';
$txt['profile_warning_notify_title_insulting'] = 'إهانة الأعضاء/فريق الموقع';
$txt['profile_warning_issue'] = 'تحرير التحذير';
$txt['profile_warning_max'] = '(الحد الأقصى 100)';
$txt['profile_warning_limit_attribute'] = 'لاحظ انه لا يمكنك تعديل مستوى هذا العضو باكثر من %1$d%% خلال فترة 24 ساعة.';
$txt['profile_warning_errors_occured'] = 'لم يتم إرسال التنبية بسبب الأخطاء التالية';
$txt['profile_warning_success'] = 'تم إرسال التنبيه بنجاح';
$txt['profile_warning_new_template'] = 'قالب جديد';

$txt['profile_warning_previous'] = 'التحذير السابق';
$txt['profile_warning_previous_none'] = 'هذا العضو لم يستلم أي رسالة تحذير بعد.';
$txt['profile_warning_previous_issued'] = 'حُررت من قِبل';
$txt['profile_warning_previous_time'] = 'الوقت';
$txt['profile_warning_previous_level'] = 'نقط';
$txt['profile_warning_previous_reason'] = 'السبب';
$txt['profile_warning_previous_notice'] = 'مشاهدة الملاحظة التي أرسلت للعضو';

$txt['viewwarning'] = 'إظهر التحذيرات';
$txt['profile_viewwarning_for_user'] = 'التحذيرات الخاصه بالعضو   %1$s ';
$txt['profile_viewwarning_no_warnings'] = 'لا يوجد أى تحذيرات قد صدرت حتى الأن .';
$txt['profile_viewwarning_desc'] = 'ستجد بالأسفل ملخص عن جميع التحذيرات التى قد أصدرها فريق الإشراف الخاص بالمنتدى .';
$txt['profile_viewwarning_previous_warnings'] = 'تحذيرات سابقه';
$txt['profile_viewwarning_impact'] = 'نتيجة التحذير';

$txt['subscriptions'] = 'اشتراك مدفوع';

$txt['pm_settings_desc'] = 'فى هذه الصفحه يمكنك تغيير الاعدادات الخاصه بالرسائل الشخصيه - فيمكنك مثلا إختيار طريقة عرض الرسائل الشخصيه . يمكنك ايضا كتابت قائمة بأسماء الاعضاء الذين ترغب فى تجاهلهم و عدم إستلام رسائل شخصيه منهم .';
$txt['email_notify'] = 'التنبيه بواسطة البريد كل مرة يتم فيها إستلام رسالة شخصيه :';
$txt['email_notify_never'] = 'أبدا';
$txt['email_notify_buddies'] = 'من قائمة الأصدقاء فقط';
$txt['email_notify_always'] = 'دائما';

$txt['pm_receive_from'] = 'إستقبال رسائل شخصية من :';
$txt['pm_receive_from_everyone'] = 'جميع الأعضاء';
$txt['pm_receive_from_ignore'] = 'جميع الأعضاء , عدا الموجودين بقائمة التجاهل الخاصة بى';
$txt['pm_receive_from_admins'] = 'المديرين فقط';
$txt['pm_receive_from_buddies'] = 'الأصدقاء و المديرين فقط';

$txt['copy_to_outbox'] = 'حفظ نسخة من كل رسالة شخصية مرسلة في صندوق الرسائل المُرسلة بشكل افتراضي.';
$txt['popup_messages'] = 'عرض نافذة منبثقة عندما استقبل رسائل جديدة';
$txt['pm_remove_inbox_label'] = 'حذف عنوان صفحة الرسائل الشخصيه عندما يكون هناك عنوان أخر';
$txt['pm_display_mode'] = 'عرض الرسائل الشخصية';
$txt['pm_display_mode_all'] = 'كلها مرة واحدة';
$txt['pm_display_mode_one'] = 'واحد كل مرة';
$txt['pm_display_mode_linked'] = 'كمحادثة';
// Use entities in the below string.
$txt['pm_recommend_enable_outbox'] = 'نحن ننصح بتفعيل خيار &quot;حفظ نسخة من الرسائل الشخصية في صندوق الرسائل المُرسلة بشكل افتراضي &quot;\\n\\n لأن هذا يجعلك قادر على رؤية كلتى ترفى المحادثة إذا حدثت مشكله ما .';

$txt['tracking'] = 'تعقب';
$txt['tracking_description'] = 'هنا يمكنك مشاهدة ما قام به هذا العضو من تعديلات على حسابه و يمكنك ايضا تتبع عنوان الـ IP الخاص به .';

$txt['trackEdits'] = 'تعديلات الملف الشخصي';
$txt['trackEdit_deleted_member'] = 'عضو محذوف';
$txt['trackEdit_no_edits'] = 'لا يوجد اى تعديلات قد قام بها هذا العضو حتى الأن .';
$txt['trackEdit_action'] = 'الحقل';
$txt['trackEdit_before'] = 'القيمة قبل';
$txt['trackEdit_after'] = 'القيمة بعد';
$txt['trackEdit_applicator'] = 'تم تغيرها بواسطة';

$txt['trackEdit_action_real_name'] = 'اسم العضو';
$txt['trackEdit_action_usertitle'] = 'عنوان خاص';
$txt['trackEdit_action_member_name'] = 'اسم المستخدم';
$txt['trackEdit_action_email_address'] = 'عنوان البريد الالكتروني';
$txt['trackEdit_action_id_group'] = 'مجموعة الأعضاء الاساسية';
$txt['trackEdit_action_additional_groups'] = 'مجموعات الأعضاء الإضافية';

?>