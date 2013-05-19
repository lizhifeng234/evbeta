<?php if (!defined('THINK_PATH')) exit();?>

























<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>
			
	个人管理 - 商品优惠券

		</title>
		
		<link href="http://static.soulagou.com/css/global.css" rel="stylesheet" type="text/css" />
		<link href="http://static.soulagou.com/css/web-im/sale-ui-dialogBox.css" rel="stylesheet" type="text/css" />
		<link href="http://static.soulagou.com/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
		<link href="http://static.soulagou.com/css/plugin/TogglePanels.css" rel="stylesheet" type="text/css" />
		<link href="http://static.soulagou.com/css/member_center/quote/grid.css" rel="stylesheet" type="text/css" />
		<link href="http://static.soulagou.com/css/member_center/alone/base_template.css" rel="stylesheet" type="text/css" />
		<link href="http://static.soulagou.com/css/member_center/alone/personal_header.css" rel="stylesheet" type="text/css" />
		<link href="http://static.soulagou.com/css/member_center/alone/left_menu.css" rel="stylesheet" type="text/css" />
		
	<link href="http://static.soulagou.com/css/member_center/alone/my_yhq.css"
		rel="stylesheet" type="text/css" />

		
		<script type="text/javascript" src="http://static.soulagou.com/js/base/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/plugin/jquery-ui-1.9.2.custom.min.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/plugin/underscore-min.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.roster.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.muc.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.disco.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.x.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.vcard.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.chatstates.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/web-im/sale-ui-dialogBox.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/web-im/sale-ui-webIM.js"></script>
		<script type="text/javascript" src="http://static.soulagou.com/js/plugin/TogglePanels.js"></script>
		
	<script type="text/javascript" src="http://static.soulagou.com/js/member_center/alone/ticket.js"></script>
	<script type="text/javascript" src="http://static.soulagou.com/js/plugin/jquery.blockUI.js"></script>

	</head>
	<body>
	    <div id="wrap">
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
	                <td width="200" class="l_col">
	                	<!--Left Menu Start-->
	                	





<div id="accordion">

	<div class="">
		<img src="http://static.soulagou.com/img/member_center/bar_personal.png" />
	</div>

	<ul class=" mgt10 txs14">
		
		
		
		
		
		<li id="menu_home"><a href="/">首页</a></li>
		<li id="menu_profile"><a href="/profile">个人信息</a></li>
		<li id="menu_favorite"><a href="/fav/commodities">我的收藏</a></li>
		<li id="menu_ticket"><a href="/ticket/list">我的优惠券</a></li>
	</ul>

</div>
	                	<!--Left Menu End-->
	                </td>
	                <td class="r_col">
	                	<!--Right Content Start-->
	                	
	<div class="r_w">
		<div class="r_breadcrumb">
			
			<a href="/">个人管理</a> &gt; 我的优惠券
		</div>

		<div class="mgt30">
			<div class="dfl dfl_title01">
				
				
				
				
				<a href="/ticket/list" class="on">所有</a>
				<a href="/ticket/list/golden" class="">代金券</a>
				<a href="/ticket/list/sale" class="">折扣券</a>
				<a href="/ticket/list/clear" class="">推广券</a>
			</div>
			<div class="clear"></div>
		</div>
		
		
		
		<div class="m_col_div">
			<table class="m_col_table" width="100%" border="0" cellspacing="0"
				cellpadding="0">
				<tr>
					<th width="42%">优惠券名称</th>
					<th width="12%">有效期</th>
					<th width="12%">优惠方式</th>
					<th width="6%">价格</th>
					<th width="9%">状态</th>
					<th class="last_r">操作</th>
				</tr>
				
			</table>
		</div>
		<div id="" class="page">共1页<a href="?page=1">上一页</a><span>1</span><a href="?page=1">下一页</a></div>
	</div>

	                	<!--Right Content End-->
	                </td>
	              </tr>
	            </table>
	        </div>
	    </div>
	    
<!--弹窗-->
<div id="smsBlock" style="display : none">
	
	<form action="/ticket/sendsms/all" method="post">
		<table class="t_pop1" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td class="t_pop1TD">
					<table class="tn1_pop1" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th class="tn1_pop1TH">
								<a href="javascript:jQ.unblockUI()" class="x">关闭</a>
								<span class="s1">发送至手机</span>
							</th>
						</tr>
						<tr>
							<td class="tn1_pop1TD">
								<table class="tn2_pop1" width="230" border="0" cellspacing="0"
									cellpadding="0">
									<tr>
										<th width="35%">手机号码：</th>
										<td width="65%">
											<input name="mobile" type="text" class="inp_text persent80" />
											<input id="sendsmsid" name="id" type="hidden" />
										</td>
									</tr>
								</table>
								<div class="mgt20 txar">
									<input type="submit" class="btn_c_m" value="发送" />
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</div>
<!--弹窗 end-->

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
		jQ("#accordion").togglepanels({opens:[0], select:jQ("#menu_ticket")});
		jQ.tickets.init();
	</script>

	<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcb3e995f904ed394dc22769c6916da62' type='text/javascript'%3E%3C/script%3E"));
</script>
</html>