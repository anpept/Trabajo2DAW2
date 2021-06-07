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

define( 'DB_NAME', "ajedrez" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost:3308" );


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

define( 'AUTH_KEY',         '%,aE4jRu6{9yQd(1/}9$0^ksdG(5NV`w<>%~vEl )C+oF!~Z*{UUP`^a8DR*k|O1' );

define( 'SECURE_AUTH_KEY',  '&*Y/R+AsWBmek3Cc$S=_R>1E*hWzlT~,#;gTL8c``Fo[!SIIDiZ.BW)YQIR)];LE' );

define( 'LOGGED_IN_KEY',    'TRKYZ}4=CV;Oj9zfCBjW[zEPxK20uFk ].OK*=4##>SRAl])=xa8~{/)=1)yy{UU' );

define( 'NONCE_KEY',        '|J{YP$81XT1*?m,n@#[?_pKF=|N`A?QIN89)e3jzX:H@Jq|.wNp )DH>vww9KLsz' );

define( 'AUTH_SALT',        '2?up^0r=PZzYrx{0Dt,CN-L()ck@T{G[vqQt@-2G$k%6X*.XE8X=)4Hxe|1HkX3=' );

define( 'SECURE_AUTH_SALT', 'j]n)gXT!E7=uJam|]*}4kTn[9(nuQ(Z5)/=*HxKy-Q5?kzEG5[MQJ*B&TQ77sB)~' );

define( 'LOGGED_IN_SALT',   'Xrl6}Dxw)%A.VFtNQ2Xvj~t32xr$t)1uF]:Ts_&9fo8~%s7:0>c6*K_3b;H&WFO$' );

define( 'NONCE_SALT',       'e+(d^+k#HulF*`@SBEZ#N6V+s~gX2@1=:JD`Kxxe1)p<V@mKl!q*Gc>WOAamMx 5' );


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

