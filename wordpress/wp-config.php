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
define('DB_NAME', 'vitoria');

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
define('AUTH_KEY',         'KjGXEM>U3GC3!1f`|qG94s{~*{NG<s<jX.;9*x`}$DRkVdaB^ll9vF>+{~v~B;i<');
define('SECURE_AUTH_KEY',  'yu5!gIB)dWos7. Mo)%e[PL,R!r(n~Ti5}`%bLp$?Ga?z3n!v#D;m{YS%vxlmHP/');
define('LOGGED_IN_KEY',    'Q(F9JTp9By]N|L8[(5?I7c4aR}_ORSeVRs+dYh4S4:$#}n+?+ p@qm?&AlEuANty');
define('NONCE_KEY',        '+nn?2KSjdyJJ@3kV_XWr).&lgCVMo8.N:2{p;R+!W}RJMkJ%?!E4q+HUm];H(E`-');
define('AUTH_SALT',        'IqBW|uj~S2^DTcjmc?B9N45@vYJC0=0u:ol(FqkiiDK8W|CAl0<~7C%1eI@km$/E');
define('SECURE_AUTH_SALT', 'm&hXLS?pWJlA3Eh.I,Dr0eT)(l?snBT~+Af!U#W;ovB,FbW~Qzh)/a+&a|m. dnu');
define('LOGGED_IN_SALT',   'C3G5E?@(!+o:1=sAQGtcF,flXuiA_KyxH*#s)#(yYuIObQ}2AAI-y?OkJx|{%kDV');
define('NONCE_SALT',       't$8f+dD%+*+~U>kyO(qyzymmcm=0S5rW74ZR$d_1%fIs;xe?|-5WsEWi sFQ;+iN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
