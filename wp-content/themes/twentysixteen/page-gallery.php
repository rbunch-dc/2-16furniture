<?php get_header(); ?>
<?php 
	$term = $_GET['term']; 
	if(!isset($term)){
		$term = 'red';
	}
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php //echo photo_gallery(1); ?>
		<?php 
			//Red images is an array that we got from our custom plugin that will have a list of all the images that are tagged with X (in this case, red)
			$red_images = get_image_urls_by_taxonomy_term($term); 
			foreach($red_images as $image){
				print '<img src="'.$image.'">';
			}
		?>

	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
