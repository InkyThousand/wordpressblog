<?php 
/**
 * 
 * @package Ophelia 
 */
?>
<div class="column-container">
	<div class="page-container left">
		<div class="gutter">
		<?php while (have_posts()) : the_post(); ?>
			<article class="article-blog">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2><a href="<?php the_permalink() ?>"><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></a></h2>
					<p class="meta">
						<span><?php _e( 'Опубликовал', 'ophelia' ); ?> <?php the_author(); ?></span> 
						<span><?php _e( 'День:', 'ophelia' ); ?>  <?php the_time( get_option( 'date_format' ) ); ?></span>
					</p>
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<div class="article-image">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail($post->ID, 'featured'); ?></a>	
						<a class="fa fa-arrow-right" href="<?php the_permalink() ?>"></a>
					</div>	
					<?php endif; ?>	
					<div class="article-text">
						<?php the_excerpt(); ?>
					</div>
					<div class="article-footer column-container">
						<div class="column-3-12">
							<a class="read-more" href="<?php the_permalink() ?>"><?php _e( 'Читать далее', 'ophelia' ); ?></a>
						</div>
						<div class="column-5-12">
							<ul class="article-info">
								<li><?php comments_popup_link( 'Комментариев нет', '1 комментарий', '% комментариев', 'comments-link', 'Комментарии отключены.'); ?></li>
							</ul>
						</div>
					</div>
				</div>	
			</article>
		<?php endwhile; ?>								
			<div class="pagination-container column-container">
				<div class="column-6-12 left">
					<span class="prev-page"><?php next_posts_link(__('Предыдущие записи', 'ophelia')) ?></span>
				</div>
				<div class="column-6-12 right">
					<span class="next-page"><?php previous_posts_link(__('Следующие записи', 'ophelia')) ?></span>
				</div>
			</div>
		</div>
	</div>
  <?php  get_sidebar(); ?>
</div>