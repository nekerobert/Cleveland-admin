
<?php 

  $slice1Rotation = [-25,10,3,-25,10,3,-25,10,3];
  $slice1Scale = [2,1.5,2,2,1.5,2,2,1.5,2];
  $slice2Rotation = [-25,-15,3,-25,-15,3,-25,-15,3];
  $slice2Scale = [2, 1.5,1,2,1.5,1,2,1.5,1];
  $orientation = ["horizontal","vertical","horizontal","vertical","horizontal","vertical","horizontal","vertical","horizontal"];
 ;
 
 $sliderStr = "";  $index = 0;

  if(is_array($sliders)){
    // A single slider is return 
    $sliderStr.= slider_component($sliders, $orientation[0], $slice1Rotation[0], $slice2Rotation[0], $slice1Scale[0], $slice2Scale[0]);
  }else{
    // Multiple slider return in an object
    while($record = mysqli_fetch_assoc($sliders)){
      $slider = json_to_array($record["content"]);
      $slider["path"] = full_upload_url($record["path"]);
      $slider = sanitize_html($slider);
      // Generate slider component
      $sliderStr.= slider_component($slider, $orientation[$index], $slice1Rotation[$index], $slice2Rotation[$index], $slice1Scale[$index], $slice2Scale[$index]);
      
      $index++;

    }
    
  }
  


?>

<div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
      <?php echo $sliderStr; ?>
    </div>
    <!-- /sl-slider -->

    <nav id="nav-arrows" class="nav-arrows"> <span class="nav-arrow-prev">Previous</span>
      <span class="nav-arrow-next">Next</span>
    </nav>
    <nav id="nav-dots" class="nav-dots">
      <span class="nav-dot-current"></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </nav>
  </div>
  <!-- /slider-wrapper -->