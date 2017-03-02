<?php get_header(); ?>

<?php
if ( is_category() ) { ?>
<body class="page--producers">
	<a href="<?php echo home_url(); ?>"><?php get_template_part('content/_nav'); ?></a>

	<div class="question">
		<i class="ss-icon ss-standard">question</i>
	</div>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			<?php single_cat_title(); ?> Tutorials
		</div>
		<?php get_template_part('content/_list--producer'); ?>
	</div>

<?php
} elseif ( is_tag() ) { ?>
<body class="page--subjects page--subject-<?php single_tag_title(); ?>">
	<a href="<?php echo home_url(); ?>"><?php get_template_part('content/_nav'); ?></a>

	<div class="question">
		<i class="ss-icon ss-standard">question</i>
	</div>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			<?php single_tag_title(); ?> Tutorials
		</div>
		<?php get_template_part('content/_list--tag'); ?>
	</div>

<?php
} else { ?>
<body class="page--search">

	<div class="question">
		<i class="ss-icon ss-standard">question</i>
	</div>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			All Tutorials
		</div>
		<?php get_template_part('content/_list'); ?>
	</div>

<?php
} ?>

</body>
</html>