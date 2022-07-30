<?php
/**
 * Theme Sidebars.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

/**
 * Class Assets
 */
class Sidebars {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 */
	protected function setup_hooks() {

		/**
		 * Actions
		 */
		add_action( 'widgets_init', [ $this, 'register_sidebars' ] );

	}

	/**
	 * Register widgets.
	 *
	 * @action widgets_init
	 */
	public function register_sidebars() {

		register_sidebar(
			[
				'name'          => esc_html__( 'Sidebar', 'aquila' ),
				'id'            => 'sidebar-1',
			
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			]
		);

		register_sidebar(
			[
				'name'          => esc_html__( 'Footer', 'aquila' ),
				'id'            => 'sidebar-2',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			]
		);

	}

	

}