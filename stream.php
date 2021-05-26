<?php 

include "login/misc/pagehead.php";
$uruser = $_SESSION['username'];

require "login/misc/pullnav.php";

require_once 'login/db.php';

$uid = $_SESSION['uid']; 

$urtask = $_GET["task"];

?>
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container my-5 py-5 z-depth-3">

      <hr class="my-5">

      <!--Section: Not enough-->
      <section>
      <a href="index.php"><-Dashboard</a><br />
      <?php 

      if ($auth->isLoggedIn()) {
        echo "<h3 class=\"h3 text-center mb-5\">$uruser - ID: $uid - Stream</h3>";

        $results = DB::queryRaw("SELECT * FROM urbase_streams WHERE userid=%s", $uid);
        $row = $results->fetch_assoc();

        //echo $row["info_title"];
        ?>

        <div class="card text-center">
        <div class="card-header"><?php echo $row["info_name"]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">
            With supporting text below as a natural lead-in to additional content.
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">2 days ago</div>
      </div>
<?php


    } else {
        echo "You're not logged in. <a href=\"login/\">Login here</a>.";
      } ?>

      </section>
    </div>
  </main>

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
    <?php echo $f_c; ?>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>