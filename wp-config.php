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
define( 'DB_NAME', 'bookstore' );

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
define( 'AUTH_KEY',         '&,9wG_,QCid=T*vF<oC;3h:L1bpq5Ng cq6$U.LSh_McxXnK)je=hL5Sm0~<v&Rk' );
define( 'SECURE_AUTH_KEY',  'TE0uikNwsJmz#c9lk*YS%-s;=-.(?sb,H|kKZJi%ZKU3SGyQUE_ZE<!x3yx>03I$' );
define( 'LOGGED_IN_KEY',    '#C~Wj+I+V./%i<5llQ/J*7Q)za~p-@m2$Bq|G_qY=w[6DAq:7lhq$I(3P^PiS]z^' );
define( 'NONCE_KEY',        ']itMiM5{*i~cA(xJ7z0)auz,Wh~SJ@}(lZ7b2xd6<liOb6Ax}DdQYU:iO4w;%0>H' );
define( 'AUTH_SALT',        'sAPgbL?1=@0Rz,[do>fYSii$zTZe2rnvMg~/T$D!2pgyKo`OuXoRsbU|Z#Pw1TOU' );
define( 'SECURE_AUTH_SALT', 'Nd${uA)<Wd1tsgZ{9DvxV01*>]7zUU+Vu18-8@ru9*NON9/*{:%@gqR`+t]L2Ip`' );
define( 'LOGGED_IN_SALT',   '%1JW$QJ<o2{I|;zqH4wQB)[AabU>Q#wQNBV$y|K5i%-(0w=0A0M}y QZ~TZcRL|9' );
define( 'NONCE_SALT',       '{o^Nv,=uHwE@SgMCl%dW3miO_aG3|~PHQP{B2,Y9w&{3C6_=&I(SC1J.0  uJ}nS' );

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
