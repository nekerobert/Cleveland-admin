<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/private/init.php');
    require_once(INCLUDES_PATH.'/public/components/public_components.php');

?>
<?php require_once(INCLUDES_PATH.'/public/head.php');?>

<title>Cleveland Laboratory | FAQs</title>

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

<section class="page-title o-hidden" data-overlay="7" data-bg-img="images/bg/07.jpg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1> <span class="text-theme">FAQ</span></h1>
        <p>Get answers to common questions or contact us for further details.</p>
      </div>
     </div>
  </div>
</section>

<!--page title end--> 


<!--body content start-->

<div class="page-content">

<!--faq start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="accordion" class="accordion style-1">
            <?php echo render_faq_component();?>
        </div>
      </div>
    </div>
  </div>
</section>

<!--faq end-->

</div>

<!--body content end--> 

<!--footer start-->

<?php require_once(INCLUDES_PATH.'/public/footer.php');?>
<!--</div>-->
<!--page wrapper end-->
<!--back-to-top start-->

<div id="scroll-top"><a class="top arrow" href="#top"><i class="ti-arrow-up"></i></a></div>

<!--back-to-top end-->
<?php require_once(INCLUDES_PATH.'/public/scripts.php');;?>