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
define('DB_NAME', 'treehouse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'iNAnBIH&H7F_|I0I);/uEUHcV+=ghRZ1eH%dM0*Kly]2nTv8=JOXDF]ey)7s:b?1');
define('SECURE_AUTH_KEY',  'H-N@oH~:]Tb0EZEOcT= ^EB5}e%jpxX[)Q21fLIynM$B4*J@Fk>hn-!-die0%4gs');
define('LOGGED_IN_KEY',    '{g0wh8eY;c)t<9%-4,82gG:z67R3i$$k7T]E/})<y333_ A+0eNIk-:+qrU1PtTY');
define('NONCE_KEY',        '912qtBXB0ePCOIIq=MT>|kJ`qJ1D<<(:eX=KJ[l+fJSLQQJgQ3Na)|_jMH0d#WLW');
define('AUTH_SALT',        'aS*W~,}F]?T!|03{bvP:d6X3ydKX-|Yw8)+6pKB@k%DVQK jPBUmFdke2kssFyF_');
define('SECURE_AUTH_SALT', 'XHEMG;oHWJf|rzZPD)[+0?:%9bTI!fGx*>6%c#C*`8_oB[B?tT`bGqUZ=ktcy5#_');
define('LOGGED_IN_SALT',   '7U-VC]4D8l;/eO;`9W+kP9HS`!&$jdM^F$|Sdeo!YN)DGCK{teB-V:}[*jh,`X!s');
define('NONCE_SALT',       'tl<T{a|@%1[;z:6+, oG@@IVXr+WVm03kcn<I?A!:}HS52`F=q{m=[/n@bTt[mT#');

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
