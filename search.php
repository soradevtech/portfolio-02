<?php get_header(); ?>

<section class="content container clearfix blogfeed">

	<h1>Search Results</h1>

	<?php get_search_form(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part('partials/post'); ?>

	<?php endwhile; ?>

		<?php get_template_part('partials/nav'); ?>

	<?php else : ?>

		<h2 id="no-results">No posts found.</h2>

	<?php endif; ?>

</section>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>