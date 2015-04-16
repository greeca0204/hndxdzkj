// JavaScript Document
function doslide(id)
{
	//找到主菜单项对应的子菜单项
	if($("#jobcont_"+id).is(":visible")){					
		$("#jobcont_"+id).css("cursor","pointer").slideToggle();
		$("#jobimg_"+id).attr("src","images/yx_32.jpg");
	}
	else{		
		$("#jobcont_"+id).css("cursor","pointer").slideToggle();
		$("#jobimg_"+id).attr("src","images/yx_31.jpg");
	}
}