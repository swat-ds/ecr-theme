<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <link href="../css/skeleton.css" media="all" rel="stylesheet" type="text/css">
    <link href="../css/style.css" media="all" rel="stylesheet" type="text/css">
    <?php
    queue_css_file(array('iconfonts', 'skeleton','style'));

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('vendor/jquery-accessibleMegaMenu'); ?>
    <?php queue_js_file('berlin'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
 <!-- <div id="overlay">
   <div id="overlaySolid"> -->
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        
        <header role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title"><?php echo link_to_home_page(theme_logo()); ?></div>
            <!-- ADD LOGO-->
            <!-- <div id="logo" tabindex="">
                <a href="index.html"><img src="themes/ecr-theme/img/cr_logo.svg" alt="Swarthmore's Oral Histories"></a>
            <!--  <div id="site-title"><a href="index.html">Oral Histories</a> -->
            </div> -->
            <div id="search-container" role="search">
                <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                <?php echo search_form(array('show_advanced' => true)); ?>
                <?php else: ?>
                <?php echo search_form(); ?>
                <?php endif; ?>
            </div>
            <div id="primary-nav" role="navigation">
             <?php
                  echo public_nav_main();
             ?>
            </div>

            <div id="mobile-nav" role="navigation" aria-label="<?php echo __('Mobile Navigation'); ?>">
             <?php
                  echo public_nav_main();
             ?>
           </div>
	  </header>
        <?php echo theme_header_image(); ?>
      <div id="content" role="main" tabindex="-1">
    <!-- </div>
   </div>
</div> -->



<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
