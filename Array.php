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

<?php

// Associative Array : Sytax array (element, element, ...);  (Associative Array ( key => Value))
// key accept only integer & string. 
// No Object No Arrays inside array
// the Key 

$nsour = array(
    'one'    =>  '1',
    'Tow'    =>  '2',
    'Three'  =>  '2',
    'Three'  =>  '3',
    'Threee'  =>  '3',
    10.5     =>  '10.5',
    false,
    true,
    array(1,2,3)
);

$nsour['four'] = '4';

echo "<ul> 1- This is Associative Array : ". "<br><br>" ;
foreach ($nsour as $string => $value){
echo "<li>" . $string . ' => ' . $value. "</li>";
}

echo "</ul>";
echo "<br>";

?>

<?php
$nsours = array(
    array('a','b','c'),
    array('d','e','f'),
    array('g','h',array('i','j','k')),
);
Print_r($nsours);
echo "<br><br><br>";

?>


<?php
if($_SERVER['HTTP_HOST'] == "www.google.com") {
  $_ENV['debug_mode'] = false;
} else if($_SERVER['HTTP_HOST'] == "dev.google.com") {
  $_ENV['debug_mode'] = true;
}

if($_ENV['debug_mode']) {
   echo "Debug Mode"; die;
}
?>


<form method="POST" action="action.php" enctype="multipart/form-data">
 <input type="text" name="first_name"/>
 <input type="text" name="last_name"/>
 <input type="file" name="file" id="file" />
 <input type="submit" value="Send"/>
</form> 

<?php
echo "<pre>"; print_r($_FILES); echo "</pre>"; //prints uploaded File's information

echo @$_POST['first_name'] || die('line 68 dose not work');
echo @$_POST['last_name'] || die('line 69 dose not work');

?>


</body>
</html>