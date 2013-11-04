<div id="body">
    <div class="page secondary with-sidebar">
        <div class="page-header">
            <div class="page-header-content">
                <h1>Gestionnaire des modules<small></small></h1>
            <a class="back-button big page-back" href="<?php echo $this->core->url->site_url(array('admin','menu'));?>"></a></div>
        </div>
        <?php echo $lmenu;?>          
        <div class="page-region">
            <div class="page-region-content">
            	<h2>Liste des modules install&eacute;s</h2>
				<?php echo $this->core->notice->parse_notice();?>
                <?php echo $success;?>
                <table class="bordered striped">
                	<thead>
                        <tr class="info">
                            <td>Nom</td>
                            <td>Description</td>
                            <td>Auteur</td>
                            <td>Actif</td>
                            <td>Type</td>
                            <td>Action</td>
                        </tr>
					</thead>
                    <tbody>
                    <?php 
                if($mod_nbr > 0)
                {
                    foreach($modules as $mod)
                    {
                        ?>
                    <tr>
                        <td class="action"><a class="view" href="<?php echo $this->core->url->site_url(array('admin','open','modules',$mod['ID']));?>"><?php echo $mod['HUMAN_NAME'];?></a></td>
                        <td><?php echo $mod['DESCRIPTION'];?></td>
                        <td><?php echo $mod['AUTHOR'];?></td>
                        <td><?php echo ($mod['ACTIVE'] == 'TRUE') ? 'Oui' : 'Non';?></td>
                        <td><?php echo ($mod['TYPE'] == 'GLOBAL') ? 'Globale' : 'Unique';?></td>
                        <td class="action"><a class="delete" href="<?php echo $this->core->url->site_url(array('admin','uninstall','module',$mod['ID']));?>">Desinstaller</a></td>
                    </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <tr>
                        <td colspan="6">Aucun module install&eacute;</td>
                    </tr>
                    <?php
                }
            ?>
            		</tbody>
                </table>
            </div>
        </div>
    </div>
</div>