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
define('AUTH_KEY',         '/K5x65ZuvpjhQ/bv8EPgiByrOJGcuMwoA8cNVFzw7qXoN585MAjS5wIL2M7WLXUNdJ2NWIpSQMMIT2ZGM934eQ==');
define('SECURE_AUTH_KEY',  'LuDc7uqarcSouCatyA9Y+fkUL5ymIzQ/kD3wKRFU71lClpbwwIb+fbAgYRReNYXgr4fgHgHNRyjG3Nls+NKXqA==');
define('LOGGED_IN_KEY',    '07kKl51d1/bEOh8wi+KKpMoU4KA253W2eAxZ8omCptxYp9YZH2SQamNFYTXeOaDSQ/Wdct8E3bthaakIFbYkyQ==');
define('NONCE_KEY',        't0HP29P9PlqCNI/Unuxim+fuvC1LRYS5UJSDQsJ9htv8101EV2YcPc/JZVL23DILjqcSWEbrctOtwkA070kAtA==');
define('AUTH_SALT',        'tJm7vCi+pKTb4RaGbvzuIYEnuQOmHemzlsnYw4m/Ch9kQbB39ve+oQA3SmsyCBqcHflUUdTjNLRRDkrV0CqWbg==');
define('SECURE_AUTH_SALT', 'mygQN5UZuHrjgZYQMBS95sQqJKg2jzYCVhrhbIntWCQMyCYcDBpEm1SuTpSvF9WLiaMUqphKTM766K0wUxtBkA==');
define('LOGGED_IN_SALT',   'AaHqypW5VImv8SBywerOqj9nzt32p3fUi0dxq6GYwV2ijJ9y1YlbC8bCWOfkFInTC3hY5n9UFLzX2ncRuKfGnw==');
define('NONCE_SALT',       'MvThNQdgcpeMARCnsKvPajCmf4NPjyfYktfJZrPJdMi+yu97Nttq84F2iSDgPXbuqXXK1XJFHf3tAAnwScTjWw==');

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
