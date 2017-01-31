<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello World</title>
</head>

<body>
<?php
$WorldVar = "World";
$SunVar = "Sun";
$MoonVar = "Moon";
define("WORLD_INFO" , 92897000);
define("SUN_INFO" , 72000000);
define ("MOON_INFO" , 456);

echo "<p>Hello $WorldVar! <br />";
echo "The $WorldVar is " ,  WORLD_INFO, " miles from the $SunVar. <br />";
echo "Hello ", $SunVar, "!<br />";
echo "The $SunVar's core temperature is approximately ", SUN_INFO, " degrees Fahrenheit. <br />";
echo "Hello", $MoonVar, "!<br />";
echo "The $MoonVar is ", MOON_INFO, " miles in diameter. </p>";

?>



</body>
</html>