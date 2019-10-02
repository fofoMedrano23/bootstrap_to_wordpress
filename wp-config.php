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
define( 'DB_NAME', 'advanced_bootstrap_to_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'advanced_bootstrap_to_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rmc23831983' );

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
define( 'AUTH_KEY',         '8e!5}M-T[aQXX[La9VNE@QA-bs]ZnSo.iW.-`MGqKQ|T^B<eUUs+b<lnHBHyT#*d' );
define( 'SECURE_AUTH_KEY',  '{_T~~c`<]Szksr92(Wcda/q1Baq(>xc3N=-s4 B]DECQf]hIx|*b_eufihi1-i_]' );
define( 'LOGGED_IN_KEY',    'D<1q&kYmBn9~g(.Z1LC{#kga2xYmWvgLzoQ?qqU./NPY}zo1VmqqH3+_ki_&&=2@' );
define( 'NONCE_KEY',        'z31f4^fkgD5&6eYX7sW=I*VU~tm/h`A`1I!;;9#Q#/2-2l4QJcy`LNO^1=,+%+l{' );
define( 'AUTH_SALT',        ':{Yb3%]@Fn_<!gG^x%]8F{_:HgC_p|A<Q6<[fUPTNwc>d}C2]wJ+SiU4#kzfZY0p' );
define( 'SECURE_AUTH_SALT', '$|}.jgclO&!()H~2[w|uBtZ _y5Gua~@/7{avTo5)s92@+GUwlTkUn]|vMUALAcW' );
define( 'LOGGED_IN_SALT',   '5h0/` z)_MI]=Nwu/g76m.QO4DG-`ZX$R;y*LhW@b6BG2%a)ZeymmFVfOBVN-NJn' );
define( 'NONCE_SALT',       '%P5nvnZFLWb-PDn?hzsT$810q7BwN=i7M.]iQjo^iWiP_ HVpdA_=JE)Q!wg SUc' );

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
define('FS_METHOD','direct');