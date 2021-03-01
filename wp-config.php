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
define( 'DB_NAME', 'polygone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '4F<04/Mbz&<dJ70EK2rXNl=^Oi9$0kI281C!{aTC$?s,&9U|BB;9_<!A(C{47:@`' );
define( 'SECURE_AUTH_KEY',  '}e?s7K-EUa_&?s;YXsk!enqIn8S;H6uBGpy0<qSvUd*Yr:gu<V?y0#SXRtE;y5;[' );
define( 'LOGGED_IN_KEY',    '|D`zv9W{5-*dV=lFaK|T0o97MAuP)p-L3Dqw{!/{iC(P6{n,3<Ojxm>%/_o Kz;Q' );
define( 'NONCE_KEY',        '%zR(S4nU4&nV@+%OI1@J,GTp6`+<$z^mmF3w_PTL<u09~$0E|,ymO*5B.p$zPvls' );
define( 'AUTH_SALT',        'jI&Ksd$tY`;h2OK1c5T&/@$+o/%@7-}SgcYR0/*}#o*%<HYB-$,o$){yaAU)_o|%' );
define( 'SECURE_AUTH_SALT', '1lpGX}H#izb[?g9C3YUm4e?mM1!Fu*fjci8493q~wjK20xgQa{kOu-XBU _99W7d' );
define( 'LOGGED_IN_SALT',   'j+lHuQ]JAuqO*goDu MlBPP=GXs0QwbWtN&Yaa`&Xo<_T&X}Zi,&|hUIR xR!1^U' );
define( 'NONCE_SALT',       '{P/+6I,+K7WXMPvg`Zcm3 Oho#h19_a8ml3b2*gzi&NClO,sd^1sqH/],frO&*bI' );

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
@ini_set( 'upload_max_filesize' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
