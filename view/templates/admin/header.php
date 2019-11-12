<html>
    <head>
            <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo $this->asset; ?>css/admin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $this->asset; ?>fonts/style.css">          
    </head>
    <body>
            <aside class="menu-sidebar d-none d-lg-block">
               
                    <div class="logo">
                        <a>
                            <h1 id="pa">Admin </h1>
                        </a>
                    </div>
                    <div>
                        <nav class="navbar-sidebar">
                            <ul id="pa" class="list-unstyled navbar__list">
                                    <li><a href="<?php echo $this->base_url; ?>admin" ><i class="icon-users"></i>&nbsp;Usuarios</a></li>
                               
                                <li>
                                    <a href="<?php echo $this->base_url; ?>adminoferta">
                                        <i class="icon-price-tag"></i>&nbsp;Ofertas</a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->base_url; ?>adminjuego">
                                        <i class="icon-game-controller"></i>&nbsp;Juegos</a>
                                </li>
                                <li>
                                        <a href="<?php echo $this->base_url; ?>Admin/logout">
                                            <i class="icon-log-out"></i>&nbsp;Logout</a>
                                    </li>
                                
                            </ul>
                        </nav>
                        <div class="page-container">
                </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
                        </div>
                    </div>
                </div>
            
         </aside>