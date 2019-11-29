<br><h3>listar Pedidos por Municipio</h3>
<table class="table" border="1">
	<thead>
		<tr>
			<th>Data da Compra</th>
			<th>Total</th>
                        <th>Cidade</th>
		</tr>
	</thead>
        <?php $cid = "";
		 foreach ($admin as $pedido): ?>
			<tr>
                            <td><?php if($pedido["cidade"] != $cid){
                          echo $pedido["cidade"];
                      }else{
                          echo "      ";
                      }
                      $cid = $pedido["cidade"];?></td>
                            <td><?=$pedido['datacompra']?></td><br>
                            <td><?=$pedido['total']?></td>
			</tr>
		<?php endforeach; ?>
</table>
