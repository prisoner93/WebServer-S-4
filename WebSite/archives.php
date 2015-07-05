<!DOCTYPE html>
<html>
<head>
<title>电影分类</title>
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
		<div class="archives">		
		  <h2>ARCHIVES</h2>
		  <div class="archives-top">
				<div class="col-md-3 top-archives">
					<h3>BY MONTH:</h3>
				</div>
				<div class="col-md-3 top-archives">
					<ul>
					<li><a href="magazine.html">January 2015(1)</a></li>
					<li><a href="magazine.html">February 2015(2)</a></li>
					<li><a href="magazine.html">November 2014(1)</a></li>
					<li><a href="magazine.html">September 2014(1)</a></li>
				</div>
				<div class="col-md-3 top-archives">
					<ul>
					<li><a href="magazine.html">July 2014(3)</a></li>
					<li><a href="magazine.html">June 2014(2)</a></li>
					<li><a href="magazine.html">May 2014(1)</a></li>
					<li><a href="magazine.html">April 2014(1)</a></li>
				</div>
				<div class="col-md-3 top-archives">
					<ul>
					<li><a href="magazine.html">January 2014(2)</a></li>
					<li><a href="magazine.html">December 2013(1)</a></li>
					<li><a href="magazine.html">November 2013(1)</a></li>
					
				</div>
				<div class="clearfix"></div>
		  </div>
		  <div class="archives-top">
				<div class="col-md-3 top-archives">
					<h3>BY CATEGORIES:</h3>
				</div>
				<div class="col-md-3 top-archives">
					<ul>
					<li><a href="magazine.html">Untrammelled(4)</a></li>
					<li><a href="magazine.html">Indignation(1)</a></li>
					<li><a href="magazine.html">Demoralized(5)</a></li>
					<li><a href="magazine.html"> Weakness(2)</a></li>
				</div>
				<div class="col-md-3 top-archives">
					<ul>
					<li><a href="magazine.html">Indignation(3)</a></li>
					<li><a href="magazine.html">Demoralized(6)</a></li>
					<li><a href="magazine.html">Weakness(1)</a></li>
					<li><a href="magazine.html">Untrammelled(5)</a></li>
				</div>
				<div class="col-md-3 top-archives">
					<ul>
					<li><a href="magazine.html">Demoralized(1)</a></li>
					<li><a href="magazine.html">Weakness(4)</a></li>
					<li><a href="magazine.html">Indignation(5)</a></li>
					
				</div>
				<div class="clearfix"></div>
		  </div>
		  <div class="archives-top">
				<div class="col-md-3 top-archives">
					<h3>BY TAGS:</h3>
				</div>
				<div class="col-md-3 top-archives">
					<ul>
					<li><a href="single.html"> Omnis</a></li>
					<li><a href="single.html">Unde </a></li>
					<li><a href="single.html">Odio</a></li>
					<li><a href="single.html">Ratione</a></li>
				</div>
				<div class="col-md-3 top-archives">
					<ul>
					<li><a href="single.html">Ratione</a></li>
					<li><a href="single.html"> Mistaken</a></li>
					<li><a href="single.html">Except</a></li>
					<li><a href="single.html">Omnis</a></li>
				</div>
				<div class="col-md-3 top-archives">
					<ul>
					<li><a href="single.html">Mistaken</a></li>
					<li><a href="single.html">Omnis</a></li>
					<li><a href="single.html">Except</a></li>
					
				</div>
				<div class="clearfix"></div>
		  </div>
		</div>
		<!---->
	</div>
	
	<i class="line"> </i>
	<i class="line-in"> </i>
	</div>
	<p class="footer-class">Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="manager.php">后台管理</a></p>>
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