

<?php
/**
 * Custom Search Form.
 */

 ?>


<form role="search" method="get" class="search__form form-inline search-form  " action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <div class="d-flex flex-row align-items-center
    "> 
    <input  style="height:20px" class="search__form"  autocomplete="off"   placeholder="Search" value="<?php the_search_query(); ?> " aria-label="Search" name="s" >
    <button style="border: none;" class="search__form__btn ms-1 my-2 my-sm-0" type="submit"><?php echo esc_attr_x( '', 'submit button', 'aquila' ); ?>   <i class="fa  fa-magnifying-glass" style="color: gray;"></i></button>
    </div>

</form>