<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bepnamduong' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')YR)>.;tm/w=Kg=)4tWJ-$z46x%up)]7r]_]m`YsDxXt+_Oe3jNA 9j|zGXR4}0H' );
define( 'SECURE_AUTH_KEY',  'g0#rm[q+6,8D/6g4{Iu.j~F|sTTbsgWx{w8G?X?3Fz#o5wI@dhorPavcdf&MCV$~' );
define( 'LOGGED_IN_KEY',    'B!9,)4QSq6j*|z1a2Xsgwh[@C?9w?aK84DJAN}MSH+tx,0dk<AE1nBt?X]dW+]Ax' );
define( 'NONCE_KEY',        '<;*9)0?gSvE2Lx!Fxx+_,sMq8%0}(#S:/BhLk~ktpf. `$J^@f2q9v>)/sz`(&iJ' );
define( 'AUTH_SALT',        '-K~@3}5bFLXkoI9~;WUj$@F{)cDS y0tDb:ugqS3LA qE9q[*x{a,z(&6sW>%NEY' );
define( 'SECURE_AUTH_SALT', ']PYA1<<,5lsvkX:r<ZdjlCaBD8|EfRMHHD-= $DZ.g29h.IE ~V>f@_sz-aTGLuG' );
define( 'LOGGED_IN_SALT',   '$UG!P^`r{$#aiTL9#!p,^2IMq/,OBGrmrJ=Vi}RWoy:7hRt/1eqc EdM4:^Q_Xh{' );
define( 'NONCE_SALT',       '!^pd^Q.D ;VxyF5I.s%gM3T;4I`DBPLZ$;|^~uF?mS=s[,esnKG.]%5KHmo!R;ht' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
