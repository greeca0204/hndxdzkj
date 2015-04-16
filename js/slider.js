/*首页广告效果*/
var t = n = 0, count;
$(document).ready(function(){	
	count=$("#ad_list a").length;
	$("#ad_list a:not(:first-child)").hide();
	$("#ad_info").html($("#ad_list a:first-child").find("img").attr('alt'));
	$("#ad_info").click(function(){window.open($("#ad_list a:first-child").attr('href'), "_blank")});
	$("#ad li").click(function() {
		var i = $(this).text() - 1;//获取Li元素内的值，即1，2，3，4
		n = i;
		if (i >= count) return;
		$("#ad_info").html($("#ad_list a").eq(i).find("img").attr('alt'));
		$("#ad_info").unbind().click(function(){window.open($("#ad_list a").eq(i).attr('href'), "_blank")})
		$("#ad_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
		$(this).toggleClass("on");
		$(this).siblings().removeAttr("class");
	});
	t = setInterval("showAuto()", 4000);
	$("#ad").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()", 4000);});
});
	
function showAuto()
{
	n = n >=(count - 1) ? 0 : ++n;
	$("#ad li").eq(n).trigger('click');
}

