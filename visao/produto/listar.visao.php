<?php if (acessoPegarPapelDoUsuario() == 'admin') { ?>
<h2>Listar Produtos</h2>
       
   <table class="table">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Ver Detalhes</th>
                    <?php if (acessoPegarPapelDoUsuario() == 'admin') { ?> 
                       <th>ID</th>
                       <th>Deletar Produto</th>
                       <th>Editar Produto</th>
                    <?php } ?>
                </tr>
            </thead>
        <?php foreach ($produtos as $produto): ?> 
            <tr>
               <td><img src="<?=$produto['imagem']?>" alt="imagem"></td> 
               <td><?=$produto['nome']?></td>
               <td><a href="./produto/ver/<?=$produto['cod_produto']?>">Ver</a></td>
               <?php if (acessoPegarPapelDoUsuario() == 'admin') { ?> 
                <td><?=$produto['cod_produto']?></td>
               <td><a href="./produto/deletar/<?=$produto['cod_produto']?>">Deletar</a></td>
               <td><a href="./produto/editar/<?=$produto['cod_produto']?>">Editar</a></td>  
                    <?php } ?>
                 
     </tr>
        <?php endforeach; ?>
   </table> 
        <br>
        <?php if (acessoPegarPapelDoUsuario() == 'admin') { ?> 
                      <a href="./produto/adicionar" class="btn btn-primary">Novo Produto</a>     
        <?php } ?>
                      
<?php }else { ?>                     

 <div id="subtopo_inicial">
 </div>
    
<br>

<div class="row">
<fieldset class="Produtos" style="border-top: 1px solid #333;border-bottom: none; border-left: none;border-right: none;display: block;text-align: center;">
    <legend style="padding: 5px 10px;"><h1 class="titulo">Ofertas Imperdíveis</h1></legend>
</fieldset>  
<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="./publico/img/banner.jpg" style="width:100%;height:230px;">
  <img class="mySlides" src="./publico/img/banner1.png" style="width:100%;height:230px;">
  <img class="mySlides" src="./publico/img/banner2.jpg" style="width:100%;height:230px;">
  <img class="mySlides" src="./publico/img/banner3.jpg" style="width:100%;height:230px;">
  <div class="w3-center w3-container w3-section w3-large w3-text-black w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-pink" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-pink" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-pink" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-pink" onclick="currentDiv(4)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>


<br>

<div class="row">
 <fieldset class="Produtos" style="border-top: 1px solid #333;border-bottom: none; border-left: none;border-right: none;display: block;text-align: center;">
    <legend style="padding: 5px 10px;"><h1 class="titulo">Principais Produtos</h1></legend>
</fieldset>  
 </div> 
</div>                      
         
<div class="row small-up-2 medium-up-3 large-up-5">
    <?php foreach ($produtos as $produto): ?>
  <div class="column column-block">
     <a href="produto/ver/<?= $produto["cod_produto"] ?>"> <img src="<?=$produto["imagem"]?>" alt="imagem" class="thumbnail" style="width: 188.875px; height:188.875px"></a>
     <p class="titulo_image"><?= $produto["nome"] ?></p>
     <img src="./publico/img/5estrelas.png" style="width: 61px">
     <p class="preço">R$ <?= $produto["preco"] ?></p>
  </div>
    <?php endforeach; ?>
</div>     

<div class="row" style="border-top:solid; border-bottom:solid">
  <div class="columns small-4" style="text-align:left">
  <h3 >Ajuda<h3>
  <h6>Entregas</h6>
  <h6>Cancelamentos</h6>
  <h6>Pagamento</h6>
  <h6>Trocas</h6>
  <h6>Pedidos</h6>
  <h6>Descontos</h6>
  <span class=hide-for-small-only</span></div>
  <div class="columns small-4" style="text-align:center">
  <h3 >Serviços<h3>
  <a href="./cliente/contato"><h6>Fale conosco</h6></a>
  </div>
  <div class="columns small-4" style="text-align:right">
  <h3 >Redes Sociais<h3>
  <i class="fi-social-facebook"></i>
  <i class="fi-social-twitter"></i>
  <i class="fi-social-instagram"></i>
  <i class="fi-social-pinterest"></i>
  
  <br>
  <br>
  
 <h5><i class="fi-mobile" style="font-size:30px;margin-right:10px;"></i>Mobile Site</h5>
  
  </div>
</div>

<div>
<br>
</div>

<div class="row" style="border-top:solid; border-bottom:solid">
 <div class="columns small-6">
<img src="./publico/img/cartoes.png">
</div>
<div id="certificado" class="columns small-6"style="text-align:right;">
<p><img src="./publico/img/certificado.jpg" alt="" width="70" height="70">Certificado de segurança</p>
</div>
</div>
<div>
<br>
</div>
</div>

<?php } ?>




         
