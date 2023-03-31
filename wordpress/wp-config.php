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
define( 'DB_NAME', 'plugins' );

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
define( 'AUTH_KEY',         'K/KA&EhF+(uBmdkmn#=n<PxniH3Jllcj!=u_e/Tej.8]/x%=@-ba_#v!L5FW/P--' );
define( 'SECURE_AUTH_KEY',  '-`QXBfR h#e9-ttZpvpcD/y|TE~];ti=/Z~b2sR@vUlI9x*l{^CD<&HW$Cx(X7F&' );
define( 'LOGGED_IN_KEY',    'QQr!Ph!w2BSq0+N4C/Eu[SPK@GDB#FW7$BCsGf-hp`Tk$sJ`C&AlFG<1QNyiTUKo' );
define( 'NONCE_KEY',        '].,d&OnmOVkMQeZ6viDoZ8.ZX]HnQ<=^1)j|/8}wk;;L@gioIV#,]`E2S]rwamB2' );
define( 'AUTH_SALT',        'k<P0]Q,Wvnq ,heX8GK24x3oH~).,j/`Ej[63,Kfsl <@h>ypbaUh=}/nf!~vruw' );
define( 'SECURE_AUTH_SALT', '`fRh7RT2iDQSwyTSE/GF7&Vot ;%pH*7CYNA/mvEM,^-afMefAyPTUIu<RU@jARz' );
define( 'LOGGED_IN_SALT',   ',9)H6SV!KKi5hWQ@#i}Ru7!c1GF4Bu2>dX1.+m5F=?Cg+qMqx{V%vBI:]aAsFXgU' );
define( 'NONCE_SALT',       'd(!lB_.`oo]|1SAju$;tZTI^0s{5^5m,@W3#W&qoRRicF4EdePSXML/@:u~P,w[g' );

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
