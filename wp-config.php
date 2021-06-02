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
define( 'DB_NAME', 'comingsoon_db' );

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
define( 'AUTH_KEY',         '$KN/Z.p`6o7/bop2 ySGZFg+@$&0nLz]Q Fm2l!5WcN8xS9xp<3sycgftS3U:<T+' );
define( 'SECURE_AUTH_KEY',  '$E,]qDfKD5%@4YH9trs>,)BG4Y=9v>:jSA&8+:NAFY&(,/BS`E7f.`f+LLf>Gn1M' );
define( 'LOGGED_IN_KEY',    '.7yB),+]J#UmI>%#Joy+%<nRVk}b1+?-4RcFhlW]s@Sumikr&LPpY:$^.2)j&zWY' );
define( 'NONCE_KEY',        '^l$B_!<x6(1OjZq6v-5^6_eUT1`e8tDg6ToVCAY%1-8w$7|.&nScD9-rXfM~YjfK' );
define( 'AUTH_SALT',        '`{QxWWG{@ev(~VVJ`j&I!3Bj2r0N1L8T!1gq.A_Zy_<0rA>L4sv-.pJB,TU=|omY' );
define( 'SECURE_AUTH_SALT', 'qv-25S8fumy1[n~P~HXa9Pznlg-W?Y&JXWAF@*SdfdmI>L(1C,AI^3xKNPo=KL^o' );
define( 'LOGGED_IN_SALT',   '$^aTPr0}nOQ6m/y9B1<_}W;9Oq*^j4d<_Lq(E{dL@9FV9Zxw6]=GjV.YVA6QwZ!!' );
define( 'NONCE_SALT',       'sQY3%[^!3$VcTm[7%y~!s!bIjfOV-]wJe<v,0*`cT<#_vx-jz-q5S}S&=8PuUhsm' );

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
