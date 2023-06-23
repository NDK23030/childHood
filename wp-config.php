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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'g%cE)4jd.0m+}q]]y|;U;KC0Y_^7sluC !6<q;eLwdW]TsuHqMbq3vDQ0&C-56N!' );
define( 'SECURE_AUTH_KEY',  ',Mh=3LTV!vvV8}WaRBJ{k&~2,OWM7#]X#a`1iI3Ns{[5j/JG3&AhX.+o7.KFZyMg' );
define( 'LOGGED_IN_KEY',    '%j(aGR7#fX8-uzA^#n<u8V ~{1~X*5~qhjpE tlJA62D.^Qo:(CLjWxg]$(;t=UU' );
define( 'NONCE_KEY',        'A^&gN(K%=|V(rO}$UJt?&|ZRk`*f6e/SCh_g?g$ho0;-h$d3g6bnn9$ftvO<hE16' );
define( 'AUTH_SALT',        '2gBnFWa|z|S0b}B,WXKAl hjwM9U)KyRh2m5+?Lkv>/Q&zNB81X54V5tjfNu[IQW' );
define( 'SECURE_AUTH_SALT', '#9Sz2W~KLOAxyDKq+H[3Uq4zjcGGSCcHAQT/D*@Oix^{D(dz Bqaco>BmMuxm6W6' );
define( 'LOGGED_IN_SALT',   'mW8@Eqp>xm p_!.6-x7K *#+$JZUMc9U ]XXjoVXz1E }!6!54Rpv !Y:07t2b&(' );
define( 'NONCE_SALT',       'V,9X;I+)^A^df0NL4!JBHHxs<|.59bi%ga^`e[mAyZlsO{9k{>A4E&(1.r8&r!#q' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
