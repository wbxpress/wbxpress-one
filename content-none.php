<div>
	<h2><?php _e( 'Nothing Found', 'wbxpress-one' ); ?></h2>
	<?php if ( is_search() ): ?>
		<p><?php _e( 'Sorry, but nothing matched your search terms.', 'wbxpress-one' ); ?></p>
	<?php else: ?>
		<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'wbxpress-one' ); ?></p>
	<?php endif; ?>
	<?php get_search_form(); ?>
</div>
<div class="clear post-spt"></div>
