<?php
/**
* Plugin Name: furniture controller
* Description: This is the custom controller for the furniture site. It includes Stripe integration
* Version: 1.0.
* Author: Robert Bunch
*/

// apply tags to attachments
function add_tags_to_attachments() {
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}
add_action( 'init' , 'add_tags_to_attachments' );

function get_image_urls_by_taxonomy_term($term){
	global $wpdb;

	if($term == 'all'){
		$query = "SELECT posts.guid FROM wp_terms terms
				INNER JOIN wp_term_relationships rel ON rel.term_taxonomy_id = terms.term_id 
				INNER JOIN wp_posts posts ON rel.object_id = posts.ID";
	}else{

		$query = "SELECT posts.guid FROM wp_terms terms
				INNER JOIN wp_term_relationships rel ON rel.term_taxonomy_id = terms.term_id 
				INNER JOIN wp_posts posts ON rel.object_id = posts.ID
				WHERE terms.name = '" . $term . "'";
	}

	$result = $wpdb->get_results($query);

	$images = array();
	foreach($result as $row){
		$images[] = $row->guid;
	}

	return $images;

}

function stripe_checkout(){

	require_once('inc/config.php');

	$stripe_form = '
		<form action="/wp-content/plugins/furniture_controller/inc/charge.php" method="post">
			<label>Ammount to pay</label>
			<input type="text" placeholder="Amount to Pay" name="amount">
  			<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          		data-key="'.$stripe['publishable_key'].'"
          		data-description="Access for a year"
          		data-amount=""
          		data-locale="auto"></script>
		</form>';

	print $stripe_form;

}


function say_hello_world(){
	return "Hello, world";
}

function all_urls_from_tags_query($term, $size='thumbnail') {
	$args = array(
		'post_type' => 'attachment',
		/* 'post_mime_type' => 'image', */
		'post_status' => 'inherit',
		'tax_query' => array(
				array(
					'taxonomy' => 'media_tag',
					'terms' => $term,
					'field' => 'slug',
				)
			)
	);

	$loop = new WP_Query($args);

	while ( $loop->have_posts() ) : $loop->the_post();
		$image = wp_get_attachment_image('', $size, false);
		$url = wp_get_attachment_url();
		$output[] = $url;
	endwhile;
	//if ($output) return join($output);
	if ($output) return $output;
	// Reset Post Data
	wp_reset_postdata();
}
