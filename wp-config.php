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
define( 'DB_NAME', 'Plugins' );

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
define( 'AUTH_KEY',         'wcJWfHVOB~)X>IpmTmGYC^Sr<$tx#4DSWCI)ZTAnT&M3;neqT8:/Q)#bKHul-bA]' );
define( 'SECURE_AUTH_KEY',  'DqdGc$]POa8>o2@{dLO:tFD]~V#j;@o ]Td%^5M~^Z.X;r/<4{)M+Lci)2Otf$:r' );
define( 'LOGGED_IN_KEY',    '9%faCwsd^}$?~sTT)GXpe(%-lB#M~FqR-oY!ZoPq.6u.w4N-rjY@mX]h+:TIA]gq' );
define( 'NONCE_KEY',        'N=x2e$RD]vNL<pTe6aT)r%bD^yI,lM0S@h~%tz:v*cenmw{cwK[[aed3+4_S@5[t' );
define( 'AUTH_SALT',        '{X+[0>Q/xuSt $7jm= ;Czr:yKqe,+66t_JPdBz_g[1ILgiYK=/i)h[<6?~*<gnk' );
define( 'SECURE_AUTH_SALT', '35z|>$5Tv1*D_xXy}&p2m;/l9QANVAy9TK+bV<)a=7+TCpooCZE.WjUPpCTN3V3.' );
define( 'LOGGED_IN_SALT',   'kE]:)HV#CK8cr1?(CQ!;oDpwN,Vp8bP*Sz-|!Le}9l2FMz]%R_OF@x1z|h>E`6yG' );
define( 'NONCE_SALT',       'LD{)L0QIj>PIFz?DJ>`@6! `aefH4p?^!W%p%=lLImo-ez6c$q|*-HQZH@.vpm8v' );

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
