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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '6390349db2' );

/** MySQL database username */
define( 'DB_USER', 'sql2628542' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nvvtmc*i' );

/** MySQL hostname */
define( 'DB_HOST', 'mysqlsvr78.world4you.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2YRGrclW>6`C(Wk#k`|n+hbjJK6:kL7uK_TdG}U2@Y{$P^ib){j%xjfZJyYUb@IU' );
define( 'SECURE_AUTH_KEY',  'pT^xmj[!)h$4y=?Zixc4:9=d[83WGQm}B%bVw8ZIbw[.D-vopywBCK|h>Sg=U8]F' );
define( 'LOGGED_IN_KEY',    'I3G?&]HCkz]An>XQ!605_K]e,z<RXtGu0~/]K0d JQXRySp !W[JnP[}}GQXaaZ/' );
define( 'NONCE_KEY',        'r*^a$YdG[4J_:P?<:/f:MC2sv-/]h@i%W:W(PD~j?o{1rShs?BUn;R_T8yX${HfS' );
define( 'AUTH_SALT',        'j5(~GyRw&8KVu4ZUfV7e6k*pGZJ[x|NbiJI.H$mFT$u6Byx9RgS|2zyB{!QI3$x%' );
define( 'SECURE_AUTH_SALT', '#6n;~l/PU~B3)W4{<M?ayr~4CVP7))dyWd5t=~DsJ(j!?lv_FZ&@]oYc~#Iqz.Ib' );
define( 'LOGGED_IN_SALT',   'z7LR%M6s:TwbF)WQFx;cVa6KKO=,4pINX&m}$KzH<Uso|S~v,9_Q@Y#03+sm/{A<' );
define( 'NONCE_SALT',       '|AA,m,scJa_,m^e3f}@)[I^DAAGHcjb^YW(kimM0WM<x97I]x$C^.WWd>6%)eIgw' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
