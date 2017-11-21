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
define('DB_NAME', 'ttwp');

/** MySQL database username */
define('DB_USER', 'ttwp');

/** MySQL database password */
define('DB_PASSWORD', 'ttwp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         '4IUN}25?J- seo)b[+,L/lJjp$ vg&f^5z]^dwgXyQH<V8S^fo&@r:Dr}Y6-rn(8');
 define('SECURE_AUTH_KEY',  '- N$Z,1-<83sT+qtK?#uM>zaox2y2WG>W}9_2Wa7cDy#*w fQ/vffxT-6NnbG.i1');
 define('LOGGED_IN_KEY',    'bK&[J8WbI,b*.yh9G!u(.?Pa>Kyk -J~H=~aC[XB>%cs3C+ -X6}Ow<4mr5Sy:!L');
 define('NONCE_KEY',        'u*b:/oAl-xr,4,lQ.o;{]:LRx`;U`[3T@7JAHI]JmHLpHaq*sEt3OM- et6C L2#');
 define('AUTH_SALT',        '+G6-mf|-P%Bna@mjPW.syQ`p1O){&z&}?f:RI8r/|q>yamcc.Nl|]RQXp&=xl-iA');
 define('SECURE_AUTH_SALT', 'mPlu=B_`|&H$V;|X4GRz`1,+v|;pXXQ|GZ8RtF^mQh.jcOs_!~Ra~D(WfTyfka-q');
 define('LOGGED_IN_SALT',   'a||*-OU12+Xq##&GO[I#Er6v]1c {RtU >Q]9aN<@<95zRqIgf-X-M`F/u@2DL,s');
 define('NONCE_SALT',       'QKtD4h4Cg,0{12K?@+`])-<o[*@vnPcr>(Es#*<lfA785tq# $6R;6?J%jnR&z(|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ttwp_';

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
