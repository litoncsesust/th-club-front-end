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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev.th-club.com' );

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
define( 'AUTH_KEY',         'wvAK<5-+X?uRd=?]jm]R9{*$F* %olF.4_%iHYhuhB1kX0pzV`58%.[{B9/LrI6Q' );
define( 'SECURE_AUTH_KEY',  '6rQ?c&4S|[?cp$K3odADzPv_0B,oFVMs@vK>Bw$x[?G>RD5_zL2F9lHt0jecQK@;' );
define( 'LOGGED_IN_KEY',    '0hA+gSO_/2rs6_ENqnMcM``#Xztb`sNA=2l4;WR?e?f?Uum50V)2}B]Ub!Zt[8OK' );
define( 'NONCE_KEY',        '%~a7M?7jZ9GoebG#F|4I12:~YBpO&YzEgMASk^W;zdsEsaV=SKXE?NX2Pd&UDltJ' );
define( 'AUTH_SALT',        '[}mZ!=o}s4N43a|w8~n*4^W(FllQ$Ad!apJpN51e8dfJ${gxC N47d@CtJFUcqUU' );
define( 'SECURE_AUTH_SALT', '*`GoaH6{K;}b~N!zpsKMb C[F|:ce~Y3rV{>Sd1r8>d`c%1-~5[lj5L(QFWNRQ`9' );
define( 'LOGGED_IN_SALT',   'zR/MLPf 2BMl8b2.I$0xzOY2}]A :0 m:mN?OBx*^rN<rdrOa$fY.T)$ce)[*9T$' );
define( 'NONCE_SALT',       '|jH6pR;+/=V A-Sg -naYv:IjRTlXHJ@psMn_CdW19<hCj u$|NDyQ1fKe%7.OeY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'thc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
