<!-- Header -->
<?php
    include_once ("templates/header.php");   
    include_once ("config/process.php");
    include_once ("config/contactsCounter.php");

?>


<!-- Main -->
    <main>
        
        <div class="content">
            <!-- Título -->
            <h1 class="title">Agenda</h1>
            <h1 class="subtitle">Telefônica</h1>
        </div>

          <!-- Botões -->
        <div class="buttons">
            <a href="create.php" class="button">Adicionar contato</a>
        </div>
        
      <!-- Tabela de contatos -->
        <div class="container d-flex justify-content-center  mt-5">
         <div class="card p-4" style="max-width: 100vh; width: 100%; ">
            
          <table class="table  shadow-lg table-striped table-bordered">
            
            <!-- mensagem caso não haja contatos salvos -->
             <h2><?= $data; ?></h2><a href="http://localhost/Projeto-agenda/create.php"><?= $link?></a><br>
             
             
             <!-- Logica para mostrar informações de atualização,criação,delete -->
            <?php if (!empty($_SESSION['alert'])) : ?>
                <h1 class = "alerta" ><?= $_SESSION['alert']; ?></h1>
                <?php unset($_SESSION['alert']); ?>
                <?php endif; ?>

                 <!-- Botão para ordem alfabetica-->
                  <div class="d-flex justify-content-end mb-2">
                    <a href="?ordem=az" class="btn btn-primary btn-sm" style="width:90px; height:32px; padding:0;">
                        Ordenar A–Z
                    </a>
                  </div>
                <thead>
                <tr>
                
                    <!-- Cabeçalho da tabela -->
                    <th>Nome </th>
                    <th>Telefone</th>
                    <th>Observações</th>
                    <th>Contatos salvos: <?= $total ?></th>
                </tr>
            </thead>
           

            <tbody>
                <!-- Dados da tabela -->
                <?php foreach($mostrarContato as $contato): ?>
                <tr>
                    <td><?= $contato['nome'] ?></td>
                    <td><?= $contato['telefone'] ?></td>
                    <td><?= $contato['comentario'] ?></td>
                    <td>

                    <!-- Botões auxiliares da tabela  -->
                        <a href="show.php?id=<?= $contato['id'] ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="edit.php?id=<?= $contato['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="config/process.php?delete=<?= $contato['id'] ?>" class="btn btn-danger btn-sm">Excluir</a>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>

       
    </main>

    <!-- Rodapé -->
<?php
    include_once("templates/footer.php");
?>
