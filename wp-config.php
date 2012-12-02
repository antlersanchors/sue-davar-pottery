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
define('DB_NAME', 'sue_davar_pottery');

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
define('AUTH_KEY',         'MfD{B!KD6$g(o^H@19hI8l~:|}.5f|4EAqr<hg/b5|QgBR_~sTJAxhT2n*kGsaHP');
define('SECURE_AUTH_KEY',  'b=1*]Iszz,i%3e[gvx|r--Wp*i|k:%&VWdAwS^{fQV1PZ,&)GxT8uf17zNVvEb4X');
define('LOGGED_IN_KEY',    '/v`|a*rc2o?n+?1tog<3@?j5+h&gAiuZA~27P!zq#B14f&81(]ir1,~}`uo$cvPD');
define('NONCE_KEY',        '56aX&-B.x8>y$V&Whts~*|!7&w-;RQ[[#,ONuN!0-3-~k+KG^&ZBz-dhpdTAZ6N9');
define('AUTH_SALT',        'G&Fqgy0vP|1q~I`-4~EC53EjeOniFK=dJup4i]!a4t9qgoo7<3r/4ZGc(|p{>]6#');
define('SECURE_AUTH_SALT', 'uUJNx5`$bbL@J r]JdBX>&%{+UY=Cjlkk%ApEHQW_4*E0xKQph;2B6CmoswiqA~2');
define('LOGGED_IN_SALT',   'Md]3J!G+jlV6cC09M}Mk;oKEf+ov&1ZGTLaLXQN8%W_ME6R8+h:P`/uT%ck&PH-$');
define('NONCE_SALT',       'q@&XS#Au=[NscG_e~uqkSvxo8?tt-$SyOdX@mZ;d[Z-pJbB}rt-z=j,f^aY_%#|W');

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
