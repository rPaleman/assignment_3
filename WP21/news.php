<?php
/* Header */
$page_title = 'Webprogramming News';
$navigation = Array(
	'active' => 'News',
	'items' => Array(
		'Home' => '/WP21/assignment_2/index.php',
		'Links' => '/WP21/assignment_2/links.php',
		'News' => '/WP21/assignment_2/news.php',
		'Future' => '/WP21/assignment_2/future.php'
	)	
);
include __DIR__ . '/tpl/head.php';

/* Body */
include __DIR__ . '/tpl/body-start.php';
?>

<div class="col-md-12">
	<h1>Bee movie is an underrated masterpiece</h1>
</div>
<?php
include __DIR__ . '/tpl/body-end.php';
/* Footer */
include __DIR__ . '/tpl/footer.php';
?>
