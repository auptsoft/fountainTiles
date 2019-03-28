<?php
   get_header();
   ?>

   <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo IMAGES.'/slide-d.jpg' ?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-10">
                  <div class="intro-body">
                    <!-- <p class="intro-title-top">Welcome to Fountain tiles
                      <br> 78345</p> -->
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">Welcome </span> To
                      <br> Fountain Interlocking Tiles</h1>
                    <!-- <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">We are the interlocking experts</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo IMAGES ?>/slide-b.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <!-- <p class="intro-title-top">Doral, Florida
                      <br> 78345</p> -->
                    <h1 class="intro-title mb-4">
                      <span class="color-b">We are </span> The
                      <br> Interlocking tiles experts</h1>
                    <!-- <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo IMAGES ?>/slide-c.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <!-- <p class="intro-title-top">Doral, Florida
                      <br> 78345</p> -->
                    <h1 class="intro-title mb-4">
                      <span class="color-b">We sell </span> Only
                      <br> The best quality tiles</h1>
                    <!-- <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services<hr></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php if(have_posts()): while(have_posts()):  the_post();  if(get_the_category()[0]->slug == "our-services"):  ?>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-body-c">
              <h2 class="title-xx"><?php echo the_title(); ?></h2>
              <p class="content-c">
                 <?php echo the_excerpt(); ?>
              </p>
            </div>
            <div class="card-footer-c">
              <a href="<?php echo the_permalink(); ?>" class="link-c link-icon"> Learn More <?php //echo var_dump(get_the_category()); ?>
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <?php endif; 
    endwhile;
  endif; ?>
        <!--<div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-body-c">
              <h2 class="title-xx">Design & Landscaping</h2>
              <p class="content-c">
                Fountain Interlocking Tiles can help design and install all and every interlocking tiles requirements 
                for all project types. Our designers can also help with landscaping designs.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-body-c">
              <h2 class="title-xx">Maintenance of Tiles & Projects</h2>
              <p class="content-c">
                From ensuring that your interlocking tiles can handle all traffic and pressure requirements, to ensuring
                that your tiles are well maintained to guard against wear & tear, we have you covered.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  
  <!--/ News Star /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Past Projects</h2>
            </div>
            <div class="title-link">
              <a href="blog-grid.html">See all past projects
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
       <?php if(have_posts()): while(have_posts()): the_post(); if(get_the_category()[0]->slug == "past-project"):?>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
               <?php // the_post_thumbnail("img-b img-fluid"); ?>
               <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b"> <?php echo the_title(); ?></a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="<?php echo the_permalink().'">'. get_the_content();  ?>
                    </a>
                  </h2>
                </div>
                <div class="card-date">
                  <!-- <span class="date-b">18 Sep. 2017</span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        endif;
         endwhile;
          endif;
          ?>
      </div>
    </div>
  </section>
  <!--/ News End /-->
   <?php
   get_footer(); ?>