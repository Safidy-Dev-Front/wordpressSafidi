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
define( 'DB_NAME', 'odissi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'safidi' );

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
define( 'AUTH_KEY',         '{6rY&&[aJMUA|ax(!TASGTp#BT)ZkaQBw&+4fMs:jxn X>BC{6,S+,78rHVB/uR-' );
define( 'SECURE_AUTH_KEY',  '$xMpL0!y$AVdslw6n%Zx]NbAb<vGM>ew@npsT)g]g]P_aKe3954tr8-~s?:MY~F]' );
define( 'LOGGED_IN_KEY',    '*sL`n(5xszY]7dhAh5:XuY?rkuFkn8ow8]_V3v~=]%8vsaui8,t^TN[[+b:z*`1o' );
define( 'NONCE_KEY',        '2g`<=i%_D,|spB*S7ydl=@ODh<kloPs-dy1Q9~G9V0AVQ2xOH.^hC(l,E;avEtQM' );
define( 'AUTH_SALT',        'eq{mqPlV;cJSbwL@M-JZt`iU3Og?Lo-Y$rL4mze{9ho4[>223y3K(&f<M)4gIJx@' );
define( 'SECURE_AUTH_SALT', '3A@mS|a9~m>BN`maJjbU`[IMwPBBCL!]f2[?< 7k{X_r2e3*FR Q{=,Q+7U>sR5*' );
define( 'LOGGED_IN_SALT',   'FR{xj<>aVoIhB.d4*AL]{(jp~6dBkRuvN 7e>6;tQ[kk=q|/qqY^XqI|!<;8g$l^' );
define( 'NONCE_SALT',       'hIRg%7:&hc.b$He%$EdD_[0.P-eZt!3j^I%Z~m,^28tjzmwJhMnQwT=-nQ%<?&Z(' );

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
