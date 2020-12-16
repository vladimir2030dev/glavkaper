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
define( 'DB_NAME', 'glavkaper' );

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
define( 'AUTH_KEY',         'Nx$b}E&&<i<{;I`pdkz{}=9jk/D=)8ESSADx,*SY +MqL&`?QmIj8w_wwcM;3Sl;' );
define( 'SECURE_AUTH_KEY',  '8s`ZM<4/,SR@0q!dICt~!hv/Q44qI=1.8U#_A8uYf,](3L5[npdwsd`F2t>UPuZT' );
define( 'LOGGED_IN_KEY',    'qIOFY_~5tX:=6/Gwt9uk7=}iN|X*)qmJ O{@DX;I63ZcD2Gk*UfD81aC$Uf/WDxq' );
define( 'NONCE_KEY',        'dI]>w6h4{WW[VdP^CV70cM=kTvWGq/4#Xn_^mtH>zBo]8 :IZvwI%nR?g<DEic50' );
define( 'AUTH_SALT',        'urQp~9~mf,JP/hY(G7d;y,HuYg1g]oU~`,`-L@X h+9KbmDe7d20V)n[?k1v1@rR' );
define( 'SECURE_AUTH_SALT', 'w;sF|I2>9kiF^-DW%4[1[{F4-.-Dv4M0oLw|E&NseaK,[mg&Fapnh AXu %0/yBq' );
define( 'LOGGED_IN_SALT',   '`a-ee^M3{Z!fFw^%]2,}LIo)7}%AZS(w.^gDZ:A*2UG~:aau3n^]=r4_*=Rk/0Eb' );
define( 'NONCE_SALT',       '/_U;[/ Q<{Vg&;cgeA,!EE++WcM$!BmjV.`2c3Om#At36lX[pdyyCyn[S*Xq)z5w' );

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
