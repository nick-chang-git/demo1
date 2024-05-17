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
define( 'AUTH_KEY',         'h#/;ekgucru{y _u]k0[Q0VMMB>E.yf!5CBX.^}f+7/PKH7yF:~`O;pu&AqsM:MN' );
define( 'SECURE_AUTH_KEY',  '&_4Ur2y:Ejxbo*#q,4m~vyp`dso6XPC?eUn;#mR0ZkiguB7#++W =r!q5,/X9YPi' );
define( 'LOGGED_IN_KEY',    'm=Nl7@8/.)SOq1Vp[5r`5;Hl q:e-6:nDyYhH?w?$m45wjoF}hiwbe-K1?8RgYF1' );
define( 'NONCE_KEY',        '1Wj7ZT=0K~({Gf9d:-bo#e?.Z}gm+gfh?bV+A|~#TxX@z0f4]$KH``>3spBk.*RX' );
define( 'AUTH_SALT',        '<ixN<N$tL`qwj9<T0-f=xOX@,8jK+Y7RQMD?4H)xQT>K XD5*5vcTy{OK}^sptZJ' );
define( 'SECURE_AUTH_SALT', 'C9Py 1nk$ZJj2aof9L|FYYKqbz=_aa NVX7`oX9w8spGtR##5g|#r^HD&Fle|YtN' );
define( 'LOGGED_IN_SALT',   'Xv5goRZ[/3f-xt(9zT/qgVmRBM!hpq^q]7:%YGAS#=<bGO/QzWL56?b|%FFpt)2[' );
define( 'NONCE_SALT',       '<{cNov]81?%mJ]au9&UBI3U4S+@l/@g=9Ah#ZW1w}Yx&=h)4[i=Qm|!$3WfN/W$ ' );

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
