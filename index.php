<?php
if(isset($_POST['send_email'])){
    $to = "eng.fahadumer@gmail.com"; // this is your Email address
    $name = $_POST['name'];
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to 'Muhammad Fahad Umer' portfolio</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
  <div class="container-fluid px-0 light-gray-color">
    <div class="navbar-section px-5 w-100">
      <nav class="navbar-box">
        <div class="navbar d-flex">
          <div>
            <div >
              <a class="home-link blue-color" href="#home">MUHAMMAD</a>
            </div>
          </div>
          <div>
            <ul class="nav-ul">
              <li><a class="nav-links black-color" href="#portfolio">Portfolio</a></li>
              <li><a class="nav-links black-color" href="#about">About</a></li>
              <li><a class="nav-links black-color" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div id="home" class="background-section">
      <div class="background">
        <div class="backgroung-image px-5">
          <div>
            <div class="rectangle6">
            </div>
            <div class="ellipse11">
            </div>
          </div>
          <div>
            <div class="ellipse8 rounded-circle">
            </div>
          </div>
          <div>
            <div class="rectangle7">
            </div>
            <div class="ellipse5 rounded-circle">
            </div>
          </div>
          <div>
            <div class="ellipse7 rounded-circle">
            </div>
          </div>
          <div>
            <div class="rectangle4">
            </div>
            <div class="ellipse3">
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center w-100">
        <div class="introduction d-flex justify-content-center">
          <div>
            <h1 class="name">I'm Muhammad <br /> Glad to see you!</h1>
            <p class="introduction-about">
              I'm a software developer! I can help you build a product, feature or website look through some of my work and experience! If you like what you see and have a project you need coded, don't hesitate to contact me.
            </p>
            <p class="introduction-contact">LET'S CONTACT</p>
            <p>
              <a class="introduction-links" href="https://twitter.com/engfahadumer" target="_blank"><i class="fab fa-twitter"></i></a>
              <a class="introduction-links pl-2" href="https://www.linkedin.com/in/muhammad-fahad-umer/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              <a class="introduction-links pl-2" href="https://github.com/MFahadUmer" target="_blank"><i class="fab fa-github"></i></a>
              <a class="introduction-links pl-2" href="mailto:eng.fahadumer@gmail.com"><i class="fas fa-at"></i></a>
              <a class="introduction-links pl-2" href="https://api.whatsapp.com/send?phone=923326037639&text=Hey man!" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio">
      <div class="portfolio-grid">
        <div class="portfolio-section rounded p-4">
          <div class="portfolio-image rounded bg-warning d-flex align-items-center justify-content-center ">
            <div class="portfolio-image-size rounded d-flex align-items-center justify-content-center">
              <img class="w-100 h-100 rounded" src="images/freedom.png" alt="">
            </div>
          </div>
          <div class="portfolio-detail">
            <h2 class="portfolio-project-name">Twitter Redesign (Freedom)</h2>
            <div class="d-flex">
              <p class="portfolio-project-company d-flex align-items-center">Microverse <span class="portfolio-project-stage pl-4 d-flex align-items-center"><i class="fas fa-circle"></i> <span class="pl-1">Full Stack Developer</span></span>
                <span class="portfolio-project-stage pl-2 d-flex align-items-center"><i class="fas fa-circle"></i> <span class="pl-1"> 2020</span></span>
              </p>
            </div>
            <p class="portfolio-project-details">
              This project was built as my capstone for the ROR curriculum of the Microverse software development school. It is a fullstack project built using the rails framework. Basically a user can sign up on the platform, and give opinions and like others opinions. Users can also follow and unfollow other users.
            </p>
            <div class="d-flex">
              <p class="portfolio-project-skills">HTML</p>
              <p class="portfolio-project-skills">CSS</p>
              <p class="portfolio-project-skills">BOOTSTRAP</p>
              <p class="portfolio-project-skills">RUBY</p>
              <p class="portfolio-project-skills">RUBY ON RAILS</p>
            </div>
            <div class="d-flex mt-5">
              <a class="portfolio-project-preview-button rounded" href="https://ancient-refuge-09655.herokuapp.com/">Live Preview</a>
              <a class="portfolio-project-preview-button rounded ml-4" href="https://github.com/MFahadUmer/freedom">Github</a>
            </div>
          </div>
        </div>
      </div>
      <div class="portfolio-grid">
        <div class="portfolio-section rounded p-4">
          <div class="portfolio-detail">
            <h2 class="portfolio-project-name">Twitter Redesign (Freedom)</h2>
            <div class="d-flex">
              <p class="portfolio-project-company d-flex align-items-center">Microverse <span class="portfolio-project-stage pl-4 d-flex align-items-center"><i class="fas fa-circle"></i> <span class="pl-1">Full Stack Developer</span></span>
                <span class="portfolio-project-stage pl-2 d-flex align-items-center"><i class="fas fa-circle"></i> <span class="pl-1"> 2020</span></span>
              </p>
            </div>
            <p class="portfolio-project-details">
              Capstone Project. This is a project based on a Glance design . For this project ive to create an online shop for the products of our own choice. So, I've created a website for Toys online shop. In this project I used all the previous knowledge like bootstrap, flex box, grid, float, position. ive also used the bakground image for search section. This website is responsive.
            </p>
            <div class="d-flex">
              <p class="portfolio-project-skills">HTML</p>
              <p class="portfolio-project-skills">CSS</p>
              <p class="portfolio-project-skills">BOOTSTRAP</p>
            </div>
            <div class="d-flex mt-5">
              <a class="portfolio-project-preview-button rounded" href="https://mfahadumer.github.io">Live Preview</a>
              <a class="portfolio-project-preview-button rounded ml-4" href="https://github.com/MFahadUmer/Capstone-Project">Github</a>
            </div>
          </div>
          <div class="portfolio-image rounded bg-info d-flex align-items-center justify-content-center ">
            <div class="portfolio-image-size rounded d-flex align-items-center justify-content-center">
              <img class="w-100 h-100 rounded" src="images/toys.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="about" class="contact">
      <div class="about-background">
        <div class="about-section">
          <div class="about-myself">
            <div>
              <h2 class="about-myself">About <br /> Myself</h2>
              <p class="about-myself-details">
                I'm a software developer! I can help you build a product, feature or website look through some of my work and experience! If you like what you see and have a project you need coded, don't hesitate to contact me.
              </p>
              <p class="about-myself-lets-contact">LET'S CONTACT</p>
              <p>
                <a class="about-links" href="https://twitter.com/engfahadumer" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="about-links pl-2" href="https://www.linkedin.com/in/muhammad-fahad-umer/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="about-links pl-2" href="https://github.com/MFahadUmer" target="_blank"><i class="fab fa-github"></i></a>
                <a class="about-links pl-2" href="mailto:eng.fahadumer@gmail.com"><i class="fas fa-at"></i></a>
                <a class="about-links pl-2" href="https://api.whatsapp.com/send?phone=923326037639&text=Hey man!" target="_blank"><i class="fab fa-whatsapp"></i></a>
              </p>
            </div>
            <a class="resume rounded-lg" href="./ files/cv/Muhammad-Fahad-Umer.pdf" download>Get My Resume
            </a>
          </div>
          <div class="skills">
            <a data-toggle="collapse" data-target="#languages" href="#"><div class="collapse-title border-bottom mx-2 px-4 pb-3 mt-4">Languages <span class="float-right"> > </span></div></a>
            <div id="languages" class="collapse">
              <div class="skills-grid px-5 pt-3">
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-primary"><i class="fab fa-html5 fa-2x"></i></div>
                  <p class="langugae-name">HTML</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-warning"><img src="https://img.icons8.com/metro/30/000000/css-filetype.png"/></div>
                  <p class="langugae-name">CSS</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-success"><img src="https://img.icons8.com/ios/30/000000/javascript-logo.png"/></i></div>
                  <p class="langugae-name">Javascript</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-danger"><img src="https://img.icons8.com/ios-glyphs/30/000000/ruby-programming-language.png"/></i></div>
                  <p class="langugae-name">Ruby</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-info"><img src="https://img.icons8.com/wired/30/000000/sql.png"/> </div>
                  <p class="langugae-name">Sql</p>
                </div>
              </div>
            </div>
            <a data-toggle="collapse" data-target="#frameworks" href="#"><div class="collapse-title border-bottom mx-2 px-4 pb-3 mt-4">Frameworks <span class="float-right"> > </span></div></a>
            <div id="frameworks" class="collapse">
              <div class="skills-grid px-5 pt-3">
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-primary"><img src="https://img.icons8.com/color/30/000000/bootstrap.png"/></i></div>
                  <p class="langugae-name">Bootstrap</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-warning"><i class="fas fa-road"></i></div>
                  <p class="langugae-name">Ruby on Rails</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-success"><img src="https://img.icons8.com/carbon-copy/30/000000/react.png"/></div>
                  <p class="langugae-name">React & Redux</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-danger"><img src="https://img.icons8.com/wired/30/000000/api-settings.png"/></div>
                  <p class="langugae-name">REST Api</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-info"><img src="https://img.icons8.com/color/30/000000/nodejs.png"/></div>
                  <p class="langugae-name">Node Js</p>
                </div>
              </div>
            </div>
            <a data-toggle="collapse" data-target="#skills-collapse" href="#"><div class="collapse-title border-bottom mx-2 px-4 pb-3 mt-4">Skills <span class="float-right"> > </span></div></a>
            <div id="skills-collapse" class="collapse">
              <div class="skills-grid-2 px-5 pt-3">
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-primary"><img src="https://img.icons8.com/doodle/30/000000/remote-working--v1.png"/></div>
                  <p class="langugae-name">Remote Job</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-warning"><img src="https://img.icons8.com/fluent/30/000000/github.png"/></div>
                  <p class="langugae-name">Github</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-success"><img src="https://img.icons8.com/wired/30/000000/media-queries.png"/></div>
                  <p class="langugae-name">Responsive</p>
                </div>
                <div class="language d-flex flex-column rounded align-items-center justify-content-center">
                  <div class="language-icon rounded-circle bg-danger"><img src="https://img.icons8.com/ios-filled/30/000000/programming.png"/></div>
                  <p class="langugae-name">Pair Programing</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="contact" class="contact-background d-flex justify-content-center">
          <div class="contact-form">
            <div class="">
              <h2 class="contact-form-heading">Contact me</h2>
              <p class="contact-form-details">
                If you have an application you are interested in developing, a feature that you need built or a project that needs coding. I'd love to help with it.
              </p>
              <div class="form">
                <form action="index.php" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <input type="text" class="w-100 rounded border-0 message" name="message">
                  </div>
                  <input class="form-submit" type="submit" name="send_email" value="Get in touch">
                </form>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer-section">
          <p class="footer-text">© 2020 Muhammad.Inc All Rights Reserved</p>
        </footer>
      </div>

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>