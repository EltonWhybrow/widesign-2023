<?php

/*
 * Template Name: FAQs Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>


<!-- wysiwyg main content -->
<div class="bg-gray-200">


	<!-- HEADER -->
	<section class="flex flex-wrap md:flex-nowrap">
		<div class="relative flex justify-center items-center bg-gray-900 py-4 md:py-0 w-full">
			<div class="p-3 md:p-10 text-center">
				<h2 class="pb-1 font-semibold text-mellow-200 text-4xl md:text-5xl uppercase">
					F<span class="text-mellow-400">A</span><span class="text-mellow-600">Qs</span>
				</h2>
			</div>
		</div>
	</section>

	<!-- FAQS -->
	<section class="bg-shadow-700 px-4 md:px-10 pt-8 pb-20 text-center">

		<div class="space-x-2 space-y-2 m-auto mb-3 max-w-5xl">
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="hosting">Hosting</button>
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="development">Development</button>
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="web-design">Web Design</button>
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="seo">SEO</button>
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="logo-branding">Logo/Branding</button>
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="analytics">Analytics</button>
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="content">Content</button>
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="e-commerce">E-Commerce</button>
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="mobile">Mobile</button>
			<button class="bg-shadow-600 hover:bg-shadow-500 filter primary-btn-sm" data-id="support">Support</button>
		</div>

		<form id="search">
			<div class="flex justify-center items-center">
				<div class="relative">
					<div class="top-2 left-3 absolute">
						<svg xmlns="http://www.w3.org/2000/svg" class="text-shadow-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
						</svg>
					</div>
					<input id="txtSearch" type="text" class="z-0 focus:shadow text-shadow-700 pr-14 pl-12 rounded-lg focus:outline-none w-96 h-10" placeholder="Search FAQs">
					<div class="top-2 right-2 absolute">
						<button id="clearSearch" class="text-shadow-500" title="clear search">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>
				</div>
			</div>
		</form>

		<div id="faqs" class="mx-auto pt-6 container">
			<?php get_template_part('templates/partials/section', 'widesign-faq-hosting'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-webdesign'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-development'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-seo'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-logo-branding'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-analytics'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-content'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-e-commerce'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-mobile'); ?>
			<?php get_template_part('templates/partials/section', 'widesign-faq-support'); ?>

		</div>

	</section>
</div>

<?php get_footer(); ?>