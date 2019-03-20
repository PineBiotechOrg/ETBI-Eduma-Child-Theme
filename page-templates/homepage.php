<?php
/**
 * Template Name: Homepage
 *
 **/

get_header();

/** Add any logic for specialization pages. This is solution 2 for previews**/
$current_user = wp_get_current_user();
$current_user->membership_level = pmpro_getMembershipLevelForUser($current_user->ID);
$currentusermembershiplvl = $current_user->membership_level;
$currentusermembershipname = $currentusermembershiplvl->name;

//if membership is free or no subscription, limit to preview. Else everythi
if ($currentusermembershipname == "Specialization" || $currentusermembershipname == "Unlimited"){
    $style = '<style> li.subscribe{ display: none} </style>';
    echo $style;
}

//echo do_shortcode('[rev_slider alias="home-one-course"]');

?>
	<div class="container-fluid">

			<div class="video-container row ">
				<div class="hero-video-info">
					<div class="hero-video-info-container">

						<h3 class="etbi-subheader   tp-resizeme">BIOMEDICAL DATA SCIENCE TRAINING </h3>
						<h1 class="etbi-header">FOR EVERYONE </h1>
						<div class="etbi-caption">
							Data Analytics skills are essential for biologists and are at the core of scientific discovery. In fact, biology is evolving into a data science and for those uncomfortable with computational analytics, mathematics and statistics, getting started can be a significant challenge. We are here to change that. Learn at your own pace or join a program today. 
						</div>
						<a class="etbi-action-btn tp-caption rev-btn button rs-hover-ready thim-slider-button" href="/lp-courses/" target="_self" id="slide-1-layer-5">GET STARTED </a>

						<div class="arrow bounce">
							<a class="fa fa-chevron-down" href="#"></a>
						</div>
						
					</div>
				</div>
		      <video autoplay loop muted playsinline class="video-bg lazy" id="video-bg" poster="https://edu.t-bio.info/wp-content/uploads/2018/05/sddefault.jpg"> <!--this id is only used for the toggle function; can be removed if you don't need an event -->
		        <!-- whatever video you put here will be (effectively) cropped to fit container size; make sure you're okay with it shrinking to the top left corner of the video at your specified minimum dimensions -->
		            <source data-src="https://edu.t-bio.info/wp-content/uploads/2018/05/selected-final.mp4" type="video/mp4" alt="Bioinformatics training for everyone">
		          </video>
		    </div>
	</div>


	<div id="main-home-content" class="home-content home-page container" role="main">
		<div class="row" style="margin-bottom: 3em;">
			<div class="col col-lg-6 col-md-6 col-sm-12">

				<div class="thim-widget-heading thim-widget-heading-base">
					<div class="sc_heading   text-left">
						<h3 style="color:#333333;" class="title">Biology as a DATA SCIENCE </h3>

						<p class="sub-heading" style="color:#999999;">Enhance your understanding of Biology by Analyzing Data</p>
					</div>
				</div>

				<p>We believe Biology should be taught and learned as a <em>data science</em>. In our age of data, wet lab experiments are designed for data collection and analysis. Biomedical and Biotech applications rely on precise data. And data analysis can be learned completely online. Moreover, thousands of datasets are readily available! That's why we hold regular workshops and webinars that you can join in person at one of our partner locations or online. In these sessions, we discuss various aspects of data science applied to biomedical topics and datasets. To join one of the upcoming events or webinars, visit our "<a href="https://edu.t-bio.info/events/">events</a>" page. For regular updates on events, workshops and new courses, just fill out the form here and we will be in touch shortly.</p>

				<div class="thim-widget-button thim-widget-button-base">
					<a class="widget-button  no-border normal custom_style position-after" href="https://edu.t-bio.info/events/" style="font-size: 14px;font-weight: normal;color: #333333;background-color: #ffb606;" data-hover="font-size: 14px;font-weight: normal;background-color: #e6a303;">View All Events<i class="fa fa-arrow-right" style="font-size: 14px;"></i> </a>
				</div>
				
			</div>	
			<div class="col col-lg-6 col-md-6 col-sm-12">

				<div class="thim-register-now-form" style="box-shadow: 0 3px 3px 0 rgba(0,0,0,0.6);min-width: 100%;margin: 50px 0 0 0;">
					<h3 class="title"><span>Register to receive updates on upcoming events &amp; webinars.</span></h3>
					<?php echo do_shortcode('[contact-form-7 id="18692" title="Register for Events & Webinars"]'); ?>
				</div>	

			</div>			
		</div>

		<div class="row" style="margin-bottom: 3em;">
			<div class="col col-lg-12">
				<div class="thim-widget-heading thim-widget-heading-base"><div class="sc_heading   text-left"><h4 class="title">ONLINE COURSES FOR INDEPENDENT STUDY</h4></div></div>
				<?php echo the_widget('Thim_Courses_Widget', array( 'title' => '', 'featured' => true, 'limit' => 20, 'slider-options' => array( 'show_navigation' => true ) ) ); ?>
			</div>
		</div>
		<?php
		// Start the Loop.
		// while ( have_posts() ) : the_post();
  //           the_content();
		// endwhile;
		?>
	</div><!-- #main-content -->

	<div class="container-fluid">
		<div class="row">
			<div class="wp-block-cover has-background-dim has-parallax alignfull" style="background-image:url(https://edu.t-bio.info/wp-content/uploads/2018/05/sddefault.jpg)">
					
					<div class="container">
						<div class="row">
							<div class="col col-lg-6" style="color: #ffffff;">
								
								<div style="text-align: center;">
									<h3 style="text-align: left; margin: 0.5em 0;"><span style="color: #ffffff; font-size: 18pt;">PRACTICAL SKILLS YOU CAN USE</span></h3>
									<p style="text-align: left;margin-top: 45px;">Developed in collaboration with universities across the world and leading experts in bioinformatics, <b>OmicsLogic</b> is a comprehensive and flexible program designed to help students, faculty and industry succeed in the age of data. This program will help you learn what you need to know to advance scientific research and participate in the future of biomedicine. Learn how to mine high-throughput data and discover new insights -- without needing to learn how to code.</p>
									<p style="text-align: left;">We provide a variety of learning options for independent study and also jointly teach bioinformatics certificate and degree programs in conjunction with universities and their faculty.</p>
								</div>
								<div class="thim-widget-button thim-widget-button-base" style="margin: 20px 0px 0px 0px;">
									<a class="widget-button  no-border normal custom_style position-after" href="https://edu.t-bio.info/omicslogic/" style="font-size: 14px;font-weight: normal;color: #333333;background-color: #ffb606;" data-hover="font-size: 14px;font-weight: normal;background-color: #e6a303;">Learn More<i class="fa fa-arrow-right" style="font-size: 14px;"></i> </a>
								</div>

							</div>
							<div class="col col-lg-6">

								<div class="thim-offerings">
									<div class="offerings-title">
										<h3>
											WE OFFER:
										</h3>
									</div>
									<ul class="checked-offerings" style="list-style: none">
										<li>
											<span class="offering">Free online, individual courses with the building block basics for independent study.</span>
										</li>
										<li>
											<span class="offering">Paid online, individual courses featuring hot new technologies and methods.</span>
										</li>
										<li>
											<span class="offering">In-person 1-2-3 day workshops including the option to customize the content.</span>
										</li>
										<li>
											<span class="offering">University-affiliated and accredited 3-6 months certification programs.</span>
										</li>
										<li>
											<span class="offering">Core curriculum degree programs customized and developed in collaboration with universities and research networks, instructed by Pine.bio and university faculty.</span>
										</li>
									</ul>
								</div>

							</div>
						</div>
					</div>

			</div>
		</div>
	</div>

	<div class="container" style="margin-bottom: 3em;">
		<div class="row">
			<div class="col col-lg-12">
				<div class="sc_heading   text-center">
					<h3 style="color:#000000;" class="title">Hands-on Experience</h3>
					<p class="sub-heading" style="">Go quickly from learning to doing. Overcome the limitation of traditional MOOCs that focus on theory or complete technical skills, these courses combine the two without making the practical projects too technical.</p>
					<span class="line"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-lg-6">
				<div class="thim-widget-icon-box thim-widget-icon-box-base"><div class="wrapper-box-icon text-left  circle" data-icon-border="#ffffff"><div class="smicon-box iconbox-left"><div class="boxes-icon circle" style="border-color: rgb(51, 51, 51); width: 82px;"><span class="inner-icon"><span class="icon"><i class="fa fa-book" style="color:#ffb606; font-size:36px; line-height:36px; vertical-align: middle;"></i></span></span></div><div class="content-inner" style="width: calc( 100% - 82px - 15px);"><div class="sc-heading article_heading"><h3 class="heading__primary" style="color: #000000;">Practical Exercises from Curated Datasets</h3></div><div class="desc-icon-box"><div class="desc-content">Each lesson has been designed by an experienced instructor who uses practical examples with real data from curated datasets based on actual research datasets and applications.</div></div></div></div><!--end smicon-box--></div></div>
			</div>
			<div class="col col-lg-6">
				<div class="thim-widget-icon-box thim-widget-icon-box-base"><div class="wrapper-box-icon text-left  circle"><div class="smicon-box iconbox-left"><div class="boxes-icon circle" style="width: 82px;"><span class="inner-icon"><span class="icon"><i class="fa fa-database" style="color:#ffb606; font-size:36px; line-height:36px; vertical-align: middle;"></i></span></span></div><div class="content-inner" style="width: calc( 100% - 82px - 15px);"><div class="sc-heading article_heading"><h3 class="heading__primary" style="color: #000000;">T-BioInfo Multi-omics PLATFORM</h3></div><div class="desc-icon-box"><div class="desc-content">Intuitive, visual and guided by A.I. with educational tips and pop-ups so that you learn how to integrate data and analyze it in a meaningful way without coding or worrying that you have constructed a workflow that will produce errors.</div></div></div></div><!--end smicon-box--></div></div>
			</div>
		</div>
		<div class="row">
			<div class="col col-lg-6">
				<div class="thim-widget-icon-box thim-widget-icon-box-base"><div class="wrapper-box-icon text-left  circle"><div class="smicon-box iconbox-left"><div class="boxes-icon circle" style="width: 82px;"><span class="inner-icon"><span class="icon"><i class="fa fa-play" style="color:#ffb606; font-size:36px; line-height:36px; vertical-align: middle;"></i></span></span></div><div class="content-inner" style="width: calc( 100% - 82px - 15px);"><div class="sc-heading article_heading"><h3 class="heading__primary" style="color: #000000;">Rich Multimedia</h3></div><div class="desc-icon-box"><div class="desc-content">Gain access to rich multimedia resources on biological background, interactive visualization of data and streamlined, easy-to-follow visual guides to explain the logic of data transformation and analysis. </div></div></div></div><!--end smicon-box--></div></div>
			</div>
			<div class="col col-lg-6">
				<div class="thim-widget-icon-box thim-widget-icon-box-base"><div class="wrapper-box-icon text-left  circle"><div class="smicon-box iconbox-left"><div class="boxes-icon circle" style="width: 82px;"><span class="inner-icon"><span class="icon"><i class="fa fa-check-square-o" style="color:#ffb606; font-size:36px; line-height:36px; vertical-align: middle;"></i></span></span></div><div class="content-inner" style="width: calc( 100% - 82px - 15px);"><div class="sc-heading article_heading"><h3 class="heading__primary" style="color: #000000;">Testing and Certification</h3></div><div class="desc-icon-box"><div class="desc-content">For those seeking credit or simply to be competitive and improve, live tests are offered which track and register your score.</div></div></div></div><!--end smicon-box--></div></div>
			</div>
		</div>
		<div class="row">
			<div class="col col-lg-6">
				<div class="thim-widget-icon-box thim-widget-icon-box-base"><div class="wrapper-box-icon text-left  circle"><div class="smicon-box iconbox-left"><div class="boxes-icon circle" style="width: 82px;"><span class="inner-icon"><span class="icon"><i class="fa fa-comments-o" style="color:#ffb606; font-size:36px; line-height:36px; vertical-align: middle;"></i></span></span></div><div class="content-inner" style="width: calc( 100% - 82px - 15px);"><div class="sc-heading article_heading"><h3 class="heading__primary" style="color: #000000;">Interactive Forum</h3></div><div class="desc-icon-box"><div class="desc-content">Join the community of students and experts to ask questions, share answers and learn from each other. Regular updates as well as practical assignments are posted.</div></div></div></div><!--end smicon-box--></div></div>
			</div>
			<div class="col col-lg-6">
				<div class="thim-widget-icon-box thim-widget-icon-box-base"><div class="wrapper-box-icon text-left  circle"><div class="smicon-box iconbox-left"><div class="boxes-icon circle" style="width: 82px;"><span class="inner-icon"><span class="icon"><i class="fa fa-th-list" style="color:#ffb606; font-size:36px; line-height:36px; vertical-align: middle;"></i></span></span></div><div class="content-inner" style="width: calc( 100% - 82px - 15px);"><div class="sc-heading article_heading"><h3 class="heading__primary" style="color: #000000;">Glossary</h3></div><div class="desc-icon-box"><div class="desc-content">Quick reference guide with simple definitions to enhance understanding and eliminate the need for searching reference materials as you learn.</div></div></div></div><!--end smicon-box--></div></div>
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="wp-block-cover has-background-dim has-parallax alignfull" style="background-image:url(https://edu.t-bio.info/wp-content/uploads/2018/05/student-laptop1.jpg)">
					
					<div class="container">
						<div class="row">
							<div class="col col-lg-3">
							
								<?php echo the_widget('Thim_Counters_Box_Widget', array( 'counters_label' => 'ENROLLED STUDENTS', 'counters_value' => 2500 ) ); ?>

							</div>
							<div class="col col-lg-3">

								<?php echo the_widget('Thim_Counters_Box_Widget', array( 'counters_label' => 'LESSONS', 'counters_value' => 28 ) ); ?>

							</div>
							<div class="col col-lg-3">

								<?php echo the_widget('Thim_Counters_Box_Widget', array( 'counters_label' => '5 STARS RATING', 'counters_value' => 5 ) ); ?>

							</div>
							<div class="col col-lg-3 thim-no-border">

								<?php echo the_widget('Thim_Counters_Box_Widget', array( 'counters_label' => 'VIDEOS', 'counters_value' => 35 ) ); ?>

							</div>
						</div>
					</div>

			</div>
		</div>
	</div>

	<div class="container" style="margin-bottom: 3em;">
		<div class="row">
			<div class="col col-lg-12">
				<div class="sc_heading   text-center">
					<h3 style="color:#000000;" class="title">LEARNING OBJECTIVES AND OUTCOMES</h3>
					<p class="sub-heading" style="">Experience Biomedical Data Research and Discovery in Academic and Industry Applications.</p>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col col-lg-4 col-md-4 col-sm-1">

				<div class="thim-widget-icon-box thim-widget-icon-box-base">
					<div class="wrapper-box-icon text-center  ">
						<div class="smicon-box iconbox-top">
							<div class="boxes-icon" style="width: 82px;">
								<span class="inner-icon">
									<span class="icon"><i class="fa fa-check" style="color:#ffb606; font-size:36px; line-height:36px; vertical-align: middle;"></i></span>
								</span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h3 class="heading__primary" style="color: #000000;">Practical Skills</h3>
								</div><div class="desc-icon-box">
									<div class="desc-content">
										Needed skills for scientific discovery, healthcare, biotech and pharma
									</div>
								</div>
							</div>
						</div><!--end smicon-box-->
					</div>
				</div>

			</div>	
			<div class="col col-lg-4 col-md-4 col-sm-1">


				<div class="thim-widget-icon-box thim-widget-icon-box-base">
					<div class="wrapper-box-icon text-center  ">
						<div class="smicon-box iconbox-top">
							<div class="boxes-icon" style="width: 82px;">
								<span class="inner-icon">
									<span class="icon"><i class="fa fa-lightbulb-o" style="color:#ffb606; font-size:36px; line-height:36px; vertical-align: middle;"></i></span>
								</span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h3 class="heading__primary" style="color: #000000;">Project-based Workshops</h3>
								</div><div class="desc-icon-box">
									<div class="desc-content">
										Beyond theoretical knowledge, workshops give hands-on experience for the real world.
									</div>
								</div>
							</div>
						</div><!--end smicon-box-->
					</div>
				</div>

			</div>	
			<div class="col col-lg-4 col-md-4 col-sm-1">


				<div class="thim-widget-icon-box thim-widget-icon-box-base">
					<div class="wrapper-box-icon text-center  ">
						<div class="smicon-box iconbox-top">
							<div class="boxes-icon" style="width: 82px;">
								<span class="inner-icon">
									<span class="icon"><i class="fa fa-question" style="color:#ffb606; font-size:36px; line-height:36px; vertical-align: middle;"></i></span>
								</span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h3 class="heading__primary" style="color: #000000;">Independent Research</h3>
								</div><div class="desc-icon-box">
									<div class="desc-content">
										Start making your own discoveries because there is plenty of omics data to start analyzing
									</div>
								</div>
							</div>
						</div><!--end smicon-box-->
					</div>
				</div>

			</div>			
		</div>
	</div>

	<div class="container">
		<div class="row" style="margin-bottom: 3em;">
			<div class="col col-lg-12">
				<div class="sc_heading   text-center">
					<h3 style="color:#000000;" class="title">Testimonials</h3>
					<p class="sub-heading" style="">Researchers and students describe how OmicsLogic gives them an edge.</p>
					<span class="line"></span>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 3em;">
			<div class="col col-lg-12">
				<?php echo the_widget('Thim_Testimonials_Widget', array( 'title' => '' ) ); ?>
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div id="uni-elite-group" class="thim-join-the-elite-group wp-block-cover has-background-dim has-parallax alignfull" style="background-image:url(https://edu.t-bio.info/wp-content/uploads/2018/05/studentsBW-1024x5751.jpg)">
					
					<div class="container">

						<div class="row" style="margin-bottom: 3em;">
							<div class="col col-lg-12">
								<div class="sc_heading   text-center">
									<h3 style="color:#fff;" class="title">COLLABORATORS</h3>
									<p class="sub-heading" style="color: #fff">We’re growing and need additional industry partners, teachers and mentors to join our program. Help shape the future of thousands of students learning about ML/AI in Biomedical Applications. Be the spark that ignites the next discovery in big data.</p>
								</div>
							</div>
						</div>

						<div id="universities" class="thim-multiple-images-wrapper row">
							<div class="col-sm-3">
								<img src="https://edu.t-bio.info/wp-content/uploads/2018/10/Amity-300x53.png" width="300" height="53" alt="">
							</div>
							<div class="col-sm-3">
								<img src="https://edu.t-bio.info/wp-content/uploads/2018/10/Haifa-300x53.png" width="300" height="53" alt="">
							</div>
							<div class="col-sm-3">
								<img src="https://edu.t-bio.info/wp-content/uploads/2018/10/Loyola-300x53.png" width="300" height="53" alt="">
							</div>
							<div class="col-sm-3">
								<img src="https://edu.t-bio.info/wp-content/uploads/2018/10/LSU-300x53.png" width="300" height="53" alt="">
							</div>
							<div class="col-sm-3">
								<img src="https://edu.t-bio.info/wp-content/uploads/2018/10/Tauber-300x53.png" width="300" height="53" alt="">
							</div>
							<div class="col-sm-3">
								<img src="https://edu.t-bio.info/wp-content/uploads/2018/10/Tulane-300x53.png" width="300" height="53" alt="">
							</div>
							<div class="col-sm-3">
								<img src="https://edu.t-bio.info/wp-content/uploads/2018/10/UNMC-300x53.png" width="300" height="53" alt="">
							</div>
							<div class="col-sm-3">
								<img src="https://edu.t-bio.info/wp-content/uploads/2018/10/UONO-300x53.png" width="300" height="53" alt="">
							</div>
						</div>

						<div class="row">
							<div class="thim-widget-button thim-widget-button-base"><a class="widget-button very-rounded no-border medium custom_style" href="https://edu.t-bio.info/lp-courses/" style="font-size: 16px;font-weight: normal;color: #000000;background-color: #ffb606;" data-hover="font-size: 16px;font-weight: normal;color: #ffffff;background-color: #993023;"><i class="fa fa-none" style="font-size: 20px;"></i> Get Started</a></div>
						</div>


					</div>

			</div>
		</div>
	</div>

	<div class="container-fluid" style="background: #000">
		<div class="container">
			<div class="row">
				<div class="col col-lg-12">
		
					<div class="textwidget" style="padding: 30px 30px 30px 30px;">
						<div class="videoWrapper">
							<p><iframe width="640" height="360" src="https://www.youtube.com/embed/1IkKKMJ-Zxk?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></p>
						</div>
					</div>

				</div>
			</div>		
		</div>
	</div>

	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function() {
		  var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));
		  let active = false;

		  const lazyLoad = function() {

		  	if( active === false )
		  		active = true;

		  	setTimeout( function() {

				lazyVideos.forEach(function(video) {
					console.log(video);
			        if ((video.getBoundingClientRect().top <= window.innerHeight && video.getBoundingClientRect().bottom >= 0) && getComputedStyle(video).display !== "none") {
			          for (var source in video.childNodes) {
			            var videoSource = video.childNodes[source];
			            if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
			              videoSource.src = videoSource.dataset.src;
			            }
			          }

			          video.load();
			          video.classList.remove("lazy");
			          //lazyVideoObserver.unobserve(video.target);
			        }
		        } );

				active = false;

		  	}, 200 );

		  };

		  lazyLoad();

	    //document.addEventListener("scroll", lazyLoad);
		// window.addEventListener("resize", lazyLoad);
		// window.addEventListener("orientationchange", lazyLoad);

		  // if ("IntersectionObserver" in window) {
		  //   var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
		  //     entries.forEach(function(video) {
		  //       if (video.isIntersecting) {
		  //         for (var source in video.target.children) {
		  //           var videoSource = video.target.children[source];
		  //           if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
		  //             videoSource.src = videoSource.dataset.src;
		  //           }
		  //         }

		  //         video.target.load();
		  //         video.target.classList.remove("lazy");
		  //         lazyVideoObserver.unobserve(video.target);
		  //       }
		  //     });
		  //   });

		  //   lazyVideos.forEach(function(lazyVideo) {
		  //     lazyVideoObserver.observe(lazyVideo);
		  //   });
		  // }
		});
	</script>

   <!--  <link rel="stylesheet" id="siteorigin-panels-front-css" href="https://dev.edu.t-bio.info/wp-content/plugins/siteorigin-panels/css/front-flex.css" type="text/css" media="all"> -->
<!-- </div></div></div> -->
<?php get_footer(); //wp_footer();
