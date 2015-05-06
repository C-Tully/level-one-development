<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Required header for concrete -->
	<?php Loader::element('header_required'); ?>
<!-- Used for responsive template -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
</head>
<body>
		<div id="main_nav">
				<?php
				$bt_main = BlockType::getByHandle('autonav');
				$bt_main->controller->displayPages = 'custom';
				$bt_main->controller->displayPagesCID = 1;
				$bt_main->controller->orderBy = 'display_asc';                    
				$bt_main->controller->displaySubPages = 'none';
				$bt_main->controller->displaySubPageLevels = 'custom';		
				$bt_main->controller->displaySubPageLevelsNum = 1;
				$bt_main->render('templates/header_menu');
				?>
		</div>