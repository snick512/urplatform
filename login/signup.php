<?php
if ((isset($_SESSION)) && array_key_exists('username', $_SESSION)) {
    session_destroy();
}
$userrole = 'loginpage';
$title = 'Sign Up';
require 'misc/pagehead.php';
?>
  <?php require 'misc/pullnav.php'; ?>
  
  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main features & Quick Start-->
      <section>
<div class="container logindiv">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <form class="text-center" id="usersignup" name="usersignup" method="post" action="ajax/createuser.php">
            <h3 class="form-signup-heading"><?php echo $title;?></h3>
            <br>
            <input name="newuser" id="newuser" type="text" class="form-control input-lg" placeholder="Username" autofocus>
            <div class="form-group">
                <input name="email" id="email" type="text" class="form-control input-lg" placeholder="Email"> </div>
            <div class="form-group">
                <input name="password1" id="password1" type="password" class="form-control input-lg" placeholder="Password">
                <input name="password2" id="password2" type="password" class="form-control input-lg" placeholder="Repeat Password"> </div>
            <div class="form-group">
                <button name="Submit" id="submitbtn" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            </div>
        </form>
        <div id="message"></div>
        <p id="orlogin" class="text-center">or <a href="index.php">Login</a></p>
    </div>
    <div class="col-sm-4"></div>
</div>


<?php $conf = new PHPLogin\AppConfig; ?>
    <script>
        $("#usersignup").validate({
            rules: {
                email: {
                    email: true
                    , required: true
                }
                , password1: {
                    required: true
                    <?php if ($conf->password_policy_enforce == true) {
echo ", minlength: ". $conf->password_min_length;
}; ?>
                }
                , password2: {
                    equalTo: "#password1"
                }
            }
        });
    </script>
    </div>

      </section>
      <!--Section: More-->

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

  <script type="text/javascript" src="http://platform.urcpu.com/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="http://platform.urcpu.com/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="http://platform.urcpu.com/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="http://platform.urcpu.com/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>


<script src="js/signup.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
</body>

</html>
