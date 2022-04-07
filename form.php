<?php
if($_POST){
    //code...
    echo"<pre>";
    //print_r($_POST);
    echo"Name is ".$_POST["name"]."<br>";
    echo"My Address is ".$_POST["address"]."<br>";
    echo"My Phone Number is ".$_POST["phone"]."<br>";
    echo "My Gender is ".$_POST['gen']."<br>";
    echo "My country is ".$_POST['country']."<br>";
    
    echo "Hobbies are:";
    $hobbies=$_POST["hobby"];
    foreach( $hobbies as $key => $value)
{
    echo $value.",";
}
    die;
}
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <form action=" " method="post">
 <p>Name: <input type="Name" name="name"></P>
 <p>Address: <input type="Address" name="address"></P>

<p>Phone: <input type="number" name="phone"></P>
<p>Age:<input type="number"name="age"></p>
<p>Gender:<input type="radio" name="gen"value="male">male
        <input type="radio"name="gen"value="female">female
    </p>
<p>country: <select name="country">
    <option value="Nepal">Nepal</option>
    <option value="Japan">Japan</option>
</select></p>

<p>Hobbbies:<input type="checkbox"name="hobby[]"value="football">Football
<input type="checkbox"name="hobby[]"value="Vollyball">Volleyball
<input type="checkbox"name="hobby[]"value="Watching Tv">Watching Tv
</p>
<p>Bio: <textarea name="bio"></textarea></p>
<input type="Submit">
</form>
 </body>
 </html>
