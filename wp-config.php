<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fountain_interlock_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':d2y3G;n1bc%0OKuVK8F^H@Vnb?}9]1c>cJgyi-kuWj/vE.*`*UmpB/A>oIMr5A,' );
define( 'SECURE_AUTH_KEY',  '+s.u,[?WXg:O4@ZFccqafLyK9Ynmo=.pbr90KFuN+jzm|l5(P8Q=h;hiUD9:hRy%' );
define( 'LOGGED_IN_KEY',    'ta$Cy6e!n]8Oj{O>WrCjtBy<hP5+b|%Gw2*u1$RP8_~`!9ms@arJ)*FnK^wH<!5>' );
define( 'NONCE_KEY',        'S}o,ALR!YITP1Df~#W6V`,qpM{[e(M!xMJ/dF*xPagPg,u8.( 8fQ,)L>&iKG:dX' );
define( 'AUTH_SALT',        ']*!a^9Q^x;Qvk%}:aD,KA@}Wg0?T~zGJ)$*VD9{c<;+CZ)IWi+P@,O?.J!f!F@zE' );
define( 'SECURE_AUTH_SALT', 'U>r=5cUBE`?4cv2c]5*qonkQCYJ`v-D.L)ayXF2}Yqc;%K+P,%?KZYsA-.Z^-U3#' );
define( 'LOGGED_IN_SALT',   '9qzabPIMV+]}naZyhKy %H9C[z4C]4Dh6U%;WGiyhPJW[XdT~dUL`Ik=eE2u=?zO' );
define( 'NONCE_SALT',       '#GSZMSf<a.NK|:0:wbTBu,u~af,W6V/k9<37v-)ONNONPv0S[J8a,po8AAa#M]0U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
