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
define( 'DB_NAME', 'wptheme582' );

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
define( 'AUTH_KEY',         'bP>NsOR)N+L1W!&i&n /<<p%@ospSsWUP+:a7TFFu]-CNyU<E+}|Z-gQ7#gH%Yd]' );
define( 'SECURE_AUTH_KEY',  'h+]Pt`,@* ]M,,wf;K8Z:7Z7Xfk2?/+8>orU%Uru`/Ywz; Qn/0/8pT*{QEAt7b.' );
define( 'LOGGED_IN_KEY',    'PD)jx^[J3`GHHucTUT*O&x;N^RX^kNB6Vv#t;%M:(5+zSYz334pMT{t!Jtbg]Nk~' );
define( 'NONCE_KEY',        'DtqL$mNa+Qsup#MG1z_oQ^s}x S`FL}?EYXbE=hAMHf{5Z #$ $h4hc0rqcQ&RjL' );
define( 'AUTH_SALT',        'cYt)7G_:x~e(pu#hP{_[]}&Yc+<Re}O-u8oRIsv=p7e<lGg/dbAx/]#8},D!_]Di' );
define( 'SECURE_AUTH_SALT', 'Z2=%:/>F^@%Ll SD4MUc3}4;iT#2F+g*|!RWe4DhNDrU4;E-60}OTU2t4:[RW^S]' );
define( 'LOGGED_IN_SALT',   'vnx};YBs1eq;/n4BEa_eDJ@y!27OF,66(%LPIy2>CD,zei9&i2DZ=rz&:wrD^7Rd' );
define( 'NONCE_SALT',       'GO}ux-H5sR7+#.-[<7r).[x_=nlM>LHA-<~IBsbhP[]!r,>v8uSy+y==!D7Ta&j>' );

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
