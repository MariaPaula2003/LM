<div class="subtopo">
            <h1 class="titulo">Cadastro</h1>
          </div>



        <form action="" method="POST">

<div class="grid-x grid-padding-x">
    <div class="small-3 cell">
      <p for="left-label" class="text-right middle">Nome:</p>
             </div>

      <div class="small-6 cell">
        <input type="text" name="nome" value="<?=@$cliente['nome']?>" id="middle-label" placeholder="Ex: ModasLM">
     </div>
        </div> 
    
<div class="grid-x grid-padding-x">
    <div class="small-3 cell">
            <p for="left-label" class="text-right middle">Email:</p>
             </div>
      <div class="small-6 cell">
            <input type="text" name="email" value="<?=@$cliente['email']?>" id="middle-label" placeholder="Ex: modaslm@gmail.com">
        </div>
         </div> 
            
            
<div class="grid-x grid-padding-x">
    <div class="small-3 cell">
            <p for="left-label" class="text-right middle">CPF:</p>
             </div>
       <div class="small-6 cell">
            <input type="text" name="cpf" value="<?=@$cliente['cpf']?>" id="middle-label" placeholder="Ex: 10000000000">
        </div>
         </div>             

<div class="grid-x grid-padding-x">
    <div class="small-3 cell">
            <p for="left-label" class="text-right middle">Data de Nascimento:</p>
             </div>
      <div class="small-6 cell">
            <input type="date" name="dataNasc" value="<?=@$cliente['dataNasc']?>" id="middle-label" placeholder="Ex: 08/09/2000">
        </div>
         </div>               
     

<div class="grid-x grid-padding-x">
    <div class="small-3 cell">
      <p for="left-label" class="text-right middle">Sexo:</p>
    </div>
    <div class="small-6 cell">
      <select name="sexo" value="<?=@$cliente['sexo']?>">
            <option value=""></option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
            <option value="Outros">Outros</option>
            </select>
    </div>
  </div>
                
     <br>       
      <div class="grid-x grid-padding-x">
    <div class="small-3 cell">
      <p for="left-label" class="text-right middle">Senha:</p>
    </div>
    <div class="small-6 cell">
  <input type="password" name="senha" value="<?=@$cliente['senha']?>" id="middle-label" placeholder="1234">
    </div>
  </div>  
     
     <br>
     <?php if (acessoPegarPapelDoUsuario() == 'admin') { ?> 
      <div class="grid-x grid-padding-x">
    <div class="small-3 cell">
      <p for="left-label" class="text-right middle">Tipo de usuario:<br><br>  </p>
    </div>
    <div class="small-6 cell">
        <input type="radio" name="tipousuario" value="user" id="middle-label" placeholder="1234"><label>User</label>
  <input type="radio" name="tipousuario" value="user" id="middle-label" placeholder="1234"><label>Admin</label>
    </div>
  </div> 
     <?php }?>
   
           
            <p style="text-align:center;"><button class="hollow button" style="border: 1px solid #CC2EFA;color:#CC2EFA">Enviar</button></p> 
                <p style="text-align:center;"><a href="./endereco/adicionar">Cadastrar Endereço</a></p>

           
            
         
            <?php
            if(ehPost()){
                foreach($erros as $erro){
                    echo "$erro<br>";
                }
            }
            ?>
            
        </form>

                           
  


