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
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'newuser' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'w9W1]i2=b32z7@5.C3ui%{buiLJ$/lCR.#L9se~mCj+!yb{a t%5`yvWnxRIQkh#' );
define( 'SECURE_AUTH_KEY',  'eb;h$?F9,P2bW(?q0^ N$Pcj9(2A`@ju(*u~.egjkyLtZSF]=i%x|!ZRWZWIA(vE' );
define( 'LOGGED_IN_KEY',    ' ?!A]?<c8]hcI4)I^g%C$TiQ|1=/aok~Ii.uPc?6*,/T[fT~xC/2;aggSmc[X9}<' );
define( 'NONCE_KEY',        'g#Rsy>Ij!*(,VyqH= o+3&*5`.~9-h&_[Zj>xl=Mg<C?c!>T8y5ERx{zV#c R<Gq' );
define( 'AUTH_SALT',        '5wbWe=nV4AH-qO6z2U`CvbRtWVbP<%7xvQ4&-@.x.lXMY-2e`Q).#>z3#oCdO_w8' );
define( 'SECURE_AUTH_SALT', 'O#XoR,xoIt@_u qRg)0yr7IIt%C<Pei92W_L9WFV]0UWN)il@I|SD(OUD9**2uHi' );
define( 'LOGGED_IN_SALT',   'WG?N.U* jO:eMmj6SSb@!ShF%O,LU?)[yBY2mWL^_g8teE([?J-a@^qaOD4a>Mmo' );
define( 'NONCE_SALT',       'lugEvMej{]jq}BSc C&0Au5aw^a{>Yxsg&!ZkxF>~]+lax!kIgZT9E`i:n)fN&9g' );

/**#@-*/

define('WP_ALLOW_REPAIR', true);

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
define( 'WP_DEBUG', true );

// разрешить доступ для установки плагинов без FTP, напрямую
define('FS_METHOD','direct');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
