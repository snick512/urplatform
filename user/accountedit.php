<?php
$userrole = 'Standard User';
$title = 'Account Settings';
require '../login/misc/pagehead.php';
$uid = $_SESSION['uid'];
$usr = PHPLogin\UserHandler::pullUserById($uid);
require "../login/misc/pullnav.php";

?>


<script src="js/accountupdate.js"></script>
<script src="../login/js/jquery.validate.min.js"></script>
<script src="../login/js/additional-methods.min.js"></script>



<main class="mt-5 pt-4">
    <div class="container">

      <!--Section: Account Settings -->
      <section>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h2><?php echo $title;?></h2>
            <form id="profileForm" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="username" class="label label-default">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="<?php echo $usr['username']; ?>" disabled>
                            <label for="email" class="label label-default">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?php echo $usr['email']; ?>"> </div>
                    </div>
                </div>
                <h4 class="form-signup-heading">Reset Password</h4>
                <input name="id" id="id" placeholder="User Id" value="<?php echo $uid;?>" hidden>
                <label for="password1" class="label label-default">Password</label>
                <input name="password1" id="password1" type="password" class="form-control" placeholder="New Password">
                <br>
                <label for="password2" class="label label-default">Repeat Password</label>
                <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">
                <br/>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="message"></div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block" id="submitbtn">Submit</button>
                        </div>
                    </div>
            </form>
            </div>
            <input id="emailorig" value="<?php echo $usr['email']; ?>" hidden disabled></input>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <script>
        $("#profileForm").validate({
            rules: {
                password1: {
                    <?php if ((bool) $conf->password_policy_enforce == true) {
    echo "minlength: ". $conf->password_min_length;
};?>
                }
                , password2: {
                     equalTo: "#password1"
                }
            }
        });
    </script>

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
