<!-- 
<?php
$a=60;
$b=12;
$c=$a/$b;
echo"c:$c";
echo"<br>";
$d="100"+36.25+true;
echo"d:$d";
echo"<br>";
?> 
 -->
 <!-- 
 <?php
function add($a,$b)
{
    $c=$a+$b;
    return $c;
}
$z=add(1,2);
echo "$z";
?>
  -->

 <!--
 <?php
//an array stores multiple data in a single variable.


$cars=array("volvo","BMW","Toyota");
echo "I like".$cars[0].",".$cars[1]."and".$cars[2];

/*an array can hold many variables under a single name and we can access the values by referring to an index number.
creating array in php:
In php the array()function is used to create an array.
There are 3 types of array, 
a) Indexed Array          - Array with numeric index.
b) Associative Array      - Array with named keys.
c) Multidimensional Array - Array containing more than one array.
*/
?>
-->


<!-- 
<?php
$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="Toyota";

$arrlength=count($cars);   //here count function is used to return the length (the number of the elements)of an array.
for($x=0; $x <$arrlength; $x++)
{
    echo "$cars[$x]";
    echo "<br>";
}
?>
 -->

 <?php
 /*Associative Array are arrays that use named keys that you assign to them.
 creating an Associative Array. */
 $age=array("peter"=> "35", "Ben"=> "37", "Joe"=>"43");
 /* OR
 $age['peter']="35";
  $age['peter']="35";
 $age['peter']="35";
*/
echo "peter is".$age['peter']."years old";
/* OR
foreach ($age as $x=> $x_value)     
{
    echo "key=".$x."values=".$x_value;
    echo "<br>";
}
*/
?>


























