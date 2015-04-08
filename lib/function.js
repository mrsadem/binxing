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

	//xs屏幕宽度下替换第一个article图片
	// if($(window).width() < "768"){
	// 	$('img')[0].src = './assets/images/dpl-xs.png'
	// }else{
	// 	$('img')[0].src = './assets/images/dpl.png'
	// }


});
