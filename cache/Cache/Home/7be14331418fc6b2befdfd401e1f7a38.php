<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>	排行</title>		
			<meta name="keywords" content="搜啦,搜啦网,搜啦购,搜啦公司,四川搜啦,成都购物中心,成都商场,成都超市,成都连锁店,成都优惠券,成都代金券,成都清仓,成都打折,成都促销,OAO,OAO模式" />
			<meta name="description" content="搜啦购，是搜啦公司开发运营的中国首个实体商业OAO服务平台，可为实体商家提供线上网店与线下实体店深度融合的"双店"一体化经营模式，为消费者提供城市商圈和实体店信息移动查询、智能导购、与商家即时互动、优惠券下载、优惠商品购买、移动下单、线上远程支付、线下近场支付等全新购物体验和消费价值。" />
		
		<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/plugin/ui-select.css" rel="stylesheet" />
		<link href="/evbeta/__PUBLIC__/css/web/header.css" rel="stylesheet" type="text/css" />	
	<link href="http://static.soulagou.com/css/www-web/alone/ranking.css" rel="stylesheet"type="text/css" />
	</head>
    
	<body class="bg01">
	<input type="hidden" id="staticURL" value="http://static.soulagou.com" />
	<div id="wrap">
		<!-- Header Start -->
		<div id="header">

<div class="pg_w">
	<div class="header_t">
		<div class="logo01">
			<img src="http://static.soulagou.com/img/www-web/logo01.png" />
		</div>
		<div class="clear"></div>
		<div class="search_menu">
			<div class="dfr dfr_search">
						<input name="searchParam" class="text" type="text" id="search-info" value="请输入搜索内容" sourceValue="请输入搜索内容">
				<input class="sub" type="button" id='searchBtn'>
			</div>
			<span class="dfr">
				<select class="ui-select" name='searchType' id='searchType'>						
							<option  value="1">商品</option>
							<option  value="2">商家</option>
							<option  value="3">优惠劵</option>
				</select>
			</span>
		</div>
	</div>
</div>
<div class="header_b w1">
	<div class="pg_w">
		<div class="member_menu">
			
				<div class="login_mae">
					<!-- <a class="ysb ysb_yellow" href="http://member.soulagou.com/register">注册</a> -->
					<a class="ysb ysb_blue" href="#login" target="_blank" role="button" data-toggle="modal">商家</a>
					<a id="login_url" class="ysb ysb_blue" href="http://sso.soulagou.com/login?service=http://www.soulagou.com/j_client_security_check">用户</a>
				</div>
                <!-- Login_box -->
                <div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Modal header</h3>
                  </div>
                  <div class="modal-body" style="color: black;">
                   <form method="post" action="__APP__/User/Login/login" >
                   	用户名：<input type="text" value="" name="username"/><br>	
                   	密码：	<input type="text" value="" name="password"/>              
                    <button class="btn btn-primary" type="submit">登录</button>
                    </form>
                  </div>
                </div>
			<div class="clear"></div>
		</div>
		<div class="z">	
			
			<a id="menu_home" href="/">首页</a>
			<a id="menu_microCommodity" href="/microCommodity/all">微播</a>
			<a id="menu_tickets" href="/items/ticket/all">优惠券</a>
			<a id="menu_items" href="/items/all">商品</a>
			<a id="menu_mall" href="/mall/list">购物中心</a>
			<a id="menu_market" href="/market/list">商场超市</a>
			<!-- <a id="menu_brand" href="/brand/list">连锁店</a> -->
			<a id="menu_brand" href="#">连锁店</a>
			<a id="menu_top" href="/rank">店铺排行</a>
			<div class="clear"></div>
		</div>
	</div>
</div>
    	</div>
    	<!-- Header End -->
		
		<!-- Content Start -->
	    <div id="content">
	<div class="white_box mgb30">
           <div class="bo">
           	<h3 class="dfl bobt">TOP店铺</h3>
			<div class="clear"></div>
           </div>
           <div class="bosh">
           	<div class="rank">
               	<ul class="ur">
                   	<li class="c1">
                       	<div class="r_num"></div>
                           <div class="r_img"><a href="http://www.youpintiandi.com//proscenium/show/ypd/shop.html?itselfType=1&shopId=262" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop1.jpg" /></a></div>
                           <div class="r_info">
                           	<p class="t mgb10"><a href="http://www.youpintiandi.com//proscenium/show/ypd/shop.html?itselfType=1&shopId=262" target="_blank">潮汇 - 优品天地</a><img title="搜啦认证" class="txvt mgl05" src="http://static.soulagou.com/img/www-web/rz01.png" /></p>
                               <p class="x">
                               	抵金优惠：<span class="p">26</span>
                               </p>
                               <p class="x">
                               	特卖商品：<span class="p">10</span>
                               </p>
                               <p class="x">
                               	被收藏：<span>124</span>
                               </p>
                               <p class="mgt06">
                               	<input type="button" class="inp_btn scg scg01" value="收藏该商户" />
                               </p>
                           </div>
                           <div class="r_rmsp">
                           	<p class="t">热卖商品</p>
                               <div>
                               	<div class="dyp">
                                   	<a href="http://www.youpintiandi.com//ypd/commodity/commodity_detail.html?commodityId=b4782eea527d447898742c6f52a17dfe" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop1_p1.jpg" /></a>
                                   </div>
                                   <div class="dyp">
                                   	<a href="http://www.youpintiandi.com//ypd/commodity/commodity_detail.html?commodityId=8f8a0d8b15a44afeb7533260ee156495" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop1_p2.jpg" /></a>
                                   </div>
                                   <div class="dyp">
                                   	<a href="http://www.youpintiandi.com//ypd/commodity/commodity_detail.html?commodityId=2405aac7a2304097acc35eafd72356af" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop1_p3.jpg" /></a>
                                   </div>
                                   <div class="clear"></div>
                               </div>
                           </div>                            
                           <div class="clear"></div>
                       </li>
                       <li class="c2">
                       	<div class="r_num"></div>
                           <div class="r_img"><a href="http://www.youpintiandi.com//proscenium/show/ypd/shop.html?itselfType=1&shopId=334" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop2.jpg" /></a></div>
                           <div class="r_info">
                           	<p class="t mgb10"><a href="http://www.youpintiandi.com//proscenium/show/ypd/shop.html?itselfType=1&shopId=334" target="_blank">麦考林 - 优品天地</a><img title="搜啦认证" class="txvt mgl05" src="http://static.soulagou.com/img/www-web/rz01.png" /></p>
                               <p class="x">
                               	抵金优惠：<span class="p">24</span>
                               </p>
                               <p class="x">
                               	特卖商品：<span class="p">8</span>
                               </p>
                               <p class="x">
                               	被收藏：<span>56</span>
                               </p>
                               <p class="mgt06">
                               	<input type="button" class="inp_btn scg scg01" value="收藏该商户" />
                               </p>
                           </div>
                           <div class="r_rmsp">
                           	<p class="t">热卖商品</p>
                               <div>
                               	<div class="dyp">
                                   	<a href="http://www.youpintiandi.com//ypd/commodity/commodity_detail.html?commodityId=ed60426fb0424bc1b578280bc3639ebd" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop2_p1.jpg" /></a>
                                   </div>
                                   <div class="dyp">
                                   	<a href="http://www.youpintiandi.com//ypd/commodity/commodity_detail.html?commodityId=34f743bc5cb7416989038e5e6d7d3d90" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop2_p2.jpg" /></a>
                                   </div>
                                   <div class="dyp">
                                   	<a href="http://www.youpintiandi.com//ypd/commodity/commodity_detail.html?commodityId=ed79516c1f304c9f9d96c8ef4ef22276" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop2_p3.jpg" /></a>
                                   </div>
                                   <div class="clear"></div>
                               </div>
                           </div>                            
                           <div class="clear"></div>
                       </li>
                       <li class="c3">
                       	<div class="r_num"></div>
                           <div class="r_img"><a href="http://www.cdmidtown.com//proscenium/show/cfyyc/shop.html?itselfType=1&shopId=294" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop3.jpg" /></a></div>
                           <div class="r_info">
                           	<p class="t mgb10"><a href="http://www.cdmidtown.com//proscenium/show/cfyyc/shop.html?itselfType=1&shopId=294" target="_blank">稻草人 - 财富又一城</a><img title="搜啦认证" class="txvt mgl05" src="http://static.soulagou.com/img/www-web/rz01.png" /></p>
                               <p class="x">
                               	抵金优惠：<span class="p">16</span>
                               </p>
                               <p class="x">
                               	特卖商品：<span class="p">5</span>
                               </p>
                               <p class="x">
                               	被收藏：<span>46</span>
                               </p>
                               <p class="mgt06">
                               	<input type="button" class="inp_btn scg scg01" value="收藏该商户" />
                               </p>
                           </div>
                           <div class="r_rmsp">
                           	<p class="t">热卖商品</p>
                               <div>
                               	<div class="dyp">
                                   	<a href="http://www.cdmidtown.com//cfyyc/commodity/commodity_detail.html?commodityId=db056d20689348d6af3c573117ec8ebf" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop3_p1.jpg" /></a>
                                   </div>
                                   <div class="dyp">
                                   	<a href="http://www.cdmidtown.com//cfyyc/commodity/commodity_detail.html?commodityId=506f9cce44224c0daecd0513403527a1" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop3_p2.jpg" /></a>
                                   </div>
                                   <div class="dyp">
                                   	<a href="http://www.cdmidtown.com//cfyyc/commodity/commodity_detail.html?commodityId=b6f8f3b8a8bc4e83ada4ffa1584c1fa1" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop3_p3.jpg" /></a>
                                   </div>
                                   <div class="clear"></div>
                               </div>
                           </div>                            
                           <div class="clear"></div>
                       </li>
                   </ul>
                   <div class="clear"></div>
               </div>
           </div>
       </div>

	<div class="white_box mgb30">
		<div class="bo">
			<h3 class="dfl bobt">推荐店铺</h3>
			<div class="clear"></div>
		</div>
		<div class="lb">
			
				<div class="dy">
					<div class="imgbox">
						<a href="http://www.soulagou.com/outlet/1359536756972"><img src="http://tmp.images.soulagou.com/5c0b44796ffa1437c33d122398d152d4_soulagou_1.jpg" /></a>
					</div>
					<div class="bgbox">
						<p><a href="http://www.soulagou.com/outlet/1359536756972">百丝财富又一城店</a></p>
						<p>地址：府青路二段2号财富又一城</p>
						<a href="#" class="icon_t" title="XXXX商圈">sdfsdsd</a>
					</div>
				</div>
			
				<div class="dy">
					<div class="imgbox">
						<a href="http://www.soulagou.com/outlet/1359685873616"><img src="http://tmp.images.soulagou.com/801dfd4495d282b5ada14cb613751454_soulagou_1.jpg" /></a>
					</div>
					<div class="bgbox">
						<p><a href="http://www.soulagou.com/outlet/1359685873616">舒卷鞋财富又一城店</a></p>
						<p>地址：府青路二段2号财富又一城</p>
						<a href="#" class="icon_t" title="XXXX商圈">sdfsdsd</a>
					</div>
				</div>
			
				<div class="dy">
					<div class="imgbox">
						<a href="http://www.soulagou.com/outlet/1359772698606"><img src="http://tmp.images.soulagou.com/111d07911405fa8e42d7b0e61d1d6bf0_soulagou_1.jpg" /></a>
					</div>
					<div class="bgbox">
						<p><a href="http://www.soulagou.com/outlet/1359772698606">艾美家居店优品天地店</a></p>
						<p>地址：青羊大道99号优品天地购物广场</p>
						<a href="#" class="icon_t" title="XXXX商圈">sdfsdsd</a>
					</div>
				</div>
			
			<div class="clear"></div>
		</div>
	</div>

        	<div class="clear"></div>
    	</div>
    	<!-- Content End -->
    	
	    <!--页脚-->
	    <div id="footer">
	    	<div class="pg_w">
	            <div class="f_logo">
	                <a href="#"><img src="http://static.soulagou.com/img/www-web/footer_logo.png" width="192" height="69" /></a>
	        </div>
	            <div class="f_text">
	            	
	            	<p>Copyright © 2012 四川搜啦营销管理有限公司&amp;四川搜啦信息技术有限公司 | 028-66660198 | <a class="g3" href="/about_us">关于我们</a></p>
	                <p class="g1">增值电信业务经营许可证： 川B2-20110048 蜀ICP备 10203259号-6</p>
	                <p><span class="g1">公安机关信息安全备案：51011199151-00001</span> <a target="_blank" href="http://www.cdnet110.com/"><img src="http://static.soulagou.com/img/www-web/wj_icon_24.png" class="txvm" /></a></p>
	            </div>
	            <div class="clear"></div>
	            <div class="mgt15 g2 txlh6 mgl100" style=" border:#dddddd 1px solid; padding:10px; width:720px;">
	            	<p>- 本站所涉及的品牌、商标、商业信息等所有权及解释权归其所有人所有</p>
	                <p>- 任何媒体、网站或个人如转载或其他方式复制发布本站内容，须注明"来源：搜啦网（www.eee.so）"，违者本网将依法追究责任。</p>
	                <p>- 搜啦旗下运营：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.cdmidtown.com/" title="财富又一城" target="_blank"><img src="http://static.soulagou.com/img/www-web/footer_cfy_24.png" class="txvm" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="b2" href="http://www.youpintiandi.com/" title="" target="_blank"><img src="http://static.soulagou.com/img/www-web/footer_ypd_24.png" class="txvm" /></a></p>
	            </div>
	        </div>
	    </div>
	    <!--页脚 end--> 
		</div>
		
    	<input type="hidden" id="selfURL" value="/" />
	</body>
			<script type="text/javascript" src="/evbeta/__PUBLIC__/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/bootstrap.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/plugin/underscore-min.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/plugin/ui-select.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/web.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/plugin/ui-scrollTitleProxy.js"></script>
	<script type="text/javascript">
		jQ.WWWServerWeb.init();
		jQ('.ui-select').defaultSelect();
		jQ('.header_b').scrollTitle();
	</script>
	
	
	<script type="text/javascript">			
		jQ(".chat_btn").live("click",function() {
			//var currentUrl = location.href;
			//location.href = "http://sso.soulagou.com/login?service=http://www.soulagou.com/j_client_security_check?next=" + currentUrl;
			window.open("http://wpa.qq.com/msgrd?V=1&Uin=4000111989&Site=im.qq.com&Menu=yes","_blank","");
		});
	</script>
	
	
	
	<script type="text/javascript">
		jQ("#menu_top").addClass("on");
	</script>

	<!-- count code -->
	<script type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcb3e995f904ed394dc22769c6916da62' type='text/javascript'%3E%3C/script%3E"));
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fec7d8ca872c2eeec306a235893978adc' type='text/javascript'%3E%3C/script%3E"));
	</script>
</html>