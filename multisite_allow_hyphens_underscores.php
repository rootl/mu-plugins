<?php

/******************************************************************************************************************
 
Plugin Name: WP Multisite Allow Hyphens and Underscores Override Admin 

Plugin URI: 

Description: WordPress plugin for allowing hyphens and underscores in blog names
Version: 1.0

License: Free Distribution. Based on https://wordpress.org/support/topic/allow-hyphens-in-site-url?replies=5
            
*******************************************************************************************************************/
           
function pb_allow_blognames_with_hyphens_underscores($result){
$error_name = $result['errors']->get_error_message('blogname');
if (!empty($error_name) && $error_name == __('Site names can only contain lowercase letters (a-z) and numbers.') || $error_name == __('Sorry, site names must have letters too!') && preg_match('/[^-_a-z0-9]+/', $result['blogname'])) 
{
unset ($result['errors']->errors['blogname']);
return $result;
}
return $result;
}
add_filter('wpmu_validate_blog_signup', 'pb_allow_blognames_with_hyphens_underscores'); 
?>
