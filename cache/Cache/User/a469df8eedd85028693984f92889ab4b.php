<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> 个人管理 - 关注商家 </title>

		<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
	<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
	<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />	
	<link href="/evbeta/__PUBLIC__/css/web/user/over_view.css" rel="stylesheet" type="text/css" />
	<link href="/evbeta/__PUBLIC__/css/web/user/upLoad.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="bg">
		<div id="wrap">
			<!--Header Start-->

			<div id="header">
	<div class="pg_w txs16">
		
			
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
			<!--Header End-->
			 <div  class="txs16">
			<div class="pg_w">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="200" class="txvt"><!--Left Menu Start-->
						<div id="accordion">
							<ul class="menu_list01">
		<li class="home"><a href="/evbeta/User/Storer/">商户首页</a></li>		
		<li class="top">店铺信息</li>	
		<li><a href="/evbeta/User/Storer/add.html">发布优惠活动<em></em></a></li>
		<li><a href="/evbeta/User/Storer/news.html">管理优惠活动<em></em></a></li>						
		<li class="on"><a href="/evbeta/User/Storer/client" >关注我的<em></em></a></li>		
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
						</div><!--Left Menu End--></td>
						<td class="r_col"><!--Right Content Start-->
						<div class="r_w">
							<div class="r_breadcrumb">

								<a href="/">店铺信息</a> &gt; 关注我的
							</div>
							<div class="r_breadcrumb">												
							<div>
								<div class="dfl dfl_title01">
									<a href="">群发优惠资讯</a><a href="">我的会员</a>
									
								</div>
								<div class="clear"></div>
							</div>

							<div class="m_col_div">
								<table class="m_col_table" width="100%" border="0" cellspacing="1"
								cellpadding="0">
									<tr>
										<th width="30%">用户名称</th>
										<th width="20%">关注时间</th>
										<th width="20%">消费金额</th>
										<th width="20%">身份</th>
										<th class="last_r">操作</th><!--成为会员-->
									</tr>
									<tr>
										<td>lzf2342012</td>
										<td>2013-06-01</td>
										<td>0元</td>
										<td>关注者</td>
										<td class="last_r"><a href="">升为会员</a></td><!--发送优惠资讯/成为会员-->
									</tr>
									<tr>
										<td>lzf2342008</td>
										<td>2013-12-30</td>
										<td>1561元</td>
										<td>会员</td>
										<td class="last_r"><a href="">取消会员</a></td><!--发送优惠资讯/成为会员-->
									</tr>
								</table>
							</div>

							<div id="" class="page">
								共1页<a href="?page=1">上一页</a><span>1</span><a href="?page=1">下一页</a>
							</div>
							</div>
						</div><!--Right Content End--></td>
					</tr>
				</table>
			</div>
		</div>
		</div>
	</body>

	<script type="text/javascript">
		//var lastName = "@sale114";
		//jQ.webIM({
		//	service : "/http-bind/",
		//	userName : "user_lzf2342012" + lastName,
		//	passWord : "",
		//	lastName : lastName,
		//	myName : 'lzf2342012',
		//	log : false
		//});

		jQ(".chat_btn").click(function() {
			//var info = jQ(this).attr("id").split("_");
			//var jid = "outlet_" + info[0] + lastName;
			//var name = info[1];
			//jQ.openDialog({jid : jid, userName : name});
			location.target = "_blank";
			location.href = "http://wpa.qq.com/msgrd?V=1&Uin=4000111989&Site=im.qq.com&Menu=yes";
		});
	</script>

	<script type="text/javascript">
		jQ("#accordion").togglepanels({
			opens : [0],
			select : jQ("#menu_favorite")
		});
		jQ.fav.init();
	</script>

	<script type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcb3e995f904ed394dc22769c6916da62' type='text/javascript'%3E%3C/script%3E"));
	</script>
</html>