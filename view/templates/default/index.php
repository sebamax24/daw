
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
    <section id="imagen2">
    <div class="juegos">
        <div class="juego">
            <div>
                <a href="<?php echo $this->base_url ?>Juego">
                <img src="https://store.playstation.com/store/api/chihiro/00_09_000/container/BR/pt/999/UP0102-CUSA09193_00-BH2R000000000001/1565050627000/image?w=124&amp;h=124&amp;bg_color=000000&amp;opacity=100&amp;_version=00_09_000" >
            </a>
            </div>
            
        </div>
            <div class="body">
                <div  class="title ">
                    <span>Resident Evil 2 Remake</span>
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
    <section id="imagen3">
    <div class="juegos">
        <div class="juego">
            <div>
                <a href="<?php echo $this->base_url ?>Juego3">
                <img src="https://store.playstation.com/store/api/chihiro/00_09_000/container/BR/pt/999/UP9000-CUSA08966_00-DAYSGONEDGDELUXE/1565108023000/image?w=124&h=124&bg_color=000000&opacity=100&_version=00_09_000" >
                </a>
                    </div>
            
        </div>
            <div class="body">
                <div  class="title ">
                    <span>Days Gone: Digital Deluxe Edition</span>
                </div>
                <div class="precio">
                    Jogo completo
                    PS4
                    <span>
                        <h3>R$249,90</h3>
                    </span>
                </div>
            </div>
    </div>
   </section>
    <section id="imagen4">
    <div class="juegos">
        <div class="juego">
            <div>
                <a href="<?php echo $this->base_url ?>Juego4">
                <img src="https://store.playstation.com/store/api/chihiro/00_09_000/container/BR/pt/999/UP2047-CUSA11408_00-METROEXODUSDELUX/1565053365000/image?w=124&h=124&bg_color=000000&opacity=100&_version=00_09_000" >
           
                </a>
            </div>
            
        </div>
            <div class="body">
                <div  class="title ">
                    <span>Metro Exodus: Gold Edition</span>
                </div>
                <div class="precio">
                    Jogo completo
                    PS4
                    <span>
                        <h3>R$325,90</h3>
                    </span>
                </div>
            </div>
    </div>
   </section>    
    <section id="imagen5">
    <div class="juegos">
        <div class="juego">
            <div>
                <a href="<?php echo $this->base_url ?>Juego5">
                <img src="https://store.playstation.com/store/api/chihiro/00_09_000/container/BR/pt/999/UP9000-CUSA07408_00-00000000GODOFWAR/1560819816000/image?w=124&h=124&bg_color=000000&opacity=100&_version=00_09_000" >
                </a>
            </div>
            
        </div>
            <div class="body">
                <div  class="title ">
                    <span>God of War</span>
                </div>
                <div class="precio">
                    Jogo completo
                    PS4
                    <span>
                        <h3>R$143,50</h3>
                    </span>
                </div>
            </div>
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
