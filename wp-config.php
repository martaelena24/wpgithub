<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitwp' );

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
define( 'AUTH_KEY',         'f;Hqd~y=fOl&9T/IVbrQF0vE-,WA6}h!0 Gf*(eF)Y/H#w3>@=8#lE_4Hjy4EUB4' );
define( 'SECURE_AUTH_KEY',  'sw:OB&)*j8]^H[O5ggXI*r$]u:.+z+~A2uZ|Mq5AhPe~(f&T/.XBWoCt;r(3O~j4' );
define( 'LOGGED_IN_KEY',    '{`+>`NSZb^W27@ZL]&dJvA3.i?k~h<C {zCm-KA6_ j=ais^;d1%{gPDZcmODt6|' );
define( 'NONCE_KEY',        '*E*/h}4sMn[u<ivx5cc=veFz9MK11I(a]?srkT5s^?nbl]O2{]<.iN;hHGP,ghES' );
define( 'AUTH_SALT',        'qBuN1sbolih2u#PJ#e~eUQR<wg-PdR,qnG2:waWnOH`;^i_dW-b2K@zy:tD}wf-q' );
define( 'SECURE_AUTH_SALT', 'AuRlF%a 5.*[g3^p|WZ|t:vvmCQmE)`_359FF%KU=%dHh%bexsB7NJ/ZcWd?Uq3m' );
define( 'LOGGED_IN_SALT',   'zF>0 e}C.T9FpPgy(9#R:b@1A/!:(7DQPxfd0QttM9VmWly&/k[Vv9Gv3D(*s(UG' );
define( 'NONCE_SALT',       'Mk|_Yop!7g/Jj6>k5;]3Y*sTR~$;E9om}D4P`;aNo-X9wcQJML7i=+|qiQ5o#Bh$' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
