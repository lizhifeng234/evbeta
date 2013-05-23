<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜啦购 - 商户认证 - 步骤2（提交认证资料）</title>
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
</head>
<body>
	<div id="wrap">
		<!--header 此段注释内调用header内容-->
		

<div id="header">
	<div class="pg_w">
		
			
			<div class="dfr pdt40">
				<span class="w1">你好，</span>
				<span class="b2 txs14 txw1 mgr30">lzf2342012</span>
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


		<!--header 此段注释内调用header内容 end-->

		<div class="pg_w">
			<!--header 此段注释内调用通栏内容-->
			
	<form id="certificationInfoForm" action="/outlet/cert_info" method="POST">
		<input id="outletId" name="outletId" type="hidden" value=""/>
		<div class="r_w">
			<!--灰色模块-->
			<div class="block5">
				<div>
					<div class="gray_block01">
						<div class="title01">营业执照</div>
						<table class="block_table" width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="30%"><span class="th">营业证件类型：</span></th>
								<td>
									<div class="dfl mgr20">
										<input id="bl" name="licenseType" class="inp_radio mgr05" type="radio" value="0" checked="checked"/>
										工商营业执照:
									</div>
									<div class="dfl">
										<input id="oc" name="licenseType" class="inp_radio mgr05" type="radio" value="1"/>
										组织机构代码证:
									</div>
									<div class="clear"></div>
								</td>
							</tr>
							<tr>
								<th width="30%"><span id="bln" class="th" style="display: block;">工商营业执照号码：</span> 
								<span id="ocn" class="th" style="display: none;">组织机构代码证：</span></th>
								<td>
									<input id="licenseNumber" name="licenseNumber" class="inp_text persent50" type="text" value="" maxlength="20"/>
									
								</td>
							</tr>
						</table>
						<div class="uploadbox" style="display: block;">
							<table class="block_table" width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th width="30%" class="txvt"><span id="bli" class="th" style="display: block;">工商营业执照副本图片：</span> <span id="oci" class="th" style="display: none;">组织机构代码证副本图片：</span></th>
									<td>
										<div class="upLoadPanel" params="{'name':'licenseImage'}">
											<div class="imageViewPanel" >
												<!-- 上传图片 -->
												<span class="loadImage">
													
														<img width="160" height="160" src='http://static.soulagou.com/img/outlet_manager/defa_dmpic.jpg' />
													
													
													<img class="closeImg" src='http://static.soulagou.com/img/plugin/x1.jpg' />
												</span>
												<!-- 上传图片 end -->

												<!-- 等待图片 -->
												<div class="waitImage">
													<img src="http://static.soulagou.com/img/plugin/uploading01.gif" />正在上传...
												</div>
												<!-- 等待图片 end -->
												<div class="clear"></div>
											</div>
											<!-- 滚动条 -->
											<div class="fsUploadProgress"></div>
											<!-- 滚动条 end -->
											<!-- 上传图片 -->
											<span class="spanButtonPlaceholder" id="spanButtonPlaceholder"></span>
											<!-- 上传图片 end -->
											<input class="btnCancel" type="button" value="cancel" onclick="cancelQueue(upload);" disabled="disabled" />
										</div>
									</td>
								</tr>
								<tr>
									<th width="30%">&nbsp;</th>
									<td>
										<div>
											<p>必须是清晰彩色副本电子版，可以是扫描件或者数码拍摄照片，</p>
											<p>支持jpg、jpeg、png、bmp格式，图片大小不大于5M</p>
											<p class="r1">
												<input id="licenseImage" name="licenseImage" type="hidden" value=""/>
												
											</p>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--灰色模块 end-->

			<!--灰色模块-->
			<div class="block5">
				<div>
					<div class="gray_block01">
						<div class="title01">财务账号</div>
						<table class="block_table" width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="30%"><span class="th">财务证件类型：</span></th>
								<td>
									<div class="dfl mgr20">
										<input id="cal" name="financialAccountType" class="inp_radio mgr05" type="radio" value="0" checked="checked"/>
										对公账号开户许可证:
									</div>
									<div class="dfl mgr20">
										<input id="poa" name="financialAccountType" class="inp_radio mgr05" type="radio" value="1"/>
										委托书:
									</div>
									<div class="dfl">
										没有对公账号许可证可使用委托书，<a href="下载委托书范本" target="_blank" class="b1 txd1">下载委托书范本</a>
									</div>
									<div class="clear"></div>
								</td>
							</tr>
							<tr>
								<th width="30%"><span class="th">开户行：</span></th>
								<td>
									<input id="bank" name="bank" class="inp_text persent50" type="text" value="" maxlength="20"/>
									
								</td>
							</tr>
							<tr>
								<th width="30%">
									<span id="ca" class="th" style="display: block;">对公账号：</span>
									<span id="pba" class="th" style="display: none;">个人银行账号：</span>
								</th>
								<td>
									<input id="financialAccountNumber" name="financialAccountNumber" class="inp_text persent50" type="text" value="" maxlength="20"/>
									
								</td>
							</tr>
						</table>
						<div class="uploadbox" style="display: block;">
							<table class="block_table" width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th width="30%" class="txvt"><span id="cai" class="th" style="display: block;">对公账号开户许可证图片：</span> <span id="poai" class="th" style="display: none;">委托书图片：</span></th>
									<td>
										<div class="upLoadPanel" params="{'name':'financialAccountImage'}">
											<div class="imageViewPanel">
												<!-- 上传图片 -->
												<span class="loadImage">
													
														<img width="160" height="160" src='http://static.soulagou.com/img/outlet_manager/defa_dmpic.jpg' />
													
													
													<img class="closeImg" src='http://static.soulagou.com/img/plugin/x1.jpg' />
												</span>
												<!-- 上传图片 end -->

												<!-- 等待图片 -->
												<div class="waitImage">
													<img src="http://static.soulagou.com/img/plugin/uploading01.gif" />正在上传...
												</div>
												<!-- 等待图片 end -->
												<div class="clear"></div>
											</div>
											<!-- 滚动条 -->
											<div class="fsUploadProgress"></div>
											<!-- 滚动条 end -->
											<!-- 上传图片 -->
											<span class="spanButtonPlaceholder" id="spanButtonPlaceholder"></span>
											<!-- 上传图片 end -->
											<input class="btnCancel" type="button" value="cancel" onclick="cancelQueue(upload);" disabled="disabled" />
										</div>
									</td>
								</tr>
								<tr>
									<th width="30%">&nbsp;</th>
									<td>
										<div>
											<p>必须是清晰彩色副本电子版，可以是扫描件或者数码拍摄照片，</p>
											<p>支持jpg、jpeg、png、bmp格式，图片大小不大于5M</p>
											<p class="r1">
												<input id="financialAccountImage" name="financialAccountImage" type="hidden" value=""/>
												
											</p>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--灰色模块 end-->


			<!--灰色模块-->
			<div class="block5">
				<div>
					<div class="gray_block01">
						<div class="title01">
							法人身份证<span class="title01_x g1">（须为二代身份证）</span>
						</div>
						<table class="block_table" width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="30%"><span class="th">法人身份证号码：</span></th>
								<td>
									<input id="identityNo" name="identityNo" class="inp_text persent50" type="text" value="" maxlength="20"/>
									
								</td>
							</tr>
						</table>
						<div class="uploadbox" style="display: block;">
							<table class="block_table" width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th width="30%" class="txvt"><span class="th">法人身份证图片：</span></th>
									<td>
										<div class="upLoadPanel" params="{'name':'frontImage'}">
											<div><span class="th">正面</span></div>
											<div class="imageViewPanel">
												<!-- 上传图片 -->
												<span class="loadImage"> 
													
														<img width="160" height="160" src='http://static.soulagou.com/img/outlet_manager/defa_dmpic.jpg' />
													
													
													<img class="closeImg" src='http://static.soulagou.com/img/plugin/x1.jpg' />
												</span>
												<!-- 上传图片 end -->

												<!-- 等待图片 -->
												<div class="waitImage">
													<img src="http://static.soulagou.com/img/plugin/uploading01.gif" />正在上传...
												</div>
												<!-- 等待图片 end -->
												<div class="clear"></div>
											</div>
											<!-- 滚动条 -->
											<div class="fsUploadProgress"></div>
											<!-- 滚动条 end -->
											<!-- 上传图片 -->
											<span class="spanButtonPlaceholder" id="spanButtonPlaceholder"></span>
											<!-- 上传图片 end -->
											<input class="btnCancel" type="button" value="cancel" onclick="cancelQueue(upload);" disabled="disabled" />
										</div>
										<div class="upLoadPanel"  params="{'name':'backImage'}">
											<div><span class="th">背面</span></div>
											<div class="imageViewPanel">
												<!-- 上传图片 -->
												<span class="loadImage">
													
														<img width="160" height="160" src='http://static.soulagou.com/img/outlet_manager/defa_dmpic.jpg' />
													
													
													<img class="closeImg" src='http://static.soulagou.com/img/plugin/x1.jpg' />
												</span>
												<!-- 上传图片 end -->

												<!-- 等待图片 -->
												<div class="waitImage">
													<img src="http://static.soulagou.com/img/plugin/uploading01.gif" />正在上传...
												</div>
												<input id="frontImage" name="frontImage" type="hidden" value=""/>
												<input id="backImage" name="backImage" type="hidden" value=""/>
												<!-- 等待图片 end -->
												&nbsp;
												<br/>
												&nbsp;
												<div class="clear"></div>
											</div>
											<!-- 滚动条 -->
											<div class="fsUploadProgress"></div>
											<!-- 滚动条 end -->
											<!-- 上传图片 -->
											<span class="spanButtonPlaceholder" id="spanButtonPlaceholder"></span>
											<!-- 上传图片 end -->
											<input class="btnCancel" type="button" value="cancel" onclick="cancelQueue(upload);" disabled="disabled" />
										</div>
									</td>
								</tr>
								<tr>
									<th width="30%">&nbsp;</th>
									<td>
										<div>
											<p>必须是清晰彩色副本电子版，可以是扫描件或者数码拍摄照片，</p>
											<p>支持jpg、jpeg、png、bmp格式，图片大小不大于5M</p>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--灰色模块 end-->

			<!--提交按钮-->
			<div class="txac mgt30 pdb60">
				<input type="submit" class="inp_btn btn_redarrow" value="提交，申请入驻" />
			</div>
			<!--提交按钮 end-->
		</div>
	</form>

			<!--header 此段注释内调用通栏内容 end-->
		</div>
	</div>
</body>

	<script type="text/javascript">
		jQ('.upLoadPanel').uploader({
			uploadUrl : 'http://outlet.soulagou.com/outlet/cert_info/upload_image.json',
			flashUrl : 'http://static.soulagou.com/js/plugin/swfupload.swf',
			deleteUrl : '',
			buttonImageUrl : 'http://static.soulagou.com/img/plugin/update_img01.jpg',
			params : {
				'upload' : 'images'
			},
			success : function(data) {
				var fieldName = data.param;
				var imgPath = data.imgPath;
				jQ("#" + fieldName).val(imgPath);
			},
			deleted : function(data) {
			}
		});
	</script>


</html>