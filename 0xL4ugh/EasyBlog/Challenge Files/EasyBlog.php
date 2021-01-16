<?php
if(isset($_COOKIE['user-info']) && $_COOKIE['user-info'] == '341707cac54e36138b9a8616a7654307'){
    echo "
    <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Did You Cry ?!</title>
        </head>
        <body style=\"background-color: black;\">  
            <center>
                <img src='mrMe.jpg' width=\"430\" height=\"109\">
                <br><br>
                
                <pre>
                    <h2 style=\"color: green;\">echo<b style=\"color: wheat;\">(</b>'Can You Be A <b style=\"color: red;\">1</b> Insted Of <b style=\"color: red;\">0</b><b style=\"color: wheat;\">)</b>;</h2>
                </pre>
                </center>
                <p style=\"color: silver;\">
                <b style=\"color: silver; font-size: 18px;\">Welcome To Our Blog....<br><br>
                Here We Post Comments, Files And Links. But Unfortunately Now We Have A Lot Of <i style=\"color: red;\">Vulnerabilities</i> Because Of Our Worthless Firewall<br><br>
                So Now They Think Our Web Site Is Secure, Can You Test It? .... But Remember Try Not Harm Our Site We Just Testing Your Skills,<br><br>
                So Don't Be A Script Kiddy And Test This Easy Challange With Scanners.
                    </b>
            </p>
            <hr><hr>
            <br>
            <center>
                <h3 style=\"color:crimson;\">Share Your Idea's With Us We'll Protect Your Privacy Like <b style=\"color:silver\">Facebook</b> ;)</h3>
                <br><br>
                </center>
                <form name='blog' id='blog' method=\"Post\" action=\"Preview.php\">
                    <label for='name' style=\"color: white;\"><b>Full Name:<b></label><br><br>
                    <input type=\"text\" name='name' id='name' required='yes'><br><br>
                    <label for='title' style=\"color: white;\"><b>Blog Title:<b></label><br><br>
                    <input type=\"text\" name='title' id='title' required='yes'><br><br>
                    <label for='mail' style=\"color: white;\">Email Address:</label><br><br>
                    <input type=\"email\" id='mail' name=\"mail\" required='yes'>
                    <h4 style=\"color: white;\">Gander:</h4>
                    <input type=\"radio\" id=\"gander\" name=\"gander\" value=\"male\">
                    <label for=\"male\" style=\"color: white;\">Male</label><br>
                    <input type=\"radio\" id=\"gander\" name=\"gander\" value=\"female\">
                    <label for=\"female\" style=\"color: white\">Female</label><br><br><br>
                    <label for='blog' style=\"color: white;\"><b>Your Blog:</b></label><br><br>
                    <input id='blogBody' name='blogBody' type=\"text\" style=\"height: 200px; width: 700px;\" required='yes'><br><br>
                    <input type=\"submit\" value=\"Post\" >
                    </form>
                    <br><br>
            </body>
    </html>
    
    
    
    ";
}else{
    header('Location: forbidden.html');
}
?>