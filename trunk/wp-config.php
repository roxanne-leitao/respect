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
define('DB_NAME', 'roxannel_respect');

/** MySQL database username */
define('DB_USER', 'roxannel_respect');

/** MySQL database password */
define('DB_PASSWORD', 'pE23[0S(J1');

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
define('AUTH_KEY',         'ecppext69tsj4nk18hg7zfa8qoxz4d4qpzdp9w2tnx2kellkbjykuj6lbhyxolju');
define('SECURE_AUTH_KEY',  'scufp1feibzidh7hei0d55ynxbtz6ftnye6lvskw9wgkwz4ucbfgqmhp2gn6idyw');
define('LOGGED_IN_KEY',    'um7xrqfecyqmvvyqfbeuuvgwcr0lgsbbs0clcxu2v9ukq4t7o2r9enpz6qdurlh7');
define('NONCE_KEY',        '5pdaysilnhkmyfshnmeybrju3xjtbgy9ccy9brb73pyrcqc3pwiqnmamsxpx2mgd');
define('AUTH_SALT',        'xd2zeeqvvwseled0evkwd3hng9b6wgj4xfrm7lx3onxer1gjtkam92jvqzq7nbul');
define('SECURE_AUTH_SALT', 'lqgvof2aozegqqlotmdlzfzzn4bogzkep6p7l4gbbhsloiseazyeqsahzn5qopv7');
define('LOGGED_IN_SALT',   'gwnvt6wdayuphdrmirzahc2rp7rrztdmulhvffsa36aaklediksralyh6mvrbjxb');
define('NONCE_SALT',       'acdkmbokcyvxelzgeznkzwsj5yyxuf8uukvn09ngq1vac99vwbcfmhbdv2bswgov');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'respect_';

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
