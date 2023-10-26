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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WooDemo2' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Web@2050' );

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
define( 'AUTH_KEY',         '+wd/^.cRSH_8EK0&.~4mCmY7*bh=@^(( zr2p3xBT@?~L]8f],R>J8}Sf.5b=YSM' );
define( 'SECURE_AUTH_KEY',  '1vbW|,S4o_)ju7p^^-D!k)O-!d4>h&?GzO<nSsuW0tBbh@.QhHl#u2scwO|&8)n5' );
define( 'LOGGED_IN_KEY',    'uM YB;0u#sdO,/|ER(2FFgpn@*QTgx>{siZ1L:D||*4v-=a<(,^cBY-!V1HC%!6i' );
define( 'NONCE_KEY',        '0L#z:oTZChKEWG5@> r@ Kqkd{F@<L|E.<pt_2987_X~%(UA& l4#/tGx?XH%+Ix' );
define( 'AUTH_SALT',        'hJ.JE)AYPg8z!s|%K>aa-oc3Ogf:KA7|wpQHAje[#3<b}Q$9) 8M?t*:_<*XyC*/' );
define( 'SECURE_AUTH_SALT', '4LTKw.r51(XNk&{:9vknp&Eq1r7;gVHl,UYd/,P*f_rj0J8,rM1&~X9} u}8f)ec' );
define( 'LOGGED_IN_SALT',   '/-&Q+375`9rUtrJ`9{/J{NiQCWxe~,X0vyy>N)Q:kC>umt=@{1XKtlkm>>.fcp0+' );
define( 'NONCE_SALT',       '~a.+oH{,YW9:i;Itclpd>j*5(a+LoE(iN:3`}D_OfJr5{L+>IzLX!VDE,U/VwLVe' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
