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
define( 'DB_NAME', 'johndb1' );

/** Database username */
define( 'DB_USER', 'johndb1' );

/** Database password */
define( 'DB_PASSWORD', '%Temp%98298889' );

/** Database hostname */
define( 'DB_HOST', 'johndb1.c211gnjm6k41.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'iC%)p~ZXmA{COA:${Nz;X8wY9Vm4=;xd{([[Dk+?7$I8ePwc7cQ!6zPfEqg@XZ4}' );
define( 'SECURE_AUTH_KEY',  'a,VW |v;6 ,V6[~{FCGDX2s,n@>DSCcEBP~ZsMP$jl)Qc$7r]}ARh(nulf>B.w^O' );
define( 'LOGGED_IN_KEY',    '^rG[QW|3`&c/j3FtGj,>4M.V#H44; R>,@pg)bG /h0$I&ncOCKS1S~/KQs_>iP,' );
define( 'NONCE_KEY',        'EhX/M#YIsBEjaCX0jm>V%q!Kn!*@/(wejPc77);$54h]}U*jQ?4^eI:S}I[8JV5_' );
define( 'AUTH_SALT',        '`!*`QUyw40Q11]Rk7i*lf8HSE.|;06%>%ZH>MUBVpey!NvL=my/SGc~nZ4|$l,H[' );
define( 'SECURE_AUTH_SALT', '5tBfq}zRsGw1j&qA1O:!w==-z92`?Mc>&cZ9QPqgT~[~pHs{B8%N_mlOP(z4xRc*' );
define( 'LOGGED_IN_SALT',   'qzwV[r^vSxi,x*S/uFC}>A][j8/;FJ>Kd%H$Wifl%-K9D7C.l4@v`iKEZiI*}qcb' );
define( 'NONCE_SALT',       '/U:8k]Rv8OpH08#O;PJbkC:{huRc9WyFvP~~SJy,Lu8P/g[KF-HgKWX4?@y|j$=Q' );

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
