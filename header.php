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
							<li><a href="#">学联微博</a></li>
							<li><a href="#">学联人人</a></li>
							<li class="rightFloat"><a href="http://cssanott.co.uk">回到旧版论坛</a><li>
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
						<a href="#"><img src="images/logo.png"></a>
					</div>
				</div>
			</div>
		</div>
	</header>';
}