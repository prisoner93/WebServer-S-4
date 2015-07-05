<!DOCTYPE html>
<html>
<head>
<title>Single</title>
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
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab,#horizontalTab1,#horizontalTab2').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-48014931-1', 'codyhouse.co');
  	ga('send', 'pageview');

  	jQuery(document).ready(function($){
  		$('.close-carbon-adv').on('click', function(){
  			$('#carbonads-container').hide();
  		});
  	});
</script>	
<?php
/////////////////////////////////////////////////
	$userid = 0;
	$userstate = "";
	$link1 = 'login.php?path='.$_SERVER['PHP_SELF'].'?movieid='.$_GET['movieid'];
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
</head>
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
<div class="content">
	<div class="col-md-8 content-top">
		<div class="number">
				<div class="feb">
					<b>28</b>
					<label>FEB</label>
				</div>
            <?php 
			//echo   $_GET['movieid'];
            $dbhost = '192.168.1.116:3306';
			$dbuser = 'Website';
			$dbpass = 'bananapi';
			$passwebsite = 'http://localhost/single.php';
			$str = 'http://"localhost"/single.php';
			//$imagesdd ="images/tuijian2.jpg";
			$image1 = '<img src="http://192.168.1.116/Webimages/';
			$image2 = '" class="img-responsive" alt="" width="500" height="375">';
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			if(! $conn )
			{
			  die('Could not connect: ' . mysql_error());
			}
			mysql_select_db( 'WEBSITE' );
			//echo $_GET['movieid'];
			$sql = "select * from movie where movie_id={$_GET['movieid']}";
			$retval = mysql_query( $sql, $conn );
				if(! $retval )
			{
 			 die('Could not get data: ' . mysql_error());
			}
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			{
			   
			     echo "<h3><a href=#>{$row['movie_name']}</a></h3>";
				 echo "<h4>Ratings: {$row['movie_rating']}/10 | {$row['movie_long']}min<br>Director: {$row['movie_director']}</h4>";
				 echo "<p>{$row['movie_type']}<br>{$row['movie_msg']}</p>";
				 echo "<div>{$image1}{$row['movie_imgaddr']}{$image2}</div>";
			}
            ?> 
            	
          
		  
			<!---->		
			 			     
		<!---->
	  <div class="simply">
			<div class="story">
				<h4 class="stories stories-in"><span>Related Articles</span></h4>
			</div>
				<ul class="in-left">
					<li><a href="#">Lorem Ipsum is simply dummy text </a></li>					
					<li><a href="#">printing and typesetting industry</a></li>
					<li><a href="#">Lorem Ipsum has been the industry's  </a> </li>
					<li><a href="#">standard dummy text ever since </a> </li>
					<li><a href="#">Lorem Ipsum has been the industry's  </a> </li>
				</ul>
				<ul class="in-left">
					<li><a href="#">Lorem Ipsum is simply dummy text </a></li>					
					<li><a href="#">printing and typesetting industry</a></li>
					<li><a href="#">Lorem Ipsum has been the industry's  </a> </li>
					<li><a href="#">standard dummy text ever since </a> </li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!---->
			<div class="simply">
				<div class="story">
					<h4 class="stories stories-in"><span>Write comment</span></h4>
				</div>
				<form>
                

					<div class="name name-in">
						<span class="sit-in">Comment:</span>
						<textarea> </textarea>
					</div>
					<input type="submit" value="Post Comment">
				</form>
				<div class="clearfix"> </div>
			</div>
			<!---->
			<div class="comment-top">
				<div class="story">
					<h4 class="stories "><span>comments (3)</span></h4>
				</div>
				<!---->
				<div class="comments-top-top">
					<div class="top-comment-left">
						<img class="img-responsive" src="images/co.png" alt="">
					</div>
					<div class="top-comment-right">
						<div class="right-comment">
							<h5>ilove potter</h5>
							<span>05/03/2012 at 13:58</span>
							<div class="clearfix"> </div>
						</div>
						<p>Remaining essentially unchanged. It was popularised in the 1960s with the release of  Letraset sheets containing </p>
						<a href="#" class="reply">Reply</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="comments-top-top">
					<div class="top-comment-left">
						<img class="img-responsive" src="images/co.png" alt="">
					</div>
					<div class="top-comment-right">
						<div class="right-comment">
							<h5>daydayup</h5>
							<span>05/03/2012 at 13:58</span>
							<div class="clearfix"> </div>
						</div>
						<p>Remaining essentially unchanged. It was popularised in the 1960s with the release of  Letraset sheets containing </p>
						<a href="#" class="reply">Reply</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="comments-top-top">
					<div class="top-comment-left">
						<img class="img-responsive" src="images/co.png" alt="">
					</div>
					<div class="top-comment-right">
						<div class="right-comment">
							<h5>prisoner</h5>
							<span>05/03/2012 at 13:58</span>
							<div class="clearfix"> </div>
						</div>
						<p>Remaining essentially unchanged. It was popularised in the 1960s with the release of  Letraset sheets containing </p>
						<a href="#" class="reply">Reply</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			<!---->
			</div>
			<!---->
		</div>
	</div>
	<!---->
		<div class="col-md-4 content-bottom">
			<div class="story"><h4  class="stories"><span>分类排名</span></h4></div>
			<!---->
			<div class="cd-tabs">
			<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="fashion"  href="#0">COMEDY <i> </i></a></li>
					<li><a data-content="cinema" href="#0" class="selected fashion1">Action<i> </i></a></li>
					<li><a data-content="television" href="#0" class="fashion2">Sci-Fi <i> </i></a></li>
					
				</ul> 
			</nav>
	<ul class="cd-tabs-content">
		<li data-content="fashion" >
		<div class="top-men">
			<div class="men">
				<div class="grid-men">
					<a href="single.html"><img src="images/pp1.jpg" class="img-responsive" alt=""> </a>
				</div>
				<div class="men-grid">
					<h5><a href="single.html">Lorem Ipsum is simply dummy text of the printing</a> </h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men">
				<div class="grid-men">
					<a href="single.html"><img src="images/pp11.jpg" class="img-responsive" alt=""> </a>
				</div>
				<div class="men-grid">
					<h5><a href="single.html">Lorem Ipsum is simply dummy text of the printing </a></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men">
				<div class="grid-men">
					<a href="single.html"><img src="images/pp12.jpg" class="img-responsive" alt=""> </a>
				</div>
				<div class="men-grid">
					<h5><a href="single.html">Lorem Ipsum is simply dummy text of the printing </a></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
</li>
<li data-content="cinema" class="selected">
		<div class="top-men">
			<div class="men">
				<div class="grid-men">
					<a href="single.html"><img src="images/pic3.jpg" class="img-responsive" alt=""> </a>
				</div>
				<div class="men-grid">
					<h5><a href="single.html">Avatar (2009)</a></h5>
					<p>A Paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following.. </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men">
				<div class="grid-men">
					<a href="single.html"><img src="images/pp0.jpg" class="img-responsive" alt=""> </a>
				</div>
				<div class="men-grid">
					<h5><a href="single.html">Tomorrowland (2015)</a> </h5>
					<p>Bound by a shared destiny, a teen bursting with scientific curiosity and a former boy-genius inventor embark on</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men">
				<div class="grid-men">
					<a href="single.html"><img src="images/pp01.jpg" class="img-responsive" alt=""> </a>
				</div>
				<div class="men-grid">
					<h5><a href="single.html">Wrath of the Titans (2012) </a></h5>
					<p>erseus braves the treacherous underworld to rescue his father, Zeus, captured by his son, Ares, and brother Hades</p>
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>
</li>
<li data-content="television" >
	<div class="top-men">
			<div class="men">
				<div class="grid-men">
					<a href="single.html"><img src="images/pp2.jpg" class="img-responsive" alt=""> </a>
				</div>
				<div class="men-grid">
					<h5><a href="single.html">Lorem Ipsum is simply dummy text of the printing </a></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men">
				<div class="grid-men">
					<a href="single.html"><img src="images/pp21.jpg" class="img-responsive" alt=""> </a>
				</div>
				<div class="men-grid">
					<h5><a href="single.html">Lorem Ipsum is simply dummy text of the printing </a></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men">
				<div class="grid-men">
					<a href="single.html"><img src="images/pp22.jpg" class="img-responsive" alt=""> </a>
				</div>
				<div class="men-grid">
					<h5><a href="single.html">Lorem Ipsum is simply dummy text of the printing</a> </h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
</li>
<div class="clearfix"></div>
	</ul> 
</div> 
<!---->
			<div class="might">
				<h4>即将上映</h4>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="images/mi.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="single.html">查看更多<i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="images/mi1.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="single.html">查看更多 <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="images/mi2.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="single.html">查看更多 <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="images/mi3.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="single.html">查看更多 <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
			</div>
			<!---->
				<div class="grid-top-in">
					<h4>热门标签					</h4>
					<p><a href="#" class="jol">Angelina Jolie</a>
					<a href="#" class="lop"> Cssauthor</a> 
					<a href="#" class="bun">Aristokrasi Beyonce Blake</a>
					<a href="#" class="live">Lively Brad Pitt Cameron</a> 
					<a href="#" class="dan">Diaz Daniel</a> 
					<a href="#" class="jol"> Radcliffe David</a> 
					<a href="#" class="live">Beckham Demi Moore Emma </a>
					<a href="#" class="eva">Watson Eva</a>
					<a href="#" class="live">Longoria Gisele </a>
					<a href="#" class="bun">Bundchen Gwyneth Paltrow</a>
					<a href="#" class="live">Halle Berry </a>
					<a href="#" class="jol">Harry Potter</a> 
					<a href="#" class="live">Heidi Klum </a>
					<a href="#" class="bun">James Franco</a> 
					<a href="#" class="live">Jennifer </a>
					<a href="#" class="lop"> Lopez Jessica</a> 
					<a href="#" class="live">Alba Johnny Depp </a>
					<a href="#" class="bun">Jon Hamm Jude</a>
					<a href="#" class="eva">Law Kate Moss Kate</a>
					<a href="#" class="live">Winslet Katie </a>
					<a href="#" class="bun">Holmes Katy Perry</a>
					<a href="#" class="live">Kim Kardashian </a>
					<a href="#" class="dan">Kristen</a> 
					<a href="#" class="eva">Stewart</a>
					<a href="#" class="live">Lady Gaga Madonna </a>
					<a href="#" class="bun">Megan Fox Michelle</a> 
					<a href="#" class="live">Williams Natalie </a>
					<a href="#" class="bun">Portman</a> 
					<a href="#" class="live">Nicole </a>
					<a href="#" class="eva">Kidman Penelope</a>
					<!---
					<a href="#" class="live">Cruz Reese Witherspoon Reklam</a> 
					<a href="#" class="lop"> Rihanna</a> 
					<a href="#" class="live">Robert Pattin </a>
					<a href="#" class="bun">Son Sarah</a> 
					<a href="#" class="live">Jessica </a>
					<a href="#" class="jol">Parker Scar </a> 
					-->
					 </p>	
				</div>
				<!---->
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<i class="line"> </i>
	<i class="line-in"> </i>
	<i class="line-in line-in1"> </i>
	<i class="line-in line-in2"> </i>
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