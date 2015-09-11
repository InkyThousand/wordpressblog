<?php
/**
 * The template for displaying page NOT FOUND.
 *
 * @package Ophelia
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
 		<div id="content" class="content">
			<div class="section-page-sidebar">
				<div class="container">
					<div class="gutter">
						<p class="page-title"><?php _e( 'Не найдено.', 'ophelia' ); ?></p>
					</div>
					<div class="column-container">
						<div class="page-container left">
							<div class="gutter">
								<article class="article-post">							
									<div class="article-text">
										 <p><?php _e( 'Извините, но по Вашему запросу ничего не найдено.', 'ophelia' ); ?></p>
									</div>
								</article>
							</div>
						</div>
					    <?php  get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div> 
<?php endwhile; ?>
<?php get_footer(); ?>