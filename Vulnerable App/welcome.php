<?php

$uname="admin";
$pwd="admin";

session_start();

if(isset($_SESSION['uname'])){
		if($_SESSION['uname']==$uname){
		echo "<script>location.href='admin.php'</script>";
	}else{
		
	}
}else{
	if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
		$_SESSION['uname']=$uname;
		
		echo "<script>location.href='welcome.php'</script>";
	}else{
		echo "<script>alert('Username or Password Incorrect!')</script>";
		echo "<script>location.href='index.php'</script>";
	}
}

?>