<?php
/**
 * The sidebar containing the footer widget area.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .widget-area -->
<?php endif; ?>