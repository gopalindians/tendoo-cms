<div id="body">
    <div class="page secondary with-sidebar">
        <div class="page-header">
            <div class="page-header-content">
                <h1>Gestionnaire des widgets<small></small></h1>
            <a class="back-button big page-back" href="<?php echo $this->core->url->site_url(array('admin','widgets','main'));?>"></a></div>
        </div>
        <?php echo $lmenu;?>          
        <div class="page-region">
            <div class="page-region-content">
                <div class="body-text">
                    <h2>Param&ecirc;tres avanc&eacute;s</h2>
                    <div>
                        <?php echo validation_errors('<p class="error">', '</p>');?>
                        <?php $this->core->notice->parse_notice();?>
                        <?php echo notice_from_url();?>
                    </div>
                    <br />
                    <div class="grid">
                    	<div class="row">
                            <div class="span4">
                                <form method="post">
                                	<div class="padding10 bg-color-greenLight">
                                        <div class="input-control text">
                                            <h3 class="fg-color-white">Activer le widget</h3>
                                            <select name="widget_active">
                                                <option value="">Etat du widget</option>
                                                <option value="TRUE">Activer le widget</option>
                                                <option value="FALSE">D&eacute;sactiver le widget</option>
                                            </select>
                                        </div>
                                        <input type="submit" value="Enregistrer" />
                                        <input type="hidden" name="widget_id" value="<?php echo $wid;?>" />
									</div>
                                </form>
                                <br />
                                <form method="post">
                                    <div class="padding10 bg-color-blueDark fg-color-white">
                                        <div class="input-control text">
                                        	<h3 class="fg-color-white">Disponibilit&eacute; du widget sur la page</h3>
                                            <br />
                                            <p>Sur le flanc gauche<input type="checkbox" name="left_page" /></p>
                                            <p>Au pied de la page<input type="checkbox" name="left_page" /></p>
                                            <input type="submit" value="Enregistrer" class="bg-color-red" />
                                        </div>
                                    </div>
                                </form>
                                <br />
                                <form method="post">
                                    <div class="padding10 bg-color-teal fg-color-white">
                                        <div class="input-control text">
                                        	<h3 class="fg-color-white">Priorit&eacute; sur les autres widgets</h3>
                                            <br />
                                            <div class="input-control text">
                                            <select name="widget_name">
                                                <option value="">Choisir la priorit&eacute;</option>
                                                <option value="TRUE">1</option>
                                                <option value="FALSE">2</option>
                                            </select> 
                                            </div>
                                            <input type="submit" value="Enregistrer" class="bg-color-purple" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="span8">
                            	<div class="padding10 bg-color-greenLight fg-color-white" style="height:138px;">
                                	<p>Rendre un widget acc&eacute;sible c&ocirc;t&eacute; utilisateur.</p>
                                </div>
                                <br />
                            	<div class="padding10 bg-color-blueDark fg-color-white" style="height:206px;">
                                	<p>Emplacements sur la page o&ugrave; seront disponible le widget.</p>
                                </div>
                                <br />
                            	<div class="padding10 bg-color-teal fg-color-white" style="height:166px;">
                                	<p>D&eacute;finir la priorit&eacute; permet &agrave; un widget de s'ex&eacute;cuter avant les autres widgets. Cette priorit&eacute; s'applique sur tous les emplacements de la page.</p>
                                </div>
                            </div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>