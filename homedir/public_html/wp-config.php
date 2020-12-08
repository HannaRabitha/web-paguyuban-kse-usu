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
define('DB_NAME', 'paguyuba_paguyubankseusu');

/** MySQL database username */
define('DB_USER', 'paguyuba_paguyubankseusu');

/** MySQL database password */
define('DB_PASSWORD', '11novkseusu');

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
define('AUTH_KEY',         'a[`[INS;{x_R]ff~AkEZ^+Eu>9hAuDl_g#8~n;c{Bd_~$q(]|g]Q([}?M3JWx3ag');
define('SECURE_AUTH_KEY',  'I]H~c4?,xyrORA,?TWrh7wTQE5|He-d:p,gw:VAbr]*6fsHSWJeG=sm&4BY4{sYB');
define('LOGGED_IN_KEY',    'YD/-NJW$9r$3+60^u;IF/~RIbPAU@2Uv1*,T)o9*(UTNB,sa1^G?*5[8HbGNx#1t');
define('NONCE_KEY',        '}dkn@s|ZNFTZJtf%;^^<=:M<%|PU$FR+_ui1SMtY;-sUmFR^6=6/Q: x=H[/c=d#');
define('AUTH_SALT',        'B2QD@b5qcGQXg])bl.p}Yks[|ZwoegWEnThk:%.>X#_9T4T;D!yh;_3rJ2v`N^?b');
define('SECURE_AUTH_SALT', '#:2ArdV iO4&B?3uFhRT6RE8qF/hN1Es0;V6hak(gw{}!n9E:s%g?&=$RzHSNJV5');
define('LOGGED_IN_SALT',   '9`Vp e{<+%jshxM6]U;;.+o9iv7[]WEGz=$w};3a@$y&))7RHW7=Cbth}y`STSrq');
define('NONCE_SALT',       'Mxdg8.Q%:iJ{O#ND;h6 =z34JXw[%V/tB2[LIT8dP$`L~dQT.+@+S/!Y_*0k xW#');

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
