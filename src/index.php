<!DOCTYPE html>
<html>
<title>Docker LEMP Stack</title>
<body style="text-align: center;">
  <?php

  $conn = new mysqli('mysql','root','supertrickypassword','demo');
  if ($conn->connect_errno) echo "Database connection failed."; else echo "mysqli is functioning properly. Enjoy!";
  phpinfo();
  
  ?>
</body>
</html>
