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
define( 'DB_NAME', 'vomalekr' );

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
define( 'AUTH_KEY',         'K:9=ZH;LK*;HK6%e_K |W;p^FjJ9!R|#]nAKG*}:?wzY>Y0!jbkc|6p;ewP=U1AD' );
define( 'SECURE_AUTH_KEY',  '_w6DP_(bg2B2uVm3Hfyg%$w]dAMmMy1?CQIhrB4v<h;?`5-){Am?F0_dxDNcU{$)' );
define( 'LOGGED_IN_KEY',    'ypP-vZX<+oIyY:@dH&TtU}=Td(blpYhE#!_1wrOvO1|P;KP?!ecmzI_I0DAt.jUf' );
define( 'NONCE_KEY',        'gtR]-Y:Tp>F{X)nkPCbJ5uxIPYO+g>R(3HhHlW.RGg9L=2l4o{;<, P 72J;Q^wA' );
define( 'AUTH_SALT',        'Kkk}EI:uT-64YTf^ay5PNk$hfQqPZ/KKE{GXz)BGraPmy0P&wD=Ob2tP]FGagO(A' );
define( 'SECURE_AUTH_SALT', '^cnrSf1vem+5n^lZbUy=v-t7Ou3r#YgkoABI+(4+VO!^QOy:W7-5^}Q|biG+0$0I' );
define( 'LOGGED_IN_SALT',   'e}u5d<y8c?$kpa[e,2T1KVz~[?5Ks%H9`Hf~m)6{4X`q|2VI4KYiG-%KHO Q94Ky' );
define( 'NONCE_SALT',       '_(DOGIQ44C&8WgJ4>(UC~};l8E{@U=D6Ra|E&E)BkY0RbmBecKts<*/Qg4O9lOX ' );

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
