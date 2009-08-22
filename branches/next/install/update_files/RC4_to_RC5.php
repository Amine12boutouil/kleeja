<?php
// not for directly open
if (!defined('IN_COMMON'))	exit();


//
//db version when this update was released
//
define ('DB_VERSION' , '5');

///////////////////////////////////////////////////////////////////////////////////////////////////////
// sqls /////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////

$update_sqls['up_dbv_config'] = "UPDATE `{$dbprefix}config` SET `value` = '" . DB_VERSION . "' WHERE `name` = 'db_version'";

$update_sqls['show_my_filecp'] = "ALTER TABLE `{$dbprefix}users` ADD `show_my_filecp` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT '1';";
$update_sqls['hook_id_change'] = "ALTER TABLE `{$dbprefix}hooks` CHANGE `hook_id` `hook_id` INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT;";
$update_sqls['add_user_id'] = "ALTER TABLE `{$dbprefix}files` ADD `user_ip` VARCHAR( 250 ) NOT NULL ;";



///////////////////////////////////////////////////////////////////////////////////////////////////////
//notes ////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////

$update_notes[]	=	$lang['INST_NOTE_RC4_TO_RC5'];



///////////////////////////////////////////////////////////////////////////////////////////////////////
//functions ////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////
function up_make_style()
{
	$contents	=	file_get_contents('res/style.xml');
	creat_style_xml($contents, true);
}


//$update_functions[]	=	'up_make_style()';

?>