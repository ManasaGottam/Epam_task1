<?php
 session_start();
 date_default_timezone_set("Asia/Calcutta"); 
 print "Thank you " . $_SESSION['luser'];
 $sessiontime = time() - $_SESSION['start'];
 print "<br> Your session duration: " . $sessiontime . " seconds";
 session_destroy();
?>
