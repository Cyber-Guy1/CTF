<?php
if(isset($_COOKIE['auth-token']) && $_COOKIE['auth-token'] == "65800d0145b6fef503018160ed67e6e3e501453730427b50ea12cfa521bf10f613b5d8f63dc902039618e9ac6535053cbd6fe9ee9177031fe65a4612e3aecd2e"){
    echo "<!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"UTF-8\">
            <title>Join!</title>
    <style>
            .hero {
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
            <body class=\"hero\">
                <center>
                    <br><br>
                    <h2 style='color: green'>Trusted, <b style='color: red'>Welcome To The Dark Side</b></h2><br><br>
                    <b style='color: red'><p style=\"color: chartreuse;\">To <del style=\"color: red\">Escape</del> There Is Only One Way!!</p></b>
                    <br><br>
                </center>
                <h2 style='color: white'> Wanna Join The Elite ? You <b style='color: red'>Have No Choice</b> Just Fill The Form And Go ! </h2>
                <form action='profile.php' name='expl' method='POST'>
                    <lable for='name'><b style='color: red'>Enter Your Name:- </b></lable><br><br>
                    <input type='text' name='name' id='name' placeholder='Full Name' required=\"required\"><br><br>
                    <lable for='phNum'><b style='color: red'>Enter Your Phone Number:- </b></lable><br><br>
                    <input type='tel' name='phNum' id='phNum' placeholder='Phone Number'  pattern=\"^[0-9]*$\" required=\"required\" maxlength='12'><br><br>
                    <lable for='mail'><b style='color: red'>Enter Your Email:- </b></lable><br><br>
                    <input type='email' name='mail' id='mail' placeholder='E-mail' required=\"required\"><br><br>
                    <input type='submit' value='Join!'>
                </form>
                </body>
        </html>";
    

}else{
    header('Location: 403.html');
    exit();
}
?>
