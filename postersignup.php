<?php
  ob_start();
  include 'phpscript/sign_up.php';
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>2017 Code Fair | Postersignup</title>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/code_fair.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" type="text/css" href="css/event.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body class="main-bgimg">
  <header class="u-clearfix">

      <input class="cb-toggle" type="checkbox" id="cbMenu">

      <label for="cbMenu" class="menu-icon">
    <i class="fa fa-fw fa-lg"></i>
          <span>MENU</span>
  </label>

      <div class="c-logo">
        <a href="http://cdu.edu.au">
            <img class="c-cdu-logo__img" src="images/cdu-logo.png" alt="Code Fair Logo">
        </a>
          <a href="index.html">
              <img class="c-logo__img" src="images/logo.png" alt="Code Fair Logo">
          </a>
      </div>

      <nav class="menu">
          <div class="menu__link">
              <a href="index.html" title="Home">Code Fair 2017</a>
          </div>
          <div class="menu__link">
              <a href="competition.html">
                  <span>Competitions</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-content" id="competitions">
                  <a href="competition.html#business-innovation-challenge">Business Innovation Challenge</a>
                  <a href="competition.html#coding-challenge">Coding Challenge</a>
                  <a href="competition.html#networking-challenge">Networking Challenge</a>
                  <a href="competition.html#poster-challenge">Poster Challenge</a>
              </div>
          </div>
          <div class="menu__link">
              <a href="event.html">
                  <span>Events</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-content" id="events">
                  <a href="event.html#academic-excellence-awards">Academic Excellence Awards</a>
                  <a href="event.html#hour-of-code-wokshops">Hour of Code Workshops</a>
                  <a href="event.html#employer-speed-dating">Employer Speed Dating</a>
              </div>
          </div>
          <div class="menu__link">
                <a href="for-schools.html" title="For School">  <span>For Schools</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content" id="for_schools">
                  <a href="for-schools.html#events-schools-can-participate-in">Events Schools Can Participate In</a>
                  <a href="for-schools.html#hour-of-code-workshops">Hour of Code Workshops</a>
                  <a href="for-schools.html#coding-workshop-for-school">Coding Workshops</a>
                      </div>
                  

            </div>
            <div class="menu__link">
                <a href="for-industry.html" title="For Industry">  <span>For Industry</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content" id="for_industry">
                  <a href="for-industry.html#code-fair-for-industry">Code Fair For Industry</a>
                  <a href="for-industry.html#get-involved-industry">Get Involved</a>
                  <a href="for-industry.html#competitions-industry">Competitions</a>
                  <a href="for-industry.html#employer-speed-dating">Employer Speed Dating</a>
                   </div>
                  
          </div>

          <div class="menu__link">
              <a href="about.html">
                  <span>About</span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-content" id="about">
                  <a href="about.html">Photo Galleries</a>
                  <a href="#">IT Code Fair 2016</a>
                  <a href="#">IT Code Fair 2015</a>
                  <a href="#">IT Code Fair 2014</a>
              </div>
          </div>
      </nav>

  </header>

    <main>

    <div class="registration_form">
    <h1>Poster Competition - Registration Form</h1>
    <form action='<?php Postersignup(); ?>' method='POST'>
        <fieldset class="personal-info">
            <legend>Who are you?</legend>
            <div class="form-group">
                <label for="Poster-First-Name">First Name</label>
                <input type="text" class="form-control" id="Poster-First-Name" placeholder="First Name" name='Poster-First-Name' required>
                <?php
                 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if(strpos($url,'Error=First_Name_Invalid')){
                    echo "<p class='ErrorMessage'>Please, fill first name correctly.</p>";
                 }
                 ?>
            </div>
            <div class="form-group">
                <label for="Poster-Family-Name">Family Name</label>
                <input type="text" class="form-control" id="Poster-Family-Name" placeholder="Family Name" name='Poster-Family-Name' required>
                <?php
                 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if(strpos($url,'Error=Last_Name_Invalid')){
                    echo "<p class='ErrorMessage'>Please, fill family name correctly.</p>";
                 }
                 ?>
            </div>
            <div class="form-group">
                <label for="Poster-Email">Email Address</label>
                <input type="email" class="form-control" id="Poster-Email" placeholder="Email Address" name='Poster-Email' required>
                <?php
                 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if(strpos($url,'Error=EmailAddress_Invalid')){
                    echo "<p class='ErrorMessage' >Please, Enter email correctly.</p>";
                 }
                 ?>
            </div>
            <div class="form-group">
                <label for="Poster-Phone">Phone Number</label>
                <input type="text" class="form-control" id="Poster-Phone" placeholder="Phone Number" name='Poster-Phone' required>
                <?php
                 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if(strpos($url,'Error=Phone_Number_Invalid')){
                    echo "<p class='ErrorMessage' >Please, Enter Valid Phone Number.</p>";
                 }
                 ?>
            </div>
            <div class="form-group">
                <label for="Poster-Student-Number">Student Number</label>
                <input type="text" class="form-control" id="Poster-Student-Number" placeholder="Student Number" name='Poster-Student-Number' required>
                <?php
                 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if (strpos($url, 'Error=Student_Number_Invalid')) {
                     echo "<p class='ErrorMessage' >Please, Enter Valid Student Number</p>";
                 }
                 ?>
            </div>
            <div class="form-group">
                <label for="Poster-Course">Current Course</label>
                <select class="form-control" id="Poster-Course" name="Poster-Course">
                    <option>Diploma of Network Engineering</option>
                    <option>MIT</option>
                    <option>MITSE</option>
                    <option>BSENG</option>
                    <option>BCAINM</option>
                    <option>BIT</option>
                    <option>Cert IV Computer Systems</option>
                    <option>BIS</option>
                </select>
            </div>
        </fieldset>
        <fieldset class="competition-category">
            <legend>Competition Category</legend>
            <label for="innovation-challenge">What category do you wish to enter?</label>
            <div id="innovation-challenge">
                <div class="radio">
                    <label>
                        <input type="radio" name="Poster-competition-category-option-Radios" id="optionsRadios10" value="option1" checked>
                        Undergraduate poster
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="Poster-competition-category-option-Radios" id="optionsRadios11" value="option2">
                        Postgraduate poster
                    </label>
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-default" name="Postersubmit">Submit</button>
    </form>
</div>
        <section class="sponsor">
            <h2>OUR PROUD SPONSOR</h2>
            <div class="sponsor-wrapper">
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/acs.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/aspl.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/cap.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/dash.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/dialog.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/dolphin.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/ict.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/jackadder.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/kinetic.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/nec.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/ntg.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/radical.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/blab.png" alt="NT-Government logo">
                    </a>
                </div>
                <div class="image-wrapper">
                    <a href="#">
                        <img class="sponsor-logo" src="images/logos/rds.png" alt="NT-Government logo">
                    </a>
                </div>

            </div>
        </section>

        <section class="bottom-nav">
            <div class="bottom-nav-wrapper">
                <div class="bottom-link-container">
                    <h3>COMPETITIONS</h3>
                    <ul>
                        <li><a href="competition.html#business-innovation-challenge">Business Innovation Challenge</a></li>
                        <li><a href="competition.html#coding-challenge">Coding Challenge</a></li>
                        <li><a href="competition.html#networking-challenge">Networking Challenge</a></li>
                        <li><a href="competition.html#poster-challenge">Poster Challenge</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>EVENTS</h3>
                    <ul>
                        <li><a href="event.html#academic-excellence-awards">Acedemic Excellence Reward</a></li>
                        <li><a href="event.html#hour-of-code-workshops">Hour of Code Workshops</a></li>
                        <li><a href="event.html#employer-speed-dating">Employer Speed Dating</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>FOR SCHOOLS</h3>
                    <ul>
                        <li><a href="for-schools.html#events-schools-can-participate-in">Events Schools Can Participate In</a></li>
                        <li><a href="for-schools.html#hour-of-code-workshops">Hour of Code Workshops</a></li>
                        <li><a href="for-schools.html#coding-workshop-for-school">Coding Workshops</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>FOR INDUSTRY</h3>
                    <ul>
                        <li><a href="for-industry.html#code-fair-for-industry">Code Fair For Industry</a></li>
                        <li><a href="for-industry.html#get-involved-industry">Get Involved</a></li>
                        <li><a href="for-industry.html#competitions-industry">Competitions</a></li>
                        <li><a href="for-industry.html#employer-speed-dating">Employer Speed Dating</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>ABOUT</h3>
                    <ul>
                        <li><a href="#">Photo Galleries</a></li>
                        <li><a href="#">IT Code Fair 2016</a></li>
                        <li><a href="#">IT Code Fair 2015</a></li>
                        <li><a href="#">IT Code Fair 2014</a></li>
                    </ul>
                </div>
                <div class="bottom-link-container">
                    <h3>CONTACT</h3>
                    <ul>
                        <li><a href="#">Business Innovation Challenge</a></li>
                        <li><a href="#">Coding Challenge</a></li>
                        <li><a href="#">Networking Challenge</a></li>
                        <li><a href="#">Poster Challenge</a></li>
                    </ul>
                </div>
            </div>

        </section>


        <footer><span class="legend">SOMETHING &copy;</span>
            <div class="menu__social">
                <a href="#" class="menu__social-link"><i class="fa fa-2x fa-facebook"></i></a>
                <a href="#" class="menu__social-link"><i class="fa fa-2x fa-twitter"></i></a>
                <a href="#" class="menu__social-link"><i class="fa fa-2x fa-linkedin"></i></a>
            </div>
        </footer>

    </main>
    <script src="js/main.js"></script>
</body>

</html>
