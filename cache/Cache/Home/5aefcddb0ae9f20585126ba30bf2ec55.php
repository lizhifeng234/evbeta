<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录 - 苏宁易购</title>
<meta name="description" content="苏宁易购" />
<meta name="keywords" content="苏宁易购" />
<link rel="stylesheet" type="text/css" href="/evbeta/__PUBLIC__/css/web/snAccount.css" />

</head>
<body>
<div id="grayLayer" style="display:none;"></div>

<div class="simpleHeader">
<div class="wrapper logo">
<a href="http://www.suning.com" title="苏宁易购首页"><img src="https://imgssl.suning.com/images/logo/snlogo.png?v=20130402" alt="苏宁易购首页" /></a>
</div>
</div>

<div class="loginMain wrapper">
<!-- <img src="/wcsstore/ConsumerDirectStorefrontAssetStore/images/images_user_630/loginWelcome.png" /> -->

<div class="welcome l">
<p><img class="imgLoad"  name="dac_logonImage" href="https://member.suning.com/emall/OAuthCallRB?storeId=10052&catalogId=10051" target="_blank" /></p>
<a  href="https://member.suning.com/emall/OAuthCallRB?storeId=10052&catalogId=10051" target="_blank"><img class="imgCon" src="https://imgssl.suning.com/images/1/redbabydlsj0410.jpg" /></a>
</div>
<div class="login r">
<div class="loginBox clearfix" id="normalLoginBox">
<h2 class="clearfix">用户登录</h2>
<form method="post" name="Logon" action="Logon" id="Logon">

<div class="form clearfix">
<dl>
<dt>用户名：</dt>
<dd>
<input name="username" id="username" type="text" class="uiText" style="color:#999;" tabindex="1" />
<p class="iptTip" id="logonIdErrMsg"></p>
</dd>
</dl>
<dl>
<dt>密　码：</dt>
<dd>
<input name="password" id="password" type="password" class="uiText" tabindex="2" maxlength="20" value="" />
<p class="iptTip" id="passwordErrMsg"></p>
</dd>
</dl>
<dl class="checkCode">
<dt>验证码：</dt>
<dd>
<input type="text" class="uiText" maxlength="4" id="validate" name="verifyCode" value="" tabindex="3"/><img id="vcodeimg1" name="vcodeimg1" src="/webapp/wcs/stores/jcaptcha?random=-1302332767" style="cursor:pointer" onclick="fun_getVcode()"/><a href="#" onclick="fun_getVcode()">换一张</a>
<p>
<span class="iptTip hide" id="vcodeErrMsg"></span>

</p>
</dd>
</dl>
<dl class="loginSubmit clearfix">
<dt></dt>
<dd id="normalLoginButtonArea">
<button type="submit">登 录</button>
<a href="/evbeta/Home/Register/breg" >注册</a>
<i class="regArea" ></i>
<a href="RetrievePasswordView?storeId=10052&catalogId=10051">忘记密码？</a>
</dd>
<dd id="normalLoadingArea" class="loading" style="display:none;">
<p>登录中，请稍候...</p>
</dd>
</dl>
</div>
</form>
<div class="clear"></div>
<form method="post" name="oAuthLogonForm" action="" id="oAuthLogonForm">
<input type="hidden" name="URL" value="http://www.suning.com/emall/tcd_10052_10051_.html"/>
</form>
<div class="other">
<p>用合作网站账号登录：<a href="javascript:void(0);" onclick="javascript:oAuthLogon('OAuthCall_10052_10051_10201');return false;"><em class="login-icon i-tianyi"></em>天翼</a></p>
</div>
</div>
<div class="bottShadow">　</div>
</div>
</div>
<span class="clear"></span>

<div class="clear"></div>
<div id="copyright">
<p><a name="dac_index_aboutus" href="http://club.suning.com/hr/aboutus.html" target="_blank" title="关于苏宁易购">关于苏宁易购</a>|
<a target="_blank" href="http://sop.suning.com">供应商入驻</a>|
<a name="dac_index_cnsuning" href="http://www.cnsuning.com/" target="_blank" title="苏宁集团">苏宁官网</a>|
<a name="dac_index_hhz" href="http://redbaby.suning.com/" target="_blank" title="红孩子">红孩子</a>|
<a name="dac_index_lxwm" href="http://image.suning.cn/OtherArea/bzzx/lxwm.html" target="_blank" title="联系我们">联系我们</a>|
<a name="dac_index_zhaopin" href="http://club.suning.com/hr/" target="_blank" title="诚聘英才">诚聘英才</a>|
<a name="dac_index_links" href="http://member.suning.com/emall/linkView" title="友情链接" target="_blank">友情链接</a>|
<a name="dac_index_union" href="http://union.suning.com" title="广告联盟" target="_blank">广告联盟</a>|
<a target="_blank" href="http://bbs.suning.com/ques">用户体验提升计划</a></p>
<span>Copyright© 2002-2013 ，苏宁版权所有     苏ICP备10207551号 苏B2-20100316 	出版物经营许可证新出发苏批字第A-243号</span>
</div>
<div id="subFooter">
<a href="https://pay.suning.com/epp-portal/useraccount/user-account!initUserAccount.action" title="苏宁易付宝"><img src="https://imgssl.suning.com/images/ShoppingArea/Common/morelogo5.png"></a>
<span title="银联特约商户"><img  alt="银联特约商户" src="https://imgssl.suning.com/images/ShoppingArea/Common/morelogo1.png"></span>
<a target="_blank" href="https://ss.cnnic.cn/verifyseal.dll?sn=2011060700100009557&ct=ic&pa=911439" title="可信网站示范单位"><img src="https://imgssl.suning.com/images/ShoppingArea/Common/morelogo2.png"></a>
<a href="http://search.cxwz.org/cert/l/CX20111018000608000610" title="诚信网站" target="_blank"><img src="https://imgssl.suning.com/images/ShoppingArea/Common/morelogo6.png"></a>
<a href="http://www.jsgsj.gov.cn:60101/keyLicense/verifKey.jsp?serial=320000163820130117100000009630&signData=0+ADYt839gp1EiqiZXnsxsyOnpO32Wg4sFePaiV9+NtTV/XCAMXGzT/AOgycGMm0EjsR/Ot661M7h9GeStpA8QyJTs1Ip1K/CSNaemthn7f1NjI03x1E6v9ZRT+3M60WZIGLBEjFs5XMliufNz1cJlYDQrTZvaZbHyJ2KzgJB4Y=" title="电子营业执照" target="_blank">
<img src="https://imgssl.suning.com/images/ShoppingArea/Common/morelogo7.png">
</a>
</div>
<link href="https://imgssl.suning.com/css/ShoppingArea/V8/home/common630.css?v=20130509" rel="stylesheet" type="text/css" />
<link href="https://imgssl.suning.com/css/style05/jquery.dimensions.css" rel="stylesheet" type="text/css" />



</body>
</html>