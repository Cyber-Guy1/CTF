<?php
$flag = '0xL4ugh{N0_Syst3m_1s_S@f3_3v3n_Y0u}';
$getIP = file_get_contents('http://ipecho.net/plain');
$All_Headers = getallheaders();


if($_SERVER['REQUEST_METHOD'] == "OPTIONS" && isset($All_Headers['checkCss']) && $All_Headers['checkCss'] == 'bd9093b089a8adb0d86199f0d88ec0b217dd2d19b87a0101b65eed42cc7dad24c67ef9bb98ded518da9e5905496c38e4c76776eb3e2f3f1ef6a1e3f86bb04bbf' && isset($_COOKIE['user-info']) && $_COOKIE['user-info'] == '341707cac54e36138b9a8616a7654307' && $_SERVER['HTTP_REFERER'] == 'http://' . $getIP . '/.css.js'){
    if($_SERVER['REMOTE_ADDR'] != $getIP){
        echo "<input type='hidden' value=' ------ " . $flag ." -----'>";
    }
}else{
        header('Location: forbidden.html');

}

?>