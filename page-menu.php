<?php get_header(); ?>
<body class="page--all full-screen">

<div class="nav nav--is-open">

	<a href="<?php echo get_permalink( get_page_by_path( 'all' ) ) ?>">
		<div class="nav__latest">
			<div class="path">Latest</div>
		</div>
	</a>

	<a href="<?php echo get_permalink( get_page_by_path( 'producers' ) ) ?>">
		<div class="nav__producers">
			<div class="path">Producers</div>
		</div>
	</a>

	<a href="<?php echo get_permalink( get_page_by_path( 'subjects' ) ) ?>">
		<div class="nav__subjects">
			<div class="path">Subjects</div>
		</div>
	</a>

	<a href="<?php echo get_permalink( get_page_by_path( 'search' ) ) ?>">
		<div class="nav__search">
			<div class="path">Search</div>
		</div>
	</a>

</div>

</body>
</html>