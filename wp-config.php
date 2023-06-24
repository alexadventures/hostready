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
define( 'DB_NAME', 'hostreadyowner' );

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
define( 'AUTH_KEY',         '}:rd#I+kx.rSbCVTD!df^5*yNaMU*xKSemq30-3!j)8U!wlcwGYU,!l4M{IP:}+;' );
define( 'SECURE_AUTH_KEY',  '7z,:UkI[(Wa!AW<Do=-=ebhPL{ikK|d$`$lL8!w/Vk:V~sg*ICZuKO=^6>tbU~_m' );
define( 'LOGGED_IN_KEY',    'mf8_B.[9NTI}L!28Gh454y[|wXd89!QOg=(:[}np8]`^VGFI#&?A0R$LWH2b.H5!' );
define( 'NONCE_KEY',        '1.indpFYC`kTj|&jx(9->!:sM15-:7[!@bGeoTA$3bX;R*+2+P7!.KSLpb0)~jb0' );
define( 'AUTH_SALT',        '7>B~V]$FjN!#BI}kM#c5;&}Zm2>ld`/_P*Lfu|mN =]ATHO]T$lpP{mrKe^>8<5l' );
define( 'SECURE_AUTH_SALT', 'pgl~#b@(ifevyVnWO|f`k)7F5V%j6gFwp.PC{S 0Vgkw7QAH/a]A7:sk6:{+t$G*' );
define( 'LOGGED_IN_SALT',   'UlLsL-T)57 AB3ly?8_1p=}9acj:>&TkXL?RK+Om>3dxw:RtufG RN^msPzFvM|>' );
define( 'NONCE_SALT',       '>mkas/,=,/@K9r#nvnPWiwr2aY}<1dp .CTs[7I&Bw{o{?PB8p=p`GMjE`_[hc:y' );

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
