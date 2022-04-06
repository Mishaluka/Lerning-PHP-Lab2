<?php
/*
Q1: Write a PHP program that create two variables say x and y 
and print out the results of the main arithmetic operation to the browser. 
*/

$x = 10;
$y = 7;
echo "$x + $y = " .($x + $y) ."<br>"; 
echo "$x - $y = " .($x - $y) ."<br>";
echo "$x * $y = " .($x * $y) ."<br>";
echo "$x / $y = " .($x / $y) ."<br>";
echo "$x % $y = " .($x % $y) ."<br>";
echo "<br>";

/*
Q2: Write a PHP program that demonstrates type casting by performing the following tasks:
• Define a variable x and assign its value to 10.
• Type cast x to a float type and store the result in variable y.
• Print values and types of x and y to the browser.
• Type cast x to a bool type and store the result in z.
• Print value and types of x and z to the browser.
*/

$x = 10;
$y = (float) $x;
var_dump ($x);
var_dump ($y);
$z =(bool) $x;
var_dump ($x);
var_dump ($z);
echo "<br>";

/*
Q3: Write a PHP program that will do the following:
Define a variable x and assign its value to 5; and then test If x is even, print to the browser “x is even number”,
otherwise, print “x is odd number”. Try different values for x to test your code.
*/
$x = 5;
if ($x / 2) echo "x is even number";
else "x is odd number";
echo "<br>";
echo "<br>";
/*
Q4: Write a PHP program that will test whether an integer variable score contains a valid test score.
Valid test scores are in the range 0 to 100. Test your code by assigning different values to variable score.
*/

$num = (int) 56;
if ($num > 0 && 100 ) {
    echo "This valid test";
    }
else echo "This is NOT valid test";
echo "<br>";
echo "<br>";
/*
Q5: Write a switch statement to convert a letter grade into an equivalent numeric value on a four-point scale. 
Set the value of the variable gradeValue to 4.0 for an A, 3.0 for a B, 2.0 for a C, 1.0 for a D, and 0.0 for an F. For
any other letter, set the value to 0.0 and display an error message to the browser. 
For all valid letter grades, print the letter grade and the equivalent numeric value using gradeValue variable.
*/

$x = 'B';
$gradeValue;
switch ($x)
{
    case "A":
        $gradeValue = 4.0;
        break;
    case "B":
        $gradeValue = 3.0;
        break;
    case "C":
        $gradeValue = 2.0;
        break;
    case "D":
        $gradeValue = 1.0;
        break;
    case "F":
        $gradeValue = 0.0;
        break;
    default: 
        echo "No Grade for it";
}
echo $gradeValue;
?>