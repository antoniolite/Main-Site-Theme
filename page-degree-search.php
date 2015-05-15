<?php
if (isset($_GET['json'])) :
	$to_json = get_hiearchical_degree_search_data_json();
	header('Content-Type:application/json');
	echo json_encode($to_json);
else :
get_header(); the_post(); ?>

	<?php
		// Available filters + filter values
		$filters = get_degree_search_filters();

		// Fetch data based on default params + anything set by the user.
		// Set default parameters for when no GET params are available (default
		// view).
		if ( empty( $_GET ) ) {
			$params = degree_search_params_or_fallback( unserialize( DEGREE_SEARCH_DEFAULT_PARAMS ) );
		}
		else {
			$params = degree_search_params_or_fallback( $_GET );
		}

		$data = get_degree_search_contents( true, $params );
	?>

	<script>
		var searchSuggestions = <?php echo json_encode( get_degree_search_suggestions() ); ?>;
	</script>

	<div class="row page-content" id="academics-search">

		<form method="GET" id="academics-search-form" action="<?php echo get_permalink( $post->ID ); ?>" data-ajax-url="<?php echo admin_url( 'admin-ajax.php' ); ?>">

			<div class="span12" id="page_title">
				<h1 class="span9"><?php the_title();?></h1>
				<?php esi_include('output_weather_data','span3'); ?>
			</div>

			<div class="span12" id="degree-search-top">

				<?php the_content(); ?>

				<noscript>
					<div class="alert alert-error">
						<strong>Heads up:</strong> This page requires JavaScript to be enabled to work properly.  Please re-enable JavaScript in your browser and reload the page.
					</div>
				</noscript>

				<!-- Search input -->

				<fieldset class="degree-search-form" role="search">
					<legend class="sr-only">Search</legend>
					<div class="degree-search-form-inner">
						<label for="search-query" class="sr-only">Search for a degree program</label>
						<input id="search-query" type="text" autocomplete="off" data-provide="typeahead" name="search-query" class="span9 search-field" placeholder="Enter a program name or keywords, like 'Aerospace Engineering' or 'Psychology'" value="<?php if ( isset( $params['search-query'] ) ) { echo htmlspecialchars( urldecode( $params['search-query'] ) ); } ?>">
						<button class="btn btn-link" type="submit">Search</button>
					</div>
				</fieldset>

				<!-- Search Result Header -->

				<div class="degree-search-sort clearfix">
					<h2 class="degree-search-sort-inner degree-result-count">
						<?php echo get_degree_search_result_phrase( $data['count'], $params ); ?>
					</h2>

					<div class="degree-search-sort-inner degree-search-sort-options hidden-phone">
						<fieldset>
							<legend class="sr-only">Sort Results</legend>
							<strong class="degree-search-sort-label radio inline">Sort by:</strong>
							<label class="radio inline">
								<input type="radio" name="sort-by" class="sort-by" value="title" <?php if ( $params['sort-by'] == 'title') { echo 'checked'; } ?>> <span class="sr-only">Sort by </span>Name
							</label>
							<label class="radio inline">
								<input type="radio" name="sort-by" class="sort-by" value="degree_hours" <?php if ( $params['sort-by'] == 'degree_hours' ) { echo 'checked'; } ?>> <span class="sr-only">Sort by </span>Credit Hours
							</label>
						</fieldset>
					</div>

					<div class="degree-search-sort-inner degree-search-sort-options btn-group visible-phone">
						<a class="btn" id="mobile-filter" href="#">Filter <span class="caret"></span></a>
					</div>
				</div>
			</div>

			<!-- Main content col -->

			<div class="span9 pull-right" id="degree-search-content">
				<article role="main">

					<!-- Search Results -->

					<div class="degree-search-results-container">
						<?php echo $data['markup']; ?>
						<div id="ajax-loading" class="hidden"></div>
					</div>

					<!-- Page Bottom -->

					<div class="degree-search-again-container">
						<?php echo get_degree_search_search_again( $filters, $params ); ?>
					</div>

					<hr>

					<p class="more-details">
						For more details and the complete undergraduate catalog, visit: <a href="<?php echo UNDERGRAD_CATALOG_URL; ?>" class="ga-event" data-ga-action="Undergraduate Catalog link" data-ga-label="<?=addslashes(the_title())?> (footer)"><?php echo UNDERGRAD_CATALOG_URL; ?></a>.
					</p>
					<p class="more-details">
						For graduate programs and courses, visit: <a href="<?php echo GRAD_CATALOG_URL; ?>" class="ga-event" data-ga-action="Undergraduate Catalog link" data-ga-label="<?=addslashes(the_title())?> (footer)"><?php echo GRAD_CATALOG_URL; ?></a>.
					</p>

				</article>
			</div>

			<!-- Sidebar (Desktop only) -->

			<div id="degree-search-sidebar" class="span3 pull-left">
				<fieldset>
					<legend class="sr-only">Filter Results</legend>

					<div class="visible-phone clearfix degree-mobile-actions">
						<a class="btn btn-default pull-left" id="mobile-filter-reset">Reset All</a>
						<a class="btn btn-primary pull-right" id="mobile-filter-done" href="#">Done</a>
					</div>
					<div class="degree-search-sort visible-phone clearfix">
						<label for="sort-by" class="degree-search-sort-label degree-filter-title pull-left">Sort By</label>
						<select id="sort-by" class="pull-right">
							<option value="degree-name" <?php if ( $sort_by == 'degree-name' ) { echo 'selected'; } ?>>Name</option>
							<option value="credit-hours" <?php if ( $sort_by == 'credit-hours' ) { echo 'selected'; } ?>>Credit Hours</option>
						</select>
					</div>

					<?php foreach ( $filters as $key=>$filter ): ?>
					<h2 class="degree-filter-title"><?php echo $filter['name']; ?></h2>
					<ul class="degree-filter-list">
						<?php foreach ( $filter['terms'] as $term ): ?>
							<?php if ( $term->count > 0 ): ?>
							<li class="checkbox">
								<label>
									<input name="<?php echo $key; ?>[]" class="<?php echo $key; ?>" value="<?php echo $term->slug; ?>" type="checkbox" <?php if ( isset( $params[$key] ) && in_array( $term->slug, $params[$key] ) ) { ?>checked<?php } ?>>
									<a href="<?php echo get_permalink(); ?>?<?php echo http_build_query( array( $key . '[]' => $term->slug ) ); ?>" class="seo-li" tabindex="-1">
										<span><?php if ( isset( $term->alias ) ) { echo $term->alias; } else { echo $term->name; } ?></span>
										<small class="filter-result-count <?php echo $term->slug; ?>">(<?php echo $term->count; ?>)</small>
									</a>
								</label>
							</li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
					<?php endforeach; ?>
				</fieldset>
			</div>

		</form>

	</div>

<?php get_footer(); endif;?>
