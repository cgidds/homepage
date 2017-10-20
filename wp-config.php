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

$host = $_SERVER['HTTP_HOST']; // retrieve domain name

if ($host == 'giddsdummy.tech:8080') {

    define('DB_NAME',       'ebdb');
    define('DB_USER',       'vagrant');
    define('DB_PASSWORD',   '');
    define('DB_HOST',       'localhost');

} elseif (($host == 'gidds.tech') || ($host == 'www.giddstech.com')) {

    define('DB_NAME',       'ebdb');
    define('DB_USER',       'nitrock');
    define('DB_PASSWORD',   'zeBy8lUvv6Hr');
    define('DB_HOST',       'aai91vwqaphdqq.cpqrhqnmp2kb.us-east-1.rds.amazonaws.com');

} else {

    echo "Should NOT be here.";
}

define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         'SjDYJz#imC>5-UYpG^{DoiC^3MR2A&K{~-m3z*zR}1tU`k@vHDhu8@M,`_:gVT?J');
define('SECURE_AUTH_KEY',  'Ql:.?;G|;-o4_m]mN{+lgroM5${v&RmOJYrBpCU!#7@ $]DjRD[q$|QUBwt1[FbZ');
define('LOGGED_IN_KEY',    'cW=k~[4S;r_)<ZP)9+*(!?@=Uc-EzQ;pW`ZqfKuI +7f[GH-c0qJj/wP8poDXz|_');
define('NONCE_KEY',        '{gvmhB86%oI-zsL=pq.9c;MQR2,Ee9Ry)P_e*-QWY/y;lcd4j*~cSg1/O`^bE|=-');
define('AUTH_SALT',        '/_V7Fi;+D7l4[Q- [/ -rx`Omt3^%tuYI?%imx99CXT;1h^e`Hago2^!x`)aDw?!');
define('SECURE_AUTH_SALT', '-5sw^3b6CC.rKst=o]`+}JAZOjI!@R5Wh.8gKDhBfnGtYmG=;c(^zJGqAr5^21o]');
define('LOGGED_IN_SALT',   'O=bi&L)<,d@Z>lf185oB-Cw]cRX.yN#+Zr6^T`Ba%bKc96dpq_3BIK g|Np6{m8n');
define('NONCE_SALT',       'p3PVKO=2CZil+n97g%l0,A&l*=SBge-0JLhxyf4?c2|{-#|JBmMQmw+EOSL~N|A=');

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
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
