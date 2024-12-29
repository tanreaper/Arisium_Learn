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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{V^4?$TX}GdNI$ez`n,JxnaQ(Cs{p_P]I=gR[&+gL$+J<S=N3]D11$xJ-xeIGP4j' );
define( 'SECURE_AUTH_KEY',   '_d!SVdlK!GTvzJ4*C/P0Ek<;j]?Y<[U7Eq,tCG6U49%8m$oL$Fsc_U2T8q}ekt-g' );
define( 'LOGGED_IN_KEY',     '5:lbXSavd/L*Tv-4J||+g%D]+}(U4JL}rc<!vSpeGKZ%d*,3au0JX+>c)*w8L`gK' );
define( 'NONCE_KEY',         '![P-S</3&jNAT`AjcBi:6/t@~RwgE9=h4U3KE)!^4kp.Z)^6|uX9y{vi]qU-K{,&' );
define( 'AUTH_SALT',         '1g G#Z7.ZF0RS-]o1V_W,eB|KEwia^5bKGNn[NS.cQ(P/gPHp0XmcMW|J|Hs^@3Q' );
define( 'SECURE_AUTH_SALT',  '0a8OcNqs|Bx-^,F/#uznaB9-:N`5/!)pl]ofg@TSsJ()SFvscvx.v0#,9dP+W:GR' );
define( 'LOGGED_IN_SALT',    'cJ!Y{,l|/e&xv}oqkvo&_SF-rW4z*R.XAL2#x6kcQb[GikPUeX!6}62N?;7$%d9u' );
define( 'NONCE_SALT',        'cs#JEF;G:n~jJp&//Y|JlrQ5wC`hhU|<LW:(.Jfe,_%4K66hV:>H;YaLnNZb[Jt<' );
define( 'WP_CACHE_KEY_SALT', '+,N9fpm}NQ}#tTx6[Z1Vg{FA430WbAWnf6Pj&(ZL+5?ay2mHoCe_[=I7Z{W>2WVQ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
