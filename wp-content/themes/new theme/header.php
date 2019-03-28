<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php echo bloginfo('charset') ?>">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="<?php echo IMAGES.'/favicon.png'; ?>" rel="icon">

  <?php wp_head(); ?>

 </head>
 <body>

  <div class="click-close"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Order Online</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Customer Name</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Customer">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Tile Design</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>Zenith</option>
                <option>Cobblestone Pavers</option>
                <option>Holland Pavers</option>
                <option>Colonial Pavers</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Tile Colour</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>Any Colour</option>
                <option>Sand</option>
                <option>Dark/Charcoal</option>
                <option>Red/Charcoal</option>
                <option>Bluestone</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Quantity">Quantity (Cover Area)</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Quantity">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Address">Delivery Address</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Address">
            </div>
          </div>
          <!-- <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div> -->
          <!-- <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div> -->
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Place Order</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo IMAGES.'/fountain-logo2.jpg' ?>" alt="" title=""></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
    	    <?php
            $locations = get_nav_menu_locations();
            //echo(json_encode($locations));
            $menu = get_term($locations['primary'], 'nav_menu');
            $menuItems = wp_get_nav_menu_items($menu);
           // echo $_SERVER['REQUEST_URI'];
            foreach($menuItems as $item) {
              $state = "";
              $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
              //echo $url;
              if($url==$item->url) $state = "active";
              
              echo '<li class="nav-item">
                   <a class="nav-link '.$state.'" href="'.$item->url.'">'.$item->title.'</a>
                 </li>';
            } 
			    ?>
        </ul>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
          data-target="#navbarTogglerDemo01" aria-expanded="false">
          <span class="fa fa-cart-plus" aria-hidden="true"></span>
        </button>
      </div>
    </div>
  </nav><!-- #site-navigation -->
        
        <!--<nav class="site-navigation" role="navigation" -->
            <?php
							/*/wp_nav_menu(
								array(
                  'container'=>'nav',
                  'container_class'=>'site-navigation',
									'theme_location' => 'main-menu',
									//'menu_class' => 'nav-item'
								)
							); */
						?>