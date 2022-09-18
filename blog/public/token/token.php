<?php
session_start();
class token
{
	public static function csrf()
	{
		$token=md5(uniqid());
		$_SESSION['token']=$token;
		echo "<input type='hidden' name=
		'token' value='".$token."'/>";
	}

	public static function tokenInput($token)
	{
       return isset($_SESSION['token'])&& $_SESSION['token']==$token;
	}

}
?>