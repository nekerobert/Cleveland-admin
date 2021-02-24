<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/private/init.php');
    require_once(INCLUDES_PATH.'/public/components/public_components.php');
    //$categories = fetch_assoc(find_data('categories', ['categories.cat_title'], NULL, 'WHERE categories.type = "services" ', false));
    //$serviceItems =  fetch_assoc(find_data('page_datas', ['page_datas.content, files.path'], 'INNER JOIN files ON page_datas.file_id = files.id', ' WHERE page_datas.title = "service-item" ', false));
?>

<?php require_once(INCLUDES_PATH.'/public/head.php');?>

<title>Cleveland Laboratory | Gallery</title>

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
        <h1>Our <span class="text-theme">Gallery</span></h1>
        <p>Lorem ipsum dolor sit amet</p>
      </div>
    </div>
  </div>
</section>

<!--page title end-->
 

<!--body content start-->

<div class="page-content">

<!--gallery start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="portfolio-filter">
          <button data-filter="" class="is-checked">All</button>
          <button data-filter=".cat1">Group 1</button>
          <button data-filter=".cat2">Group 2</button>
          <button data-filter=".cat3">Group 3</button>
          <button data-filter=".cat4">Group 4</button>
        </div>
        <div class="grid columns-2">
          <div class="grid-item cat1">
            <div class="portfolio-item popup-gallery">
              <div class="portfolio-slider owl-carousel owl-theme no-pb">
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/02.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/02.jpg">
                    <img src="images/gallery/02.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/03.jpg">
                    <img src="images/gallery/03.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/04.jpg">
                    <img src="images/gallery/04.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/05.jpg">
                    <img src="images/gallery/05.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/06.jpg">
                    <img src="images/gallery/06.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="portfolio-hover">
                <h4>Slider Gallery</h4>
                <div class="portfolio-title">
                  <a class="popup" href="#"> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item cat2">
            <div class="portfolio-item popup-gallery">
              <div class="portfolio-slider owl-carousel owl-theme no-pb">
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/01.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/02.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/03.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/04.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/05.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/large/02.jpg">
                    <img src="images/gallery/06.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="portfolio-hover">
                <h4>Slider Gallery</h4>
                <div class="portfolio-title">
                  <a class="popup" href="#"> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
             <div class="grid-item cat3 ">
            <div class="portfolio-item popup-gallery">
              <div class="portfolio-slider owl-carousel owl-theme no-pb">
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/01.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/02.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/03.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/04.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/05.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/large/02.jpg">
                    <img src="images/gallery/06.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="portfolio-hover">
                <h4>Slider Gallery</h4>
                <div class="portfolio-title">
                  <a class="popup" href="#"> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
             <div class="grid-item cat4 ">
            <div class="portfolio-item popup-gallery">
              <div class="portfolio-slider owl-carousel owl-theme no-pb">
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/01.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/02.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/03.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/04.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/05.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/large/02.jpg">
                    <img src="images/gallery/06.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="portfolio-hover">
                <h4>Slider Gallery</h4>
                <div class="portfolio-title">
                  <a class="popup" href="#"> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
             <div class="grid-item cat4">
            <div class="portfolio-item popup-gallery">
              <div class="portfolio-slider owl-carousel owl-theme no-pb">
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/01.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/02.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/03.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/04.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/gallery/large/02.jpg">
                    <img src="images/gallery/05.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/large/02.jpg">
                    <img src="images/gallery/06.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="portfolio-hover">
                <h4>Slider Gallery</h4>
                <div class="portfolio-title">
                  <a class="popup" href="#"> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
     
          <div class="grid-item cat4">
            <div class="portfolio-item popup-gallery">
              <img src="images/gallery/01.jpg" alt="">
              <div class="portfolio-hover">
                <h4>Image Popup</h4>
                <div class="portfolio-title">
                  <a class="popup popup-img" href="images/gallery/06.jpg"> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
       
        </div>
      </div>
    </div>
  </div>
</section>

<!--gallery end-->

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