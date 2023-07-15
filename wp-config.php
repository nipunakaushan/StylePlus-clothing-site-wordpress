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
define( 'DB_NAME', 'styleplusdb' );

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
define( 'AUTH_KEY',         'tv?VC1VO|uUr,KUBzKp{+>HXUU.sQv4GYlfNcj(4{8OcImue5|T,X?=?rfE/h?c.' );
define( 'SECURE_AUTH_KEY',  'B~j~Otu@tGMx&yN1GwZO9>mQiL -nhqK!IJrHam{nen6EetXVv 2Jh&Jvmvq4_SY' );
define( 'LOGGED_IN_KEY',    'G-$~(DU,@(2!/L#AJUXmc4K1uL42)CB>jZhLly%AF_hA:.+Y(BW0!qB76~[dcvNR' );
define( 'NONCE_KEY',        'TAg+VpA_p0) PFsc=4(ES!DQoRU#3;h-4Y42.gX0rc^=6fjEjCJMY:>?cbVLlDjI' );
define( 'AUTH_SALT',        '*EL-z!hEYoC*u?qhG,_}V[6SOWNX{#j.b+:a`yx*pvH{Pzssq}QCq%`&W((Y@(+g' );
define( 'SECURE_AUTH_SALT', 'lyFoYvJY(g`z/}rM~>]TFAH%1+AGQrZJZ5F$$2}W445+U8Ml#kss;85%p#O^$bi7' );
define( 'LOGGED_IN_SALT',   '!o UmvW^nYY6Bh3JCC+N_O 6Z&dEwA$);zY<F/LAaS4U>0!uRA~+0%zy$Ou0jf>A' );
define( 'NONCE_SALT',       '|b2)OI^EnMJH?[-42f^#q9OxAt5w~*V$lh2@+RUk;=@qODy`y-)}Ua2S__#(T,(z' );

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
