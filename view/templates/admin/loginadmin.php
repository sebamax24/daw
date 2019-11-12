
<html>
    <head>
            <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo $this->asset; ?>css/login.css">
    </head>
    <body>
        <header>
            <nav id="menu">
                <ul>
                    <li id="sla"><a href="<?php echo $this->base_url; ?>index">Inicio</a></li>
                </ul>
            </nav>
        </header>
        <section id="bajaeso">
        <div class="container" >
            <a class="links" id="paralogin"></a>
            <div class="content">      
                <div id="login">
                    <form method="post"> 
                    <h1>Login Administrador</h1> 
                                        <p> 
                        <label for="login">Seu login</label>
                        <input id="" name="login" type="text" placeholder="login"/>
                    </p>

                    <p> 
                        <label for="senha">Sua senha</label>
                        <input id="senha" name="senha" type="password" placeholder="EJEMPLO" /> 
                    </p>
                    <p> 
                        <input type="checkbox" name="admin" id="admin" value="" /> 
                        <label for="admin">Administrador</label>
                    </p>
                        <p> 
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                        <label for="manterlogado">Manter-me logado</label>
                    </p>
                    <p> 
                        <input type="submit" value="Logar" name="logar"/> 
                    
                    </p>
                    <p class="link">
                        Te equivocaste?
                        <a href="<?php echo $this->base_url; ?>login">Volver</a>
                    </p>
                    </form>
                </div>
            </div> 
        </div>
        </section>
    </body>
</html>