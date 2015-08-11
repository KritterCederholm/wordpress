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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'abc123');

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
define('AUTH_KEY',         'p2krwg|~WK|l!?cjQs,V3B#`to:7>W|+E2kw;<T}wHMuW[iLhe8u=}T|cL|G*!%|');
define('SECURE_AUTH_KEY',  'MXE?(*gI8r/M^4WaE3vdxJkjHuW5A;+o#V>1o|nm,g3=WF;cJi?+(7laIkO8|P&_');
define('LOGGED_IN_KEY',    '|0kbHjW?2IJ%E9&i{xg+L$j:cu+eYvJf?[S0Rahq:E0talSz$+[kggn+w@_VJurT');
define('NONCE_KEY',        'P.|x3Hvb{3noUH[5kOiFZ:B([Y|-X,^]q8j*)_Lim$kMRks/dK,ehrloeR`7#|B/');
define('AUTH_SALT',        's.Qc:{3Kb13YmIGv0)zB<qXUT;pi9|!`*WMr]iA,HM.lh^tE2MB;VaO|YV:b4Tnq');
define('SECURE_AUTH_SALT', '=md`/Xy_`]1{g.po1:(odcv#P<>L+A}PN>cz~b>l[IZS#:T]mJh)Ac-Dct<=;;(m');
define('LOGGED_IN_SALT',   'V:JAX+$@-KeF#JGX9Qa8xmx)RO |=CoA?S89)`/,;])q)dT*upc!ef8m-HESmsL)');
define('NONCE_SALT',       '`-p<A7G/o37z#|%!p0Dxko  ZF#puWu^%Pl@&_3meXVI($mGd1/{h#r$`-OeYe86');

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
