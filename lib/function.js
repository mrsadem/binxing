$(document).ready(function(){
	//side收缩事件
	$('#work-panel').click(function(){
		//alert($('.side').css('marginLeft'));
		if($('.side').css('marginLeft') == '-200px'){
		$('.side').animate({marginLeft:'0'});
	}else{
		$('.side').animate({marginLeft:'-200'});
	}
		return false;
	});

	//点击.side #back回收side
	$('#back .glyphicon-align-justify').click(function(){
		$('.side').animate({marginLeft:'0'});
	});


	//鼠标悬浮图片半透明效果
	$('.main-content img').hover(
		function(){
			$(this).animate({opacity:0.8},100);
		},
		function(){
			$(this).animate({opacity:1.0},100);
		}
		);

	//Logo div3秒后消失
	
	//setTimeout("$('#logo').css('display','none')",3000);

	// setTimeout(logo_disapear,2000);
	// function logo_disapear (){
	// 	$('#logo').animate({opacity:0,height:0},1000);
		//$('#logo').css('display','none');
	}

});
