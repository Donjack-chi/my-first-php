<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Frontend</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <h1>
  <?php
  /*variable declaration*/
$Hello="Hello World";
echo $Hello;
echo "<br>";
$Am="Am New To Coding";
echo $Am;
echo "<br>";
$It="It Is Intereting To Code";
echo $It;
echo "<br>";
$Donjack="1000000";
echo $Donjack;
echo "<br>";
/*defining constant*/
define("FOOD", "fufu and egusi soup");
echo FOOD;
echo "<br>";
echo "my fourite meal is: " .FOOD;
echo "<br>";
define("Cars", "Limousine and Ferrari");
echo "My Choice of Cars: " .Cars;
echo "<br>";
$number=23.51;
echo $number;
echo "<br>";
$show_error= true;
echo $show_error;
echo "<br>";
$Careers= array("Programming","Teaching","Mechanic");
echo $Careers[0];
echo "<br>";
echo $Careers[1];
echo "<br>";
echo $Careers[2]
?>
</h1>
  </body>
</html>
