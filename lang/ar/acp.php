<?php
//
// kleeja language, admin
// Arabic
//

if (!defined('IN_COMMON'))
	exit;

if (empty($lang) || !is_array($lang))
	$lang = array();


$lang = array_merge($lang, array(
	'U_NOT_ADMIN' 			=> 'يجب أن تملك صلاحية الإدارة',
	'UPDATE_CONFIG' 		=> 'تحديث الإعدادات',
	'NO_CHANGE' 			=> 'بلا تغيير',
	'CHANGE_MD5' 			=> 'تغيير مع دالة MD5',
	'CHANGE_TIME' 			=> 'تغيير مع دالة TIME',
	'SITENAME' 				=> 'إسم المركز',
	'SITEMAIL' 				=> 'بريد المركز',
	'SITEMAIL2' 			=> 'بريد التبليغات , المراسلات',
	'SITEURL' 				=> 'رابط المركز <small>(مع / بنهايته)</small>',
	'FOLDERNAME' 			=> 'إسم مجلد التحميل',
	'PREFIXNAME' 			=> 'بادئة أسماء الملفات <small>(مثلا : kleeja_ وستظهر بعد اسم كل ملف مرفوع, يمكن استخدام ايضا {rand:4} و {date:d_Y})</small>',
	'FILESNUM' 				=> 'عدد حقول ملفات التحميل',
	'FILESNUM_SHOW' 		=> 'عرض حقول حقول التحميل كلها',
	'SITECLOSE' 			=> 'إغلاق المركز',
	'CLOSEMSG' 				=> 'رسالة الإغلاق',
	'DECODE' 				=> 'تغيير إسم الملف <small>(لاحظ : عند عرض الملف سيظهر اسمه الاصلي, اما هذا فللحمايه والتنظيم)</small>',
	'SEC_DOWN' 				=> 'عدد الثواني قبل بدء التحميل',
	'STATFOOTER' 			=> 'إحصائيات الصفحة بالفوتر',
	'GZIP' 					=> 'GZIP <small>(ضاغط المحتويات لتسريع عرضها)</small>',
	'GOOGLEANALYTICS' 		=> '<a href="http://www.google.com/analytics" target="_kleeja"><span style="color:orange">Google</span> Analytics</a>',
	'WELCOME_MSG' 			=> 'كلمة الترحيب',
	'USER_SYSTEM' 			=> 'نظام العضوية <small>(لاحظ: تغييرها قد يمنعك من الدخول مالم تتبع الشروحات)</small>',
	'ENAB_REG' 				=> 'فتح التسجيل',
	'TOTAL_SIZE' 			=> 'أقصى حجم كلي للمركز <small>(ميقا بايت)</small>',
	'THUMBS_IMGS' 			=> 'تفعيل مصغرات الصور',
	'WRITE_IMGS' 			=> 'تفعيل ختم الصور',
	'ID_FORM' 				=> 'شكل روابط الملفات <small>(المباشر لايخضع لحمايتنا ولا للاحصائيات .. )</small>',
	'IDF' 					=> 'الاساسي',
	'IDFF' 					=> 'إسم الملف',
	'IDFD' 					=> 'رابط مباشر',
	'DEL_URL_FILE' 			=> 'تفعيل رابط الحذف المباشر',
	'WWW_URL' 				=> 'تفعيل التحميل من رابط',
	'ALLOW_STAT_PG' 		=> 'تفعيل صفحة الإحصائيات',
	'ALLOW_ONLINE' 			=> 'تفعيل عرض المتواجدون الآن',
	'DEL_F_DAY' 			=> 'حذف الملفات الخاملة بعد × يوم',
	'MOD_WRITER' 			=> 'Mod Rewrite <small>(لاحظ: لن يعمل الا بعد نقل ملف .htaccess للمجلد الرئيسي)</small>',
	'MOD_WRITER_EX' 		=> '<b style="color:#0B55C4">روابط كـ HTML ..</b>',
	'NUMFIELD_S' 			=> 'رجاءاً .. الحقول الرقمية .. يجب أن تكون رقمية !!',
	'CONFIGS_UPDATED' 		=> 'تم تحديت الإعدادات بنجاح',
	'UPDATE_EXTS' 			=> 'تحديث الامتدادات',
	'SIZE_G' 				=> 'الحجم [ <font style="color:red">الزوار</font> ]',
	'SIZE_U' 				=> 'الحجم [ <font style="color:green">الأعضاء</font> ]',
	'ALLOW_G' 				=> 'سماح <br />[الزوار]',
	'ALLOW_U' 				=> 'سماح <br />[الأعضاء]',
	'E_EXTS' 				=> 'ملاحظة  : الأحجام تضبط بالكليوبايت .',
	'UPDATED_EXTS' 			=> 'تم تحديث الإمتدادات بنجاح',
	'UPDATE_REPORTS' 		=> 'تحديث التبليغات',
	'E_CLICK' 				=> 'اضغط على أحد المختارات لتظهر هنا!',
	'REPLY' 				=> 'إرسال',
	'REPLY_REPORT' 			=> 'رد على تبليغ',
	'U_REPORT_ON' 			=> 'بسبب تبليغك في ',
	'BY_EMAIL' 				=> 'بواسطة البريد ',
	'ADMIN_REPLIED' 		=> 'فقد قام المدير بالرد التالي',
	'CANT_SEND_MAIL' 		=> 'لا يمكن إرسال رد بريدي',
	'IS_SEND_MAIL' 			=> 'تم إرسال الرد البريدي',
	'REPORTS_UPDATED' 		=> 'تم تحديث التبليغات',
	'UPDATE_CALSS' 			=> 'تحديث المراسلات',
	'REPLY_CALL' 			=> 'رد على رسالة',
	'REPLIED_ON_CAL' 		=> 'بخصوص مراسلتك ',
	'CALLS_UPDATED' 		=> 'تم تحديث المراسلات',
	'IS_ADMIN' 				=> 'مدير',
	'UPDATE_USERS' 			=> 'تحديث المستخدمين',
	'USERS_UPDATED' 		=> 'تم تحديث المستخدمين',
	'E_BACKUP' 				=> 'اختر الجداول التي تريد تضمينها في النسخة الاحتياطية ومن ثم اضغط على تحميل',
	'TAKE_BK' 				=> 'أخذ نسخة',
	'REPAIRE_TABLE' 		=> '[جداول] تم إصلاح ',
	'REPAIRE_F_STAT' 		=> '[إحصائيات] تم إعادة إحتساب عدد الملفات',
	'REPAIRE_S_STAT' 		=> '[إحصائيات] تم إعادة إحتساب حجم الملفات ',
	'REPAIRE_CACHE' 		=> '[كاش] تم حذف  ..',
	'KLEEJA_CP' 			=> 'لوحة تحكم [ كليجا ]',
	'GENERAL_STAT' 			=> 'إحصائيات عامة',
	'USER_STAT' 			=> 'إحصائيات المستخدم',
	'SEARCH_STAT' 			=> 'إحصائيات محركات البحث',
	'OTHER_INFO' 			=> 'معلومات أخرى',
	'AFILES_NUM' 			=> 'عدد جميع الملفات',
	'AFILES_SIZE' 			=> 'حجم الملفات الأجمالي',
	'AFILES_SIZE_SPACE' 	=> 'المساحة التي تم استهلاكها حتى الآن',
	'AUSERS_NUM' 			=> 'عدد الأعضاء',
	'LAST_GOOGLE' 			=> 'آخر زيارة لجوجل',
	'GOOGLE_NUM' 			=> 'عدد زيارات جوجل',
	'LAST_YAHOO' 			=> 'آخر زيارة للياهو',
	'YAHOO_NUM' 			=> 'عدد زيارات الياهو',
	'KLEEJA_CP_W' 			=> 'مرحباً بك <b style="color:#FF6600">[ %s ]</b> في لوحة تحكم الإدارة',
	'PHP_VER' 				=> 'إصدار php',
	'MYSQL_VER' 			=> 'إصدار mysql',
	'LOGOUT_CP_OK' 			=> 'تم مسح جلستك الإدارية وبقي صلاحياتك الأخرى..',
	'R_CONFIGS' 			=> 'إعدادات المركز',
	'R_CPINDEX' 			=> 'بداية لوحة التحكم',
	'R_EXTS' 				=> 'إعدادات الإمتدادات',
	'R_FILES' 				=> 'إدارة الملفات',
	'R_REPORTS' 			=> 'التحكم بالتبليغات',
	'R_CALLS' 				=> 'التحكم بالمراسلات',
	'R_USERS' 				=> 'إدارة الأعضاء',
	'R_BCKUP' 				=> 'نسخة احتياطية',
	'R_REPAIR' 				=> 'صيانة شاملة',
	'R_LGOUTCP' 			=> 'مسح جلسة الإدارة',
	'R_BAN' 				=> 'التحكم بالحظر',
	'BAN_EXP1' 				=> 'قم بتحرير الآيبيات المحظورة وإضافة الجديد من هنا..',
	'BAN_EXP2' 				=> 'إستخدم رمز النجمة (*)لاستبدال الارقام ..إذا كنت تريد الحظر الشامل ..وأستخدم الفاصل (|) للفصل بين الآيبيات',
	'UPDATE_BAN' 			=> 'حفظ تعديلات الحظر',
	'BAN_UPDATED' 			=> 'تم تحديث قائمة الحظر بنجاح..',
	'R_RULES' 				=> 'شروط الخدمة',
	'RULES_EXP' 			=> 'من هنا تستطيع تعديل الشروط التي سوف تظهر للزوار والأعضاء',
	'UPDATE_RULES' 			=> 'تحديث الشروط',
	'RULES_UPDATED' 		=> 'تم تحديث الشروط بنجاح..',
	'R_SEARCH' 				=> 'بحث متقدم',
	'SEARCH_FILES' 			=> 'بحث عن الملفات',
	'SEARCH_SUBMIT' 		=> 'بحث الآن',
	'LAST_DOWN' 			=> 'آخر تحميل',
	'WAS_B4' 				=> 'كان قبل',
	'SEARCH_USERS' 			=> 'بحث عن مستخدمين',
	'R_IMG_CTRL' 			=> 'إدارة الصور',
	'ENABLE_USERFILE' 		=> 'تفعيل مجلدات المستخدمين',
	'R_EXTRA' 				=> 'هيدر وفوتر إضافي',
	'EX_HEADER_N' 			=> 'الهيدر الإضافي.. وهو ما يظهر أسفل الهيدر الأصلي ..',
	'EX_FOOTER_N' 			=> 'الفوتر الإضافي.. وهو ما يظهر أعلى الفوتر الأصلي ..',
	'UPDATE_EXTRA' 			=> 'تحديث الإضافات القوالبية',
	'EXTRA_UPDATED' 		=> 'تم تحديث الإضافات القوالبية',
	'R_STYLES' 				=> 'الستايلات',
	'STYLES_EXP' 			=> 'لتعديل أو تبديل الستايلات فضلاً قم بتحديد ما يناسبك  من أسفل ..!',
	'SHOW_TPLS' 			=> 'عرض القوالب',
	'TPL_UPDATED' 			=> 'تم تحديث القالب',
	'TPL_DELETED' 			=> 'تم حذف القالب',
	'NO_TPL_SHOOSED' 		=> 'لم تقم بإختيار قالب !!!',
	'NO_TPL_NAME_WROTE' 	=> 'لم تقم بكتابة اسم قالب !!!',
	'ADD_NEW_STYLE' 		=> 'إنشاء ستايل جديد',
	'EXPORT_AS_XML' 		=> 'تصدير كـ xml',
	'NEW_STYLES_EXP' 		=> 'قم بتحميل الستايل من ملف xml',
	'NEW_STYLE_ADDED' 		=> 'تمت إضافة الستايل بنجاح ',
	'ERR_IN_UPLOAD_XML_FILE' 	 	=> 'هناك خطأ في تحميل الملف! (ERR:XML)',
	'ERR_UPLOAD_XML_FILE_NO_TMP' 	=> 'هناك خطأ في تحميل الملف! (ERR :NOTMP)',
	'ERR_UPLOAD_XML_NO_CONTENT' 	=> 'الملف لا يحوي محتويات !',
	'ERR_XML_NO_G_TAGS' 			=> 'الملف لا يحوي بعض الوسوم المهمة !',
	'STYLE_DELETED' 				=> 'لقد تم حذف الستايل بنجاح',
	'STYLE_1_NOT_FOR_DEL' 			=> 'لا يمكن حذف الستايل الأساسي في كليجا ...',
	'ADD_NEW_TPL' 					=> 'أضف قالب جديد',
	'ADD_NEW_TPL_EXP' 				=> 'قم بكتابة إسم القالب الجديد ...',
	'TPL_CREATED' 					=> 'لقد تم إنشاء القالب الجديد ...',
	'R_LANGS' 					=> 'كلمات وعبارات',
	'WORDS_UPDATED' 			=> 'لقد تم تحديث الكلمات...',
	'R_PLUGINS' 				=> 'إضافات برمجية',
	'PLUGINS_EX' 				=> 'الإضافات البرمجية السريعة .. قم بحذفها او تعطيلها من هنا',
	'ADD_NEW_PLUGIN' 			=> 'أضف إضافة برمجية جديدة',
	'ADD_NEW_PLUGIN_EXP' 		=> 'قم بتحميل ملف الإضافة البرمجية klj ..',
	'PLUGIN_DELETED' 			=> 'لقد تم حذف الإضافة البرمجية...',
	'PLGUIN_DISABLED_ENABLED' 	=> 'لقد تم تفعيل \ تعطيل الإضافة البرمجية..',
	'NO_PLUGINS' 				=> 'لا يوجد أي إضافات برمجية ..',
	'NEW_PLUGIN_ADDED' 			=> 'لقد تمت إضافة الإضافة البرمجية .. <br /> لاحظ : بعض الإضافات البرمجية يأتي معها ملفات تحتاج لنقلها لمجلد كليجا.',
	'PLUGIN_EXISTS_BEFORE' 		=> 'الاضافه هذه موجوده سابقاً بنفس الاصدار أو أعلى ولاتحتاج تحديث !',
	'PLUGIN_UPDATED_SUCCESS' 	=> 'لقد تم تحديث الإضافه لأخر إصدار تم رفعه ...',
	'R_CHECK_UPDATE' 			=> 'فحص عن تحديثات',
	'ERROR_CHECK_VER' 			=> 'خطأ: لا يمكن جلب معلومات عن آخر نسخة في هذه اللحظة، حاول مجدداً لاحقا!.',
	'UPDATE_KLJ_NOW' 			=> 'يجب أن تقوم بتحديث نسختك إلى آخر نسخة الآن، قم بالذهاب لموقع كليجا لمعلومات أكثر .',
	'U_LAST_VER_KLJ' 			=> 'أنت تستخدم آخر نسخة من كليجا. شكراً لمتابعة نسختك بإستمرار.',
	'U_USE_PRE_RE' 				=> 'أنت تستخدم نسخة تطويرية لم تصدر حتى الآن , اضغط <a href="http://www.kleeja.com/bugs/">هنا</a> لإخبارنا بأي أخطاء برمجية وثغرات قد تقابلك.',
	'STYLE_IS_DEFAULT'			=> 'استايل افتراضي',
	'MAKE_AS_DEFAULT'			=> 'تعيينه افتراضي',
	'TPLS_RE_BASIC'				=>	'قوالب أساسية', 
	'TPLS_RE_MSG'				=>	'قوالب التنبية', 
	'TPLS_RE_USER'				=>	'قوالب متعلقة بالمستخدم', 
	'TPLS_RE_OTHER'				=>	'قوالب أخرى',
	'STYLE_NOW_IS_DEFAULT' 		=> 'تم تعيين الاستايل "%s" ستايل افتراضي',
	'STYLE_DIR_NOT_WR'			=>	'مجلد الستايل %s غير قابل للكتابة , أي انك لا تستطيع التعديل على القوالب إلا بعد تعديل تصريح المجلد إلى تصريح كتابة كـ 777.',
	'TPL_PATH_NOT_FOUND' 		=> 'القالب  %s غير موجود !',
	'NO_CACHED_STYLES'			=> 'لا يوجد أي قوالب مخزنة حالياً !',
	'SEARCH_FOR'				=> 'ابحث عن',
	'REPLACE_WITH'				=> 'استبدل بـ',
	'REPLACE_TO_REACH'			=> 'حتى الكود تصل الكود التالي',
	'ADD_AFTER'					=> 'أضف بعدها',
	'ADD_AFTER_SAME_LINE'		=> 'أضف بعده في نفس السطر',
	'ADD_BEFORE'				=> 'أضف قبله',
	'ADD_BEFORE_SAME_LINE'		=> 'أضف قبله في نفس السطر',
	'ADD_IN'					=> 'أضف فيه بعد إنشاءه',
	'CACHED_STYLES_DELETED'		=>'تم حذف القوالب المخزنة .',
	'CACHED_STYLES'				=>' القوالب المخزنة',
	'DELETE_CACHED_STYLES'		=>'حذف القوالب المخزنة',
	'CACHED_STYLES_DISC'		=>	'القوالب المخزنة هي تعديلات متبقية من الإضافات لم يتم اضافتها اما بسبب الصلاحيات او عدم وجود كلمة البحث المناسبة ، لذا يجب عليه تركيبها بقوالبك يدوياً %s .',
	'UPDATE_NOW_S'				=>	'انت تستخدم نسخة قديمة من كليجا، قم بالترقية فوراً، نسختك الحالية هي %1$s والنسخة الجديدة هي %2$s .',
	'ADD_NEW_EXT'				=> 'أضف امتداد جديد',
	'ADD_NEW_EXT_EXP'			=> 'قم بكتابة الامتداد , واختيار مجموعته',
	'EMPTY_EXT_FIELD'			=>	'حقل الامتداد فارغ!', 
	'NEW_EXT_ADD'				=>	'تم إضافة الامتداد الجديد ',
	'NEW_EXT_EXISTS_B4'			=>	'الامتداد الجديد %s موجود مسبقاً !.',
	'CONFIG_WRITEABLE' 			=> 'ملف config.php قابل للكتابة حالياً ونوصي وبشدة تغيير التصريح له لـ 640 أو على الأقل 644.',
	'NO_KLEEJA_COPYRIGHTS'		=> 'يبدوا أنك أزلت حقوق كليجا من الفوتر بالخطأ،  قم بإرجاعها لكي نستطيع إكمال التطوير وتقديم السكربت مجانا، لو أردت شراء رخصة إزالة الحقوق  %s.',
	'USERS_NOT_NORMAL_SYS'		=> 'نظام العضويات الحالي ليس النظام العادي ، أي أن الأعضاء الحاليين لا يمكن تحريرهم من هنا بل من السكربت الذي تم ربط كليجا به، هؤلا الأعضاء يتبعون لنظام العضويات العادي.',
	'DIMENSIONS_THMB'			=> 'أبعاد المصغرات',
	'ADMIN_DELETE_FILE_ERR'		=> 'حدث خطا غير متوقع اثناء محاولة حذف الملفات .. !',
	'NO_FILE_USER'				=> 'لا يوجد أي ملفات في حساب العضوية حتى الآن .. !',
	'ADMIN_DELETE_FILE_OK'		=> 'تم حذف كافة ملفات العضو',
	'ADMIN_DELETE_FILES'		=> 'حذف كل ملفات العضوية',
	
	'KLJ_MORE_PLUGINS'			=> array('قم بالحصول على الكثير من الاضافات من مركز الاضافات في موقع كليجا ,<a target="_blank" href="http://www.kleeja.com/plugins/">إضغط هنا ..! </a> .',
									'هل أنت مطور ؟ هل قمت بتطوير اضافات لكليجا وتريد عرضها للأخرين في مركز كليجا للاضافات ؟ اذن <a target="_blank" href="http://www.kleeja.com/plugins/">إضغط هنا ..! </a>. ',
									),
	'KLJ_MORE_STYLES'			=> array('قم بالحصول على الكثير من الستايلات من معرض الستايلات في موقع كليجا ,<a target="_blank" href="http://www.kleeja.com/styles/">إضغط هنا ..! </a> .',
									'هل أنت مصمم ؟ هل تريد عرض ستايلاتك في معرض كليجا للجميع ؟ , إذن <a target="_blank" href="http://www.kleeja.com/styles/">إضغط هنا ..! </a> .',
									),
	'BCONVERTER' 				=> 'آلة حاسبة لتحويل الأحجام',
	'NO_HTACCESS_DIR_UP'		=> 'لايوجد ملف .htaccess في مجلد التحميل  "%s", هذا يعني انه لو تم رفع اكواد خبيثه فسيتمكن المخترق  من تشغيلها وقد يحدث امور لاتحمد عقباها !',
	'NO_HTACCESS_DIR_UP_THUMB'	=> 'لايوجد ملف .htaccess في مجلد المصغرات داخل مجلد التحميل "%s", هذا يعني انه لو تم رفع اكواد خبيثه فسيتمكن المخترق المخترق  من تشغيلها وقد يحدث امور لاتحمد عقباها  !',
	'COOKIE_DOMAIN' 			=> 'نطاق الكوكيز',
	'COOKIE_NAME' 				=> 'بادئة الكوكيز',
	'COOKIE_PATH' 				=> 'مسار الكوكيز',
	'COOKIE_SECURE'				=> 'تفعيل الكوكيز الآمنه',
	'ADMINISTRATORS'			=> 'بحث عن جميع العضويات التي تملك صلاحيات دخول لوحة التحكم .. !',
	'SHOWFILESBYIP'				=> 'عرض  ملفات الـ IP', 
	'DELETEALLRES'				=> 'حذف كل ملفات البحث هذا',
	'ADMIN_DELETE_FILES_OK'     => 'تم حذف %s ملف بنجاح',
	'ADMIN_DELETE_FILES_NOF'	=> 'لاتوجد نتائج للقيام بعملية الحذف',
	'NOT_EXSIT_USER'			=> 'عفواً العضو الذي تبحث عنه غير موجود في قاعدة البيانات .. ربما أنك تحاول الوصول لعضوية غير موجودة او محذوفة !!!!',
	'ADMIN_DELETE_NO_FILE'		=> 'هذا المستخدم لا يملك ملفات لحذفها ! .',
	'CONFIG_KLJ_MENUS_OTHER'	=> 'خيارات اخرى',
	'CONFIG_KLJ_MENUS_GENERAL'	=> 'خيارات عامة',
	'CONFIG_KLJ_MENUS_ALL'		=> 'عرض كل الخيارات',
	'CONFIG_KLJ_MENUS_UPLOAD'	=> 'اعدادات التحميل',
	'CONFIG_KLJ_MENUS_INTERFACE'=> 'خيارات الواجهه والتصميم',
	'CONFIG_KLJ_MENUS_ADVANCED' => 'خيارات متقدمة',
	'DELF_CAUTION'				=> '<span class="delf_caution">تحذير : هذه الخاصيه قد تكون خطره عند وضع ارقام صغيره .</span>',
	'PLUGIN_N_CMPT_KLJ'			=> 'هذه الاضافه غيره متوافقه مع إصدار كليجا الذي تستخدمه ! .',
	'PHPINI_FILESIZE_SMALL'		=> 'اعلى حجم يستطيع المستخدمين تحميله لديك "%1$s" بينما إعدادات الـ PHP لديك فيما يتعلق بـ upload_max_filesize هي فقط "%2$s" , قم برفعها ليستطيع المستخدمين رفع الحجم الذي وضعته.',
	'PHPINI_MPOSTSIZE_SMALL'	=> 'بما أنك سمحت بتحميل "%1$s" ملفات دفعه واحده , فيجب ان ترفع قيمه post_max_size من اعدادات ال PHP بالخادم لما يقارب "%2$s" لتضمن لكليجا عمل أفضل.',
	'NUMPER_REPORT' 			=> 'عدد البلاغات',
	'NO_UP_CHANGE_S'			=> 'لا يوجد أي تتغير في البيانات , وبالتالي لم يتم تحديث البيانات !.',
	'ADD_HEADER_EXTRA' 			=> 'هيدر إضافي',
	'ADD_FOOTER_EXTRA' 			=> 'فوتر إضافي',
	'ADMIN_USING_IE6'			=> 'أنت تستخدم متصفح "انترنت اكسبلور 6" هذا رغم انك صاحب موقع وتعرف اكثر ممايعرفه المستخدمون العاديون ! قم بترقيه متصفحك او استخدم فيرفوكس الآن.',
	'FOOTER_TXTS'				=> array('PLUGINS'=> 'الاضافات', 'STYLES'=>'الستايلات', 'BUGS'=>'مركز التبليغ عن الأخطاء'),
	'T_ISNT_WRITEABLE'			=> 'لايمكنك تعديل هذا القالب <strong>%s</strong>. (غير قابل للكتابة)',

	'T_CLEANING_FILES_NOW'		=> 'جاري تنفيذ عمليه حذف الملفات الخامله حالياً على دفعات تفادياً للضغط ,وقت العمليه يعتمد على عدد الملفات وحجمها ...',

	'HOW_UPDATE_KLEEJA'			=> 'كيف تقوم بتحديث كليجا ؟',
	'HOW_UPDATE_KLEEJA_STEP1'	=> 'توجه الى موقع سكربت كليجا الرسمي <a target="_blank" href="http://www.kleeja.com/">Kleeja.com</a> ثم توجه إلى صفحة التحميل وقم بتنزيل آخر نسخه صدرت من الاسكربت في حال توفر سكربت الترقيه قم بتحميله',
	'HOW_UPDATE_KLEEJA_STEP2'	=> ' بعد ذلك قم بفك الضغط عن الملف الذي قمت بتحميله ثم رفعه الى موقعك لاستبدال الملفات القديمه بالجديده <b> عدا ملف config.php</b>.',
	'HOW_UPDATE_KLEEJA_STEP3'	=> 'بعد اتمام الخطوه السابقه بنجاح ,  قم بطلب العنوان التالي للتحديث قاعدة بيانـات الاسكربت:',
	'RETURN_TEMPLATE_BK'		=> 'استرجاع اي قالب للأصل',
	'RETURN_TEMPLATE_BK_EXP'	=> 'قم باختيار اي قالب لاسترجاعه للمحتوى الاصلي قبل التعديل , القوالب هذه تتبع للستايل الافتراضي',
	'TPL_BK_RETURNED'			=> 'تم إستعادة النسخه الاصليه للقالب %s.',

	'REPLACE_WHOLW_TPL'			=> 'استبدل كامل محتويات القالب',
	'DEPEND_ON_NO_STYLE_ERR'	=> 'هذا الستايل يعتمد على ستايل "%s" غير الموجود لديك ضمن الستايلات !.', 
	'PLUGINS_REQ_NO_STYLE_ERR'	=> 'هذا الستايل يتطلب ان تكون الاضافه/الاضافات [ %s ] مثبته لديك , ثبتها وحاول من جديد !.', 
	'PLUGIN_REQ_BY_STYLE_ERR'	=> 'الستايل الافتراضي الحالي يتطلب هذه الاضافه , لتستطيع ازالتها او تعطيلها يجب اولا تغيير الستايل.', 
	'KLJ_VER_NO_STYLE_ERR'		=> 'هذا الستايل يتطلب على الاقل اصدار %s من كليجا .',
	'KLJ_STYLE_INFO'			=> 'معلومات الستايل',
	'STYLE_NAME'				=> 'اسم الستايل',
	'STYLE_COPYRIGHT'			=> 'حقوق الستايل',
	'STYLE_VERSION'				=> 'اصدار الستايل',
	'STYLE_DEPEND_ON'			=> 'يعتمد على ستايل',
	'MESSAGE_NONE'				=> 'حتى الآن لا يوجد أي رسائل  ..',
	'KLEEJA_TEAM'				=> 'فريق تطوير كليجا',
	'ERR_SEND_MAIL'				=> 'هناك خطأ بالارسال , حاول مجدداً .. !',
	'FIND_IP_FILES' 			=> 'تم العثور على',
	'ALPHABETICAL_ORDER_FILES'	=> 'ترتيب الملفات حسب التسلسل الأبجدي', 
	'ORDER_SIZE'				=> 'ترتيب الملفات حسب أحجامها من الأكبر حتى الأصغر',
	'ORDER_TOTAL_DOWNLOADS'		=> 'ترتيب الملفات حسب عدد مرات التحميل',
	'COMMA_X'					=> '<p class="live_xts">افصل بين الامتدادات باستخدام الفاصلة (<font style="font-size:large"> , </font>)</p>', 
	'NO_SEARCH_WORD'			=> 'لم تقم بكتابة كلمة بحث !',
	'GUESTSECTOUPLOAD'			=> 'عدد الثواني بين كل عملية رفع للزائر',
	'USERSECTOUPLOAD'			=> 'عدد الثواني بين كل عملية رفع للعضو',
	'ADM_UNWANTED_FILES'		=> 'يبدوا انك قمت بالترقيه من نسخه سابقة وبسبب اختلاف اسماء بعض الملفات ستلاحظ وجود ازرار متكرره بلوحة التحكم . <br /> لحل المشكلة قم بإزالة كافة الملفات في المسار "includes/adm" واعادة رفعها من جديد. ايضا قم بحذف ملف admin.php من المجلد الرئيسي اذا وجد.',
	'ADVANCED_SETTINGS_CATUION' => 'تحذير : يجب ان تعرف ماهي هذه الاعدادات قبل ان تقوم بالتعديل عليها',
	'HTML_URLS_ENABLED_NO_HTCC'	=> 'لقد قمت بتفعيل روابط الهتمل ولكنك اهملت نقل ملف الضبط الموجود في مجلد docs/.htaccess.txt لمجلد كليجا الرئيسي واعادة تسميته بـ ".htaccess". اذا لم تفهم شيئاً من هذا الكلام قم بالسؤال في الدعم الفني لكليجا او قم بتعطيل روابط الهتمل .',	
	'PLUGIN_WT_FILE_METHOD'		=> 'بعض الاضافات تتطلب تعديل الملفات او اضافه ملفات جديده, اختر الطريقة التي تريدها لتولي امر الملفات :',
	'PLUGIN_ZIP_FILE_METHOD'	=> 'قم بإعطائي الملفات المعدله والجديده لاقوم برفعها واستبدالها بنفسي يدوياً.',
	'PLUGIN_FTP_FILE_METHOD'	=> 'مباشره باستخدام معلومات حساب FTP.',
	'PLUGIN_FTP_HOST'			=> 'خادم الـ FTP',
	'PLUGIN_FTP_USER'			=> 'اسم المستخدم لـ FTP',
	'PLUGIN_FTP_PASS'			=> 'كلمة المرور لـ FTP',
	'PLUGIN_FTP_PATH'			=> 'مسار السكربت على الـ FTP',
	'PLUGIN_FTP_PORT'			=> 'منفذ الـ FTP <small>(غالبا هو 21 لذا ان كنت غير متأكد دعه كما هو.)</small>',
	'PLUGIN_CONFIRM_ADD'		=> 'انتبه, الاضافات هي تعديلات برمجيه على السكربت و قد تكون ضاره احيانا , لذا ان كنت غير متأكد من مصدر الاضافه ولم تقم بتحميلها من موقع كليجا فالافضل ان تراجع نفسك الآن . هل حقا تريد التثبيت ؟',
	'PLUGIN_ADDED_ZIPPED'		=> 'لقد تم تثبيت الاضافه, لاكمال عملية التثبيت قم %1$sبتحميل%2$s الملفات المعدلة و استبدالها يدوياً. عدم استبدال الملفات المعدله يعني عدم تركيب الاضافه بشكل جيد.',
	'PLUGIN_ADDED_ZIPPED_INST'	=> 'لقد تم تثبيت الاضافه, لاكمال عملية التثبيت قم %1$sبتحميل%2$s الملفات المعدلة و استبدالها يدوياً. عدم استبدال الملفات المعدله يعني عدم تركيب الاضافه بشكل جيد. <br /> ايضا يجب ان تقوم بـ %3$sقراءة%4$s تعليمات الاضافه لمعلومات اكثر. تعليمات الاضافة يمكن قراءتها لاحقاً من صفحة الاضافات.',
	'PLUGIN_DELETED_ZIPPED'		=> 'لقد تم حذف الاضافة, ليكتمل الحذف قم بـ%1$sتحميل%2$s الملفات المعدله واستبدالها يدوياً.', 
	'PLUGINS_CHANGES_FILES'		=> 'ملفات معدله من تركيب الاضافات', 
	'PLUGINS_CHANGES_FILES_EXP'	=> 'هذه الملفات هي ملفات مضغوطه تحوي الملفات المعدله التي تم تعديلها خصيصا لبعض الاضافات , يجب ان تقوم بتحميلها من هنا واستبدال الملفات بكليجا فيها , تستطيع مسحها عند الانتهاء.',
	'LOADING'					=> 'جاري التنفيذ',
	'ERROR_AJAX'				=> 'هناك خطأ اما بسبب بطأ الاتصال او مشكلة فنية , حاول مجدداً!.',
	'MORE'						=> 'اكثر',
	'MENU'						=> 'القائمة',
	'WELCOME'					=> 'مرحباً',
));
