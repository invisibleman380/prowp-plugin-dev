</<?php
// If uninstall/ delete not called from WordPress then exit
if ( ! defined( 'ABSPATH' ) && ! defined( 'WP_UNINSTALL_PLUGIN' ) )
  exit ();

// Delete options array from options table
delete_option('halloween_options' );
 ?>
