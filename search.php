<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<body class="page--search">
<?php
global $wp_query;
$totalresults = $wp_query->found_posts;
?>
	<a href="<?php echo home_url(); ?>"><?php get_template_part('content/_nav'); ?></a>

	<div class="question">
		<i class="ss-icon ss-standard">question</i>
	</div>

	<div class="wrap wrap--top-pad">

		<?php get_search_form(); ?>

		<div class="title title--all">
			
			<?php echo $totalresults; ?> <?php echo pluralize($totalresults, 'tutorial', 'tutorials');?> with "<?php the_search_query(); ?>"

		</div>

		<?php get_template_part('content/_list--search'); ?>
	</div>

</body>
</html>