<?php 
 $current_user = wp_get_current_user();
 echo 'Username: ' . $current_user->user_login . '<br />';
 echo 'User email: ' . $current_user->user_email . '<br />';
 echo 'User first name: ' . $current_user->user_firstname . '<br />';
 echo 'User last name: ' . $current_user->user_lastname . '<br />';
 echo 'User display name: ' . $current_user->display_name . '<br />';
 echo 'User ID: ' . $current_user->ID . '<br />';	
 echo get_avatar( $current_user->user_email, 32 );  // 32 là kích thước ảnh width: 32px; height:32px;	
?>

wp_logout(); //Hàm đăng xuất chèn vào thẻ href
