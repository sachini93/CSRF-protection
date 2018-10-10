<!doctype html>
<html>
<head>
      <title>Tutorialspoint.com</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href="login.css" 
            
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';

            
            function generate_token()
            {
            //generate CSRF token and return it
                return sha1(base64_encode(openssl_random_pseudo_bytes(30)));
            }
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == '123') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
                  echo 'You have entered valid use name and password';

                  //set cookie
                  session_set_cookie_params(300);
                  session_start();
                  session_regenerate_id();
		  
		          setcookie('session_cookie', session_id(), time() + 300, '/');
                  //generate CSRF Token
			      $Token = generate_token();
                  //set CSRF cookie with secure flag set
                  setcookie('csrf_Token', $Token, time() + 300, '/','www.testmail.com.com',true);
			      //rdirect to profile.php
			      header("Location:profile.php");
   		          exit;		
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = admin" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password= 123" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>