jQ.extend({
	profile : {
		requestContext : "/",
		init : function(requestContext) {
			
			jQ.profile.requestContext = requestContext;
			jQ.profile.initBirthday();
			jQ.profile.initArea();
		},
		initBirthday : function() {
			var birthday = jQ("#birthday").val();
			var year = null;
			var month = null;
			var day = null;
		
			if (birthday != null && birthday != "") {
				var tmp = birthday.split("-");
				year = tmp[0];
				month = tmp[1];
				day = tmp[2];
			}
			
			jQ.profile.year(year);
			jQ.profile.month(year, month);
			
			if (year != null && month != null) {
			
				
				if (_.include([ 1, 3, 5, 7, 8, 10, 12 ],parseInt(month,10))) {
					
					jQ.profile.day(31, day);
					
				} else if (_.include([ 4, 6, 9, 11 ], parseInt(month,10))) {
					jQ.profile.day(30, day);
				} else if (parseInt(month,10) == 2) {
					year = parseInt(year);
					if ((year % 4 == 0 && year % 100 != 0)
							|| (year % 400 == 0)) {
						jQ.profile.day(29, day);
					} else {
						jQ.profile.day(28, day);
					}
				}
			} else {
				jQ.profile.day(31, day);
			}
			
		},
		initArea : function() {
			var location = jQ("#location").val().split("_");
		//	console.log("location:"+location);
			if (location.length < 3) {
				jQ.profile.area(null, "00000000", "province", true);
			} else {
				jQ.profile.area(location[0], "00000000", "province", false);
				jQ.profile.area(location[1], location[0], "city", false);
				jQ.profile.area(location[2], location[1], "district", false);
				
				var businessDistricts = jQ("#businessDistricts").val().split("_");
			
				if (businessDistricts.length > 0) {
					jQ.profile.district(businessDistricts, location[2]);
				} else {
					jQ.profile.district(null, location[2]);
				}
				
			}
		},
		setBirthday : function(year, month, day) {
			jQ("#birthday").val(year + "-" + month + "-" + day);
		},
		year : function(year) {
			var select = jQ("#year");
			for ( var i = 1970; i < new Date().getFullYear() + 1; i++) {
				var option = jQ("<option></option>");
				option.text(i);
				option.val(i);

				if (i == parseInt(year)) {
					option.attr("selected", "selected");
				}

				select.append(option);
			}

			select.bind("change", function() {
				var year = parseInt(jQ(this).val());
				jQ.profile.month(year, 1);
			});
		},
		month : function(year, month) {
			var select = jQ("#month");
			select.empty();
			for ( var i = 1; i < 13; i++) {
				var option = jQ("<option></option>");
				option.text(i);
				option.val(i);

				if (i == parseInt(month)) {
					option.attr("selected", "selected");
				}

				select.append(option);

				if (_.include([ 1, 3, 5, 7, 8, 10, 12 ], month)) {
					jQ.profile.day(31);
				} else if (_.include([ 4, 6, 9, 11 ], month)) {
					jQ.profile.day(30);
				} else if (month == 2) {
					year = parseInt(year);
					if ((year % 4 == 0 && year % 100 != 0)
							|| (year % 400 == 0)) {
						jQ.profile.day(29);
					} else {
						jQ.profile.day(28);
					}
				}
			}

			select.bind("change", function() {
				var month = parseInt(jQ(this).val());
				if (_.include([ 1, 3, 5, 7, 8, 10, 12 ], month)) {
					jQ.profile.day(31);
				} else if (_.include([ 4, 6, 9, 11 ], month)) {
					jQ.profile.day(30);
				} else if (month == 2) {
					year = parseInt(year);
					if ((year % 4 == 0 && year % 100 != 0)
							|| (year % 400 == 0)) {
						jQ.profile.day(29);
					} else {
						jQ.profile.day(28);
					}
				}
			});
		},
		day : function(range, day) {
			var select = jQ("#day");
			select.empty();
			for ( var i = 1; i < range + 1; i++) {
				var option = jQ("<option></option>");
				option.text(i);
				option.val(i);

				if (i == parseInt(day)) {
					option.attr("selected", "selected");
				}

				select.append(option);
			}
			var year = jQ("#year").val();
			var month = jQ("#month").val();
			var day = select.val();
       
			jQ.profile.setBirthday(year, month, day);

			select.bind("change", function() {
				var year = jQ("#year").val();
				var month = jQ("#month").val();
				var day = select.val();
				jQ.profile.setBirthday(year, month, day);
			});
		},

		area : function(id, parentId, type, cascade) {
			//location[2], location[1], "district", false
			var objectTypes = {
				province : ["province", "city"],
				city : ["city", "district"],
				district : ["district", null]
			};
		//	console.log('id:'+id+'parentId:'+parentId+'type:'+type+"cascade:"+cascade);
			var select_obj = jQ("#" + objectTypes[type][0]);
			var url = jQ.profile.requestContext + "area.json";
		//	console.log(url);
			jQ.ajax({
				url : url,
				type : "POST",
				data : {
					parentId : parentId
				},
				success : function(data) {
					var nextPid = data.data[0].id;
				//	console.log("nextPid:"+nextPid);
					_.each(data.data, function(item) {
						var option = jQ("<option></option>");
						option.val(item.id);
						option.text(item.name);
						if (id == item.id) {
							option.attr("selected", "selected");
							nextPid = item.id;
						}
						select_obj.append(option);
					});
				//	console.log(type+":"+objectTypes[type][1]);
					if (cascade && objectTypes[type][1] != null) {
					//	alert('aaa');
						jQ.profile.area(null, nextPid, objectTypes[type][1], cascade);
					}
					
					if (objectTypes[type][1] == null) {
						if (cascade) {
							jQ.profile.district(null, nextPid);
						}
						var provinceId = jQ("#province").val();
						var cityId = jQ("#city").val();
						var districtId = jQ("#district").val();
					//	console.log("商圈::"+provinceId + "_" + cityId + "_" + districtId);
					//	jQ("#location").val(provinceId + "_" + cityId + "_" + districtId);
					}
				}
			});

			select_obj.bind("change", function() {
				var nextPid = jQ("#" + objectTypes[type][0]).val();
				if (objectTypes[type][1] != null) {
					jQ.profile.area(null, nextPid, objectTypes[type][1], cascade);
				}
				
				if (objectTypes[type][1] == null) {
					jQ.profile.district(null, nextPid);
					var provinceId = jQ("#province").val();
					var cityId = jQ("#city").val();
					var districtId = jQ("#district").val();
				//	console.log("change::"+provinceId + "_" + cityId + "_" + districtId);
					jQ("#location").val(provinceId + "_" + cityId + "_" + districtId);
				}
			});
		},
		district : function(ids, parentId) {
			var url = jQ.profile.requestContext + "area.json";
		//	alert(url);
			jQ.ajax({
				url : url,
				type : "POST",
				data : {
					parentId : parentId
				},
				success : function(data) {
					var mod = 3;
					var i = 0;
					var row = null;
					
					jQ("#districts").empty();
					
					_.each(data.data, function(item) {
						if (i % mod == 0) {
							row = jQ("<tr></tr>");
							jQ("#districts").append(row);
						}
						
						var cell = jQ("<td></td>");
						var checkbox = jQ("<input type=\"checkbox\" name=\"businessDistrict\" />").addClass("inp_checkbox");
						checkbox.val(item.id);
						if (ids != null) {
							if (_.indexOf(ids, item.id.toString()) > -1) {
								checkbox.attr("checked", "checked");
							}
						}

						cell.append(checkbox);
						cell.append(item.name);

						if (i % mod < 2) {
							cell.attr("width", "33%");
						}
						row.append(cell);
						
						i++;
					});
					
					var cells = jQ(row).find("td");
					for (var i = cells.length; i < 3; i ++) {
						var cell = jQ("<td></td>");
						if (i % mod < 2) {
							cell.attr("width", "33%");
						}
						row.append(cell);
					} 
					
					jQ("input[name='businessDistrict']").click(function() {
						var businessDistrictsValue = "";
						_.each(jQ("input[name='businessDistrict']:checked"), function(item) {
							businessDistrictsValue += jQ(item).val() + "_";
						});
						businessDistrictsValue = businessDistrictsValue.replace(/_$/, "");
						jQ("#businessDistricts").val(businessDistrictsValue);
					});
				}
			});
		}
	}
});