<!-- Header -->
<?php 

    include_once ("templates/header.php");   
    include_once ("config/process.php");
    

//buscar cada um dos ids para tualizar os dados    
$id = $_GET['id'];

$stmt5 = $conn->prepare("SELECT * FROM contatos WHERE id = :id");
$stmt5->execute([':id' => $id]);
$contatos = $stmt5->fetch(PDO::FETCH_ASSOC);

?>

<main>
<!--Formulario para atualizar dados-->
<div class="container">
      
<div class="container d-flex justify-content-center align-items-center min-vh-100">

  <div class="card shadow-lg" style="max-width: 500px; width: 100%; border-radius: 12px;">
    <div class="card-body">

   
      <!-- Botão Voltar -->
      <?php include_once ("templates/bacbtn.php"); ?>
    

      <!-- Título -->
      <h4 class="text-center mb-4" style="color: #09004d;">
        Editar informações do contato
      </h4>

      <!-- Formulário -->
      <form action="" method="POST">

        <div class="mb-3">
          <label class="form-label fw-semibold" style="color: #09004d;"> Nome do contato </label>
          <input type="text" class="form-control rounded-3" name="nome" value="<?=$contatos['nome']?>" required >
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold" style="color: #09004d;"> Telefone </label>
          <input type="text"class="form-control rounded-3" name="telefone" value="<?=$contatos['telefone']?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold" style="color: #09004d;"> Observações </label>
          <textarea 
            class="form-control rounded-3" name="comentario" rows="3" maxlength="60" ><?=$contatos['comentario']?></textarea>
        </div>

        <!-- Botão Atualizar -->
        <button 
          type="submit" class="btn w-100 text-white fw-semibold" style="background-color: #09004d;" > Atualizar contato
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