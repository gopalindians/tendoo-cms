<?php
/**
 * 	File Name 	: 	body.php
 *	Description :	header file for each admin page. include <html> tag and ends at </head> closing tag
 *	Since		:	1.4
**/

$this->gui->col_width( 1 , 4 );

$this->gui->add_meta( array(
	'col_id'		=>	1,
	'title'		=>	__( 'Add new extension using ZIP file' ),
	'type'		=>	'box',
	'namespace'	=>	'installer_box',
	'footer'	=>	array(
		'submit'	=>	array(
			'label'	=>	__( 'Add the extension' )
		)
	),
	'custom'	=>	array(
		'action'	=>	''
	),
	'gui_saver'	=>	true
) );

$this->gui->add_item( array(
	'type'		=>	'file-input',
	'label'		=>	__( 'Choose the extension zip file' ),
	'name'		=>	'extension_zip'
) , 'installer_box' , 1 );



$this->gui->output();