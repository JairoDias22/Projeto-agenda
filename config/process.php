<?php 
include "conection.php";

//iniciando a session
session_start();

//logica de verifcação para verificar se o banco de dados tem algum contato
$id = 0;

$stmt = $conn->prepare("SELECT * FROM contatos WHERE id > :id");

$stmt->bindParam("id",$id);

$stmt->execute();

$data = $stmt->fetchALL(PDO::FETCH_ASSOC);

if (empty($data)){
   $data = "Não há contatos salvos!";
   $link = "Clique aqui para adicionar!";
}
else{
    $data = "";
    $link = "";
}



// Buscar dados atuais e mostra-los na pagina inicial
$sql = "SELECT * FROM contatos WHERE id > :id";

// botão de ordenação
if (isset($_GET['ordem']) && $_GET['ordem'] === 'az') {
    $sql .= " ORDER BY nome ASC";
}

$stmt2 = $conn->prepare($sql);
$stmt2->execute([':id' => $id]);
$mostrarContato = $stmt2->fetchAll(PDO::FETCH_ASSOC);



// Mostrar os dados do contato selecionado

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$stmt5 = $conn->prepare("SELECT * FROM contatos WHERE id = :id");
$stmt5->execute([':id' => $id]);
$contatos = $stmt5->fetch(PDO::FETCH_ASSOC);


//verificar a existencia de um parametro na URL
if(isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    $action = null;
}


// Atualizar contatos
if(isset($_POST['nome'])) {

    $sql = $conn->prepare("
        UPDATE contatos 
        SET nome = :nome, telefone = :telefone, comentario = :comentario
        WHERE id = :id
    ");

    $sql->execute([
        ':nome' => $_POST['nome'],
        ':telefone' => $_POST['telefone'],
        ':comentario' => $_POST['comentario'],
        ':id' =>  $id
    ]);

    $_SESSION['alert'] = "Contato atualizado com sucesso";

    header("Location: http://localhost/Projeto-agenda/index.php");

 
}


//Logica para adicionar contatos ao banco de dados
if($action === "create") {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $comentario = $_POST['comentario'];

    $stmt1 = $conn->prepare("
        INSERT INTO contatos (nome, telefone, comentario) 
        VALUES (:nome, :telefone, :comentario)
    ");

    $stmt1->execute([
        ':nome' => $_POST['nome'],
        ':telefone' => $_POST['telefone'],
        ':comentario' => $_POST['comentario']
    ]);

    $_SESSION['alert'] = "Contato adicionado";

    header("Location: http://localhost/Projeto-agenda/index.php");
    exit;

}



//Deletar contatos
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    $stmt = $conn->prepare("DELETE FROM contatos WHERE id = :id");

    $stmt->execute([
        ':id' => $id
    ]);

      $_SESSION['alert'] = "Contato Excluido";

    header("Location: http://localhost/Projeto-agenda/index.php");
    exit;
    
     
}

?>

