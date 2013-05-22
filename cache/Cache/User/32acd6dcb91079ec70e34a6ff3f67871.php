<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>		个人管理 - 个人信息		</title>
		
		<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />	
	<link href="/evbeta/__PUBLIC__/css/web/user/main_page.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="/evbeta/__PUBLIC__/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/member/profile.js"></script>

	</head> 
	<body class="bg">
	    <div id="wrap" class="txs16">
	    	<!--Header Start-->
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
			
			<a href="/">个人管理</a> &gt; 个人信息
		</div>
	
		<div class="mp_me_dy">

			<div class="block3">
				<form id="profileForm" action="/profile" method="post">
					<table class="block_table mgt14" width="100%" border="0"
						cellspacing="0" cellpadding="0">
						<tr>
							<th width="22%"><span class="th">性别：</span></th>
							<td>
								<span class="mgr20">
									<input id="gender1" name="gender" class="inp_radio" type="radio" value="true"/>男
								</span>
								<span class="mgr20">
									<input id="gender2" name="gender" class="inp_radio" type="radio" value="false" checked="checked"/>女
								</span>
							</td>
						</tr>
						<tr>
							<th width="22%"><span class="th">手机：</span></th>
							<td>
								
								<p>515611891515</p>					
							</td>
							<td width="300">
								<a href="/evbeta/User/Member/cert" target="_blank">修改</a>
							</td>
						</tr>
						<tr>
							<th width="22%"><span class="th">邮箱：</span></th>
							<td>
								
								<p>156151515@qq.com</p>	
							</td>
							<td>
								<a  href="/evbeta/User/Member/cert" target="_blank">修改</a>	
							</td>
						</tr>
						<tr>
							<th width="22%"><span class="th">生日：</span></th>
							<td>
								<span class="mgr20">
									<select id="year"></select>年
								</span>
								<span class="mgr20">
									<select id="month"></select>月
								</span>
								<span class="mgr20">
									<select id="day"></select>日
								</span>
								<input id="birthday" name="birthday" type="hidden" value=""/>
							</td>
							<td>
								<p class="r2">每年生日，部分商家可能有特殊优惠哦！</p>
							</td>
						</tr>
						<tr>
							<th width="22%"><span class="th">最常活动商圈：</span></th>
							<td>
								<span class="mgr20">
									<select id="province"></select>
								</span>
								<span class="mgr20">
									<select id="city"></select>
								</span>
								<span class="mgr20">
									<select id="district"></select>
								</span>
								<input id="location" name="location" type="hidden" value=""/>
							</td>
						</tr>
						<tr>
            				<th></th>
           					<td><input type="submit" class="inp_btn btn_brown" value="确 定" /></td>
          				</tr>
					</table>
				</form>
			</div>
		</div>
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
		jQ.profile.init('/');
		jQ("#accordion").togglepanels({opens:[0], select:jQ("#menu_profile")});
	</script>

	<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcb3e995f904ed394dc22769c6916da62' type='text/javascript'%3E%3C/script%3E"));
</script>
</html>