 <!DOCTYPE html>
<html lang="de">
<head>
 
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/Test/wp-content/themes/khadija/<?php $category = get_the_category(); echo $category[0]->slug; ?>.css" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
 
<body>
<div id="container">
 
    <h1 id="kopfbereich"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
         
    <div id="hauptnavi">

          <?php the_breadcrumb(); ?>   
 <!--       <?php wp_page_menu('show_home=Home&depth=1'); ?>     -->
    </div><!-- /#hauptnavi -->
 
    <div id="mittelbereich">
<!-- Ende header.php -->
