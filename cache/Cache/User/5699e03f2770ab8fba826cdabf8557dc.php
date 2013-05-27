<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>	个人二维码名片</title>
	<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
	<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
	<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />	
	<link href="/evbeta/__PUBLIC__/css/web/user/over_view.css" rel="stylesheet" type="text/css" />
	<link href="/evbeta/__PUBLIC__/css/web/user/upLoad.css" rel="stylesheet" type="text/css" />

	</head>
	<body class="bg txs16">
	    <div id="wrap">
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
			<a href="http://sso.soulagou.com/login?service=http://www.soulagou.com/j_client_security_check">
				<img src="http://static.soulagou.com/img/outlet_manager/header_logo.png" />
			</a>
		</div>
		<div class="clear"></div>
	</div>
</div>
	        <!--Header End-->
	    
	        <div class="pg_w">
	            <table width="100%" border="0" cellspacing="0" cellpadding="0">
	              <tr>
	                <td width="200" class="txvt">
	                	<!--Left Menu Start-->
<div id="accordion">
	<ul class="menu_list01">
		<li class="home"><a href="/evbeta/User/Storer/">商户首页</a></li>		
		<li class="top">店铺信息</li>	
		<li><a href="/evbeta/User/Storer/add.html">发布优惠活动</a></li>
		<li><a href="/evbeta/User/Storer/news.html">管理优惠活动</a></li>						
		<li><a href="/evbeta/User/Storer/client" >关注我的</a></li>		
		<li class="top">店铺管理</li>	
		<li><a href="/evbeta/User/Storer/store">店铺设置</a></li>
		<li class="on"><a href="/evbeta/User/Storer/card" >店铺二维码</a></li>
		<li><a href="/evbeta/User/Storer/scene">店铺实景图</a></li>		
		<li><a href="/evbeta/User/Storer/cert_info" target="_blank">店铺认证</a></li>						
		<li class="top">账号设置</li>	
		<li><a href="/evbeta/User/Storer/password" >修改密码</a></li>
		<li><a href="/evbeta/User/Storer/cert">手机邮箱认证</a></li>				
		<li class="top">以下网页尚未创建</li>	
		<li><a href="#" >--批量信息页二维码</a></li>	
	</ul>

</div>
	                	<!--Left Menu End-->
	                </td>
	                <td class="r_col">
	                	<!--Right Content Start-->
	                	
	<div class="r_w">
		<div class="r_breadcrumb">
			
			<a href="#">店铺管理</a> &gt; 店铺二维码
		</div>
		<div class="mp_gray_block01 r_breadcrumb">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="150" class="txvt">
						<div class="imgbox">
							显示店铺二维码名片
						</div>
					</td>
					<td class="pdl18">
						<form>
							<table border="0" cellspacing="5" cellpadding="5">
							<tr><td>店名：</td><td><input type="text" class="input" name="name"></td></tr>
							<tr><td>电话：</td><td><input type="text" class="input" name="name"></td></tr>
							<tr><td>qq：</td><td><input type="text" class="input" name="name"></td></tr>
							<tr><td>网址：</td><td><input type="text" class="input" name="name"></td></tr>
							<tr><td>店址：</td><td><input type="text" class="input" name="name"></td></tr>
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