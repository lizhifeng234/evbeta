<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜啦购 - 微活动 </title>
<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />	
	<link href="/evbeta/__PUBLIC__/css/web/user/over_view.css" rel="stylesheet" type="text/css" />
<title>搜啦购 - 微活动 </title>
</head>
<body> 
	<table class="yt_t" width="100%" border="0" cellspacing="0"
		cellpadding="0">
		<tr>
			<td class="yt_t_td txs16">
				<!--这里放页头--> 
<div id="header">
	<div class="pg_w">
		
			
			<div class="dfr pdt40">
				<span class="w1">你好，</span>
				<span class="b2 txw1 mgr30">lzf2342012</span>
				<span>
					
					<a href="/j_spring_security_logout" class="txd1 w1 mgr20">安全退出</a>
				</span>
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
			<td valign="top" class="bg txs16">
				<table class="yt_b" width="950" border="0" cellspacing="0"
					cellpadding="0">
					<tr>
						<td width="200" class="txvt">
							<!--header 此段注释内调用左栏内容--> 
<div id="accordion">
	<ul class="menu_list01">
		<li class="home"><a href="/evbeta/User/Storer/">商户首页</a></li>		
		<li class="top">店铺信息</li>	
		<li><a href="/evbeta/User/Storer/add.html">发布优惠活动</a></li>
		<li class="on"><a href="/evbeta/User/Storer/news.html">管理优惠活动</a></li>						
		<li><a href="/evbeta/User/Storer/client" >关注我的</a></li>		
		<li class="top">店铺管理</li>	
		<li><a href="/evbeta/User/Storer/store">店铺设置</a></li>
		<li><a href="/evbeta/User/Storer/card" >店铺二维码</a></li>
		<li><a href="/evbeta/User/Storer/scene">店铺实景图</a></li>		
		<li><a href="/evbeta/User/Storer/cert_info" target="_blank">店铺认证</a></li>						
		<li class="top">账号设置</li>	
		<li><a href="/evbeta/User/Storer/password" >修改密码</a></li>
		<li><a href="/evbeta/User/Storer/cert">手机邮箱认证</a></li>				
		<li class="top">以下网页尚未创建</li>	
		<li><a href="#" >--批量信息页二维码</a></li>	
	</ul>
</div>
 
							<!--header 此段注释内调用左栏内容 end-->
						</td>
						<td class="r_col">
							<!--header 此段注释内调用右栏内容--> 
							
	<div id="wrap">
		<div class="r_w">
			<div class="r_breadcrumb">
				<a href="#">店铺信息</a> &gt; 优惠活动
			</div>
			<div class="r_breadcrumb">
				<table class="m_col_table" width="100%" border="0" cellspacing="1"
					cellpadding="0">
					<tr>
						<th width="70%">优惠活动标题</th>
						<th class="last_r">管理</th>
					</tr>
					
					
							<tr>
								<td>
									<p class="ticket_title oflp" style="text-align: center;" >6.1号儿童节，童鞋一律5折</p>
								</td>
								<td><a href="">修改</a>&nbsp;&nbsp;<a href="">删除</a></td>
							</tr>
				</table>
				<div id="" class="page">共1页<a href="?page=1">上一页</a><span>1</span><a href="?page=1">下一页</a></div>
			</div>
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
	jQ("#accordion").togglepanels({open:[5],select:jQ("#promotional")});
	</script>

</html>