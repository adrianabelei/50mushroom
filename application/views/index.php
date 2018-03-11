<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Talent Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap-responsive.css">
<link rel="stylesheet" href="assets/css/prettyPhoto.css" />
<link rel="stylesheet" href="assets/css/flexslider.css" />
<link rel="stylesheet" href="assets/css/custom-styles.css">
<link rel="stylesheet" href="assets/css/style.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="assets/img/favicon.ico">
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/jquery.prettyPhoto.js"></script>
<script src="/assets/js/jquery.flexslider.js"></script>
<script src="/assets/js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });
     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});
 $(window).load(function(){
    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});
</script>

</head>

<body class="home">
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.htm"><img src="assets/logo/venture_logo.png" alt="Venture cafe logo" width="280px"/></a>
            <h5>Big Things... Small Packages</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="homepage">Home <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.htm">Full Page</a></li>
                    <li><a href="index-gallery.htm">Gallery Only</a></li>
                    <li><a href="index-slider.htm">Slider Only</a></li>
                </ul>
            </li>

           <li><a href="login_register">Login/Register</a></li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="page-full-width.htm">Full Width</a></li>
                    <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                    <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                    <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
                </ul>
            </li>
             <li class="dropdown">

                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>

                    <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                    <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                    <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                    <li><a href="gallery-single.htm">Gallery Single</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.htm">Blog Style 1</a></li>
                    <li><a href="blog-style2.htm">Blog Style 2</a></li>
                    <li><a href="blog-style3.htm">Blog Style 3</a></li>
                    <li><a href="blog-style4.htm">Blog Style 4</a></li>
                    <li><a href="blog-single.htm">Blog Single</a></li>
                </ul>
             </li>
             <li><a href="contact">Contact</a></li>
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.htm">Home</option>
                        <option value="index.htm">- Full Page</option>
                        <option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                    <option value="page-contact.htm">Contact</option>
                </select>
                </div>
                </form>

        </div>
        
      </div><!-- End Header -->
     
    <div class="row headline"><!-- Begin Headline -->
    
     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <!-- <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li> -->
                <!-- 50Mushroomlogo2 -->
                <li><a href="gallery-single.htm"><img style="width:770px; height:530px;"src="assets/logo/50Mushroomlogo2.png" alt="slider" /></a></li>

                <li><a href="gallery-single.htm"><img style="width:770px; height:530px;"src="assets/logo/photo2.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img style="width:770px; height:530px;" src="assets/logo/photo1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FVentureCafeRotterdam%2Fvideos%2F1980844968833706%2F&show_text=0&width=720&height=500" width="770px" height="530px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe></a></li>

                <li><a href="gallery-single.htm"><iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FCapitalTourXXL%2Fvideos%2F1681182212181668%2F&show_text=0&width=720&height=500" width="770px" height="530px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe></a></li>
                </a></li>
              </ul>
            </div>
        </div>

        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>Welcome to Venture Cafe. <br />
            A Big Theme in a Small Package.</h3>
            <p class="lead">Venture Café Foundation builds innovation communities. We host the largest weekly innovation community event in Rotterdam. With the community, for the community!</p>
            <p>Every Thursday we host a free and inclusive community gathering. Every week an average of 270 innovators come to join the local, national and international innovation community and one of the over 300 yearly break outs, office hours and info tables in the center of Rotterdam.

                Join us anytime between 17:00 and 20:00! Check-in starts at 16:30!</p>
            <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
        </div>
    </div><!-- End Headline -->
    
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            <h5 class="title-bg">Recent Work 
                <small>That we are most proud of</small>
                
            </h5>
    	
        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">

                 <?php 

        foreach ($results as $item ) {
            if($item['is_decided']==1 && $item['is_higligted']!=1){
        ?>
        
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="uploads/<?= $item['image'] ?>" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="detailpost/<?= $item['id'] ?>" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="uploads/<?= $item['image'] ?>" alt="Gallery"></a>
                        <span class="project-details"><a href="detailpost/<?= $item['id'] ?>"><?= $item['title'] ?></a><?= $item['description'] ?></span>
                    </li>

        <?php }
        
        else{


        }


            }
        
        ?>

                   

                  

                    <!-- Gallery Item 12 -->
                    
                </ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->
    
    <div class="row"><!-- Begin Bottom Section -->
    
    	<!-- Blog Preview
        ================================================== -->
    	<div class="span6">

            <h5 class="title-bg"> 
                <small>All the latest news</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

        <div id="blogCarousel" class="carousel slide ">


            <!-- Carousel items -->
            <div class="carousel-inner">
   <?php 
                 foreach ($results as $item ) {
                    if($item['is_higligted']==1)
                    {
                        $id=0;
                     if($id==0) 
                     {  
                 
                 ?>
                 <!-- Blog Item 1 -->
              
                <div class="active item">
                       <?php  
                    }

else {
                    
                       ?>
                       <div class="item">
<?php }?>
                    <a href="blog-single.htm"><img src="<?php echo base_url(); ?>uploads/<?= $item['image'] ?>" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm"><?= $item['title'] ?></a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> <?= $item['created_at'] ?><li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="<?= $item['title'] ?>" title="Link"><?= $item['link'] ?></a><li>
                             <li><i class="icon-calendar"></i><strong>Tag:</strong> <?= $item['tag'] ?><li>
                        </ul>
                    </div>
                 

                    <p class="blog-summary"><?= $item['description'] ?> <a href="#">Read more</a><p>
                </div>

    <?php 
    
    $id=$id+1;
    }
                 else{

                 } 
                 
                }
                 
                 ?>

                 

                <!-- Blog Item 2 -->
                
            </div>
            </div> 	
        </div>
        
        <!-- Client Area
        ================================================== -->
        <div class="span6">

            <h5 class="title-bg">Recent Clients
                <small>That love us</small>
                <button id="btn-client-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-client-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

            <!-- Client Testimonial Slider-->
            <div id="clientCarousel" class="carousel slide no-margin">
            <!-- Carousel items -->
            <div class="carousel-inner">

                <div class="active item">
                    <p class="quote-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."<cite>- Client Name, Big Company</cite></p>
                </div>

                <div class="item">
                    <p class="quote-text">"Adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."<cite>- Another Client Name, Company Name</cite></p>
                </div>

                <div class="item">
                    <p class="quote-text">"Mauris eget tellus sem. Cras sollicitudin sem eu elit aliquam quis condimentum nulla suscipit. Nam sed magna ante. Ut eget suscipit mauris."<cite>- On More Client, The Company</cite></p>
                </div>
                
            </div>
            </div>

            <!-- Client Logo Thumbs-->
            <ul class="client-logos">
                <li><a href="#" class="client-link"><img src="assets/img/gallery/client-img-1.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="assets/img/gallery/client-img-2.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="assets/img/gallery/client-img-3.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="assets/img/gallery/client-img-4.png" alt="Client"></a></li>
                <li><a href="#" class="client-link"><img src="assets/img/gallery/client-img-5.png" alt="Client"></a></li>
            </ul>

        </div>
        
    </div><!-- End Bottom Section -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                   <img src="<?php echo base_url(); ?>assets/logo/VentureCafeLogoWhite@2.png" alt="Venture" width="200"/><br /><br />
                    <address>
                        <strong>50-Muchroom</strong><br />
                        Restart One Network<br />
                        Rotterdam, The Netherlands<br />
                    </address>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/VentureCafeRotterdam/" class="social-icon facebook"></a></li>
                        <li><a href="https://twitter.com/VentureCafeRdam" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon instagram"></a></li>
                        <li><a href="https://venturecaferotterdam.org/" class="social-icon rss"></a></li>
                        
                    </ul>
                </div>
              
                <div class="span3 footer-col">
                    <h5>Latest Posts</h5>
                     <ul class="post-list">
                        <?php 
                        foreach ($results as $item ) {
                            # code...
                         
                             if($item['is_decided']==1){
                        
                        
                        ?>
                        <li><a href="#"><?=$item['title'] ?></a></li>
                            
                       


                        <?php } } ?>


                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Flickr Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2018 Venture Cafe Theme. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>