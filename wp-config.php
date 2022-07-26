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
define( 'DB_NAME', 'smtekkidb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'SmTekki2022!@#' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Disble FTP requirement */
define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'F]d1%.WKY|SnbfeXWK`115_0+rf?rS.s^fX0O-XP=$gB$;l TCQ+n=w&kf$<J,1Q' );
define( 'SECURE_AUTH_KEY',  '1yY@Io/Nl04)c);k*KZYZ(O8F@xF8oV*k)sJUycwq=`n(Na{D2Qw44^ujcE.9l6M' );
define( 'LOGGED_IN_KEY',    ':=cwXSuav$DuLmy|;T%qz&$N,DVe&_B<?/HM8$K^y #vvC=W$UE~7-#E!N..!&OW' );
define( 'NONCE_KEY',        '>==epwN1l&8c]0Rop_k0#dP1Q-5!j*l?kF?Og4v3z?&{HCZXWCqZB:f/dn+&;+Q/' );
define( 'AUTH_SALT',        '$Sw7YqyYo,.nHX6TGE,{9{E_?v&H?hl8sEfMR2^=~`@Khv&u*nfsr0[zT U]7vof' );
define( 'SECURE_AUTH_SALT', '[jAZZ @!m`fjO4{rDn^F!t/3>~,)jTq|8QXk+3-H#S~ ~sIr~uNJc%eEtb3)V$-v' );
define( 'LOGGED_IN_SALT',   's5`>Eti??M-Z85we$f1Pmx5B8zt`HevgqKJ$KNL%R?#%Df9f|s^rhJGE/`rtOGSB' );
define( 'NONCE_SALT',       'BB*!}{m<aX9yGA,,8&%lSA{u;br7yUCHmTFUl_B,w?IXm^eNIEZuy7vh2,&#EMM)' );

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
