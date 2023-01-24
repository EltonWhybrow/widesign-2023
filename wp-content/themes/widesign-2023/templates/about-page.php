<?php

/*
 * Template Name: About Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>

<!-- Mobile Header -->
<?php if (get_field('page_mobile_image')) { ?>
	<div class="sm:block md:hidden relative">
		<img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>" alt="<?php the_title(); ?>">
		<h2 class="text-xl bg-teal-500 py-1 text-white px-5"><?php the_title(); ?></h2>
	</div>
<?php } ?>

<!-- Main Header -->
<?php if (has_post_thumbnail()) : ?>
	<div class="py-0 hidden md:block">
		<img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
		<!-- <h2 class="text-sm text-center bg-teal-500 p-2 text-white"><?php the_title(); ?></h2> -->
	</div>
<?php endif; ?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-white">

	<section class="w-full border-b-4 border-gray-400">
		<div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

			<div class="px-5 text-base">
				<h4 class="hidden md:block pt-6 font-semibold">About me</h4>
				<h2 class="text-2xl">Passionate about <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2">teaching</span> and building <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2">confidence</span></h2>
				<p class="py-2">If you have any queries feel free to <a class="primary-link relative text-base" href="/contact#contact-form">contact me</a>.
				</p>
			</div>
		</div>
	</section>


	<section class="w-full px-5">
		<div class="max-w-5xl mx-auto py-10 md:py-20">

			<div class="flex flex-wrap md:flex-nowrap mb-5">
				<div class="w-full pr-5">
					<!-- // experience -->

					<h3 class="text-gray-600 text-2xl uppercase tracking-wide">Experience</h3>
					<p>
						My career working with children has spanned <span class="font-semibold">over 25 years</span>. I qualified as a nursery nurse in 1997 and my first job was the role of Deputy Playleader, working with children with additional needs and their siblings within an integrated setting. Alongside this work I became a Children's Play Coordinator for Sutton Mencap's Children's Services. The love and passion for both jobs prompted me to further my studies, and in 1999, I gained a <span class="font-semibold">BTEC qualification in Special Educational Needs</span>.</p>
					<p>
						It became very clear from working in these settings, that teaching was what I really wanted to do. Already having such a great foundation working with children and their families, I received an upper class division, <span class="font-semibold">BA HONS in Education with English specialism</span>, at the University of Roehampton, in 2004.

					</p>
					<div class="brand-swoosh object-cover w-full md:w-96 md:float-right my-5 md:m-5">
						<picture>
							<source srcset="/resources/img/pages/about/redhilltutoring-about-me.webp" type="image/webp">
							<source srcset="/resources/img/pages/about/redhilltutoring-about-me.jpg" type="image/jpeg">
							<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/about/redhilltutoring-about-me.jpg" alt="Bethany welcomes you to Redhill Tutoring">
						</picture>
					</div>
					<p>
						Since then I have had over <span class="font-semibold">19 successful years</span> as a <span class="font-semibold">qualified primary school educator</span>. I have taught in <span class="font-semibold">Key Stage 1</span> and <span class="font-semibold">Key Stage 2</span> where inspiring lessons for inclusive education have been carefully planned and resourced. I have taught in both the state sector and the private school sector. My passion is teaching the development of phonics and early literacy skills, for children who are experiencing difficulty with reading and writing, but my teaching style is also suited to children who may feel apprehensive in some areas of their learning, and perhaps need a confidence boost and 'self-belief' mindset.</p>
					<p>
						I offer tutoring programmes for <span class="font-semibold">children aged 5 to 11</span>, supporting areas of the KS1 and KS2 Maths and English curriculum. I hope to inspire children to foster a love for learning and break down barriers that so often make children think they can't succeed. If you think your child would benefit from 1:1 tuition, or in small working groups of no more than 4 children at a time, to further develop their literacy or numeracy skills, I would love to hear from you.

					</p>

				</div>


			</div>

			<!-- // timetable -->
			<div id="time-table" class="pb-5 pr-5">
				<h3 class="text-gray-600 text-2xl uppercase tracking-wide">Tuition timetable</h3>
				<p>Looking for <a class="relative primary-link text-base" href="/fees">tutition fees</a>?
				</p>
				<div class="flex flex-wrap -mx-2 overflow-hidden">

					<div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/12">
						<h3 class="text-teal-500 font-semibold">Monday</h3>
						<p class="line-through">4.30pm - 5.30pm</p>
						<p class="line-through">5.45pm - 6.45pm</p>
					</div>

					<div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/12">
						<h3 class="text-teal-500 font-semibold">Tuesday</h3>
						<p class="line-through">4.30pm - 5.30pm</p>
						<p class="line-through">5.45pm - 6.45pm</p>
					</div>

					<div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/12">
						<h3 class="text-teal-500 font-semibold">Wednesday</h3>
						<p class="line-through">4.30pm - 5.30pm</p>
						<p class="line-through">5.45pm - 6.45pm</p>
					</div>

					<div class="my-2 px-2 w-1/2 overflow-hidden sm:w-3/12">
						<h3 class="text-teal-500 font-semibold">Thursday</h3>
						<p>4.30pm - 5.30pm <span class="text-teal-500">(Maths)</span></p>
						<p>5.45pm - 6.45pm <span class="text-teal-500">(English)</span></p>
						<p>7.00pm - 8.00pm <span class="text-teal-500">(1:1 Sessions)</span></p>
					</div>

					<div class="my-2 px-2 w-1/2 overflow-hidden sm:w-3/12">
						<h3 class="text-teal-500 font-semibold">Friday</h3>
						<p>4.30pm - 5.30pm <span class="text-teal-500">(Maths)</span></p>
						<p>5.45pm - 6.45pm <span class="text-teal-500">(English)</span></p>
						<p>7.00pm - 8.00pm <span class="text-teal-500">(1:1 Sessions)</span></p>
					</div>

				</div>


			</div>

			<div class="pb-5 pr-5">
				<!-- // our vision -->
				<h3 class="text-gray-600 text-2xl uppercase tracking-wide">Vision</h3>
				<p>
					To provide a safe learning environment that is free from <span class="font-semibold">'fear of failure'</span>. To provide inclusive education for all children regardless of gender, race, disability, social class, religion or ethnicity. To ensure all children learn to the best of their ability and give them the confidence that can contribute to decisions about their future.
				</p>
			</div>


			<!-- // work -->
			<div class="pb-5 pr-5">

			</div>

			<div class="flex flex-wrap md:flex-nowrap pb-5">

				<div class="w-full md:w-3/5 pr-5">
					<h3 class="text-gray-600 text-2xl uppercase tracking-wide">Work Ethics</h3>
					<p>I am ambitious and hard working and dedicated to the profession of teaching. I have high standards for myself and for my students. I am an honest individual and believe in fairness and respect for the children that I work closely with and their families. View <a class="relative primary-link text-base" href="/testimonials">feedback</a> from parents.
					</p>

					<h4 class="mt-2">Looking forward to hearing from you.</h4>
					<p class="text-sm font-semibold">Bethany Whybrow - Manager</p>

				</div>
				<div class="brand-swoosh object-cover w-full md:w-96">
					<picture>
						<source srcset="/resources/img/pages/about/cabin-new.webp" type="image/webp">
						<source srcset="/resources/img/pages/about/cabin-new.jpg" type="image/jpeg">
						<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/about/cabin-new.jpg" alt="Cabin school setting">
					</picture>
				</div>
			</div>

		</div>
	</section>
</div>

<?php get_footer(); ?>