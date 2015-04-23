$(document).ready(function(){
	//计算浏览器scrollbar宽度
	var scrollDiv = document.createElement("div");
	scrollDiv.className = "scrollbar-measure";
	document.body.appendChild(scrollDiv);

	// Get the scrollbar width
	var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
	// console.warn(scrollbarWidth); // Mac:  15

	// Delete the DIV 
	document.body.removeChild(scrollDiv);

	//side收缩事件
	var isShow = true;
	$('#work-panel').click(function(){
		if(isShow){
		$('.side').animate({marginLeft:'0'},'normal','swing');
		isShow = false
	}else{
		$('.side').animate({marginLeft:'-200'},'normal','swing');
		isShow = true
	}
		return false;
	});

	//点击.side #back回收side
	$('#back span').click(function(){
		
		$('.side').animate({marginLeft:'0'},'normal','swing', function(){
			$("html").css("overflow-y", "scroll").css("margin-right", 0);
		});
		isShow = false
	});

	$(".side").on("mouseover", function(){
		if (isShow)  {
			$("html").css("overflow", "hidden").css("margin-right", scrollbarWidth);
			$(".side").css("width", 200 + scrollbarWidth).css("margin-left", "-215px");
		}
		
	});

	$(".side").on("mouseout", function(){
		if (isShow)  { 
			$("html").css("overflow-y", "scroll").css("margin-right", 0);
			$(".side").css("width", 200).css("margin-left", "-200px");
		}
	});

	//enter hover效果

	//鼠标悬浮图片半透明效果
	$('.single-content img, .review-content img').hover(
		function(){
			$(this).animate({opacity:0.8},100);
		},
		function(){
			$(this).animate({opacity:1.0},100);
		}
		);

});
