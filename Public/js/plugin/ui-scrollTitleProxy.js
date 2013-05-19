(function($){
	var scrollTitle = function(jDom){
		return this.init(jDom);
	}
	scrollTitle.prototype={
		init:function(jDom){
			// ��¼��ʼ��TOPֵ
			scrollTitle.lastTop = jDom.offset().top;
			scrollTitle.lastWidth = jDom.width();
			this.dom = jDom;
			this.bindEvent();
			return this.dom;
		},
		bindEvent:function(){
			var self = this;
			// ����window�Ĺ��¼�
			$(window).scroll(function(){
				var windowTop = $(this).scrollTop();
				// ����ָ����TOPֵ���򸡶���������Ϸ�
				if(windowTop > scrollTitle.lastTop){
					self.dom.css({'position':'fixed','top':'0px','width':scrollTitle.lastWidth+'px', 'z-index': 2000});
					self.dom.addClass('headbg0');
				}
				else{
					self.dom.css('position','static');
					self.dom.removeClass('headbg0');
				}
			})
		}
	}
	$.fn.scrollTitle = function(){
		this.each(function(){
			new scrollTitle($(this));
		})
	}
})( jQuery )