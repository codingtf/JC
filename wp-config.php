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
define('DB_NAME', 'JC');

/** MySQL database username */
define('DB_USER', 'JC');

/** MySQL database password */
define('DB_PASSWORD', 'JC');

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
define('AUTH_KEY',         'ZW7*Y8A@Weu:/~.K7GSe*Fnddh2Xs~V|_/#QIXkOim[nGvEWc[Y5!QV4E-4.lA-W');
define('SECURE_AUTH_KEY',  '?ds!4r-<)%X(Opx,$^x@Q^TIZbwc4bP+5*Md#2%q>|&Z7F<_Ey>N~+h1  DrhF-Y');
define('LOGGED_IN_KEY',    'Db@CiHU=iISy)m 4<*1eIv_5t*}Nt~J&Qdn3Y>:4 Pc&#&WS+Bw]4W[U#I[|Q(Id');
define('NONCE_KEY',        'U(9{2$DkPd 6tF{K%JY>)%m}ftml1rwy23|iYAe3clT3`n9i!P!IjylGrwYD( K|');
define('AUTH_SALT',        'P!Gx#Q_GzW,7JYP?*#}|`}g+bY_=S@hEebO%=le]|oQwHVDH(p{K&&b^1,x7zRr2');
define('SECURE_AUTH_SALT', 'v++KTmtt(sys7egZ`Lxak*)6kC$Dd7?u-e]1LbK3{G]q8:XYO/&L*%MGY9+e.Uz?');
define('LOGGED_IN_SALT',   'M6(OxmwkyB^$+xwX5WfEu$_ O@l;e}qt5b?<lHcN^0V5Mo6>?*Xm1q&0k(9#1>#$');
define('NONCE_SALT',       '85B1UXIdccQ#*Iv%PUwU5fkbB,nw%th}b&J]}_13c|$7&V~K|g>-NX*?n~WGR<@~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jc_';

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
