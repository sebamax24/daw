<html>
    <head>
            <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo $this->asset; ?>css/admin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $this->asset; ?>fonts/style.css">          
    </head>
    <body>
      
         <div align="right" class="panel-body">
            <h1>Area Administrativa</h1>
             <button type="button" class="btn btn-default"><a href="<?php echo $this->base_url ?>adminoferta/addoferta">Agregar Oferta</a></button></div>
       
        <div id="main-container"> 
            <table id="table" width="75%" border="1" class="table-dark" id="table"> 
                   
                <thead>
                    
                       <tr id="preto">>
                            <th>&nbsp;&nbsp;&nbsp;ID</th>
                            <th>&nbsp;&nbsp;&nbsp;Oferta</th>
                            <th>&nbsp;&nbsp;&nbsp;Imagen de la oferta</th>
                            <th>&nbsp;&nbsp;&nbsp;ação</th>
                        </tr>
                    
                    </thead>
                
                    <tbody>
                                                                   <?php foreach($data['oferta'] as $joj):?>                            
                                <tr class="even"> 
                                    
                                   <td>&nbsp;&nbsp;&nbsp;<?php echo $joj->getId_oferta()?></td>
                                   <td>&nbsp;&nbsp;&nbsp;<?php echo $joj->getoferta()?></td>
                                   <td>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->base_url."view/templates/default/img/".$joj->getImg();?>" width="50%"></td>
                                
                                <td>
                                 <a  href="<?php echo $this->base_url ?>adminoferta/UpdateOferta/<?php echo $joj->getId_oferta() ?>"><i class='icon-pencil'></i></a>
                                 <a href="<?php echo $this->base_url ?>adminoferta/deletOferta/<?php echo $joj->getId_oferta() ?>"><i class='icon-trash'></i></a>
                                   
                                </td>  
                                </tr>
                        <?php endforeach;?>
                     
                    </tbody>
</table>
            </div>
    </body>
</html>