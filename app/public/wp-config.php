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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'azeiEz06YQmA8YhoaxZegjDeV2+Y99LCuL4bIz70W/5zLujwPSB6Ii9L3PRpkPxC5vNGNuANOAbbPjeJ8QAAQg==');
define('SECURE_AUTH_KEY',  'lA6w6p05LhcivqBOhtJGFpmhYFa8zGKHxiubGLYkanEJCDicbr+Q/dm78OTfII+Hh2ESIXTQ219w+mqoXkCrbg==');
define('LOGGED_IN_KEY',    'ujcQeO+lJvbq/L9xP57ZpL5W9NzTe1beqO0lnZkTeOq5heRyDzZ6/VP39ZMwAOBooD/xSgdk2KlZ7B435L/ODg==');
define('NONCE_KEY',        'gpDl/M/rughVQ3vDiUfObEderhf9/PCZQRaWeMjoCxxM/KcT5urCU8ckh118UwtRRFw32n9hhycfHvdvhrmukg==');
define('AUTH_SALT',        '6DOqVIkngTNHDt8tG6LD6+vdE56HosG111INK3BTdr7zMhELoyyaLpIE28AjDpiTbY7PqT9SnRyEu+OLqPryXw==');
define('SECURE_AUTH_SALT', 'jpmo+/S7UoHKQbRKZZQXj8CTtxKy/DL7sHaVl0pNCsJWNLrv+LaDz2QIqoj/skL/L7/OpIQNFHg52IE55BfBzw==');
define('LOGGED_IN_SALT',   '2Wapl22fQhA3rpKeQlTX8kWgLMlN9msDxEdq7Jdh3o+Ha/uCmLmdU9vcpXb2x+wXMAciCNSXQCABkAGExxu/Pg==');
define('NONCE_SALT',       'tKXWcNMkHpnn0f30UUYzNU7+KYl2Jv9EjYpUQynXEfgLS0WSuA6TpD1pxyGWdctacgs1Gg4+9L6tYRbUnhj1mQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
