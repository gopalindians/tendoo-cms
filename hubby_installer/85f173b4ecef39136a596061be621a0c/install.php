<?php
$this->installSession();
$this->appType('THEME');
$this->appVers(0.1);
$this->appHubbyVers(0.9);
$this->appTableField(array(
	'NAMESPACE'		=> 'hubby_modus',
	'HUMAN_NAME'	=> 'Hubby - Modus',
	'AUTHOR'		=> 'Hubby Group',
	'DESCRIPTION'	=> 'Un thème fait par adapt&eacute; par l\'equipe Hubby. Ce th&egrave;me provient du template r&eacute;alis&eacute; par Luizuno disponible sur luizuno.com',
	'HUBBY_VERS'	=> 0.9
));
$this->appSql("
'CREATE TABlE IF NOT EXISTS `hubby_theme_modus_table` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TWITTER_ACCOUNT` varchar(200) NOT NULL,
  `FACEBOOK_ACCOUNT` varchar(200) NOT NULL,
  `GOOGLEPLUS_ACCOUNT` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
);';");
