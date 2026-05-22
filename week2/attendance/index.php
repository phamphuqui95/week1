<?php

$result = "";

$input1 = "";
$input2 = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $input1 = $_POST["input1"];
    $input2 = $_POST["input2"];

    // Calculate Area
    if(isset($_POST["area"]))
    {
        $result = $input1 * $input2;
    }

    // Calculate Perimeter
    if(isset($_POST["perimeter"]))
    {
        $result = ($input1 + $input2) * 2;
    }

    // Calculate Average
    if(isset($_POST["average"]))
    {
        $result = ($input1 + $input2) / 2;
    }

    // Calculate BMI
    if(isset($_POST["bmi"]))
    {
        $weight = $input1;
        $height = $input2;

        $result = $weight / ($height * $height);

        $result = round($result, 2);
    }

    // Calculate Total Minutes
    if(isset($_POST["minute"]))
    {
        $hour = $input1;
        $minute = $input2;

        $result = ($hour * 60) + $minute;
    }

    // Find Max Value
    if(isset($_POST["max"]))
    {
        if($input1 > $input2)
        {
            $result = $input1;
        }
        else
        {
            $result = $input2;
        }
    }
}

include "index.html.php";

?>