jQ.extend({
	userInfo : {
		requestContext : "/",
		
		init : function(requestContext, userId) {
			
			jQ.userInfo.requestContext = requestContext;
			
			jQ.ajax({
				url : jQ.userInfo.requestContext + "remote/user_info.json",
				type : "POST",
				data : {
					userId : userId
				},
				success : function (data) {
					var favCount = data.favOutlets.length + data.favCommodities.length;
					var ticketCount = data.ticketCount;
					var portrait = data.portrait;
					
					jQ("#user_fav").text(favCount);
					jQ("#user_coupon").text(ticketCount);
					jQ("#user_portrait").attr("src", portrait);
				}
			});
		}
	}
});