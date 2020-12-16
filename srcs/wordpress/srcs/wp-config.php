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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-svc:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|?z7|uWKy18Zt*R{Winvw-7<WO]P]+Xu-eF:|j -RP+G@Nv*U:%/rn49o+V?V{lT');
define('SECURE_AUTH_KEY',  'D]FK?HdhR%SLvgS7<k{@L]V%]&ovd&3h@4)XHmXRv-Vpi$%,uzwV(Gh`-QTfRqWc');
define('LOGGED_IN_KEY',    '=o{KHrM#B`p(kZ(ODjh7ye+;|)t(x&=O:2{c.`!put#9UV2g=ob:i:=bq*+qfYYY');
define('NONCE_KEY',        'Zj}N/7?`CsU)tEcJEGKj17ti:xBt`dBF(?xjG!?t[|Law)!~fqkv0_RQC#5&2[]-');
define('AUTH_SALT',        'u$S).LBD3IkUHhL)>Yb{K-}Nn.CM*@^g->8hlwu>)@qYGwNY<2-hI-D^Z@q+ gST');
define('SECURE_AUTH_SALT', '2,Fbgj0W DYe(GwbW|D-]j&#)9+Mwr_zHBTK[AD||l+sJ+S<)jQK<&YZbP!|%`Op');
define('LOGGED_IN_SALT',   'UDXQa 3l<+r-ibb-;fG:M6&)+MK@g<&Ccz&Z-<p78U[WM;isou/FURbd;<Q9@^r;');
define('NONCE_SALT',       'U`-Jeo^`w:9)}+-,+.1vk{O,7PypJt@5zvR-TJ2 BI%@}HSE`Drw5uos:;CI<L4@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';