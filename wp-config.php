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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kSxEZbzm, &muK[5g-l),uH,:7#dKc`Vf8CS*soj^LKZjW+^*=uNn!&a,$io@+?_' );
define( 'SECURE_AUTH_KEY',  '2,K(M;Zs_tIJhK1v`M^=+P.coB:/35:!uS^kVMbof{8APPe30p.EbC#j`FU;(kXx' );
define( 'LOGGED_IN_KEY',    'AFDsw6y:+7%$x#GRqT2{=@Jv5y|(eQsabWBVLG!nF<2us(P(B;A6W2L2b},D~[pf' );
define( 'NONCE_KEY',        'QTND)~}HARl`shD(%0/?/X>sC<w<=e!D,<iqIQ9Ibj9TbXVKQ7|f?}4Ec]K~I2f!' );
define( 'AUTH_SALT',        'jba+EK>>HVe=6Kh^H{LjHRg|D fOBdP<g^6{ELdy}}tNY sk]adcN^eD;Flc?VO|' );
define( 'SECURE_AUTH_SALT', 'EyH{esOS&9@8CA}t2JiU0fnNPl7$I!+}Xg*NK7CBu-p;iKC^wB<0&mOz2JsFZ,yL' );
define( 'LOGGED_IN_SALT',   'ZCD:.0N}/&zX}L3JNHtkVY}3pWliQf}sSw2<@}R?ti-E_Budg,H{rYsio|UGhp<c' );
define( 'NONCE_SALT',       ';1ECn i@4E-?JlDHU&-?EbEL=38y {rC/Xy8f=Z PP:n(!o:M:Z&<k?>J*Ewvk*d' );

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
