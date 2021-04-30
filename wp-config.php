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
define('AUTH_KEY',         '8v/bUWJrEI85XlyFa+GSe3BtVyEqUaWxs2siqGbuLhBBMINCh9rVwdkS8Y6d5pu4JVEYIjfV7kISWb4O9ji7pw==');
define('SECURE_AUTH_KEY',  'UB6upY185a7OUcfRZZVps4inKlCvR/fz0bM8MfcZE3ete2z25cPOzGDKG6ippb7N+Vu8uPviEM2gOr0R8se33g==');
define('LOGGED_IN_KEY',    '2VHnnP385SiNc9cnKzoxvJ84hwPlFvaUcCiiLWvga4gfd1ir6s3vT0QLQFFtUpS5CDVdxbOBe9fGL0J3FB3e1w==');
define('NONCE_KEY',        'LMKrPy98rr5o8mNaHVz/uURKXyWb0ZsERLvfxhDVaxgzVChooy+HwI+3lxseIFc0SduohV0yPyhyI6wlkJREpw==');
define('AUTH_SALT',        'o5ZWYuYNDS6V8XUGJENO092EBdUG3/rDMVbRa9QbWv0UNuNqiQT/uufSfSAY6GsM909cQVxLfSZrMdkgabj9Dg==');
define('SECURE_AUTH_SALT', 'o4E5CQJr9c9GtRkCF03r+/F1wwccXW0kwKn/d1XBwvowkv1YvRY9HaeoXUdBBtdE/ajb64FEzhNMp+8/jjCgkw==');
define('LOGGED_IN_SALT',   'YJwH+zgsqQ3nrkAfbf73PGfdrW6jo+YkNgMyoqqPDPWJ2qlRdew5ySkbZ+5XFjFI10PdIuGVB2vKYN6nxfuPXQ==');
define('NONCE_SALT',       '/1ddCuvW1RjX5EpfbbA8YJJkE2OcSpIDy3I5PFhaUBHS7b5HgrVoMXHXIB3ve/RursIIEVPDDALPd2vgnEpy3A==');

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
