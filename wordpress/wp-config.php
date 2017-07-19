<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sandhata');

/** MySQL database username */
define('DB_USER', 'san09031');

/** MySQL database password */
define('DB_PASSWORD', 'san090352');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z+A29{%7x;X0b {?tPklG,ubKbBu|MJhsZ~)Sb,o!l*`qJQ];[TAQ4Ydh9oJ|DG:');
define('SECURE_AUTH_KEY',  'n?Jbpp>aR]FHl T=(Gig+,=ceB{F-ZSjGQs`[>!ag+y&MS0[6R]nDdp?&G@ mARx');
define('LOGGED_IN_KEY',    '`fjJzgm~$Nt&.NTS?mjp&IG(S?b%(8xLltEX<BV)Q0#6w+#6p7?6zfizSU67h+8_');
define('NONCE_KEY',        '<Q4Rf@Np`(cKy9- |&)bM4vK&Q`7^7 Ml8O|>VdeIz1r7z;YN?UTITY@AF#+A-ut');
define('AUTH_SALT',        'P:3Al0QY)pFd^D?ILMgT:i2(&:Yiz R{pPoT{Ac&Se8DZX:i#]B-B@CHR&r#bKzV');
define('SECURE_AUTH_SALT', 'z:^6{ uCT _!5 +ypWKKM-pa`V3MC3}2AMH#bWV[R5 }E`o:c!90I7<Cu|Jv+`mF');
define('LOGGED_IN_SALT',   ']2Pv~ .tczi},gdg/fJ<em-c9}@%Nl.c@tP{cSSQ%cx35*EHH2I}X-P2xeUc5Jr-');
define('NONCE_SALT',       '5-1HsyT<jJRH^:`AT-RTfvF /DiL!D*=K5LE+8$PDs/Q@c<IRQztgu^b9<ATbEZZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

