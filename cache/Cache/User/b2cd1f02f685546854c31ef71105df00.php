<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> 个人管理 - 关注商家 </title>

		<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/web/user/main_page.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="bg">
		<div id="wrap"  class="txs16">
			<!--Header Start-->

			<div id="header">
				<div class="pg_w">

					<div class="dfr pdt40">
						<span class="w1">你好，</span>
						<span class="b2 txs14 txw1 mgr30">lzf2342012</span>
						<span> <a href="/j_spring_security_logout" class="txd1 w1 mgr20">安全退出</a> </span>
					</div>

					<div class="pdt11 pdl10">
						<a href="http://www.soulagou.com"><img src="http://static.soulagou.com/img/member_center/header_logo.png" /></a>
					</div>
				</div>
			</div>
			<!--Header End-->

			<div class="pg_w">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="200" class="l_col"><!--Left Menu Start-->
						<div id="accordion">

							<div class="">
								<img src="http://static.soulagou.com/img/member_center/bar_personal.png" />
							</div>
							<ul class=" mgt10 user_list">
								<li id="menu_home"><a href="/evbeta/User/Member/">首页</a></li>
								<li id="menu_profile"><a href="/evbeta/User/Member/profile" target="_blank">个人信息</a></li>
								<li id="menu_favorite"><a href="/evbeta/User/Member/concern" target="_blank">我的关注</a></li>
								<li id="menu_favorite"><a href="/evbeta/User/Member/cert" target="_blank">手机邮箱认证</a></li>
								<li id="menu_favorite"><a href="/evbeta/User/Member/card" target="_blank">二维码个人名片</a></li>
							</ul>

						</div><!--Left Menu End--></td>
						<td class="r_col txvt"><!--Right Content Start-->
						<div class="r_w">
							<div class="r_breadcrumb">

								<a href="/">个人管理</a> &gt; 我的关注
							</div>

							<div class="mgt30 r_breadcrumb">
								<h2>商家关注</h2>
								<div class="dfl dfl_title01">
									<a href="/fav/outlets">关注分类</a>
								</div>
								<div class="clear"></div>
								<div class="m_col_div">
								<table class="m_col_table concern" width="100%" border="0" cellspacing="0"
								cellpadding="0">
									<tr>									
										<th width="42%">商家名称</th>
										<th width="12%">关注时间</th>
										<th width="12%">关注人气</th>
										<th class="last_r">操作</th>
									</tr>
									<tr>									
										<td width="42%">商家名称</td>
										<td width="12%">关注时间</td>
										<td width="12%">关注人气</td>
										<td class="last_r">操作</td>
									</tr>
									<tr>									
										<td width="42%">商家名称</td>
										<td width="12%">关注时间</td>
										<td width="12%">关注人气</td>
										<td class="last_r">操作</td>
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