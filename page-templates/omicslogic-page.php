<?php
/**
 * Template Name: OmicsLogic
 *
 **/

get_header();


/** Add any logic for specialization pages. This is solution 2 for previews**/
$current_user = wp_get_current_user();
// $current_user->membership_level = pmpro_getMembershipLevelForUser($current_user->ID);
// $currentusermembershiplvl = $current_user->membership_level;
// $currentusermembershipname = $currentusermembershiplvl->name;

//if membership is free or no subscription, limit to preview. Else everythi
// if ($currentusermembershipname == "Specialization" || $currentusermembershipname == "Unlimited") {
//     $style = '<style> li.subscribe{ display: none} </style>';
//     echo $style;
// }

?>

	<div class="container-fluid">

			<div class="image-container hero-slides row ">
					
					<div class="slider"><!-- .slider -->

						<div id="omicslogic-hero-info" class="hero-image-info container-fluid ol-hero js-ol-hero">

							<ul class="ol-hero__slider">

								<li class="ol-hero__slide ol-hero__slide--selected js-ol-slide">

									<div class="omicslogic hero-image-info-container container">

										<div class="parallaxie" style="background: url('https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/OMICSLOGIC-hero-slide-1-bg-layer-1.png');height: 100%;position: absolute;top: 50px;width: 100%;min-height: 365px;" data-parallaxie='{"speed": -0.8, "size": "auto"}'></div>

										<div class="parallaxie" style="background: url('https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/OMICSLOGIC-hero-slide-1-bg-layer-2.png');height: 100%;position: absolute;top: 50px;width: 100%;min-height: 365px;" data-parallaxie='{"speed": -0.4, "size": "auto"}'></div>

										<div class="parallaxie" style="background: url('https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/OMICSLOGIC-hero-slide-1-bg-layer-3.png');height: 100%;position: absolute;top: 0px;width: 100%;min-height: 365px;" data-parallaxie='{"speed": -0.1, "size": "auto"}'></div>

										<div id="omicslogic-info-container-slide-1" class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 omicslogic-info-container">
										
											<h1 class="omicslogic-header">OMICS <span class="dark">LOGIC</span></h1>

											<div class="etbi-caption">
												<p>
													OmicsLogic is a program that embeds data-driven concepts into biological projects, spanning the student learning journey from observer to participant in research. This journey begins with identifying an interesting biological research problem or question that can be answered with data, continues with the collection and organization of data, and concludes with students interpreting and drawing conclusions about the data. 

												</p>
											</div>

											<div class="hero-actions">
												<a href="#learn-more" id="hero-learn-more-action-btn" class="button btn btn-square btn-ghost btn-default btn-lg btn-light"><?php _e('Learn More', 'etbi'); ?></a>
												<a href="https://edu.t-bio.info/contact-us-pine-biotech/" id="hero-contact-us-action-btn" class="button btn btn-square btn-primary btn-lg btn-dark contact-modal-trigger"><?php _e('Contact Us', 'etbi'); ?></a>		
											</div>

										</div>

									</div>

								</li>

								<li class="ol-hero__slide js-ol-slide">

									<div class="hero-image-info-container container">

										<div class="parallaxie" style="background: url('https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/OMICSLOGIC-hero-slide-2-bg-layer-1.png');height: 100%;position: absolute;top: 50px;width: 100%;min-height: 365px;" data-parallaxie='{"speed": -0.8, "size": "auto"}'></div>

										<div class="parallaxie" style="background: url('https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/OMICSLOGIC-hero-slide-2-bg-layer-2.png');height: 100%;position: absolute;top: 50px;width: 100%;min-height: 365px;" data-parallaxie='{"speed": -0.4, "size": "auto"}'></div>

										<div class="parallaxie" style="background: url('https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/OMICSLOGIC-hero-slide-2-bg-layer-3.png');height: 100%;position: absolute;top: 0px;width: 100%;min-height: 365px;" data-parallaxie='{"speed": -0.1, "size": "auto"}'></div>

										<div id="omicslogic-info-container-slide-2" class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 omicslogic-info-container">
										
											<h1 class="omicslogic-header">OMICS <span class="dark">LOGIC</span></h1>

											<div class="etbi-caption">
												<p>
													For disciplines like bioinformatics, mastery is difﬁcult to evaluate, so we worked with faculty and industry proifessionals to identify critical evaluation metrics for a comprehensive and competitive metrics that we collect as the studnet learns. Our metrics are adapted to topics of interest and background of the student, providing the most efﬁcient path for learning.

												</p>
											</div>

											<div class="hero-actions">
												<a href="#learn-more" id="hero-learn-more-action-btn" class="button btn btn-square btn-ghost btn-default btn-lg btn-light"><?php _e('Learn More', 'etbi'); ?></a>
												<a href="https://edu.t-bio.info/contact-us-pine-biotech/" id="hero-contact-us-action-btn" class="button btn btn-square btn-primary btn-lg btn-dark contact-modal-trigger"><?php _e('Contact Us', 'etbi'); ?></a>		
											</div>

										</div>

									</div>

								</li>

								<li class="ol-hero__slide js-ol-slide">

									<div class="hero-image-info-container container">

										<div class="parallaxie" style="background: url('https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/OMICSLOGIC-hero-slide-3-bg-layer-1.png');height: 100%;position: absolute;top: 50px;width: 100%;min-height: 365px;" data-parallaxie='{"speed": -0.8, "size": "auto"}'></div>

										<div class="parallaxie" style="background: url('https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/OMICSLOGIC-hero-slide-3-bg-layer-2.png');height: 100%;position: absolute;top: 50px;width: 100%;min-height: 365px;" data-parallaxie='{"speed": 0.1, "size": "auto", "offset" : 20}'></div>

										<div class="parallaxie" style="background: url('https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/OMICSLOGIC-hero-slide-3-bg-layer-3.png');height: 100%;position: absolute;top: 50px;width: 100%;min-height: 365px;" data-parallaxie='{"speed": -0.4, "size": "auto"}'></div>

										<div id="omicslogic-info-container-slide-3" class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 omicslogic-info-container">
										
											<h1 class="omicslogic-header">OMICS <span class="dark">LOGIC</span></h1>

											<div class="etbi-caption">
												<p>
													The program is based on HPC research infrastructure. Students gain access to this environment by becoming proﬁcient at demo projects and submitting a research proposal	with faculty mentors. Thus, the learning journey culminates	in real research projects that can be presented for review.

												</p>
											</div>

											<div class="hero-actions">
												<a href="#learn-more" id="hero-learn-more-action-btn" class="button btn btn-square btn-ghost btn-default btn-lg btn-light"><?php _e('Learn More', 'etbi'); ?></a>
												<a href="https://edu.t-bio.info/contact-us-pine-biotech/" id="hero-contact-us-action-btn" class="button btn btn-square btn-primary btn-lg btn-dark contact-modal-trigger"><?php _e('Contact Us', 'etbi'); ?></a>		
											</div>

										</div>

									</div>

								</li>
								
							</ul>


							<div class="ol-hero__nav js-ol-nav">
								<nav class="dot-navigation">
									<span class="ol-hero__marker ol-hero__marker--item-1 js-ol-marker"></span>
									
									<ul class="ol-dot-nav">
										<li class="ol-selected"><a href="#0" class="nav-1 nav-item"><span class="ol-dot"></span></a></li>
										<li><a href="#0" class="nav-2 nav-item"><span class="ol-dot"></span></a></li>
										<li><a href="#0" class="nav-3 nav-item"><span class="ol-dot"></span></a></li>
									</ul>
								</nav> 
							</div> <!-- .cd-hero__nav -->

						</div>
						
					</div><!-- .slider -->
		    </div>
	</div>


	<div id="learn-more" class="home-content home-page container" role="main">
		<div class="row" style="margin: 3em auto;">
			<div class="learn-more-intro col col-xs-12 col-sm-12 col-md-6 col-lg 6">
				<h2 class="row-header">Biology As A <em>Data</em> Science</h2>
				<p>
					The objective of the OmicsLogic program is to provide training via
					online materials and easy-to-use analytical tools that demonstrate the
					use of and explain the conceptual framework of data analysis in the
					context of biological research and discovery. Training materials are
					delivered online in courses that highlight key data types, biomedical
					and biotech topics as well as statistical concepts. Practical assign-
					ments provide speciﬁc guidelines on how to plan and prepare for anal-
					ysis in integrated settings (online and in-person workshops). These are
					developed based on published datasets that are hosted on NCBI.
				</p>

				<a href="#learn-more" class="button btn btn-square btn-ghost btn-default"><?php _e('Learn More', 'etbi'); ?></a>
			</div>		
			<div class="col col-xs-12 col-md-6 col-lg-6">
				<img src="https://edu.t-bio.info/wp-content/uploads/2019/01/OmicsLogic-Chemistry-Set.jpg">
			</div>		
		</div>

		<?php
		// Start the Loop.
		// while ( have_posts() ) : the_post();
  //           the_content();
		// endwhile;
		?>

		<hr>


	</div><!-- #main-content -->



















	<div class="container-fluid preview-container">

		<h2 class="row-header">COMPREHENSIVE <em>HANDS-ON</em> CURRICULUM</h2>

		<section class="cd-hero js-cd-hero">
						<ul class="cd-hero__slider">
				<li class="cd-hero__slide cd-hero__slide--selected js-cd-slide">
					<div class="cd-hero__content cd-hero__content--full-width container">

						<div class="row">
							<div id="intro-edu-slide" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/itb-edu.jpg" alt="edu-site" class="preview-slide-img edu-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-right">
											<h2>Title</h2>
											<p>
												Courses are stuctured in a way to assist learning complex topics in a gradual, step-by-step way.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Every concept is illustrated with charts and images to make the content more visual.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Tools to conduct lessons and practical exercises online and offline effective for students and educators.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
							<div id="intro-edu-server" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/itb-server.jpg" alt="server-site" class="preview-slide-img server-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												All of the theoretical learning materials are supported by our practical hands-on platform and exercises.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												The platform has artificial intelligence guidance designed for novices to help them advance their practical skills.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
						</div>


					</div> <!-- .cd-hero__content -->
				</li>

				<li class="cd-hero__slide js-cd-slide">
					<div class="cd-hero__content cd-hero__content--full-width container">

						<div class="row">
							<div id="genomics-edu-slide" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/genomics-edu-1.jpg" alt="edu-site" class="preview-slide-img edu-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												After learning about the concepts in a lesson, you can test your understanding with quizzess that cover the materials.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Helping translate the biology into data, so that you understand what data is being analyzed.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
							<div id="genomics-edu-server" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/genomics-server-1.jpg" alt="server-site" class="preview-slide-img server-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Process data and explore it visually using standard tools.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Understand what mutation variants are, and how to discover them in a statistical way.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
						</div>


					</div> <!-- .cd-hero__content -->
				</li>

				<li class="cd-hero__slide js-cd-slide">
					<div class="cd-hero__content cd-hero__content--full-width container">

						<div class="row">
							<div id="transcriptomics-edu-slide" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/tran-edu-1.jpg" alt="edu-site" class="preview-slide-img edu-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-right">
											<h2>Title</h2>
											<p>
												Learn about methods for analysis of RNA-Seq data, structured in clear sections.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

								</ul>
							</div>
							<div id="transcriptomics-edu-server" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/tran-server.jpg" alt="server-site" class="preview-slide-img server-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												You won't get lost creating your pipeline, because your options are limited on based on your previous selection and data that you've uploaded.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Each section contains standard algorithms, and custom options developed by the Tauber Bioinformatics Research Center.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
						</div>


					</div> <!-- .cd-hero__content -->
					
				</li>

				<li class="cd-hero__slide cd-hero__slide--video js-cd-slide">
					<div class="cd-hero__content cd-hero__content--full-width container">

						<div class="row">
							<div id="epigenetics-edu-slide" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/Epi-edu.jpg" alt="edu-site" class="preview-slide-img edu-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Information is annotated within lessons to explore complex concepts in greater depth.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-right">
											<h2>Title</h2>
											<p>
												Your progress is tracked within courses so that you can see your overall progress, and see your growth over time.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-left">
											<h2>Title</h2>
											<p>
												If you're having trouble with a difficult concept or need help with the site, help is but a few keystrokes away. Use the available chatbox to get in touch with us.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
							<div id="epigenetics-edu-server" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/Epi-server.jpg" alt="server-site" class="preview-slide-img server-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-right">
											<h2>Title</h2>
											<p>
												Pipelines are built using a simple UI to abstract away from the complex underlying algorithms. Users have access to powerful tools without knowing any coding.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-bottom">
											<h2>Title</h2>
											<p>
												Specific methods are organized in sections to help with building complex pipelines.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												View the flow of your pipelines with visual aids.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
						</div>


					</div> <!-- .cd-hero__content -->
				</li>

				<li class="cd-hero__slide js-cd-slide">
					<div class="cd-hero__content cd-hero__content--full-width container">

						<div class="row">
							<div id="metagenomics-edu-slide" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/meta-edu-1.jpg" alt="edu-site" class="preview-slide-img edu-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Learn the concepts in real-world examples by following the projects.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Projects ranging from healthcare to ecology and more.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
							<div id="metagenomics-edu-server" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/meta-server.jpg" alt="server-site" class="preview-slide-img server-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-bottom">
											<h2>Title</h2>
											<p>
												Apply the same familiar methods, but to solve new problems.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Custom scenarios call for specific tools made available through the same interface.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
						</div>


					</div> <!-- .cd-hero__content -->
				</li>
				<li class="cd-hero__slide js-cd-slide">
					<div class="cd-hero__content cd-hero__content--full-width container">

						<div class="row">
							<div id="machine-learning-edu-slide" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/ml-edu.jpg" alt="edu-site" class="preview-slide-img edu-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												Seventy five percent of time is spent on data preparation for machine learning. The importance of this step is emphasized in our courses.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-top">
											<h2>Title</h2>
											<p>
												There are many different methods; we've selected the ones that are critical for biomedical applications.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-left">
											<h2>Title</h2>
											<p>
												Not only do we cover research challenges, but industry specific challenges.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
							<div id="machine-learning-server" class="column col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-img">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/ml-server.jpg" class="preview-slide-img">
								<ul class="etbi-poi">
									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-bottom">
											<h2>Title</h2>
											<p>
												Explore your data using dimensionality reduction techniques.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->

									<li class="cd-single-point">
										<a class="cd-img-replace" href="#0">More</a>
										<div class="cd-more-info cd-left">
											<h2>Title</h2>
											<p>
												Undertsnad the structure of your data with unsupervised clustering methods.
											</p>
											<a href="#0" class="cd-close-info cd-img-replace">Close</a>
										</div>
									</li> <!-- .cd-single-point -->
								</ul>
							</div>
						</div>


					</div> <!-- .cd-hero__content -->
				</li>
			</ul> <!-- .cd-hero__slider -->

			<div class="cd-hero__nav js-cd-nav">
				<nav>
					<span class="cd-hero__marker cd-hero__marker--item-1 js-cd-marker"></span>
					
					<ul>
						<li class="cd-selected"><a href="#0" class="nav-1 intro"></a></li>
						<li><a href="#0" class="nav-4 genomics"></a></li>
						<li><a href="#0" class="nav-5 transcriptomics"></a></li>
						<li><a href="#0" class="nav-2 epigenetics"></a></li>
						<li><a href="#0" class="nav-3 metagenomics"></a></li>
						<li><a href="#0" class="nav-6 machine-learning"></a></li>
					</ul>
				</nav> 
			</div> <!-- .cd-hero__nav -->


			<ul class="cd-ancillary-hero__slider">
				<li class="cd-ancillary-hero__slide cd-ancillary-hero__slide--selected js-cd-ancillary-slide">

					<div class=" container module-container">

						<div class="module-header">
							
							<h2>Introduction to Bioinformatics</h2>

							<!-- <small>
								DNA Methylation, Chromatin Immunoprecipitation and non-coding RNA
							</small> -->

						</div>

						<br>

						<div class="row">
							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/example.jpg">
							</div>

							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-8">
								<p>
									This module is an introduction to the field of bioinformatics, or the intersection of informatics and biology. It speaks about the opportunities that come with the available big data and methods for its analysis for research and industry, including health care, agriculture, environmental sciences, public health, and more. Important aspects of big data bioinformatics are highlighted:
								</p>
								<ul>
									<li>Data-driven discovery using big data in life sciences</li>
									<li>Examples of bioinformatics playing an impact in healthcare and industry</li>
									<li>Available resources for bioinformatics: databases, methods and platforms</li>
								</ul>
							</div>
						</div>
					</div>

				</li>

				<li class="cd-ancillary-hero__slide js-cd-ancillary-slide">
					
					<div class=" container module-container">

						<div class="module-header">
							
							<h2>Genomics</h2>

							<!-- <small>
								DNA Methylation, Chromatin Immunoprecipitation and non-coding RNA
							</small> -->

						</div>

						<br>

						<div class="row">
							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/ebola.jpg">
							</div>

							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-8">
								<p>
									This module discusses DNA as the code of life and its variation - from single nucleotide variation to copy number variation. We cover the basics about Genes and chromosomes and then talk about how to study Genomic variation using Next Generation Sequencing. The practical modules offer sample projects to the analysis of NGS whole-exome sequencing (WGS), various variant calling algorithms and challenges in interpretation. We also discuss GWAS studies and copy number variation projects.
								</p>
								<ul>
									<li>Identification of somatic and germline mutations</li>
									<li>Statistical analysis of variants like differentiation based on mutation frequency</li>
									<li>Mutability of single variants and global analysis of genomic variation (GWAS studies)</li>
								</ul>
							</div>
						</div>
					</div>
					
				</li>
				<li class="cd-ancillary-hero__slide js-cd-ancillary-slide">
					
					<div class=" container module-container">

						<div class="module-header">
							
							<h2>Transcriptomics</h2>

							<!-- <small>
								DNA Methylation, Chromatin Immunoprecipitation and non-coding RNA
							</small> -->

						</div>

						<br>

						<div class="row">
							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/tran.jpg">
							</div>

							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-8">
								<p>
									This module talks about real-world applications of RNA-seq. We will review methods of quantitative and qualitative analysis of RNA in a sample, how data is generated using Next Generation Sequencing and use several projects to practice generating a table of expression from raw FASTQ files and the subsequent analysis of this table of gene and isoform expression. Subsequent modules explore how standard tools like differential gene expression profiling and regression-based approaches can be used to explore RNA-seq data.
								</p>
								<ul>
									<li>Processing NGS data for gene and isoform expression profiling</li>
									<li>Exploratory analysis and hypothesis testing</li>
									<li>Conventional Machine Learning tools (clustering and classification)</li>
									<li>Single Cell RNA-seq techniques</li>
								</ul>
							</div>
						</div>
					</div>
					
				</li>
				<li class="cd-ancillary-hero__slide js-cd-ancillary-slide">
					
					<div class=" container module-container">

						<div class="module-header">
							
							<h2>Epigenomics & Epigenetics</h2>

							<small>
								DNA Methylation, Chromatin Immunoprecipitation and non-coding RNA
							</small>

						</div>

						<br>

						<div class="row">
							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<img src="https://edu.t-bio.info/wp-content/uploads/2017/08/asthma-epigenetic-title.jpeg">
							</div>

							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-8">
								<p>
									This module talks about regulation of gene expression with regulatory RNAs. These in-
									clude long non coding RNAs, microRNAs and other non-coding elements. We will also
									discuss Chromatin Immunoprecipitation or CHiP-Seq to study histone modiﬁcation.
									Histone modiﬁcation can make some regions of the genome more open or closed for
									transcription. Each course explores a relevant project that comes with public-domain
									datasets and a detailed tutorial that helps start the analysis and validate that your re-
									sults are consistent with the reference publications.
								</p>
							</div>
						</div>
					</div>
					
				</li>
				<li class="cd-ancillary-hero__slide js-cd-ancillary-slide">
					
					<div class=" container module-container">

						<div class="module-header">
							
							<h2>Metagenomics</h2>
<!-- 
							<small>
								DNA Methylation, Chromatin Immunoprecipitation and non-coding RNA
							</small> -->

						</div>

						<br>

						<div class="row">
							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/project-course.jpg">
							</div>

							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-8">
								<p>
									The Metagenomics module covers the conceptual and practical aspects of microbiome studies. We discuss the metagenomics sequencing approaches and Data analysis tools. For practical exercises, we review the significance of the microbiome for human health and ecology. You will learn about multiple types of sequencing methods, 16S rRNA and DNA, and then practice analysis of 16s sequencing data, including several public-domain methods for processing, analysis and visualization of microbiome data.
								</p>
							</div>
						</div>
					</div>
					
				</li>
				<li class="cd-ancillary-hero__slide js-cd-ancillary-slide">
					
					<div class=" container module-container">

						<div class="module-header">
							
							<h2>Machine Learning for High-throughout Biomedical Data</h2>
<!-- 
							<small>
								DNA Methylation, Chromatin Immunoprecipitation and non-coding RNA
							</small> -->

						</div>

						<br>

						<div class="row">
							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-4">
								<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/machine-learning-project.jpg">
							</div>

							<div class="col col-xs-12 col-sm-12 col-md-6 col-lg-8">
								<p>
									The module on Machine Learning will allow participants to explore various machine learning methods and their application to various types of high-throughput biomedical datasets. As a hot topic, the terminology and uses of machine learning across various domains have been widely discussed. Using examples in precision medicine, we will learn to apply methods and combine them together to solve real-world challenges.
								</p>
								<ul>
									<li>Machine Learning for High-throughput data in research and biomedical applications</li>
									<li>Conventional tools that are used: clustering, dimensionality reduction, classification and feature selection</li>
									<li>General Linear models and Network Analysis</li>
									<li>Application and Tuning of Machine Learning to solve real-world challenges</li>
								</ul>
							</div>
						</div>
					</div>
					
				</li>
			</ul>

		</section> <!-- .cd-hero -->

	</div>



























	<div class="container">
		<div class="row">
			<div class="col centered col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="cover-img schedule-demo">
					<h2>
						SUPPORTED BY REGULAR WORKSHOPS & <b>HACKATHONS</b>
					</h2>
				</div>
			</div>
		</div>
	</div>

<section id="events-preview" class="cd-horizontal-timeline loaded container">
		<div class="horizontal-timeline">
			<div class="events-wrapper">
				<div class="group-events" style="width: 2100px; transform: translateX(0px);">
					<ol>

						
							
							
								
															
								<li><a href="#0" data-date="05/11/2018" class="selected" style="left: 120px;">5 Nov</a></li>

							
															
								<li><a href="#0" data-date="09/11/2018" style="left: 180px;">9 Nov</a></li>

							
															
								<li><a href="#0" data-date="03/12/2018" style="left: 540px;">3 Dec</a></li>

							
															
								<li><a href="#0" data-date="10/12/2018" style="left: 660px;">10 Dec</a></li>

							
															
								<li><a href="#0" data-date="17/12/2018" style="left: 780px;">17 Dec</a></li>

							
															
								<li><a href="#0" data-date="18/01/2019" style="left: 1260px;">18 Jan</a></li>

							
															
								<li><a href="#0" data-date="04/02/2019" style="left: 1500px;">4 Feb</a></li>

							
															
								<li><a href="#0" data-date="25/02/2019" style="left: 1800px;">25 Feb</a></li>

							
															
								<li><a href="#0" data-date="08/03/2019" style="left: 1980px;">8 Mar</a></li>

							
							 
											</ol>

					<span class="filling-line" aria-hidden="true" style="transform: scaleX(0.723017);"></span>
				</div> <!-- .events -->
			</div> <!-- .events-wrapper -->
				
			<ul class="cd-timeline-navigation">
				<li><a href="#0" class="prev">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul> <!-- .cd-timeline-navigation -->
		</div> <!-- .timeline -->

		<div class="events-content">
			<ol class="tab-content thim-list-event">

				
					
										
											
						
							<li class="bp_group type-bp_group item-event post-19093 selected tp_event type-tp_event status-publish has-post-thumbnail hentry tp_event_category-program tp_event_category-upcomingevent tp_event_tag-lbrn pmpro-has-access" data-date="05/11/2018">
							    <div class="time-from">
							        <div class="date">
										05							        </div>
							        <div class="month">
										November							        </div>
							    </div>
								<div class="image"><a href="#intro-to-bio" class="event-img"><img src="https://edu.t-bio.info/wp-content/uploads/2019/02/LBRN-IntroBioinformatics-WORKSHOP.jpg" alt="19krEBIiDLLi7LKz_bEFt4eWydGYD6Zk-lUZaU3nkyuTfS6HIeAq7RrPD7q5cToQ" title="19krEBIiDLLi7LKz_bEFt4eWydGYD6Zk-lUZaU3nkyuTfS6HIeAq7RrPD7q5cToQ" width="450" height="233"></a></div>							    <div class="event-wrapper">
							        <h5 class="title">
							            <a href="#intro-to-bio">Introduction to Bioinformatics</a>
							        </h5>

							        <div class="meta">
							            <div class="time">
							                <i class="fa fa-clock-o"></i>
											10:00 - 12:00							            </div>
							            <div class="location">
							                <i class="fa fa-map-marker"></i>
							                <a href="#at-your-location">At Your Location</a>							            </div>
							        </div>
							        <div class="description">
										<p>Introduce bioinformatics to your students as a data science approach to biology. Learn about the important progress in basic and translational research afforded by data technologies and discoveries in precision medicine, drug discovery and crop improvement.</p>							        </div>
							    </div>

							</li>
										

										
						
							<li class="bp_group type-bp_group item-event post-19095 tp_event type-tp_event status-publish has-post-thumbnail hentry tp_event_category-program tp_event_category-upcomingevent tp_event_tag-lbrn pmpro-has-access" data-date="09/11/2018">
							    <div class="time-from">
							        <div class="date">
										09							        </div>
							        <div class="month">
										November							        </div>
							    </div>
								<div class="image"><a href="#intro-to-rna-seq" class="event-img"><img src="https://edu.t-bio.info/wp-content/uploads/2019/02/LBRN-IntroRNA-seq-WORKSHOP.jpg" alt="1bHX8cEY78GDgMidbSyQWHV0SrBlHxfiX4M5oeVpb8jOs5BdiYxhomMHZg2D_U4t7" title="1bHX8cEY78GDgMidbSyQWHV0SrBlHxfiX4M5oeVpb8jOs5BdiYxhomMHZg2D_U4t7" width="450" height="233"></a></div>							    <div class="event-wrapper">
							        <h5 class="title">
							            <a href="#intro-to-rna-seq"> Introduction to RNA Seq</a>
							        </h5>

							        <div class="meta">
							            <div class="time">
							                <i class="fa fa-clock-o"></i>
											10:00 - 12:00							            </div>
							            <div class="location">
							                <i class="fa fa-map-marker"></i>
							                <a href="#at-your-location">At Your Location</a>							            </div>
							        </div>
							        <div class="description">
										<p>RNA-seq is a standard way to analyze gene expression using Next Generation Sequencing data. This introductory meeting is designed to cover the basics of Next Generation Sequencing process, library prep techniques and the resulting data qualities to be considered when performing the analysis.</p>							        </div>
							    </div>

							</li>
										

										
						
							<li class="bp_group type-bp_group item-event post-19101 tp_event type-tp_event status-publish has-post-thumbnail hentry tp_event_category-program tp_event_category-upcomingevent tp_event_tag-lbrn pmpro-has-access" data-date="03/12/2018">
							    <div class="time-from">
							        <div class="date">
										03							        </div>
							        <div class="month">
										December							        </div>
							    </div>
								<div class="image"><a href="#intro-to-epigenetics" class="event-img"><img src="https://edu.t-bio.info/wp-content/uploads/2019/02/LBRN-IntroEpigenetics-WORKSHOP.jpg" alt="1y5wKbNCu9Ixynr1wumcY2Rai1oe_QjasuqCeZSochssMkDcP1rwdLwsIe8iJUvVG" title="1y5wKbNCu9Ixynr1wumcY2Rai1oe_QjasuqCeZSochssMkDcP1rwdLwsIe8iJUvVG" width="450" height="233"></a></div>							    <div class="event-wrapper">
							        <h5 class="title">
							            <a href="#intro-to-epigenetics"> Introduction to Epigenomics</a>
							        </h5>

							        <div class="meta">
							            <div class="time">
							                <i class="fa fa-clock-o"></i>
											10:00 - 12:00							            </div>
							            <div class="location">
							                <i class="fa fa-map-marker"></i>
							                Online only							            </div>
							        </div>
							        <div class="description">
										<p>Epigenetics is the study of variation in gene expression that is the result of changes not related to changes in DNA code. Epigenetics is a recent field of study gaining popularity as technologies like chromatin immunoprecipitation and bisulfite sequencing reveal the important role chromatin packaging and DNA methylation play in cell development and differentiation. We also discuss the role of non-coding RNAs in these processes.</p>							        </div>
							    </div>

							</li>
										

										
						
							<li class="bp_group type-bp_group item-event post-19097 tp_event type-tp_event status-publish has-post-thumbnail hentry tp_event_category-program tp_event_category-upcomingevent tp_event_tag-lbrn pmpro-has-access" data-date="10/12/2018">
							    <div class="time-from">
							        <div class="date">
										10							        </div>
							        <div class="month">
										December							        </div>
							    </div>
								<div class="image"><a href="#rna-seq-workshop" class="event-img"><img src="https://edu.t-bio.info/wp-content/uploads/2019/02/LBRN-RNASEQ-Handson-WORKSHOP.jpg" alt="RNA-Seq-Workshop" title="RNA-Seq-Workshop" width="450" height="233"></a></div>							    <div class="event-wrapper">
							        <h5 class="title">
							            <a href="#rna-seq-workshop"> RNA Seq Workshop</a>
							        </h5>

							        <div class="meta">
							            <div class="time">
							                <i class="fa fa-clock-o"></i>
											10:00 - 12:00							            </div>
							            <div class="location">
							                <i class="fa fa-map-marker"></i>
							                <a href="#at-your-location">At Your Location</a>							            </div>
							        </div>
							        <div class="description">
										<p>Workshops are longer sessions that provide hands-on training and a deep dive into analysis methods and process. RNA-seq conceptually seems like a straight-forward approach, but the understanding of each step with practical considerations around various methods of pre-processing, mapping and quantification play a major role in clear and reliable results.
</p>							        </div>
							    </div>

							</li>
										

										
						
							<li class="bp_group type-bp_group item-event post-19102 tp_event type-tp_event status-publish has-post-thumbnail hentry tp_event_category-program tp_event_category-upcomingevent tp_event_tag-lbrn pmpro-has-access" data-date="17/12/2018">
							    <div class="time-from">
							        <div class="date">
										17							        </div>
							        <div class="month">
										December							        </div>
							    </div>
								<div class="image"><a href="#intro-to-genomics" class="event-img"><img src="https://edu.t-bio.info/wp-content/uploads/2019/02/LBRN-IntroGenomics-WORKSHOP.jpg" alt="Intro-To-Genomics" title="Intro-To-Genomics" width="450" height="233"></a></div>							    <div class="event-wrapper">
							        <h5 class="title">
							            <a href="#intro-to-genomics"> Introduction to Genomics</a>
							        </h5>

							        <div class="meta">
							            <div class="time">
							                <i class="fa fa-clock-o"></i>
											10:00 - 12:00							            </div>
							            <div class="location">
							                <i class="fa fa-map-marker"></i>
							                Online only							            </div>
							        </div>
							        <div class="description">
										<p>Genomics deals with the DNA sequence and analysis of variants. Introduction to the structure and role of DNA, chromosomes and genomic elements like genes, base pairs and codons prepares participants of the program to perform analysis in an informed and logical way.</p>							        </div>
							    </div>

							</li>
										

										
						
							<li class="bp_group type-bp_group item-event post-19104 tp_event type-tp_event status-publish has-post-thumbnail hentry tp_event_category-program tp_event_category-upcomingevent tp_event_tag-lbrn pmpro-has-access" data-date="18/01/2019">
							    <div class="time-from">
							        <div class="date">
										18							        </div>
							        <div class="month">
										January							        </div>
							    </div>
								<div class="image"><a href="#bioinformatics-workshop" class="event-img"><img src="https://edu.t-bio.info/wp-content/uploads/2019/02/LBRN-Jan18-2019-Handson-WORKSHOP.jpg" alt="1Yvtw0uMFz5qLDcn-xlYCCNFNB80RtGDq8j0ayNmK0LkKlLlCYotnSQmxwHCohGpO" title="1Yvtw0uMFz5qLDcn-xlYCCNFNB80RtGDq8j0ayNmK0LkKlLlCYotnSQmxwHCohGpO" width="450" height="233"></a></div>							    <div class="event-wrapper">
							        <h5 class="title">
							            <a href="#bioinformatics-workshop"> Bioinformatics Workshop</a>
							        </h5>

							        <div class="meta">
							            <div class="time">
							                <i class="fa fa-clock-o"></i>
											10:00 - 12:00							            </div>
							            <div class="location">
							                <i class="fa fa-map-marker"></i>
							                <a href="#at-your-location">At Your Location</a>							            </div>
							        </div>
							        <div class="description">
										<p>A general workshop on bioinformatics can be scheduled mid-way through the program to make this experience open to others, like faculty and administration - to demonstrate the way the OmicsLogic program can be used by biology students, clinicians and others. One of the projects or a mix of introductory topics can be combined to offer a comprehensive overview of the program or a deep dive into its practical impact.</p>							        </div>
							    </div>

							</li>
										

										
						
							<li class="bp_group type-bp_group item-event post-19105 tp_event type-tp_event status-publish has-post-thumbnail hentry tp_event_category-program tp_event_category-upcomingevent tp_event_tag-lbrn pmpro-has-access" data-date="04/02/2019">
							    <div class="time-from">
							        <div class="date">
										04							        </div>
							        <div class="month">
										February							        </div>
							    </div>
								<div class="image"><a href="#genomics-workshop" class="event-img"><img src="https://edu.t-bio.info/wp-content/uploads/2019/02/LBRN-Genomics-Handson-WORKSHOP.jpg" alt="19Q0mOvPyrctLQCJT2qePeFpEKdTP2r3FsAduWXYAciAK1r3aYnlW3Afwed79LS8" title="19Q0mOvPyrctLQCJT2qePeFpEKdTP2r3FsAduWXYAciAK1r3aYnlW3Afwed79LS8" width="450" height="233"></a></div>							    <div class="event-wrapper">
							        <h5 class="title">
							            <a href="#genomics-workshop"> Genomics Workshop</a>
							        </h5>

							        <div class="meta">
							            <div class="time">
							                <i class="fa fa-clock-o"></i>
											10:00 - 12:00							            </div>
							            <div class="location">
							                <i class="fa fa-map-marker"></i>
							                <a href="#at-your-location">At Your Location</a>							            </div>
							        </div>
							        <div class="description">
										<p>A deep dive into single nucleotide variation and the ways statistical analysis of variance can lead to exciting discoveries of differences between two samples (for example tumor vs. normal in oncology studies), groups of samples (heterozygosity or mutability at the single nucleotide level to discriminate between groups of samples) and even Genome-Wide Association Studies (GWAS).</p>							        </div>
							    </div>

							</li>
										

										
						
							<li class="bp_group type-bp_group item-event post-19106 tp_event type-tp_event status-publish has-post-thumbnail hentry tp_event_category-program tp_event_category-upcomingevent tp_event_tag-lbrn pmpro-has-access" data-date="25/02/2019">
							    <div class="time-from">
							        <div class="date">
										25							        </div>
							        <div class="month">
										February							        </div>
							    </div>
								<div class="image"><a href="#machine-learning-workshop" class="event-img"><img src="https://edu.t-bio.info/wp-content/uploads/2019/02/LBRN-ML-Handson-WORKSHOP.jpg" alt="1XcavElKQIDZY392Kclasd2VUQGuVblXGZdmt0ztZGEHstOAXirQ_yjRhiUobmEg_" title="1XcavElKQIDZY392Kclasd2VUQGuVblXGZdmt0ztZGEHstOAXirQ_yjRhiUobmEg_" width="450" height="233"></a></div>							    <div class="event-wrapper">
							        <h5 class="title">
							            <a href="#machine-learning-workshop"> Machine Learning Workshop</a>
							        </h5>

							        <div class="meta">
							            <div class="time">
							                <i class="fa fa-clock-o"></i>
											10:00 - 12:00							            </div>
							            <div class="location">
							                <i class="fa fa-map-marker"></i>
							                <a href="#at-your-location">At Your Location</a>							            </div>
							        </div>
							        <div class="description">
										<p>Machine Learning is an emerging topic for data scientists working with a variety of data types. When it comes to high-throughput biomedical data, machine learning methods are used for every aspect of analysis: variance, clustering, feature selection, dimensionality reduction and association. In this hands-on sessions, students get exposure to the methods in application to cancer classification and treatment selection for oncology patients.</p>							        </div>
							    </div>

							</li>
										

										
						
							<li class="bp_group type-bp_group item-event post-19103 tp_event type-tp_event status-publish has-post-thumbnail hentry tp_event_category-program tp_event_category-upcomingevent tp_event_tag-lbrn pmpro-has-access" data-date="08/03/2019">
							    <div class="time-from">
							        <div class="date">
										08							        </div>
							        <div class="month">
										March							        </div>
							    </div>
								<div class="image"><a href="#intro-to-metagenomics" class="event-img"><img src="https://edu.t-bio.info/wp-content/uploads/2019/02/LBRN-IntroMetagenomics-WORKSHOP.jpg" alt="1jxDfKXEmbmxfgM2rRGcS8Rvj9660tG34pTqmwxT56i-tGEfy7AvP-BxU_sk8hy-2" title="1jxDfKXEmbmxfgM2rRGcS8Rvj9660tG34pTqmwxT56i-tGEfy7AvP-BxU_sk8hy-2" width="450" height="233"></a></div>							    <div class="event-wrapper">
							        <h5 class="title">
							            <a href="#intro-to-metagenomics">Introduction to MetaGenomics</a>
							        </h5>

							        <div class="meta">
							            <div class="time">
							                <i class="fa fa-clock-o"></i>
											10:00 - 12:00							            </div>
							            <div class="location">
							                <i class="fa fa-map-marker"></i>
							                Online only							            </div>
							        </div>
							        <div class="description">
										<p>LBRN has partnered with Pine Biotech to offer an innovative curriculum that was designed to quickly introduce complex bioinformatics topics in a project-based approach.</p>							        </div>
							    </div>

							</li>
										

					
					
				
			</ol>
		</div> <!-- .events-content -->
	</section>

	<div class="container achievement-container">

		<div class="achievement-header">
		
			<h2>DESIGNED FOR <em>STUDENT ACHIEVEMENT</em></h2>

			<small>
				When it comes to data, everyone moves at their own pace. Make sure no one is left behind!
			</small>			
		</div>


		<br>

		<div class="row">
			<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-8">
				<?php echo the_widget('Thim_Courses_Widget', array( 

					'title' => '', 
					'featured' => true, 
					'limit' => 3, 
					'slider-options' => array( 'show_navigation' => false, 'item_visible' => 3 ),
					'order' => 'popular'

				) ); ?>
			</div>
			<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<!-- <a href="https://edu.t-bio.info/members/example-student" class="example-student-link">
					<span class="img-helper"></span>
					<img src="https://edu.t-bio.info/wp-content/uploads/2019/02/Example-Student.jpg" alt="Example Student">
				</a> -->
				<div class="example_student">

					<div class="example_student_object">
						

						<div class="example_student_badge">

							<?php
								$user_id = 3140;
								$points = mycred_get_users_total_balance( $user_id );

							?>
							
						    <div class="bo-badge <?php echo strtolower( 'Beginner' ); ?> star">
						        <span class="ribbon"><span><?php print esc_html( 'beginner' ); ?></span></span>
						        <div class="progressbar ldBar" data-preset="circle" data-value="18" data-stroke-width="4" data-stroke="#f16767" data-stroke-trail-width="4" data-stroke-trail="#f3ba49">
						            <h4 class="lpub-total-points"><?php echo esc_html( $points ); ?></h4>
						        </div>
						    </div>

						</div>


						<a href="https://edu.t-bio.info/members/example-student" class="example-student-link">

							<?php do_action('omicslogic_student_preview', $user_id); ?>

							<span class="img-helper"></span>

							<img alt="" src="https://edu.t-bio.info/wp-content/themes/etbi-eduma-child/img/example_student.jpg" class="avatar avatar-300 photo" height="300" width="300">

						</a>



					</div>
				
					
				</div>
			</div>
		</div>

		<!-- <img src="https://edu.t-bio.info/wp-content/uploads/2019/01/OmicsLogic-achievement.png"> -->

	</div>

	<div class="container progress-container">

		<h2>AND FACULTY <em>PEACE OF MIND</em></h2>

		<small>
			Student activity for your class and for each individual is at your fingertips.
		</small>

		<br>

		<div class="progress-row row">

			<div class="column col col-xs-12 col-sm-12 col-md-4 col-lg-3 integrations">
				
				<span class="lms-integrations-title">INTEGRATIONS:</span>

				<div class="integration">
					<img src="https://edu.t-bio.info/wp-content/uploads/2019/01/Blackboard-e1548966451369.png">
				</div>

				<div class="integration">
					<img src="https://edu.t-bio.info/wp-content/uploads/2019/01/Moodle.png">
				</div>

				<div class="integration">
					<img src="https://edu.t-bio.info/wp-content/uploads/2019/01/Canvas.png">
				</div>

			</div>



			<div class="column col col-xs-12 col-sm-12 col-md-8 col-lg-9">

				<!-- <img src="https://edu.t-bio.info/wp-content/uploads/2019/01/OmicsLogic-Progress-chart.png"> -->

				<canvas id="overview-chart" width="870" height="350"></canvas>

			</div>


			<!-- <img src="https://edu.t-bio.info/wp-content/uploads/2019/01/OmicsLogic-progress.png"> -->


		</div>


	</div>

	<div class="container pricing-container">

		<!-- <a href="#see-pricing" id="etbi-pricing" class="pricing-modal-trigger"><img class="pricing-modal-trigger" src="https://edu.t-bio.info/wp-content/uploads/2019/01/OmicsLogic-pricing.png"></a> -->

		<div class="pricing-row row">
			<div class="col col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<span class="pricing-header">STARTING AT <span class="starting-price"><span class="price">$45</span></span> per user per month</span>
			</div>
			<div class="learn-more-col col col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<a href="#pricing-modal" class="pricing-learn-more button btn btn-square btn-ghost btn-default btn-lg">Learn More</a>
			</div>
		</div>

	</div>

<!-- 
	<div class="container-fluid">
		<div class="row">
			<div class="wp-block-cover" style="background: #E1E1E1;">
					


			</div>
		</div>
	</div> -->

	<div id="universities-examples" class="container">

		<div class="row" style="margin-bottom: 3em;">
			<div class="col col-lg-12">
				<div class="sc_heading   text-center">
					<h3 style="color:#333;" class="title">TRUSTED BY UNIVERSITIES AROUND THE WORLD</h3>
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

	</div>

	<div class="container">
		<div class="row">
			<div class="col centered col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="#contact-us" class="contact-modal-trigger">
					<div class="cover-img schedule-demo">
						<h2>
							SCHEDULE A DEMO <b>TODAY</b>
						</h2>
					</div>
				</a>
			</div>
		</div>
	</div>

	<?php do_action('omicslogic_before_footer'); ?>

	<script type="text/javascript">
		
		jQuery(document).ready(function($) {

			var $doc = $(document),
				ctx = document.getElementById("overview-chart").getContext("2d"),
				etbi = {
  "total_points": {
    "357": {
      "user_id": 357,
      "user_name": "Trainer Profile",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2734": {
      "user_id": 2734,
      "user_name": "Jacqueline Harris",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2799": {
      "user_id": 2799,
      "user_name": "lvu2",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 2950,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 95.2
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2812": {
      "user_id": 2812,
      "user_name": "jonathan.bynum",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2855": {
      "user_id": 2855,
      "user_name": "natalie-nidetz",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 1750,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 700,
          "2018-12-18": 300,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 88.7
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2856": {
      "user_id": 2856,
      "user_name": "andrea-johnston",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 250,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 8.1
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2857": {
      "user_id": 2857,
      "user_name": "gergana-nestorova",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2858": {
      "user_id": 2858,
      "user_name": "valentino-browning",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2859": {
      "user_id": 2859,
      "user_name": "Ashley A Able",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 1250,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 40.3
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2860": {
      "user_id": 2860,
      "user_name": "andrew-lewin",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": 500,
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 2500,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 500,
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 112.9
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2861": {
      "user_id": 2861,
      "user_name": "rosalie-calderon",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": 500,
          "2018-12-10": 1250,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 56.5
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2862": {
      "user_id": 2862,
      "user_name": "therese-marie-collantes",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 1500,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 500,
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 64.5
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2863": {
      "user_id": 2863,
      "user_name": "jong-ham",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": 200,
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": 250,
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 14.5
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2864": {
      "user_id": 2864,
      "user_name": "nithya-jambunathan",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2865": {
      "user_id": 2865,
      "user_name": "chinchi-liu",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2866": {
      "user_id": 2866,
      "user_name": "zelalem-mekuria",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2867": {
      "user_id": 2867,
      "user_name": "jeffrey-harding",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2868": {
      "user_id": 2868,
      "user_name": "aspasia-destouni",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 350,
          "2018-12-18": 150,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 16.1
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2869": {
      "user_id": 2869,
      "user_name": "jared-rudd",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 750,
          "2018-12-18": 100,
          "2018-12-19": 800,
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 53.2
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2870": {
      "user_id": 2870,
      "user_name": "carolyn-chang",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2871": {
      "user_id": 2871,
      "user_name": "david-siefker",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2872": {
      "user_id": 2872,
      "user_name": "omer-soysal",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2873": {
      "user_id": 2873,
      "user_name": "chukwumaobim-nwokwu",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2874": {
      "user_id": 2874,
      "user_name": "john-chabreck",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2875": {
      "user_id": 2875,
      "user_name": "erin-genovese",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2876": {
      "user_id": 2876,
      "user_name": "jovanny-zabaleta",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2877": {
      "user_id": 2877,
      "user_name": "abdelmonsif-ahmed",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2878": {
      "user_id": 2878,
      "user_name": "yong-lee",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2879": {
      "user_id": 2879,
      "user_name": "joshua-vandenbrink",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2880": {
      "user_id": 2880,
      "user_name": "melyssa-bratton",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2881": {
      "user_id": 2881,
      "user_name": "Cherie M. Pucheu",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2882": {
      "user_id": 2882,
      "user_name": "subash-ghimire",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 2500,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 1000,
          "2018-12-18": 150,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 117.7
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2883": {
      "user_id": 2883,
      "user_name": "sunil-sirohi",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2884": {
      "user_id": 2884,
      "user_name": "john-mckowen",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 500,
          "2018-12-18": "0",
          "2018-12-19": 250,
          "2018-12-20": 250,
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 32.3
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2885": {
      "user_id": 2885,
      "user_name": "matthew-hayes",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2886": {
      "user_id": 2886,
      "user_name": "nabanita-bhatt3",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2887": {
      "user_id": 2887,
      "user_name": "marie-baudena",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2888": {
      "user_id": 2888,
      "user_name": "philip-jung",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 2350,
          "2018-12-11": "0",
          "2018-12-12": 150,
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 80.6
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2889": {
      "user_id": 2889,
      "user_name": "ronald-thune",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2890": {
      "user_id": 2890,
      "user_name": "lisa-fultz",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": 100,
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 3.2
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2891": {
      "user_id": 2891,
      "user_name": "William Donahue",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": 300,
          "2018-12-03": 700,
          "2018-12-04": "0",
          "2018-12-05": 100,
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": 500,
          "2018-12-10": 2750,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": 850,
          "2018-12-15": 150,
          "2018-12-16": "0",
          "2018-12-17": 700,
          "2018-12-18": 300,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 204.8
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2892": {
      "user_id": 2892,
      "user_name": "niranjan-baisakh",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2893": {
      "user_id": 2893,
      "user_name": "michael-mcgee",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": 500,
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": 900,
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 750,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 700,
          "2018-12-18": 150,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": 300,
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 106.5
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2894": {
      "user_id": 2894,
      "user_name": "ye-fang",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2895": {
      "user_id": 2895,
      "user_name": "le-yan",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": 200,
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 750,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 700,
          "2018-12-18": 300,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 62.9
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2896": {
      "user_id": 2896,
      "user_name": "sunggook-park",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2897": {
      "user_id": 2897,
      "user_name": "shahensha-shaik",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2898": {
      "user_id": 2898,
      "user_name": "africa-dauphiney",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2899": {
      "user_id": 2899,
      "user_name": "megan-anciro",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2900": {
      "user_id": 2900,
      "user_name": "sean-perry",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2901": {
      "user_id": 2901,
      "user_name": "junseo-choi",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2902": {
      "user_id": 2902,
      "user_name": "fokhrul-hossain",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2903": {
      "user_id": 2903,
      "user_name": "krishna-dahal",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2904": {
      "user_id": 2904,
      "user_name": "michael-sinegar",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2905": {
      "user_id": 2905,
      "user_name": "mohammad-tohid",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 1000,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 600,
          "2018-12-18": 150,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 56.5
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2906": {
      "user_id": 2906,
      "user_name": "ira-baggett",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": 500,
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 16.1
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2907": {
      "user_id": 2907,
      "user_name": "md-ekhtear-hossain",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 1000,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 750,
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 56.5
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2908": {
      "user_id": 2908,
      "user_name": "manali-singha",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2909": {
      "user_id": 2909,
      "user_name": "jorge-belgodere",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2910": {
      "user_id": 2910,
      "user_name": "courtney-grigsby",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2911": {
      "user_id": 2911,
      "user_name": "charles-malveaux",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2912": {
      "user_id": 2912,
      "user_name": "nishir-mehta",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2913": {
      "user_id": 2913,
      "user_name": "Charles E. Byrne",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2914": {
      "user_id": 2914,
      "user_name": "linda-paul",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2915": {
      "user_id": 2915,
      "user_name": "manisha-panta",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2916": {
      "user_id": 2916,
      "user_name": "frederick-stolzle",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2917": {
      "user_id": 2917,
      "user_name": "md-tamjidul-hoque",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2918": {
      "user_id": 2918,
      "user_name": "william-yu",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2919": {
      "user_id": 2919,
      "user_name": "wenzhi-gong",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2920": {
      "user_id": 2920,
      "user_name": "andrea-edwards",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2921": {
      "user_id": 2921,
      "user_name": "bernard-rees",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2922": {
      "user_id": 2922,
      "user_name": "timothy-king",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2923": {
      "user_id": 2923,
      "user_name": "tara-williams-hart",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2924": {
      "user_id": 2924,
      "user_name": "gil-calderon",
      "credit": {
        "points": {
          "2018-12-01": 100,
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 3.2
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2925": {
      "user_id": 2925,
      "user_name": "prerna-dua",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2926": {
      "user_id": 2926,
      "user_name": "babu-baniya",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2927": {
      "user_id": 2927,
      "user_name": "xiaoming-liu",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2928": {
      "user_id": 2928,
      "user_name": "jhonson-leonard",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2939": {
      "user_id": 2939,
      "user_name": "Subbaiah Chalivendra",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2956": {
      "user_id": 2956,
      "user_name": "Christina Kolbmann",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2957": {
      "user_id": 2957,
      "user_name": "Ram Devireddy",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2958": {
      "user_id": 2958,
      "user_name": "Premina Sivagnanasundaram",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2965": {
      "user_id": 2965,
      "user_name": "Laxman Ghimire",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 1750,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 56.5
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2966": {
      "user_id": 2966,
      "user_name": "Sagar Paudel",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2972": {
      "user_id": 2972,
      "user_name": "Young Ju",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": 1500,
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 700,
          "2018-12-18": 300,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 80.6
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "2977": {
      "user_id": 2977,
      "user_name": "Tianyun Long",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3042": {
      "user_id": 3042,
      "user_name": "moaramartins",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3048": {
      "user_id": 3048,
      "user_name": "Chevon Jordan",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": 100,
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 450,
          "2018-12-18": 300,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 27.4
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3102": {
      "user_id": 3102,
      "user_name": "Sanjay Batra",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 100,
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 3.2
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3103": {
      "user_id": 3103,
      "user_name": "Devaiah Kambiranda",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 100,
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 3.2
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3104": {
      "user_id": 3104,
      "user_name": "Prathyusha Bagam",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 100,
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 3.2
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3105": {
      "user_id": 3105,
      "user_name": "Hamid Esmaeili",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 100,
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 3.2
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3106": {
      "user_id": 3106,
      "user_name": "Yuankai Dong",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 450,
          "2018-12-18": 150,
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 19.4
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3107": {
      "user_id": 3107,
      "user_name": "Jean Christopher Chamcheu",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": 100,
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 3.2
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3140": {
      "user_id": 3140,
      "user_name": "John Doe",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": 1850,
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 59.7
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    },
    "3289": {
      "user_id": 3289,
      "user_name": "Titilope Dokunmu",
      "credit": {
        "points": {
          "2018-12-01": "0",
          "2018-12-02": "0",
          "2018-12-03": "0",
          "2018-12-04": "0",
          "2018-12-05": "0",
          "2018-12-06": "0",
          "2018-12-07": "0",
          "2018-12-08": "0",
          "2018-12-09": "0",
          "2018-12-10": "0",
          "2018-12-11": "0",
          "2018-12-12": "0",
          "2018-12-13": "0",
          "2018-12-14": "0",
          "2018-12-15": "0",
          "2018-12-16": "0",
          "2018-12-17": "0",
          "2018-12-18": "0",
          "2018-12-19": "0",
          "2018-12-20": "0",
          "2018-12-21": "0",
          "2018-12-22": "0",
          "2018-12-23": "0",
          "2018-12-24": "0",
          "2018-12-25": "0",
          "2018-12-26": "0",
          "2018-12-27": "0",
          "2018-12-28": "0",
          "2018-12-29": "0",
          "2018-12-30": "0",
          "2018-12-31": "0"
        },
        "average": 0
      },
      "from": "2018-12-01",
      "to": "2018-12-31"
    }
  },
  "group_log": {
    "entries": {
      "6586": {
        "id": "6586",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "2869",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545139860",
        "entry": "Points for 12/18/18 2.2 processing",
        "data": "3888171",
        "pipeline_id": ""
      },
      "6594": {
        "id": "6594",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "2869",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545182783",
        "entry": "Points for 12/18/18 2.2 done",
        "data": "3888171",
        "pipeline_id": ""
      },
      "6601": {
        "id": "6601",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "2869",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545224492",
        "entry": "Points for gene expression norm 12/19/18 processing",
        "data": "3888183",
        "pipeline_id": ""
      },
      "6602": {
        "id": "6602",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "2869",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545224606",
        "entry": "Points for gene expression norm 12/19/18 done",
        "data": "3888183",
        "pipeline_id": ""
      },
      "6603": {
        "id": "6603",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "2869",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545224606",
        "entry": "Points for gene expression norm 12/19/18 done",
        "data": "3888183",
        "pipeline_id": ""
      },
      "6604": {
        "id": "6604",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "2869",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545228051",
        "entry": "Points for gen exp norm 12/19/18 redo processing",
        "data": "3888184",
        "pipeline_id": ""
      },
      "6605": {
        "id": "6605",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "2869",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545228166",
        "entry": "Points for gen exp norm 12/19/18 redo done",
        "data": "3888184",
        "pipeline_id": ""
      },
      "6616": {
        "id": "6616",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "2884",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545233972",
        "entry": "Points for mushroom body processing",
        "data": "3888190",
        "pipeline_id": ""
      },
      "6617": {
        "id": "6617",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "2884",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545234054",
        "entry": "Points for mushroom body done",
        "data": "3888190",
        "pipeline_id": ""
      },
      "6626": {
        "id": "6626",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "2884",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545309893",
        "entry": "Points for cell lines test processing",
        "data": "3888195",
        "pipeline_id": ""
      },
      "6627": {
        "id": "6627",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "2884",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545309995",
        "entry": "Points for cell lines test done",
        "data": "3888195",
        "pipeline_id": ""
      },
      "6706": {
        "id": "6706",
        "ref": "registration",
        "ref_id": "3140",
        "user_id": "3140",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545837640",
        "entry": "%plural% for becoming a member",
        "data": "a:1:{s:8:\"ref_type\";s:4:\"user\";}",
        "pipeline_id": ""
      },
      "6709": {
        "id": "6709",
        "ref": "learnpress_learner_pass_course",
        "ref_id": "7121",
        "user_id": "3140",
        "creds": "500",
        "ctype": "mycred_default",
        "time": "1545839780",
        "entry": "%plural% for passing a course",
        "data": "a:1:{s:8:\"ref_type\";s:4:\"post\";}",
        "pipeline_id": ""
      },
      "6710": {
        "id": "6710",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545843312",
        "entry": "Points for PCA processing",
        "data": "3888227",
        "pipeline_id": ""
      },
      "6711": {
        "id": "6711",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545843373",
        "entry": "Points for RNA Seq processing",
        "data": "3888228",
        "pipeline_id": ""
      },
      "6712": {
        "id": "6712",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545843423",
        "entry": "Points for LDA processing",
        "data": "3888229",
        "pipeline_id": ""
      },
      "6713": {
        "id": "6713",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545843451",
        "entry": "Points for swLDA processing",
        "data": "3888230",
        "pipeline_id": ""
      },
      "6714": {
        "id": "6714",
        "ref": "pipeline_processing",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "100",
        "ctype": "mycred_default",
        "time": "1545843492",
        "entry": "Points for Decision Tree processing",
        "data": "3888231",
        "pipeline_id": ""
      },
      "6720": {
        "id": "6720",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545857214",
        "entry": "Points for Decision Tree done",
        "data": "3888231",
        "pipeline_id": ""
      },
      "6721": {
        "id": "6721",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545857226",
        "entry": "Points for swLDA done",
        "data": "3888230",
        "pipeline_id": ""
      },
      "6722": {
        "id": "6722",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545857291",
        "entry": "Points for LDA done",
        "data": "3888229",
        "pipeline_id": ""
      },
      "6723": {
        "id": "6723",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545862673",
        "entry": "Points for RNA Seq done",
        "data": "3888228",
        "pipeline_id": ""
      },
      "6724": {
        "id": "6724",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "3140",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545864524",
        "entry": "Points for PCA done",
        "data": "3888227",
        "pipeline_id": ""
      },
      "6772": {
        "id": "6772",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "2893",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545903442",
        "entry": "Points for cell line mut call done",
        "data": "3888152",
        "pipeline_id": ""
      },
      "6773": {
        "id": "6773",
        "ref": "pipeline_done",
        "ref_id": "0",
        "user_id": "2893",
        "creds": "150",
        "ctype": "mycred_default",
        "time": "1545903442",
        "entry": "Points for cell line mut call done",
        "data": "3888152",
        "pipeline_id": ""
      }
    },
    "average": 142,
    "range": {
      "min": 100,
      "max": 500
    }
  },
  "group_averages": {
    "2018-12-01": {
      "average": 0,
      "entries": []
    },
    "2018-12-02": {
      "average": 500,
      "entries": {
        "5892": [
          "2018-12-02 09:10:38",
          "500"
        ],
        "5899": [
          "2018-12-02 15:55:17",
          "500"
        ]
      },
      "creds": {
        "2860": 500,
        "2893": 500
      }
    },
    "2018-12-03": {
      "average": 500,
      "entries": {
        "5904": [
          "2018-12-03 07:51:12",
          "500"
        ],
        "5907": [
          "2018-12-03 09:09:54",
          "500"
        ]
      },
      "creds": {
        "2891": 500,
        "2906": 500
      }
    },
    "2018-12-04": {
      "average": 0,
      "entries": []
    },
    "2018-12-05": {
      "average": 0,
      "entries": []
    },
    "2018-12-06": {
      "average": 0,
      "entries": []
    },
    "2018-12-07": {
      "average": 0,
      "entries": []
    },
    "2018-12-08": {
      "average": 0,
      "entries": []
    },
    "2018-12-09": {
      "average": 500,
      "entries": {
        "5995": [
          "2018-12-09 03:34:44",
          "500"
        ],
        "5997": [
          "2018-12-09 14:53:00",
          "500"
        ]
      },
      "creds": {
        "2861": 500,
        "2891": 500
      }
    },
    "2018-12-10": {
      "average": 0,
      "entries": []
    },
    "2018-12-11": {
      "average": 0,
      "entries": []
    },
    "2018-12-12": {
      "average": 0,
      "entries": []
    },
    "2018-12-13": {
      "average": 0,
      "entries": []
    },
    "2018-12-14": {
      "average": 500,
      "entries": {
        "6358": [
          "2018-12-14 09:44:20",
          "500"
        ]
      },
      "creds": {
        "2891": 500
      }
    },
    "2018-12-15": {
      "average": 0,
      "entries": []
    },
    "2018-12-16": {
      "average": 0,
      "entries": []
    },
    "2018-12-17": {
      "average": 500,
      "entries": {
        "6534": [
          "2018-12-17 12:48:45",
          "500"
        ]
      },
      "creds": {
        "2860": 500
      }
    },
    "2018-12-18": {
      "average": 0,
      "entries": []
    },
    "2018-12-19": {
      "average": 0,
      "entries": []
    },
    "2018-12-20": {
      "average": 0,
      "entries": []
    },
    "2018-12-21": {
      "average": 0,
      "entries": []
    },
    "2018-12-22": {
      "average": 0,
      "entries": []
    },
    "2018-12-23": {
      "average": 0,
      "entries": []
    },
    "2018-12-24": {
      "average": 0,
      "entries": []
    },
    "2018-12-25": {
      "average": 0,
      "entries": []
    },
    "2018-12-26": {
      "average": 500,
      "entries": {
        "6709": [
          "2018-12-26 15:56:20",
          "500"
        ]
      },
      "creds": {
        "3140": 500
      }
    },
    "2018-12-27": {
      "average": 0,
      "entries": []
    },
    "2018-12-28": {
      "average": 0,
      "entries": []
    },
    "2018-12-29": {
      "average": 0,
      "entries": []
    },
    "2018-12-30": {
      "average": 0,
      "entries": []
    },
    "2018-12-31": {
      "average": 0,
      "entries": []
    }
  },
  "server_group_avg": {
    "2018-12-01": {
      "average": 100,
      "entries": {
        "5884": [
          "2018-12-01 08:42:28",
          "100"
        ]
      },
      "creds": {
        "2924": 100
      }
    },
    "2018-12-02": {
      "average": 300,
      "entries": {
        "5898": [
          "2018-12-02 15:39:02",
          "100"
        ],
        "5900": [
          "2018-12-02 16:11:11",
          "100"
        ],
        "5902": [
          "2018-12-02 16:17:02",
          "100"
        ]
      },
      "creds": {
        "2891": 300
      }
    },
    "2018-12-03": {
      "average": 166.7,
      "entries": {
        "5905": [
          "2018-12-03 08:14:42",
          "100"
        ],
        "5906": [
          "2018-12-03 08:26:39",
          "100"
        ],
        "5910": [
          "2018-12-03 10:40:51",
          "100"
        ],
        "5916": [
          "2018-12-03 16:43:21",
          "100"
        ],
        "5917": [
          "2018-12-03 16:51:18",
          "100"
        ]
      },
      "creds": {
        "2863": 200,
        "2890": 100,
        "2891": 200
      }
    },
    "2018-12-04": {
      "average": 200,
      "entries": {
        "5928": [
          "2018-12-04 16:07:01",
          "100"
        ],
        "5929": [
          "2018-12-04 16:07:40",
          "100"
        ]
      },
      "creds": {
        "2895": 200
      }
    },
    "2018-12-05": {
      "average": 100,
      "entries": {
        "5958": [
          "2018-12-05 14:47:20",
          "100"
        ]
      },
      "creds": {
        "2891": 100
      }
    },
    "2018-12-06": {
      "average": 900,
      "entries": {
        "5972": [
          "2018-12-06 08:57:21",
          "100"
        ],
        "5973": [
          "2018-12-06 08:58:43",
          "150"
        ],
        "5974": [
          "2018-12-06 09:09:59",
          "100"
        ],
        "5975": [
          "2018-12-06 09:11:24",
          "150"
        ],
        "5976": [
          "2018-12-06 09:11:24",
          "150"
        ],
        "5977": [
          "2018-12-06 09:15:21",
          "100"
        ],
        "5978": [
          "2018-12-06 09:17:02",
          "150"
        ]
      },
      "creds": {
        "2893": 900
      }
    },
    "2018-12-07": {
      "average": 250,
      "entries": {
        "5982": [
          "2018-12-07 11:51:17",
          "100"
        ],
        "5983": [
          "2018-12-07 11:52:47",
          "150"
        ]
      },
      "creds": {
        "2863": 250
      }
    },
    "2018-12-08": {
      "average": 0,
      "entries": []
    },
    "2018-12-09": {
      "average": 0,
      "entries": []
    },
    "2018-12-10": {
      "average": 320,
      "entries": {
        "6214": [
          "2018-12-10 11:51:00",
          "150"
        ],
        "6216": [
          "2018-12-10 11:54:48",
          "100"
        ],
        "6218": [
          "2018-12-10 11:57:31",
          "150"
        ],
        "6220": [
          "2018-12-10 11:58:09",
          "100"
        ],
        "6221": [
          "2018-12-10 11:58:38",
          "100"
        ],
        "6222": [
          "2018-12-10 11:58:57",
          "100"
        ],
        "6224": [
          "2018-12-10 11:59:38",
          "150"
        ],
        "6225": [
          "2018-12-10 12:00:21",
          "150"
        ],
        "6227": [
          "2018-12-10 12:01:20",
          "100"
        ],
        "6228": [
          "2018-12-10 12:01:40",
          "150"
        ],
        "6229": [
          "2018-12-10 12:01:46",
          "100"
        ],
        "6230": [
          "2018-12-10 12:02:08",
          "100"
        ],
        "6231": [
          "2018-12-10 12:02:28",
          "100"
        ],
        "6232": [
          "2018-12-10 12:02:37",
          "100"
        ],
        "6233": [
          "2018-12-10 12:03:00",
          "150"
        ],
        "6235": [
          "2018-12-10 12:03:08",
          "150"
        ],
        "6236": [
          "2018-12-10 12:03:54",
          "150"
        ],
        "6237": [
          "2018-12-10 12:04:04",
          "150"
        ],
        "6238": [
          "2018-12-10 12:09:51",
          "150"
        ],
        "6239": [
          "2018-12-10 12:56:36",
          "100"
        ],
        "6241": [
          "2018-12-10 12:57:49",
          "150"
        ],
        "6265": [
          "2018-12-10 16:33:20",
          "100"
        ],
        "6266": [
          "2018-12-10 16:34:54",
          "150"
        ],
        "6273": [
          "2018-12-10 20:45:49",
          "150"
        ],
        "6274": [
          "2018-12-10 20:45:49",
          "150"
        ]
      },
      "creds": {
        "2799": 550,
        "2855": 150,
        "2856": 250,
        "2862": 250,
        "2882": 500,
        "2888": 250,
        "2891": 250,
        "2905": 500,
        "2965": 250,
        "2972": 250
      }
    },
    "2018-12-11": {
      "average": 0,
      "entries": []
    },
    "2018-12-12": {
      "average": 150,
      "entries": {
        "6319": [
          "2018-12-12 17:33:00",
          "150"
        ]
      },
      "creds": {
        "2888": 150
      }
    },
    "2018-12-13": {
      "average": 0,
      "entries": []
    },
    "2018-12-14": {
      "average": 350,
      "entries": {
        "6362": [
          "2018-12-14 10:44:50",
          "100"
        ],
        "6363": [
          "2018-12-14 10:46:05",
          "100"
        ],
        "6365": [
          "2018-12-14 16:28:14",
          "150"
        ]
      },
      "creds": {
        "2891": 350
      }
    },
    "2018-12-15": {
      "average": 150,
      "entries": {
        "6366": [
          "2018-12-15 02:14:00",
          "150"
        ]
      },
      "creds": {
        "2891": 150
      }
    },
    "2018-12-16": {
      "average": 0,
      "entries": []
    },
    "2018-12-17": {
      "average": 246.2,
      "entries": {
        "6515": [
          "2018-12-17 10:35:11",
          "100"
        ],
        "6516": [
          "2018-12-17 10:35:13",
          "100"
        ],
        "6517": [
          "2018-12-17 10:35:31",
          "100"
        ],
        "6518": [
          "2018-12-17 10:36:00",
          "100"
        ],
        "6519": [
          "2018-12-17 10:36:33",
          "100"
        ],
        "6520": [
          "2018-12-17 10:43:21",
          "150"
        ],
        "6521": [
          "2018-12-17 10:47:18",
          "100"
        ],
        "6522": [
          "2018-12-17 10:49:25",
          "150"
        ],
        "6523": [
          "2018-12-17 10:57:01",
          "100"
        ],
        "6524": [
          "2018-12-17 10:57:29",
          "100"
        ],
        "6525": [
          "2018-12-17 11:00:18",
          "100"
        ],
        "6526": [
          "2018-12-17 11:06:54",
          "150"
        ],
        "6527": [
          "2018-12-17 11:31:52",
          "150"
        ],
        "6529": [
          "2018-12-17 11:40:01",
          "150"
        ],
        "6530": [
          "2018-12-17 11:41:55",
          "150"
        ],
        "6531": [
          "2018-12-17 11:42:44",
          "150"
        ],
        "6532": [
          "2018-12-17 11:44:01",
          "150"
        ],
        "6533": [
          "2018-12-17 11:45:03",
          "150"
        ],
        "6541": [
          "2018-12-17 15:11:01",
          "100"
        ],
        "6547": [
          "2018-12-17 15:21:05",
          "150"
        ],
        "6559": [
          "2018-12-17 15:59:38",
          "100"
        ],
        "6560": [
          "2018-12-17 16:01:13",
          "150"
        ],
        "6561": [
          "2018-12-17 18:49:53",
          "150"
        ],
        "6562": [
          "2018-12-17 22:06:42",
          "150"
        ],
        "6564": [
          "2018-12-17 22:29:04",
          "150"
        ]
      },
      "creds": {
        "2855": 250,
        "2862": 150,
        "2868": 250,
        "2869": 500,
        "2882": 150,
        "2884": 500,
        "2891": 150,
        "2893": 250,
        "2895": 150,
        "2905": 150,
        "2907": 250,
        "3048": 100,
        "3106": 350
      }
    },
    "2018-12-18": {
      "average": 213.6,
      "entries": {
        "6566": [
          "2018-12-18 02:02:42",
          "150"
        ],
        "6567": [
          "2018-12-18 02:25:55",
          "150"
        ],
        "6569": [
          "2018-12-18 03:15:51",
          "150"
        ],
        "6571": [
          "2018-12-18 04:58:33",
          "150"
        ],
        "6572": [
          "2018-12-18 06:59:22",
          "150"
        ],
        "6573": [
          "2018-12-18 07:02:52",
          "150"
        ],
        "6574": [
          "2018-12-18 07:03:20",
          "150"
        ],
        "6575": [
          "2018-12-18 07:04:43",
          "150"
        ],
        "6576": [
          "2018-12-18 07:09:23",
          "150"
        ],
        "6577": [
          "2018-12-18 07:17:51",
          "150"
        ],
        "6580": [
          "2018-12-18 07:38:12",
          "150"
        ],
        "6581": [
          "2018-12-18 08:45:53",
          "150"
        ],
        "6582": [
          "2018-12-18 09:14:16",
          "150"
        ],
        "6583": [
          "2018-12-18 10:14:35",
          "150"
        ],
        "6584": [
          "2018-12-18 10:22:02",
          "150"
        ],
        "6586": [
          "2018-12-18 13:31:00",
          "100"
        ]
      },
      "creds": {
        "2855": 300,
        "2868": 150,
        "2869": 100,
        "2882": 150,
        "2891": 300,
        "2893": 150,
        "2895": 300,
        "2905": 150,
        "2972": 300,
        "3048": 300,
        "3106": 150
      }
    },
    "2018-12-19": {
      "average": 525,
      "entries": {
        "6594": [
          "2018-12-19 01:26:23",
          "150"
        ],
        "6601": [
          "2018-12-19 13:01:32",
          "100"
        ],
        "6602": [
          "2018-12-19 13:03:26",
          "150"
        ],
        "6603": [
          "2018-12-19 13:03:26",
          "150"
        ],
        "6604": [
          "2018-12-19 14:00:51",
          "100"
        ],
        "6605": [
          "2018-12-19 14:02:46",
          "150"
        ],
        "6616": [
          "2018-12-19 15:39:32",
          "100"
        ],
        "6617": [
          "2018-12-19 15:40:54",
          "150"
        ]
      },
      "creds": {
        "2869": 800,
        "2884": 250
      }
    },
    "2018-12-20": {
      "average": 250,
      "entries": {
        "6626": [
          "2018-12-20 12:44:53",
          "100"
        ],
        "6627": [
          "2018-12-20 12:46:35",
          "150"
        ]
      },
      "creds": {
        "2884": 250
      }
    },
    "2018-12-21": {
      "average": 0,
      "entries": []
    },
    "2018-12-22": {
      "average": 0,
      "entries": []
    },
    "2018-12-23": {
      "average": 0,
      "entries": []
    },
    "2018-12-24": {
      "average": 0,
      "entries": []
    },
    "2018-12-25": {
      "average": 0,
      "entries": []
    },
    "2018-12-26": {
      "average": 1250,
      "entries": {
        "6710": [
          "2018-12-26 16:55:12",
          "100"
        ],
        "6711": [
          "2018-12-26 16:56:13",
          "100"
        ],
        "6712": [
          "2018-12-26 16:57:03",
          "100"
        ],
        "6713": [
          "2018-12-26 16:57:31",
          "100"
        ],
        "6714": [
          "2018-12-26 16:58:12",
          "100"
        ],
        "6720": [
          "2018-12-26 20:46:54",
          "150"
        ],
        "6721": [
          "2018-12-26 20:47:06",
          "150"
        ],
        "6722": [
          "2018-12-26 20:48:11",
          "150"
        ],
        "6723": [
          "2018-12-26 22:17:53",
          "150"
        ],
        "6724": [
          "2018-12-26 22:48:44",
          "150"
        ]
      },
      "creds": {
        "3140": 1250
      }
    },
    "2018-12-27": {
      "average": 300,
      "entries": {
        "6772": [
          "2018-12-27 09:37:22",
          "150"
        ],
        "6773": [
          "2018-12-27 09:37:22",
          "150"
        ]
      },
      "creds": {
        "2893": 300
      }
    },
    "2018-12-28": {
      "average": 0,
      "entries": []
    },
    "2018-12-29": {
      "average": 0,
      "entries": []
    },
    "2018-12-30": {
      "average": 0,
      "entries": []
    },
    "2018-12-31": {
      "average": 0,
      "entries": []
    }
  },
  "from": "2018-12-01",
  "until": "2018-12-31",
  "events": {
    "2018-12-17": {
      "date": "2018-12-17 10:00:00",
      "title": "Introduction to Genomics",
      "average": 0
    },
    "2018-12-03": {
      "date": "2018-12-03 10:00:00",
      "title": "Introduction to Epigenetics",
      "average": 0
    },
    "2018-12-10": {
      "date": "2018-12-10 10:00:00",
      "title": "RNA Seq Workshop",
      "average": 0
    }
  }
};

			$('.parallaxie').parallaxie();

	  //     $('.hero-slides').slick({
			// vertical: true,
			// verticalSwiping: true,
			// dots: true,
			// infinite: true,
			// speed: 300,
			// slidesToShow: 1,
			// arrows:false,
			// slidesToScroll: 1
	  //     });

			//hide the subtle gradient layer (.cd-pricing-list > li::after) when pricing table has been scrolled to the end (mobile version only)
			checkScrolling($('.cd-pricing-body'));
			$(window).on('resize', function(){
				window.requestAnimationFrame(function(){checkScrolling($('.cd-pricing-body'))});
			});
			$('.cd-pricing-body').on('scroll', function(){ 
				var selected = $(this);
				window.requestAnimationFrame(function(){checkScrolling(selected)});
			});

			var overview_chart = new Chart( ctx, {
			    type: "line",
			    data: {
			        datasets: [],
			    },
			    options: {
			        scales: {
			            yAxes: [{
			            	label: 'Points',
			                ticks: {
			                    beginAtZero:true,
			                    suggestedMax: etbi.group_log.range['max'] + 100
			                }
			            }],
			            xAxes: [{
							type: 'time',
			                time: {
			                	parser: 'YYYY-MM-DD',
			                	unit: 'day',
			                	displayFormats: {
			                		day: 'MMM Do'
			                	},
			                	min: null,
			                	max: null
			                },
			                ticks: {
			                	source: 'data'
			                }
			            }]
			        },
			        tooltips: {
				        callbacks: {
				            label: function(tooltipItem, data) {
				            	console.log( tooltipItem, data );
				            	if( tooltipItem.datasetIndex === 0 ) {
				            		return data.datasets[ tooltipItem.datasetIndex ].data[ tooltipItem.index ].title;
				            	}
				                return data.datasets[ tooltipItem.datasetIndex ].label + ': ' + tooltipItem.yLabel;
				            }
				        }
				    }
			    },
			    plugins: [{
			         beforeInit: function(chart) {
			            var time = chart.options.scales.xAxes[0].time, // 'time' object reference
			               timeDiff = moment(time.max).diff(moment(time.min), 'd'); // difference (in days) between min and max date
			            // populate 'labels' array
			            // (create a date string for each date between min and max, inclusive)
			            for (var i = 0; i <= timeDiff; i++) {
			               var _label = moment(time.min).add(i, 'd').format('YYYY-MM-DD');
			               chart.data.labels.push(_label);
			            }
			         }
			      }]
			});

			 //addData( overview_chart, etbi );	

			 addAverageData( overview_chart, etbi );


			function addAverageData( chart, data ) {

				console.log( data );

				var datasets = chart.data.datasets,
					events = [],
					edu_averages = [],
					server_averages = [];

				$.each( data.group_averages, function( date, value ){		

				    edu_averages.push( {
						x: date,
						y: value.average
					} );

				} );

				$.each( data.server_group_avg, function( date, value ){		

				    server_averages.push( {
						x: date,
						y: value.average
					} );

				} );
				if( data.hasOwnProperty('events') ) {

					$.each( data.events, function( date, value ){		

					    events.push( {
							x: date,
							y: value.average,
							title: value.title
						} );

					} );

					datasets.push( { 
						label: "Events",
						data: events, 
						borderWidth: 3, 
						backgroundColor: "#fb444420",
						borderColor: "#fb4444",
						pointRadius: 7,
						pointHoverRadius: 10,
						pointBackgroundColor: "#fb4444",
						pointHoverBackgroundColor: "#fb4444"

					} );

				}


				datasets.push( { 
					label: "Server Daily Averages",
					data: server_averages, 
					borderWidth: 3, 
					backgroundColor: "#cccccc80",
					borderColor: "#ccc",

				} );

				datasets.push( { 
					label: "Edu Daily Averages",
					data: edu_averages, 
					borderWidth: 3, 
					backgroundColor: "#ffb60680",
					borderColor: "#ffb606",

				} );

				chart.options.scales.yAxes[0].ticks.suggestedMax = data.group_log.range.max + 100;	

				console.log( datasets );

				chart.update();
			}



			function determineModalContent(modalTrigger) {

				console.log( modalTrigger );

				if( $( modalTrigger ).hasClass('contact-modal-trigger') ) {

					return 'etbi_modal_contact_form'

				} else if( $( modalTrigger ).hasClass('pricing-modal-trigger') ) {

					return 'etbi_modal_pricing_tables';

				} else {

					return '';

				}

			}

			function checkScrolling(tables){
				tables.each(function(){
					var table= $(this),
						totalTableWidth = parseInt(table.children('.cd-pricing-features').width()),
				 		tableViewport = parseInt(table.width());
				 	console.log(table.scrollLeft() - totalTableWidth + tableViewport)
					if( table.scrollLeft() >= totalTableWidth - tableViewport - 1) {
						table.parent('li').addClass('is-ended');
					} else {
						table.parent('li').removeClass('is-ended');
					}
				});
			}
		});
	</script>

	<?php get_footer(); // wp_footer();
