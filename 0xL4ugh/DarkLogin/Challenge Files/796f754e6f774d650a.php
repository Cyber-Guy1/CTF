<?php
if(isset($_COOKIE['auth-token']) && $_COOKIE['auth-token'] == "65800d0145b6fef503018160ed67e6e3e501453730427b50ea12cfa521bf10f613b5d8f63dc902039618e9ac6535053cbd6fe9ee9177031fe65a4612e3aecd2e"){
        $secret = "Your Password Is :- dac64421e6d507ef3817b661943ad3b3";
        $publicIP = file_get_contents("http://ipecho.net/plain");
        if ($_SERVER['HTTP_REFERER'] == "http://" . $publicIP . "/admin" OR $_SERVER['HTTP_REFERER'] == "http://". $publicIP ."/admin/" OR $_SERVER['REQUEST_METHOD'] == "POST" OR $_GET['id'] == "false" OR $_GET['id'] == "False"){
                echo $secret;
        }else{
                echo "<!DOCTYPE HTML PUBLIC '-//IETF//DTD HTML 2.0//EN'>";
                echo "<html><head>";
                echo "<title>403 Forbidden</title>";
                echo "</head><body>";
                echo "<h1>Forbidden</h1>";
                echo "<p>You don't have permission to access this resource.</p>";
                echo "<hr>";
                echo "<address>Apache/2.4.38 (Debian) Server at 20.37.49.16 Port 80</address>";
                echo "<!-- I Think You Should Come From /admin To Access Here-->";
                echo "<!-- I Also Like The Parameters Specially If Its Value Was false-->";
                echo "</body></html>";
}       
}else{
        header('Location: uns3cureLogin.html');
        exit();
}
?>
