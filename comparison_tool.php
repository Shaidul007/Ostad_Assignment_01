<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison tool</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>

<div class="inner-content">
    <h1>Comparison Tool</h1>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter first number" required><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br>
        <button type="submit">Compare</button>
    </form>
    
</div>

<div class="result">
    <?php
    if($_SERVER ["REQUEST_METHOD"]== "POST"){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];

        // Use the ternary operator to determine the larger number
        $largerNumber = ($num1 > $num2) ? $num1 : $num2;
        echo "The larger number is: $largerNumber"; //result
    }
    
    ?>
</div>
    
</body>
</html>