<!DOCTYPE html>
<html>
   <head>
      <title>Bootstrap 模板</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="/boostrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="./assets/style.css">
      <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
      <script src="/lib/jquery.min.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="/boostrap/js/bootstrap.min.js"></script>
      <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
   </head>


   <body>

    <!-- 侧边栏 -->
    <div class="side_bar">
      
    </div>
    

    <!-- 内容框架 -->
    <div class="main_body">

    
         <div class="container">


               <div class="row">
                 <article class="col-xs-12 col-sm-12 col-md-8">
                  <div class="article-content">

                    <a href="#"><img src="/assets/images/doc.jpg" alt="" class="img-responsive" target="_blank"></a>

                    <h1 class="text-center">设计文档</h1>

                    <!-- <span class="leader">Leader:</span> <a href="#">李强</a> -->

                    <div class="intro">
                     <p>备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注备注</p>
                   </div>
                 </div>
               </article>


               <article class="col-xs-12 col-sm-6 col-md-4">
                <div class="article-content">
                  <a href="#"><img src="/assets/images/case.jpg" alt="" class="img-responsive" target="_blank"></a>
                  <h1 class="text-center">案例研究</h1>

                  <!-- <span class="leader">Leader:</span> <a href="#">李强</a>     -->

                  <div class="intro"><p>备注备注备注备注备注备注备注备注备注备注备注备注备注</p></div>
                </div>
              </article>


              <?php require_once('function.php'); ?>

              <?php foreach($xml -> team as $team){ ?> 
                <article class="col-xs-12 col-sm-6 col-md-4">
                 <div class="article-content">

                   <a href="<?php echo $team -> image ?>" target="_blank"><img src="<?php echo $team -> image ?>" alt="" class="img-responsive"></a>

                   <h1 class="text-center"><?php echo $team -> name; ?></h1>

                   <div class="intro">
                    <p><?php echo $team -> intro ?></p>
                  </div>
                </div>
                </article>
              <?php } ?>
              </div>
      </div>

    <!-- Footer start -->
    <footer>Footer</footer>

    </div>
</body>
</html>