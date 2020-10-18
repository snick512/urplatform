<?php $uid = $_SESSION['uid']; ?>
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container">

      <hr class="my-5">

      <!--Section: Not enough-->
      <section>


      <?php if ($auth->isLoggedIn()) {
        echo "<h3 class=\"h3 text-center mb-5\">$uruser - ID: $uid - Dashboard</h3>";
// form testing 


//$ursubmit = $_GET["submit"];

$requestsubject = $_POST["requestsubject"];
$requestbody = $_POST["requestbody"];

//DB::$error_handler = "false";
//DB::$throw_exception_on_error = "true";
/*
try {   
DB::insert($urtable,[
  'userid' => $uid,
  'requestsubject' => $requestsubject,
  'requestbody' => $requestbody,
  'requeststatus' => "Not acknowledged",
]); } catch (MeekdroDBException $e) {
  echo ".... ";
}
*/

  if(!isset($_POST["rsubmit"])) {

?>

<form class="needs-validation" action="index.php" method="post" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Request Name/Subject</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="e.g. Bitcoin purchase" name="requestsubject" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Full query</label>
      <input type="textarea" class="form-control" id="validationCustom02" placeholder="e.g. I would like to make a 1601OPT purchase" name="requestbody" 
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        This is a reasonable request
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary btn-sm" type="submit" name="rsubmit">Request</button>
</form>

<script>(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
</script>

<?php 
// show existing requests


$results = DB::query("SELECT requestsubject, requestbody, requeststatus FROM $urtable");
foreach ($results as $row) {
  echo "Request: " . $row['requestsubject'] . "<br />";
  echo "Full query: " . $row['requestbody'] . "<br />";
  echo "Status: " . $row['requeststatus'] . "<br />";
  echo "-------------<br />";
}

  } else { 

    DB::insert($urtable,[
      'userid' => $uid,
      'requestsubject' => $requestsubject,
      'requestbody' => $requestbody,
      'requeststatus' => "Not acknowledged",
    ]);
     echo "Request submitted";
  }
       //   echo "Form test";
/* 
DB::insert('accounts', [
  'username' => $username,
  'password' => $password,
]);


DB::insert($urtable,[
  'userid' => $uid,
  'requestsubject' => $requestsubject,
  'requestbody' => $requestbody,
  'requeststatus' => "Not acknowledged",
]);*/



// user is not logged in
      } else {
    //    echo "<h3 class=\"h3 text-center mb-5\">Free the spirits</h3>";
        echo "You're not logged in. <a href=\"login/\">Login here</a>.";
      } ?>

      </section>

      <!--Section: More-->
      <section>

        <h2 class="my-5 h3 text-center"></h2>
<!--

<table id="tablePreview" class="table">

  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>ETA</th>
      <th>Price</th>

    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>

</table>

-->
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
      © 2020 UR CPU, Tyeme & Co., dba | +1-631-663-1317
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