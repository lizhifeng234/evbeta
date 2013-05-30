<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜啦购 - 商家后台</title>
<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />	
	<link href="/evbeta/__PUBLIC__/css/web/user/over_view.css" rel="stylesheet" type="text/css" />

<title>搜啦购 - 商家后台</title>
</head>
<body  class="bg"> 
	<table class="yt_t" width="100%" border="0" cellspacing="0"
		cellpadding="0">
		<tr>
			<td class="yt_t_td">
				<!--这里放页头--> 
<div id="header">
	<div class="pg_w">
		
			
			<div class="dfr pdt40">
				<span class="w1">你好，</span>
				<span class="b2 txw1 mgr30">lzf2342012</span>
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
						<td width="200" class="txvt">
							<!--header 此段注释内调用左栏内容--> 
<div id="accordion">
	<ul class="menu_list01">
		<li class="home"><a href="/evbeta/User/Storer/">商户首页</a></li>		
		<li class="top">店铺信息</li>	
		<li><a href="/evbeta/User/Storer/add.html">发布优惠活动<em></em></a></li>
		<li><a href="/evbeta/User/Storer/news.html">管理优惠活动<em></em></a></li>						
		<li><a href="/evbeta/User/Storer/client" >关注我的<em></em></a></li>		
		<li class="top">店铺管理</li>	
		<li><a href="/evbeta/User/Storer/store">店铺设置<em></em></a></li>
		<li><a href="/evbeta/User/Storer/card" >店铺二维码<em></em></a></li>
		<li><a href="/evbeta/User/Storer/scene">店铺实景图<em></em></a></li>		
		<li><a href="/evbeta/User/Storer/cert_info" target="_blank">店铺认证<em></em></a></li>						
		<li class="top">账号设置</li>	
		<li><a href="/evbeta/User/Storer/password" >修改密码<em></em></a></li>
		<li><a href="/evbeta/User/Storer/cert">手机邮箱认证<em></em></a></li>				
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
				
				<a href="/evbeta/User/Storer/">商家管理</a> &gt;管理总览
			</div>
			<div class="mgt10">
				<div class="r_breadcrumb">				<!--logobod属性慎用,它以下的p和a标签会不同样式,推荐用r_breadcrumb具有同样效果-->
					
					<span class="dfl"> 
	
								<img width="116" height="44" src="http://static.soulagou.com/img/outlet_manager/review_logo1.jpg" />
							
						
					</span>
					<span class="dfl mgl10 r2 txw1 mgt10"><?php echo ($shopinfo[0]['shopname']); ?></span>
					<div class="clear"></div>
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
						您的店铺还未进行认证
						<a href="/evbeta/User/Storer/cert_info" class="r1 txd1" target="_blank">马上申请认证</a>
					</div>
					<div class="clear"></div>
				</div>
				</div>
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

</body>



</html>