<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.php">
    </link>
</head>

<body>
    <!-- 1.	Write a script to generate the following paragraph  -->
    <?php
    echo "----------------Task 1 -------------------<br>";
    echo "------------------------------------------<br><br>";
    $color = array('white', 'green', 'red', 'blue', 'black');

    echo "The memory of that scene for me is like a frame of 
film forever frozen at that moment: the <b> $color[2] </b> carpet,
 the <b> $color[1] </b> lawn, the <b> $color[0] </b> house, the leaden sky.
 The new president and his first lady. - Richard M. Nixon"
        . "<br><br>";
    ?>








    <!-- 2. Write a PHP script that will display the colors as unordered list  -->
    <?php
    echo "----------------Task 2 -------------------<br>";
    echo "------------------------------------------<br><br>";
    $color = array('white', 'green', 'red');
    foreach ($color as $c) {
        echo "$c, ";
    }
    sort($color);
    echo "<ul>";
    foreach ($color as $y) {
        echo "<li>$y</li>";
    }
    echo "</ul>";
    echo "<br>"
    ?>







    <!--3. Create a PHP script to displays the capital and country name from 
    the above array $cities. Sort the list by the capital of the country.  -->

    <?php
    echo "----------------Task 3 -------------------<br>";
    echo "------------------------------------------<br><br>";
    $varCountry = array(
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Netherlands" => "Amsterdam",
    );

    asort($varCountry);
    foreach ($varCountry as $country => $capital) {
        echo "The capital of $country is $capital" . "<br><br>";
    }
    echo "<br>"
    ?>







    <!--4. Write a PHP script to display the first element of the above array.  -->
    <?php
    echo "----------------Task 4 -------------------<br>";
    echo "------------------------------------------<br><br>";
    $color = array('white',  'green', 'red');
    echo reset($color) . "<br>";
    echo "<br>"
    ?>








    <!-- 5.	Write a PHP script that inserts a specific new item in an array 
    in any position.  -->
    <?php
    echo "----------------Task 5 -------------------<br>";
    echo "------------------------------------------<br><br>";
    $original = array(
        '1',
        '2',
        '3',
        '4',
        '5'
    );

    echo 'Original array : ' . "<br>";
    foreach ($original as $x) {
        echo "$x ";
    }
    $inserted = '$';
    array_splice($original, 3, 0, $inserted);
    echo " <br> After inserting '$' the array is : " . "<br>";
    foreach ($original as $x) {
        echo "$x ";
    }

    echo "<br>";
    ?>






    <!-- 6.	Write a PHP script to sort the following associative array 
    depending on the key value [asc]  -->
    <?Php
    echo "----------------Task 6 -------------------<br>";
    echo "------------------------------------------<br><br>";

    $fruits = array(
        "d" => "lemon",
        "a" => "orange",
        "b" => "banana",
        "c" => "apple"
    );
    echo "<br>";
    // ---------- View 1 -----------
    print_r($fruits);
    echo "<br><br>";

    // ---------- View 2 -----------
    foreach ($fruits as $value) {
        echo $value . "<br>";
    };
    echo "<br>";

    // ---------- View 3 -----------
    foreach ($fruits as $key => $value) {
        echo $key . "=" . $value . "<br>";
    };
    echo "<br>";
    ?>






    <!-- 7.	Write a PHP script to calculate and display the average temperature
     for the recorded reads, also the script should display the list of the
      five lowest and the five highest temperatures   -->
    <?Php
    echo "----------------Task 7 -------------------<br>";
    echo "------------------------------------------<br><br>";
    $avarageCalc = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
    $temp = explode(',', $avarageCalc);
    $tot_temp = 0;
    $temp_length = count($temp);

    foreach ($temp as $temps) {
        $tot_temp += $temps;
    }

    $avg_high = $tot_temp / $temp_length;
    echo "The Avarage is : " . round($avg_high, 2) . '';
    echo "<br>";

    echo " List of tree lowest temperatures : ";
    for ($i = 0; $i < 3; $i++) {
        echo $temp[$i] . ",";
    }
    echo "<br>";
    echo " List of tree highest  temperatures : ";
    for ($i = ($temp_length - 3); $i < ($temp_length); $i++) {
        echo $temp[$i] . ",";
    }

    echo "<br><br>";
    ?>








    <!-- 8.	Write a PHP program to merge the following two arrays.   -->
    <?Php
    echo "----------------Task 8 -------------------<br>";
    echo "------------------------------------------<br><br>";
    echo '<pre>';
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    print_r($result);
    echo '</pre>';

    echo "<br><br>";
    ?>








    <!-- 9.	Write a PHP function to change the following array's and convert all the strings to upper case.   -->
    <?Php
    echo "----------------Task 9 -------------------<br>"; // مراجعه
    echo "------------------------------------------<br><br>"; // مراجعه

    $Color = array('Blue', 'GREEN', 'Red');

    function lowercase($input)
    {
        $all_Color = array();

        foreach ($input as $value) {

            $all_Color[$value] = (strtolower($value));
        }
        return $all_Color;
    }



    echo "<br><br>";
    echo 'Values are in lower case.';

    $myColor = lowercase($Color, CASE_LOWER);
    echo '<pre>';
    print_r($myColor);
    echo '</pre>';

    echo "<br><br>";
    ?>








    <!-- 10.	Write a PHP function to change the following arrays and convert all the strings to lower case.   -->
    <?Php
    echo "----------------Task 10 ------------------<br>";
    echo "-----------------------------------------<br><br>";

    $Color = array('Blue', 'GREEN', 'red');

    function changeToUpper($input)
    {
        foreach ($input as $key => $value) {

            $colorsUpper[$key] = (strtolower($value));
        }
        return $colorsUpper;
    }




    echo "<br><br>";
    echo 'Values are in upper case.';
    $myColor = changeToUpper($Color);

    echo '<pre>';
    print_r($myColor);
    echo '</pre>';


    echo "<br><br>";
    ?>








    <!-- 11. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.  -->
    <?Php
    echo "----------------Task 11 ------------------<br>";
    echo "-----------------------------------------<br><br>";

    echo implode(",", range(200, 250, 4)) . "\n";

    echo "<br><br>";
    ?>








    <!-- 12.Write a PHP script to get the shortest/longest string length from an array.   -->
    <?Php
    echo "----------------Task 12 ------------------<br>";
    echo "-----------------------------------------<br><br>";

    $my_array = array("Abdulla", "Tariq", "Alqaseem", "nsour", "by", "j");

    $new_array = array_map('strlen', $my_array);

    echo "The shortest array length is " . min($new_array) .
        ". The longest array length is " . max($new_array) . '.';



    echo "<br><br>";
    ?>


    <?php

    $array2= array("Abdulla", "Tariq", "AlQassem", "nsour", "by", "A");

    $test = 0;
    $longer = [];
    $shorter = [];
    $lenshort = (strlen($array2[0]));

    for ($i = 0; $i < count($array2); $i++) {
        // the longer word 
        if (strlen($array2[$i]) > $test) 
        {
            $longer = $array2[$i];
            $test = strlen($array2[$i]);
        }

        if (strlen($array2[$i]) < $lenshort)
        {
            $shorter = $array2[$i];
            $lenshort = strlen($array2[$i]);
        }
    }
    // echo $lenshort;
    echo '<br>';
    echo $shorter;
    echo '<br>';
    echo $test;
    echo '<br>';
    print_r($longer);

    echo "<br><br>";
    ?>

    

    <!-- 13.Write a PHP script to generate unique random 10 numbers within a specific range.   -->
    <?Php
    echo "----------------Task 13 ------------------<br>";
    echo "-----------------------------------------<br><br>";

    $n = range(11, 20);
    shuffle($n);
    for ($x = 1; $x < 10; $x++) {
        $r = $n[$x];
        echo $r . ' , ';
    }


    echo "<br><br>";
    ?>








    <!-- 14.Write a PHP script that returns the lowest integer in the array  that is not 0.   -->
    <?Php
    echo "----------------Task 14 ------------------<br>";
    echo "-----------------------------------------<br><br>";

    function min_values_not_zero(array $values)
    {
        return min(array_diff(array_map('intval', $values), array(0)));
    }
    print_r(min_values_not_zero(array(2, 0, 10, -12, 6)) . "\n");

    ?>
    <?php  ?>

</body>

</html>