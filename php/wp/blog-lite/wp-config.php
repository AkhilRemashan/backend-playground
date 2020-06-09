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
define( 'DB_NAME', 'bloglite' );

/** MySQL database username */
define( 'DB_USER', 'akhil' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';KcV)5U6l3dsVXb8>W!O?R](.wD9Cs$(+n0#>REs:d8t:ASRNe?zwC~^s6O9VND+' );
define( 'SECURE_AUTH_KEY',  'oW8|S2V<XbBI*k?H32UrP#qol+ems$c<oLEDnKLy2wSM+ia1$)RPQ#wy&t?!jTZ@' );
define( 'LOGGED_IN_KEY',    '1*<$4kfaHz;Pa:,V$^,`y=#{^//`w6ANlYHRFfP)M7@ cs4+`&QM_y%6%# %Fy^I' );
define( 'NONCE_KEY',        '_*=l<A<AJIz@FQSuw*K$=`mdT]mj;bSz9`^n~Eq=RB1A|&c`W$5&%yYm-im8,fEY' );
define( 'AUTH_SALT',        'x>_0oG%%1k:+@!KW-~`I#ZKFm*2-LMh66<,q*+(95=[{-SCsJ2lXK,x|}b$3fQ2w' );
define( 'SECURE_AUTH_SALT', '>r71IU>5u%g|:g54`HV0#X|YlqKXpvcMvh(o]TJ86+&7_J3m@~A?y0RHoU9HJ`k-' );
define( 'LOGGED_IN_SALT',   '+(%7QKG3T1I@E<n^LzXmJm#l}|ym@)32pi1/&/GFNV{bqBKvfJ*2wk+wQ%y1QuBT' );
define( 'NONCE_SALT',       'Wue/[M?K*lqM(nGpAUx/fVVZbV~@E]!%godj3Gm)yc+2sa>vJ5,ZxfEuV/V~/2#Z' );

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
