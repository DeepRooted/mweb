<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <base href="<?php echo site_url();?>" />
  <title>Johnny的博客 - SYSIT个人博客</title>
      <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
  
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}	
  </style>
</head>
<body>
<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>
<![endif]-->
<!--[if IE 9]>
<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->
<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
<div id="OSC_Banner">
    <div id="OSC_Slogon">Johnny's Blog</div>
    <div id="OSC_Channels">
        <ul>
        <li><a href="#" class="project">心情 here...</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div><!-- #EndLibraryItem --><div id="OSC_Topbar">
	  <div id="VisitorInfo">
		当前访客身份：
				<?php 
				    $login_user = $this->session->userdata('login_user');
				    if($login_user){
				?>
				    	<?php echo 
				    	$login_user->NAME;?> [ <a href="user/logout">退出</a> ]
		    	<?php
				    }
				    else{
			    ?>
					游客 [ <a href="user/login">登录</a> | <a href="user/reg">注册</a> ]
				<?php
				    }

				?>
				<span id="OSC_Notification">
			<a href="inbox.htm" class="msgbox" title="进入我的留言箱">你有<em>0</em>新留言</a>
																				</span>
</div>
		<div id="SearchBar">
    		<form action="#">
				<input name="user" value="154693" type="hidden">
				<input id="txt_q" name="q" class="SERACH" value="在此空间的博客中搜索" onblur="(this.value=='')?this.value='在此空间的博客中搜索':this.value" onfocus="if(this.value=='在此空间的博客中搜索'){this.value='';};this.select();" type="text">
				<input class="SUBMIT" value="搜索" type="submit">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
	
<div class="BlogList">
<ul>
  <?php
  	foreach($blogs as $blog){


   ?>
  <li class="Blog">
	<h2 class="BlogAccess_true BlogTop_0"><a href="blog/view/<?php echo $blog->BLOG_ID; ?>"><?php echo $blog->TITLE; ?></a></h2>
	<div class="outline">
	  <span class="time">发表于 <?php echo $blog->ADD_TIME; ?></span>
	  <span class="catalog">分类: <a href="#"><?php echo $blog->CATALOG_NAME; ?></a></span>
	  <span class="stat">统计: 1评/<?php echo $blog->CLICK_RATE; ?>阅</span>
	  	  	  
	  	</div>
		<div class="TextContent" id="blog_content_24027">
				<?php 
				echo mb_strlen($blog->CONTENT)<20?$blog->CONTENT:mb_substr($blog->CONTENT,0,20).'...';
				 ?>
		<div class="fullcontent"><a href="blog/view/<?php echo $blog->BLOG_ID; ?>">阅读全文...</a></div>
			</div>
	  </li>
	  <?php } ?>
</ul>
<div class="clear"></div>
	</div>
<div class="BlogMenu">
<?php if($login_user){ ?>

<div class="admin SpaceModule">
  <strong>博客管理</strong>
  <ul class="LinkLine">
	<li><a href="newBlog.htm">发表博客</a></li>
			<li><a href="blogCatalogs.htm">博客分类管理</a></li>
	<li><a href="blogs.htm">文章管理</a></li>
	<li><a href="blogComments.htm">网友评论管理</a></li>
  </ul>
</div>
<?php } ?>
<div class="comments SpaceModule">
  <strong>最新网友评论</strong>
      <ul>
		<li>
		<span class="u"><a href="#"><img src="images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></span>
		<span class="c">hoho
			<span class="t">发布于 11分钟前 <a href="viewPost_comment.htm">查看»</a></span>
		</span>
		<div class="clear"></div>
	</li>
		<li>
		<span class="u"><a href="#"><img src="images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></span>
		<span class="c">测试评论111
			<span class="t">发布于 34分钟前 <a href="viewPost_logined.htm">查看»</a></span>
		</span>
		<div class="clear"></div>
	</li>
		<li>
		<span class="u"><a href="#"><img src="images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></span>
		<span class="c">测试评论
			<span class="t">发布于 34分钟前 <a href="viewPost_logined.htm">查看»</a></span>
		</span>
		<div class="clear"></div>
	</li>
	  </ul>
  </div></div>
<div class="clear"></div>

<link type="text/css" rel="stylesheet" href="css/shCore.css">
<link type="text/css" rel="stylesheet" href="css/shThemeDefault.css">
</body></html>