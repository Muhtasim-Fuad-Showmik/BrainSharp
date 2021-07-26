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
define( 'DB_NAME', 'brainsharp' );

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
define( 'AUTH_KEY',         '~cB#loo&wKXg.dt<W72=Nqk.$8AJmJi!NF0s.2*0?+&{7#CxdX]/5.[B1:RY<46G' );
define( 'SECURE_AUTH_KEY',  'W/aU_oh/O7KWB:of:J6scQmrA3gI|W/M6txYVN#e94/jNeZ`,XDssf/%)e0&yxp,' );
define( 'LOGGED_IN_KEY',    'is|>kg,LiJFH7F`hpZlhX-2$2Ik%nl+_eEloYW^hO)XkD-#*E)ibU0It+b}t{gt>' );
define( 'NONCE_KEY',        '?m?)KoZ^/rg(2VvSE9,&T/l]>xLjkNrktrH8F1XdGbK4t*gR_SLc@8[6QcaWhLX4' );
define( 'AUTH_SALT',        'o,O]eP<,D&%ULV!go{Rg!q`G}S+1BI0M&,e<+:8Z[3sKLXv-B,]?.:8^<S?=pJ8W' );
define( 'SECURE_AUTH_SALT', '>{-zlL< 418e~zh%RS<vMz4-/dZg8EtQpm}fLS]Af%Lw~li_JvvFdAB:F_k/S`-F' );
define( 'LOGGED_IN_SALT',   'nHPs+o-l!/p]S G=)[zuzt8i8m/k4/^A.JzJjB|mg6rIH`J-y :ITI|aDfN!63q`' );
define( 'NONCE_SALT',       '^;CUmbNi)8mN#WHu FF~D+Vz~^TGSZFg!.Uqf]&F2k^IQRH(`[(7`r^liQDu [Ir' );

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
