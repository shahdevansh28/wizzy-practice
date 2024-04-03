<?php
//This is single line of comment.
echo "I am starting learing PHP <br/>";

/*This is multi-line comment for practice.
-
-
-
*/

//Variables
$num1 = 5;
$num2 = 10;
$sum = $num1 + $num2;
echo "$num1 + $num2 is $sum <br/>";

$name = "Devansh Shah";
echo "My name is " . $name . "<br/>";

//Conditional statements
echo "<br/>this conditional statement<br/>";
$myAge = 12;

if ($myAge < 16) {
    echo "I can not apply for vehical lisecnes.<br/>";
} else if ($myAge == 16 || $myAge < 18) {
    echo " I can apply for gear-less vehical lisecnes.<br/>";
} else {
    echo "I can apply for any type of vehicle lisecnes.<br/>";
}

echo "<br/>this is for loop <br/>";
//for loop

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo "*";
    }
    echo "<br/>";
}

echo "<br/>this is for-each loop <br/>";
$cars = array("BMW", "Audi", "Ferari");

foreach ($cars as $car) {
    echo "$car ";
}
echo "<br/><br/>";

//while loop
$itr = 0;

while ($itr < 3) {
    echo "This is while loop <br/>";
    $itr++;
}

//do while loop
echo "<br/>";
$it = 1;
do {
    echo "This is do-while loop<br/>";
} while ($it == 0);
echo "<br/>";

//fuction

function printFibonacci($num): int
{
    if ($num == 0)
        return 1;
    else if ($num == 1)
        return 1;
    else
        return printFibonacci($num - 1) + printFibonacci($num - 2);
}

$res = printFibonacci(5);
echo "Fibonacci sum using function till 5th term is " . $res . "<br/>";

//Arrays

echo "<br/> My favorite cricketer <br/>";
$cricketer = array("MSD", "Kohli", "Rohit");
array_push($cricketer, "Jadeja");

array_shift($cricketer);

array_pop($cricketer);

foreach ($cricketer as $arr) {
    echo "$arr <br/>";
}


echo "<br/>This is associative array <br/>";
$arr = array(4 => "four", 2 => "two", 3 => "three", 1 => "one", 5 => "five");
$arr += [6 => "six", 7 => "seven"];

foreach ($arr as $a => $b) {
    echo "$a : $b <br/>";
}

ksort($arr);
echo "<br/>This is ascending sort accoring to key - associative array <br/>";
foreach ($arr as $a => $b) {
    echo "$a : $b <br/>";
}

//JSON example:
$jsonConvertedArr = json_encode($arr);
echo "<br/>JSON Encoded values ". $jsonConvertedArr . "<br/>";

echo "<br/>Cookie Example: <br/>";

//Cookie example
$cookie_name = "Initial_Cookie";
$cookie_value = "I ate a cookie";
setcookie($cookie_name, $cookie_value);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP practice</title>
</head>

<body>
    <form action="index.php" method="POST">
        <button type="submit" name="submit">See a cookie</button>
        <button type="submit" name="delete">Delete Cookie</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        if(isset($_COOKIE["Initial_Cookie"])){
            echo $_COOKIE["Initial_Cookie"];
        }else{
            echo "Cookie is destroyed";
        }
    }
    if(isset($_POST["delete"])){
        setcookie("Initial_Cookie","");
    }
    ?>
</body>
</html>