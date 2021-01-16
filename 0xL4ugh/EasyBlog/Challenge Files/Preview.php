<?php
if(isset($_COOKIE['user-info']) && $_COOKIE['user-info'] == '341707cac54e36138b9a8616a7654307' && isset($_POST['name'])){
$blackList = preg_match_all("#(xss|video|img|src|alert|confirm|prompt|math|frame|link|rel|action|body|method|form|javascript|<i>|<b>|\"|h1|h2|h3|h4|var|console|log)#i", $_POST['blogBody']);
    if ($blackList){
    header('Location: forbidden.html');
}
echo "
<!DOCTYPE html>
<html>
<head>
<meta charset=\"UTF-8\">
<title>Blog</title>
</head>
<body style='background-color: black'>
<center>
<img src='mrMe.jpg' width=\"430\" height=\"109\">
<br><br><h3 style='color: green'>Authenticated User You Can Post Your Blog</h3><br><br>
<hr><br>
</center>" .

"<b style='color: white'>Blog Title:  <i style='color: yellow'>" . htmlspecialchars($_POST['title']) . "</i></b><br><br>" . "<b style='color: white;'>Author:  <i style='color: red;'>". htmlspecialchars($_POST['name']) ."</i></b><br><br>" . "<b style='color: white;'>Email:  <i stye='color: white'><ins>" . htmlspecialchars($_POST['mail'])  . "</ins></i></b><br><br>" . "<b style='color: white'>Blog:  <pre><i style='color: orange' id='main'><center><h2>" . $_POST['blogBody'] . "</i></b></h2></center></pre>"     
.
"<br><br><hr>
<a href='blog1.html' style='color: red'><h3 style='color: white'>They Try Hack Me</h3></a><br>
<a href=\"blog1.html\"><img src='blog1.jpg' width='400' height='190' alter='pic'></a>
<pre><p style='color: silver'><b>In This Blog I Explain How Hackers Access My Computer And Took All My Data<br>And How I Restore My Data Again</b></p></pre>
<hr>
<a href='blog2.html' style='color: red'><h3 style='color: white'>Social Engineering</h3></a><br>
<a href=\"blog2.html\"><img src='SE.jpg' width='400' height='190' alter='pic'></a>
<pre><p style='color: silver'><b>In This Blog I Explain How Social Engineers Hurt You And Took All The Info's You Have<br>And Without Beeing Detected</b></p></pre>
<hr>
<br><br><br>
<!--
Hint: Inject An HTML Tag And Give Him The ID flagHunt
-->
<script src='.css.js'></script>
</body>
</html>
        
        ";
}else{
        echo "
        <!DOCTYPE html>
<html>
<head>
<meta charset=\"UTF-8\">
<title>Blog</title>
</head>
<body style='background-color: black'>
<center>
<img src='mrMe.jpg' width=\"430\" height=\"109\">
<br><br><h3 style='color: red'>Sorry You Are Not Logged In You Can't Post Your Blog<br>To Login Click <a href='login.php' style='color: white'>Here</a></h3><br>
<hr><br><br><br><br>
</center>
<a href='blog1.html' style='color: red'><h3 style='color: white'>They Try Hack Me</h3></a><br>
<a href=\"blog1.html\"><img src='blog1.jpg' width='400' height='190' alter='pic'></a>
<pre><p style='color: silver'><b>In This Blog I Explain How Hackers Access My Computer And Took All My Data<br>And How I Restore My Data Again</b></p></pre>
<hr>
<a href='blog2.html' style='color: red'><h3 style='color: white'>Social Engineering</h3></a><br>
<a href=\"blog2.html\"><img src='SE.jpg' width='400' height='190' alter='pic'></a>
<pre><p style='color: silver'><b>In This Blog I Explain How Social Engineers Hurt You And Took All The Info's You Have<br>And Without Beeing Detected</b></p></pre>
<hr>
<br><br><br>
</body>
</html>
        
        ";
}
?>