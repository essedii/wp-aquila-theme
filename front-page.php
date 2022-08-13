<?php
// Main tempalte file.
// @package aquila
// include_once'header.php';
get_header();


?>


<?php
$image_left =  AQUILA_BUILD_IMG_URI . '/video.png';
$image_center =  AQUILA_BUILD_IMG_URI . '/photo.jpg';
$image_right =  AQUILA_BUILD_IMG_URI . '/journal.png';

?>
    <div class=" d-flex row m-0" style="height: 100%; max-width: 100%; max-height: 100%;">
        <?php 
            echo'
                <div class="col p-0 mh-auto bg-primary align-item-center  img-hover-zoom " style="width: 100%; height:100%; ">
                    <img 
                        src="' . $image_left . '" style=" min-height:100%; max-width:100%; object-fit: cover;  object-position: 50% 50%;">
                            <!-- <button class="btn " style="position: absolute;"> video</button> -->
                </div>';
            echo'
                <div class="col p-0 mh-auto bg-primary align-item-center  img-hover-zoom " style="width: 100%; height:100%; ">
                    <img src="' . $image_center . '" style=" min-height:100%; max-width:100%; object-fit: cover;  object-position: 50% 50%;">
                </div>';
            echo'
                <div class="col p-0 mh-auto bg-primary align-item-center  img-hover-zoom " style="width: 100%; height:100%; ">
                    <img src="' . $image_right . '" style=" min-height:100%; max-width:100%; object-fit: cover;  object-position: 50% 50%;"> 
                </div>'; 
        ?>
    </div>
