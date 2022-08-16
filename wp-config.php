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
define( 'DB_NAME', 'gobierno-bolivariano' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Danny16029567*' );

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
define( 'AUTH_KEY',         'g>letInSFA{r4giZA3!?K{D|TQDv#CcpNp2;YRx=A>Q<&;T^JOCSvM/xoC(|!M;Z' );
define( 'SECURE_AUTH_KEY',  'c=1/uh`$^)P>+%KMH0JU}=A0pNem_BEhoFS(MEiyoK9cV^b|J[qm*[3BO(&gP7wD' );
define( 'LOGGED_IN_KEY',    '71xN7g-Q7ktP{;##/;2WB:1D:0Bqa7K5h1gU7l3|.$)cWu.=frPwJ~JCd>Zm^~XA' );
define( 'NONCE_KEY',        '_1F){1BQ~Z;3v/lYE%g.t@!pE^`=-PceRm+Tn4BxjCHf_sss6k]$cd5IO+0N}Me8' );
define( 'AUTH_SALT',        ',YCdR}EaKQw.MsC1}A_*%{|+o#4v38.=KAS%stF?&kr-:o)eK52%;$UE+sDARo@~' );
define( 'SECURE_AUTH_SALT', 'zEb!%=,nk6%N^p?9H8luVw9dC_2L=P+:rTu$};CaeGwMtXiKbcx+xg,5q:A(Kx8@' );
define( 'LOGGED_IN_SALT',   '_b;s2x5#Dp:xRDHWXvesI =tdZK`#9#tyHWrSGiY@5Cj6IQ6ErqR{=eaM(-#>f+;' );
define( 'NONCE_SALT',       'u]zO17W$[0NUc=^Tha`F~A4R|};.>=[FEF(f2!RxFqDA unddsEg|kb&+5KCrj17' );

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


define('FS_METHOD','direct');







