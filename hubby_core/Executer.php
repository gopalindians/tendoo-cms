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
	// Chargement du widget pour ce module chargé var_dump($Class);
	$this->load->library('users_global');
	$this->data['widget']			=		$this->hubby->getSpeWidget($Class,TRUE);
	if(is_array($this->data['widget']))
	{
		foreach($this->data['widget'] as $w)
		{
			if(is_dir('hubby_widgets/'.$w['ENCRYPTED_DIR'])) /// VERIFICATION DU DOSSIER CRYPTE
			{
				if(!array_key_exists('theme',$this->data))
				{
					$this->url->redirect(array('error','code','themeTrashed'));
					return false;
				}
				$theme			=	$this->data['theme'];
				$WIDIR			=	WIDGETS_DIR.$w['ENCRYPTED_DIR'].'/';
				include_once('hubby_widgets/'.$w['ENCRYPTED_DIR'].'/module_controller.php');
			}
		}
	}
	// Fin du chargement du widget
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