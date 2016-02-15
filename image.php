<?php get_header(); ?><div id="inhalt"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>Code: <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Der Verweis (Permalink) zu: <?php the_title(); ?>"><?php the_title(); ?></a></h2><div class="beitrags-info">Von <?php the_author() ?> am <?php the_time('d. F Y'); ?> um <?php the_time('H:i'); ?> <?php edit_post_link(); ?></div><div class="der-beitrag center galerie"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a><?php if ( !empty($post->post_excerpt) ) the_excerpt(); /* Bild-Überschrift */ ?><?php the_content(); ?></div> <!-- Ende des jeweiligen Beitrags --><div><p class="bild-links"><?php previous_image_link() ?></p><p class="bild-rechts"><?php next_image_link() ?></p><div class="clearer"></div></div><!-- Ende Thumbnail-Verweise -->
 
<?php comments_template(); /* Der Kommentarbereich */ ?>
 
<?php endwhile; else: ?>
<p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>
<?php endif; ?>
 
</div><!-- /#inhalt -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>