<?php
/*
URPlatform. 

Basic integration of MDB jQuery and PHP-Login framework. 

*/ 
$title = 'Task Detail';

include "login/misc/pagehead.php";
$uruser = $_SESSION['username'];

require "login/misc/pullnav.php";

require_once 'login/db.php';



if ($auth->isLoggedIn()) {

include "task.php";

} else {
// not logged in
include "home.php";

//echo "not logged in";
//header("Location: login/index.php");

}

?>

</body>
</html>
