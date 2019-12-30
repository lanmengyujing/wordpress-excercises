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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'VAbZDTAydyZWZYvYklwBke4C40ykezZ3wUeoDBBmAGJxgI2TfobSbOOjn1hO9PC2yP0wJ3gDgXlgy5CYebyx8Q==');
define('SECURE_AUTH_KEY',  'v0vdJaXkIevA4CWE7/SeHjluZYVDtkxvi1Zk8Bi2tg2k8oj4rAh6Ix6y4UrOKfLrnCmYpFR021tNuhoFAxFKug==');
define('LOGGED_IN_KEY',    'WWU8pjQMVTF0HahTDXf2bf628pgxPkk44kpskZZPwbOfplDiiC7WkzeCxbAvq7eHJoTK4scB2/UpfSarkapu6Q==');
define('NONCE_KEY',        'I0R58tN3YagcEsrXicnBEeShN7gz5u/+iciZbLm5VzZFrWR52NB/7KvUMz/NS2x6bpPKHNn5r7Vv0Dx6Jy2+nw==');
define('AUTH_SALT',        'Alj5Mu8yBFaKojgxd1SgtRwjeT9w05PCG8OxS8t9N7rRhyP6FcV283TJazG4Dv9hmXjNGe6CRops/9NMDJ/DNw==');
define('SECURE_AUTH_SALT', '7w5CRNNr2SBQkuYJYh5dp0Ohbd7PSBVCqEtr3bwHEzF84ERqhG/8+Ebg7bfJcwc1BwSFP9fsmznIWem2xiO+PQ==');
define('LOGGED_IN_SALT',   'yinzsFBn7Qtmt8n03vnKUBJRZI1EaO26hY9ginAOoK99eIANh+EQja5ud1FuXuVqjSkIw4a6vJfbPhDxivSiTg==');
define('NONCE_SALT',       '+YQyAteUhFyxhKNg5S850LsgIvUi6RC53IsEOcBmSvAVIazPSlqXAtX+AFN+tw30C9m7jsfZo+WHRfS1hrMWoQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
