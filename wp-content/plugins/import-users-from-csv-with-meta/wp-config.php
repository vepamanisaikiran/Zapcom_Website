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
/*define('DB_NAME', 'zapcgdb');*/

/** MySQL database username */
/*define('DB_USER', 'zapadm');*/

/** MySQL database password */
/*define('DB_PASSWORD', 'RndMysql!@#$');*/

/*define('DB_NAME', 'zapcgdb');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');*/
define('DB_NAME', 'zapcg_test');
define('DB_USER', 'zapadm');
define('DB_PASSWORD', 'RndMysql!@#$');

define( 'FTP_USER', 'root' );
define( 'FTP_PASS', 'Zapcg^&*(' );
define( 'FTP_HOST', '128.199.189.197:22' );

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'kYLji#`L:+im/|1[+v?e5n4=/P;K6ZC^j||u,DXuyg`- #ROE[;kchfa]hj%[[LD');
define('SECURE_AUTH_KEY',  '%8T@C5:PO+R+O|hT3~oHLEF+.Kqvk;T{o#@YUW.vw|;9VnB19t%^.@+a!P>%e-zj');
define('LOGGED_IN_KEY',    '32)$cBwtar~${Z2Q>w->V*,G25<t%LMp;~Nq;)+=<6l]LR+K9G76=}3/xXe3yN;J');
define('NONCE_KEY',        'pkk+KX7Aq%xd_u|~-/BAiPiFjqf`.,#SuO`4IdD,u[{PIW+qKF,1wpr{! kA /1:');
define('AUTH_SALT',        '-n/xnIU+ht]v.gO:|VKUg9[eg=|6nDp;K5)$s;|7jpIXBU~AkMoKK>x$.P}SPX-y');
define('SECURE_AUTH_SALT', '!ez:9ie+fzMPd_eNyu0I5+z0su -n* vG.)zbCxX)<aH7:QwxH||b-feKVbL9mE{');
define('LOGGED_IN_SALT',   ' a5QTPo+d%P(@X|lYa%N}Th3;B-dLL12W@}F&bY|01b}bL%bELL8?+d4S7<8>Zi?');
define('NONCE_SALT',       ':7&_+StiGCr4]?|kBd]MD6XqJ(-* Uf<:eN/|!npVd{yMj!.+?wPJ[$Q+xiG+3_*');
define (′WPLANG′, ′en-EN′); 

$_SERVER['SERVER_SOFTWARE'] = 'Apache';
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zezrb_';

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
