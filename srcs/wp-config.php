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
 define('AUTH_KEY',         ',C0t<|Ac9f*/{&Mc$X>IOFbHtw}m$pi+IJK=(n*obP|,Jng-oTZ(.wW6ZG]&mmqu');
 define('SECURE_AUTH_KEY',  'XO~8;.:OA|U}0rZni1dod 5JjIV`.&A08B`c}inJl-&sJZq%Qt%h}-ztqg7GDFGU');
 define('LOGGED_IN_KEY',    'GXRF(xle>Kic173-O=cg}wks,?V+H,/x|YX<gV*cd;3/Yk?yJUxyx[Y3}39*HVK#');
 define('NONCE_KEY',        'Lo|(/v97v-<~k]a^>Vx<YcLC2*A-4=gn=.BdVds!JA5_>Y!3@*C g-<6x3RjQqj*');
 define('AUTH_SALT',        'D2K@#J&>nefD@aW>e{.[B#^vHLc^x8S8bF>o<;6G9tG bC}|tNM77=F`qS=ZsdV/');
 define('SECURE_AUTH_SALT', ')0OPKEPHOD_ejDVQk0a&!MTOQH03{hIT5?a&A|b@zj6P.v`EiYU+-Y6c?,JBQ=P5');
 define('LOGGED_IN_SALT',   'XN^TY~DJ.XoS=6qua@kaO+_m;/M!FfE`6!dY{?8-w_a^G7@TJNRL~qF-5GH0eRR*');
 define('NONCE_SALT',       'yr}<A0M6pL49*_^TNj)]gMh%I1]t/*zhn;V v^~U*0R+2We2BboT{!+/(hOkj{ZZ');

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
