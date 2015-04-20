<?php require_once('header.php'); 
	$action = $_GET['action'];
	$xml = simplexml_load_file('./assets/xml/single.xml');
	foreach ($xml->page as $page) {
		if($page->class == $action)
		{
			$result = $page;
			//print_r($result);
			break;
		}
	}
?>

<div class="container single-content">
		<h4 class="text-center"><?php echo $action; ?></h4>
<?php foreach ($result->title as $title) {
	if($title->name){ ?>
		<span class="single-cat"><?php echo "/".$title->name; ?></span>
	<?php } ?>

	<?php 
	if($title->menber){
		foreach ($title->menber as $menber) { ?>
		<span class="menber"><?php echo "/".$menber; ?></span>
	<?php }	}?>

	<div class="row">
	<?php
	foreach ($title->pdf as $pdf) { 
	$link = '/pdfjs/web/viewer.html?file=../../assets/pdf/'.$pdf.'.pdf'; 
	$pdf_name = strlen($pdf) > 22 ? getSubstr($pdf,0,10): $pdf;
	?>
	<div class="col-md-2">
		<div class="post-single">
			<a href="<?php echo $link; ?>" target="_blank" title="<?php echo $pdf;?>"><img src="/assets/images/pdf.png" alt=""></a>
			<a href="<?php echo $link; ?>" target="_blank" title="<?php echo $pdf;?>"><p class="title"><?php echo $pdf_name; ?></p></a>
			<!-- <a href="#"><span class="glyphicon glyphicon-save"></span></a> -->
		</div>
	</div>
	<?php }
	foreach ($title->image as $image) { 
	$link = '/assets/pdf/'.$image.'.jpg'; 
	$img_name = strlen($image) > 22 ? getSubstr($image,0,10): $image;
	?>
	<div class="col-md-2">
		<div class="post-single">
			<a href="<?php echo $link; ?>" target="_blank" title="<?php echo $image;?>"><img src="/assets/images/img.png" alt=""></a>
			<a href="<?php echo $link; ?>" target="_blank" title="<?php echo $image;?>"><p class="title"><?php echo $img_name; ?></p></a>
		</div>
	</div>
	<?php }?>
	</div>
<?php } ?>

</div>

<?php
function getSubstr($string, $start, $length) {
        if(mb_strlen($string,'utf-8')>$length){
            $str = mb_substr($string, $start, $length,'utf-8'); 
            return $str.'...';
        }else{
                return $string;
        }
}
 ?>

<?php require_once('footer.php');?>

<script>
	$('.nav li:nth(0)').removeClass('active');
	var window_height = $(window).height();
	$('.single-content').css('min-height',window_height-170);
</script>