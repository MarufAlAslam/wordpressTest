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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpgithubtest' );

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
define( 'AUTH_KEY',         'ko& +#}Bxg?iDm/P_n]*knBTo8W5E8Y}[zsuh-Pm`rX^V_/kfAluR=.z`gVezjh)' );
define( 'SECURE_AUTH_KEY',  '(n3.Q-1I-nU,Ck-oo2:&~ekS[Zy[p~;i$4{{X`uB@OAAu(4!8!`77/0C]QZ_&N4}' );
define( 'LOGGED_IN_KEY',    'sf%w,E`;A1]$#7^bVG1NkpW1)<CorFYa3&y&}*KW1pXgf|8f+OPG2lG(lK&i7YIY' );
define( 'NONCE_KEY',        '5`:,m{wD$ui&8uaTW9G,WigDrYnse?=R<8j{N>*bG$2wl+CiY2!=oij@Df|nb7N.' );
define( 'AUTH_SALT',        'UMx,.I:lD`N!EZf9kY71/?zO+i6(E`3o^91,(pDh>CJjUN3VuH6Hkemt0|HNFq]L' );
define( 'SECURE_AUTH_SALT', 'a{btPorqGW`mu mbTIWq{?XNwFC>YZ4!Ga+U$~5p7nG*n<GEPHXYG=+utfq18DJy' );
define( 'LOGGED_IN_SALT',   '{2S|%mt<C.wW{[sy{B=$lF2FUO6&vl*jCU>9lVcSK8`[,3hDAxt3RN]3gwKFUh3a' );
define( 'NONCE_SALT',       '<JDxa_HXzd2MD:J@H:GV`{mEP_D)4sz$Rcl[[%,9;/Z-<e}9`sF+0J0@L&CD6BxH' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
