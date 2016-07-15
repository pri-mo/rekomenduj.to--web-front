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
define('DB_NAME', 'lokalesdrink_com');

/** MySQL database username */
define('DB_USER', 'lokalesdrink_com');

/** MySQL database password */
define('DB_PASSWORD', 'RN4mVHYPF5HeteAX');

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
define('AUTH_KEY',         '9>bpIe5689Wyc6a12^!Hj1gI/W^9#.CjWsAJiplB;< 1@0X[ueso9FIcLPzJ4Rw]');
define('SECURE_AUTH_KEY',  'vx)HU)W#{<PPj)W8(|JH,MT}thO-qM%ixr%QJ}CG5-eRI6Wt{H$UujxMg9,+3Qir');
define('LOGGED_IN_KEY',    ';TDV@N:u8Z|Dxa8_bpl](Wj8[rlP9ejc/U`OJ/hpiH ]:hC@*9`8&ZkM0}4M5Rj+');
define('NONCE_KEY',        '}:-(yl/_WCU`CH%roTj{4{[]V})(h2)R,&=GpI^RR!eZP|mcksG;A9&+keQ,wW!r');
define('AUTH_SALT',        'S4qVaHznU4?A/nacC{tzOEZUU j^v~N>&f{@i^4 *`y!vxHO+oN1j)p6P#H(mqmp');
define('SECURE_AUTH_SALT', 'u=Sqt@*]xD_sD]okp)[:#8NBvO 5mbkDi301Bc#pPq*_$3=,w>ucO,gl!U2`KBw.');
define('LOGGED_IN_SALT',   '$=k;p6&YFhX/p#T46G=1OhBmA .|)&8)/:C|]&8(eFzRnyfo$cvRS.<MgZR{NpPp');
define('NONCE_SALT',       '<bnaikOEo/Dby}[+ E`LM,<$`CQ&Cr>z>bzY_B$E)[X~x Y//nl*{WE<E|1vTQv?');

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
