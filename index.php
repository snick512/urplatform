<?php
/*
URPlatform. 

Basic integration of MDB jQuery and PHP-Login framework. 

*/ 
$title = 'Home';

include "login/misc/pagehead.php";
$uruser = $_SESSION['username'];

require "login/misc/pullnav.php";


if ($auth->isLoggedIn()) {
// $_SESSION['username']
// logged in
//echo "We're logged in as ".$_SESSION['username']."";

include "home.php";

} else {
// not logged in
include "home.php";

//echo "not logged in";
//header("Location: login/index.php");

}

?>

</body>
</html>
