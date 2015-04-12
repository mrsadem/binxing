<?php require_once('header.php'); ?>
    <!-- container start -->
    <div id="logo">
    </div>
    <div class="container main-content">
      <div class="row">
          <article class="col-xs-12 col-sm-12 col-md-8 article-large">
              <div class="article-content">

              <div class="img-content">
                  <a href="http://spring.alif2e.com/">
                    <div class="article-caption" style="background:#3F62E2;">
                      <div class="enter-img"></div>
                    </div>
                  </a>
                  <img src="/assets/images/dpl.png" alt="" class="img-responsive img-main" target="_blank">
              </div>

                <a href="http://spring.alif2e.com/" target="_blank"><h1 class="text-center">Design Pattern Library</h1></a>
                <div class="intro">
                 <p class="text-center">DPL不仅仅是一份文档化的说明，它是B2B UED的设计价值观</p>
               </div>
             </div>
          </article>

          <article class="col-xs-12 col-sm-6 col-md-4">
            <div class="article-content">
              <div class="img-content">
              <a href="review.php">
                <div class="article-caption" style="background:#DE778F;">
                  <div class="enter-img"></div>
                </div>
              </a>
              <img src="/assets/images/review.jpg" alt="" class="img-responsive img-main" target="_blank" >
              </div>
              <a href="review.php"><h1 class="text-center">Design Review</h1></a>

              <!-- <span class="leader">Leader:</span> <a href="#">李强</a>     -->

              <div class="intro"><p class="text-center">设计过程分享</p></div>
           </div>
         </article>

        <?php $xml=simplexml_load_file('./assets/xml/research.xml'); 
         foreach($xml -> team as $team){  ?>
          <article class="col-xs-12 col-sm-6 col-md-4">
           <div class="article-content">
            <div class="img-content">
            <a href="<?php echo "http://binxing.com/pdfjs/web/viewer.html?file=../../assets/pdf/".$team -> pdf ?>">
              <div class="article-caption" style="background:<?php echo $team -> tcolor ?>;">
                <div class="enter-img"></div>
              </div>
            </a>
            <img src="<?php echo "/assets/images/".$team -> image ?>" alt="" class="img-responsive img-main">
            </div>
            <a href="<?php echo "http://binxing.com/pdfjs/web/viewer.html?file=../../assets/pdf/".$team -> pdf ?>"><h1 class="text-center"><?php echo $team -> name; ?></h1></a>

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