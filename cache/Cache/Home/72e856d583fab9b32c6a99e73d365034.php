<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			
	购物中心 - 列表

		</title>
		
			<meta name="keywords" content="搜啦,搜啦网,搜啦购,搜啦公司,四川搜啦,成都购物中心,成都商场,成都超市,成都连锁店,成都优惠券,成都代金券,成都清仓,成都打折,成都促销,OAO,OAO模式" />
			<meta name="description" content="搜啦购，是搜啦公司开发运营的中国首个实体商业OAO服务平台，可为实体商家提供线上网店与线下实体店深度融合的“双店”一体化经营模式，为消费者提供城市商圈和实体店信息移动查询、智能导购、与商家即时互动、优惠券下载、优惠商品购买、移动下单、线上远程支付、线下近场支付等全新购物体验和消费价值。" />	
		
		<link href="/evbeta/__PUBLIC__/css/global.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/web/ui-dialogBox.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/plugin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
		<link href="/evbeta/__PUBLIC__/css/plugin/ui-select.css" rel="stylesheet" />
		<link href="/evbeta/__PUBLIC__/css/web/header.css" rel="stylesheet" type="text/css" />

		
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
					<a class="ysb ysb_blue" href="http://outlet.soulagou.com" target="_blank">商家</a>
					<a id="login_url" class="ysb ysb_blue" href="http://sso.soulagou.com/login?service=http://www.soulagou.com/j_client_security_check">用户</a>
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
        	
	<div class="hotsaler white_box">
       	<div class="db2">
           	<span class="yacho">热门：</span>
            <div class="sao_rk">
            	 
                 <a href="/outlet/1359532833017">优品天地</a>
                 
                 <a href="/outlet/1359532709580">财富又一城</a>
            	 
                 <a href="/outlet/1359598867356">sm广场</a>
                 
                 <a href="/outlet/1359610843643">龙湖三千集</a>
                 
                 <a href="/outlet/1359613551756">万达广场锦华店</a>
                 
                 <a href="/outlet/1359597596436">九方购物中心</a>
                 
                 <a href="/outlet/1359597848016">奥克斯广场</a>
             </div>
             <div class="clear"></div>
        </div>
    </div>
	<div class="filter white_box">
		<div class="db2">
			<span class="yacho">区域：</span>
			<div class="sao_rk">
				
				<a id="00000002" href="/mall/list" class="district">全成都</a>
				
					
					<a id="00000007" href="/mall/list/00000007" class="district">青羊区</a>
				
					
					<a id="00000014" href="/mall/list/00000014" class="district">武侯区</a>
				
					
					<a id="00000023" href="/mall/list/00000023" class="district">成华区</a>
				
					
					<a id="00000026" href="/mall/list/00000026" class="district">金牛区</a>
				
					
					<a id="00000030" href="/mall/list/00000030" class="district">高新区</a>
				
					
					<a id="00000032" href="/mall/list/00000032" class="district">龙泉驿区</a>
				
					
					<a id="00000033" href="/mall/list/00000033" class="district">青白江区</a>
				
					
					<a id="00000034" href="/mall/list/00000034" class="district">新都区</a>
				
					
					<a id="00000035" href="/mall/list/00000035" class="district">温江区</a>
				
					
					<a id="00000036" href="/mall/list/00000036" class="district">金堂县</a>
				
					
					<a id="00000037" href="/mall/list/00000037" class="district">双流县</a>
				
					
					<a id="00000038" href="/mall/list/00000038" class="district">郫县</a>
				
					
					<a id="00000039" href="/mall/list/00000039" class="district">大邑县</a>
				
					
					<a id="00000040" href="/mall/list/00000040" class="district">蒲江县</a>
				
					
					<a id="00000041" href="/mall/list/00000041" class="district">新津县</a>
				
					
					<a id="00000059" href="/mall/list/00000059" class="district">都江堰市</a>
				
					
					<a id="00000003" href="/mall/list/00000003" class="district">锦江区</a>
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="hr"></div>
		<div class="db2">
			<span class="yacho">商圈：</span>
			<div class="sao_rk">
			
				
				<a id="00000004" href="/mall/list/00000003/00000004" class="b_district">盐市口春熙路</a>
			
				
				<a id="00000005" href="/mall/list/00000003/00000005" class="b_district">天府广场红照壁</a>
			
				
				<a id="00000006" href="/mall/list/00000003/00000006" class="b_district">九眼桥成仁路</a>
			
				
				<a id="00000008" href="/mall/list/00000007/00000008" class="b_district">金沙光华</a>
			
				
				<a id="00000009" href="/mall/list/00000007/00000009" class="b_district">太升路草市街</a>
			
				
				<a id="00000010" href="/mall/list/00000007/00000010" class="b_district">骡马市玉带桥</a>
			
				
				<a id="00000011" href="/mall/list/00000007/00000011" class="b_district">八宝街西大街</a>
			
				
				<a id="00000015" href="/mall/list/00000014/00000015" class="b_district">内外双楠</a>
			
				
				<a id="00000016" href="/mall/list/00000014/00000016" class="b_district">桐梓林玉林</a>
			
				
				<a id="00000017" href="/mall/list/00000014/00000017" class="b_district">科华</a>
			
				
				<a id="00000018" href="/mall/list/00000014/00000018" class="b_district">高升桥红牌楼</a>
			
				
				<a id="00000019" href="/mall/list/00000014/00000019" class="b_district">人南数码</a>
			
				
				<a id="00000020" href="/mall/list/00000014/00000020" class="b_district">女鞋之都</a>
			
				
				<a id="00000021" href="/mall/list/00000014/00000021" class="b_district">空港机场路</a>
			
				
				<a id="00000024" href="/mall/list/00000023/00000024" class="b_district">建设路万年场</a>
			
				
				<a id="00000025" href="/mall/list/00000023/00000025" class="b_district">城北府青</a>
			
				
				<a id="00000027" href="/mall/list/00000026/00000027" class="b_district">高笋塘驷马桥</a>
			
				
				<a id="00000028" href="/mall/list/00000026/00000028" class="b_district">羊西线</a>
			
				
				<a id="00000029" href="/mall/list/00000026/00000029" class="b_district">华侨城欢乐谷</a>
			
				
				<a id="00000031" href="/mall/list/00000030/00000031" class="b_district">城南会展</a>
			
				
				<a id="00000012" href="/mall/list/00000007/00000012" class="b_district">宽窄巷子</a>
			
				
				<a id="00000013" href="/mall/list/00000007/00000013" class="b_district">文殊坊</a>
			
				
				<a id="00000022" href="/mall/list/00000014/00000022" class="b_district">武侯祠锦里</a>
			
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="lb">
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1359602061775"><img src="http://tmp.images.soulagou.com/dcae69e278d396005374a28018ba3049_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1359602061775">华润万象城</a></p>
					<p class="oflp">地址：双庆路8号华润万象城(近万年场)</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 成华区 建设路万年场">四川 成都 成华区 建设路万年场</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1359613551756"><img src="http://tmp.images.soulagou.com/72e0409ebed14ea1e688815e248dd376_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1359613551756">万达广场锦华店</a></p>
					<p class="oflp">地址：二环路东五段29号万达购物广场</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 锦江区 九眼桥成仁路">四川 成都 锦江区 九眼桥成仁路</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1359532833017"><img src="http://tmp.images.soulagou.com/32f8de133b75e1998ea345571687cfab_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1359532833017">优品天地</a></p>
					<p class="oflp">地址：青羊大道99号</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 青羊区 金沙光华">四川 成都 青羊区 金沙光华</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1359532709580"><img src="http://tmp.images.soulagou.com/f7e8415206259001105c052d4969ad86_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1359532709580">财富又一城</a></p>
					<p class="oflp">地址：府青路二段2号</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 成华区 建设路万年场">四川 成都 成华区 建设路万年场</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1359597596436"><img src="http://tmp.images.soulagou.com/68ae1631a575836ae42d0f73fe3b7486_soulagou_3.png" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1359597596436">九方购物中心</a></p>
					<p class="oflp">地址：高新区府城大道中段88号(近地铁1号线高新站)</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 高新区 城南会展">四川 成都 高新区 城南会展</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/xinzhongxingpinpaishangyeguangchang"><img src="http://tmp.images.soulagou.com/c984c888a83bd84154ca615793b0bd45_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/xinzhongxingpinpaishangyeguangchang">新中兴品牌商业广场</a></p>
					<p class="oflp">地址：东大街上东大街段22号</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 锦江区 盐市口春熙路">四川 成都 锦江区 盐市口春熙路</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1361864285822"><img src="http://tmp.images.soulagou.com/7f8dd95eea7f53b973d716f1bf8ae27c_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1361864285822">成都富力天汇</a></p>
					<p class="oflp">地址：顺城大街289号</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 青羊区 骡马市玉带桥">四川 成都 青羊区 骡马市玉带桥</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1361863678447"><img src="http://tmp.images.soulagou.com/7d06e09e4374e0bf304941bb8697887d_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1361863678447">成都凯乐广场</a></p>
					<p class="oflp">地址：顺城大街302号</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 青羊区 骡马市玉带桥">四川 成都 青羊区 骡马市玉带桥</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1361791982840"><img src="http://tmp.images.soulagou.com/79c7226b0f26015822b4b662f0b96c04_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1361791982840">米瑞购物广场</a></p>
					<p class="oflp">地址：锦江区上东大街(泰华批发服装城对面)</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 锦江区 盐市口春熙路">四川 成都 锦江区 盐市口春熙路</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1359687644260"><img src="http://tmp.images.soulagou.com/24f65410f28d2659e496fc4528b085d8_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1359687644260">人人乐锦都购物广场</a></p>
					<p class="oflp">地址：通惠门路3号</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 青羊区 宽窄巷子">四川 成都 青羊区 宽窄巷子</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1359619755930"><img src="http://tmp.images.soulagou.com/4972dd0f98df4c63d9bf48c3026409ec_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1359619755930">仁和春天广场</a></p>
					<p class="oflp">地址：二环路西二段19号</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 青羊区 金沙光华">四川 成都 青羊区 金沙光华</a>
				</div>
			</div>
		
			<div class="dy">
				<div class="imgbox">
					<a href="http://www.soulagou.com/outlet/1359613067899"><img src="http://tmp.images.soulagou.com/2ad830a419504cec8a332b60434e867b_soulagou_3.jpg" /></a>
				</div>
				<div class="bgbox">
					<p><a href="http://www.soulagou.com/outlet/1359613067899">上普财富中心</a></p>
					<p class="oflp">地址：大业路6号</p>
					<a href="javascript:void(0)" class="icon_t" title="四川 成都 锦江区 天府广场红照壁">四川 成都 锦江区 天府广场红照壁</a>
				</div>
			</div>
		
		<div class="clear"></div>
	</div>
	<div id="" class="arrow_page">共3页<a href="?page=1">上一页</a><span>1</span><a href="?page=2">2</a><a href="?page=3">3</a><a href="?page=2">下一页</a></div>

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
	                <p>- 任何媒体、网站或个人如转载或其他方式复制发布本站内容，须注明“来源：搜啦网（www.eee.so）"，违者本网将依法追究责任。</p>
	                <p>- 搜啦旗下运营：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.cdmidtown.com/" title="财富又一城" target="_blank"><img src="http://static.soulagou.com/img/www-web/footer_cfy_24.png" class="txvm" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="b2" href="http://www.youpintiandi.com/" title="" target="_blank"><img src="http://static.soulagou.com/img/www-web/footer_ypd_24.png" class="txvm" /></a></p>
	            </div>
	        </div>
	    </div>
	    <!--页脚 end--> 
		</div>
		
    	<input type="hidden" id="selfURL" value="/" />
	</body>
	
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/plugin/underscore-min.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/plugin/ui-select.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/web.js"></script>
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/plugin/ui-scrollTitleProxy.js"></script>
	
	<script type="text/javascript" src="/evbeta/__PUBLIC__/js/web/mall/mall_list.js"></script>
	
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
		jQ.area.init('/', '00000002', '');
		jQ("#menu_mall").addClass("on");
	</script>

	<!-- count code -->
	<script type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fcb3e995f904ed394dc22769c6916da62' type='text/javascript'%3E%3C/script%3E"));
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fec7d8ca872c2eeec306a235893978adc' type='text/javascript'%3E%3C/script%3E"));
	</script>
</html>