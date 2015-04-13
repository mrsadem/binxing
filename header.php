<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>B2B Design Center</title>
  <link href="/boostrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/style.css">
  <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
  <script src="/lib/jquery.min.js"></script>
  <!-- 包括所有已编译的插件 -->
  <script src="/boostrap/js/bootstrap.min.js"></script>
  <script src="/lib/function.js"></script>
  <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
  <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
  <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body>

    <!-- header start -->
    <header>
      <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
               <a class="navbar-brand" href="index.php"><span>阿里巴巴国际站UED团队</span><br>International User Experience Design</a>
            </div>
              <ul class="nav navbar-nav hidden-xs">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li class="dropdown">
                      <a href="review.php">
                         Design Review 
                         <!-- <b class="caret"></b> -->
                      </a>
                    <!--   <ul class="dropdown-menu">
                         <li><a href="#">2015年3月</a></li>
                         <li class="divider"></li>
                         <li><a href="#">2014年12月</a></li>
                         <li><a href="#">2014年11月</a></li>
                         <li><a href="#">2014年10月</a></li>
                      </ul> -->
                  </li>
                  <li><a href="/fullcalendar/cal_opt.php" target="blank">Team Calendar</a></li>
                  <li id="work-panel"><a href="#" class="btn-link"><span class="glyphicon glyphicon-th-list"></span></a></li>
             </ul>
        </nav>
      </div>
    </header>
    <!-- header end -->
    
    <!-- side bar start -->
    <div class="side">
      <div id="back"><a href="#"><span class="glyphicon glyphicon-th-list"></span></a></div>
      <?php $xml = simplexml_load_file('./assets/xml/sidebar.xml'); 
            foreach ($xml -> class as $class) { ?>
              <h5><?php echo $class -> attributes(); ?></h5>
              <ul>
              <?php foreach ($class -> site as $site) { 
                if($site -> pdf){
                $s_link = "http://binxing.com/pdfjs/web/viewer.html?file=../../assets/pdf/".$site -> pdf.'.pdf';
                  }elseif($site -> link) {
                      $s_link = $site -> link;
                  } else{
                      $s_link = 'single.php?action='.$site -> name;
                  }
                ?>
                <li><a href="<?php echo $s_link; ?>"><?php echo $site -> name; ?></a></li>
              <?php } ?>
              </ul>
      <?php }?>
    </div>
    <!-- side bar end -->