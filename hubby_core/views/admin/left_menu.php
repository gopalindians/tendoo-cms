<div class="page-sidebar">
	<?php echo $this->core->hubby_admin->parseMenuBefore();?>
    <ul>
        <li class="sticker sticker-color-red" data-role="dropdown">
        	<a>Gestionnaire de pages</a>
            <ul class="sub-menu light sub-menu">
            	<li>
                	<a href="<?php echo $this->core->url->site_url('admin/pages');?>">Liste des pages</a>
				</li>
                <li>
                    <a href="<?php echo $this->core->url->site_url('admin/pages/create');?>">Cr&eacute;er une page</a>
                </li>
			</ul>    
		</li>
        <li class="sticker sticker-color-green">
			<a href="<?php echo $this->core->url->site_url('admin/installer');?>">Installer une application</a>
		</li>
        <li class="sticker sticker-color-blue">
			<a href="<?php echo $this->core->url->site_url('admin/modules');?>">Liste des modules</a>
		</li>
        <li class="sticker sticker-color-yellow">
			<a href="<?php echo $this->core->url->site_url('admin/themes');?>">Liste des th&egrave;mes</a>
		</li>
        <li class="sticker sticker-color-pinkDark">
			<a href="<?php echo $this->core->url->site_url('admin/setting');?>">Param&egrave;tres et configurations</a>
		</li>
        <li class="sticker sticker-color-darken">
			<a href="<?php echo $this->core->url->site_url('admin/system');?>">Syst&egrave;me</a>
		</li>
        <li class="sticker sticker-color-greenDark">
			<a href="<?php echo $this->core->url->site_url('index');?>">Retourner au site</a>
		</li>
    </ul>
    <?php echo $this->core->hubby_admin->parseMenuAfter();?>
</div>  