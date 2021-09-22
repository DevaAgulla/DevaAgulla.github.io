<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
   $username = $_POST["username"];
   $myfile = fopen("msg.txt","a");
   fwrite($myfile,$username);
   fclose($myfile);
 
 
 }
?>
<!-- <html>
<img src="C:\xampp\htdocs\mytxt\backgroundpic.jpg" width="300px" height="300px">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];
  ?>" >
    <div > 
      <div>
        <input type="text" name="username" placeholder="username">
      </div>
      <div>
        <button type="submit">Send Message</button>
      <div>
    </div>
  </form>
</html> -->