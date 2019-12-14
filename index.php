<?php
    include 'mysqli_connect.php';
    include 'form_validation.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>The Challenger 346</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  username:<br>
  <input type="username" name="username" value=""><span class="error">* <?php echo $usersNameErr;?></span><br>
  email:<br>
  <input type="email" name="email" value=""><span class="error">* <?php echo $usersEmailErr;?></span><br>
  password:<br>
  <input type="password" name="password" value=""><span class="error">* <?php echo $usersPasswordErr;?></span><br>
  <input type="submit" value="Submit">
</form> 
<?php
echo $usersName;
echo "<br>";
echo $usersEmail;
echo "<br>";
echo $usersPassword;
echo "<br>";
?>
</body>
</html>
