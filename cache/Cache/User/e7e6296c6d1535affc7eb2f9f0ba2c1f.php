<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>	个人二维码名片</title>
		
		<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />	
	<link href="/evbeta/__PUBLIC__/css/web/user/main_page.css" rel="stylesheet" type="text/css" />

	</head>
	<body class="bg">
	    <div id="wrap" class="txs16">
	    	<!--Header Start-->

<div id="header">
	<div class="pg_w">
		
			
			<div class="dfr pdt40">
				<span class="w1">你好，</span>
				<span class="b2 txs14 txw1 mgr30">lzf2342012</span>
				<span>
					
					<a href="/j_spring_security_logout" class="txd1 w1 mgr20">安全退出</a>
				</span>
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
	                <td width="200" class="l_col txvt">
	                	<!--Left Menu Start-->
<div id="accordion">

	<div class="">
		<img src="http://static.soulagou.com/img/member_center/bar_personal.png" />
	</div>
	<ul class=" mgt10 user_list">
		<li id="menu_home"><a href="/evbeta/User/Member/">首页</a></li>
		<li id="menu_profile"><a href="/evbeta/User/Member/profile">个人信息</a></li>
		<li id="menu_favorite"><a href="/evbeta/User/Member/concern">我的关注</a></li>
		<li id="menu_favorite"><a href="/evbeta/User/Member/cert">手机邮箱认证</a></li>
		<li id="menu_favorite"><a href="/evbeta/User/Member/card">二维码个人名片</a></li>
	</ul>
</div>
	                	<!--Left Menu End-->
	                </td>
	                <td class="r_col">
	                	<!--Right Content Start-->
	                	
	<div class="r_w">
		<div class="r_breadcrumb">
			
			<a href="/">个人管理</a> &gt; 首页
		</div>
		<div class="mp_gray_block01">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="112">
						<div class="imgbox">
							显示二维码个人名片
						</div>
					</td>
					<td class="pdl18">
						<form>
							<table>
							<tr><td>姓名：</td><td><input type="text" class="input" name="name"></td></tr>
							<tr><td>电话：</td><td><input type="text" class="input"  name="name"></td></tr>
							<tr><td>邮箱：</td><td><input type="text" class="input"  name="name"></td></tr>
							<tr><td>qq:</td><td><input type="text" class="input"  name="name"></td></tr>
							<tr><td>单位：</td><td><input type="text" class="input"  name="name"></td></tr>
							<tr><td>职位：</td><td><input type="text" class="input"  name="name"></td></tr>
							<tr><td>网址：</td><td><input type="text" class="input"  name="name"></td></tr>
							<tr><td>住址：</td><td><input type="text" class="input"  name="name"></td></tr>
							<tr><td></td>
								<td><input type="submit" class="inp_btn btn_brown" value="生成" /></td></tr>
							</table>
						</form>
					</td>
				</tr>
			</table>
		</div>


	                	<!--Right Content End-->
	                </td>
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
			opens : [ 0 ],
			select : jQ("#menu_home")
		});
	</script>

	<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcb3e995f904ed394dc22769c6916da62' type='text/javascript'%3E%3C/script%3E"));
</script>
</html>