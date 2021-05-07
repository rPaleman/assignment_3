<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $page_title;?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">

    <!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="application/javascript" src="../../js/main.js"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WP21</a>
        <ul class="navbar-nav mr-auto">
            <?php

            foreach ($navigation["items"] as $name => $url) {
                print '<li  '.(($navigation["active"] === $name) ? ' class="nav-item active" ': 'class="nav-item"').'><a class="nav-link" href="'.$url.'">'.$name.'</a></li>';
            }

            ?>
        </ul>
    </nav>
</header>