  <?php
    ob_start();
    include 'phpscript/sign_up.php';
    ?>
    <!DOCTYPE html>
    <html>

    <head>
      <title>2017 Code Fair | BICsignup</title>

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
    <h1>Business Innovation Challenge - Registration Form</h1>
    <form action='<?php BICsignup(); ?>' method='POST'>
        <fieldset class="personal-info">
            <legend>Who are you?</legend>
            <div class="form-group">
                <label for="BIC-First-Name">First Name</label>
                <input type="text" class="form-control" id="BIC-First-Name" name='BIC-First-Name' placeholder="First Name" required>
                <?php
                   $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                   if(strpos($url,'Error=First_Name_Invalid')){
                      echo "<p class='ErrorMessage'>Please enter a valid first name.</p>";
                   }
                 ?>
            </div>
            <div class="form-group">
                <label for="BIC-Family-Name">Family Name</label>
                <input type="text" class="form-control" id="BIC-Family-Name" name='BIC-Family-Name' placeholder="Family Name" required>
                <?php
                   $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                   if(strpos($url,'Error=Last_Name_Invalid')){
                      echo "<p class='ErrorMessage'>Please enter a valid family name.</p>";
                   }
                 ?>
            </div>
            <div class="form-group">
                <label for="BIC-Email">Email Address</label>
                 <input type="email" class="form-control" id="BIC-Email" name='BIC-Email' placeholder="Email Address" required>
                 <?php
                    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                    if(strpos($url,'Error=EmailAddress_Invalid')){
                       echo "<p class='ErrorMessage' >Please enter a valid email address</p>";
                    }
                  ?>
            </div>
            <div class="form-group">
                <label for="BIC-Phone">Phone Number</label>
                <input type="text" class="form-control" id="BIC-Phone" name='BIC-Phone' placeholder="Phone Number" required>
                <?php
                   $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                   if(strpos($url,'Error=Phone_Number_Invalid')){
                      echo "<p class='ErrorMessage' >Please enter a valid phone number.</p>";
                   }
                 ?>
            </div>
            <div class="form-group">
                <label for="BIC-Student-Number">Student Number</label>
               <input type="text" class="form-control" id="BIC-Student-Number" name='BIC-Student-Number' placeholder="Student Number" required>
               <?php
                  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                  if (strpos($url, 'Error=Student_Number_Invalid')) {
                      echo "<p class='ErrorMessage' >Please enter a valid student number.</p>";
                  }
                ?>
            </div>
            <div class="form-group">
                <label for="BIC-Course">Current Course</label>
                <select class="form-control" id="BIC-Course" name='BIC-course-Selector'>
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

        <fieldset class="entry-info">
            <legend>Entry Type</legend>
            <label for="entry-info-radio-group">Are you entering as an individual or as a team?</label>
            <div id="entry-info-radio-group">
                <div class="radio">
                    <label>
                        <input type="radio" name="TeamtypeoptionsRadios" id="optionsRadios1" value="option1" checked>
                        I am entering as an individual
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="TeamtypeoptionsRadios" class="check" id="optionsRadios2" value="option2">
                        I am entering as a team
                    </label>
                </div>
            </div>
        </fieldset>
        <fieldset class="team-details">
            <legend>Team Details</legend>
            <label>Please enter your team member details, do not include yourself.</label>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label>Team Member 2 Name</label>
                    <input name="Team-Member-2-Name" type="text" class="form-control required-check" placeholder="Name">
                </div>
                <div class="col-sm-3">
                    <label>Team Member 2 Student Number</label>
                    <input name="Team-Member-2-Number" type="text" class="form-control required-check" placeholder="Student Number">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 team-members">
                    <label>Team Member 3 Name</label>
                    <input name="Team-Member-3-Name" type="text" class="form-control required-check" placeholder="Name">
                </div>
                <div class="col-sm-3">
                    <label>Team Member 3 Student Number</label>
                    <input name="Team-Member-3-Number" type="text" class="form-control required-check" placeholder="Student Number">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 team-members">
                    <label>Team Member 4 Name</label>
                    <input name="Team-Member-4-Name" type="text" class="form-control required-check" placeholder="Name">
                </div>
                <div class="col-sm-3">
                    <label>Team Member 4 Student Number</label>
                    <input name="Team-Member-4-Number" type="text" class="form-control required-check" placeholder="Student Number">
                </div>
            </div>
        </fieldset>
        <?php
               $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
               if(strpos($url,'Error=Team_Member_2_name_Invalid')){
                  echo "<p class='ErrorMessage'>Please enter a valid name.</p>";
               }elseif (strpos($url,'Error=Team_Member_2_student_Number_Invalid')) {
                  echo "<p class='ErrorMessage'>Please enter a valid student number.</p>";
               }
          ?>

        <fieldset class="competition-category">
            <legend>Competition Category</legend>
            <label for="innovation-challenge">What category do you wish to enter?</label>
            <div id="innovation-challenge">
                <div class="radio">
                    <label>
                        <input type="radio" name="competition-category-option-Radios" id="optionsRadios3" value="option1" checked>
                        Innovation Challenge A – Concept and presentation
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="competition-category-option-Radios" id="optionsRadios4" value="option2">
                        Innovation Challenge B – Concept, software and presentation
                    </label>
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-default" name="BICsubmit">Submit</button>
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


        <footer><span class="legend">SOMETHING &copy</span>
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
