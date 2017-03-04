<?php get_header(); ?>
<body class="page--producers">
	<?php get_template_part('content/_nav'); ?>
	<?php get_template_part('content/_modal'); ?>

	<div class="wrap wrap--top-pad">
		<div class="title title--all">
			Tutorial Producers Organized
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
		$cats = get_categories( $args );
		foreach ($cats as $cat) {
		    $cat_link = get_category_link($cat->term_id); ?>
		    <div class="archive__result">
				<div class="archive__number"><?php echo ($cat->count); ?></div>
			    <a href="<?php echo ($cat_link); ?>" class="link link--producer">
			    	<?php echo ($cat->name); ?>
			    </a>
		    </div>
		<?php
		} ?>
	</div>

<script src="<?php echo get_template_directory_uri() . '/assets/scripts/App.js' ?>"></script>
</body>
</html>