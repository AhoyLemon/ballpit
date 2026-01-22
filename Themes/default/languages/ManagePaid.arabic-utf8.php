<?php
// Version: 2.0; ManagePaid

global $boardurl;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'USD ($) ';
$txt['eur'] = 'EURO (&euro;)';
$txt['gbp'] = 'GBP (&pound;) ';
$txt['other'] = 'اخرى';

$txt['paid_username'] = 'إسم المستخدم';

$txt['paid_subscriptions_desc'] = 'من هنا يمكن إضافة , مسح و تعديل الإشتراكات المدفوعه الخاصه بمنتداك .';
$txt['paid_subs_settings'] = 'إعدادات';
$txt['paid_subs_settings_desc'] = 'من هنا يمكنك تحديد طرق الدفع المتاحه للأعضاء.';
$txt['paid_subs_view'] = 'إظهر الإشتراكات';
$txt['paid_subs_view_desc'] = 'من هنا يمكنك مشاهدة جميع الاشتراكات المتاحة .';

// Setting type strings.
$txt['paid_enabled'] = 'تفعيل الإشتراكات المدفوعه';
$txt['paid_enabled_desc'] = 'يجب عليك وضع علامة صح فى حالة تريد تشغيل خاصية الإشتراكات المدفوعة .';
$txt['paid_email'] = 'إرسل رسائل تنبيهية ';
$txt['paid_email_desc'] = 'تنبيه المدير عندما يتم تغيير الإشتراك تلقائيا .';
$txt['paid_email_to'] = 'البريد الإلكترونى الخاص بالمراسلات';
$txt['paid_email_to_desc'] = 'Comma seperated list of addresses to email notifications to in addition to forum admins.';
$txt['paidsubs_test'] = 'Enable test mode';
$txt['paidsubs_test_desc'] = 'This puts the paid subscriptions mod into &quot;test&quot; mode, which will, whereever possible, use sandbox payment methods in paypal etc. Do not enable unless you know what you are doing!';
$txt['paidsubs_test_confirm'] = 'Are you sure you want to enable test mode?';
$txt['paid_email_no'] = 'لا ترسل أى تنبيهات';
$txt['paid_email_error'] = 'التنبيه عند فشل الإشتراك';
$txt['paid_email_all'] = 'التنبيه فى جميع الحالات التى يتم فيها تغيير الإشتراكات أوتوماتيكيا';
$txt['paid_currency'] = 'إختر العمله';
$txt['paid_currency_code'] = 'رمز العمله';
$txt['paid_currency_code_desc'] = 'Code used by payment merchants';
$txt['paid_currency_symbol'] = 'الرمز المستخدم فى طريقة الدفع';
$txt['paid_currency_symbol_desc'] = 'إستخدم \'%1.2f\' لتحديد مكان الرقم, على سبيل المثال $%1.2f, %1.2fDM إلخ ';
$txt['paypal_email'] = 'البريد الإلكترونى الخاص بحساب الـ Paypal';
$txt['paypal_email_desc'] = 'إتركها فارغه إذا كنت لا تريد إستخدام الـ Paypal';
$txt['worldpay_id'] = 'WorldPay Install ID';
$txt['worldpay_id_desc'] = 'اتركها فارغه اذا كنت لا تستخدم WorldPay ';
$txt['worldpay_password'] = 'WorldPay Callback Password';
$txt['worldpay_password_desc'] = 'Ensure when setting this password in WorldPay it is unique and not the same as your worldpay/admin account password!';
$txt['authorize_id'] = 'Authorize.net Install ID';
$txt['authorize_id_desc'] = 'اتركها فراغة اذا لم تكن تريد استخدام Authorize.net ';
$txt['authorize_transid'] = 'Authorize.Net Transaction ID';
$txt['2co_id'] = '2co.com Install ID';
$txt['2co_id_desc'] = 'اتركها فارغة اذا كنت لا تستخدم 2co.com';
$txt['2co_password'] = '2co.com Secret Word';
$txt['2co_password_desc'] = 'Your 2checkout secret word.';
$txt['nochex_email'] = 'البريد الإلكترونى الخاص بحساب الـ Nochex';
$txt['nochex_email_desc'] = 'اتركها فارغة اذا كنت لا تستخدم Nochex';
$txt['paid_settings_save'] = 'حفظ';

$txt['paid_note'] =   	'<strong class="alert">ملحوظة:</strong>
لكى يتم تحديث الإشتراكات المدفوعى الخاصة بأعضاء منتداك, فسوف

	

يجب عليك تهيئة رابط العودة لجميع طرق الدفع. لجميع أنواع المدفوعات, و هذا الرابط يجب أن يكون بهذا الشكل:


	

&bull; <strong>' . $boardurl . '/subscriptions.php</strong>


	

يمكنك تعديل رابط الـ paypal مباشرتا, عن طريق الضغط <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">هنا</a>.

	

و بخصوص طرق الدفع الاخرى (إذا كانت مثبتة) فيمكنك أن تجدها فى لوحة تحكم الزبائن, عادتا تكون تحت الشروط "Return URL" أو "Callback URL".';

// View subscription strings.
$txt['paid_name'] = 'الإسم';
$txt['paid_status'] = 'الحالة';
$txt['paid_cost'] = 'التكلفه';
$txt['paid_duration'] = 'المدة';
$txt['paid_active'] = 'نشيط';
$txt['paid_pending'] = 'فى إنتظار الدفع';
$txt['paid_finished'] = 'إنتهى';
$txt['paid_total'] = 'إجمالى';
$txt['paid_is_active'] = 'يعمل';
$txt['paid_none_yet'] = 'أنت لم تقم بإضافة أى إشتراكات بعد .';
$txt['paid_payments_pending'] = 'ينتظر الدفع';
$txt['paid_order'] = 'إشترك الأن';

$txt['yes'] = 'نعم';
$txt['no'] = 'لا';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'إضافة إشتراك';
$txt['paid_edit_subscription'] = 'تعديل الإشتراك';
$txt['paid_delete_subscription'] = 'مسح الإشتراك';

$txt['paid_mod_name'] = 'إسم الإشتراك';
$txt['paid_mod_desc'] = 'الوصف';
$txt['paid_mod_reminder'] = 'إرسل رسالة تذكيرية';
$txt['paid_mod_reminder_desc'] = 'عدد الأيام قبل إنتهاء الإشتراك لإرسالة بريد تذكير . (بالأيام,, 0 للتعطيل)';
$txt['paid_mod_email'] = 'البريد الذى سوف يتم إرساله عند الإنتهاء من عملية الإشتراك';
$txt['paid_mod_email_desc'] = ' {NAME} هو إسم العضو; {FORUM} هو إسم المنتدى. عنوان الرسالة يجب أن يكون فى السطر الأول. إتركها فارغه كى لا يتم إرسال تنبيهات عن طريق البريد.';
$txt['paid_mod_cost_usd'] = 'التكلفه بالـ (USD) ';
$txt['paid_mod_cost_eur'] = 'التكلفه بالـ (EUR) ';
$txt['paid_mod_cost_gbp'] = 'التكلفه بالـ (GBP) ';
$txt['paid_mod_cost_blank'] = 'إتركها فارغة فى حالة لا تريد إستخدام هذه العملة.';
$txt['paid_mod_span'] = 'مدة الإشتراك';
$txt['paid_mod_span_days'] = 'أيام';
$txt['paid_mod_span_weeks'] = 'أسابيع';
$txt['paid_mod_span_months'] = 'أشهر';
$txt['paid_mod_span_years'] = 'أعوام';
$txt['paid_mod_active'] = 'نشيط';
$txt['paid_mod_active_desc'] = 'الإشتراك يجب أن يكون مفعل للأعضاء الجدد لكى ينضمو إليه .';
$txt['paid_mod_prim_group'] = 'مجموعة الأعضاء الأساسية عند الإشتراك';
$txt['paid_mod_prim_group_desc'] = 'مجموعة الأعضاء الأساسية التى سوف يتم وضع الأعضاء بها عندما يشتركو .';
$txt['paid_mod_add_groups'] = 'مجموعة الأعضاء الإضافية عند الإشتراك';
$txt['paid_mod_add_groups_desc'] = 'مجموعة الأعضاء الإضافية التى سوف يتم وضع الأعضاء الذين سوف يشتركون فى هذا الإشتراك بها .';
$txt['paid_mod_no_group'] = 'بدون تغيير';
$txt['paid_mod_edit_note'] = 'لاحظ أنه لأن هذه المجموعة خاصة بمجموعة من مجموعات الإشتراكات المدفوعة فإنه لا يمكنك تغيير إعدادات هذه المجموعة !';
$txt['paid_mod_delete_warning'] = '<strong>تحذير</strong><br /><br />إذا قمت بإلغاء هذا الإشتراك فإن جميع الأعضاء المشتركين به سوف يخسرون كل الميزات التى يعطيها لهم هذا الإشتراك . إلا إذا كنت متاكد مما تفعل و يستحسن أن تقوم بكل بساطة بإلغاء الإشتراك بدلا من حذفه .<br />';
$txt['paid_mod_repeatable'] = 'إسمح للأعضاء بالتجديد التلقائى لهذا الإشتراك ';
$txt['paid_mod_allow_partial'] = 'السماح بالإشتراكات الجزئية';
$txt['paid_mod_allow_partial_desc'] = 'If this option is enabled, in the case where the user pays less than required they will be granted a subscription for the percentage of the duration they have paid for.';
$txt['paid_mod_fixed_price'] = 'Subscription for fixed price and period';
$txt['paid_mod_flexible_price'] = 'Subscription price varies on duration ordered';
$txt['paid_mod_price_breakdown'] = 'Flexible Price Breakdown';
$txt['paid_mod_price_breakdown_desc'] = 'Define here how much the subscription should cost dependant on the period they subscribe for. For example, it could cost 12USD to subscribe for a month, but only 100USD for a year. If you don\'t want to define a price for a particular period of time leave it blank.';
$txt['flexible'] = 'مرن';

$txt['paid_per_day'] = 'السعر لكل يوم';
$txt['paid_per_week'] = 'السعر لكل إسبوع';
$txt['paid_per_month'] = 'السعر لكل شهر';
$txt['paid_per_year'] = 'السعر لكل عام';
$txt['day'] = 'يوم';
$txt['week'] = 'إسبوع';
$txt['month'] = 'شهر';
$txt['year'] = 'عام';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'مشاهدة الأعضاء';
$txt['view_users_subscribed'] = 'مشاهدة الأعضاء المشتركين فى: &quot;%s&quot;';
$txt['no_subscribers'] = 'لا يوجد فى الوقت الحالى مشتركين فى هذا الإشتراك !';
$txt['add_subscriber'] = 'إضافة إشتراك جديد';
$txt['edit_subscriber'] = 'تعديل الإشتراك';
$txt['delete_selected'] = 'حذف المختار';
$txt['complete_selected'] = 'استكمل المحدد';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'هل أنت متأكد من أنك تريد حذف جميع المدخلات الخاصة بهذه الإشتراكات التى تم إختيارها ؟';
$txt['complete_are_sure'] = 'هل أنت متأكد من انك تريد إستكمال الإشتاركات التى تم إختيارها ؟';

$txt['start_date'] = 'تاريخ البدء';
$txt['end_date'] = 'تاريخ الإنتهاء';
$txt['start_date_and_time'] = 'تاريخ البدء و الوقت';
$txt['end_date_and_time'] = 'تاريخ الإنتهاء و الوقت';
$txt['edit'] = 'تعديل';
$txt['one_username'] = 'من فضلك اكتب إسم مستخدم واحد فقط .';
$txt['hour'] = 'ساعه';
$txt['minute'] = 'دقيقه';
$txt['error_member_not_found'] = 'غير قادر على العثور على العضو الذى تبحث عن';
$txt['member_already_subscribed'] = 'هذا العضو مشتكر فعلا فى هذا الإشتراك المدفوع . رجاء قم بتعديل إشتراكه الموجود مسبقا .';
$txt['search_sub'] = 'البحث عن عضو';

// Make payment.
$txt['paid_confirm_payment'] = 'تأكيد الدفع';
$txt['paid_confirm_desc'] = 'لإتمام عملية الدفع قم بالتأكد من التفاصيل الموجودة أدناه ثم إضغط زر &quot;إشترك الأن&quot;';
$txt['paypal'] = 'PayPal ';
$txt['paid_confirm_paypal'] = 'للدفع عن طريق <a href="http://www.paypal.com">PayPal</a> رجاء إضغط الزر الموجود أدناه. سوف يتم تحويلك الى موقع PayPal لكى تقوم بعملية الدفع.';
$txt['paid_paypal_order'] = 'إشترك الأن و إدفع عن طريق PayPal ';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'للدفع عن طريق <a href="http://www.worldpay.com">WorldPay</a> رجاء إضغط الزر الموجود أدناه. سوف يتم تحويلك الى موقع WorldPay لكى تقوم بعملية الدفع.';
$txt['paid_worldpay_order'] = 'إشترك الأن و إدفع عن طريق WorldPay ';
$txt['nochex'] = 'Nochex ';
$txt['paid_confirm_nochex'] = 'للدفع عن طريق <a href="http://www.nochex.com">Nochex</a> رجاء إضغط الزر الموجود أدناه .  سوف يتم تحويلك الى موقع Nochex لكى تقوم بعملية الدفع. ';
$txt['paid_nochex_order'] = 'إشترك الأن و إدفع عن طريق Nochex ';
$txt['authorize'] = 'Authorize.Net ';
$txt['paid_confirm_authorize'] = 'للدفع بواسطة <a href="http://www.authorize.net">Authorize.Net</a> رجاء إضغط الزر الموجود أدناه. سوف يتم تحويلك الى موقع Authorize.Net لكى تقوم بعملية الدفع.';
$txt['paid_authorize_order'] = 'إشترك الأن و إدفع بواسطة Authorize.Net ';
$txt['2co'] = '2checkout ';
$txt['paid_confirm_2co'] = 'للدفع بواسطة <a href="http://www.2co.com">2co.com</a> رجاء إضغط الزر الموجود أدناه. سوف يتم تحويلك الى موقع 2co.com لكى تقوم بعملية الدفع.';
$txt['paid_2co_order'] = 'إشترك الأن و إدفع بواسطة 2co.com';
$txt['paid_done'] = 'تم إنهاء عملية الدفع ';
$txt['paid_done_desc'] = 'نشكرك على الدفع . بمجرد التحقق من إتمام عملية تحويل المال سوف يتم تنشيط إشتراكك .';
$txt['paid_sub_return'] = 'العودة الى الإشتراكات';
$txt['paid_current_desc'] = 'بالاسفل قائمة بجميع الإشتراكات الحالية و السابقة . لكى تقوم بمد مدة أى إشتراك أنت مشترك به الأن فقم بكل بساطة بإختياره من القائمة الموجودة أعلاه .';
$txt['paid_admin_add'] = 'إضافة هذا الإشتراك';

$txt['paid_not_set_currency'] = 'أنت لم تقم بتحديد عملتك بعد. رجاء قم بذالك من قسم <a href="%1$s">الإعدادات</a> قبل المتابعة. ';
$txt['paid_no_cost_value'] = 'يجب عليك إدخال التكلفة و مدة الإشتراك .';
$txt['paid_all_freq_blank'] = 'You must enter a cost for at least one of the four durations.';

// Some error strings.
$txt['paid_no_data'] = 'No valid data was sent to the script.';

$txt['paypal_could_not_connect'] = 'غير قادر على الإتصال بموقع PayPal ';
$txt['paid_sub_not_active'] = 'هذا الإشتراك لا يقبل أعضاء جدد !';
$txt['paid_disabled'] = 'نظام الإشتراكات المدفوعه لا يعمل فى الوقت الحالى !';
$txt['paid_unknown_transaction_type'] = 'Unknown Paid Subscriptions transaction type.';
$txt['paid_empty_member'] = 'Paid subscription handler could not recover member ID';
$txt['paid_could_not_find_member'] = 'Paid subscription handler could not find member with ID: %1$d';
$txt['paid_count_not_find_subscription'] = 'Paid subscription handler could not find subscription for member ID: %1$s, subscription ID: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'Paid subscription handler could not find subscription log entry for member ID: %1$s, subscription ID: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'Coud not find outstanding payment entry for member ID: %1$s, subscription ID: %2$s so ignoring';
$txt['paid_admin_not_setup_gateway'] = 'عذرا , لم ينتهى المدير بعد من تهيئة الإشتراكات المدفوعة . رجاء حاول فيما بعد .';
$txt['paid_make_recurring'] = 'Make this a recurring payment';

$txt['subscriptions'] = 'الإشتراكات';
$txt['subscription'] = 'إشتراك';
$txt['paid_subs_desc'] = 'بالأسفل قائمة بجميع الإشتراكات المتاحة فى هذا المنتدى .';
$txt['paid_subs_none'] = 'لا يوجد أى إشتراكات مدفوعه فى الوقت الحالى !';

$txt['paid_current'] = 'الإشتراكات الحالية';
$txt['pending_payments'] = 'ينتظر الدفع';
$txt['pending_payments_desc'] = 'This member has attempted to make the following payments for this subscription but the confirmation has not been received by the forum. If you are sure the payment has been received click &quot;accept&quot; to action to subscription. Alternatively you can click &quot;Remove&quot; to remove all reference to the payment.';
$txt['pending_payments_value'] = 'القيمة';
$txt['pending_payments_accept'] = 'موافقة';
$txt['pending_payments_remove'] = 'حذف';

?>