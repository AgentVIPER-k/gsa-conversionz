<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'gsa' );

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
define( 'AUTH_KEY',         't8X{fXi!4+a3a?(gK<g6e82dR2y[wb+kf-nj)5WK$CP:?6k^mud>;&GvznEmVxD#' );
define( 'SECURE_AUTH_KEY',  'LgLeBS!af`6qmsPf]t3Syt]vh3Ud`D-#A+V2 +-}E:nG:#uliHw%d*W<yd`}JB9b' );
define( 'LOGGED_IN_KEY',    '9y(:zFoFT{S!m|QDud?U(=DtJ|@8>f*a3g}[]KrJ:.Ewh}iZpVo%f?y;-@S-uwqt' );
define( 'NONCE_KEY',        '{F6mfL!j9vz,ojeSV:}}Ltuv`+18.0VMek[t&M{?:6ZeHGi#YZfc{=]GL78W^zpS' );
define( 'AUTH_SALT',        '>TPz=rDaGb|EwQ:?.XR)0&,CNeW#0nRCnp+aD^aFgsX}5#dkY({.27__hVBk~pMz' );
define( 'SECURE_AUTH_SALT', '2ajh(x(iy/Qn5@c}0>KP(R|f+P_oWZ<7~r^kGswAuhLN@7}A)6mw5|Kyk!EYRpy<' );
define( 'LOGGED_IN_SALT',   '.Wp<g#C19|(hGcjKLpmrLM+{x$7bkkS@Y{YKU!Peil7H[%{Gh6}W7^NvWmrH6Ye0' );
define( 'NONCE_SALT',       'S`%ilN_7 =r6G&@I#dr(PR]?^FEJn>bxua_.bzpY8>gGHAC4n>Q o5[PUgDUv{*y' );

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
