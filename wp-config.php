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
define('DB_NAME', 'prospective');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '>mf?Csxvv+Fa%`R9~OxU=c*1JLc+rCSgkrb;SPN^!Vm;7(>x]h[(S-FU{}`:tQUR');
define('SECURE_AUTH_KEY',  '8Wn?0t_Ov<ZI},_.Jte>rkPl0~:v{iy:KXe.`e)~~AP$1$mx1#9^jm!STH_x.e,m');
define('LOGGED_IN_KEY',    'Be93B:_!U!ic0N<KkXCSDac88=AdOEn0EcCn[;sj>k)2xv9,.L?0pB9rJq*& rN0');
define('NONCE_KEY',        ')49*AMQ7@[IZp#voMC[.LuGvs>eaF,%1vk&H`sP%<}vq<vbGE;3RcYHD60y:NQ;Y');
define('AUTH_SALT',        ',<uT}v/2YL#NF&th96BBS1RsHNpXZaqR6pgXgZHk4dCC@KrCRu)74JB9ZE.*E8hY');
define('SECURE_AUTH_SALT', '(eY[]ONTyU:EBsUTM!N?P}oNH^YGeh~6Le7b2erX,m09G$?V;vqTfKTdsY?fR<^7');
define('LOGGED_IN_SALT',   '1%D&`>%pz{&2b%jG upxMY7P=8=VhnVV^bKQLIo$H-}L,>C.^i>-Be+FjxijU/%:');
define('NONCE_SALT',       '#$p?s;ziZOv1eKo`i|h$tOo$-}ju~XTqD!W2Wd+K:->|sd>HVBb/W<)WFX!92[o%');

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
