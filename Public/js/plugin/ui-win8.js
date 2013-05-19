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
			// 窗口淡入淡出
			this.containerFadeToggle();
		},
		containerFadeToggle: function(){
			var mask = this.container.find('.sale-ui-win8-container-mask'),
				labelRight = this.container.find('.sale-ui-win8-label-mask-right'),
				self = this;
			win8.label.lastWidth = labelRight.width()
			this.container.hover(function(){
				mask.stop();
				// 背景图片在鼠标OVER事件中的特效
				mask.fadeIn(100);
				// 标签对象在鼠标OVER事件中的特效
				self.labelMaskFadeIn();
				
			},function(){
				mask.stop();
				// 背景图片在鼠标OUT事件中的特效
				mask.fadeOut(100);
				// 标签对象在鼠标OUT事件中的特效
				self.labelMaskFadeOut();
			}); 
		},
		labelMaskFadeIn: function(){
			
			var labelRight = this.container.find('.sale-ui-win8-label-mask-right'),
				labelLeft = this.container.find('.sale-ui-win8-label-mask-left'),
				labelMask = this.container.find('.sale-ui-win8-label-mask'),
				lastWidth = win8.label.lastWidth,// 初始宽度
				self = this;
				labelRight.width(0);
				labelRight.stop(true);
				// labelMask.stop(true);
				labelRight.css('display','block');
				this.labelMaskRestore();
				// 标签延生效果
				labelRight.animate({
					width:lastWidth+'px'
				},'fast',function(){
					 // 初始标签淡出
					labelMask.fadeOut("fast");
					// 背景标签淡入
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
				// 还原标签透明度
				this.labelMaskRestore();
				labelRight.width(win8.label.lastWidth - win8.label.lastWidth * 0.15);
				labelRight.animate({
					width:'0px'
				},200);
				//背景标签淡出
				self.labelBackHide();
		},
		labelMaskRestore:function(){
			var labelMask = this.container.find('.sale-ui-win8-label-mask');
			labelMask.stop();
			labelMask.fadeTo(1,1);
		} ,
		/* 显示背景标签 */
		labelBackShow:function(){
			var labelBack = this.container.find('.sale-ui-win8-label-back');
			labelBack.fadeIn(300);
		},
		/* 隐藏背景标签 */
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