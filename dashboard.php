<?php 
$uid = $_SESSION['uid']; 
$today = date("Y-m-d H:i:s"); 
?>
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container my-5 py-5 z-depth-3">

      <hr class="my-5">

      <!--Section: Not enough-->
      <section>


      <?php if ($auth->isLoggedIn()) {
        echo "<h3 class=\"h3 text-center mb-5\">$uruser - ID: $uid - Dashboard</h3>";


$requestsubject = $_POST["requestsubject"];
$requestbody = $_POST["requestbody"];
$requestprivate = $_POST["requestprivate"];

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
     <!-- <input type="textarea" class="form-control" id="validationCustom02" placeholder="e.g. I would like to make a 1601OPT purchase" name="requestbody"> -->

     <textarea class="form-control" id="validationCustom02" rows="5" placeholder="e.g. I would like to make a 1601OPT purchase" name="requestbody" required=""></textarea>
      
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

echo "<table id=\"tablePreview\" class=\"table table-hover\"><thead><tr><th>Request</th><th>Body</th><th>Status</th><th>Date</th></tr></thead><tbody><tr>";

$results = DB::query("SELECT id, requestsubject, requestbody, requeststatus, requestdate FROM $urtable WHERE userid=%s", $uid);


foreach ($results as $row) {

  $taskid = $row['id'];
 
  echo "<td>" . $row['requestsubject'] . "</td>";
  echo "<td>" . $row['requestbody'] . "</td>";
  
  $urstatus = $row['requeststatus'];
  // status
    if($urstatus == "Not acknowledged") {
      echo "<td><a href=\"detail.php?task=$taskid\"><button type=\"button\" class=\"btn btn-danger\">". $row['requeststatus']."</button></a>";
    } elseif ($urstatus == "Acknowledged") { 
      echo "<td><a href=\"detail.php?task=$taskid\"><button type=\"button\" class=\"btn btn-warning\">". $row['requeststatus']."</button></a>";
    } elseif ($urstatus == "In Progress") {
      echo "<td><a href=\"detail.php?task=$taskid\"><button type=\"button\" class=\"btn btn-secondary\">". $row['requeststatus']."</button></a>";
    } elseif ($urstatus == "ID Request") {
      echo "<td><a href=\"detail.php?task=$taskid\"><button type=\"button\" class=\"btn btn-info\">". $row['requeststatus']."</button></a>";
    } else {
      echo "<td><a href=\"detail.php?task=$taskid\"><button type=\"button\" class=\"btn btn-danger\">$urstatus</button></a>";
    }

    echo "<td>" . $row['requestdate'] ."</td>";
  echo "</tr>";

}
echo "</tbody></table>";
  } else { 

    DB::insert($urtable,[
      'userid' => $uid,
      'requestsubject' => $requestsubject,
      'requestbody' => $requestbody,
      'requeststatus' => "Not acknowledged",
      'requestdate' => $today,
    ]);
     echo "Request submitted. <a href=\"index.php\">Reload</a>";
  }

// user is not logged in
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