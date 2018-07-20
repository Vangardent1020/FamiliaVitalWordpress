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
define('DB_NAME', 'familiavital');

/** MySQL database username */
define('DB_USER', 'pardalis');

/** MySQL database password */
define('DB_PASSWORD', 'pardalis1020');

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
define('AUTH_KEY',         'UZT%26[d 3 !(M7In e`|u{u+4$pM4@c)6,Nt>N@I#!E,DealKMub3,FN]11:=,%');
define('SECURE_AUTH_KEY',  '`[)+7c))n$MfVQ$5$ENj`2$-uEnb$zJiFdk(1<h<]EgMU;@8Z,2$tv6Vi.h3|BxQ');
define('LOGGED_IN_KEY',    'xD?]}Xry9)6PKp/y<vW@9pN^P.BlntfcgLqjqXg?(7TuyZIM$K:P(PVZI-<OQKOg');
define('NONCE_KEY',        '+%*6NvYgRcZ3]R_)IcWh=O!s])4 =F3o.aw|.CI*f<G;9mYw]9ZTprym!eTsb^12');
define('AUTH_SALT',        '0Vk1T<Pr-)7:E18[X7ONRPA9vpE{SeN[uZ[FfYS_akVR8ZlOa,Q.O=xHi2bXiR.]');
define('SECURE_AUTH_SALT', '!PoJn c5dfP6+>Jts]),Co%JMJ$ojA/gD~.!/p>q(BU?H^XTIzGV?U%4LQ{ZstKB');
define('LOGGED_IN_SALT',   '==+[V5lk C}JTj$Km]`HO$]wS/gRD578_a E9bF/q}}Jb_|d1|**6+K3nn-*^>pp');
define('NONCE_SALT',       'E;?,%_Lzg+g@QByMi5tZoYX=ae&PWlH&K8CCnOjasnHp@0#I6F:Aqyc[zXxA`waZ');

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
