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
define( 'DB_NAME', 'xuongkhopvietducbienhoa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kjv^1xHP@vM_m' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Filesystem access **/
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ReYFrYtVqNImZhEAhtxHJjgvHsDgqXlPSAmjdlmebYPdFjrrSkoFUaJxTsCFiyWn' );
define( 'SECURE_AUTH_KEY',  'bCaFzAAGxlXgbdKbgqCANVKQgnLuKVptixJKCvyBnOpdsUYYUJuhjuWECsuVnISp' );
define( 'LOGGED_IN_KEY',    'DOxzpdINJoAvwkbJIoTzwGpIbtnDKiWUZSbPxpJowHtEzuaTxhAyLQsSiIyditMZ' );
define( 'NONCE_KEY',        'prHRTsoCClxpogpGZoWkimUifVleYovyvqirzBnkUQcwhIprHMdIdwFBCZKbSmkR' );
define( 'AUTH_SALT',        'fTeigdfUpWpfWLAHTpBBWEvQtRUPWdlVcrdsVcpPcPMHpIlIgJCrcrVdFjhEdLNh' );
define( 'SECURE_AUTH_SALT', 'SfmenvmHtZdixVkOyJlDtjROyVIAmNplWTsoQtLwBaWApeIAfDTwRLyAMcxgFtSt' );
define( 'LOGGED_IN_SALT',   'MuGRFPRZTOGYOECpKjzzBERJVnWWvWTpRYChLvIepgGHVSwCAvkIHEPRrKRoMMZg' );
define( 'NONCE_SALT',       'GmKRbSZoDWqMPxfkAoOdsItdnPoJVUmtdCqMtfdrGANwcEIdghYEMRzysYMddabR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xk_';

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
define( 'WP_DEBUG', false );

/**
 * Disable auto update CORE
 */
define( 'WP_AUTO_UPDATE_CORE', false );

/**
 * Enable Graphql Debugger
 */
define( 'GRAPHQL_DEBUG', false );

/**
 *  GRAPHQL_JWT_AUTH_SECRET_KEY
 */
define( 'GRAPHQL_JWT_AUTH_SECRET_KEY', 'dtQCoQ?4/3|@3E}OoQk&}M~-M}Mdy4!3]>}=huQ5CoJ1-R|AYSDY44mgXj9l=-8X' );


/* Add any custom values between this line and the "stop editing" line. */

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also https://wordpress.org/support/article/administration-over-ssl/#using-a-reverse-proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
