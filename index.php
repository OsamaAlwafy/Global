<?php
// GLOBALS : يستخدم للوصول الى المتعيرات العامة من اي مكان في البرنامج

$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

//  $_SERVER:



echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php

// $_REQUEST : method يستخدم للوصل الى البيانات التي في الفورم بغض النظر عن  نوع ال 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}


?>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
// $_POST: يستخدم للوصول الى البيانات الفورم المرسلة وتكون نوع الميثود المستخدمة بوست
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>



<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
// $_GET: يستخدم للوصول الى البيانات الفورم المرسلة وتكون نوع الميثود المستخدمة جيت 
/*
ويمكن استخدامها للحصول على البيانات المرسلة كبارامترات في الرابط
*/
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $name = $_GET['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>


<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Submit" />
</form>


<?php
if ($_FILES["file"] > 0)
  {
  echo "You have selected a file to upload";
  }
?>



<?php

//$_ENV is used to return the environment variables from the web server.
echo "my username is ".$_ENV['username'];
?>



<?php
session_start();
$_SESSION['w3resource']='The largest online tutorial';
echo $_SESSION['w3resource'];
?>


<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>



<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>


<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>

