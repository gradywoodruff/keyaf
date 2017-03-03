<?php get_header(); ?>
<body class="page--tutorial">
	<?php get_template_part('content/_nav'); ?>
	<?php get_template_part('content/_modal'); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$tagList = get_the_tags();
		$separate = " &#160;,&#160; ";
		$list = '';

		foreach((get_the_category()) as $category) { 
			$producerName = $category->cat_name . ' ';
			$producerUrl = get_category_link($category->cat_ID);
		} 

		if ($tagList) {
			foreach ($tagList as $tag) {
				$list .= '<a href="' . get_tag_link($tag) . '"class="link link--subject link--subject-' . $tag->slug . '" alt="Subject: ' . $tag->name . '" title="KEYAF Tutorials filed under the subject, ' . $tag->name . '">' . $tag->name . '</a>' . $separate;
			}
		} 

		$tags = trim ($list, $separate); 
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb' );
		?>
		
		<div class="wrap wrap--top-pad">
			<a href="<?php the_field('tutorial__link'); ?>" target="_blank">

				<?php 
				if ($thumb) { ?>
					<div class="tutorial__thumb active" style="background-image:url('<?php echo $thumb[0]; ?>');">
				<?php
				} else { ?>
					<div class="tutorial__thumb active" style="background-color:#2E2232;">
				<?php
				} ?>
					<i class="tutorial__icon ss-icon ss-social-regular">youtube</i>
				</div>
			</a>
			<div class="tutorial__meta">
				<div class="tutorial__meta_title">
					<a class="link link--title active" alt="KEYAF Tutorial: How to Produce <?php the_field('tutorial__song'); ?> by <?php the_field('tutorial__artist'); ?>" title="KEYAF: <?php the_title(); ?>"><?php the_title(); ?></a>
				</div>
				<div class="tutorial__meta_producer">
					<a href="<?php echo $producerUrl ?>" class="link link--producer" alt="Producer: <?php echo $producerName ?>" title="KEYAF Tutorials for songs produced by <?php echo $producerName ?>"><?php echo $producerName ?></a>
				</div>
				<div class="tutorial__meta_subject">
					<?php echo $tags; ?>
				</div>
			</div>

			<?php the_content(); ?>
			
			<?php if (get_field('tutorial__download1-title') || get_field('tutorial__download2-title') || get_field('tutorial__download3-title') ||  get_field('tutorial__download4-title') || get_field('tutorial__download5-title')) { ?>
				Tutorial Downloads

				<?php if (get_field('tutorial__download1-title')) { ?>
					<div>
						<a href="<?php the_field('tutorial__download1'); ?>" class="link link--download" title="<?php the_field('tutorial__download1-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial" alt="<?php the_field('tutorial__download1-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial"><?php the_field('tutorial__download1-title'); ?></a>
					</div>
				<?php
				} ?>
				<?php if (get_field('tutorial__download2-title')) { ?>
					<div>
						<a href="<?php the_field('tutorial__download2'); ?>" class="link link--download" title="<?php the_field('tutorial__download2-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial" alt="<?php the_field('tutorial__download2-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial"><?php the_field('tutorial__download2-title'); ?></a>
					</div>
				<?php
				} ?>
				<?php if (get_field('tutorial__download3-title')) { ?>
					<div>
						<a href="<?php the_field('tutorial__download3'); ?>" class="link link--download" title="<?php the_field('tutorial__download3-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial" alt="<?php the_field('tutorial__download3-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial"><?php the_field('tutorial__download3-title'); ?></a>
					</div>
				<?php
				} ?>
				<?php if (get_field('tutorial__download4-title')) { ?>
					<div>
						<a href="<?php the_field('tutorial__download4'); ?>" class="link link--download" title="<?php the_field('tutorial__download4-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial" alt="<?php the_field('tutorial__download4-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial"><?php the_field('tutorial__download4-title'); ?></a>
					</div>
				<?php
				} ?>
				<?php if (get_field('tutorial__download5-title')) { ?>
					<div>
						<a href="<?php the_field('tutorial__download5'); ?>" class="link link--download" title="<?php the_field('tutorial__download5-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial" alt="<?php the_field('tutorial__download5-title'); ?> download for the KEYAF <?php the_field('tutorial__song'); ?> tutorial"><?php the_field('tutorial__download5-title'); ?></a>
					</div>
				<?php
				} ?>

			<?php } ?>

		</div><!-- /wrap -->

	<?php
	} // end while
} // end if
?>

	<div class="footer">
		<div class="wrap">
			<div>
				<?php if (get_field('tutorial_discussion--reddit')) { ?>
					<a href="<?php the_field('tutorial_discussion--reddit'); ?>" class="link link--discussion" title="Discuss the KEYAF <?php the_field('tutorial__song'); ?> Tutorial on Reddit" alt="Discuss the KEYAF <?php the_field('tutorial__song'); ?> Tutorial on Reddit" target="_blank">
						<i class="footer__icon ss-icon ss-social-regular">reddit</i>Discussion
					</a>
				<?php
				} ?>

				<?php if (get_field('tutorial_discussion--youtube')) { ?>
					<a href="<?php the_field('tutorial_discussion--youtube'); ?>" class="link link--discussion" title="Discuss the KEYAF <?php the_field('tutorial__song'); ?> Tutorial on YouTube" alt="Discuss the KEYAF <?php the_field('tutorial__song'); ?> Tutorial on YouTube" target="_blank">
				<?php
				} else { ?>
					<a href="<?php the_field('tutorial__link'); ?>" class="link link--discussion" title="Discuss the KEYAF <?php the_field('tutorial__song'); ?> Tutorial on YouTube" alt="Discuss the KEYAF <?php the_field('tutorial__song'); ?> Tutorial on YouTube" target="_blank">
				<?php
				} ?>
						<i class="footer__icon ss-icon ss-social-regular">youtube</i>Discussion
					</a>
			</div>
		</div>
	</div>

<!-- build:js assets/scripts/App.js -->
<script src="<?php echo get_template_directory_uri() . '/app/temp/scripts/App.js' ?>"></script>
<!-- endbuild -->
</body>
</html>