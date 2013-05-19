var xmlhttp;
function creaeXMLHttpRequest()
{
 try
    {
    xmlhttp=new XMLHttpRequest();
    }
 catch (e)
    {
   try
      {
      xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
      }
   catch (e)
      {
      try
         {
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
      catch (e)
         {
         alert("您的浏览器不支持AJAX！");
         return false;
         }
      }
    }
}



//注册验证

var checkURS = {};

checkURS.inputs = [];

checkURS.pdt_reg = '';
checkURS.url_reg = '';
checkURS.loginurl_reg = '';

//需要验证的项目
if($_id("email_name")){
    checkURS.inputs = ["username","password","re_password","email_name","usercheckcode"];
}else if($_id("email_name_r")){
	if(window.isNotShowRandomImg){
		checkURS.inputs = ["username","email_name_r","password","re_password","pass_answer"];
	}else{
		checkURS.inputs = ["username","email_name_r","password","re_password","pass_answer","usercheckcode"];
	}
}
//else if($_id("mobile")){checkURS.inputs = ["mobile","mobcheckcode","password","re_password"];}

checkURS.submits = false;

checkURS.pp = 0;
if($_id("p1")){
	try{
		checkURS.pp = parseInt($_id("p1").value);
	}catch(e){
		checkURS.pp = 0;
	}
}
checkURS.uu = 0;
if($_id("u1")){
	try{
		checkURS.uu = parseInt($_id("u1").value);
	}catch(e){
		checkURS.uu = 0;
	}
}

checkURS.init = function(){
	checkURS.checkEle();
	
	$_id("submit").onclick = function(){
		checkURS.submits = true;
	}

};

//获取字符串长度
function getStrLength(str){
	var chineseRegex = /[^\x00-\xff]/g; 
	var strLength = str.replace(chineseRegex,"**").length; 
	return strLength;
}
//验证后样式
checkURS.checkErr = function(isChecked,id,text,c){	
	
	var input = $_id(id);
	var err = $_id(id + "_err");
	var right = $_id(id + "_right");
	var errText = err.getElementsByTagName("em")[0];
	var cla = "input";
	if(c){cla = c}
	
	//错误
	if(!isChecked){
		input.className = cla + "_err";
		if(c) input.className = c;
		var t_err=setTimeout(function(){
							        err.style.display='';
									right.style.display = "none";
									errText.innerHTML = text;		
									if(id=="email_name_r" || id=="email_name"){$_id('regLink').style.visibility='hidden';}
							 },300);
		
		//获取用户所有的出错记录，日志增强 
		if(window.isStartLoad == false){
			var inputName = document.getElementById(id).getAttribute('name');
			var dataPost = inputName+"="+encodeURIComponent(text);
			
			var email_name = document.getElementById('email_name');
			var email_name_r = document.getElementById('email_name_r');
			
			if(email_name){
				dataPost = dataPost + "&" + "emailname=" + encodeURIComponent(email_name.value) + document.getElementById('ed').innerHTML;
			}else if(email_name_r){
				if(email_name_r.value != "如 name@example.com"){
					dataPost = dataPost + "&" + "emailname_r=" + encodeURIComponent(email_name_r.value);
				}else{
					dataPost = dataPost + "&" + "emailname_r=";
				}
			}
			$.post("logEnhance.jsp",dataPost,function(data){});
		}
		
		if(id == "re_password" && $_id("p1")){
			checkURS.pp = checkURS.pp + 1;
			$_id("p1").value = "" + checkURS.pp;
		}
		if(id == "usercheckcode" && $_id("u1")){
			checkURS.uu = checkURS.uu + 1;
			$_id("u1").value = "" + checkURS.uu;
		}
		
	}
	//正确
	else{
		input.className = cla;
		err.style.display = "none";	
		if(input.value != ""){right.style.display = "";}
		else{right.style.display = "none";}
		errText.innerHTML = "";
	}
};

checkURS.logPressLoginBtn=function(url){	
	var dataPost = "loginUrl="+url;
	var email_name = document.getElementById('email_name');
	var email_name_r = document.getElementById('email_name_r');
	if(email_name){
		dataPost = dataPost + "&emailname=";
	}else if(email_name_r){
		dataPost = dataPost + "&emailname_r=";
	}
	$.post("logEnhance.jsp",dataPost,function(data){});
};

checkURS.indexof = function(arr,str){
	var a = [];
	var index;
	for(var i = 0; i < arr.length; i ++ ){
		if(arr[i] == str){index = i}
		else{
			a.push(i);
		}
	}
	return [index,a];	
};

checkURS.checkType = 1;//域内
checkURS.emailNameClass = "";//域内

//用户名AJAX验证数据
checkURS.ajaxData = "";

function callback(){
	if (xmlhttp.readyState==4)
	{
		if (xmlhttp.status == 200)
		{
	if(xmlhttp.responseText == 1){
		$_id("username").isChecked = false;
		$_id("username_right").style.display = "none";
        checkURS.checkErr(false,"username","该帐号已存在。");        
        var thisEm=document.getElementById("username").getElementsByTagName("em")[0];
        var a_err=setTimeout(function(){
        	var objA = document.createElement("a");//创建a标签
            objA.href = $_id("loginurl").value;
            objA.target="_blank";
            objA.style.margin="0 10px 0 0";
            objA.innerHTML="登录 ";
            thisEm.appendChild(objA);
        	},315);        
		return;
	}else if(xmlhttp.responseText ==0){
		$_id("username").isChecked = true;
		$_id("username").className = "input";
		$_id("username_err").style.display = "none";
        $_id("username_right").style.display = "";
		$_id("regLink").style.display ="";
		checkURS.checkErr(true,"username","");
		return;
	}else{
		return;
	}}	}
};

function callback_email(){
	if (xmlhttp.readyState==4)
	{
		if (xmlhttp.status == 200)
		{
	if(xmlhttp.responseText == 1){
		$_id("email_name_r").isChecked = false;
		$_id("email_name_r_right").style.display = "none";
        checkURS.checkErr(false,"email_name_r","该邮箱已存在。");        
        var thisEm=document.getElementById("email_name_r").getElementsByTagName("em")[0];       
		return;
	}else if(xmlhttp.responseText == 0){
		$_id("email_name_r").isChecked = true;
		$_id("email_name_r").className = "input";
		$_id("email_name_r_err").style.display = "none";
        $_id("email_name_r_right").style.display = "";
		$_id("regLink").style.display ="";
		checkURS.checkErr(true,"email_name_r","");
		return;
	}else{
		return;
	}}	}
};

function callback_code(){
	if (xmlhttp.readyState==4)
	{
		if (xmlhttp.status == 200)
		{
	if(xmlhttp.responseText == 0){
		$_id("usercheckcode").isChecked = false;
		$_id("usercheckcode_right").style.display = "none";
        checkURS.checkErr(false,"usercheckcode","验证码错误。","input_verify");              
		return;
	}else if(xmlhttp.responseText ==1){
		$_id("usercheckcode").isChecked = true;
		$_id("usercheckcode_err").style.display = "none";
        $_id("usercheckcode_right").style.display = "";
		$_id("regLink").style.display ="";
		return;
	}else{
		return;
	}}	}
};

checkURS.recommendEmailBlur = function(ajax_result){
	var domain_sel = $_id('email_domain').value;//用户选择的域名
	var es = ["@163.com","@126.com","@yeah.net"];
	if($_id("email_name_err")){
		$_id("email_name_err").style.display = "none";
		$_id("regLink").style.display ="";
	}
	
	var table = $_id("recommend_table");
	var table_box = $_id("recommend_table_box");
	var array = ajax_result.split("\n");
	if(array == null || array.length != 6 || array[0] != 200){return;}
	
	var ssn_input = $_id('email_name').value;//用户输入的用户名
	
	//服务器内容解析开始
	var result_163 = array[2];
	var result_126 = array[3];
	var result_yeah = array[4];
	
	
	var r1 = result_163.substring(0,1);
	var r2 = result_126.substring(0,1);
	var r3 = result_yeah.substring(0,1);
	
	var results = [result_163,result_126,result_yeah];
	var es = ["@163.com","@126.com","@yeah.net"];
	var rs = [r1,r2,r3];
	
	var redomain = checkURS.indexof(es,domain_sel)
	var index = redomain[0];
	var f = redomain[1];
	
	
	
	if(f.length > 2){
		table_box.style.display = "none";
		$_id("email_name_info_3").style.display="none";
		return;
	}
		
	for(var i = 1; i < table.rows.length; i ++ ){
			table.rows[i].parentNode.removeChild(table.rows[i]);
			i --;
	}
	
	var str = [];
	var kk;
	//163
	if(domain_sel == es[index]){
		str = [];
		
		//可以注册
		if(rs[index] == "0"){			
			table_box.style.display = "none";
			$_id("email_name_info_3").style.display="none";
			$_id("email_name").isChecked = true;
			checkURS.checkErr(true,"email_name","","input_new");
			return;
		}
		//已被注册
		else{
			$_id("email_name_right").style.display = "none";
			
			$_id("email_name").isChecked = false;			
			table_box.style.display = "";
			$_id("email_name_info_3").style.display="";
			//其他可注册
			if(rs[f[0]] == "0" || rs[f[1]] == "0"){
				str.push([1,ssn_input + es[index]]);
				if(rs[f[0]] == "0"){str.push([0,ssn_input + es[f[0]]]);}
				else{str.push([1,ssn_input + es[f[0]]]);}
				if(rs[f[1]] == "0"){str.push([0,ssn_input + es[f[1]]]);}
				else{str.push([1,ssn_input + es[f[1]]]);}
			}
			//都不可注册
			else{			
				var data = results[index].split("|")[1].split(",");		
				kk = 1;
				for(var i = 0; i < data.length; i ++ ){
					if(data[i] != "" && data[i]!= "\r"){						
						str.push([0,data[i] + es[index]]);						
					}					
				};
				
				
			}
			//发送日志
			var email_name = document.getElementById('email_name');
			var email_domain = document.getElementById('email_domain');
			var dataPosted = "emailname=" + encodeURIComponent(email_name.value + email_domain.value) + "&username=" + encodeURIComponent("该通行证帐号已存在，请直接登录。");
			$.post("logEnhance.jsp",dataPosted,function(data){});
		}
	}
	


	//有推荐
	if(str.length > 0){		
		if(kk == 1){rstr = str}
		else{
			var rstr = ["","",""];		
			for(var i = 0; i < str.length; i ++ ){	
				var domain = str[i][1].split("@")[1];
				if(domain == "163.com"){rstr[0] = (str[i])}
				if(domain == "126.com"){rstr[1] = (str[i])}
				if(domain == "yeah.net"){rstr[2] = (str[i])}
			}
		}
		for(var i = 0; i < rstr.length; i ++ ){	
			if(rstr != ""){
				var row = table.insertRow(-1);
				var c0 = row.insertCell(0);
				c0.style.fontWeight = "bold";
				var c1 = row.insertCell(1);
				c1.style.textAlign = "right";
				row.emailName = rstr[i][1].split("@")[0];
				row.emailDomain = rstr[i][1].split("@")[1];
				if(rstr[i][0] == 0){					
					c0.innerHTML = "<input type='radio' name='email_name'/> "+ row.emailName +"<span class='domain_name'>@" + row.emailDomain + "</span>";
					c1.innerHTML = "(可以注册)";
					row.reg = true;
					row.style.cursor = "pointer";
				}
				else{
					c0.style.color = "#999";
					c1.style.color = "#999";
					c0.innerHTML = "<input type='radio' disabled='disabled'/> " + row.emailName +"<span style='color:#B2D7F1'>@" + row.emailDomain + "</span>";
					c1.innerHTML = "(不可以注册)";
					row.reg = false;
				}
			}
		};		
		
		var row = table.insertRow(-1);
		var c0 = row.insertCell(0);				
		var c1 = row.insertCell(1);
		c0.innerHTML = "<a href='http://haoma.163.com/index.do?from=urs' target='_blank'>抢注！数字靓号、人名帐号>></a>";
		
		for(var i = 1; i < table.rows.length -1; i ++ ){
			if(table.rows[i].reg){
				table.rows[i].onclick = function(){
					var radio = this.getElementsByTagName("input")[0];
					radio.checked = "checked";
					$_id('email_name').value = this.emailName;					
					$_id('ed').innerHTML = "@" + this.emailDomain;
					$_id('email_domain').value = "@" + this.emailDomain;
					
					$_id("email_name").isChecked = true;
					checkURS.checkErr(true,"email_name","","input_new");
					$_id("recommend_table_box").style.display = 'none';
					$_id("email_name_info_3").style.display="none";
				};
			}
		}	
		
		
	}
	else{
		table_box.style.display = "none";		
		$_id("email_name_info_3").style.display="none";
		checkURS.checkErr(false,"email_name","该通行证帐号已存在，请直接登录。","input_new");
	}
	
	
};

//用户名推荐
checkURS.recommendEmail = function(ajax_result){	
	var domain_sel = $_id('email_domain').value;//用户选择的域名
	var es = ["@163.com","@126.com","@yeah.net"];
	
	
	var table = $_id("recommend_table");
	var table_box = $_id("recommend_table_box");
	if(es.indexof(domain_sel) == -1){
		checkURS.checkType = 2;
		$_id("email_name_info_1").style.display="none";
		$_id("email_name_info_2").style.display="";
		$_id("mail_box").style.display = "none";
		$_id("mail_frame_box").style.display = "";
		$_id("mail_frame_box_button").style.display = "";
		table_box.style.display = "none";
		$_id("email_name_info_3").style.display="none";
		
		$_id("email_name_err_box").style.display = "none";	
		$_id("regLink").style.display ="";
		$_id("email_name").className = "input_new";
		var url;
		if(domain_sel == "@vip.126.com"){url = "http://vip.126.com/project/ursreg/ursreg_vip126.htm"}
		if(domain_sel == "@vip.163.com"){url = "http://vip.163.com/xm/ursreg/ursreg_vip163.htm"}
		if(domain_sel == "@188.com"){url = "http://vip.188.com/xm/ursreg/ursreg_vip188.htm"}		
		$_id("mail_frame").src = url;
		return;
	}
	else{
		checkURS.checkType = 1;
		$_id("email_name_err_box").style.display = "";	
		$_id("email_name_info_1").style.display="";
		$_id("email_name_info_2").style.display="none";	
		$_id("mail_box").style.display = "";
		$_id("mail_frame_box").style.display = "none";
		$_id("mail_frame_box_button").style.display = "none";
		$_id("email_name").onblur();
	}
};

//表单提交时校验
checkURS.checkSubmit = function(){	
		
		var isSubmit = true;
		if(checkURS.checkType == 1){
			if(!$_id("agree").checked){alert('必须接受服务条款才能注册。');return false;}
			var input = checkURS.inputs;
			for(var i = 0; i < input.length; i ++ ){
			if(input[i] != null && $_id(input[i])){
				$_id(input[i]).onblur();
				var c = $_id(input[i]).isChecked;		
				if(!c){isSubmit = c;}
			}
			};
			
		}
		//外域
		if(checkURS.checkType == 2){
			var ename = $_id("email_name").value;
			if(ename == ""){
				alert("请输入邮件地址！");
				return false;
			}else{
				if($_id("email_domain").value == "@vip.163.com"){
					window.open("http://reg.vip.163.com/register.m?b67bqe1&username=" + $_id("email_name").value + "&pageReg=1");
				}else if($_id("email_domain").value == "@vip.126.com"){
                    window.open("http://reg.vip.126.com/register.m?b67bqe1&username=" + $_id("email_name").value + "&pageReg=1");
				}else if($_id("email_domain").value == "@188.com"){
                    window.open("http://reg.mail.188.com/servlet/regist?b67bqe1&pageReg=true&user=" + $_id("email_name").value);
				}
				return false;
			}
		}
		return (isSubmit);
};

//表单元素校验
checkURS.checkEle = function(){	
    
    if($_id("email_name")){
    	$_id("email_name").onfocus = function(){$_id(this.id + "_info").style.color = "#000";$_id('mobile_err').style.display='none';$_id('regLink').style.visibility=''};
    }
    if($_id("mobile")){
    	$_id("mobile").onfocus = function(){$_id('mobile_err').style.display='none';};
    }
    if($_id("mobcheckcode")){
    	$_id("mobcheckcode").onfocus = function(){$_id(this.id + "_info").style.color = "#000";};
    }
    if($_id("email_name_r") && $_id("email_name_r_info")){
    	$_id("email_name_r").onfocus = function(){$_id(this.id + "_info").style.color = "#000";$_id('email_name_r_err').style.display='none';$_id('regLink').style.visibility=''};
    }
    if($_id("username")){
    	$_id("username").onfocus = function(){$_id(this.id + "_info").style.color = "#000";};
    }
	
	//
	$_id("password").onfocus = function(){$_id(this.id + "_info").style.color = "#000";};
	$_id("re_password").onfocus = function(){$_id(this.id + "_info").style.color = "#000";};

	if($_id("self_qa")){
		$_id("self_qa").onfocus = function(){$_id(this.id + "_info").style.color = "#000";};
	}
	if($_id("usercheckcode")){
		$_id("usercheckcode").onfocus = function(){$_id(this.id + "_info").style.color = "#000";};
	}
	
	//内域新邮件地址
	if($_id("email_name")){
	$_id("email_name").onclick = function(){checkURS.hiddeblank(this)};
	$_id("email_name").onblur = function(){
		$_id('email_name').value=$_id('email_name').value.replace(/(^\s*)|(\s*$)/g,"");
		$_id(this.id + "_info").style.color = "#8A8A8A";
		
		if(checkURS.checkType == 2){return;}
		
		var table = $_id("recommend_table");		
		var table_box = $_id("recommend_table_box");
		table_box.style.display = "none";
		$_id("email_name_info_3").style.display="none";
		
		
		this.isChecked = false;
		var text = "";
		var len = this.value.length;
		if(len == 0){
			if(checkURS.submits){	
				this.isChecked = false;	
				text = "请输入或选择你的新邮件地址。";
				checkURS.checkErr(this.isChecked,this.id,text,"input_new");
			}
			else{checkURS.hiddeblank(this)}
		}
		else if(!/^[a-zA-Z]([a-zA-Z]|\d|_){4,16}([a-zA-Z]|\d)$/.test(this.value)){
			this.isChecked = false;	
			//text = "6～16个字符，包括字母、数字、下划线，字母开头，字母或数字结尾，不区分大小写。";
			if(this.value.length < 6){
                text = "新邮件地址太短。只允许6到18个字符。";
			}else if(this.value.length > 16){
                text = "新邮件地址太长。只允许6到18个字符。";
			}else if(!/^[a-zA-Z]+.*$/.test(this.value)){
                text = "新邮件地址必须以字母开头。";
			}else if(!/^.*([a-zA-Z]|\d)$/.test(this.value)){
                text = "新邮件地址必须以字母或数字结尾。";
			}else{
				text = "新邮件地址只允许字母、数字和下划线。";
			}
			checkURS.checkErr(this.isChecked,this.id,text,"input_new");
			if(/^1[3|4|5|8]\d{9}$/.test(this.value)){
				$_id("email_name_info_3").style.display="";
				$_id("email_name_err_box").style.display = "none";
			}else{
				$_id("email_name_info_3").style.display="none";
				$_id("email_name_err_box").style.display = "";
			}
		}
		//校验用户名
		else{
		   var ssn_input = $_id('email_name').value;//用户输入的邮箱
		   $.ajax({
		   type:"GET",
		   async: false,
		    url:'/services/checkSsnAll',
		  // url:'data.html',
		  data:'isret=1&username=' + ssn_input,
		   success:checkURS.recommendEmailBlur
		   });
		}
	};
	}

    //外域邮件地址
	
	if($_id("email_name_r")){
	$_id("email_name_r").onclick = function(){
		
		if(this.value=='如 name@example.com'){this.style.color='#000';this.value='';}
		
		checkURS.hiddeblank(this)};
	$_id("email_name_r").onblur = function(){
		$_id('email_name_r').value=$_id('email_name_r').value.replace(/(^\s*)|(\s*$)/g,"");
		var ul = $_id("useremail_box").getElementsByTagName("ul")[0];
		if(ul.style.display != "none" && !checkURSName){return;} checkURSName = false;
		if($_id("email_name_r_info")){
			$_id(this.id + "_info").style.color = "#8A8A8A";
		}
		this.isChecked = true;
		var text = "";
		var len = this.value.length;
		if(len == 0){
			
				this.isChecked = false;	
				text = "请输入常用邮件地址。";	
				checkURS.checkErr(this.isChecked,this.id,text);
		}
		else if(len > 60){
			this.isChecked = false;	
			text = "邮件地址太长。";
			checkURS.checkErr(this.isChecked,this.id,text);
		}
		else if(!/^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,6}$/.test(this.value)){
            this.isChecked = false;	
			if(/^[a-zA-Z]([a-zA-Z]|\d|_){4,16}([a-zA-Z]|\d)$/.test(this.value)){
				var reg_url_temp = "http://reg.163.com/reg/reg2.jsp?from=tip&product=" + checkURS.pdt_reg + "&url=" + checkURS.url_reg + "&loginurl=" + checkURS.loginurl_reg + "&username=" + this.value;
				text = "邮件地址格式错误。是否要<a href='" + reg_url_temp + "'>注册网易邮箱</a>？";
			}else{
				text = "请输入正确的邮件地址。";
			}
			checkURS.checkErr(this.isChecked,this.id,text);
		}
		// 对于不能在通行证注册的内域帐号，提示用户
		else if(this.value.indexOf("@188.com") != -1
		 || this.value.indexOf("@vip.188.com") != -1 || this.value.indexOf("@vip.163.com") != -1
		 || this.value.indexOf("@popo.163.com") != -1 || this.value.indexOf("@netease.com") != -1
		 || this.value.indexOf("@vip.126.com") != -1){
		   this.isChecked = false;	
		   text = "请到你输入的邮箱或产品页面注册。";
		   checkURS.checkErr(this.isChecked,this.id,text);
		}
		else if((this.value.indexOf("@163.com") != -1 || this.value.indexOf("@126.com") != -1 || this.value.indexOf("@yeah.net") != -1) && !/^[a-zA-Z]([a-zA-Z]|\d|_){4,16}([a-zA-Z]|\d)@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/.test(this.value) ){
           this.isChecked = false;
           var temp = this.value.substring(0,this.value.indexOf("@"));
           if(temp.length < 6){
               text = "新邮件地址太短。只允许6到18个字符。";
		   }else if(temp.length > 16){
               text = "新邮件地址太长。只允许6到18个字符。";
		   }else if(!/^[a-zA-Z]+.*$/.test(temp)){
               text = "新邮件地址必须以字母开头。";
		   }else if(!/^.*([a-zA-Z]|\d)$/.test(temp)){
               text = "新邮件地址必须以字母或数字结尾。";
		   }else{
			   text = "新邮件地址只允许字母、数字和下划线。";
		   }
		   checkURS.checkErr(this.isChecked,this.id,text);
		}
		//校验邮箱
		else{
		   var email= document.getElementById("email_name_r").value;
		   creaeXMLHttpRequest();
			var url = "http://evjie.com/evbeta/Home/Ajax/preg_mail?email=" + encodeURI(email);
			xmlhttp.open("GET",url,true); 
			xmlhttp.onreadystatechange = callback_email;	
			xmlhttp.send(null);	
		   };
		}	
	};
	}	
	
	//用户名
	if($_id("username")){
	$_id("username").onclick = function(){checkURS.hiddeblank(this)};
	$_id("username").onblur = function(){
		$_id(this.id + "_info").style.color = "#8A8A8A";
		this.isChecked = true;
		var text = "";
		var len = this.value.length;
		if(len == 0){			
			//if(checkURS.submits){
			this.isChecked = false;	
			text = "请设置你的用户名。";
			//}
		}
		else if(len > 16 || len < 6){
			this.isChecked = false;	
			text = "请输入6到16个字符的用户名。";
		}
		else{
			var user = document.getElementById("username").value;
		   creaeXMLHttpRequest();
			var url = "http://evjie.com/evbeta/Home/Ajax/preg_query?username=" + encodeURI(user);
			xmlhttp.open("GET",url,true); 
			xmlhttp.onreadystatechange = callback;	
			xmlhttp.send(null);	
			return;
		}
		checkURS.checkErr(this.isChecked,this.id,text);
	};
	}	
	
	function start() 
{	var user = document.getElementById("user").value;
	if (user!="")
	{
		
		
	}
	else
	{
		alert("请填写用户名!");
	}
}
	
	//密码
	if($_id("password")){
	$_id("password").onclick = function(){checkURS.hiddeblank(this)};
	$_id("password").onblur = function(){
		$_id(this.id + "_info").style.color = "#8A8A8A";
		this.isChecked = true;
		var text = "";
		var len = this.value.length;
		if(len == 0){			
			this.isChecked = false;	
			text = "请设置你的通行证登录密码。";		
		}
		else if(len > 16 || len < 6){
			this.isChecked = false;	
			text = "请输入6到16个字符的密码。";
		}
		else if(strUtil.isAllSameChar(this.value) || passwordUtil.isSimplePassword(this.value)){
			this.isChecked = false;
			text = "密码太简单，请尝试数字、字母和下划线的组合。";
		}
		else if($_id("username")){
			var email_name_r_u = $_id("username").value.substring(0,$_id("username").value.indexOf("@"));
			if(this.value.toLowerCase() == email_name_r_u.toLowerCase() || this.value.toLowerCase() == $_id("username").value.toLowerCase()){
				this.isChecked = false;
				text = "密码与用户名不能相同。";
			}
		}
		checkURS.checkErr(this.isChecked,this.id,text);
		checkURS.getPwdTips(this.isChecked,this.id,this.value);//密码强度提示 20120821 whq
	};
	}
	
	//重复密码
	if($_id("re_password")){
	$_id("re_password").onclick = function(){checkURS.hiddeblank(this)};
	$_id("re_password").onblur = function(){
		$_id(this.id + "_info").style.color = "#8A8A8A";
		this.isChecked = true;
		var text = "";
		var len = this.value.length;
		if(len == 0){		
				this.isChecked = false;	
				text = "请再次输入你的登录密码。";
		}
		else if(this.value != $_id("password").value){
			this.isChecked = false;	
			text = "两次输入的密码不一致。";
		}
		checkURS.checkErr(this.isChecked,this.id,text);
	};
	}

	/*商户会员地区
	if(!$_id("firm_area")){
		$_id(this.id + "_info").style.color = "#8A8A8A";
		this.isChecked = true;
		var text = "";
		var len = this.value.length;		
		if(len == 0 ||len == 1){		
				this.isChecked = false;	
				text = "请选择地区";
		}
		checkURS.checkErr(this.isChecked,this.id,text);
	}*/
	
	//验证码
	if($_id("usercheckcode")){
	$_id("usercheckcode").onclick = function(){checkURS.hiddeblank(this)};
	$_id("usercheckcode").onblur = function(){
		$_id(this.id + "_info").style.color = "#8A8A8A";
		this.isChecked = true;
		var text = "";
		var len = this.value.length;
		if(len == 0){
				this.isChecked = false;	
				text = "请输入验证码。";
			checkURS.checkErr(this.isChecked,this.id,text,"input_verify");
		}
		else {
			var code= document.getElementById("usercheckcode").value;
		   creaeXMLHttpRequest();
			var url = "http://evjie.com/evbeta/Home/Ajax/verify_check?verify=" + encodeURI(code);
			xmlhttp.open("GET",url,true); 
			xmlhttp.onreadystatechange = callback_code;	
			xmlhttp.send(null);	
		}
		if($_id("codez")){
			if(window.x1_1 && window.x1_2){
				try{
					$_id("codez").value = window.x1_1 + "_" + (Math.floor(Math.random()*10e6) + 10e6) + "" + Math.floor(new Date().getTime()/1000) ;
				}catch(e){
					$_id("codez").value = "NULL";
				}
			}
		}		
	};
	}
	
	/*手机号
	if($_id("phone")){
		$_id("phone").onclick = function(){
			checkURS.hiddeblank(this)
		};
		$_id("phone").onblur = function(){
			//$_id(this.id + "_info").style.color = "#8A8A8A";
			if(checkURS.checkType == 2){return;}
			
			this.isChecked = true;
			var text = "";
			var len = this.value.length;
	
			if(len == 0){
				if(checkURS.submits){
					this.isChecked = false;	
					text = "请输入手机号码。";
					checkURS.checkErr(this.isChecked,this.id,text,"input");
				}
			}
			else if(!(/^13\d{9}$/.test(this.value ) | /^15\d{9}$/.test( this.value ) | /^18\d{9}$/.test( this.value )|/^14\d{9}$/.test( this.value ))){
				this.isChecked = false;	
	            text = "手机号码不正确。";
				checkURS.checkErr(this.isChecked,this.id,text,"input");
			}
		};
	}*/
	
	if($_id("mobcheckcode")){
		$_id("mobcheckcode").onclick = function(){checkURS.hiddeblank(this)};
		$_id("mobcheckcode").onblur = function(){
			$_id(this.id + "_info").style.color = "#8A8A8A";
			this.isChecked = true;
			var text = "";
			var len = this.value.length;
			if(len == 0){
				if(checkURS.submits){				
					this.isChecked = false;	
					text = "请输入短信验证码。";
				}
			}
			checkURS.checkErr(this.isChecked,this.id,text,"input");
		};
	}
	


checkURS.hiddeblank = function(obj){
	if(obj.value == ""){
		$_id(obj.id + "_err").style.display = "none";
		$_id(obj.id + "_right").style.display = "none";
		if($_id(obj.id + "Tips")){$_id(obj.id + "Tips").style.display = "none";};// whq 增加密码强度提示的隐藏
		if(obj.id == "email_name"){
			$_id(obj.id).className = "input_new";
		}
		else if(obj.id == "usercheckcode"){
			$_id(obj.id).className = "input_verify";
		}
		else{$_id(obj.id).className = "input";}
		
	}
};

//自定义问题设置
checkURS.setQA = function(){
	if($_id("pass_qa").value != "请选择..."){
		checkURS.checkErr(true,"pass_qa","");
	}
	//else{checkURS.checkErr(false,"pass_qa","请选择或输入自定义密码保护问题。");}	

	if($_id("pass_qa").value == "自定义问题"){
		$_id("self_qa_con").style.display = "";
		$_id("self_qa").focus();
		if($_id("email_name")){
		    checkURS.inputs = ["username","email_name","password","re_password","usercheckcode"];
		}else if($_id("email_name_r")){
			if(window.isNotShowRandomImg){
				checkURS.inputs = ["username","email_name_r","password","re_password","pass_answer"];
			}else{
				checkURS.inputs = ["email_name_r","password","re_password","pass_answer","usercheckcode","self_qa"];
			}
		}
	}	
	else{
		$_id("self_qa_con").style.display = "none";
		$_id("pass_answer").focus();
        if($_id("email_name")){
		    checkURS.inputs = ["email_name","password","re_password","pass_answer","usercheckcode"];
		}else if($_id("email_name_r")){
			if(window.isNotShowRandomImg){
				checkURS.inputs = ["email_name_r","password","re_password","pass_answer"];
			}else{
				checkURS.inputs = ["email_name_r","password","re_password","pass_answer","usercheckcode"];
			}
		}
		
	}
};

var passwordUtil = {
simplePassword:['123456',
'123456789',
'12345678',
'123123',
'5201314',
'1234567',
'7758521',
'654321',
'1314520',
'123321',
'1234567890',
'147258369',
'123654',
'5211314',
'woaini',
'1230123',
'987654321',
'147258',
'123123123',
'7758258',
'520520',
'789456',
'456789',
'159357',
'112233',
'1314521',
'456123',
'110110',
'521521',
'zxcvbnm',
'789456123',
'0123456789',
'0123456',
'123465',
'159753',
'qwertyuiop',
'987654',
'115415',
'1234560',
'123000',
'123789',
'100200',
'963852741',
'121212',
'111222',
'123654789',
'12301230',
'456456',
'741852963',
'asdasd',
'asdfghjkl',
'369258',
'863786',
'258369',
'8718693',
'666888',
'5845201314',
'741852',
'168168',
'iloveyou',
'852963',
'4655321',
'102030',
'147852369',
'321321'],

	isSimplePassword:function(password){

		var isSimplePassword = false;
		for(var i = 0,size = this.simplePassword.length; i < size; ++i ){
			if(this.simplePassword[i] == password){
				isSimplePassword = true;
				break;
			}
		}
		return isSimplePassword;
	}	

};

var strUtil = {
	isAllSameChar:function(str){
		var c = str.charAt(0);
		var isAllSame = true;
		for(var i = 1,size = str.length; i < size; ++i){
			if(c != str.charAt(i)){
				isAllSame = false;
				break;
			}
		}
		return isAllSame;
	}
};
//密码强度提示 20120821 whq
checkURS.getPwdTips = function(isChecked,id,strPwd){
	var nPwdStrength = -1;
	var strPwdTips = "";
	var strPwdTipsClass = "";
	if(/[a-zA-Z]+/.test(strPwd) && /[0-9]+/.test(strPwd) && /[^a-zA-Z0-9]+/.test(strPwd)){
		nPwdStrength = 2;//强
	}else if(/[a-zA-Z]+/.test(strPwd) || /[0-9]+/.test(strPwd) || /[^a-zA-Z0-9]+/.test(strPwd)){
		if(/[a-zA-Z]+/.test(strPwd) && /[0-9]+/.test(strPwd)){//中
			nPwdStrength = 1;
		}else if(/[a-zA-Z]+/.test(strPwd) && /[^a-zA-Z0-9]+/.test(strPwd)){
			nPwdStrength = 1;
		}else if(/[0-9]+/.test(strPwd) && /[^a-zA-Z0-9]+/.test(strPwd)){
			nPwdStrength = 1;
		}else{//弱
			nPwdStrength = 0;
		};
	}else{
		nPwdStrength = -1;
    };
	switch(nPwdStrength){
		case 0:
		    strPwdTips = "弱：建议字母、数字、符号混搭";
			strPwdTipsClass = "pwdLow";
		break;
		case 1:
		    strPwdTips = "中:建议字母、数字、符号混搭";
			strPwdTipsClass = "pwdMiddle";		
		break;
		case 2:
		    strPwdTips = "强：请牢记您的密码";
			strPwdTipsClass = "pwdHigh";		
		break;
	};
	if($_id(id + "Tips") && nPwdStrength != -1 && isChecked){
		$_id(id + "Tips").innerHTML = strPwdTips;
		$_id(id + "Tips").className = strPwdTipsClass;
		$_id(id + "Tips").style.display = "";
	}else{
		$_id(id + "Tips").style.display = "none";
	};
};

checkURS.init();