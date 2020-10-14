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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'D!+m0h;tvC_EsJzK;x$zi2l)bcFrORwT?}nb?C6FY}f):/r_#bUTKOk?T)M2!~Tk' );
define( 'SECURE_AUTH_KEY',  '`^iN67ED[)p/Ga[>iv$>>}Oo&-::mZY5|,>8mZ~9V$KDF(L{i-.tjKj5m~sv,o>%' );
define( 'LOGGED_IN_KEY',    'PsGi7jTD&$f6R*6&wPmWu:3wby]@=5pLx{}?=Ye?%7wWm[&q|OI.E~L{/#SPt%T8' );
define( 'NONCE_KEY',        'ZjI~#/GJfzakO*b5kvp#eSvy34rJ>Xb[njwF~g6C=;P?Bc ]L%^[_k5LkNg#0qMO' );
define( 'AUTH_SALT',        '0v2GwrBTXf@(YKGbkDs:JQ|AgLkmS! iTwv|,f>8J1Z;eA@^6y57Z5NevQ]B9/lc' );
define( 'SECURE_AUTH_SALT', 'J8(Gq9~l3#jKmI[9#$3?*L>J<Fmq[q`rT;xQ_vkr6c@%oFE0oD^wA*D4D1_0HQ(l' );
define( 'LOGGED_IN_SALT',   '8l#TTw!JDh}g]UlFzWJ:7*P1R0PU(=UU7ymbHNyg$Cc5<3=)WHumK:3>KjU~O]x;' );
define( 'NONCE_SALT',       'et@1_bV`-,pVj<dCm,x9Fa-B$UWwgUH|9Kz/+SqPv?q<+>=bIm2&@_Hcxv<XjXBu' );

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
