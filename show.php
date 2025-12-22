<!-- Header -->
<?php
  include_once ("templates/header.php");   
  include_once ("config/process.php");

?>

 <main>
 <!-- Tabela para mostrar as informações do contato selecionado -->
<body class="bg-light">

<div class="container my-5">

    <!-- Botão Voltar -->
    <?php include_once ("templates/bacbtn.php"); ?>
    
    <div class="card-show shadow-lg border-0">
        <div class="card-header bg-purple text-white text-center fw-bold">
            Informações do contato
        </div>

        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="text-start ps-4">Nome</th>
                    <th class="text-start">Telefone</th>
                    <th class="text-start">Observações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $contatos['nome'] ?></td>
                    <td><?= $contatos['telefone'] ?></td>
                    <td><?= $contatos['comentario'] ?></td>
                </tr>
            </tbody>
            </table>

        </div>
    </div>

</div>


</main>
<!-- Rodapé -->
<?php
    include_once("templates/footer.php");
?>