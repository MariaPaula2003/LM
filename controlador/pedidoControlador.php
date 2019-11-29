<?php
require_once 'modelo/pedidoModelo.php';
require_once 'modelo/produtoModelo.php';
require_once 'modelo/cupomModelo.php';
require_once 'modelo/enderecoModelo.php';
require_once 'modelo/formadepagamentoModelo.php';    

function desconto(){
    $total = 0;
    $cod_cliente = acessoPegarUsuarioLogado();
    
    if(isset($_SESSION["carrinho"])) {  
    $cadastro_produto = $_SESSION["carrinho"];
    foreach ($cadastro_produto as $produto):
    $prod =  pegarProdutoPorId($produto);
    $todos[] = $prod;
    $total = $total + $prod['preco'];
    endforeach;
    } else {
      $todos[] = 0; 
      //echo "Carrinho vazio!";
    }
    $dados = array();
    
    if(ehPost()){
       $id_cupom = $_POST["id_cupom"];
       $desconto = pegarCupomPorId($id_cupom);
       $desconto = $desconto['desconto']/100;
       
     $dados = [];
     $dados['enderecos'] = pegarEnderecosPorUsuario($cod_cliente);
     $dados['formasdepagamento'] = pegarTodasFormasDePagamento();
     $dados["produtos"] = $todos;
     $dados["total"] = number_format($total - ($total * $desconto),2);
     exibir("pedido/adicionar", $dados);
     
   }else{
   
   $dados = [];
   $dados["produto"] = $todos;
   $dados["total"] = $total; 
   $dados['enderecos'] = pegarEnderecosPorUsuario($cod_cliente);
   $dados['formasdepagamento'] = pegarTodasFormasDePagamento();
   exibir("pedido/adicionar", $dados);
   }
}

function salvarPedido(){
       $total = 0;
       $cod_cliente = acessoPegarUsuarioLogado();
       if(isset($_SESSION["carrinho"])) {  
        $cadastro_produto = $_SESSION["carrinho"];
        foreach ($cadastro_produto as $produto):
        $prod =  pegarProdutoPorId($produto);
        $todos[] = $prod;
        $total = $total + $prod['preco'];
        endforeach;
        } else {
          $todos[] = 0; 
          echo "Carrinho Vazio";
        }
        $dados = array();
        
   if(ehPost()){        
       $cod_formadepagamento = $_POST["cod_formadepagamento"];
       $logradouro = $_POST["logradouro"];
        
       $mensagem = salvaPedidos($cod_cliente, $cod_formadepagamento, $logradouro, $total, $todos);
       echo $mensagem;
       redirecionar("pedido/listarPedido"); 
       
   }else{
   
     $dados = [];
     $dados['enderecos'] = pegarEnderecosPorUsuario($cod_cliente);
     $dados['formasdepagamento'] = pegarTodasFormasDePagamento();
     $dados["produtos"] = $todos;
     $dados["total"] = $total;
     exibir("pedido/adicionar", $dados);
   
   }
   
}

function listarPedido(){
    $cod_cliente = acessoPegarUsuarioLogado();
    $dados = array();
    $dados["pedidos"] = listarPedidos($cod_cliente);
    exibir("pedido/listar", $dados);
}

function ver($id_pedido){
    $dados = array();
    $dados['pedido'] = selecionarPedido($id_pedido);
    $dados['produtos'] = pegarPedidoProdutos($id_pedido);
    exibir("pedido/visualizar", $dados);
}