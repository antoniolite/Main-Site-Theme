<?php
/**
 * Template Name: (DELETE ME) Media Feature
 **/
?>
<?php
get_header(); the_post();

$header_img = wp_get_attachment_url( get_post_meta( $post->ID, 'page_media_img', true ) );
$header_video_mp4 = wp_get_attachment_url( get_post_meta( $post->ID, 'page_media_mp4', true ) );
$header_video_webm = wp_get_attachment_url( get_post_meta( $post->ID, 'page_media_webm', true ) );
$header_video_ogg = wp_get_attachment_url( get_post_meta( $post->ID, 'page_media_ogg', true ) );
$header_content = wptexturize( do_shortcode( get_post_meta( $post->ID, 'page_media_header_content', true ) ) );

$use_video = $header_video_mp4 || $header_video_webm || $header_video_ogg;
$placeholder_attrs = '';

if ( $use_video ) {
	$placeholder_attrs .= $header_video_mp4 ? 'data-mp4="'. $header_video_mp4 .'" ' : '';
	$placeholder_attrs .= $header_video_webm ? 'data-webm="'. $header_video_webm .'" ' : '';
	$placeholder_attrs .= $header_video_ogg ? 'data-ogg="'. $header_video_ogg .'" ' : '';
}
?>

</div> <!-- close .container -->

<div class="container-fullwidth page-media" id="<?php echo $post->post_name; ?>">
	<div class="page-media-header" style="background-image: url('<?php echo $header_img; ?>');">

	<?php if ( $use_video ): ?>
	<div id="header-video-placeholder" <?php echo $placeholder_attrs; ?>></div>
	<?php endif; ?>

	<div class="page-media-container">
		<?php echo $header_content; ?>
	</div>

	</div>
</div>
<div class="page-content" id="contentcol">
	<article role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<?php // the_content(); ?>



<!-- START CONTENT -->


</div></div>
<div class="life-is-good">
	<div class="row">
		<div class="col-md-4">
			<article>
				<p class="lead">Sure, you know about Disney, Universal, and Busch Gardens. But did you know that Central Florida has 100-plus theme parks and attractions? </p>
				<p>There are also miles of beautiful beaches just a short drive away, making this area one of the top vacation destinations in the world. More and more, Central Florida is becoming a Knight nation. It's a great place to live, work and play. Will you be its next permanent resident?</p>
				<div class="md-border-bottom sm-border-bottom xs-border-bottom"></div>
			</article>
			<article class="quick-stats">
				<ul class="list-unstyled text-center">
					<li>
						<span class="quick-stat-number">
							13
						</span>
						<span class="quick-stat-description">
							Miles between UCF and Downtown Orlando
						</span>
					</li>
					<li>
						<span class="quick-stat-number">
							2.1
						</span>
						<span class="quick-stat-description">
							Million people live in greater Orlando
						</span>
						<img src="/wordpress/wp-content/themes/Main-Site-Theme/dev/custom-pages/img/lig-florida.png" class="img-responsive img-center" alt="Florida" />
					</li>
					<li>
						<span class="quick-stat-description">
							It would take
						</span>
						<span class="quick-stat-number">
							67
						</span>
						<span class="quick-stat-description">
							days to visit all of the entertainment offerings in Orlando
						</span>
					</li>
				</ul>
			</article>
		</div>
		<div class="col-md-8">
		<div class="md-border-left">
			<div class="sm-border-bottom xs-border-bottom"></div>
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-9">
					<img src="/wordpress/wp-content/themes/Main-Site-Theme/dev/custom-pages/img/lig-swim.png" class="img-responsive" alt="Swim in more than 2,000 lakes, springs, and rivers" />
					<img src="/wordpress/wp-content/themes/Main-Site-Theme/dev/custom-pages/img/lig-bike.png" class="img-responsive" alt="Hike or bike on 21 fitness trails" />
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<article class="days-of-sun text-center">
						<img src="/wordpress/wp-content/themes/Main-Site-Theme/dev/custom-pages/img/lig-sun.png" class="spin img-responsive img-center" alt="" />
						<span class="days-of-sun-number">
							236
						</span>
						Days of sunshine
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="md-border-bottom sm-border-bottom xs-border-bottom"></div>
					<article>
						<h2>Like it outside?</h2>
						<p>There are miles of trails to hike, lakes to paddle and natural springs to explore. And in less than an hour’s drive, more beautiful beaches and natural springs than you can count.</p>
					</article>
					<div class="md-border-bottom sm-border-bottom xs-border-bottom"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<article class="md-border-right sm-border-right xs-border-right">
						<img src="/wordpress/wp-content/themes/Main-Site-Theme/dev/custom-pages/img/lig-kayak.png" class="img-responsive" alt="Kayak &amp; Paddleboard &amp; Grill &amp; Play Volleyball &amp; on campus at Lake Claire" />
					</article>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<article>
						<img src="/wordpress/wp-content/themes/Main-Site-Theme/dev/custom-pages/img/lig-kayak.png" class="img-responsive" alt="Kayak &amp; Paddleboard &amp; Grill &amp; Play Volleyball &amp; on campus at Lake Claire" />
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="md-border-bottom sm-border-bottom xs-border-bottom"></div>
					<article class="research-park text-center">
						<p><span class="research-park-heading">Central Florida Research Park,</span>
						<span class="research-park-text">adjacent to UCF, is the nation's seventh largest with more than 120 companies and 10,000 employees<span></p>
					</article>
					<div class="md-border-bottom sm-border-bottom xs-border-bottom"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<article>
						<h2>Culture your thing?</h2>
						<p>Our world-class entertainment and arts venues host pop stars, opera singers, Broadway actors and performers of every breed.</p>
					</article>
					<div class="md-border-bottom sm-border-bottom xs-border-bottom"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="md-border-right">
						<article class="concert text-center">
							<span class="concert-head">
								Take in a Concert
							</span>
							<p>At the CFE Arena on Campus, Amway Center, Dr. Phillips Center for the Performing Arts, House of Blues, The Social or Hardrock Live</p>
						</article>

						<div class="md-border-bottom sm-border-bottom"></div>

						<article class="museums text-center">
							<span class="museums-text">
								Visit a variety of
							</span>
							<span class="museums-head">
								Museums for Free
							</span>
							<span class="museums-text">
								With your student ID
							</span>
						</article>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<article class="alumni text-center">
						<span class="alumni-graph">
							<img src="/wordpress/wp-content/themes/Main-Site-Theme/dev/custom-pages/img/lig-alumnipie.png" class="img-responsive img-center" alt="60%" />
						</span>
						<p>Of alumni start careers in Central Florida</p>
					</article>
				</div>
			</div>
		</div>
	</div>
	</div>
<div class="md-border-bottom sm-border-bottom xs-border-bottom"></div>
	<div class="row">


		<div class="col-md-9 col-sm-9 col-xs-12">
			<article>
				<h2>Hungry for more?</h2>
				<p>A thriving culinary scene blends flavors from around the world with options for every budget, from food trucks to fine dining. </p>
			</article>
		</div>

		<div class="col-md-3 col-sm-3 col-xs-12">
			<article class="food text-center md-border-left">
				<img src="/wordpress/wp-content/themes/Main-Site-Theme/dev/custom-pages/img/lig-silverware.png" class="img-responsive img-center" alt="Silverware" />
				<span class="food-text">
					Satisfy your tastebuds at
				</span>
				<span class="food-head">
					5,000
				</span>
				<span class="food-text">
					Restaurants &amp; food trucks
				</span>
				<img src="/wordpress/wp-content/themes/Main-Site-Theme/dev/custom-pages/img/lig-foodtruck.png" class="img-responsive img-center" alt="Food Truck" />
			</article>
		</div>
	</div>
	<div class="md-border-bottom sm-border-bottom xs-border-bottom"></div>
</div>

<!-- END CONTENT -->



					<?php // /*end content*/ ?>
				</div>
			</div>
		</div>
	</article>
</div>

</div>
<div class="container">
	<?php get_footer();?>
