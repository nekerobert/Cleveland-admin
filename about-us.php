<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/private/init.php');
    require_once(INCLUDES_PATH.'/public/components/public_components.php');

    // Retrieved About Us page data
    $data = find_data('page_datas', ['page_datas.content'], NULL ,' WHERE page_datas.title = "main-section-about" LIMIT 1', false);
    $data = json_to_array($data["content"]);
    $data = sanitize_html($data);

    // About Service Items
    $items =  find_data('page_datas', ['page_datas.content'], NULL ,' WHERE page_datas.title = "service-item" ', false); 
?>

<?php require_once(INCLUDES_PATH.'/public/head.php');?>

<title>Cleveland Laboratory | About Us</title>

<?php require_once(INCLUDES_PATH.'/public/styles.php'); ?>

</head>

<body class="overflow-main">

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

<section class="page-title o-hidden" data-overlay="7" data-bg-img="images/about/bg3.jpg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1><span class="text-theme">About Us</span></h1>
        <p>We are a global leader in diagnostic services and aim to provide access to affordable and quality services in Abuja and its environs.</p>
      </div>
       </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--about start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <div class="owl-carousel owl-theme owl-0 no-pb">
            <?php echo about_slider_component();?>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 md-mt-3">
            <?php echo about_us_component($data)?>
       
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-sm-6">
          <?php echo company_attribute($data["mission_title"], $data["mission_content"]); ?>
      </div>
      <div class="col-sm-6">
      <?php echo company_attribute($data["vision_title"], $data["vision_content"]); ?>
      </div>
      </div>
  </div>
</section>
</div>
<!--about end-->
<!--feature box start-->
<section>
  <div class="container">
    <div class="row">
    </div>
  </div>
</section>
<!--    slider starts-->
<section class="content-slider custom-mt-10 p-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel owl-theme owl-0 white-bg box-shadow o-hidden no-pb">
            <?php echo challenge_and_solution();?>
          <!-- <div class="item">
            <div class="row no-gutters row-eq-height">
              <div class="col-lg-6 col-md-12">
                <div>
                  <img class="img-fluid w-100 h-100" src="images/about/about1.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 col-md-12 px-5 py-5 xs-px-2 xs-py-2 align-item-middle">
                <div>
                <h4 class="text-black mb-2">The<span class="text-theme"> Solution</span></h4>
                <p class="lead text-black">Cleveland laboratory provieds a simple platform that will provide comprehensive knowledge of the various Policies/Laws and its implications using Infographics: giving both policy makers and beneficiaries better communication.</p>
              </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>


<!--features start-->

<section>
  <div class="container">
    <?php echo section_component('core-value-about');?>
    <div class="row">
        <?php echo value_items_component()?>
      </div>
  </div>
</section>

<!--features end-->


<!--timeline start-->

<section class="dark-bg jarallax" data-bg-img="images/about/lab-patient-chair.jpg" data-overlay="8" data-speed="-0.2">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="text-theme">What we do</h3>
        </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="education-box">
          <div class="education-box-item" data-line="">
            <ul>
            <?php echo about_service_component($items)?>
            </ul>
          </div>
          <div class="education-box-item" data-line=""> 
              <ul>
            <?php echo about_service_component($items, true)?>
            </ul>
         </div>
      </div>
    </div>
  </div>
</section>

<!--timeline end-->


<!--team start-->

<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="section-title">
          <h2 class="title">Our <span>Team</span></h2>
          </div>
      </div>
    </div>
    <div class="row">
        <?php echo team_component();?>
    </div>
  </div>
</section>

<!--team end-->


<!--testimonials start-->

<section class="grey-bg">
  <div class="container">
  <?php echo section_component('about-testimonial-section');?>
    <div class="row">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="owl-carousel owl-theme owl-0">
            <?php echo testimonial_items_component(); ?>
        <!-- <div class="item">
            <div class="testimonial style-3 box-shadow mx-sm-5 px-4 py-5 mt-5 mb-0">
              <div class="testimonial-content"> <span><i class="ti-quote-left"></i></span>
                <p>consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.</p>
              </div>
              <div class="testimonial-avatar">
                <div class="testimonial-img">
                  <img class="img-center" src="images/thumbnail/01.png" alt="">
                </div>
                <div class="testimonial-caption">
                  <h6>- John Doe</h6>
                  <label>Designer</label>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="item">
            <div class="testimonial style-3 box-shadow mx-sm-5 px-4 py-5 mt-5 mb-0">
              <div class="testimonial-content"> <span><i class="ti-quote-left"></i></span>
                <p>consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.</p>
              </div>
              <div class="testimonial-avatar">
                <div class="testimonial-img">
                  <img class="img-center" src="images/thumbnail/02.png" alt="">
                </div>
                <div class="testimonial-caption">
                  <h6>- John Doe</h6>
                  <label>Designer</label>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="item">
            <div class="testimonial style-3 box-shadow mx-sm-5 px-4 py-5 mt-5 mb-0">
              <div class="testimonial-content"> <span><i class="ti-quote-left"></i></span>
                <p>consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.</p>
              </div>
              <div class="testimonial-avatar">
                <div class="testimonial-img">
                  <img class="img-center" src="images/thumbnail/01.png" alt="">
                </div>
                <div class="testimonial-caption">
                  <h6>- John Doe</h6>
                  <label>Designer</label>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

<!--testimonials end-->


<!--subscribe start-->

<section class="text-center text-white jarallax py-5" data-speed="-0.2" style="background:#039be5 url('images/bg/01.jpg') no-repeat center center; background-size: cover;" data-overlay="9">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="text-theme">Get in touch with us</h3>
        <a href="#" class="btn btn-white btn-border"><span>Contact US</span></a>
      </div>
    </div>
  </div>
</section>

<!--subscribe end-->

</div>

<!--body content end--> 


<?php require_once(INCLUDES_PATH.'/public/footer.php');?>


<!--</div>-->

<!--page wrapper end-->


<!--back-to-top start-->

<div id="scroll-top"><a class="top arrow" href="#top"><i class="ti-arrow-up"></i></a></div>

<!--back-to-top end-->

 
<?php require_once(INCLUDES_PATH.'/public/scripts.php');;?>