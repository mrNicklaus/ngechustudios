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

define('WP_HOME','http://localhost/ngechustudios');

define('WP_SITEURL','http://localhost/ngechustudios');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ngechst_db' );

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
define( 'AUTH_KEY',         '!/Ai&fL?V*w,JS38M{P,4J&/%oVuZ?AL/kQ})+V<E!<StbnqP,UJ+Mv4H<EBX^j8' );
define( 'SECURE_AUTH_KEY',  '0=ww<aN06`-n(5`~(UlDz(> %p1#:E]j|2>IpBNf[aICHmY<Ir8 AbKELJ/8r4[>' );
define( 'LOGGED_IN_KEY',    '=_sAas 9j0.Z~,G~kdX];z4f4-uuqnE#YL<9zLc$<c^kD&j2NF oBv)g-[WvV<@1' );
define( 'NONCE_KEY',        'x`?N[J?M[:SGr/6HV&co:jhv,Pd+=$?qxk+?cIbl(|C9n_ad9POeaz@AQyQ.Ip;D' );
define( 'AUTH_SALT',        '|7xrZhBkF;F,V/X)LAEI!T0,*TS:*hMTh)%HNH{Svq:C`_DimW2V.Vuk`bK^1329' );
define( 'SECURE_AUTH_SALT', '(ZJ]/Ilr,d5&OcGx)yg|i:5]y>siFa1|$v,F3[@ef0!#-d7U,ex`/hgafHtejn~S' );
define( 'LOGGED_IN_SALT',   'DLE$VHsL`oQIOsQ2S4fzBK=DaA%Mn]{5Wz~CdQS}n+d_guWvaB^<(Pi$E,J$6s3:' );
define( 'NONCE_SALT',       'k2$7xw~x<7a`j!+kk5[.st7H(lLer8X=yI{u;2/S]X{i{1GZlhT2?0u$oo` 00`(' );

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
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
