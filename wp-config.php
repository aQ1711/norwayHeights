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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wamp123');

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
define('AUTH_KEY',         'nBy8*}z!ujRbEyGci6N3Ip;A5Q{()*2}pX}g2Ez+yae*kvq:GWm2_Vao $v>=L}<');
define('SECURE_AUTH_KEY',  '3u9JhiTM6~pu4p0C&gw};Y. c7 mupD(W.Psu,Yv~S-<[oBF2B?NM4#=Pm(]W(jb');
define('LOGGED_IN_KEY',    'NT{+-hU.=F<=?@pcBks}2W+`LCAfyFuM8y<POR/w@KoY/ncRC9#.}23)E2<.^k(8');
define('NONCE_KEY',        '{xN-}JSKD/d<@-&$r{u|;A,tdeDa!T~9<B +.-X$,n{+qs5bL #f+%V4v2}GeKIJ');
define('AUTH_SALT',        '^fWiN ,&I7+&w=iNB6AZR8?q-ahjszYf0AaB6448J(|)jzRW$X*UOP:y5E$E^X&!');
define('SECURE_AUTH_SALT', '8=fwXru1RFL91/R9s7o]j:0aw|!(bTLYEm~#9bh)0JH-@yR]Uwz=nU^{o,]Sz2@A');
define('LOGGED_IN_SALT',   'AGbeu?ceA?i_xQP[C;MetG~#p6wP;Dt%l9hFA)A@tacU|D7H;/JI{FC$RQ-EK$:=');
define('NONCE_SALT',       'Mx-H*6vAIMAc{?E+GZ~)B L!dbD]I!i}8Ggb|G4A|,8>Wgxx!7qmc2(ig$M+JTc7');

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
