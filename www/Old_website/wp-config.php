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
define('DB_NAME', 'cttoaqzb_wp333');

/** MySQL database username */
define('DB_USER', 'cttoaqzb_wp333');

/** MySQL database password */
define('DB_PASSWORD', '9STP7s]q.6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '84fm4ypmikhhhguzkowzuqeubvzrbe7mnc2jen2el3ors1qxqkiak9pl5noyucpy');
define('SECURE_AUTH_KEY',  't1ba3yjqgn6e8rjarg2kgcmdbdhv09ri6m29jmdeijiy6iljunxkg5atbqziskub');
define('LOGGED_IN_KEY',    'kavffjs23ok61nlqeeptijofaqmfnkkq9luzsfq0jwc4pnlc9bhyju0llejxrddi');
define('NONCE_KEY',        'pbbbe7ke5se0w2rlfwly40krztkoqqjkjciwwaid9m4aisv6jsgbnzwpj8wcsrur');
define('AUTH_SALT',        'nvtwchu3ygwfqm4jmnctemzadrejspz9gbaqgoaetaokewrdts8vxjvwl2450fdu');
define('SECURE_AUTH_SALT', 'xdupmoclxq125xk2ujzwiizpuw6wuthbljv95sauymj0fnhbmwwe1vu13164ilgo');
define('LOGGED_IN_SALT',   'uwemegtjfphc8pmwah2uzl9q9exu0xcqix8pzwhwwpomohkdzzarnh3lyyqnkrxq');
define('NONCE_SALT',       'glevmd4fyc04hagkfodu7dbepcxvgxznynmbicnebnrajwx6b10ebhecm4k8fujl');

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
