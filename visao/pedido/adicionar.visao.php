<h2>Selecione cupom</h2> 
<form action="pedido/desconto" method="POST">
Digite o código de seu cupom ou vale: <input type="text" name="id_cupom">
<button type="submit">Calcular</button>
</form>  

<h2>Pedidos</h2>

<form action="pedido/salvarPedido" method="POST">
<h2>Selecione o endereço</h2> 
Endereços: <select name="logradouro">
<option value="default"></option>
<?php foreach ($enderecos as $endereco): ?>
<option value="<?=$endereco["idEndereco"]?>"><?=$endereco["logradouro"]?></option>
<?php endforeach;?>
</select> 

<h2>Selecione a forma de pagamento</h2> 
FormasDePagamento: <select name="cod_formadepagamento">
<option value="default"></option>
<?php foreach ($formasdepagamento as $formadepagamento): ?>
<option value="<?=$formadepagamento["cod_formadepagamento"]?>"><?=$formadepagamento["descricao"]?></option>
<?php endforeach;?>
</select>

<h2>Produtos</h2>
<?php foreach ($produtos as $produto) : ?>
<p><a href="produto/ver/<?=$produto['cod_produto']?>"><?= $produto['nome']?><br><img src="<?=$produto['imagem']?>" alt=""></a></p>
<p>R$ <?= number_format($produto["preco"],2) ?></p>
<?php endforeach; ?>


<p>Total: <?=$total?></p>

<br><br>
<button type="submit">Finalizar</button>
</form>

<?php foreach ($produtos as $produto) : ?>
<div class="row" style="border-bottom:solid; margin-bottom:2%;">
  <div class="columns small-6"><h5>Produto</h5></div>
  <div class="columns small-6"><h5 style="float:right;">Preço</h5></div>
</div>
<div class="row" style="border-bottom:solid; padding-bottom:2%;">
  <div class="columns small-6">
  <img src="<?=$produto['imagem']?>" alt="Vazio!" width="70px" height="70px" style="float:left;margin-right:2%;">
  <h4><a href="produto/ver/<?= $produto['cod_produto']?>"><?= $produto['nome']?></a></h4>
  </div>
  <div class="columns small-6">
<h4 style="float:right;">R$<?= $produto['preco']?></h4>
  </div>
    </div>
<br><br>
<?php endforeach; ?>

<div class="row">
  <div class="columns small-6">
     <form action="pedido/desconto" method="POST">
  <h5>Digite o código de seu cupom ou vale:</h5>
 <form>
    <div class=" small-6">
      <input type="text" name="id_cupom" id="left-label" placeholder="">
    </div>
  <button class="hollow button" href="#" style="border: 1px solid #CC2EFA;color:#CC2EFA" >Calcular</button>
  </form> 
  </div>

    
<form action="pedido/salvarPedido" method="POST"> 
  <div class="columns small-6">
  <h5 style="text-align:center;">Finalizar</h5>
  <form>
  <div class="grid-x grid-padding-x">
    <div class="small-3 cell">
      <label for="middle-label" class="text-right middle">Forma de Pagamento:</label>
    </div>
    <div class="small-7 cell">
      <select name="cod_formadepagamento">
<option value="default"></option>
<?php foreach ($formasdepagamento as $formadepagamento): ?>
<option value="<?=$formadepagamento["cod_formadepagamento"]?>"><?=$formadepagamento["descricao"]?></option>
<?php endforeach;?>
</select>
    </div>
  </div>
  <div class="grid-x grid-padding-x">
    <div class="small-3 cell">
      <label for="middle-label" class="text-right middle">Endereços:</label>
    </div>
    <div class="small-7 cell">
<select name="logradouro">
<option value="default"></option>
<?php foreach ($enderecos as $endereco): ?>
<option value="<?=$endereco["idEndereco"]?>"><?=$endereco["logradouro"]?></option>
<?php endforeach;?>
</select> 
    </div>
  </div>
  <div class="grid-x grid-padding-x">
    <div class="small-3 cell">
      <label for="middle-label" class="text-right middle"></label>
    </div>
    <div class="small-7 cell">
      <p>Total: <?=$total?></p>
  <p style="text-align:center;"><button class="hollow button" href="#" style="border: 1px solid #CC2EFA;color:#CC2EFA" >Finalizar</button></p>
  </form>
</div>
</div>