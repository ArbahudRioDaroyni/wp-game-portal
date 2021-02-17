<article id="post-<?php the_ID(); ?>" <?php post_class('nk-post-text mt-0'); ?>>
	<figure class="nk-post-img">
		<?php
		// check if the post or page has a Featured Image assigned to it.
		if ( has_post_thumbnail() ) {
			the_post_thumbnail(NULL, ['class' => 'img-hero']);
		} else { ?>
			<img src="<?= get_first_image_in_post() ?>" class="img-hero" alt="<?= get_the_title() ?>" />
		<?php } ?>
	</figure>

	<div class="nk-gap-1"></div>

	<header class="entry-header">
		<h1 class="entry-title nk-post-title h4">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
	</header>

	<div class="entry-meta">
		<div class="nk-post-by vcard">
			<img src="<?= get_avatar_url($comment, null) ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" class="rounded-circle" width="35">
			 Ditulis oleh 
			<a rel="nofollow" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author"><?php the_author(); ?></a> -
			 
			<time class="entry-date updated a-publish" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('D, d F Y'); ?></time>
			
			<ul class="list-unstyled d-flex nk-post-categories">
				<?php foreach (get_the_tags() as $value) { ?>
					<li class="mr-4">
						<a href="<?= esc_url( get_tag_link( $value ) ) ?>" class="tag bg-main-1"><?= $value->name ?></a>
					</li>
				<?php } ?>
			</ul>
			
		</div>
	</div>

	<div class="nk-gap"></div>
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<div class="nk-gap"></div>

	<footer class="nk-post-share entry-footer">
		<span class="h5">Tag:</span>
		<ul class="list-unstyled d-flex">
			<?php foreach (get_the_tags() as $value) { ?>
				<li>
					#<a href="<?= esc_url( get_tag_link( $value ) ) ?>" rel="tag" class="tag"><?= $value->name ?></a> 
				</li>
			<?php } ?>
		</ul>
	</Footer>
</article>

<?php set_post_view() ?>