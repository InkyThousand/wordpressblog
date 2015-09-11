<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'cgX v!-QLdh8N~G%?0ch[4zw.~0F;o--OI`49F+w]6+5$Ky>}+r(g-;Xc)*6!o_z');
define('SECURE_AUTH_KEY',  '<*mOr9t9l?h0aFbP|R0%dnZW{s(C:Fhgp8D}lL]nH>J&hokbTFV5:h)O*x>q1O6 ');
define('LOGGED_IN_KEY',    'x}tf[k>Oxk?kE|`&aaPb{T>t@tXd,:xY3b#qF^QjNcZ5&dp1i|2&&,6Ns%POw`FZ');
define('NONCE_KEY',        '?yz_&EW{~5t`]u~Ibylh(JKa-O95zH^*G3w/((&1p?2DyZR{5o~s^*B95@K?Zp6P');
define('AUTH_SALT',        'g[KK~%,cfIwe jq.)pZ7+Xc3# [|atj.>(0~%yr%`r9N0YHZ9mesW|.Tut||1!!X');
define('SECURE_AUTH_SALT', '` iC.PR.+Hrl3S,BM~C-lhf[pUG`B1w2|KON7YH+mt|0_Fq^VdzpQ&/BOMp5e[iy');
define('LOGGED_IN_SALT',   '5hh4GLu5`uv,|5T1bHT&28^3bWc_I<Kthr/K:o|vIHlXf1=lqv:FPA{0Q1d80Pjo');
define('NONCE_SALT',       'b+qz,Q$B*F+ZDP)sh+s+D[!15%]26=gl]GfA)ieR7:ZPVSm]NRS.T,BkUn)o57dI');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
