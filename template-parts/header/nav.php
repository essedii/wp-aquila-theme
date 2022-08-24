<?php
// Header Navigation template.

// @package Aquila
$menu_class = \Aquila_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('aquila-header-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);

// echo '<pre>';
//               print_r($header_menus);
//               wp_die();

?>

<nav class="nav navbar navbar-expand-lg p-0 bg-light">

  <div class="nav__dropdown ">
    <button style="border: none;" class=" shadow-none nav__dropdown__toggler navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav__dropdown_menu collapse navbar-collapse  align-items-center "  id="navbarSupportedContent">
      <?php
      if (!empty($header_menus) && is_array($header_menus)) {
      ?>
        <ul class="nav__dropdown__menu__list bg-light justify-content-center  navbar-nav mb-lg-0">
          <?php
          foreach ($header_menus as $menu_item) {
            if (!$menu_item->menu_item_parent) {

              $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
              $has_children = !empty($child_menu_items) && is_array($child_menu_items);

              if (!$has_children) {
          ?>
                <li class="nav-item align-items-center" style="text-align: center;">
                  <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>">
                    <?php echo esc_html($menu_item->title); ?>
                  </a>
                </li>
              <?php
              } else {
              ?>
                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo esc_html($menu_item->title); ?>
                  </a>
                  <ul class="dropdown-menu ">
                    <?php
                    foreach ($child_menu_items as $child_menu_items) {
                    ?>
                      <li class="">
                        <a class="dropdown-item" href="<?php echo esc_url($child_menu_items->url); ?>">
                          <?php echo esc_html($child_menu_items->title); ?>
                        </a>
                      </li>

                    <?php
                    }
                    ?>
                  </ul>
                </li>
              <?php
              }
              ?>
          <?php
            }
          }
          ?>
        </ul>
      <?php
      }
      ?>

    </div>
  </div>

  <div class=" nav__search">
    <?php get_search_form(); ?>
  </div>



</nav>