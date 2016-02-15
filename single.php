<?php get_header(); ?>

<div id="inhalt">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Der Verweis (Permalink) zu: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="beitrags-info">Von <?php the_author() ?> am <?php the_time('d. F Y'); ?> um <?php the_time('H:i'); ?> <?php edit_post_link(); ?></div>

<div class="der-beitrag">

<?php the_content(); ?>

</div> <!-- Ende des jeweiligen Beitrags -->


<p class="center"><?php previous_post_link('%link','<< Zum vorherigen Beitrag'); ?>&nbsp;&mdash;&nbsp;<?php next_post_link('%link','Zum nächsten Beitrag >>'); ?></p>

<?php comments_template(); /* Der Kommentarbereich */ ?><?php endwhile; else: ?>
<p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>
<?php endif; ?>
 
</div><!-- /#inhalt -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>