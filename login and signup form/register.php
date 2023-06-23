<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/loader.css" />
    <link rel="stylesheet" href="css/form.css" />
  </head>
  <body>

  <!-- loader -->

  <div id="loader">
  <div class="loader row-item">
	<span class="circle"></span>
	<span class="circle"></span>
	<span class="circle"></span>
	<span class="circle"></span>
	<span class="circle"></span>
</div>
</div>

  <!-- loader end -->

  <!-- form start -->
    <div class="form">
      <h2>Registration</h2>
      <form action="" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text">Error</div>
      <div class="grid-details">
        <div class="input">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" required pattern="[a-zA-Z'-'\s]*" >
        <!--</div>
        <div class="input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required pattern="[a-zA-Z'-'\s]*">
        </div>
      </div>
        <div class="input">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter Your Email" required>
    </div>-->
    <div class="input">
            <label>Registration ID</label>
            <input type="text" name="rnumber" placeholder="Registration ID" required>
        </div>
      <div class="input">
        <label>Block</label>
        <input type="block" name="block" placeholder="block" required>
    </div>
    <div class="grid-details">
        <div class="input">
            <label>Password</label>
            <input type="password" name="pass" placeholder="Password" required>
        </div>
        <div class="input">
            <label>Confirm Password</label>
            <input type="password" name="cpass" placeholder="" required>
        </div>
      </div>
      <div class="input">
        <label>Room Number</label>
        <input type="roomno" name="roomno" placeholder="" required>
    </div>
        <div class="submit">
      <input type="submit" value="Register" class="button">
    </div>
    </form>
    <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </div>

  <!-- form end -->


<script>
    $(document).ready(function() {
    //Preloader
    preloaderFadeOutTime = 1200;
    function hidePreloader() {
    var preloader = $('#loader');
    preloader.fadeOut(preloaderFadeOutTime);
    }
    hidePreloader();
    });
    </script>

  <script src="js/register.js"></script>
  </body>
</html>
