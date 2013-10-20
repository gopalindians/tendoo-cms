<div id="body">
    <div class="page secondary with-sidebar">
        <div class="page-header">
            <div class="page-header-content">
                <h1>Administration<small></small></h1>
            <a class="back-button big page-back" href="<?php echo $this->core->url->site_url(array('admin','menu'));?>"></a></div>
        </div>
        <?php echo $lmenu;?>          
        <div class="page-region">
            <div class="page-region-content">
                <div class="body-text">
                    <?php
                    if($options[0]['SHOW_WELCOME'] == 'TRUE')
                    {
                    ?>
                    <p><h2>Bienvenue sur <strong><?php echo $this->core->hubby->getVersion();?></strong>, votre outil de gestion de site web. </h2></p><br /><p style="font-size:15px;line-height:25px;">Faites vos Premiers pas en tant que <a href="#">développeurs</a> ou en tant que <a href="#">simple utilisateur</a>, vous y trouverez un manuel adapt&eacute; &agrave; vos demandes. Si c'est votre premiere connexion, vous pouvez modifier les <a href="<?php echo $this->core->url->site_url('admin/setting');?>">param&ecirc;tres</a> de votre site web</p>
                    <p><h2>Aperçu des fonctionnalit&eacute;s</h2></p>
                    <p style="font-size:15px;line-height:25px;">
                        Hubby vous permet de rapidement cr&eacute;er votre site web, sans avoir n&eacute;cessairement besoin d'un expert. La cr&eacute;ation et la gestion d'un site web ne pourra pas &ecirc;tre plus facile. Si vous d&eacute;butez, <a href="#">vous devez savoir ceci</a>, cependant si vous &ecirc;tes un habitu&eacute; de CMS, ce petit aperçu vous sera utile.
                    </p>
                    <?php
                    }
                    ?>
                    <br />
 <?php
if(is_array($adminWidgets) && count($adminWidgets) > 0)
{
    foreach($adminWidgets as $a)
    {
        ?>
        <div class="span3 bg-color-pinkDark" style="float:left;">
            <div class="padding10">
        <?php
        echo $a->parseCode();
        ?>
            </div>
        </div>
        <?php
    }
}
else
{
    ?>
    <div class="grid">
    	<div class="row">
            <div class="span12 bg-color-greenDark fg-color-white">
                <div class="padding10">
                    <h2 class="fg-color-white">Aucun widget n'est activ&eacute;</h2>
                    <p style="font-size:15px;line-height:25px;">Actuellement aucun widget administrateur n'est activ&eacute;, vous pouvez modifier les widgets disponibles depuis <a style="color:#F90;" href="<?php echo $this->core->url->site_url(array('admin','setting'));?>">les param&ecirc;tres</a> du site.</p>
                </div>
            </div>
		</div>
	</div>
    <?php
}
?>
                </div>
            </div>
        </div>
    </div>
</div>