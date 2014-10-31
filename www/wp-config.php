<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'vh37047_pg');

/** Имя пользователя MySQL */
define('DB_USER', 'vh37047_pg');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'r4VN2S6M');

/** Имя сервера MySQL */
define('DB_HOST', 'db01.hostline.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/** POST REVISIONS */
define('WP_POST_REVISIONS', false);

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']pd%j&koE1i0(.|kL-sB:*PxS_jO1Q#%.%a}2A50X FXfw-Dl{]%6~GT>nN_geZF');
define('SECURE_AUTH_KEY',  'C}}e}j|Ag^4%No8@d8WFUc7K{UJe6~MoFsI4I`NgnS5{=,H}b_7JoSYvdu|<le )');
define('LOGGED_IN_KEY',    '8;UV|/# @V*W0KCv,uygOmX-&oZ))J7l:~W,bqZzT<!{{f%8?C|_==B>rFE/$g+i');
define('NONCE_KEY',        'lh@+ZQ`;J#2#T-`i@|S65RXs~:Xx5LH #>v%$3>y!8gu^kJ0H)JRX<I@89>s<k;$');
define('AUTH_SALT',        'xpvU5OTyEe9]AAL!as>L_Dvi5y!#k.1 _TkHKp7I:-=Q2)-9YS%+lnq5]5?|YXc0');
define('SECURE_AUTH_SALT', 'ieq4uM+WU-7X1j(p+v47N)K9yn/s.##j]0-=+A#aJ8`kCJEtK%zx=^D#E1@XU0m3');
define('LOGGED_IN_SALT',   '.X;HR^-Jo>0<d7?}y52*X#5ayh~dxZ!_2;dRqJy(z~bg!=3*_~C*@Ep#6;;N*--^');
define('NONCE_SALT',       'n#@2LGBuFz=K4$o>t]&kdx;aZ&)5vF8oqB_,/`+dBwMIS2;9[,YRTZ:(ZG|+q4{;');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
