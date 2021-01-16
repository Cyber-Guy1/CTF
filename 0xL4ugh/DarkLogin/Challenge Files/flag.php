<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	echo "<!DOCTYPE html>";
	echo "<html>";
	echo "<head>";
	echo "<meta charset='UTF-8'>";
	echo "<title>Fake Fl@g</title>";
	echo "</head>";
	echo "<body style='background-color: black'>";
	echo "<center>";
	echo "<br><br><br>";
	echo "<img src='flag.gif'>";
	echo "<br><br>";
	echo "</center>";
	echo "<pre>";
	echo "<b style='color: red'>Some Instructions To Solve The Challenges: -</b>";
	echo "<ul>";
	echo "<li style='color: green'>Concentrate In Your Target</li>";
	echo "<li style='color: green'>Read The Source Code Carefully</li>";
	echo "<li style='color: green'>Check That Your Login Credentials Is Right</li>";
	echo "</ul>";
	echo "</pre>";
	echo "</body>";

}else{
	header('Location: 403.html');
}


?>
