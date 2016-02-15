<div id="sidebar">
<?php
 if ( !function_exists('dynamic_sidebar') || !
dynamic_sidebar('seitenleiste') ) :
 ?>
            <img src="/Test/wp-content/themes/khadija/img/<?php $category = get_the_category(); echo $category[0]->slug; ?>.jpg">
            <h3><label for="s">Suchen</label></h3>
            <form id="searchform" method="get" action="<?php bloginfo('url'); ?>/">
                <div>
                    <input name="s" id="s" size="20" type="text" />
                    <input name="submit" value="Suchen" type="submit" class="such-button" />
                </div>
            </form>
 
            <h3>Themen</h3>
            <ul>
                <?php wp_list_categories('orderby=name&hierarchical=1&title_li='); ?>
</ul>
  
 
  
  </ul>
  <h3>Intern</h3>
  <ul>
  <?php wp_register(); ?>
  <li><?php wp_loginout(); ?></li>
  <?php wp_meta(); ?>
  </ul>
 <?php endif; ?>
  </div><!-- /#sidebar -->
 <!-- Ende der sidebar.php -->