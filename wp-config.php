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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '(%<{~Vm1pk_ff[E7()[nM9wuT7n,R vk[L^A)U<$8v+}P4csfZ=}SyCgnqh&6%]b');
define('SECURE_AUTH_KEY',  '?6m~e?#fdRVvqP,j1._V2-ahg0uOGl.ts39?[Q=sZS8aeLg>Pj15ycBfAIIpxuEE');
define('LOGGED_IN_KEY',    '[Fhj.H^G?q[XME|DIL=?lbYCgp1?2/W?E0S_% Ds+<A)dSSA40%RUTH$=!x`a:DK');
define('NONCE_KEY',        '.`81@yN/E6uK Q0!:>k$~r3Bq%bLz`XF!):? Q]f0j>ZceBs+oE!0M}`Ee^<eh])');
define('AUTH_SALT',        '[wpa!k:Abd?2bp>lxsv(VS+1zkU&t.=y)q}~q}-s*o]0ZGg5EK u[9Zy}ZR}l>]i');
define('SECURE_AUTH_SALT', ',FHJecOhfS3Zif={Hs;3InK{`(>LIY|wr9SW*|]zDf5~;H5*e6^Y]sg8t+b 1Ada');
define('LOGGED_IN_SALT',   'aU:Lr*G!ZppWRH{.^A*1jnu$F!U&&w#nxH!mN^4/<8LeME4k!C-$3`J-I:K7k4vT');
define('NONCE_SALT',       'jK|WG{R_8zDd=4;%uSsS4nsTCCq~g=neuIz=AS_}!oI8P>f]f6=MGlds]MEE73P:');

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
