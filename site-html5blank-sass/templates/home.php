<?php include("inc/_head.php"); ?>

<main role="main">
	<article>
		<h1><?php echo $page->title; ?></h1>
		<?php echo $page->pagebody; ?>
	</article>
</main>

<aside role="complementary">
	<?php echo $page->sidebar; ?>
	
	<?php if($page->image) echo "<img src='{$page->image->url}'>"; ?>
	
</aside>

<?php include("inc/_foot.php"); ?>