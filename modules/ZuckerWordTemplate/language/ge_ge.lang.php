<?php

require_once("modules/ZuckerReports/language/ge_ge.lang.php");

$mod_strings = array_merge($mod_strings, 
	array(
	'LBL_WORD_TEMPLATE_NEW' => 'Neue Office-Vorlage',
	'LBL_WORD' => 'Word-Vorlage',
	'LBL_OPENOFFICE' => 'OpenOffice Vorlage',
	'LBL_WORD_NAME' => 'Vorlagenname',
	'LBL_WORD_FILENAME' => 'Vorlagendatei',
	'LBL_WORD_DESCRIPTION' => 'Kommentar',
	'LBL_WORD_QUERY' => 'Abfrage',

	'LBL_WORD_CREATE_WORD_TEMPLATE' => 'Neue Office-Vorlage',
	'LBL_WORD_WORD_TEMPLATES' => 'Office-Vorlagen',

	'LBL_WORD_ONDEMAND_SAVE_PATH' => 'Speichern in Verzeichnis',
	
	'ERR_TEMPLATE_INVALID_OFFICE_FILE' => 'Es werden nur Word (*.doc) und OpenOffice/StarOffice (*.stw) Dateien unterstützt',
	
	'LBL_LOADER_SETUP' => 'Für Microsoft Office und OpenOffice Unterstützung installieren Sie bitte den <a href="modules/ZuckerReports/resources/ZuckerReportsLoaderSetup.msi"><strong>ZuckerReports Loader</strong></a>.',

	)
);


$mod_list_strings = array_merge($mod_list_strings,
	array (
		  'WORD_EXPORT_TYPES' =>
		  array (
			'NewDocument' => 'Neues Dokument',
			'Print' => 'An Drucker senden',
			'Mail' => 'Als E-Mail versenden',
			'Fax' => 'Als Fax versenden (wenn von Ihrer Umgebung unterstützt)',
		  ),
		  'OPENOFFICE_EXPORT_TYPES' =>
		  array (
			'Print' => 'An Drucker senden',
			'File' => 'Als Datei speichern',
		  ),
	)
);





		
?>
