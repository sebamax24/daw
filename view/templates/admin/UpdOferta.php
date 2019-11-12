<?php $joj = $data['oferta'];?>
<html>
    <head>
            <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo $this->asset; ?>css/admin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $this->asset; ?>fonts/style.css">          
    </head>
    <body>
            
        
         <div style="width:30%">
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Administrar Oferta</h1>
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Actualizar Oferta
                                </div>
                                <div class="panel-body">                    
                                    <form method="post" role="form" enctype="multipart/form-data"> 
                                        <div class="form-group">
                                            <label for="title"> Oferta</label>
                                            <input id="title" class="form-control" type="text" name="oferta" value="<?php echo $joj->getOferta();?>">
                                            <p class="help-block">Informe um nome para a oferta</p>
                                        </div>
                                        
										<div class="form-group">
                                            <img src="<?php echo $this->base_url."view/templates/default/img/".$joj->getImg();?>" width="50%"><br>
                                            <label for="img"> Imagem</label>
                                        <input type="hidden" name='img_old' value="<?php echo $joj->getImg()?>">
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="9999999">

                                            <input type="file" name="img">
                                            <p class="help-block">Informe uma imagem para a oferta</p>
                                        </div> 
                                           
                                        <input type="submit" class="btn btn-default" value="Atualizar" name="upd">
                                        <input type="reset" class="btn btn-default" value="Limpar">
                                    </form>
                                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
            </body>
</html>