(function( $ ) {
	var win8 = function(jDom){
		this.init(jDom);
		this.bindEvent();
	}
	win8.label = {};
	win8.prototype={
		init: function(jDom){
			this.container = jDom;
		},
		bindEvent: function(){
			// ���ڵ��뵭��
			this.containerFadeToggle();
		},
		containerFadeToggle: function(){
			var mask = this.container.find('.sale-ui-win8-container-mask'),
				labelRight = this.container.find('.sale-ui-win8-label-mask-right'),
				self = this;
			win8.label.lastWidth = labelRight.width()
			this.container.hover(function(){
				mask.stop();
				// ����ͼƬ�����OVER�¼��е���Ч
				mask.fadeIn(100);
				// ��ǩ���������OVER�¼��е���Ч
				self.labelMaskFadeIn();
				
			},function(){
				mask.stop();
				// ����ͼƬ�����OUT�¼��е���Ч
				mask.fadeOut(100);
				// ��ǩ���������OUT�¼��е���Ч
				self.labelMaskFadeOut();
			}); 
		},
		labelMaskFadeIn: function(){
			
			var labelRight = this.container.find('.sale-ui-win8-label-mask-right'),
				labelLeft = this.container.find('.sale-ui-win8-label-mask-left'),
				labelMask = this.container.find('.sale-ui-win8-label-mask'),
				lastWidth = win8.label.lastWidth,// ��ʼ���
				self = this;
				labelRight.width(0);
				labelRight.stop(true);
				// labelMask.stop(true);
				labelRight.css('display','block');
				this.labelMaskRestore();
				// ��ǩ����Ч��
				labelRight.animate({
					width:lastWidth+'px'
				},'fast',function(){
					 // ��ʼ��ǩ����
					labelMask.fadeOut("fast");
					// ������ǩ����
					self.labelBackShow(); 
				})
		},
		labelMaskFadeOut: function(){
			var labelRight = this.container.find('.sale-ui-win8-label-mask-right'),
				labelLeft = this.container.find('.sale-ui-win8-label-mask-left'),
				labelMask = this.container.find('.sale-ui-win8-label-mask'),
				labelBack = this.container.find('.sale-ui-win8-label-back'),
				self = this;
				labelRight.stop(true);
				// ��ԭ��ǩ͸����
				this.labelMaskRestore();
				labelRight.width(win8.label.lastWidth - win8.label.lastWidth * 0.15);
				labelRight.animate({
					width:'0px'
				},200);
				//������ǩ����
				self.labelBackHide();
		},
		labelMaskRestore:function(){
			var labelMask = this.container.find('.sale-ui-win8-label-mask');
			labelMask.stop();
			labelMask.fadeTo(1,1);
		} ,
		/* ��ʾ������ǩ */
		labelBackShow:function(){
			var labelBack = this.container.find('.sale-ui-win8-label-back');
			labelBack.fadeIn(300);
		},
		/* ���ر�����ǩ */
		labelBackHide:function(){
			var labelBack = this.container.find('.sale-ui-win8-label-back');
			labelBack.stop();
			labelBack.css('display','block');
			labelBack.fadeOut(200);
		}
	}
	
	$.fn.window8Index = function(){
		this.each(function(){
			new win8($(this));
		})
	}
})( jQuery )