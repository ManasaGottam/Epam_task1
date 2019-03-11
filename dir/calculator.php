<?php
$x=trim($_REQUEST['t1']);
$y=trim($_REQUEST['t2']);
$op=trim($_REQUEST['t3']);

switch($op)
{
case "+": $result=$x+$y;
            break;
case "-": $result=$x-$y;
            break;
case "*": $result=$x*$y;
            break;
case "/": $result=$x/$y;
            break;
}
echo " RESULT= ".$result;
?>
