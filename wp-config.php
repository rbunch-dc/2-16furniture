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
define('DB_NAME', 'furniture2');

/** MySQL database username */
define('DB_USER', 'x');

/** MySQL database password */
define('DB_PASSWORD', 'x');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '!$FCq!43SFgcc$nY7$e>.HF30>BnK$n9Tn:6x2ZI<1JKGK|ZyXU&_{$bOcAEn4s4');
define('SECURE_AUTH_KEY',  '/boexqJ)wS44SCz={<C/b~WC=m-BZ?i=}zJW*$yo}$)vg@#8)7x(dGe;3#4{x-U`');
define('LOGGED_IN_KEY',    'S:rF4*@F/J`grj{Ks-z9EO#`jL<8vbCNWFZ^K-&o]W;!mpAut/ZC*Qg]TeTEaq:@');
define('NONCE_KEY',        'o==| p! _A<66nZ/gI!Ir,yGfE VuC3o)70;7Z95xRb:K:NbW98O7DgA6W0Q*m>Y');
define('AUTH_SALT',        'lEC^;oVIU=hUvYkQ{525Q[@g5]4q<F4 2b^:r9]o=-(qZKpq]?_,&z)lXo(gm`Eg');
define('SECURE_AUTH_SALT', 'Xk8~z<Jbq7`[$PRaX#^@5QN>#>t*zU4^?U=d`d2[*R2QE38eeYu0<)9j:Uvw2%x3');
define('LOGGED_IN_SALT',   '1!CtrA4f.ztz|~KA<}qsWK[PMUqzHD5hQ&>.Bw4Y,aw8GmTO<5=w0][:%7vgp]b`');
define('NONCE_SALT',       ' UoclHdj;W22Lzw+E]cnqr6G$jp9}-snCp%EvDDD5noH0#|jGX,kUcbr^x&OMQuQ');

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
