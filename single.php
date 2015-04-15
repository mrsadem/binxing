<?php require_once('header.php'); 
	$action = $_GET['action'];
	$xml = simplexml_load_file('./assets/xml/single.xml');
	foreach ($xml->page as $page) {
		if($page->name == $action)
		{
			$result = $page;
			break;
		}
	}
?>
<script>
	$('.nav li:nth(0)').removeClass('active');
</script>
<div class="container single-content">
		<h4 class="text-center"><?php echo $action; ?></h4>
<div class="row">
<?php foreach ($result->pdf as $pdf) { 
	$link = '/pdfjs/web/viewer.html?file=../../assets/pdf/'.$pdf.'.pdf'; ?>
	<div class="col-md-3">
		<div class="post-single">
			<a href="<?php echo $link; ?>"><img src="/assets/images/pdf.png" alt=""></a>
			<a href="<?php echo $link; ?>"><p class="title"><?php echo $pdf; ?></p></a>
			<a href="#"><span class="glyphicon glyphicon-cloud-download"></span></a>
		</div>
	</div>
<?php } ?>
<?php foreach ($result->image as $img) { 
	$link = './assets/pdf/'.$img; ?>
	<div class="col-md-3">
		<div class="post-single">
			<a href="<?php echo $link; ?>"><img src="/assets/images/img.png" alt=""></a>
			<a href="<?php echo $link; ?>"><p class="title inline-block"><?php echo $img; ?></p></a>
			<a href="#"><span class="glyphicon glyphicon-cloud-download"></span></a>
		</div>
	</div>
<?php } ?>
</div>
</div>
<?php require_once('footer.php');?>