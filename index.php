<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/private/init.php');
    
    $sliders = find_data('page_datas', ['page_datas.content, files.path'], 'page_datas INNER JOIN files ON page_datas.file_id = files.id', 'WHERE page_datas.title = "slider" ', false);
    $advert = find_data('page_datas', ['page_datas.content, files.path'], 'page_datas INNER JOIN files ON page_datas.file_id = files.id','WHERE page_datas.title = "home-advert" LIMIT 1', false);

    $aboutData = find_data('page_datas', ['page_datas.content'], NULL ,' WHERE page_datas.title = "main-section-about" LIMIT 1', false);

    require_once(INCLUDES_PATH.'/public/components/public_components.php');
?>

<?php require_once(INCLUDES_PATH.'/public/head.php');?>

<title>Cleveland Laboratory | Home</title>

<?php require_once(INCLUDES_PATH.'/public/styles.php'); ?>

</head>

<body class="overflow-main">

<!--page wrapper start-->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader"><img src="images/loader.gif" alt=""></div>
</div>

<!-- preloader end -->

<?php require_once(INCLUDES_PATH.'/public/header.php');?>
<!--hero section start-->

<section class="fullscreen-banner text-center p-0">
    <?php 
    if(!is_bool($sliders)){
        // Slider will only be included when uploaded from the backend
        require_once(INCLUDES_PATH.'/public/sliders.php');
    }
    
    ?>
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

    
<!--    advert starts-->
<section>
  <div class="container">
   <?php echo advert_component($advert);
   ?>
  </div>
</section>
<!--advert ends-->
<!--about start-->

<section>
  <div class="container">
    <?php echo about_component($aboutData); ?>
 </div>
</section>

<!--about end-->

<!-- Our services start -->
<section>
    <?php echo section_component('service-section-content');?>
  <div class="container">
    <div class="row">
      <?php echo service_categories()?>
      <div class="col-md-12 mb-4">
        <h5 class="mb-3 text-capitalize">
        <a class="btn btn-theme btn-radius mt-4" href="services-we.html"><span>More Services <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></span></a>
        </h5>
      </div>
    </div>
  </div>
</section>
<!-- Our services end -->

<!-- Update slide starts -->
<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <div class="owl-carousel owl-theme owl-0 no-pb">
          <div class="item">
            <img class="img-fluid w-100" src="images/home/healthy1.jpg"  alt="">
          </div>
          <div class="item">
            <img class="img-fluid w-100" src="images/home/healthy2.jpg" alt="">
          </div>
<!-- 
          <div class="item">
            <img class="img-fluid w-100" src="images/about/telecom_bg.jpg" alt="">
          </div> -->

        </div>
      </div>
      <div class="col-lg-6 col-md-12 md-mt-3">
        <div class="section-title mb-3">
        <h2 class="title-2">Health <span>Tips</span></h2>
        </div>
        <h5 class="text-capitalize line-h-2">Welcome To Thomso Construction Group </h5>
        <p>Thomso Construction sit amet, consectetur adipisicing elit. Excepturi vero aliquam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi vero minima impedit aliquam id. consectetur adipisicing elit. Excepturi vero minima impedit Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
         <!-- <a class="btn btn-theme btn-radius mt-4" href="#"><span>Read More</span></a> -->
      </div>
      <div class="col-lg-6 col-md-12 md-mt-3">
        <h2 class="title">Helt <span>us</span></h2>
        <p class="lead text-black font-weight-bold">Policy Africa Concept is an organization that is commited to communicating Policies and Laws of different sectors to Nigerian citizens using simple language and Info-graphics.</p>
       <a class="btn btn-sm btn-border btn-radius btn-iconic mt-2" href="about-us.html"><span>Learn More <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i></span></a>
      </div>
    </div>
    <div class="row mt-5">
    </div>
  </div>
</section>

<!-- Update slider ends -->

<!-- Why choose us start -->
<section>
  <div class="container">
   <?php echo section_component('home-key-strength');?>
    <div class="row">
      <?php echo strength_item_component();?>
    </div>
  </div>
</section>
<!-- Why choose us ends -->

<!--subscribe start-->
</div>
<!--body content end--> 

<!-- Equipmemts starts -->
<section id="screenshots">
  <div class="container">
    <?php echo section_component('home-equipment-section');?>
    <div class="row">
      <div class="col-md-12">
        <div class="app-screenslider owl-carousel owl-theme no-pb owl-loaded owl-drag">
               
        <div class="owl-stage-outer">
        <div class="owl-stage" style="transition: all 0.25s ease 0s; width: 3552px; transform: translate3d(-1776px, 0px, 0px);">
         <?php echo equipment_items_component();?>
        </div>
        </div>
          <div class="owl-nav disabled">
            <button type="button" role="presentation" class="owl-prev"></button>
            <button type="button" role="presentation" class="owl-next"></button>
          </div>
          <div class="owl-dots disabled"></div>
        </div>
      </div>
       </div>
          <div class="col-md-12 mb-4">
        <h5 class="mb-3 text-capitalize">
        <a class="btn btn-theme btn-radius mt-4" href="#"><span>View More <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></span></a>
        </h5>
      </div>
  </div>
    </div>
</section>
<!--  Equipmemts ends -->

<!-- Contact starts -->
<section class="theme-bg text-white py-5">
  <div class="container">
  <!-- home-footer-banner -->
   <?php echo footer_banner_component('home-footer-banner');?>
  </div>
</section>
<!-- Contact ends -->

<?php require_once(INCLUDES_PATH.'/public/footer.php');?>


<!--</div>-->

<!--page wrapper end-->


<!--back-to-top start-->

<div id="scroll-top"><a class="top arrow" href="#top"><i class="ti-arrow-up"></i></a></div>

<!--back-to-top end-->

 
<?php require_once(INCLUDES_PATH.'/public/scripts.php');;?>