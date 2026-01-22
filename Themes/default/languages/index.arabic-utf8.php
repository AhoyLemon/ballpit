<?php
// Version: 2.0; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ar_SA.utf8';
$txt['lang_dictionary'] = 'ar';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = true;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت');
$txt['days_short'] = array('أحد', 'اثنين', 'ثلاثاء', 'أربعاء', 'خميس', 'جمعة', 'سبت');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر');
$txt['months_titles'] = array(1 => 'يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر');
$txt['months_short'] = array(1 => 'ينا', 'فبر', 'مار', 'أبر', 'ماي', 'يون', 'يول', 'اغس', 'سبت', 'اكت', 'نوف', 'ديس');

$txt['time_am'] = 'صباحاً';
$txt['time_pm'] = 'مسائاً';

$txt['newmessages0'] = 'جديدة';
$txt['newmessages1'] = 'جديدة';
$txt['newmessages3'] = 'جديدة';
$txt['newmessages4'] = ',';

$txt['admin'] = 'الإدارة';
$txt['moderate'] = 'الإشراف';

$txt['save'] = 'حفظ';

$txt['modify'] = 'تعديل';
$txt['forum_index'] = '%1$s - فهرس';
$txt['members'] = 'الأعضاء';
$txt['board_name'] = 'اسم المنتدى';
$txt['posts'] = 'مشاركات';

$txt['member_postcount'] = 'مشاركة';
$txt['no_subject'] = '(بدون موضوع)';
$txt['view_profile'] = 'مشاهدة الملف الشخصي';
$txt['guest_title'] = 'زائر';
$txt['author'] = 'المحرر';
$txt['on'] = 'في';
$txt['remove'] = 'حذف';
$txt['start_new_topic'] = 'إنشاء موضوع جديد';

$txt['login'] = 'دخول';
// Use numeric entities in the below string.
$txt['username'] = 'اسم المستخدم';
$txt['password'] = 'كلمة المرور';

$txt['username_no_exist'] = 'اسم المستخدم غير موجود.';
$txt['no_user_with_email'] = 'لايوجد اسم مستخدم مرتبط مع ذلك البريد الالكتروني.';

$txt['board_moderator'] = 'مشرف المنتدى';
$txt['remove_topic'] = 'حذف الموضوع';
$txt['topics'] = 'مواضيع';
$txt['modify_msg'] = 'تعديل المشاركة';
$txt['name'] = 'الاسم';
$txt['email'] = 'البريد الالكتروني';
$txt['subject'] = 'الموضوع';
$txt['message'] = 'الرسالة';
$txt['redirects'] = 'تحويل';
$txt['quick_modify'] = 'تعديل سريع';

$txt['choose_pass'] = 'اختر كلمة المرور';
$txt['verify_pass'] = 'تأكيد كلمة المرور';
$txt['position'] = 'المنصب';

$txt['profile_of'] = 'مشاهدة الملف الشخصي لـ';
$txt['total'] = 'إجمالي';
$txt['posts_made'] = 'مشاركة';
$txt['website'] = 'موقع ويب';
$txt['register'] = 'تسجيل';
$txt['warning_status'] = 'حالة التحذير';
$txt['user_warn_watch'] = 'العضو يتم مراقبته من قبل المشرف';
$txt['user_warn_moderate'] = 'مشاركات العضو تم إضافتها إلى صف الموافقة';
$txt['user_warn_mute'] = 'العضو موقوف عن المشاركة';
$txt['warn_watch'] = 'تحت المراقبة';
$txt['warn_moderate'] = 'مشرف عليه';
$txt['warn_mute'] = 'صامت';

$txt['message_index'] = 'فهرس المشاركات';
$txt['news'] = 'الأخبار';
$txt['home'] = 'الرئيسية';

$txt['lock_unlock'] = 'فتح/ إغلاق الموضوع';
$txt['post'] = 'إرسال';
$txt['error_occured'] = 'حدث خطأ!';
$txt['at'] = 'في';
$txt['logout'] = 'خروج';
$txt['started_by'] = 'بدء بواسطة';
$txt['replies'] = 'ردود';
$txt['last_post'] = 'آخر مشاركة';
$txt['admin_login'] = 'دخول الإدارة للوحة التحكم';
// Use numeric entities in the below string.
$txt['topic'] = 'موضوع';
$txt['help'] = 'تعليمات';
$txt['notify'] = 'تنبيه';
$txt['unnotify'] = 'بدون تنبيه';
$txt['notify_request'] = 'هل ترغب في بريد تنبيهي في حالة الرد على هذا الموضوع؟';
// Use numeric entities in the below string.
$txt['regards_team'] = "مع تحيات,\n إدارة " . $context['forum_name'] . '.';
$txt['notify_replies'] = 'التنبيه على الردود';
$txt['move_topic'] = 'نقل الموضوع';
$txt['move_to'] = 'نقل إلى';
$txt['pages'] = 'صفحات';
$txt['users_active'] = 'الأعضاء المتواجدين في الدقائق %s الأخيرة';
$txt['personal_messages'] = 'الرسائل الشخصية';
$txt['reply_quote'] = 'رد مع الاقتباس';
$txt['reply'] = 'رد';
$txt['reply_noun'] = 'رد';
$txt['approve'] = 'موافقة';
$txt['approve_all'] = 'الموافقة على الكل';
$txt['awaiting_approval'] = 'تنتظر الموافقة';
$txt['attach_awaiting_approve'] = 'المرفقات التي تنتظر الموافقة';
$txt['post_awaiting_approval'] = 'ملاحظة: هذه المشاركة تنتظر الموافقة من قبل المشرف.';
$txt['there_are_unapproved_topics'] = 'هناك %1$s موضوع و  %2$s مشاركة تنتظر الموافقة ضمن المنتدى . اضغط <a href="%3$s">هنا</a> لاستعراضهم كلهم.';

$txt['msg_alert_none'] = 'لا توجد رسائل...';
$txt['msg_alert_you_have'] = 'لديك';
$txt['msg_alert_messages'] = 'رسائل';
$txt['remove_message'] = 'حذف الرسالة';

$txt['online_users'] = 'الأعضاء المتواجدين الآن';
$txt['personal_message'] = 'رسالة شخصية';
$txt['jump_to'] = 'انتقل إلى';
$txt['go'] = 'اذهب';
$txt['are_sure_remove_topic'] = 'هل ترغب في حذف هذا الموضوع؟';
$txt['yes'] = 'نعم';
$txt['no'] = 'لا';

$txt['search_end_results'] = 'نهاية النتائج';
$txt['search_on'] = 'في';

$txt['search'] = 'بحث';
$txt['all'] = 'الكل';

$txt['back'] = 'للوراء';
$txt['password_reminder'] = 'تذكير بكلمة المرور';
$txt['topic_started'] = 'الموضوع حرر بواسطة';
$txt['title'] = 'العنوان';
$txt['post_by'] = 'أرسل بواسطة';
$txt['memberlist_searchable'] = 'قائمة لكافة الأعضاء المسجلين للبحث فيها';
$txt['welcome_member'] = 'الرجاء الترحيب بـ';
$txt['admin_center'] = 'مركز الإدارة';
$txt['last_edit'] = 'آخر تحرير';
$txt['notify_deactivate'] = 'هل ترغب في إبطال التنبيه على الردود في هذا الموضوع؟';

$txt['recent_posts'] = 'المشاركات الحديثة';

$txt['location'] = 'الدولة';
$txt['gender'] = 'الجنس';
$txt['date_registered'] = 'تاريخ التسجيل';

$txt['recent_view'] = 'مشاهدة أحدث المشاركات في المنتدى.';
$txt['recent_updated'] = 'هو آخر موضع تم تحديثه';

$txt['male'] = 'ذكر';
$txt['female'] = 'أنثى';

$txt['error_invalid_characters_username'] = 'حرف غير مقبول في اسم المستخدم.';

$txt['welcome_guest'] = 'أهلا, <strong>%1$s</strong>. الرجاء <a href="' . $scripturl . '?action=login">الدخول</a> أو <a href="' . $scripturl . '?action=register">التسجيل</a>';
$txt['login_or_register'] = 'الرجاءً <a href="' . $scripturl . '?action=login">تسجيل الدخول</a> أو <a href="' . $scripturl . '?action=register">الإشترك معنا</a>.';
$txt['welcome_guest_activate'] = 'هل فقدت <a href="' . $scripturl . '?action=activate">بريد التفعيل؟</a>';
$txt['hello_member'] = 'مرحباً،';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'أهلاً،';
$txt['welmsg_hey'] = 'أهلاً،';
$txt['welmsg_welcome'] = 'مرحباً،';
$txt['welmsg_please'] = 'الرجاء';
$txt['select_destination'] = 'الرجاء تحديد الوجهة';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'أرسلت بواسطة';

$txt['icon_smiley'] = 'مبتسم';
$txt['icon_angry'] = 'غضبان';
$txt['icon_cheesy'] = 'فرح';
$txt['icon_laugh'] = 'ضاحك';
$txt['icon_sad'] = 'حزين';
$txt['icon_wink'] = 'يغمز';
$txt['icon_grin'] = 'تكشيرة';
$txt['icon_shocked'] = 'مذهول';
$txt['icon_cool'] = 'هادئ';
$txt['icon_huh'] = 'هااا؟';
$txt['icon_rolleyes'] = 'أعين متقلبة';
$txt['icon_tongue'] = 'لسان';
$txt['icon_embarrassed'] = 'خجول';
$txt['icon_lips'] = 'مقفل الشفتين';
$txt['icon_undecided'] = 'متردد';
$txt['icon_kiss'] = 'قبلة';
$txt['icon_cry'] = 'باكي';

$txt['moderator'] = 'مشرف';
$txt['moderators'] = 'مشرفين';

$txt['mark_board_read'] = 'جعل المواضيع في هذا المنتدى مقروءة';
$txt['views'] = 'مشاهدة';
$txt['new'] = 'جديد';

$txt['view_all_members'] = 'مشاهدة كافة الأعضاء';
$txt['view'] = 'مشاهدة';

$txt['viewing_members'] = 'مشاهدة الأعضاء %1$s إلى  %2$s';
$txt['of_total_members'] = 'من %1$s عضو';

$txt['forgot_your_password'] = 'هل نسيت كلمة المرور؟';

$txt['date'] = 'تاريخ';
// Use numeric entities in the below string.
$txt['from'] = 'من';
$txt['check_new_messages'] = 'التحقق من المشاركات الجديدة';
$txt['to'] = 'إلى';

$txt['board_topics'] = 'مواضيع';
$txt['members_title'] = 'أعضاء';
$txt['members_list'] = 'قائمة الأعضاء';
$txt['new_posts'] = 'مشاركات جديدة';
$txt['old_posts'] = 'لا مشاركات جديدة';
$txt['redirect_board'] = 'توجيه إلى صفحة ويب';

$txt['sendtopic_send'] = 'إرسال';
$txt['report_sent'] = 'تم إرسال تقريرك بنجاح .';

$txt['time_offset'] = 'فارق التوقيت';
$txt['or'] = 'أو';

$txt['no_matches'] = 'نأسف، لم يتم العثور على نتائج';

$txt['notification'] = 'خصائص التنبيهات';

$txt['your_ban'] = 'نأسف %1$s, تم حظرك من استخدام هذا المنتدى!';
$txt['your_ban_expires'] = 'حظرك سيتنهي في %1$s';
$txt['your_ban_expires_never'] = 'حظرك ليس له تاريخ انتهاء حاليا.';
$txt['ban_continue_browse'] = 'يمكنك متابعة تصفح المنتدى كزائر';

$txt['mark_as_read'] = 'تعليم كافة المشاركات كمقروءة';

$txt['hot_topics'] = 'موضوع ساخن (أكثر من %s رد)';
$txt['very_hot_topics'] = 'موضوع شعبي (أكثر من %s رد)';
$txt['locked_topic'] = 'موضوع مغلق';
$txt['normal_topic'] = 'موضوع عادي';
$txt['participation_caption'] = 'موضوع شاركت فيه';

$txt['go_caps'] = 'اذهب';

$txt['print'] = 'طباعة';
$txt['profile'] = 'الملف الشخصي';
$txt['topic_summary'] = 'نبذة عن الموضوع';
$txt['not_applicable'] = 'غ/م';
$txt['message_lowercase'] = 'رسالة';
$txt['name_in_use'] = 'هذا الاسم تم إستخدامه مسبقا من عضو آخر.';

$txt['total_members'] = 'إجمالي الأعضاء';
$txt['total_posts'] = 'إجمالي المشاركات';
$txt['total_topics'] = 'إجمالي المواضيع';

$txt['mins_logged_in'] = 'دقائق للبقاء متصلا';

$txt['preview'] = 'معاينة';
$txt['always_logged_in'] = 'البقاء متصل دوما';

$txt['logged'] = 'سجل';
// Use numeric entities in the below string.
$txt['ip'] = 'عنوان الـ IP';

$txt['www'] = 'الموقع';

$txt['by'] = 'بواسطة';

$txt['hours'] = 'ساعات';
$txt['days_word'] = 'أيام';

$txt['newest_member'] = ', العضو الجديد.';

$txt['search_for'] = 'بحث عن';

$txt['aim'] = 'AIM مسنجر';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'هلا.+هل+انت+موجود؟';
$txt['aim_title'] = 'AOL مسنجر';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'رقم ICQ';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN مسنجر';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'ياهو مسنجر';

$txt['maintain_mode_on'] = 'ملاحظة: المنتدى تحت \'الصيانة\'.';

$txt['read'] = 'زيارة';
$txt['times'] = 'مرات';

$txt['forum_stats'] = 'حالة المنتدى';
$txt['latest_member'] = 'آخر عضو';
$txt['total_cats'] = 'إجمالي التصنيفات';
$txt['latest_post'] = 'آخر رسالة';

$txt['you_have'] = 'لديك';
$txt['click'] = 'إضغط';
$txt['here'] = 'هنا';
$txt['to_view'] = 'لمشاهدتهم.';

$txt['total_boards'] = 'إجمالي المنتديات';

$txt['print_page'] = 'طباعة الصفحة';

$txt['valid_email'] = 'يجب أن يكون البريد صحيحا.';

$txt['geek'] = 'أنا مهووس بالحاسب!';
$txt['info_center_title'] = '%1$s - مركز المعلومات';

$txt['send_topic'] = 'إرسال هذا الموضوع';

$txt['sendtopic_title'] = 'إرسال الموضوع &quot;%1$s&quot; إلى صديق.';
$txt['sendtopic_sender_name'] = 'الأسم';
$txt['sendtopic_sender_email'] = 'البريد الإلكتروني';
$txt['sendtopic_receiver_name'] = 'اسم المرسل إليه';
$txt['sendtopic_receiver_email'] = 'البريد الإلكتروني للمرسل إليه';
$txt['sendtopic_comment'] = 'إضافة تعليق';

$txt['allow_user_email'] = 'السماح للأعضاء بمراسلتي على البريد الإلكتروني';

$txt['check_all'] = 'تحديد الكل';

// Use numeric entities in the below string.
$txt['database_error'] = 'خطأ في قاعدة البيانات';
$txt['try_again'] = 'الرجاء المحاولة مرة أخرى. إذا عدت مرة أخرى إلى صفحة الخطأ هذه، الرجاء إبلاغ الإدارة.';
$txt['file'] = 'الملف';
$txt['line'] = 'السطر';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF، إكتشف خطأ في قاعدة البيانات وحاول إصلاحه تلقائيا. في حال معاودة أو تكرار هذه الأخطاء، أو إخطارك برسائل بريد إلكتروني بشأنها، الرجاء مراجعة موقع الإستضافة الخاص بمنتداك.';
$txt['database_error_versions'] = '<strong>ملاحظة:</strong> يبدو أن قاعدة البيانات <em>ربما</em> تحتاج إلى ترقية. الملفات الحالية للمنتدى تحمل الإصدار %1$s, بينما قاعدة بياناتك تحمل الإصدار SMF %1$s. ومن أجل تفادي هذه المشكلة يستحسن أن تقوم بالتحديث لآخر إصدار منها upgrade.php.';
$txt['template_parse_error'] = 'خطأ في معالجة القالب!';
$txt['template_parse_error_message'] = 'يبدو أن هنالك مشكلة في نظام القوالب. هذه المشكلة مؤقتة فالرجاء العودة لاحقا و المحاولة مرة أخرى. إذا عاودتك هذه الرسالة مرة أخرى الرجاء الاتصال بالإدارة.<br />يمكنك أن تقوم <a href="javascript:location.reload();">بإعادة تحديث الصفحة</a>.';
$txt['template_parse_error_details'] = 'حدثت مشكلة بتحميل القالب <tt><strong>%1$s</strong></tt> أو ملف اللغة.  الرجاء التحقق من السياق و المحاولة مرة أخرى - تذكر, الفواصل المفردة (<tt>\'</tt>) يجب أن يتم حصرها بشرطة مائلة (<tt>\\</tt>).  لعرض معلومات أوفى عن الخطأ في PHP, حاول <a href="' . $boardurl . '%1$s">الى الملف مباشرة</a>.<br /><br />يمكنك محاولة <a href="javascript:location.reload();">إعادة تحديث الصفحة</a> أو <a href="' . $scripturl . '?theme=1">استخدام القالب الافتراضي</a>.';

$txt['today'] = '<strong>اليوم</strong> في ';
$txt['yesterday'] = '<strong>الأمس</strong> في ';
$txt['new_poll'] = 'كتابة إستفتاء جديد';
$txt['poll_question'] = 'سؤال';
$txt['poll_vote'] = 'إضافة تصويت';
$txt['poll_total_voters'] = 'إجمالي التصويت';
$txt['shortcuts'] = 'اختصارات: اضغط alt+s للإضافة أو alt+p للمعاينة';
$txt['shortcuts_firefox'] = 'إختصارات : إضغط shift+alt+s للإضافة/الإرسال أو shift+alt+p للمعاينة';
$txt['poll_results'] = 'عرض النتائج.';
$txt['poll_lock'] = 'إغلاق التصويت';
$txt['poll_unlock'] = 'فتح التصويت';
$txt['poll_edit'] = 'تحرير التصويت';
$txt['poll'] = 'التصويت';
$txt['one_day'] = '1 يوم';
$txt['one_week'] = '1 أسبوع';
$txt['one_month'] = '1 شهر';
$txt['forever'] = 'غير محدد';
$txt['quick_login_dec'] = 'تسجيل الدخول باسم المستخدم، كلمة المرور و الفترة الزمنية';
$txt['one_hour'] = '1 ساعة';
$txt['moved'] = 'نقل';
$txt['moved_why'] = 'الرجاء كتابة نبذة مختصرة عن السبب<br />نقل هذا الموضوع.';
$txt['board'] = 'منتدى';
$txt['in'] = 'في';
$txt['sticky_topic'] = 'موضوع مثبت';

$txt['delete'] = 'حذف';

$txt['your_pms'] = 'رسائلك الشخصية';

$txt['kilobyte'] = 'كيلو بايت';

$txt['more_stats'] = '[إحصاءات أخرى]';

// Use numeric entities in the below three strings.
$txt['code'] = 'شفرة';
$txt['code_select'] = '[اختيار]';
$txt['quote_from'] = 'مقتبس من';
$txt['quote'] = 'اقتباس';

$txt['merge_to_topic_id'] = 'رقم الـID للموضوع الهدف';
$txt['split'] = 'تجزئة الموضوع';
$txt['merge'] = 'دمج الموضوع';
$txt['subject_new_topic'] = 'عنوان الموضوع الجديد';
$txt['split_this_post'] = 'تجزئة هذه المشاركة فقط.';
$txt['split_after_and_this_post'] = 'تجزئة الموضوع بدء من هذه المشاركة وما يليها.';
$txt['select_split_posts'] = 'اختر المشاركات التي ستجزء.';
$txt['new_topic'] = 'موضوع جديد';
$txt['split_successful'] = 'تم تجزئة الموضوع إلى اثنين بنجاح.';
$txt['origin_topic'] = 'أصل الموضوع';
$txt['please_select_split'] = 'الرجاء تحديد المشاركات المراد تجزءتها.';
$txt['merge_successful'] = 'تم دمج المواضيع بنجاح.';
$txt['new_merged_topic'] = 'الموضوع المدمج الجديد';
$txt['topic_to_merge'] = 'الموضوع الذي سيدمج';
$txt['target_board'] = 'المنتدى الهدف';
$txt['target_topic'] = 'الموضوع الهدف';
$txt['merge_confirm'] = 'هل ترغب حقا في دمج';
$txt['with'] = 'مع';
$txt['merge_desc'] = 'هذه الخاصية ستقوم بدمج المشاركات لموضوعين مختلفين في موضوع واحد. سيتم فرز المشاركات بحسب تاريخ الرسالة. لذا ستكون أقدم رسالة هي في الترتيب الأول في الموضوع المدمج.';

$txt['set_sticky'] = 'حدد الموضوع كثابت';
$txt['set_nonsticky'] = 'حدد الموضوع كغير ثابت';
$txt['set_lock'] = 'إغلاق الموضوع';
$txt['set_unlock'] = 'فتح الموضوع';

$txt['search_advanced'] = 'بحث مفصل';

$txt['security_risk'] = 'خطر أمني:';
$txt['not_removed'] = 'لم تقم بحذف ';
$txt['not_removed_extra'] = '%1$s هى نسخة إحتياطية من %2$s و التى لم يتم توليدها من قبل SMF. و يمكن الوصول إليها مباشرة و إستغلالها فى إختراق المنتدى . يجب عليك حذفها فورا.';

$txt['cache_writable_head'] = 'أداء التحذير';
$txt['cache_writable'] = 'مجلد الذاكرة الوسيطة غير قابل للكتابة - هذا سيؤثر سلبا على أداء منتداكم.';

$txt['page_created'] = 'تم إنشاء الصفحة في ';
$txt['seconds_with'] = ' ثانية مستخدما ';
$txt['queries'] = ' استفسارات.';

$txt['report_to_mod_func'] = 'استخدم هذه الميزة لتنبيه المشرف و المدير عن المشاركات الغير مناسبة، <br /><em> يرجى ملاحظة أن عنوان البريد الإلكتروني الخاص بك سيتم كشفه للمشرفين عند إستخدامك لهذه الخاصية</em>';

$txt['online'] = 'متصل';
$txt['offline'] = 'غير متصل';
$txt['pm_online'] = 'رسالة شخصية (متصل)';
$txt['pm_offline'] = 'رسالة شخصية (غير متصل)';
$txt['status'] = 'الحالة';

$txt['go_up'] = 'للأعلى';
$txt['go_down'] = 'للأسفل';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
<a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2011</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'أعياد الميلاد:';
$txt['events'] = 'أحداث:';
$txt['birthdays_upcoming'] = 'أعياد الميلاد القادمة:';
$txt['events_upcoming'] = 'الأحداث القادمة:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'شهر:';
$txt['calendar_year'] = 'سنة:';
$txt['calendar_day'] = 'يوم:';
$txt['calendar_event_title'] = 'عنوان الحدث:';
$txt['calendar_event_options'] = 'خيارات الأحداث';
$txt['calendar_post_in'] = 'حرر في:';
$txt['calendar_edit'] = 'تحرير الحدث';
$txt['event_delete_confirm'] = 'حذف هذا الحدث؟';
$txt['event_delete'] = 'حذف الحدث';
$txt['calendar_post_event'] = 'كتابة الحدث';
$txt['calendar'] = 'التقويم';
$txt['calendar_link'] = 'رابط للتقويم';
$txt['calendar_upcoming'] = 'التقويم القادم';
$txt['calendar_today'] = 'تقويم اليوم';
$txt['calendar_week'] = 'أسبوع';
$txt['calendar_week_title'] = 'الإسبوع %1$d من %2$d';
$txt['calendar_numb_days'] = 'عدد الأيام:';
$txt['calendar_how_edit'] = 'كيف تحرر هذه الأحداث؟';
$txt['calendar_link_event'] = 'رابط للحدث';
$txt['calendar_confirm_delete'] = 'هل انت متاكد من أنك تريد حذف هذه المناسبة؟';
$txt['calendar_linked_events'] = 'مناسبات مترابطة';
$txt['calendar_click_all'] = 'اضغط لمشاهدة كل %1$s';

$txt['moveTopic1'] = 'إعادة توجيه الموضوع';
$txt['moveTopic2'] = 'تغيير عنوان الموضوع';
$txt['moveTopic3'] = 'العنوان الجديد';
$txt['moveTopic4'] = 'تغيير عناوين كافة المشاركات';
$txt['move_topic_unapproved_js'] = 'تحذير! هذا الموضوع لم يتم الموافقة عليه بعد .\\n\\nغير محبذ إنشاء موضوع معاد التوجيه إلا إذا كنت تود الموافقة عليه مباشرة بعد النقل.';

$txt['theme_template_error'] = 'لا يمكن تحميل القالب \'%1$s\' .';
$txt['theme_language_error'] = 'لا يمكن تحميل ملف اللغة \'%1$s\' .';

$txt['parent_boards'] = 'منتديات فرعية';

$txt['smtp_no_connect'] = 'لا يمكن الاتصال بمستضيف SMTP ';
$txt['smtp_port_ssl'] = 'إعدادات المنفذ للـ  SMTP غير صحيحة، يجب ان تكون 465 لخوادم الـ SSL.';
$txt['smtp_bad_response'] = 'لا يمكن الحصول على رموز ردّ خادم البريد';
$txt['smtp_error'] = 'حصل خطا عند إرسال البريد. الخطأ: ';
$txt['mail_send_unable'] = 'لا يمكن إرسال الرسالة إلى عنوان البريد الإلكتروني \'%1$s\'';

$txt['mlist_search'] = 'البحث عن الأعضاء';
$txt['mlist_search_again'] = 'البحث ثانية';
$txt['mlist_search_email'] = 'البحث بواسطة عنوان البريد الإلكتروني';
$txt['mlist_search_messenger'] = 'البحث بواسطة لقب المرسل';
$txt['mlist_search_group'] = 'البحث بواسطة المنصب';
$txt['mlist_search_name'] = 'البحث بواسطة الاسم';
$txt['mlist_search_website'] = 'البحث بواسطة موقع الويب';
$txt['mlist_search_results'] = 'نتائج البحث لـ';
$txt['mlist_search_by'] = 'البحث من خلال %1$s';
$txt['mlist_menu_view'] = 'عرض قائمة الأعضاء';

$txt['attach_downloaded'] = 'حمل';
$txt['attach_viewed'] = 'زيارته';
$txt['attach_times'] = 'مرات';

$txt['settings'] = 'اعدادات';
$txt['never'] = 'ابدأ';
$txt['more'] = 'المزيد';

$txt['hostname'] = 'اسم المستضيف (Hostname)';
$txt['you_are_post_banned'] = 'نأسف %1$s, لقد تم حظرك من الكتابة و إرسال الرسائل الشخصية في هذا المنتدى.';
$txt['ban_reason'] = 'السبب';

$txt['tables_optimized'] = 'تم تحسين جداول قاعدة البيانات';

$txt['add_poll'] = 'إضافة إستفتاء';
$txt['poll_options6'] = 'يمكنك إختيار ما عدده %1$s خيار.';
$txt['poll_remove'] = 'حذف الإستفتاء';
$txt['poll_remove_warn'] = 'هل تود حذف هذا الإستفتاء من الموضوع؟';
$txt['poll_results_expire'] = 'النتائج ستعرض بعد إغلاق الاستفتاء';
$txt['poll_expires_on'] = 'التصويت مغلق';
$txt['poll_expired_on'] = 'إغلاق التصويت';
$txt['poll_change_vote'] = 'حذف التصويت';
$txt['poll_return_vote'] = 'خصائص التصويت';
$txt['poll_cannot_see'] = 'حاليا لايمكنك مشاهدة نتائج هذا الإستفتاء';

$txt['quick_mod_approve'] = 'الموافقة على الإختيارات المحددة';
$txt['quick_mod_remove'] = 'حذف الإختيارات المحددة';
$txt['quick_mod_lock'] = 'إغلاق/فتح المحدد';
$txt['quick_mod_sticky'] = 'تثبيت/إلغاء تثبيت الُمحدد';
$txt['quick_mod_move'] = 'نقل الإختيارات المحددة إلى';
$txt['quick_mod_merge'] = 'دمج الإختيارات المحددة';
$txt['quick_mod_markread'] = 'تحديد كـ مقروء';
$txt['quick_mod_go'] = 'اذهب!';
$txt['quickmod_confirm'] = 'هل أنت متأكد من فعل هذا؟';

$txt['spell_check'] = 'تدقيق إملائي';

$txt['quick_reply'] = 'الرد السريع';
$txt['quick_reply_desc'] = 'باستخدام <em>الرد السريع</em> تستطيع استعمال رموز المنتدى و الابتسامات كما تفعل في الرد العادي، ولكن بشكل بسيط.';
$txt['quick_reply_warning'] = 'تحذير: هذا الموضوع مغلق حاليا! المدراء و المشرفين يمكنهم الرد فقط.';
$txt['quick_reply_verification'] = 'بعد إرسال المشاركة سوف يتم توجيهك لصفحة إرسال المشاركة الافتراضية لكي ننأكد من مشاركتك %1$s.';
$txt['quick_reply_verification_guests'] = '(مطلوب من كل الضيوف)';
$txt['quick_reply_verification_posts'] = '(مطلوب من كل الأعضاء ذوي عدد مشاركات أقل من %1$d مشاركة)';
$txt['wait_for_approval'] = 'ملاحظة: هذه المشاركة لن يتم عرضها حتى يتم الموافقة عليها من قبل المشرف.';

$txt['notification_enable_board'] = 'هل ترغب في تمكين تنبيه المواضيع الجديدة لهذا المنتدى؟';
$txt['notification_disable_board'] = 'هل ترغب في إبطال تنبيه المواضيع الجديدة لهذا المنتدى؟';
$txt['notification_enable_topic'] = 'هل ترغب في تمكين تنبيه الردود الجديدة لهذا الموضوع؟';
$txt['notification_disable_topic'] = 'هل ترغب في إبطال تنبيه الردود الجديدة لهذا الموضوع؟';

$txt['report_to_mod'] = 'تنبيه للمشرف';
$txt['issue_warning_post'] = 'إرسال تنبيه بسبب هذه المشاركة';

$txt['unread_topics_visit'] = 'آخر مواضيع غير مقروءة';
$txt['unread_topics_visit_none'] = 'لا يوجد مواضيع غير مقروءة منذ آخر زيارة.  <a href="' . $scripturl . '?action=unread;all">إضغط هنا لمحاولة عرض كافة المواضيع غير المقروءة</a>.';
$txt['unread_topics_all'] = 'كافة المواضيع غير المقروءة';
$txt['unread_replies'] = 'مواضيع محدثة';

$txt['who_title'] = 'من المتصل';
$txt['who_and'] = ' و ';
$txt['who_viewing_topic'] = ' يشاهدون هذا الموضوع.';
$txt['who_viewing_board'] = ' يشاهدون هذا المنتدى.';
$txt['who_member'] = 'عضو';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'مدعوم بواسطة PHP';
$txt['powered_by_mysql'] = 'مدعوم بواسطة MySQL';
$txt['valid_css'] = 'CSS صالح!';

// Current footer strings
$txt['valid_html'] = 'HTML 4.01 صالح!';
$txt['valid_xhtml'] = 'XHTML 1.0 صالح!';
$txt['wap2'] = 'نسخة خفيفة';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'ضيف';
$txt['guests'] = 'ضيوف';
$txt['user'] = 'مستخدم';
$txt['users'] = 'مستخدمين';
$txt['hidden'] = 'مخفي';
$txt['buddy'] = 'صديق';
$txt['buddies'] = 'أصدقاء';
$txt['most_online_ever'] = 'أعلى عدد متصلين في آن واحد';
$txt['most_online_today'] = 'أعلى عدد متصلين معا اليوم';

$txt['merge_select_target_board'] = 'اختر المنتدى الهدف للموضوع المدموج';
$txt['merge_select_poll'] = 'اختر أي اقتراع للموضوع المدموج';
$txt['merge_topic_list'] = 'اختر المواضيع التي ستدمج';
$txt['merge_select_subject'] = 'اختر العنوان للموضوع المدموج';
$txt['merge_custom_subject'] = 'عنوان جديد';
$txt['merge_enforce_subject'] = 'تغير العنوان لكافة المشاركات';
$txt['merge_include_notifications'] = 'تضمين التنبيهات؟';
$txt['merge_check'] = 'دمج؟';
$txt['merge_no_poll'] = 'لا اقتراع';

$txt['response_prefix'] = 'رد: ';
$txt['current_icon'] = 'الأيقونة الحالية';
$txt['message_icon'] = 'ايقونة الرسالة';

$txt['smileys_current'] = 'مجموعة الابتسامات الحالية';
$txt['smileys_none'] = 'بدون ابتسامات';
$txt['smileys_forum_board_default'] = 'افتراضي المنتدى\\الاقسام';

$txt['search_results'] = 'نتائج البحث';
$txt['search_no_results'] = 'نأسف، لم يتم العثور على نتائج';

$txt['totalTimeLogged1'] = 'إجمالي زمن الاتصال: ';
$txt['totalTimeLogged2'] = ' أيام, ';
$txt['totalTimeLogged3'] = ' ساعة و  ';
$txt['totalTimeLogged4'] = ' دقيقة.';
$txt['totalTimeLogged5'] = 'ي ';
$txt['totalTimeLogged6'] = 'س ';
$txt['totalTimeLogged7'] = 'د';

$txt['approve_thereis'] = 'يوجد';
$txt['approve_thereare'] = 'يوجد';
$txt['approve_member'] = 'عضو واحد';
$txt['approve_members'] = 'أعضاء';
$txt['approve_members_waiting'] = 'ينتظرون الموافقة.';

$txt['notifyboard_turnon'] = 'هل تريد بريد إرسال تنبيه إلكتروني عندما يرسل شخص ما موضوعا جديدا في هذه المنتدى؟';
$txt['notifyboard_turnoff'] = 'هل أنت متأكّد أنك لا تريد استلام تنبيهات عن المواضيع الجديدة في هذا المنتدى؟';

$txt['activate_code'] = 'كود التفعيل الخاص بك هو';

$txt['find_members'] = 'بحث الأعضاء';
$txt['find_username'] = 'الاسم، اسم المستخدم أو عنوان البريد';
$txt['find_buddies'] = 'أظهر الأصدقاء فقط ?';
$txt['find_wildcards'] = 'اللواحق المسموح بها: *, ?';
$txt['find_no_results'] = 'لم يتم العثور على نتائج';
$txt['find_results'] = 'نتائج';
$txt['find_close'] = 'إغلاق';

$txt['unread_since_visit'] = 'عرض المشاركات الجديدة منذ آخر زيارة.';
$txt['show_unread_replies'] = 'عرض الردود الجديدة للمواضيع التي شاركت بها.';

$txt['change_color'] = 'تغير اللون';

$txt['quickmod_delete_selected'] = 'حذف المختار';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'لقد استلمت رسالة شخصية أو أكثر .\\nهل تريد فتح نافذة جديدة لمشاهدتهم الآن ؟';

$txt['previous_next_back'] = '&laquo; قبل';
$txt['previous_next_forward'] = 'بعد &raquo;';

$txt['movetopic_auto_board'] = '[منتدى]';
$txt['movetopic_auto_topic'] = '[رابط الموضوع]';
$txt['movetopic_default'] = 'هذا الموضوع تم نقله إلى ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'تقليص أو توسيع الترويسه.';

$txt['mark_unread'] = 'علم كغير مقروء';

$txt['ssi_not_direct'] = 'الرجاء عدم الدخول إلى SSI.php بواسطة URL مباشر; يمكنك أن تستخدم المسار (%1$s) أو تضيف ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php لم يستطع أن يحمل الجلسة! قد يسبب ذلك مشكلة في تسجيل الخروج و غيرها من التوابع - أرجو الانتباه إلى أن SSI.php مدخل من قبل *أي شيء* آخر من قبل أكوادك!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'عرض الموضوع';
$txt['preview_fetch'] = 'جلب العرض...';
$txt['preview_new'] = 'مشاركة جديدة';
$txt['error_while_submitting'] = 'حدثت هذه المشكلة عند ارسالة هذه المشاركة:';
$txt['error_old_topic'] = 'تحذير: لم يتم المشاركة في هذا الموضوع لأكثر من %1$d يوم.<br />مالم تكن متأكدا من أنك تريد أن تشارك في هذا الموضوع, فكر في إنشاء موضوع جديد.';

$txt['split_selected_posts'] = 'مواضيع مختارة';
$txt['split_selected_posts_desc'] = 'هذه المشاركات التي في الأسفل سوف تقوم بإنشاء موضوع جديد بعد الفصل.';
$txt['split_reset_selection'] = 'الغاء تعليم الكل';

$txt['modify_cancel'] = 'إلغاء';
$txt['mark_read_short'] = 'تعليم مقروء';

$txt['pm_short'] = 'الرسائل الشخصية';
$txt['pm_menu_read'] = 'اقرأ رسائلك';
$txt['pm_menu_send'] = 'إرسل رسالة';

$txt['hello_member_ndt'] = 'أهلا';

$txt['unapproved_posts'] = 'المشاركات التي لم يوافق عليها (المواضيع: %1$d, المشاركات: %2$d)';

$txt['ajax_in_progress'] = 'تحميل...';

$txt['mod_reports_waiting'] = 'هناك حاليا  %1$d مشرف التقرير مفتوح.';

$txt['view_unread_category'] = 'المشاركات الغير المقروءة';
$txt['verification'] = 'التحقق';
$txt['visual_verification_description'] = 'الرجاء كتابة الأحرف الظاهر بالصورة';
$txt['visual_verification_sound'] = 'الاستماع إلى الأحرف';
$txt['visual_verification_request_new'] = 'طلب صورة جديدة';

// Sub menu labels
$txt['summary'] = 'ملخص';
$txt['account'] = 'معلومات الحساب الأساسية';
$txt['forumprofile'] = 'الملف الشخصى';

$txt['modSettings_title'] = 'خصائص و مميزات';
$txt['package'] = 'مدير الرزم';
$txt['errlog'] = 'سجل الأخطاء';
$txt['edit_permissions'] = 'الصلاحيات';
$txt['mc_unapproved_attachments'] = 'المرفقات الغير الموافق عليها';
$txt['mc_unapproved_poststopics'] = 'المواضيع و المشاركات الغير موافق عليها';
$txt['mc_reported_posts'] = 'المشاركات التي كتب تقرير فيها';
$txt['modlog_view'] = 'سجل الإشراف';
$txt['calendar_menu'] = 'عرض التقويم';

//!!! Send email strings - should move?
$txt['send_email'] = 'إرسال بريد الكتروني';
$txt['send_email_disclosed'] = 'هذا القسم سيكون مرئي من قبل المستلم.';
$txt['send_email_subject'] = 'عنوان البريد الالكتروني';

$txt['ignoring_user'] = 'أنت تقوم بتجاهل هذا العضو.';
$txt['show_ignore_user_post'] = 'أظهر لي المشاركات.';

$txt['spider'] = 'عنكبوت الكتروني';
$txt['spiders'] = 'عناكب الكترونية';
$txt['openid'] = 'خدمة الهوية المشتركة (OpenID)';

$txt['downloads'] = 'تحميل';
$txt['filesize'] = 'حجم الملف';
$txt['subscribe_webslice'] = 'الاشتراك بـويب سلايس';

// Restore topic
$txt['restore_topic'] = 'استعادة موضوع';
$txt['restore_message'] = 'استعادة';
$txt['quick_mod_restore'] = 'استعادة المحدد';

// Editor prompt.
$txt['prompt_text_email'] = 'الرجاء ادخال البريد الإلكتروني';
$txt['prompt_text_ftp'] = 'الرجاء ادخال عنوان ال FTP';
$txt['prompt_text_url'] = 'الرجاء ادخال الرابط التي تريد مشاهدته';
$txt['prompt_text_img'] = 'ادخل مكان الصورة';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'مسح العنصر';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'القوالب :';
$txt['debug_subtemplates'] = 'القوالب الفرعية :';
$txt['debug_language_files'] = 'ملفات اللغة :';
$txt['debug_stylesheets'] = 'ملفات style.css :';
$txt['debug_files_included'] = 'الملفات :';
$txt['debug_kb'] = 'كيلو بايت .';
$txt['debug_show'] = 'إظهر';
$txt['debug_cache_hits'] = 'ضغطات ذاكرة التخزين المؤقتة :';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s بايت';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss من %2$s بايت';
$txt['debug_queries_used'] = 'الإستعلامات التى تم إستخدامها: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'الإستعلامات التى تم إستخدامها: %1$d, %2$d تحذير. ';
$txt['debug_query_in_line'] = 'فى <em>%1$s</em> السطر <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'التى إستغرقت %1$s ثانية. ';
$txt['debug_query_which_took_at'] = 'التى أخذت %1$s ثانية فى %2$s الطلب. ';
$txt['debug_show_queries'] = '[إظهر الإستعلامات]';
$txt['debug_hide_queries'] = '[إخفى الإستعلامات]';

?>