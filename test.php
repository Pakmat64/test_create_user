<?php
/*
Plugin Name: Test ajout utilisateur
Description: Il s'agit d'un plugins servant à tester l'ajout de manière programmée un ou plusieurs utilisateurs wordpress
Author: Pako MATHIEU
Version: 1.0
*/
add_action( 'init', function () {
	//$file   = fetch_feed('http://iparla.iutbayonne.univ-pau.fr/~pmathieu003/exemple_export.xml');
	$xml = simplexml_load_file( 'http://iparla.iutbayonne.univ-pau.fr/~pmathieu003/wordpress/wp-content/plugins/test_create_user/exemple_export.xml' );
	//$xml->xpath('/rss/channel/wp:category');
	//$items = $file->get_items();
 //$xml = XMLReader::open('exemple_export.xml');
  /*
	for($i=1;$i<=3;$i++){
		$username = 'user'.$i;
		$password= 'pass'.$i;
		$email_adress = 'webmaster@mydomain.com';
		if ( ! username_exists( $username ) ) {
			wp_create_user( $username, $password, $email_address );
		}

	*/
	$username = $xml->user[0]->prenom;

	//$username = 'lol';
	$password = 'password';
	//$email_address ='pakmat@live.fr';
	$email_address = $xml->user[0]->courriel ;

	if ( ! username_exists( $username ) ) {
		$user_id = wp_create_user( $username, $password, $email_address );
		$user = new WP_User( $user_id );
		$user->set_role( 'contributor' );
	}

} );
?>
