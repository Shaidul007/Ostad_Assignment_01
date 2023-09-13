<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
<div class="inner-content">
<h1>Simple Calculator</h1>
<form method="post" action="">
    <input type="number" name="fnum" placeholder="Enter first number" required><br>
    <input type="number" name="lnum" placeholder="Enter second number" required><br>
    <select name="operation">
        <option value="add">Addition</option>
        <option value="subtract">Subtraction</option>
        <option value="multuply">Multiplication</option>
        <option value="divide">Division</option>
        <option value="binary">Binary</option>
        <option value="octal">Octal</option>
        <option value="hexadecimal">Hexadecimal</option>
    </select><br>
    <button type="submit">Calculate</button>
</form>
</div>
<div class="result">
    <?php
    if($_SERVER ["REQUEST_METHOD"] == "POST"){
        $fnum =$_POST["fnum"];
        $lnum =$_POST["lnum"];
        $operation=$_POST["operation"];

        switch($operation){
            case "add":
                $result = $fnum+$lnum;
                echo "Result: {$result}";
                break;
            case "subtract":
                $result =$fnum-$lnum;
                echo "Result: {$result}";
                break;
            case "multuply":
                $result =$fnum*$lnum;
                echo "Result: {$result}";
                break;
            case "divide":
                if($lnum !=0){
                    $result= $fnum/$lnum;
                    echo "Result: {$result}";
                }else{
                    echo "Cannot divide this number";
                }
                break;
            case "binary":
                echo "Binary:" .decbin($fnum);
                break;
            case "octal":
                echo "Octal:" . decoct($fnum);
                break;
            case "hexadecimal":
                echo "Hexadecimal:" .dechex($fnum);

        }
    }
    ?>
</div>

</body>
</html>