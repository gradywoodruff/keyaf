<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<body class="page--search">
	<a href="<?php echo home_url(); ?>"><?php get_template_part('content/_nav'); ?></a>

	<div class="question">
		<i class="ss-icon ss-standard">question</i>
	</div>

	<div class="wrap wrap--top-pad">

		<?php get_search_form(); ?>

	</div>

</body>
</html>