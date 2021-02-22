<?php

    // Helper

    function process_data($result, $path=false){
      // Recieves an array of object, convert it to an array and generate the file path for the image spcified in the array
      if($path){
        // Path is a property inside the content JSON string
        $result = json_to_array($result["content"]);
        if(isset($result["path"])) {
          $result["path"] = full_upload_url($result["path"]);
        }
        $result = sanitize_html($result);
        return $result;
      }
      $path =  full_upload_url($result["path"]);
      $result = json_to_array($result["content"]);
      $result["path"] = $path;
      $result = sanitize_html($result);
      return $result;
    }

    function fetch_assoc($obj){
      $data = [];
      while($result = mysqli_fetch_assoc($obj)){
        array_push($data, $result);
      }
      return $data;
    }



    function slider_component($slider=[], $orientation, $sl1Rotate, $sl2rotate, $sl1Scale, $sl2Scale){
       $str = ' <div class="sl-slide" data-orientation="'.$orientation.'" data-slice1-rotation="'.$sl1Rotate.'" data-slice2-rotation="'.$sl2rotate.'" data-slice1-scale="'.$sl1Scale.'" data-slice2-scale="'.$sl2Scale.'">
        <div class="sl-slide-inner" data-bg-img="'.$slider["path"].'" data-overlay="7">
          <div class="align-center">
            <div class="container">
              <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                  <h1 class="text-white mt-4 mb-2 animated4">'.$slider["primary_title"].' <span style="font-size: 40px">'.$slider["secondary_title"].'.</span></h1>
            ';
            if($slider["enable_btn_one"]){
                $str.=' <a href="'.$slider["btn_one_link"].'" class="btn btn-theme btn-circle animated5"> <span>'.$slider["btn_one_text"].'</span>
                 </a>';
            }
            
            if($slider["enable_btn_two"]){
                $str.=' <a href="'.$slider["btn_two_link"].'" class="btn btn-circle btn-border btn-white animated2"> <span>'.$slider["btn_two_text"].'</span>
                </a>';
            }

            $str.=' </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
    return $str;
                 
    }

    function advert_component($advert){
      if(!is_bool($advert)){
        $path = full_upload_url($advert["path"]);
        $advert = json_to_array($advert["content"]);
        $advert["path"] = $path;
        $advert = sanitize_html($advert);
        //Advert is not null
        $str= ' <div class="row">
        <div class="col-lg-8 col-md-12">
              <div class="post-image">
                <img class="img-fluid" src="'.$advert["path"].'" alt="">
              </div>
        </div>
        <div class="col-lg-4 col-md-12 sidebar">
          <div class="widget">
              <div class="post-desc">
                <div class="post-title">
                  <h5>'.$advert["advert_title"].'</h5>
                </div>
                <p>'.$advert["advert_text"].'</p>
                ';
                if($advert["enable_advert_btn"]){
                  $str.='<a class="btn btn-theme btn-radius mt-4" href="'.$advert['advert_btn_link'].'"><span>'.$advert['advert_btn_text'].'<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></span></a>
                  ';
                }
              $str.='  
              </div>
              </div>
            </div>
          </div>';

          return $str;

      }
      
         
          
    }

    function about_component($aboutData){
    if(!is_bool($aboutData)){
      $aboutData = regenerate_with_required(json_to_array($aboutData["content"]), 'section_title,enable_subtitle,subtitle,short_desc,btn_text,btn_link');
        $aboutData= sanitize_html($aboutData);

        $str = '<div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <div class="about-img about-layer about-3">
            <div class="about-layer-one">
              <img class="img-center" src="./images/home/lab-reagents.jpg" alt="">
            </div>
            <div class="about-layer-two">
              <img class="img-center" src="./images/home/labworker3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 md-mt-3">
          <div class="section-title mb-3">
            <h2 class="title-2">'.$aboutData["section_title"].'</h2>
          </div>';

          if($aboutData["enable_subtitle"]){
            $str.= ' <h5 class="text-capitalize line-h-2">'.$aboutData["subtitle"].'<span class="text-theme"></span></h5>';
          } 
        
          $str .= '
          <p> '.$aboutData["short_desc"].'</p>
          ';

          // <ul class="list-unstyled text-black list-icon">
          //   <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Thomso consectetur adipisicing</li>
          //   <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Inspiring The Next Generations</li>
          //   <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Choose our Best Demo For Your Website</li>
          //   <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Fast, Professional And Creative Editing</li>
          //   <li><i class="fas fa-long-arrow-alt-right text-theme"></i> Ready To Have Your Own Website</li>
          // </ul>
          $str.='
          <a class="btn btn-theme btn-radius mt-4" href="'.$aboutData["btn_link"].'"><span>'.$aboutData["btn_text"].'<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></span></a>
          </div>
        </div>
      </div>';


      return $str;

      }


   
    }

    function service_categories(){
      $categories = find_data('categories', ['cat_title','cat_desc'], NULL ,' WHERE categories.type = "services" ', false); $str = '';
      // Service component Here
      function category_component($cat){
        $str = '<div class="col-lg-4 col-md-6 col-sm-6">
          <div class="featured-item style-7 mb-5">
            <div class="featured-title text-uppercase">
              <h5 class="mb-3">'.$cat["cat_title"].'</h5>
            </div>
            <div class="featured-desc">
              <p>'.$cat["cat_desc"].'</p>
            </div>
          </div>
        </div>';
        return $str;
      
      }
      
      if(!is_bool($categories)){
        if(is_array($categories)){
          $categories = sanitize_html($categories);
          return category_component($categories);
        }
        while($category = mysqli_fetch_assoc($categories)){
          $str.= category_component(sanitize_html($category));
        }
        return $str;
      }

    }

    function section_component($type){
      $section = find_data('page_datas', ['page_datas.content'], NULL ,' WHERE page_datas.title = "'.$type.'" LIMIT 1', false); $str = '';
      $section = sanitize_html(json_to_array($section["content"]));
      $str = '<div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
      <div class="section-title">
          <h2 class="title-2">'. display_text($section["section_title"]).' <span>'.display_text($section["section_title"],'suffix').'</span></h2>
          <p>'.$section["section_desc"].'</p>
        </div>
      </div>
    </div>';

    return $str;


    }

    function strength_item_component(){
      $items = find_data('page_datas', ['page_datas.content, files.path'], 'page_datas INNER JOIN files ON page_datas.file_id = files.id','WHERE page_datas.title = "home-strength-item" ', false);
      $str = "";

      function component($item){
        $item = process_data($item);
        $str = '<div class="col-lg-4 col-md-12 md-mt-5">
        <div class="post style-2">
          <div class="post-image clearfix">
            <img class="img-fluid" src="'.$item["path"].'" alt="">
          </div>
          <div class="post-desc">
            <div class="post-title">
              <h5><a href="#">'.$item["item_title"].'</a> </h5>
            </div>
            <p>'.$item["item_description"].'</p>
          </div>
        </div>
      </div>';
      return $str;
        
      }

      if(!is_bool($items)){
        if(is_array($items)){
          // Single array 
          return component($items);
        }
        while($item = mysqli_fetch_assoc($items)){
          $str.= component($item);
        }
        return $str;

      }




    }


    function equipment_items_component(){
      $items = find_data('page_datas', ['page_datas.content'], NULL ,' WHERE page_datas.title = "home-equipment-item" ', false); $str='';
      function item_component($item){
        $item = process_data($item, true);
        // $item = json_to_array($item["content"]);
        // $item["path"] = full_upload_url($item["path"]);
        // $item = sanitize_html($item);
        $str = '<div class="owl-item cloned" style="width: 222px;">
        <div class="item">
          <img class="img-center" src="'.$item["path"].'" alt="">
        </div>
      </div>';
      return $str;
      }

      if(!is_bool($items)){
        if(is_array($items)){
          // Single array 
          return item_component($items);
        }
        while($item = mysqli_fetch_assoc($items)){
          $str.= item_component($item);
        }
        return $str;

      }
    }


    function footer_banner_component($type){
      $banner = find_data('page_datas', ['page_datas.content'], NULL ,' WHERE page_datas.title = "'.$type.'" ', false);
      $banner = sanitize_html(json_to_array($banner["content"]));
      $str=' <div class="row align-items-center">
      <div class="col-md-8">
        <h3>'.$banner["banner_title"].'</h3>
      </div>
      <div class="col-md-4 text-md-right sm-mt-3"> <a href="'.$banner["btn_link"].'" class="btn btn-white btn-border"><span>'.$banner["btn_text"].'</span></a>
      </div>
    </div>';

    return $str;
    
  }

  function about_slider_component(){
    $sliders =  find_data('page_datas', ['page_datas.content'], NULL ,' WHERE page_datas.title = "slider-image-about" ', false);
    $str = "";
    function abt_slider_component($item){
        // $item = json_to_array($item["content"]);
        // $item["path"] = full_upload_url($item["path"]);
        // $item = sanitize_html($item);
        $item = process_data($item, true);

      $str = '<div class="item">
      <img class="img-fluid w-100" src="'.$item["path"].'" alt="">
    </div>';
    return $str;
      
    }
    if(!is_bool($sliders)){
      if(is_array($sliders)){
        // Single array 
        return  abt_slider_component($sliders);
      }
      while($slider = mysqli_fetch_assoc($sliders)){
        $str.= abt_slider_component($slider);
      }
      return $str;

    }

  }


  function about_us_component($data){
    $str ='<h2 class="title"><span>'.$data["section_title"].'</span></h2>';
    if($data["enable_subtitle"]){
      $str.=' <p class="lead text-black font-weight-bold">'.$data["subtitle"].'.</p>';
    }
    $str.='<p>'.$data["full_desc"].'</p> ';
    //<a class="btn btn-sm btn-border btn-radius btn-iconic mt-2" href="#"><span>Read More <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i></span></a>
    return $str;


  }

  function company_attribute($title, $content){
    return '<div class="featured-item style-7">
    <div class="featured-title text-uppercase">
      <h5 class="mb-3">'.$title.'</h5>
    </div>
    <div class="featured-desc">
      <p>'.$content.'</p>
    </div>
  </div>';
  }

  function challenge_and_solution(){
    $items =  find_data('page_datas', ['page_datas.content, files.path'], 'page_datas INNER JOIN files ON page_datas.file_id = files.id' ,' WHERE page_datas.title = "about-challenge-item" ', false);
    $str = "";  
    function cs_component($item){
      $item = process_data($item);
      $str=' <div class="item">
      <div class="row no-gutters row-eq-height">
        <div class="col-lg-6 col-md-12">
          <div>
            <img class="img-fluid w-100 h-100" src="'.$item["path"].'" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-12 px-5 py-5 xs-px-2 xs-py-2 align-item-middle">
          <div>
          <h4 class="text-black mb-2">'.display_text($item["challenge_title"]).' <span class="text-theme">'.display_text($item["challenge_title"], 'suffix').'</span></h4>
          <p class="lead text-black">'.$item["challenge_desc"].'</p>
          </div>
        </div>
      </div>
    </div>';

    return $str;
    }

    if(!is_bool($items)){
      if(is_array($items)){
        // Single array 
        return  cs_component($items);
      }
      while($item = mysqli_fetch_assoc($items)){
        $str.= cs_component($item);
      }
      return $str;

    }

  }

  function value_items_component(){
    $items =  find_data('page_datas', ['page_datas.content'], NULL ,' WHERE page_datas.title = "about-core-value-item" ', false); $str = ""; $index = 0;
    function value_component($item, $iconIndex=0){
      $item = process_data($item, true);
      // Icons displayed for each element
      $icons = ['flaticon-paint-brush shake', 'flaticon-coding shake','flaticon-graphic-design-1 shake','flaticon-paint-brush shake', 'flaticon-coding shake','flaticon-graphic-design-1 shake'];
        $str = '<div class="col-lg-4 col-md-6">
        <div class="featured-item style-8 text-center">
          <div class="featured-icon"> <i class="'.$icons[$iconIndex].'"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>'.$item["item_title"].'</h5>
          </div>
          <div class="featured-desc">
            <p>'.$item["item_desc"].'</p>
          </div>
        </div>
      </div>';
      return $str;

    }

    
    if(!is_bool($items)){
      if(is_array($items)){
        // Single array 
        return  value_component($items);
      }
      while($item = mysqli_fetch_assoc($items)){
        $str.= value_component($item, $index);
        $index++;
      }
      return $str;

    }

  }

  function abt_service_comp($item){
    $item = process_data($item, true);
    $str = '
        <li><h5>'.$item["full_title"].'</h5></li>
    ';
    return $str;
  }


  function about_service_component($items, $end=false){
    $str = "";  $index = 1;
    if(!is_bool($items)){
      if(is_array($items)){
        // Single array 
        return  abt_service_comp($items);
      }
      if(!$end){
        // Display the first 8 items
        while($item = mysqli_fetch_assoc($items)){
          if($index < 9){
            $str.= abt_service_comp($item);
            $index++;
          }else{
            break;
          }
        }
        return $str;
      }else{
        // Display the remaining items
        while($item = mysqli_fetch_assoc($items)){
          $str.= abt_service_comp($item);
        }
        return $str;
      }
      
      

    }



  }


  function member_component($member){
    $member = process_data($member);
    $str = '<div class="col-lg-4 col-md-12">
    <div class="team-member style-2 text-center">
      <div class="team-images">
        <img class="img-fluid" src="'.$member["path"].'" alt="">
      </div>
      <div class="team-title">
       <span>'.$member["member_position"].'</span>
        <h5>'.$member["member_name"].'</h5>
      </div>
      <div class="team-description"> <span>'.$member["member_position"].'</span>
        <h5>'.$member["member_name"].'</h5>
        <p>'.$member["member_desc"].'</p>
        <div class="team-social-icon">
          <ul>';

          if($member["enable_fb"]){
            $str.= ' <li><a href="'.$member["member_fb"].'"><i class="ti-facebook" aria-hidden="true"></i></a>
            </li>';
          }

          if($member["enable_tw"]){
            $str.= '<li><a href="'.$member["member_lk"].'"><i class="ti-twitter" aria-hidden="true"></i></a>
            </li>';
          }

          if($member["enable_lk"]){
            $str .=' <li><a href="'.$member["member_lk"].'"><i class="ti-linkedin" aria-hidden="true"></i></a>
            </li>';
          }
          $str.=' </ul>
        </div>
      </div>
    </div>
  </div>';
        

  return $str;


  }

  function team_component(){
    $members = find_data('page_datas', ['page_datas.content, files.path'], 'page_datas INNER JOIN files ON page_datas.file_id = files.id' ,' WHERE page_datas.title = "about-team-member" ', false); $str="";
    if(!is_bool($members)){
      if(is_array($members)){
        // Single array 
        return  member_component($members);
      }
      while($member = mysqli_fetch_assoc($members)){
        $str.= member_component($member);
       
      }
      return $str;

    }

  }

  function testimonial_component($item){
    $item = process_data($item);
    $str= ' <div class="item">
    <div class="testimonial style-3 box-shadow mx-sm-5 px-4 py-5 mt-5 mb-0">
      <div class="testimonial-content"> <span><i class="ti-quote-left"></i></span>
        <p>'.$item["testifier_msg"].'</p>
      </div>
      <div class="testimonial-avatar">
        <div class="testimonial-img">
          <img class="img-center" src="'.$item["path"].'" alt="">
        </div>
        <div class="testimonial-caption">
          <h6>- '.$item["testifier_name"].'</h6>
          <label>'.$item["testifier_title"].'</label>
        </div>
      </div>
    </div>
  </div>';

  return $str;

  }

  function testimonial_items_component(){
    $testifiers= find_data('page_datas', ['page_datas.content, files.path'], 'page_datas INNER JOIN files ON page_datas.file_id = files.id' ,' WHERE page_datas.title = "about-testimonial-item" ', false); $str="";
    if(!is_bool($testifiers)){
      if(is_array($testifiers)){
        // Single array 
        return  testimonial_component($testifiers);
      }
      while($testifier= mysqli_fetch_assoc($testifiers)){
        $str.= testimonial_component($testifier);
      }
      return $str;

    }

  }

  function service_section($navItems, $tabItems){
    $str= '<section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="tab style-3 text-center">
            <!-- Nav tabs -->
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist"> 
                  <a class="nav-item nav-link active" id="nav-tab1" data-toggle="tab" href="#tab3-1" role="tab" aria-selected="true"><i class="flaticon-light-bulb"></i>Screening</a>
                  <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab3-3" role="tab" aria-selected="false"><i class="flaticon-viral-marketing"></i>Liver Funct. Test</a>
                  <a class="nav-item nav-link" id="nav-tab4" data-toggle="tab" href="#tab3-4" role="tab" aria-selected="false"><i class="flaticon-research"></i> Kidney Funct. Test</a>
            </div>
          </nav>
          <!-- Tab panes -->
          <div class="tab-content text-left">
            <div role="tabpanel" class="tab-pane fade show active" id="tab3-1">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 order-md-12">
                  <img class="img-fluid" src="images/services/result.jpg" alt="">
                </div>
                <div class="col-md-6 col-sm-12 sm-mt-3 order-md-1">
                  <h4 class="text-black mb-2">
                   <span class="text-theme">  Comprhensive Health Screening </span></h4>
                  <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                  <ul class="list-unstyled text-black list-icon">
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Thomso consectetur adipisicing</li>
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Inspiring The Next Generations</li>
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Choose our Best Demo For Your Website</li>
                    <li><i class="fas fa-long-arrow-alt-right text-theme"></i> Fast, Professional And Creative Editing</li>
                  </ul>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab3-2">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 order-md-12">
                  <img class="img-fluid" src="images/services/working.jpg" alt="">
                </div>
                <div class="col-md-6 col-sm-12 sm-mt-3 order-md-1">
                  <h4 class="text-black mb-2"> <span class="text-theme">Glucose Test</span></h4>
                  <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                  <ul class="list-unstyled text-black list-icon">
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Thomso consectetur adipisicing</li>
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Inspiring The Next Generations</li>
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Choose our Best Demo For Your Website</li>
                    <li><i class="fas fa-long-arrow-alt-right text-theme"></i> Fast, Professional And Creative Editing</li>
                  </ul>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab3-3">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 order-md-12">
                  <img class="img-fluid" src="images/services/labworker4.jpg" alt="">
                </div>
                <div class="col-md-6 col-sm-12 sm-mt-3 order-md-1">
                  <h4 class="text-black mb-2"> <span class="text-theme">Liver Function Test</span></h4>
                  <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                  <ul class="list-unstyled text-black list-icon">
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Thomso consectetur adipisicing</li>
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Inspiring The Next Generations</li>
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Choose our Best Demo For Your Website</li>
                    <li><i class="fas fa-long-arrow-alt-right text-theme"></i> Fast, Professional And Creative Editing</li>
                  </ul>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab3-4">
              <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 order-md-12">
                  <img class="img-fluid" src="images/services/labworker2.jpg" alt="">
                </div>
                <div class="col-md-6 col-sm-12 sm-mt-3 order-md-1">
                  <h4 class="text-black mb-2"> <span class="text-theme">Kidney Function Test</span></h4>
                  <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                  <ul class="list-unstyled text-black list-icon">
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Thomso consectetur adipisicing</li>
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Inspiring The Next Generations</li>
                    <li class="mb-3"><i class="fas fa-long-arrow-alt-right text-theme"></i> Choose our Best Demo For Your Website</li>
                    <li><i class="fas fa-long-arrow-alt-right text-theme"></i> Fast, Professional And Creative Editing</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>';

    return $str;

  }

  function main_service_component($categories, $serviceItems){
    $navTabs = $tabsPane = ''; $icons = ["flaticon-light-bulb","flaticon-optimization-1","flaticon-viral-marketing","flaticon-research"];
    $str= ""; $id = 1;   $iconIndex = 0;

    foreach($categories as $category){
    $navTabs = $tabsPane = ''; $iconIndex = 0; $displayFirstElem = 1;
      foreach($serviceItems as $item){
              $item = process_data($item);
             $activePanel = $displayFirstElem === 1 ? "show active": "";
             $activeLink =  $displayFirstElem === 1? "active": "";
            if($item["service_cat"] !== $category["cat_title"]){
              continue;
            }
            $navTabs.='<a class="nav-item nav-link '.$activeLink.' " id="nav-tab'.$id.'" data-toggle="tab" href="#tab3-'.$id.'" role="tab" aria-selected="false"><i class="'.$icons[$iconIndex].'"></i> '.$item["short_title"].'</a>
            ';
            $tabsPane.='<div role="tabpanel" class="tab-pane fade '.$activePanel.'" id="tab3-'.$id.'">
                  <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12 order-md-12">
                      <img class="img-fluid" src="'.$item["path"].'" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 sm-mt-3 order-md-1">
                      <h4 class="text-black mb-2"> <span class="text-theme">'.$item["full_title"].'</span></h4>
                      <p class="lead">'.$item["service_desc"].'</p>
                    </div>
                  </div>
                </div>';
            $id ++; $iconIndex++; $displayFirstElem++;

          }

          if($navTabs!=='' && $tabsPane!==""){
            // Generate component only if $navTabs  && $tabsPane is not empty
            $str .= '<section>
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="tab style-3 text-center">
                    <!-- Nav tabs -->
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist"> 
                        '.$navTabs.'
                    </div>
                  </nav>
                  <!-- Tab panes -->
                  <div class="tab-content text-left">
                  '.$tabsPane.'
                  </div>
                </div>
              </div>
            </div>
          </div>
          </section>';

      }
      

  }
    return $str;
  }

  function faq_component($item, $active, $value){
    $item = process_data($item, true);
    $str = '<div class="card '.$active.'">
    <div class="card-header">
      <h6 class="mb-0">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$value.'" aria-expanded="true">'.$item["faq_title"].'</a>
      </h6>
    </div>
    <div id="collapse1" class="collapse show" data-parent="#accordion">
      <div class="card-body">'.$item["faq_answer"].'</div>
    </div>
  </div>';
  return $str;

  }

  function render_faq_component(){
    $faqs = find_data('page_datas', ['page_datas.content'], NULL ,' WHERE page_datas.title = "main_faq" ', false); $str=""; $index = 1; $active = "active"; 
    if(!is_bool($faqs)){
      if(is_array($faqs)){
        // Single array 
        return  faq_component($faqs,  $active, $index);
      }
      while($faq= mysqli_fetch_assoc($faqs)){
        if($index > 1) $active = "";
        $str.= faq_component($faq, $active, $index);
        $index++;
      }
      return $str;

    }
  }







?>