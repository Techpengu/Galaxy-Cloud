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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressdb' );

/** Database password */
define( 'DB_PASSWORD', 'k1a2m3a4l5@@' );

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
define( 'AUTH_KEY',         'iOf=4TW}?.ZU[dX4pbb=D`Vlm;)f/vx9zd$fH71$5}vlS=2&;W^g@OjnW>N:FBYb' );
define( 'SECURE_AUTH_KEY',  'BsEsLG_0)q(7M)+7]1Z$<Zjh}e:u}g[SQ$_90I~`djguy>.2f3eZ87^c*Y5^9(nU' );
define( 'LOGGED_IN_KEY',    'p/rc<J?=w,J3Q Q>:q$XVx&eGoEYyujiAx.U[B]$O,&kM;[N.FP<$lIl`jBd^?u(' );
define( 'NONCE_KEY',        'pi9[UBoJtYjz)~G&#-jD{y!r9?9$e>`@I[XS)q_ tu9V]a%P[ZL+xhP$.X0wN^Ae' );
define( 'AUTH_SALT',        '+D)[IS.`(WB=s5k^iP_8Z=w[03;/Lunw{~QJvGjYH+yG(,>YJ+E`A}MK3l&xs:p1' );
define( 'SECURE_AUTH_SALT', 'E >]]if@ICOE+>..8j!K{@!*E*vUC>J5}D%1.S>_,u`E6cq}(xVWn>6n|yll{:Bj' );
define( 'LOGGED_IN_SALT',   '^jIgA/Ca>oNYQ^xe2fE_~hh]2M=lZ|zhS9/^Yf)MKS6[A[TV^Z^DMDQO5/BOUR;P' );
define( 'NONCE_SALT',       'Faio6a/R{#pO_EN,c4l<U*M+6F/u5]IVO[A_j,l+t/v>K5N.I8Ee-X KiDW/Khe6' );

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
