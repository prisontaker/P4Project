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
define( 'DB_NAME', 'startwp' );

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
define( 'AUTH_KEY',         ' zM_-/*Cw}$@`cDqIh[g]**OVX!aXLhx2$[D=S9{/y5|V7aO$m,9O> hYcNq}c&V' );
define( 'SECURE_AUTH_KEY',  'tqr:8:!.2GeYo/sd0aChWIrv<RI&rz-S|:RnzcXtEUa_yEk_M/l2_L3e/Y:b2ZCK' );
define( 'LOGGED_IN_KEY',    ',<MI?Nrue>G[+[19mZi2bv%TWAiJ5~&yo3>)lPXDw]_P[vQ>&N)Ke_4t1%&wxc=@' );
define( 'NONCE_KEY',        'xpZ<f8Du!(,Vl.|Q<K[.It->rRxEnz=P8e@Ew4xfuo~NayG`m-to^VaH0Tb5ZZO1' );
define( 'AUTH_SALT',        '4Ci[PV0XR>0#NRVb=^Wo_BwR.ll>IO0iywB.0CnLV)rj]oC>Yjb1F?.aCF%u.v{o' );
define( 'SECURE_AUTH_SALT', '7-v>)k,]<hs$#@^L3z9HyTWfI!@e6 76c5G[u a.CTp_5,-j~]J^Bab?6:mDeL8f' );
define( 'LOGGED_IN_SALT',   'qCT@dvv&p<i,:vfMwd&lxeQFc)oTs2+S;dIo#aPneJmQG-)e^)HkQ%.fd{W7?l)Z' );
define( 'NONCE_SALT',       '1+I5;{Q{,Kp~-#Cup0=,RyI*|r/%a|c6iqwC>#Kf=18-WRhSqqq`,VE?Z&}x+Y(%' );

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
