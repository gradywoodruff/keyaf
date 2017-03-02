		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
			$tagList = get_the_tags();
			$separate = " &#160;,&#160; ";
			$list = '';

			foreach((get_the_category()) as $category) { 
				$producerName = $category->cat_name . ' ';
				$producerUrl = get_category_link($category->cat_ID);
			} 

			if ($tagList) {
				foreach ($tagList as $tag) {
					$list .= '<a href="' . get_tag_link($tag) . '"class="link link--subject link--subject-' . $tag->slug . '" alt="Subject: ' . $tag->name . '" title="KEYAF Tutorials filed under the subject, ' . $tag->name . '" rel="tag">' . $tag->name . '</a>' . $separate;
				}
			} 

			$tags = trim ($list, $separate); 
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb' );
			?>

				<div class="tutorial">
					<a href="<?php the_permalink(); ?>">
						<div class="tutorial__thumb" style="background-image:url('<?php echo $thumb[0]; ?>');">
						</div>
					</a>
					<div class="tutorial__meta">
						<div class="tutorial__meta_title">
							<a href="<?php the_permalink(); ?>" class="link link--title" alt="KEYAF Tutorial: How to Produce <?php the_field('tutorial__song'); ?> by <?php the_field('tutorial__artist'); ?>" title="KEYAF: <?php the_title(); ?>"><?php the_title(); ?></a>
						</div>
						<div class="tutorial__meta_producer">
							<a class="link link--producer link--producer-<?php echo $producerName ?> active" alt="Producer: <?php echo $producerName ?>" title="KEYAF Tutorials for songs produced by <?php echo $producerName ?>"><?php echo $producerName ?></a>
						</div>
						<div class="tutorial__meta_subject">
							<?php echo $tags; ?>	
						</div>

					</div>
				</div>

			<?php
			endwhile;
		endif; ?>