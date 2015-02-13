<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'feskyval_wp');

/** MySQL database username */
define('DB_USER', 'feskyval_wp');

/** MySQL database password */
define('DB_PASSWORD', 'feskyval_wp');

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
define('AUTH_KEY',         'qUWD+b|}3y`|)x]|*4!~xr/1c$_z]ulI-ehpbb?v;flk5eaoJ1}]Nw:YA-:-xIvM');
define('SECURE_AUTH_KEY',  '3vz@|5&Y1wT|w9+WY+>[#6DtF]qi)rr/jVP*0d{}1Jx/7*YGuJ4{<G`V>|byPd[e');
define('LOGGED_IN_KEY',    'ugGoBp<b6Ej>OqU{DBr ?_,9Er;gFc&/{-iMXpzb9+aNcNK@8Y+d)M8;h5$hi%R&');
define('NONCE_KEY',        '2sY-8MH!C1T0UgYNFhXd{(^oPLrt;T>6a@cp<ev,c_h./2D$.C|^uG&cb(%sE3Xf');
define('AUTH_SALT',        'nK3!KYR|1j_?cCt3 f--<mM-D!$@Z(r2oVq,.I7|8Ls[`x8`GL%6Uyc<9+?C.qd&');
define('SECURE_AUTH_SALT', 'V#kGB$`a$:d(Tzpe+9js-oYS8osx!62&zocM|&l-+nYTc8w8GA$YMq)%vlx[p2+e');
define('LOGGED_IN_SALT',   '[@sCs1jtlOn=8xk=mi>yp88m)f?-jw N|  8LVFiY9|ZlApAJDa05XG$fVL7OS^Q');
define('NONCE_SALT',       'mL%$;,fU_8?>y%{kW(}.e8E}-C)Pe9IW_K}+xWFg(KR(h{!W~V%];.f15.5lrr8I');

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
