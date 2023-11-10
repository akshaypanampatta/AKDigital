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
define( 'DB_NAME', 'AKDigital' );

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
define( 'AUTH_KEY',         'QHHZn)`{o,M0bLWv9Na.gS(,1a*G#II_nA-i&&:6i#|RXHu3qD<bJKIn|CxqIhdE' );
define( 'SECURE_AUTH_KEY',  '64dGcy{AXtx^A`Au`w%>PSn>{iGX~uQcMDjO0+F oEO{sEOq`G|l#pyCGWJ!vu|%' );
define( 'LOGGED_IN_KEY',    '*8IA$SRzbL6G.xj[/g8/RlCnu?.cx_j[jwP1V.z;`9Bh.F{~pAR-3Lwi^14p5Nnj' );
define( 'NONCE_KEY',        'xnEYDX[&PA;9DisqVz$Q5yFeU~Kk}Xs+-,sV!2KOWfoYDp2W`zlO}+y9W{Te^&i}' );
define( 'AUTH_SALT',        '4h0//(Kp dtJnRk(9p~I8M]jy.!,*kg,z#dZAVsa~5R<[AY@`:D!]JOzU)wE6.l=' );
define( 'SECURE_AUTH_SALT', 'yGR0YtXTV5[(fE8QZTbV6$3Z=S:m9~f%);St1%N:.- pMMKVWtP(%iSm*#:2]@l{' );
define( 'LOGGED_IN_SALT',   '{cvQDOgIbN-P7JR` [ukM3IB -*| .c=Yd%SF3t~=5I%?t0~-3H]mmf#xoICOE=^' );
define( 'NONCE_SALT',       'Ua$k7ot1%qf1@Kx9uCd_$=I`TB~vaA8K_vQfRikt8l|X*0@0Io?IU0Mz!EQ k%A<' );

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
