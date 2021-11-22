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
define( 'DB_NAME', 'iyz3r_k3476s67' );

/** MySQL database username */
define( 'DB_USER', 'iyz3r_k86k67bf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dongho-6' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql78.conoha.ne.jp' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '9yec|@E=xQC<j~=) S5pOj#**m9/t9euCn;uAQCTYn$n>-2B<43UCMF{h5qo55g>' );
define( 'SECURE_AUTH_KEY',   'bFLX_i&=.Fta.$P?gb*U|/StZ]Q{GdmGxChK5pgtyQB)t &adphk0n9|$9@af;1O' );
define( 'LOGGED_IN_KEY',     'dWvN5IyvY~7o.yrT47e6&N8bz]JVYWA<~#Fqz&;=mkBVs<LXJV7C S:VmdmQw7Bd' );
define( 'NONCE_KEY',         '{yhNKyA:j?g@]&?{apt[ 2M+E7=JS*ALJpRsa7_QQZ`qq-Yql^@,3J{8ONRT9#1L' );
define( 'AUTH_SALT',         '[I|fGM+KE.zgo=;SXY&:fIFPEWO:E$*Bw/bLvDf+v&@|L3[1|o~n{F#KX?DD{;`V' );
define( 'SECURE_AUTH_SALT',  '{,dkarbrY2(IcFumNi-lJu7-Xh{1K:Aq}<GFB<e=BU%T[/{NA6T#<zj_E8gaHCIZ' );
define( 'LOGGED_IN_SALT',    ' xk*p}qMJ1IN3dv7W<Qy-57o.(X.?znRmq=OTO@#$j*WNdghvX`.eXVqgJz=L[<+' );
define( 'NONCE_SALT',        'q}2s{x= (c3?@a>z>0%c(pp.?EcX2rxxamqt~t4qdOt|Hu<LftOUfdUX|{c S{3i' );
define( 'WP_CACHE_KEY_SALT', '=_B SN*]xru>SG;Ics>oCtCS(OUI)O8cQaw9*`W1k>jdvy+U/6H:,t}4MJXp -[]' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}




define( 'CW_DASHBOARD_PLUGIN_SID', 'iojERJBrEfarAUIv2mkEYD4zuHr_gyfY2VhWTJUD9q0WhUmDPYuxiKTMjoDJzUzJiig0-UxzWTnrW39PyfinHVAa4FvM4OXdmyndkisAbUg.' );
define( 'CW_DASHBOARD_PLUGIN_DID', 'BRILK9T3CDEw3A53LgpTzKGFnGRGVMzPY6li7AKdzsl-_sDYYnjfqiKO9OLMG2TFsiCXLooCdiKcU6TAwVYuKnVLLqEfTfg-QvuEFxD-q00.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
