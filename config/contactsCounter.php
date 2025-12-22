<?php
include_once('conection.php');

//mostrar a quantidade de contatos
$stmt = $conn->prepare("SELECT COUNT(*) AS total FROM contatos");
$stmt->execute();
$total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

?>