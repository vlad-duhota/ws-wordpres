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
define( 'DB_NAME', 'wews' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '$QJ!@YI1GaKiAW{(A(>RHX27_c~x:6b6=fy@w12JNfMex=?RO}c({DB&i?l#Gv.K' );
define( 'SECURE_AUTH_KEY',  'rHw|MaAp[D_c[M]:NqUETYdgF6S6mAAzZry-41=NR=&iK2On!VVBC#ia@9X=Lx^J' );
define( 'LOGGED_IN_KEY',    '#Mr%pnWV^%,M3 Xw-<5qE$Ez//)(r1LR =+_oz_<UdPP{}+bn<o&f)xt8Mo112X4' );
define( 'NONCE_KEY',        '?Hv9ruIyQ`WrA<;`nv-RLB?Wl`QWu6,_WOQ4$T5?t5#fY7&^2@jGAZ.~+k^QOXN.' );
define( 'AUTH_SALT',        'F|np.a[32`)({.t&i%^62;!~]P+?^M6f7YfqIYJ2J*-5PSpYM?sO>lSPci)p AVM' );
define( 'SECURE_AUTH_SALT', '3Des@IZ@ll01{D#Bus-~4#`btL,q;tFm3[q#k-~GpDaA3!|IfNJjH 2&8CE)ti|D' );
define( 'LOGGED_IN_SALT',   'jaM,Fy6RUh&Qw{_wq7}p5r.0NE%o2wN5FSE9f 6-f5v#8]RH8yye7>Zib*NhIFM:' );
define( 'NONCE_SALT',       'd2k(7eUXz[(Bd63X;`6OkIk;5p~Z<p^um.9TRU.*6kh]=BwEyR/|D,ocuJ&r;Dv:' );

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
