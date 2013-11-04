<?php
if(class_exists($Class))
{
	if($this->hubby->interpreter($Class,$Method,$Parameters) === '404')
	{
		$this->hubby->error('page404');
	}
}
else if(class_exists($Class.'_module_controller'))
{
	$this->load->library('users_global');
	if(!array_key_exists('theme',$this->data))
	{
		$this->url->redirect(array('error','code','themeTrashed'));
		return false;
	}
	$theme			=	$this->data['theme']; // Added - Hubby 0.9.2
	
	if($this->hubby->interpreter($Class.'_module_controller',$Method,$Parameters,$this->data) === '404')
	{
		$this->hubby->error('page404');
	}
}
else if(class_exists('hubby_'.$Class))
{
	if($this->hubby->interpreter('hubby_'.$Class,$Method,$Parameters) === '404')
	{
		$this->hubby->error('page404');
	}
}
else
{
	echo 'PAGE404 -- EXECUTER.php';
}