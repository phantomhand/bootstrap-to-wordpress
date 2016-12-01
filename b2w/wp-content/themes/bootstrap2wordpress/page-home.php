<?php
/*
	Template Name: Home Page
*/

// Custom Fields
$prelaunch_price	= get_post_meta( 4, 'prelaunch_price', true );
$launch_price		= get_post_meta( 4, 'launch_price', true );
$final_price		= get_post_meta( 4, 'final_price', true );
$course_url			= get_post_meta( 4, 'course_url', true );
$button_text		= get_post_meta( 4, 'button_text', true );
$optin_text			= get_post_meta( 4, 'optin_text', true );
$optin_button_text	= get_post_meta( 4, 'optin_button_text', true );

// Advanced Custom Fields
$income_feature_image	= get_field ('income_feature_image');
$income_section_title	= get_field ('income_section_title');
$income_section_desc	= get_field ('income_section_description');
$reason_1_desc			= get_field ('reason_1_description');
$reason_2_title			= get_field ('reason_2_title');
$reason_2_desc			= get_field ('reason_2_description');

$who_feature_image		= get_field ('who_feature_image');
$who_section_title		= get_field ('who_section_title');
$who_section_title		= get_field ('who_section_title');
$who_section_body		= get_field ('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body	= get_field('features_section_body');

$project_features_title = get_field('project_feature_title');
$project_features_body 	= get_field('project_feature_body');

$instructor_section_title 	= get_field('instructor_section_title');
$instructor_section_name 	= get_field('instructor_section_name');
$bio_excerpt 			= get_field('bio_excerpt');
$full_bio 				= get_field('full_bio');
$twitter_username 		= get_field('twitter_username');
$facebook_username 		= get_field('facebook_username');
$google_plus_username 	= get_field('google_plus_username');
$num_students 			= get_field('num_students');
$num_reviews 			= get_field('num_reviews');
$num_courses 			= get_field('num_courses');


get_header(); ?>

<!-- HERO
	    ================================================== -->
	    <section id="hero" data-type="background" data-speed="5">
	    	<article>
	    		<div class="container clearfix">
	    			<div class="row">
	    			
	    				<div class="col-sm-5">
			    			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
	    				</div><!-- col -->
	    				
	    				
			    		
			    		<div class="col-sm-7 hero-text">
				    		<h1><?php bloginfo('name') ?></h1>
				            <p class="lead"><?php bloginfo('description') ?></p>
				            
				            <div id="price-timeline">
				            	<div class="price active">
				            		<h4>Pre-Launch Price <small>Ends soon!</small></h4>
				            		<span><?php echo $prelaunch_price; ?></span>
				            	</div><!-- end price -->
				            	<div class="price">
				            		<h4>Launch Price <small>Coming soon!</small></h4>
				            		<span><?php echo $launch_price; ?></span>
				            	</div><!-- end price -->
				            	<div class="price">
				            		<h4>Final Price <small>Coming soon!</small></h4>
				            		<span><?php echo $final_price; ?></span>
				            	</div><!-- end price -->
				            </div><!-- price-timeline -->
	
				            <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
			    		</div><!-- col -->
			    		
	    			</div><!-- row -->
	    		</div><!-- container -->
	    	</article><!-- article -->
	    </section><!-- hero -->
		
		<!-- OPT-IN SECTION -->
		<section id="opt-in">
			<div class="container">
				<div class="row">
				
					<div class="col-sm-8">
						<p class="lead"><?php echo $optin_text; ?></p>
					</div><!-- col -->
					
					<div class="col-sm-4">
						<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- opt-in -->
		
		<!-- BOOST YOUR INCOME -->
		<section id="boost-income">
			<div class="container">
				<div class="section-header">
					
					<!-- if user uploaded an image -->
					<?php 
						if(	!empty($income_feature_image) ) : ?>
						
						<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
						
					<?php endif; ?>
						
				
					<h2><?php echo $income_section_title; ?></h2>
				</div><!-- section-header -->
				
				<p class="lead"><?php echo $income_section_desc; ?></p>
				
				<div class="row">
				
					<div class="col-sm-6">
						<h3><?php echo $reason_1_title;?></h3>
						<p><?php echo $reason_1_desc; ?></p>
					</div><!-- col -->
					
					<div class="col-sm-6">
						<h3><?php echo $reason_2_title; ?></h3>
						<p><?php echo $reason_2_desc; ?></p>
					</div><!-- col -->
				</div><!-- row -->				
			</div><!-- container -->
		</section> <!-- boost-income -->
		
		<!-- WHO BENEFITS -->
		<section id="who-benefits">
			<div class="container">
					
				<div class="section-header">
				<!-- if user uploaded an image -->
					<?php 
						if(	!empty($who_feature_image) ) : ?>
						
						<img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
						
					<?php endif; ?>
					
						<h2><?php echo $who_section_title; ?></h2>
				</div><!-- section-header -->
				
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<?php echo $who_section_body; ?>
					</div> <!-- col -->
				</div> <!-- row -->
			</div><!-- container -->
		</section> <!-- who-benefits -->
		
		<!-- COURSE FEATURES -->
		<section id="course-features">
			<div class="container">
				
				<div class="section-header">
					
					<!-- if user uploaded an image -->
					<?php 
						if(	!empty($features_section_image) ) : ?>
						
						<img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
						
					<?php endif; ?>
					<h2><?php echo $features_section_title; ?></h2>
					
					<!-- if user included body text -->
					<?php 
						if(	!empty($features_section_body) ) : ?>
						
						<p class="lead"><?php echo $features_section_body; ?></p>
					
					<?php endif; ?>
					
				</div><!-- section-header -->
				
				<div class="row">
				
					<?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					
						<div class="col-sm-2">
							<i class="<?php the_field('course_feature_icon'); ?>"></i>
							<h4><?php the_title(); ?></h4>
						</div> <!-- col -->
					
					<?php endwhile; ?>
					
					</div><!-- col -->
				</div><!-- row -->	
			</div><!-- container -->
		</section><!-- course-features -->
		
		<!-- PROJECT FEATURES -->
		<section id="project-features">
			<div class="container">
				
				<h2><?php echo $project_feature_title; ?></h2>
				<p class="lead"><?php echo $project_feature_body; ?></p>
				
				<div class="row">
				
					<?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<div class="col-sm-4">
						<?php 
							if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}
						?>
						
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</div><!-- col -->
					
					<?php endwhile; ?>
				
				</div><!-- row -->	
			</div> <!-- container -->	
		</section><!-- project-features -->
		
		<!-- VIDEO FEATURETTE -->
		<section id="featurette">
			<div class="container">
				<div class="row"
					<div class="col-sm-8 col-sm-offset-2">
						<h2>Watch the Course Introduction</h2>
						<iframe width="100%" height="415" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- featurette -->
		
		<!-- INSTRUCTOR -->
		<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
						</div><!-- end col -->
						<div class="col-lg-4">
							<?php if( !empty($twitter_username) ): ?>
								<a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
							<?php endif; ?>
							
							<?php if( !empty($facebook_username) ): ?>
								<a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
							<?php endif; ?>
							
							<?php if( !empty($google_plus_username) ): ?>
								<a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
							<?php endif; ?>
						</div><!-- end col -->
					
					</div><!-- row -->
					
					<p class="lead"><?php echo $bio_excerpt; ?><p>
					
					<?php echo $full_bio; ?>
					
					<hr>
					
					<h3>The Numbers <small>They Don't Lie</small></h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_students; ?>+ <span>students</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_reviews; ?>+ <span>reviews</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_courses; ?> <span>courses</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
			
					</div><!-- end col -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- instructor -->
		
		<!-- TESTIMONIALS -->
		<section id="kudos">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2>What People Are Saying About Brad</h2>
						
						<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<!-- testimonial 1 -->
						<div class="row testimonial">
							<div class="col-sm-4">
								
								<?php
									if ( has_post_thumbnail() ) { //check for featured image
										the_post_thumbnail( array( 200, 200) );
									}
								?>
								
							</div><!-- col 4 -->
							<div class="col-sm-8">
								<blockquote>
									<?php the_content(); ?>
									
									<cite>&mdash; <?php the_title(); ?></cite> 
								</blockquote>
							</div><!-- col 8 -->					
						</div><!-- row testimonial 1 -->
						
						<?php endwhile; ?>
												
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- kudos -->

<?php get_footer(); ?>
