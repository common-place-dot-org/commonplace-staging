<?php
# Database Configuration
define( 'DB_NAME', 'wp_commonplace' );
define( 'DB_USER', 'commonplace' );
define( 'DB_PASSWORD', 'LC5wN79h524L3TaKFSCT' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         ')/A#+vA&&c[+yQG`^1g :a|o_np%Jj/z]PQ$W3OR~ibl(y{>h=Gp{m&Q-0 OS684');
define('SECURE_AUTH_KEY',  'f#~uOK?Tlg,>uv-B1BWW#7L: !|~B4J](_Ik|[n.Blb+EN6+AeqJNHT(7]-A@Z3p');
define('LOGGED_IN_KEY',    '(5UZ%#J+Tvt+aYHo|X|4R3dMeT!lYoU.=Z&]=~;<erlD}(M$1nOSQMh+:pNvTKW}');
define('NONCE_KEY',        'k%SWa9c{ajT*+cY`}_-t5yD`6($N%|chz5wFgM ;6HKAL[_fIQ*laW 3-~Mxxtm*');
define('AUTH_SALT',        '%8o}ED&VHP$&+AVk<Me`~Qfyx^LF|&)ze`We)qtp~02gTv2Li<;dx?Gt[g:_:ghK');
define('SECURE_AUTH_SALT', '`%RWs]v7 A,*eL$evE~ekcL_L+P|CU3~rN-v?KybDfRl3Oke+AOx|6B+l(ASLJW2');
define('LOGGED_IN_SALT',   'c-aLE]aW SYq|g`2f)&GktiU`#8ws pp)^1UE(<kgk4s6EilBUb^k^puv1-#:%6t');
define('NONCE_SALT',       'i0}6Z3MJ>|R<oYmJ>HDLyKe?;SEaaPu=?vb@RYgP@$>{[|)7t+h09-X<~@Po)A_$');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'commonplace' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '4e4882c2c2f27e6b8ee2845b62006dd0796247f5' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '1708' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 22 );

define( 'WPE_LBMASTER_IP', '50.116.56.23' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'commonplace.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-1708', );

$wpe_special_ips=array ( 0 => '50.116.56.23', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
