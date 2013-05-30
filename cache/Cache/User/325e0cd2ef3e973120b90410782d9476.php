<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜啦购 - 发布微活动 </title>
<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />	
	<link href="/evbeta/__PUBLIC__/css/web/user/over_view.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript">
		window.UEDITOR_HOME_URL="/ueditor/";
	</script>
	<script type="text/javascript" src="/ueditor/editor_config_noimage.js"></script>
	<script type="text/javascript" src="/ueditor/editor.js"></script>

<title>发布优惠活动 </title>
</head>
<body> 
	<table class="yt_t txs16" width="100%" border="0" cellspacing="0"
		cellpadding="0">
		<tr>
			<td class="yt_t_td">
				<!--这里放页头--> 

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

				<!--这里放页头 end-->
			</td>
		</tr>
		<tr>
			<td valign="top" class="bg">
				<table class="yt_b" width="950" border="0" cellspacing="0"
					cellpadding="0">
					<tr>
						<td width="200" class="txvt">
							<!--header 此段注释内调用左栏内容--> 
							
<div id="accordion">
	<ul class="menu_list01">
		<li class="home"><a href="/evbeta/User/Storer/">商户首页</a></li>		
		<li class="top">店铺信息</li>	
		<li class="on"><a href="/evbeta/User/Storer/add.html">发布优惠活动<em></em></a></li>
		<li><a href="/evbeta/User/Storer/news.html">管理优惠活动<em></em></a></li>						
		<li><a href="/evbeta/User/Storer/client" >关注我的<em></em></a></li>		
		<li class="top">店铺管理</li>	
		<li><a href="/evbeta/User/Storer/store">店铺设置<em></em></a></li>
		<li><a href="/evbeta/User/Storer/card" >店铺二维码<em></em></a></li>
		<li><a href="/evbeta/User/Storer/scene">店铺实景图<em></em></a></li>		
		<li><a href="/evbeta/User/Storer/cert_info" target="_blank">店铺认证<em></em></a></li>						
		<li class="top">账号设置</li>	
		<li><a href="/evbeta/User/Storer/password" >修改密码<em></em></a></li>
		<li><a href="/evbeta/User/Storer/cert">手机邮箱认证<em></em></a></li>				
		<li class="top">以下网页尚未创建</li>	
		<li><a href="#" >--批量信息页二维码</a></li>	
	</ul>	
</div>
 
							<!--header 此段注释内调用左栏内容 end-->
						</td>
						<td class="r_col">
							<!--header 此段注释内调用右栏内容--> 
							

<form id="newsFormBean" action="add" method="POST">
		<div class="r_w">
			<div class="r_breadcrumb">
				<a href="#">店铺信息</a> 
				&gt; 发布优惠活动
			</div>
			<table class="logobod" width="100%" border="0" cellspacing="10"
				cellpadding="0">
				
				<tr>
					<th width="10%" style="text-align: inherit;"><span class="th">标题：</span></th>
					<td>
						<input id="id" name="id" type="hidden" value=""/>
						<input id="title" name="title" class="inp_text persent70" type="text" value="" maxlength="30"/>
					</td>
				</tr>
				<tr>
					<th  style="text-align: inherit;"><span class="th">类别：</span></th>
					<td>
					<select id="newType" name="newType" style="height: 30px;">
						<option value="">选择类别</option>
						<option value="fufumeizhuang">护肤美妆</option>
						<option value="pinpaifushi">品牌服饰</option>
						<option value="xiemaopeishi">鞋帽配饰</option>
						<option value="pinjuxiangbao">皮具箱包</option>
						<option value="zhubaopeishi">珠宝饰品</option>
						<option value="muyingqingzi">母婴亲子</option>
						<option value="meishicaiyin">美食餐饮</option>
						<option value="xiuxianyule">休闲娱乐</option>
						<option value="lvyoujiudain">旅游酒店</option>
						<option value="shumadianqi">数码电器</option>
						<option value="jiajujiafang">家具家纺</option>
						<option value="shenghuofuwu">生活服务</option>
						<option value="jiazhuangjiancai">家装建材</option>
						<option value="qiche4S">汽车4S</option>
					</select>
				</td>
				</tr>
				<tr>
					<th  style="text-align: inherit;"><span class="th">时间：</span></th>
					<td>
					<select id="newType" name="newType" style="height: 30px;">
						<option value="">年</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
					</select>
					<select id="newType" name="newType" style="height: 30px;">
						<option value="">月</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
					</select>
					<select id="newType" name="newType" style="height: 30px;">
						<option value="">日</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
					</select>
				至
					<select id="newType" name="newType" style="height: 30px;">
						<option value="">年</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
					</select>
					<select id="newType" name="newType" style="height: 30px;">
						<option value="">月</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
					</select>
					<select id="newType" name="newType" style="height: 30px;">
						<option value="">日</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
					</select>
				</td>
				</tr>
				<tr>
					<th class="txvt" style="text-align: inherit;"><span class="th">内容：</span></th>
					<td>
					
                          <div class="r_textarea_box">
							<textarea id="desc" name="content" style="width: 588px;height: 200px;"></textarea>
						</div>
						<p class="textarea_b_t">
							<span class="dfr descTotal">剩余<span class="r1 descLength">5000</span>字
							</span> <span class="g1 dfl">建议按条（1、2、3...）来说明微活动内容</span>
						</p>
					</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td><input type="submit" class="inp_btn btn_brown" value="发 布" />
					</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div>
</form>
<script type="text/javascript">
	var editor2 = new UE.ui.Editor({maximumWords:5000});
	editor2.render('desc');
	editor2.addListener("ready",function(){
		/*var commodityType = jQ("input[name='commodityType']:checked").val();
		  var descTemplate = "";
		if(commodityType=="GOLDEN_TICKET"){
			descTemplate = jQ("#descTemplate1").html();
			titleText =jQ("input[name='goldenTicketTitle']").val();
		}else if(commodityType=="SALE_TICKET"){
			descTemplate = jQ("#descTemplate2").html();
			titleText =jQ("input[name='saleTicketTitle']").val();
		}else if(commodityType=="CLEAR_TICKET"){
			descTemplate = jQ("#descTemplate3").html();
			titleText =jQ("input[name='clearTicketTitle']").val();
		}
		if(jQ("input[name='hasDescDesc']").length==0){
			editor2.setContent(descTemplate);
		} */
		editor2.fireEvent('selectionchange');
	});
	editor2.addListener("selectionchange",function(arg){
		var max = 5000;
		var reg = new RegExp("[\r\t\n]","g");
		var contentText = this.getContentTxt().replace(reg,"");
	    var length = contentText.length;
	    if(max-length<0){
	    	var overNum = length-max;
	    	if(jQ(".descTotal").hasClass("wpqie")){
	    		jQ(".descLength").text(overNum);
	    	}else{
	    		jQ(".descTotal").addClass("wpqie");
	    		jQ(".descTotal").empty();
	    		jQ(".descTotal").append("超过<span class='r1 descLength'>"+overNum+"</span>字");
	    	}
	    }else{
	    	var num = max-length;
	    	if(jQ(".descTotal").hasClass("wpqie")){
	    		jQ(".descTotal").removeClass("wpqie");
	    		jQ(".descTotal").empty();
	    		jQ(".descTotal").append("剩余<span class='r1 descLength'>"+num+"</span>字");
	    	}else{            		
	        	jQ(".descLength").text(num);	
	    	}
	    }
	});
	jQ("#accordion").togglepanels({open:[5],select:jQ("#promotional")});
</script>
 
							<!--header 此段注释内调用右栏内容 end-->
						</td>
					</tr>
				</table>

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

</html>