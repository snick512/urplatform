<?php
/*
URPlatform. 

Basic integration of MDB jQuery and PHP-Login framework. 

*/ 
$title = 'UR CPU - A crypto community doing crypto things.';

include "login/misc/pagehead.php";
$uruser = $_SESSION['username'];

require "login/misc/pullnav.php";

require_once 'login/db.php';



if ($auth->isLoggedIn()) {
// $_SESSION['username']
// logged in
//echo "We're logged in as ".$_SESSION['username']."";

//include "home.php";

include "dashboard.php";

} else {
// not logged in
include "home.php";

//echo "not logged in";
//header("Location: login/index.php");

}

?>

</body>
</html>
