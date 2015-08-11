<div class="clear"></div>

<div id="footer">
	<div id="foot-1">
		<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
			<?php dynamic_sidebar( 'footer-left' ); ?>
		<?php endif; ?>
	</div><!-- #foot-1 -->
	
	<div id="foot-right">
		<div id="foot-2">
			<?php if ( is_active_sidebar( 'footer-center' ) ) : ?>
				<?php dynamic_sidebar( 'footer-center' ); ?>
			<?php endif; ?>
		</div><!-- #foot-2 -->
		
		<div id="foot-3">
			<?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
				<?php dynamic_sidebar( 'footer-right' ); ?>
			<?php endif; ?>
		</div><!-- #foot-3 -->
		<div class="clear"></div>
	</div><!-- #foot-right -->
	<div class="clear"></div>
</div><!-- #footer -->

<div id="footer-credit">
<hr>
	<a href="<?php echo esc_url( 'http://wbxpress.net/' ); ?>">WBXPress One Theme</a></a>
</div><!-- #footer-credit -->

</div><!-- #container -->
<?php wp_footer(); ?>
</body>
</html>
