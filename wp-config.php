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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'customcms_my_theme' );

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
define( 'AUTH_KEY',         'cRV(Dgwyx-Eop,=oqouZg4%>*HlW9>!<au,]mjAYJ3m]%$afX9u,-t@B9u<EXf@^' );
define( 'SECURE_AUTH_KEY',  'l)en{+Z)`*0w%3<#lGXRRgWZ}<24RvrAp:w46z&C4p&TNR3qXJw3=a}#oh<bf9kz' );
define( 'LOGGED_IN_KEY',    '4eQJd^?IT]]n~<fAF,HFbN?>IS 7h^9!Kt(H6<}h24g?Zv_Hc]LqS=3~Rh(/et-}' );
define( 'NONCE_KEY',        'T<4gcoiu+*#yn0V}bn,}JminQ*H|NU[FG;NEhf<{zA}})aHD.JT2v0O,=[IJ}}-*' );
define( 'AUTH_SALT',        ')RLleP45<4@Z9s8Vm.no=)7Y,5J cXZi70%SJ%TS7IMl-Er!@V>Q>KSF!##A5ZD@' );
define( 'SECURE_AUTH_SALT', 'CovG}nbju?~tnT&4d{0wGWnjvCSf9dF<)Aurh>aJLn?ComAn&O;uz|=BDy{q33@s' );
define( 'LOGGED_IN_SALT',   'hcbjjiWw3.c7r}O(g!.oCHF4unoLwB:vYa=R@7-|k9wuB]2!E[,1[i{CawL,i^WL' );
define( 'NONCE_SALT',       '[4jbUir(-aS$-}h_&{GoTK1,Qwd4rL>z*SB##si Q>Jexowq|U_m3b_puVTyaJ; ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
