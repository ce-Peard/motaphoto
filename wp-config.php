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
define( 'DB_NAME', 'motaphoto' );

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
define( 'AUTH_KEY',         '9S@x$qDnYeo )]F<S*^@Z^a!.+._`UAl&hGpT[f={jp|K_?2}Ma1y%ct:l.dhD9N' );
define( 'SECURE_AUTH_KEY',  'uH5PnLWEs3 ,zujl|/-BxPjWAVk.|S(@jBs3;B!#6Yg-hY78T|CLR4]3]N5x[TR9' );
define( 'LOGGED_IN_KEY',    ';K.I-$S1NO uJCs<T>eXSm3WkD%RJmN=!TS_aoK6w^@PU8*[,YPO-GyAP-zP4ure' );
define( 'NONCE_KEY',        'am`L,M~|Uu(d=.Ab`F-orc$5nvWaAy@+F6y)O<S)r,qOZ %7p.;f!8dH|0d9!pWS' );
define( 'AUTH_SALT',        'iJ k{?4oQm4VV@7^;o 9PSKQTOAtNqO(d]$HXwA)w7Phl7eZ(}]i:MEpGvVO@0r0' );
define( 'SECURE_AUTH_SALT', 'gRSc|+v(A}i+14[>)wd7`]P>N<k=K1yV_EELq7zuS:C_3f=R2_6F}IUb5_<r -1t' );
define( 'LOGGED_IN_SALT',   '<PI)M+xFkX_EgqKb|>[VWK0xp-y:-y$%upz/t;sO*=G8Banxs>Rk;SY$|l>HTF-I' );
define( 'NONCE_SALT',       'Kiu2q:r>!/g2}E4T!bF]7Wccg#fiT6SEVsE~-3*QP}2bd%NI)b?Z_G&xE3i`sIvC' );

/**#@-*/

/**
 * WordPress database table prefix.
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
