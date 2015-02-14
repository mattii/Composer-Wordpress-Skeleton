<?php

// ========================================================
// Set number of post-revisions.	
// ========================================================

define( 'WP_POST_REVISIONS', 10 );

// ========================================================
// SECURITY: disallow to edit plugins/themes in the
// dashboard
// ========================================================

define( 'DISALLOW_FILE_EDIT', true );

// =================================================
// Define HOME and SITEURL
// =================================================
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/site/core');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '/');


// =================================================
// Custom Content Directory (change if renamed)
// =================================================
define('WP_CONTENT_URL', 'http://'.$_SERVER['SERVER_NAME'].'/site/content');
define('WP_CONTENT_DIR', __DIR__.'/content');
define('WP_ROOT', __DIR__."/core");

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// These are a fallback, re-define them in your wp-config.env.php's!
// ==============================================================
define('AUTH_KEY',         'HPr}_yFu((* w]Y-s*LAT1-KU5ITngu9@{a*a=-tLh`cP4OK90 6v?/:J^N.d*Am');
define('SECURE_AUTH_KEY',  'r9]_#hShbfNg,(}!*>ghSQC0!; C)DF++e9=Ui$,,hm2|h$tt&uF!^wGwDUpAv-y');
define('LOGGED_IN_KEY',    'p$B|vaXs36U}iA?6-PuZkiMR1+1CWif+7jc0W2|>OMt:X>,)`0;nONQ>SL!_lk*E');
define('NONCE_KEY',        'lT;@DN#DAJZ-GK_|x@Sy:HP&:C64_i-ZB-.IfLR,>&aGP|&}pf%X(q(&#5r*+]ob');
define('AUTH_SALT',        '+a1Hba+/(&r-av~<Br>&Ty@}[]kXhNRjC@UZK>?dl8Rw!$bETgy&IMXv!S7Ga%bE');
define('SECURE_AUTH_SALT', '~~VJk| o&yUpsku?|%En/$ZpiU*dc y|1qx-u:i`vGKih0WcUyLtP=PrZ:S|M{Rh');
define('LOGGED_IN_SALT',   'm-d8$lCVPmvr&t%LY>jO?%6jyf+!Z>Y8-uK+@(%$Hioxln1D-V<1a<LB-IH?!Y_3');
define('NONCE_SALT',       '842]Q`d4;$kzebwwy6=+d?k=2:Il-gyQVC!D[Lj2%{)*&dWx[az0$:;O<T;B9quF');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_klrk_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', 'de_DE' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', true );

// ================================================================================
// Load environment dependant data (database info and local development parameters)
// ================================================================================

include( dirname( __FILE__ ) . "/wp-config.env.php" );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
define( 'ABSPATH', dirname( __FILE__ ) . '/core/' );
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
