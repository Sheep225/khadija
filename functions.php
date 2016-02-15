<?php
if ( function_exists('register_sidebar') )
 register_sidebar(array('name'=>'seitenleiste',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h2>',
 'after_title' => '</h2>',
 ));

function the_breadcrumb() {
echo '<ul id="crumbs">';
if (!is_home()) {
echo '<li><a href="http://khadija-ch.myds.me/reiseblog/">';echo 'Home';echo "</a></li>";
if (is_category() || is_single()) {
echo '<li>';
the_category(' </li><li> ');
if (is_single()) {
echo "</li><li>";
the_title();
echo '</li>';
}
} elseif (is_page()) {
echo '<li>';
echo the_title();
echo '</li>';
}
}
elseif (is_tag()) {single_tag_title();}
elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
echo '</ul>';
}