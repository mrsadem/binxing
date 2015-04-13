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

	print_r($result);
?>
<div class="container review-content">
		<h4 class="text-center"><?php echo $action; ?></h4>
</div>
<?php require_once('footer.php'); ?>