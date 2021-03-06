<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tendoo_setup extends Tendoo_Controller {

	/**
	 * Registration Controller for Auth purpose
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/registration
	 *	- or -
	 * 		http://example.com/index.php/registration/index
	 */
	function __construct()
	{
		parent::__construct();
		
		$this->load->library( 'notice' );		
		$this->load->library( 'form_validation' ); // loading form_validation library
		
		Enqueue::enqueue_css( 'bootstrap.min' );
		Enqueue::enqueue_css( 'AdminLTE.min' );
		Enqueue::enqueue_css( 'skins/_all-skins.min' );
		
		/**
		 * 	Enqueueing Js
		**/
		
		Enqueue::enqueue_js( 'plugins/jQuery/jQuery-2.1.4.min' );
		Enqueue::enqueue_js( 'bootstrap.min' );
		Enqueue::enqueue_js( 'plugins/iCheck/icheck.min' );		
		Enqueue::enqueue_js( 'app.min' );
		
		Modules::load( MODULESPATH );
	}
	public function index()
	{
		// checks if tendoo is not installed
		if( $this->setup->is_installed() ): redirect( array( 'init?notice=is-installed' ) ); endif;
		
		// set title
		Html::set_title( sprintf( __( 'Welcome Page &mdash; %s' ) , get( 'core_signature' ) ) );
		// $this->load->model( 'tendoo_setup' );
		$this->load->view( 'shared/header' );
		$this->load->view( 'tendoo-setup/index' );
	}
	public function database()
	{
		// checks if tendoo is not installed
		if( $this->setup->is_installed() ): redirect( array( 'init' ) ); endif;
				
		$this->form_validation->set_rules( 'host_name' , __( 'Host Name' ), 'required' );
		$this->form_validation->set_rules( 'user_name' , __( 'User Name' ), 'required' );
		$this->form_validation->set_rules( 'database_name' , __( 'Database Name' ), 'required' );
		$this->form_validation->set_rules( 'database_driver' , __( 'Database Driver' ), 'required' );
		$this->form_validation->set_rules( 'database_prefix' , __( 'Database Prefix' ), 'required' );

		if( $this->form_validation->run() )
		{
			$exec	=	$this->setup->installation( 
				$this->input->post( 'host_name' ) , 
				$this->input->post( 'user_name' ) , 
				$this->input->post( 'user_password' ) , 
				$this->input->post( 'database_name' ) , 
				$this->input->post( 'database_driver' ) ,
				$this->input->post( 'database_prefix' )
			);
			if( $exec == 'database-installed' )
			{
				redirect( array( 'tendoo-setup' , 'site?notice=' . $exec ) );
			}
			$this->notice->push_notice( $this->lang->line( $exec ) );
		}
		
		Html::set_title( sprintf( __( 'Database config &mdash; %s' ) , get( 'core_signature' ) ) );
		// $this->load->model( 'tendoo_setup' );
		$this->load->view( 'shared/header' );
		$this->load->view( 'tendoo-setup/database' );
	}
	public function site()
	{
		// checks if tendoo is not installed
		if( ! $this->setup->is_installed() ): redirect( array( 'tendoo-setup' ) ); endif;
		
		// load database
		$this->load->database();
		
		$this->events->do_action( 'tendoo_setup' );
		
		// checks if master doesn't exists
		// if( $this->users->master_exists() ): redirect( array( 'login?notice=access-denied' ) ); endif;		
				
		$this->form_validation->set_rules( 'site_name' , __( 'Site Name' ), 'required' );

		if( $this->form_validation->run() )
		{
			$exec	=	$this->setup->final_configuration( 
				$this->input->post( 'site_name' ) 
			);
			if( $exec == 'tendoo-installed' )
			{
				redirect( array( 'sign-in?redirect=dashboard/index&notice=' . $exec  ) );
			}
			$this->notice->push_notice( $this->lang->line( $exec ) );
		}		
		
		// Outputing
		Html::set_title( sprintf( __( 'Site & Master account &mdash; %s' ) , get( 'core_signature' ) ) );
		$this->load->view( 'shared/header' );
		$this->load->view( 'tendoo-setup/site' );
	}
}
