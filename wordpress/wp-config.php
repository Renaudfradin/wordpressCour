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
define( 'DB_NAME', 'data' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'BwSPTbz,9.V$MpOZ[2NNi85y(-?7a.,*4MKMDI.>54I`)s<#!}5#AOb,dc>}y>I|' );
define( 'SECURE_AUTH_KEY',  'wp0bue)by.6E$OE2CwsX#-oPiMC3+#?Uez),Y%%jHv_Zg}$)k>BK|oypW<UThr& ' );
define( 'LOGGED_IN_KEY',    'J8#9T<ngn{^5b:~Fwt%i:v@.]mB3ydOKtd_aG5Yf-xIbzCYr}y_=ls%y!9sY~EMz' );
define( 'NONCE_KEY',        '$gi8UG1CCZ3E)ysC{8=6pF:.xx,x Z//fEGYb&Cr|[:eK<aC7O5+}6X=)0ph*- Q' );
define( 'AUTH_SALT',        '6>,~4No#bEcGibzw;obM?3r6=le?EqJGvWKQ8/<d$;]_~QP/59Y`6Zn[R#a=R=nh' );
define( 'SECURE_AUTH_SALT', '1@nbA:i~:%Y}.g^eAZ}Ub[(/T@<mvNTWv+o#GS8Av=.P:r02<b|Nru:1X5OeS 6d' );
define( 'LOGGED_IN_SALT',   '!?+Ls^`r?mq`-S[[[U,.-w.ASlU9y+z{RDz$+j`qH%$JgwNfyD+FhaX!CQs#EJYA' );
define( 'NONCE_SALT',       'ZDy/<2MB9g0j}!@TjSmr@wB+Z5UE~:NVz5=/OwneimQtf;I~ANW9Od4x}[YAH#*N' );

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
