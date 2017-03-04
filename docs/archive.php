<?php get_header(); ?>

<?php
if ( is_category() ) { ?>
<body class="page--producers">
	<?php get_template_part('content/_nav'); ?>
	<?php get_template_part('content/_modal'); ?>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			<?php single_cat_title(); ?> Tutorials
		</div>
		<?php get_template_part('content/_list--producer'); ?>
	</div>

<?php
} elseif ( is_tag() ) { ?>
<body class="page--subjects page--subject-<?php single_tag_title(); ?>">
	<?php get_template_part('content/_nav'); ?>
	<?php get_template_part('content/_modal'); ?>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			<?php single_tag_title(); ?> Tutorials
		</div>
		<?php get_template_part('content/_list--tag'); ?>
	</div>

<?php
} else { ?>
<body class="page--search">
	<?php get_template_part('content/_nav'); ?>
	<?php get_template_part('content/_modal'); ?>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			All Tutorials
		</div>
		<?php get_template_part('content/_list'); ?>
	</div>

<?php
} ?>

<script src="<?php echo get_template_directory_uri() . '/assets/scripts/App.js' ?>"></script>
</body>
</html>