<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arctitechblog' );

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
define( 'AUTH_KEY',         'kkF@-V,Z/e<HYf<_sdPoY/oV+~!H~GwKRQdYyuEt{vufiSxjRq/?pPa|ql29[2$R' );
define( 'SECURE_AUTH_KEY',  '>|-uG_~?KJFTN+npqls;iR#mypeL1puzJ^AV>k 6_ N~oo]Sc#@qC:nznKZfjhw`' );
define( 'LOGGED_IN_KEY',    '7pj[+r)<Y3;KQngEm6$wdsk:t-QJ-i8k4tdVnDfB,Dt^kz6.*@,)~?(?{!@-th=~' );
define( 'NONCE_KEY',        'Y*C0JA}i)Y 4yXM[i7wBMSe2Vje;GKl&GnuOA^6Ekiw#:yr{X.?CUrCmVIW:11fU' );
define( 'AUTH_SALT',        '@?K_z&_.Qtq:/WTO/MTypD:zGf**CK=H7>i7faTc~7UMi#0LPTm$/.7C6>-mY{4%' );
define( 'SECURE_AUTH_SALT', 'Z/T&nXq0g4]q69xna1&GsbXRh=Mf;Y<J]wtZ.NY^&ZpfAca.!M/Xl++YV}1rrH#I' );
define( 'LOGGED_IN_SALT',   's@!4-{c*farv;~,MTBa7L7NRp{n))a#E:.*q7`J.<LkU0x^m/BYoDN$-RU~;t4g ' );
define( 'NONCE_SALT',       'Ew[z,NrBS@c9a%MEDwVc`4*B1S2ai!3PikXD_~t!x)gCf(I/$&{LV)tiy3[@ir:/' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
