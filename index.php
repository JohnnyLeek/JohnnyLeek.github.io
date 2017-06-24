<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Johnny Leek">

    <title>Johnny Leek | Programmer</title>
    <link rel="stylesheet" href="https://bootswatch.com/solar/bootstrap.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animate_intro.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/stylesheet2.css">

    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>

    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle animated fadeIn"><i class="fa fa-bars fa-lg"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#home" onclick=$("#menu-close").click();>Johnny Leek</a>
            </li>
            <li>
                <a href="#home" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#stuff" onclick=$("#menu-close").click();>My Stuff</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Modals -->
    <div class="modal fade" id="websiteModal" tabindex="-1" role="dialog" aria-labelledby="This Website">
      <div class="modal-dialog" role="document">
        <div class="modal-content" id="websiteModalContent">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="websiteModalTitle">This Website</h4>
          </div>
          <div class="modal-body">
            <p style="text-align: center; color: white;">
            One of my nicer projects is this very website! I programmed this website on a Thursday afternoon/evening (I added some stuff on Saturday too!). And it features, in
            my opinon, some very sleek CSS and JavaScript. The source for the site can be viewed on GitHub, and if you have any suggestions or
            criticisms, please let me know from the contact links located at the bottom of the website.
            </p>
            <img src="img/my-stuff-1.png" style="display: block; width: 100%; height: 75%; margin-left: auto; margin-right: auto; text-align: center;">

            <a href="https://github.com/JohnnyLeek/johnnyleek.github.io" target="_blank"><i class="fa fa-github"></i> - View Source On GitHub</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="snapchatModal" tabindex="-1" role="dialog" aria-labelledby="My Snapchat">
      <div class="modal-dialog" role="document">
        <div class="modal-content" id="snapchatModalContent">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="snapchatModalTitle">My Snapchat - johnny_leek</h4>
          </div>
          <div class="modal-body">
            <img src="img/snapcode.jpg" style="display: block; width: 30%; height: 45%; margin-left: auto; margin-right: auto; text-align: center;">

            <br />
            <p style="text-align: center; color: white;"> Add me on Snapchat to see me post a million pictures of my dog on my story! Scan the code above or just type in
            my username "johnny_leek"</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="twitterModal" tabindex="-1" role="dialog" aria-labelledby="My Twitter">
      <div class="modal-dialog" role="document">
        <div class="modal-content" id="twitterModalContent">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="twitterModalTitle">My Twitter - @TxtStudios</h4>
          </div>
          <div class="modal-body">
            <div style="width: 10%; margin-left: auto; margin-right: auto;">
              <a href="https://twitter.com/TxtStudios" class="twitter-follow-button" data-show-count="true"">Follow @TxtStudios</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <br />
            <div style="width: 75%; margin-left: auto; margin-right: auto;">
              <a class="twitter-timeline" data-theme="light" href="https://twitter.com/TxtStudios">Tweets by TxtStudios</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <br />
            <p style="text-align: center; color: white;">I don't tweet much. But I will eventually! You dont want to miss it! Or maybe you do... I don't know.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="top-bg">
      <div id="main-gray">
        <div id="home">
          <div id="main-page-container" class="animated infinite pulse">
            <p class="main-page-text main-page-title animated fadeIn" id="johnny-leek">Johnny Leek</p>
            <p class="main-page-text animated fadeIn" id="programmer">Programmer,</p>
            <p class="main-page-text animated fadeIn" id="student">Student,</p>
            <p class="main-page-text animated fadeIn" id="musician">Musician</p>
          </div>

          <div id="continue-button-container" class="animated fadeIn">
            <a href="#about"><i class="fa fa-chevron-down fa-3x" style="color: white;"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div id="border">
    </div>

    <div id="about">
      <div id="main-gray">
        <div id="about-me-container" class="animated infinite pulse">
            
            <p class="about-me-title main-page-text"> About Me </p>
            <p class="about-me-text">
              Hi! I'm Johnny. I'm a 15 (nearly 16!) year old programmer who currently lives in Michigan, USA. In 2010, my family was given the amazing opportunity to move to the USA
              from Nottingham, England. I picked up programming from my dad, who taught me how to make a C++ calculator when I was bored with nothing to do in an apartment after we
              had first moved. Since then, I have been in <i>love</i> with computer programming. I have learnt languages such as Java, C++, and C#, as well as web languages like HTML, CSS,
              JavaScript, and PHP. You'll see some of my projects down below. Aside from programming, I love to play music. I play the trombone and I am very passionate about it. I am
              a section leader for our schools Marching Band, as I have a passion for teaching people music, as well as playing it myself. I hope you enjoy my website which I created 
              on a Thursday afternoon. Thanks for visiting!
            </p>
        </div>
      </div>
    </div>

    <div id="stuff">
      <div id="main-gray">
        <div id="stuff-container" class="animated infinite pulse">
          <p class="my-stuff-title">My Stuff</p>
          <br />
          <div id="stuff-grid">
              <div class="row">
                <a href="#" data-toggle="modal" data-target="#websiteModal">
                  <div class="stuff-grid-col col-md-4 box-top-l box1">
                    <div class="portfolio-item">
                    </div>
                  </div>
                </a>
                <a href="#">                
                  <div class="stuff-grid-col col-md-4 box-top-l box2">
                    <div class="portfolio-item">
                    </div>
                  </div>
                </a>
                <a href="#">                
                  <div class="stuff-grid-col col-md-4 box-top-l box3">
                    <div class="portfolio-item">
                    </div>
                  </div>
                </a>
              </div>
              <div class="row">
                <a href="#">              
                  <div class="stuff-grid-col col-md-4 box-top-l box4">
                    <div class="portfolio-item">
                    </div>
                  </div>
                </a>
                <a href="#">                
                  <div class="stuff-grid-col col-md-4 box-top-l box5">
                    <div class="portfolio-item">
                    </div>
                  </div>
                </a>
                <a href="#">                
                  <div class="stuff-grid-col col-md-4 box-top-l box6">
                    <div class="portfolio-item">
                    </div>
                  </div>
                </a>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div id="contact">
      <div id="main-gray">
        <div id="contact-container">
          <p class="contact-title">Contact Me</p>
          <p class="contact-subtitle">Click each username for more info!</p>
          <div style="width: 8%; margin-left: auto; margin-right: auto; border: 1px solid"> </div>      

          <div id="social-media-container">
            <br />
            <a href="#" data-toggle="modal" data-target="#snapchatModal" style="color: white;"><i class="fa fa-snapchat-ghost fa-lg"></i> - Johnny_Leek</a>
            <p></p>
            <a href="#" data-toggle="modal" data-target="#twitterModal" style="color: white;"><i class="fa fa-twitter fa-lg"></i> - @TxtStudios</a>
            <p></p>
            <a href="https://www.instagram.com/johnny_leek/" style="color: white;" target="_blank"><i class="fa fa-instagram fa-lg"></i> - @Johnny_Leek</a>
            <p></p>
            <a href="https://www.youtube.com/channel/UCYWxAiFAaAg54Ml8HIhLGyg" style="color: white;" target="_blank"><i class="fa fa-youtube-play fa-lg"></i> - Here's Johnny</a>
            <br />
            <br />
            <p class="contact-subtitle" style="font-size: 26px;">View the source code of this website on GitHub!</p>
            <a href="https://github.com/JohnnyLeek/johnnyleek.github.io" style="color: white;" target="_blank"><i class="fa fa-github fa-lg"></i> - JohnnyLeek</a>
          </div>

        </div>
      </div>
    </div>

    
    <script src="js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/inview.js"></script>

    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
  </body>
</html>