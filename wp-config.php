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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'huyhoang' );

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
define( 'AUTH_KEY',         'HV+K b=;f?d@FUg>gieQtS,tI<>.s<e^fk[UDi8Nx]{N9(|03V51%p63I .vd<cy' );
define( 'SECURE_AUTH_KEY',  '~cH#xC0].vLrktr>%Y>0YPQ8eG`XOG$l3oINU9I/#POx|>0&^[o Vw}YTw~x}>Cu' );
define( 'LOGGED_IN_KEY',    '#.khEU+:akYq96uLQHZC;[5Tvmc<%C#=%>`6MD[*TQ)my;D<7:y;Z(9cM5ZV F[.' );
define( 'NONCE_KEY',        ' tym}{r+4Ym9W{T?@;|wYSwqBN2W~&lTnG<k|$f0vhX918ydM0wcQ{g8 yAm2o9;' );
define( 'AUTH_SALT',        'bswwA?;LUd&&?w0Jxdr`0&V9}8OVF,#[A~bPF`Sx7{lEK^4FW~L*1&zWWuf7uaH~' );
define( 'SECURE_AUTH_SALT', 'o}qB^fC#[[>~_BtI7g8I| 3`JO{|Se|.~ &$5rRWgZHd[9Wi~?o(Ghx48(pq|~f(' );
define( 'LOGGED_IN_SALT',   '^/DP|D 15QK+F_m#lozTa0$o`)iTMOC`==79pps1V1d>odg{8Z.,W:yE`7:OhPa[' );
define( 'NONCE_SALT',       'q,iXN%(h=Rmux^Xnz]%i5mvMpkbhfy4N[ q{vxn9{mNTzh`x!O{`z)U!{:D rdLS' );

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
