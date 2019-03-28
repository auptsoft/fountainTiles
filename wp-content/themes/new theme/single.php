<?php
/**
 * single.php
 *
 * The template for displaying single posts.
 */
?>

<?php get_header(); ?>
<div class="container" style="margin-top:120px">
  <div class="row">
	<div class="col-md-8" role="main" style="margin-top:0px'">
		<?php while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php //comments_template(); ?>
		<?php endwhile; ?>
	</div> <!-- end main-content -->
	<div class="col-md-4 sidebar" >
		<?php get_sidebar(); ?>
	</div>
  </div>
</div>
<?php get_footer(); ?>