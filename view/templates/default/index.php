
    <section id="imagen1">

    <div class="juegos">
        <div class="juego">
            <div>
                    <a href="<?php echo $this->base_url ?>Juego2">
                <img href="#" src="https://store.playstation.com/store/api/chihiro/00_09_000/container/BR/pt/18/UP1004-CUSA03041_00-REDEMPTION000002/1561947428000/image?w=124&amp;h=124&amp;bg_color=000000&amp;opacity=100&amp;_version=00_09_000">
                        </a>
            </div>
            
        </div>
            <div class="body">
                <div  class="title ">
                    <span>Red Dead Redemption 2</span>
                </div>
                <div class="precio">
                    Jogo completo
                    PS4
                    <span>
                        <h3>R$248,99</h3>
                    </span>
                </div>
            </div>
    </div>
   </section>
 <?php 
    $i=2;
    foreach($data['juezgo'] as $joj):?>    
    <section id="imagen<?php echo $i; ?>">
    <div class="juegos">
        <div class="juego">
              
            <div>
                <a href="<?php echo $this->base_url ?>Juego/ViewJuego/<?php echo $joj->getId_juego();?>">
                <img src="<?php echo $this->base_url."view/templates/default/img/".$joj->getImg();?>" width="124" height="124">
            </a>
            </div>
            
        </div>
            <div class="body">
                <div  class="title ">
                    <span><?php echo $joj->getNombre();?></span>
                </div>
                <div class="precio">

                    Jogo completo
                    PS4
                    <span>
                        <h3>R$<?php echo $joj->getPrecio();?></h3>
                    </span>
                </div>
            </div>

    </div>
   </section>


<?php $i++; endforeach;?>

   

    
    
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
