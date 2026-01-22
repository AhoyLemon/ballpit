<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'هذه الصفحة تسمح بتغيير الإعدادات للمميزات والإختيارات البسيطة للمنتدى. فضلاً قم بزيارة  <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">إعدادات السمة(الإستايل)</a> لمزيد من الإختيارات. إضغط أيقونة المساعدة للحصول على مزيد من المعلومات حول الإعدادات.';
$txt['security_settings_desc'] = 'هذه الصفحه تسمح لك بتعديل خيارات الحماية و الإشراف لمنتداك , و أيضا مكافحة السبام .';
$txt['modification_settings_desc'] = 'هذه الصفحه ستجد بها الإعدادات الخاصه بالرزم المثبته بمنتداك';

$txt['modification_no_misc_settings'] = 'لا يوجد رزم مثبته قامت بوضع إعداداتها هنا حتى الأن .';

$txt['pollMode'] = 'نمط الإستفتاء';
$txt['disable_polls'] = 'تعطيل الإستفتاءات';
$txt['enable_polls'] = 'تفعيل الإستفتاءات';
$txt['polls_as_topics'] = 'عرض الإستفتاءات الموجودة كمواضيع';
$txt['allow_guestAccess'] = 'السماح للضيوف بتصفح المنتدى';
$txt['userLanguage'] = 'تمكين المستخدمون من اختيار لغة الدعم';
$txt['allow_editDisplayName'] = 'السماح للأعضاء بتحرير أسماء العرض؟';
$txt['allow_hideOnline'] = 'السماح لغير المشرفين بخاصية التخفي؟';
$txt['guest_hideContacts'] = 'لا تعرض معلومات الاتصال للعضو على الضيوف';
$txt['titlesEnable'] = 'تمكين العناوين المخصصة';
$txt['enable_buddylist'] = 'تفعيل قائمة الاصدقاء/التجاهل';
$txt['default_personal_text'] = 'النص الشخصي الافتراضي<div class="smalltext">النص الافتراضي الذي سيظهر للأعضاء الجدد.</div>';
$txt['number_format'] = 'شكل الرقم الافتراضي';
$txt['time_format'] = 'شكل الوقت الافتراضي';
$txt['setting_time_offset'] = 'فارق التوقيت<div class="smalltext">(يتم إضافته فى خيارات حساب المستخدم.)</div>  ';
$txt['setting_default_timezone'] = 'التوقيت الخاص بالخادم';
$txt['failed_login_threshold'] = 'عدد محاولات الدخول الخاطئة';
$txt['lastActive'] = 'وقت التحديث للمتصلين الآن';
$txt['trackStats'] = 'تعقب الإحصاءات اليومية';
$txt['hitStats'] = 'تعقب النقرات اليومية (يجب تمكين الاحصاءات)';
$txt['enableCompressedOutput'] = 'تمكين المخرجات المضغوطة';
$txt['disableTemplateEval'] = 'تعطيل تقييم القوالب';
$txt['databaseSession_enable'] = 'استعمل الجلسات في قاعدة البيانات';
$txt['databaseSession_loose'] = 'اسمح للمتصفّحات بالعودة إلى الصفحات المخبّئة';
$txt['databaseSession_lifetime'] = 'ثواني قبل أن تنتهي الجلسة الغير مستخدمة';
$txt['enableErrorLogging'] = 'تمكين تسجيل الأخطاء';
$txt['enableErrorQueryLogging'] = 'تضمين إستفسارات قاعدة البيانات فى سجل الأخطاء ';
$txt['pruningOptions'] = 'السماح بتنظيف مدخلات السجلات .';
$txt['pruneErrorLog'] = 'إحذف بيانات سجل الأخطاء التى أقدم من:<div class="smalltext">(0 للإيقاف)</div>';
$txt['pruneModLog'] = 'حذف محتويات سجل الإشراف الأقدم من:<div class="smalltext">(0 للتعطيل)</div>  ';
$txt['pruneBanLog'] = 'حذف سجل ضغطات الأعضاء المحظورين الأقدم من:<div class="smalltext">(0 للتعطيل)</div>  ';
$txt['pruneReportLog'] = 'حذف بيانات سجل تنبيه للمشرف الأقدم من:<div class="smalltext">(0 للتعطيل)</div>  ';
$txt['pruneScheduledTaskLog'] = 'حذف محتويات سجل المهمات الأقدم من:<div class="smalltext">(0 للتعطيل)</div> ';
$txt['pruneSpiderHitLog'] = 'حذف بيانات سجل محركات البحث الأقدم من:<div class="smalltext">(0 للتعطيل)</div> ';
$txt['cookieTime'] = 'طول وقت سكاكر الدخول الافتراضي (بالدقائق)';
$txt['localCookies'] = 'تمكين تخزين السكاكر محليا<div class="smalltext">(SSI لن يعمل بشكل جيد إذا تم تمكين هذا الخيار.)</div>';
$txt['globalCookies'] = 'استخدم سكاكر النطاق الفرعي المستقل<br />تحذير: عطل خيار السكاكر المحلية أولا!';
$txt['secureCookies'] = 'نظام السكاكر المحمية<div class="smalltext">(هذا الخيار يستخدم فقط فى حالة تفعيل بروتوكول HTTPS - لا تستخدمها إلا فى هذه الحالة فقط!)</div>';
$txt['securityDisable'] = 'تعطيل آمان المشرف';
$txt['send_validation_onChange'] = 'بعث كلمة المرور في حال تغير البريد';
$txt['approveAccountDeletion'] = 'يجب ان يوافق المشرف على الغاء اي عضو';
$txt['autoOptMaxOnline'] = 'العدد الأقصى للمستخدمين المتصلين لتتم عملية تحسين الفاعلية<br /><i>(0 بدون حد أقصى)</i>';
$txt['autoFixDatabase'] = 'إصلاح الجداول المكسورة تلقائيا';
$txt['allow_disableAnnounce'] = 'السماح للاعضاء الغاء الاعلانات';
$txt['disallow_sendBody'] = 'عدم السماح باضافة ردود في التنبيهات';
$txt['queryless_urls'] = 'عرض الـ URLs المحسنة لمحركات البحث<br /><b>ملقم Apache فقط!</b>';
$txt['max_image_width'] = 'الحجم الأقصى لعرض الصور في الرسائل (0 = معطل)';
$txt['max_image_height'] = 'الحجم الأقصى لطول الصور في الرسائل (0 = معطل)';
$txt['enableReportPM'] = 'تفعيل الاعلام عن الرسائل الشخصية';
$txt['max_pm_recipients'] = 'الحد الأقصى لمستلمي الرسائل الشخصية في آن واحد<div class="smalltext">(0 من أجل عدم التحديد, المشرف الرئيس مستثنى)</div>';
$txt['pm_posts_verification'] = 'عدد المشاركات التي يجب على الأعضاء الذين يملكون عددا أقل أن يدخلوا كود التأكيد عند إرسال رسالة شخصية.<div class="smalltext">(0 لعدم وجود حد, ما عدا المدراء)</div>';
$txt['pm_posts_per_hour'] = 'عدد الرسائل الشخصية التى يستطيع العضو إرسالها فى الساعه.<div class="smalltext">(0 غير محدود, المشرفين لا يتم حسابهم)</div>';
$txt['compactTopicPagesEnable'] = 'الحد من عدد وصلات الصفحات الذي سيعرض';
$txt['contiguous_page_display'] = 'ليتم عرضها';
$txt['to_display'] = 'للعرض';
$txt['todayMod'] = 'تمكين ميزة اليوم';
$txt['today_disabled'] = 'تعطيل';
$txt['today_only'] = 'اليوم فقط';
$txt['yesterday_today'] = 'اليوم &amp; يوم أمس';
$txt['topbottomEnable'] = 'تمكين أزرار للأعلى/للأسفل';
$txt['onlineEnable'] = 'عرض متصل/غير متصل في الرسائل و الرسائل الشخصية';
$txt['enableVBStyleLogin'] = 'تمكين نمط دخول VB';
$txt['defaultMaxMembers'] = 'عدد الأعضاء في كل صفحة لقائمة الأعضاء';
$txt['timeLoadPageEnable'] = 'عرض الوقت المستغرق لإنشاء الصفحة';
$txt['disableHostnameLookup'] = 'تعطيل مشاهدة اسم المضيّف hostname ؟';
$txt['who_enabled'] = 'تمكين من المتصل الآن';
$txt['make_email_viewable'] = 'السماح بمشاهدة عنواين البريد الالكتروني.';
$txt['meta_keywords'] = 'كلمات البحث التى تتلائم مع موقعك.<div class="smalltext">لمحركات البحث, إتركها فارغه فهذا هو الوضع الافتراضى لها.</div>  ';

$txt['karmaMode'] = 'نمط الشعبية';
$txt['karma_options'] = 'تعطيل الشعبية| تفعيل الشعبية| تفعيل الشعبية ايجابي/سلبي';
$txt['karmaMinPosts'] = 'الحد الأدنى للرسائل لتعديل الشعبية';
$txt['karmaWaitTime'] = 'حدد وقت الانتظار بالساعات';
$txt['karmaTimeRestrictAdmins'] = 'تقييد المشرفين بوقت الانتظار';
$txt['karmaLabel'] = 'عنوان الشعبية';
$txt['karmaApplaudLabel'] = 'عنوان الشعبية الجيد';
$txt['karmaSmiteLabel'] = 'عنوان الشعبية السيئ';

$txt['caching_information'] = '<div align="center"><b><u>مهم! اقرأ هذا قبل تفعيل هذه الميزات.</b></u></div><br />
	SMF تدعم التخزين الكاشي بواسطة استخدام المسرعات (accelerators). المسرعات المدعومة حاليا تتضمن:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (ليس محسن Zend)</li>
	</ul>
	التخزين الكاشي سيعمل على سيرفك في حال كنت تملك PHP مربوط مع أحد المسرعات السابقة, أو لديك memcache
	متوفر. <br /><br />
	SMF تنجز التخزين الكاشي على عدة مستويات. كلما كان المستوى أعلى كلما تطلب مدة معالجة أكثر من أجل تخزين معلومات الكاش. في حال توفر التخزين الكاشي على جهازك(الهوست) فإنه ينصح أن تستخدم المستوى الأول كبداية.
	<br /><br />
	لاحظ أنه في حال اختيارك لاستخدام memcached يجب أن تقدم معلومات السيرفر في القسم المخصص لها في الأسفل. يحب إضافة هذه المعلومات كقائمة مفصولة عن بعضها بواسطة 		فاصلة كما هو مبين في المثال التالي:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	لاحظ في حال لم تحدد أي port من أجل استخدامه فإن SMF سوف تستخدم port 11211. إن SMF سوف تحاول أن تنجز تحميل صعب/عشوائي خلال السيرفر.
	<br /><br />
	%1$s
	<hr />';

$txt['detected_no_caching'] = '<strong class="alert">لم تستطع SMF أن تجد مسرع متناسب على سيرفرك.</strong>';
$txt['detected_APC'] = '<strong style="color: green">وجدت SMF أن سيرفرك يملك APC مثبت.</strong> ';
$txt['detected_eAccelerator'] = '<strong style="color: green">وجدت SMF أن سيرفرك يملك eAccelerator مثبت.</strong> ';
$txt['detected_MMCache'] = '<strong style="color: green">وجدت SMF أن سيرفرك يملك MMCache مثبت.</strong> ';
$txt['detected_Zend'] = '<strong style="color: green">وجدت SMF has أن سيرفرك يملك Zend مثبت.</strong> ';
$txt['detected_Memcached'] = '<strong style="color: green">SMF إكتشفت أن الـ Memcached مثبت على السرفر الخاص بك. </strong> ';
$txt['detected_XCache'] = '<strong style="color: green">SMF إكتشفت أن الـ  XCache مثبت على السرفر الخاص بك.</strong> ';

$txt['cache_enable'] = 'مستوى التخزين للكاش';
$txt['cache_off'] = 'إلغاء استخدام تخزين الكاش';
$txt['cache_level1'] = 'المستوى الأول لتخزين الكاش (مُستحسن)';
$txt['cache_level2'] = 'المستوى الثاني لتخزين الكاش';
$txt['cache_level3'] = 'المستوى الثالث لتخزين الكاش (لا ينصح به)';
$txt['cache_memcached'] = 'إعدادات Memcache';

$txt['loadavg_warning'] = '<span class="error">Please note: the settings below are to be edited with care. Setting any of them too low may render your forum <strong>unusable</strong>! The current load average is <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Enable load balancing by load averages';
$txt['loadavg_auto_opt'] = 'Threshold to disabling automatic database optimization';
$txt['loadavg_search'] = 'Threshold to disabling search';
$txt['loadavg_allunread'] = 'Threshold to disabling all unread topics';
$txt['loadavg_unreadreplies'] = 'Threshold to disabling unread replies';
$txt['loadavg_show_posts'] = 'Threshold to disabling showing user posts';
$txt['loadavg_forum'] = 'Threshold to disabling the forum <strong>completely</strong>';
$txt['loadavg_disabled_windows'] = '<span class="error">Load balancing support is not available on Windows.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Load balancing support is disabled by your host configuration.</span>';

$txt['setting_password_strength'] = 'مدى صعوبة كلمة المرور الخاصه بالمستخدم';
$txt['setting_password_strength_low'] = 'ضعيفة - 4 احرف على الاقل';
$txt['setting_password_strength_medium'] = 'متوسطة - لايمكن ان تحتوي اسم المستخدم';
$txt['setting_password_strength_high'] = 'قوية - تحتوي على مجموعة من الاحرف و الرموز';

$txt['antispam_Settings'] = 'مكافحة السبام';
$txt['antispam_Settings_desc'] = 'هنا يمكنك تهيئة الإعدادت الخاصه بالتحقق من ان الأعضاء هم إنسان و ليس روبوت , و تهيئة كيف و متى تظهر هذه الخيارات.';
$txt['setting_reg_verification'] = 'تفعيل خيار التحقق من السبام أثناء عملية تسجيل عضو جديد';
$txt['posts_require_captcha'] = 'عدد المشاركات التى يجب أن تكون لدى العضو كى لا تظهر له صورة التحقق البصر أثناء كتابته لرد او موضوع هو';
$txt['posts_require_captcha_desc'] = '(0 لجعلها غير محدودة, المشرفين لا يتم حسابهم) ';
$txt['search_enable_captcha'] = 'طلب كتابت أحرف صورة التحقق البصرى أثناء قيام الزوار بالبحث';
$txt['setting_guests_require_captcha'] = 'يجب على الزائر كتابت رمز التحقق البصرى عند كتابت رد';
$txt['setting_guests_require_captcha_desc'] = '(يتم تفعيله اوتوماتيكيا إذا قمت بكتابت رقم فى الخيار التالى)';
$txt['guests_report_require_captcha'] = 'يجب على الضيف إجتياز التحقق عند الإبلاغ عن مشاركة';

$txt['configure_verification_means'] = 'إعدادات طريقة التحقق';
$txt['setting_qa_verification_number'] = 'عدد أسئلة التحقق التى يجب على العضو إجابتها';
$txt['setting_qa_verification_number_desc'] = '(0 للتعطيل; الأسئلة يتم كتابتها بالأسفل) ';
$txt['configure_verification_means_desc'] = '<span class="smalltext"> بالأسفل يمكنك تحديد الخيارات التى تريد عن طريقها التحقق من ان هذا الشخص هو إنسان . ملحوظه يجب على هذا الشخص إجتياز <em>كل</em>  طرق التحقق فعلى سبيل المثال إذا قمت بتفعيل الخياران التاليان للتحقق فإنه يجب على هذا الشخص إجتيازهما جميعا.</span>';
$txt['setting_visual_verification_type'] = 'مدى صعوبة صورة التحقق البصرى';
$txt['setting_visual_verification_type_desc'] = 'كلما كانت الصورة أكثر صعوبة كلما منع هذا العناكب من التسجيل ';
$txt['setting_image_verification_off'] = 'لا شيء';
$txt['setting_image_verification_vsimple'] = 'سهلة جدا - مجرد أحرف على خلفيه بيضاء';
$txt['setting_image_verification_simple'] = 'سهل - أحرف ملونه و خلفيه بيضاء';
$txt['setting_image_verification_medium'] = 'متوسط - أحرف ملونه و خلفيه بها القليل من الشوشره';
$txt['setting_image_verification_high'] = 'صعبة - أحرف معقده , و خلفية بها شوشره';
$txt['setting_image_verification_extreme'] = 'صعبة جدا - أحرف مقوسة , شوشرة , خطوط و كتل ';
$txt['setting_image_verification_sample'] = 'عينة';
$txt['setting_image_verification_nogd'] = '<strong>ملاحظه :</strong> إن ميزت الـ GD library غير مثبته على هذا السرفر لذلك فإن بعض الاعدادات لن تعمل';
$txt['setup_verification_questions'] = 'أسئلة التحقق';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">إذا أردت من المستخدمين الإجابة على أسئلة التحقق لكى تتأكد من عدم وجود سبام فأنه يجب عليك كتابة عدد من الأسئلة فى الخانات التالية . يجب عليك كتابة أسئلة سهلة نسبيا ; و ليست إجاباتها معقدة . يمكنك إستخدام رموز BBC فى كتابة صيغة السؤال , لحذف السؤال قم بكل بساطه بمسح ما كتبته فى خانة السؤال .</span> ';
$txt['setup_verification_question'] = 'سؤال';
$txt['setup_verification_answer'] = 'جواب';
$txt['setup_verification_add_more'] = 'إضافة سؤال آخر';

$txt['moderation_settings'] = 'إعدادات الإشراف';
$txt['setting_warning_enable'] = 'تفعيل نظام التحذيرات للاعضاء';
$txt['setting_warning_watch'] = 'مستوى التحذير لمراقبة العضو<div class="smalltext">مستوى تحذير العضو و الذي بعده سوف يتم وضع العضو ضمن قائمة المراقبة  - 0 من أجل التعطيل.</div>';
$txt['setting_warning_moderate'] = 'مستوى التحذير من أجل مشاركة الإشراف<div class="smalltext">مستوى تحذير العضو الذي إذا تجاوزه سوف تخضع جميع مشاركاته للإشراف - 0 للتعطيل.</div>';
$txt['setting_warning_mute'] = 'مستوى التحذير للعضو ليتم إسكاته<div class="smalltext">مستوى التحذير للعضو و الذي إذا تجاوزه لن يستطيع أن يشارك بعدها - 0 للتعطيل.</div>';
$txt['setting_user_limit'] = 'الحد الأقصى لعدد النقاط لتحذير العضو في اليوم الواحد<div class="smalltext">هذه القيمة هي الحد الأقصى لنقاط التحذير لكل مشرف المشرف يستطيع أن يسندها  لكل عضو كل 24 ساعة - 0 بدون حدود.</div>';
$txt['setting_warning_decrement'] = 'نقاط التحذير لكي تتناقص من الأعضاء المحذرين كل 24 ساعة<div class="smalltext">يطبق فقط في حال لم يتم تحذير العضو خلال 24 ساعة السابقة - اكتب 0 للتعطيل.</div>';
$txt['setting_warning_show'] = 'من يستطيع مشاهدة حالة التحذير<div class="smalltext">لتحديد من يستطيع مشاهدة مستويات التحذير لأعضاء المنتدى.</div>';
$txt['setting_warning_show_mods'] = 'المشرفين فقط';
$txt['setting_warning_show_user'] = 'المشرفين و الأعضاء الذين لديهم تحذير';
$txt['setting_warning_show_all'] = 'جميع الأعضاء';

$txt['signature_settings'] = 'إعدادات التوقيع';
$txt['signature_settings_desc'] = 'استخدم الإعدادات الموجودة فى هذه الصفحة لتقرر, كيفية معالجة التواقيع ضمن SMF.';
$txt['signature_settings_warning'] = 'تذكر أن هذه الإعدادات لن تتطبق على التواقيع الحالية بشكل افتراضي. اضغط <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">هنا</a> لتطبيق الشروط على كل التواقيع الموجودة.';
$txt['signature_enable'] = 'تفعيل التوقيع';
$txt['signature_max_length'] = 'الحد الأقصى لعدد الأحرف <div class="smalltext">(0 لعدم وجود حد أقصى.)</div>';
$txt['signature_max_lines'] = 'الحد الأقصى لعدد لأسطر <div class="smalltext">(0 لعدم وجود حد أقصى)</div>';
$txt['signature_max_images'] = 'الحد الأقصى لعدد للصور<div class="smalltext">(0 لعدم وجود حد أقصى - باستثناء الابتسامات)</div>';
$txt['signature_allow_smileys'] = 'السماح بالإبتسامات فى التوقيع';
$txt['signature_max_smileys'] = 'الحد الأقصى لعدد الإبتسامات <div class="smalltext">(0 لعدم وجود حد أقصى)</div>';
$txt['signature_max_image_width'] = 'العرض الأقصى لصور التوقيع (بكسل)<div class="smalltext">(0 لعدم وجود حد أقصى)</div>';
$txt['signature_max_image_height'] = 'أقصى ارتفاع لصور التوقيع (بكسل)<div class="smalltext">(0 لعدم وجود حد أقصى)</div>';
$txt['signature_max_font_size'] = 'حجم الخط الأقصى المسموح ضمن التواقيع<div class="smalltext">(0 لعدم وجود حد أقصى)</div>';
$txt['signature_bbc'] = 'تفعيل أكواد BBC';

$txt['custom_profile_title'] = 'خانات إضافية للمعلومات الشخصية';
$txt['custom_profile_desc'] = 'في هذه الصفحة تستطيع أن تقوم بإنشاء خانات إضافية للمعلومات الشخصية و التي ستلبي حاجات منتداك';
$txt['custom_profile_active'] = 'فعال';
$txt['custom_profile_fieldname'] = 'اسم الحقل';
$txt['custom_profile_fieldtype'] = 'نمط الحقل';
$txt['custom_profile_make_new'] = 'حقل جديد';
$txt['custom_profile_none'] = 'لم تقم بإنشاء أية خانة إضافية للمعلومات الشخصية حتى الآن!';
$txt['custom_profile_icon'] = 'أيقونة';

$txt['custom_profile_type_text'] = 'نص';
$txt['custom_profile_type_textarea'] = 'نص كبير';
$txt['custom_profile_type_select'] = 'اختيار مربع';
$txt['custom_profile_type_radio'] = 'زر راديو';
$txt['custom_profile_type_check'] = 'مربع اختيار';

$txt['custom_add_title'] = 'إضافة خانة للهوية';
$txt['custom_edit_title'] = 'تعديل خانة الهوية';
$txt['custom_edit_general'] = 'عرض الإعدادات';
$txt['custom_edit_input'] = 'إعدادات الإدخال';
$txt['custom_edit_advanced'] = 'إعدادات متقدمة';
$txt['custom_edit_name'] = 'الإسم';
$txt['custom_edit_desc'] = 'وصف';
$txt['custom_edit_profile'] = 'القسم الذى سوف يظهر به';
$txt['custom_edit_profile_desc'] = 'القسم بالملف الشخصى الذى تريد ظهور هذا الحقل به.';
$txt['custom_edit_profile_none'] = 'لا شيء';
$txt['custom_edit_registration'] = 'أظهر عند التسجيل';
$txt['custom_edit_registration_disable'] = 'لا';
$txt['custom_edit_registration_allow'] = 'نعم';
$txt['custom_edit_registration_require'] = 'نعم, و مطلوبة';
$txt['custom_edit_display'] = 'أظهر عند مشاهدة الموضوع';
$txt['custom_edit_picktype'] = 'نمط الخانة';

$txt['custom_edit_max_length'] = 'الحد الأقصى للطول';
$txt['custom_edit_max_length_desc'] = '(0 لعدم وجود حد)';
$txt['custom_edit_dimension'] = 'الأبعاد';
$txt['custom_edit_dimension_row'] = 'صفوف';
$txt['custom_edit_dimension_col'] = 'أعمدة';
$txt['custom_edit_bbc'] = 'السماح بكود BBC?';
$txt['custom_edit_options'] = 'خيارات';
$txt['custom_edit_options_desc'] = 'اترك الصندوق فارغ لكي يتم حذف المعلومات منه. زر الراديو سيظل على القيمة الافتراضية.';
$txt['custom_edit_options_more'] = 'المزيد';
$txt['custom_edit_default'] = 'الحالة الافتراضية';
$txt['custom_edit_active'] = 'تفعيل';
$txt['custom_edit_active_desc'] = 'في حال لم تقم باختيار هذه الخانة لن يتم عرضها لأي أحد.';
$txt['custom_edit_privacy'] = 'خصوصية';
$txt['custom_edit_privacy_desc'] = 'من يستطيع رؤية  و تعديل هذا الحقل .';
$txt['custom_edit_privacy_all'] = 'الأعضاء يمكنهم مشاهدة هذا الحقل ; صاحب هذا الحقل هو فقط الذى يستطيع تعديله';
$txt['custom_edit_privacy_see'] = 'الأعضاء يمكنهم رؤية هذا الحقل; المديرين فقط يمكنهم تعديل هذا الحقل ';
$txt['custom_edit_privacy_owner'] = 'الأعضاء لا يمكنهم مشاهدة هذا الحقل ; صاحب هذا الحقل و المديرين يمكنهم تعديله .';
$txt['custom_edit_privacy_none'] = 'هذا الحقل يظهر فقط للمديرين';
$txt['custom_edit_can_search'] = 'قابل للبحث';
$txt['custom_edit_can_search_desc'] = 'يمكن لهذا الحقل ان يتم البحث به من قائمة الأعضاء .';
$txt['custom_edit_mask'] = 'قناع الإدخال';
$txt['custom_edit_mask_desc'] = 'للخانات النصية يمكن اختيار قناع الإدخال للتأكد من سلامة المعلومات المُدخلة.';
$txt['custom_edit_mask_email'] = 'بريد إلكترونى صالح';
$txt['custom_edit_mask_number'] = 'رقمي';
$txt['custom_edit_mask_nohtml'] = 'بدون HTML';
$txt['custom_edit_mask_regex'] = 'تعبير منتظم: Regex (متقدم)';
$txt['custom_edit_enclose'] = 'Show Enclosed Within Text (Optional)';
$txt['custom_edit_enclose_desc'] = 'We <strong>strongly</strong> recommend to use an input mask to validate the input supplied by the user.';

$txt['custom_edit_placement'] = 'إختر المكان';
$txt['custom_edit_placement_standard'] = 'قياسى (حسب النص)';
$txt['custom_edit_placement_withicons'] = 'بواسطة الأيقونات';
$txt['custom_edit_placement_abovesignature'] = 'التوقيع الموجود أعلاه';
$txt['custom_profile_placement'] = 'المكان';
$txt['custom_profile_placement_standard'] = 'قياسى';
$txt['custom_profile_placement_withicons'] = 'بواسطة الأيقونات';
$txt['custom_profile_placement_abovesignature'] = 'التوقيع الموجود أعلاه';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'هل أنت متأكد من أنك تريد حذف هذه الخانة كل معلومات الأعضاء المسجلة في هذه الخانة سوف يتم فقدها!';

$txt['standard_profile_title'] = 'خانات المعلومات الشخية الأساسية';
$txt['standard_profile_field'] = 'خانة';

$txt['core_settings_welcome_msg'] = 'أهلا بك في منتداك الجديد';
$txt['core_settings_welcome_msg_desc'] = 'لكي تبدأ نقترح عليك أن تختار اية ميزات تريد أن تفعل. ننصح بتفعيل الميزات التي فقط تحتاجها!';
$txt['core_settings_item_cd'] = 'التقويم';
$txt['core_settings_item_cd_desc'] = 'تفعيل هذه الميزة سيفتح قائمة من الخيارات للسماح للأعضاء بمشاهدة التقويم, إضافة و عرض الأحداث, مشاهدة أعياد ميلاد باقي الأعضاء و غيرها.';
$txt['core_settings_item_cp'] = 'خانات معلومات شخصية إضافية متقدمة';
$txt['core_settings_item_cp_desc'] = 'هذا يسمح لك بإخفاء خانات المعلومات الشخصية الأساسية, إضافة خانات جديدة لقسم التسجيل, و إنشاء خانات جديدة للمعلومات الشخصية في منتداك.';
$txt['core_settings_item_k'] = 'الشعبية';
$txt['core_settings_item_k_desc'] = 'الشعبية ميزة تسمح لبيان مدى شعبية العضو. يستطيع الأعضاء, في حال السماح \'رفع\' أو \'انقاص\' شعبيات باقي الأعضاء ,وهذه هي الطريقة لتحديد شعبية العضو.';
$txt['core_settings_item_ml'] = 'سجل الإشراف , الإدارة و الأعضاء';
$txt['core_settings_item_ml_desc'] = 'تفعيل سجل الإشراف و الإدارة لكي تستطيع أن تقوم بمتابعة جميع أفعال أو الأحداث بشكل دقيق المتخذة من قبل مشرفي المنتدى.';
$txt['core_settings_item_pm'] = 'الإشراف على المشاركات';
$txt['core_settings_item_pm_desc'] = 'الإشراف على المشاركات تسمح لك لاختيار مجموعات و أقسام حيث يتم تفعيل وجوب الموافقة على المشاركات قبل ظهورها لباقي الأعضاء. إلى أن تقوم بتفعيل هذه الميزة تأكد من زيارة قسم الصلاحيات لتحديد الصلاحيات المناسبة المرتبطة.';
$txt['core_settings_item_ps'] = 'الإشتراكات المدفوعه';
$txt['core_settings_item_ps_desc'] = 'الإشتراكات المدفوعه تسمح للأعضاء بتغير مجموعة الأعضاء الخاصه بهم بعضوية مدفوعه و التى تمنحهم ميزات أكثر .';
$txt['core_settings_item_rg'] = 'مولد التقارير';
$txt['core_settings_item_rg_desc'] = 'هذه الميزة تسمح بتوليد التقارير (و التي يمكن طباعتها) لعرض خيارات منتداك المختارة بشكل بسيط - مفيد أكثر في المنتديات الضخمة.';
$txt['core_settings_item_sp'] = 'تتبع محركات البحث';
$txt['core_settings_item_sp_desc'] = 'تفعيل هذه الميزة تجعل المديرين قادرين على تتبع و معرفة الصفحات التى تقوم بحفظها محركات البحث .';
$txt['core_settings_item_w'] = 'نظام التحذيرات';
$txt['core_settings_item_w_desc'] = 'هذه الميزة تسمح للمدراء و المشرفين بإصدار تحذيرات للأعضاء; كما أنها تتضمن ميزة إلغاء صلاحيات العضو في حال تجاوز مستوى التحذير حدا معينا. لكي تستفيد من كامل فعالية هذه الميزة فإن ميزة &quot;الإشراف على المشاركات&quot; يجب أن تكون مفعلة.';
$txt['core_settings_switch_on'] = 'اضغط للتفعيل';
$txt['core_settings_switch_off'] = 'اضغط للتعطيل';
$txt['core_settings_enabled'] = 'تفعيل';
$txt['core_settings_disabled'] = 'تعطيل';

$txt['languages_lang_name'] = 'اسم اللغة';
$txt['languages_locale'] = 'الرمز';
$txt['languages_default'] = 'الافتراضي';
$txt['languages_character_set'] = 'ترميز';
$txt['languages_users'] = 'أعضاء';
$txt['language_settings_writable'] = 'تحذير: الملف Settings.php غير قابل للكتابه لذلك فإن إعدادات اللغه الإفتراضيه لن يتم حفظها. ';
$txt['edit_languages'] = 'تعديل اللغات';
$txt['lang_file_not_writable'] = '<strong>تحذير:</strong> إن ملفات اللغه الإفتراضية (%1$s) غير قابلة للكتابة. يجب عليك أن تجعلها قابلة للكتابة قبل عمل أى تعديل. ';
$txt['lang_entries_not_writable'] = '<strong>تحذير:</strong> إن ملفات اللغه التى تحاول تعديلها (%1$s) غير قابلة للكتابة. يجب أن تجعلها قابلة للكتابة قبل عمل أى تعديل. ';
$txt['languages_ltr'] = 'من اليمين لليسار';

$txt['add_language'] = 'إضافة لغه';
$txt['add_language_smf'] = 'تحميل من Simple Machines ';
$txt['add_language_smf_browse'] = 'أكتب أسم اللغه للبحث عنها أو إتركها فارغه للبحث عن الكل .';
$txt['add_language_smf_install'] = 'تثبيت';
$txt['add_language_smf_found'] = 'لقد تم إيجاد هذه اللغات. إضغط على كلمة تثبيت الموجوده أمام اللغه التى تريد تثبيتها, سيتم تحويلك بعدها الى مدير الرزم لتثبيتها.';
$txt['add_language_error_no_response'] = 'إن موقع Simple Machines لا يستجيب. رجاء حاول فيما بعد. ';
$txt['add_language_error_no_files'] = 'لم نستطع العثور على أية ملفات';
$txt['add_language_smf_desc'] = 'وصف';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'الإصدار';

$txt['edit_language_entries_primary'] = 'بالأسفل الإعدادات الإفتراضية لرزمة اللغه هذه .';
$txt['edit_language_entries'] = 'تعديل مدخلات ملف اللغه';
$txt['edit_language_entries_file'] = 'إختر ملف لتعديله';
$txt['languages_dictionary'] = 'قاموس';
$txt['languages_spelling'] = 'التهجئة';
$txt['languages_for_pspell'] = 'هذه لميزة  <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - إذا كانت مثبته ';
$txt['languages_rtl'] = 'تفعيل نمط &quot;من اليمين الى اليسار&quot; .';

$txt['lang_file_desc_index'] = 'إعدادات عامة';
$txt['lang_file_desc_EmailTemplates'] = 'قوالب للبريد الالكتروني';

$txt['languages_download'] = 'تحميل رزمة الغة';
$txt['languages_download_note'] = 'ستجد بهذه الصفحة قائمة بكل الملفات الموجودة داخل رزمة اللغه هذه و بعض المعلومات المفيدة عن كل منها . جميع الملفات التى تم إختيارها سيتم نسخها .';
$txt['languages_download_info'] = '<strong>ملحوظه:</strong> <ul class="normallist"> <li>الملفات ذات التصريح &quot;غير قابل للكتابة&quot; تعنى أن SMF لن يتمكن من نسخ هذه الملفات الى المجلد فى المستقبل و يجب عليك تغيير التصاريح لقابلة للكتابة و ذلك من خلال استخدام الـ FTP او عن طريق إستكمال البيانات الموجودة أدناه.</li> <li>إن معلومات النسخه الخاصه بالملف تظهر لك اخر نسخه من ملفات الـ SMF و التى تم الترقية لها. إذا كان اللون أخضر فإن هذا يعنى ان هذه هى نسخة أحدث من التى موجودة عندك. و إذا كان اللون اصفر فهذا يعنى ان هذه النسخه هى نفسها النسخة المثبته , إذا كان اللون احمر فإن هذا يعنى ان لديك نسخه احدث مثبته بالفعل.</li> <li>إذا كان الملف موجود بالفعل فى منتداك فإن العمود  &quot;موجود بالفعل&quot; ستكون له قيمة واحدة من اثنين. &quot;مطابق&quot; و التى تعنى ان الملف موجود بالفعل و لا داعى للكتابة فوقه. &quot;مختلف&quot; تعنى ان هناك اختلاف ما و الكتابه فوقه هو حل جيد.</li> </ul>';

$txt['languages_download_main_files'] = 'الملفات الأساسية';
$txt['languages_download_theme_files'] = 'Theme-related Files';
$txt['languages_download_filename'] = 'اسم الملف';
$txt['languages_download_dest'] = 'المقصد';
$txt['languages_download_writable'] = 'قابل للكتابة';
$txt['languages_download_version'] = 'الإصدار';
$txt['languages_download_older'] = 'لديك أحدث نسخه من هذه الملفات مثبته بالفعل , غير مستحسن إعادة الكتابه على الملفات .';
$txt['languages_download_exists'] = 'موجود مسبقا';
$txt['languages_download_exists_same'] = 'مطابق';
$txt['languages_download_exists_different'] = 'مختلف';
$txt['languages_download_copy'] = 'نسخ';
$txt['languages_download_not_chmod'] = 'لا يمكنك الإستمرار فى عملية التثبيت إلا عندما تكون الملفات التى قد قمت بإختيارها ليتم نسخها قابلة للكتابة .';
$txt['languages_download_illegal_paths'] = 'الرزمة تتضمن مسار غير مسموح - نرجو الاتصال بـSMF';
$txt['languages_download_complete'] = 'تم التثبيت';
$txt['languages_download_complete_desc'] = 'تم تثبيت رزمة اللغه بنجاح. رجاء إضغط <a href="%1$s">هنا</a> للعودة الى صفحة اللغات ';
$txt['languages_delete_confirm'] = 'هل أنت متأكد من أنك تريد حذف هذه اللغة ؟';

?>