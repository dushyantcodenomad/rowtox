<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rowto');

/** MySQL database username */
define('DB_USER', 'Rotox');

/** MySQL database password */
define('DB_PASSWORD', 'ndlTq20}+T4p');

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
define('AUTH_KEY',         '@0W7+H+8WSn`NNX5f-!p=;.6)uq]^z;4k$v~*b!oC|2*+5kmD@5u1:~5^rmw5YW%');
define('SECURE_AUTH_KEY',  '.h7ipGObG;;Tp:{IipzD^Xly-85|_ZSZDO4g%&XX%@-$ +/13)VB|+,@S re5aMu');
define('LOGGED_IN_KEY',    'pOJ]qpdDA53hW<&#K?<,;[@3f3wR(M4X^f{{@}=|x_;fJ(9zHGGC1O1ctLcc`/O3');
define('NONCE_KEY',        'LX|l[VsEjWqiF9pwh9v8/R$T>v=++mv{qA  t4sqkIn-1gW_pyB%&GD)^I(l4?B$');
define('AUTH_SALT',        '.-q6g)ao4$[!@bl6OO+24kBsPDS{t#h|SVx.ZKI5{_I#e_dRUGHVEl[^Aa]l&5lE');
define('SECURE_AUTH_SALT', 'C]P}09]Z`qp2Dm]N@5%zH||aKI|8> sjb>2@NHv@h-G8+Jg%.O#rZ[-@e0!nc/6G');
define('LOGGED_IN_SALT',   'n9`(KwVoXet$d+vkm +&Zc-I5b#ZjYw^Az0-=k#i6U*#_lk`#_1`S]cU$W^ +[YX');
define('NONCE_SALT',       '~hpj<V|sPmmy_| `NNcA@L=B;^|4Nw?Cjm]um/IVn8;I2}z$8ZR=.=|]vWt-IT@X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
