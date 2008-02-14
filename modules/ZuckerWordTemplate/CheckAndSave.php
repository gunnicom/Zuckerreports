<?php

require_once('include/logging.php');
require_once('include/formbase.php');
require_once('include/upload_file.php');
require_once('modules/ZuckerWordTemplate/WordTemplate.php');

if (!is_admin($current_user)) {
	sugar_die("only admin allowed");
}

global $mod_strings;
$mod_strings = return_module_language($current_language, 'ZuckerReports');


$template = new WordTemplate();
if (!empty($_REQUEST['record'])) {
	$template->retrieve($_REQUEST['record']);
}
$template = populateFromPost("", $template);
$template->querytemplate_id = $_REQUEST["querytemplate_id"];


$upload_file = new UploadFile('templatefile');

$success = TRUE;
if (isset($_FILES['templatefile']) && $upload_file->confirm_upload()) {
	$success = $template->set_templatefile($_FILES['templatefile']['tmp_name'], $upload_file->original_file_name);
	if (!$success) {
		$_REQUEST["ZR_ERROR_MSG"] = $template->report_output;
	}
}
if ($success) {
	$return_id = $template->save();
	handleRedirect("", "");
} else {
	include("modules/ZuckerWordTemplate/EditView.php");
}

?>
