<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Team Calendar</title>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link rel="stylesheet" type="text/css" href="./css/calendar.css">
<link rel="stylesheet" type="text/css" href="css/fullcalendar.css">
<link rel="stylesheet" type="text/css" href="css/fancybox.css">

  <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
  <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
  <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
<script src='./js/jquery-1.9.1.js'></script>
<script src='./js/jquery-ui.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='js/jquery.fancybox-1.3.1.pack.js'></script>
 <script src="../lib/function.js"></script>

<script type="text/javascript">
$(function() {
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events: 'json.php',
		dayClick: function(date, allDay, jsEvent, view) {
			var selDate =$.fullCalendar.formatDate(date,'yyyy-MM-dd');
			$.fancybox({
				'type':'ajax',
				'href':'event.php?action=add&date='+selDate
			});
    	},
		eventClick: function(calEvent, jsEvent, view) {
			$.fancybox({
				'type':'ajax',
				'href':'event.php?action=edit&id='+calEvent.id
			});
    	}
	});
	
});
</script>

</head>

<body>
    <div id="nav">
    	<div id ="nav-brand">
    		<a href="../index.php"><span>阿里巴巴国际站UED团队</span><br>International User Experience Design</a>
    	</div>
    </div>
	<div id="main">
	   <div id='calendar'></div>
	</div>
<?php require_once('../footer.php') ?>
