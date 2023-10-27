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
define( 'DB_NAME', 'sajt_pedagogije' );

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
define( 'AUTH_KEY',         '*!|VFpB)*;A<{I?kPb`j3T,7J19B$0b4IgiE[fM:)hu|?H?@T||.w^]#pYnYaCpX' );
define( 'SECURE_AUTH_KEY',  'GVeKk=KYnL&Z4(K)*7?X/trF*?ph~jMR?5u!T0_oLEh+iS}7Fr+f5{d4o*LaBCJa' );
define( 'LOGGED_IN_KEY',    '_+1&E3:%$b)VQq9!UHk88mv0L3EyHZ3JwZJxS_*1F~AqYt]>*SGN}En3~v)YOk_Q' );
define( 'NONCE_KEY',        ';=v!_kOOh21) 7h;,A;?!![CM{<.wN0sgvbbIafu4E;TldNf%~3HRW/IZq_&0%sU' );
define( 'AUTH_SALT',        '~=gMoQZpO~f!Z;:pVIi,{$f+CngQ522ABb5y{hP<}rDu[mMCd}<#bEJsRACX_Ny`' );
define( 'SECURE_AUTH_SALT', 'Qe-c#Iex|2^a2yF6At>aIbld(I>y~GB%bE$w%$#XF-.v[S_!)pif)K o%;Ia?8`*' );
define( 'LOGGED_IN_SALT',   'J{aX!q>N3g`WS#U@y|OpLht?23tceXE-4-$2lN/lkiz+z,N`vgXfYca<ADh!imXT' );
define( 'NONCE_SALT',       '8a^)/[3P/]HBVA3ec{NIE)4F?aTq`(],;TXR^%J<u/_NB *CwhT;n3s<w1Av=swu' );

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
