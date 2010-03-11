<?php
//
// kleeja language file
// English
// By:NK , Email: n.k@cityofangelz.com 
//

if (!defined('IN_COMMON'))
	exit;

if (empty($lang) || !is_array($lang))
	$lang = array();



$lang = array_merge($lang, array(
	//language inforamtion
	'DIR' 					=> 'ltr',
	'LANG_SMALL_NAME'		=> 'en-us',

	'HOME' 					=> 'Home',
	'INDEX' 				=> 'Index',
	'SITE_CLOSED' 			=> 'The website is closed.',
	'STOP_FOR_SIZE' 		=> 'The service is suspended.',
	'SIZES_EXCCEDED' 		=> 'We have ran out of space ... we will be back soon.',
	'ENTER_CODE_IMG' 		=> 'Enter verification code.',
	'SAFE_CODE' 			=> 'Enable safety code for downloads',
	'LAST_VISIT' 			=> 'Your last visit',
	'FLS_LST_VST_SEARCH' 	=> 'Show files from last visit ?',
	'IMG_LST_VST_SEARCH' 	=> 'Show images from last visit ?',
	'NEXT' 					=> 'Next &raquo;',
	'PREV' 					=> '&laquo; Previous',
	'INFORMATION' 			=> 'Instructions',
	'WELCOME' 				=> 'Welcome',
	'KLEEJA_VERSION' 		=> 'Kleeja version',
	'NUMBER_ONLINE' 		=> 'online users',
	'NUMBER_UONLINE' 		=> 'users',
	'NUMBER_VONLINE' 		=> 'guests',
	'USERS_SYSTEM' 			=> 'Users System',
	'ERROR_NAVIGATATION' 	=> 'Redirection Error ..',
	'LOGIN' 				=> 'Login',
	'USERNAME' 				=> 'User name',
	'PASSWORD' 				=> 'Password',
	'EMPTY_USERNAME'		=> 'Please enter your username',
	'EMPTY_PASSWORD' 		=> 'Please enter your password',
	'LOSS_PASSWORD' 		=> 'Forgot Password?',
	'LOGINED_BEFORE' 		=> 'You are already logged in.',
	'LOGOUT' 				=> 'Logout ',
	'EMPTY_FIELDS' 			=> 'Error ... Missing Fields!',
	'LOGIN_SUCCESFUL' 		=> 'You have logged in successfully.',
	'LOGIN_ERROR' 			=> 'Error ... cannot login!',
	'REGISTER_CLOSED' 		=> 'Sorry, the registration is currently closed.',
	'PLACE_NO_YOU' 			=> 'Restricted Area',
	'REGISTERED_BEFORE' 	=> 'already',
	'REGISTER' 				=> 'Register',
	'EMAIL' 				=> 'Email address',
	'VERTY_CODE' 			=> 'Security code',
	'WRONG_EMAIL' 			=> 'Incorrect email address!',
	'WRONG_NAME' 			=> 'The username must be longer than 4 characters!',
	'WRONG_LINK' 			=> 'Incorrect link ..',
	'EXIST_NAME' 			=> 'Someone has already registered with this username!',
	'EXIST_EMAIL' 			=> 'Someone with this email address has already registered!',
	'WRONG_VERTY_CODE' 		=> 'Incorrect security code!',
	'CANT_UPDATE_SQL' 		=> 'cant update database!',
	'CANT_INSERT_SQL' 		=> 'cant insert data to the database!',
	'REGISTER_SUCCESFUL' 	=> 'Thank you for registering.ً',
	'LOGOUT_SUCCESFUL' 		=> 'Logged out successfully.',
	'LOGOUT_ERROR' 			=> 'Logout Error!',
	'FILECP' 				=> 'File Manager',
	'DEL_SELECTED' 			=> 'Delete selected',
	'EDIT_U_FILES' 			=> 'Update files',
	'FILES_UPDATED' 		=> 'File updated successfully.',
	'PUBLIC_USER_FILES' 	=> 'User files&#039; folder',
	'FILEUSER' 				=> 'User files&#039; folder',
	'GO_FILECP' 			=> 'Click here to manage these files',
	'YOUR_FILEUSER' 		=> 'Your folder',
	'COPY_AND_GET_DUD' 		=> 'Copy URL and give it to your friends To see your files ',
	'CLOSED_FEATURE' 		=> 'Closed feature',
	'USERFILE_CLOSED' 		=> 'Users folders feature is closed !',
	'PFILE_4_FORUM' 		=> 'Go to the users cp to change your details',
	'USER_PLACE' 			=> 'Users Area',
	'PROFILE' 				=> 'Profile',
	'EDIT_U_DATA' 			=> 'Update your details',
	'PASS_ON_CHANGE' 		=> 'Password (Only if you want to change it).',
	'OLD' 					=> 'Old',
	'NEW' 					=> 'New',
	'NEW_AGAIN' 			=> 'Confirm',
	'UPDATE' 				=> 'Update',
	'PASS_O_PASS2' 			=> 'The old password is required, and enter the new password carefully.',
	'DATA_CHANGED_O_LO' 	=> 'Your details have been updated.',
	'DATA_CHANGED_NO' 		=> 'No new details entered.',
	'LOST_PASS_FORUM' 		=> 'Go to the forum to change your details ?',
	'GET_LOSTPASS' 			=> 'Get your password',
	'E_GET_LOSTPASS' 		=> 'Enter your email to receive your password.',
	'WRONG_DB_EMAIL' 		=> 'The specified email address cannot be found in our database!',
	'GET_LOSTPASS_MSG' 		=> "You have asked for your password to be reset but, to avoid spam click on the link below for confirmation : \r\n %1\$s \r\n New Password : %2\$s",
	'CANT_SEND_NEWPASS' 	=> 'Error... the new password could not be sent!',
	'OK_SEND_NEWPASS' 		=> 'We have sent you the new password',
	'OK_APPLY_NEWPASS' 		=> 'New password set. you can now login to your account.',
	'GUIDE' 				=> 'Allowed Extensions',
	'GUIDE_VISITORS' 		=> 'Allowed extensions for guests',
	'GUIDE_USERS' 			=> 'Allowed extensions for users:',
	'EXT' 					=> 'Extension',
	'SIZE' 					=> 'Size',
	'REPORT' 				=> 'Report',
	'YOURNAME' 				=> 'Your name',
	'URL' 					=> 'Link',
	'REASON' 				=> 'Reason',
	'NO_ID' 				=> 'No file selected ..!!',
	'NO_ME300RES' 			=> 'The Reason field cannot be more than 300 characters!!',
	'THNX_REPORTED' 		=> 'We have received your report, Thank you.',
	'RULES' 				=> 'Terms',
	'NO_RULES_NOW' 			=> 'No terms have been specified currently.',
	'E_RULES' 				=> 'Below are the terms of our service',
	'CALL' 					=> 'Contact Us',
	'SEND' 					=> 'Send',
	'TEXT' 					=> 'Comments',
	'NO_ME300TEXT' 			=> 'The Comments field cannot be more than 300 characters!!',
	'THNX_CALLED' 			=> 'Sent ... you will get a reply from us as soon as possible.',
	'NO_DEL_F' 				=> 'Sorry, file deletion URL feature is disabled by admin',
	'E_DEL_F' 				=> 'File deletion URL',
	'WRONG_URL' 			=> 'There is something wrong with the URL ..',
	'CANT_DEL_F' 			=> 'Error: cannot delete the file .. It might be already deleted!',
	'CANT_DELETE_SQL' 		=> 'Cannot be deleted from the database!',
	'DELETE_SUCCESFUL' 		=> 'Deleted successfully.',
	'STATS' 				=> 'Statistics',
	'STATS_CLOSED' 			=> 'The statistics page is closed by the administrator.',
	'FILES_ST' 				=> 'Uploaded',
	'FILE' 					=> 'File',
	'USERS_ST' 				=> 'Total Users',
	'USER' 					=> 'user',
	'SIZES_ST' 				=> 'Total size of uploaded files',
	'LSTFLE_ST' 			=> 'Latest upload',
	'LSTDELST' 				=> 'Last check for undownloaded files',
	'S_C_T' 				=> 'Todays guests',
	'S_C_Y' 				=> 'Yesterdays guests',
	'S_C_A' 				=> 'Total number of guests',
	'LAST_1_H' 				=> 'Statistics for the past hour',
	'DOWNLAOD' 				=> 'Download',
	'FILE_FOUNDED' 			=> 'File has been found .. ',
	'WAIT' 					=> 'Please wait ..',
	'CLICK_DOWN' 			=> 'Click here to download',
	'JS_MUST_ON' 			=> 'Enable JavaScript in your browser!',
	'FILE_INFO' 			=> 'File Info',
	'FILENAME' 				=> 'File name',
	'FILESIZE' 				=> 'File size',
	'FILETYPE' 				=> 'File type',
	'FILEDATE' 				=> 'File date',
	'FILEUPS' 				=> 'Number of downloads',
	'FILEREPORT' 			=> 'Report violation of terms',
	'FILE_NO_FOUNDED' 		=> 'File cannot be found ..!!',
	'IMG_NO_FOUNDED' 		=> 'Image cannot be found ..!!',
	'NOT_IMG' 				=> 'This is not an image!!',
	'MORE_F_FILES' 			=> 'This is the final limit for input fields',
	'DOWNLOAD_F' 			=> '[ Upload Files ]',
	'DOWNLOAD_T' 			=> '[ Download From Link ]',
	'PAST_URL_HERE' 		=> '[ Paste Link Here ]',
	'SAME_FILE_EXIST' 		=> 'File "%s" already exist, Rename it and try again.',
	'NO_FILE_SELECTED' 		=> 'Select a file first !!',
	'WRONG_F_NAME' 			=> 'File name "%s" contains restricted characters.',
	'FORBID_EXT' 			=> 'Extension "%s" not supported.',
	'SIZE_F_BIG' 			=> 'File size of "%1$s" must be smaller than %2$s .',
	'CANT_CON_FTP' 			=> 'Cannot connect to ',
	'URL_F_DEL' 			=> 'Link for deleting the file',
	'URL_F_THMB' 			=> 'Link for Thumbnail',
	'URL_F_FILE' 			=> 'Link for file',
	'URL_F_IMG' 			=> 'Link for Image',
	'URL_F_BBC' 			=> 'Link for forums',
	'IMG_DOWNLAODED' 		=> 'Image uploaded successfully.',
	'FILE_DOWNLAODED' 		=> 'File uploaded successfully.',
	'CANT_UPLAOD' 			=> 'Error: cannot upload file "%s" for UNKNOWN reason!',
	'NEW_DIR_CRT' 			=> 'New folder created',
	'PR_DIR_CRT' 			=> 'The folder has not been CHMODed',
	'CANT_DIR_CRT' 			=> 'The folder has not been created automatically, you must create it manually.',
	'AGREE_RULES' 			=> 'I Agree to the terms',
	'CHANG_TO_URL_FILE' 	=> 'Change uploading method',
	'URL_CANT_GET' 			=> 'error during get file from url..',
	'ADMINCP' 				=> 'Control Panel',
	'JUMPTO' 				=> 'Navigate to',
	'GO_BACK_BROWSER' 		=> 'Go back',
	'U_R_BANNED' 			=> 'Your IP has been banned.',
	'U_R_FLOODER' 			=> 'it&#039;s antiflood system ...',
	'U_NOT_ADMIN' 			=> 'You do not have the administration permissions',
	'UPDATE_CONFIG' 		=> 'Update Settings',
	'YES' 					=> 'Yes',
	'NO' 					=> 'No',
	'NO_CHANGE' 			=> 'Do NOT change',
	'CHANGE_MD5' 			=> 'Change using MD5',
	'CHANGE_TIME' 			=> 'Change using TIME',
	'SITENAME' 				=> 'Service name',
	'SITEMAIL' 				=> 'Email address',
	'SITEMAIL2' 			=> 'Email address of reports',
	'SITEURL' 				=> 'Service URL with / at the end',
	'FOLDERNAME' 			=> 'Folder name for uploaded files',
	'PREFIXNAME' 			=> 'Files prefix <small>( you can also use {rand:4} , {date:d_Y})</small>',
	'FILESNUM' 				=> 'Number of upload input fields',
	'FILESNUM_SHOW' 		=> 'Show all upload inputs',
	'SITECLOSE' 			=> 'Shutdown service',
	'CLOSEMSG' 				=> 'Shutdown message',
	'LANGUAGE' 				=> 'Language',
	'DECODE' 				=> 'Change file name',
	'STYLE' 				=> 'Service style',
	'SEC_DOWN' 				=> 'Seconds before download',
	'STATFOOTER' 			=> 'Page statistics in footer',
	'GZIP' 					=> 'use gzip',
	'GOOGLEANALYTICS' 		=> '<a href="http://www.google.com/analytics" target="_kleeja"><span style="color:orange">Google</span> Analytics</a>',
	'WELCOME_MSG' 			=> 'Welcome message',
	'USER_SYSTEM' 			=> 'Users system',
	'NORMAL' 				=> 'Normal',
	'W_PHPBB' 				=> 'Attached to phpbb',
	'W_MYSBB' 				=> 'Attached to MySmartBB',
	'W_VBB' 				=> 'Attached to vb',
	'ENAB_REG' 				=> 'Allow registraion',
	'TOTAL_SIZE' 			=> 'Max service size[Mg]',
	'THUMBS_IMGS' 			=> 'Enable image thumbnails',
	'WRITE_IMGS' 			=> 'Enable image watermark',
	'ID_FORM' 				=> 'Id form',
	'IDF' 					=> 'File id in database',
	'IDFF' 					=> 'File name',
	'IDFD' 					=> 'Directly',
	'DEL_URL_FILE' 			=> 'Enable file deletion URL feature',
	'WWW_URL' 				=> 'Enable uploading from URL',
	'ALLOW_STAT_PG' 		=> 'Enable statistics page',
	'ALLOW_ONLINE' 			=> 'Enable Who is Online',
	'MOD_WRITER' 			=> 'Mod Rewrite',
	'MOD_WRITER_EX' 		=> 'HTML links..',
	'DEL_F_DAY' 			=> 'Delete undownloaded files in',
	'NUMFIELD_S' 			=> 'You can only use numbers with some fields !!',
	'CONFIGS_UPDATED' 		=> 'Settings updated successfully.',
	'UPDATE_EXTS' 			=> 'Update Extensions',
	'GROUP' 				=> 'Category',
	'SIZE_G' 				=> 'Size [ <font style="color:red">Visitor</font> ]',
	'SIZE_U' 				=> 'Size [ <font style="color:green">User</font> ]',
	'ALLOW_G' 				=> 'Allow <br />[Visitor]',
	'ALLOW_U' 				=> 'Allow <br />[User]',
	'E_EXTS' 				=> 'Note : Sizes are measured in kilobytes .</i>',
	'UPDATED_EXTS' 			=> 'Extensions updated successfully.',
	'UPDATE_FILES' 			=> 'Update Files',
	'BY' 					=> 'By',
	'FILDER' 				=> 'Folder',
	'DELETE' 				=> 'Delete',
	'GUST' 					=> 'Guest',
	'UPDATE_REPORTS' 		=> 'Update Reports',
	'NAME' 					=> 'Name',
	'CLICKHERE' 			=> 'Click Here',
	'TIME' 					=> 'Time',
	'E_CLICK' 				=> 'Select one to be viewed here',
	'IP' 					=> 'IP',
	'REPLY' 				=> '[ Reply ]',
	'REPLY_REPORT' 			=> 'Reply on the report',
	'U_REPORT_ON' 			=> 'For your report about ',
	'BY_EMAIL' 				=> 'By email ',
	'ADMIN_REPLIED' 		=> 'Admin Reply',
	'CANT_SEND_MAIL' 		=> 'cannot send reply via email',
	'IS_SEND_MAIL' 			=> 'Reply has been sent.',
	'REPORTS_UPDATED' 		=> 'Reports have been updated.',
	'UPDATE_CALSS' 			=> 'Update Comments',
	'REPLY_CALL' 			=> 'Reply on the comment',
	'REPLIED_ON_CAL' 		=> 'About your comment ',
	'CALLS_UPDATED' 		=> 'Comments updated successfully.',
	'IS_ADMIN' 				=> 'Admin',
	'UPDATE_USERS' 			=> 'Update Users',
	'USERS_UPDATED' 		=> 'Users updated successfully.',
	'E_BACKUP' 				=> 'Select the tables you want to make a backup for:',
	'TAKE_BK' 				=> 'Back-Up',
	'REPAIRE_TABLE' 		=> '[Tables] Repaired. ',
	'REPAIRE_F_STAT' 		=> '[stats] total number of files has been recounted.',
	'REPAIRE_S_STAT' 		=> '[stats] total size of files has been recounted.',
	'REPAIRE_CACHE' 		=> '[Cache] deleted for  ..',
	'KLEEJA_CP' 			=> '[ Kleeja ] Administration',
	'GENERAL_STAT' 			=> 'General Stats',
	'OTHER_INFO' 			=> 'Other Info',
	'AFILES_NUM' 			=> 'Total number of files',
	'AFILES_SIZE' 			=> 'Total size of files',
	'AFILES_SIZE_SPACE' 	=> 'Space that has been consumed so far',
	'AUSERS_NUM' 			=> 'Total users',
	'LAST_GOOGLE' 			=> 'Last visit to Google',
	'GOOGLE_NUM' 			=> 'Google visits',
	'LAST_YAHOO' 			=> 'Last visit to Yahoo!',
	'YAHOO_NUM' 			=> 'Yahoo! visits',
	'KLEEJA_CP_W' 			=> 'Hello ! [ %s ] , Welcome to <b>Kleeja</b> administration panel',
	'PHP_VER' 				=> 'php version',
	'MYSQL_VER' 			=> 'mysql version',
	'N_IMGS' 				=> 'Images',
	'N_ZIPS' 				=> 'ZIP Files',
	'N_TXTS' 				=> 'TXT Files',
	'N_DOCS' 				=> 'DOCS',
	'N_RM' 					=> 'RealMedia',
	'N_WM' 					=> 'WindowsMedia',
	'N_SWF' 				=> 'Flash Files',
	'N_QT' 					=> 'QuickTime',
	'N_OTHERFILE' 			=> 'Other Files',
	'LOGOUT_CP_OK' 			=> 'Your administration session has been cleared ..',
	'RETURN_HOME' 			=> 'Back to',
	'R_CONFIGS' 			=> 'General Settings',
	'R_CPINDEX' 			=> 'Main Admin Page',
	'R_EXTS' 				=> 'Extensions Settings',
	'R_FILES' 				=> 'Files Control',
	'R_REPORTS' 			=> 'Reports',
	'R_CALLS' 				=> 'Messages',
	'R_USERS' 				=> 'Users Control',
	'R_BCKUP' 				=> 'Back-Up',
	'R_REPAIR' 				=> 'Total Repair',
	'R_LGOUTCP' 			=> 'Clear Session',
	'R_BAN' 				=> 'Ban Control',
	'BAN_EXP1' 				=> 'Edit the banned IPs and add new ones here ..',
	'BAN_EXP2' 				=> 'Use the star (*) symbol to replace numbers if you want a total ban.... and use the (|) to separate the IPs',
	'UPDATE_BAN' 			=> 'Save Changes',
	'BAN_UPDATED' 			=> 'Changes saved successfully.',
	'R_RULES' 				=> 'Terms',
	'RULES_EXP' 			=> 'You can edit the terms and conditions of your service from here',
	'UPDATE_RULES' 			=> 'Update',
	'RULES_UPDATED' 		=> 'Terms and conditions updated successfully ..',
	'R_SEARCH' 				=> 'Advanced search',
	'SEARCH_FILES' 			=> 'Search for files',
	'SEARCH_SUBMIT' 		=> 'Search now',
	'LAST_DOWN' 			=> 'Last download',
	'TODAY' 				=> 'Today',
	'DAYS' 					=> 'Days',
	'WAS_B4' 				=> 'Was before',
	'BITE' 					=> 'byte',
	'SEARCH_USERS' 			=> 'Search for users',
	'R_IMG_CTRL' 			=> 'Image control only',
	'ENABLE_USERFILE' 		=> 'Enable users files',
	'R_EXTRA' 				=> 'Extra Templates',
	'EX_HEADER_N' 			=> 'Extra header ... which shows at the bottom of the original header',
	'EX_FOOTER_N' 			=> 'Extra footer ... which shows at the top of the original footer',
	'UPDATE_EXTRA' 			=> 'Update template additions',
	'EXTRA_UPDATED' 		=> 'Template additions updated successfully',
	'R_STYLES' 				=> 'Styles',
	'STYLES_EXP' 			=> 'Select a style from below to delete or update it',
	'SHOW_TPLS' 			=> 'Show Templates',
	'SUBMIT' 				=> 'Submit',
	'EDIT' 					=> 'Edit',
	'TPL_UPDATED' 			=> 'Template updated...',
	'TPL_DELETED' 			=> 'Template deleted ...',
	'NO_TPL_SHOOSED' 		=> 'You did not select a template!',
	'NO_TPL_NAME_WROTE' 	=> 'Please enter the name of the template!',
	'ADD_NEW_STYLE' 		=> 'Create a new style',
	'EXPORT_AS_XML' 		=> 'Export As xml',
	'NEW_STYLES_EXP' 		=> 'Upload style from a XML file',
	'NEW_STYLE_ADDED' 		=> 'Style added successfully',
	
	'ERR_IN_UPLOAD_XML_FILE' 		=> 'Error uploading...',
	'ERR_UPLOAD_XML_FILE_NO_TMP' 	=> 'Error uploading...',
	'ERR_UPLOAD_XML_NO_CONTENT' 	=> 'The file selected is blank!',
	'ERR_XML_NO_G_TAGS' 			=> 'Some required tags are missing from the file!',
	'STYLE_DELETED' 				=> 'Style successfully removed',
	'STYLE_1_NOT_FOR_DEL' 			=> 'You cannot delete the default style!',
	'ADD_NEW_TPL' 					=> 'Add a new template',
	'ADD_NEW_TPL_EXP' 				=> 'Enter a name for the new template',
	'TPL_CREATED' 					=> 'New template successfully created...',
	'R_LANGS' 						=> 'words and phrases',
	'WORDS_UPDATED' 				=> 'Words successfully updated...',
	
	/* //deprecated, removed from rc6+
	'LANGS_EXP' => 'To delete or update a language, select it from below',
	'SHOW_WORDS' => 'Show words and phrases',
	'ADD_NEW_LANG' => 'Add new language',
	'NEW_LANG_EXP' => 'Upload a new or an altered language',
	'SHOW_WORDS_EXP' => 'Show the language variables and it\'s translations or update or delete them....',
	'ADD_NEW_WORD' => 'Add a new language var.',
	'ADD_NEW_WORD_EXP' => 'Add a new language var. and it\'s translation',
	'LANG_DELETED' => 'Language deleted...',
	'LANG_1_NOT_FOR_DEL' => 'You cannot delete the default language',
	'NEW_LANG_ADDED' => 'New language added...',
	'NO_WORD_SHOOSED' => 'You did not select a word !',
	'WORD_DELETED' => 'Word successfully deleted...',
	'WORD_CREATED' => 'Word successfully added...',
	*/
	'PLUGINS' 					=> 'Plugins',
	'PLUGINS_EX' 				=> 'Delete or updated plugins here...',
	'DISABLE' 					=> 'Disable',
	'ENABLE' 					=> 'Enable',
	'ADD_NEW_PLUGIN' 			=> 'Add plugin',
	'ADD_NEW_PLUGIN_EXP' 		=> 'Upload plugin from a XML file',
	'PLUGIN_DELETED' 			=> 'Plugin deleted...',
	'PLGUIN_DISABLED_ENABLED' 	=> 'Plugin Enabled / Disabled',
	'NO_PLUGINS' 				=> 'No plugins found',
	'NEW_PLUGIN_ADDED' 			=> 'Plugin added ... <br /> Note: some plugins come with extra files , you need to transfer them to root folder of Kleeja.',
	'PLUGIN_EXISTS_BEFORE' 		=> 'This plugin exists before with same version or above, so no need to update it!.',
	'PLUGIN_UPDATED_SUCCESS' 	=> 'This plugin is updated successfully...',
	'R_CHECK_UPDATE' 			=> 'Check for updates',
	'ERROR_CHECK_VER' 			=> 'Error: cannot get any update information at this momoent , try again later !',
	'UPDATE_KLJ_NOW' 			=> 'You Have to update your version now!. visit Kleeja.com for more inforamtion',
	'U_LAST_VER_KLJ' 			=> 'You are using the lastest version of Kleeja...',
	
	
	//rc6
	'U_USE_PRE_RE' 				=> 'You are using a Pre-release version, Click <a href="http://www.kleeja.com/bugs/">here</a> to report any bugs or exploits.',
	'STYLE_IS_DEFAULT'			=> 'Default style',
	'MAKE_AS_DEFAULT'			=> 'Set as default',
	'TPLS_RE_BASIC'				=>	'Basic templates', 
	'TPLS_RE_MSG'				=>	'Notification templates', 
	'TPLS_RE_USER'				=>	'User templates', 
	'TPLS_RE_OTHER'				=>	'Other templates',
	'STYLE_NOW_IS_DEFAULT' 		=> 'The style "%s" was set as default',
	'STYLE_DIR_NOT_WR'			=>	'The style directory %s is not writeable therefore, you cannot edit the templates until you CHMOD it to 777.',
	'TPL_PATH_NOT_FOUND' 		=> 'Template %s cannot be found !',
	'NO_CACHED_STYLES'			=> 'No currently cached styles !',
	'OPEN'						=> 'Open',
	'SEARCH_FOR'				=> 'Look for',
	'REPLACE_WITH'				=> 'Replace with',
	'REPLACE_TO_REACH'			=> 'Until you reach the next code',
	'ADD_AFTER'					=> 'Add after',
	'ADD_AFTER_SAME_LINE'		=> 'Add after it in the same line',
	'ADD_BEFORE'				=> 'Add before',
	'ADD_BEFORE_SAME_LINE'		=> 'Add before it in the same line',
	'ADD_IN'					=> 'Add in it after created',
	'CACHED_STYLES_DELETED'		=>'Cached styles deleted.',
	'CACHED_STYLES'				=>' Cached Styles',
	'DELETE_CACHED_STYLES'		=>'Delete cached styles',
	'CACHED_STYLES_DISC'		=>	'The stored templates are the remaining modifications from additions that were not applied either because of the permissions or the lack of a suitable search keyword therefore, it needs to be set manually %s .',
	'UPDATE_NOW_S'				=>	'You are using an old version of Kleeja. Update Now. Your currect version is %1$s and the latest one is %2$s',
	'ADD_NEW_EXT'				=> 'Add a new extension',
	'ADD_NEW_EXT_EXP'			=> 'Enter extension and choose category',
	'EMPTY_EXT_FIELD'			=>	'The extension field is blank!', 
	'NEW_EXT_ADD'				=>	'New extension added. ',
	'NEW_EXT_EXISTS_B4'			=>	'The extension %s already exists!.',
	'KILOBYTE'					=>	'Kilobyte',
	'NOT_SAFE_FILE'				=> 'The file "%s" does not look safe !',
	'CONFIG_WRITEABLE'			=> 'The file config.php is currently writeable, We strongly recommend that it be changed to 640 or at least 644.',
	'NOTE'						=>	'Note',
	'WARN'						=>	'Warning',
	'NO_KLEEJA_COPYRIGHTS'		=> 'you seem to have accidentally removed the copyrights from the footer, please put it back on so we can continue to develop Kleeja free of charge, you can buy a copyright removal license %s .',
	'USERS_NOT_NORMAL_SYS'		=> 'The current users system is not the normal one, which means that the current users cannot be edited from here but from the script that was integrated with Kleeja, those users use the normal membership system.',
	'ARE_YOU_SURE_DO_THIS'		=> 'Are you sure you want to do this?',
	'SITE_FOR_MEMBER_ONLY'		=> 'This center is only for members, register or login to upload your files.',
	'DIMENSIONS_THMB'			=> 'Thumbs dimensions',
	'AUTH_INTEGRATION_N_UTF8_T'	=> '%s is not utf8',
	'AUTH_INTEGRATION_N_UTF8' 	=> '%s database must be utf8 to be integrated with Kleeja !.',
	'SCRIPT_AUTH_PATH_WRONG'	=> 'Path of %s is not valid, change it now.',
	'SHOW_MY_FILECP'			=> 'Show my files',
	'PASS_ON_CHANGE'			=> 'Change password',
	'MOST_EVER_ONLINE'			=> 'Most users ever online was',
	'ON'						=> 'on',
	'LAST_REG'					=> 'newest member',
	'NEW_USER'					=> 'New user',
	'LIVEXTS'					=> 'Live extensions',
	
	'ADD_UPLAD_A'				=> 'Add more fields',
	'ADD_UPLAD_B'				=> 'Remove fields',
	'COPYRIGHTS_X'				=> 'All rights reserved',
	'ADMIN_DELETE_FILE_ERR'		=> 'There is error occurred while trying to delete user files . ',
	'ADMIN_DELETE_FILE_OK'		=> 'Done ! ',
	'ADMIN_DELETE_FILES'		=> 'Delete all user files',
	
	'KLJ_MORE_PLUGINS'			=> array('Get more plugins from Kleeja\'s plugin center ,<a target="_blank" href="http://www.kleeja.com/plugins/">click here</a> .',
								'Are you a developer? have you developed plugins for Kleeja & you want to showcase  in Kleeja\'s plugins center? <a target="_blank" href="http://www.kleeja.com/plugins/">click here</a>. ',
								),
	'KLJ_MORE_STYLES'			=> array('Get more styles from Kleeja\'s style gallery ,<a target="_blank" href="http://www.kleeja.com/styles/">click here</a> .',
								'Are you a designer? looking to showcase your styles in Kleeja\'s gallery for everyone? <a target="_blank" href="http://www.kleeja.com/styles/">click here</a> .',
								),
							 
	'CHECK_ALL'	 				=> 'Check all',
	'BCONVERTER' 				=> 'Byte Converter',
	'NO_HTACCESS_DIR_UP'		=> 'No .htaccess file was found in "%s" folder, Which means if malicious codes were injected a hacker can do damage to your website!',
	'NO_HTACCESS_DIR_UP_THUMB'	=> 'No .htaccess file was found in Thumbs folder "%s", Which means if malicious codes were injected a hacker can do damage to your website!',
	'COOKIE_DOMAIN' 			=> 'Cookie domain',
	'COOKIE_NAME' 				=> 'Cookie prefix',
	'COOKIE_PATH' 				=> 'Cookie path',
	'COOKIE_SECURE'				=> 'Cookie secure',
	'BROSWERF'					=> 'User files',
	'REMME'						=> 'Remmeber me',
	'HOUR'						=> 'an hour',
	'5HOURS'					=> '5 hours',
	'DAY'						=> 'a day',
	'WEEK'						=> 'a week',
	'MONTH'						=> 'a month',
	'YEAR'						=> 'a year',
	'ADMINISTRATORS'			=> 'Administrators',
	'INVALID_FORM_KEY'			=> 'Invalid form, or your session was expired',
	'REFRESH_CAPTCHA'			=> 'Click to get a new CAPTCHA image',
	'CHOSE_F'					=> 'Please select at least one file',
	'NO_REPEATING_UPLOADING'	=> 'The page should NOT be refreshed after upload!.',
	'NOTE_CODE' 				=> 'Enter the letters shown in the image accurately',
	'USER_LOGIN'				=> ' Login + Members Only ',
	'FILES_DELETED' 			=> 'Files successfully deleted.',
	'GUIDE_GROUPS' 			    => 'Group',
	'ALL_FILES' 			    => 'Number of files in your account',
	'NO_FILE_USER'				=> 'No files were found in the account!',
	'SHOWFILESBYIP'				=> 'Show files by IP', 
	'DELETEALLRES'				=> 'Delete all results',
	'ADMIN_DELETE_FILES_OK'     => 'File %s successfully deleted',
	'ADMIN_DELETE_FILES_NOF'	=> 'No files to delete',
	'NOT_EXSIT_USER'			=> 'Sorry, the user you are looking for does not exist in our database... perhaps you are trying to reach a deleted membership !!!!',
	'ADMIN_DELETE_NO_FILE'		=> 'This user has no files to delete ! .',
	'WAIT_LOADING'				=> 'Please wait, the files are being uploaded to the server...',
	'NOTICECLOSED'				=> 'Notice: website closed',
	'CONFIG_KLJ_MENUS_OTHER'	=> 'Other settings',
	'CONFIG_KLJ_MENUS_GENERAL'	=> 'General settings',
	'CONFIG_KLJ_MENUS_ALL'		=> 'Display all the settings',
	'CONFIG_KLJ_MENUS_UPLOAD'	=> 'Upload settings',
	'CONFIG_KLJ_MENUS_INTERFACE'=> 'Interface and design settings',
	'CONFIG_KLJ_MENUS_ADVANCED' => 'Advanced settings',
	'DELF_CAUTION'				=> '<span class="delf_caution">Caution: this function might be dangerous when using small numbers .</span>',
	'PLUGIN_N_CMPT_KLJ'			=> 'This plugin is not compatible with your current version of Kleeja.',
	'PHPINI_FILESIZE_SMALL'		=> 'Maximum file size allowed for your service is "%1$s" while upload_max_filesize in your hosts PHP settings is set to "%2$s" upload it so that your chosen size can be applied.',
	'PHPINI_MPOSTSIZE_SMALL'	=> 'You have allowed the upload of "%1$s" files at once, You need to use a bigger value for post_max_size in your servers PHP settings, something like "%2$s" for a better performance.',
	'NUMPER_REPORT' 			=> 'Number of reports',
	'NO_UP_CHANGE_S'			=> 'No changes ...',
	'ADD_HEADER_EXTRA' 			=> 'Extra Header',
	'ADD_FOOTER_EXTRA' 			=> 'Extra footer',
	'ADMIN_USING_IE6'			=> 'You are using IE6, Please update your browser or use FireFox now!!',
	'FOOTER_TXTS'				=> array('PLUGINS'=> 'Plugins', 'STYLES'=>'Styles', 'BUGS'=>'Bug report'),
	'T_ISNT_WRITEABLE'			=> 'Cannot edit <strong>%s</strong> template. (Unwriteable)',
	'UNKNOWN'					=> 'Unknown',
	'T_CLEANING_FILES_NOW'		=> 'Deleting temp files, The process could take a while depending on the size of the files.',
	'WE_UPDATING_KLEEJA_NOW'	=> 'Closed for maintenance, Check back soon...',
	'HOW_UPDATE_KLEEJA'			=> 'How to update Kleeja?',
	'HOW_UPDATE_KLEEJA_STEP1'	=> 'Visit the official website <a target="_blank" href="http://www.kleeja.com/">Kleeja.com</a> then go to the Download page and download the latest version of the script, or download an upgrade copy if available.',
	'HOW_UPDATE_KLEEJA_STEP2'	=> 'Unzip the file and upload it to your website to replace the old files with the new ones <b>Except config.php</b>.',
	'HOW_UPDATE_KLEEJA_STEP3'	=> 'When done, go to the following URL to update the database.',
	'RETURN_TEMPLATE_BK'		=> 'Restore any backup template',
	'RETURN_TEMPLATE_BK_EXP'	=> 'Choose any backup template to restore to original, these templates belong to the default style.',
	'TPL_BK_RETURNED'			=> 'Backup copy restored for template %s.',
	'ERROR_TRY_AGAIN'			=> 'Error, try again.',
	'VIEW'						=> 'View',
	'REPLACE_WHOLW_TPL'			=> 'Replace the whole template',
	'DEPEND_ON_NO_STYLE_ERR'	=> 'This style is based on the "%s" style which you dont seem to have', 
	'PLUGINS_REQ_NO_STYLE_ERR'	=> 'هذا الستايل يتطلب ان تكون الاضافه/الاضافات [ %s ] مثبته لديك , ثبتها وحاول من جديد !.', 
	'PLUGIN_REQ_BY_STYLE_ERR'	=> 'الستايل الافتراضي الحالي يتطلب هذه الاضافه , لتستطيع ازالتها او تعطيلها يجب اولا تغيير الستايل.', 
	'KLJ_VER_NO_STYLE_ERR'		=> 'This style requires Kleeja version %s or above',
	'KLJ_STYLE_INFO'			=> 'Style info',
	'STYLE_NAME'				=> 'Style name',
	'STYLE_COPYRIGHT'			=> 'Copyrights',
	'STYLE_VERSION'				=> 'Style version',
	'STYLE_DEPEND_ON'			=> 'Based on',
	'NONE'						=> 'None',
	'MESSAGE_NONE'				=> 'No messages yet ...',
	'KLEEJA_TEAM'				=> 'Kleeja development team',
	'USER_STAT'					=> 'User Stats',
	'SEARCH_STAT' 				=> 'Search Bots Stats',
	'ERR_SEND_MAIL'				=> 'Mail sending error, try again later !',
	'NOTHING'					=> 'There are no new files or photos .. !!',
	'FIND_IP_FILES' 			=> 'Found',
	'ALPHABETICAL_ORDER_FILES'	=> 'Sort files by alphabetical order', 
	'ORDER_SIZE'				=> 'Sort files by size from largest to smallest',
	'ORDER_TOTAL_DOWNLOADS'		=> 'Sort files by number of downloads', 
	'COMMA_X'					=> '<p class="live_xts">separate by comma (<font style="font-size:large"> , </font>)</p>',
	'NO_SEARCH_WORD'			=> 'You didn\'t type anything in the search form !',
	'GUESTSECTOUPLOAD'			=> 'The period time (number of seconds) between each upload process for the visitor',
	'USERSECTOUPLOAD'			=> 'The period time (number of seconds) between each upload process for the registered user',
	'YOU_HAVE_TO_WAIT'			=> 'Wait %s seconds .. then try to re-upload your files',
	'ADM_UNWANTED_FILES'		=> 'يبدوا انك قمت بالترقيه من نسخه لاحقه وبسبب اختلاف اسماء بعض الملفات ستلاحظ وجود ازرار متكرره بلوحة التحكم . <br /> لحل المشكلة قم بإزالة كافة الملفات في المسار "includes/adm" واعادة رفعها من جديد.',
	'ADVANCED_SETTINGS_CATUION' => 'Caution : you must know what these settings are in order to edit them!',
	'HTML_URLS_ENABLED_NO_HTCC'	=> 'لقد قمت بتفعيل روابط الهتمل ولكنك اهملت نقل ملف الضبط الموجود في مجلد docs/.htaccess.txt لمجلد كليجا الرئيسي واعادة تسميته بـ ".htaccess". اذا لم تفهم شيئاً من هذا الكلام قم بالسؤال في الدعم الفني لكليجا او قم بتعطيل روابط الهتمل .',	
	'PLUGIN_FTP_EXP'			=> 'لا نستطيع التعديل على الملفات حالياً بدون تصريح الدخول للـ FTP, لذا قم بكتابتهم بالاسفل لنستطيع تثبيت الاضافه',
	'PLUGIN_FTP_HOST'			=> 'خادم الـ FTP',
	'PLUGIN_FTP_USER'			=> 'اسم المستخدم لـ FTP',
	'PLUGIN_FTP_PASS'			=> 'كلمة المرور لـ FTP',
	'PLUGIN_FTP_PATH'			=> 'مسار السكربت على الـ FTP',
	'PLUGIN_FTP_PORT'			=> 'منفذ الـ FTP <small>(غالبا هو 21 لذا ان كنت غير متأكد دعه كما هو.)</small>',
	'PLUGIN_CONFIRM_ADD'		=> 'انتبه, الاضافات هي تعديلات برمجيه على السكربت و قد تكون ضاره احيانا , لذا ان كنت غير متأكد من مصدر الاضافه ولم تقم بتحميلها من موقع كليجا فالافضل ان تراجع نفسك الآن . هل حقا تريد التثبيت ؟',
	'PLUGIN_ADDED_ZIPPED'		=> 'لقد تم تثبيت الاضافه, لاكمال عملية التثبيت قم %1$sبتحميل%2$s الملفات المعدلة و استبدالها يدوياً. عدم استبدال الملفات المعدله يعني عدم تركيب الاضافه بشكل جيد.',
	'PLUGIN_ADDED_ZIPPED_INST'	=> 'لقد تم تثبيت الاضافه, لاكمال عملية التثبيت قم %1$sبتحميل%2$s الملفات المعدلة و استبدالها يدوياً. عدم استبدال الملفات المعدله يعني عدم تركيب الاضافه بشكل جيد. <br /> ايضا يجب ان تقوم بـ %3$sقراءة%4$s تعليمات الاضافه لمعلومات اكثر. تعليمات الاضافة يمكن قراءتها لاحقاً من صفحة الاضافات.'

	//last line of this file ...					 
	'S_TRANSLATED_BY' 			=> 'Translated By <a href="http://www.fenix4web.com/">Fenix4Web</a>',
	
));

#<-- EOF
