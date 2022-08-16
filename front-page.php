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
<?php
echo '
<div class="grid__frontpage">
   <div class="grid__frontpage__left">
      <img src="' . $image_left . '" class="grid__frontpage__img__left">
      <button class="grid__frontpage__btn">V I D E O

      </button>
   </div>
   <div class="grid__frontpage__center">
      <img src="' . $image_center . '" class="grid__frontpage__img__center">
      <button class="grid__frontpage__btn">P H O T O G R A P H Y

      </button>
   </div>

   <div class="grid__frontpage__right">
      <button class="grid__frontpage__btn">J O U R N A L

      </button>

      <img src="' . $image_right . '" class="grid__frontpage__img__right">

   </div>
</div>';      ?>

<!-- <div style="background-color: whitesmoke; min-height: 100%; max-height: 100%; display: grid;  grid-template-rows:  1fr 1fr 1fr;">
   <div style="background-color: green ;">1</div>
<div style="background-color: white; height: 300px ;">2</div>
<div style="background-color:  red;">3</div>
</div> -->

