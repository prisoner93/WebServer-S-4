<!DOCTYPE html>
<html>
<head>
<title>Signin</title>
<link href="css/stylelog.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="App Sign in Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<!--link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
	<?php 
		$unamevalue = "User name";
		$unamestr = "User name";
		$fromurl = $_GET['path'];
		//echo $_SERVER["PHP_SELF"];
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["username"])) 
			{
    			$nameErr = "Name is required";
  			} else if(strcmp($_POST["username"],"User name")!=0)
			{
				$username = $_POST["username"];
				$userid = (int)$username;
				$dbhost = '192.168.1.116:3306';
				$dbuser = 'Website';
				$dbpass = 'bananapi';
				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				if(! $conn )
				{
				  die('Could not connect: ' . mysql_error());
				}
				mysql_select_db( 'WEBSITE' );
				$sql = "select * from users where user_id={$userid}";
				//$sql = "select * from users where user_id=1";
				$retval = mysql_query( $sql, $conn );
				if(! $retval)
				{
				 die('Could not get data: ' . mysql_error());
				}
				$row = mysql_fetch_array($retval, MYSQL_ASSOC);
				echo $row['user_id'];
				if(strcmp($row['user_id'],(string)$userid)==0)
				{
					 setcookie('userid',$username,time()+3600);
					 $url = 'http://'.$_SERVER['HTTP_HOST'].$fromurl;
					 $conn = null;
					 //$url = "http://localhost/index.html"; 
					 echo $url; 
					 echo "<script language='javascript' type='text/javascript'>";  
					 echo " window.location.href='$url'";  
					 echo " </script>";
				}
				else
				{
					$unamevalue = "The login and/or password are not correct!";
					$conn = null;
					//echo "<script language='javascript' type='text/javascript'> document.getElementById('upwd').innerHTML= ";
					//echo '"gagagaga"; alert("Hello World!");';
					//echo "  </script>";
				}
				
			}
  		}
	?>
    
	<h1>Sign In For More</h1>
		<div class="app-cam">
			<div class="cam"><img src="images/cam.png" class="img-responsive" alt="" /></div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?path=".$_GET['path']); ?>">
				<input type="text" class="text" value="<?php echo $unamevalue; ?>" id="uname" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php $unamevalue=$unamestr; echo $unamevalue; ?>';}" >
				<input type="password" value="Password"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				<div class="submit"><input type="submit" onclick="myFunction()" value="Sign in" ></div>
				<div class="clear"></div>
				<div class="buttons">
					<ul>
						<li><a href="#"  class="hvr-sweep-to-right">Sign in with Facebook</a></li>
						<li><a href="#" class="hvr-sweep-to-left">Sign in with Twitter</a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="new">
					<p><a href="#">Forgot Password ?</a></p>
					<p class="sign">New here ?<a href="#"> Sign Up</a></p>
					<div class="clear"></div>
				</div>
			</form>
		</div>
	<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015.Company name All rights reserved.</p>
		</div>
	<!--//end-copyright-->
</body>

</html>