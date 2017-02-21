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
define('DB_NAME', 'orsi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'lv8p$P~q4Eu9R37WdnBsP&(_EtB|u$ho:%;:acIX`0(P,+}GehnbDQ*!>X+OxiuN');
define('SECURE_AUTH_KEY',  'WG(3Ni$HG`e3i]OQ}[|Y@!+3ujMC>u).&9j>UpuLVweRM8@9+s f)ebUwOBuhj}U');
define('LOGGED_IN_KEY',    '&rane_^_pA`OhX88||-]tN[UAtBD!8=]-]n[VY,h@PTUum2GB8r(n59K}#0E(V8C');
define('NONCE_KEY',        'C6SSucLyq&h{e%.K.XLer`5gf*l<ZRr*7RBgloy%iUZ*Qc6WE9L(1+psTOtKTHMG');
define('AUTH_SALT',        '~-cH#Ic}~t ~_}N9SNth0?;H _U%o!Yq{7^XQY?g)G_ym9*~ +kO`Y`Y JNJQF%,');
define('SECURE_AUTH_SALT', 'Z<W$b5e^}qkAbC*kz+2 6(Z;?B{w7^T+#$<;g:Wax!e]4LT)0T^/ [p-OCP=Ow$U');
define('LOGGED_IN_SALT',   'QqWEUt;myRb;e~_[5<0@3mH-Ho9W=z2Ng8I+7DM2%;|@x_Q%iy^+)Rg5+:@,H[+q');
define('NONCE_SALT',       '= py}bBI#Xe(0#z<[7wW;,oj2$,wXQv&r)KFl4z,H%b^z:U#b:$(Nv.U=w~|GnU*');

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
