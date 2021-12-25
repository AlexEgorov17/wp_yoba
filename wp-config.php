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
define( 'DB_NAME', 'shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'j:,6jMrmV865GJMQ$>mv512Vmkfj[wv9s#GWk}jwC0>U8aW %oCou4Q`c$t18Gk1' );
define( 'SECURE_AUTH_KEY',  'pXQXh2UhHClj|C&4fC<6D7Vp0GS-ywpiS^9.F_Ixwfa09kWhO1J^xa0$A5U~7r^d' );
define( 'LOGGED_IN_KEY',    'NZrVdO%rs/]vYk pWW+:BH=;#ipF XH;<hbr+zsm75PRT~6O.KQuQe{<lH|#4*,O' );
define( 'NONCE_KEY',        '}VLGj^R&UiOgF.C0)h+!C$hEWE8j_!j33tkI:! w7twzM!2hou)rIuxXYtD4kaW0' );
define( 'AUTH_SALT',        '>&&{<H/kE^Ww8Hh%5mG t<sR)J&QzCocb~sHcGY4p#f$6Bou#x|!LDm*`~$xyzRm' );
define( 'SECURE_AUTH_SALT', 'lU=y`.SNwZtUhD?HKRk#6vM4.Cx^i}6Yz10Zj:I1[bE-We7SJ&rh9]q&gTNz@:q`' );
define( 'LOGGED_IN_SALT',   'PDfQ FiI`-D4XMGa;a<|A)T=Ct2y3;BV*6-<ro7(af/,X|cdmzyrDFR#mv]De;)~' );
define( 'NONCE_SALT',       'yM,C1Fyc{*L+1eF8{i:GCTKJ]#P-%aMLCJiR%FT(p{Oj)+.u:<aERqo&etil~I,(' );

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
