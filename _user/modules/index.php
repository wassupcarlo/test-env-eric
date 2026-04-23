<?php session_start(); ?>
<?php include "../../config.php";?>
<?php if(file_exists(ABSPATH.'site/page-head.php')) {include ABSPATH."site/page-head.php";} else {include ABSPATH."php/includes/page-head.php";}?>

<title>Tasks <?php if (isset($settings['core']['company-name'])) { echo "| ".$settings['core']['company-name']." "; } ?>| Admin Panel </title>

<!-- Add any stylesheets and stuff here -->
 <?php include_stylesheet('css/style.css'); ?>

<!-- End Head -->
<?php if(file_exists(ABSPATH."site/php/page-top.php")) {include ABSPATH."site/php/page-top.php";} else {include ABSPATH."php/includes/page-top.php";} ?>

<!-- Page content goes here -->
<?php
	//Set view and default view
	$view=isset($_GET['view']) && !empty($_GET['view']) ? sanitize($_GET['view']): 'view';

	//Include view if file exists
	if(file_exists("php/".$view."-inc.php")) {
		include "php/".$view."-inc.php";
	}
?>

<!-- End Page Content -->
<input type='hidden' id='active-menu-item-id' value='nav-tasks' />
<?php if(file_exists(ABSPATH."site/php/page-bottom.php")) {include ABSPATH."site/php/page-bottom.php";} else {include ABSPATH."php/includes/page-bottom.php";} ?>
<?php if(file_exists(ABSPATH."site/php/page-js.php")) {include ABSPATH."site/php/page-js.php";} else {include ABSPATH."php/includes/page-js.php";} ?>
<?php if(file_exists(ABSPATH."site/js/page.js")) {include_js(SITEURL."site/js/page.js"); } ?>
<!-- Page Javascript goes here -->
	<script type="text/javascript">
		tinymce.init({
			selector: '#project_description_input, #add-task-modal-description'
		});
	</script>
<?php


	include "php/_modals/add-task-modal-inc.php";
	include "php/_modals/edit-task-modal-inc.php";

    include "php/_modals/add-project-modal-inc.php";
    include "php/_modals/edit-project-modal-inc.php";

	if($view=='add' || $view=='edit') {
	  include_js("js/add-edit-functions.js");
	}

	else if($view=='add-project' || $view=='edit-project') {
		include_js("js/add-edit-project-functions.js");

    }

	include_js("js/_modals/add-task-modal.js");
	include_js("js/_modals/edit-task-modal.js");
	include_js("js/_modals/add-project-modal.js");
	include_js("js/_modals/edit-project-modal.js");


	if(file_exists("js/".$view.".js")) {
	  include_js("js/".$view.".js");
	}
?>

<!-- End page javascript -->
<?php if(file_exists(ABSPATH.'site/page-foot.php')) {include ABSPATH."php/site/page-foot.php";} else {include ABSPATH."php/includes/page-foot.php";} ?>