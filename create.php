<!-- Header -->
<?php 
    include_once ("templates/header.php");   
    include_once ("config/process.php");

?>

<main>
<!-- Tabela para adicionar contatos --> 
<div class="container">

<div class="container d-flex justify-content-center align-items-center min-vh-100">

  <div class="card shadow-lg" style="max-width: 500px; width: 100%; border-radius: 12px;">
    <div class="card-body">

      <!-- Botão Voltar -->
       <?php include_once ("templates/bacbtn.php"); ?>
    
      <!-- Título -->
      <h4 class="text-center mb-4" style="color: #09004d;">
        Cadastrar novo contato
      </h4>

      <!-- Formulário -->
      <form action="config/process.php?action=create" method="POST">

        <div class="mb-3">
          <label class="form-label fw-semibold" style="color: #09004d;"> Nome do contato </label>
          <input type="text" class="form-control rounded-3" name="nome" placeholder="Digite o nome do contato" required >
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold" style="color: #09004d;"> Telefone </label>
          <input type="text" class="form-control rounded-3" name="telefone" placeholder="Digite o telefone" required >
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold" style="color: #09004d;"> Observações </label>
          <textarea class="form-control rounded-3" name="comentario" rows="3" maxlength="60" placeholder="Insira observações sobre o contato: MAX 60 caracteres" ></textarea>
        </div>

        <!-- Botão Cadastrar -->
        <button type="submit" class="btn w-100 text-white fw-semibold" style="background-color: #09004d;">
          Cadastrar contato
        </button>

      </form>

    </div>
  </div>

</div>
</div>

</main>
<!-- Rodapé -->    
<?php
    include_once("templates/footer.php");
?>         