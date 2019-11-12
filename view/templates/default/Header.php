<html>
<head>
        <meta charset="UTF-8">

<style>

</style>
<link rel="stylesheet" href="<?php echo $this->asset; ?>css/css.css">
<link rel="stylesheet" href="<?php echo $this->asset; ?>fonts/style.css">          

</head>
<body>
    <header>
        <nav id="menu">
            <ul>
                <li><a href=”#”>Subscripción Premium</a></li>
                <li><a href=”#”>Ofertas Semanales</a></li>
				<li id="ini"><a href="<?php echo $this->base_url ?>Admin">Iniciar Sesión</a></li>
				<li> <a href="<?php echo $this->base_url ?>carrito"><i class='icon-shopping-cart'></i></a></li>
                <li><a href=cadastro.html>Cadastrarse</a></li>
				<form action="" class="search">
	<input id="submit" value="" type="submit">
	<label for="submit" class="submit"></label>
	
	
	<a href="javascript: void(0)" class="icon"></a>
	<input type="search" name="Search" id="search" placeholder="Search">
</form>
			</ul>
        </nav>
    </header>
    
	<section class="slider">
		<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides w3-animate-right" width="1000px" height="300px" src="<?php echo $this->asset; ?>assets/cod.jpg">
        <img class="mySlides w3-animate-right" width="1000px" height="300px" src="<?php echo $this->asset; ?>assets/fifa.jpg">
        <img class="mySlides w3-animate-right" width="1000px" height="300px" src="<?php echo $this->asset; ?>assets/skyrim.jpg">
        <img class="mySlides w3-animate-right" width="1000px" height="300px" src="<?php echo $this->asset; ?>assets/border.jpg">
 
   
  </div>

        
       
    </section>
    <section class="left-panel">
        <h2 class="listTitle">Em destaque</h2>
        <ul class="list">

            <a>Novidades da Semana</a>
            <p></p>
            <a>Novidades do Mês</a>
            <p></p>
            <a>Em breve</a>
            <p></p>
            <a>Todas As Promoções</a>

        
        </ul>
    </section>