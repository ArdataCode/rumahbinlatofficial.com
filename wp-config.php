<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define('FS_METHOD','direct');

define( 'DB_NAME', "landingu_rumahbinlatweb" );

/** Database username */
define( 'DB_USER', "landingu_rumahbinweb" );

/** Database password */
define( 'DB_PASSWORD', "Ardata2024" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',          'w0 g ^93%=1[`FkF.J>gsd3p@TlIh&^zoUeYSHaCmcs*;A8i,JE^` W1<+zN,ohy' );
define( 'SECURE_AUTH_KEY',   '96i`M,:UrX$zA/+W;D&T~X8SOR.NBx~*,#X]|*l?lbz$Adrf.Z)d5UvGd P,,|vV' );
define( 'LOGGED_IN_KEY',     'erS6vNtM9%LK:jPOzALFd[-G_8WyDH8d6#0;m !aHk%z,gV)%vb:J;SQ</J;4U[ ' );
define( 'NONCE_KEY',         ':2t$!YbEa3xj54XFAGH f@9meU d|tdbE|}crmp{b^7crSJ.Jqq`b`4+T1PC3qP!' );
define( 'AUTH_SALT',         '7q`{NIESg3:DAIpvf6vBA.~Te8On0h&{RZjJM]7CEEu4wUNBbEX! == &rCRX3s.' );
define( 'SECURE_AUTH_SALT',  ']SoRCdK]ET02.a,H3X]=U,XTS+}xs[h+ZFOBA*#_EcM+huNKD7c+4EY}[QzR!<>$' );
define( 'LOGGED_IN_SALT',    'GBYAQaoRX/Bb+M/^No]*Bs<gaU[4injoAuzSnGl-[A:hI3|TkDLThEQu!fcF0:TD' );
define( 'NONCE_SALT',        '|giK> tYsG`#cZ$;~m<sMEpA*6Eryj}Ds07^+Aj:qhgb?$@1%kx!m]5R!G%4p9{5' );
define( 'WP_CACHE_KEY_SALT', ',op!WTP,{C|1h:i`1Srn6DpRDm.qSZ[=t5!BO3YqaFjw&q(,|j4D 1D+N6x Mu#j' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */
define( 'DISABLE_WP_CRON', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
