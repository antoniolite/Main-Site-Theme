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

<script>

$(function() {

	// var blurBackground = function(){
	// 	$('.page-media-header').addClass('blur');
	// };

	// setTimeout(blurBackground, 100);


	// setTimeout(function() {
	// 	$('.academics-search-box').addClass('move');
	// }, 200);
	// setTimeout(function() {
	// 	$('.academics-colleges-box').addClass('move');
	// }, 500);

	// var blurBackground = function(){
	// 	$('.page-media-header').addClass('blur');
	// };


	$('#header-nav-wrap').addClass('light');
	$('.page-media-header').addClass('blur');
	$('.fade-in').each(function(index) {
		$(this).css({
			opacity: 1,
			transform: 'translateY(0)'
		});
	});

	// var time = 500;
	// $('.fade-in').each(function(index) {
	// 	$this = $(this);
	// 	setTimeout(function() {
	// 		console.log('fade-in');
	// 		console.log($this);

	// 		$this.css({
	// 			opacity: 1,
	// 			transform: 'translateY(5px)'
	// 		});
	// 	}, time * index);
	// });

	// setTimeout(function() {
	// 	console.log('hello');
	// 	$('.academics-intro').css({
	// 			opacity: 1,
 //  			transform: 'translateY(5px)' });
	// }, 500);

});


</script>

</div> <!-- close .container -->

<div class="container-fullwidth page-media academics" id="<?php echo $post->post_name; ?>">
	<div class="page-media-header" style="background-image: url('<?php echo $header_img; ?>');">
	</div>
	<div class="page-media-container">
		<!-- <?php echo $header_content; ?> -->
		<div class="container-fluid top-search">
			<div class="col-md-10 academics-intro fade-in">
				<p>Whatever your passion, we’ve got the program to get you going in the right direction.</p>
			</div>
			<div class="col-md-12 academics-box academics-search-box fade-in">
				<span class="title">Find the program for you</span>
				<span class="fa fa-search icon"></span>
				<input class="academics-search-icon" type="text" placeholder="Search for degree programs by name or area of interest" />
			</div>
			<div class="col-md-12 academics-box academics-colleges-box fade-in">
				<span class="title">Explore all 13 colleges at UCF</span>
				<span class="fa fa-chevron-down icon"></span>
				<a href="#expand"></a>
				<div class="college-dropdown-content">
					<ul class="college-list first">
						<li><a href="#arts">Arts &amp; Humanities</a></li>
						<li><a href="#business">Burnett Honors College</a></li>
						<li><a href="#arts">Business Administration</a></li>
						<li><a href="#business">Education &amp; Human Performance</a></li>
						<li><a href="#arts">Engineering &amp; Computer Science</a></li>
					</ul>
					<ul class="college-list second">
						<li><a href="#arts">Arts &amp; Humanities</a></li>
						<li><a href="#business">Burnett Honors College</a></li>
						<li><a href="#arts">Business Administration</a></li>
						<li><a href="#business">Education &amp; Human Performance</a></li>
						<li><a href="#arts">Engineering &amp; Computer Science</a></li>
					</ul>
					<ul class="college-list third">
						<li><a href="#arts">Arts &amp; Humanities</a></li>
						<li><a href="#business">Burnett Honors College</a></li>
						<li><a href="#arts">Business Administration</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="academics-content page-content" id="contentcol">
	<article role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h2 class="section-title">Colleges at UCF</h2>
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row college">
				<div class="col-md-4">
					<h3 id="arts">Arts &amp; Humanities</h3>
					<ul>
						<li>Visit <a href="#">art.ucf.edu</a></li>
						<li><a href="#">See College Departments</a></li>
						<li><a href="#">View Degree Programs</a></li>
					</ul>
				</div>
				<div class="col-md-8 description">
					<img src="http://wwwdev.smca.ucf.edu/wp-content/uploads/2016/03/burnett-small.png" alt="" />
					<p>From literature to philosophy to digital media, our faculty members hone their creative skills and enjoy an environment for artistic expression of every kind. We empower faculty to explore their creative interests in everything from music, performing arts, history, women’s studies and more. With 17 departments, as well as new facilities such as our Performing Arts Center, the college embodies forward-thinking teaching and research in arts and humanities.</p>
				</div>
			</div>
			<div class="row college">
				<div class="col-md-4">
					<h3 id="business">Buisiness Admin</h3>
					<ul>
						<li>Visit <a href="#">art.ucf.edu</a></li>
						<li><a href="#">See College Departments</a></li>
						<li><a href="#">View Degree Programs</a></li>
					</ul>
				</div>
				<div class="col-md-8 description">
					<img src="http://wwwdev.smca.ucf.edu/wp-content/uploads/2016/03/ucf-seal-2-small.png" alt="" />
					<p>From literature to philosophy to digital media, our faculty members hone their creative skills and enjoy an environment for artistic expression of every kind. We empower faculty to explore their creative interests in everything from music, performing arts, history, women’s studies and more. With 17 departments, as well as new facilities such as our Performing Arts Center, the college embodies forward-thinking teaching and research in arts and humanities.</p>
				</div>
			</div>
			<div class="row college">
				<div class="col-md-4">
					<h3 id="arts">Arts &amp; Humanities</h3>
					<ul>
						<li>Visit <a href="#">art.ucf.edu</a></li>
						<li><a href="#">See College Departments</a></li>
						<li><a href="#">View Degree Programs</a></li>
					</ul>
				</div>
				<div class="col-md-8 description">
					<img src="http://wwwdev.smca.ucf.edu/wp-content/uploads/2016/03/burnett-small.png" alt="" />
					<p>From literature to philosophy to digital media, our faculty members hone their creative skills and enjoy an environment for artistic expression of every kind. We empower faculty to explore their creative interests in everything from music, performing arts, history, women’s studies and more. With 17 departments, as well as new facilities such as our Performing Arts Center, the college embodies forward-thinking teaching and research in arts and humanities.</p>
				</div>
			</div>
			<div class="row college">
				<div class="col-md-4">
					<h3 id="business">Buisiness Admin</h3>
					<ul>
						<li>Visit <a href="#">art.ucf.edu</a></li>
						<li><a href="#">See College Departments</a></li>
						<li><a href="#">View Degree Programs</a></li>
					</ul>
				</div>
				<div class="col-md-8 description">
					<img src="http://wwwdev.smca.ucf.edu/wp-content/uploads/2016/03/ucf-seal-2-small.png" alt="" />
					<p>From literature to philosophy to digital media, our faculty members hone their creative skills and enjoy an environment for artistic expression of every kind. We empower faculty to explore their creative interests in everything from music, performing arts, history, women’s studies and more. With 17 departments, as well as new facilities such as our Performing Arts Center, the college embodies forward-thinking teaching and research in arts and humanities.</p>
				</div>
			</div>
		</div>


	</article>
</div>

</div>
<div class="container">
	<?php get_footer();?>
