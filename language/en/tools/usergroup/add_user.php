<?php
/**
*
* @package Support Toolkit - Add User
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADD_USER'				=> 'Add user',
	'ADD_USER_GROUP'		=> 'Add user to groups',

	'DEFAULT_GROUP'			=> 'Default group',
	'DEFAULT_GROUP_EXPLAIN'	=> 'The default group for this user.',

	'GROUP_LEADER'			=> 'Group leader',
	'GROUP_LEADER_EXPLAIN'	=> 'Make this user the group leader of the selected groups.',

	'USER_ADDED'			=> 'The user was successfully created!',
	'USER_GROUPS'			=> 'User groups',
	'USER_GROUPS_EXPLAIN'	=> 'Make this user a member of the selected groups.',
	'EMAIL_ADDRESS'			=> 'Email address',
	'LANGUAGE'				=> 'Language',
	'TIMEZONE'					=> 'Timezone',
	'TOO_SHORT_USERNAME'		=> 'The username you entered is too short.',
	'TOO_SHORT_NEW_PASSWORD'	=> 'The password you entered is too short.',
	'TOO_SHORT_PASSWORD_CONFIRM'=> 'The password confirmation you entered is too short.',
	'TOO_SHORT_EMAIL'			=> 'The email address you entered is too short.',
	'EMAIL_INVALID_EMAIL'		=> 'The email address you entered is invalid.',
	'NEW_PASSWORD_ERROR'		=> 'The passwords you entered do not match.',

));
