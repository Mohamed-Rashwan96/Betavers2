<?php
define( 'WP_CACHE', true );


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u896852281_Bka6G' );

/** Database username */
define( 'DB_USER', 'u896852281_VTsX4' );

/** Database password */
define( 'DB_PASSWORD', 'H5v5XtKdNE' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '&;Z&fto+ZQj^R7@y}faS`6Z]sKER-SeSxfldNMmA<)kq}P_BSL+6uOPQ+2X{DvcB' );
define( 'SECURE_AUTH_KEY',   '1! fcW-[WQh`W_SQ6u9HSX^_sq[h-E#>,gYMKt1HOvEyUr~zG>_}e}6y1t>[(qn0' );
define( 'LOGGED_IN_KEY',     'hZhJ_IPdky^QuHw_=4gnrv?.5<9$?FBzV}K~`64hjQ.kv^?Kf`fl36;}IFpQgqau' );
define( 'NONCE_KEY',         ':e@LzZ7>}w v`/irz]pQt:P1}$n[Dd9;^*hX~gJ%:|SX-K` 6:@vE[e8w*R[r^I7' );
define( 'AUTH_SALT',         '&StQtq(R9dX6CKL$P^I$74Rm[u/l.1sor4F]q8/yd2*1OQu/-tV4]%&w{RvU&`;j' );
define( 'SECURE_AUTH_SALT',  ':`|w1>g%YR IQC/<$OqDT#p2f&s3n|WE+$053s$34l$;_~iu~@OtL588B0}K%qU)' );
define( 'LOGGED_IN_SALT',    'bQXjjVpK{!K(NksA&QHc}aSa)Lg}}9CABB?tQ<-edo=V2x)|0BK-`C)*fIs&eSE%' );
define( 'NONCE_SALT',        'jH[2G5OQ;Vz:my{V:/nt32lopv8TM_d87cPiCw?9zcGQ_l`,F!liax^(5(l!l$@]' );
define( 'WP_CACHE_KEY_SALT', 'v-t=wx=P0XT@W7)*$A#Z2pNZ,YOmF[xGg>n0_|WW1lA2x0=)]BGyC/UUs{I~l`OX' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
