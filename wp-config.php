<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'newtheme');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^DF?ycdP)z-hwizL+fpLpC/?C-PW$p9cL/SCBC+Rr*G/]).F*~6@%vm9$59z(7T^');
define('SECURE_AUTH_KEY',  '%F4(jy0XlF!_< MdOK-cUF,Y<r*QznpM?uHQ&VvGW&KZe0>VU|/s_fmRTiM@ZjPu');
define('LOGGED_IN_KEY',    '*Bga44~d3B::t:TfQs<R|0U`Zmup7G^2aH5>X$L6T,;t.3/ik5K,[HQu_FhK O-,');
define('NONCE_KEY',        'S=%d@SYUh%%A}[C,n*MQXjdDf.Ta$Dabi>pnNM@RMVfgxs^rbG8[JC8)Vt>n[2.{');
define('AUTH_SALT',        '!!V~HfGS ,;[E-ClS];M9k44sE5B|cb9vU(@{8*S_P31+s+D~&+n}WT3wKCG]6!!');
define('SECURE_AUTH_SALT', 'Z1le,vkM(`.#!7KG42Yvcq&1@_@nx7Y8@)U@3 ax}!$ya]jL35VN`j^G`$NG.%Uh');
define('LOGGED_IN_SALT',   'RTNfev@4_fGIC09Sdmj7m[$~to0u.-t!Yj#t)9_)DG5h6RCa-j:EQdpKP=TGbVg%');
define('NONCE_SALT',       'q%l~D{)Nj`VQHOS`WLl=x6Y@RRrUin)q=k7d$;LbS-sZTVxKB*p`_Ld87|C|Mz5X');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'newtheme_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
