<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Alphamed</title>
	<link href="<?php echo base_url('/assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body>
	<div id="header">
		<a href="index.html" class="logo"><img src="/assets/images/alphamed-logo.png" alt="" style="height: 93px;"></a>
		<ul>
			<li class="selected">
			<!-- 	<a href="/">home</a> -->
				<a href="<?php echo base_url('/');?>">home</a>
			</li>
			<li class="selected">
				<a href="<?php echo base_url('/page/about');?>">about</a>
			</li>
			<li class="selected">
				<a href="<?php echo base_url('/page/services');?>">services</a>
			</li>
			<li class="selected">
				<a href="<?php echo base_url('/page/locations');?>">our locations</a>
			</li>
			<li class="selected">
				<a href="<?php echo base_url('/page/contact');?>">contact</a>
			</li>
			<li class="selected">
				<a href="<?php echo base_url('/page/login');?>">login</a>
			</li>
		</ul>
	</div>