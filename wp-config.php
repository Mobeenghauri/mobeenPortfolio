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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         ':l9It?)Rx.YuA]-iQQmy8t( AcR[/%Hcu;hoL6i3]/DS}:R;FrF<.[5*R<T_0z!/' );
define( 'SECURE_AUTH_KEY',  '>mFvjCdIdxU,=i87l [F3(5o*1/$}<w:A}_6Cz,i?K.c`4 klE3-K]L#5oE}hn}b' );
define( 'LOGGED_IN_KEY',    'j(uL%!Tq2Vy;D21;1s$/J`!9sp.>qQ$Afk? S`OKxWzm,s@.D~wHsC.II?g%zZYB' );
define( 'NONCE_KEY',        'Oqd5Q0A<+3*8,j&5# G~!021&B<JD@{3}swJZ:$kjSpQ~@cNQd}SR_AGb[sKKZ,D' );
define( 'AUTH_SALT',        'Ng%vJ,sHmQBV9),k=W>Y[JpuQlJFg}z!vy;E5aN%zkg0$W$O)6F2WMv<5[|8Dz83' );
define( 'SECURE_AUTH_SALT', 'I{T5hQXUkmv4|SEnr6K))W^anT:?Bun$bX7v$Y*|<|HQ`Fp>gKv`<Bz7ZtPnAp&{' );
define( 'LOGGED_IN_SALT',   'mcJyj*vNZMw0GJ@F=<W~p%qnzkU.! l(G:c8B~041^]p,45smF2N,=;]_lQwe<tS' );
define( 'NONCE_SALT',       'eb$j%jj<^_%PJIUhc1,4bvnxzw9Aw`$<(1*c< )r>2dc8T7Po*)1zy!G8uouU~@>' );

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
