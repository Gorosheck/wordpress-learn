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
define( 'DB_NAME', 'wp_learn' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '1q2w3e4r5t' );

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
define( 'AUTH_KEY',         'HosaDn42tN%QYhx!YuThE.o>`_-SP-b-syZf.omse[2-.ZQ%>:{GMEK?F,q$~H>G' );
define( 'SECURE_AUTH_KEY',  'eU:e[tJKe_y`Y5@((|Q8/$nAb1<%+?OK8~nb#XPT=C5FsxnppwA}u-I#&~+(kuW}' );
define( 'LOGGED_IN_KEY',    '{&!0D%r?-&j&LLLKscxPh=Tll&y1Yn7P_$c@jArN)2muLb/~Mc3}8MqHjL:JQV7n' );
define( 'NONCE_KEY',        'oaz&Ahh+/mmx]^{H&ZA1Ts<kv4.F@m3y){j6wC`N`Y`sqbA]vYn _Jp$K]W8j^<j' );
define( 'AUTH_SALT',        ')89RjNr$luLNp9rOC~mSX4gGJuZo%G<C@qLe$bq:77?W!6Q=NOI%KM-r2YTf6%.P' );
define( 'SECURE_AUTH_SALT', '681c:>~CS!U]q~or^MU|S llI))#Zp&Do=q-BJO%Yu0kv5,RUbY0 F)9ra0=;HfK' );
define( 'LOGGED_IN_SALT',   '%DLqVJt=p$SIy{)^:!)]kFSu|^Io% uJkt<nb&uOT&Cs sBVQwt~e>,88 9Rsvo-' );
define( 'NONCE_SALT',       'G#/e2e;o+FSVvGQSiosa8Z+k`w&&xPFadk{FQ&oeGmY&-?&*Ak/t,YOKlB^z^_T;' );

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
