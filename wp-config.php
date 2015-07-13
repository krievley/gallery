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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'I~dJbWI:>s-`xq}QVh!5L=DIR9fHT-A%/8TBYZ6{J[tVICs-Vp`w/wt^s-&r XVT');
define('SECURE_AUTH_KEY',  'Uq,RyOq B8Kyzn[NP4ibIhQpr1Xxs|?LJu@*lvjN6bj$Lz.A+&iMwmS`[rcofty7');
define('LOGGED_IN_KEY',    'Lfbzk$/?^^S0>UJ>iPlHg^#P|wI|BXcO<kLP2TLPbpF{nF+I2I7gv-%w5hm.B X(');
define('NONCE_KEY',        'xpNa/!t4m-e{?f$|qaC7yV79z.l+.oTe1e1F}G%4-QL?L!evv4PCQH@[&E}:NFT ');
define('AUTH_SALT',        '-2)3;7_#`%uJb/tb4(?!N#FlC@QcjO+_1nB?0+vU@;AtO6 al-{/5<O1QgwMm;Zj');
define('SECURE_AUTH_SALT', 'B2r1hD^KZJn~&b>0IA,yFZ ~v5L0U+x1irRY=D8L<1`O![QPkhM:A^~9L7&.q{6(');
define('LOGGED_IN_SALT',   'Kkc>H^U&Yja698$~20$LtZ7+$W%-7ga4nw./1;]e:LLeu44WBT7c/[=PmHa)*)mX');
define('NONCE_SALT',       'yX+CX9^_rdzL, p|MWTl^Z=cX4ecyn~Ds~Pp{y[!EVJb3G|3^*;-%2 :ND>y%-|<');

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
