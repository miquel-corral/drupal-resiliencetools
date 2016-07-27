<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div id="wrap">

  <header id="header" class="clearfix" role="banner">

    <div>
      <?php if ($logo): ?>
       <div id="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        </div>
      <?php endif; ?>
      <hgroup id="sitename">
        <h2><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h2>
        <p><?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?></p><!--site slogan-->
      </hgroup>
    </div>
    <nav id="navigation" class="clearfix" role="navigation">
      <div id="main-menu">
        <?php 
          if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
          } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
          }
          print drupal_render($main_menu_tree);
        ?>
      </div>
    </nav><!-- end main-menu -->
  </header>
  
  <?php print render($page['header']); ?>
  
   <div id="search_form">
   
  <?php if ($page['search_form']): ?><div id="search_form_content"><?php print render($page['search_form']); ?></div><?php endif; ?>
</div>
     
   <?php if ($page['slider_new']): ?><div id="slider_new"><?php print render($page['slider_new']); ?></div><?php endif; ?>
  
    <?php if (theme_get_setting('slideshow_display','business')): ?>
    <?php 
    $url1 = check_plain(theme_get_setting('slide1_url','business'));
    $url2 = check_plain(theme_get_setting('slide2_url','business'));
    $url3 = check_plain(theme_get_setting('slide3_url','business'));
    $url4 = check_plain(theme_get_setting('slide4_url','business'));    
    $url5 = check_plain(theme_get_setting('slide5_url','business'));        
    $url6 = check_plain(theme_get_setting('slide6_url','business'));            
    $url7 = check_plain(theme_get_setting('slide7_url','business'));            
    $url8 = check_plain(theme_get_setting('slide8_url','business'));  
    ?>
      <div id="slider">
        <div class="main_view">
            <div class="window">
                <div class="image_reel">
                    <a href="<?php print url($url1); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/Addis Ababa_1.jpg'; ?>"></a>
                    <a href="<?php print url($url2); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/Barcelona.jpg'; ?>"></a>
                    <a href="<?php print url($url3); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/Can_Tho_1.jpg'; ?>"></a>
                    <a href="<?php print url($url4); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/New_York.jpg'; ?>"></a>
                    <a href="<?php print url($url5); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/Rotterdam.jpg'; ?>"></a>
                    <!--a href="<!--?php print url($url6); ?>"><img src="<!--?php print base_path() . drupal_get_path('theme', 'business') . '/images/NDLogoMap.png'; ?>"></a>
                    <a href="<!--?php print url($url7); ?>"><img src="<!--?php print base_path() . drupal_get_path('theme', 'business') . '/images/C40LogoMap.png'; ?>"></a>
                    <a href="<!--?php print url($url8); ?>"><img src="<!--?php print base_path() . drupal_get_path('theme', 'business') . '/images/CarbonnLogoMap.png'; ?>"></a>
                    <a href="<!--?php print url($url9); ?>"><img src="<!--?php print base_path() . drupal_get_path('theme', 'business') . '/images/CarbonnLogoMap.png'; ?>"></a-->
                </div>
                <div class="descriptions">
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide1_desc','business')); ?></div>
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide2_desc','business')); ?></div>
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide3_desc','business')); ?></div>
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide4_desc','business')); ?></div>
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide5_desc','business')); ?></div>

                </div>
            </div>
        
            <div class="paging">
                <a rel="1" href="#">1</a>
                <a rel="2" href="#">2</a>
                <a rel="3" href="#">3</a>
                <a rel="4" href="#">4</a>
                <a rel="5" href="#">5</a>                
                         
            </div>
        </div>
      </div><!-- EOF: #banner -->
	<?php endif; ?>  


  <?php print $messages; ?>

  <?php if ($page['homequotes']): ?>
  <div id="home-quote"> <?php print render($page['homequotes']); ?></div>
  <?php endif; ?>
  
  <?php if ($page['home_high1'] || $page['home_high2'] || $page['home_high3']): ?>
    <div id="home-highlights" class="clearfix">
     <?php if ($page['home_high1']): ?>
     <div class="home-highlight-box-1"><?php print render($page['home_high1']); ?></div>
     <?php endif; ?>
     <?php if ($page['home_high2']): ?>
     <div class="home-highlight-box-2"><?php print render($page['home_high2']); ?></div>
     <?php endif; ?>
     <?php if ($page['home_high3']): ?>
     <div class="home-highlight-box-3 remove-margin"><?php print render($page['home_high3']); ?></div>
     <?php endif; ?>
    </div>
  <?php endif; ?>


    
    <?php if ($page['home_logos']): ?><div id="home-logos"><img src="/sites/all/images/banner_tools.png" width="1000" height="63" /> <?php print render($page['home_logos']); ?></div><?php endif; ?>
  
  <div id="partners">
  <div class="partners-logo"></div>
       <?php if ($page['footer_slider']): ?>
       <?php print render($page['footer_slider']); ?>
	   
	   <?php endif; ?>
       
  </div>
  
  <?php if (theme_get_setting('show_front_content') == 1): ?>
    <div id="main" class="clearfix">
        
      <section id="post-content" role="main">
        <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
      </section> <!-- /#main -->

      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar" role="complementary" class="sidebar clearfix">
         <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>
    </div>
    <div class="clear"></div>
  <?php endif; ?>
  


<div class="clear"></div>
  <div id="footer-custom">
  <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
    <div id="footer-saran" class="clearfix">
     <div id="footer-wrap">
      <?php if ($page['footer_first']): ?>
      <div class="footer-box"><?php print render($page['footer_first']); ?></div>
      <?php endif; ?>
      <?php if ($page['footer_second']): ?>
      <div class="footer-box"><?php print render($page['footer_second']); ?></div>
      <?php endif; ?>
      <?php if ($page['footer_third']): ?>
      <div class="footer-box"><?php print render($page['footer_third']); ?></div>
      <?php endif; ?>
      <?php if ($page['footer_fourth']): ?>
      <div class="footer-box remove-margin"><?php print render($page['footer_fourth']); ?></div>
      <?php endif; ?>
     </div>
    </div>
    <div class="clear"></div>
  <?php endif; ?>
  </div>
  <!--END footer -->
  <?php print render($page['footer']) ?>
  
  <?php if (theme_get_setting('footer_copyright') || theme_get_setting('footer_credits')): ?>
  <div class="clear"></div>
  <div id="copyright">
    <?php if ($footer_copyright): ?>
      <?php print $footer_copyright; ?>
    <?php endif; ?>
    <?php if (theme_get_setting('footer_credits')): ?>
      
    <?php endif; ?>
  </div>
  <?php endif; ?>
</div>
