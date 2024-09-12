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
define( 'AUTH_KEY',          'HNLP}Y;U{As$ZB9?9J00f:Rt}jH?y.Cg-)s@9j;2 uhs6Ny!cD~5IXV:z|2}B{]W' );
define( 'SECURE_AUTH_KEY',   'N3+f4zQXOw;WVMY%=Y/WS t,dFK?|rC!wNxprF&hN`+xJpC-oGu$;JR78)J#Q>?-' );
define( 'LOGGED_IN_KEY',     '{ZaLC~(zKZ<OwSrzOc&{wxH>`u5YT_&bn(_&w#ie+=|GHKq^n7&KD!-3jA?]mN77' );
define( 'NONCE_KEY',         '!5j82roe1Ibuk&F6I%/C`0f![xZ,oTzGKxKKi%hq3C@CwXJ<K/$G>nbs27F<(=70' );
define( 'AUTH_SALT',         'e;f+c+ m8:<hSy<cT[WT5~0e-,=PAGKV!}cDMMSuH+f)7{lrobp6HPNCKhH,7Y)W' );
define( 'SECURE_AUTH_SALT',  'F;br*z5rUw6Ihy)BnBQ)G^GbS8hKf ;[gSFZcdHD=-.4a<cV$zu&~9,PTD9iQWT)' );
define( 'LOGGED_IN_SALT',    'wo?Lva9t`IuIc#*p~UcWTB e|7?cpH@3K-Av@zjV~8r@>#1$bzv0j2(bswemKT7V' );
define( 'NONCE_SALT',        'd]_.7q,w5XoR/KDn lb%{GPR/cBM _Bzm*gU,6cM}F2y=>{mpoagUJ}Rc@7V/^rC' );
define( 'WP_CACHE_KEY_SALT', 'r|eU{`|1lTBojwPJS0K-i-s1`9F`aMRSq+=3e})SB|~?@5kiM398^7S5qBMICos^' );


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
