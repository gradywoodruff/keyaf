<?php get_header(); ?>
<body class="page--all">
	<a href="<?php echo home_url(); ?>"><?php get_template_part('content/_nav'); ?></a>

	<div class="question">
		<i class="ss-icon ss-standard">question</i>
	</div>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			All Tutorials
		</div>
		<?php get_template_part('content/_list'); ?>
	</div>

	<div class="menu menu--is-open">

		<a href="<?php echo get_permalink( get_page_by_path( 'all' ) ) ?>">
			<div class="menu__latest">
				<div class="path path--open">Latest</div>
			</div>
		</a>
		<a href="<?php echo get_permalink( get_page_by_path( 'producers' ) ) ?>">
			<div class="menu__producers">
				<div class="path path--open">Producers</div>
			</div>
		</a>
		<a href="<?php echo get_permalink( get_page_by_path( 'subjects' ) ) ?>">
			<div class="menu__subjects">
				<div class="path path--open">Subjects</div>
			</div>
		</a>
		<a href="<?php echo get_permalink( get_page_by_path( 'search' ) ) ?>">
			<div class="menu__search">
				<div class="path path--open">Search</div>
			</div>
		</a>

	</div>

</body>
</html>