<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
	搜啦购 - 商品列表
</title>
<link href="http://static.soulagou.com/css/global.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/web-im/sale-ui-dialogBox.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/outlet_manager/quote/grid.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<link href="http://static.soulagou.com/css/plugin/TogglePanels.css" rel="stylesheet" type="text/css" />

	<link
		href="http://static.soulagou.com/css/outlet_manager/alone/admin_ticket_list.css"
		rel="stylesheet" type="text/css" />


<script type="text/javascript" src="http://static.soulagou.com/js/base/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/plugin/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/plugin/underscore-min.js"></script>
<!-- 
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.roster.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.muc.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.disco.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.x.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.vcard.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/strophe.chatstates.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/sale-ui-dialogBox.js"></script>
<script type="text/javascript" src="http://static.soulagou.com/js/web-im/sale-ui-webIM.js"></script>
-->
<script type="text/javascript" src="http://static.soulagou.com/js/plugin/TogglePanels.js"></script>

	<script type="text/javascript"
		src="http://static.soulagou.com/js/base/jquery-custom-base.js"></script>
	<script type="text/javascript"
		src="http://static.soulagou.com/js/plugin/sale-ui-numberInput.js"></script>
	<script type="text/javascript"
		src="http://static.soulagou.com/js/outlet_manager/alone/commodity-list.js"></script>

<title>
	搜啦购 - 商品列表
</title>
</head>
<body> 
	<table class="yt_t" width="100%" border="0" cellspacing="0"
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
			<td valign="top">
				<table class="yt_b" width="950" border="0" cellspacing="0"
					cellpadding="0">
					<tr>
						<td width="200" class="l_col">
							<!--header 此段注释内调用左栏内容--> 
							



<div id="accordion">
	<input id="backHomeBtn" class="index_b" type="button"/>
	<h3 class="menu_title01">
		<div class="menu_title_div">
			<a href="#"></a>
		</div>
	</h3>
	<ul class="menu_list01">
		<li id="background_home" style="display: none;"><a href="#">商户后台首页</a></li>
		<li id="admin_info"><a href="/outlet/info">基本信息</a></li>
		<li id="shopset"><a href="/outlet/setting">店铺设置</a></li>
		<!--
		<li><a href="">物流设置</a></li>
		<li><a href="">投诉管理</a></li>
		-->
	</ul>
	<h3 class="menu_title02">
		<div class="menu_title_div">
			<a href="#"></a>
		</div>
	</h3>
	<ul class="menu_list02">
		<li id="commodity_item_0"><a href="/commodity/category/list.html" >发布商品</a></li>
		<li id="commodity_item_1"><a href="/commodity/list.html?commodityType=GENERAL&commodityActive=ADD&page=1&pageSize=10">正价商品</a></li>
		<li id="commodity_item_2"><a href="/commodity/list.html?commodityType=SALE&commodityActive=ADD&page=1&pageSize=10">折扣商品</a></li>
		<li id="commodity_item_3"><a href="/commodity/list.html?commodityType=CLEAR&commodityActive=ADD&page=1&pageSize=10">清仓商品</a></li>
	</ul>
	<h3 class="menu_title03">
		<div class="menu_title_div">
			<a href="#"></a>
		</div>
	</h3>
	<ul class="menu_list03">
		<li id="commodity_ticket_item_0"><a href="/commodity/ticket/pub.html" >发布优惠券</a></li>
		<li id="commodity_ticket_item_1"><a href="/commodity/ticket/list.html?commodityType=GOLDEN_TICKET&commodityActive=ADD&page=1&pageSize=10">代金券</a></li>
		<li id="commodity_ticket_item_2"><a href="/commodity/ticket/list.html?commodityType=SALE_TICKET&commodityActive=ADD&page=1&pageSize=10">折扣券</a></li>
		<li id="commodity_ticket_item_3"><a href="/commodity/ticket/list.html?commodityType=CLEAR_TICKET&commodityActive=ADD&page=1&pageSize=10">推广券</a></li>
	</ul>
	<h3 class="menu_title04">
		<div class="menu_title_div">
			<a href="#"></a>
		</div>
	</h3>
	<ul class="menu_list04">
		<li id="news"><a href="/outlet/news/list?page=1">新闻动态</a></li>
		<li id="promotional"><a href="/outlet/promotional/list?page=1">微活动</a></li>
		<li id="commodity"><a href="/outlet/microCommodity/list?page=1">微商品</a></li>
	</ul>
	
</div>
 
							<!--header 此段注释内调用左栏内容 end-->
						</td>
						<td class="r_col">
							<!--header 此段注释内调用右栏内容--> 
							
	<div class="r_w">
		<div class="r_breadcrumb">
			<a href="#">商家管理</a> &gt; <a href="#">商品管理</a> &gt;
			正价商品
			
			
			列表
		</div>

		<div class="mgt30">
			<div class="dfr dfr_search">
				
					
					
						<input type="text" class="text" value="" name="searchPar" />
					
				
				<input type="button" class="sub" name="search_btn" />
			</div>
			<div class="dfl dfl_title01">
				
					
						<a href="javascript:void(0)" class="on">出售中</a>
					
					
				
				
					
					
						<a
							href="/commodity/list.html?commodityType=GENERAL&commodityActive=WAIT_ADD&page=1&pageSize=10">待发布</a>
					
				
				
					
					
						<a
							href="/commodity/list.html?commodityType=GENERAL&commodityActive=OFF&page=1&pageSize=10">已下架</a>
					
				
			</div>
			<div class="clear"></div>
		</div>
		
		
				<div class="none_nr">暂无商品数据</div>
		
		
	</div>
	<input type="hidden" name="page" value="1" />
	<input type="hidden" name="pageSize" value="10" />
	<input type="hidden" name="commodityType" value="GENERAL" />
	<input type="hidden" name="commodityActive" value="ADD" />
	<input type="hidden" name="baseURL" value="/" />
 
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

	<script type="text/javascript">
		jQ.CommodityList.init();
		var commodityType = jQ("input:hidden[name='commodityType']").val()
		if (commodityType == "GENERAL") {
			jQ("#accordion").togglepanels({
				open : [ 1 ],
				select : jQ("#commodity_item_1")
			});
		} else if (commodityType == "SALE") {
			jQ("#accordion").togglepanels({
				open : [ 1 ],
				select : jQ("#commodity_item_2")
			});
		} else if (commodityType == "CLEAR") {
			jQ("#accordion").togglepanels({
				open : [ 1 ],
				select : jQ("#commodity_item_3")
			});
		}
	</script>
	<script id="showBox1" type="text/template">
		 <div class="pop_mainWrap">
			   <table class="t_pop1" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="t_pop1TD">
                        <table class="tn1_pop1" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td class="tn1_pop1TD">
                                <table class="tn2_pop1" width="230" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td><p class="t_notice">确定要下架该商品？</p></td>                    
                                  </tr>
                                </table>
                                <div class="mgt20 txac">
                                    <a class="btn_c_m mgr35 okBtn">确定</a>
                                    <a class="btn_c_y cancelBtn">取消</a>
                                </div>
                            </td>
                          </tr>
                        </table> 
                    </td>
                  </tr>
                </table>  
		 </div>
		 <div class="pop_mainBg"></div>
	</script>
	<script id="showBox2" type="text/template">
		 <div class="pop_mainWrap">
			   <table class="t_pop1" border="0" cellspacing="0" cellpadding="0">
		       <tr>
		         <td class="t_pop1TD">
		             <table class="tn1_pop1" border="0" cellspacing="0" cellpadding="0">
		               <tr>
		                 <td class="tn1_pop1TD">
		                     <table class="tn2_pop1" width="230" border="0" cellspacing="0" cellpadding="0">
		                       <tr>
		                         <td><p class="t_notice">确定要删除该商品？</p></td>                    
		                       </tr>
		                     </table>
		                     <div class="mgt20 txac">
		                         <a class="btn_c_m mgr35 okBtn">确定</a>
		                         <a class="btn_c_y cancelBtn">取消</a>
		                     </div>
		                 </td>
		               </tr>
		             </table> 
		         </td>
		       </tr>
		     </table>  
		</div>
		<div class="pop_mainBg"></div>
	</script>
	<script id="showBox3" type="text/template">
 	  <div class="pop_mainWrap">
	   <table class="t_pop1" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td class="t_pop1TD">
	          <table class="tn1_pop1" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <th class="tn1_pop1TH">
	                  <a href="javascript:void(0)" class="x cancelBtn">关闭</a>
	                  <span class="s1">修改库存数量</span>
	              </th>
	            </tr>
	            <tr>
	              <td class="tn1_pop1TD">
	                  <table class="tn2_pop1" width="230" border="0" cellspacing="0" cellpadding="0">
	                    <tr>
	                      <th width="35%">库存数量：</th>
	                      <td width="65%"><input type="text" class="inp_text persent80 amount" /></td>                    
	                    </tr>
	                  </table>
	                  <div class="mgt20 txar">
	                  	<a class="btn_c_m okBtn" href="javascript:void(0)">修改</a>
	                  </div>
	              </td>
	            </tr>
	          </table>
	      </td>
	    </tr>
	  </table>
 </div>
<div class="pop_mainBg"></div>
	</script>
	<script id="showBox4" type="text/template">
		<div class="pop_mainWrap">
		    <table class="t_pop1" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		      <td class="t_pop1TD">
		          <table class="tn1_pop1" border="0" cellspacing="0" cellpadding="0">
		            <tr>
		              <th class="tn1_pop1TH">
		                  <a href="javascript:void(0)" class="x cancelBtn">关闭</a>
		                  <span class="s1">修改库存数量</span>
		                  <span class="s2">总库存：<span class="commodityAmount">100</span></span>
		              </th>
		            </tr>
		            <tr>
		              <td class="tn1_pop1TD">
		                  <table class="tn2_pop1 changeBox" width="476" border="0" cellspacing="0" cellpadding="0">
		                     
		                  </table>
		                  <div class="mgt20 txar">
		                  	<a class="btn_c_m okBtn" href="javascript:void(0)">修改</a>
		                  </div>
		              </td>
		            </tr>
		          </table>
		
		      </td>
		    </tr>
		  </table>                
		 
		</div>
		<div class="pop_mainBg"></div>
	</script>
	<script id="showBox5" type="text/template">
		 <div class="pop_mainWrap">
			   <table class="t_pop1" border="0" cellspacing="0" cellpadding="0">
		       <tr>
		         <td class="t_pop1TD">
		             <table class="tn1_pop1" border="0" cellspacing="0" cellpadding="0">
		               <tr>
		                 <td class="tn1_pop1TD">
		                     <table class="tn2_pop1" width="230" border="0" cellspacing="0" cellpadding="0">
		                       <tr>
		                         <td><p class="t_notice">未选中任何商品</p></td>                    
		                       </tr>
		                     </table>
		                     <div class="mgt20 txac">
		                         <a class="btn_c_m okBtn">确定</a>
		                     </div>
		                 </td>
		               </tr>
		             </table> 
		         </td>
		       </tr>
		     </table>  
		</div>
		<div class="pop_mainBg"></div>
	</script>

</html>