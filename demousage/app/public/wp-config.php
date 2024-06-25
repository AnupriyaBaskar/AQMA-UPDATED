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
define( 'AUTH_KEY',          'w@EZ2Dwn;Jk#M@d=U2Yo}e<#2y[pVp<5^d!wVY&J.K#KZb0tqk3T%>Sm;|oQ`T;/' );
define( 'SECURE_AUTH_KEY',   'dnD[MiPV>B+(FL9WLe;bv)~xkc+0?;vlgwI3LkIq-nb0Qk<mt]]Czy$.sHJk`*r<' );
define( 'LOGGED_IN_KEY',     '*h*ns^104Ql$!1SDK89^YQ{AMlf}1gXugzW7<0|Ca|2zSpEvL_WQ*MkCfuy[^e5!' );
define( 'NONCE_KEY',         '?>mo-QvKYWUfvIhR(wgjgmB:44%%Vxi))]#f4b;E|!Tc(LpyS;,$wVFS5Gm|IKR=' );
define( 'AUTH_SALT',         'RhzTW{~09OCUwtKd^s$IJyzftv5`*P<C@-5l7SeHJi,ge`iWahsfi{ZJA_C~z1$C' );
define( 'SECURE_AUTH_SALT',  '3P&x;v2&IvY>b]&Al$,Qz):9|b&9ld7!v$6[d;!;M:C$V~EBzdt|P|`U:Uw-=Ep1' );
define( 'LOGGED_IN_SALT',    'U77uB=|9f>5-b`C[95swI?^~wj[w&mU#sl*G]#AiQ:m-5./Y7%^kPHNy|^a`X)aJ' );
define( 'NONCE_SALT',        '/O-7HakA!D.dWcIVk[@,lU6@&uaCIj&NC`#)@2@HmXGHR)Vm`N+YsLFmFVPZ+aH}' );
define( 'WP_CACHE_KEY_SALT', '1UCL^(3x<g(u#~pDAC+v#U&{;1dl:|omzEn(m(a5]hK(6a X}jJ/uHk*CJ :mFA_' );


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
