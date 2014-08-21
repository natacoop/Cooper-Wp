<?php get_header(); ?>

<!-- HERO (HEADER)\\ -->
	<section class="hero parallax">
		<div class="triangles text">
			<div class="title">
				<h1>Nat Cooper</h1>
			</div>
			<div class="title2">
				<h3>Front-End Web<br>Developer + Designer</h3>
	  		</div>
	  	</div>
	</section> 
	<!-- // HERO -->
	
	<!-- ABOUT\\ -->
	<div class="about">
		<a name="about" id="about"></a>
			<!-- About Intro -->
			<div class="aboutInside">
				<div class="container">
					<img src="images/headshottri.jpg"  width="300">
					<h2><?php the_title(); ?></h2>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php echo $post->post_content; ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
	</div>
	</section>
	<!-- //ABOUT -->

	<!-- CV -->
	<section id="work" class="work">
		<div class="blackbar">
			<div class="cvtriangle span_1_of_12">
			  		<h4><a href="#!" onclick="toggleHeight(this, 550); return false">
			  			View<br>Portfolio<br> +/-
						</a>
			  		</h4>
			</div>
			<section id="folio" class="container folio expandable">
					<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 3 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="item span_4_of_12">
							<h2><?php the_title(); ?></h2>
							<div class="itemThumb"><?php the_post_thumbnail('medium'); ?></div>
							<p class="client"><?php the_field('client_name'); ?></p> 
							<div class="shortDesc">
							  <?php the_field('description'); ?>
							</div>
							<!-- <?php the_content(); ?> -->
						</div>
					<?php endwhile; wp_reset_query(); ?>
			</section>

			<section class="container cv">	
				<!-- PDF \\ -->
				<a href="pdf/NCooperCV2014.pdf" target="_blank"><div class="cvthumb">
				</div></a> 
				<!-- // PDF -->
				<h3>Front-End Web Developer<br>and Designer in Toronto</h3>
				<p>
					Tenacious worker with strong leadership qualities<br>
					Team oriented; well-developed interpersonal skills<br>
					Clear and thorough communicator <br>
					Strong attention for detail<br>
				</p>
			</section>


		<!--<div class="cvtriangle">
				<p>&nbsp;</p>
			</div> -->
		</div> 
	</section>
	<!-- // CV -->

<?php get_footer(); ?>