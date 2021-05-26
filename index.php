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

include "dashboard.php";

} else {
// not logged in
include "home.php";

}

?>

</body>
</html>
