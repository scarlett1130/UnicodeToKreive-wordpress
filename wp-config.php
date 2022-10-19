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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Q@Y(a[F6TU72PbOLG^&q6l{L]Hf~iMVXsoUOSnTQ$n(*Vm)r3}.sxGjs-JP3[y1o' );
define( 'SECURE_AUTH_KEY',  '3?NlEB.D_i[zOZBBC4eARt+q|(N^{RG~_h~3T#s[>7NOJ0;h fVV=eWl#Uo(O]5>' );
define( 'LOGGED_IN_KEY',    '0a2aEmN;y7F73;CJ]wTb5#w)J9JVBL5wTP/%^ba=[Fy(L~/9Ckf2~(zg}GiB?Fr>' );
define( 'NONCE_KEY',        'Oh?2geiYq(1+wS#Hwz$r*:i;RU/=8zHCX1xmKVX8T,<ot)!6&=TCA,/5(fSuCVs[' );
define( 'AUTH_SALT',        'Mg7SN*&R@0{/7clU:6JoFQ1&$PW|()zkKDjvBAE{cZ{(WyBH{W+k@Cr<59 @dk<x' );
define( 'SECURE_AUTH_SALT', '+3ba?Of=FLU7/XR~>%6%!-6tH|Bk38y8We3r^8F),O/$=I3|GE&K2}vqH>&X_18t' );
define( 'LOGGED_IN_SALT',   'sv+=W1J%<lE]5(79g> i_$565. 1)ib(G,wkH_?YhIC$c OqfLW#S*Rqgb{T8_*?' );
define( 'NONCE_SALT',       '!1KDCezfn-DOpf-7aL7KE#2mQ,r+U^H>|=$zDv{x&o_q_+$>wEas@f6B/:hsfnz{' );

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
