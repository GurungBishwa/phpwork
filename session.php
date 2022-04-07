<?php
/* 
so to overcome this, the concept of session has been established. session os such a superglobal variable it is stored until 
and unless it is destroyed.
*/

session_start();
echo $_SESSION['username'];

?>