<?php 

	// $page = get_page_by_path( 'contact-us-pine-biotech' );
	// $page = get_post( $page );
	// $content = $page->post_content;
	// $content = apply_filters( 'the_content', $content );
	// $content = str_replace(']]>', ']]>', $content);

?>

<div class="container-fluid">

		<div class="row">
			
			<div class="col col-lg-8 col-md-7 col-sm-12 col-xs-12">

				<h3 class="title" style="color: #000000;">Send us a Message</h3>
				<p class="sub-heading"><a href="https://edu.t-bio.info/about-us/">Our team</a> wants to hear from you!</p>
				
				<?php echo do_shortcode('[contact-form-7 id="21271" title="OmicsLogic Contact Form"]'); ?>

			</div>

			<div class="column col col-lg-4 col-md-5 col-sm-12 col-xs-12">
				<h3 class="title" style="color: #000000;">Contact Info</h3>
				<p class="sub-heading">Reach out to us! We will contact you in 1-2 business days.</p>
				<div class="row">
					<div class="col col-sm-12">
						<div class="boxes-icon" style="width: 30px; height: 30px;"></div>
						<div class="content-inner" style="width: calc( 100% - 30px - 15px);">
							<div class="sc-heading article_heading">
								<!-- <h3 class="heading__primary" style="color: #000000;">Pine Biotech Phone</h3> -->
							</div>
							<div class="desc-icon-box">
								<div class="desc-content"><i class="fa fa-phone"></i> +1 (504) 267-7789</div>
							</div>
						</div>
					</div>
					<div class="col col-sm-12">
						<div class="boxes-icon" style="width: 30px; height: 30px;"></div>
						<div class="content-inner" style="width: calc( 100% - 30px - 15px);">
							<div class="sc-heading article_heading">
							<!-- <h3 class="heading__primary" style="color: #000000;">Email</h3> -->
							</div>
							<div class="desc-icon-box">
								<div class="desc-content"><i class="fa fa-envelope"></i> <a class="email" href="/cdn-cgi/l/email-protection#afc6c1c9c0efdfc6c1ca82cdc6c0dbcaccc781ccc0c2">info@pine-biotech.com</a></div>
							</div>
						</div>
					</div>
				</div>

				<div class="boxes-icon" style="width: 30px; height: 30px;"></div>
				<div class="content-inner" style="width: calc( 100% - 30px - 15px);">
				<div class="sc-heading article_heading">
				<h3 class="heading__primary" style="color: #000000;">Office</h3>
				</div>
				<div class="desc-icon-box">
				<div class="desc-content">Pine Biotech, 1441 Canal St. Suite 229 New Orleans, LA 70112</div>
				</div>
				</div>

			</div>

		</div>
	
</div>