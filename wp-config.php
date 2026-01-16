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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gisele' );

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
define( 'AUTH_KEY',         '`-S2 ;dk~A=mDmiVb@.X&2z|h2Y&`K@QwkkONOKxcBPdKK^ASXD,^O9~Mxq?!d{V' );
define( 'SECURE_AUTH_KEY',  'qeR#R?m,QM]#kD4U8{jy0p`s;7R)JwMYqq6An+6]P<2 GvwN[318T`UP1<S~Cih8' );
define( 'LOGGED_IN_KEY',    'x&T8%qKw]K;u?Xp%?g8(Bw^p@ZLGh-!uWe30ij8#O3.M%rfKZ0i2B M!|bv.v70^' );
define( 'NONCE_KEY',        'lC@W!I0dMuNVZQm6sQ9$m>Je>nMUehB@X7M:m=vzD3gUi4y_BM:>!h0f3of;<32q' );
define( 'AUTH_SALT',        '<>YL#NaVVGiYRN2t*(pZ)8?Hs7T&m?r}= mvKKZR4uz#m?*o/})$&SkPrgXi?<R3' );
define( 'SECURE_AUTH_SALT', '/LK|fqF`CxG[8gJ}<qm>q5!V<Q]6(54_Y0/F(g^#RG<mXXquxooX,%Et.|2y0$!?' );
define( 'LOGGED_IN_SALT',   '5 $5cexd`Xtu(pFMCFoZmQb*C?3.ZvwhR;eAJR((4}!($OU?@[Z$`]a^*Qvy:OHw' );
define( 'NONCE_SALT',       '@iAnj4Suq(cCCe(u5C-_.o9u,^c8-d-Ez9{>9&Z.kF (^ToSeUQT`a.]_0}Z(+F=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
