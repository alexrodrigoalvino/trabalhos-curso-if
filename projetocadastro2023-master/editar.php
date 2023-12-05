<?php
include_once('conexao.php'); // Inclua o arquivo de conexão aqui

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buscar os dados do registro pelo ID
    $query = "SELECT * FROM cadastro1 WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        echo "Registro não encontrado.";
        exit();
    }

    // Exibir o formulário de edição
    echo "Editar Registro:<br>";
    echo "<form method='POST' action='atualizar.php'>";
    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
    echo "Função: <input type='text' name='funcao' value='" . $row['funcao'] . "'><br>";
    echo "Nome: <input type='text' name='nome' value='" . $row['nome'] . "'><br>";
    echo "Cidade: <input type='text' name='cidade' value='" . $row['cidade'] . "'><br>";
    echo "<input type='submit' value='Atualizar'>";
    echo "</form>";
}
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::COPS UFLA::</title>
    <link href="css/styles.css" rel="stylesheet">
</head>

    <header class="header">
        <p style="font-size: 12px;">:: COPS - Coordenadoria Geral de Processos Seletivos - UFLA ::</p>
    </header>
