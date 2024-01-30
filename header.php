<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <!--[if IE]>
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
  <![endif]-->
  <!-- Font Awesome CDN リンク -->
  <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?> 
</head>
<body>
<div class="wrapper">

<!-- Header -->
<header>
        <div class="logo"><a href="<?php bloginfo(''); ?>"><img src="https://descratch-inc.com/cdn/shop/files/logo-wht.png"></a></div>

        <div class="hamburger-menu">
         <input type="checkbox" id="menu-btn-check">
         <label for="menu-btn-check" class="menu-btn"><span></span><br>menu</label>
         <!--ここからメニュー-->
        <div class="menu-content">
            <ul>
                <li><button onclick="location.href='https://hd-company.net/'" class="favorite styled" type="button"><i class="fa-solid fa-magnifying-glass"></i>  Search</button></li>
                <li><button onclick="location.href='https://hd-company.net/'" class="favorite styled" type="button"><i class="fa-solid fa-tree-city"></i>  Deals</button></li>
                <li><button class="favorite styled" type="button"><i class="fa-regular fa-note-sticky"></i>  Proposal</button></li>
                <li><button class="favorite styled" type="button"><i class="fa-solid fa-money-check"></i>  ROI</button></li>
            </ul>
        </div>
</div>
        <!--ここまでメニュー-->
</header>
