<?php
$topbar = './topbar.php';
$footer = './footer.php';

// Analyse page query parameter. Outpiut is
// $dir = directory to look for content
// $file = file to look for including extension, defaults to 'content.php'
$page = $_GET['page'];
$info = pathinfo($page);
$dir = $info['dirname'];
$file = $info['basename'];
$extension = $info['extension'];

if ($dir == '.') {
	$dir = $file;
	$file = 'content';
} else if ($dir == '') {
	$dir = '.';
	$file = 'content';
}

if ($extension == '') {
	$extension = 'php';
	$file = $file.'.'.$extension;
}

// construct proper content and sidebars
$content = $dir.'/'.$file;
$sidebar = $dir.'/'.'sidebar.php';



?>