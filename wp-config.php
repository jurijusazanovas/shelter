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
define('DB_NAME', 'Shelter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '8DlJ2p6~iPC?WI(4pv.o$}z/`<{i5ObR|.qN;LJcTE1&v8H+RGkFe8IaXk]8R(fD');
define('SECURE_AUTH_KEY',  '&QuW|}w<PQdH!;jA>~_m#M0Kti|WXRNVjb.[EgS82/b,t&Thr1J{7PwdZ3SAkgJ7');
define('LOGGED_IN_KEY',    'Zl(`]DM$8@k3##y8,EzpZ*Jx0T6|~b&;;o@,a.:gwk++W(3|)[L;}7gq+f|GAl.#');
define('NONCE_KEY',        '8QM F*~U2p*!11D1!{z;;4.Y+ ]JvXR$0D?<`+{Ef2a7wK=*9ds,#8!T<V5wC37W');
define('AUTH_SALT',        'xaPvNT<a4y{9ep/b&e|owP,LUnO.UP Um0M!oHdXsh@>=qWoN.?E/X*r)Ro+n Bi');
define('SECURE_AUTH_SALT', ', Txui{f16@MF8_x9 ILQG>4Nr(YMS!|g*(t>W](9oOaM._!n~)7MhxY)rAb <;G');
define('LOGGED_IN_SALT',   '?{CW2t=X!*jQv|+X!p[vkUo5?%1*7SI$]6|e|7#eiY.z1@k`cYxmFWOS9QEhjfoP');
define('NONCE_SALT',       'T9xB)7p4M9|TztHVs{YG$5>{VlZn~5t_[`R?qn,At+0kp<.I[Rd37$@Nx-rQWUrG');

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
