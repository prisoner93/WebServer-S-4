<!DOCTYPE html>
<html>
<head>
<title>后台管理</title>
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
<script>
function send1()
{	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET","startcluster.php");
    alert("启动集群成功！");
 		xmlhttp.send();
	}
	
	
function send3(str)
{	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET","startmovie.php");
    alert("启动电影推荐成功！");
 		xmlhttp.send();
}

function send2(str)
{
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.open("GET","stopcluster.php");
	alert("关闭集群成功！");
	xmlhttp.send();
}

</script>     
<body>
<!--header-->	
<div class="container">
<div class="main-top">
	<div class="main">
    <div>
        <h1>Web服务器集群管理</h1>
        <p><br></p>
        <p><h3> 
            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/status'; ?>">&nbsp;&nbsp;Web服务器后端节点状态 </a>
        </h3></p>
    </div>
    <div>
        <h2><br><h2>
        <h1>Hadoop服务器集群管理</h1>
        <p><br></p>
        <p><h3> 
            <a href="http://192.168.1.121:50070">&nbsp;&nbsp;HDFS状态 </a>&nbsp;&nbsp;
            <a href="http://192.168.1.121:50030">MapReduce作业状态 </a>&nbsp;&nbsp;
            <a href="#" onclick="send1()" id="ustate3">启动Hadoop集群 </a>&nbsp;&nbsp;
            <a href="#" onclick="send2()" id="ustate2">关闭Hadoop集群 </a>&nbsp;&nbsp;
            <a href="#" onclick="send3()" id="ustat1">启动电影推荐算法 </a>&nbsp;&nbsp;
        </h3></p>
    </div>
    
    
    
    
    
    </div>
</div>
</div>
    

	<p class="footer-class">Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" </p>
</body>
</html>