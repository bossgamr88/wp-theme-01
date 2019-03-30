<?php get_header();?>

            <div class="content-banner">
                <?php if (is_active_sidebar( 'banner-1' )) : ?>
                    <?php dynamic_sidebar( 'banner-1' ) ?>
            <?php else: ?>
                <img src="<?php bloginfo( 'template_url' ); ?>/img/banner.jpg">
            <?php endif;?>
            </div>

			<div class="content-area">
					<?php while (have_posts()) : the_post()  ?>
						<h1><a  href="<?php the_permalink() ?>"> <?php the_title() ?></a></h1>	
							<hr/>
							<?php the_content() ?>
					<?php endwhile ?>
			</div>
<?php  get_sidebar(); ?>
<?php get_footer(); ?>


