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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creative_db' );

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
define( 'AUTH_KEY',         ';(w5u:7_#^ >:m@.dB.F3o$f-o[O<<z`w!Zea?q/08&CmZ]aL{hC]MHLH&^E`4P7' );
define( 'SECURE_AUTH_KEY',  'kG&y2uLT-U&;?b/>v 3W4_$08WOtEiUF:2,*B_B<~+~E{*6C+xS:?|6kUK}=B3!c' );
define( 'LOGGED_IN_KEY',    '5nqj)]0bNirHjdZU/vnY8XGrG*/4^P>{DHY4veOZfr5XDnAMDDIo<<A|^!8m%~Qz' );
define( 'NONCE_KEY',        'OpiyX_o(|b>nr$0[>aLkH^fo&SmD`HV/a`q.C0?f9R8R!z4/.6G[&IP`+ qhNTq|' );
define( 'AUTH_SALT',        '@I<nv3U90/d9-ymb,;6O#%(Q0oxh9MZetVoYCvU,-%oLtbC.6tRjAa4(cRL4xmT+' );
define( 'SECURE_AUTH_SALT', 'M2J}X}:$-O8,%2_GCr+UsG~Sd6/?RIQR?zMs_fzO<kYwH<|O+oK53PpDVSSmV<&.' );
define( 'LOGGED_IN_SALT',   '4 !?;Czsxt@ntkYwx[EatYbT-hug*ab9EcQ`C0SeW)%hfq&.V  Ao$yUC80P-k .' );
define( 'NONCE_SALT',       'f7_l>.RUm-2|p@z]ys^#_;veW3X;3*0|vG@<K1ySsc:pN_3DgXD@=79Uc-@PFMa@' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
