<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'viva_verde');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't4XB}!6dOZvA_1QirUhxx)MuS%%?^=x,%/U%~u}QGdFIkvMWXq%:IV7t1F`BYrg/');
define('SECURE_AUTH_KEY',  'U%te?#as&aUP>S`5hBz;H8ayu;<}1jX;X FhWZP]QqMUY]CRc^^$8kRwwh?cX#}@');
define('LOGGED_IN_KEY',    '}??aNiR3k|?g9YcH/;7Sqw,:9C7g}>,|FQ$rCR-[Y-(%zTv|c4!=TDV/7H,q;unA');
define('NONCE_KEY',        ';-5hsRo=kd,:n>?iJdvVd6s7?5P|n3101c0-9rUhr05rkx*{$g_)F)I3H7^4BOsT');
define('AUTH_SALT',        ']cU3]*uY]|2^IR=a?%GA19%.r@ kiqEtinmk!n&=5Ti&mcyYnnm_YWi_$nHO,);r');
define('SECURE_AUTH_SALT', 'cp;1IC8kKzm[GZjK0H%]}.`1Bi:tsqx70:8|xHU+)K2V+B@G.^r.s;=[)3nO=7Hn');
define('LOGGED_IN_SALT',   'uKXOwhV!C,N,%q{-G6QRw_,TX6}$D_1c8#l(5;N)N?(W^ZVmaDm+-bAi_~qqe3q-');
define('NONCE_SALT',       'Oo08bLDE[y*[T:JqJ2_f4gd*;ej-DSko>!#la^4oJbAmH3ig#f&qm=H*FAD`R^F:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
