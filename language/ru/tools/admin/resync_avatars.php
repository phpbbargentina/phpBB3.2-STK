<?php
/**
 *
 * @package Support Toolkit - Resync Avatars Russian language Sheer
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
	'RESYNC_AVATARS'			=> 'Проверка аватар',
	'RESYNC_AVATARS_CONFIRM'	=> 'Данный инструмент проверяет существование на сервере файлов аватар, использумых на конференции (<em>файлы из галерей аватар не проверяются</em>). Если будет обнаружено, что файл отсутствует, аватар будет удален из профиля пользователя. Продолжить?',
	'RESYNC_AVATARS_FINISHED'	=> 'Записи в Базе Данных об аватарах были успешно синхронизированы.',
	'RESYNC_AVATARS_NEXT_MODE'	=> 'Проводится проверка наличия файлов групповых аватар, не прерывайте процесс!',
	'RESYNC_AVATARS_PROGRESS'	=> 'Проводится проверка наличия файлов. Не прерывайте процесс!',
));
