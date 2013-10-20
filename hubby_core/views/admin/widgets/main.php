<div id="body">
    <div class="page secondary with-sidebar">
        <div class="page-header">
            <div class="page-header-content">
                <h1>Gestionnaire des widgets<small></small></h1>
            <a class="back-button big page-back" href="<?php echo $this->core->url->site_url(array('admin','menu'));?>"></a></div>
        </div>
        <?php echo $lmenu;?>          
        <div class="page-region">
            <div class="page-region-content">
                <div class="body-text">
                    <h2>Liste des widgets install&eacute;s</h2>
                    <div>
                        <?php echo validation_errors('<p class="error">', '</p>');?>
                        <?php $this->core->notice->parse_notice();?>
                        <?php echo notice_from_url();?>
                    </div>
                    <br />
                	<table class="hub_table bordered">
                        <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Auteur</td>
                                <td>Description</td>
                                <td>Etat</td>
                                <td>Action</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        if(isset($widgets))
                        {
                            if(count($widgets) > 0)
                            {
                                foreach($widgets as $t)
                                {
                                    if(in_array($t['ACTIVE'],array('FALSE','')))
                                    {
                                        $t['ACTIVATED']	= 'Inactif';
                                    }
                                    else if($t['ACTIVE']	==	 'TRUE')
                                    {
                                        $t['ACTIVATED']	=	'Activ&eacute;';
                                    }
                                ?>
                            <tr>
                                <td class="action"><a class="view" href="<?php echo $this->core->url->site_url(array('admin','open','widgets',$t['ID']));?>"><?php echo $t['HUMAN_NAME'];?></a></td>
                                <td><?php echo $t['AUTHOR'];?></td>
                                <td><?php echo $t['DESCRIPTION'];?></td>
                                <td><?php echo $t['ACTIVATED'];?></td>
                                <td class="action"><a href="<?php echo $this->core->url->site_url(array('admin','widgets','delete',$t['ID']));?>" class="delete" onclick="if(!confirm('Voulez vous supprimer ce widget ?')) return false;">Supprimer</a></td>
                                <td class="action"><a href="<?php echo $this->core->url->site_url(array('admin','widgets','more',$t['ID']));?>" class="delete">R&eacute;glages Avanc&eacute;es</a></td>
                            </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                            <tr>
                                <td colspan="6">Aucun widgets n'est install&eacute;.</td>
                            </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>