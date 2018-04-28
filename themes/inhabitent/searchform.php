<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="search-bar-nav">
		<a class="search-toggle" aria-hidden="true">
			<i class="fa fa-search"></i>
		</a>
		<label id="search-box">
			<input type="search" id="search-field" class="search-field" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>		
		<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	</div>
</form>
