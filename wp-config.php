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
define('DB_NAME', 'q68196cd_wp1');

/** Имя пользователя MySQL */
define('DB_USER', 'q68196cd_wp1');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'SSfHlQckv');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'W@,rht2S0JiI`}xsJF7xP~S|!oKxm^|Ygw[k5sI~QI3S(k@Pv*+.w_0rZ+^OYS2#');
define('SECURE_AUTH_KEY',  'SMZDmO=HO;B%OTmF$E*b`svCC6qL$J6WrY!Dz2$aP:`KB)>>f?`!j}KY=ND7$VgP');
define('LOGGED_IN_KEY',    '?vI;x5gA]iJ%$pI/1{tAHIf;CBST1FQl3Y&n6BIj)EV|{N0W^XQz}{d@shD+TU4f');
define('NONCE_KEY',        '9?{0!|x2,It71AvQn--(;DS`$RB0fo-UKp~{2qV~c/tDFcb 83Jy?9eG0=Zt@ofP');
define('AUTH_SALT',        '-wAj7QDZ ATCcTpw}i&$bG0rh&cb;>s?~ba61:mq|00G2EmMsoth_V39a>&`~S#!');
define('SECURE_AUTH_SALT', 'F,inp/0Kn^S1MC9!G6}+/K1KYw+I;@}40J ^-K:gb9[B*oC%vlg3h/W;!vW a-C`');
define('LOGGED_IN_SALT',   'ZWJ8*rak3Ruls.Zs92T]##hE5.PAF$|@)s74.Z>_BVKu#z?E>p]p@,b_w!yW,L`N');
define('NONCE_SALT',       '_[ YdNCz/-;x0j1Qv]5f#MC&+MF9~CEOCQ!MKW{?5jnH,uTiCLR.r8rGxHYoBJA~');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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