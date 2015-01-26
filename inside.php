<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
        <div class="large-3 columns">
          <h1><img src="img/logo.png" /></h1>
        </div>
        <div class="large-9 columns">
          <ul class="right button-group">
          <li><a href="index.html" class="button">Logout</a></li>
          </ul>
         </div>
       </div>
      
    <!-- End Header and Nav -->
     
    <!-- First Band (Slider) -->
     
      <div class="row">
        <div class="large-12 columns">
        <div id="slider">
          <p>You have <?php echo htmlspecialchars($_POST['password']); ?> in our bank. To transfer it you can call your Hyper Trust Advisor (You are his only job) who will do it for you.</p>
        </div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
