<?php
//Mensagem
include_once 'mensagem.php';
//Conexão
include_once 'db_connect.php';

//Cabeçalho
include_once 'header.php';
?>

       

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth"> Clientes </h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome: </th>
                    <th>Sobrenome: </th>
                    <th>Email: </th>
                    <th>Idade: </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM clientes";
                $busca = mysqli_query($connect, $sql);

                if(mysqli_num_rows($busca) > 0):

                while($dados = mysqli_fetch_array($busca)):
            ?>
                <tr>
                    <td> <?php echo $dados['nome']; ?></td>
                    <td> <?php echo $dados['sobrenome']; ?> </td>
                    <td> <?php echo $dados['email']; ?> </td>
                    <td> <?php echo $dados['idade']; ?> </td>
                    <td> <a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating green"><i class="material-icons">edit</i></a>
                    
                    <td> <a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a>

             <!-- Estrutura -->
             <div id="modal<?php echo $dados['id']; ?>" class="modal">
    <div class="modal-content">
      <h4>Atenção</h4>
      <p>Tem certeza que deseja excluir esse cliente?</p>
    </div>
    <div class="modal-footer">
     

      <form action="deletar.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
      <button type="submit" name="btn-deletar" class="btn red"> Sim, Deletar </button>
      </form>

    </div>
  </div>

                </tr>
             <?php
                endwhile;
            else:?>
                <tr>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                </tr>
            <?php
            endif;

             ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn"> Adicionar Clientes </a>
    </div>
</div>

<?php
include_once 'footer.php';
?>

    