(function(jQ){
	jQ.fn.uploader = function(opertions){
		return this.each(function(i){
			var that = jQ(this),
			params = eval('('+that.attr('params')+')'),
			waitImage = that.find('.waitImage').eq(0),
			loadImage = that.find('.loadImage').eq(0),
			closeImage = that.find('.closeImg').eq(0),
			progress_id = 'fsUploadProgress'+i,
			placeholder_id = 'spanButtonPlaceholder'+i,
			btnCancel_id = 'btnCancel'+i,
			lastUrl = loadImage.find('img').eq(0).attr('lastUrl'),
			lastUrl = lastUrl ? lastUrl : loadImage.find('img').eq(0).attr('src');
			
			
			// alert(that.find(".fsUploadProgress").attr('id','fsUploadProgress'+i))
			
			that.find(".fsUploadProgress").attr('id',progress_id);
			that.find(".spanButtonPlaceholder").attr('id',placeholder_id);
			that.find(".btnCancel").attr('id',btnCancel_id);
			that.SWFUpload = new SWFUpload({
				// 处理文件上传的url  
				upload_url: opertions.uploadUrl,
				post_params: params ? params : opertions.params,
				use_query_string: true,
				// file_post_name: opertions.fileName,
				// 上传文件限制设置  
				file_size_limit : "10240",  // 10MB  
				file_types : "*.jpg;*.gif;*.jpeg;*.png",   //此处也可以修改成你想限制的类型，比如：*.doc;*.wpd;*.pdf  
				file_types_description : "Image Files",  
				file_upload_limit : "0",  
				file_queue_limit : "1",  
				// 事件处理设置（所有的自定义处理方法都在handler.js文件里）  
				// file_dialog_start_handler : fileDialogStart,  
				// file_queued_handler : fileQueued,  
				// file_queue_error_handler : fileQueueError,  
				file_dialog_complete_handler : fileDialogComplete,  
				upload_start_handler : function(file){
					try {
							waitImage.show();
						}
						catch (ex) {
							alert(ex);
						}
				},  
				// upload_progress_handler : uploadProgress,  
				// upload_error_handler : uploadError,  
				upload_success_handler : function(file, serverData) {
					try {
						
						var r = new RegExp("\r","g"); 
						var n = new RegExp("\n","g"); 
						var data = serverData.replace(r,""); 
						data = data.replace(n,""); 
						data = eval('('+data+')');
						waitImage.hide();
						loadImage.find('img').eq(0).attr('src',data.imgUrl);
						closeImage.show();
						//除非回调操作
						if(opertions.success){
							opertions.success(data);
						}
					} catch (ex) {
						alert(ex);
					}
				},  
				upload_complete_handler : uploadComplete,  
				// 按钮设置  
				button_image_url : opertions.buttonImageUrl,    // 按钮图标  
				button_placeholder_id : placeholder_id,  
				button_width: 110,  
				button_height: 29,  
				// swf设置  
				flash_url : opertions.flashUrl,  
				custom_settings : {  
					progressTarget : progress_id,  
					cancelButtonId : btnCancel_id  
				},  
				// Debug 设置  
				debug: false  
			}); 
			closeImage.bind('click',function(){
				var closeBtn = jQ(this);
				if(!opertions.deleteUrl){
					
					loadImage.find('img').eq(0).attr('src',lastUrl);
					closeBtn.hide();
				}else{
					jQ.post(opertions.deleteUrl,function(data){
						loadImage.find('img').eq(0).attr('src',lastUrl);
						closeBtn.hide();
						opertions.deleted(data);
					})
				}
				
			})
		})
	}
})(jQuery)