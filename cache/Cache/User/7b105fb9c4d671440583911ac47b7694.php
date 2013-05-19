<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EV街-商户店铺设置</title>
<link href="http://static.soulagou.com/css/global.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/web-im/sale-ui-dialogBox.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/outlet_manager/quote/grid.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/plugin/TogglePanels.css" rel="stylesheet" type="text/css" />

	<link href="http://static.soulagou.com/css/outlet_manager/alone/admin_info_merchant.css" rel="stylesheet" type="text/css" />
	<link href="http://static.soulagou.com/css/plugin/sale-ui-cascadeSelect.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="http://static.soulagou.com/css/plugin/sale-ui-combobox.css">


<script type="text/javascript" src="http://static.soulagou.com/js/base/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/plugin/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/plugin/underscore-min.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/plugin/TogglePanels.js"></script>

	<script type="text/javascript" src="http://static.soulagou.com/js/plugin/sale-ui-select.js"></script>
	<script type="text/javascript" src="http://static.soulagou.com/js/outlet_manager/alone/outlet_info.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
	<script type="text/javascript" src="http://static.soulagou.com/js/outlet_manager/alone/latlong.js"></script>

<title>EV街-商户店铺设置</title>
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
							
	<div id="wrap">
		<div class="r_w">
			<div class="r_breadcrumb">
				
				<a href="/">商家管理</a> &gt; 基本信息
			</div>
			<div id="allmap"></div>
			<!--基本信息内容-->
			<div class="block3">
				
				<form id="outletInfoForm" action="/outlet/info" method="POST">
					<table class="block_table mgt14" width="100%" border="0"
						cellspacing="0" cellpadding="0">
						
						<tr>
							<th width="26%">
								<span class="r1">*</span>
								<span class="th">所在位置：</span></th>
							<td colspan="2">
								
									
										<select id="provinceId" name="provinceId" class="inp_text"></select>
										<select id="cityId" name="cityId" class="inp_text"></select>
										<select id="districtId" name="districtId" class="inp_text"></select>
										<select id="businessDistrictId" name="businessDistrictId" class="inp_text"></select>
										<input id="areas" name="areas" type="hidden" value="00000001_00000002_00000007_00000054"/>
									
									
								
							</td>
						</tr>																															
								<tr>
									<th width="22%"></th>
									<td width="47%">
										<input id="address" name="address" class="inp_text persent95" type="text" value="新社区" maxlength="99"/>
										<input id="longitude" name="longitude" type="hidden" value="103.988429"/>
										<input id="latitude" name="latitude" type="hidden" value="30.685102"/>
									</td>
									<td>
										
									</td>
								</tr>																							
						<tr>
							<th width="22%"><span class="r1">*</span> <span class="th">联系人：</span></th>
							<td width="47%">
								<input id="contact" name="contact" class="inp_text persent47" type="text" value="李" maxlength="15"/>
								
							</td>
							<td></td>
						</tr>
						<tr>
							<th width="22%"><span class="th">手机号码：</span></th>
							<td width="47%">
								<p>45664196816</p><a href="/evbeta/User/Storer/cert">修改认证</a>
							</td>
							<td>
								
							</td>
						</tr>
						<tr>
							<th width="22%"><span class="th">电子邮箱：</span></th>
							<td width="47%">
								<p>45664196816@qq.com</p><a href="/evbeta/User/Storer/cert">修改认证</a>
							</td>
							<td>
								
							</td>
						</tr>
						<tr>
							<th width="22%"><span class="th">固定电话：</span></th>
							<td width="47%">
								<input id="areaCode" name="areaCode" class="inp_text persent20" type="text" value="" maxlength="4"/> - 
								<input id="tel" name="tel" class="inp_text persent20" type="text" value="" maxlength="8"/> - 
								<input id="ext" name="ext" class="inp_text persent20" type="text" value="" maxlength="4"/>
							</td>
							<td>
								
							</td>
						</tr>
						<tr>
							<th width="22%"></th>
							<td width="47%">
								<input type="submit" class="inp_btn btn_redarrow" value="保存信息" />
							</td>
							<td></td>
						</tr>
					</table>
				</form>
			</div>
			<!--基本信息内容 end-->
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
			select : jQ("#accordion").find('li').eq(1)
		});
		jQ.latlongInfo.init(true);
	</script>
	
		<script type="text/javascript">
			jQ.outletInfo.init("/");
		</script>
	

</html>