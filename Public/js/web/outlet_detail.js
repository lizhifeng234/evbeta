jQ.extend({
	
	outlet : {
		
		requestContext : "/",
		outletId : "",
		
		init : function(requestContext, outletId) {
			jQ.outlet.requestContext = requestContext;
			jQ.outlet.outletId = outletId;
		},
		
		outlets : {
			
			floorData : null,
			categoryData : null,
			
			init : function(floors, categories) {
				jQ(".tab_floor").click(function() {
					jQ(this).addClass("on");
					jQ(".tab_category").removeClass("on");
					jQ.outlet.outlets.floorBar();
				});
				
				jQ(".tab_category").click(function() {
					jQ(this).addClass("on");
					jQ(".tab_floor").removeClass("on");
					jQ.outlet.outlets.cagegoryBar();
				});
				
				jQ.outlet.outlets.floorBar();
			},
			
			floorBar : function() {
				var outletsBlock = jQ("#outlets_block");
				outletsBlock.empty();
				
				var floorBarTmp = _.template(jQ("#floor_bar").html());
				var floorBlock = jQ(floorBarTmp());
				floorBlock.find(".floor_btn").click(function() {
					var floor = jQ(this).text();
					_.each(floorBlock.find(".floor_btn"), function(item) {
						var floorLink = jQ(item);
						floorLink.parent().removeClass("on");
						if (floorLink.text() == floor) {
							floorLink.parent().addClass("on");
						}
					});
					jQ.outlet.outlets.floorOutlets(floor);
				});
				
				outletsBlock.append(floorBlock);
				
				var floorlis = floorBlock.find(".floor_btn");
				if (jQ.outlet.outlets.floorData == null) {
					jQ.outlet.outlets.floorData = {};
					_.each(floorlis, function(item) {
						jQ.outlet.outlets.floorData[jQ(item).text()] = null;
					});
				}
				
				var floorli = floorlis.eq(0);
				floorli.parent().addClass("on");
				var floor = floorli.text();
				jQ.outlet.outlets.floorOutlets(floor);
			},
			
			cagegoryBar : function() {
				var outletsBlock = jQ("#outlets_block");
				outletsBlock.empty();
				
				var categoryBarTmp = _.template(jQ("#category_bar").html());
				var categoryBlock = jQ(categoryBarTmp());
				
				categoryBlock.find(".inp_btn.tb").click(function() {
					var category = jQ(this).attr("id");
					_.each(categoryBlock.find(".inp_btn.tb"), function(item) {
						var categoryItem = jQ(item);
						categoryItem.removeClass("tb" + categoryItem.attr("id") + "_on");
						if (categoryItem.attr("id") == category) {
							categoryItem.addClass("tb" + category + "_on");
						}
					});
					jQ.outlet.outlets.categoryOutlets(category);
				});
				outletsBlock.append(categoryBlock);
				
				var categoryIns = categoryBlock.find(".inp_btn.tb");
				if (jQ.outlet.outlets.categoryData == null) {
					jQ.outlet.outlets.categoryData = {};
					_.each(categoryIns, function(item) {
						jQ.outlet.outlets.categoryData[jQ(item).attr("id")] = null;
					});
				}
				
				var categoryIn = categoryIns.eq(0);
				category = categoryIn.attr("id");
				categoryIn.addClass("tb" + category + "_on");
				jQ.outlet.outlets.categoryOutlets(category);
			},
			
			floorOutlets : function (floor) {
				var floorDataBlock = jQ("#floor_data");
				floorDataBlock.empty();
				floorDataBlock.append(_.template(jQ("#wait_img").html())());
				if (jQ.outlet.outlets.floorData[floor] == null) {
					jQ.ajax({
						url : jQ.outlet.requestContext + "remote/outlet/floor/list.json",
						type : "POST",
						data : {
							outletId : jQ.outlet.outletId,
							floor : floor
						},
						success : function (data) {
							floorDataBlock.empty();
							var outletsData = "";
							var dataTmp = _.template(jQ("#outlets_data").html());
							_.each(data.data, function(item) {
								outletsData += dataTmp({name : item.name, logo : item.logo, url : item.url});
							});
							jQ.outlet.outlets.floorData[floor] = outletsData;
							floorDataBlock.append(outletsData);
						}
					});
				} else {
					floorDataBlock.empty();
					floorDataBlock.append(jQ.outlet.outlets.floorData[floor]);
				}
			},
			
			categoryOutlets : function (category) {
				var categoryDataBlock = jQ("#category_data");
				categoryDataBlock.empty();
				categoryDataBlock.append(_.template(jQ("#wait_img").html())());
				if (jQ.outlet.outlets.categoryData[category] == null) {
					jQ.ajax({
						url : jQ.outlet.requestContext + "remote/outlet/category/list.json",
						type : "POST",
						data : {
							businessScopeId : category,
							outletId : jQ.outlet.outletId
						},
						success : function (data) {
							categoryDataBlock.empty();
							var outletsData = "";
							var dataTmp = _.template(jQ("#outlets_data").html());
							_.each(data.data, function(item) {
								outletsData += dataTmp({name : item.name, logo : item.logo, url : item.url});
							});
							jQ.outlet.outlets.categoryData[category] = outletsData;
							categoryDataBlock.append(outletsData);
						}
					});
				} else {
					categoryDataBlock.empty();
					categoryDataBlock.append(jQ.outlet.outlets.categoryData[category]);
				}
			}
		},
		
		news : {
			
			init : function(reqType, topType, callback) {
				
				var placeholder = jQ("#" + reqType + "_block");
				
				jQ("." + reqType + "").click(function() {
					jQ("." + reqType + "").removeClass("on");
					jQ(this).addClass("on");
					
					var outletId = jQ.outlet.outletId;
					var pType = null;
					var cType = null;
					
					var outletType = jQ(this).attr("id");
					outletType = outletType.substring(outletType.indexOf("_") + 1);
					
					if (outletType != topType) {
						pType = topType;
						cType = outletType;
					}
					
					var link = jQ("#more_" + reqType);
					var url = link.attr("href").split("?")[0];
					url += "?type=" + reqType;
					
					if (pType != null && cType != null) {
						url += "&p_type=" + pType + "&c_type=" + cType;
					}
					link.attr("href", url);
					jQ.outlet.news.getData(placeholder, outletId, reqType, pType, cType, callback);

				});
				
				jQ.outlet.news.getData(placeholder, jQ.outlet.outletId, reqType, null, null, callback);
			},
		
			getData : function(placeholder, outletId, type, pType, cType, callback) {
				
				var data = null;
				
				if (pType != null && cType != null) {
					data = {
						outletId : outletId,
						type : type,
						pType : pType,
						cType : cType,
						page : 1,
						pageSize : 10
					};
				} else {
					data = {
						outletId : outletId,
						type : type,
						page : 1,
						pageSize : 10
					};
				}
				
				jQ.ajax({
					url : jQ.outlet.requestContext + "remote/news/list.json",
					type : "POST",
					data : data,
					success : function (data) {
						var newsData = "";
						var dataTmp = _.template(jQ("#news_data").html());
						if(data != null && callback) callback(data.data.length);
						_.each(data.data, function(item) {
							var publishDate = jQ.formatDate(new Date(item.pushlishDate), "yyyy-MM-dd hh:mm:ss");
							newsData += dataTmp({title : item.title, pushlishDate : publishDate, url : item.url});
						});
						
						placeholder.empty();
						placeholder.append(newsData);
					}
				});
			}
			
		},
		
		images : {
			
			init : function() {
				jQ('#cover_slidshow').cycle({
					fx : "fade",
					timeout : 4000,
					prev : "#prev",
					next : "#next",
					pager : "#indicator",
					pagerAnchorBuilder: jQ.outlet.images.pagerFactory
				});
			},
			
			pagerFactory : function (idx, slide) {
		        return "<input class=\"off\" type=\"button\" value=\"\" />";
		    }
		}
	}
});