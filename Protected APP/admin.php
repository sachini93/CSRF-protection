<?php

	session_start();
	
	if(!isset($_SESSION['uname'])){	
		echo "<script>location.href='index.php'</script>";
	}
	
?>

<html>
	<head>
		<title></title>
		
		<style type="text/css">
			table{
				margin-top:150px;
				border: 1px solid;
				background-color:#eee;
				width : 500px;
			}
			
			td{
				border:0px;
				padding:10px;
				height:50px;
			}
			
			th{
				border-bottom: 1px solid;
				background-color:#ddd;
				height:100px;
			}
			
			.button {
				background-color: #4CAF50; 
    				border: none;
    				color: white;
    				padding: 25px 64px;
    				text-align: center;
    				text-decoration: none;
    				display: inline-block;
    				font-size: 16px;
			}
			
			.button2 {
				background-color: #f44336; 
    				border: none;
    				color: white;
    				padding: 25px 64px;
    				text-align: center;
    				text-decoration: none;
    				display: inline-block;
    				font-size: 16px;
			}

			.h1{

    				text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
			}
		</style>
	
	</head>
	
	<body>
		<form method="post">
		
			<table align="center" cellpadding="2" cellspacing="2" border="0">
				<tr>
					<th colspan="2"><h1 align="center" class="h1"><?php echo 'Admin Panel'; ?></h1></th>
					
				</tr>
				
				<tr>
					<td align="center" ><a href="add_user.php" class="button">Add User</a></td>
					<td align="center" ><a href="logout.php" class="button2">Logout</a></td>
				</tr>
	

			</table>
		</form>
	</body>

</html>