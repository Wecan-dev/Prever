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
define( 'DB_NAME', 'db_prever' );

/** MySQL database username */
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Rs|_(h<BSfj=oS&We3pMLa7Eqbb]V4V(!&eyHs<B04[4EB[ZNn&?nv]bg#g=tV19' );
define( 'SECURE_AUTH_KEY',  'p]9tp ##,Mp~XGHHKl7{=qbm~T#J(Y*H#HR9cFK6[<PtI~E!m/ok*_japUT/(v3o' );
define( 'LOGGED_IN_KEY',    'PB7qS;gDCd:O)msnNI`TZ|1RA;k!8:E<E(o.)H;wCf]1-[V^GtUpVO0j+vS%Z5AC' );
define( 'NONCE_KEY',        'cuoSy+O{-Nj>m5<KN41qiD6V0C?h);(L+wO`ZwAC)QdD!vE|U{*|o5#NDoHxCk 8' );
define( 'AUTH_SALT',        '3BUnHJ?]C~_l*0$^B`ybt3wn97hq7(zVX$oGYq*Swo( o9#voTCaGdteNPew<U+Q' );
define( 'SECURE_AUTH_SALT', 'E~*NjYplpC?[<x10UGf[+/u%}biPRYG&:uK!g<-3SF1HF6NSj{+Zl}y;veUy Pm5' );
define( 'LOGGED_IN_SALT',   '$S:!~D,TBraB.:>5+hwLg7?9}mN,3K{JtP1_UC$EKja~=|:!Xb!KS^$HZjW5>Fij' );
define( 'NONCE_SALT',       'vk_G-s)>9xLdxWhq0KZA}bwO-5b-%[xM*vy7Sy:XwF<DC5c}0B7?[S]xiz*2Y36=' );

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
