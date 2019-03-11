<?php
 session_start();
 ?>
 <html>
<body>

<?php
 date_default_timezone_set("Asia/Calcutta");
 $_SESSION['luser'] = trim($_REQUEST['t1']);
 $_SESSION['start'] = time();
 $tm=$_SESSION['start']; 
 echo  "Hello " . $_SESSION['luser'];
 
 print "<p align='right'>Session started at " . date("h:i:sa",$tm) . "<br>";
print "<form action='logout.php' method='post'>";
print "<input type='submit' value='Logout'></p>";
print "</form>";

  ?>
