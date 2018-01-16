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
define('AUTH_KEY',         '6w>itxAuZP7b:WA<PK %a0_LI5G4H5D-$X8ztA^tC>I8JqdLPW%aa9=[g6&gssJ(');
define('SECURE_AUTH_KEY',  ')&f4=:e5:Ilf:dQ,X8m@NJW$_Qxz*?4}MF*+Q).`5!&}%$PwWn> _bQ5=hN5c`9w');
define('LOGGED_IN_KEY',    '_TM=!x${cT]:@HSA}%oq{+cBEk#,.t[Ds$<:3()fI,#S/0v&U*CK{{=t0H0k=~)t');
define('NONCE_KEY',        'U5Qa@rcESq;XeS;SN0*y7|7cW*Ez;>?]vmvu[3>nmIP*(>TF `yYx,-8goO]>~V:');
define('AUTH_SALT',        't^Tzxqm6S4[j#CN4|B8QoSK!5/+NVa1eP@+9AU!pkST0GU8!<Bqfq>xx5~,k/2Bm');
define('SECURE_AUTH_SALT', 'UIEFYGlE#%w4{`tctE-a*a!bh]@IYT^INedBf6Dl,sjtm7Cqx0#_] adO=;{s7rX');
define('LOGGED_IN_SALT',   '4W%gn.3w^Y$IW<zF{h,Pwp_KS=|zKyYc3_H,A!KKO t_l}oje`fT*yUnm_tXit|8');
define('NONCE_SALT',       'r9>|c{fz|`$yQr`3YZIP!(7SeqGI1(YP[C.||XDDx3]^={7u9JzS,}VLttCr&SJ0');

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
