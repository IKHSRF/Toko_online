<?php
session_start();
if($_SESSION){
  if($_SESSION['level']=="Administrator")
  {
   header("Location:admin/admin.php");
  }
  if($_SESSION['level']=="anggota")
  {
    header("Location: anggota.php");
  }
 
}

include('config/proses_login.php'); 
?>

<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html>
<head>
<title>Toko Ikhsan</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="asset/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="asset/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="asset/js/move-top.js"></script>
<script type="text/javascript" src="asset/js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
</head>
  
<body>
<!-- header -->
  <div class="agileits_header">
    <div class="w3l_offers"><!--
      <a href="products.html">Today's special Offers !</a>-->
    </div>
    <div class="w3l_search">
      <!--<form action="#" method="post">
        <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
        <input type="submit" value=" ">
      </form>-->
    </div>
    <div class="w3l_header_right1">
      <h2><a href="kontak.php"> Hubungi Kami</a></h2>
    </div>
    <div class="clearfix"> </div>
  </div>
<!-- script-for sticky-nav -->
  <script>
  $(document).ready(function() {
     var navoffeset=$(".agileits_header").offset().top;
     $(window).scroll(function(){
      var scrollpos=$(window).scrollTop(); 
      if(scrollpos >=navoffeset){
        $(".agileits_header").addClass("fixed");
      }else{
        $(".agileits_header").removeClass("fixed");
      }
     });
     
  });
  </script>
<!-- //script-for sticky-nav -->
  <div class="logo_products">
    <div class="container">
      <div class="w3ls_logo_products_left">
        <h1><a href="index.html"><span>TOKO ONLINE</span>Ikhsan</a></h1>
      </div>
      <div class="w3ls_logo_products_left1">
        <!--<ul class="special_items">
          <li><a href="events.html">Events</a><i>/</i></li>
          <li><a href="about.html">About Us</a><i>/</i></li>
          <li><a href="products.html">Best Deals</a><i>/</i></li>
          <li><a href="services.html">Services</a></li>
        </ul> -->
      </div>
      <div class="w3ls_logo_products_left1">
        <!--<ul class="phone_email">
          <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
          <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">ocikyamin93@gmail.com</a></li>
        </ul> -->
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //header -->
<!-- banner -->
  <div class="banner">
    <div class="w3l_banner_nav_left">
      <nav class="navbar nav_bottom">
       <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
         </div> 
         <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
          <ul class="nav navbar-nav nav_1">
         <li></i> <a href="index.php"> Home</a></li>
            <li><a href="pakaian.php"> Pakaian</a></li>
            <li><a href="makanan.php"> Makanan</a></li>
          
          </ul>
         </div><!-- /.navbar-collapse -->
      </nav>
    </div>
    <div class="w3l_banner_nav_right">
      <section class="slider">
        <div class="flexslider">          
          <ul class="slides">
             <!-- login -->
    <div class="w3_login">
      <h3> Login </h3>
      <div class="w3_login_module">
        <div class="module form-module">
          <div class="toggle"><i class="fa fa-times fa-pencil"></i>
          </div>
          <div class="form">
          <h2>Login Disini !!</h2>
          <form action="#" method="post">
            <input type="text" name="username" placeholder="Username" required=" ">
            <input type="password" name="password" placeholder="Password" required=" ">
            <select name="level" style="width: 317px; height: 40px; outline: none; border: none;">
              <option> Pilih Hak Akses</option>
              <option value="1"> Administrator</option>
              <option value="2"> Pelanggan</option>
            </select>
            <br> <br>
            <input type="submit" name="submit" value="Login">
          </form>
          <?php echo $error; ?>
          </div>
     
          <div class="cta"><a href="#">Lupa password?</a></div>
        </div>
      </div>
      <script>
        $('.toggle').click(function(){
          // Switches the Icon
          $(this).children('i').toggleClass('fa-pencil');
          // Switches the forms  
          $('.form').animate({
          height: "toggle",
          'padding-top': 'toggle',
          'padding-bottom': 'toggle',
          opacity: "toggle"
          }, "slow");
        });
      </script>
    </div>
<!-- //login -->
            <!--
            <li>
              <div class="w3l_banner_nav_right_banner">
                <h3>Make your <span>food</span> with Spicy.</h3>
                <div class="more">
                  <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                </div>
              </div>
            </li>
            <li>
              <div class="w3l_banner_nav_right_banner1">
                <h3>Make your <span>food</span> with Spicy.</h3>
                <div class="more">
                  <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                </div>
              </div>
            </li>
            <li>
              <div class="w3l_banner_nav_right_banner2">
                <h3>upto <i>50%</i> off.</h3>
                <div class="more">
                  <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                </div>
              </div>
            </li> -->
          </ul>
        </div>

  <!--
        </section>
      <!-- flexSlider
        <link rel="stylesheet" href="asset/css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="asset/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider){
            $('body').removeClass('loading');
          }
          });
        });
        </script>
       //flexSlider -->


    </div>
    <div class="clearfix">
      


    </div>
  </div>
<!-- banner -->
  <div class="banner_bottom">
   
      
      
    
  </div>


<!-- footer -->
  <div class="footer">
    <div class="container">
      <div class="clearfix"> </div>
      <div class="agile_footer_grids">
        <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
          <div class="w3_footer_grid_bottom">
            <h4><p>© 2016 Aqilla Mart | Design by Yaminbae </p></h4>
            
          </div>
        </div>
        <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
          <div class="w3_footer_grid_bottom">
            <h5>connect with us</h5>
            <ul class="agileits_social_icons">
              <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    
    </div>
  </div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="asset/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });
  </script>
<!-- //here ends scrolling icon -->
<script src="asset/js/minicart.js"></script>
<script>
    paypal.minicart.render();

    paypal.minicart.cart.on('checkout', function (evt) {
      var items = this.items(),
        len = items.length,
        total = 0,
        i;

      // Count the number of each item in the cart
      for (i = 0; i < len; i++) {
        total += items[i].get('quantity');
      }

      if (total < 3) {
        alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
        evt.preventDefault();
      }
    });

  </script>
</body>
</html>


<!--

<!DOCTYPE html>
<html>
<head>
  <title></title>
    <script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="stylejs.js"></script>
</head>
<body>
  
<form action="" method="post">

<div class="body">
    <div class="veen">
      <div class="login-btn splits">
        <p> Login Disini !!</p>
        <button class="active"> Login </button>
      </div>
      <div class="rgstr-btn splits">
        <p>Belum Punya Akun Daftar Disini !!</p>
        <button>Buat Akun</button>
      </div>
      

      <div class="wrapper">

        
            <div id="login">
      
          <h3>Silahkan Login Terlebih Dahulu !!</h3>
          <div class="mail">
            <input type="text" name="username">
            <label>Username</label>
          </div>
          <div class="passwd">
            <input type="password" name="password">
            <label>Password</label>
          </div>
          <div class="passwd">            
            <label>Level</label>
                        <br>            
            <select name="level" style="width: 368px; height: 37px; background-color: red; color: white;">
              <option  > -- Pilih Level--</option>
              <option value="1"> Admin</option>
              <option value="2"> Angota</option>

            </select>
          </div>
                       <?php echo $error; ?>
          <div class="submit">
            <button name="submit" value="login" class="dark">Login</button>
          </div>
        </div>
    
          



      
      
      </div>

    </div>

  </div>


<div class="site-link">
    <a href="#" target="_blank">
      Copyright <img src="http://creatorvisions.com/img/new-logo-2.png"> 
    Muhammad Tafsir</a>
  </div>
  <style type="text/css">
    .site-link{
      padding: 5px 15px;
      position: fixed;
      z-index: 99999;
      background: #fff;
      box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
      right: 30px;
      bottom: 30px;
      border-radius: 10px;
    }
    .site-link img{
      width: 30px;
      height: 30px;
    }
  </style>
    </form> 
  

</body>
</html>
-->