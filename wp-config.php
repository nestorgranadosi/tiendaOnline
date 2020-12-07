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
define( 'DB_NAME', 'pruebawp' );

/** MySQL database username */
define( 'DB_USER', 'pruebawp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'passwd' );

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
define( 'AUTH_KEY',         '5_A4jj:Cu`+PF&0?Z.H~E8fwD@oE?^-x9/kyLZUoXllO l>+rvjN`S$ 1S#5Qns]' );
define( 'SECURE_AUTH_KEY',  '8CT24.$#s;r3AN2%g/~^)Duscf5J#Ui|_>F0{<y91Te+Pn:2R+W|[Tu%mhkK7/ {' );
define( 'LOGGED_IN_KEY',    '&+vu@(+#j@Aeo``JR<jp&uoLEMDajU~b/`$Oe,<(_P?[-:Y$ywEarHaiWcZB7{XR' );
define( 'NONCE_KEY',        'td2Ord>!Xj8g^3MCg!QLCeuDdkcz`Qi<QkdtbK}m+}Xi~397 suqFtdxfB*E(<#F' );
define( 'AUTH_SALT',        '5^rDCT&X&aM3%s~ju+=bzH945]V?#-t8LWg22#MSqfm^Mi(q=#N|Ig5GpGEQerrC' );
define( 'SECURE_AUTH_SALT', '$U;.RSk+S`QRX]cu}^)Okg,O*yO~U.Tan[&NF&WZoOoblNUUqEBjMcjo2T^sksq)' );
define( 'LOGGED_IN_SALT',   'TD(mOd+rA^CCLe<mi>v#ZYuft=)SP`lH3NjZNh7o!##UZ=sTw.uyj+b rD%=fT1s' );
define( 'NONCE_SALT',       '<ZkiQG-RI&X5mqIqjEMb9$~cBn30;eL[/!G9;g])56dyHg/<GvMd5s2)m:;Q_:aV' );

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
