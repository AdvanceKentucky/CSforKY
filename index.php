<?php require_once('couch/cms.php'); ?>
<cms:template title='Home' />
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Karla|Spectral" rel="stylesheet">

    <!-- bootstrapCDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fixed.css">
    <title>Computer Science for Kentucky</title>
  </head>
  <body id="home" data-spy="scroll" data-target="#main-nav">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up"></i></button>

    <!-- navigation -->
    <nav id="main-nav" class="navbar navbar-expand-sm fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#"><img src="img/CSforKY-color2019.png" alt="CSforKY Logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<cms:link 'index.php' />">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#advocacy">Advocacy</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                News
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<cms:link 'blog.php'/>">Blog</a>
                <a class="dropdown-item" href="#more">@CS<span style="text-transform:lowercase">for</span>KY Twitter</a>
                <a class="dropdown-item" href="#more">Add an Article</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#join">Join</a>
              </li>
            </ul>
          </div>
      </div>        
    </nav>
    
    <!-- header -->
    <section>     
      <div class="jumbotron-fluid">
        <div class="container-fluid">
          <div class="caption center-block text-center">
              <h1 class="animated bounceInUp">Welcome to Computer Science for Kentucky</h1>
              <p class="animated bounceInUp delay-1s">We believe every Kentucky student should have access to Computer Science in their schools.</p>
              <a href="<cms:link 'pledge_form.php' />"> <button id="pledge_button" class="animated bounceInUp delay-1s btn btn-warning btn-lg"><i class="fas fa-hand-paper fa-2x"></i> Take the Pledge!</button></a>
          </div> 
        </div>  
      </div>
    </section>

    <!-- about section -->  
    <section id="about"  class="custom-padding bg-primary offset">
      <div class="container text-light">
        <div class="row">        
          <div class="col-md-8">
          <cms:editable name='about' type='richtext'>
            <h1>About CSforKY</h1>
            <hr>
            <p class="lead">Computer Science for Kentucky (CSforKY), started out as KentuckyCoders, an initiative to get one million citizens of the Bluegrass coding. Inspired by all the programs worldwide working to bring computer science to students in K-12, KentuckyCoders has transformed 

              into CSforKY, whose mission is to ensure that all Kentucky students have the opportunity to learn Computer Science in school.</p>
          </cms:editable>
          </div>
          <!-- end of left column -->
          <div class="col-md-4">
            <img src="img/children-smaller.jpg" class="img-fluid rounded" alt="">
          </div>
          <!-- end of right column -->
          
        </div> 
        <!-- end of row -->
      </div>
    </section>
  
    <!-- advocacy section -->
    <section id="advocacy" class="custom-padding bg-secondary offset">
      <div class="container">
        <div class="text-light">
          <cms:editable name='advocacy_open' type='richtext'>
          <h1>Making Computer Science Fundamental in Kentucky</h1>
          <hr>
          <p>Computer science is one of the few policy issues that can address both foundational education needs and workforce development demands 
            for a state’s future workforce. Numerous states have begun to pursue nine specific policy ideas developed 
            by the Code.org Advocacy Coalition to expand access to K-12 computer science for all students.</p>
          <p><i class="fas fa-check fa-3x"></i> means that Kentucky has adopted that policy.</p>
        </cms:editable> 
        </div>
      

      <div class="row"> <!-- start of row A -->
        <div class="col-md-8"><!-- start of left of column-->
        <cms:editable name='advocacy_left' type='richtext'> 
          <div class="card-deck">
            <div class="row pb-3">
              <div class="card border-primary">             
                <div class="card-header text-center bg-primary text-light"><h1>1</h1></div>
                <div class="card-body">
                  <p class="card-text"><span class=text-primary>Create a state plan</span> for
                      K-12 computer science</p>
                </div>
                <div class="card-footer text-center text-primary"><h2>NOT YET</h2></div>
              </div>
              <div class="card border-primary">
                <div class="card-header text-center bg-primary text-light"><h1>2</h1></div>
                <div class="card-body">
                  <p class="card-text"><span class=text-primary>Define computer science</span> and establish rigorous
                      K-12 computer
                      science standards</p>
                </div>
                <div class="card-footer text-center text-primary"><i class="fas fa-check fa-3x"></i></div>
              </div>
              <div class="card border-success">
                <div class="card-header text-center text-light bg-success"><h1>3</h1></div>
                <div class="card-body">
                  <p class="card-text"> <span class="text-success">Allocate funding</span> for
                      rigorous computer science teacher professional
                      learning and
                      course support</p>
                </div>
                <div class="card-footer text-center text-success"><h2>NOT YET</h2></div>
              </div>
            </div> <!-- end of row 1 -->

            <div class="row pb-3">              
              <div class="card border-success">
                <div class="card-header text-center text-light bg-success"><h1>4</h1></div>
                <div class="card-body">
                  <p class="card-text"><span class="text-success">Implement clear
                      certification pathways</span> for
                      computer science teachers</p>
                </div>
                <div class="card-footer text-center text-success"><i class="fas fa-check fa-3x"></i></div>
              </div>
              <div class="card border-success">
                <div class="card-header text-center text-light bg-success"><h1>5</h1></div>
                <div class="card-body">
                  <p class="card-text"><span class="text-success">Create programs</span>
                      at
                      institutions of higher
                      education to offer
                      computer science to
                      preservice teachers</p>
                </div>
                <div class="card-footer text-center text-success"><h2>NOT YET</h2></div>
              </div>
              <div class="card border-warning">
                <div class="card-header text-center text-light bg-warning"><h1>6</h1></div>
                <div class="card-body">
                  <p class="card-text"><span class="text-warning">Establish dedicated
                      computer science positions</span>                   
                      in State and Local
                      Education Agencies</p>
                </div>
                <div class="card-footer text-center text-warning"><h2>NOT YET</h2></div>

              </div>

            </div> <!-- end of row 2 -->

            <div class="row pb-3">
              <div class="card border-info">
                <div class="card-header text-center text-light bg-info"><h1>7</h1></div>
                <div class="card-body">
                  <p class="card-text"><span class="text-info">Require that all secondary schools offer computer science</span>
                      with appropriate implementation timelines</p>
                </div>
                <div class="card-footer text-center text-info"><h2>NOT YET</h2></div>

              </div>
              <div class="card border-info">
                <div class="card-header text-center text-light bg-info"><h1>8</h1></div>
                <div class="card-body">
                  <p class="card-text"><span class="text-info">Allow computer science to
                      satisfy</span> a core graduation
                      requirement</p>
                </div>
                <div class="card-footer text-center text-info"><i class="fas fa-check fa-3x"></i></div>
              </div>
              <div class="card border-info">
                  <div class="card-header text-center text-light bg-info"><h1>9</h1></div>
                <div class="card-body">
                  <p class="card-text"><span class="text-info">Allow computer science
                      to satisfy</span> an admission requirement at institutions of higher education</p>
                </div>
                <div class="card-footer text-center text-info"><i class="fas fa-check fa-3x"></i></div>
              </div>                      
            </div> <!-- end of row 3 -->
          </div> <!-- end of card deck-->
          <p class="text-light">These nine recommendations are intended to be used to build and sustain a comprehensive state policy framework to broaden the teaching and learning of computer science.  The support a vision built on five principles:
              <b>Equity and Diversity, Clarity, Capacity, Leadership, and Sustainability</b>.
          </p>
      </cms:editable>
      </div> <!-- end of left of column-->  

        <div class="col-md-4"> <!-- start of right col -->
        <cms:editable name='advocacy_right' type='richtext'>
        <h1 class="text-light">Policy Principles</h1>
        <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h5>Equity and Diversity </h5>
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <p>All nine policies should promote access to and
                      equity within rigorous and engaging computer
                      science courses.</p>
                  <p>
                      Prioritizing equity and diversity requires policymakers
                      to focus attention on underserved populations and
                      underresourced schools. Data clearly show female
                      students and underrepresented groups (including
                      rural students) are less likely to have access to highquality
                      computer science content. If unaddressed,
                      entire populations will be excluded from this
                      fast-growing field. 
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5><span class="text-primary"><i class="fas fa-square"></i></span>  Clarity</h5>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    A lack of clarity around what computer science
                    is and how to achieve goals around expanding
                    computer science have hampered implementation
                    in states. Clarity of goals, including a state plan
                    and an agreed-upon definition of computer science
                    and learning expectations, are critical components
                    of implementation.         
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5><span class="text-success"><i class="fas fa-square"></i></span>  Capacity</h5> </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Capacity for offering computer science in schools
                    often constitutes having an adequate number of
                    teachers prepared to teach computer science.
                    Thus, building teachers’ capacity to teach computer
                    science requires state funding, clear certification
                    pathways, and preservice teacher preparation at
                    institutions of higher education.                       
                </div>
              </div>
            </div>
          </div>
          <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                  <h5><span class="text-warning"><i class="fas fa-square"></i></span> Leadership</h5> </button>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    Implementing policy reforms requires centralized leadership at the state to oversee statewide
                    initiatives.                     </div>
              </div>
            </div>
          
          <div class="card">
              <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseFive">
                    <h5><span class="text-info"><i class="fas fa-square"></i></span>  Sustainability</h5>
                  </button>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                  The long-term sustainability of new computer science initiatives depends on making computer science a fundamental part of the K-12 education system. Key policies must be in place to promote and maintain momentum for computer science
                  with districts and students, including requirements to offer computer science and allowing computer science to satisfy high school graduation
                  and higher education admissions requirements.         
                </div>
              </div>
            </div>
            </cms:editable> 
          </div> <!-- end of col 2-->
        </div><!--end of row A-->
      </div> <!-- end of container --> 
    </section>
   
    <!-- more section -->
    <section id="more" class="offset custom-padding">
      <div class="container">
        <div class="row my-2"></div>

        <div class="row">
          <div class="col-md-6 border-right border-light">
            <h2>Twitter Feed</h2>
           <hr>
              <a class="twitter-timeline" data-height="900" href="https://twitter.com/CSforKY?ref_src=twsrc%5Etfw">Tweets by CSforKY</a> 
              <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div> <!-- end twitter column -->

          <div class="col-md-6">
            <h2>Share News or Announcements</h2>
            <hr>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScMhRuFbO8Qlr5mSintjo5Vur-Pk2BfMAn9mU01KSe5cK97zA/viewform?embedded=true" width="640" height="850" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                         
          </div> <!-- end form column -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section>

    <!-- join us section -->
    <section id="join" class="offset custom-padding bg-secondary">
      <div class="container">
      <cms:editable name='join_us' type='richtext'>
        <div class="row">
          <div class="col-md-6">
              <div class="mt-5">
                  <h1 class="text-light">Will You Join Us?</h1>
                  <hr>
                  <br>
                </div>
           <h2 class="text-white">Join The Movement to Bring Computer Science to All Kentucky Students</h2>
           <img src="img/children-smaller.jpg" class="img-fluid border border-warning rounded mb-2" alt="">
           <h4 class="text-light">Together we can</h4>
           <ul class="fa-ul text-white">
             <li>
               <span class="fa-li">
                 <i class="fas fa-code"></i>
                </span>Support Local Change
              </li>
             <li><span class="fa-li"><i class="fas fa-code"></i></span>Serve Students with Rigor and Equity</li>
             <li><span class="fa-li"><i class="fas fa-code"></i></span>Build the CS Education Movement in Kentucky</li>
           </ul>
           <p class="lead text-white">We need your ideas and innovations to make these goals a reality.  Let's get started...</p>          
          </div>
          </cms:editable>
          <div class="col-md-6">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd9qf11NqUu9fNT5Bn7dlhfrzsuHMmw_ZpM9lzrnL2IOFNeIQ/viewform?embedded=true" width="640" height="850" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>                      
          </div>
        </div>
        
      </div>
      
    </section>

    <!-- Footer -->
    <footer class="page-footer bg-primary">
      <div class="container py-3">
        <h2 class="text-white text-center">Computer Science for Kentucky | CS4KY &copy; <span id="year"></span></h2>
        <hr class="footer-rule">
        <div class="d-flex justify-content-center">
          <ul class="list-inline w-auto">
            <li class="list-inline-item text-light flex-fill mx-5 my-3" target="_blank"><a href="https://twitter.com/CSforKY">
              <i class="fab fa-twitter-square fa-3x"></i>
            </a></li>
            <li class="list-inline-item text-light flex-fill mx-5 my-3" target="_blank">
              <a href="https://www.facebook.com/csforky/"><i class="fab fa-facebook square fa-3x"></i></li></a>
            <li class="list-inline-item text-light flex-fill mx-5 my-3" target="_blank">
              <a href="mailto:kycoders@kstc.com">  <i class="fas fa-envelope-square fa-3x"></i></a></li>
          </ul> 
        </div>

        <p class="text-white text-center">Website visited by 
        <a href='https://writingbachelorthesis.com/'>WritingBachelorThesis.com</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=1e8b276dced104424c1caaf38cf9c329c1ad6bb8'></script>
        <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/500732/t/5"></script></p>
        <div class="card">
          <div class="card-text">
            <p class="text-center pt-2"><small>Website powered by <a href="https://www.advancekentucky.com/">AdvanceKentucky.</a></small></p>
          </div>
        </div>
        
      </div>
    </footer>

    <!-- full jquery from code.jquery.com minified-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>

    <!-- smooth scrolling -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
    </script>   

    <script>
      //get the year for the copyright
      $("#year").text(new Date().getFullYear());

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
  </body>
</html>
<?php COUCH::invoke(); ?>
