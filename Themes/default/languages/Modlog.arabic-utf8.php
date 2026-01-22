<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = 'فى';
$txt['modlog_member'] = 'بواسطة';
$txt['modlog_position'] = 'الرتبة';
$txt['modlog_action'] = 'الحدث';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'نتائج البحث';
$txt['modlog_total_entries'] = 'مجموع المشاركات';
$txt['modlog_ac_approve_topic'] = 'تم الموافقه على موضوع &quot;{topic}&quot; بواسطة &quot;{member}&quot; ';
$txt['modlog_ac_approve'] = 'تم الموافقه على المشاركه &quot;{subject}&quot; فى موضوع &quot;{topic}&quot; بواسطة &quot;{member}&quot; ';
$txt['modlog_ac_lock'] = 'تم قفل الموضوع &quot;{topic}&quot; ';
$txt['modlog_ac_warning'] = 'تم تحذير {member} بسبب &quot;{message}&quot; ';
$txt['modlog_ac_unlock'] = 'تم فتح الموضوع &quot;{topic}&quot; ';
$txt['modlog_ac_sticky'] = 'تم تثبيت الموضوع &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'تم إلغاء تثبيت الموضوع &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = 'تم حذف المشاركه &quot;{subject}&quot; بواسطة &quot;{member}&quot; من موضوع &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'تم حذف العضو &quot;{name}&quot; ';
$txt['modlog_ac_remove'] = 'تم حذف الموضوع &quot;{topic}&quot; من القسم &quot;{board}&quot; ';
$txt['modlog_ac_modify'] = 'تم تعديل المشاركه &quot;{message}&quot; بواسطة &quot;{member}&quot; ';
$txt['modlog_ac_merge'] = 'تم دمج مواضيع لتكون موضوع &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'تم فصل الموضوع &quot;{topic}&quot; لتكوين الموضوع &quot;{new_topic}&quot; ';
$txt['modlog_ac_move'] = 'تم نقل الموضوع &quot;{topic}&quot; من القسم &quot;{board_from}&quot; الى القسم &quot;{board_to}&quot; ';
$txt['modlog_ac_profile'] = 'تم تعديل الملف الشخصى الخاص بالعضو &quot;{member}&quot; ';
$txt['modlog_ac_pruned'] = 'تم حذف بعض المواضيع الأقدم من  {days} يوم ';
$txt['modlog_ac_news'] = 'تم تعديل الأخبار';
$txt['modlog_enter_comment'] = 'تم كتابت ملاحظه بواسطة مشرف';
$txt['modlog_moderation_log'] = 'سجل الإشراف';
$txt['modlog_moderation_log_desc'] = 'ستجد بالأسفل قائمه بكل ما قام به مشرفي المنتدى.<br /><b>ملحوظه:</b> لا يمكن مسح البيانات الموجوده هنا إلا بعد مرور 24 ساعه على الأقل. ';
$txt['modlog_no_entries_found'] = 'لا يوجد حالياً أي مدخلات لسجل المشرفين';
$txt['modlog_remove'] = 'حذف';
$txt['modlog_removeall'] = 'حذف الكل';
$txt['modlog_go'] = 'اذهب';
$txt['modlog_add'] = 'إضافة';
$txt['modlog_search'] = 'بحث سريع';
$txt['modlog_by'] = 'بواسطة';
$txt['modlog_id'] = '<em>مسح - ID:%1$d</em> ';

$txt['modlog_ac_add_warn_template'] = 'تم إضافة قالب التحذير: &quot;{template}&quot;';
$txt['modlog_ac_modify_warn_template'] = 'تم تعديل قالب التحذير: &quot;{template}&quot; ';
$txt['modlog_ac_delete_warn_template'] = 'تم حذف قالب التحذير: &quot;{template}&quot; ';

$txt['modlog_ac_ban'] = 'تم إضافة حظر جديد :';
$txt['modlog_ac_ban_trigger_member'] = '<em>العضو:</em> {member} ';
$txt['modlog_ac_ban_trigger_email'] = '<em>البريد الإلكترونى:</em> {email} ';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range} ';
$txt['modlog_ac_ban_trigger_hostname'] = '<em>Hostname:</em> {hostname} ';

$txt['modlog_admin_log'] = 'سجل الإدارة';
$txt['modlog_admin_log_desc'] = 'ستجد بالأسفل قائمه بكل ما قام به مشرفي المنتدى.<br /><b>ملحوظه:</b> لا يمكن مسح البيانات الموجوده هنا إلا بعد مرور 24 ساعه على الأقل.';
$txt['modlog_admin_log_no_entries_found'] = 'لا يوجد حاليا أى مدخلات لسجل الإشراف .';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'تم ترقية المنتدى الى النسخه {version} ';
$txt['modlog_ac_install'] = 'النسخه المثبته {version} ';
$txt['modlog_ac_add_board'] = 'تم إضافة منتدى جديد: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'تم تعديل المنتدى &quot;{board}&quot; .';
$txt['modlog_ac_delete_board'] = 'تم حذف المنتدى &quot;{boardname}&quot; .';
$txt['modlog_ac_add_cat'] = 'تم إضافة تصنيف جديد, &quot;{catname}&quot; ';
$txt['modlog_ac_edit_cat'] = 'تم تعديل التصنيف &quot;{catname}&quot; .';
$txt['modlog_ac_delete_cat'] = 'تم حذف التصنيف &quot;{catname}&quot; .';

$txt['modlog_ac_delete_group'] = 'تم حذف مجموعة الأعضاء &quot;{group}&quot; .';
$txt['modlog_ac_add_group'] = 'تم إضافة مجموعة الأعضاء &quot;{group}&quot; .';
$txt['modlog_ac_edited_group'] = 'تم تعديل مجموعة الأعضاء &quot;{group}&quot; .';
$txt['modlog_ac_added_to_group'] = 'تم إضافة العضو &quot;{member}&quot; الى مجموعة الأعضاء &quot;{group}&quot; .';
$txt['modlog_ac_removed_from_group'] = 'تم حذف العضو &quot;{member}&quot; من مجموعة الأعضاء &quot;{group}&quot; .';
$txt['modlog_ac_removed_all_groups'] = 'تم حذف العضو &quot;{member}&quot; من جميع مجموعات الأعضاء';

$txt['modlog_ac_remind_member'] = 'تم إرسال رسالة تنبيهية للعضو &quot;{member}&quot; لكى يقوم بتفعيل حسابه ';
$txt['modlog_ac_approve_member'] = 'تم الموافقه على/تفعيل حساب العضو &quot;{member}&quot; ';
$txt['modlog_ac_newsletter'] = 'قام بإرسال بريد للأعضاء';

$txt['modlog_ac_install_package'] = 'تم تثبيت الرزمة: &quot;{package}&quot;, الإصدار {version} ';
$txt['modlog_ac_upgrade_package'] = 'تم ترقية الرزمة: &quot;{package}&quot; إلى الإصدار {version}';
$txt['modlog_ac_uninstall_package'] = 'تم إلغاء تثبيت الرزمة: &quot;{package}&quot;, الإصدار {version} ';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'تم إستعادة الموضوع &quot;{topic}&quot; من منتدى &quot;{board}&quot; الى منتدى &quot;{board_to}&quot; ';
$txt['modlog_ac_restore_posts'] = 'تم إستعادة المشاركه &quot;{subject}&quot; الى الموضوع &quot;{topic}&quot; فى المنتدى &quot;{board}&quot; .';

$txt['modlog_parameter_guest'] = '<em>ضيف</em>';

?>