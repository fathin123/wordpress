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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '3f:xoToYl:z[wh}W_*2R9URbi1SL4Gb%h#P3VuqIt,4.sGxI;uiPZtgf%rsB+i&o' );
define( 'SECURE_AUTH_KEY',  'gB::0{@5E(`<vc;p7^HoPIX.}$COL7c_ngI7XG|`/_fKs]#^>U]R!2zOuC6d(YUR' );
define( 'LOGGED_IN_KEY',    'SmSKI*wVGKdh;nR w[0Hl/rgi5^;0Oill(jX;+SZH&)1hA*}pG>#^ppq%;mJuH(l' );
define( 'NONCE_KEY',        'LG2#^ye+xj(^CRs@l[yeC=|Fp,EHI!q{5?+l];Qe{i+}<iG?7/JQ&&mS{Nb$aW#y' );
define( 'AUTH_SALT',        '_lmk`U07zFf#Vwo|E<Q]k6krw7Db@O2k0PQF^s^ScoG$ecG4#=tbi.c2#@@M*h:O' );
define( 'SECURE_AUTH_SALT', 'gaVhBO8|u2.-cplJ9fGV1YS@`74i=g8k(rQ]}|z!!Bz;5R%%&x.^Edv[#c:Hg6TC' );
define( 'LOGGED_IN_SALT',   'jYeRdYmLTpy;,pxB%zCi@tx{RiRIlr/g gt1M*N}cZ[fbhEPYtwdC9ejrTVZ7QYa' );
define( 'NONCE_SALT',       'J$~oA.cgs^{c1)kRmDdcAL<6M@;Z`?NDLX.?cw/}S.#@00S6(R2ghPRobEN~3k8M' );

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
