<?php
include_once('conexao.php'); // Inclua o arquivo de conexão aqui

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $funcao = $_POST['funcao'];
    $remuneracaobruta = $_POST['remuneracaobruta'];
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];

    try {
        // Preparar e executar a consulta de atualização
        $query = "UPDATE cadastro1 SET funcao = :funcao, remuneracaobruta = :remuneracaobruta, nome = :nome, cidade = :cidade WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':funcao', $funcao);
        $stmt->bindParam(':remuneracaobruta', $remuneracaobruta);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            echo "Dados atualizados com sucesso!";
        } else {
            echo "Erro ao atualizar dados.";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
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
