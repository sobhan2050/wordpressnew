<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressnew_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'E%8|UEnxlWXgEDre2iOG jGYmXpdb8&Qn&S@|B[di#!>.:mb]/dENG0~:,C#J2eQ' );
define( 'SECURE_AUTH_KEY',  'CYC`J$RWbR5j^>ERiH_Y3cF $l.Bmf%k9F[nS/&K~k[ZV4WCeFg)T%;ix7[/;FzD' );
define( 'LOGGED_IN_KEY',    ',SZoPe~w9Yz+qtoj.+~91jC|ZU]iIVgdY8RQ0N%lK.eI|kc5HUmSn3Ub2[<eA_u5' );
define( 'NONCE_KEY',        'RLtzLQ.>%#APpULmz$ l4F$i}He%o:ba6B]D0~aNjwl#%fnq)XQ4M:<|M.TJVLCl' );
define( 'AUTH_SALT',        'R!%#c={fOBccl}FIFUIJ:u:>n}(,zvGM;jaQBZI| ]EcjZ8ni1k=}iF<{q@>I_G0' );
define( 'SECURE_AUTH_SALT', 'psRz?a#--4jkBW/vh^mHn#p|/::Pp?oA)>dZb]`0SDh~pX8eL;`b<6DQ}U]1%~=;' );
define( 'LOGGED_IN_SALT',   '#7#FoHqKta8:=tQxy1,`l6;C7hR{;,(;|DV4a7p`IfvZev=7 @MwD#!g76r`_NZ>' );
define( 'NONCE_SALT',       '6D+8^%4Z(0=ZBWqD0Kie&$np0xorVF7w<DzH{!S!yn>&eTs:]9GD@Vv$A]O71&A!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
