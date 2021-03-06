<?php
/**
 * 	File Name 	: 	body.php
 *	Description :	settings option page for dashboard
 *	Since		:	1.5
**/

/************************************************************************
 ********************** 	GENERAL SETTINGS   **************************
*************************************************************************/

$this->gui->col_width( 1 , 2 );

$this->gui->add_meta( array(
	'type'		=>	'box-primary',
	'title'		=>	__( 'General Settings' ),
	'namespace'	=>	'general-settings',
	'col_id'	=>	1, // required,
	'gui_saver'	=>	true, // use tendoo option saver
	'footer'	=>	array(
		'submit'	=>	array(
			'label'	=>	__( 'Save Settings' )
		)
	),
	'use_namespace'	=>	false
) );

$this->gui->add_item( array(
	'type'		=>	'text',
	'name'		=>	'site_name',
	'label'		=>	__( 'Site Name' ),
	'placeholder'	=>	__( 'Enter your site name' )
) , 'general-settings' , 1 );

$this->gui->add_item( array(
	'type'		=>	'textarea',
	'name'		=>	'site_description',
	'label'		=>	__( 'Site Description' ),
	'placeholder'	=>	__( 'Enter your site description' )
) , 'general-settings' , 1 );

$this->gui->add_item( array(
	'type'			=>	'select',
	'name'			=>	'site_timezone',
	'label'			=>	__( 'Timezone' ),
	'placeholder'	=>	__( 'Enter your site timezone' ),
	'options'		=>	$this->config->item( 'site_timezone' )
) , 'general-settings' , 1 );

$this->events->do_action( 'register_general_settings_fields' );

/************************************************************************
 ********************** 	Advanced Settings   **************************
*************************************************************************/

$this->gui->col_width( 2 , 2 );

$this->gui->add_meta( array(
	'type'		=>	'box-primary',
	'title'		=>	__( 'Advanced Settings' ),
	'namespace'	=>	'advanced-settings',
	'col_id'	=>	2, // required,
	'gui_saver'	=>	true, // use tendoo option saver
	'footer'	=>	array(
		'submit'	=>	array(
			'label'	=>	__( 'Save Advanced' )
		),
	),
	'use_namespace'	=>	false
) );

$this->gui->add_item( array(
	'type'		=>	'select',
	'name'		=>	'site-registration',
	'label'		=>	__( 'Open registration' ),
	'placeholder'=>	__( 'Open Registration ?' ),
	'options'	=>	array(
		'false'	=>	__( 'No' ),
		'true'	=>	__( 'Yes' )
	)
) , 'advanced-settings' , 2 );

$this->gui->add_item( array(
	'type'		=>	'select',
	'name'		=>	'allow-role-selection',
	'label'		=>	__( 'Allow Role Selection' ),
	'placeholder'=>	__( 'Allow Role selection' ),
	'options'	=>	array(
		'false'	=>	__( 'No' ),
		'true'	=>	__( 'Yes' )
	)
) , 'advanced-settings' , 2 );

$this->gui->add_item( array(
	'type'		=>	'select',
	'name'		=>	'auto-update',
	'label'		=>	__( 'Auto update tendoo' ),
	'placeholder'=>	__( 'Auto update tendoo' ),
	'options'	=>	array(
		'false'	=>	__( 'No' ),
		'true'	=>	__( 'Yes' )
	)
) , 'advanced-settings' , 2 );

$this->gui->add_item( array(
	'type'		=>	'select',
	'name'		=>	'remote-install',
	'label'		=>	__( 'Enable Remote Themes and Module Installation' ),
	'placeholder'=>	__( 'Enable Remote Themes and Module Installation' ),
	'options'	=>	array(
		'false'	=>	__( 'No' ),
		'true'	=>	__( 'Yes' )
	)
) , 'advanced-settings' , 2 );

$this->gui->add_item( array(
	'type'		=>	'select',
	'name'		=>	'enable-cache',
	'label'		=>	__( 'Enable Cache' ),
	'placeholder'=>	__( 'Enable Cache' ),
	'options'	=>	array(
		'false'	=>	__( 'No' ),
		'true'	=>	__( 'Yes' )
	)
) , 'advanced-settings' , 2 );

$this->gui->output();