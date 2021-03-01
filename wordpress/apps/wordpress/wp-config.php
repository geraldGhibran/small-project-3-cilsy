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
echo getenv('DB_NAME');
echo getenv('DB_HOST');
echo getenv('DB_USER');
echo getenv('DB_PASS');

define( 'DB_NAME', getenv('DB_NAME'));
/** MySQL database username */
define( 'DB_USER', getenv('DB_USER'));
/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASS'));
/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST'));
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',         'x!6$!qa|Gsrv-b{+qZR,-ahob-3E>1eMhJSu%%+Dlc0{qLyl2t!LKwzTuuh8]Z]+' );
define( 'SECURE_AUTH_KEY',  'VDh&:;&d|Y=|*U8d+<BU!h9?9QwQ</Ej(q:=ms06qTX+JE.eg+i*dAw4#_q+kU`*' );
define( 'LOGGED_IN_KEY',    'ydDXPe3uGj?h/)~-k!:hSw{D4:R5}Vz2+P>y(<)S#@?N{Nu3W3uN24xA7M*4m8-X' );
define( 'NONCE_KEY',        '&h*1+f!Qnc~|EkN/[761Bus@v{r:.{*`veO8}#kjb-X-OQ1@(me@YpwX`~Bht~Fx' );
define( 'AUTH_SALT',        'mXT@wO|2pJ/ ^~!61>9>~XJ Mj{oz5$zz+4nG4<El0dIPu|$UX2eM&V(iq0zIB.(' );
define( 'SECURE_AUTH_SALT', '+;C]uHeO!CX  [(<kwH=pMqFZvh+3<axG&(S2:HVFbj, !^!%;|2B_h@rO?r6@~q' );
define( 'LOGGED_IN_SALT',   'REEQ$2xyUn1KEHJJWFR#6AbyZS4ep<VtNEL,f?He{cmbYXe&6o3mry++cSh#vXKz' );
define( 'NONCE_SALT',       '`hkWL~s9Ss#*WG+<z?--^d<,R)%Nf7|Y6`^y{o{#+}GTjeJ&RE|H]Rg=?TV}Z9,x' );
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
$_SERVER['HTTPS']='on';
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
