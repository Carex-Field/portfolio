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
define( 'AUTH_KEY',          'EAkN-JCbrFBE0FWw xhIrB4*=|(F,2f^g9Ym$X(tJRw1;iNRPt)?wX.B_jryl9Ns' );
define( 'SECURE_AUTH_KEY',   'nx>SR$Dp_cl9Y3#(uw2[%=>@=DM-?U(dDzyO#^k9o|V2|zP)F7b}?{L*7}BCoJ#y' );
define( 'LOGGED_IN_KEY',     '-RFC80:|<aq#czkocCT$yv<fW_P?b8+sEpY?P@V2y}IOlnBZUXoRMY<$xe,]mD[/' );
define( 'NONCE_KEY',         'mSwEal^~$Tofi90A;0T01/<IZS2eQ)$:MVy2ym}]G4l _r<DwFV~DT6%Q^.y7$EE' );
define( 'AUTH_SALT',         '!?v_HpxXGu(C%0!W`T{{l>-ffcs?(KovY.2.E,=SgR7~1L$cAnJ^Hh!Cly/13Nu7' );
define( 'SECURE_AUTH_SALT',  '9<ie+B&lnxKWWr0`b[.w0m|VK_$<Kuw/9s>rIueeg[Lu|{W#hKi^NVn%ekgkH2&=' );
define( 'LOGGED_IN_SALT',    ' _CB2aU3?ljSQ;r^i.a7Xn0G(-P(VVyXTGhNe![F9hiHH//q09z$il!DY?Ua*_oO' );
define( 'NONCE_SALT',        '}~9FH&TGV8{;e|8.!P2<>0a;AwKcsVq $2*$zC_m1lFA/fkL *;nFdv87K3~6[q$' );
define( 'WP_CACHE_KEY_SALT', 'jcMB~CzxM*Hm_N~fpi{7;Km[KKWX4}2*7ViJeV(Q[gE`/h+d[uwXA:Fy_[SI fUp' );


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
