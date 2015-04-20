<?php require_once('header.php'); ?>
    <!--main container start -->
    <div id="logo">
    </div>
    <div class="container main-content">
      <div class="row">
          <article class="col-xs-12 col-sm-12 col-md-8 article-large">
              <div class="article-content">

              <div class="img-content">
                  <a href="http://spring.alif2e.com/" target="_blank">
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

        <?php $xml=simplexml_load_file('./assets/xml/research.xml'); 
         foreach($xml -> post as $post){  ?>
          <article class="col-xs-12 col-sm-6 col-md-4">
           <div class="article-content">
            <div class="img-content">
            <?php
             if($post -> pdf){
                $r_link = "/pdfjs/web/viewer.html?file=../../assets/pdf/".$post -> pdf.'.pdf';
            }elseif($post -> link) {
                $r_link = $post -> link;
            } else{
                $r_link = 'single.php?action='.$post -> name;
            }
            ?>
            <a href="<?php echo $r_link; ?>"  target="_blank">
              <div class="article-caption" style="background:<?php echo $post -> tcolor ?>;">
                <div class="enter-img"></div>
              </div>
            </a>
            <img src="<?php echo "/assets/images/".$post -> image ?>" alt="" class="img-responsive img-main">
            </div>
            <a href="<?php echo $r_link; ?>" target="_blank"><h1 class="text-center"><?php echo $post -> name; ?></h1></a>

            <div class="intro">
            <p class="text-center"><?php echo $post -> intro ?></p>
            </div>
          </div>
          </article>
        <?php } ?>
      </div>
    </div>
    <!--main container end -->

<?php require_once('footer.php'); ?>