<?php
    require_once "Football.php";
    require_once "Test.php";

    $football = new Football();
    $football->setColor("schwarz");
    $football->setDiameter(30);

    if ($football instanceof Football)
    {
        echo "<h2>{$football->describeFootball()}</h2>";
    }
    else
    {
        echo "<h2>In $football ist kein Fußball.</h2>";
    }
?>