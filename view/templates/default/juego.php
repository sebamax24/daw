<?php $joj = $data['juegosus'];?>
<html>
<head>
    <meta charset="UTF-8">
<style>

</style>
<link rel="stylesheet" href="<?php echo $this->asset; ?>css/css.css">
<link rel="stylesheet" href="<?php echo $this->asset; ?>css/juegos.css">
<link rel="stylesheet" href="<?php echo $this->asset; ?>fonts/style.css">
</head>
<body>
    <header>
        <nav id="menu">
            <ul>
               <li><a href="<?php echo $this->base_url ?>index">Inicio</a></li>
                <li><a href=”#”>Ofertas Semanales</a></li>
				<li id="ini"><a href="<?php echo $this->base_url ?>Admin">Iniciar Sesión</a></li>
				<li> <a href="<?php echo $this->base_url ?>carrito"><i class='icon-shopping-cart'></i></a></li>
                <li><a href=>Cadastrarse</a></li>
				<form action="" class="search">
	<input id="submit" value="" type="submit">
	<label for="submit" class="submit"></label>
	
	
	<a href="javascript: void(0)" class="icon"></a>
	<input type="search" name="Search" id="search" placeholder="Search">
</form>
			</ul>
        </nav>
    </header>
    <section id="titulooo">
    <h2 class="pdp__title" style="direction:ltr"><?php echo $joj->getNombre();?></h2>
    <div class="provider-info">
        <h5 class="provider-info__text" style="direction:ltr">Capcom U.S.A., Inc.</h5>
      <h5 class="provider-info__text">
          <span class="provider-info__list-item" style="direction:ltr">Jogo completo</span>
          <span class="provider-info__list-item">Lançamento 25 jan 2019</span>
            <span class="provider-info__list-item">
            
                <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                
                  <div class="provider-info__rating">
              </div>
              <div class="provider-info__rating">
              <div class="provider-info__rating-count">
                6497 Classificações
              </div>
                </div>
            </span>
      </h5>
      <hr>
      <p>&nbsp;</p>
     


    </div>
  </section>
    <div id="fondo">
        /*
    <section class="slider">
      <div class="w3-content w3-display-container" style="max-width:800px">
          <img class="mySlides w3-animate-right" width="135%" height="400px" src="<?php echo $this->asset; ?>assets/re1.jpg">
          <img class="mySlides w3-animate-right" width="135%" height="400px" src="<?php echo $this->asset; ?>assets/re2.jpg">
          <img class="mySlides w3-animate-right" width="135%" height="400px" src="<?php echo $this->asset; ?>assets/re3.jpg">
          <img class="mySlides w3-animate-right" width="135%" height="400px" src="<?php echo $this->asset; ?>assets/re4.jpg">
   
     
  //  </div>
  
          
         
      </section>

    <section id="juego">
        
    <div class="large-3">
            <div class="pdp__thumbnail-img">
            <div>
                <img src="<?php echo $this->base_url."view/templates/default/img/".$joj->getImg();?>" width="240" height="240" >
                  </div>
                  
                  <div class="product-image__discount-badge">
                    <div id="ember932" class="__shared-presentation__discount-badge__224d5 ember-view"></div>
                  </div>
                  </div>
                        </div>
                        <div class="sku-info">
                          <div class="sku-info__price-display">
                            <div id="ember937" class="__shared-presentation__price-display__900cc __shared-presentation__price-display__900cc--full-size ember-view"><!---->    <h3 class="price-display__price">R$<?php echo $joj->getPrecio();?></h3>
                    </div>
                         
                            
                
                              <div id="ember1172" class="ember-view">  <div id="ember1181" class="ember-view"><div id="ember1190" class="__shared-presentation__cta-games__base__950b4 ember-view"><!---->
                  <button class="button expanded desktop-cta desktop-cta--add-to-cart desktop-cta--vertical-stack">
                      
                      <!--<a href="<?php // echo $this->base_url ?>Juego/addToCarrito <?php //echo $joj?>"></a> -->
                    <div class="desktop-cta__title">
               
                      Adicionar ao carrinho
                    </div>
                  </button>
                  </div>
                  </div>
                  </div>
                  </div>
                          <div class="content-rating">
                              <img src="https://cdn-a.sonyentertainmentnetwork.com/grc/images/ratings/hd/djctq/16.png" class="content-rating__rating-img">
                            <div class="content-rating__descriptors">
                              <ul class="content-rating__descriptors--list">
                             </ul>
                           </div>
                          </div>
                          <div class="tech-specs">
                            <div class="tech-specs__header">Detalhes</div>
                            <div class="tech-specs__pivot-menus">
                                <div class="tech-specs__menu-header">
                                  Gênero
                                </div>
                                <ul>
                                  <li class="tech-specs__menu-items" style="direction:ltr">Terror</li>
                                </ul>
                               <div class="tech-specs__menu-header">
                                  Tamanho do arquivo
                                </div>
                                <div class="tech-specs__menu-items">
                                  23.22 GB
                                </div>
                  
                              <div id="ember969" class="__desktop-presentation__product-detail__details-list__23fd5 ember-view"><!----></div>
                            </div>
                          </div>
                        <div class="pdp__awards-list"> 
                  
                        </div>
                      </div>
                    </section>
                   
                
                </div>
                <section id="descrip">
                    <div class="pdp__description">
                        <h4>Descrição</h4>
                
               
                        <p style="direction:ltr"><?php echo $joj->getDescripcion();?></p>
                
                    </div>
                </section>
                        <script>

                          var myIndex = 0;
                          carousel();
                          
                          function carousel() {
                            var i;
                            var x = document.getElementsByClassName("mySlides");
                            for (i = 0; i < x.length; i++) {
                              x[i].style.display = "none";  
                            }
                            myIndex++;
                            if (myIndex > x.length) {myIndex = 1}    
                            x[myIndex-1].style.display = "block";  
                            setTimeout(carousel, 2500);    
                          }
                          </script>
   
              
                      <footer>
                            <section id="conta">
                            <h3 id="footer_h">CONTA</h3>
                            <p>Gerenciar conta</p>
                            </section>
                            <section id="legal">
                            <h3 id="footer_h">LEGAL</h3>
                            <p>Termos de serviço</p>
                            <p>Licenças de código aberto</p>
                            <p>Política de privacidade</p>
                            <p>Avisos sobre saúde</p>
                            <p>Entre em contato</p>
                            <p>Mais ...</p>
                            </section>
                            <section id="contacto">
                            <div class="snei-column-sen">  
                                <ul class="snei-list">  
                                <li> <a href="https://www.playstationnetwork.com/pt-br/about-us/" target="_blank">
                                Sobre nós
                                </a>
                                </li>  
                                <li> <a href="http://suporte.br.playstation.com/" target="_blank">Suporte</a> 
                                </li>
                                </ul>  
                                <div class="snei-social">  
                                <a href="#" title="Twitter"> 
                                <img src="https://logosmarcas.com/wp-content/uploads/2018/05/Twitter-logo.png" width="15%" height="15%">
                                
                                </a>   
                                <a href="#" title="Facebook"> 
                                <img src="https://image.flaticon.com/icons/svg/733/733547.svg" width="15%" height="15%">
                                </a> 
                                   <a href="#" title="YouTube" class="snei-social-youtube" target="_blank"> 
                                <img src="https://logodownload.org/wp-content/uploads/2014/10/youtube-logo-8.png" width="30%" height="15%"></a>  </div>  </div>
                            </section>
                        </footer>

</body>
</html>