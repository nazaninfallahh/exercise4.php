<?php
/*
1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
*/

$courses = array("PHP","HTML","JavaScript","CMS","Project");
$num_courses = count($courses);
for ($i=0; $i<$num_courses; $i++)
{
    echo "  <li>{$courses[$i]}</li>\n";
}
echo "<br>";

/* 2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
*/

$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[1]); 
$num_courses1 = count($courses1);
for ($i-0; $i<$num_courses1+1; $i++)
{
    echo "$courses1[$i]\n";
}
echo "<br>";

/* 
3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
*/

$courses3=array(1=>"PHP", 2 => "HTML", 3 => "JavaScript", 4 => "CMS", 5 => "Project");

echo "a) ascending order sort by value <br>";
asort($courses3);
foreach ($courses3 as $c => $c_value)
{
   
    echo  $c  . ":". $c_value . ".<br>";
}

echo "b) ascending order sort by Key <br>";
ksort($courses3);
foreach ($courses3 as $c => $c_value)
{
   
    echo  $c  . ":". $c_value . ".<br>";
}

echo "c) descending order sort by Value <br>";
arsort($courses3);
foreach ($courses3 as $c => $c_value)
{
   
    echo  $c  . ":". $c_value . ".<br>";
}

echo "d) descending order sort by Key <br>";
krsort($courses3);
foreach ($courses3 as $c => $c_value)
{
   
    echo  $c  . ":". $c_value . ".<br>";
}

/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/
$courses4=array("php", "html", "javascript", "cms", "project");

echo "Using strtoupper to make everything uppercase <br>";
$total_num= count($courses4);
for ($i=0;$i<$total_num; $i++)
{
    echo strtoupper("$courses4[$i]<br>");
}

// 5. Create an array that holds your favorite colors and print them. (indexed arrays)

$colors=array("white","yellow","black", "grey");
echo "these are my favorite colors: <br> "; 
$color_count=count($colors);
for ($i=0; $i<$color_count; $i++)
{
    echo "$colors[$i] <br>";
}

// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)

echo "<br>";
$colors=array("white" =>"#FFFFFF" ,"yellow" => "#FFFF00" ,"black" => "#000000", "grey"=> "#808080" );
echo "My favorite colors are: <br> ";
$color_count=count($colors);
foreach ($colors as $d  => $d_value)
{
    echo  $d  . " Hexadecimal Equivalents is: ". $d_value . ".<br>";
}

// 7. Include 12 months in an array named month and print them using loop statement.

echo "<br>";
echo "printing them using loop statement <br>";
$month= array("January","February","March","April","May","June","July","August","September","October","November","December");
$month_num = count($month);
for ($i=0; $i<$month_num; $i++)
{
    echo "<br> $month[$i] <br>";
}

/*
 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/

echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
///The explode() function breaks a string into an array.
//It splits into array

$temp_array = explode(',', $month_temp);
$tot_temp = 0;

// What is count?
//The count() function returns the number of elements in an array.

$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
//The sort() function sorts an indexed array in ascending order.

sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
//
  
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>
