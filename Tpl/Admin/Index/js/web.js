jQ.extend({
	WWWServerWeb:{
		init:function(){
			jQ.WWWServerWeb.searchInit();
			jQ.WWWServerWeb.loginInit();
		},
		searchInit:function(){//��ʼ����������
			jQ("#search-info").focusin(jQ.WWWServerWeb.onSearchFocusin);
			jQ("#search-info").focusout(jQ.WWWServerWeb.onSearchFocusout);
			jQ("#searchBtn").click(function(){
				if(jQ("#search-info").val()==jQ("#search-info").attr("sourceValue")){
					return;
				}
				if(jQ("#searchType").val()=='1'){//��Ʒ
					var url = jQ.clearPath(jQ("#selfURL").val())+"items/search?searchType="+jQ("#searchType").val()+"&searchParam="+jQ("#search-info").val();
					window.location.href = url;
				}else if(jQ("#searchType").val()=='2'){//�̼�
					var url = jQ.clearPath(jQ("#selfURL").val())+"outlet/search?searchType="+jQ("#searchType").val()+"&searchParam="+jQ("#search-info").val();
					window.location.href = url;
				}else if(jQ("#searchType").val()=='3'){//ȯ
					var url = jQ.clearPath(jQ("#selfURL").val())+"items/ticket/search?searchType="+jQ("#searchType").val()+"&searchParam="+jQ("#search-info").val();
					window.location.href = url;
				}
			});
		},
		loginInit : function() {
			var loginUrl = jQ("#login_url");
			if (loginUrl != null) {
				var url = loginUrl.attr("href");
				loginUrl.attr("href", url + "?next=" + location.href);
			}
		},
		onSearchFocusin:function(){
			var self = jQ(this);
			if(self.val()==self.attr("sourceValue")){
				self.val("");
			}
		},
		onSearchFocusout:function(){
			var self = jQ(this);
			if(jQ.trim(self.val())==''){
				self.val(self.attr("sourceValue"));
			}
		}
	}
});