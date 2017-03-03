<?php get_header(); ?>
<body class="page--all">
	<?php get_template_part('content/_nav'); ?>
	<?php get_template_part('content/_modal'); ?>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			Latest Tutorials
		</div>
		<?php get_template_part('content/_list'); ?>
	</div>

<!-- build:js assets/scripts/App.js -->
<script src="<?php echo get_template_directory_uri() . '/app/temp/scripts/App.js' ?>"></script>
<!-- endbuild -->
</body>
</html>