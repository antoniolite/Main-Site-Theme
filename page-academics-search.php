<?php
get_header(); the_post();

$header_img = wp_get_attachment_url( get_post_meta( $post->ID, 'page_media_img', true ) );
$header_content = wptexturize( do_shortcode( get_post_meta( $post->ID, 'page_media_header_content', true ) ) );
?>

</div> <!-- close .container -->

<div class="container-fullwidth page-media academics" id="<?php echo $post->post_name; ?>">
	<div class="page-media-header" style="background-image: url('<?php echo $header_img; ?>');">
	</div>
	<div class="page-media-container">
		<!-- <?php echo $header_content; ?> -->
		<div class="container-fluid top-search">
			<div class="col-md-12">
				<h1 id="page-title">Undergraduate and Academic Degrees</h1>
			</div>
		</div>

		<div class="container-fluid top-search">
			<div class="col-md-10 academics-intro fade-in">
				<p>UCF offers 210 Bachelor’s Degrees, Master’s Degrees, PhDs and more. Whatever your passion, we’ve got the program to get you going in the right direction.</p>
			</div>
			<div class="col-md-8 academics-box academics-search-box fade-in">
				<span class="title">Find Your Degree:</span>
				<span class="fa fa-search icon"></span>
				<input class="academics-search-icon" type="text" placeholder="Search for degree programs by name or area of interest" />
			</div>
<!-- 			<div class="academics-colleges-box-container">
				<div class="col-md-12 academics-box academics-colleges-box fade-in">
					<span class="title">Explore all 13 colleges at UCF</span>
					<span class="fa fa-chevron-down icon"></span>
					<a href="#expand"></a>
				</div>
				<div class="col-md-12 college-dropdown-content">
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
			</div> -->
		</div>

	</div>
</div>
<div class="academics-content page-content" id="contentcol">
	<article role="main">
		<div class="container main-content-container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h2 class="section-title">Colleges at UCF</h2>
						<?php the_content(); ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row college">
				<div class="col-md-4 col-sm-3 col-xs-12">
					<h3 id="arts">Arts &amp; Humanities</h3>
					<ul class="college-info">
						<li>Visit <a href="#">art.ucf.edu</a></li>
						<li><a href="#">See College Departments</a></li>
					</ul>
					<h4 class="buttons-heading">Degree Programs</h4>
					<ul class="program-info-list">
						<li><a class="btn count-button" href="#" role="button"><span class="count">25</span> Bachelor's Degrees</a></li>
						<li><a class="btn count-button" href="#" role="button"><span class="count">5</span> Graduate Programs</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-sm-9 col-xs-12 description">
					<img src="http://wwwdev.smca.ucf.edu/wp-content/uploads/2016/03/ucf_seal_strip.jpg" class="img-responsive" alt="" />
					<p>From literature to philosophy to digital media, our faculty members hone their creative skills and enjoy an environment for artistic expression of every kind. We empower faculty to explore their creative interests in everything from music, performing arts, history, women’s studies and more. With 17 departments, as well as new facilities such as our Performing Arts Center, the college embodies forward-thinking teaching and research in arts and humanities.</p>
				</div>
			</div>
			<div class="row college">
				<div class="col-md-4 col-sm-3 col-xs-12">
					<h3 id="business">Burnett Honors College</h3>
					<ul class="college-info">
						<li>Visit <a href="#">honors.ucf.edu</a></li>
						<li><a href="#">See College Departments</a></li>
					</ul>
					<h4 class="buttons-heading">Degree Programs</h4>
					<ul class="program-info-list">
						<li><a class="btn count-button" href="#" role="button"><span class="count">22</span> Bachelor's Degrees</a></li>
						<li><a class="btn count-button" href="#" role="button"><span class="count">6</span> Graduate Programs</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-sm-9 col-xs-12 description">
					<img src="http://wwwdev.smca.ucf.edu/wp-content/uploads/2016/03/burnett_logo_strip.jpg" class="img-responsive" alt="" />
					<p>Students enjoy the intimacy of a small liberal arts college along with the benefits of a large metropolitan research university. Here, faculty teach in interdisciplinary groups and smaller classes, allowing for more discussion and greater interaction. The college is open to students of all disciplines, and admission is competitive. Our Fall 2015 freshman class boasted an average SAT two-score of 1400 and an average high school grade point average of 4.4.</p>
				</div>
			</div>
			<div class="row college">
				<div class="col-md-4 col-sm-3 col-xs-12">
					<h3 id="arts">Business Administration</h3>
					<ul class="college-info">
						<li>Visit <a href="#">business.ucf.edu</a></li>
						<li><a href="#">See College Departments</a></li>
					</ul>
					<h4 class="buttons-heading">Degree Programs</h4>
					<ul class="program-info-list">
						<li><a class="btn count-button" href="#" role="button"><span class="count">18</span> Bachelor's Degrees</a></li>
						<li><a class="btn count-button" href="#" role="button"><span class="count">3</span> Graduate Programs</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-sm-9 col-xs-12 description">
					<img src="http://wwwdev.smca.ucf.edu/wp-content/uploads/2016/03/ucf_seal_strip.jpg" class="img-responsive" alt="" />
					<p>The college is one of the nation’s largest accredited schools of business and home to the DeVos Sport Business Management program, the Kenneth G. Dixon School of Accounting, the Dr. P. Phillips School of Real Estate and the Institute for Economic Competitiveness. The college is involved in helping entrepreneurs and small businesses succeed, and encourages faculty to take part in numerous opportunities to enhance their teaching and research beyond the classroom.</p>
				</div>
			</div>
			<div class="row college">
				<div class="col-md-4 col-sm-3 col-xs-12">
					<h3 id="business">Education &amp; Human Performance</h3>
					<ul class="college-info">
						<li>Visit <a href="#">education.ucf.edu</a></li>
						<li><a href="#">See College Departments</a></li>
					</ul>
					<h4 class="buttons-heading">Degree Programs</h4>
					<ul class="program-info-list">
						<li><a class="btn count-button" href="#" role="button"><span class="count">23</span> Bachelor's Degrees</a></li>
						<li><a class="btn count-button" href="#" role="button"><span class="count">15</span> Graduate Programs</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-sm-9 col-xs-12 description">
					<img src="http://wwwdev.smca.ucf.edu/wp-content/uploads/2016/03/burnett_logo_strip.jpg" class="img-responsive" alt="" />
					<p>Instructing future educators to teach creatively, passionately and exceptionally is what the college is all about. Home to the UCF Teaching Academy, the Toni Jennings Exceptional Education Institute and the Morgridge International Reading Center, the college leverages partnerships with local schools to provide real-world experience that gives our students a competitive edge in the job market after graduation.</p>
				</div>
			</div>
		</div>
	</article>
</div>

</div>
<div class="container">
	<?php get_footer();?>
