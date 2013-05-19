jQ.extend({
	area : {
		requestContext : "/",
		init : function(requestContext, districtId, businessDistrictId) {
			jQ.area.requestContext = requestContext;
			_.each(jQ('.district'), function(item) {
				var area = jQ(item);
				if (districtId == area.attr("id")) {
					area.addClass("on");
				}
			});
			
			_.each(jQ('.b_district'), function(item) {
				var area = jQ(item);
				if (businessDistrictId == area.attr("id")) {
					area.addClass("on");
				}
			});
		}
	},
});