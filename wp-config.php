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
define( 'DB_NAME', 'u755160686_BNxdy' );

/** Database username */
define( 'DB_USER', 'u755160686_ZGSm4' );

/** Database password */
define( 'DB_PASSWORD', 'T0zhNp9Dp5' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'D*qoPKX%:%*VV:q;AF=M><{E >I+>xbl~@VxRT_8Al]7Y$bUh/pVWrG+,/f7^e9:' );
define( 'SECURE_AUTH_KEY',   'Drht1PhLAn0dwfe{&F,.R9:cQt-?DXM.<-[O/L90}sQDH-AZv}]2l7M}vqFd$_CG' );
define( 'LOGGED_IN_KEY',     'J-Ah(}rEz(58 $34CTv)(=4VQpde]r%fF` BVvGs8FNNq5UqmuFoFM$c Nxq2b-L' );
define( 'NONCE_KEY',         '#@=?0x1~QH@KjdVQ@1+Y_Zkv2qB2@,lf!a/aq?H5v1Y~bI$b<*QqcrzL6z:X)Y^8' );
define( 'AUTH_SALT',         'BY$W(=ib~Zmq/Xwyn LC#ap6V)fz}/TryW3I~&ER9P H(i-WXy*vE*4Qi>NfLH(:' );
define( 'SECURE_AUTH_SALT',  '1[aYR,wn[r(J*/}qiSJEj D!<)A/Z@&{o#4kiG_k~1(j~}[GWSYf>FSQ-O[dSUvq' );
define( 'LOGGED_IN_SALT',    '+u!xjfP|8.|QE2%SvTNf/DrlTT@%11|94/4j~|Q/q6RF7.+SrI%23YnBgW.,*`%]' );
define( 'NONCE_SALT',        '~N+BBUAO50CA<S?S``o0HLU5SnD8T4^C)$3#W)({oG_4-KLY{M,YA,GqUG*-a+77' );
define( 'WP_CACHE_KEY_SALT', 'rFs{s(Z6Ryn}< ~lV.frkw8+(E[(`*<e2lg+rbpwP6%Y;EmZ~1b`!MLJ_:9u}k.b' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
