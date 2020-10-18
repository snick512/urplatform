<?php
$userrole = 'loginpage';
$title = 'Reset Password';
require 'misc/pagehead.php';
require '../vendor/autoload.php';
require 'misc/pullnav.php';
?>

<!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container">

      <!--Section: Edit Profile -->
      <section>
      <script src="js/resetpw.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>

    <div class="container logindiv">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
<?php

$jwt = $_GET['t'];

try {
    $decoded = Firebase\JWT\JWT::decode($jwt, $conf->jwt_secret, array('HS256'));

    $email = $decoded->email;
    $tokenid = $decoded->tokenid;
    $userid = $decoded->userid;
    $pw_reset = $decoded->pw_reset;

    $validToken = PHPLogin\TokenHandler::selectToken($tokenid, $userid, 0);

    if ($validToken && ($decoded->pw_reset == "true")) {
        require "partials/resetform.php";
    } else {
        echo "<br><br><div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Invalid or expired token, please resubmit <a href='".$conf->base_url."/login/forgotpassword.php'>forgot password form</a></div><div id='returnVal' style='display:none;'>false</div>";
    };
} catch (Exception $e) {
    echo "<br><br><div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$e->getMessage()."<br>Token failure, try re-sending request <a href='".$conf->base_url."/login/forgotpassword.php'>here</a></div><div id='returnVal' style='display:none;'>false</div>";
}
?>
<div id="message"></div>
</div>
<div class="col-sm-4"></div>
</div>

      </section>



    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://urcpu.com/gate/" target="_blank"
        role="button"><i class="fas fa-credit-card ml-2"></i> Make a payment</a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/switchboardoffice" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/snick512" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/tyclifford" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>
      <a href="https://github.com/snick512" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 UR CPU, Tyeme & Co., dba | +1-631-663-1317
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->



  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

</body>
</html>
