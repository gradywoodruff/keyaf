<?php get_header(); ?>
<body class="page--subjects">

	<a href="<?php echo home_url(); ?>"><?php get_template_part('content/_nav'); ?></a>

	<div class="question">
		<i class="ss-icon ss-standard">question</i>
	</div>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			Subjects
			<div class="archive__sort">	
				<div class="archive__order-link">
					<?php
					if ($_GET['orderby'] == 'name') { ?>
						<a href="?orderby=count&order=DESC">
							<i class="ss-icon ss-standard archive__filter">filter</i> by name
						</a>
					<?php 
					} else { ?>
						<a href="?orderby=name&order=ASC">
							<i class="ss-icon ss-standard archive__filter">filter</i> by count
						</a>
					<?php
					}
					?>
				</div>
			</div>
		</div>

		<?php
		$args = array('orderby' => $_GET['orderby'], 'order' => $_GET['order'], 'fields' => 'all');
		$tags = get_tags( $args );
		foreach ($tags as $tag) {
		    $tag_link = get_tag_link($tag->term_id); ?>
		    <div class="archive__result">
				<div class="archive__number"><?php echo ($tag->count); ?></div>
			    <a href="<?php echo ($tag_link); ?>" class="link link--subject">
			    	<?php echo ($tag->name); ?>
			    </a>
		    </div>
		<?php
		} ?>
	</div>

</body>
</html>