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
define( 'DB_NAME', 'mudasir-portfolio' );

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
define( 'AUTH_KEY',         'Dbg9;p.Hyo[sx-?$cN)mwQuNm7NahPi`WK-1p/LtSS(_Qu<_a{#P=JiBTg6&B-U9' );
define( 'SECURE_AUTH_KEY',  '$CNYNt|OQ@qzmiaE$x#1pA!hkH5B6:6R*1*u7l|`z`iUw#f34d#pVlA nrrGm1i|' );
define( 'LOGGED_IN_KEY',    'A^hULCio2V7 g7*pE83*f}=R{}x;IhAh<FHUiL?qxA?Ks=R6YT|g&g8wCXPBQ,BT' );
define( 'NONCE_KEY',        'q`s$9ECmm6N)qm)}szkO^p_{? Th7K>qk0@=HK~kgODdCuXef`(jQNM7Og8ZY?`)' );
define( 'AUTH_SALT',        'v#$}H%;d#27u0ITZ`(M9G^XtV9$vCD*B9;No=de_=jZ$9m/Q&5>G71NM>gJ1#a%q' );
define( 'SECURE_AUTH_SALT', 'n=./D6;m[&`7D~K%oCw^D#9L1{C;UW^d4iNeJP<e[-fs.`DN*cGCf#*e~JI4wX~F' );
define( 'LOGGED_IN_SALT',   'LYKdR3ySXpuC|P)=<s-9nv2U<ahUTuF{DJ>0yq2,b2%~Tuu^Qr2&mZ=*#2T8}n=?' );
define( 'NONCE_SALT',       '/Z,.KUzkk+ou_+W3KMorPc66-8df?DTv?E.`KSmRk,,z{52l#%Szb$?n12_M`sx}' );

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
