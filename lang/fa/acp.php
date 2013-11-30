<?php
//
// kleeja language, admin
// Persian
// By:Dverbame  
// Persian Rapidleech Center  | www.dverleech.com
//

if (!defined('IN_COMMON'))
	exit;

if (empty($lang) || !is_array($lang))
	$lang = array();


$lang = array_merge($lang, array(
	'U_NOT_ADMIN' 			=> 'شما دسترسي مديريتي نداريد.',
	'UPDATE_CONFIG' 		=> 'بروزرساني تنظيمات',
	'NO_CHANGE' 			=> 'بدون تغيير',
	'CHANGE_MD5' 			=> 'تغيير بوسيله MD5',
	'CHANGE_TIME' 			=> 'تغيير بوسيله زمان',
	'SITENAME' 				=> 'نام سایت',
	'SITEMAIL' 				=> 'ادرس پست الکترونيکي',
	'SITEMAIL2' 			=> 'ادرس پست الکترونيکي گزارشات',
	'SITEURL' 				=> 'ادرس اينترنتي سايت به همراه / در پايان',
	'FOLDERNAME' 			=> 'نام پوشه , فايل هاي اپلودي',
	'PREFIXNAME' 			=> 'پيشوند فايل ها <small>( همچنين ميتوانيد از {rand:4} , {date:d_Y} هم استفاده کنيد.)</small>',
	'FILESNUM' 				=> 'تعداد فيلد هاي اپلود ',
	'FILESNUM_SHOW' 		=> 'نمايش همه فيلد هاي اپلود',
	'SITECLOSE' 			=> 'بستن سايت',
	'CLOSEMSG' 				=> 'پیامی که هنگام بستن سایت نمایش داده میشود',
	'DECODE' 				=> 'تغيير نام فايل',
	'SEC_DOWN' 				=> 'زمان (ثانيه) قبل از دانلود',
	'STATFOOTER' 			=> 'نمايش امار صفحه در فوتر',
	'GZIP' 					=> 'استفاده از gzip',
	'GOOGLEANALYTICS' 		=> '<a href="http://www.google.com/analytics" target="_kleeja"><span style="color:orange">Google</span> Analytics</a>',
	'WELCOME_MSG' 			=> 'پيام خوش امد گويي',
	'USER_SYSTEM' 			=> 'سيستم کاربران (سيستم متصل به اپلود سنتر)',
	'ENAB_REG' 				=> 'اجازه عضويت',
	'TOTAL_SIZE' 			=> 'بيشترين حجم اپلود [Mg]',
	'THUMBS_IMGS' 			=> 'فعال کردن پيشنمايش تصاوير (تصاوير بند انگشتي)',
	'WRITE_IMGS' 			=> 'فعال کردن نشانه گذاري تصاوير',
	'ID_FORM' 				=> 'نحوه ادرس دهي فايل',
	'IDF' 					=> 'شناسه فايل در ديتا بيس',
	'IDFF' 					=> 'نام فايل',
	'IDFD' 					=> 'مستقيم',
	'DEL_URL_FILE' 			=> 'فعال کردن قابليت ارائه لينک حذف فايل',
	'WWW_URL' 				=> 'فعال کردن اپلود از ادرس',
	'ALLOW_STAT_PG' 		=> 'فعال کردن صفحه امار ها',
	'ALLOW_ONLINE' 			=> 'فعال کردن قابليت -چه کسي انلاين است؟ -',
	'MOD_WRITER' 			=> 'دستورات بازنويسي',
	'MOD_WRITER_EX' 		=> 'لينک هاي HTML..',
	'DEL_F_DAY' 			=> 'حذف فايل هاي بلا استفاده پس از ',
	'NUMFIELD_S' 			=> 'شما بايد براي برخي از فيلد ها فقط از اعداد استفاده نماييد.',
	'CONFIGS_UPDATED' 		=> 'تنظيمات با موفقيت بروز شدند',
	'UPDATE_EXTS' 			=> 'بروز رساني پسوند ها',
	'EXT_DELETED'			=> 'پسوند با موفقيت حذف شد.',
	'E_EXTS' 				=> 'نکته : حجم ها بر اساس کيلو بايت ميباشند.</i>',
	'UPDATED_EXTS' 			=> 'پسوند ها با موفقيت بروز شدند.',
	'UPDATE_REPORTS' 		=> 'بروز رساني گزارشات',
	'E_CLICK' 				=> 'يکي را براي نمايش انتخاب کنيد.',
	'REPLY' 				=> '[ پاسخ ]',
	'REPLY_REPORT' 			=> 'پاسخ در گزارش',
	'U_REPORT_ON' 			=> 'براي گزارش شما درمورد ',
	'BY_EMAIL' 				=> 'بوسيله ايميل ',
	'ADMIN_REPLIED' 		=> 'پاسخ مديريت',
	'CANT_SEND_MAIL' 		=> 'ناتوان در پاسخ توسط ايميل',
	'IS_SEND_MAIL' 			=> 'پاسخ ارسال شد.',
	'REPORTS_UPDATED' 		=> 'گزارشات بروز شدند.',
	'UPDATE_CALSS' 			=> 'بروز رساني پيام ها',
	'REPLY_CALL' 			=> 'پاسخ به پيام',
	'REPLIED_ON_CAL' 		=> 'درباره پيام شما ',
	'CALLS_UPDATED' 		=> 'پيام ها با موفقيت بروز رساني شدند.',
	'FOUNDER' 				=> 'موسس',
	'UPDATE_USERS' 			=> 'بروز رساني کاربران',
	'USER_UPDATED' 			=> 'اطلاعات کاربران با موفقيت بروز شدند.',
	'E_BACKUP' 				=> 'لطفا جداولي که ميخواهيد از انها پشتيباني تهيه کنيد را انتخاب کنيد:',
	'TAKE_BK' 				=> 'تهيه پشتيبان',
	'REPAIRE_TABLE' 		=> '[جداول] تعمير شدند. ',
	'REPAIRE_CACHE' 		=> 'کش با موفقيت پاک شد / بروز رساني شد.',
	'KLEEJA_CP' 			=> '[ کليجا ] مديريت',
	'GENERAL_STAT' 			=> 'امار عمومي',
	'OTHER_INFO' 			=> 'ديگر اطلاعات',
	'AFILES_NUM' 			=> 'مجموع فايل ها',
	'AFILES_SIZE' 			=> 'مجموع حجم فايل ها',
	'AFILES_SIZE_SPACE' 	=> 'فضاي مصرف شده تا کنون',
	'AUSERS_NUM' 			=> 'مجموع کاربران',
	'LAST_GOOGLE' 			=> 'اخرين بازديد از گوگل',
	'GOOGLE_NUM' 			=> 'ورودي هاي گوگل',
	'LAST_BING' 			=> 'اخرين بازديد از بينگ',
	'BING_NUM' 			    => 'ورودي هاي بينگ',
	'KLEEJA_CP_W' 			=> 'سلام! به پنل مديريت خوش امديد!',
	'PHP_VER' 				=> 'ورژن PHP ',
	'MYSQL_VER' 			=> 'ورژن MYSQL',
	'LOGOUT_CP_OK' 			=> 'دوره زماني شما با موفقيت پاک سازي شد...',
	'R_CONFIGS' 			=> 'تنظيمات عمومي',
	'R_CPINDEX' 			=> 'صفحه اصلي مديريت',
	'R_EXTS' 				=> 'تنظيمات پسوند ها',
	'R_FILES' 				=> 'کنترل فايل ها',
	'R_REPORTS' 			=> 'گزارشات',
	'R_CALLS' 				=> 'پيام ها',
	'R_USERS' 				=> 'کاربران و گروه ها',
	'R_BCKUP' 				=> 'پشتيباني گيري',
	'R_REPAIR' 				=> 'تعميرات',
	'R_LGOUTCP' 			=> 'پاک سازي دوره ها',
	'R_BAN' 				=> 'کنترل منع',
	'BAN_EXP1' 				=> 'ويرايش اي پي هاي منع شده و افزودن ...',
	'BAN_EXP2' 				=> 'براي بن کردن يک رنج اي پي از * استفاده نماييد و براي جداسازي اي پي ها از (|) استفاده نماييد.',
	'UPDATE_BAN' 			=> 'ذخيره تغييرات',
	'BAN_UPDATED' 			=> 'تغييرات با موفقيت ذخيره شدند',
	'R_RULES' 				=> 'قوانين',
	'RULES_EXP' 			=> 'شما ميتوانيد توسط اين قسمت قوانين سيستم خود را بروز رساني و يا اضافه نماييد.',
	'UPDATE_RULES' 			=> 'بروز رساني',
	'RULES_UPDATED' 		=> 'قوانين با موفقيت بروز شدند.',
	'R_SEARCH' 				=> 'جست و جوي پيشرفته',
	'SEARCH_FILES' 			=> 'جست وجو براي فايل هاي',
	'SEARCH_SUBMIT' 		=> 'جست وجو',
	'LAST_DOWN' 			=> 'اخرين دانلود ',
	'WAS_B4' 				=> 'قبل از ',
	'SEARCH_USERS' 			=> 'جست وجو براي کاربر',
	'R_IMG_CTRL' 			=> 'کنترل تصاوير',
	'ENABLE_USERFILE' 		=> 'فعال سازي فايل هاي کاربران',
	'R_EXTRA' 				=> 'قالب هاي اضافي',
	'EX_HEADER_N' 			=> 'هدر اضافي... هدري که در زير هدر اصلي نمايش داده خواهد شد.',
	'EX_FOOTER_N' 			=> 'فوتر اضافي...فوتري که در بالاي فوتر اصلي نمايش داده خواهد شد.',
	'UPDATE_EXTRA' 			=> 'بروز رساني افزوده هاي قالب',
	'EXTRA_UPDATED' 		=> 'افزوده هاي قالب با موفقيت بروز شدند.',
	'R_STYLES' 				=> 'استايل ها',
	'STYLES_EXP' 			=> 'قالبي را براي حذف يا ويرايش انتخاب نماييد.',
	'SHOW_TPLS' 			=> 'نمايش قالب ها',
	'TPL_UPDATED' 			=> 'قالب بروز رساني شد...',
	'TPL_DELETED' 			=> 'قالب حذف گرديد...',
	'NO_TPL' 		=> 'شما هيچ قالبي انتخاب نکرديد...',
	'NO_TPL_NAME_WROTE' 	=> 'لطفا نام قالب را وارد نماييد!',
	'ADD_NEW_STYLE' 		=> 'ايجاد يک استايل جديد.',
	'EXPORT_AS_XML' 		=> 'خروجي گرفتن به صورت XML ',
	'NEW_STYLES_EXP' 		=> 'اپلود استايل از فايل "klj"',
	'NEW_STYLE_ADDED' 		=> 'استايل با موفقيت افزوده شد.',
	
	'ERR_IN_UPLOAD_XML_FILE' 		=> '(ERR:XML) خطا در اپلود...',
	'ERR_UPLOAD_XML_FILE_NO_TMP' 	=> '(ERR:NOTMP) خطا در اپلود...',
	'ERR_UPLOAD_XML_NO_CONTENT' 	=> 'فايل انتخاب شده خالي ميباشد!',
	'ERR_XML_NO_G_TAGS' 			=> 'تگ هاي مورد نياز فايل موجود نميباشند!',
	'STYLE_DELETED' 				=> 'استايل با موفقيت حذف شد.',
	'STYLE_1_NOT_FOR_DEL' 			=> 'شما قادر به حذف استايل پيش فرض نيستيد!',
	'ADD_NEW_TPL' 					=> 'افزودن قالب جديد!',
	'ADD_NEW_TPL_EXP' 				=> 'براي قالب جديد, نامي انتخاب کنيد.',
	'TPL_CREATED' 					=> 'قالب جديد با موفقيت ايجاد شد...',
	'R_LANGS' 						=> 'جملات و لغات',
	'WORDS_UPDATED' 				=> 'کلمات با موفقيت بروز رساني شدند.',
	'R_PLUGINS' 					=> 'افزونه ها',
	'PLUGINS_EX' 				=> 'حذف يا بروزرساني افزونه ها در اين بخش انجام ميشود.',
	'ADD_NEW_PLUGIN' 			=> 'افزودن افزونه',
	'ADD_NEW_PLUGIN_EXP' 		=> 'اپلود افزونه توسط فايل XML',
	'PLUGIN_DELETED' 			=> 'افزونه حذف شد...',
	'PLGUIN_DISABLED_ENABLED' 	=> 'افزونه فعال / غير فعال شد.',
	'NO_PLUGINS' 				=> 'در حال حاضر افزونه اي نصب نيست.',
	'NEW_PLUGIN_ADDED' 			=> 'افزونه اضافه شد... <br /> توجه : برخي از افزونه هاي به همراه فايل هاي اضافي ارائه ميشوند که اين فايل ها نياز دارند به روت اصلي کليجا انتقال داده شوند.',
	'PLUGIN_EXISTS_BEFORE' 		=> 'اين افزونه با ورژن بالاتر از قبل موجود ميباشد.!',
	'PLUGIN_UPDATED_SUCCESS' 	=> 'افزونه با موفقيت بروز رساني شد.!',
	'R_CHECK_UPDATE' 			=> 'چک کردن براي بروز رساني',
	'ERROR_CHECK_VER' 			=> 'خطا ! مشل در بروز رساني , لطفا بعدا تلاش نماييد.',
	'UPDATE_KLJ_NOW' 			=> 'شما بايد ورژن خود را بروز رساني کنيد. براي اطلاعات بيشتر به سايت مرجع مراجعه نماييد.',
	'U_LAST_VER_KLJ' 			=> 'شما از اخرين نسخه کليجا استفاده ميکنيد.',
	'U_USE_PRE_RE' 				=> 'شما از نسخه بتا استفاده ميکنيد ,براي گزارش هر گونه خطا يا باگ  <a href="http://www.kleeja.com/bugs/">اينجا را</a> کليک نماييد.',
	'STYLE_IS_DEFAULT'			=> 'استايل پيش فرض',
	'MAKE_AS_DEFAULT'			=> 'انتخاب به عنوان پيش فرض',
	'TPLS_RE_BASIC'				=> 'قالب هاي پيش فرض', 
	'TPLS_RE_MSG'				=> 'قالب هاي اطلاعيه', 
	'TPLS_RE_USER'				=> 'قالب هاي کاربر', 
	'TPLS_RE_OTHER'				=> 'ديگر قالب ها',
	'STYLE_NOW_IS_DEFAULT' 		=> 'قالب "%s" به عنوان , قالب پيش فرض انتخاب شد.',
	'STYLE_DIR_NOT_WR'			=> 'پوشه قالب %s داراي سطح دسترسي مناسب نميباشد, لذا شما قادر به ويرايش قالب نيستيد. لطفا دسترسي اين پوشه را به 777  تغيير دهيد.',
	'TPL_PATH_NOT_FOUND' 		=> 'قالب %s يافت نشد.',
	'NO_CACHED_STYLES'			=> 'در حال حاضر کشي براي قالب ها وجود ندارد.',
	'SEARCH_FOR'				=> 'جست وجو براي',
	'REPLACE_WITH'				=> 'جا به جا کن با ',
	'REPLACE_TO_REACH'			=> 'تا زماني که به کد بعدي رسيدي',
	'ADD_AFTER'					=> 'اضافه کن بعد از',
	'ADD_AFTER_SAME_LINE'		=> 'بعد از اين اضافه کن در همان خط',
	'ADD_BEFORE'				=> 'اضافه کن قبل از',
	'ADD_BEFORE_SAME_LINE'		=> 'قبل از اين اضافه کن در همان خط',
	'ADD_IN'					=> 'پس از ساخته شدن به ان اضافه کن.',
	'CACHED_STYLES_DELETED'		=> 'استايل کش شده حذف شد.!',
	'CACHED_STYLES'				=> 'استايل هاي کش شده',
	'DELETE_CACHED_STYLES'		=> 'حذف استايل هاي کش شده.',
	'CACHED_STYLES_DISC'		=> 'قالب هاي باقي مانده به دليل داشتن پاره اي از اطلاعات , و يا ناتواني در سطح دسترسي به تغيير پيدا نکردند, شما بايد اين کار را به صورت دستي انجام دهيد.',
	'UPDATE_NOW_S'				=> 'نسخه کليجا شما قديمي ميباشد.لطفا ان را بروز رساني کنيد. ورژن فعلي شما %1$s ميباشد و جديدترين نسخه حاضر   %2$s است',
	'ADD_NEW_EXT'				=> 'افزودن پسوند جديد',
	'ADD_NEW_EXT_EXP'			=> 'پسوند مورد نظر را وارد کنيد تا به اين گروه افزوده شود.',
	'EMPTY_EXT_FIELD'			=> 'فيلد پسوند خالي ميباشد.', 
	'NEW_EXT_ADD'				=> 'پسوند جديد افزوده شد. ',
	'NEW_EXT_EXISTS_B4'			=> 'پسوند %s از قبل موجود ميباشد.',
	'NOT_SAFE_FILE'				=> 'فايل "%s" ظاهرا داراي مشکل امنيتي ميباشد.',
	'CONFIG_WRITEABLE'			=> 'فايل config.php در حال حاضر پرميشن کامل براي دسترسي دارد.  به شدت توصيه ميکنيم سطح دسترسي را به 640 و يا حداقل 644 تغيير دهيد.',
	'NO_KLEEJA_COPYRIGHTS'		=> 'شما کپي رايت را از فوتر حذف کرديد, براي ادامه و استفاده از امکانات تيم توسعه ان را برگردانيد. شما ميتوانيد يک لايسنس حذف  کپي رايت را خريداري نماييد %s.',
	'USERS_NOT_NORMAL_SYS'		=> 'سيستم فعلي شما , يک سيستم معمولي نميباشد.',
	'DIMENSIONS_THMB'			=> 'ابعاد تصاوير بند انگشتي',
	'ADMIN_DELETE_FILE_ERR'		=> 'خطايي در هنگام حذف فايل هاي کاربر رخ داد! ',
	'ADMIN_DELETE_FILE_OK'		=> 'انجام شد! ',
	'ADMIN_DELETE_FILES'		=> 'حذف کليه ي فايل هاي کاربر!',
	
	'KLJ_MORE_PLUGINS'			=> array('دريافت افزونه هاي بيشتر از منبع افزونه هاي کليجا. ,<a target="_blank" href="http://www.kleeja.com/store/">اينجا را کليک نماييد.</a> .',
								'ايا شما يک توسعه دهنده هستيد ؟ و ميخواهيد افزونه هاي خود را در کليجا به اشتراک بگذاريد ؟  <a target="_blank" href="http://www.kleeja.com/store/">اينجا را کليک نماييد</a>. ',
								),
	'KLJ_MORE_STYLES'			=> array('دريافت استايل هاي بيشتر از گالري کليجا. ,<a target="_blank" href="http://www.kleeja.com/store/">اينجا را کليک نماييد.</a> .',
								'ايا شما يک طراح هستيد؟ و ميخواهيد استايل هاي خود را در کليجا به اشتراک بگذاريد؟ <a target="_blank" href="http://www.kleeja.com/store/">اينجا را کليک نماييد.</a> .',
								),
	'BCONVERTER' 				=> 'مبدل بايت',
	'NO_HTACCESS_DIR_UP'		=> 'فايل .htaccess در پوشه  "%s" موجود نميباشد! و اين براي امنيت سايت شما بسيار خطر ساز است.',
	'NO_HTACCESS_DIR_UP_THUMB'	=> 'فايل .htaccess در پوشه تصاوير بند انگشتي موجود نميباشد! اين براي امنيت سايت شما بسيار خطر ساز است.',
	'COOKIE_DOMAIN' 			=> 'کوکي دامنه',
	'COOKIE_NAME' 				=> 'پيشوند کوکي',
	'COOKIE_PATH' 				=> 'مسير کوکي',
	'COOKIE_SECURE'				=> 'کوکي محافظت شده',
	'ADMINISTRATORS'			=> 'مديران',
	'DELETEALLRES'				=> 'حذف همه نتايج',
	'ADMIN_DELETE_FILES_OK'     => 'فايل %s با موفقيت حذف شد.',
	'ADMIN_DELETE_FILES_NOF'	=> 'فايلي براي حذف موجود نميباشد.',
	'NOT_EXSIT_USER'			=> 'متاسفانه ...کاربري که شما به دنبال ان هستيد در ديتا بيس ما وجود ندارد!!!',
	'ADMIN_DELETE_NO_FILE'		=> 'اين کاربر , فايلي براي حذف ندارد!!!',
	'CONFIG_KLJ_MENUS_OTHER'	=> 'ديگر تنظيمات',
	'CONFIG_KLJ_MENUS_GENERAL'	=> 'تنظيمات عمومي',
	'CONFIG_KLJ_MENUS_ALL'		=> 'نمايش همه تنظيمات',
	'CONFIG_KLJ_MENUS_UPLOAD'	=> 'تنظيمات اپلود',
	'CONFIG_KLJ_MENUS_INTERFACE'=> 'تنظيمات ظاهري و طراحي',
	'CONFIG_KLJ_MENUS_ADVANCED' => 'تنظيمات پيشرفته',
	'DELF_CAUTION'				=> '<span class="delf_caution">اخطار : ممکن است در هنگام استفاده از اعداد کوچک , خطر ساز باشد.</span>', 
	'PLUGIN_N_CMPT_KLJ'			=> 'اين افزونه با نسخه کليجاي شما سازگار نيست.',
	'PHPINI_FILESIZE_SMALL'		=> 'بيشترين حجم اجازه داده شده براي اپلود  به سرويس شما "%1$s"  انتخاب شده است در حالي که بيشترين حجم قالب اپلود براي پي اچ پي در سرور شما  "%2$s" ميباشد.',
	'PHPINI_MPOSTSIZE_SMALL'	=> 'شما اپلود فايل هاي "%1$s" را مجاز کرديد, اکنون بايد مقدار بيشتري براي post_max_size انتخاب کنيد ',
	'NUMPER_REPORT' 			=> 'تعداد گزارشات',
	'NO_UP_CHANGE_S'			=> 'تغييري رخ نداده است...',
	'ADD_HEADER_EXTRA' 			=> 'هدر اضافي',
	'ADD_FOOTER_EXTRA' 			=> 'فوتر اضافي',
	'ADMIN_USING_IE6'			=> 'شما از مرورگر اينترنت اکسپلورر 6 استفاده ميکنيد, لطفا از مرورگر ديگري استفاده کنيد.',
	'FOOTER_TXTS'				=> array('PLUGINS'=> 'افزونه ها', 'STYLES'=>'استايل ها', 'BUGS'=>'گزارش مشکل'),
	'T_ISNT_WRITEABLE'			=> 'ناتوان در بروزرساني  <strong>%s</strong> قالب. (Unwriteable)',
	'T_CLEANING_FILES_NOW'		=> 'حذف فايل هاي بلا استفاده, اين فرايند ممکن است مدتي به طول بي انجامد.',
	'HOW_UPDATE_KLEEJA'			=> 'چگونه کليجا را اپديت کنم؟',
	'HOW_UPDATE_KLEEJA_STEP1'	=> 'به سايت  اصلي مراجعه کنيد. <a target="_blank" href="http://www.kleeja.com/">Kleeja.com</a> سپس به صفحه دانلود مراجعه کرده و جديدترين نسخه موجود را دانلود نماييد.',
	'HOW_UPDATE_KLEEJA_STEP2'	=> 'فايل ها ار از حالت زيپ خارج کنيد و در پوشه سايت بازنويسي کنيد. <b>به جز فايل config.php</b>.',
	'HOW_UPDATE_KLEEJA_STEP3'	=> 'پس از انجام , به ادرس زير  برويد تا ديتا بيس نيز بروز رساني شود.',
	'RETURN_TEMPLATE_BK'		=> 'بازگرداندن قالب هاي پيشتيبان گيري شده.',
	'RETURN_TEMPLATE_BK_EXP'	=> 'پشتيبان قالبي را انتخاب کنيد تا بازگرداني شود.',
	'TPL_BK_RETURNED'			=> 'پشتيبان قالب %s , بازگرداني شد.',
	'REPLACE_WHOLW_TPL'			=> 'تعويض همه قالب',
	'DEPEND_ON_NO_STYLE_ERR'	=> 'اين استايل بر پايه استايل "%s" ميباشد, که ظاهرا شما ان را نداريد.', 
	'PLUGINS_REQ_NO_STYLE_ERR'	=> 'اين استايل نياز به افزونه [ s% ] دارد, ان را نصب نماييد.', 
	'PLUGIN_REQ_BY_STYLE_ERR'	=> 'استايل پيش فرض به اين افزونه نياز دارد, براي حذف ان بايد استايل  را تعويض کنيد.', 
	'KLJ_VER_NO_STYLE_ERR'		=> 'اين استايل نياز به نسخه %s کليجا يا بالاتر را دارد.',
	'KLJ_STYLE_INFO'			=> 'اطلاعات استايل',
	'STYLE_NAME'				=> 'نام استايل',
	'STYLE_COPYRIGHT'			=> 'کپي رايت',
	'STYLE_VERSION'				=> 'نسخه استايل',
	'STYLE_DEPEND_ON'			=> 'پايه ',
	'MESSAGE_NONE'				=> 'پيامي وجود ندارد...',
	'KLEEJA_TEAM'				=> 'تيم توسعه کليجا',
	'ERR_SEND_MAIL'				=> 'خطا در ارسال ميل, لطفا بعدا تلاش کنيد...!',
	'FIND_IP_FILES' 			=> 'يافت شد',
	'ALPHABETICAL_ORDER_FILES'	=> 'مرتب سازي فايل ها بر اساس الفبا', 
	'ORDER_SIZE'				=> 'مرتب سازي فايل ها بر اساس حجم از بزرگ به کوچک',
	'ORDER_TOTAL_DOWNLOADS'		=> 'مرتب سازي فايل ها بر اساس تعداد دانلود ها', 
	'LIVEXTS'					=> 'پسوند هاي زنده',
	'COMMA_X'					=> '<p class="live_xts">جدا شده توسط کاما (<font style="font-size:large"> , </font>)</p>',
	'NO_SEARCH_WORD'			=> 'شما چيزي در فرم جست و جو تايپ نکرديد!',
	'USERSECTOUPLOAD'			=> 'زمان (ثانيه) بين هر اپلود با اپلود بعدي.',
	'ADM_UNWANTED_FILES'		=> 'ظاهرا شما از نسخه قديمي بروز رساني کرده ايد و به  دليل تفاوت نوع فايل ها شما با مشکل دوگانگي فايل مواجه ميشويد. </ br> براي رفع اين مشکل , کليه ي فايل هاي پوشه "includes/adm" را پاک کرده و مجددا اپلود نماييد.',
	'ADVANCED_SETTINGS_CATUION' => 'اخطار: در صورتي که نميدانيد اين تنظيمات چيست به ان ها دست نزنيد.',
	'HTML_URLS_ENABLED_NO_HTCC'	=> 'شما ادرس دهي بر اساس قوانين htaccess را انتخا کرده ايد. اما  ظاهرا وارد کردن قوانين را فراموش کرده ايد. براي اطلاعات بيشتر به سايت پشتيبان مراجعه نماييد.',	
	'PLUGIN_WT_FILE_METHOD'		=> 'برخي از افزونه ها نياز به ويرايش فايل يا افزودن فايل دارند:',
	'PLUGIN_ZIP_FILE_METHOD'	=> 'فايل جديد يا ويرايش شده را به من بده تا با فايل هاي قبلي جا به جا کنم...',
	'PLUGIN_FTP_FILE_METHOD'	=> 'استفاده از روش اپلود با اف تي پي',	
	'PLUGIN_FTP_EXP'			=> 'شما نميتوانيد بدون دسترسي به اف تي پي فايل مورد نظر را ويرايش کنيد, اطلاعات اف تي پي خود را در زير وارد نماييد.',
	'PLUGIN_FTP_HOST'			=> 'ادرس ميزبان (هاست) FTP',
	'PLUGIN_FTP_USER'			=> 'نام کاربري FTP',
	'PLUGIN_FTP_PASS'			=> 'کلمه عبور FTP',
	'PLUGIN_FTP_PATH'			=> 'پوشه اسکريپت در FTP',
	'PLUGIN_FTP_PORT'			=> 'پورت FTP <small>(معمولا 21 ميباشد, اگر مطمئن نيستيد اين فيلد را خالي بگذاريد.)</small>',
	'PLUGIN_CONFIRM_ADD'		=> 'اخطار!!! اين افزونه تغييراتي در اسکريپت اصلي خواهد داد و اين ممکن است براي امنيت در اينده خطر ساز باشد, لذا از صحت افزونه اطمينان حاصل کنيد.',
	'PLUGIN_ADDED_ZIPPED'		=> 'افزونه افزوده شد. براي کامل شدن فرايند نصب فايل هاي ويرايش شده را به صورت دستي باز نويسي کنيد. فراموشي يا لغو تعويض  فايل ها ممکن است  باعث ناقص شدن افزونه شود.',
	'PLUGIN_ADDED_ZIPPED_INST'	=> 'افزونه افزوده شد. براي کامل شدن فرايند نصب فايل هاي ويرايش شده را به صورت دستي باز نويسي کنيد. فراموشي يا لغو تعويض  فايل ها ممکن است  باعث ناقص شدن افزونه شود. </ br> شما بايد توضيحات افزونه مورد نظر را مطالعه نماييد.',
	'PLUGIN_DELETED_ZIPPED'		=> 'افزونه حذف شد. براي حذف کلي بايد فايل هاي ان را به صورت دستي حذف کنيد.', 
	'PLUGINS_CHANGES_FILES'		=> 'ويرايش فايل ها به عنوان افزونه نصب شده.', 
	'PLUGINS_CHANGES_FILES_EXP'	=> 'اين ها فايل هاي فشرده پشتيبان گيري شده از برخي افزونه هاي ويرايش شده ميباشند, ميتوانيد بعدا ان ها را حذف کنيد.',
	'LOADING'					=> 'در حال بارگذاري',
	'ERROR_AJAX'				=> 'خطايي رخ داده است! لطفا مجددا تلاش کنيد.!',
	'MORE'						=> 'بيشتر ',
	'MENU'						=> 'منو',
	'WELCOME'					=> 'خوش امديد',
	'ENABLE_CAPTCHA'			=> 'فعال کردن کپچا در کليجا!',
	'NO_THUMB_FOLDER'			=> 'ظاهرا شما قابليت تصاوير بند انگشتي را فعال کرديد, اما پوشه %s موجو نميباشد.ان را به صورت دستي ايجاد کنيد.',
	'DELETE_EARLIER_30DAYS'		=> 'حذف فايل هاي قديمي تر از 30 روز',
	'DELETE_ALL'				=> 'حذف همه',
	'DELETE_PROCESS_QUEUED'		=> 'فعاليت حذف به ليست انتظار افزوده شد تا از لود سرور جلوگيري شود.',
	'DELETE_PROCESS_IN_WORK'	=> 'فرايند حذف در حال انجام ميباشد.',
	'SHOW_FROM_24H'				=> 'نمايش 24 ساعت گذشته',
	'SUPPORT_MOFFED'			=> 'پشتيباني عربي',
	'THUMB_DIS_LONGTIME'		=> 'قابليت تصاوير بند انگشتي غير فعال شده است.اين باعث ميشه که کليجا همه عکس هاي شما را کم حجم کند تا در اينجا قابل نمايش باشد.', 
	#1.5
	'R_GROUPS'					=> 'مديريت گروه ها',
	'ESSENTIAL_GROUPS'			=> 'گروه هاي اصلي',
	'CUSTOM_GROUPS'				=> 'گروه هاي شخصي سازي شده',
	'EDIT_DATA'					=> 'ويرايش اطلاعات',
	'EDIT_ACL'					=> 'ويرايشACL',
	'HE_CAN'					=> 'توانا',
	'HE_CAN_NOT'				=> 'ناتوان',
		#ACLS roles
		'ACLS_ENTER_ACP'		=> 'دسترسي به ACP',
		'ACLS_ACCESS_FILEUSER'	=> 'دسترسي به فايل هاي خودش.',
		'ACLS_ACCESS_FILEUSERS'	=> 'جست وجوي هرگونه فايل / پوشه کاربر',
		'ACLS_ACCESS_CALL'		=> 'دسترسي به پوشه "تماس با ما "',
		'ACLS_ACCESS_REPORT'	=> 'نمايش صفحه "گزارشات"',
		'ACLS_ACCESS_STATS'		=> 'دسترسي به صفحه امار ها',

	'GROUP_IS_DEFAULT'			=> 'اين گروه به صورت پيشفرض براي ثبت نام ها ميباشد.',
	'ADD_NEW_GROUP'				=> 'افزودن گروه جديد',
	'DELETE_GROUP'				=> 'حذف گروه',
	'GROUP_NAME'				=> 'نام گروه',
	'COPY_FROM'					=> 'کپي از',
	'USERNAME_NOT_YOU'			=> '   میخواهید با نام کاربری دیگری وارد شوید؟ %1$s خروج %2$s',
	'DEFAULT_GROUP'				=> 'گروه پيش فرض',
	'G_USERS_MOVE_TO'			=> 'انتقال کاربران گروه به',
	'TAKEN_NAMES'				=> 'اين نام از قبل انتخاب شده است. نام ديگري  انتخاب کنيد.',
	'SUPPORT_MOFFED'			=> 'پشتيباني',
	'GROUP_DELETED'				=> 'گروه "%1$s" حذف شد و کاربران ان به گروه   "%2$s" انتقال يافتند.',
	'NO_MOVE_SAME_GRP'			=> 'شما نميتوانيد کاربران را به گروه مشابه انتقال دهيد.',
	'DEFAULT_GRP_NO_DEL'		=> 'نميتوانيد اين گروه را حذف کنيد, زيرا اين گروه , گروه پيش فرض ميباشد.گروه را احالت پيشفرض خارج کنيد و مجددا تلاش نماييد.',
	'GROUP_ADDED'				=> 'گروه "%s" با موفقيت افزوده شد...',
	'SEARCH4FILES_BYIP'			=> 'جست و جو فايل براساس IP',
	'SEARCH4FILES_BYUSER'		=> 'جست و جو فايل هاي اين کاربر',
	'USER_DELETED'				=> 'کاربر با موفقيت حذف شد...',
	'USER_ADDED'				=> 'کاربر با موفقيت افزوده شد...',
	'DIRECT_FILE_NOTE'			=> 'اين فايل مستقيم ميباشد.فايل هاي مستقيم هيچ اماري ندارند...',
	'IMAGEFOLDER'				=> 'پوشه زنده (live)',
	'IMAGEFOLDEREXTS'			=> 'پسوند هاي پوشه Live',
	'IMAGEFOLDERE'				=> 'تغيير نام فايل',
	'CONFIG_KLJ_MENUS_KLIVE'	=> 'تنظيمات لينک هاي Live',
	'LAST_VIEW'					=> 'اخرين نمايش',
	'HURRY_HURRY'				=> 'دسترسی سریع',
	'RESYNC'					=> 'هماهنگ سازي مجدد (sync)',
	'DEL_CACHE'					=> 'تخليه ي کش [فايل هاي موقت]',
	'SYNCING'					=> 'همگام سازي در حال انجام : (%s), لطفا صبر کنيد ',
	'SYNCING_DONE'				=> 'همگام سازي براي (%s) انجام شد.',
	'WHY_SYNCING'				=> 'کليجا از قابليت افزايش خودکار ( شمارشگر خودکار)استفاده ميکند. اين باعث بهبود نحوه عملکرد ميشود. پس از بروز رساني کليجا و يا هنگامي که اسکريپت از شما درخواست دارد از اين فعاليت استفاده کنيد.',
	'REPAIR_DB_TABLES'			=> 'تعمير جداول ديتا بيس',
	'SUPPORT_ZIP_FILE'			=> 'فايل فشرده اي در روت حاوي اطلاعات کليجاي شماست تا در اختيار تيم پشتيباني قرار دهيد.',
	'NO_RESULT_USE_SYNC'		=> 'هيچ نتيجه اي حاصل نشد, اگر کليجا را تازه نصب کرده ايد مشکلي نيست. <br /> اگر شما تازه اسکريپت را اپگريد کرده ايد به صفحه "تعميرات " رفته  و فايل ها و تصاوير را بروز رساني کنيد.',
));
