


<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php echo do_shortcode("[huge_it_slider id='1']"); ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php stripe_checkout(); ?>


<?php 
	$class = encode_json(say_hello_world()); 
?>

<script type="text/javascript">
	var class = <?php print $class; ?>;
</script>



<?php //get_sidebar(); ?>
<?php get_footer(); ?>
