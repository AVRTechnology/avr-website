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
define( 'AUTH_KEY',          '[[T{[shkch&5({o6~X=oQoV9QjRp;ZVh2dr&ZC4d0|*bf}A<B>~%JvSAF2;ov>Du' );
define( 'SECURE_AUTH_KEY',   '@gXAOq:m#P2$;)t!.g4O5VkA&Y+1i]FctKJ/@`$SDrr54<w>-Q-k<_Zh-FW7M30?' );
define( 'LOGGED_IN_KEY',     '*vSb7`8|@n[AX2j*/bOs]4h#a_5x-/nAg3lns`TCvT|sH$]6{ 7K{q<pxCOd>9KO' );
define( 'NONCE_KEY',         'm)_eO|guax5_cL72AB-xQk!#/`by,3N(`vs5&W>c(U@x)|X Q7DQ~dvNHR`x?[F5' );
define( 'AUTH_SALT',         '{16EmdSdZI;%L:zRd;?lR]WSxu%d($:/TdW7@H,*dFW~~c-|4k:5y@y}RR:MGC}$' );
define( 'SECURE_AUTH_SALT',  '(rJO_5qiVdtY@z(I@M:N]K]{Pd)p<[|LZN^ojz+]`8fJf<DE:inGeyteB&.n~^sM' );
define( 'LOGGED_IN_SALT',    '/j`3J2=@v~}Bx>4*SSSb<P5:fP(v>i!vCHy2%cQvT[[^/]@EEifo +0I:0@}R`q-' );
define( 'NONCE_SALT',        '#V~|:5!.sn%37%3lt^i_x5c?+D-WL5R+;)z@xPahy#H>5.59)(.;r$###C_M**S7' );
define( 'WP_CACHE_KEY_SALT', 'SCC?~{27~AW|~m9Z;Fc k1:{J+0R-zK:2$?t8On{D~-A4=e*aakgBCI5xJd04:7f' );


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
