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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'f]o+{}@jr/,*.Yc;?+R J}zJ*@VcO-Qz*I_oKNRzuU+H<y}- W;!3a/LB=(soE4b' );
define( 'SECURE_AUTH_KEY',   '[0rSpOY|&)h(0oRYR`3|Ps3O$&xNa?_)|<I@O/XZ<d]r[&Ix|1.j?lVog2>$Vd$a' );
define( 'LOGGED_IN_KEY',     'aY2Ml6<d3$0[FZzgsM.Ku[BKAJ{_/4Gx,YtG@3idcJ!>hB+@!*Nx|6_6dcq_tlij' );
define( 'NONCE_KEY',         'c5n/t8W-gw/6L~>utPq`p]!|&p%<5+_?^06euA3u.=k3G/7M^ip;_eR%92.V,=)i' );
define( 'AUTH_SALT',         '?Lz`8B:NtY1us~M02V?Qr#kfGt`>b!8vZY;S8Z|n)z^neg|blaR%{psxahdxl}n+' );
define( 'SECURE_AUTH_SALT',  '~dV@9v-~@~[N@l&fd=v;FM(.V/QTI<pD<X}>-U=@E*jN?0HX2qv#%IOyuP0vB8]S' );
define( 'LOGGED_IN_SALT',    '=T>;/T&jy+=.p+fKk*2T2Evy>#o`s7-3`~U9_,j~{]ZilBuT)^wpa@ie8PORV<P;' );
define( 'NONCE_SALT',        '[c+.G1%y>+d{ptQMz`FgH}#Ib~@_a*tNls]t[9BM//`OMy*9];oom}sjI>{E,5ti' );
define( 'WP_CACHE_KEY_SALT', 'Ywu0EE(G2dNzqx_YD.)VNOGjT{* )cQ1(/qmCht)$xFZDukk:*9q:obe@N}?p{n=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
