<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>注册账号</title>
		<link rel="stylesheet" type="text/css" href="/evbeta/__PUBLIC__/css/web/register.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/base.js"></script>
		<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/suggest.js"></script>

	</head>
	<body>
		<!--头部 开始-->
		<div class="header">
			<span class="w_hl"><a class="box" href="http://help.163.com/special/sp/urs_index.html" target="_blank">帮助</a></span>
			<a href="http://shop.163.com/"><img src="/register/images/shop_logo.jpg" alt="网易商城" border="0" class="logo2" title="网易商城"/></a><span class="seperate3"></span>

			<a href="http://reg.163.com/"><img src="/register/images/logo1.png" alt="网易通行证" border="0" class="logo1" title="网易通行证"/></a>
			<div class="white_box mgb30">
				<div class="bo">
					<center class="bobt">
						取回密码
					</center>
					<div class="db dfr">
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="bosh">
					<div class="news_style">
						<p class="xq_p"></p>
						<div class="clear"></div>
						<div class="xq_text">
							<div class="main1">
								<form id="fReg" method="post" action="__URL__/preg" onsubmit="return checkURS.checkSubmit()" autocomplete="off">
									<ul class="main_form">
										<span id="mail_box">
											<li>
												<div class="fm_left">
													&nbsp;填写用户名：
												</div>
												<div class="fm_right">
													<input type="text" value="" class="input" name="username" id="username"/>
												</div>
											</li>
											
											<li>
												<div class="fm_left">
													&nbsp;验证邮箱：
												</div>
												<div class="fm_right">
													<table>
														<tr>
															<td><span class="suggest_box" id="useremail_box">
																<input type="text" class="input" name="email"  id="email_name_r" value="" autocomplete="off" />
															</span></td><td><span style="display:none" class="right_img" id="email_name_r_right"></span><span style="display:none" id="email_name_r_err"> <span class="err_left"></span> <span class="err_info"> <span class="err_mid" ><span class="err_img1"></span><em></em></span></span> <div class="clear"></div> </span></td>
														</tr>
													</table>
													<div class="f_s_12 clear">
														<div class="f_s_12 c_8A8A8A clear" id="email_name_r_info">
															输入你注册所用邮箱，用于找回密码。
														</div>
													</div>
												</div>
											</li>																		
											<li class="subArea">
												<div class="subAreaBtn">
													<input class="button1" id="submit" value="提交" type="submit">
												</div>
											</li>
											
									</ul>
								</form>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>

			<!--主体 开始-->

			<!--主体 结束-->
			<!--版权 开始-->
			<div class="footer">
				<a href="http://corp.163.com/eng/about/overview.html" target=_blank hasbox="2">About NetEase</a> - <a href="http://gb.corp.163.com/gb/about/overview.html" target=_blank >公司简介</a> - <a href="http://gb.corp.163.com/gb/contactus.html" target=_blank >联系方法</a> - <a href="http://corp.163.com/gb/job/job.html" target=_blank >招聘信息</a> - <a href="http://help.163.com/" target=_blank >客户服务</a> - <a href="http://gb.corp.163.com/gb/legal.html" target=_blank >相关法律</a> - <a href="http://emarketing.biz.163.com/" target=_blank >网络营销</a>
				<br />
				易维公司版权所有 &copy;1997-2013
			</div>
			<!--版权 结束-->
			<div id=clickname style="display:none;">
				Reg
			</div>
	</body>
</html>
<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/checkURS.js"></script>
<script>
	var email_str = ["@qq.com", "@sina.com", "@hotmail.com", "@gmail.com", "@yahoo.com", "@sohu.com", "@yahoo.cn", "@vip.qq.com", "@sina.cn", "@139.com"];
	new suggest(email_str, "useremail_box", "email_name_r");

	//初始化用户名
	var userinit = "";
	//if(userinit == "" || userinit == null){
	//$_id("email_name_r").value = "如 name@example.com";
	//}

	//初始化密码保护问题
	var question = "";
	if (question && question != "" && question != "请选择...") {
		$_id("qas").innerHTML = question;
		$_id("pass_qa").value = question;
		checkURS.setQA();
	}
	var firsErrId = "";

</script>