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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'Task5' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u(sK;dG`#jXI*`RlPh(4>T UP(gV$!eD@@MS6^h&aAm_eOL+ ZB_S#<O`_*`_8th' );
define( 'SECURE_AUTH_KEY',  '3e~hX=)IO4$1{~nl/_^<htOG}EP/GS(sdB:fm<ixt?4n?3y8,c`^d5v?#^XKNtN(' );
define( 'LOGGED_IN_KEY',    'n2sg*?h]`rA.982~sy[b={-Yea;0>;)46>wzY.Q-QV;l}K:=zLR+@3-#zwHc~26D' );
define( 'NONCE_KEY',        'm223Usgf?YSBo38ZuJN}77>a6yb*Q,7nqW,l,12$gpgY.Z7u628q3B9AZem]q8ww' );
define( 'AUTH_SALT',        '&hg-)g);V><u8,?WlPD}6Q,I B2 J`kfC(NGS2l/J<]^7RGlKt%^f9aMh~9{Tp[|' );
define( 'SECURE_AUTH_SALT', '6;1J/n7!3bM^-/]fm#sY%+yToj>Of^0K}&?JZ:j )pecsonPsVC~G7XX(iyHG^it' );
define( 'LOGGED_IN_SALT',   'cUaGMNI!$bmm&O[SJ!MX&m-`o}J3N&m;e+=4qy}/S2JGf=J%x|e60:d>*@5Z-Z6H' );
define( 'NONCE_SALT',       'aT>[-$/^GH9y_AB<Fln+8,*ujht&Zw($EIB86JgW5vk#e;{F/=?.G&|z]l3wdrkD' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
