<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-toxic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mO#8O:lw-;W7^e+]c7D CP7%zs5=cnj60+z)$jQ8k1]o$u^tu}i}jp<N`%v_`_8-');
define('SECURE_AUTH_KEY',  '`j-p[GJz]:V]<|LpD2%.C_{g@e2^dg;7Or>NP~B 2r=`P@N[5YJTJ!mxi9D,><e3');
define('LOGGED_IN_KEY',    'F/6dbh~-x/UX;[A8kx4v|`RM:iu76{01<)uFe]csWE,Zgg;aG4|Hr)klEz6ro~g8');
define('NONCE_KEY',        '@s$%wuV3U%.HHdH-4YH(.-[z>[_WT/Q(o3*:]}XFHa{%sn2m5$L{T>_Yq?-*5o&.');
define('AUTH_SALT',        'e+,6Jt](k%trK|-0[#*sglc4B6MEqsO@5Ood|AQrF )[/|!ITsbyD5-d|n#MjBJ>');
define('SECURE_AUTH_SALT', '-*JbcrCDY<-{RM~Oqi7dL>R4+2[nir@%GTE!>KXTJp %C%3lVNN8 nrCg-jPh#p)');
define('LOGGED_IN_SALT',   'F>Q6fLuFyN/^5:-_()v=E+)?U-KkC5tubeu$$a[H=O0FXzP9{|4bLS,5jT3.Cr|r');
define('NONCE_SALT',       'Q@b:b:eUpL|fG8eC>ff.F~{6U%w-|4CELjYD?DP&-RD-#E}nxm+RV4ytl(nLwe1a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
