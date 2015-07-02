<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

echo getenv('PF_DB_PASSWORD');
echo getenv();
// define('WP_SITEURL', getEnv('PF_BASE_URL') . '/wordpress');
// define('WP_HOME', getEnv('PF_BASE_URL'));

// define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
// define('WP_CONTENT_URL', getenv('PF_BASE_URL') . '/wp-content');
// define('WP_DEFAULT_THEME', 'jshomes-platform-theme');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
# define('DB_NAME', getenv('PF_DB_NAME'));
define('DB_NAME', 'wordpress');

/** MySQL database username */
# define('DB_USER', getenv('PF_DB_USER'));
define('DB_USER', 'root');

/** MySQL database password */
# define('DB_PASSWORD', getenv('PF_DB_PASSWORD'));
define('DB_PASSWORD', 'password');

/** MySQL hostname */
# define('DB_HOST', getenv('PF_DB_HOST')); /* default to localhost */
define('DB_HOST', 'localhost'); /* default to localhost */

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
// define('AUTH_KEY',         getenv('PF_AUTH_KEY'));
// define('SECURE_AUTH_KEY',  getenv('PF_SECURE_AUTH_KEY'));
// define('LOGGED_IN_KEY',    getenv('PF_LOGGED_IN_KEY'));
// define('NONCE_KEY',        getenv('PF_NONCE_KEY'));
// define('AUTH_SALT',        getenv('PF_AUTH_SALT'));
// define('SECURE_AUTH_SALT', getenv('PF_SECURE_AUTH_SALT'));
// define('LOGGED_IN_SALT',   getenv('PF_LOGGED_IN_SALT'));
// define('NONCE_SALT',       getenv('PF_NONCE_SALT'));

define('AUTH_KEY',         '+MXAc.v1N8lO-}D9b|*)HjocLeyZ7|)|q$6C?t6d$/2#-52_,/qC|(I5!8TV4~Kp');
define('SECURE_AUTH_KEY',  '[Qu,JOQ3P[}8Q#4a%Z9mkzX)Sx>!oqICY2s*Xop.b>&Vi48b)l`kZgFqbw-=Cv.E');
define('LOGGED_IN_KEY',    'k2h;B@YoO3:3q3zvHy3OQ)+h_:e3UO5|oi]kUX-X@n>jHoJ+o5yN^j,BIEDRvul-');
define('NONCE_KEY',        'lz>SB?j/30<1)@<3u2n/<17GP(fYt|A5SlM3wm.`A*[ZQ0dRq o?.*>D+Jo32/[g');
define('AUTH_SALT',        '|vR?<K0xn0!3|JJE|dtj?~J4(HQo_[]Y]$?9#?-VG!o!&{HDRZh1Db`Vs)+F]>]W');
define('SECURE_AUTH_SALT', 'Ids9o-ePBOc6f<nEVipHT!{~pr-qhHH q:.>E=32;B?{T.E(j4|{~&$+-w-j[#.4');
define('LOGGED_IN_SALT',   '6k,j>pA<+1+AASv|&)V+QHiO?n87.]wo!`y|-Vv&0lFG)u]MM9KWcapsx3:lg}02');
define('NONCE_SALT',       ']ke}WN:Z!OkDPYCYFahF/=5i/#T_sVYY>uA{et=LTO!d-_T]ER-+Vgeo[,1M1W*{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
