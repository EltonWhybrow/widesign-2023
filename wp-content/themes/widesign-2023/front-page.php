<?php get_header(); ?>

<div class="wysiwyg-content bg-white">

	<section class="relative hero-slider py-0">

		<!-- MESSAGE notification -->
		<!-- <? //php echo do_shortcode("[get-message color='info' message='New tutoring service opening in the New Year']"); 
				?> -->
		<!-- BUTTON Request -->
		<p class="absolute left-1/2 top-1/3 z-50 -translate-x-1/2 transform hover:-translate-y-1 transition duration-400 ease-in-out">
			<a id="register-interest" class='primary-btn pr-12' href='#request-callback'>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-0 right-3 inline-block w-6 h-6 m-1 text-gray-100">
					<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
				Register Interest
			</a>
		</p>
		<!-- HERO SLIDER from content -->
		<?php echo do_shortcode('[hero-slides number="10"]'); ?>
	</section>

	<!-- Quote -->
	<section id="quote" class="max-w-5xl mx-auto py-10">

		<div class="text-center">
			<h1 class="hidden">Redhill Tutoring - Bethany Whybrow</h1>
			<div class="flex justify-center mx-10 mt-2">
				<div>
					<h3 class="text-xl uppercase tracking-wide">An investment in knowledge pays the best dividends.</h3>
					<h4 class="pt-0 font-semibold">- Benjamin Franklin</h4>
				</div>
			</div>
		</div>

		<!-- Break -->
		<div class="inline-flex justify-center items-center w-full">
			<hr class="my-4 w-3/5 h-1 bg-gray-300 rounded border-0 dark:bg-gray-700">
			<div class="absolute left-1/2 px-4 bg-white transform -translate-x-1/2 dark:bg-gray-900">
				<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
				</svg>
			</div>
		</div>
	</section>

	<!-- FORM -register interest  -->
	<section id="request-callback" class="w-full">
		<div class="max-w-5xl mx-auto py-5">
			<div class="flex py-1 space-x-5 mx-8">

				<div class="text-base py-6">
					<h4 class="pt-6 font-semibold">Register your interest</h4>
					<h2 class="text-2xl">I will check availability and <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2">get in touch</span></h2>
					<p class="py-2 text-gray-400">This form registers your interest with Redhill Tutoring, please use the <a class="relative text-base hover:underline" href="/contact#contact-form">contact form</a> if you have any questions or queries.</p>
					<p>
					</p>
					<?php echo do_shortcode('[wpforms id="153" title="false"]'); ?>
				</div>
			</div>
		</div>
	</section>

	<!-- MAIN content -->
	<section id="moreinfo" class="max-w-5xl mx-auto py-16">

		<div class="mx-8 flex flex-wrap md:flex-nowrap mb-20">

			<div class="brand-swoosh object-cover w-full md:w-96 md:hidden">
				<picture>
					<source srcset="/resources/img/pages/home/redhilltutoring-home-university.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/redhilltutoring-home-university.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/redhilltutoring-home-university.jpg" alt="Teaching degree at University of Roehampton">
				</picture>
			</div>

			<div class="w-full md:w-3/5 flex justify-center items-center">
				<div class="md:pr-4 mt-5 md:mt-0">
					<span class="text-2xl pr-2 tracking-wide">
						Highly Qualified
					</span>


					<h4 class="pb-2 font-semibold">Nearly 2 decades of classroom experience</h4>
					<p class="text-base">I have 19 years of classroom experience. I studied at the <span class="font-semibold">University of Roehampton</span> where I achieved a <span class="font-semibold">2:1 BA HONs in Education with English Specialism</span>.
						I began my career as a <span class="font-semibold">Deputy Playleader</span> for an integrated playgroup after gaining my <span class="font-semibold">Cache Diploma in Nursery Nursing</span>. Alongside this role, I was given the opportunity to work as a <span class="font-semibold">Children's Play Services Co-ordinator</span> for Sutton Mencap. I went on to gain a <span class="font-semibold">BTEC diploma in Special Educational Needs</span>.
					</p>
					<p class="py-0">
						<a class="relative primary-link text-sm underline" href="/about">
							Find out more
						</a>
					</p>
					<!-- <a class="relative inline-flex primary-btn pr-6" href="/contact#contact-form">
						Enquire
						<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
						</svg>
					</a> -->
				</div>

			</div>

			<div class="brand-swoosh object-cover hidden md:block">
				<picture>
					<source srcset="/resources/img/pages/home/redhilltutoring-home-university.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/redhilltutoring-home-university.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/redhilltutoring-home-university.jpg" alt="Teaching degree at University of Roehampton">
				</picture>
			</div>
		</div>

		<div class="mx-8 flex flex-wrap md:flex-nowrap mb-20">
			<div class="brand-swoosh-l object-cover w-full md:w-96">
				<picture>
					<source srcset="/resources/img/pages/home/redhilltutoring-home-math-english.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/redhilltutoring-home-math-english.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/redhilltutoring-home-math-english.jpg" alt="Math and English tutoring">
				</picture>
			</div>

			<div class="w-full md:w-3/5 flex justify-center items-center">
				<div class="md:pl-4 mt-5 md:mt-0">
					<span class="text-2xl pr-2 tracking-wide">
						Maths & English
					</span>
					<h4 class="pb-2 font-semibold">1:1 and group sessions to achieve results</h4>
					<p class="text-base">Using a baseline assessment to highlight areas of strengths and weaknesses, I offer customised Maths and English sessions based on a child's requirements. My aim is to close gaps in their learning and help children be more confident in the classroom. By offering this personalised approach to learning, I aspire to broaden children's knowledge and understanding in Maths and English whilst building their confidence.
					</p>
					<p class="py-0">
						<a class="relative primary-link text-sm underline" href="/services">
							Find out more
						</a>
					</p>
				</div>
			</div>
		</div>

		<div class="mx-8 flex flex-wrap md:flex-nowrap mb-10">

			<div class="brand-swoosh object-cover w-full md:w-96 md:hidden">
				<picture>
					<source srcset="/resources/img/pages/home/cabin-new-2.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/cabin-new-2.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/cabin-new-2.jpg" alt="Cabin school Teacher">
				</picture>
			</div>

			<div class="w-full md:w-3/5 flex justify-center items-center">
				<div class="md:pr-4 mt-5 md:mt-0">
					<span class="text-2xl pr-2 tracking-wide">
						Personal & Friendly
					</span>

					<h4 class="pb-2 font-semibold">Ideal location for extra study</h4>
					<p class="text-base">Redhill Tutoring provides a calm and relaxed learning environment where children feel confident, comfortable and at ease. It offers a suitable learning environment to help children feel self-assured in sharing ideas, where their contributions will <span class="italic">always</span> be valued. All sessions will be taught in a purpose-built insulated cabin complete with fast Wi-Fi. The cabin has heating for the colder months.
					</p>
					<!-- <p class="py-0">
						<a class="relative primary-link text-sm underline" href="/about">
							Find out more
						</a>
					</p> -->
				</div>

			</div>

			<div class="brand-swoosh object-cover hidden md:block">
				<picture>
					<source srcset="/resources/img/pages/home/cabin-new-2.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/cabin-new-2.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/cabin-new-2.jpg" alt="Cabin school Teacher">
				</picture>
			</div>
		</div>

	</section>

	<!-- TESTIMONIALS -->
	<section id="testinonials" class="w-full bg-gray-300">
		<div class="max-w-5xl mx-auto py-28">

			<div class="px-5 text-center">
				<h2 class="text-2xl">Fantastic <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2 ">Testimonials</span></h2>
				<p class="text-lg text-gray-500">Feedback from students and parents</p>
			</div>

			<div class="mx-8 flex flex-wrap md:flex-nowrap pt-5 md:pt-10 space-x-5 space-y-5 md:space-y-0">
				<div class="py-0">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-36 w-36 text-teal-500">
						<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
					</svg>
				</div>

				<div class="py-0 w-full">
					<div class="px-5">
						<p class="text-2xl pb-2">"Bethany was my son's, Year 1 primary school teacher and she started my son's journey of loving school. She made each day interesting and informative and created a passion for learning in him that has lasted. She had a wonderful, kind and caring way about her and I will be forever grateful for the compassion she always showed him. If I am to ask him who his favourite teacher was, he will say Mrs Whybrow."</p>
						<h4 class="text-xl text-right pt-4 pr-10">- CLAIRE F <br />Coulsdon, Surrey</h4>
						<p class="text-teal-500 text-xs text-right pr-10">
							View more <a href="/testimonials" class="primary-link text-xs underline">feedback</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>



</div>

<?php get_footer(); ?>