<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php 
    
                                  $reg_status=0;   

    
    if(isset($_POST['register'])){
        
        $name=$_POST['fullname'];

                $email=$_POST['email'];

                $mob_no=$_POST['mob_no'];

                $branch=$_POST['branch'];

                $year=$_POST['year'];

                $membership=$_POST['membership'];
        $rollno=$_POST['roll_no'];
        
$dbconnection = mysqli_connect('localhost','for_quiz','ASHISH@11','quiz');

if(!$dbconnection)
{
    echo "Database connectiom failes... Please check db.php file";
    exit();
}
        $signup_Q = "INSERT INTO csiusers(fname,email,mobile,year,branch,rollno,lastyearstatus) ";
                       $signup_Q .=" VALUES('{$name}','{$email}','{$mob_no}','{$year}','{$branch}','{$rollno}','{$membership}')";

           $signup_Q_query = mysqli_query( $dbconnection , $signup_Q);

     if($signup_Q_query){
             $reg_status=1;   

         ?>
        
            <script>
    alert(" Congragulations .... Registration Successful ..");

    </script>

    <?php
        
    }
    
    
    }
    
    ?>
  <meta charset="utf-8">
  <title>JNEC-CSI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <script src="../www.google.com/recaptcha/api.js" async defer></script>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script
  src="../code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="../code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="../stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
 <link href="css/core.css" rel="stylesheet">

   <!--  OWL CAROUSEL CSS-->
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />
<!--      MASTER  STYLESHEET -->
     <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all"/>


</head>

<body>
   <!-- Signup Modal -->
  <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form action=" " method="POST">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Registration Form</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <input type="text" class="form-control" name="fullname" maxlength="50" pattern="[A-Za-z ]{1,32}" placeholder="Name" required/>
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required" />
                    </div>
                  </div>
                  <br>
               <div class="row">
                        <div class="col-md-12">
                            <input type="number" class="form-control" pattern="[6789][0-9]{9}" maxlength="10" minlength="10"  min="0" id="mobile" name="mob_no" placeholder="Contact Number" required="required">
                        </div>
                      </div>
              <br>
                 
                  <br>
                    <div class="row">
                        <div class="col-md-5">
                            <select type="text" class="form-control" id="branch" name="branch" placeholder="Select your Branch" required="required">
                                                <option value="" disabled="disabled" selected="selected"> Please Select Your Branch</option>
                                                <option value="CSE">CSE</option>
                                                <option value="IT">IT</option>
                                                <option value="ETC">ETC</option>
                                                 <option value="eletrical">Electrical</option>
                                                <option value="EEP">EEP</option>
                                                <option value="mechanical">Mech</option>
						                                    <option value="Civil">Civil</option>
                                                

					                  	</select>
                        </div>
                        <div class="col-md-4">
                            <select type="text" class="form-control" id="year" name="year" placeholder="Year" required="required">
                            <option value="" disabled="disabled" selected="selected">Please Select Your Year</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </div>
                        
                      </div>
                      <br>
                      <div class="row">
                    <div class="col md-12">
                        <input type="number" min="10000" max="500099999" class="form-control" id="sapid" name="roll_no" placeholder="Roll Number" required="required" />
                    </div>
                  </div>
                      <br>
                      <div class="row">
                        <div class ="col-md-12">
                          <select type="text" placeholder="Membership" id="membership" name="membership" class="form-control" required>
                              <option value="" disabled="disabled" selected="selected">Please Select Membership Plan</option>
                              <option value="1_Year">1 Year (Rs.xxx)</option>
                              <option value="2_Year">2 Year (Rs.xxx)</option>
                              <option value="3_Year">3 Year (Rs.xxx)</option>
                              <option value="4_Year">4 Year (Rs.xxx)</option>
                          </select>
                        </div>
                      </div>
                      <br>
                     
        

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="register">Register</button>
        </div>
      </div>

  </form>
</div>

</div>
  <!-- End -->


  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div id="logo">
        <a><img src="img/logo.png" alt="CSI"></a>
      </div>
    <div class="container">



      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
        <!--   <li><a href="#faq">F.A.Q.</a></li> -->
          <li><a href="#team">Team</a></li>
          <li><a href="#gallery">Gallery</a></li>
           <li><a href="#">Blogs</a></li>
       <!--  <li><a href="#call-to-action"></a></li>  -->
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div id="particles-js">
    <div class="intro-text">
      <h2><strong>JNEC-CSI</strong></h2>
      <p></p>
        <?php 
         
        if($reg_status==1){

        ?>
                                  <a href="#" class="btn-get-started scrollto" >Registration Successful. </a>

<?php }else{
            ?>
              <a href="#" class="btn-get-started scrollto" data-toggle="modal" data-target="#modalRegisterForm">Join JNEC-CSI</a>

<?php
            
        } ?>
    </div>
   </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">About Us</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Suggest Some tagline here
              
              <!-- We provide best platform  -->
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="assets/img/gallery/team.png" alt="">
          </div>


          <div class="col-lg-6 content wow fadeInRight">
<br><br><br>
            <p><i>"A creative man is motivated by the desire to achieve, not by the desire to beat others."</i>
              </p>
          <h3>
             Established in 1965, the Computer Society of India, or CSI is the first and largest body of computer professionals in India. It is a non-profit professional meet to exchange views and information learn and share ideas regarding advancement of theory and practice of Computer Engineering and Technology Systems, Science and Engineering, Information Processing and many more.
              <i>
              
              </i>

            </h3>
          </div>
        </div>


        </div>


        
        
    <section id="pricing" >
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Objectives</h3>
          <span class="section-divider"></span>
          
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
              To inspire and nurture students, and help them to integrate into the IT community.
            </div>
          </div>
              <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
To give opportunity to students to interact with Industry professionals and chalk out a career path.
                  </div>
          </div>
             <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
To create awareness about trending topics in the IT field, by collaborating with researchers and practitioners.                  </div>
          </div>
                         <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
        To encourage students to participate in various types of technical events like workshops, symposiums etc.
                             </div>          </div>
     

             <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
To facilitate research, knowledge sharing, learning and career enhancement for all categories of IT professionals.                 </div>
          </div>


            
        </div>
      </div>
    </section>

        
        
        
        
     
        
        
          <section id="faq">
      <div class="container">

       <!-- <div class="section-header">
          <h3 class="section-title">Frequently Asked Questions</h3>
          <span class="section-divider"></span>
          <p class="section-description">How can we help you?</p>
        </div>
-->
          

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">What are Benefits for being CSI Members? <i class="ion-android-remove"></i></a>
              <br><br>
            <div id="faq1" class="collapse" data-parent="#faq-list">
            <ul>    
                <li>Opportunity to participate in the international, national, regional and chapter events of CSI such as conferences, seminars, symposia, workshops, technical talks, free lectures on latest technological advancements in IT at discounted rates between 10%-50%.</li><br>
           <li> Other important Chapter activities which offers a platform for networking with distinguished industry leaders, scientists, academicians include- -CSI-SPIN events
            Knowledge Forum Activities</li><br>
            <li> Security Forum Activities</li><br>
             <li>Symposia</li><br>
             <li>CIO Meets</li><br>
              <li>Annual CIO Summit</li><br>
               <li>Opportunity to offer workshops/ trainings in collaboration with CSI.</li><br>
             <li>Join Special Interest Group (SIG) for research, promotion, and dissemination activities for selected domains, both established and emerging.</li><br>
             <li>Opportunity to deliver guest lecturers in educational institutes associated to CSI across India.</li>
              <li>Right to vote in CSI elections.</li><br>
                <li> Opportunity to become part of CSI management Committee at Chapter, Regional and National levels subject to the eligibility criteria.</li><br>
                </ul>
              </div>
          </li>

          <br>

          
        </ul>

      </div>
    </section>
        
        
        
        
        
        
        
        
        
        
    </section><!-- #about -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Suggest What to add here...</h3>
            <p class="cta-text"> Suggest What to add here.... including image and Button</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Suggest something</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Glimpse of Our<br>
Events</h3>
          <span class="section-divider"></span>


        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
              <h4 class="title"><a href="#">Hackathon</a></h4>
              <p class="description">After the immense success of Hackathon 1.0, UPES-CSI organized yet another hackathon but with double, the time, double the energy and enthusiasm. With an event time of 48 hours, prizes worth a whooping 50k and intern from SplashBI and Data Couch, Hackathon 2.0 provided double the opportunity for all the programmers, web developers, hackers.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href="#">CSR</a></h4>
              <p class="description">The overall aim of CSR is to spread a positive impact in the society. Keeping this aim in mind, UPES-CSI has established its own CSR division. Corporate social responsibility allows UPES-CSI to do their bit for the society and environment.

Through the years, the CSR division of the UPES-CSI has risen to great heights to do their part in the upliftment of the nation. </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-color-filter-outline"></i></div>
              <h4 class="title"><a href="#">Yugmak</a></h4>
              <p class="description">One of the most awaited events of UPES-CSI student chapter is the annual national convention –YUGMAK. This year YuGMak was based on the theme “The Magical Euphoria” which was broadly based on the Harry Potter Series.

With seven offline events, two online events and 2 workshops, YugMak was held over a span of three days from 8-10th April.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="#">Elysium</a></h4>
              <p class="description">A multi-genre fest consisting a stunning fusion of technology and fun. With six-plus events for both students and faculties , UPES witnessed the hosting of the very first mini-convention organized by the UPES-CSI, titled ELYSIUM, which saw an overwhelming response from the students with the total footfall to the convention crossing 400.</p>
            </div>
          </div>
           <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
              <h4 class="title"><a href="#">i-Hack</a></h4>
              <p class="description">iHack is among the various Flagship Events organized by UPES-CSI.It requires a lot of dedication and is quite a challenge for the best of Hackers.

While the time bomb is set for 24 hours, hackers have to go through various levels and search for clues hidden in the code of images or in the code of the website. With those hints, they have to find a way to move to the next level.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-paper-outline"></i></div>
              <h4 class="title"><a href="#">Maze Runner</a></h4>
              <p class="description">It's luck and intelligence game.
It's a Maze. Hold your nerves as you will be imposed with a question at the doorstep of every room. Now, the story unfolds with your answer. You will be trapped or eliminated which is solely based on the kind of room who are heading towards. Continue answering correctly and leave your opponents behind.</p>
            </div>
          </div>

        </div>
      </div>
        </div>
    </section>

    
   

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Our Mentor</h3>
          <span class="section-divider"></span>
          <p class="section-description">Unsung heroes, constantly working behind the curtain to brew the success JNEC-CSI is enjoying.</p>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/teamx/team-1.png" alt=""></div>
              <h4>Mr......... .........</h4>
              <span>Founder Branch Co-ordinator</span>
              <!--<div class="social">-->
              <!--  <a href=#><i class="fa fa-linkedin"></i></a> -->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/teamx/team-2.png" alt=""></div>
              <h4>Mr......... .........</h4>
              <span>
Student Branch Coordinator</span>
              <!--<div class="social">-->

              <!--  <a href=""><i class="fa fa-linkedin"></i></a>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/teamx/team-3.png" alt=""></div>
              <h4>Ms. ......... .........</h4>
              <span>Faculty Coordinator</span>
              <!--<div class="social">-->

              <!--  <a href="https://in.linkedin.com/in/shubhi-sharma-6443a322"><i class="fa fa-linkedin"></i></a>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/teamx/team-4.png" alt=""></div>
              <h4>Mr......... .........</h4>
              <span>Faculty Coordinator</span>
              <!--<div class="social">-->
              <!--  <a href="https://in.linkedin.com/in/nitin-arora-13473540"><i class="fa fa-linkedin"></i></a>-->
              <!--</div>-->
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->
      <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Our Team-Heads</h3>
          <span class="section-divider"></span>
          <p class="section-description">Our Outstanding leaders go out of the way to boost the self-esteem of their personnel.</p>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/teamx/team-5.png" alt=""></div>
              <h4>............ ............</h4>
              <span>Secretory</span>
              <div class="social">
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/teamx/team-6.png" alt=""></div>
              <h4>......... ..............</h4>
              <span>Vice President</span>
              <div class="social">
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/teamx/team-6.png" alt=""></div>
              <h4>................ ............</h4>
              <span>Conveyer</span>
              <div class="social">
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/teamx/team-6.png" alt=""></div>
              <h4>......... ...........</h4>
              <span>....... Head</span>
              <div class="social">
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
          <div class="row">
      <div class="col-sm-1" style="float: none; margin: 0 auto;">
       <div class="row wow fadeInUp">

        <a href="team.html" class="btn green rounded">More</a>
    </div>
    </div>
    </div>

      </div>
      </section><!-- #team -->


    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3>
          <span class="section-divider"></span>
          <p class="section-description">Explore our gallery because sometimes pictures speaks more than words.</p>
          <div class="row wow fadeInUp">
        <div id="lgx-photo-gallery" class="lgx-gallery-popup lgx-photo-gallery">
            <div id="lgx-owlgallery" class="lgx-owlgallery">
                <div class="item">
                    <div  class="lgx-gallery-single">
                        <figure>
                            <img title="Memories One" src="assets/img/gallery/gallery-1.jpg" alt="Memories one"/>
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories One" href="assets/img/gallery/gallery-1.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->
                <div class="item">
                    <div  class="lgx-gallery-single">
                        <figure>
                            <img src="assets/img/gallery/gallery-2.jpg" alt="Memories Two" title="Memories Two" />
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories Two" href="assets/img/gallery/gallery-2.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->
                <div class="item">
                    <div  class="lgx-gallery-single">
                        <figure>
                            <img src="assets/img/gallery/gallery-3.jpg" alt="Memories Three" title="Memories Three" />
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories Three" href="assets/img/gallery/gallery-3.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->
                <div class="item">
                    <div  class="lgx-gallery-single">
                        <figure>
                            <img src="assets/img/gallery/gallery-4.jpg" alt="Memories Four" title="Memories Four" />
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories Four" href="assets/img/gallery/gallery-4.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->
                <div class="item">
                    <div class="lgx-gallery-single">
                        <figure>
                            <img src="assets/img/gallery/gallery-5.jpg" alt="Memories Five" title="Memories Five" />
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories Five" href="assets/img/gallery/gallery-5.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->
                <div class="item">
                    <div class="lgx-gallery-single">
                        <figure>
                            <img src="assets/img/gallery/gallery-6.jpg" alt="Memories Six" title="Memories Six" />
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories Six" href="assets/img/gallery/gallery-6.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->
                 <div class="item">
                    <div class="lgx-gallery-single">
                        <figure>
                            <img src="assets/img/gallery/gallery-7.jpg" alt="Memories Six" title="Memories Six" />
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories Six" href="assets/img/gallery/gallery-7.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->
                 <div class="item">
                    <div class="lgx-gallery-single">
                        <figure>
                            <img src="assets/img/gallery/gallery-8.jpg" alt="Memories Six" title="Memories Six" />
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories Six" href="assets/img/gallery/gallery-8.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->

                 <div class="item">
                    <div class="lgx-gallery-single">
                        <figure>
                            <img src="assets/img/gallery/gallery-10.jpg" alt="Memories Six" title="Memories Six" />
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories Six" href="assets/img/gallery/gallery-10.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->
                 <div class="item">
                    <div class="lgx-gallery-single">
                        <figure>
                            <img src="assets/img/gallery/gallery-11.jpg" alt="Memories Six" title="Memories Six" />
                            <figcaption class="lgx-figcaption">
                                <div class="lgx-hover-link">
                                    <div class="lgx-vertical">
                                        <a title="Memories Six" href="assets/img/gallery/gallery-11.jpg">
                                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div> <!--//.Item-->
            </div><!--l//#lgx-OWL NEWS-->

        </div>
          </div>
          </div>
          </div>


    </section><!-- #gallery -->





    <!--PHOTO GALLERY END-->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact"  class="section-bg" >
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Get in touch</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="twitter"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="twitter"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>JNEC<br>MGM Campus,Aurangabad</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>xxxx@gmail.com<br>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                  <p>+91 9999999999<br>+91 999999999</p>
              </div>

            </div>
          </div>

          
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>JNEC-CSI</strong>. All Rights Reserved
          </div>
          <div class="credits">

            Designed by <a href="#about" class="scrollto">JNEC-CSI</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>



  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="particles.js"></script>
  <script src="app.js"></script>
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>


<!-- adding magnific popup js library -->
<script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel  -->
<script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="assets/js/custom.script.js"></script>

</body>

<!-- Mirrored from www.upescsi.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 16:04:28 GMT -->
</html>
