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
define( 'DB_NAME', 'website_travel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'khanhkhanh123' );

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
define( 'AUTH_KEY',         '68a-E#`dMbvMbz<`{cr:d7M*8`b>^o}5Tkt{hlQ_n .m*`V.##u/tPsQp(wSjfXy' );
define( 'SECURE_AUTH_KEY',  ')QEf/GBpgqUVS}+9IHPmKXf~wm64rhTw3,t(d)3z:v^G{X eSMUZzCldIn6twLVw' );
define( 'LOGGED_IN_KEY',    '>cVm20FChUHan4l8HZbqRSRYLIq`BXa]IQX45PwbEyvNSY`{,-iQrDJCmf96 <mb' );
define( 'NONCE_KEY',        ';d.CG;mb3_QD`/Bb#2Bt0E:>T=}#DagNm_O-3cAu:v[[P+.j&z_X]~^Q+}[Pn[_n' );
define( 'AUTH_SALT',        'oH#2 op2;;3H$_w5)`X2=5vP{T%^r<8I7OBg*Lv80zX/]%Iuj7mz:^u|B9RPm.?{' );
define( 'SECURE_AUTH_SALT', '|SDB9^JI)wA);>,[9-%dE7eX&^_Lk1qt.?F;-yV4l)<W~|%!o(.0OYYyJ;F5 8WA' );
define( 'LOGGED_IN_SALT',   'Y)({3SJ&MJNh%@d#/:;6ZZ#wj2H(TjptBTKy;3DhB#gRiRAjL^_G`(;bK2?9;&Z~' );
define( 'NONCE_SALT',       'HJ:~q]M_=IeU_gvu8vAhA^3G.gzG.4ig0:!WFMk=#uM8fA9O4YrDb~.$#wmXj+}^' );

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
