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
define( 'DB_NAME', 'cepe' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '%&s*)=1P&oz&p>pjJbl7+;,fBmx0<$SWW$3+_Cvak+#i~7-^vz4pzS/5VDK R,@e' );
define( 'SECURE_AUTH_KEY',  '|Nff|b!F)vBT7]jQ mivBvQcZ6 Urj-Fj<3`4$>gsG&Kda]k?wrAj|l KT~>GQ6+' );
define( 'LOGGED_IN_KEY',    '}*Y`L}1[q2XK)A-Ct^maR*/NR$zjWL)5+Cj<vk,WQYhMB.={MpLjxm)Q#h)_x]`o' );
define( 'NONCE_KEY',        '~|!%c>/tUH/E6[hphS6=Qil~uUP-<Itt)o3?Do2FJA,aY*{PDV_x~k9/p+dqIY(k' );
define( 'AUTH_SALT',        'KlKEXA# !.b!9UU0.r|JG;#IL|D9+%To+3b3qt|Ve[D#[Vnz/$zORogBw Q) >6[' );
define( 'SECURE_AUTH_SALT', '!Y]zrhQ~rqSQ|H]=5];WskY`cR.oE:dQa6sec(JYt)g6J FwXrD+%dd<~/{wP#r5' );
define( 'LOGGED_IN_SALT',   'z]B6[)PJA$*VnuMy{Z5r1i%HiAVel1)0+)qe`wr1>Y_6lU-0-}-z<0ICNB9CZ/VA' );
define( 'NONCE_SALT',       'xB@CZ9}K;s[ZLIfU;6~UeEUAb|?IHFn6}2%:c=QApfPSu=swQh{R)ii+Vv o>*W%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
