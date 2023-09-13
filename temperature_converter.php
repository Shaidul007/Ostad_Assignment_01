<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
<div class="inner-content">
    <h1>Temperature Converter</h1>

    <form method="post" action="">
        <input type="number" name="temperature" placeholder="Enter temperature"><br>
        <select name="conversion">
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select><br>
        <button type="submit">Check</button>
    </form>
</div>
<div class="result">
   <?php 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $conversion = $_POST["conversion"];

    if($conversion == "celsius_to_fahrenheit"){
        $result= ($temperature *9/5)+32;
    }elseif ($conversion == "fahrenheit_to_celsius"){
        $result= ($temperature-32)*5/9;
    }else{
        $result = "Please wirte any number";
    }

echo "Result:";
    echo ($conversion == "celsius_to_fahrenheit")? "($temperature) &deg;C = {$result} &deg;F" : ("$temperature &deg;F = {$result} &deg;C");
}

   ?>
</div>
    
</body>
</html>


