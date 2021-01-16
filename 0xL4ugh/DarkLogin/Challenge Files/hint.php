<?php
$hint = 'https://mega.nz/file/itMzASyJ#H8K0GW6xUubyilyOrV4ULGyqHo-XVCWL6iYTbQI8AeA';
$get_headers = getallheaders();
$publicIP = file_get_contents("http://ipecho.net/plain");
if ( $_SERVER['REQUEST_METHOD']=='GET' OR $_SERVER['REQUEST_METHOD'] == 'POST' OR $_SERVER['REQUEST_METHOD'] == 'HEAD' OR $_SERVER['REQUEST_METHOD'] == 'DELETE') {
     
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        die( header( 'location: ./403.html' ) );

    }
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS' && $_SERVER['HTTP_REFERER'] == 'http://'.$publicIP.'/DarkLogin/profile.php' && isset($get_headers['auth']) && $get_headers['auth'] == '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918' && isset($_COOKIE['auth-token']) && $_COOKIE['auth-token'] == "65800d0145b6fef503018160ed67e6e3e501453730427b50ea12cfa521bf10f613b5d8f63dc902039618e9ac6535053cbd6fe9ee9177031fe65a4612e3aecd2e"){
        echo "<input type='hidden' value=' ".$hint." ' id=dev>";
    }
?>
