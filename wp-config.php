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
define( 'AUTH_KEY',         'FlMZL>,j|5?+6fTBN5E~QK!hK>v;u~*;ybS(q^c]U:4W^:y9zWFF[W=w| pXoDhD' );
define( 'SECURE_AUTH_KEY',  'r=X>wXym?1e5_Ri:Yl(/HO9)}X=Be@4CPC(!*#,z4zV7(7=M9.)&U[TS`:-tN$Po' );
define( 'LOGGED_IN_KEY',    '}]AAw%*G&D4FuCi/QbxG[W,nG:GST@[R9e5=(=5+15G].GTdmCUgs%I6V$L=%Mq&' );
define( 'NONCE_KEY',        'oS,nI*a|+2e=YF@UHbBQl!L5<Or?}b/;la=x501-ns0o?HW%U{rF_fFS{/B|T+<(' );
define( 'AUTH_SALT',        '7/eVjma6y;+[sh#nE8g=g`WT$R9x!hp$~$9`N|QG#2e<mEO{K%l[RP?m6Lw ~u0q' );
define( 'SECURE_AUTH_SALT', '|JiUSW1P5K5brL8K13`qR[V?Vmjc]8S4yomW&[@`iyDJETp3bS,?QPrh@[^HccxC' );
define( 'LOGGED_IN_SALT',   'v)UR5D0YH><ZPBJ=}=;r&!}&P;rqr7cV?k7DmJ[F>G(,)/G{|m@<rIHs5tS%)*ha' );
define( 'NONCE_SALT',       '=uxPBl`,q&OvAY}T545BA@P+j/xJa@(#DWy5s6+^[V9;Mc.kcEzMJnCI&xX[vI:s' );

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
