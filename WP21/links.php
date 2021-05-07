<?php
/* Header */
$page_title = 'Webprogramming links';
$navigation = Array(
	'active' => 'Links',
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
	<h1>Here's some links</h1>
	
	<?php
	$linkjes = Array(
		'google.com' => 'http://www.google.com',
		'ascii.com' => 'http://www.ascii.com',
		'reddit.com' => 'http://www.reddit.com',
	);
	?>

    <ul id="list">
        <?php
        foreach ($linkjes as $linkjes_name => $linkjes_url) {
            print '<li> <a href="'.$linkjes_url.'">'.$linkjes_name.'</a></li>';
        }
        ?>
    </ul>
	<button id= "button" type="button">Verklikt</button>

</div>
<?php
include __DIR__ . '/tpl/body-end.php';
/* Footer */
include __DIR__ . '/tpl/footer.php';
?>
