<?php

?>

<div class=" d-flex row m-0" style="height: 100%; max-width: 100%; max-height: 100%;">
        <?php 
            echo'
                <div class="col p-0 mh-auto bg-primary align-item-center  img-hover-zoom " style="width: 100%; height:100%; ">
                    <img 
                        src="' . $featured_img_url_left . '" style=" min-height:100%; max-width:100%; object-fit: cover;  object-position: 50% 50%;">
                            <!-- <button class="btn " style="position: absolute;"> video</button> -->
                </div>';
            echo'
                <div class="col p-0 mh-auto bg-primary align-item-center  img-hover-zoom " style="width: 100%; height:100%; ">
                    <img src="' . $featured_img_url_center . '" style=" min-height:100%; max-width:100%; object-fit: cover;  object-position: 50% 50%;">
                </div>';
            echo'
                <div class="col p-0 mh-auto bg-primary align-item-center  img-hover-zoom " style="width: 100%; height:100%; ">
                    <img src="' . $featured_img_url_right . '" style=" min-height:100%; max-width:100%; object-fit: cover;  object-position: 50% 50%;"> 
                </div>'; 
        ?>