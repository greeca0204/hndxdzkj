var reg = /^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,4}$/;
$(document).submit(function(){
	if($("#username").val()=="")
	{
		alert("请输入姓名！", "错误提示");
		$("#username").focus();
		return false;
	}
	
	if($("#username").val().length<2){
		alert("名字不少于两个字，请重新输入！","错误提示");
		$("#username").focus();
		return false;
	}

	if($("#tel").val()=="")	
	{
		alert("请输入电话！", "错误提示");
		$("#tel").focus();
		return false;
	}
	
	if($("#tel").val().length!=11){
		alert("电话号码为11位，请重新输入！","错误提示");
		$("#tel").focus();
		return false;
	}
	
	if($("#email").val()=="")	
	{
		alert("请输入电邮！", "错误提示");
		$("#email").focus();
		return false;
	}
	
	if(!reg.exec($("#email").val())) {
		alert('请输入正确邮箱');
		$("#email").focus();
		return false;
	}
	if($("#topic").val()=="")	
	{
		alert("请输入主题！", "错误提示");
		$("#topic").focus();
		return false;
	}
	
	if($("#content1").val()=="")	
	{
		alert("请输入内容！", "错误提示");
		$("#content1").focus();
		return false;
	}
});