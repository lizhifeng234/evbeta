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
	<link href="/evbeta/__PUBLIC__/css/web/ranking.css" rel="stylesheet"type="text/css" />
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
					<a class="ysb ysb_blue" href="#blogin" target="_blank" role="button" data-toggle="modal">商家</a>
					<a class="ysb ysb_blue" href="#plogin" target="_blank" role="button" data-toggle="modal">用户</a>
				</div>
                <!-- Login_box -->
                <div id="plogin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">欢迎用户登录</h3>
                  </div>
                  <div class="modal-body" style="color: black;">
                   <form method="post" action="__APP__/User/Login/blogin" >
                   	<table class="dfl" border="0" cellspacing="5" cellpadding="5">
						   <tr><th>用户名:</th><td><input type="text" class="inp_text" value="" name="username"/></td></tr>
						   <tr><th>密码:</th><td><input type="password" class="inp_text"  value="" name="password"/> </td></tr>
							<tr><th></th><td><input class="inp_btn btn_brown" type="submit" value="登录"/></td></tr>                    
                       </table>    
                    <div class="login_box dfl">
          					宣传图片
                    </div>
                    </form>
                  </div>
                </div>
                <div id="blogin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">欢迎商家登录</h3>
                  </div>
                  <div class="modal-body" style="color: black;">
                   <form method="post" action="__APP__/User/Login/blogin" >
                   	<table class="dfl" border="0" cellspacing="5" cellpadding="5">
						   <tr><th>用户名:</th><td><input type="text" class="inp_text" value="" name="username"/></td></tr>
						   <tr><th>密码:</th><td><input type="password" class="inp_text"  value="" name="password"/> </td></tr>
							<tr><th></th><td><input class="inp_btn btn_brown" type="submit" value="登录"/></td></tr>                    
                       </table>    
                    <div class="login_box dfl">
          					宣传图片
                    </div>
                    </form>
                  </div>
                </div>
			<div class="clear"></div>
		</div>
		<div class="z">	
			<a id="menu_top" href="/evbeta/Home/Index/">首页</a>
			<a id="menu_microCommodity" href="/evbeta/Home/Index/news_list">微活动</a>
			<a id="menu_tickets" href="/evbeta/Home/Index/activity">今日活动</a>
			<a id="menu_items" href="/evbeta/Home/mall/">商家广场</a>
			<a id="menu_mall" href="/evbeta/Home/Index/brand">品牌</a>
			<a id="menu_market" href="/evbeta/Home/Index/code">二维码</a>
			<a id="menu_market" href="/evbeta/Home/Index/about">关于我们</a>
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
                           
                           <div class="r_rmsp">
                           	<p class="t">最新优惠</p>
                               <div>
                               	<ul class="news">
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               	</ul>
                                   <div class="clear"></div>
                               </div>
                           </div>                           
                           <div class="r_info">
                           	<p class="t mgb10"><a href="http://www.youpintiandi.com//proscenium/show/ypd/shop.html?itselfType=1&shopId=262" target="_blank">潮汇 - 优品天地</a><img title="搜啦认证" class="txvt mgl05" src="http://static.soulagou.com/img/www-web/rz01.png" /></p>
                           	<p class="area">商圈:丰泽广场</p>
                           		<a href=""><div class="zan">
                           			<span><img src="/evbeta/__PUBLIC__/img/web/praise.png" width="30" height="30" ></span>
									<p>45648&nbsp;赞</p>
                           		</div></a><br>
								<a href=""><div class="see">
                           			<span></span>
									<p>648&nbsp;关注</p>
                           		</div></a>
                           </div>
                           <div class="clear"></div>
                       </li>
                       <li class="c2">
                       	<div class="r_num"></div>
                           <div class="r_img"><a href="http://www.youpintiandi.com//proscenium/show/ypd/shop.html?itselfType=1&shopId=262" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop1.jpg" /></a></div>
                           
                           <div class="r_rmsp">
                           	<p class="t">最新优惠</p>
                               <div>
                               	<ul class="news">
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               	</ul>
                                   <div class="clear"></div>
                               </div>
                           </div>                           
                           <div class="r_info">
                           	<p class="t mgb10"><a href="http://www.youpintiandi.com//proscenium/show/ypd/shop.html?itselfType=1&shopId=262" target="_blank">潮汇 - 优品天地</a><img title="搜啦认证" class="txvt mgl05" src="http://static.soulagou.com/img/www-web/rz01.png" /></p>
                           	<p class="area">商圈:丰泽广场</p>
								<a href=""><div class="zan">
                           			<span><img src="/evbeta/__PUBLIC__/img/web/praised.png" width="30" height="30" ></span>
									<p>45648&nbsp;赞</p>
                           		</div></a><br>
								<a href=""><div class="see">
                           			<span></span>
									<p>568&nbsp;关注</p>
                           		</div></a>
                           </div>
                           <div class="clear"></div>
                       </li>
                       <li class="c3">
                       	<div class="r_num"></div>
                           <div class="r_img"><a href="http://www.youpintiandi.com//proscenium/show/ypd/shop.html?itselfType=1&shopId=262" target="_blank"><img src="http://static.soulagou.com/img/www-web/rank/shop1.jpg" /></a></div>
                           
                           <div class="r_rmsp">
                           	<p class="t">最新优惠</p>
                               <div>
                               	<ul class="news">
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               		<li><a href="">端午3天50元自助，吃不死你不要钱！</a></li>
                               	</ul>
                                   <div class="clear"></div>
                               </div>
                           </div>                           
                           <div class="r_info">
                           	<p class="t mgb10"><a href="http://www.youpintiandi.com//proscenium/show/ypd/shop.html?itselfType=1&shopId=262" target="_blank">潮汇 - 优品天地</a><img title="搜啦认证" class="txvt mgl05" src="http://static.soulagou.com/img/www-web/rz01.png" /></p>
                           	<p class="area">商圈:丰泽广场</p>
								<a href=""><div class="zan">
                           			<span><img src="/evbeta/__PUBLIC__/img/web/praised.png" width="30" height="30" ></span>
									<p>45648&nbsp;赞</p>
                           		</div></a><br>
								<a href=""><div class="see">
                           			<span></span>
									<p>448&nbsp;关注</p>
                           		</div></a>
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
			<h3 class="dfl bobt">合作伙伴</h3>
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