<?php get_header(); ?>

<div class="wysiwyg-content bg-white">
	<!-- 
	<section class="relative hero-slider py-0"> -->

	<!-- MESSAGE notification -->
	<!-- <? //php echo do_shortcode("[get-message color='info' message='New tutoring service opening in the New Year']"); 
			?> -->

	<!-- BUTTON Request -->
	<!-- <p class="absolute left-1/2 top-1/3 z-50 -translate-x-1/2 transform hover:-translate-y-1 transition duration-400 ease-in-out">
			<a id="register-interest" class='primary-btn pr-12' href='#request-callback'>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-0 right-3 inline-block w-6 h-6 m-1 text-gray-100">
					<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
				Register Interest
			</a>
		</p> -->

	<!-- HERO SLIDER from content -->
	<!-- <? php // echo do_shortcode('[hero-slides number="10"]'); 
			?> -->
	<!-- </section> -->

	<!-- QUOTE -->
	<!-- <section id="quote" class="max-w-5xl mx-auto py-10">

		<div class="text-center">
			<h1 class="hidden">Redhill Tutoring - Bethany Whybrow</h1>
			<div class="flex justify-center mx-10 mt-2">
				<div>
					<h3 class="text-xl uppercase tracking-wide">An investment in knowledge pays the best dividends.</h3>
					<h4 class="pt-0 font-semibold">- Benjamin Franklin</h4>
				</div>
			</div>
		</div>-->

	<!-- Break -->
	<!-- <div class="inline-flex justify-center items-center w-full">
		<hr class="my-4 w-3/5 h-1 bg-gray-300 rounded border-0 dark:bg-gray-700">
		<div class="absolute left-1/2 px-4 bg-white transform -translate-x-1/2 dark:bg-gray-900">
			<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
			</svg>
		</div>
	</div>
	</section>  -->

	<!-- FORM -register interest  -->
	<!-- <section id="request-callback" class="w-full">
		<div class="max-w-5xl mx-auto py-5">
			<div class="flex py-1 space-x-5 mx-8">

				<div class="text-base py-6">
					<h4 class="pt-6 font-semibold">Register your interest</h4>
					<h2 class="text-2xl">I will check availability and <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2">get in touch</span></h2>
					<p class="py-2 text-gray-400">This form registers your interest with Redhill Tutoring, please use the <a class="relative text-base hover:underline" href="/contact#contact-form">contact form</a> if you have any questions or queries.</p>
					<p>
					</p>
					<?php //echo do_shortcode('[wpforms id="153" title="false"]'); 
					?>
				</div>
			</div>
		</div>
	</section> -->

	<!-- HERO -->
	<section class="flex flex-wrap md:flex-nowrap">

		<div class="w-full md:w-2/5 flex justify-center items-center bg-gray-900">
			<div class="pr-3 py-2 text-6xl">
				<h2 class="pb-2 text-mellow-200 uppercase font-semibold">
					Be bold
				</h2>
				<h2 class="pb-2 text-mellow-400 uppercase font-semibold">
					Take chances
				</h2>
				<h2 class="pb-2 text-mellow-600 uppercase font-semibold">
					Create beauty
				</h2>
				<div class="grid justify-items-end mt-2">
					<a class="relative inline-flex pr-8 primary-btn" href="#begin-journey">
						Begin your journey
						<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
						</svg>
					</a>
				</div>
			</div>

		</div>

		<div class="w-full md:w-3/5 object-cover">
			<picture>
				<source srcset="/resources/img/pages/home/widesign-elephant.jpg" type="image/webp">
				<source srcset="/resources/img/pages/home/widesign-elephant.jpg" type="image/jpeg">
				<img class="w-full" src="/resources/img/pages/home/widesign-elephant.jpg" alt="WideSign Web & SEO Services">
			</picture>
		</div>
	</section>

	<!-- MAIN EDITOR CONTENT -->
	<section id="begin-journey" class="py-24 bg-teal-700 text-center">
		<?php if (have_posts()) : while (have_posts()) : the_post();
				the_content();
			endwhile;
		else : ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</section>

	<!-- AUDIT -->
	<section class="flex flex-wrap md:flex-nowrap">

		<div class="relative py-0 w-full md:w-3/5 object-cover">
			<!-- <picture>
				<source srcset="/resources/img/pages/home/widesign-ux-ui.jpg" type="image/webp">
				<source srcset="/resources/img/pages/home/widesign-ux-ui.jpg" type="image/jpeg"> -->
			<img class="w-full" src="/resources/img/pages/home/widesign-ux-ui.jpg" alt="Free website audit">
			<!-- </picture> -->
		</div>

		<div class="w-full md:w-2/5 flex justify-center items-center bg-plum-600">
			<div class="p-10">
				<h2 class="pb-2 text-3xl text-gray-200 uppercase font-semibold">
					Website need an overhaul?<br />
					Slow pages, other issues?
				</h2>
				<p class="pb-2 text-gray-200">
					Get a <span class="px-2 rounded bg-plum-700 inline-block">FREE website audit</span> of the the issues and possible problems with your site that could be slowing it down or holding back your SEO potential.
				</p>
				<div class="grid justify-items-start mt-2">
					<a class="relative inline-flex pr-8 primary-btn" href="#">
						Request audit
						<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</section>


	<!-- TESTIMONIALS -->
	<!-- background-image:url('/resources/img/pages/home/testimonial-paralax.jpg'); -->
	<section id="testinonials" class="w-full bg-gray-100 bg-testimonial" style="
		background-repeat: no-repeat;
		background-position: top left;
		background-size: cover !important;
		background-attachment: fixed !important;
    ">
		<div class="max-w-5xl mx-auto pt-24 pb-28">

			<div class="mx-8 flex flex-wrap md:flex-nowrap pt-5 md:pt-10">
				<div class="py-0 w-full">
					<?php echo do_shortcode('[customer-quotes number="10"]');
					?>
				</div>
			</div>

		</div>
	</section>

	<!-- WHY US -->
	<section class="flex flex-wrap md:flex-nowrap h-128">

		<div class="w-full md:w-2/5 flex justify-center items-center bg-teal-700">
			<div class="p-10">
				<h2 class="pb-2 text-3xl text-gray-200 uppercase font-semibold">
					Why choose WideSign?
				</h2>
				<p class="pb-2 text-gray-200">
					Get a <span class="px-1 rounded bg-plum-800 inline-block transform -skew-y-1">FREE website audit</span> of the the issues and possible problems with your site that could be slowing it down or holding back your SEO potential.
				</p>
				<div class="grid justify-items-start mt-2">
					<a class="relative inline-flex pr-8 primary-btn" href="#">
						Request audit
						<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
						</svg>
					</a>
				</div>
			</div>

		</div>



		<div class="relative py-0 w-full md:w-3/5 object-cover">
			<div class="filter grayscale relative">
				<img class="w-24 h-24 object-cover rounded-lg shadow-xl" src="https://images.unsplash.com/photo-1554629947-334ff61d85dc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=320&amp;h=320&amp;q=80">
				<div class="absolute inset-0 ring-1 ring-inset ring-black/10 rounded-lg"></div>
			</div>
			<div class="image-zoom">
				<div class="zoom-image bg-whyus bg-left-top filter hover:grayscale"></div>
				<!-- <h1 class="zoom-text">CAR</h1> -->
			</div>
			<!-- <picture>
				<source srcset="/resources/img/pages/home/widesign-elton.jpg" type="image/webp">
				<source srcset="/resources/img/pages/home/widesign-elton.jpg" type="image/jpeg">
				<img class="w-full" src="/resources/img/pages/home/widesign-elton.jpg" alt="Web Designer Elton Whybrow">
			</picture> -->
		</div>
	</section>



</div>

<?php get_footer(); ?>