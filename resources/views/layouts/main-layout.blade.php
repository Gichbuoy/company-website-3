<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Classic car repair and restorations. Tom's Garage.">

    <title>{{$titlePrefix}} - Tom's Garage</title>

    <link rel="shortcut icon" type="image/x-icon" href="res/images/logo_favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/toms-garage.css">
  </head>

  <body>
    <div id="sideBarMenu" class="ui left vertical inverted sidebar labeled icon menu">
      <a class="item" href="/">
        <i class="fas fa-home icon"></i>Home
      </a>
      <a class="item" href="/sample-designs">
        <i class="fas fa-paint-brush icon"></i>Sample Designs
      </a>
      <a class="item" href="/tools-and-techniques">
        <i class="fas fa-wrench icon"></i>Tools and Techniques
      </a>
      <a class="item" href="/make-appointment">
        <i class="fas fa-calendar-check icon"></i>Request Appointment
      </a>
      <a class="item" href="/contact-us">
        <i class="fas fa-map-marker-alt icon"></i>Contact Us
      </a>
    </div>

    <div id="topBarMenu">
      <button id="sideBarMenuBtn" class="ui basic inverted icon button" onclick="openSideBarMenu()">
        <i class="fas fa-bars icon"></i> <span id="menuBtnText">Menu</span>
      </button>
    </div>

    @yield('mainContent')

    <div id="footer">
      <div class="ui container">
        <div class="ui three column grid">
          <div class="ui row">
            <div class="ui left aligned column">
              <div class="ui animated list">
                <a id="footerTextColor" class="item footer-text-size" href="/">Home</a>
                <a id="footerTextColor" class="item footer-text-size" href="/sample-designs">Sample Designs</a>
                <a id="footerTextColor" class="item footer-text-size" href="/tools-and-techniques">Tools and Techniques</a>
                <a id="footerTextColor" class="item footer-text-size" href="/make-appointment">Request Appointment</a>
                <a id="footerTextColor" class="item footer-text-size" href="/contact-us">Contact Us</a>
              </div>
            </div>

            <div class="ui center aligned column">
              <div class="ui grid">
                <div class="ui row">
                  <div class="ui column">
                    <img class="ui centered small image" src="res/images/logo.png" alt="logo">
                  </div>
                </div>
                <div class="ui row">
                  <div class="ui column">
                    <h1 id="footerTextColor" class="ui icon large header">Tom's Garage</h1>
                  </div>
                </div>
              </div>
            </div>

            <div class="ui right aligned column">
              <div class="ui horizontal list">
                <a id="footerTextColor" class="item" target="_blank" href="#">
                  <i class="fab fa-facebook-square footer-social-text-size"></i>
                </a>
                <a id="footerTextColor" class="item" target="_blank" href="#">
                  <i class="fab fa-twitter-square footer-social-text-size"></i>
                </a>
                <a id="footerTextColor" class="item" target="_blank" href="#">
                  <i class="fab fa-instagram footer-social-text-size"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ui one column row">
            <div class="ui right aligned column">
              <a id="footerTextColor" target="_blank" href="https://www.clasxsoft.com">
                <i>ClasX Software &reg;</i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <script src="js/toms-garage.js"></script>

</html>
