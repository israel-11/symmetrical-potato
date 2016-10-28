<!DOCTYPE html>
<html>
<head>
  <title>News</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/cienciapr_theme/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/cienciapr_theme/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/cienciapr_theme/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/cienciapr_theme/assets/css/font.css">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/cienciapr_theme/assets/css/li-scroller.css">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/cienciapr_theme/assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/cienciapr_theme/assets/css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/cienciapr_theme/assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/cienciapr_theme/assets/css/style.css">
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.min.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
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
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">News</a>
                        <ul class="dropdown-menu" role="menu">
                                     <!-- links to news subcategory -->
                        <li><a href="#">Locals</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Internationals</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="google.com" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Opportunities</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">K-12</a></li>
                        <li><a href="#">Undergraduate</a></li>
                        <li><a href="#">Graduated</a></li>
                        <li><a href="#">Postdocs</a></li>
                        <li><a href="#">Research and Jobs</a></li>
                      </ul>
                    </li>
                    <li><a href="http://localhost/cienciaprwp/blogs">Blogs</a></li>
                    <li><a href="http://localhost/cienciaprwp/blogs/events">Events</a></li>
                    <li><a href="http://localhost/cienciaprwp/category/podcasts/">Podcast</a></li>
                    <li><a href="#">About Us</a></li>
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
                    'posts_per_page' => 3,
                    'category_name' => 'noticias'
                    );
                    $news = new WP_Query($args);
                    while($news->have_posts()) : $news -> the_post(); ?>
                      <li><a href="<?php the_permalink(); ?>"><img src="../images/news_thumbnail3.jpg" alt=""><?php the_title(); ?></a></li>
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

    <section id="contentSection">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="left_content">
                    <div class="fashion_technology_area">
                        <div class="fashion">
                            <div class="single_post_content">
                            <h2><a style="color: white;" href="http://localhost/cienciaprwp/category/locales"><span>Locals</span></a></h2>
                            <?php
                            $first = true;
                            wp_reset_query();
                            $args = array(
                              'type' => 'post',
                              'posts_per_page' => 3,
                              'category_name' => 'locales' 
                                );
                                $news = new WP_Query($args);
                                while($news->have_posts()) : $news -> the_post(); 
                                if($first){ ?>
                                  <ul class="business_catgnav wow fadeInDown">
                                  <!-- first news -->
                                  <li>
                                    <!-- locales-big -->
                                    <figure class="bsbig_fig"> <a href="<?php the_permalink(); ?>" class="featured_img"><?php the_post_thumbnail('medium-preview'); ?>  <span class="overlay"></span> </a>
                                        <figcaption> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </figcaption>
                                        <p> <?php echo get_the_excerpt();?> </p>
                                    </figure>
                                  </li>
                                </ul>
                                <?php $first = false; } else { ?>
                                <ul class="spost_nav">
                                <li>
                                  <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a href="<?php the_permalink(); ?>" class="media-left"> <?php the_post_thumbnail('small-preview'); ?> </a>
                                    <div class="media-body"> <a href="<?php the_permalink(); ?>" class="catg_title"> <?php the_title();?> </a> </div>
                                  </div>
                                </li>
                              </ul>
                           <?php } endwhile; ?>
                            </div>
                        </div>

                        <div class="technology">
                            <div class="single_post_content">
                              <h2><a style="color: white;" href="http://localhost/cienciaprwp/category/ciencia"><span>Science</span></a></h2>
                              <?php
                              $first = true;
                              wp_reset_query();
                              $args = array(
                                'type' => 'post',
                                'posts_per_page' => 3,
                                'category_name' => 'ciencia' 
                                  );
                                  $news = new WP_Query($args);
                                  while($news->have_posts()) : $news -> the_post(); 
                                  if($first){ ?>
                                    <ul class="business_catgnav wow fadeInDown">
                                    <!-- ciencia-big -->
                                    <li>
                                      <figure class="bsbig_fig"> <a href="<?php the_permalink(); ?>" class="featured_img"> <?php the_post_thumbnail('medium-preview'); ?> <span class="overlay"></span> </a>
                                          <figcaption> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </figcaption>
                                          <p> <?php echo get_the_excerpt();?> </p>
                                      </figure>
                                    </li>
                                  </ul>
                                  <?php $first = false; } else { ?>
                                  <ul class="spost_nav">
                                  <li>
                                  
                                    <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a href="<?php the_permalink(); ?>" class="media-left"> <?php the_post_thumbnail('small-preview'); ?> </a>
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

            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                    <div class="fashion_technology_area">
                        <div class="fashion">
                            <div class="single_post_content">
                          <!-- block of news #1 -->
                            <h2><a style="color: white;" href="http://localhost/cienciaprwp/category/internacionales"><span>Internationals</span></a></h2>
                            <?php
                            $first = true;
                            wp_reset_query();
                            $args = array(
                              'type' => 'post',
                              'posts_per_page' => 3,
                              'category_name' => 'internacionales' 
                                );
                                $news = new WP_Query($args);
                                while($news->have_posts()) : $news -> the_post(); 
                                if($first){ ?>
                                  <ul class="business_catgnav wow fadeInDown">
                                  <!-- first news -->
                                  <li>
                                    <figure class="bsbig_fig"> <a href="<?php the_permalink(); ?>" class="featured_img"> <?php the_post_thumbnail('medium-preview'); ?> <span class="overlay"></span> </a>
                                      <figcaption> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </figcaption>
                                      <p> <?php echo get_the_excerpt();?> </p>
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
                        <div class="technology">
                            <div class="single_post_content">
                          <!-- block of news #1 -->
                            <h2><a style="color: white;" href="http://localhost/cienciaprwp/category/salud"><span>Health</span></a></h2>

                            <?php
                            $first = true;
                            wp_reset_query();
                            $args = array(
                              'type' => 'post',
                              'posts_per_page' => 3,
                              'category_name' => 'salud'
                                );
                                $news = new WP_Query($args);
                                while($news->have_posts()) : $news -> the_post(); 
                                if($first){ ?>
                                  <ul class="business_catgnav wow fadeInDown">
                                  <!-- first news -->
                                  <li>
                                    <figure class="bsbig_fig"> <a href="<?php the_permalink(); ?>" class="featured_img"> <?php the_post_thumbnail('medium-preview'); ?> <span class="overlay"></span> </a>
                                      <figcaption> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </figcaption>
                                      <p> <?php echo get_the_excerpt();?> </p>
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
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <aside class="right_content">

                    <div style="width:100%" class="fashion">
                        <div class="single_post_content">
                      <!-- block of news #1 -->
                        <h2><a style="color: white;" href="http://localhost/cienciaprwp/category/educacion"><span>Educacion</span></a></h2>
                        <?php
                        $first = true;
                        wp_reset_query();
                        $args = array(
                          'type' => 'post',
                          'posts_per_page' => 3,
                          'category_name' => 'educacion' 
                            );
                            $news = new WP_Query($args);
                            while($news->have_posts()) : $news -> the_post(); 
                            if($first){ ?>
                              <ul class="business_catgnav wow fadeInDown">
                              <!-- first news -->
                              <li>
                                <figure class="bsbig_fig"> <a href="<?php the_permalink(); ?>" class="featured_img"> <?php the_post_thumbnail('medium-preview'); ?> <span class="overlay"></span> </a>
                                  <figcaption> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </figcaption>
                                  <p> <?php echo get_the_excerpt();?> </p>
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

                </aside>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInLeftBig">
                        <h2>Archives</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInDown">
                        <h2>Sections</h2>
                        <ul class="tag_nav">
                            <li><a href="#">News</a></li>
                            <li><a href="#">Opportunities</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Podcast</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInRightBig">
                        <h2>Contact</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <address>
                            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
                        </address>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</div>
<script src="../wp-content/themes/cienciapr_theme/assets/js/jquery.min.js"></script>
<script src="../wp-content/themes/cienciapr_theme/assets/js/wow.min.js"></script>
<script src="../wp-content/themes/cienciapr_theme/assets/js/bootstrap.min.js"></script>
<script src="../wp-content/themes/cienciapr_theme/assets/js/slick.min.js"></script>
<script src="../wp-content/themes/cienciapr_theme/assets/js/jquery.li-scroller.1.0.js"></script>
<script src="../wp-content/themes/cienciapr_theme/assets/js/jquery.newsTicker.min.js"></script>
<script src="../wp-content/themes/cienciapr_theme/assets/js/jquery.fancybox.pack.js"></script>
<script src="../wp-content/themes/cienciapr_theme/assets/js/custom.js"></script>
</body>
</html>