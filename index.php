<?php include 'process.php'; ?>
<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Salome Portfolio - <?php echo date("Y"); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="short-cut icon" href="capture.jpg">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="#1" class="nav__link c-blue"><img src="img/home-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#2" class="nav__link c-yellow scrolly"><img src="img/about-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#3" class="nav__link c-red"><img src="img/projects-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#4" class="nav__link c-green"><img src="img/contact-icon.png" alt=""></a>
            </li>
          </ul>
        </nav>

        <section class="panel b-blue" id="1">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="home-content">
                      <div class="home-heading">
                        <h1>Graphics Designer</h1><b style="color: white">>> Homepage</b>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="home-box-content">
                            <div class="left-text">
                              <p>Welcome to Salome, the graphic designer, website. Experience more than just a single graphic. Think of Posters, flyers, logo, websites, business cards and many more...</p>
                              <div class="primary-button">
                                <a href="#2">Discover More</a>
                              </div>
                            </div>
                            <div class="right-image">
                              <img src="img/capture1.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
        <section class="panel b-yellow" id="2">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="about-content">
                      <div class="heading">
                        <h4>About Me</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="about-box-content">
                            <img src="img/capture.jpg" alt="">
                          </div>
                        </div>
                        <div class="col-md-7 col-md-offset-5">
                          <div class="about-box-text">
                            <p>I'm Salome, I love web and graphic designing and have experience in designing websites, logos, brand package and user interface. I'm very curious and passionate about the new technology which is growing daily and ready to take the challenge and grow professionally.</p>
                            <div class="primary-button">
                              <a href="#4">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
        <section class="panel b-red" id="3">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="projects-content">
                      <div class="heading">
                        <h4>My Gallery</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="owl-carousel owl-theme projects-container" id="">

  <?php

    $files = glob("img/uploads/*.*"); 

    for ($i=0; $i < count($files) ; $i++) { 
        $image = $files[$i];
        $supported = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));

        if (in_array($ext, $supported)) {

           echo '<div>
                    <div class="project-item">
                        <a style="width: 330px;height: 240px" href="'.$image.'" data-lightbox="image-1"><img style="width: 330px;height: 240px" src="'.$image.'" alt="'.basename($image).'"></a>
                     </div>
                </div>';

        }else{
            continue;
        }
    }

 ?>


                            

                          </div>
                          <form method="POST" enctype="multipart/form-data" action="">
                         <div align="center"><input type="file" name="image" style="color: lightblue" required> | <b style="color: lightblue">Password:</b> <input type="password" name="password" placeholder="Password" required> | <input style="color: blue" type="submit" name="upload" value="Upload"></div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>


        <section class="panel b-green" id="4">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="contact-content">
                      <div class="heading">
                        <h4>Contact Me</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="contat-form">
                            <form id="contact" action="" method="post">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                              </fieldset>
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                              </fieldset>
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                              <fieldset>
                                <button type="submit" id="form-submit" class="btn">Send Message</button>
                              </fieldset>
                            </form>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="more-info">
                            <p><b>Mobile Number: </b><em>+254706815661</em><br><b>
                            Physical Address: </b><em>Nairobi,Kenya</em><br><b>
                            Email Address:</b> <em>salomemutiso96@gmail.com</em><br>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="footer">
                      <p>Copyright &copy; <?php echo date("Y"); ?> Created by Salome | All Rights are Reserved.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
      

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
