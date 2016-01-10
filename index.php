<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Google Roboto font -->
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

  <!-- CUSTOM STYLES -->
  <link rel="stylesheet" href="assets/css/main.css">

  <!-- Including jQuery for the functions on site-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <!-- GOOGLE ANALYTICS -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-43588334-4', 'auto');
    ga('send', 'pageview');
  </script>

  <!-- reCAPTCHA -->
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!-- Functions for this page -->
  <script src='assets/js/index_functions.js'></script>

  <script>
    $(document).ready(function() {
      subscribeClick();
    });
  </script>

</head>

<body>
  <div class="container">
    <nav class="navbar bg-faded">
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Our service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
      </ul>
      <!-- <form class="form-inline pull-xs-right">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-primary-outline" type="submit">Search</button>
      </form> -->
    </nav>


    <!-- HERO AREA -->
    <section class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div id="google_translate_element"></div>
        </div>
        <div class="row text-xs-center">
          <img src="assets/img/logo.png" alt="Easy Instructions logo">
          <h1 class="display-3 text-info">See it. Hear it. Do it yourself.</h1>
        </div>
      </div>
    </section>

    <!-- MAIN INDEX SECTION -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <h3 class="bg-info p-a-1">Upload your video instructions</h3>
            <p>Step 1: Select a file</p>
            <div>
              <!-- <button class="btn btn-info-outline">Choose File</button> -->
              <input type="file">
              <br>
              <br> or enter YouTube url
              <br>
              <input type="text" class="form-control">
              <br>
            </div>
            <p>Step 2: Click the button below</p>
            <p>
              <button class="btn btn-info">Upload File</button>
            </p>
            <label>
              <input type="checkbox"> I agree to the terms and conditions.
            </label>
          </div>
          <div class="col-xs-12 col-md-6">
            <h3 class="bg-success p-a-1">Search for instructions</h3>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter product name or barcode">
              <span class="input-group-btn">
                <button class="btn btn-info-outline" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
        <div class="row p-t-3">
          <h3 class="col-xs-12 bg-success p-a-1">Interested?</h3>
          <div class="col-xs-12 col-md-6">
            <p>Let us know by subscribing for news and updates about our service</p>
            <div class="subscribe_msg hidden"></div>
            <div class="subscribe_form">
              <form action="" method="post">
                <input type="text" class="form-control" id="email_address" placeholder="Enter your e-mail address">
                <br />
                <div class="g-recaptcha" data-sitekey="6Lcl5hQTAAAAABxSlsL3ymggHj5IWXFI0RRn_La9"></div>
                <br />
                <input class="btn btn-info subscribe_btn" type="submit" value="Subscribe" />
              </form>
              <br>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <h3>Marketing text</h3>
            <p class="lead">and or images</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container text-muted p-y-1">
        <div class="row">
          <div class="col-xs-12">
            <a href="#">Collaborations</a> |
            <a href="#">Advertising</a> |
            <a href="#">Press Area</a> |
            <a href="#">Careers</a> |
            <a href="#">Terms and Conditions</a> |
            <a href="#">Social</a> |
            <a href="#">Privacy and Security</a>
          </div>
        </div>
      </div>
    </footer>


  </div>
  <!-- END OF MAIN CONTAINER -->

  <!-- Google Translate API -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
      }, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- Bootstrap JS. -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>

</html>
