<?php

	// PARTIAL: POSTLOOP
	// Version 1.1

	// ARRAY FROM PARTIAL CALL

	$mode               = $var['display_mode'];
	$wrapper_class      = $var['wrapper_classes'];
	$posts_class        = $var['posts_classes'];
	$item_class         = $var['item_classes'];
	$type               = $var['posts_type'];
	$single_id          = $var['post_single_id'];
	$amount             = $var['posts_amount'];
	$order_by           = $var['posts_orderby'];
	$order              = $var['posts_order'];
	$post_more_text     = $var['post_more_text'];


?>
<div class="<?php echo $wrapper_class; ?>">
	<div class="<?php echo $posts_class; ?>">

		<?php $args = array(
			'post_type'         => array($type),
			'posts_per_page'	=> $amount,
			'orderby'			=> $order_by,
			'order'				=> $order,
			'post_status'       => 'publish',
			'post__in'          => $single_id
		);

			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();

				// POSTS VARS
				$post_title     = get_the_title();
				$post_image     = get_the_post_thumbnail_url();
				$post_link      = get_the_permalink();
				$post_more      = $post_more_text;

				?>

				<article class="<?php echo $item_class; ?>">
					<?php

						// FULL VIEW
						if ($mode == "full") : ?>
							<a href="<?php echo $post_link; ?>" title="<?php echo $post_title; ?>">
								<div class="posts-content" style="background-image: url(<?php echo $post_image; ?>); background-size: cover; background-position: center;">
									<?php

										mps_block($partial,"heading","article-title", "uk-text-left uk-text-large", "div",
											array(
												'template'      => $template,
												'text'          => $post_title,
												'tag'           => 'h3',
												'title'         => $post_title,
												'id'            => ''
											)
										);

										mps_block( $partial,"link","button", "uk-section uk-padding-remove-vertical uk-text-center", "div",
											array(
												'template'      => $partial,
												'text'          => $post_more,
												'classes'       => 'uk-button uk-button-secondary uk-button-medium',
												'href'          => $post_link,
												'title'         => $post_more . ': ' . $post_title,
												'target'        => '_parent',
												'tag'           => 'span'
											)
										);
									?>
								</div>
							</a>
						<?php endif;

						// TITLE VIEW
						if ($mode == "title") : ?>
							<a href="<?php echo $post_link; ?>" title="<?php echo $post_title; ?>">
								<?php
									mps_block($partial,"heading","article-title", "uk-text-left uk-text-large", "div",
										array(
											'template'      => $template,
											'text'          => $post_title,
											'tag'           => 'h3',
											'title'         => $post_title,
											'id'            => ''
										)
									);
								?>
							</a>
						<?php endif; ?>

				</article>

			<?php //endif;
			endwhile;
			wp_reset_postdata(); ?>
	</div>
</div>
