<?php
if(isset($_POST['mail']) && isset($_POST['pass']) && $_POST['mail'] == "admin@DarkLogin.death" && $_POST['pass'] == "W3@llL1k3D@rkn3ss"){
	session_start();
	$_SESSION['mail'] = 'admin@DarkLogin.death';
	$_SESSION['pass'] = 'W3@llL1k3D@rkn3ss';
	setcookie('auth-token', '65800d0145b6fef503018160ed67e6e3e501453730427b50ea12cfa521bf10f613b5d8f63dc902039618e9ac6535053cbd6fe9ee9177031fe65a4612e3aecd2e', time() + (86400 * 30), '/');
	header('Location: join.php');
	exit();

}else{
	header('Location: uns3cureLogin.html');
}
?>
