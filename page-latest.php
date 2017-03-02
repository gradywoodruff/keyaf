<?php get_header(); ?>
<body class="page--latest">

	<a href="<?php echo home_url(); ?>"><?php get_template_part('content/_nav'); ?></a>
	
	<div class="wrap wrap--top-pad">
		<div class="latest__copy">
			<span class="logo"><i class="ss-icon ss-standard">key</i>.af</span>
			<?php the_field('latest'); ?>
		</div>
		<div class="latest__links">
			Check out <a class="">KEYAF on Reddit</a> for tutorial questions/answers and downloads. 
		</div>

	</div>

</body>
</html>