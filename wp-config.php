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
define( 'DB_NAME', 'client' );

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
define( 'AUTH_KEY',         'Tr1w$~E=#> (~x8JZY2~3AqQL$SrZLmaldeYCB#AviNpt#O^KB26^M>JB$m|BXP5' );
define( 'SECURE_AUTH_KEY',  '0N-hT>%4QM< ksIB&;9}O%Zt0ru$A>6l9/n;~C]{A*HU+yB2PW{m>} ec]8m(s;L' );
define( 'LOGGED_IN_KEY',    'J.Cfr8;.|.I~!-8i-,?;%|C{QD_dV[;MfJo8U;&?=:ZEp>%4$cj(iI$u $Hs..kW' );
define( 'NONCE_KEY',        'zzJe;F-(V@7W}?6-gEDMCoohh.a>Z%-IDoUX!Sl0K3a-su4MEvG9pC,HL+K@PJ4W' );
define( 'AUTH_SALT',        'kkcYk7.4`NCd}ZKbd3 t4dGrBznZ9FSTxm_{[I^)Sir_<tOB_lH{w.nnK.rtEA@V' );
define( 'SECURE_AUTH_SALT', 's<gyU7^Y51Jp(Ub,E&`22lbpx`#bqllN-cQ,:~k};SqvdhZ#8gAb+bT==a^:l1=>' );
define( 'LOGGED_IN_SALT',   'Eu0eOy`&.jJbC-+i?u$=lh#<Z7uwSr#h|;1_%of2rIE_L.Uv6cq,3r#/HlF#zS3!' );
define( 'NONCE_SALT',       '`Kqzwx n xS1&U )WB3tH4BIV6a7sEL,$eInMAp*C,z:[k8H~*[*<$l%<w2*qx]-' );

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
