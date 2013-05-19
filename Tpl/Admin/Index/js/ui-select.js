(function(jQ){

	jQ.fn.defaultSelect = function(){
		return this.each(function(){
			var select = jQ(this).hide(),
				selected = select.find("option:selected"),
				value = selected.val(),
				text = selected.text(),
				ul,
				// ��ʾ��select֮��
				wrapper = jQ('<div>').addClass("ui-default-select").insertAfter(select);
				
				// ��ʾselect��Ĭ��ֵ
				texter = jQ('<span class="ui-default-select-text"></span>').text(text).appendTo(wrapper);
				jQ('<span class="ui-default-select-icon"></span>').appendTo(wrapper);
				jQ('<div class="clear"></div>').appendTo(wrapper);
				
			 function showList(){
				ul = jQ("<ul>").addClass('ui-default-select-menu');
				// ��ȡ�����б���Ӷ���
				select.children( "option" ).map(function(){
					var li = jQ('<li>').addClass('ui-default-select-item')
						.text(jQ( this ).text())
						.data('cach',{text:jQ( this ).text(),value:this.value})
						.appendTo(ul)
						// hover�¼�
						.hover(function(){
							jQ(this).toggleClass('ui-default-select-item-hove');
						})
						// ����¼�
						.click(function(){
							// ul.hide();
							texter.text(jQ(this).text());
						});
						
				})
				jQ('body').append(ul);
				// ������ʾ����
				// wrapper.width(ul.outerWidth()+wrapper.find('.ui-default-select-icon').outerWidth());
			}
			function setPositions(){
				var w = wrapper.outerWidth(),
					h = wrapper.outerHeight(),
					t = wrapper.offset().top + h,
					l = wrapper.offset().left-wrapper.scrollLeft();
				
				ul.width(wrapper.innerWidth());
				ul.css({ top: t, left: l });

			}
			showList();

			
			// ��ʾ�����ز˵�
			wrapper.click(function(event){
				
				if(!ul.hasClass('ui-default-select-menu-open')){
					setPositions();
					ul.addClass('ui-default-select-menu-open');
					
				}else{
					ul.removeClass('ui-default-select-menu-open');
				}
				
				event.stopPropagation(); 
			})
			ul.delegate('li','click',function(){
				select.val(jQ(this).data('cach').value);
			})
			// ���ز˵�
			jQ('body').on('click', function(){
				ul.removeClass('ui-default-select-menu-open');
			}) 
		})
	}

})(jQuery)
