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
define( 'DB_NAME', 'profilepage_db' );

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
define( 'AUTH_KEY',         'qi_(0)C=.^QF#Z7{H8$#e0w3U7JXIVBy?O3=#rAhE?W.Zv0LhtdQWDuKc<e7xW,,' );
define( 'SECURE_AUTH_KEY',  'u ]E!p~vJx&Ev=bKoWS=jaq0l!2vu `@5cPnn|?f m?b[~)/IFuB8I{+040SHp)r' );
define( 'LOGGED_IN_KEY',    ',`W<e.N(JrZo?FC%JLwm5]0L`LsAJ5GRti!h;N$J%yljbVzkNzGv!UnuQGk*zI!N' );
define( 'NONCE_KEY',        'ag@:ZdJDNmC62lMuz_lS}=)Y)-CO.[1[w#3-*teHk;0cC4]X@ZRO^!q4 *1kf^cJ' );
define( 'AUTH_SALT',        '!P.f4,{S4aYyU@w[WqWH2/Q45]uXL8_2r+m:[,BSE!C7F6Yp#+M|qXFH3Kb6X~|~' );
define( 'SECURE_AUTH_SALT', 'X`h1XMJ:.%[$g(ehj&JF:yMp*mP{q%WNJF^M!5V7<3N9|E&[W+(Vs[~l?67Dme3c' );
define( 'LOGGED_IN_SALT',   'r2iLpBD0 8Z&^K;74>dv5}.@d<pt0zv~}A^Rz/a9DSRkx*2~bDT7@C%o!p!S~BnR' );
define( 'NONCE_SALT',       'EfO!}[-V9v%J<w3@4BRQfS3/AdG4E#&BBD=M{v?>[>=v16F1_5.b:tAY?v4e1I6F' );

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
