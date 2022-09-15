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

    <!--1 create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.
     There will be no dash (-) at the start and end position. -->
    <?Php
    echo "---------------- Task 1 -----------------<br>";

    for ($i = 1; $i <= 10; $i++) {
        if ($i < 10) {
            echo "$i-";
        } else {
            echo "$i" . "\n";
        }
    }
    echo "<br><br>";


    
    ?>









    <!--2 create a script using a for loop to add all the intergers 
    between 0 and 30 and display te total. -->
    <?Php
    echo "---------------- Task 2 -----------------<br>";
    $first_value = 0;
    for ($i = 1; $i <= 30; $i++) {
        $first_value += $i;
    }
    echo $first_value . " , ";
    echo "<br><br>";
    ?>








    <!--3 create a script to generate the following pattern,
     using the nested for loop. -->
    <?Php
    echo "---------------- Task 3 -----------------<br>";

    function print_pattern($num)
    {
        for ($i = 0; $i < $num; $i++) {
            for ($k = $num; $k > $i + 1; $k--) {
                echo "A" . "\n";
            }
            $array3 = ["A", "B", "C", "D", "E"];
            for ($j = 0; $j <= $i; $j++) {
                echo $array3[$i] . "\n";
            }
            echo "<br>";
        }
    }
    $num = 5;
    print_pattern($num);


    echo "<br>";
    ?>








    <!--4 create a script to generate the following pattern,
     using the nested for loop. -->
    <?Php
    echo "---------------- Task 4 -----------------<br>";

    function print_patterns($num)
    {
        for ($i = 0; $i < $num; $i++) {
            for ($k = $num; $k > $i + 1; $k--) {
                echo "1" . "\n";
            }
            $array3 = ["1", "2", "3", "4", "5"];
            for ($j = 0; $j <= $i; $j++) {
                echo $array3[$i] . "\n";
            }
            echo "<br>";
        }
    }
    $num = 5;
    print_patterns($num);


    echo "<br>";
    ?>






    <!--5 create a script to generate the following pattern,
     using the nested for loop. -->
    <?Php
    echo "---------------- Task 5 -----------------<br>";



    echo "<br>";
    ?>





    <!--6 write a program to calculate and print the factorial of
     a number using a for loop. the factorial of a number is the 
     product of all integers up to and including that number. -->
    <?Php
    echo "---------------- Task 6 -----------------<br>";

    $n = 5;
    $x = 1;
    for ($i = 1; $i <= $n - 1; $i++) {
        $x *= ($i + 1);
    }
    echo  $x;

    echo "<br>";
    ?>




    <!--7 write a program to calculate and print the fibonacci sequence using a for loop.
    Fibonacci is a series of numbers where a number is the sum of previous two numbers.
    Starting with 0 and 1, the sequence goes 0,1,1,2,3,5,8,13,21, and so on. -->
    <?Php
    echo "---------------- Task 7 -----------------<br>";



    echo "<br>";
    ?>




    <!--8 write a program which will count the "c" characters in the text
     "Orange Coding Academy ". -->
    <?Php
    echo "---------------- Task 8 -----------------<br>";


    $text = "Orange Coding Academy";
    $search_char = "c";
    $count = "0";
    for ($x = "0"; $x < strlen($text); $x++) {
        if (substr($text, $x, 1) == $search_char) {
            $count = $count + 1;
        }
    }
    echo $count . "\n";
    echo "<br>";
    ?>




    <!--9 write a php script that creates the following table using for 
    loops. Andd cellpadding = "3px" and cell spacing = "0px" to the table tag. -->



    <table align="left" border="1" cellpadding="3" cellspacing="0" style="padding:5px;">

        <?php

        echo "---------------- Task 9 -----------------<br><br>";
        for ($i = 1; $i <= 6; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td> $i * $j = " . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        echo "<br>";
        ?>
    </table>
    <br>
    <!--10 write a php Program that repeats integers from 1 to 50 .
    for multiples of three, print "Fizz" instead of the number, and for 
    multiples of five print "Buzz". For numbers that are multiples of 
    both three and five, print "FizzBuzz" -->


    <?php

    echo "---------------- Task 10 -----------------<br><br>";

    // for ($i = 1; $i <= 50; $i++) {
    //     if ($i % 2 == 0 && $i % 5 == 0) {
    //         echo $i . " FizzBuzz" . "\n";
    //     } else if ($i % 2 == 0) {
    //         echo $i . " Fizz" . "\n";
    //     } else if ($i % 5 == 0) {
    //         echo $i . " Buzz" . "\n";
    //     } else {
    //         echo $i . "\n";
    //     }
    // }
    echo "<br><br>";


    ?>


    <!--11- Write a php program to generate and display the first n lines of a floyd triangle  -->

    <?php

    echo "---------------- Task 11 -----------------<br><br>";

    // $n = 5;
    // echo "n = " . $n . "\n";
    // $count = 1;
    // for ($i = $n; $i > 0; $i--) {
    //     for ($j = $i; $j < $n + 1; $j++) {
    //         printf("%4s", $count);
    //         $count++;
    //     }
    //     echo "\n";
    // }

    echo "<br><br>";
    ?>

    <br>

    <!--11- Write a php program to print the folloing pattern  -->

    <?php

    echo "---------------- Task 12 -----------------<br><br>";




    ?>
</body>

</html>