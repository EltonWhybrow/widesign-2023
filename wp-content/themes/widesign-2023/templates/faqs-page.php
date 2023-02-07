<?php

/*
 * Template Name: FAQs Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>


<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-white">


	<!-- HEADER -->
	<section class="flex flex-wrap md:flex-nowrap">
		<div class="relative py-4 md:py-0 w-full flex justify-center items-center bg-gray-900">
			<div class="p-3 md:p-10">
				<h2 class="pb-1 text-mellow-200 uppercase font-semibold text-4xl md:text-5xl">
					F<span class="text-mellow-400">A</span><span class="text-mellow-600">Qs</span>
				</h2>
			</div>
		</div>
	</section>

	<!-- FAQS -->
	<section class="pt-8 pb-20 px-4 md:px-10 bg-shadow-700 text-center">

		<div class="max-w-5xl m-auto mb-3 space-x-2">
			<button class="filter primary-btn-sm hover:bg-shadow-500 bg-shadow-600" data-id="hosting">Hosting</button>
			<button class="filter primary-btn-sm hover:bg-shadow-500 bg-shadow-600" data-id="development">Development</button>
			<button class="filter primary-btn-sm hover:bg-shadow-500 bg-shadow-600" data-id="web-design">Web Design</button>
			<button class="filter primary-btn-sm hover:bg-shadow-500 bg-shadow-600" data-id="seo">SEO</button>
			<button class="filter primary-btn-sm hover:bg-shadow-500 bg-shadow-600" data-id="logo-branding">Logo/Branding</button>
		</div>

		<form id="search">
			<div class="flex justify-center items-center">
				<div class="relative">
					<div class="absolute top-2 left-3">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-shadow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
						</svg>
					</div>
					<input id="txtSearch" type="text" class="text-shadow-700 h-10 w-96 pl-12 pr-14 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search FAQs">
					<div class="absolute top-2 right-2">
						<button id="clearSearch" class="text-shadow-500" title="clear search">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>
				</div>
			</div>
		</form>

		<div id="faqs" class="container mx-auto pt-6">
			<?php get_template_part('templates/partials/section', 'widesign-faq-hosting'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-webdesign'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-development'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-seo'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-logo-branding'); ?>
		</div>

	</section>
</div>

<?php get_footer(); ?>