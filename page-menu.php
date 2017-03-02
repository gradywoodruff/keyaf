<?php get_header(); ?>
<body class="page--menu">

	<div class="menu">

		<a href="<?php echo get_permalink( get_page_by_path( 'all' ) ) ?>">
			<div class="menu__latest">
				<div class="path">Latest</div>
			</div>
		</a>
		<a href="<?php echo get_permalink( get_page_by_path( 'producers' ) ) ?>">
			<div class="menu__producers">
				<div class="path">Producers</div>
			</div>
		</a>
		<a href="<?php echo get_permalink( get_page_by_path( 'subjects' ) ) ?>">
			<div class="menu__subjects">
				<div class="path">Subjects</div>
			</div>
		</a>
		<a href="<?php echo get_permalink( get_page_by_path( 'search' ) ) ?>">
			<div class="menu__search">
				<div class="path">Search</div>
			</div>
		</a>

	</div>

</body>
</html>