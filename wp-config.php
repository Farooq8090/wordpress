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
define( 'DB_NAME', 'farooq' );

/** Database username */
define( 'DB_USER', 'farooq' );

/** Database password */
define( 'DB_PASSWORD', '23456789' );

/** Database hostname */
define( 'DB_HOST', 'farooq.cquwinm68zkn.eu-north-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'ZU9Nv+$=|Xc9.CFdKKlMktF>Mw(mi@=JRy_!i,*&HHrE@k*VZZW*ucH|o$xs[xQm');
define('SECURE_AUTH_KEY',  'Y%} }H{zwr##/>&KWowd~eP<NA1L>:A<&sEMtk%a}/c`|V04on]G?qf[K3&yCp]m');
define('LOGGED_IN_KEY',    'D[OK~!9(M{z$,+]Cq<H$(~!F}9_Q!-7|a[74)s-ZLuQpmK,(cco>r7&P,(Xh?05L');
define('NONCE_KEY',        '=G+:Kj3]W;f)|[W9Zo(}5;V+m];EK=rs2+%{^iE5P1Q.7[Do]{(0TK/4B4Z!Ns_F');
define('AUTH_SALT',        '$:usY7k0du}HLNHJk<kl@I:GQbMw6l w-mhd&*yb5Q5Dirnib1$s+zt<Vn-KSO~|');
define('SECURE_AUTH_SALT', '9k3 w<?x4/|q?Cf8f_p>m[!R-10[I3R7{u[E.G&b<$n<n9qq7;t:Y,Rta+(01=:z');
define('LOGGED_IN_SALT',   '?`ZYNW^2k5Jz}z%&e&eH|1;foNB9!*=UD?p8aX$NUGe..Q*O+<g!W#u*dn}O^nhw');
define('NONCE_SALT',       'nf5d|5`P}yavz]I{yv-gZP%l,|;%Hj@|Y#t0IH4t*5Wx24DBgx)a9Cyl{M4N1iVa');

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
