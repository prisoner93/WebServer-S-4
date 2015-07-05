<!DOCTYPE html>
<html>
<head>
<title>向我推荐</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Magblog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>   
</head>
<?php
/////////////////////////////////////////////////
	$userid = 0;
	$userstate = "";
	$link1 = 'login.php?path='.$_SERVER['PHP_SELF'];
	$userlink = '';
	$link2 = "#";
	//echo $link2;
	//setcookie('userid',"");
	//setcookie('userid','1014',time()+3600);
	if(empty($_COOKIE['userid'])==1)
	{
		//echo "cookie is NULL";
		$userid = "未登陆";
		$userstate = "登陆更精彩";
		$userlink = $link1;
		$logoutflag = "";
	}
	else
	{
		$userid = intval($_COOKIE['userid']);
		$userstate = "退出";
		$userlink = $link2;
		$logoutflag = "1";
		//echo $userid;
	}
	////get the 6 movies
		if(strcmp($userid,"未登陆")==0)
		{
			$user_id=1;
		}
		else{
			$user_id=intval($userid);
		}
		$dbhost = '192.168.1.116:3306';
		$dbuser = 'Website';
		$dbpass = 'bananapi';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn )
		{
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db( 'WEBSITE' );
		$sql = "select * from users where user_id={$user_id}";
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
 			 die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
		     $movie1=$row['movie1'];
			 $movie2=$row['movie2'];
			 $movie3=$row['movie3'];
			 $movie4=$row['movie4'];
			 $movie5=$row['movie5'];
			 $movie6=$row['movie6'];
		}	
		///get movie1
		$sql = "select * from movie where movie_id={$movie1}";
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
 			 die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			 $movie_id1=$row['movie_id'];
		     $movie_name1=$row['movie_name'];
			 $movie_director1=$row['movie_director'];
			 $movie_rating1=$row['movie_rating'];
			 $movie_long1=$row['movie_long'];
			 $movie_msg1=$row['movie_msg'];
			 $movie_imgaddr1=$row['movie_imgaddr'];
			 $movie_type1=$row['movie_type'];
		}
		///get movie2
		$sql = "select * from movie where movie_id={$movie2}";
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
 			 die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			 $movie_id2=$row['movie_id'];
		     $movie_name2=$row['movie_name'];
			 $movie_director2=$row['movie_director'];
			 $movie_rating2=$row['movie_rating'];
			 $movie_long2=$row['movie_long'];
			 $movie_msg2=$row['movie_msg'];
			 $movie_imgaddr2=$row['movie_imgaddr'];
			 $movie_type2=$row['movie_type'];
		}
		///get movie3
		$sql = "select * from movie where movie_id={$movie3}";
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
 			 die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			 $movie_id3=$row['movie_id'];
		     $movie_name3=$row['movie_name'];
			 $movie_director3=$row['movie_director'];
			 $movie_rating3=$row['movie_rating'];
			 $movie_long3=$row['movie_long'];
			 $movie_msg3=$row['movie_msg'];
			 $movie_imgaddr3=$row['movie_imgaddr'];
			 $movie_type3=$row['movie_type'];
		}
		///get movie4
		$sql = "select * from movie where movie_id={$movie4}";
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
 			 die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			 $movie_id4=$row['movie_id'];
		     $movie_name4=$row['movie_name'];
			 $movie_director4=$row['movie_director'];
			 $movie_rating4=$row['movie_rating'];
			 $movie_long4=$row['movie_long'];
			 $movie_msg4=$row['movie_msg'];
			 $movie_imgaddr4=$row['movie_imgaddr'];
			 $movie_type4=$row['movie_type'];
		}
		///get movie5
		$sql = "select * from movie where movie_id={$movie5}";
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
 			 die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			 $movie_id5=$row['movie_id'];
		     $movie_name5=$row['movie_name'];
			 $movie_director5=$row['movie_director'];
			 $movie_rating5=$row['movie_rating'];
			 $movie_long5=$row['movie_long'];
			 $movie_msg5=$row['movie_msg'];
			 $movie_imgaddr5=$row['movie_imgaddr'];
			 $movie_type5=$row['movie_type'];
		}
		///get movie6
		$sql = "select * from movie where movie_id={$movie6}";
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
 			 die('Could not get data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			 $movie_id6=$row['movie_id'];
		     $movie_name6=$row['movie_name'];
			 $movie_director6=$row['movie_director'];
			 $movie_rating6=$row['movie_rating'];
			 $movie_long6=$row['movie_long'];
			 $movie_msg6=$row['movie_msg'];
			 $movie_imgaddr6=$row['movie_imgaddr'];
			 $movie_type6=$row['movie_type'];
		}
		//echo $movie_name1;
		//echo $movie_name2;
		//echo $movie_name3;
		//echo $movie_name4;
		//echo $movie_name5;
		//echo $movie_name6;
	//echo $_COOKIE['userid'];
?>
<script> 
function reloadhtml()
{ 
	location.reload();
}
function getCookie(name) 
{ 
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
    if(arr=document.cookie.match(reg))
        return unescape(arr[2]); 
    else 
        return null; 
} 
function delCookie(name) 
{ 
    var exp = new Date(); 
    exp.setTime(exp.getTime() - 1); 
    var cval=getCookie(name); 
    if(cval!=null) {
        document.cookie= name + "="+cval+";expires="+exp.toGMTString(); 
		//alert("Hello World!");
	}
} 
function logout(str)
{	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	if (str.length!=0)
	{ 
		//alert("Hello World!");
		//xmlhttp.open("GET","logout.php");
		delCookie("userid");
		setTimeout(reloadhtml(),1000);
		document.getElementById('ustate').innerHTML="登陆更精彩" 
		document.getElementById('uid').innerHTML="未登陆" 
		xmlhttp.send();
	}
}

</script>
<body>
<!--header-->	
<div class="back">
	<img src="images/back.png" alt="">
    
</div>
<div class="container">
<div class="main-top">
	<div class="main">
    <div id="login_area">
    <span id="span_userinfo">User:
    <a href="#" id="uid"><?php echo $userid ?></a>·
    <a href="#">设置</a>·
    <a href="<?php echo $userlink ?>" onclick="logout(<?php echo $logoutflag ?>)" id="ustate"><?php echo $userstate ?></a>
    <span id="current_spaceId" style="display:none">622999</span></span></div>
		<div class="header">
			<div class="header-top">
				<div class="header-in">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt="" ></a>
					</div>
                    
					<div class="search">
						<form>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
							<input type="submit" value="SEARCH">
						</form>
					</div>         
					<div class="clearfix"> </div>
				</div>
				<div class="header-top-on">
					<ul class="social-in">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="facebook"> </i></a></li>
						<li><a href="#"><i class="tin"> </i></a></li>
					</ul>
				</div>       
        <!---->
				<div class="clearfix"> </div>
			</div>
			<!---->
            
			<div class="header-bottom">
				<div class="navigation">	
				<div>
				  <label class="mobile_menu" for="mobile_menu">
				  <span>Menu</span>
				  </label>
				  <input id="mobile_menu" type="checkbox">
					<ul class="nav">
						<li><a class="color1" href="index.php">主页</a></li>                  
						<li><a href="index.php" class="color2">影片排行榜</a></li>            
						<li><a href="index.php" class="color3">电影嘉年华</a></li>						
            </li>  
						<li><a href="magazine.php" class="color4">向我推荐</a></li> 
            <li><a href="archives.php" class="color5">电影分类</a></li>
						<li><a href="contact.php" class="color6">联系我们</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>			
			</div>
		</div>
	</div>
		<!---->
        
		<div class="magazine">
			<h3>   以下为系统向您精心推荐的您可能喜欢的电影：</h3>
		<div class="magazine-top">
        
		  <div class="col-md-4 top-magazine">
				<a href="<?php echo "single.php?movieid=".$movie_id1 ?>" ><img src=<?php echo "http://192.168.1.116/Webimages/".$movie_imgaddr1 ?> alt="name" width="357" height="226" class="img-responsive chain">
					<div class="rotate">
						<i> </i>	
					</div>	
				</a>
				<div class=" magazine-grid">
                <?php 
				$var = 1014;
				$image = "1.jpg";
				?>
					<h3><a href="<?php echo "single.php?movieid=".$movie_id1 ?>"><?php echo $movie_name1 ?></a></h3>
                    <h4>Ratings: <?php echo $movie_rating1 ?>/10 | <?php echo $movie_long1 ?>min</h4>
					<p>Director: <?php echo $movie_director1 ?></p>
                    <p><?php echo $movie_type1 ?><br><?php echo $movie_msg1 ?></p>
				</div>
			</div>
            
            <div class="col-md-4 top-magazine">
				<a href="<?php echo "single.php?movieid=".$movie_id2 ?>" ><img src=<?php echo "http://192.168.1.116/Webimages/".$movie_imgaddr2 ?> alt="name" width="357" height="226" class="img-responsive chain">
					<div class="rotate">
						<i> </i>	
					</div>	
				</a>
				<div class=" magazine-grid">
					<h3><a href="<?php echo "single.php?movieid=".$movie_id2 ?>"><?php echo $movie_name2 ?></a></h3>
                    <h4>Ratings: <?php echo $movie_rating2 ?>/10 | <?php echo $movie_long2 ?>min</h4>
					<p>Director: <?php echo $movie_director2 ?></p>
                    <p><?php echo $movie_type2 ?><br><?php echo $movie_msg2 ?></p>
				</div>
			</div>
            
            <div class="col-md-4 top-magazine">
				<a href="<?php echo "single.php?movieid=".$movie_id3 ?>" ><img src=<?php echo "http://192.168.1.116/Webimages/".$movie_imgaddr3 ?> alt="name" width="357" height="226" class="img-responsive chain">
					<div class="rotate">
						<i> </i>	
					</div>	
				</a>
				<div class=" magazine-grid">
					<h3><a href="<?php echo "single.php?movieid=".$movie_id3 ?>"><?php echo $movie_name3 ?></a></h3>
                    <h4>Ratings: <?php echo $movie_rating3 ?>/10 | <?php echo $movie_long3 ?>min</h4>
					<p>Director: <?php echo $movie_director3 ?></p>
                    <p><?php echo $movie_type3 ?><br><?php echo $movie_msg3 ?></p>
				</div>
			</div>
            <div class="clearfix"></div>
            
            <div class="col-md-4 top-magazine">
				<a href="<?php echo "single.php?movieid=".$movie_id4 ?>" ><img src=<?php echo "http://192.168.1.116/Webimages/".$movie_imgaddr4 ?> alt="name" width="357" height="226" class="img-responsive chain">
					<div class="rotate">
						<i> </i>	
					</div>	
				</a>
				<div class=" magazine-grid">
					<h3><a href="<?php echo "single.php?movieid=".$movie_id4 ?>"><?php echo $movie_name4 ?></a></h3>
                    <h4>Ratings: <?php echo $movie_rating4 ?>/10 | <?php echo $movie_long4 ?>min</h4>
					<p>Director: <?php echo $movie_director4 ?></p>
                    <p><?php echo $movie_type4 ?><br><?php echo $movie_msg4 ?></p>
				</div>
			</div>
            
            <div class="col-md-4 top-magazine">
				<a href="<?php echo "single.php?movieid=".$movie_id5 ?>" ><img src=<?php echo "http://192.168.1.116/Webimages/".$movie_imgaddr5 ?> alt="name" width="357" height="226" class="img-responsive chain">
					<div class="rotate">
						<i> </i>	
					</div>	
				</a>
				<div class=" magazine-grid">
					<h3><a href="<?php echo "single.php?movieid=".$movie_id5 ?>"><?php echo $movie_name5 ?></a></h3>
                    <h4>Ratings: <?php echo $movie_rating5 ?>/10 | <?php echo $movie_long5 ?>min</h4>
					<p>Director: <?php echo $movie_director5 ?></p>
                    <p><?php echo $movie_type5 ?><br><?php echo $movie_msg5 ?></p>
				</div>
			</div>
			
            <div class="col-md-4 top-magazine">
				<a href="<?php echo "single.php?movieid=".$movie_id6 ?>" ><img src=<?php echo "http://192.168.1.116/Webimages/".$movie_imgaddr6 ?> alt="name" width="357" height="226" class="img-responsive chain">
					<div class="rotate">
						<i> </i>	
					</div>	
				</a>
				<div class=" magazine-grid">
					<h3><a href="<?php echo "single.php?movieid=".$movie_id6 ?>"><?php echo $movie_name6 ?></a></h3>
                    <h4>Ratings: <?php echo $movie_rating6 ?>/10 | <?php echo $movie_long6 ?>min</h4>
					<p>Director: <?php echo $movie_director6 ?></p>
                    <p><?php echo $movie_type6 ?><br><?php echo $movie_msg6 ?></p>
				</div>
			</div>
			
			
			
			<div class="clearfix"></div>
		</div>
			
		</div>
		</div>	
	<i class="line"> </i>
	<i class="line-in"> </i>
	<i class="line-in  line-at"> </i>
	</div>
	<p class="footer-class">Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="manager.php">后台管理</a></p>
<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
</body>
</html>