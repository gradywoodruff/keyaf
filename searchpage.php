<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<body class="page--search">
	<?php get_template_part('content/_nav'); ?>
	<?php get_template_part('content/_modal'); ?>

	<div class="wrap wrap--top-pad">
		
		<div class="title title--all">
			Search Tutorials for
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<div class="search__box">
					<div class="search__button">
						<input class="ss-icon ss-standard ss-search" type="submit" class="search-submit" value="search" />
					</div>
					<div class="search__form">
						<span class="screen-reader-text"></span>
						<input type="search" class="search__field" placeholder="Song / Artist / Producer" value="" name="s" title="Search for:" />
					</div>
				</div>
			</form>
		</div>

	</div>

<!-- build:js assets/scripts/App.js -->
<script src="<?php echo get_template_directory_uri() . '/app/temp/scripts/App.js' ?>"></script>
<!-- endbuild -->
</body>
</html>