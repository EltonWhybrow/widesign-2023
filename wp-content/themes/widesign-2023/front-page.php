<?php get_header(); ?>

<div class="bg-white">
	<!-- MESSAGE notification -->
	<!-- <? //php echo do_shortcode("[get-message color='info' message='New tutoring service opening in the New Year']"); 
			?> -->
	<!-- HERO -->
	<section class="flex flex-wrap md:flex-nowrap overflow-hidden">

		<div class="relative flex md:flex-row flex-col justify-center bg-gray-900 w-full">

			<div class="relative m-4 w-full md:w-3/5 text-4xl md:text-7xl lg:text-8xl xl:text-9xl lg:text-right">
				<h2 class="pb-1 font-semibold text-mellow-200 uppercase">Wide<span class="text-mellow-400 stagger-words">Sign
					</span>
					<div class="inline-block pb-1 font-semibold text-mellow-600 uppercase tracking-wide">
						<span class="text-mellow-400 stagger-words">Creat</span>ive

					</div>
				</h2>


			</div>

			<div class="bg-teal-600 p-6 md:w-2/5 lg:w-2/5">
				<h3 class="mb-2 text-2xl">Always putting your goals first, without ever forgetting the end user.</h3>
				<p class="mb-2">Web design, SEO, branding, and hosting. From domain names to email signatures, we can help.</p>

				<a class="group inline-flex relative bg-teal-500 hover:bg-teal-700 pr-8 js-slidein primary-btn" href="#begin-journey">Find out more<svg xmlns="http://www.w3.org/2000/svg" class="inline-block top-3 right-1 absolute ml-1 w-6 h-6 group-hover:rotate-360 transition-rotate duration-500 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg></a>



			</div>
		</div>

		<!-- Put slider here -->
		<!-- <div class="w-full md:w-3/5">
			<?php // echo do_shortcode('[hero-slides number="10"]');
			?>

		
		</div> -->

	</section>

	<!-- MAIN EDITOR CONTENT -->
	<!-- <section id="begin-journey" class="bg-teal-700 px-4 md:px-10 py-20 text-center">
	<?php //if (have_posts()) : while (have_posts()) : the_post();
	//the_content();
	//endwhile;
	//else : 
	?>
			<p>Sorry, no new content for now! 😞</p>
		//<? //php // endif; 
			?>
	</section> -->
	<!-- WHY US -->
	<?php get_template_part('templates/partials/section', 'why-choose');
	?>

	<!-- WHAT WE DO -->

	<?php get_template_part('templates/partials/section', 'what-we-do');
	?>




	<!-- TESTIMONIALS -->
	<!-- background-image:url('/resources/img/pages/home/testimonial-paralax.jpg'); -->
	<section aria-label="testimonials" id="testinonials" class="bg-gray-100 bg-testimonial w-full" style="
		background-repeat: no-repeat;
		background-position: top left;
		background-size: cover !important;
		background-attachment: fixed !important;
    ">
		<div class="mx-auto pt-16 pb-5 md:pb-20 max-w-5xl">
			<div class="flex flex-wrap md:flex-nowrap mx-8 pt-5 md:pt-10">
				<div class="py-0 w-full">
					<?php echo do_shortcode('[customer-quotes number="10"]');
					?>
				</div>
			</div>

		</div>
	</section>



	<!-- NO COMPROMISE -->
	<?php get_template_part('templates/partials/section', 'no-compromise');
	?>

	<!-- FAQS -->
	<?php get_template_part('templates/partials/section', 'faqs-shortcut');
	?>




	<!-- CALLBACK -->
	<?php get_template_part('templates/partials/section', 'call-back');
	?>
	<!-- AUDIT -->
	<?php get_template_part('templates/partials/section', 'site-audit');
	?>


	<!-- TECH STACK -->
	<?php get_template_part('templates/partials/section', 'tech-stack');
	?>


</div>

<?php get_footer(); ?>