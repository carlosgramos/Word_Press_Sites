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
define('DB_NAME', 'nadias_garden_restaurant');

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
define('AUTH_KEY',         '*(WR9mNm>x$%PS6K dG%`@d6EM_N8`PCUEP30-%k1>ocm4qs.?aIc[^tY:w[u@v>');
define('SECURE_AUTH_KEY',  'a_$t(E51z(VoX4]7XX=a#air$nYN%e`DO^xx#Tt [BP/:yq>?{^;fq?VRAs`_K3u');
define('LOGGED_IN_KEY',    'sTY4,:0V9D{D(?`&5PP}Frj xRQ7B.#uX*cw**f%+YlB?4Gs;c;>xD-Vb.-7&/h`');
define('NONCE_KEY',        '+ssYjatyoIn+;@|}9 JTu~HL`o^u!dw.)%s_p*9A,1Ye;=$_^T}`IsH?SYD}5|KV');
define('AUTH_SALT',        '=3kRxm0}&c[kneGAQ)hPPKi(`Zax[H:d76PlzL*Yc:|9)UPWBp&KR>As*fI?r=cm');
define('SECURE_AUTH_SALT', '3V?DD0T$&nvSF# D>s~R216yKcG>UGm9cdGGfMi`X/cGLX3U(~k@_3dW@(__?^K4');
define('LOGGED_IN_SALT',   ':i /&p_]Kc?({*PEG[Ak^t? Md>cW#Fo>SbV?R3_WhfS3(RMov:>WMJ4U`L(L_,W');
define('NONCE_SALT',       'Fzv|bD|YP] Yin{hJ3PqyzFU@Z3[{z}Vx#*.H{upY.&a;uNtamkGx5&!yt^3CVxZ');

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
