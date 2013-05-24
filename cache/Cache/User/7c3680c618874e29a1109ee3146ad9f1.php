<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜啦购 - 商户店铺设置</title>
<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />	
	<link href="/evbeta/__PUBLIC__/css/web/user/over_view.css" rel="stylesheet" type="text/css" />
	<link href="/evbeta/__PUBLIC__/css/web/user/upLoad.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/user/swfupload.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/user/swfupload.queue.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/user/fileprogress.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/user/handlers.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/user/upLoad.js"></script>

<title>搜啦购 - 商户店铺设置</title>
</head>
<body> 
	<table class="yt_t" width="100%" border="0" cellspacing="0"
		cellpadding="0">
		<tr>
			<td class="yt_t_td">
				<!--这里放页头--> 

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


				<!--这里放页头 end-->
			</td>
		</tr>
		<tr>
			<td valign="top" class="bg txs16">
				<table class="yt_b" width="950" border="0" cellspacing="0"
					cellpadding="0">
					<tr>
						<td width="200" class="txvt">
							<!--header 此段注释内调用左栏内容--> 
							



<div id="accordion">
<ul class="menu_list01">
		<li class="home"><a href="/evbeta/User/Storer/">商户首页</a></li>		
		<li class="top">店铺信息</li>	
		<li><a href="/evbeta/User/Storer/add.html">发布优惠活动</a></li>
		<li><a href="/evbeta/User/Storer/news.html">管理优惠活动</a></li>						
		<li><a href="/evbeta/User/Storer/client" >关注我的</a></li>		
		<li class="top">店铺管理</li>	
		<li><a href="/evbeta/User/Storer/store">店铺设置</a></li>
		<li><a href="/evbeta/User/Storer/card" >店铺二维码</a></li>
		<li class="on"><a href="/evbeta/User/Storer/scene">店铺实景图</a></li>		
		<li><a href="/evbeta/User/Storer/cert_info" target="_blank">店铺认证</a></li>						
		<li class="top">账号设置</li>	
		<li><a href="/evbeta/User/Storer/password" >修改密码</a></li>
		<li><a href="/evbeta/User/Storer/cert">手机邮箱认证</a></li>				
		<li class="top">以下网页尚未创建</li>	
		<li><a href="#" >--批量信息页二维码</a></li>	
	</ul>
</div>
 
							<!--header 此段注释内调用左栏内容 end-->
						</td>
						<td class="r_col">
							<!--header 此段注释内调用右栏内容--> 
							
	<div class="r_w">
		<div class="r_breadcrumb">
			
			
			<a href="/">店铺管理</a>  &gt; 店铺实景图
		</div>
		<form id="outletSettingForm" action="/outlet/setting" method="POST">
			<table class="logobod" width="100%" border="0" cellspacing="0" cellpadding="0">
				
				<tr>
					<th width="18%" class="txvt"><span class="th">LOGO：</span></th>
					<td>
						<div class="upLoadPanel up_m_box txal" params="{'name':'logo'}">
							<div class="in imageViewPanel">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="118" align="center">
											<div class="thumb_img_box02 loadImage">
												
													
													
														<img height="111" width="110" src='http://static.soulagou.com/img/outlet_manager/up_default01.jpg' /> 
													
												
												<img class="closeImg" src='http://static.soulagou.com/img/plugin/x1.jpg' />
												<div class="clear"></div>
											</div>
											<div class="mgt10 pdl14 waitImage">
												<img src="http://static.soulagou.com/img/plugin/uploading01.gif" />正在上传...
											</div>
											<div class="fsUploadProgress"></div>
											<!-- 上传图片 -->
											<a href="javascript:void(0)" class="spanButtonPlaceholder update_l update_l_yc" id="spanButtonPlaceholder"></a>
											<input class="btnCancel" type="button" value="cancel" onclick="cancelQueue(upload);" disabled="disabled" />
											<input id="logo" name="logo" type="hidden" value=""/>
										</td>
										<td class="shuom">
											建议尺寸350*200px，图片小于2M，支持jpg、jpeg、png、bmp格式图片。
										</td>
									</tr>
								</table>
							</div>
						</div>
					</td>
				</tr>
				
					
	</table>

	<input type="hidden" id="staticURL" value="http://static.soulagou.com" />
	<input type="hidden" id="selfURL" value="http://outlet.soulagou.com" />
	<input type="hidden" id="commodityImageURL" value="http://outlet.soulagou.com" />
	<input type="hidden" value="http://tmp.images.soulagou.com" id="imagePathPrefix"/> 
</body>

<script type="text/javascript">
	jQ("#backHomeBtn").click(function() {
		location.href = '/';
	});
</script>

	<script type="text/javascript">
		jQ('.upLoadPanel').uploader({
			uploadUrl : 'http://outlet.soulagou.com/outlet/upload_logo.json',
			flashUrl : 'http://static.soulagou.com/js/plugin/swfupload.swf',
			deleteUrl : '',
			buttonImageUrl : 'http://static.soulagou.com/img/plugin/update_img01.jpg',
			params : {
				'upload' : 'images'
			},
			success : function(data) {
				jQ("#" + data.param).val(data.imgPath);
			},
			deleted : function(data) {
			}
		});
		jQ("#accordion").togglepanels({open:[0],select:jQ("#accordion").find('li').eq(2)});
	</script>

</html>