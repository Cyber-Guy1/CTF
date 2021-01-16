<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Login</title>";
echo "</head>";
echo "<body style='background-color: black'>";
echo "<center>";
echo "<br><br>";
echo "<img src='login.jpg' width=\"430\" height=\"109\">";
echo "<br><br><br>";
echo "<h3 style='color: green'>Login Panel</h3>";
echo "<br><br>";
echo "<form method='POST' action='index.php' id='login' name='login'>";
echo "<label for='user' style='color: red'><b>User Name:</b></lable><br><br>";
echo "<input type='text' name='user' id='user' required='yes'>";
echo "<br><br>";
echo "<label for='user' style='color: red'><b>Password:</b></lable><br><br>";
echo "<input type='password' name='password' id='password' required='yes'><br><br>";
echo "<input type='submit' value='login'>";
echo "</form>";
echo "<center>";
echo "<!-- To Post Blogs You Should Login With The Default Credentials-->";
echo "<!-- 
user = admin
pass = admin
-->";
echo "</body>";
echo "</html>";
if (isset($_POST['user']) && isset($_POST['password']) && $_POST['user'] == 'admin' && $_POST['password'] == 'admin'){
    setcookie('user-info', '341707cac54e36138b9a8616a7654307', time() + (86400 * 30), "/");
    session_start();
    $_SESSION['user'] = 'admin';
    $_SESSION['pass'] = 'admin';
    header('Location: EasyBlog.php');
}else{
    if(isset($_POST['user']) && isset($_POST['password']) && $_POST['user'] != 'admin' && $_POST['password'] != 'admin'){
        echo"<br><br>User Name Or Password Is Incorrect";
    }
}
?>
