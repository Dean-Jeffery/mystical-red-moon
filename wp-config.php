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
define( 'DB_NAME', 'db_mysticalredmoon' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$`F!pOlKvetil~?@Z[+~V?sism|D5I}}eWEXFYx|}e_?>k`i+%w+@e#^kUPojym?');
define('SECURE_AUTH_KEY',  '1Dft>>|Hl[zG?l4;@9;)u^0CsOOaYvM+CNaa,n3`{Q(|}-)bjP7}6xDSLE9i.d?R');
define('LOGGED_IN_KEY',    'M&{dV~~Jyt0u/vX5J|M#$1C|)07|lq-QM6DR)$xq|#NI+ NK5gHShY|3a L-fP0h');
define('NONCE_KEY',        '::@|i^SXyb%qPRjRyPJb*q`TfO-|Wvxhe3Dsofv|/BAiWxH9s:kH&%*~2H-34)kI');
define('AUTH_SALT',        '.>vu.>>9H(+u& wSUblQ5PIl1-D+aAZ>Qhhf;6I,m=eVNn}ZX<}YWF-W|gdEB,G0');
define('SECURE_AUTH_SALT', 'IIE`N/0P.s.9OgZ:|gDj~:F|VHWMNoufVV}|L-&b-Wf]E@)r/>9C|.!mEGOYD)ey');
define('LOGGED_IN_SALT',   '<dO7[%r(4_-s+JV|Ob=Z:O=?n&WW_(2MM7zR7![haA:5<]jCD~%ObKL5x^b?&+Ju');
define('NONCE_SALT',       'ZnQXM-*;FO#46E5|jLdo0SM@8ul/+GTCXWih!cU^`C@,JrCv>lro+b17cF@cAe5J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dpj70_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
