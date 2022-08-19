

<?php
/**
 * Custom Search Form.
 */

 ?>


<form role="search" method="get" class="form-inline search-form my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<!-- <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'aquila' ); ?></span> -->
    <div class="d-flex flex-row"> 
    <input  class=" mr-sm-2" type="search" placeholder="<?php echo esc_attr_x('Search', 'placeholder', 'aquila' )?> " value="<?php the_search_query(); ?> " aria-label="Search" name="s" >
    <button style="border-color: gray; background-color: white;" class="ms-1 my-2 my-sm-0" type="submit"><?php echo esc_attr_x( 'Search', 'submit button', 'aquila' ); ?></button>
    </div>

</form>