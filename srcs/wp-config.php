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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'W--%Wlf-u]Ih.ZlUKiQ|.j.ecz_SqPIVs$e:|;3(!m&!1]9,R=#=:%ON,|TKT%{8');
define( 'SECURE_AUTH_KEY',  '@Qsy8f?*yrDygcftf{+.KIfg:<ng7UMQ-EWxEO>T<er-Khb.zhlR=>dr}2pDBGEj');
define( 'LOGGED_IN_KEY',    'Vv -!.E9O<BX4JgT?-py[O5Y,_`g$<rO*(j,a=jDYhJmwVho0`+<xW+n5Nc@g Da');
define( 'NONCE_KEY',        'O)0`,;1{|q+:zD}E|oZ`c-g*4b-+I`4)qyb4YtsEkmbs7)-|8,N`Kvvky(}hw5p~');
define( 'AUTH_SALT',        '`-p-@w>/@U6F3@eRvn|ub=-=c[H<rnu%s0!yy PXG_2f:x{FDtN{L/JLHg~;+oYX');
define( 'SECURE_AUTH_SALT', '}-b|n&6_w8)s.-(=|hfOFiX8wRi_VAr_Ez`$0QR,S/tPR9ydgbM?Wj-@uOByW#_}');
define( 'LOGGED_IN_SALT',   '/Q(9KSq!XHj+*{+GK?)D1YfkqFfO^DTtIAuL(i5SZ24?RwA*Zi-9-&AgQ&r<i}iB');
define( 'NONCE_SALT',       '*bIj3Y4> &|o^v+W?RlQ_WZwG: ?Rd3-[+(nm`dqqm@TLERy3IZ-0libllYY/QSi');

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
