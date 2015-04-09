<?php require_once('header.php'); ?>
    <!-- container start -->
    <div id="logo">
    </div>
    <div class="container main-content">
      <div class="row">
          <article class="col-xs-12 col-sm-12 col-md-8">
              <div class="article-content">

                <a href="http://spring.alif2e.com/" target="_blank"><img src="/assets/images/dpl.png" alt="" class="img-responsive" target="_blank"></a>

                <a href="http://spring.alif2e.com/" target="_blank"><h1 class="text-center">Design Pattern Library</h1></a>

                <div class="intro">
                 <p class="text-center">DPL不仅仅是一份文档化的说明，它是B2B UED的设计价值观</p>
               </div>
             </div>
          </article>

          <article class="col-xs-12 col-sm-6 col-md-4">
            <div class="article-content">
              <a href="review.php"><img src="/assets/images/review.jpg" alt="" class="img-responsive" target="_blank" ></a>
              <a href="review.php"><h1 class="text-center">Design Review</h1></a>

              <!-- <span class="leader">Leader:</span> <a href="#">李强</a>     -->

              <div class="intro"><p class="text-center">设计过程分享</p></div>
           </div>
         </article>

         <?php require_once('function.php'); ?>

        <?php foreach($xml -> team as $team){ ?> 
          <article class="col-xs-12 col-sm-6 col-md-4">
           <div class="article-content">

             <a href="/pdfjs/web/viewer.html" target="_blank"><img src="<?php echo $team -> image ?>" alt="" class="img-responsive"></a>

             <a href="/pdfjs/web/viewer.html"><h1 class="text-center"><?php echo $team -> name; ?></h1></a>

             <div class="intro">
              <p class="text-center"><?php echo $team -> intro ?></p>
            </div>
          </div>
          </article>
        <?php } ?>
      </div>
    </div>
    <!-- container end -->

<?php require_once('footer.php'); ?>
</body>
</html>ml>