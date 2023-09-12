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
define( 'DB_NAME', 'dfa' );

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
define( 'AUTH_KEY',         '4nR)ZE](T:+Ab]9>*_z8IAZ>oc} -*CkA1y 8FIBsnw{y?6({ypcm4.H+@n}vN^v' );
define( 'SECURE_AUTH_KEY',  '!bqq*H$C~w-TY>c#qLBDY8;uRg$&kdH2ZCo9PV{ti8}y?.neY|5^Z`e/bfX,Im!<' );
define( 'LOGGED_IN_KEY',    'wK/=-Aa|WNORySQ0RmI~Z%y[lj3A]<ffLnzkb4H&)Z=.#-~7-o=)TlxkUec1b11T' );
define( 'NONCE_KEY',        '4Q!(6@8fblJN< h I2;]eKN}}C=OC/Qenuc1-S|J=*F)J[@5g^_X3O2V;2z{b)7<' );
define( 'AUTH_SALT',        '2!QT+m7HVc+Q:~{sSh^MC}<Lsw^X}b{W]M)IM@cxA$6ES>jxYN;gaNH@SV(.? uL' );
define( 'SECURE_AUTH_SALT', 'J=i}JbRroS98>VkTwt-|m~$;_vdls(V=!>.vj;@I0UaDWpM]@)pO_Z TYx1$p7Ky' );
define( 'LOGGED_IN_SALT',   'llYl>nKg?n8d}NV5#~brj#Wg]/2dOI _j/6sw:H[eHdm*)4fh99}kpmUC?(z(]@N' );
define( 'NONCE_SALT',       ']Ge;*f;>F$uq#=,jZ`>/):(zXt7ip =YR;12=ty0Ltef~)Cpc?R(A9e?Q!=!2}y<' );

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
