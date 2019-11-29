<div class="col-25">
    <div class="container">
        <h4 style="font-size: 30px; color: black">Meu carrinho <span class="price" style="color: black"></span></h4>
        <?php foreach ($produtos as $produto) : ?>
        <div class="produto-lista">
        <p><a href="produto/ver/<?= $produto['cod_produto']?>"><img src="<?=$produto['imagem']?>" alt="imagem"><?= $produto['nome']?>
        </a><span class="price" style= margin-left:2% >R$<?= $produto['preco']?></span><a href="sacola/remover/<?=$produto['cod_produto']?>" style= margin-left:2%> Retirar do carrinho</a></p>
        </div>
        <?php endforeach; ?>
        <hr>
        <a href="sacola/limpar">Limpar Carrinho</a><br>
        <a href="produto/listarProdutos">Continuar Comprando</a>
        <p>Total <span class="price" style="color:black"><b>R$ <?= $total?></b></span></p>
        <br>
        <a href="pedido/salvarPedido" class="btn btn-primary">Finalizar Compra</a>       

    </div>
</div>


<div class="subtopo">
    <h1 class="titulo">Carrinho</h1>
</div>

<br>

    <?php foreach ($produtos as $produto) : ?>
<div class="row" style="border-bottom:solid; margin-bottom:2%;">
  <div class="columns small-6"><h5>Produto</h5></div>
  <div class="columns small-2"><h5>Qtd</h5></div>
  <div class="columns small-2"><h5 style="float:right;">Preço</h5></div>
   <div class="columns small-2"></div>
</div>
<div class="row" style="border-bottom:solid; padding-bottom:2%;">
  <div class="columns small-6">
  <img src="<?=$produto['imagem']?>" alt="imagem" width="70px" height="70px" style="float:left;margin-right:2%;">
  <h4><a href="produto/ver/<?= $produto['cod_produto']?>"><?= $produto['nome']?></a></h4>
  <h6>Vendido e entregue por: MODAS LM</h6>
  </div>
  <div class="columns small-2">
  <select name="select">
  <option value="valor1" selected>1</option> 
  <option value="valor2" >2</option>
  <option value="valor3">3</option>
</select>
  </div>
   <div class="columns small-2">
   <h4 style="float:right;">R$<?= $produto['preco']?></h4>
   </div>
    <div class="columns small-2">
   <h4 style="float:right;"><a href="sacola/remover/<?=$produto['cod_produto']?>" style= margin-left:2%> Remover</a></h4>
   </div>
</div>
<br><br>
    <?php endforeach; ?>

<a href="sacola/limpar">Limpar Carrinho</a><br>
        <a href="produto/listarProdutos">Continuar Comprando</a>
        <p>Total <span class="price" style="color:black"><b>R$ <?= $total?></b></span></p>
        <br>
        <a href="pedido/salvarPedido" class="btn btn-primary">Finalizar Compra</a>    