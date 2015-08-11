<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_single() || is_page() ) {
		the_title( '<h2>', '</h2>' );
	} else {
		the_title( sprintf( '<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
	}
	?>
	<?php if ( ! is_page() ): ?>
		<div class="post-meta">
			<?php
			$categories_list = get_the_category_list( __( ', ', 'wbxpress-one' ) );
			if ( $categories_list ) {
				printf( __( 'Posted in %s - ', 'wbxpress-one' ), $categories_list );
			}
			echo '<a href="' . esc_url( get_permalink() ) . '">' . get_the_date() . '</a> - ';
			comments_number( __( '0 Comment', 'wbxpress-one' ), __( '1 Comment', 'wbxpress-one' ), __( '% Comments', 'wbxpress-one' ) );
			?>
		</div>
	<?php endif; ?>
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );
	}
	the_content( __( 'Read more', 'wbxpress-one' ) );
	
	$tag_list = get_the_tag_list( '', __( ', ', 'wbxpress-one' ) );
	if ( $tag_list ) {
		printf( '<div>%s<span>%s</span></div>', __( 'Tags : ', 'wbxpress-one' ), $tag_list );
	}
	
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'wbxpress-one' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'wbxpress-one' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
	?>
</div><!-- #post-### -->
<div class="clear post-spt"></div>
