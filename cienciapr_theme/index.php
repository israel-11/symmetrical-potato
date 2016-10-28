<!DOCTYPE html>
<html>
<head>
<title>Ciencia Exotica</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="wp-content/themes/cienciapr_theme/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="wp-content/themes/cienciapr_theme/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="wp-content/themes/cienciapr_theme/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="wp-content/themes/cienciapr_theme/assets/css/font.css">
<link rel="stylesheet" type="text/css" href="wp-content/themes/cienciapr_theme/assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="wp-content/themes/cienciapr_theme/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="wp-content/themes/cienciapr_theme/assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="wp-content/themes/cienciapr_theme/assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="wp-content/themes/cienciapr_theme/assets/css/style.css">
<!--[if lt IE 9]>
<script src="wp-content/themes/cienciapr_theme/assets/js/html5shiv.min.js"></script>
<script src="wp-content/themes/cienciapr_theme/assets/js/respond.min.js"></script>
<![endif]-->
<script src="wp-content/themes/cienciapr_theme/assets/js/jquery.min.js"></script>
<script>
    $(function(){
        $("#footer").load("wp-content/themes/cienciapr_theme/footer.html");
        $("#headerContent").load("header.html");
    });
</script>
</head>
<body>

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a style="background-color:#AED581;" href="http://localhost/cienciaprwp/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li class="dropdown"> <a href="http://localhost/cienciaprwp/news/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">News</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="http://localhost/cienciaprwp/category/locales">Locals</a></li>
              <li><a href="http://localhost/cienciaprwp/category/ciencia">Science</a></li>
              <li><a href="http://localhost/cienciaprwp/category/salud">Health</a></li>
              <li><a href="http://localhost/cienciaprwp/category/educacion">Education</a></li>
              <li><a href="http://localhost/cienciaprwp/category/internacioneles">Internationals</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="google.com" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Opportunities</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="http://localhost/cienciaprwp/category/escuelas">K-12</a></li>
              <li><a href="http://localhost/cienciaprwp/category/subgraduados">Undergraduate</a></li>
              <li><a href="http://localhost/cienciaprwp/category/graduados">Graduate</a></li>
              <li><a href="http://localhost/cienciaprwp/category/postdocs">Postodcs</a></li>
              <li><a href="http://localhost/cienciaprwp/category/trabajos">Jobs</a></li>
            </ul>
          </li>
          <li><a href="#">Blogs</a></li>
          <li><a href="events">Events</a></li>
          <li><a href="http://localhost/cienciaprwp/category/podcasts/">Podcasts</a></li>
          <li><a href="wp-content/themes/cienciapr_theme/pages/contact.html">About Us</a></li>
          <li style="left: 30%;margin-top: 1.5%;" id="google_translate_element"></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Ciencia Puerto Rico</span>
          <ul id="ticker01" class="news_sticker">
            <?php
      				wp_reset_query();
      				$args = array(
      					'type' => 'post',
                  'posts_per_page' => 7,
                  'category_name' => 'noticias'
                  );
                  $news = new WP_Query($args);
                  while($news->have_posts()) : $news -> the_post(); ?>
                  <li><a href="<?php the_permalink(); ?>"><img src="wp-content/themes/cienciapr_theme/images/news_thumbnail3.jpg" alt=""><?php the_title(); ?></a></li>
                  <?php
      				endwhile;
      			?>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- carusel -->
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">

          <?php
            wp_reset_query();
            $args = array(
              'type' => 'post',
              'posts_per_page' => 5,
              'category_name' => 'noticias'
                );
                $news = new WP_Query($args);
                while($news->have_posts()) : $news -> the_post(); ?>
                <div class="single_iteam"> <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('large-preview'); ?> </a>
                  <div class="slider_article">
                    <h2><a class="slider_tittle" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo get_the_excerpt();?></p>
                  </div>
                </div>
                <?php
            endwhile; ?>

        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <?php
        				wp_reset_query();
        				$args = array(
        					'type' => 'post',
        					'posts_per_page' => 5
                    );
                    $news = new WP_Query($args);
                    while($news->have_posts()) : $news -> the_post(); ?>
                    <li>
                      <div class="media"> <a href="<?php the_permalink(); ?>" class="media-left"> <img alt="" src="<?php the_post_thumbnail_url(); ?>"> </a>
                        <div class="media-body"> <a href="<?php the_permalink(); ?>" class="catg_title">  <?php the_title(); ?></a> </div>
                      </div>
                    </li>
                    <?php
        				endwhile; ?>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
              <!-- block of news #1 -->
                <h2><a style="color: white;" href="http://localhost/cienciaprwp/Opportunities"><span>Oportunidades</span></a></h2>
                <?php
                $first = true;
                wp_reset_query();
                $args = array(
                  'type' => 'post',
                  'posts_per_page' => 5,
                  'category_name' => 'oportunidades' //oportunidades
                    );
                    $news = new WP_Query($args);
                    while($news->have_posts()) : $news -> the_post();
                    if($first){ ?>
                      <ul class="business_catgnav wow fadeInDown">
                      <!-- first news -->
                      <li>
                        <figure class="bsbig_fig"> <a href="<?php the_permalink(); ?>" class="featured_img"> <?php the_post_thumbnail('medium-preview'); ?> <span class="overlay"></span> </a>
                          <figcaption> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </figcaption>
                          <p> <?php echo get_the_excerpt();?> <a href="the_permalink();">Read more&raquo</a></p>
                        </figure>
                      </li>
                    </ul>
                    <?php $first = false; } else { ?>
                    <ul class="spost_nav">
                    <li>
                      <div class="media wow fadeInDown"> <a href="<?php the_permalink(); ?>" class="media-left"> <?php the_post_thumbnail('small-preview'); ?> </a>
                        <div class="media-body"> <a href="<?php the_permalink(); ?>" class="catg_title"> <?php the_title();?> </a> </div>
                      </div>
                    </li>
                  </ul>
               <?php } endwhile; ?>
              </div>
            </div>
            <div class="fashion">
              <div class="single_post_content">
              <!-- block of news #2 -->
                <h2><a style="color: white;" href="http://localhost/cienciaprwp/events"><span>Oportunidades</span></a></h2>

                <?php
                $first = true;
                wp_reset_query();
                $args = array(
                  'type' => 'post',
                  'posts_per_page' => 5,
                  'category_name' => 'eventos' //oportunidades
                    );
                    $news = new WP_Query($args);
                    while($news->have_posts()) : $news -> the_post();
                    if($first){ ?>
                      <ul class="business_catgnav wow fadeInDown">
                      <!-- first news -->
                      <li>
                        <figure class="bsbig_fig"> <a href="<?php the_permalink(); ?>" class="featured_img"> <img alt="" src="<?php the_post_thumbnail_url(15,15); ?>"> <span class="overlay"></span> </a>
                          <figcaption> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </figcaption>
                          <p> <?php echo get_the_excerpt();?> <a href="the_permalink();">Read more&raquo</a></p>
                        </figure>
                      </li>
                    </ul>
                    <?php $first = false; } else { ?>
                    <ul class="spost_nav">
                    <li>
                      <div class="media wow fadeInDown"> <a href="<?php the_permalink(); ?>" class="media-left"> <img alt="" src="<?php the_post_thumbnail_url(15,15); ?>"> </a>
                        <div class="media-body"> <a href="<?php the_permalink(); ?>" class="catg_title"> <?php the_title();?> </a> </div>
                      </div>
                    </li>
                  </ul>
               <?php } endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="wp-content/themes/cienciapr_theme/images/add_img.jpg" alt=""></a>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Locals</option>
              <option>Science</option>
              <option>Health</option>
              <option>Education</option>
              <option>Internationals</option>
              <option>K-12</option>
              <option>Undergrad</option>
              <option>Grduate</option>
              <option>Prossesionals</option>
              <option>Jobs</option>
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>More</span></h2>
            <ul>
              <li><a href="#">Resources</a></li>
              <li><a>Organizations</a><li>
              <li><a>¡Ciencia Boricua! Book</a><li>
              <li><a>¡Ciencia Borica! Lecture Series</a><li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <div id="footer"></div>
</div>
<script src="wp-content/themes/cienciapr_theme/assets/js/jquery.min.js"></script>
<script src="wp-content/themes/cienciapr_theme/assets/js/wow.min.js"></script>
<script src="wp-content/themes/cienciapr_theme/assets/js/bootstrap.min.js"></script>
<script src="wp-content/themes/cienciapr_theme/assets/js/slick.min.js"></script>
<script src="wp-content/themes/cienciapr_theme/assets/js/jquery.li-scroller.1.0.js"></script>
<script src="wp-content/themes/cienciapr_theme/assets/js/jquery.newsTicker.min.js"></script>
<script src="wp-content/themes/cienciapr_theme/assets/js/jquery.fancybox.pack.js"></script>
<script src="wp-content/themes/cienciapr_theme/assets/js/custom.js"></script>
</body>
</html>
