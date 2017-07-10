
<?php
session_start();

require_once 'security.php';

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : array();
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : array();

?>
<!DOCTYPE html>


<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greatness</title>
    
     
    <!-- Favicons
    ================================================== -->
   

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
     
    
    

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

 

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <meta property="fb:admins" content="524409451060986" />
    <meta property="og:site_name" content="Greatness"/>
    <meta property="og:title" content="Download one of Indian Hip-Hop's most anticipated albums here! Poetik Justis - Greatness (Indian Hip-Hop Album 2015)"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="http://greatness.co.in/images/AlbumCoverFront.jpg">
    <meta property="og:url" content="http://greatness.co.in/">
    <meta property="og:type" content="Rap"/>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   

    <!-- Home Page
    ==========================================-->
    <!--<div id="tf-home" class="text-center">
        <div class="overlay">
          <video preload="auto" autoplay="true" loop="loop">
                <source src="01.mp4" type="video/mp4"/>
          </video>
          <div class="content">
                
                <a href="#tf-download" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>
    -->

    <div id="tf-home" class="text-center">
        
           <div class="row">
                <div class="col-md-6">
                    <img src="images/AlbumCoverFront.jpg" class="img-responsive"/>
                </div>
                <div class="col-md-6">      
                    <img src="images/AlbumCoverBack.jpg" class="img-responsive"/>
                </div>
            </div>
        
        <div class="overlay">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                       <a href="#tf-download" class="fa fa-angle-down page-scroll"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">#GREATNESS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-download" class="page-scroll">Download</a></li>
            <li><a href="#tf-gallery" class="page-scroll">Gallery</a></li>
            <li><a href="#tf-poweredby" class="page-scroll">Powered By</a></li>
            <li><a href="#tf-contact" class="page-scroll">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Team Page
    ==========================================-->
    <div id="tf-download" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">

                    <h2><strong>Download</strong></h2>
                      <div class="line">
                        <hr>
                    </div>
                 </div>  
                 <br /><br />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="round-shaped-img">
                                    <img src="images/AlbumCoverFront.jpg" class="img-responsive"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="round-shaped-img">
                                    <img src="images/AlbumCoverBack.jpg" class="img-responsive" class="round-shaped-img">
                                    </div>
                                </div>
                                
                             </div>
                        </div>
                        <div class="col-md-6">
                                
                                <div class="downloadbtn">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <center><img src="images/fb_logo.png" class="img-responsive"></center>
                                        </div>
                                        <div class="col-md-6">
                                        <h3><center><a href="fb.php" target="_blank">SHARE TO DOWNLOAD</a></center></h3>
                                               
                                        </div>






                                        <div class="col-md-6">
                                            <center><img src="images/twitter_logo.png" class="img-responsive"></center>
                                        </div>
                                        <div class="col-md-6">
                                        <h3><center><a href="http://www.paywithapost.de/pay?id=3d3d5184-3df2-43a4-bfd2-ad7be580f12f" target="_blank">TWEET TO DOWNLOAD</a></center></h3>
                                        </div>
                                    </div>
                                </div>
                            <br /><br />
                        
                        <div class="downloadbtn">
                            <div class="row">
                                    <h3>FOLLOW ME</h3>

                                    <div class="follow_me">
                                        <div class="col-md-3">
                                            <a href="https://www.facebook.com/I.am.Poetik.Justis" target="_blank"><img src="images/Facebook_logo_(square).png" class="img-responsive"></a>
                                        </div>
                                          <div class="col-md-3">
                                            <a href="https://www.youtube.com/user/TheGodofRhyme" target="_blank"><img src="images/youtube.png" class="img-responsive"></a>
                                        </div>
                                          <div class="col-md-3">
                                            <a href="https://twitter.com/Poetik_Justis" target="_blank"><img src="images/Twitter_Logo2.png" class="img-responsive"></a>
                                        </div>
                                          <div class="col-md-3">
                                            <a href="https://www.instagram.com/iampoetikjustis/" target="_blank"><img src="images/botao_instagram.png" class="img-responsive"></a>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>


                    </div>
                    
                   

              
            </div>
        </div>
    </div>
    <br />
    
    <br />
    <!-- Gallery Section -->
    
    <div id="tf-gallery">
             <div class="overlay">
            <div class="container">
                <div class="section-title center">

                    <center><h2><strong>Gallery</strong></h2></center>
                      <div class="line">
                        <hr>
                    </div>
                 </div>  
                 <br /><br />
                 <div class="gallery-bg">
                    <div class="row">
                        <div class="col-md-4">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/1.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>Bleed</h3>
                                            <span>Poetik Justis</span>
                                            <h6>Doubts, disputes, curiosity and all other forms of a question, that's where we begin with what we see and consume. Sometimes I think life is a series of questions and answers. Ask the right ones and you move further on to where the answers lead, ask the wrong ones and you stay stagnant, in limbo or in a loop. They're simple, subtle, & hidden. But they're everywhere and you may or may not find them. They cut in to your life without making as much as a scratch. But you bleed every time. Bleed into these questions and these answers that solve or complicate. Intricate puzzles or simple mazes, but you must bleed into them.</h6>

                                            <a href="bleed_lyrics.php" target="_blank">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>

                         <div class="col-md-4">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/2.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>Record Shop</h3>
                                            <span>Poetik Justis</span>

                                            <h6>Hip-Hop Culture is eternal' -KRS-ONE In many ways has Hip-Hop affected the lives of many people around the world. The culture has grown from its humble beginnings and expanded to take its rightful place as one of the most dominant musical genres in existence today. But the true essence of the art form has been steadily diluting since the past few years. The same old glorification of guns, drugs, misogyny & violence from artists who've barely been through that phase of life has been exemplified time and over as the basis of an otherwise peaceful, empowering & revolutionary culture. As an artist and an enthusiast you have to stay true to yourself as much as you stay true to the art. The record shop has been littered with the sounds of the 'fake' for years now. It's time to bring the real back. Record Shop.</h6>
                                            <a href="record_shop_lyrics.php" target="_blank">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                            
                        <div class="col-md-4">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/3.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>The Edge</h3>
                                            <span>Poetik Justis </span>
                                            <h6>We are at the edge of the cliff, sitting at the edge of our seats, wearing cutting edge technology but never thinking bleeding edge thoughts. Choose a movement and stick with it, or stay stagnant. We are the movers and shakers, the dreamers and achievers. Love what you do? Then go out, express yourself and have fun, or get outta the way. We're all sitting at the edge.</h6>
                                            <a href="the_edge_lyrics.php" target="_blank">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>


                    </div>
                    
                     <div class="row">
                        <div class="col-md-4">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/4.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>Fools/Mortals</h3>
                                            <span>Poetik Justis</span>
                                            <h6>We're all fools at one point of time or another. We all live and learn, some mistakes happen and some are meant to be made. There's 2 sides to a mortal man, there's 3 sides to the story. Love is a beautiful thing even after you go through every possible extent to preserve it and eventually it dies off. Things change and people change. We're all fools and we're all mortals.</h6>
                                             <a href="fools_mortals_lyrics.php" target="_blank">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>

                         <div class="col-md-4">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/5.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>Clouds</h3>
                                            <span>Poetik Justis</span>
                                            <h6>I see humanity in the clouds. Damage done down here reflects up there. Climate change is a very real and horrifying reality but it isn't the only thing polluting us and the world. 'Human Nature' they call it, is evolving for worse than for better. Taking our beautiful world and fellow beings for granted. We pollute ourselves with negativity and insecurity and we project the same towards others. One day we will learn, I only hope that day doesn't come too late.</h6>
                                            <a href="clouds_lyrics.php" target="_blank">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                            
                        <div class="col-md-4">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/6.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>Voices in the Wild</h3>
                                            <span>Poetik Justis</span>
                                            <h6>Acceptance. Every soul seeks acceptance in the sense that one has done what it takes to create or destroy. We try to fit in when we're outcast. We distance ourselves from ourselves. Give in to our vices and virtues, tell lies that sound true. But in the process, we live and we learn. We destroy ourselves to build ourselves and such is life. Follow your instincts, run where your heart tells you to and pay heed to these voices. These voices in the wild.</h6>
                                            <a href="voices_in_the_wild_lyrics.php" target="_blank">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>


                    </div>

                     <div class="row">
                        <div class="col-md-4">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/7.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>Bhaari Scene</h3>
                                            <span>Poetik Justis</span>
                                            <h6>Bachpan se mujhko gaane gaane ki bimaari thiSapno ko paane ki koshish tabse jaari thiAur uske upar the khudke zimmedaari bhiPehle hastey the aaj public bole Bhaari Scene.</h6>
                                            <a href="bhaari_scenes_lyrics.php" target="_blank">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>

                         <div class="col-md-4">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/9.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>Life goes on</h3>
                                            <span>Poetik Justis</span>
                                            <h6>There are times when you fall, the times when you feel you cannot push forward, like you've hit a brick wall. In these serene moments when you lay down and stay down is when you realise that you are basically living to die. There's things to do out there and there's people to meet, there's people to inspire and there's people to prove wrong. And there's only a few moments of LIVING to be done. Move past the animosity, life is what you make it, make sure you're on your track and moving. Life goes on.</h6>
                                            <a href="life_goes_on_lyrics.php" target="_blank">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                            
                        <div class="col-md-4">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/8.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>Greatness</h3>
                                            <span>Poetik Justis</span>
                                            <h4>Your destiny is your Greatness.</h4>
                                            <a href="greatness_lyrics.php" target="_blank">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                          <ul class="grid cs-style-1">
                                <li>
                                    <figure>
                                        <img src="images/10.jpg" alt="img01" class="img-responsive">
                                        <figcaption>
                                            <h3>All that</h3>
                                            <span>Poetik Justis</span>
                                            <h6>Throughout an artists journey, he's subject to different perceptions and opinions. They change as the artist changes himself, for good or bad. When you change how you look at things, they change to suit your perception. We've been on the other side of a lot of perception. A friend, a brother, a kid, an idiot, a fool, a failure, a winner, an inspiration, and sometimes nothing at all. What matters most is what you feel you are worth. You're all that and much more. Modesty is fine until it starts to keep you grounded. Never stay grounded. Say goodbye & fly.</h6>
                                            <a href="all_that_lyrics.php">Lyrics</a>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>

                    </div>
                   
                

                </div>
              
            </div>
        </div>
           
    </div>

    <br />
    <br />
     <!-- Powered By Section -->
    
       <div id="tf-poweredby" class="text-center">
        <div class="overlay">
            <div class="container">

                <div class="section-title center">
                    <h2><strong>Powered By</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div id="clients" class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="http://www.desirappershow.com/" target="_blank"><img src="images/client/01.jpg" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="https://www.youtube.com/channel/UCs0nH1xScaQMISJBhiSmj6w" target="_blank"><img src="images/client/02.jpg" class="img-responsive"></a>
                    </div>
                    <div class="item">
                       <a href="https://www.facebook.com/artofdikshantkumar" target="_blank"> <img src="images/client/03.jpg" class="img-responsive"></a>
                    </div>
                    <div class="item">
                       <a href="https://www.facebook.com/thhmcore" target="_blank"> <img src="images/client/04.png" class="img-responsive"></a>
                    </div>
                    <div class="item">
                      <a href="http://www.desihiphop.com/" target="_blank"> <img src="images/client/05.png" class="img-responsive"></a>
                    </div>
                    <div class="item">
                       <a href="https://www.facebook.com/UMLeague/" target="_blank"> <img src="images/client/06.jpg" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <div class="down">
                       <a href="https://www.facebook.com/SlumGods" target="_blank"> <img src="images/client/07.jpg" class="img-responsive"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
  

   
    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2><strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <form action="contact.php" method="post">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-12">
                            <?php if(!empty($errors)):  ?>
                            <div class="panel"> 
                                <ul><li><?php echo implode('</li><li>',$errors) ?></li></ul>
                            </div>
                            <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Name *</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name" autocomplete="off" <?php echo isset($fields['name']) ? 'value="'. e($fields['name']) .'"':'' ?>>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Email address *</label> 
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" autocomplete="off" <?php echo isset($fields['email']) ? 'value="'. e($fields['email']) .'"':'' ?>>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message *</label>
                            <textarea name="message" class="form-control" rows="3"><?php echo isset($fields['message']) ?  e($fields['message']) :'' ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-danger">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>Designed By &nbsp;<a href="firoxz.php" target="_blank">FIROXZ</a> | All rights reserved 2015 &copy; </p>
            </div>
            <div class="pull-right fnav">
                
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8">
    </script>

    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    
    <script src="js/gallery.js" type="text/javascript"></script>   
    <script src="js/modernizr.js" type="text/javascript"></script> 
    <script src="js/touch.js" type="text/javascript"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/bootstrap-image-gallery.min.js"></script>
    <script type="text/javascript" src="js/demo.js"></script>
     


    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
    

            
    

    
  </body>
</html>


<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);

?>