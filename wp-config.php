<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress581' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'fp.D|9+06ypp|I;kqZjRaN0@6E^P$g*6mECgD56Dg$DZJL*J3f2O%^p8|Ba:(T%N' );
define( 'SECURE_AUTH_KEY',  'Cc,qRD5t9]M~+Y dB$6zQ#:2~SMRcZ3X6Cg2eHJP;N52E+H1a@q-@2;k]Qji7;tE' );
define( 'LOGGED_IN_KEY',    '33#6|TvM6}6X7/`]G&&Ty8{)t[pmshZiZrx^oiEIhR_#H{wggf4|Wo])&U cKmfC' );
define( 'NONCE_KEY',        'Q#~twjIfld|{$L7Kt)*^PSR|&&Voq0.=<0;bnw0LG15)N~lFa_Fht9&P&`ax;H.(' );
define( 'AUTH_SALT',        'Eg*I6!e<URv{[t:[Xo]^A!c4F~3.s)S.~RW!uV(TU{VOaRz$~{ywBy5lV-KVG8Rt' );
define( 'SECURE_AUTH_SALT', 'X0q vo~Pb6tI0KR3ey*m!Bkn)hEdIOz+LQ*9hl`,Q0;vD<^)P0:S~02S,j?[60{&' );
define( 'LOGGED_IN_SALT',   'FDR`f^$yna!i[eyU@L&o`7_?GgRHy78|la.?LP-i}NKUkP6^uNTN)-M]su-WO4y#' );
define( 'NONCE_SALT',       ';G4Z%sT!-l~xDycN!h{}?h1vQKS)_kV)-v5Y=^4f6g;LWZJANk3M9eIX_E[s7ipi' );

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
