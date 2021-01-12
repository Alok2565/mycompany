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
define( 'DB_NAME', 'local_company' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '!(Rq$9ZUH;&=kszGd1vcGW/4F:tWF9.1GX3H1aN-#Ka[I[MH]h!WI( -{nvR=#&n' );
define( 'SECURE_AUTH_KEY',  'PV54dCiWLW*77XPyckct&YeGbf%[RC1pah hW|]ZBwt/p_<k%o+x&-Y^1)q;X?%@' );
define( 'LOGGED_IN_KEY',    'Q<ydZw&mY,TS}hEuj`cVRHSnlZ^zA#a?W9Dho>xUX_[SOp}KLdu3!j(y]De4nR l' );
define( 'NONCE_KEY',        ')])><D5eWcAUiU>Hrq^?L|ArgDR]tX~ZFxlYOWVtK5FyJyLqz;z:+<L_`=Zu*}0m' );
define( 'AUTH_SALT',        '}~}P_aJb-#8ol_`7U$)OvkTYQ:Fvl]>bR}(2Wrg1bmVj)V{dT!c3eEoGUw?p/Q%3' );
define( 'SECURE_AUTH_SALT', '.YNt+s-<Q$Lq5XcjcdcYZ,bYf){Yi(6Mi?LL- Hit_84}tkfNMA.3YxY8T*p3=Q{' );
define( 'LOGGED_IN_SALT',   'tV$x.)@fjOeu^bO=^c5B`?6?btk~RT~cfdigOIYm|AO`k67uE!3r33^NN)kxyGiI' );
define( 'NONCE_SALT',       't^NLZk5u=^@YGWURxf$Dzf4*rbY1_r$$Ps{`!$CYDzgon%3izAD8QPxW0hEx5$B,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
