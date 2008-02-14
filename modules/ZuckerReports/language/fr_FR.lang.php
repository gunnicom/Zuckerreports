<?php
global $mod_strings;
global $mod_list_strings;

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'ZuckerReports',
	'LBL_MODULE_TITLE' => 'ZuckerReports: Accueil',
	'LNK_TEMPLATE_LIST'=> 'Mod�les des rapports et interrogations ',
	'LNK_PARAMETER_LIST'=> 'Param�tres des rapports et interrogations',
	'LNK_REPORT_ONDEMAND'=> 'Rapport � la demande',
	'LNK_REPORT_SCHEDULER'=> 'Programmateur de rapport',
	'LNK_ARCHIVE_LIST'=> 'Archives des rapports',
	'LBL_MENU_ABOUT' => 'A propos',

	'LBL_TEMPLATE_LIST_HEADER' => 'Liste des mod�les',
	'LBL_TEMPLATE_LIST_NAME' => 'Nom',
	'LBL_TEMPLATE_LIST_TYPE' => 'Type',
	'LBL_TEMPLATE_LIST_DESCRIPTION' => 'Description',
	
	'LBL_CREATED_BY'=> 'Cr�� par',
	'LBL_DATE_ENTERED'=> 'Date cr�ation',
	'LBL_DATE_MODIFIED'=> 'Date Modification',
	'LBL_DELETED' => 'Supprim�',
	'LBL_MODIFIED'=> 'Modifi� par',

	'LBL_SUBREPORTS' => 'Rapports',
	'LBL_ZUCKERREPORT_NAME' => 'Nom du fichier',
	'LBL_ZUCKERREPORT_DESCRIPTION' => 'Description',
	'LBL_ZUCKERREPORT_PUBLISH' => 'Publier le rapport',
	'LBL_ZUCKERREPORT_UNPUBLISH' => 'Ne pas publier le rapport',
	'LBL_ZUCKERREPORT_PUBLISHED' => 'Publi�',
	'LBL_ZUCKERREPORT_UNPUBLISHED' => 'Non Publi�',
	'LBL_HOME_REPORTS' => 'Rapports',
	
	'LBL_CONTAINER' => 'Categorie',
	'LBL_SUBCONTAINERS' => 'Souscategorie',
	'LBL_CONTAINER_NEW' => 'Nouvelle Categorie',
	'LBL_CONTAINER_TOP' => 'Categorie Racine',
	'LBL_CONTAINER_SELECT' => 'Selection',
	'LBL_CONTAINER_NAME' => 'Nom',
	'LBL_CONTAINER_DESCRIPTION' => 'Description',
	'LBL_CONTAINER_UP' => 'Monter',
	
	
	'LBL_PARAM_NEW' => 'Nouveau Param�tre du rapport',
	'LBL_PARAM_FRIENDLYNAME' => 'Nom affich�',
	'LBL_PARAM_DEFAULTNAME' => 'Nom par d�faut',
	'LBL_PARAM_DEFAULTVALUE' => 'Valeur par d�faut',
	'LBL_PARAM_DESCRIPTION' => 'Description',
	'LBL_PARAM_RANGE' => 'S�lection',
	'LBL_PARAM_RANGE_LIST' => 'Liste utilisateur',
	'LBL_PARAM_RANGE_LIST_HELP' => 'Saisir les valeurs de la liste s�par�es par une virgule (",").',
	'LBL_PARAM_RANGE_INPUT' => 'Saisie directe',
	'LBL_PARAM_RANGE_SQL' => 'Requ�tes utilisateur',
	'LBL_PARAM_RANGE_SQL_HELP' => 'Saisir la requ�te SQL. la valeur de la 1ere colonne est g�r�e par le rapport, la seconde par l\'utilisateur.',
	'LBL_PARAM_RANGE_SQL_TEST' => 'Tester la requ�te SQL',
	'LBL_PARAM_RANGE_SCRIPT' => 'PHP Script',
	'LBL_PARAM_RANGE_SCRIPT_DISABLED' => 'PHP Scripting has been disabled. Please enable it in modules/ZuckerReports/config.php.',
	'LBL_PARAM_RANGE_SCRIPT_HELP' => 'Please enter any PHP code you want. Finish with a "return"-statement.',
	


	'LBL_PARAM_LINK_LIST' => 'Lien des param�tres',
	'LBL_PARAM_LINK_NEW' => 'Param�tres s�lection',
	'LBL_PARAM_LINK_NAME' => 'Param�tres Nom',
	'LBL_PARAM_LINK_DEFAULTVALUE' => 'Valeur par d�faut',
	'LBL_PARAM_LINK_PARAM' => 'Param�tre',
	'LBL_PARAM_LINK_RANGE' => 'S�lection',
	'LBL_PARAM_LINK_ATTACH' => 'Lier un param�tre',
	'LBL_PARAM_LINK_DETACH' => 'D�lier un param�tre',

	'LBL_TEMPLATE_MODULE_LIST' => 'Liens modules',
	'LBL_TEMPLATE_MODULE_NEW' => 'S�lections module',
	'LBL_TEMPLATE_MODULE_PARAM' => 'Param�tres li�s',
	'LBL_TEMPLATE_MODULE_MOD' => 'Module',
	'LBL_TEMPLATE_MODULE_ATTACH' => 'Li� � un Module',
	'LBL_TEMPLATE_MODULE_DETACH' => 'D�li� d\'un Module',
	
	'LBL_ONDEMAND_REPORT_SELECTION' => 'S�lection Rapport',
	'LBL_ONDEMAND_FORMAT_SELECTION' => 'Pr�ferences Formats',
	'LBL_ONDEMAND_ATTACH_SELECTION' => 'Attach',
	'LBL_ONDEMAND_PARAMETERS' => 'Param�tres',
	
	'LBL_ONDEMAND_TEMPLATE' => 'Rapport',
	'LBL_ONDEMAND_EXECUTE' => 'Lancer Report',
	'LBL_ONDEMAND_OUTPUT' => 'Sortie',
	'LBL_ONDEMAND_RESULT' => 'Report Result',
	'LBL_ONDEMAND_VIEW' => 'Voir Rapport',
	'LBL_ATTACH_TO' => 'Attacher Rapport �',
	'LBL_ARCHIVE_TO' => 'Archiver Rapport',
	'LBL_ONDEMAND_ERROR' => 'Erreur lors de l\ex�cution du rapport',
	'LBL_ONDEMAND_FORMAT' => 'Format',

	'LBL_ONDEMAND_BOUND' => 'Rapports, Requ�tes et lettres',
	'LBL_ONDEMAND_BOUND_ATTACH' => 'Attacher r�sultats',
	'LBL_ONDEMAND_BOUND_RUN' => 'Lancer',
	
	
	'LBL_ARCHIVE_LIST'=> 'Liste des Rapports',
);

$mod_list_strings = array (
  'PARAM_RANGE_TYPES' =>
  array (
    'SIMPLE' => 'Saisie directe',
	'DATE' => 'Date Input',
    'SQL' => 'Requ�tes d�finie par l\'utilisateur',
    'LIST' => 'Liste d�finie par l\'utilisateur',
	'CURRENT_USER' => 'Current User',
	'SCRIPT' => 'PHP Script',
  ),
);

?>