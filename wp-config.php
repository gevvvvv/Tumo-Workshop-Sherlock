<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/9a=@h1q~rLMH:In{z&[g[rb<]W>nT.F^v{z[UX)<.$q?w2JjGk^6_zn)|BDaki*');
define('SECURE_AUTH_KEY',  'Q;|*+P<y%8KVO-RJ~1,iO8k,KOYUd_D.>hxqy6OaCl`U!zby<%aOD98I7zWWpVTY');
define('LOGGED_IN_KEY',    'ZNPJ9@K~j)8vL}?hhHu3w>@^TiNJof+=!4x/a u |KA6ND^xr&IoHd1<ifm{IC c');
define('NONCE_KEY',        '*&`p[(Eg+:Id)/Ef=!mCg i4TA`-!t<;omzwL Qyn$i-|_ku[VbKrGmDmS|@y.J6');
define('AUTH_SALT',        '5/Y{be~Fwjk7~1u|*$n`@doD_jo<1Za8{5f);X]_>CZQ}rrso)M5#6_;qH3w:|P:');
define('SECURE_AUTH_SALT', 'R2(Vy-E F7<?d ;U8}M|UDu$W/Pf7uaZ[x1$wyK*o]eKr~-Hy+?=J@j0E>!lKE0N');
define('LOGGED_IN_SALT',   '>7RZ1yNKg>-tS#[6j+E-a4_VvpH$B:K7{o*P@vceo)fLQAl}AmClRj4)[R%A_b30');
define('NONCE_SALT',       'PFsi$!s4sxgC+L<&U1+ZhnwBlv?V`:*hP)+.n7)1YytSaT[`tu:Jino!A_3AW&1o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
