<?php
/**
 * The main template file.
 *
 * @package Ophelia
 */
get_header(); ?>
<div id="content" class="content">
	<div class="section-page-sidebar">
		<div class="container">
			<div class="gutter">
				<p class="page-title"><?php echo esc_html(get_theme_mod('pwt_blog_page',__( 'Последние записи блога', "ophelia"))); ?></p>
			</div>
			<?php get_template_part( 'content', 'posts' ); ?>	
		</div>
	</div>
</div>
<?php get_footer(); ?>