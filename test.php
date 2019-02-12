<?php
/*
Plugin Name: Test ajout utilisateur
Description: Il s'agit d'un plugins servant à tester l'ajout de manière programmée un ou plusieurs utilisateurs wordpress
Author: Pako MATHIEU 
Version: 1.0
*/
add_action( 'init', function () {
  
	
	for($i=1;$i<=3;$i++){
		$username = 'user'.$i;
		$password= 'pass'.$i;
		$email_adress = 'webmaster@mydomain.com';
		if ( ! username_exists( $username ) ) {
			wp_create_user( $username, $password, $email_address );
		}
		
	}
	/*$username = 'admin';
	$password = 'password';
	$email_address = 'webmaster@mydomain.com';
	if ( ! username_exists( $username ) ) {
		$user_id = wp_create_user( $username, $password, $email_address );
		$user = new WP_User( $user_id );
		$user->set_role( 'administrator' );
	}*/
	
} );

?>