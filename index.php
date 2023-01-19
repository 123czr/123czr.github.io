<?php $IP = $_SERVER['SERVER_ADDR'];?>
<?php $URL = $_SERVER['HTTP_HOST'];?>
<meta name="referrer" content="never">
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>orange</title>
	</head>
	<body>
		<div id="wrap">
				<div id="logo">
					<img class="logo" src="img/logo.png">
					<!-- <h1>服务器</h1> -->
					<div id="kg-btn" class="">
						<input class='tgl tgl-flip' id='qieh' type='checkbox' />
						<label class='tgl-btn' data-tg-off='English' data-tg-on='中文' for='qieh'></label>
				</div>
			</div>
			<div id="main">
			<!-- 外网访问地址 -->
				<div id="app" class="app animated fadeInLeft">
					<ul>
						<li>
							<a href="/about/czr.html" target="_blank"><img class="shake" src="img/png/about.png" /><strong>关于</strong></a>
						</li>
						<li>
							<a href="/kodbox/" target="_blank"><img class="shake" src="img/png/kod.png" /><strong>可道云</strong></a>
						</li>
						<li>
						    <a href="/piwigo/" target="_blank"><img class="shake" src="img/png/piwigo.png" /><strong>相册</strong></a>
						</li>
						<li>
							<a href="/wordpress/" target="_blank"><img class="shake" src="img/png/wordpress.png" /><strong>博客</strong></a>
						</li>
						<li>
							<a href="/Discuz/" target="_blank"><img class="shake" src="img/png/wordpress.png" /><strong>Discuz博客</strong></a>
						</li>
						<li>
						     <a href="/about/index.html" target="_blank"><img class="shake" src="img/png/about.png" /><strong>更新日志</strong></a>
						</li>
						<li>
							<a href="http://<?php echo $IP;?>:8081" target="_blank"><img class="shake" src="img/png/everything.png" /><strong>摄像头</strong></a>
						</li>
						<li>
							<a href="http://<?php echo $IP;?>:8001" target="_blank"><img class="shake" src="img/png/phpmyadmin.png" /><strong>PhpMyAdmin</strong></a>
						</li> 
						<li>
						    <a href="http://<?php echo $IP;?>:8002" target="_blank"><img class="shake" src="img/png/adminer.png" /><strong>Adminer</strong></a>
						</li>
						<li>
							<a href="http://<?php echo $IP;?>:8003" target="_blank"><img class="shake" src="img/png/addweb.png" /><strong>webface</strong></a>
						</li> 
						<li>
							<a href="/Discuz/admin.php" target="_blank"><img class="shake" src="img/png/Podcats.png" /><strong>Discuz博客管理</strong></a>
						</li>
						<li>
							<a href="/wordpress/wp-login.php" target="_blank"><img class="shake" src="img/png/Podcats.png" /><strong>博客管理</strong></a>
						</li>
						
					</ul>
				</div>
				<!-- 内网网访问地址 -->
				<div id="app1" class="app animated fadeInRight">
					<ul>
						<li>
							<a href="/about/czr.html" target="_blank"><img class="shake" src="img/png/about.png" /><strong>about</strong></a>
						</li>
						<li>
							<a href="/kodbox/" target="_blank"><img class="shake" src="img/png/kod.png" /><strong>kod</strong></a>
						</li>
						<li>
						    <a href="/piwigo/" target="_blank"><img class="shake" src="img/png/piwigo.png" /><strong>piwigo</strong></a>
						</li>
						<li>
							<a href="/wordpress/" target="_blank"><img class="shake" src="img/png/wordpress.png" /><strong>wordpress</strong></a>
						</li>
						<li>
							<a href="http://<?php echo $IP;?>:8080" target="_blank"><img class="shake" src="img/png/about.png" /><strong>Web Page</strong></a>
						</li>
						<li>
						     <a href="http://<?php echo $IP;?>:8096" target="_blank"><img class="shake" src="img/png/jellyfin.png" /><strong>Emby</strong></a>
						</li>
						<li>
							<a href="http://<?php echo $IP;?>:8081" target="_blank"><img class="shake" src="img/png/everything.png" /><strong>ipcam</strong></a>
						</li>
						<li>
							<a href="http://<?php echo $IP;?>:8001" target="_blank"><img class="shake" src="img/png/phpmyadmin.png" /><strong>PhpMyAdmin</strong></a>
						</li> 
						<li>
						    <a href="http://<?php echo $IP;?>:8002" target="_blank"><img class="shake" src="img/png/adminer.png" /><strong>Adminer</strong></a>
						</li>
						<li>
							<a href="http://<?php echo $IP;?>:8003" target="_blank"><img class="shake" src="img/png/addweb.png" /><strong>webface</strong></a>
						</li> 
						<li>
							<a href="https://<?php echo $IP;?>:8080" target="_blank"><img class="shake" src="img/png/about.png" /><strong>Web Page</strong></a>
						</li>
						<li>
							<a href="/wordpress/wp-login.php" target="_blank"><img class="shake" src="img/png/Podcats.png" /><strong>WP config</strong></a>
						</li>
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
	</body>
</html>