<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '2217-22_39277' );

/** Имя пользователя базы данных */
define( 'DB_USER', '2217-22_39277' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '18ca912c17765a8d331d' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%d40uZt?{u{yL-6E2VUAv_0}8($b*#bk`%g AX6BV216ZoG~vUDy{5deG:kH1<>F' );
define( 'SECURE_AUTH_KEY',  '>@TVPbj>)! 61h8nbTTJqpOj.%t9<=8LZy}WhG;{ u*jwf*d][OqMr[GYdu2Y8*f' );
define( 'LOGGED_IN_KEY',    'stT61U6m<i(S?T[U!9E.CAbo~R9/c?48OIXu3W qbVH@#<{kRk>]ysd~VcVN@8)k' );
define( 'NONCE_KEY',        'H%@B0w!;rgxXwyS.C`B9R1p6iLY]qpY%hf Gm(Z4iwjvoPQ-kz7azJgfL9nj4Yb@' );
define( 'AUTH_SALT',        '8/~eBlqZo*M.`sWu?TttNYGN|SU>#}8z BWjnfKxSxZqR0kzxt4jGTi*/gV:sB!9' );
define( 'SECURE_AUTH_SALT', '!KRF;1H67$gpESF:${)Qgc9E;^*YFRg6Ek2`hP$>mqsC^QYo}F.s9;k}<4mSc4vG' );
define( 'LOGGED_IN_SALT',   ':%!_8|g7jP?$)*v!yt z~X*hWpL0I>Cq07il$r(vu?HYHDnx:](x~;3*K49BDBaB' );
define( 'NONCE_SALT',       'ennN5OlK~;{Dl(B-m]57zKTATxGDOA=PFboDup&::KNR1i079MtSG/}Cx_l`d4bE' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = '5TsI8_';


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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';