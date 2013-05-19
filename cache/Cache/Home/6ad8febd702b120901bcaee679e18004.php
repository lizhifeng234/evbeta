<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>注册企业账号</title>
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
						欢迎加盟易维
					</center>
					<div class="db dfr">
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="bosh">
					<div class="news_style">
						<p class="xq_p"></p>
						<center class="xq_tt oflp" style="align:center;">
							商家注册
						</center>
						<p></p>
						<div class="clear"></div>
						<div class="xq_text">
							<div class="main1">
								<form id="fReg" method="post" action="__URL__/breg" onsubmit="return checkURS.checkSubmit()" autocomplete="off">
									<ul class="main_form">
										<span id="mail_box">
											<li>
												<div class="fm_left">
													<span class="star"></span>&nbsp;填写用户名：
												</div>
												<div class="fm_right">
													<input type="text" value="" class="input" name="username" id="username"/>
													<span style="display:none" class="right_img" id="username_right"></span><span style="display:none" id="username_err"> <span class="err_left"></span> <span class="err_info"> <span class="err_mid" ><span class="err_img1"></span><em></em></span></span> <div class="clear"></div> </span>
													<div class="f_s_12 c_8A8A8A clear" id="username_info">
														6到16个字符，区分大小写。
													</div>
												</div>
											</li>
											<li>
												<div class="fm_left">
													<span class="star"></span>&nbsp;设置密码：
												</div>
												<div class="fm_right">
													<input type="password" value="" class="input" name="password" id="password"/>
													<span style="display:none" class="right_img" id="password_right"></span><span id="passwordTips" style="display:none"></span><span style="display:none" id="password_err"> <span class="err_left"></span> <span class="err_info"> <span class="err_mid" ><span class="err_img1"></span><em></em></span></span> <div class="clear"></div> </span>
													<div class="f_s_12 c_8A8A8A clear" id="password_info">
														6到16个字符，区分大小写。
													</div>
												</div>
											</li>
											<li>
												<div class="fm_left">
													<span class="star"></span>&nbsp;确认密码：
												</div>
												<div class="fm_right">
													<input type="password" value="" class="input"  id="re_password"/>

													<span style="display:none" class="right_img" id="re_password_right"></span><span style="display:none" id="re_password_err"> <span class="err_left"></span> <span class="err_info"> <span class="err_mid" ><span class="err_img1"></span><em></em></span></span> <div class="clear"></div> </span>
													<div class="f_s_12 c_8A8A8A clear" id="re_password_info">
														再次输入你设置的密码。
													</div>
												</div>
											</li>
											<li>
												<div class="fm_left">
													<span class="star"></span>&nbsp;常用邮件：
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
															输入一个你拥有的邮件地址，用于找回密码。
														</div>
													</div>
												</div>
											</li>
											<div class="fm_left">
												<span class="star"></span>&nbsp;选择地区：
											</div>
											<div class="fm_right">
												<select id="province" class="s_select"  name="province"  onchange="provincechange()">
													<option class='province'>省 请选择</option>
													<?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($vo["provinceid"]); ?>"><?php echo ($vo["province"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
												<select  id="city" class="s_select" name="city" onchange="citychange()">
													<option>市 请选择</option>
												</select>
												<select  id="area" name="area" class="s_select"  onchange="areachange()">
													<option>县/市 请选择 </option>
												</select>
												<select name="location" class="s_select" id="location" >
													<option>范围 请选择</option>
												</select>
												<img class="loading" width=15 height=15 src="/evbeta/Public/img/loading.gif" style='display:none'/>

											</div> </li>
											<li>
												<script type="text/javascript">
													window.isNotShowRandomImg = false;
												</script>
												<li>
													<div class="fm_left">
														<span class="star"></span>&nbsp;验证码：
													</div>
													<div class="fm_right">
														<input type="text" name="radomPass" id="usercheckcode" class="input_verify" />
														<img style="float: left;" id="verify" src="__APP__/Home/Public/verify/w/60/h/33"/><span></span>
														<span style="display:none" class="right_img" id="usercheckcode_right"></span><span style="display:none" id="usercheckcode_err"> <span class="err_left"></span> <span class="err_info"> <span class="err_mid" ><span class="err_img1"></span><em></em></span></span> <div class="clear"></div> </span>
														<div class="f_s_12 c_8A8A8A clear" id="usercheckcode_info" >
															不区分大小写。看不清楚可以&nbsp;&nbsp;<a id="changeImgHref" class="c_00008A" onclick="changeverify()">换一个</a>
														</div>
													</div>
													<input type="hidden" name="radomPassID" id="syscheckcode" value="" />
												</li>
												<li class="subArea">
													<div class="subAreaBtn">
														<input class="button1" id="submit" value="注册" type="submit">
													</div>
												</li>
												<li>
													<div class="fm_left">
														&nbsp;
													</div>
													<div class="fm_right">
														<input name="agree" id="agree" checked="checked" type="checkbox">
														我同意<a href="http://reg.163.com/agreement.shtml?v=20130104" target="_blank">"服务条款"</a>和<a href="http://reg.163.com/agreement_game.shtml?v=20130104" target="_blank">"网络游戏用户隐私权保护和个人信息利用政策"</a>
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
<script>
	if (firsErrId && firsErrId != "") {
		window.location.hash = ('#' + firsErrId);
	}
</script>
<script type="text/javascript">
	//地区选择
	function provincechange() {
		var province = $('#province');
		$('select').attr('disabled', true);
		$('.province').remove();
		$('.city').remove();
		$('#city').show();
		$('.loading').show();
		$.get("__APP__/Home/Ajax/getcity", {
			provinceid : province.val()
		}, function(result) {
			if (result != null) {
				for (var i = 0; i < result.length; i++) {
					$('#city:last').append('<option class="city" value=' + result[i]['cityid'] + '>' + result[i]['city'] + '</option>');
				}
				$('select').attr('disabled', false);
				$('.loading').hide();
			}
		}, 'json');
	}

	function citychange() {
		var city = $('#city');
		$('select').attr('disabled', true);
		$('#area').show();
		$('.area').remove();
		$('.loading').show();
		$.get("__APP__/Home/Ajax/getarea", {
			cityid : city.val()
		}, function(result) {
			if (result != null) {
				for (var i = 0; i < result.length; i++) {
					$('#area:last').append('<option class=area value=' + result[i]['areaid'] + '>' + result[i]['area'] + '</option>');
				}
				$('select').attr('disabled', false);
				$('.loading').hide();
			}
		}, 'json');

	}

	function areachange() {
		var area = $('#area');
		$('select').attr('disabled', true);
		$('#location').show();
		$('.location').remove();
		$('.loading').css('display', 'block');
		$.get("__APP__/Home/Ajax/getlocation", {
			areaid : area.val()
		}, function(result) {
			if (result != null) {
				for (var i = 0; i < result.length; i++) {
					$('#location:last').append('<option class=location value=' + result[i]['locationid'] + '>' + result[i]['location'] + '</option>');
				}
				$('select').attr('disabled', false);
				$('.loading').hide();
			} else {
				$('select').attr('disabled', false);
				$('.loading').css('display', 'none');
				alert('该地区目前没有详细范围，敬请期待。');
			}
		}, 'json');
	}

	//地区选择
	//验证码刷新
	function changeverify() {
		$('#verify').attr('src', '__APP__/Home/Public/verify/w/60/h/33/' + Math.random());
	}
</script>