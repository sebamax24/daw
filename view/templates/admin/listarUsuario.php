
         <div align="right" class="panel-body">
            <h1>Area Administrativa</h1><button type="button" class="btn btn-default"><a href="<?php echo $this->base_url ?>admin/addUsuario">Agregar Usuario</a></button></div>
       
        <div id="main-container"> 
            <table id="table" width="75%" border="1" class="table-dark" id="table"> 
                   
                <thead>
                    
                        <tr id="preto">>
                            <th>&nbsp;&nbsp;&nbsp;ID</th>
                            <th>&nbsp;&nbsp;&nbsp;nome e formato</th>
                            <th>&nbsp;&nbsp;&nbsp;Imagem</th>
                            <th>&nbsp;&nbsp;&nbsp;ação</th>
                        </tr>
                    
                    </thead>
                
                    <tbody>
                                                           
                                                                 <?php foreach($data['usuario_jorge'] as $joj):?>                            
                                <tr class="even"> 
                                    
                                   <td>&nbsp;&nbsp;&nbsp;<?php echo $joj->getId_user()?></td>
                                   <td>&nbsp;&nbsp;&nbsp;<?php echo $joj->getLogin()?></td>
                                   <td>&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->base_url."view/templates/default/img/".$joj->getImg();?>" width="25%"></td>
                                
                                
                                <td  >
                                   
                                <a  href="<?php echo $this->base_url ?>admin/UpdateUsuario/<?php echo $joj->getId_user() ?>"><i class='icon-pencil'></i></a>
                                 <a href="<?php echo $this->base_url ?>admin/deletUsuario/<?php echo $joj->getId_user() ?>"><i class='icon-trash'></i></a>
                                   
                                </td>  
                                </tr>
                                                 <?php endforeach;?>

                    </tbody>
</table>
            </div>
    </body>
</html>