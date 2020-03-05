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
define( 'DB_NAME', 'kitty' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xGaqytnhMqf&VE!0X?^9XZ>UBXs,yqNjrgCuAdpbfPC3GZ%+*YJ?]ZsDLX0Xu9B&' );
define( 'SECURE_AUTH_KEY',  '9zuuHAMBT39/,yG>i?B3K[|:.?sLBMunn9HE[`FKT]3(wSF5=&@^AoqErW@&_bOT' );
define( 'LOGGED_IN_KEY',    ')S2Se%b.1ZrYH<0GF|qNb&q*?Cj!fK^f& A2Z_,w9_=oC_dx~ee?C;abyT:1jGo?' );
define( 'NONCE_KEY',        'g^dfS/%A|O~|At;MA4#8@%tbqb8[8H0):;W{iTR;%MEkg@{Qp^A<=s uYPUYt|8E' );
define( 'AUTH_SALT',        's~p?tt4~A%`#:mLXC`,ZWu!e~I*|-2q/ES$2]m4j<7=Yx0M@t002ljjQ>&n-XUAV' );
define( 'SECURE_AUTH_SALT', '9:6v!,F0imMi;[VLoq>aLk/pa;cZ@Xh0~^kAH>XClgg-3(0ZcHP5l*6U|G9%A-q{' );
define( 'LOGGED_IN_SALT',   '-0LZQeMv5F]h40&PT6.z4B1Um}caKCCO%wwtu0{)[/CJyg3Ujd=S2RWCKHV&iglT' );
define( 'NONCE_SALT',       'huV;wNnYo~2ZBM:m^9c|XykL*3dG5xk|m^op/2fHIF+R`2cr(`*BLjx^S}&5XUb:' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
