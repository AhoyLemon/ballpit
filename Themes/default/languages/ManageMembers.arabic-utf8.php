<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'المجموعات';
$txt['viewing_groups'] = 'عرض المجموعات';

$txt['membergroups_title'] = 'معالجة مجموعة الأعضاء';
$txt['membergroups_description'] = 'مجموعة الأعضاء هي عبارة عن مجموعة للأعضاء الذين يملكون نفس الصلاحيات ، المظهر و حقوق الدخول. بعض المجموعات تعتمد على عدد الرسائل للعضو. يمكنك إضافة عضو إلى مجموعة الأعضاء بتحرير الملف الشخصى الخاص به و تغيّر إعدادات حسابه.';
$txt['membergroups_modify'] = 'تعديل';

$txt['membergroups_add_group'] = 'إضافة مجموعة';
$txt['membergroups_regular'] = 'المجموعات العادية';
$txt['membergroups_post'] = 'المجموعات الخاصة بعدد الرسائل';

$txt['membergroups_group_name'] = 'اسم المجموعة';
$txt['membergroups_new_board'] = 'الأقسام المرئية';
$txt['membergroups_new_board_desc'] = 'الأقسام التي يمكن لمجموعة الأعضاء مشاهدتها.';
$txt['membergroups_new_board_post_groups'] = '<em>ملاحظة: عادة, مجموعات عدد المشاركات لا تحتاج نقطة وصول بسبب أن العضو ضمن المجموعة الذي هو فيها سوف تعطيه صلاحية الوصول.</em>';
$txt['membergroups_new_as_inherit'] = 'يرث من';
$txt['membergroups_new_as_type'] = 'بواسطة النوع';
$txt['membergroups_new_as_copy'] = 'أو معتمدة على';
$txt['membergroups_new_copy_none'] = '(بدون)';
$txt['membergroups_can_edit_later'] = '(يمكنك تحريرهم لاحقا.)';

$txt['membergroups_edit_group'] = 'تحرير مجموعة';
$txt['membergroups_edit_name'] = 'اسم المجموعة';
$txt['membergroups_edit_inherit_permissions'] = 'يرث الصلاحيات';
$txt['membergroups_edit_inherit_permissions_desc'] = 'اختر &quot;لا&quot; من أجل تفعيل صلاحيات خاصة للمجموعة.';
$txt['membergroups_edit_inherit_permissions_no'] = 'لا - استخدم صلاحيات منفردة';
$txt['membergroups_edit_inherit_permissions_from'] = 'يرث من';
$txt['membergroups_edit_hidden'] = 'الرؤية';
$txt['membergroups_edit_hidden_no'] = 'مرئي';
$txt['membergroups_edit_hidden_boardindex'] = 'مرئي - إلا في متفاح المجموعة';
$txt['membergroups_edit_hidden_all'] = 'غير مرئي';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'هل أنت متأكد من أنك تريد ألا تسمح بالاسناد لهذه المجموعة كمجموعة أساسية للأعضاء?\\n\\nعندما تقوم بذلك سوف يقوم بتقييد الاسناد للمجموعات الاضافية, و سوف يقوم بتحديث كل الأعضاء  &quot;الأساسين&quot; الحالي بأن يملكوها كمجموعة إضافية فقط.';
$txt['membergroups_edit_desc'] = 'وصف المجموعة';
$txt['membergroups_edit_group_type'] = 'نوع المجموعة';
$txt['membergroups_edit_select_group_type'] = 'اختر نوع المجموعة';
$txt['membergroups_group_type_private'] = 'خاص <span class="smalltext">(العضوية يجب أن يتم اسنادها)</span>';
$txt['membergroups_group_type_protected'] = 'محمى <span class="smalltext">(المُديّريّن فقط يمكنهم إدارة و تعيين هذه المجموعة)</span>';
$txt['membergroups_group_type_request'] = 'قابلة للطلب <span class="smalltext">(العضو يمكن أن يطلب عضوية هذه المجموعة)</span>';
$txt['membergroups_group_type_free'] = 'حر <span class="smalltext">(العضو يمكن أن يدخل و يخرج من المجموعة على حسب رغبته)</span>';
$txt['membergroups_group_type_post'] = 'على حسبب عدد المشاركات <span class="smalltext">(العضوية تتحدد على حسب عدد المشاركات)</span>';
$txt['membergroups_min_posts'] = 'الرسائل المطلوبة';
$txt['membergroups_online_color'] = 'اللون في قائمة المتصلين الآن';
$txt['membergroups_star_count'] = 'عدد صور النجمات';
$txt['membergroups_star_image'] = 'اسم ملف صورة النجمة';
$txt['membergroups_star_image_note'] = ' يمكنك استخدام  $language للغة المستخدم.';
$txt['membergroups_max_messages'] = 'الحد الأقصى للرسائل الشخصية';
$txt['membergroups_max_messages_note'] = '(0 = غير محدد)';
$txt['membergroups_edit_save'] = 'حفظ';
$txt['membergroups_delete'] = 'حذف';
$txt['membergroups_confirm_delete'] = 'هل ترغب حقا في حذف هذه المجموعة؟!';

$txt['membergroups_members_title'] = 'عرض كافة الأعضاء من المجموعة';
$txt['membergroups_members_group_members'] = 'أعضاء المجموعة';
$txt['membergroups_members_no_members'] = 'هذه المجموعة خالية حاليا';
$txt['membergroups_members_add_title'] = 'أضف عضو لهذه المجموعة';
$txt['membergroups_members_add_desc'] = 'قائمة الأعضاء للإضافة';
$txt['membergroups_members_add'] = 'أضف أعضاء';
$txt['membergroups_members_remove'] = 'حذف من المجموعة';
$txt['membergroups_members_last_active'] = 'آخر زيارة';
$txt['membergroups_members_additional_only'] = 'أضفها كمجموعة إضافية فقط.';
$txt['membergroups_members_group_moderators'] = 'مشرفي المجموعة';
$txt['membergroups_members_description'] = 'وصف';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'هل أنت متأكد من أنك تريد إزالة نفسك من مجموعة الإدارة؟';

$txt['membergroups_postgroups'] = 'مجموعات الكتابة';
$txt['membergroups_settings'] = 'اعدادات مجموعة الاعضاء';
$txt['groups_manage_membergroups'] = 'المجموعات المسموح لها بتغير مجموعة الاعضاء';
$txt['membergroups_select_permission_type'] = 'اختيار الملف الشخصي';
$txt['membergroups_images_url'] = '{theme URL}/images/';
$txt['membergroups_select_visible_boards'] = 'اظهار الاقسام';
$txt['membergroups_members_top'] = 'الأعضاء';
$txt['membergroups_name'] = 'الاسم';
$txt['membergroups_stars'] = 'نجوم';

$txt['admin_browse_approve'] = 'الاعضاء الذين ينتظرون الموافقة على حسابهم';
$txt['admin_browse_approve_desc'] = 'من هنا يمكنك إدارة كل الاعضاء الذين يحتاجون الى تفعيل حسابهم.';
$txt['admin_browse_activate'] = 'الاعضاء الذين ينتظرون تنشيط حسابهم';
$txt['admin_browse_activate_desc'] = 'هذه قائمة بالاعضاء الذين لم يتم تفعيل اشتراكهم.';
$txt['admin_browse_awaiting_approval'] = 'ينتظر الموافق (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'ينتظر التفعيل (%1$d)';

$txt['admin_browse_username'] = 'اسم المستخدم';
$txt['admin_browse_email'] = 'البريد الإلكترونى';
$txt['admin_browse_ip'] = 'IP عنوان';
$txt['admin_browse_registered'] = 'مُسجل';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'مختار';
$txt['admin_browse_no_members_approval'] = 'لا يوجد اعضاء ينتظرون الموافقة على حساباتهم.';
$txt['admin_browse_no_members_activate'] = 'لا يوجد اعضاء لم يقومو بتفعيل اشتراكاتهم.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'كل الاعضاء المختارين؟';
$txt['admin_browse_outstanding_warn'] = 'كل الاعضاء المتاثرين؟';
$txt['admin_browse_w_approve'] = 'موافقة';
$txt['admin_browse_w_activate'] = 'تفعيل';
$txt['admin_browse_w_delete'] = 'حذف';
$txt['admin_browse_w_reject'] = 'رفض';
$txt['admin_browse_w_remind'] = 'تذكير';
$txt['admin_browse_w_approve_deletion'] = 'الموافقة على الاشتراكات الملغية';
$txt['admin_browse_w_email'] = 'و إرسال بريد إلكترونى';
$txt['admin_browse_w_approve_require_activate'] = 'موافق عليه و لاكن يحتاج تفعيل';

$txt['admin_browse_filter_by'] = 'الترشيح بواسطة';
$txt['admin_browse_filter_show'] = 'اظهار';
$txt['admin_browse_filter_type_0'] = 'حساب جديد لم يفعل';
$txt['admin_browse_filter_type_2'] = 'بريد جديد لم يفعل';
$txt['admin_browse_filter_type_3'] = 'حساب جديد غير موافق عليه بعد';
$txt['admin_browse_filter_type_4'] = 'حذف حساب غير موافق عليه';
$txt['admin_browse_filter_type_5'] = 'حساب "تحت العمر المطلوب" غير موافق عليه';

$txt['admin_browse_outstanding'] = 'الأعضاء المعلقون';
$txt['admin_browse_outstanding_days_1'] = 'الأعضاء المسجلون منذ أكثر من';
$txt['admin_browse_outstanding_days_2'] = 'أيام مضت';
$txt['admin_browse_outstanding_perform'] = 'تأدية الأمر التالي';
$txt['admin_browse_outstanding_go'] = 'تأدية الأمر';

$txt['check_for_duplicate'] = 'التحقق من التكرار';
$txt['dont_check_for_duplicate'] = 'لا تتحقق من التكرار';
$txt['duplicates'] = 'مكرر';

$txt['not_activated'] = 'غير مفعل';

?>