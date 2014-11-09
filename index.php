<?php
include_once('recaptchalib.php');
$publickey = "YOUR_PUBLIC_KEY";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Michael J. Scarchilli :: Creative Portfolio :: MikeVision ::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="My name Michael J. Scarchilli and I am a Front-End Web Developer. I also like bunnies... (the cute little fluffy ones with big ears).">
  <meta name="keywords" content="Michael Scarchilli, mikevision.com, mikevision, scarchilli, programming, front-end, developer, web design, graphic design, portfolio, photography" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="MikeVision.com" />
  <meta property="og:url" content="http://www.mikevision.com" />
  <meta property="og:title" content="Michael J. Scarchilli :: Creative Portfolio" />
  <meta property="og:description" content="My name Michael J. Scarchilli and I am a Front-End Web Developer. I also like bunnies... (the cute little fluffy ones with big ears)." />
  <meta property="og:image" content="http://www.mikevision.com/assets/images/share.jpg" />
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <script type="text/javascript">
    var RecaptchaOptions = {
      theme : 'white'
    };
  </script>

  <link href='http://fonts.googleapis.com/css?family=Patrick+Hand|Shadows+Into+Light|Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body id="home">

  <!-- HEADER -->
  <header>
    <div id="logo"></div>

    <!-- NAVIGATION -->
    <button id="navbar-toggle" type="button">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <nav>
      <ul id="top-nav">
        <li><a href="#web-dev">Web Development</a></li>
        <li><a href="#lang-tools">Languages &amp; Tools</a></li>
        <li><a href="#graphics">Graphics</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <!-- SOCIAL -->
    <div id="social">
      <ul>
        <li class="facebook"><a href="https://www.facebook.com/mscarchilli" rel="external"></a></li>
        <li class="twitter"><a href="https://twitter.com/Mike_Scarchilli" rel="external"></a></li>
        <li class="linkedin"><a href="https://www.linkedin.com/in/mscarchilli" rel="external"></a></li>
        <li class="github"><a href="https://github.com/mscarchilli" rel="external"></a></li>
      </ul>
    </div>
  </header>

  <div id="content">

    <!-- WEB DEVELOPMENT -->
    <section id="web-dev">
      <h2>Web Development</h2>

      <!-- Work Experience -->
      <article>
        <h3>Work Experience</h3>

        <!-- Baby Warm -->
        <div class="company">
          <div class="col-left">
            <a href="http://www.babywarm.org" rel="external"><img src="assets/images/web/baby-warm.jpg" alt="Baby Warm" /></a>
          </div>
          <div class="col-right">
            <h4>Baby Warm</h4>
            <p class="location-date">Los Angeles, CA, May 2014 &ndash; November 2014</p>
            <p class="title">Front-End Web Developer &ndash; Project Manager (Volunteer)</p>
            <ul class="description">
              <li>
                Responsible for planning and building non-profit crowdfunding Wordpress site
              </li>
              <li>
                Utilized Bootstrap as well as SCSS to build a responsive website.
              </li>
              <li>
                <a href="http://www.babywarm.org" rel="external">Visit site</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Burnside Digital -->
        <div class="company">
          <div class="col-left">
            <a href="http://www.burnsidedigital.com/" rel="external"><img src="assets/images/web/burnside-digital.jpg" alt="Burnside Digital" /></a>
          </div>
          <div class="col-right">
            <h4>Burnside Digital</h4>
            <p class="location-date">Los Angeles, CA, November 2013 &ndash; July 2014</p>
            <p class="title">Front-End Web Developer (Telecommute, Contract)</p>
            <ul class="description">
              <li>
                Responsible for building medium to large scale web applications utilizing HAML, CSS3 and SASS in a Ruby environment
              </li>
              <li>
                Building responsive web pages that utilize swipe libraries for mobile and tablet devices
              </li>
              <li>
                Communicate daily with other developers and clients in the development and redesign process
              </li>
              <li>
                <a href="http://www.burnsidedigital.com/" rel="external">Visit site</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Sony Pictures Interactive -->
        <div class="company">
          <div class="col-left">
            <a href="http://www.sonypictures.com/" rel="external"><img src="assets/images/web/sony.jpg" alt="Sony Pictures Interactive" /></a>
          </div>
          <div class="col-right">
            <h4>Sony Pictures Interactive</h4>
            <p class="location-date">Culver City, CA, January 2012 &ndash; October 2013</p>
            <p class="title">Front-End Web Developer</p>
            <ul class="description">
              <li>
                Responsible for programming and developing a wide variety of high traffic domestic and international websites for both desktop and mobile devices utilizing HTML5, XHTML, PHP, JavaScript, and jQuery
              </li>
              <li>
                Worked closely with a multitude of in-house Producers, Flash developers, QA, and Tracking team members
                to build and deploy cross browser compliant websites that strictly adhere to client specifications
              </li>
              <li>
                Custom built a script for Alfresco, that improved the functionality and UI for the CMS that is used throughout Sony Pictures Interactive
              </li>
              <li>
                Worked on applications and site features developed for use in conjunction with social websites such as Facebook, Twitter, Pinterest , and GetGlue
              </li>
              <li>
                Specialized in slicing in Photoshop and coding HTML email newsletters, compliant across multiple browsers and email service providers
              </li>
              <li>
                Lead developer on 7th Annual Pixel Awards 2012 Winner for Movie site. <a href="http://www.WelcomeToHotelT.com/site" rel="external">Hotel Transylvania</a>
              </li>
              <li>
                Developer on 8th Annual Pixel Awards 2013 Winner for Movie site. <a href="http://www.Cloudy-Movie.com/site" rel="external">Cloudy With A Chance Of Meatballs 2</a>
              </li>
              <li>
                <a href="http://www.sonypictures.com/" rel="external">Visit site</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Meteor Games -->
        <div class="company">
          <div class="col-left">
            <a href="http://en.wikipedia.org/wiki/Meteor_Games" rel="external"><img src="assets/images/web/meteor-games.jpg" alt="Meteor Games" /></a>
          </div>
          <div class="col-right">
            <h4>Meteor Games LLC</h4>
            <p class="location-date">Beverly Hills, CA, September 2010 &ndash; October 2011</p>
            <p class="title">Software Engineer &ndash; Front-End</p>
            <ul class="description">
              <li>
                Responsible for programming and maintenance tasks for Facebook social PHP/Flash game development (Island Paradise, Serf Wars, and Neopets: Treasure Keepers)
              </li>
              <li>
                Specialized in slicing and coding all HTML email newsletters, compliant across multiple browsers and email service providers
              </li>
              <li>
                Worked closely with PHP programmers, Flash developers, QA, and graphic design teams
              </li>
              <li>
                Created cross browser compliant concept UI/UX designs as well
              </li>
              <li>
                <a href="http://en.wikipedia.org/wiki/Meteor_Games" rel="external">Visit Wikipedia site</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- AYSO -->
        <div class="company">
          <div class="col-left">
            <a href="http://www.ayso.org/" rel="external"><img src="assets/images/web/ayso.jpg" alt="American Youth Soccer Organization" /></a>
          </div>
          <div class="col-right">
            <h4>American Youth Soccer Organization (AYSO)</h4>
            <p class="location-date">Hawthorne, CA, March 2008 &ndash; September 2010</p>
            <p class="title">Web Developer</p>
            <ul class="description">
              <li>
                Responsible for maintenance, updates and redesign of national non-profit organizations website
              </li>
              <li>
                Served as Project Manager for web page rebuild
              </li>
              <li>
                Programs and programming used include: HTML, XHTML, CSS, RSS, XML, ActionScript 3.0, JavaScript, PHP, and Microsoft Content Management System
              </li>
              <li>
                Responsible for the development and management of programming e-mail compliant e-blasts
              </li>
              <li>
                <a href="http://www.ayso.org/" rel="external">Visit site</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Neway Packaging -->
        <div class="company last">
          <div class="col-left">
            <a href="http://newaypkg.com/" rel="external"><img src="assets/images/web/newaypkg.jpg" alt="Neway Packaging" /></a>
          </div>
          <div class="col-right">
            <h4>Neway Packaging Corp.</h4>
            <p class="location-date">Rancho Dominguez, CA, March 2005 &ndash; January 2008</p>
            <p class="title">Web Designer &ndash; Web Developer</p>
            <ul class="description">
              <li>
                Strategized, designed and programmed comprehensive website for national packaging corporation
              </li>
              <li>
                Responsible for all online and multi-media marketing and customer interaction capabilities, as well as all website maintenance, software testing, website development and e-commerce implementation
              </li>
              <li>
                Responsible for all corporate identity projects and collateral, including logo design, line cards, flyers and
                other miscellaneous collateral systems
              </li>
              <li>
                <a href="http://newaypkg.com/" rel="external">Visit site</a>
              </li>
            </ul>
          </div>
        </div>

        <p class="home"><a href="#home">Home</a></p>
        <p class="more"><a href="#other-sites">Show Other Sites</a></p>
      </article>

      <!-- Other Sites -->
      <article id="other-sites">
        <h3>Other Sites</h3>

        <!-- Leda Takacs Portfolio -->
        <div class="company">
          <div class="col-left">
            <a href="http://www.ledatakacs.com/" rel="external"><img src="assets/images/web/leda-takacs.jpg" alt="Leda Takacs Portfolio" /></a>
          </div>
          <div class="col-right">
            <h4>Leda Takacs Portfolio</h4>
            <p class="location-date">Personal Project &ndash; November 2013</p>
            <p class="title">Front-End Web Developer</p>
            <ul class="description">
              <li>
                Built custom lightbox script for image viewing
              </li>
              <li>
                Made the site easy to update for a non technical person via JavaScript objects
              </li>
              <li>
                <a href="http://www.ledatakacs.com/" rel="external">Visit site</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- XFIRE -->
        <div class="company">
          <div class="col-left">
            <a href="http://www.xfire.com/" rel="external"><img src="assets/images/web/xfire.jpg" alt="XFIRE" /></a>
          </div>
          <div class="col-right">
            <h4>XFIRE</h4>
            <p class="location-date">Freelance &ndash; 2011</p>
            <p class="title">Front-End Web Developer</p>
            <ul class="description">
              <li>
                Built auto height expanding HTML emails that were cross e-mail client &amp; browser compliant.
              </li>
              <li>
                <a href="http://www.xfire.com/" rel="external">Visit site</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Breakfast In Beverly Hills -->
        <div class="company last">
          <div class="col-left">
            <a href="http://www.mcsaatchi.com/" rel="external"><img src="assets/images/web/breakfast-in-bh.jpg" alt="Breakfast In Beverly Hills" /></a>
          </div>
          <div class="col-right">
            <h4>Breakfast In Beverly Hills</h4>
            <p class="location-date">Freelance &ndash; 2009</p>
            <p class="title">Front-End Web Developer &amp; Flash Developer</p>
            <ul class="description">
              <li>
                Built flash site for the City of Beverly Hills.
              </li>
              <li>
                Built Flash advertisements utilizing ActionScript 3.0 for Breakfast in Beverly Hills campaign.
              </li>
              <li>
                Freelance work for <a href="http://www.mcsaatchi.com/" rel="external">M&amp;C Saatchi</a>
              </li>
            </ul>
          </div>
        </div>

        <p class="home"><a href="#home">Home</a></p>
      </article>

      <!-- Languages & Tools -->
      <article id="lang-tools">
        <h3>Languages &amp; Tools</h3>

        <h5>Platforms</h5>
        <ul class="pill-list">
          <li>Windows</li>
          <li>MAC</li>
          <li>Linux familiar</li>
        </ul>

        <h5>Languages</h5>
        <ul class="pill-list">
          <li>HTML</li>
          <li>HTML5</li>
          <li>XHTML</li>
          <li>HAML</li>
          <li>CSS</li>
          <li>CSS3</li>
          <li>SCSS</li>
          <li>Sass</li>
          <li>LESS</li>
          <li>JavaScript</li>
          <li>jQuery</li>
          <li>AJAX</li>
          <li>JSON</li>
          <li>XML</li>
        </ul>

        <h5>Familiar Languages</h5>
        <ul class="pill-list">
          <li>PHP</li>
          <li>Ruby</li>
          <li>Node</li>
          <li>Grunt</li>
          <li>CoffeeScript</li>
          <li>Mustache</li>
          <li>Handlebars</li>
          <li>Jade</li>
          <li>ActionScript 3.0</li>
        </ul>

        <h5>Tools</h5>
        <ul class="pill-list">
          <li>GIT</li>
          <li>SVN</li>
          <li>SCRUM</li>
          <li>Agile</li>
          <li>JIRA</li>
          <li>OOP</li>
          <li>MVC</li>
          <li>Bootstrap</li>
          <li>Frameworks</li>
          <li>Facebook API</li>
          <li>W3C</li>
          <li>Jenkins</li>
          <li>Charles</li>
          <li>Sublime Text</li>
          <li>NetBeans</li>
          <li>HTML E-mails</li>
          <li>Adobe Suite</li>
          <li>Firebug</li>
          <li>Copper</li>
          <li>Alfresco</li>
          <li>WordPress</li>
          <li>CMS</li>
          <li>SEO</li>
          <li>FTP</li>
          <li>Balsamiq</li>
          <li>Google Hangouts</li>
          <li>and more</li>
        </ul>

        <p class="home"><a href="#home">Home</a></p>
      </article>

    </section>

    <!-- GRAPHICS -->
    <section id="graphics">
      <h2>Graphics</h2>

      <button id="graphics-navbar-toggle" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <nav>
        <ul id="graphics-nav">
          <li id="3d">3D</li>
          <li id="logos">Logos</li>
          <li id="marketing">Marketing</li>
          <li id="art">Art</li>
          <li id="miscellaneous">Miscellaneous</li>
        </ul>
      </nav>

      <ul id="graphics-container">
        <li class="display"><span><img src="assets/images/gfx/3d/conveyor-01.jpg" alt="3D" /></span></li>
        <li class="display"><span><img src="assets/images/gfx/logos/mikevision.png" alt="Logos" /></span></li>
        <li class="display"><span><img src="assets/images/gfx/marketing/ayso-section-conf-03.gif" alt="Marketing" /></span></li>
        <li class="display"><span><img src="assets/images/gfx/art/oreo-02.jpg" alt="Art" /></span></li>
        <li class="display"><span><img src="assets/images/gfx/miscellaneous/can-top.jpg" alt="Miscellaneous" /></span></li>
      </ul>

      <p class="home"><a href="#home">Home</a></p>
    </section>

    <!-- CONTACT -->
    <section id="contact">
      <h2>Contact</h2>
      <form id="contact-form">
        <label>Name:
          <input type="text" name="name" placeholder="Your Name" required="required">
        </label>

        <label>E-mail:
          <input type="email" name="email" placeholder="example@domain.com" required="required">
        </label>

        <label>Message:
          <textarea name="message" placeholder="What's up?" required="required"></textarea>
        </label>

        <?php
        echo recaptcha_get_html($publickey);
        ?>

        <div id="form-message"></div>

        <button type="submit" name="submit" value="Submit" id="contact-submit">Submit</button>
      </form>

      <p class="home"><a href="#home">Home</a></p>
    </section>

  </div>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2014 MikeVision.com | Michael J. Scarchilli</p>
  </footer>


  <!-- SCRIPTS -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Google Analytics -->
  <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-3431681-1');ga('send','pageview');
  </script>
</body>
</html>
