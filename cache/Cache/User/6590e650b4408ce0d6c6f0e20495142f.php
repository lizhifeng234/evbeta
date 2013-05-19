<?php if (!defined('THINK_PATH')) exit();?>






















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
	商品发布
</title>
<link href="http://static.soulagou.com/css/global.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/web-im/sale-ui-dialogBox.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/outlet_manager/quote/grid.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/plugin/TogglePanels.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css" href="http://static.soulagou.com/css/plugin/commodity.category.css" />


<script type="text/javascript" src="http://static.soulagou.com/js/base/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/plugin/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/plugin/underscore-min.js"></script>
<!-- 
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.roster.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.muc.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.disco.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.x.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.vcard.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.chatstates.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/sale-ui-dialogBox.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/sale-ui-webIM.js"></script>
-->
<script type="text/javascript" src="http://static.soulagou.com/js/plugin/TogglePanels.js"></script>

	<script type="text/javascript" src="http://static.soulagou.com/js/plugin/commodity.category.js"></script>
	<script type="text/javascript" src="http://static.soulagou.com/js/outlet_manager/alone/commodity-category.js"></script>

<title>
	商品发布
</title>
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
		<li id="background_home" style="display: none;"><a href="#"/>">商户后台首页</a></li>
		<li id="admin_info"><a href="/outlet/info">基本信息</a></li>
		<li id="shopset"><a href="/outlet/setting">店铺设置</a></li>
		<!--
		<li><a href="">物流设置</a></li>
		<li><a href="">投诉管理</a></li>
		-->
	</ul>
	<h3 class="menu_title02">
		<div class="menu_title_div">
			<a href="#"></a>
		</div>
	</h3>
	<ul class="menu_list02">
		<li id="commodity_item_0"><a href="/commodity/category/list.html" >发布商品</a></li>
		<li id="commodity_item_1"><a href="/commodity/list.html?commodityType=GENERAL&commodityActive=ADD&page=1&pageSize=10">正价商品</a></li>
		<li id="commodity_item_2"><a href="/commodity/list.html?commodityType=SALE&commodityActive=ADD&page=1&pageSize=10">折扣商品</a></li>
		<li id="commodity_item_3"><a href="/commodity/list.html?commodityType=CLEAR&commodityActive=ADD&page=1&pageSize=10">清仓商品</a></li>
	</ul>
	<h3 class="menu_title03">
		<div class="menu_title_div">
			<a href="#"></a>
		</div>
	</h3>
	<ul class="menu_list03">
		<li id="commodity_ticket_item_0"><a href="/commodity/ticket/pub.html" >发布优惠券</a></li>
		<li id="commodity_ticket_item_1"><a href="/commodity/ticket/list.html?commodityType=GOLDEN_TICKET&commodityActive=ADD&page=1&pageSize=10">代金券</a></li>
		<li id="commodity_ticket_item_2"><a href="/commodity/ticket/list.html?commodityType=SALE_TICKET&commodityActive=ADD&page=1&pageSize=10">折扣券</a></li>
		<li id="commodity_ticket_item_3"><a href="/commodity/ticket/list.html?commodityType=CLEAR_TICKET&commodityActive=ADD&page=1&pageSize=10">推广券</a></li>
	</ul>
	<h3 class="menu_title04">
		<div class="menu_title_div">
			<a href="#"></a>
		</div>
	</h3>
	<ul class="menu_list04">
		<li id="news"><a href="/outlet/news/list?page=1">新闻动态</a></li>
		<li id="promotional"><a href="/outlet/promotional/list?page=1">微活动</a></li>
		<li id="commodity"><a href="/outlet/microCommodity/list?page=1">微商品</a></li>
	</ul>
	
</div>
 
							<!--header 此段注释内调用左栏内容 end-->
						</td>
						<td class="r_col">
							<!--header 此段注释内调用右栏内容--> 
							
	<div class="r_w">

		<div class="r_breadcrumb">
			<a href="#">商家管理</a> &gt; <a href="#">商品管理</a> &gt; 发布商品
		</div>

		<div id="main">
			<div class="commodityTitle">
				<span class="txs14 yh">请选择商品类目</span>
				<!-- 
				<div class="dfr">
					<a class="txd1">点击这里进行提交</a>
				</div>
				 -->
				<!-- 
				<span class="dfr">找不到想要的商品，</span>
				 -->
				<div class="clear"></div>
			</div>
			<div id="commodityWindow"></div>
			<div id="selector">
				<span>你当前选择的类目:</span>
				<div class="selectItems"></div>
				<div class="clear"></div>
			</div>
		</div>
		<form action="/commodity/pub.html"
			class="categoryForm">
			<input id="submitCommodity" type="submit" value="商品类目选好了，去填写商品信息" />
		</form>
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
		jQ.Category.init();
		jQ("#accordion").togglepanels({open:[1],select:jQ("#commodity_item_0")});
	</script>

</html>