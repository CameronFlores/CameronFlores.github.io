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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[C f4e?F+R6b=.(25(87:Wc0K/X=;}/d3hkDd+yk.wpPf}v=wziQdCykai%+k;|7' );
define( 'SECURE_AUTH_KEY',  '&6)/`.Z;w,>Ko7fL,uFADFr>3IMy:MD@PrX/X5NhHVaH=,-sPW)0>P;OUeb$txgK' );
define( 'LOGGED_IN_KEY',    't!CNd)0hGn(KRJ]qECUokE6YA6XJNg:rZ0?r!ZD@lx6jwpo:L Vr3c%Ll&yFmy C' );
define( 'NONCE_KEY',        'D|C0wu[k}pJ=~kva/uVu-`l1rym0zA913`zX~?F),{nINFnvC=PcN+~3!I%X]t~e' );
define( 'AUTH_SALT',        'e{+8`@5o7&J.OVkFNSZd!wt]s#KkLMjm&3}#fedAISN[# _:{R[R0KcWHFsyApmT' );
define( 'SECURE_AUTH_SALT', 'GUpz94V-RG1G J `3$[A5V&I$/p~!rBA6wt:cmk0,<dt-U@(A%XSHUZ#b<]a<Y/o' );
define( 'LOGGED_IN_SALT',   'r>5/7F~bVW#9As$oRt1x{nEJyP>Fz<ro@@UyfOHoJix ^DO/d%r3>Mp50|HG;6m$' );
define( 'NONCE_SALT',       '0j2;zETzzfTeGk+p2nx1Jx;8CP<0o($r3RGW}_x.n|4y%F}fdTA5mwp5f;p:O):]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
