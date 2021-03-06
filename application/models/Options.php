<?php
class Options extends CI_Model
{
	/**
	 * Set option
	 *
	 * Save quickly option to database
	 * 
	 * @access : public
	 * @param : string
	 * @param : vars
	 * @param : int user_id
	 * @param : string script context ([app_namespace]/[app_type]), example : 'blogster/module' , 'avera/theme'
	 * @return : void
	**/
	
	function set( $key , $value , $autoload = false , $user = 0 , $app = 'system' )
	{
		// get option if exists
		if( $key != null )
		{
			$this->db->where( 'key' , $key );
		}
		if( $user != 0 )
		{
			$this->db->where( 'user' , $user );
		}
		
		$query		=	$this->db->get( 'options' );			
		$options	=	$query->result_array();
		$value		=	is_array( $value ) ? json_encode( $value ) : $value; // converting array to JSON
		$value		=	is_bool( $value ) ? $value === true ? 'true' : 'false' : $value; // Converting Bool to string
		if( $options )
		{
			$this->db->where( 'key' , $key );
			
			if( $user != 0 )
			{
				$this->db->where( 'user' , $user );
			}
			$this->db->update( 'options' , array(
				'key'		=>	$key,
				'value'		=>	$value,
				'autoload'	=>	$autoload,
				'user'		=>	$user,
				'app'		=>	$app
			) );
		}
		else
		{
			$this->db->insert( 'options' , array( 
				'key'	=>	$key,
				'value'	=>	$value,
				'autoload'	=>	$autoload,
				'user'		=>	$user,
				'app'		=>	$app
			) );
		}
	}
	
	/**
	 * Get option
	 * 
	 * Get option from database
	 *
	 * @access : public
	 * @param : string
	 * @param : int user id
	 * @return : var (can return null if key is not set)
	**/
	
	function get( $key = null, $user_id = NULL , $autoload = false )
	{
		// get only data from user
		if( $user_id !== NULL ): $this->db->where( 'user' , $user_id ); endif;
		
		if( $key !== NULL )
		{
			$this->db->where( 'key' , $key );
		}
		if( $autoload == true )
		{
			$this->db->where( 'autoload' , true );
		}
		// fetch data
		$query		=	$this->db->get( 'options' );
		$option	=	$query->result_array();
		
		// if there is any result
		if( $key != null )
		{
			if( $option	)
			{
				$value	=	riake( 'value' , farray( $option ) );
				$value		=	is_array( $array	=	json_decode( $value , true ) ) ? $array : $value; // converting array to JSON
				$value		=	in_array( $value , array( 'true' , 'false' ) ) ? $value === 'true' ? true : false : $value; // Converting Bool to string
				return $value;
			}
		}
		else
		{
			$key_value		=	array();
			foreach( $option as $_option )
			{
				$value		=	riake( 'value' , $_option );
				$value		=	is_array( $array	=	json_decode( $value , true ) ) ? $array : $value; // converting array to JSON
				$value		=	in_array( $value , array( 'true' , 'false' ) ) ? $value === 'true' ? true : false : $value; // Converting Bool to string

				$key_value[ riake( 'key' , $_option ) ] = $value;
			}
			return $key_value;
		}
		return NULL;
	}
	
	/**
	 * Delete Option
	 *
	 * @access : public
	 * @params : string
	 * @params : int users id
	 * @return : bool
	**/
	
	function delete( $key = NULL , $user_id = NULL , $app = 'system' )
	{
		// Each options can't be deleted
		if( $key == null && $app == 'system' && $user_id == null )
		{
			return false;
		}
		
		// get only data from user
		if( $user_id != NULL ): $this->db->where( 'user' , $user_id ); endif;
		
		// filter app option
		$this->db->where( 'app' , $app );		
		
		if( $key != null )
		{
			$this->db->where( 'key' , $key );
		}
		// fetch data
		return $this->db->delete( 'options' );
	}
}