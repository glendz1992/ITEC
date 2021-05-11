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
define( 'DB_NAME', 'Wordpress2' );

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
define( 'AUTH_KEY',         '-mbZ{)C=WF*jG^,rRqUdO%<$?L-+_2{0kXI/8^nx0?vDZfrjFGZd_(x5[Pz3B!fc' );
define( 'SECURE_AUTH_KEY',  'xhj=G:QiDw*2fDMH0?D+ro-@.6k,QX]APkEtl8~[=s$@}$bJ.izU7&`QRenWml<.' );
define( 'LOGGED_IN_KEY',    '3Owvg2!h)TyMYRz 4 5HS985[Kw}c{w6[,]FKi,,)iHhZFL:>5,MAU66r1z^SuZ1' );
define( 'NONCE_KEY',        'M_I9pg=i]>qq,dE+8r/J<P.N-SjsTf`[G/W[$=r*#f//1LIY1pEueb0$o#)!HcF@' );
define( 'AUTH_SALT',        '(z9#0zQ|KiaG(D<$QMJY9zcQmm4J@ ol8x<&l{29!0:8}k<ul4Wu(AsE|/G>ISZx' );
define( 'SECURE_AUTH_SALT', '~YTDNl=Nd<o^Ww@FQv5Ow8B]SLeJ*{yi,A;q14`xAb(<axpB0hG :c2OEGMM(2.M' );
define( 'LOGGED_IN_SALT',   'f.3q9(h)I[%5q|-UilLl2~d4|{+PUpEvkSgwyG/4`|#f`/<qNZ:+1+S=4@wgcvI5' );
define( 'NONCE_SALT',       '+lFpLTv$r)V:mcR[M1dQY aa/w|OzMGx2sov|Qhpl21j2 F5s+$jqaDs88dcLq|L' );

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
