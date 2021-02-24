<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/private/init.php');
    require_once(INCLUDES_PATH.'/public/components/public_components.php');

    $categories = fetch_assoc(find_data('categories', ['categories.cat_title'], NULL, 'WHERE categories.type = "services" ', false));
    $serviceItems =  fetch_assoc(find_data('page_datas', ['page_datas.content, files.path'], 'INNER JOIN files ON page_datas.file_id = files.id', ' WHERE page_datas.title = "service-item" ', false));

    

?>

<?php require_once(INCLUDES_PATH.'/public/head.php');?>

<title>Cleveland Laboratory | Services</title>

<?php require_once(INCLUDES_PATH.'/public/styles.php'); ?>

</head>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader"><img src="images/loader.gif" alt=""></div>
</div>

<!-- preloader end -->


<!--header start-->

<?php require_once(INCLUDES_PATH.'/public/header.php');?>

<!--header end-->

<!--page title start-->

<section class="page-title o-hidden" data-overlay="7" data-bg-img="images/bg/02.jpg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1>Servi<span class="text-theme">ces</span></h1>
        <p>Our exceptional services are the best you will get in town.</p>
      </div>
      </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--features start-->

<section >
  <div class="container">
     <?php echo section_component('service-section-content');?>
    </div>
</section>

<!--features end-->

<!--tab start-->
<?php echo main_service_component($categories, $serviceItems);?>
<!--tab end-->


<!--subscribe start-->

<section class="text-center text-white theme-bg py-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3>Get in touch with us</h3>
        <p class="mb-3"></p> <a href="#" class="btn btn-white btn-border"><span>locate us</span></a>
      </div>
    </div>
  </div>
</section>

<!--subscribe end-->

<!--body content end--> 

<!--footer start-->

<?php require_once(INCLUDES_PATH.'/public/footer.php');?>
<!--</div>-->
<!--page wrapper end-->
<!--back-to-top start-->

<div id="scroll-top"><a class="top arrow" href="#top"><i class="ti-arrow-up"></i></a></div>

<!--back-to-top end-->
<?php require_once(INCLUDES_PATH.'/public/scripts.php');;?>