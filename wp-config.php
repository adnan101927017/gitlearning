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
define('DB_NAME', 'email_100');

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
define('AUTH_KEY',         '3=1z&bu>9#Z85])ZNi99m7zE}/k|EMkUQ.BvVqu),uMhz<X>GPk$+J{I%kO@hAt$');
define('SECURE_AUTH_KEY',  's(t,iu+[w-P{Z`=,Vm>tng=Q0[`+e1XjqY8bLN4 )|i.f~fO2f_&G1P@$7L&gl}-');
define('LOGGED_IN_KEY',    '>YFkNC^]sX 4f8S31iiVT)LO,-K1/.A||v64`eg_29e9Z;KqZ)Z-Bk6<Y2@=;2?/');
define('NONCE_KEY',        'o[~5GU@*GKn11$6Lcadq7Id)T|;fK:btBwzdCOzOdvh!yX<F{45<iuk#`T{H0mMl');
define('AUTH_SALT',        '`>wl`QVE3IrrX2a!9L4vdjPMId[?ly_in,P$`qTBBdp7} L{C}xJ<P<J?LPv+fH)');
define('SECURE_AUTH_SALT', 'g`b$>vQ&>tYEl;%41xSP]!VuUTrd/D ;?XCq>6xOwfa{Eq,WXasChPKR3RvY;-7}');
define('LOGGED_IN_SALT',   'uqEF^yAJT`Mhhzq:Jg[=j)Y}{Ky88@!j.?EFF!k2k~35GoQO4~q^]E*;6}u En|O');
define('NONCE_SALT',       't6!JY=^[o/:ULC-0!z=K^w/QSA1hm5Lz3mrA.?$O0yyrB,-R:N^4vM,f!<C:/F9r');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
