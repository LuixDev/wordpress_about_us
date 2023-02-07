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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'contact' );

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
define( 'AUTH_KEY',         '_{9,ei_:a|hgAmGi.jhzM4JL=$3Jvu.SU-]wYQ])#(AiUo3/yEW~^m]rqp?U*+g;' );
define( 'SECURE_AUTH_KEY',  '(z`[k[{y{>8Scb0rW24:60`{Q+FVl4fL$^6`T)%<6dEX(IP5X5,QR%SOKjxHP$MA' );
define( 'LOGGED_IN_KEY',    'JWqy,BR/}r7_tTx,2r0B{vsgJ(?I.+OO?42mbOEq~po]gk qTLk4yhA:G1=j:{W6' );
define( 'NONCE_KEY',        '<J0561E>tSpeRI}_V?QnkL.9P}srcr!WX^)Px(Q!Ib?oa8:7mKs:([~pXbh()7Bx' );
define( 'AUTH_SALT',        '0{zKp+o6K^BxE-wiusA(sgnmf(Q1l`N^Z2hhgeeyRU6jv!wYS6TAO _7=C@;v7`Z' );
define( 'SECURE_AUTH_SALT', '/xIk:(2G/Vsf V2sW){z[hXC*Celljyy*D})Ys5GIN>_o`$k@sPYL9,O:45VWH}j' );
define( 'LOGGED_IN_SALT',   't3x$F$*sf(_ceer,Iqn,0>oP.O5<Zpw5zUiAC+VUXMI4ak8pe_:zaRs1b~(.H.9a' );
define( 'NONCE_SALT',       'e1H|{l:]T#V6,g5wY]j E?EUCfur3Pi}YH[!..ayGiz bv?e>Rm4=sE/TK.Ag/r[' );

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
