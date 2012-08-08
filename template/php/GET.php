<?
	switch($_GET['link']){
		case 'home':
			$content = $php_path.'home.php';
			break;
		case 'page1':
			$content = $php_path.'page1.php';
			break;
		case 'page2':
			$content = $php_path.'page2.php';
			break;

		default:
			$content = $php_path.'home.php';
			break;
	}
?>
