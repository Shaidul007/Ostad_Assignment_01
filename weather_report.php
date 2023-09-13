<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weather_report</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>

<div class="inner-content">
    <h1>Weather Report</h1>
    <form method="post" action="">
        <input type="number" name="temperature" placeholder="Enter Temperature"><br>
        <button type="submit">Check Weather</button>
    </form>
</div>

<div class="result">
    <?php
    $temperature = "";
    $result = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $temperature =$_POST["temperature"];

        if($temperature < 0){
            $result= "It's freezing!";
        }elseif($temperature >= 0 && $temperature <15){
            $result= "It's cold!";
        }elseif($temperature >= 15 && $temperature <25){
            $result= "It's cool!";
        }elseif($temperature >= 25 && $temperature <35){
            $result= "It's warm!";
        }else{
            $result= "It's hot!";
        }

        if($result !== ""){
            echo "Weather: $result";
        }else{
            echo "Please enter a valid temperature";
        }
        
    }
    
    ?>
</div>
    
</body>
</html>