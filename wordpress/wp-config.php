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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'C><;n,L39=[:1]@OSZ+9M1d =I`!T#3T(XF9^Iy;id]0S/+y;(g[}Rl*F^BX|H5-' );
define( 'SECURE_AUTH_KEY',  'M)AYaR=f4lDB%pAC6`$aV/XxmJ;hQ#C<d!]g1Kd$BuwF5;f{hHHZ(DR~fS^;J4gb' );
define( 'LOGGED_IN_KEY',    '3d^,*{cJ-S2*ji)Q[j@4+meL`;(@c/J=3Ea|~|vO#ccD{b-Vm=:^lUH-[ZK.gs$<' );
define( 'NONCE_KEY',        'TETL!,VOMd-S8r+pHe-d[2TUn|}]2d[N:YGFDPBqcp#d,s Rioabawq![2yR=a1F' );
define( 'AUTH_SALT',        'DxLn0C< VG_(?Y2+&PcW w)aI/XXMfQaJ|hu-$DrJ8=F[.!#3/qy%qbdouFQ|`#D' );
define( 'SECURE_AUTH_SALT', '?y%lUY7Fty^22on)U|[sx1wY2dRv$X1,}/qG-68g1RGs*0-=UuYr`thHyXwZM`33' );
define( 'LOGGED_IN_SALT',   'XzT!MDrsvABH9p1dI*]Ew9#JO^4P 6Ub{Su19#CYg`:+|z{fe(J|YH8>{|j;eA# ' );
define( 'NONCE_SALT',       'x0(d+z?6z::#;NgoU/J^zb^D[,_7|cEz}9,MMf+ZEzJ,%B=~28 )WaSMSZ]b-kVk' );

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
