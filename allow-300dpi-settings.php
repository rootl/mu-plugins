<?php

/******************************************************************************************************************
 
Plugin Name: WP Pressbooks Allow Prince 300dpi Images

Plugin URI: 

Description: Allow Pressbooks Prince to export 300dpi Images

License: Free Distribution. 
            
*******************************************************************************************************************/

add_filter( 'pb_pdf_css_override', function( $scss ) {
  $scss .= '$prince-image-resolution: 300dpi;' . "\n" . 'img { prince-image-resolution: 300dpi; }';
  return $scss;
} );

?>
