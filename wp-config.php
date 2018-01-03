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
define('DB_NAME', 'pixelzphotography');

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
define('AUTH_KEY',         '>]Q.5nmxd{S#YKjxJQTe{k%iKfeoaltF0b+fgMoOS|xzi.HS}+<z[HRyzH;AGx;]');
define('SECURE_AUTH_KEY',  '!sJjB /pT%: O7=8aFkN^)irVE%(Q(+wi>)~<Y#eao_jYzoW@neSu`l^[cQ.qe$C');
define('LOGGED_IN_KEY',    'mEkkRhR,lPLO$#f_[VqeG0{R#5Oa`&S5NCG@Dk]L[<3n1zxDBY$;KxFA6^5y^kM@');
define('NONCE_KEY',        'kd6F6`s5{X*_WC+=^Q@sO`FTpG?o/WABKI%(uSiz7gY 69mv=ylP=$_+pMme,0XD');
define('AUTH_SALT',        'wnbEcJcgn)~DYN3^xTACd(K[^dsC%+O_Sjc<(F<5@Q^:b,}K`@)U-]ltP[kD&~TO');
define('SECURE_AUTH_SALT', 'A{7}Xh7pSvp;U)M^97Y7o<XjL5N5k*I>l1bT;/Q2)hFasOLhA9GV2,T1s^*`jvBF');
define('LOGGED_IN_SALT',   'trPFu-#,^7|<v u)vFe}=g%Z(Dvv>%sV6De/C1}t&[$FyVb}vHjEeO.[Y=wH4~Ff');
define('NONCE_SALT',       'e3`1h^ocu8rS,PVm|G=YYBv$bbcOk4}#/| 4AUuPtt-kT9kzo[Dz[@ 8v&~39I4#');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
