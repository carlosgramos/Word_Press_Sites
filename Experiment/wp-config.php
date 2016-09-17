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
define('DB_NAME', 'experiment');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'uR|>=J,m=E_X]G)Pk<i`24McNGjKj,Gy%-QwPm_KIQwD(MW9_`{sYhJ23*S=LWzl');
define('SECURE_AUTH_KEY',  'zdq/GI3W-h1X>KtU^&>TYyQ|;<5a3?8kB;nMQ:q<4$%~QoaUVK|5:|O^OBo!QyiS');
define('LOGGED_IN_KEY',    'SE,9UkK[L)fY+BLW1o>F)BV~cM{NC2q&h:tkbg(csT/e*EGl;)AM:,:k.#p)7(n-');
define('NONCE_KEY',        'yDOQcmkF8w4Z*x@o+%*@;pxEX4,tZ>`Q1{B-qJR+<^TU;9H_v32V1S}8!E#i~vA=');
define('AUTH_SALT',        'tx)7N+FNb9kP(Du5T>@`p|4h&VZxM-mRjw0vjj&IAfPL6I*2#`Vd$JSW%vtg&,72');
define('SECURE_AUTH_SALT', 'P6PKBJ1aZP@@ Fu)A,SF2L&0W8t$Cge($FJiJGXPA`.8tN^a-9H#.z(4mDC[t,)z');
define('LOGGED_IN_SALT',   'o:9.t!}x~&bhYrj:b&>Q@[xH)3^l46trHauk6nK^$n0q+?1O.e19u1sV/bdUs?`7');
define('NONCE_SALT',       '2Ee%$+!GN33j|0Sa<kPHA_3e|35:{`9<sEFj TlWXm$Mf/W*%n;6!lM.A=h[|>;^');

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
