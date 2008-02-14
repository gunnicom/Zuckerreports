<?php
$dictionary['ReportParameter'] = array(
	'table' => 'zucker_reportparameters',
	'fields' => array (
		'id' => array (
			'name' => 'id',
			'vname' => 'LBL_PARAM_ID',
			'required' => true,
			'type' => 'id',
			'reportable'=>false,
			'name' => 'id',
			'type' => 'id',
		),
        'deleted' =>
                array (
                        'name' => 'deleted',
                        'vname' => 'LBL_DELETED',
                        'type' => 'bool',
                        'required' => true,
                        'reportable'=>false,
                        'default' => '0',
                        'Importable' => false
                ),
		'date_entered' => array(
			'name' => 'date_entered',
			'vname' => 'LBL_DATE_ENTERED',
			'type' => 'datetime',
			'required' => true,
		),
		'date_modified' => array(
			'name' => 'date_modified',
			'vname' => 'LBL_DATE_MODIFIED',
			'type' => 'datetime',
			'required' => true,
		),
		'modified_user_id' => array(
			'name' => 'modified_user_id',
			'rname' => 'user_name',
			'id_name' => 'modified_user_id',
			'vname' => 'LBL_MODIFIED_USER_ID',
			'type' => 'assigned_user_name',
			'table' => 'users',
			'isnull' => 'false',
			'dbType' => 'id',
			'reportable'=>true,
		),
		'created_by' => array(
			'name' => 'created_by',
			'rname' => 'user_name',
			'id_name' => 'modified_user_id',
			'vname' => 'LBL_CREATED_BY',
			'type' => 'assigned_user_name',
			'table' => 'users',
			'isnull' => 'false',
			'dbType' => 'id',
			'reportable'=>true,
		),


		'friendly_name' => array (
			'name' => 'friendly_name',
			'vname' => 'LBL_PARAM_FRIENDLYNAME',
			'required' => true,
			'type' => 'varchar',
			'len' => 255,
			),
		'default_name' => array (
			'name' => 'default_name',
			'vname' => 'LBL_PARAM_DEFAULTNAME',
			'required' => true,
			'type' => 'varchar',
			'len' => 255,
			),
		'default_value' => array (
			'name' => 'default_value',
			'vname' => 'LBL_PARAM_DEFAULTVALUE',
			'required' => false,
			'type' => 'varchar',
			'len' => 255,
			),
		'range' => array (
			'name' => 'range',
			'vname' => 'LBL_PARAM_RANGE',
			'required' => true,
			'type' => 'varchar',
			'len' => 255,
			),
		'range_options' => array (
			'name' => 'range_options',
			'vname' => 'LBL_PARAM_RANGE_OPTIONS',
			'required' => false,
			'type' => 'varchar',
			'len' => 255,
			),
			
		'description' => array (
			'name' => 'description',
			'vname' => 'LBL_PARAM_DESCRIPTION',
			'required' => false,
			'type' => 'text',
			),
		'range_description' => array (
			'name' => 'range_description',
			'type' => 'varchar',
			'source' => 'non-db',
			),
		),

	'indices' => array(
		array(
			'name' =>'zucker_reportparameter_primary_key_index',
			'type' =>'primary',
			'fields'=>array('id')
		),
	),


);

?>
