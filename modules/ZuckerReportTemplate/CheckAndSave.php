<?php

require_once('include/logging.php');
require_once('include/formbase.php');
require_once('include/upload_file.php');
require_once('modules/ZuckerReportTemplate/ReportTemplate.php');

if (!is_admin($current_user)) {
	sugar_die("only admin allowed");
}


$template = new ReportTemplate();
if (!empty($_REQUEST['record'])) {
	$template->retrieve($_REQUEST['record']);
}
$template = populateFromPost("", $template);
$template->set_export_from_checkboxes();

$upload_file = new UploadFile('reportfile');

$success = TRUE;
if (isset($_FILES['reportfile']) && $upload_file->confirm_upload()) {
	$success = $template->set_reportfile($_FILES['reportfile']['tmp_name'], $upload_file->original_file_name);
	if (!$success) {
		$_REQUEST["ZR_ERROR_MSG"] = $template->report_output;
	}
}

if ($success) {
	for ($i = 0; $i < 5; $i++) {
		$paramName = "subreport".$i;
		$upload_file = new UploadFile($paramName);
		if (isset($_FILES[$paramName]) && $upload_file->confirm_upload()) {
			$success = $template->add_subreportfile($_FILES[$paramName]['tmp_name'], $upload_file->original_file_name);
			if (!$success) {
				$_REQUEST["ZR_ERROR_MSG"] = $template->report_output;
			}
		}
	}
}

if ($success) {
	for ($i = 0; $i < 5; $i++) {
		$paramName = "resource".$i;
		$upload_file = new UploadFile($paramName);
		if (isset($_FILES[$paramName]) && $upload_file->confirm_upload()) {
			$template->add_resource_file($_FILES[$paramName]['tmp_name'], $upload_file->original_file_name);
		}
	}
}

if ($success) {
	$return_id = $template->save();
	handleRedirect("", "");
} else {
	include("modules/ZuckerReportTemplate/EditView.php");
}
?>
