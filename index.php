<?php
/*
URPlatform. 

Basic integration of MDB jQuery and PHP-Login framework. 

*/ 
$title = 'Home';

include "login/misc/pagehead.php";
?>

<?php require "login/misc/pullnav.php"; ?>

<?php

if ($auth->isLoggedIn()) {
// $_SESSION['username']
// logged in
//echo "We're logged in as ".$_SESSION['username']."";
include "home.php";
} else {
// not logged in
include "home.php";
}

?>

</body>
</html>
