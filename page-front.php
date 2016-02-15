<?php get_header(); ?>
<?php
/*
Template Name: Startseite
*/
?>
        <div id="inhalt">
 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 
            <div class="der-beitrag">
                <?php the_content(); ?>
</div> <!-- Ende des jeweiligen Beitrags -->
 
            

<?php endwhile; else: ?>

<?php endif; ?>
  
            <p><?php posts_nav_link(' - ', '« Rückwärts', 'Vorwärts »'); ?></p>
 
        </div><!-- /#inhalt -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>