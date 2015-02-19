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
define('DB_NAME', 'suzysdb');

/** MySQL database username */
define('DB_USER', 'suzysdb');

/** MySQL database password */
define('DB_PASSWORD', 'SwAya4At!w');

/** MySQL hostname */
define('DB_HOST', 'suzysdb.db.10636549.hostedresource.com');

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
define('AUTH_KEY',         '$p8a:#dbnfK.2!iC1wh[9<IgqdtcZIMoc.{$oV+ef&M-T2UNc &(Y#s]uP-+FN[+');
define('SECURE_AUTH_KEY',  '+Yy$(NO]R`1rF}ZdIU+W=Z|Z9U!)2Pm*u_1culCh17~yO{2S<pqeZ0})pc&8:a{>');
define('LOGGED_IN_KEY',    '@BWIO:XT+wrn}E+,g+0Lu2$*_^#nKG^v-RXA,W]Sg{Sb;n[_G05_K$p/[.Fe*dVX');
define('NONCE_KEY',        'x|hajN-,|a`{#~BEc=]Y,,c&|c4s[K+b^k|g`i^B>TMM`-ko(x*:2,1ytRIlWX5M');
define('AUTH_SALT',        'F`*2`XbokPO-x^s,u?|U:(4pPeJU:EBfcAdI<( m;gZ-PJ.5X1rX@$1-j*tYjrYV');
define('SECURE_AUTH_SALT', '|C>;.4$6)uBF?+9cA, QO}+>{=wi-7+GJ3osZd9s0Ckez/tnQRy&(c-X#d$kwX&,');
define('LOGGED_IN_SALT',   'YV$)2UU{)<p?M,}A#2XC6ogLr.{Qg$6j;IoIyzw;dmP/dw]Rf.RT?-cn`-u|7KH:');
define('NONCE_SALT',       '&-F56<BW^2IXMjA6FagD=5v5K/q>IWAGJ#{QT^w0M=:mwg+Y/ufSvTr<UCFO9|l!');

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
