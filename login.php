<?php
session_start();

include "koneksi.php";

$op = $_GET['op'];
if($op=="in")
{
	$username = $_POST['username'];
	$password = md5($_POST['password']);
    $cek = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    if(mysql_num_rows($cek)==1)
    {
        $c = mysql_fetch_array($cek);
        $_SESSION['username'] = $c['username'];
		$_SESSION['password'] = $c['password'];
        header("location:fitnes.php");
    }else 
	{
    header("location:index.php");
	}
}

?>
