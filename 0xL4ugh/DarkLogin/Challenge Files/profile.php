<?php
if($_POST['name'] == TRUE && $_POST['phNum'] == TRUE && $_POST['mail'] == TRUE){
    $blackList = preg_match_all('#(confirm|alert|prompt|src|var|h1|img|xss|h2|h3|h4|<p>|<b>|<i>|button|\"|form|javascript|action|input|body|formaction|math|method|link|rel|iframe|\#|/\\s/)#i', $_POST['name']);
    $specialHint = 'hint';
    if ($blackList OR preg_match('/\s/',$_POST['name'])){
       header("Location: hackDetected.html");

    }else{
        $flag = "0xL4ugh{0ur_L1f3_1s_1llusion_Fr13nd!!}"; 
        $name = $_POST['name'];
        $phone = $_POST['phNum'];
        $email = $_POST['mail'];

	if(isset($_COOKIE['auth-token']) && $_COOKIE['auth-token'] == "65800d0145b6fef503018160ed67e6e3e501453730427b50ea12cfa521bf10f613b5d8f63dc902039618e9ac6535053cbd6fe9ee9177031fe65a4612e3aecd2e"){
       echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Profile</title>
        <style>
            .def {
        background-color: #000000;
        background-attachment: fixed;
        background-position: center;
        cursor:progress;
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
        }
        </style>
        </head>
        <body class=\"def\">
             <link rel=\"icon\" href=\"shark.jpeg\" type=\"image/gif\" sizes=\"16x16\"> 
<!--

If You Fail To Reach Your Target Also Try To Search
----- { And Never Give Up } ------

-->
<center>
                       <h1 style='color: green'>Welcome To The <ins>Pyramid</ins></h1>
                        <h2 style='color: white'>All Welcome <b id='main' style='color: red'><del>". $name ."</b></del><b style='color: red'> </b>To Our Forum Today !</h2>
                        <img style=\"border-radius: 50%; opacity: 0.5;\" src=\"./shark.jpeg\" width=\"400\" height=\"250\">
                        </center>
<center>
                       <p id=\"targetR\" style=\"color: red\"><br><br>You Have A Message From Us:- <br></p>
                       <div id=\"targetResponse\">
                       </div>
                        </center>
                        <h1 style='color: red'>{ Pro<b style='color: white'>file</b> }</h1>
                        <b style='color: red'> -------------------------- </b>
                        <h3 style='color: green'> Name:-<pre style='color: white'></h3></pre>
                        "."<h3 style='color: red'>". htmlspecialchars($name) . "</h3>"."
                        <b style='color: red'> -------------------------- </b>\";
                        <h3 style='color: green'> Phone:- <pre style='color: white'></h3></pre>
                        "."<h3 style='color: white'>". htmlspecialchars($phone) . "</h3> 
                        <b style='color: red'> -------------------------- </b>\";
                        <h3 style='color: green'> Email:- <pre style='color: white'></h3></pre>"."<h3 style='color: white;'>".htmlspecialchars($email)."</h3>
                        <b style='color: red'> -------------------------- </b>
                        <center>
                        </center>
			<script src='.xss.js'></script>
                        </body>
<!--
I Like The 
id 
When It's Value Is 
flag 
So Much ;)
-->
<!--
Hint -> Try To Access Element main An Inject HTML On It  ;)
-->
                        </html>
";
}else{
	header('Location: 403.html');
	exit();
}
}   
}
if ($_POST['name'] != TRUE or $_POST['phNum'] != TRUE or $_POST['mail'] != TRUE){
    echo "<center><body style='background-color: black'><br><br><h1><b style='color: red'>Do <i style='color: green'>NOT</i> Try To Escabe From Us !</b></h1><br><br></body></center>";
}
?>
