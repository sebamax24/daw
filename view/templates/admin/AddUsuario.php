
         <div style="width:30%">
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Administrar Usuario</h1>
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Cadastrar Usuario
                                </div>
                                <div class="panel-body">                    
                                    <form method="post" role="form" enctype="multipart/form-data"> 
                                        <div class="form-group">
                                            <label for="title"> Login</label>
                                            <input id="title" class="form-control" type="text" name="login" placeholder="Informe um nome para o usuario">
                                            <p class="help-block">Informe um nome para o usuario</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="text"> Senha</label>
                                            <textarea id="text" class="form-control" name="senha" placeholder="Informe uma senha para o usuario"></textarea>
                                            <p class="help-block">Informe uma senha para o usuario</p>
                                        </div> 
										<div class="form-group">
                                            <label for="text"> Tipo</label>
                                            <textarea id="text" class="form-control" name="tipo" placeholder="Informe um tipo para o usuario"></textarea>
                                            <p class="help-block">Informe um tipo de usuario</p>
                                        </div> 
                                        <div class="form-group">
                                            <label for="img"> Imagem</label>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="9999999">

                                            <input type="file" name="img">
                                            <p class="help-block">Informe uma imagem para o usuario</p>
                                        </div> 
                                           
                                        <input type="submit" class="btn btn-default" value="Cadastrar" name="add"> 
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