<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜啦购 - 商家后台</title>
<link href="http://static.soulagou.com/css/global.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/web-im/sale-ui-dialogBox.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/outlet_manager/quote/grid.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/plugin/TogglePanels.css" rel="stylesheet" type="text/css" />

	<link href="http://static.soulagou.com/css/outlet_manager/alone/over_view.css"
		rel="stylesheet" type="text/css" />
	<link href="http://static.soulagou.com/css/alone/admin_register.css" rel="stylesheet"
		type="text/css" />
<title>搜啦购 - 商家后台</title>
</head>
<body> 
	<table class="yt_t" width="100%" border="0" cellspacing="0"
		cellpadding="0">
		<tr>
			<td class="yt_t_td">
				<!--这里放页头--> 				
<div id="header">
	<div class="pg_w">
		
			
			<div class="dfr pdt40">
				<span class="w1">你好，</span>
				<span class="b2 txs14 txw1 mgr30">lzf2342012</span>
				<span>
					
					<a href="/j_spring_security_logout" class="txd1 w1 mgr20">安全退出</a>
				</span>
				<!--  
				<span style="display:none">
					<a href="#" class="txd1 w1 mgr20">修改密码</a>
				</span>
				-->
			</div>
		
		<div class="pdt11 pdl10">
			<a href="http://sso.soulagou.com/login?service=http://www.soulagou.com/j_client_security_check">
				<img src="http://static.soulagou.com/img/outlet_manager/header_logo.png" />
			</a>
		</div>
		<div class="clear"></div>
	</div>
</div>
				<!--这里放页头 end-->
			</td>
		</tr>
		<tr>
			<td valign="top">
				<table class="yt_b" width="950" border="0" cellspacing="0"
					cellpadding="0">
					<tr>
						<td width="200" class="l_col">
							<!--header 此段注释内调用左栏内容--> 
<div id="accordion">
	<input id="backHomeBtn" class="index_b" type="button"/>
	<h3 class="menu_title01">
		<div class="menu_title_div">
			<a href="#"></a>
		</div>
	</h3>
	<ul class="menu_list01">
		<li id="background_home" style="display: none;"><a href="/evbeta/User/Storer/">商户后台首页</a></li>
		<li id="shopset"><a href="/evbeta/User/Storer/store" target="_blank">店铺设置</a></li>
		
		<li><a href="/evbeta/User/Storer/password" target="_blank" >修改密码</a></li>
		<!--
		<li><a href="">物流设置</a></li>
		<li><a href="">投诉管理</a></li>
		-->
	</ul>
	<ul class="menu_list04">
		<li><a href="/evbeta/User/Storer/add.html" target="_blank">发布优惠资讯活动</a></li>
		<li id="promotional"><a href="/evbeta/User/Storer/news.html" target="_blank">我的优惠资讯活动</a></li>
		<li><a href="/evbeta/User/Storer/cert" target="_blank" >手机邮箱认证</a></li>
		<li><a href="/evbeta/User/Storer/client" target="_blank" >我的关注者</a></li>
		<li><a href="/evbeta/User/Storer/card" target="_blank" >商铺二维码管理</a></li>
		<li id="promotional">以下网页尚未创建</li>	
		<li><a href="/evbeta/User/Storer/password" target="_blank" >--批量信息页二维码</a></li>	
	</ul>
	
</div>
 
							<!--header 此段注释内调用左栏内容 end-->
						</td>
						<td class="r_col">
							<!--header 此段注释内调用右栏内容--> 
							
	<div id="wrap">
		<div class="r_w">
			<div class="r_breadcrumb">
				
				<a href="/evbeta/User/Storer/">商家管理</a> &gt;管理总览
			</div>
			<div class="mgt10">
				<div class="logobod">
					<div class="dfr dfl_title01 dfr_tt">
						
						<a href="/evbeta/User/Storer/store" class="on">完善基本资料</a>
					</div>
					<span class="dfl"> 
						
							
							
								<img width="116" height="44" src="http://static.soulagou.com/img/outlet_manager/review_logo1.jpg" />
							
						
					</span>
					<span class="dfl mgl10 r2 txw1 mgt10"><?php echo ($shopinfo[0]['shopname']); ?></span>
					<div class="clear"></div>
				</div>
			</div>
			<!-- 基本资料-->
			<div>
				<div class="persent47 txlh10 mgl05 dfl">
					<p>商家账号：<?php echo session('username')?></p>
					<p>商户类型：
						
						
						商户
					</p>
					<p>电子邮箱：<?php echo ($shopinfo[0]['email']); ?></p>
				</div>
				<div class="persent47 txlh10 mgr05 dfr">
					<p>入驻时间：<?php echo date('Y-m-d',$shopinfo[0]['regtime'])?></p>
					<p>所属商圈：四川 成都 青羊区 其他</p>
					<p>详细地址：<?php echo ($shopinfo[0]['address']); ?></p>
				</div>
				<div class="clear"></div>
			</div>
			<!-- 基本资料 end-->

			<!-- 未认证 -->
			
				<div class="mgt10 bod1">
					<div class="dfl icon icon1 mgt18"></div>
					<div class="dfl mgt20 mgl10">
						
						您的店铺还未进行认证，只有搜啦认证通过的店铺才能参与商品交易， 
						<a href="/evbeta/User/Storer/cert_info" class="r1 txd1" target="_blank">马上申请认证</a>
					</div>
					<div class="clear"></div>
				</div>
			

			<!-- 审核中 -->
			

			<!-- 通过 -->
			

			<!-- 拒绝 -->
			
		</div>
	</div>
 
							<!--header 此段注释内调用右栏内容 end-->
						</td>
					</tr>
				</table>

			</td>
		</tr>
	</table>

	<input type="hidden" id="staticURL" value="http://static.soulagou.com" />
	<input type="hidden" id="selfURL" value="http://outlet.soulagou.com" />
	<input type="hidden" id="commodityImageURL" value="http://outlet.soulagou.com" />
	<input type="hidden" value="http://tmp.images.soulagou.com" id="imagePathPrefix"/> 
</body>

<script type="text/javascript">
	jQ("#backHomeBtn").click(function() {
		location.href = '/';
	});
</script>

	<script type="text/javascript">
		jQ("#accordion").togglepanels({
			open : [ 0 ],
			select : jQ("#accordion").find('li').eq(0)
		});
	</script>

</html>