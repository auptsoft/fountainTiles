<?php 
/**
 * page.php
 *
 * The template for displaying all pages.
 */
?>

<?php get_header(); ?>
<?php while( have_posts() ) : the_post(); ?>

<?php
					// If the post has a thumbnail and it's not password protected
					// then display the thumbnail
	if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						
		<div class="page-bg" style=" background-image:url( '<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');  " >
		    <div class="page-bg-overlay">
				<h1 style="text-align:center; font-size:60px; padding-top: 180px; color:white"><?php the_title()?></h1>
				</div>
        </div>
<?php else: ?>
<div class="page-bg-overlay">
				<h1 class="page-title"><?php the_title()?></h1>
				</div>
<?php endif; ?>

<div class="container">
  <div class="row">
	<div class=" col-md-8  " style="margin-top:0px" role="main">		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- Article header -->
				<header class="entry-header">
				</header> <!-- end entry-header -->

				<!-- Article content -->
				<div class="main-content" >
					<?php the_content(); ?>

					<?php wp_link_pages(); ?>
				</div> <!-- end entry-content -->

				<!-- Article footer -->
				<!--<footer class="entry-footer">
					<?php 
						/*if ( is_user_logged_in() ) {
							echo '<p>';
							edit_post_link( __( 'Edit', 'alpha' ), '<span class="meta-edit">', '</span>' );
							echo '</p>'; 
						} */
					?>
				</footer> <!-- end entry-footer -->
			</article>

			<?php comments_template(); ?>
		
	</div> <!-- end main-content -->
	<div class="col-md-4 sidebar" >
		<?php get_sidebar(); ?>
	</div>
  </div>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>