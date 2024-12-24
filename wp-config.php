<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'power_gym' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '77C>&*F^`3}(?p`_AR>pE&*isD)Q}2EN3>)L0b029&w5 V!3$P/uR|aALCj+S5;/' );
define( 'SECURE_AUTH_KEY',  '.owA_%9}s|# 1#M}A_d}{|2nUMEcj@q3_psOrxSS#L{59U!BB7d6,2H@O};<;]EX' );
define( 'LOGGED_IN_KEY',    '[vvHTkpeJqPFdCJJyM#J-#(_;mi{n+ByQQ}wsi^qKq~E^Ta^PqD4j@]AWd Lksu[' );
define( 'NONCE_KEY',        '<b9!~1ix4Bj>h!c![BZ-,$_R~!z9~WV1LD_E_1Ho*?ZD!Lfn3G&Y>XiEo#x?fK32' );
define( 'AUTH_SALT',        ';w0+<uJ4xD0$Z_ea;gj2-SqZ$*9-B[qa#/_Oug{twdXqRQ-#C>z|rvbeiMQa#uTK' );
define( 'SECURE_AUTH_SALT', 'K&r}:-;L6/4?#q`Bpa:72^PxmbH%|AffF)?xAcD0<#O<g/]DR5mL+[tJs*61)L?x' );
define( 'LOGGED_IN_SALT',   '%Xaq|JZ?{ATmN?C;#_r<0~l`$38$g;*Lpo<Mla=0tfD!^Aki2BLdU:Fn.y3[Amb7' );
define( 'NONCE_SALT',       'aNB]-xY/;(7XYBq}{>:ped@<}U&Lk`(#IA8x.L5`Qm;U[X2(F1w.FXkgAy*`}/T#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
