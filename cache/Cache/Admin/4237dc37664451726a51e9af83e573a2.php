<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<style>
			select {
				width: 100px;
			}
			#province {
				width: 150px;
			}
		</style>
		<script src="/evbeta/Public/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript">
			//地区选择
			function provincechange() {
				var province = $('#province');
				$('select').attr('disabled', true);
				$('.city').remove();
				$('#city').show();
				$('.loading').show();
				$.get("__URL__/getcity", {
					provinceid : province.val()
				}, function(result) {
					if (result != null) {
						for (var i = 0; i < result.length; i++) {
							$('#city:last').append('<option class="city" value=' + result[i]['cityid'] + '>' + result[i]['city'] + '</option>');
						}
						$('select').attr('disabled', false);
						$('.loading').hide();
					}
				}, 'json');
			}

			function citychange() {
				var city = $('#city');
				$('select').attr('disabled', true);
				$('#area').show();
				$('.area').remove();
				$('.loading').show();
				$.get("__URL__/getarea", {
					cityid : city.val()
				}, function(result) {
					if (result != null) {
						for (var i = 0; i < result.length; i++) {
							$('#area:last').append('<option class=area value=' + result[i]['areaid'] + '>' + result[i]['area'] + '</option>');
						}
						$('select').attr('disabled', false);
						$('.loading').hide();
					}
				}, 'json');

			}

			function areachange() {
				var area = $('#area');
				$('select').attr('disabled', true);
				$('#location').show();
				$('.location').remove();
				$('.loading').css('display', 'block');
				$.get("__URL__/getlocation", {
					areaid : area.val()
				}, function(result) {
					if (result != null) {
						for (var i = 0; i < result.length; i++) {
							$('#location:last').append('<option class=location value=' + result[i]['locationid'] + '>' + result[i]['location'] + '</option>');
						}
						$('select').attr('disabled', false);
						$('.loading').hide();
					} else {
						$('select').attr('disabled', false);
						$('.loading').css('display', 'none');
						alert('该地区目前没有详细范围，敬请期待。');
					}
				}, 'json');
			}

			//地区选择
			function postdata() {
				var loca=$('#location');
				var area = $('#area');
				$.post("__URL__/add", {
					areaid : area.val(),location:loca.val()
				}, function(result) {
					if (result!= 0) {
						alert('添加成功');
						loca.val('');
					} else {
						alert('添加失败');
					}
				}, 'json');
			}

			
		</script>
	</head>

	<body>
		<!--Province-->
		<select id="province" name="province" onchange="provincechange()">
			<option class='province'>省 请选择</option>
			<?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($vo["provinceid"]); ?>"><?php echo ($vo["province"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<select name="city" id="city" onchange="citychange()">
			<option>市 请选择</option>
		</select>
		<select name="areaid" id="area"  onchange="areachange()">
			<option>县/区 请选择</option>
		</select>
		<input id="location" type="text" name='location' />
		<input id="commit" type="button" value="添加" onclick="postdata()"/>
		<img class="loading" width=15 height=15 src="/evbeta/Public/img/loading.gif" style='display:none'/>
		<a href="__URL__/logout">退出</a>
	</body>
</html>