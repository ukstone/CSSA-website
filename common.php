<?php
require_once(dirname(__FILE__) . '\Settings.php');

function get_html_head() {
	echo '<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="initialize.css">
	<link rel="stylesheet" type="text/css" href="style.css">
';
}

function get_header() {
	global $boardurl;
echo '<header>
		<div id="Header">
			<div class="wrapper">
				<div class="wrapperShadow clearfix">
					<div>
						<h2 id="siteName">诺丁汉中国学联</h2>
						<a class="english rightFloat" href="#">English</a>
					</div>
				</div>
			</div>
		</div>
		<div id="Nav">
			<div class="wrapper">
				<div class="wrapperShadow clearfix">
					<div id="navList" class="clearfix">
					<nav>
						<ul class="clearfix">
							<li><a href="',$boardurl,'">主页</a></li>
							<li><a href="',$boardurl,'/index.php">论坛</a></li>
							<li><a href="http://weibo.com/cssanottingham" target="_blank">学联微博</a></li>
							<li><a href="http://page.renren.com/600406948" target="_blank">学联人人</a></li>
							<li class="rightFloat"><a href="http://cssanott.co.uk" target="_blank">回到旧版论坛</a><li>
						</ul>
					</nav>
					</div>
				</div>
			</div>
		</div>
		<div id="Logo">
			<div class="wrapper">
				<div class="wrapperShadow">
					<div id="siteLogo">
						<a href="',$boardurl,'"><img src="images/logo.png"></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="Main">
		<div class="wrapper">
			<div class="wrapperShadow">';
}

function get_footer() {
	echo '<footer>
					<div id="footer" class="clearfix">
						<h5>诺丁汉中国学联</h5>
						<div id="footerLink">
							<h6>友情链接</h6>
							<ul>
								<li><a class="english" href="">Lorem ipsum dolor.</a></li>
								<li><a class="english" href="">Sed, assumenda, ipsum!</a></li>
								<li><a class="english" href="">Commodi, assumenda, eveniet.</a></li>
							</ul>
						</div>
						<div id="footerAbout">
							<h6>关于网站</h6>
							<ul>
								<li><a class="english" href="">Lorem ipsum dolor.</a></li>
								<li><a class="english" href="">Officia, ipsa, pariatur?</a></li>
								<li><a class="english" href="">Tempore, repellendus, ipsam.</a></li>
								<li><a class="english" href="">Distinctio, dolorem, ducimus.</a></li>
							</ul>
						</div>
					</div>
					<div id="copyright">
						<p>Copyright © 2013 诺丁汉中国学联版权所属。网站制作人：石清琪</p>
					</div>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>';
}