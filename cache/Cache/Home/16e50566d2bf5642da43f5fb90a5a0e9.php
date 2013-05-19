<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网易通行证</title>
<link rel="stylesheet" type="text/css" href="/evbeta/__PUBLIC__/css/web/register.css" />
<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/base.js"></script>
<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/suggest.js"></script>
	

</head>
<body>
<!--头部 开始-->
<div class="header">
	<span class="w_hl"><a href="http://help.163.com/special/sp/urs_index.html" target="_blank">帮助</a></span>
		    <a href="http://shop.163.com/"><img src="/register/images/shop_logo.jpg" alt="网易商城" border="0" class="logo2" title="网易商城"/></a><span class="seperate3"></span>


   	<a href="http://reg.163.com/"><img src="/register/images/logo1.png" alt="网易通行证" border="0" class="logo1" title="网易通行证"/></a>
</div><div class="nav">
	<div class="nav_left"></div>
    <div class="nav_middle_wel"><span class="dis_none">欢迎注册网易通行证</span></div>
    <div class="nav_right"></div>
</div>
<!--头部 结束-->
<!--主体 开始-->
<div class="main1">
        <form id="fReg" method="post" action="https://reg.163.com/reg/all/submit.do" onsubmit="return checkURS.checkSubmit()" autocomplete="off">
        <input type="hidden" id="url" name="url" value="http:&#47;&#47;shop.163.com&#47;"/>
        <input type="hidden" id="product" name="product" value="shop" />
        <input type="hidden" id="refererPdt" name="refererPdt" value="" />
		<input type="hidden" id="loginurl" name="loginurl" value="http:&#47;&#47;shop.163.com&#47;" />	
		<input type="hidden" id="fromUrl" name="fromUrl" value="http&#37;3A&#37;2F&#37;2Fmall.163.com&#37;2F" />	
        	<ul class="main_form">                        
		<span id="mail_box">
				<li>
             		 <div class="fm_left"><span class="star"></span>&nbsp;填写用户名：</div>
                     <div class="fm_right"><input type="text" value="" class="input" name="username" id="username"/>	
					 <span style="display:none" class="right_img" id="username_right"></span><span style="display:none" id="username_err">
                     <span class="err_left"></span>
                        <span class="err_info">                        	
                            <span class="err_mid" ><span class="err_img1"></span><em></em></span></span>
                      <div class="clear"></div> 
					  </span> 
                     <div class="f_s_12 c_8A8A8A clear" id="username_info">6到16个字符，区分大小写。</div>
                     </div>
                </li>
            	<li>
             		 <div class="fm_left"><span class="star"></span>&nbsp;设置密码：</div>
                     <div class="fm_right"><input type="password" value="" class="input" name="password" id="password"/>	
					 <span style="display:none" class="right_img" id="password_right"></span><span id="passwordTips" style="display:none"></span><span style="display:none" id="password_err">
                     <span class="err_left"></span>
                        <span class="err_info">                        	
                            <span class="err_mid" ><span class="err_img1"></span><em></em></span></span>
                      <div class="clear"></div> 
					  </span> 
                     <div class="f_s_12 c_8A8A8A clear" id="password_info">6到16个字符，区分大小写。</div>
                     </div>
                </li>
            	<li>
             		 <div class="fm_left"><span class="star"></span>&nbsp;确认密码：</div>
                     <div class="fm_right">
					 <input type="password" value="" class="input" name="cpassword" id="re_password"/>
					 <input type="hidden" id="p1" name="p1" value="0" />
                     <span style="display:none" class="right_img" id="re_password_right"></span><span style="display:none" id="re_password_err">
                     	<span class="err_left"></span>
                        <span class="err_info">                        	
                            <span class="err_mid" ><span class="err_img1"></span><em></em></span></span>
                      <div class="clear"></div> 
					  </span> 
                     <div class="f_s_12 c_8A8A8A clear" id="re_password_info">再次输入你设置的密码。</div>
                     </div>
                </li>
            	<li>
             		 <div class="fm_left"><span class="star"></span>&nbsp;常用邮件：</div>
                     <div class="fm_right"><table><tr><td><span class="suggest_box" id="useremail_box"><input type="text" class="input" name="username_r"  id="email_name_r" value="" autocomplete="off" /></span></td><td>
					 <span style="display:none" class="right_img" id="email_name_r_right"></span><span style="display:none" id="email_name_r_err"> <span class="err_left"></span> <span class="err_info"> <span class="err_mid" ><span class="err_img1"></span><em></em></span></span>
                     <div class="clear"></div> 
					 </span>
					 
					 </td></tr></table>
                     <div class="f_s_12 clear">
                     <div class="f_s_12 c_8A8A8A clear" id="email_name_r_info">输入一个你已拥有的邮件地址，以通过验证完成注册。</div>
                     </div>
                     </div>
                </li>
				<li>
             		 <div class="fm_left">填写手机号：</div>
                     <div class="fm_right"><input type="text" value="" class="input" name="phone" id="phone"/>	
					 <span style="display:none" class="right_img" id="password_right"></span><span id="userTips" style="display:none"></span><span style="display:none" id="user_err">
                     <span class="err_left"></span>
                        <span class="err_info">                        	
                            <span class="err_mid" ><span class="err_img1"></span><em></em></span></span>
                      <div class="clear"></div> 
					  </span> 
                     </div>
                </li>
				<li>
             		 <div class="fm_left">选择地区：</div>
                     <div class="fm_right"><select name = "province" class="f_left">
											  <option value ="volvo">Volvo</option>
											  <option value ="saab">Saab</option>
											  <option value="opel">Opel</option>
											  <option value="audi">Audi</option>
											</select>	
											<select name = "city" class="f_left">
											  <option value ="volvo">Volvo</option>
											  <option value ="saab">Saab</option>
											  <option value="opel">Opel</option>
											  <option value="audi">Audi</option>
											</select>
											<select name = "country" class="f_left">
											  <option value ="volvo">Volvo</option>
											  <option value ="saab">Saab</option>
											  <option value="opel">Opel</option>
											  <option value="audi">Audi</option>
											</select>	
											<select name = "street" class="f_left">
											  <option value ="volvo">Volvo</option>
											  <option value ="saab">Saab</option>
											  <option value="opel">Opel</option>
											  <option value="audi">Audi</option>
											</select>
                     		<input style="margin-left:30px;" type="text" value="" class="input" name="address" id="address"/>	
                     </div>
                </li>
			  <script type="text/javascript">
                     window.isNotShowRandomImg = false;
              </script>              	
            	<li>
             		 <div class="fm_left"><span class="star"></span>&nbsp;验证码：</div>
                     <div class="fm_right">
					 <input type="text" name="radomPass" id="usercheckcode" class="input_verify" /><span></span>
					 <input type="hidden" id="u1" name="u1" value="0" />
					 <input type="hidden" id="codez" name="codez" value="" />
					 <span style="display:none" class="right_img" id="usercheckcode_right"></span><span style="display:none" id="usercheckcode_err">
                     	<span class="err_left"></span>
                        <span class="err_info">                        	
                            <span class="err_mid" ><span class="err_img1"></span><em></em></span></span>
                      <div class="clear"></div> 
					  </span> 
                     <div class="f_s_12 c_8A8A8A clear" id="usercheckcode_info">不区分大小写。看不清楚可以<a id="changeImgHref" class="c_00008A">换一个</a></div>
                     </div>
					 <input type="hidden" name="radomPassID" id="syscheckcode" value="" />
                </li> 
            	<li class="subArea">
                	<div class="subAreaBtn"><input class="button1" id="submit" value="" type="submit"></div>
                </li>
                <li>
             		 <div class="fm_left">&nbsp;</div>
                     <div class="fm_right"><input name="agree" id="agree" checked="checked" type="checkbox"> 我同意<a href="http://reg.163.com/agreement.shtml?v=20130104" target="_blank">“服务条款”</a>和<a href="http://reg.163.com/agreement_game.shtml?v=20130104" target="_blank">“网络游戏用户隐私权保护和个人信息利用政策”</a>
                     </div>
                </li>
           </ul>
        </form>
 	<div class="main1_bottom"></div> 
</div>
<!--主体 结束-->
<!--版权 开始-->
<div class="footer"><a href="http://corp.163.com/eng/about/overview.html" target=_blank hasbox="2">About NetEase</a> - <a href="http://gb.corp.163.com/gb/about/overview.html" target=_blank >公司简介</a> - <a href="http://gb.corp.163.com/gb/contactus.html" target=_blank >联系方法</a> - <a href="http://corp.163.com/gb/job/job.html" target=_blank >招聘信息</a> - <a href="http://help.163.com/" target=_blank >客户服务</a> - <a href="http://gb.corp.163.com/gb/legal.html" target=_blank >相关法律</a> - <a href="http://emarketing.biz.163.com/" target=_blank >网络营销</a> <br />
    网易公司版权所有 &copy;1997-2013 </div>
<!--版权 结束--><div id=clickname style="display:none;">Reg</div>
</body>
</html>
<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/checkURS.js"></script>
<script>
    var email_str=["@qq.com","@sina.com","@hotmail.com","@gmail.com","@yahoo.com","@sohu.com","@yahoo.cn","@vip.qq.com","@sina.cn","@139.com"];
    new suggest(email_str,"useremail_box","email_name_r");
	
	//初始化用户名
	var userinit = "";
	//if(userinit == "" || userinit == null){
        //$_id("email_name_r").value = "如 name@example.com";
	//}

	//初始化密码保护问题 
	var question = "";
	if(question && question !="" && question != "请选择..."){
		$_id("qas").innerHTML = question;
		$_id("pass_qa").value = question;
		checkURS.setQA();
	}
    var firsErrId = "";

</script>
<script>
    if(firsErrId && firsErrId != ""){
        window.location.hash = ('#' + firsErrId);
    }
</script>