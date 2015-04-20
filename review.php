<?php 
require_once('header.php'); 
$xml = simplexml_load_file('./assets/xml/review.xml');
?>
<script>
	$('.nav li:nth(0)').removeClass('active');
	$('.nav li:nth(1)').addClass('active');
</script>

<div class="container review-content">
		<h4 class="text-center">Design Review</h4>
<?php foreach ($xml->review as $review) { ?>
	<div class="row">
		<span class="num"><?php echo $review->attributes()['id']; ?></span>
		<span class="time"><?php echo $review->time; ?></span>
		<div class="clear"></div>
		<?php foreach ($review->pdf as $pdf) { ?>
		<div class="col-md-3">
			<div class="post-single">
				<a href="<?php echo "/pdfjs/web/viewer.html?file=../../assets/pdf/".$pdf->name.".pdf"; ?>"><img src="<?php echo '/assets/images/thumbnail/'.$pdf->thumbnail ?>" alt=""></a>
				<p class="title"><?php echo $pdf->name; ?></p>
				<div class="clear"></div>
				<p class="menber">
				<?php foreach ($pdf->menber as $menber) { ?>
					<span><?php echo $menber; ?></span>
				<?php } ?>
				</p>
			</div>
		</div>
		<?php } ?>
	</div>
<?php } ?>
</div>
<?php require_once('footer.php'); ?>