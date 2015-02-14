<?php

define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'local_db_name' );
define( 'DB_USER', 'local_db_user' );
define( 'DB_PASSWORD', 'local_db_password' );

define('AUTH_KEY',         '%~vHGS9$ZBLLpC2rV|G:+e/}kR(6X`0+mo>JB|yw4UqnIA473OcwQ$P].jtd68b:');
define('SECURE_AUTH_KEY',  '@(DU]|LS-)*&Y_h!?.?I2Mq9PT7(]|z{7)gFPXxrCpSH;mp2fAMxt%O<6z#L%^vi');
define('LOGGED_IN_KEY',    'w`!=MHnr:IQ(8 LFZY[DcqSYWXD|!E]Kyt 0<gva]4(j--=4(?Yz+4X{Mz3E:1n$');
define('NONCE_KEY',        'UEuEP,4`uLB&eK?GNHOr|VZ;.uHu&fr~;f&^HKuDXt#xOpt)0gocAN(|JwAwYSed');
define('AUTH_SALT',        'Bq+uOyM),+;uK8&+pb{/e0Y<MC-Y~>.`C&A^l63%RCAvQX2hK]Kqhr9GjX-, >di');
define('SECURE_AUTH_SALT', 'P]rcXY|+4m/K+fxMA+te7,oAt#-C:s_$|RI-eWl;K`caa<wH77 ,O5nzx!.Qkx^B');
define('LOGGED_IN_SALT',   'r]F#&K).Ir)B|MWJkA+64.<({YNL+UQ5Kb7m?XoEmp]>@50}i)<t`dwor$-p+gOL');
define('NONCE_SALT',       '9t4V~Fi[A:lAq>K2OB61;(: 07<;Al.Et6EVH{+v]^7zL?R*d>`Fs>8rpU8Wbl.D');

// =================================================================
// Debug mode
// =================================================================
define( 'SAVEQUERIES', false );
define( 'WP_DEBUG', false );

define( 'WP_SERVER_ENVIRONMENT', "development" );

// global $wpdb; print_r($wpdb->queries);