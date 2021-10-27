<!DOCTYPE html>
<?php
  define('PRIVATE_DIR', __DIR__ . "/classes");
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portfolio-Dairis Jurago</title>
    <link rel="stylesheet" href="style.css" id="stylesheet" />
    <?php include('defs.svg'); ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
  <body>
    <div class="main_menu">
        <nav class="navbar navbar-expand-md navbar-dark  ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse navbar-center center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" aria-current="page" href="#about_me"><i class="fa fa-user icon"></i>&nbsp;About me</a>
                  <a class="nav-link" href="#skills"><i class="fa fa-book icon"></i>&nbsp;Skills</a>
                  <a class="nav-link" href="#hobbies"><i class="fa fa-running icon"></i>&nbsp;Hobbies</a>
                  <a class="nav-link" href="#contact"><i class="fas fa-phone icon"></i>&nbsp;Contacts</a>
                </div>
              </div>
            </div>
          </nav>
      </div>
      <main>
        <div class="main_block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h4>Hi, I'm </h4>
                        <h1>Dairis Jurago</h1>
                        <h6>Junior Front-End Developer</h6>
                    </div>
                    <div class="col-6" style="text-align: center;">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1974&q=80" class="img-fluid main-photo" alt="...">
                    </div>
                </div>
                <hr>
            </div>
            <div class="about_me_block" id="about_me">
              <div class="container pt-3">
                <div class="row">
                  <div class="col-12">
                    <h3 style="display: inline-flex;">About me</h3>
                  </div>
                </div>
                <div class="row pt-5">
                  <div class="col-12 col-md-6 mobile">
                    <h4 style="text-transform: uppercase;"><i class="fas fa-baby"></i>&nbsp;Real junior</h4>
                    <p>Just now finished programming courses "Riga Coding School"</p>
                  </div>
                  <div class="col-12 col-md-6 mobile">
                    <h4 style="text-transform: uppercase;"><i class="fas fa-suitcase"></i>&nbsp;Work experience</h4>
                    <p>My last jobs was hotel administrator, taxi cab driver and store sales manager</p>
                  </div>
                </div>
                <div class="row desktop">
                  <div class="col-12 mobile">
                    <h4 style="text-transform: uppercase;"><i class="fas fa-star"></i>&nbsp;Career growth</h4>
                    <p>I tried many things in my life, but now i want to give myself a chance to learn programming </p>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          <div class="skills_block" id="skills">
            <div class="container pt-5">
              <div class="row">
                <div class="col-12">
                  <h3 style="display: inline-flex;">Skills</h3>
                </div>
              </div>
              <div class="row pt-5 center">
                <h4 class="pb-4">USING NOW:</h4>
                <div class="col-md-4">
                  <img src="svg_icons/s_icons/html.svg" alt="">
                  <h5 class="pt-3">HTML5</h5>
                </div>
                <div class="col-md-4">
                  <img src="svg_icons/s_icons/css.svg" alt="">
                  <h5 class="pt-3">CSS3</h5>                  
                </div>
                <div class="col-md-4">
                  <img src="svg_icons/s_icons/sass.svg" alt="">
                  <h5 class="pt-3">SASS</h5>                  
                </div>        
              </div>
              <div class="row mt-3 center py-3">
                <div class="col-md-4 col-sm-12">
                  <img src="svg_icons/s_icons/bootstrap.svg" alt="">
                  <h5 class="pt-3">BOOTSTRAP</h5>                
                </div>
                <div class="col-md-4">
                  <svg width="77" height="80" viewBox="0 0 97 100" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="96.242" height="100" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1:765" transform="translate(-0.0195239) scale(0.00271292 0.00261097)"/>
                    </pattern>
                    <image id="image0_1:765" width="383" height="383" xlink:href="data:image/png;base64,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"/>
                    </defs>
                  </svg>   
                  <h5 class="pt-3">GIT</h5>                 
                </div>
                <div class="col-md-4 col-sm-12">
                  <img src="svg_icons/s_icons/figma.svg" alt="">
                  <h5 class="pt-3">FIGMA</h5>                 
                </div>
              </div>
              <hr class="my-4" style="width: 40%; margin: auto;">
              <div class="row pt-5 pb-3 center">
                <h4 class="pb-4">LEARNING:</h4>
                <div class="col-md-4">
                  <img src="svg_icons/s_icons/mysql.svg" alt="">                    
                  <h5 class="pt-3">MYSQL</h5>
                </div>
                <div class="col-md-4">
                  <img src="svg_icons/s_icons/javascript.svg" alt="">   
                  <h5 class="pt-3">JAVASCRIPT</h5>                  
                </div>
                <div class="col-md-4">
                  <img src="img/php.png" style="width:108px; height: 80px;" alt="...">
                  <h5 class="pt-3">PHP</h5>                  
                </div>        
              </div>
              <hr class="mt-4 mb-4" style="width: 40%; margin: auto;">
              <div class="row pt-5 center">
                <h4 class="pb-4">OTHER SKILLS:</h4>
                <div class="col-md-4">
                  <img src="svg_icons/s_icons/latvia_flag.svg" alt="">                                    
                  <h5 class="pt-3 pb-4">NATIVE</h5>
                </div>
                <div class="col-md-4">
                  <img src="svg_icons/s_icons/uk_flag.svg" alt="">             
                  <h5 class="pt-3 pb-4">GOOD</h5>                  
                </div>
                <div class="col-md-4">
                  <img src="svg_icons/s_icons/russia_flag.svg" alt="">                                    
                  <h5 class="pt-3 pb-4">GOOD</h5>                  
                </div>        
              </div>

              <div class="hobbies_block" id="hobbies">
                <hr>
                <div class="container py-5 mt-2">
                  <div class="row">
                    <div class="col-12">
                      <h3 style="display: inline-flex;">Hobbies</h3>
                    </div>
                  </div>
                  <div class="row pt-5">
                    <div class="col-md-4 col-sm-12">
                      <img src="img/roller.jpg" alt="...">
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <img src="img/ps.jpg" alt="...">
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <img src="img/car.jpg" alt="...">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12">
                      <img src="img/food.jpg" alt="...">
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <img src="img/chess.jpg" alt="...">
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <img src="img/nature.jpg" alt="...">
                    </div>
                  </div>
                </div>
                
              </div>
              <hr>
            </div>
          </div>
        </div>
      </main>
      <footer class="text-center text-white pt-4">
        <div class="contact_block" id="contact">
          <div class="container p-4">
            <div class="row">
              <div class="col-12">
                <h3 style="display: inline-flex;">Contact</h3>
              </div>
            </div>
            <section class="mt-5">
              <form action="new_request.php" method="post">
                <div class="row d-flex justify-content-center">
                  <div class="col-12">
                    <p>
                      <strong>Name, Surname</strong>
                    </p>
                  </div>
                  <div class="col-md-5 col-12">
                    <div class="form-outline form-white mb-4">                                   <!-- required-nelauj nosutit ja nav aizpildits -->
                      <input type="text" id="name" name="name" class="form-control" placeholder="Name, surname" required/>
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="pt-2">
                      <strong>E-mail address</strong>
                    </p>
                  </div>
                  <div class="col-md-5 col-12">
                    <div class="form-outline form-white mb-4">
                      <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required/>
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="pt-2">
                      <strong>Your comment</strong>
                    </p>
                  </div>
                  <div class="col-md-5 col-12">
                    <div class="form-outline form-white mb-4">
                      <textarea type="text" id="comment" name="comment" class="form-control" placeholder="Your comment" required></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-light">Submit</button>
              </form>
            </section>
          </div>
          <div class="text-center p-3 mt-5" style="background-color: rgba(0, 0, 0, 0.2);">
            <section class="mb-4">
              <a class="btn btn-outline-light btn-floating m-1" href="mailto:jurago1111@gmail.com" role="button"><i class="fas fa-envelope"></i></a>&nbsp;jurago1111@gmail.com<br>
              <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/JuraGGo" role="button"><i class="fab fa-github"></i></a>&nbsp;JuraGGo
            </section>
            <div class="pt-2">
              <span>© 2021 Dairis Jurago:</span>
              <a class="text-white">All Rights Reserved</a>
            </div>
          </div>
      </footer>
      
    </body>


