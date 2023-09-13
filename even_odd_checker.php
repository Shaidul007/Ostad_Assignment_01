<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even_odd_checker</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
<div class="inner-content">
<h1>Even Odd Checker</h1>

<form action="" method="post">
    <input type="number" name="number" placeholder="Enter number"><br>
    <button type="submit">Check</button>
</form>
</div>
    <div class="result">
        <?php
        
        $number="";
        $result="";
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number=$_POST["number"];

            if($number % 2 ==0){
                $result="Even";
            }else{
                $result="Odd";
            }
            echo "The is: {$result} number";
            
        }

        


        ?>
    </div>
</body>
</html>