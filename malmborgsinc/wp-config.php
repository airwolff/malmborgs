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
define( 'DB_NAME', 'malmborgsinc' );

/** MySQL database username */
define( 'DB_USER', 'malmborgsinc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LBAc3e~Kh/Spr>p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'f4YNSr7{5$BTNDkl.$[h{c u|r.uan<dpR6wCH9pRe>rA#C? )5]#]!2_nq [Q^g' );
define( 'SECURE_AUTH_KEY',  'A3W.p4}||&7C:%trdNnCkDGwv%.*C07o{lcmz;$XhR(RsctN3Uze>d.&qVqPjSba' );
define( 'LOGGED_IN_KEY',    '?h,s!g|fNrI!0Wm2Lx`*&yy*+L%}I2@Pnh$eE,6L[*))~3k~c<y~4S;]sOO*Xlgv' );
define( 'NONCE_KEY',        '$]iMIukj:AF$(6yl>a6ZO7>EFWI,<&j#so1@q~>i;s<FkvPj:w}@TG kN2-XNQ]H' );
define( 'AUTH_SALT',        '0zQz jgdW#iM~K,*S|G7<DK(Xk1d{e9}qBG4qkkL#}e^QQmvCywFB01U|`]vD<&-' );
define( 'SECURE_AUTH_SALT', 'je dw+bI7(C^_=3D#VbC5Qv$e04~)4(%GY{);g@?qa1*<Ssp9J5`:CO]m]2$ADd/' );
define( 'LOGGED_IN_SALT',   'MdXH8Mmay~uFWtG4bm3PY3;/-smG&Y$B<.gOv?q2deO TzVi;e0|E,_0A2RC6).E' );
define( 'NONCE_SALT',       '1dg&:ggE-5L7JG-)6Y:e(UwLm|L8hYE(DOW9+MjFnMC(&ToU5HFgkJ)_#jA;r|96' );

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
