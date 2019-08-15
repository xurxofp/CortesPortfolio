<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Flickr Gallery</title>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="container">
	<?php
	require('gallery/class.flickr_gallery.php');
	$settings = array(
		'api_key'       => '74d0e9bc869cf1442c75d68bdd6fc27c',
		'user_id'       => '161603862@N05',
		'gallery_title' => 'Galería',
		'gallery_url'   => '/gallery',
		'assets_url'    => '/gallery/gallery',
		'cache'         => array('path'=>__DIR__.'/gallery/cache','time'=>30),
		'per_page'      => 10,
		'indicator'     => false,
		'jquery'        => true,
		'bootstrap'     => true,
	);

	$gallery = new flickr_gallery($settings);
	//echo $gallery->getUserId('YOUR USER NAME'); // use to get your flickr user id
	echo $gallery->display();
	?>
	</div>

</body>
</html>
