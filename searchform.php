<?php
/**
 * The template for displaying search forms in Minileven
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="form-group">
			<label for="s" class="sr-only sr-only-focusable">Search</label>
			<input type="text" class="form-control" name="s" id="s" placeholder="search for..." />
		</div>
		<button type="submit" class="submit btn btn-default" name="submit" id="searchsubmit"/>Search</button>
	</form>
