<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
   $username = $_POST["username"];
   $myfile = fopen("msg.txt","a");
   fwrite($myfile,$username);
   fclose($myfile);
 
 
 }
?>
