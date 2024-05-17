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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo1_db' );

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
define( 'AUTH_KEY',         '71eeJK=CaQE=/aET2bV[r$&k)w8LQ=CLKJ.,[olzw67y-J{Z7RVu|I+%Eii&;|o^' );
define( 'SECURE_AUTH_KEY',  '>NLxiabk_Wh`!<g@N=~e^J)wK?2*Z9%xN+RjPscJSjNpl+zt}+aJ@`gMc]RT`uim' );
define( 'LOGGED_IN_KEY',    '$-TE&+RJ3VW+wh#^+u?7[iWjj}Xu*+pYffY5amZz!vgqj>Ri.ed|?opbM{^:&W#/' );
define( 'NONCE_KEY',        '#KCi3JbW>/|=Qa&IVoq2Q.**k8Syx, Q h(n/h/Bh2ex@LN)V(dM92X UWR;5`3-' );
define( 'AUTH_SALT',        '3~5#|g|ElK/9jRN$GcAo_Z4WAQ7-`sjkgw?A+9h!&{-7H*?L>sQ%Teb.G>3Q&?{l' );
define( 'SECURE_AUTH_SALT', 'kvs,3KrM <B1B,`>[:dAR+ritdu{h;A5!.{16%pA%0HML87Qwn>KYHfWgygK=*Jx' );
define( 'LOGGED_IN_SALT',   '[_aq3@[%j@})YU2XZ|[YH4|p%e(-3zqWT?p:im%O/$Sl_[,e=)oCPR3WkY/1x#{a' );
define( 'NONCE_SALT',       'OQU&Z ck6%?~.19-RhnAf >.^kjwG8p>y[`>}]Uc#ngm2[J+8&<}3-C+ gk _c(-' );

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
