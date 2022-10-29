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
define( 'DB_NAME', 'boilerplate-wp' );

/** Database username */
define( 'DB_USER', 'pepe' );

/** Database password */
define( 'DB_PASSWORD', 'Micasa2010' );

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
define( 'AUTH_KEY',         'E&!BGdY;1o[85ZQ(Ur`kdx=B^0!pZW@R)!Yp,x>4^dH&kw}?bAj/}()bz_{q:J6d' );
define( 'SECURE_AUTH_KEY',  '_En+H9]aw:OUPzG[v+k}[GZ+l&h-M.EqK1l2?]p[pb5)9O^Bn7]0pFYf}7eH^~9-' );
define( 'LOGGED_IN_KEY',    'Mvnw)cJe;c^wR!{q||;pV16~=<=9{TM&8t~G%<G`f>jGFGQEY?U.tT6Q7cGv8!zS' );
define( 'NONCE_KEY',        'j_#(p65ny[h04]q44+@{y]Bm#Vs76Sy~*v%-RWQ0iOY:.&>}b!4awo*Dtez)RlJ3' );
define( 'AUTH_SALT',        'WW(?MW^lyt:W)IQuB#z<R%SP=k,6kDSVXb}AnNA8nY,$2.6V(He~2mP.8wco9sDV' );
define( 'SECURE_AUTH_SALT', 'J;MbR8]-m|)N,fJtc>}6&ys.9?y+9pF_[x&&DhVy*bm+8kg%c15?MuxNFnGf`%qw' );
define( 'LOGGED_IN_SALT',   'No$%|A-4t)OuIY1ah]_K.:7d09+RE ACYT]b.T#Ka3`A+B$w6}O:1MaVFWpnY9Zu' );
define( 'NONCE_SALT',       'l);;)Ei.;@:)*mPf`sv)P(Z9Pt}aT#G}l~N400bLO)ZOs0y6X8l2&E!gPB5]$JNN' );

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
