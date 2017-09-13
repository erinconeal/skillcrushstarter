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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Y):uDARU;tdOc/)W{H,/2V#48I=/Eog:L5!yRz9EO7B1h,/~2jHxp 1qqJG.e~xx');
define('SECURE_AUTH_KEY',  '>gnE<re#^ChNBp$Aj8WIUA,T8XP;$T&4]OQdTS23LUaj)y4AyRMK+8wsS?vT7.mQ');
define('LOGGED_IN_KEY',    'O{#Z@sQNNH--Dn`pk7N%&D/z?3V4x,9Qrd`^}pIzeW=9AQVzDlVF/tEYS7;=w;f`');
define('NONCE_KEY',        'e>x;?@j(=Mb9H%#FF1|IG/]fgJmo$yfrE-([7eU.xaLn:2bPWWSv }#P[60|1]&.');
define('AUTH_SALT',        'uG+0N9yQTsZ9-W&uU)SAo}S<UXS@Z56GP8?lYxfh94ZH[Xa]M5qA5N$.$)fHK4Lk');
define('SECURE_AUTH_SALT', '-V0z/FX)R^khfA8yz)Kb2{ti_8g0#3>@Aq uV%P8b}B|B<&P~Bc#63qI7*hA)->;');
define('LOGGED_IN_SALT',   'u-w-b+#)!U::uU]xLcFhxq}ow=sIIza%5@A#;lM+#aR<,oC(j.)_{Z;T.Z}[oJ?$');
define('NONCE_SALT',       '(Z?{xjmCaIrOyEer]^/Hb0:4(]c.uPW^MMD]qs4W~K[<TI8&=cp?C/@t2J3xer]4');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
