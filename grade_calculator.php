<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade_calculator</title>
    <style>
        <?php include "style.css"; ?>
    </style>
</head>
<body>
    
<div class="inner-content">
    <h1>Grade Calculator</h1>

    <form method="post" action="">
        <input type="number" name="test_scores1" placeholder="Test 1 Score"><br>
        <input type="number" name="test_scores2" placeholder="Test 2 Score"><br>
        <input type="number" name="test_scores3" placeholder="Test 3 Score"><br>
        <button type="submit">Calculate</button>
    </form>
</div>

<div class="result">
    <?php
    $test_scores1 = "";
    $test_scores2 = "";
    $test_scores3 = "";
    $average = ""; 
    $grade = ""; 

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $test_scores1 = $_POST["test_scores1"];
        $test_scores2 = $_POST["test_scores2"];
        $test_scores3 = $_POST["test_scores3"];
        $average =($test_scores1 + $test_scores2 + $test_scores3) /3;
        

        if($average >=90){
            $grade ="A";
        }elseif($average <90 && $average >=80){
            $grade ="B";
        }elseif($average <80 && $average >=70){
            $grade ="C";
        }elseif($average <70 && $average >=60){
            $grade ="D";
        }else{
            $grade ="F";
            
        }
        printf("Average: %.2f <br>",$average); 
        // echo "Average: {$average} <br>";
        echo "Grade: {$grade}";
    }
   
    ?>
</div>

</body>
</html>