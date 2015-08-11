<?php get_header(); ?>
<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>
	<?php
	the_posts_pagination( array(
		'prev_text'          => __( 'Previous', 'wbxpress-one' ),
		'next_text'          => __( 'Next', 'wbxpress-one' ),
		'before_page_number' => '',
	) );
	//wbxpressone_the_posts_pagination();
	?>	
<?php else: ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
