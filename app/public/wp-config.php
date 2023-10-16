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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'uW8ojM92Nee/iQQD0S8v4+Fyp/tkg9+cA2WTk+y8LTzWfCDsNskTRVPa+wWLrzq8+nNpLEBucup/0ZVoPoVHow==');
define('SECURE_AUTH_KEY',  'iPQPHBgM0EB+Zi8d2Pm7rKwioK2UvKv4+9+GviVzOP90C3uZI9jrUXS5i1hqX/CYG9YYPxmPiMRrpDX0tio+nA==');
define('LOGGED_IN_KEY',    '3xGl4Fj7ovQgZ12FpVgD06wdHvEipShXAIWpFU92DFWRJ8+V6AalfR16Uf/gBTiOGxzYOEItcCYDyqC6dSfvIA==');
define('NONCE_KEY',        'pd30gnFhOuiR6gIZM5wC7hryjn/xb6xXZ7d6CTQBUEYZqiepvIHa2paEkg+WBQqTO/oEOp+gXBk0j3m2LHs4hQ==');
define('AUTH_SALT',        '7wRL3EyFP3AiMA7t9/cjWYdY5qNbf45Q5zIT/B+VXlCoD9m/99B8aXuJ92iZK5REgKxyM0ErhuHRQeam6f+pbg==');
define('SECURE_AUTH_SALT', 'jXMlFUgKILNyjwVsTpwq0LiFCga1fVUycP0Iuzt2ECt4h7led3eZBrbF+aJ23ovX0kQeYZFSs+pIZ6ovcV6RDw==');
define('LOGGED_IN_SALT',   'VKhmtAsPio3odKa5d6RBavBEyptYiXYjSOnvRCatWMvlkBmkZKPZ89a3Hu1frOUEZbbrlday70IleEJEjZKUXw==');
define('NONCE_SALT',       'Xt6YVAzLTis3ZcLQO6JzQnU/KopVUf1KMP7fZ61URztayDDNLY0BZCZJEBZQTw4xvaBfFzkujzRySFR4wg7NTg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
