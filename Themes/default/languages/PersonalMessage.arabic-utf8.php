<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'الرسائل الشخصية';
$txt['send_message'] = 'ارسال رسالة';
$txt['pm_add'] = 'إضافة';
$txt['make_bcc'] = 'إضافة تنسيق BBC';
$txt['pm_to'] = 'الى';
$txt['pm_bcc'] = 'Bcc';
$txt['inbox'] = 'الوارد';
$txt['conversation'] = 'محادثة';
$txt['messages'] = 'الرسائل';
$txt['sent_items'] = 'الرسائل المُرسلة';
$txt['new_message'] = 'رسالة جديدة';
$txt['delete_message'] = 'حذف رسالة ';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'حذف جميع الرسائل في PMBOX';
$txt['delete_all_confirm'] = 'هل انت متاكد من حذف جميع الرسائل؟';
$txt['recipient'] = 'المستقبلين';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'رسالة شخصية جديدة: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'لقد إستلمت للتو رسالة خاصة من SENDER فى ' . $context['forum_name'] . '.' . "\n\n" . 'ملحوظة: تذكر, هذا مجرد تنبيه. الرجاء عدم الرد على هذه الرسالة.' . "\n\n" . 'و هذا هو نص الرسالة:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(مستقبلين متعددين: \'اسم1, اسم2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'الرد على هذه الرسالة الشخصية هنا:';

$txt['delete_selected_confirm'] = 'هل انت متاكد من حذف جميع الرسائل الشخصية المختارة؟';

$txt['sent_to'] = 'ارسال الى';
$txt['reply_to_all'] = 'الرد على الكل';
$txt['delete_conversation'] = 'حذف المحادثة';

$txt['pm_capacity'] = 'السعة';
$txt['pm_currently_using'] = '%1$s رسائل, %2$s%% كاملة.';
$txt['pm_sent'] = 'تم إرسال رسالتك بنجاح .';

$txt['pm_error_user_not_found'] = 'لم نتمكن من ايجاد العضو \'%1$s\'.';
$txt['pm_error_ignored_by_user'] = 'العضو \'%1$s\'قام بحجب رسائلك الخاصة.';
$txt['pm_error_data_limit_reached'] = 'من غير الممكن ارسال الرسالة الشخصية لان \'%1$s\' صندوقه الوارد ممتلء!';
$txt['pm_error_user_cannot_read'] = 'العضو \'%1$s\' لا يستطيع أن يستقبل رسائل خاصة.';
$txt['pm_successfully_sent'] = 'تم ارسال الرسالة الى \'%1$s\' بنجاح.';
$txt['pm_send_report'] = 'ارسال تقرير';
$txt['pm_save_outbox'] = 'حفظ نسخة في صندوق الصادر';
$txt['pm_undisclosed_recipients'] = 'مستلمين مخفيين';
$txt['pm_too_many_recipients'] = 'لا يمكنك إرسال رسائل خاصة لأكثر من %1$d  مستقبل دفعة واحدة.';

$txt['pm_read'] = 'قراءة';
$txt['pm_replied'] = 'الرد على';

// Message Pruning.
$txt['pm_prune'] = 'تقليل مساحة الرسائل الشخصية';
$txt['pm_prune_desc1'] = 'مسح جميع الرسائل الاقدم من';
$txt['pm_prune_desc2'] = 'ايام.';
$txt['pm_prune_warning'] = 'هل انت متاكد من تقليل مساحة الرسائل الشخصية؟';

// Actions Drop Down.
$txt['pm_actions_title'] = 'الخطوات القادمة';
$txt['pm_actions_delete_selected'] = 'حذف المختار';
$txt['pm_actions_filter_by_label'] = 'تصنيف بالعلامات';
$txt['pm_actions_go'] = 'ارسال';

// Manage Labels Screen.
$txt['pm_apply'] = 'تفعيل';
$txt['pm_manage_labels'] = 'تعديل العلامات';
$txt['pm_labels_delete'] = 'هل تريد حذف العلامة المختارة؟';
$txt['pm_labels_desc'] = 'هنا يمكنك اضافة و تعديل و حذف العلامات المستخدمة في الرسائل الشخصية.';
$txt['pm_label_add_new'] = 'اضافة علامة جديدة';
$txt['pm_label_name'] = 'اسم العلامة';
$txt['pm_labels_no_exist'] = 'لا يوجد اي علامات محددة!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'علامة';
$txt['pm_msg_label_title'] = 'تعليم رسالة';
$txt['pm_msg_label_apply'] = 'اضافة علامة';
$txt['pm_msg_label_remove'] = 'حذف علامة';
$txt['pm_msg_label_inbox'] = 'الوارد';
$txt['pm_sel_label_title'] = 'علامة مختارة';

// Sidebar Headings.
$txt['pm_labels'] = 'العلامات';
$txt['pm_messages'] = 'الرسائل';
$txt['pm_actions'] = 'إجراءات';
$txt['pm_preferences'] = 'المفضل';

$txt['pm_is_replied_to'] = 'لقد قمت بالرد على هذه الرسالة.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'التقرير للمدير';
$txt['pm_report_title'] = 'تقرير رسالة شخصية';
$txt['pm_report_desc'] = 'من هذه الصفحة يمكنك إرسال تقرير للمشرف عن رسالة شخصية غير مرغوبة، و يجب اضافة سبب للتقرير و سترفق نسخة من الرسالة الى المشرف.';
$txt['pm_report_admins'] = 'الاداري المرسل اليه:';
$txt['pm_report_all_admins'] = 'الارسال الى جميع الاداريين';
$txt['pm_report_reason'] = 'سبب ارسال هذا التقرير';
$txt['pm_report_message'] = 'إرسال التقرير';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[تقرير]';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} قام بتقرير هذه الرسالة الشخصية من المرسل {SENDER}, لهذا السبب:';
$txt['pm_report_pm_other_recipients'] = 'المستقبلين الاخرين للرسالة:';
$txt['pm_report_pm_hidden'] = '%1$d المستقبلين المخفيين';
$txt['pm_report_pm_unedited_below'] = 'في الاسفل الرسالة الشخصية المقررة:';
$txt['pm_report_pm_sent'] = 'تم الارسال:';

$txt['pm_report_done'] = 'شكرا للتقرير عن الرسالة، و سيتم الرد من قبل الاداري في اسرع وقت';
$txt['pm_report_return'] = 'العودة الى صندوق الوارد';

$txt['pm_search_title'] = 'البحث في الرسائل الخاصة';
$txt['pm_search_bar_title'] = 'البحث في الرسال';
$txt['pm_search_text'] = 'البحث عن';
$txt['pm_search_go'] = 'بحث';
$txt['pm_search_advanced'] = 'بحث متقدم';
$txt['pm_search_user'] = 'البحث بالاعضاء';
$txt['pm_search_match_all'] = 'مطابقة جميع الكلمات';
$txt['pm_search_match_any'] = 'مطابقة اي كلمة';
$txt['pm_search_options'] = 'الاعدادات';
$txt['pm_search_post_age'] = 'عُمر الرسالة';
$txt['pm_search_show_complete'] = 'اظهار الرسائل كاملة في النتائج.';
$txt['pm_search_subject_only'] = 'البحث في العنواين و المرسلين فقط.';
$txt['pm_search_between'] = 'بين';
$txt['pm_search_between_and'] = 'و';
$txt['pm_search_between_days'] = 'ايام';
$txt['pm_search_order'] = 'ترتيب النتائج بـ';
$txt['pm_search_choose_label'] = 'اخترعلامة للبحث فيها او البحث في الكل';

$txt['pm_search_results'] = 'نتائج البحث';
$txt['pm_search_none_found'] = 'لم يتم ايجاد رسائل';

$txt['pm_search_orderby_relevant_first'] = 'الاقرب الى الموضوع اولا';
$txt['pm_search_orderby_recent_first'] = 'الاحدث اولا';
$txt['pm_search_orderby_old_first'] = 'الاقدم اولا';

$txt['pm_visual_verification_label'] = 'التحقق البصرى';
$txt['pm_visual_verification_desc'] = 'برجاء إدخال الكود الموجود بالصورة الموجودة بالأعلى لإرسال هذه الرسالة.';

$txt['pm_settings'] = 'تغير الإعدادات';
$txt['pm_change_view'] = 'تغير الرؤية';

$txt['pm_manage_rules'] = 'إدارة القواعد';
$txt['pm_manage_rules_desc'] = 'قواعد الرسائل الخاصة تسمح لك بترتيب الرسائل المُستقبلة  (بشكل آلي) اعتمادا على تخصيصك . في الأسفل ستجد جميع القواعد التي فعلتها من قبل. لتعديل قاعدة ببساطة اضغط على اسم القاعدة.';
$txt['pm_rules_none'] = 'لم تقم بتثبيت أية قاعدة للرسائل.';
$txt['pm_rule_title'] = 'قاعدة';
$txt['pm_add_rule'] = 'إضافة قاعدة جديدة';
$txt['pm_apply_rules'] = 'تطبيق القواعد الآن';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'هل أنت متأكد من أنك تريد أن تطبق هذه القواعد على جميع الرسائل الخاصة?';
$txt['pm_edit_rule'] = 'تعديل قاعدة';
$txt['pm_rule_save'] = 'حفظ قاعدة';
$txt['pm_delete_selected_rule'] = 'حذف القواعد المختارة';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'هل أنت متأكد من أنك تريد أن تحذف جميع القواعد المحددة?';
$txt['pm_rule_name'] = 'اسم';
$txt['pm_rule_name_desc'] = 'اسم القاعدة الذي تريد أن تستخدمه لهذه القاعدة';
$txt['pm_rule_name_default'] = '[الإسم]';
$txt['pm_rule_description'] = 'وصف';
$txt['pm_rule_not_defined'] = 'أضف معيار معين لكي تبدأ ببناء قاعدة جديدة.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>ملاحظة:</strong> جافا سكريبت لديك غير مفعلة. يجب عليك تفعيل جافا سكريبت من أجل استخدام هذه الميزة.</span>';
$txt['pm_rule_criteria'] = 'معايير';
$txt['pm_rule_criteria_add'] = 'إضافة معيار';
$txt['pm_rule_criteria_pick'] = 'إختيار معيار';
$txt['pm_rule_mid'] = 'اسم المُرسِل';
$txt['pm_rule_gid'] = 'مجموعة الأعضاء الخاصة بالمُرسِل';
$txt['pm_rule_sub'] = 'محتوى عنوان الرسالة';
$txt['pm_rule_msg'] = 'محتوى جسم الرسالة';
$txt['pm_rule_bud'] = 'المرسل صديق';
$txt['pm_rule_sel_group'] = 'اختر مجموعة';
$txt['pm_rule_logic'] = 'عند إختبار المعيار';
$txt['pm_rule_logic_and'] = 'كل المعايير يجب أن تتحقق';
$txt['pm_rule_logic_or'] = 'أية معيار ممكن أن يتحقق';
$txt['pm_rule_actions'] = 'إجراءات';
$txt['pm_rule_sel_action'] = 'إختر إجراء';
$txt['pm_rule_add_action'] = 'إضافة إجراء';
$txt['pm_rule_label'] = 'أضف علامة للرسالة';
$txt['pm_rule_sel_label'] = 'إختر علامة';
$txt['pm_rule_delete'] = 'احذف الرسالة';
$txt['pm_rule_no_name'] = 'نسيت ادخال اسم القاعدة.';
$txt['pm_rule_no_criteria'] = 'يجب أن تكون للقاعدة معيار واحد و إجراء واحد على الأقل.';
$txt['pm_rule_too_complex'] = 'القاعدة التي تقوم بإنشاءها أطول من اللازم لكي تستطيع حفظها. حاول تجزئتها إلى قواعد أصغر.';

$txt['pm_readable_and'] = '<em>و</em>';
$txt['pm_readable_or'] = '<em>أو</em>';
$txt['pm_readable_start'] = 'إذا ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'الرسالة من &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'المُرسِل من مجموعة الأعضاء &quot;{GROUP}&quot;';
$txt['pm_readable_subject'] = 'عنوان الرسالة يتضمن &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'محتوى الرسالة يتضمن &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'المُرسِل صديق';
$txt['pm_readable_label'] = 'تطبيق العلامة &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'احذف الرسالة';
$txt['pm_readable_then'] = '<b>فــ</b>';

?>