<?php
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = Array()) {
    $indent = str_repeat("\t", $depth);
      if($depth >= 0){
        $output .= "\n$indent<ul class=\"menu vertical\">\n";
      }
  }
}

$blog_title = get_bloginfo();

wp_nav_menu(array('menu' => 'paavalikko', 'items_wrap' => '<ul class="dropdown menu horizontal show-for-large" data-dropdown-menu><li class="menu-text">'.$blog_title.'</li>%3$s</ul>', 'walker' => new My_Walker_Nav_Menu()));

// if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('vimpaimet') );
?>