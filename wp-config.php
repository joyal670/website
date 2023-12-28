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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alotholding_wp_db' );

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
define( 'AUTH_KEY',         'd+*tWq?UPLFG@v6ROXvhaucmn5iIgKCkG_hD31hKYdB1U+!g,~|[WJwXmKT@B,ni' );
define( 'SECURE_AUTH_KEY',  '(c{p{)!BgCDH*YnamXXbQL;gDYu5LmGXL4e*[BkB|3Nw$NBCamrmU1>y**m:^K|!' );
define( 'LOGGED_IN_KEY',    '<~M96B<AqDNVsF#?5McEo9q#,5UJigEO%}f4<r.8p7-]iTY(O{bc!{6O3]h`>&[z' );
define( 'NONCE_KEY',        'G}i9sq8fw#y*kwBnG68Tg<EK,kSd:w$L;<m5hV@+b^6_n;YtIkyDm+3}Zy L*PF(' );
define( 'AUTH_SALT',        'FX|u3ay@h]Hc)VDtrCBh5*`wj^$DVFGV&x=;K4R1fs#ear6MCm:~EJneiqz#]U =' );
define( 'SECURE_AUTH_SALT', 'vl;GZ!ojx 68J -3U%Um>82ip#3/Lvg5ij/d(3{PZ5vlw-v9T*V!|v,It&c;bHgY' );
define( 'LOGGED_IN_SALT',   '$~Na(m:oqMv)iO#)P~4X6fCty(zEa]lN=p7]{PL|W4m44u_}4N?e*jXY<tdbAy74' );
define( 'NONCE_SALT',       'wNAE3S(sK%te*2_^Q`!yS5d0c84~/5Kyr}gcx>p-XH5{/R`+V!bVAXGGg+!A(u{F' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
