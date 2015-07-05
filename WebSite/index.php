<!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
		<div class="gallery">
			<h1>热门电影</h1>
		<!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : false,
						navigation : true,
						navigationText :  true,			     
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
			<!-- start content_slider -->
		<div id="owl-demo" class="owl-carousel ">
			<div class="item g1">
				<a href="single.html"><img class="lazyOwl " data-src="images/pi.jpg" alt="name"></a>
				<div class="caption">
				  <h3 class="cinema"><a>Action, Adventure, Fantasy</a></h3>	
					<p>Avatar (2009)<br>Director: James Cameron</p>					
				</div>
  </div>
			<div class="item g1">
				<a href="single.html"><img class="lazyOwl" data-src="images/140203.37059839_1000X1000.jpg" alt="name"></a>
				<div class="caption">
					<h3 class="cinema travel"><a>Action, Drama, Thriller </a></h3>	
					<p>San Andreas (2015)<br>Director: Brad Peyton</p>					
				</div>
			</div>
			<div class="item g1">
				<a href="single.html"><img class="lazyOwl" data-src="images/103412.63754364_1000X1000.jpg" alt="name"></a>
				<div class="caption">
					<h3 class="cinema tele"><a>Action, Adventure, Mystery </span></a><a></a></h3>	
					<p>Tomorrowland (2015)<br>Director: Brad Bird</p>					
				</div>
			</div>
			<div class="item g1">
				<a href="single.html"><img class="lazyOwl" data-src="images/103033.83920370_1000X1000.jpg" alt="name"></a>
				<div class="caption">
					<h3 class="cinema"><a>Action, Adventure, Sci-Fi </a></h3>	
					<p>Jurassic World (2015)<br>Director: Colin Trevorrow Ellin</p>					
				</div>
			</div>
			<div class="item g1">
				<a href="single.html"><img class="lazyOwl" data-src="images/ci1.jpg" alt="name"></a>
				<div class="caption">
					<h3 class="cinema travel"><a>Action, Adventure, Sci-Fi </a></h3>	
					<p>Avengers: Age of Ultron (2015)<br>
				  Director: Joss Whedon</p>					
				</div>
			</div>
		</div>
		<!--//sreen-gallery-cursual---->
		</div>
		
		<!---->
<div class="content">
	<div class="col-md-8 content-top">
		<div class="number">
				<div class="feb">
					<b>28</b>
					<label>FEB</label>
				</div>
			<h3><a href="single.html">Avatar (2009) </a></h3>
            <h4>Ratings: 7.9/10</h4>
  <p>When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora. There he learns of greedy corporate figurehead Parker Selfridge's intentions of driving off the native humanoid "Na'vi" in order to mine for the precious material scattered throughout their rich woodland. In exchange for the spinal surgery that will fix his legs, Jake gathers intel for the cooperating military unit spearheaded by gung-ho Colonel Quaritch, while simultaneously attempting to infiltrate the Na'vi people with the use of an "avatar" identity. While Jake begins to bond with the native tribe and quickly falls in love with the beautiful alien Neytiri, the restless Colonel moves forward with his ruthless extermination tactics, forcing the soldier to take a stand - and fight back in an epic battle for the fate of Pandora.  </p>
			<!---->		
    		<div class="span_8">
    		  <div class="row_8">
    		    <div class="sap_tabs">	
				  <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <div class="resp-tabs-container">
							    <h2 class="resp-accordion " role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span></h2>
								<div class="tab-1 resp-tab-content " aria-labelledby="tab_item-0">
									<div class="facts">
									    <img src="images/pc.jpg" class="img-responsive" alt=""> 			     
							        </div>
							     </div>	
							      <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span></h2>
								  <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-1" >
									<div class="facts">
									    <img src="images/pc1.jpg" class="img-responsive" alt="">		          
							        </div>
							     </div>	
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span></h2>
								  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
									    <img src="images/pc2.jpg" class="img-responsive" alt=""> 						         
							        </div>
							     </div>	
								<h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span></h2>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
									<div class="facts">
									    <img src="images/pc3.jpg" class="img-responsive" alt=""> 
									         
							        </div>
							    </div>		        					 
							</div>
							  <ul class="resp-tabs-list">
						  	    <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span><img src="images/pic.jpg" class="img-responsive" alt=""></span></li>
							    <li class="resp-tab-item " aria-controls="tab_item-1" role="tab"><span><img src="images/pic1.jpg" class="img-responsive" alt=""></span></li>
							    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><img src="images/pic2.jpg" class="img-responsive" alt=""></span></li>
								<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><img src="images/pic3.jpg" class="img-responsive" alt=""></span></li>
							    <div class="clearfix"> </div>
							</ul>		
						</div>
					</div>
				</div>
				</div>
				
				
			<!---->
			<div class="movie">
				<ul class="comment">
					<li><span>Category : <a href="single.html"> Movie</a> </span></li>
					<li><a href="#"><i> </i>5 Comments  </a></li>
				</ul>				
				<a href="single.html" class="more">Read More </a>
			<div class="clearfix"> </div>
			</div>
		</div>
			<!---->
            <div class="number">
				<div class="feb">
					<b>28</b>
					<label>FEB</label>
				</div>
			<h3><a href="single-jw.html">Jurassic World (2015) </a></h3>
            <h4>Ratings: 8.6/10</h4>
			<p>Twenty-two years after the events of Jurassic Park, Isla Nublar now features a fully functioning dinosaur theme park, Jurassic World, as originally envisioned by John Hammond. After 10 years of operation and visitor rates declining, in order to fulfill a corporate mandate, a new attraction is created to re-spark visitor's interest, which backfires horribly.  </p>
			<!---->		
    		<div class="span_8">
    		  <div class="row_8">
    		    <div class="sap_tabs">	
				  <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <div class="resp-tabs-container">
							    <h2 class="resp-accordion " role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span></h2>
								<div class="tab-1 resp-tab-content " aria-labelledby="tab_item-0">
									<div class="facts">
								      <img src="images/10333.jpg" class="img-responsive" alt=""> 			     
							        </div>
                                    <div class="facts">
								      <img src="images/1034.jpg" class="img-responsive" alt=""> 			     
							        </div>
					        </div>	
							      <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span></h2>
								  <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-1" >
									<div class="facts">
									    <img src="images/pc1.jpg" class="img-responsive" alt="">		          
							        </div>
							     </div>	
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span></h2>
								  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
									    <img src="images/pc2.jpg" class="img-responsive" alt=""> 						         
							        </div>
							     </div>	
								<h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span></h2>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
									<div class="facts">
									    <img src="images/pc3.jpg" class="img-responsive" alt=""> 
									         
							        </div>
							    </div>		        					 
					</div>
							  <ul class="resp-tabs-list">
						  	    <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"></li>
							    <li class="resp-tab-item " aria-controls="tab_item-1" role="tab"></li>
							    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"></li>
								<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"></li>
							    <div class="clearfix"> </div>
							</ul>		
				  </div>
				</div>
			  </div>
			  </div>
				
				
			<!---->
			<div class="movie">
				<ul class="comment">
					<li><span>Category : <a href="single.html"> Movie</a> </span></li>
					<li><a href="#"><i> </i>5 Comments  </a></li>
				</ul>				
				<a href="single.html" class="more">Read More </a>
			<div class="clearfix"> </div>
			</div>
		</div>
<!---->
			<div class="number">
				<div class="feb">
					<b>20</b>
					<label>FEB</label>
				</div>
				<h3><a href="single.html">Pitch Perfect 2 (2015) </a></h3>
      <h4>Ratings: 7.0/10</h4>
				<p>The Bellas are back, and they are better than ever. After being humiliated in front of none other than the President of the United States of America, the Bellas are taken out of the Aca-Circuit. In order to clear their name and regain their status, the Bellas take on a seemingly impossible task: winning an International competition no American team has ever won. In order to accomplish this monumental task, they need to strengthen the bonds of friendship and sisterhood, and blow away the competition with their amazing aca-magic! With all new friends and old rivals tagging along for the trip, the Bellas can hopefully accomplish their dreams once again.</p>
			<!---->		
    		<div class="span_8">
    		  <div class="row_8">
    		    <div class="sap_tabs">	
				  <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <div class="resp-tabs-container">
							    <h2 class="resp-accordion " role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span></h2>
								<div class="tab-1 resp-tab-content " aria-labelledby="tab_item-0">
									<div class="facts">
									    <img src="images/fa.jpg" class="img-responsive" alt=""> 			     
							        </div>
							     </div>	
							      <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span></h2>
								  <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-1" >
									<div class="facts">
									    <img src="images/fa1.jpg" class="img-responsive" alt="">		          
							        </div>
							     </div>	
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span></h2>
								  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
									    <img src="images/fa2.jpg" class="img-responsive" alt=""> 						         
							        </div>
							     </div>	
								<h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span></h2>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
									<div class="facts">
									    <img src="images/fa3.jpg" class="img-responsive" alt=""> 
									         
							        </div>
							    </div>		        					 
							</div>
							  <ul class="resp-tabs-list">
						  	    <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span><img src="images/f1.jpg" class="img-responsive" alt=""></span></li>
							    <li class="resp-tab-item " aria-controls="tab_item-1" role="tab"><span><img src="images/f2.jpg" class="img-responsive" alt=""></span></li>
							    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><img src="images/f3.jpg" class="img-responsive" alt=""></span></li>
								<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><img src="images/f4.jpg" class="img-responsive" alt=""></span></li>
							    <div class="clearfix"> </div>
							</ul>		
						</div>
					</div>
				</div>
				</div>		
			<!---->
			<div class="movie">
				<ul class="comment">
					<li><span>Category : <a href="single.html">Fashion </a></span></li>
					<li><a href="#"><i> </i>5 Comments  </a></li>
				</ul>				
				<a href="single.html" class="more">Read More </a>
			<div class="clearfix"> </div>
			</div>
		</div>
			<!---->
			<div class="older-top">
				<a href="#" class="older"><i> </i>older posts</a>
				<a href="#" class="older top-old"><i > </i>newer posts</a>
				<div class="clearfix"> </div>
			</div>
			<!---->
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
	<p class="footer-class">Copyright &copy; 2015.Company name All rights reserved.<a href="manager.php" target="_blank">后台管理</a></p>
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