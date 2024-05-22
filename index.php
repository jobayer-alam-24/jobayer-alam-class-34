<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body{
            font-family: verdana, sans-serif;
        }
    </style>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="grade" placeholder="What is your GRADE? " required><p></p>
        <input type="text" name="age" placeholder="What is your AGE? " required><p></p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
    // Problem 1: Grade Evaluation
    // Write a PHP script that takes a letter grade (A, B, C, D, F) and outputs a description:
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["grade"])) {
        $user_input = $_POST["grade"];
        $user_input = strtoupper($user_input);
        
        switch($user_input){
            case 'A':
                echo "Congratulations! " . "You have got {$user_input} <br>";
                break;
            case 'B':
                echo "You have got {$user_input} <br>"; 
                break;
            case 'C':
                echo "You have got {$user_input} <br>"; 
                break;
            case 'D':
                echo "You have got {$user_input} <br>"; 
                break;
            case 'F':
                echo "You have got {$user_input}. Better luck next time! <br>"; 
                break;
            default:
                echo "Invalid Input! <br>";
        }
    }

    //Problem 2: Age Group
    //Write a PHP script that takes a person's age and prints out their age
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["age"])) {
        $user_input = $_POST["age"];
        
       if($user_input <= 12){
        echo "YOU ARE A Child";
       }
       elseif($user_input <= 13){
        echo "YOU ARE A Teenager";
       }
       elseif($user_input <= 64){
        echo "YOU ARE A Adult";
       }
       elseif($user_input >= 65 && $user_input < 130){
        echo "YOU ARE A Senior";
       }
       else{
        echo "Invalid Input!";
       }
    }

    // Problem 3: Maximum Value
    // Write a PHP script that finds the maximum value in an array of numbers.

   function maxi_mini_find() {
        echo "<br> Maximum value find from an array <br>";
        $myArray = [2, 3, 5, 7, 55, 9, 11, 13, 17];
        echo implode(' ', $myArray) . "<br>";

        $max_min = $myArray[0];
        $length = sizeof($myArray);

        for($i = 0; $i < $length; $i++){
            if($max_min < $myArray[$i]){
                $max_min = $myArray[$i];
            }
        }
        echo "Maximum value: " . $max_min . "<br>";
        for($i = 0; $i < $length; $i++){
            if($max_min > $myArray[$i]){
                $max_min = $myArray[$i];
            }
        }
        echo "Minimum value: " . $max_min . '<br>';
   };
   maxi_mini_find();

   //Problem 4: Factorial
    // Write a PHP script that calculates the factorial of an array of number using a for loop.
    function factorial_Sum_Check(){
        $myArray = [1, 2, 3, 4, 5, 6];
        echo implode(' - ', $myArray) . '<br>';
        $fact = 1;
        $sum = 0;
        $length = sizeof($myArray);

        $ini = 0;
        while($ini < $length){
            $fact *= $myArray[$ini];
            $ini++;
        }
        echo "Factorial: " . $fact . "<br>";
    
        $ini = 0;
        while($ini < $length){
            $sum += $myArray[$ini];
            $ini++;
        }
        echo "Sumation: " . $sum . "<br>";
    }
    factorial_Sum_Check();

    // Problem 5: Sum of Squares 
    // Write a PHP script that calculates the sum of the squares of all numbers in an array.
    function sumOfSquare($myArray){
        $sum = 0;
        $empty_Array = [];
        foreach($myArray as $single){
            $sum += $single * $single;
            array_push($empty_Array, $single * $single);
        }
        return array('sum' => $sum, 'square' => $empty_Array);
    }
    $simpleArray = [2, 4, 6, 8, 10];
    echo implode(' - ' , $simpleArray) . "<br>";
    $result = sumOfSquare($simpleArray);
    echo implode(' - ', $result['square']) . "<br>";
    echo "SUM OF SQUARE: " . $result['sum'] . "<br>";

    //pattern print
    for($i = 0; $i < 10; $i++){
        echo "<br>";
        for($j = 0; $j < $i; $j++){
            echo "* ";
        }
    }
    for($i = 10; $i > 0; $i--){
        echo "<br>";
        for($j = 0; $j < $i; $j++){
            echo "* ";
        }
    }
?>