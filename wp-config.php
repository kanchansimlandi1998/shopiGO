<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u240759813_DNX2A' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', ' ' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('FORCE_SSL_ADMIN', false);
define( 'AUTH_KEY',          '2t;Bs<SNS}mmd2^o9PpV5KcOXdJHm8R7qqOU-T3<vV!@JlcACwuPsF,1#lO<*?mf' );
define( 'SECURE_AUTH_KEY',   'G=C2IKUPczfuBDZ?AO10x(Ojci-ykSf^i=Ua)_Gs#$>A<OIWKkKWPM6|t2 AV03&' );
define( 'LOGGED_IN_KEY',     'uHr~wXC/9|}/g^8PZMI@j.%]SjPa#.&NEKn^GnwEJKmt^7[8*8KZJ8K8n9HfGTx;' );
define( 'NONCE_KEY',         ':{<E}rOrDTam*2O^FW.h@Stc2V,eJme!7fK_U6tQ=@mNHjWrJ=2hdw8G5l3p9e:k' );
define( 'AUTH_SALT',         'd#`a&<)H+n6u>d/||s5s==(r0*=vJFl)e|H7H *)7sf,tA1w)b6L1/CV/eX,c4$h' );
define( 'SECURE_AUTH_SALT',  'PgE[GG;m$i4_#@y^L8Y[a=-!_g])yM-aioi/$X.5dHVjzX_GgnW0_LnC/aKunZY{' );
define( 'LOGGED_IN_SALT',    'Ku|jmtTs4wDWLm>A*#Q>U.Z(U7R mA:AIm/F1Yb06|[].&j86{}9u{zy[{OH>:?0' );
define( 'NONCE_SALT',        'm~!z1R-gyT_DG<(@NC+1#j=tJeq 5|XJ0*gqvgAkreL252y/B5hf>,)G{5$mL47,' );
define( 'WP_CACHE_KEY_SALT', 't#;HYWn+n),kFV)lD: Ow^sO,E]44d+tP&>w%VAhO[/nW(9tcS.0R5f=m1^9tu0=' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
