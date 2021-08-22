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
define( 'DB_NAME', 'rahulkd' );

/** MySQL database username */
define( 'DB_USER', 'rahulkd' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rahulkd' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'LE];KJ[]H$9q&i,o9500@E_wkvLNv,?A;_rPp[FA0WrCK0X/v.15Qr22N&.hWhUf' );
define( 'SECURE_AUTH_KEY',  '-c|~p/fp~OZMP]|z`Y*DD[@j_%Mq*;.8nHtS`3%CN+uh4~a5Ix!a7,i?`T)9^ac@' );
define( 'LOGGED_IN_KEY',    'rMRKIM#x*hheZZfq37HFP^3gdDf/^)F5:>]d 7~sO,~&-0n-w)eUnDO28&PMVoB]' );
define( 'NONCE_KEY',        '{#9f_UBQND%b]P[`|ubDTyxQ2~zRA7+E-&I!vPW=vvxk#~S&fB)e`9@qykv2_T<c' );
define( 'AUTH_SALT',        '0$;AkMM<ZhO[SfaHbka~B`#;3/AejL40Zk?cZnE8y8g`K%<Dcux+q3yWq]_r/Nj@' );
define( 'SECURE_AUTH_SALT', 'RZm;S_:U#yWz{N:Q0H2{r1G!fnrAIAvj*UDh}qS+!#A8|ld$Q{X&pJWOPI}V5,nF' );
define( 'LOGGED_IN_SALT',   'OZxn67(ybe&b~&T<- W{QkVt4ppiR6vxD_/{|nnNF4Q|so+JD5/;7`` ,S)Ej(7w' );
define( 'NONCE_SALT',       ']DKH]@9dx{vc;X]>vo8-NECS.KbskXRkka6<1ObrlL&M9uJx?WYv<1QzGA(`%m2s' );

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
