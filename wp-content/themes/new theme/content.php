<?php 
/**
 * content.php
 *
 * The default template for displaying content.
 */
?>

<div id="post-<?php the_ID(); ?>"  class="main-content">
	<!-- Article header -->
	<header class="entry-header"> <?php
		// If the post has a thumbnail and it's not password protected
		// then display the thumbnail
		if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			 <?php // the_post_thumbnail("img-b img-fluid"); ?>
			 <div class="img-box-b">
               	<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="" class="img-b img-fluid">
            </div>
		<?php endif;

		// If single page, display the title
		// Else, we display the title in a link
		if ( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
		<?php else : ?>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php endif; ?>

		<p class="entry-meta">
			<?php 
				// Display the meta information
				//alpha_post_meta();
			?>
		</p>
	</header> <!-- end entry-header -->

	<!-- Article content -->
	<div class="entry-content">
		<?php
			if ( is_search() ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading &rarr;', 'alpha' ) );

				wp_link_pages();
			}
		?>
	</div> <!-- end entry-content -->

	
		</div>