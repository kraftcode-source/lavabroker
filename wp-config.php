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
define( 'DB_NAME', 'lavabroker' );

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
define( 'AUTH_KEY',         '>h!%^9]TpLlePLhbIb{Gr<)JB=K0q)wl([#l=mmMIdSUc@,yDApH: 06z6hJW Eq' );
define( 'SECURE_AUTH_KEY',  'nn(K]*f9vI5X2%[K*fi_+.xz*Odu]wnYZ#z>HrP5v*QWP&aoWr9xxPFEzLYs9wCP' );
define( 'LOGGED_IN_KEY',    '(+58sq+cz<-7s0Q+c}n*cGl4%0oB0QBS:EP[#EH]FjwRFxVP3/w498[um>uX;5n]' );
define( 'NONCE_KEY',        '%b78}KGs $USXvtZ(AOsL9G~P=4 4O0j:;q[n;}8{<`k@c8Q&Vt{!uXFZAU6j(,f' );
define( 'AUTH_SALT',        '({-%u=1nf%#m0B:B>x^%Dtx@RC0z)x45#aLv`h2?SJ/(c.L9dL[-)ak@xE7@@po}' );
define( 'SECURE_AUTH_SALT', 'J_VirO9v5:~ki$]J)V#]:)2YF`Jz;+qXC_,w)b`orr6EUqEt[_%$zO*j}4tneB6S' );
define( 'LOGGED_IN_SALT',   '>;,w[B{cIp1Wm9JpiSfQl|{M(]8& &Kt~BTqcd6$TMpoS)A<xy:PS^2:@sz+FY;~' );
define( 'NONCE_SALT',       '$Vw^wCDws6:X~YpUo/T=qYv@[ v.3p.z4aZU`Vm>b1CZ#`nfL|@ALwA3!A[CwN+*' );

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
define('FS_METHOD','direct');
