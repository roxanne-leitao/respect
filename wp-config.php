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
define('DB_NAME', 'wordpressrespect');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kOHZP]Uart{xk{jgxYJrr.yA=W$A|uJTahnu:9d,#/xA2A2@d**j.|G{H%F4*_Tk');
define('SECURE_AUTH_KEY',  '-KR|2 %h;8p.!c(W<e=}b]SLGqw!!PGvN+.?dRIqw=av{oG1-%:y!B$Tqcu%l!)$');
define('LOGGED_IN_KEY',    'Dc3*G!C(5gwtJo <})=[tU0$L[4Sje2q^R^z1sp9TPpq-P?S0:,7bbl&VSo;u7oM');
define('NONCE_KEY',        'm8N>pY#;TE(b`}p#:[Zlp]}}`-I-(&?G3=IIYfpTB,sDVK%Rr4euskNWe)TQ%y/j');
define('AUTH_SALT',        'q2zN]5SR@Gt=0@ehwhCo]A*n8X=W^I[&Oh@IP8q-2$DGRK(y<hqP3>l5II.(i-,/');
define('SECURE_AUTH_SALT', 'dFI`.qUx&Fi,7t&_=5coVgbSjq=Tj0[1]8%>ZwAw[l)Tco;AKNa@hq9fA/o27C[S');
define('LOGGED_IN_SALT',   ')HF&Ik4S%u<_chA|0UN,qQoBx~3ZU!H%H]aL>hoK, )XkSso$;cRzVHs ^lGE_47');
define('NONCE_SALT',       '16,=K$Rs>U0NKG<YqE2[M@6!&lbIjrGL}OlE]hbU+>_-o%d:=ta|v-z=+ailz?p!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
