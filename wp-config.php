<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'commonplace');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$iB7+o?#nj5pdYkuV(<7R<ZaN6; r?lxgM;_S-M~W;FZga-2{6Cx-q)QGcK2$XSr');
define('SECURE_AUTH_KEY',  '+-Y~!(DYO4`ynf!4C0%~#D#-_L;0S*r+O_!a=Z(eC)2o||{Rq,<[8E9NVvm<-LH(');
define('LOGGED_IN_KEY',    '+x#u?-v)VhL0Gl4<]|LqK# DRnQx5T;|3Hc6-k1/,*4>z!+[Hf8;fU$/K|8nt.Y4');
define('NONCE_KEY',        '?^|_)D7I-TxR#otwEmH35?lfz:r|hrx5fX{/bFH`lW%xUo>r-?Dpq1yU[Uoi[IE6');
define('AUTH_SALT',        'a|wWQ8/+vg Yc1UR/pX.4[|qAmT/#w7j+!1_FZ?MKg4BYig`h?(~)uGO]_%r,331');
define('SECURE_AUTH_SALT', '-j*/Vhm~Y}~Ua S~o3|,(vw-+o5xQy-a]61AHz2%*n>IX,?Cls8fS-YVrLdUJ{:P');
define('LOGGED_IN_SALT',   'jufaPBq}{AeYKW5cIg~-m9Y/{ZLl[3D[)4I,{HiU!LU}FS4xq4kb{h9-B #[Um!l');
define('NONCE_SALT',       '70{{csR}w]yc2>r-A,mGf),CgfGNLAM6Me/g.|,Ckk?UZ:8/:G3=Hiv*.)^i<|1W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
