

<?php
/**
 * Custom Search Form.
 */

 ?>


<form role="search" method="get" class="form-inline search-form my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <div class="d-flex flex-row"> 
    <input  style="border: none;" class=" "  autocomplete="off"   placeholder="Search" value="<?php the_search_query(); ?> " aria-label="Search" name="s" >
    <button style="border: none; background: none;" class="ms-1 my-2 my-sm-0" type="submit"><?php echo esc_attr_x( '', 'submit button', 'aquila' ); ?>   <i class="fa  fa-magnifying-glass"></i></button>
    </div>

</form>