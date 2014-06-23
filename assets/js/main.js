$(function() {
  var pageInit = function() {
    var links = document.getElementsByTagName("a"),
    linkRelAttribute,
    i;

    // EXTERNAL LINKS //
    for (i = 0; i < links.length; i++) {
      linkRelAttribute = links[i].getAttribute("rel");
      if (linkRelAttribute === "external") {
        links[i].setAttribute("target", "_blank");
      }
    }

    // CHECK FOR IE8 AND LOWER //
    if( $("html").hasClass("lt-ie9") ) {
      alert("Oh hi there. It looks like you are using a pretty old version of IE, please update your browser or check out one of the other better browsers out there like Chrome or Firefox.");
      $("#top-nav").css("display", "none");
      $("body").css("padding", "20px 20px 0 20px;");
      $("#content").css("padding", "100px 0").html("<p><a href='https://www.google.com/intl/en/chrome/browser/'>Download Chrome</a></p><p><a href='http://www.mozilla.org/en-US/firefox/new/'>Download Firefox</a></p>");
    }
  };

  // NAV //
  var navInit = function() {
    $("#navbar-toggle, #graphics-navbar-toggle").on('click', function () {
      if(this.id === "navbar-toggle") {
        $("header, header nav, #social").toggleClass("open");
      }
      else {
        $("#graphics nav").toggleClass("open");
      }
    });

    $("header nav a").on('click', function () {
      $("header, header nav, #social").removeClass("open");
    });

    // NAV SCROLL //
    $("header nav a, .home a").on("click", function() {
      if (location.pathname.replace(/^\//,"") === this.pathname.replace(/^\//,"") && location.hostname === this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $("[name=" + this.hash.slice(1) +"]");

        if (target.length) {
          $("html, body").animate({
            scrollTop: [target.offset().top, "swing"]
          }, 1000);

          return false;
        }
      }
    });
  };

  // MORE SITES //
  var moreSitesInit = function() {
    $(".more a").on('click', function(e) {
      e.preventDefault();
      $(this).add("#other-sites").toggleClass("open");

      if(this.innerHTML == "Show Other Sites") {
        this.innerHTML = "Hide Other Sites";
      }
      else {
        this.innerHTML = "Show Other Sites";
      }
    });
  };

  // GRAHPICS //
  var gfxInit = function() {
    var gfxContainer = document.getElementById("graphics-container"),
    gfxNavLI = document.getElementById('graphics-nav').getElementsByTagName('li'),
    section,
    images,
    i,
    n,
    j,
    count,
    countInterval;

    // GRAPHICS NAV //
    function navSelect(n) {
      gfxNavLI[n].onclick = function() {
        clearInterval(countInterval);
        countInterval = setInterval(fadeInImage, 100);

        for (j = 0; j < gfxNavLI.length; j++) {
          gfxNavLI[j].className = '';
        }
        this.className = 'active';

        loadGfx(this.id);
      };
    }

    for (n = 0; n < gfxNavLI.length; n++) {
      navSelect(n);
    }

    // LOAD GRAPHICS DATA //
    function loadGfx(PID) {
      $.getJSON('assets/json/gfx.json', function(data){
        addGfx(data, PID);
      }).error(function() {
        alert("There was an error loading the graphics data.");
      });
    }

    // ADD GRAPHICS DATA //
    function addGfx(data, PID) {
      gfxContainer.innerHTML = "";
      section = data[PID];
      images = section[0].images;

      for(i = 0; i < images.length; i++) {
        addImages(i);
      }

      // ADD IMAGES //
      function addImages(i) {
        gfxContainer.innerHTML += "<li><span><img src='assets/images/gfx/" + PID + "/" + images[i].src + "' alt='" + images[i].name + "' /></span></li>";

        if (i === images.length - 1) {
          count = 0;
          fadeInImage();
        }
      }
    }

    // IMAGE FADE IN //
    function fadeInImage() {
      count += 1;

      $("#graphics-container li:nth-child(" + count + ")").animate({
        opacity: 1
      }, 500);

      if (count === images.length) {
        count = 0;
        clearInterval(countInterval);
      }
    }
  };

  // CONTACT FORM //
  var contactInit = function() {
    var message = $("#form-message"),
    submitBtn = document.getElementById("contact-submit");

    $("#contact-form").submit(function(){
      submitBtn.innerHTML = "Sending";

      $.ajax({
        type: "POST",
        url: "verify.php",
        data: $(this).serialize(),
        dataType: "text",
        success: function(msg){
          switch(msg) {
            case "form-error":
            message.html("Please fill in all the required fields.").fadeIn(2000);
            break;

            case "captcha-error":
            message.html("Please check the form and make sure that your response matches the challenge in the reCaptcha image.").fadeIn(2000);
            break;

            case "success":
            message.html("Your message has been sent. Thank you!").fadeIn(2000).delay(2000).fadeOut(2000);
            document.getElementById("contact-form").reset();
            break;

            default:
            alert("Something has gone wrong, please try sending your message again.");
          }

          submitBtn.innerHTML = "Submit";
        }
      });

      Recaptcha.reload();
      return false;
    });

    // -- //
  };

  // INIT //
  pageInit();
  navInit();
  moreSitesInit();
  gfxInit();
  contactInit();
});
