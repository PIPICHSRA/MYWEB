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
define( 'DB_NAME', 'MYWEB' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '^4]XmuyF3&Tex*}hqZ8czMaH26|]@$c0iy:WYe7Pp>/hp#DLQ]{aWbtxau ()`F$' );
define( 'SECURE_AUTH_KEY',  'os5*6_~P*~ak1qd[pg)Q#50&tb8s?.L86choHY+0~?4F,f4ArpAgEj}*0l>I~1^@' );
define( 'LOGGED_IN_KEY',    '`!D,z}{<z7^/^m*!t 27@Qi@t6ALm:f1UW1??Vy&n[fCB+P;xa:kTRE5G5*c(p!@' );
define( 'NONCE_KEY',        ',@&~dm&ynv;2Xp>0Dl+Ui FQoj9o>[.`}}bw+HN5u)6<$3y+?I}avgn&y*>kyrdB' );
define( 'AUTH_SALT',        'a:b0*j2hG4v8dM2s!I3jB(AT!*B`6.2vB/ePR|1[=6QXLm!sC /b/vCf,F@MOZE1' );
define( 'SECURE_AUTH_SALT', 'u/CRSi?^}vJG02~L:sSrgW[l5WN<w|F[rQm*FBNieZ$s`tK(wRx.Wj&P_/8-;!k=' );
define( 'LOGGED_IN_SALT',   '&E9~d@i32C/OZW&ig/[#%6f_qD&hJK^j5:!K=dNT<{IS(sM)3K )0Can!uPLdPGz' );
define( 'NONCE_SALT',       'o10!T%k{)<5&3=;!y1-B{9A`}Eb[W&=W%T69w=/}=##2+5o|$Ke,4ULH*Oup@?Ex' );

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
