<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../Stylesheet/Design.css">
    <title>Fußball</title>
</head>

<?php
    require_once "Football.php";
    require_once "Test.php";
    require_once "Data.php";

    $football01 = new Football(["color"=>"schwarz", "diameter"=>30, "weight"=>60]);
    $football02 = new Football(["color"=>"blau", "diameter"=>20, "weight"=>50]);
    $football03 = new Football(["color"=>"grün", "diameter"=>40, "weight"=>40]);
?>

<body>
    <p><?php if ($football01 instanceof Football) echo "$football01"; else echo "In $football01 ist kein Fußball.";?></p>
    <p><?php if ($football02 instanceof Football) echo $football02; else echo "In $football02 ist kein Fußball.";?></p>
    <p><?php if ($football03 instanceof Football) echo $football03; else echo "In $football03 ist kein Fußball.";?></p>
</body>
</html>