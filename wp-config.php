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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'harini');

/** MySQL database password */
define('DB_PASSWORD', '1dNgQgGF');

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
define('AUTH_KEY',         ' /TL1}a+${u2JI[Xb}rfND0+UD{eGj+ f)/z8vc])g(KAq)Hl|yh.RLgR2:LPB9~');
define('SECURE_AUTH_KEY',  '42B- {S([WT:C 8_$4mHeNh-PmHsA@BHa/.g4d64o5qae@&]n^Ea+~<NyeDY5b$l');
define('LOGGED_IN_KEY',    ')SuCj)DJq+MD1s,ZD[`}zn-XacH})D{xzlD7O2|T{lxC>$?~v+*,(q&jyCy4kEX.');
define('NONCE_KEY',        ';2CM7zP0C-[dX<7mpJEiyA%]Cv|+Ph9|:YNjuGk8o,-/W##xbI0e_`-5zf?M!qpT');
define('AUTH_SALT',        '-z|S9I6{|hg{gNJ^r/Q*Fq@Uv_FWxL#OsYgx=lkLz_IyIP::{Hh`-6<YyEhF4LL:');
define('SECURE_AUTH_SALT', '3yWF<RFJ*0HTg(4aT+$lcic4%P.QhRjU`R5[,+mi5&A)j:]-trY]L_bG.8_a#etV');
define('LOGGED_IN_SALT',   'cxZg>a=3g}vK&0^%#{nz)Jl-nT2k~y-QK4I_[|p,D&rU#p>d-?1g[K$m~ [)+!:<');
define('NONCE_SALT',       '7~^@)+c<.:>+AMP}@Yt|ROt^B`?fHik&HnxaI/vgs]m{5Fxf7ff4#;:?-$$<N9@x');

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
