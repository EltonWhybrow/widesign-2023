<?php get_header(); ?>

<div class="wysiwyg-content bg-white">
	<!-- 
	<section class="relative hero-slider py-0"> -->

	<!-- MESSAGE notification -->
	<!-- <? //php echo do_shortcode("[get-message color='info' message='New tutoring service opening in the New Year']"); 
			?> -->

	<!-- BUTTON Request -->
	<!-- <p class="absolute left-1/2/3 z-50 -translate-x-1/2 transform hover:-translate-y-1 transition duration-400 ease-in-out">
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
			<h1 class="hidden">WideSign - Bethany Whybrow</h1>
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
					<p class="py-2 text-gray-400">This form registers your interest with WideSign, please use the <a class="relative text-base hover:underline" href="/contact#contact-form">contact form</a> if you have any questions or queries.</p>
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

		<div class="py-8 md:py-0 w-full md:w-2/5 flex justify-center items-center bg-gray-900">
			<div class="p-3 md:p-10 md:text-5xl text-6xl lg:p-6">
				<h2 class="pb-1 text-mellow-200 uppercase font-semibold">
					Be bold
				</h2>
				<h2 class="pb-1 text-mellow-400 uppercase font-semibold">
					Take chances
				</h2>
				<h2 class="pb-1 text-mellow-600 uppercase font-semibold">
					Create beauty
				</h2>
				<div class="grid justify-items-end mt-2">
					<a class="relative inline-flex pr-8 primary-btn  hover:bg-teal-500 bg-gray-800 group" href="#begin-journey">
						Begin your journey
						<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
						</svg>
					</a>
				</div>
			</div>

		</div>

		<div class="w-full md:w-3/5">
			<div class="pb-2/3 lg:pb-4/5 xl:pb-2/3 2xl:pb-3/5 bk-red-500 relative">
				<img class="absolute top-0 left-0 h-full md:h-100 lg:h-full w-full object-cover" src="/resources/img/pages/home/widesign-elephant.jpg" alt="WideSign Web & SEO Services">
			</div>
		</div>
	</section>

	<!-- MAIN EDITOR CONTENT -->
	<section id="begin-journey" class="py-20 px-4 md:px-10 bg-teal-700 text-center">
		<?php if (have_posts()) : while (have_posts()) : the_post();
				the_content();
			endwhile;
		else : ?>
			<p>Sorry, no new contect for now! 😞</p>
		<?php endif; ?>
	</section>

	<!-- TECH STACK -->
	<section class="gray-logos py-5 bg-gray-100">
		<div class="flex space-x-2 justify-between overflow-hidden">
			<img class="active-gray w-16 md:w-28 h-auto" src="/resources/img/pages/home/logos/ga.webp" alt="google analytices">
			<img class="active-gray w-16 md:w-28 h-auto" src="/resources/img/pages/home/logos/woo.webp" alt="woo commerce">
			<img class="active-gray w-16 md:w-28 h-auto" src="/resources/img/pages/home/logos/sketch.webp" alt="sketch">
			<img class="active-gray w-16 md:w-28 h-auto" src="/resources/img/pages/home/logos/dev.webp" alt="design and development tools">

			<img class="active-gray w-16 md:w-28 h-auto" src="/resources/img/pages/home/logos/wordpress.webp" alt="wordpress">
			<img class="active-gray w-16 md:w-28 h-auto" src="/resources/img/pages/home/logos/google.webp" alt="google tools">
			<img class="active-gray w-16 md:w-28 h-auto" src="/resources/img/pages/home/logos/jquery.webp" alt="jquery">
			<img class="active-gray w-16 md:w-28 h-auto" src="/resources/img/pages/home/logos/htmlcssjs.webp" alt="html css js">
		</div>


	</section>

	<!-- AUDIT -->
	<section class="flex flex-wrap md:flex-nowrap">

		<div class="w-full md:w-3/5">
			<div class="pb-2/3 lg:pb-4/5 xl:pb-2/3 2xl:pb-3/5 bk-red-500 relative">
				<img class="absolute top-0 right-0 h-full md:h-100 lg:h-full w-full object-cover" src="/resources/img/pages/home/widesign-ux-ui.jpg" alt="Free website audit">
			</div>
		</div>

		<div class="w-full md:w-2/5 flex justify-center items-center bg-plum-600">
			<div class="py-10 px-4 md:px-10">
				<h2 class="pb-2 text-3xl text-gray-200 uppercase font-semibold">
					Website need an overhaul?<br />
					Slow pages, other issues?
				</h2>
				<p class="pb-2 text-gray-200">
					Get a <span class="px-2 rounded bg-plum-700 inline-block">FREE website audit</span> of the the issues and possible problems with your site that could be slowing it down or holding back your SEO potential.
				</p>
				<div class="grid justify-items-start mt-2">
					<a class="relative inline-flex pr-8 primary-btn hover:bg-teal-500 bg-plum-700 group" href="services/free-website-audit">
						Request audit
						<svg xmlns="http://www.w3.org/2000/svg" class="transform group-hover:rotate-360 transition-rotate duration-500 absolute ml-1 top-3 right-1 inline-block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
		<div class="max-w-5xl mx-auto pt-20 pb-12">

			<div class="mx-8 flex flex-wrap md:flex-nowrap pt-5 md:pt-10">
				<div class="py-0 w-full">
					<?php echo do_shortcode('[customer-quotes number="10"]');
					?>
				</div>
			</div>

		</div>
	</section>

	<!-- WHY US -->
	<section class="flex flex-wrap md:flex-nowrap md:h-156">

		<div class="w-full lg:w-2/5 flex justify-center items-center bg-teal-700">
			<div class="py-10 px-4 md:px-10">
				<h2 class="pb-2 text-3xl text-gray-200 uppercase font-semibold">
					Why choose WideSign?
				</h2>

				<h3 class="text-teal-400 text-xl text-bold">
					Worry free plans &amp; ongoing support
				</h3>

				<div class="max-w-xl mx-auto py-3">
					<p class="text-gray-200">
						We create stunning mobile first, SEO optimized modern websites. Furthermore, we also take care of all your hosting, email & backups where required. This makes us your complete digital online presence setup company.
					</p>
					<p class="text-gray-200">
						You receive support for all your services with us by email or mobile and we enjoy going the extra mile to resolve requests within a 24hrs.
					</p>

					<p class="text-gray-200">
						Proactivly working with clients to understand their business and objectives to create a fast loading efficient website that delivers on impact and can turn visitors into customers.
					</p>
				</div>

				<div class="flex justify-start mt-2 space-x-4">

					<a class="relative inline-flex pr-7 secondary-btn" href="/services/website-plans">
						Our journey
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none" stroke-width="2" class="absolute right-1 inline-block w-6 h-6">
							<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
						</svg>

					</a>
					<a class="relative inline-flex pr-7 secondary-btn" href="/services/seo">
						Our services
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none" stroke-width="2" class="absolute right-1 inline-block w-6 h-6">
							<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
						</svg>
					</a>
				</div>
			</div>

		</div>



		<div class="relative py-0 w-full lg:w-3/5 object-cover h-100 md:h-auto">
			<div class="image-zoom">
				<div class="zoom-image bg-whyus bg-left-top"></div>
				<!-- <h1 class="zoom-text">CAR</h1> -->
			</div>
			<!-- <picture>
				<source srcset="/resources/img/pages/home/widesign-elton.jpg" type="image/webp">
				<source srcset="/resources/img/pages/home/widesign-elton.jpg" type="image/jpeg">
				<img class="w-full" src="/resources/img/pages/home/widesign-elton.jpg" alt="Web Designer Elton Whybrow">
			</picture> -->
		</div>
	</section>

	<!-- CALLBACK -->
	<section class="p-10 bg-plum-600">
		<div class="flex flex-wrap md:flex-nowrap container mx-auto justify-center">
			<div>
				<h2 class="text-4xl text-gray-200 uppercase font-semibold">
					Interested?
				</h2>
				<p class="text-gray-200 text-base text-center sm:text-left">
					Request a call back today
				</p>
			</div>

			<?php echo do_shortcode('[wpforms id="153" title="false"]');
			?>

		</div>


	</section>



</div>

<?php get_footer(); ?>