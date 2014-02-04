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
define('DB_NAME', 'b7_14244636_wp');

/** MySQL database username */
define('DB_USER', 'b7_14244636');

/** MySQL database password */
define('DB_PASSWORD', 'ficktures_2004');

/** MySQL hostname */
define('DB_HOST', 'sql208.byethost7.com');

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
define('AUTH_KEY',         'pLEG7YOr|,0/t>a+.adT6QDBY=>*LLPsS8I|^.1&5q&6[ l0St~ 0hz[%QCE4RR6');
define('SECURE_AUTH_KEY',  '#_-i,Z%g]eLi@8<MT^fH|)Jn+O-{IMuXzCSAs>uR;/S%gY YbF`iL~cbU:}vxKc+');
define('LOGGED_IN_KEY',    '@frqD8N7quH^hQ9,jVI|yHP^d{+.-Mo?^b)&|jnYI;OZ_87.~*p{4D(vs|h5wlGP');
define('NONCE_KEY',        '*(6QoB5%o@%E-=RkqLjJ$]3FQh:CbZUzFmNd7o[N5:bH48ohnn)B6~1CG=Is-]6.');
define('AUTH_SALT',        's&Tcd`OiiXDJcPBWH4!me6Cwo{yw!wn(A[TQ*ZrN/i6in&+0lh3zti9P-qlNe/5-');
define('SECURE_AUTH_SALT', '[.uU#9C+=Tc+vBXo5+Z}-d)W|NX_Y9n N?f9kC(6^,W|4-E$:MpIJ|Vs{TF:u600');
define('LOGGED_IN_SALT',   'iZKb_@j~B]:gY1]`OzPv2A|RoC1;i:O=v2_u7-Kl_woacpWW8|3|N, _Q+ESuNFy');
define('NONCE_SALT',       'Zu lY4FXn,G@Zk~C@GUE9`=@b/C:rccu(5*r(N2?ve=B-^c)$V}?0-ArF/{OA-Hz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_dev';

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
