<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<?php
include("connection.php");

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'psw');
$dob = filter_input(INPUT_POST, 'dob');
$name = filter_input(INPUT_POST, 'user_name');
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
$sql = "INSERT INTO usertechna (username,password,fullname,user_dateofbirth)
values ('$username',MD5('$password'),'$name','$dob')";
$sql2 = "SELECT concat(left(max(id),3),right(max(id),3) +1) from usertechna";
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
     echo '<h2>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</h2>';
     echo "<br><br><button style='font-size : 22px; text-align : center;float: left; margin-left: 20px'><a style='color:#333;' href = 'register.html' style='float:left'>Click To Go Back</a></button>";
}else {
if ($conn->query($sql)){
    
echo "You have been registered!";
echo "<br><br><button style='font-size : 22px; text-align : center;float: left;'><a style='color:#333;' href = 'user_login.html' style='float:left'>Click Here To Login</a></button>";
}
    
    else {
         $error = "REGISTER FAIL!";
        echo $error;
      }

}
?>
</body>
</html>