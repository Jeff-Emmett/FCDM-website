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
define('DB_NAME', 'i4852277_wp1');

/** MySQL database username */
define('DB_USER', 'i4852277_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'F.mbpr2oQDcEBmXxha550');

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
define('AUTH_KEY',         'GGdysi7o8Ga5Mjug4aGeny83H469jlAmmW7NYv0akutjoZeKUq67WBm9zoODBoVv');
define('SECURE_AUTH_KEY',  '5ptwPISYYBiE0N0PsXgnxjI6AvZ1ZqCe21U823I6FtJtarGd90H5C2GSvRQCb06U');
define('LOGGED_IN_KEY',    'TOTCa8NTp8TMMo6UNIXfUTHtD8X9kz4afAHOo1GwHfWLIa3w7bs8oJzUhdQwVPCq');
define('NONCE_KEY',        'X35rlcNx8tYGVeuSi6oilbUKS0XI1DpQxvgKnYyaB6FNHlHghCIIDefx5yFWV9z7');
define('AUTH_SALT',        '0R5E5cMj9L5qN25VPVerg6XOZdwAYIsjUatE31ps29CqztEz7TPDh6gUWF9NxXCr');
define('SECURE_AUTH_SALT', 'E5n10uYOPtJJmOuTQO3t73lPD7tFRLjADPLM1FMxxPpWlUylbH6d9Olljc06yxKT');
define('LOGGED_IN_SALT',   'SKQdbjlHOYJ2gP1O1OVstESbGpBPE4x8sba9m8vVU5aE1MBLxLvRlcisVsCVqKCu');
define('NONCE_SALT',       'c27nz1zHIOIztTRHHDplO3wN2Wx0b9OqHRLW96ZlD8ySeY6YqcUPTi8nKTmFLdjG');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
