<?php
//unset($_SESSION["id"]);
session_destroy();
// $id=$_GET[Id];
// if (isset($_COOKIE[$id])) {
// 	while (list($name,$value)=each($_COOKIE[$id])) {
// 		setcookie($id."[".$name."]","",time()-3600);
// 	}
// }
header("Location:catalog.php");
?>